window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  // window.alert("test")
var height2 = document.getElementById("navnavnav").style.height;
if ( document.body.scrollTop > height2 || document.documentElement.scrollTop > height2) {
    document.getElementById("h").style.padding = "10px";
    document.getElementById("h").style.backgroundColor = " rgb(133, 133, 133) ";
    document.getElementById("h").style.boxShadow = "0px 6px 5px 3px rgba(0, 0, 0, 0.281);";
} else { 
    document.getElementById("h").style.padding = "25px";
    document.getElementById("h").style.backgroundColor = "rgb(255, 255, 255)";
    document.getElementById("h").style.boxShadow = "none";
    }
}

$(document).ready(function(){
    AOS.init({
    duration: 1200,
    once: true
    })
    //Handle nav resize
    $(window).scroll( function(){
        $('header').toggleClass('navigation-bar-scrolled', $(this).scrollTop() > $('.wrap-banner').height() - 20 );
    });
    //Handle find by price range
    $("#labelPrice").text( "$" + $("#inputPrice").val() );
    $("#inputPrice").change(function(){
        $("#labelPrice").text( "$" + $("#inputPrice").val() );
    });
    //Handle view by grid and list
    $("#listViewbtn").click(function(){
        $("#listView").removeClass("nonedisplay");
        $("#gridView").addClass("nonedisplay");
    });
    $("#gridViewbtn").click(function(){
        $("#listView").addClass("nonedisplay");
        $("#gridView").removeClass("nonedisplay");
    })
    //Slick
    $('.slick').slick({
        infinite: false,
        slidesToShow: 3,
        slidesToScroll: 2
    });
});
/*Modal booking room */
var modal = document.getElementById("myModal");
var btn = document.getElementById("bookingChoose");
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
btn.onclick = function() {
  modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
//Handle nav

 