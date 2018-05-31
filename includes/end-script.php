    <script src="owl/assets/js/jquery-1.9.1.min.js"></script>
    <script src="owl/owl-carousel/owl.carousel.js"></script>

    <script>

      $(document).ready(function($) {
        $("#owl-example").owlCarousel();
      });


      $("body").data("page", "frontpage");

    </script>

    <script>

        $(document).on('click', '.fa-bars', function (event) {
            $('nav').addClass('show-mmenu');
        });

        $(document).on('click', '.show-mmenu .fa-bars', function (event) {
            $('nav').removeClass('show-mmenu');
        });

    </script>
    <script>

        // $(document).on('click', '.dropdown-child', function (event) {
        //     $('.dropdown-child a').addClass('show');
        // });
        
        $(document).on('click', '.dropdown-child', function (event) {
           $('.dropdown-child').removeClass('show');

           $(this).addClass('show');
        });

        $(document).on('click', '.show', function (event) {
           $('.dropdown-child').removeClass('show');
           
        });
        
        $(window).scroll(function(){
          if ($(window).scrollTop() >= 102) {
            $('nav').addClass('fixed');
           }
           else {
            $('nav').removeClass('fixed');
           }
        })
        
        $(window).scroll(function(){
          if ($(window).scrollTop() >= 400) {
             $('#back-to-top').fadeIn(200);    
            } else {
              $('#back-to-top').fadeOut(200);   
            }
        })

        $('#back-to-top').click(function() {      
          $('body,html').animate({
              scrollTop : 0                       
          }, 500);
        });
    </script>


    

    <div id="fb-root"></div>
    <script>(function(d, s, id) {
      var js, fjs = d.getElementsByTagName(s)[0];
      if (d.getElementById(id)) return;
      js = d.createElement(s); js.id = id;
      js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.5";
      fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>


    <script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
    <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.12.0.min.js"><\/script>')</script>
    <script src="js/plugins.js"></script>
    <script src="js/main.js"></script>


    <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
    <script>
        (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
        function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
        e=o.createElement(i);r=o.getElementsByTagName(i)[0];
        e.src='https://www.google-analytics.com/analytics.js';
        r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
        ga('create','UA-XXXXX-X','auto');ga('send','pageview');
    </script>