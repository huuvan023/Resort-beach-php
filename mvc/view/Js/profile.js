//Handle password strength
$("#userPass").focus(function(){
  $("#passwordStrength").css("display","inline-block");
});
$("#userPass").blur(function(){
  $("#passwordStrength").css("display","none");
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
    
var ovlayChange = document.getElementById("ckbx");
function changeChecked() {
    ovlayChange.classList.add("checked");
    if ( ovlayChange.checked ) {
        document.getElementById("changePassword").style.display = "block";
    }
    else{
        document.getElementById("changePassword").style.display = "none";
    }
}
function onClose(){
    document.getElementById("ovlClose").style.display = " none ";
}
function onOpen() {
    document.getElementById("ovlClose").style.display = " block ";
}


//Handle toggle Collapse
var coll = document.getElementsByClassName("cardProfile");
var i;

for (i = 0; i < coll.length; i++) {
  coll[i].addEventListener("click", function() {
    console.log(coll.length)
    var content = this.nextElementSibling;
    if (content.style.maxHeight){
      content.style.maxHeight = null;
    } else {
      content.style.maxHeight = content.scrollHeight + "px";
    } 
  });
}
function handleToggle(name){
    console.log(name)
    var c = document.getElementById(name);
    c.style.maxHeight = null;
}
//Close room alert 
function closeRoomAlert(){
    var x = document.getElementById("booking-alert");
    x.style.display = "none";
}
//Check class exits. If exits, add style flex, justify and align item
if($(".roomEmpty").attr('class').indexOf('empty') > -1) {
    $(".booking-container").css("display","flex");
    $(".booking-container").css("justify-content","center");
    $(".booking-container").css("align-items","center");
    $("#booking-alert").css("display","block")
}
