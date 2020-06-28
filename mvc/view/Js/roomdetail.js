var preloader = document.getElementById("loading");
function loadFunction(){
    preloader.style.display = 'none';
};
$(document).ready(function(){
    $(window).scroll( function(){
        $('header').toggleClass('navigation-bar-scrolled', $(this).scrollTop() > $('.wrap-banner').height() )
    });
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