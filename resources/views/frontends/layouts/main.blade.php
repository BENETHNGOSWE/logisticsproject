<!DOCTYPE html>
<html lang="en">

<head>
    <!-- ========== Meta Tags ========== -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="pixel-drop">
    <meta name="description" content="Transko - Transport & Logistics HTML Template">
    <!-- ======== Page title ============ -->
    <title>Cargo Website</title>
    <!--<< Favcion >>-->
    <link rel="shortcut icon" href="assets/img/favicon.png">
    <link rel="stylesheet" href="{{ asset ('assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{ asset ('assets/css/all.min.css')}}">
    <link rel="stylesheet" href="{{ asset ('assets/css/animate.css')}}">
    <link rel="stylesheet" href="{{ asset ('assets/css/magnific-popup.css')}}">
    <link rel="stylesheet" href="{{ asset ('assets/css/meanmenu.css')}}">
    <link rel="stylesheet" href="{{ asset ('assets/css/swiper-bundle.min.css')}}">
    <link rel="stylesheet" href="{{ asset ('assets/css/nice-select.css')}}">
    <link rel="stylesheet" href="{{ asset ('assets/css/color.css')}}">
    <link rel="stylesheet" href="{{ asset ('assets/css/main.css')}}">
</head>
<body>
     <!-- Preloader Start -->
     <div id="preloader" class="preloader">
        <div class="animation-preloader">
            <div class="spinner">
            </div>
            <div class="txt-loading">
                <span data-text-preloader="K" class="letters-loading">
                    K
                </span>
                <span data-text-preloader="O" class="letters-loading">
                    O
                </span>
                <span data-text-preloader="D" class="letters-loading">
                    D
                </span>
                <span data-text-preloader="A" class="letters-loading">
                    A
                </span>
                <span data-text-preloader="." class="letters-loading">
                    .
                </span>
                <span data-text-preloader="K" class="letters-loading">
                    K
                </span>
                <span data-text-preloader="O" class="letters-loading">
                    O
                </span>
                <span data-text-preloader="D" class="letters-loading">
                    D
                </span>
                <span data-text-preloader="A" class="letters-loading">
                    A
                </span>
            </div>
            <p class="text-center">Loading</p>
        </div>
        <div class="loader">
            <div class="row">
                <div class="col-3 loader-section section-left">
                    <div class="bg"></div>
                </div>
                <div class="col-3 loader-section section-left">
                    <div class="bg"></div>
                </div>
                <div class="col-3 loader-section section-right">
                    <div class="bg"></div>
                </div>
                <div class="col-3 loader-section section-right">
                    <div class="bg"></div>
                </div>
            </div>
        </div>
    </div>

    <!--<< Mouse Cursor Start >>-->
    <div class="mouse-cursor cursor-outer"></div>
    <div class="mouse-cursor cursor-inner"></div>

    <!-- Back To Top Start -->
    <button id="back-top" class="back-to-top">
        <i class="fa-regular fa-arrow-up"></i>
    </button>

    @include('frontends.layouts.header')
    @yield('content')
    @include('frontends.layouts.footer')



     <!--<< All JS Plugins >>-->
     <script src="{{ asset ('assets/js/jquery-3.7.1.min.js')}}"></script>
     <script src="{{ asset ('assets/js/viewport.jquery.js')}}"></script>
     <script src="{{ asset ('assets/js/bootstrap.bundle.min.js')}}"></script>
     <script src="{{ asset ('assets/js/jquery.nice-select.min.js')}}"></script>
     <script src="{{ asset ('assets/js/jquery.waypoints.js')}}"></script>
     <script src="{{ asset ('assets/js/jquery.counterup.min.js')}}"></script>
     <script src="{{ asset ('assets/js/swiper-bundle.min.js')}}"></script>
     <script src="{{ asset ('assets/js/jquery.meanmenu.min.js')}}"></script>
     <script src="{{ asset ('assets/js/jquery.magnific-popup.min.js')}}"></script>
     <script src="{{ asset ('assets/js/wow.min.js')}}"></script>
     <script src="{{ asset ('assets/js/main.js')}}"></script>

</body>
</html>