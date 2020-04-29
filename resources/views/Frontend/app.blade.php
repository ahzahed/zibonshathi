<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <title>@yield('title')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="{{ asset('Frontend/css/bootstrap.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('Frontend/css/all.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('Frontend/css/pro-bars.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('Frontend/css/slick.css') }}" />
    <link rel="stylesheet" href="{{ asset('Frontend/css/lightbox.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('Frontend/css/venobox.css') }}" />
    <link rel="stylesheet" href="{{ asset('Frontend/css/style.css') }}" />
    <link rel="stylesheet" href="{{ asset('Frontend/css/responsive.css') }}" />
  </head>

  <body data-spy="scroll" data-target=".navbar" data-offset="50">
    <!--Preloader part start -->
    <!-- <div class="preloader">
       <div class="load">
        <hr/><hr/><hr/><hr/>
       </div>
    </div> -->
    <!--Preloader part end -->

    

    @yield('hcontent')


    <script src="{{ asset('Frontend/js/jquery-1.12.4.min.js') }}"></script>
    <script src="{{ asset('Frontend/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('Frontend/js/jquery-ui.min.js') }}"></script>
    <script src="{{ asset('Frontend/js/typed.min.js') }}"></script>
    <script src="{{ asset('Frontend/js/visible.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('Frontend/js/pro-bars.js') }}" type="text/javascript"></script>
    <script src="{{ asset('Frontend/js/slick.min.js') }}"></script>
    <script src="{{ asset('Frontend/js/particles.js') }}"></script>
    <script src="{{ asset('Frontend/js/app.js') }}"></script>
    <script src="{{ asset('Frontend/js/waypoints.min.js') }}"></script>
    <script src="{{ asset('Frontend/js/jquery.counterup.min.js') }}"></script>
    <script src="{{ asset('Frontend/js/isotope.pkgd.js') }}"></script>
    <script src="{{ asset('Frontend/js/lightbox.min.js') }}"></script>
    <script src="{{ asset('Frontend/js/jquery.mb.YTPlayer.min.js') }}"></script>
    <script src="{{ asset('Frontend/js/venobox.min.js') }}"></script>
    <script src="{{ asset('Frontend/js/custom.js') }}"></script>
    <script>
      $(".card__share > a").on("click", function (e) {
        e.preventDefault(); // prevent default action - hash doesn't appear in url
        $(this).parent().find("div").toggleClass("card__social--active");
        //            $(this).toggleClass('fa-share-alt');
      });
    </script>
  </body>
</html>
