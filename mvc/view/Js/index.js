    //modal
    var modal = document.getElementById("myModal");
    var span = document.getElementsByClassName("close")[0];
    setTimeout(function(){ 
        modal.style.display = "block";
    }, 300);
    span.onclick = function() {
        modal.style.display = "none";
    }
    window.onclick = function(event) {
        if (event.target == modal) {
            modal.style.display = "none";
        }
    }
    //end modal

    $(document).ready(function(){

        $("#toTop").click(function(){
            $("html").scrollTop(0);
        });

        $(window).scroll( function(){
            $('header').toggleClass('navigation-bar-scrolled', $(this).scrollTop() > $('video').height()-100 )
            $('.scrollToTop').toggleClass('toTop-scrolled', $(this).scrollTop() > $('video').height()-100 );
        });
        $('.slick').slick({
            dots: true,
            infinite: true,
            //autoplay: true,
            //autoplaySpeed: 2000,
        });
        AOS.init({
        duration: 800,
        once: true
        });
    }); 