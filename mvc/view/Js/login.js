//Escape htmlSpecialChar
function escapeHtml(text) {
  var map = {
    '&': '&amp;',
    '<': '&lt;',
    '>': '&gt;',
    '"': '&quot;',
    "'": '&#039;'
  };
  
  return text.replace(/[&<>"']/g, function(m) { return map[m]; });
}


$(document).ready(function(){
//Handle password strength
$("#userPass").focus(function(){
    $("#passwordStrength").css("display","inline-block");
});
$("#userPass").blur(function(){
    $("#passwordStrength").css("display","none");
});

//Handle register form
$('#register').on('submit', function(event){
  event.preventDefault();
  $.ajax({
   url:"/WebProject-2020/Login/HandleRegister/",
   method:"POST",
   //hàm serialize lấy ra các thành phần trong form và mã hóa thành giá chuỗi
   data:$(this).serialize(),
   dataType:"json",
   beforeSend:function()
   {
    $('#registerBtn').attr('disabled','disabled');
    $('#registerBtn img').css("display","inline-block");
   },
   success:function(data)
   {
    $('#registerBtn').attr('disabled', false);
    if(data.success)
    {
     //grecaptcha.reset();
     //sử dụng sweetAlert
     swal({
        title: "Đăng kí thành công!",
        text: data.success,
        confirmButtonColor: '#04B404',
        confirmButtonText: 'Đăng nhập',
        closeOnConfirm: false,
        imageUrl:'/WebProject-2020/public/success.gif'
        //closeOnCancel: false
      },
      function(){
        window.location.href = "/WebProject-2020/Login/LoginPage/login";  
      });
    }
    if(data.fail)
    {
      swal({
        title: "Đăng kí thất bại!",
        text: data.fail,
        confirmButtonColor: '#DF013A',
        imageUrl: '/WebProject-2020/public/success.gif'
      });
    }
   }
  })
 });
});
//Check password strength
var pass = document.getElementById("userPass")
       pass.addEventListener('keyup',function(){
          checkPassword(pass.value);
      })
      function checkPassword(password){
        var strengthBar = document.getElementById("strength");
        var strength = 0;
        if(password.match(/[a-z]+/)){
          strength += 1;
        }
        if(password.match(/[A-Z]+/)){
          strength += 1;
        }
        if(password.match(/[#$^+=!*()@%&]+/)){
          strength += 1;
        }
        if(password.length > 5){
          strength += 1;
        }
        switch(strength){
          case 0 :
          strengthBar.value = 20;   
          break;
          case 1 :
          strengthBar.value = 40;
          break;
          case 2 :
          strengthBar.value = 60;
          break;
          case 3 :
          strengthBar.value = 80;
          break;
          case 4 :
          strengthBar.value = 100;
          break;
        }

      }
//Input animation
const inputs = document.querySelectorAll(".input");
function addcl(){
    let parent = this.parentNode.parentNode;
    parent.classList.add("befocus");
}

function remcl(){
    let parent = this.parentNode.parentNode;
    if(this.value == ""){
        parent.classList.remove("befocus");
    }
}
inputs.forEach(input => {
    input.addEventListener("focus", addcl);
    input.addEventListener("blur", remcl);
});
