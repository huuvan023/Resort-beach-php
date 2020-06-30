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
        slidesToScroll: 1
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