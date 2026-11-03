<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Page Title -->
    <title>{{ config('app.name', 'Laravel') }}</title>
    <!-- Favicon Icon -->
    <link rel="shortcut icon" type="image/x-icon"
        href="{{ asset(!\App::environment('local') ? 'public' : '' . 'storage/home/assets/images/logo_blanc.png') }}">
    <!-- Google Fonts Css-->
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,opsz,wght@0,9..40,100..1000;1,9..40,100..1000&amp;family=Manrope:wght@200..800&amp;display=swap"
        rel="stylesheet">
    <!-- Bootstrap Css -->
    <link href="{{ asset(!\App::environment('local') ? 'public' : '' . 'storage/home/assets/css/bootstrap.min.css') }}"
        rel="stylesheet" media="screen">
    <!-- SlickNav Css -->
    <link href="{{ asset(!\App::environment('local') ? 'public' : '' . 'storage/home/assets/css/slicknav.min.css') }}"
        rel="stylesheet">
    <!-- Swiper Css -->
    <link rel="stylesheet"
        href="{{ asset(!\App::environment('local') ? 'public' : '' . 'storage/home/assets/css/swiper-bundle.min.css') }}">
    <!-- Font Awesome Icon Css-->
    <link href="{{ asset(!\App::environment('local') ? 'public' : '' . 'storage/home/assets/css/all.css') }}"
        rel="stylesheet" media="screen">
    <!-- Animated Css -->
    <link href="{{ asset(!\App::environment('local') ? 'public' : '' . 'storage/home/assets/css/animate.css') }}"
        rel="stylesheet">
    <!-- Magnific Popup Core Css File -->
    <link rel="stylesheet"
        href="{{ asset(!\App::environment('local') ? 'public' : '' . 'storage/home/assets/css/magnific-popup.css') }}">
    <!-- Mouse Cursor Css File -->
    <link rel="stylesheet"
        href="{{ asset(!\App::environment('local') ? 'public' : '' . 'storage/home/assets/css/mousecursor.css') }}">
    <!-- Main Custom Css -->
    <link href="{{ asset(!\App::environment('local') ? 'public' : '' . 'storage/home/assets/css/custom.css') }}"
        rel="stylesheet" media="screen">
</head>

<body>

    <!-- Preloader Start -->
    <div class="preloader">
        <div class="loading-container">
            <div class="loading"></div>
            <div id="loading-icon"><img
                    src="{{ asset(!\App::environment('local') ? 'public' : '' . 'storage/home/assets/images/logo_blanc.png') }}"
                    alt=""></div>
        </div>
    </div>
    <!-- Preloader End -->

    @include('home/partials/home_navbar')

    @yield('content')

    @include('home/partials/home_footer')


    <!-- Jquery Library File -->
    <script
        src="{{ asset(!\App::environment('local') ? 'public' : '' . 'storage/home/assets/js/jquery-3.7.1.min.js') }}">
    </script>
    <!-- Bootstrap js file -->
    <script src="{{ asset(!\App::environment('local') ? 'public' : '' . 'storage/home/assets/js/bootstrap.min.js') }}">
    </script>
    <!-- Validator js file -->
    <script src="{{ asset(!\App::environment('local') ? 'public' : '' . 'storage/home/assets/js/validator.min.js') }}">
    </script>
    <!-- SlickNav js file -->
    <script
        src="{{ asset(!\App::environment('local') ? 'public' : '' . 'storage/home/assets/js/jquery.slicknav.js') }}">
    </script>
    <!-- Swiper js file -->
    <script
        src="{{ asset(!\App::environment('local') ? 'public' : '' . 'storage/home/assets/js/swiper-bundle.min.js') }}">
    </script>
    <!-- Counter js file -->
    <script
        src="{{ asset(!\App::environment('local') ? 'public' : '' . 'storage/home/assets/js/jquery.waypoints.min.js') }}">
    </script>
    <script
        src="{{ asset(!\App::environment('local') ? 'public' : '' . 'storage/home/assets/js/jquery.counterup.min.js') }}">
    </script>
    <!-- Magnific js file -->
    <script
        src="{{ asset(!\App::environment('local') ? 'public' : '' . 'storage/home/assets/js/jquery.magnific-popup.min.js') }}">
    </script>
    <!-- SmoothScroll -->
    <script src="{{ asset(!\App::environment('local') ? 'public' : '' . 'storage/home/assets/js/SmoothScroll.js') }}">
    </script>
    <!-- Parallax js -->
    <script src="{{ asset(!\App::environment('local') ? 'public' : '' . 'storage/home/assets/js/parallaxie.js') }}">
    </script>
    <!-- MagicCursor js file -->
    <script src="{{ asset(!\App::environment('local') ? 'public' : '' . 'storage/home/assets/js/gsap.min.js') }}">
    </script>
    <script src="{{ asset(!\App::environment('local') ? 'public' : '' . 'storage/home/assets/js/magiccursor.js') }}">
    </script>
    <!-- Text Effect js file -->
    <script src="{{ asset(!\App::environment('local') ? 'public' : '' . 'storage/home/assets/js/SplitText.js') }}">
    </script>
    <script
        src="{{ asset(!\App::environment('local') ? 'public' : '' . 'storage/home/assets/js/ScrollTrigger.min.js') }}">
    </script>
    <!-- Wow js file -->
    <script src="{{ asset(!\App::environment('local') ? 'public' : '' . 'storage/home/assets/js/wow.js') }}"></script>
    <!-- Main Custom js file -->
    <script src="{{ asset(!\App::environment('local') ? 'public' : '' . 'storage/home/assets/js/function.js') }}">
    </script>
</body>

</html>