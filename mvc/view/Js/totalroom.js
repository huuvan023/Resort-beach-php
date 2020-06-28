var preloader = document.getElementById("loading");
function loadFunction(){
    preloader.style.display = 'none';
};
$(document).ready(function(){
    AOS.init({
    duration: 1200,
    once: true
    })
    $(window).scroll( function(){
        $('header').toggleClass('navigation-bar-scrolled', $(this).scrollTop() > $('.wrap-banner').height() - 50 );
    });
    $("#labelPrice").text( "$" + $("#inputPrice").val() );
    $("#inputPrice").change(function(){
        $("#labelPrice").text( "$" + $("#inputPrice").val() );
    });
    $("#listViewbtn").click(function(){
        $("#listView").removeClass("nonedisplay");
        $("#gridView").addClass("nonedisplay");
    });
    $("#gridViewbtn").click(function(){
        $("#listView").addClass("nonedisplay");
        $("#gridView").removeClass("nonedisplay");
    })
});