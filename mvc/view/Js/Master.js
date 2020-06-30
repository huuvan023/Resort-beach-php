//Loading handle
var preloader = document.getElementById("loading");
function loadFunction(){
    preloader.style.display = 'none';
};
$(document).ready(function(){
    //handle header
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
    //*end handle header
}); 
