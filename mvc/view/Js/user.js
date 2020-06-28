var preloader = document.getElementById("loading");
function loadFunction(){
    preloader.style.display = 'none';
};
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
$(document).ready(function(){
    $("#accBtn").click(function(){
        $(".login-btn > div ").toggleClass("accOptionNone");
    });
    $("#bell").click(function(){
        $(".notification_dd").toggleClass("active");
        //Handle allow 1 pop up appear in screen
        $(".profile_dd").addClass("active2");

        
    });
    $(".profile").click(function(){
        $(".profile_dd").toggleClass("active2");
        //Handle allow 1 pop up appear in screen
        $(".notification_dd").removeClass("active");
       
    });
}); 


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