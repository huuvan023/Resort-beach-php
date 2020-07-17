//addListController.js
console.log("đấ")
function onDelete($id){
  console.log($id);
};
/*$.ajax({
    url: escapeHtml("/WebProject-2020/Login/resetPass"),
    method:"POST",
    data:$(this).serialize(),
    dataType:"json",
    beforeSend:function()
    {
     $('#loginBtn').attr('disabled','disabled');
    },
    success:function(data)
    {
      console.log(data);
     if(data.success)
     {
      //sử dụng sweetAlert
      swal({
         title: "Cài lại mật khẩu thành công!",
         text: "Mật khẩu đã gửi vào email của bạn, vui lòng kiểm tra mail",
         confirmButtonColor: '#04B404',
         confirmButtonText: "Trở lại",
         closeOnConfirm: false,
         imageUrl: '/WebProject-2020/public/success.gif',
       },
      function(){
        window.location.href = "/WebProject-2020/Login/LoginPage/resetPass";  
      });
     }
     if(data.fail)
     {
       swal({
         title: "Đặt lại mật khẩu thất bại!",
         text: data.fail,
         confirmButtonColor: '#DF013A',
         imageUrl: '/WebProject-2020/public/fail.gif'
       });
     }
 
    }
   })*/