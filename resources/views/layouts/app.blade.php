<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>@yield('page_title')</title>


    <link href="{{ asset('assets/vendor/lightgallery/css/lightgallery.min.css') }}" rel="stylesheet">
	<link href="{{ asset('assets/vendor/magnific-popup/magnific-popup.min.css') }}" rel="stylesheet">
	<link href="{{ asset('assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">
	<link href="{{ asset('assets/vendor/animate/animate.css') }}" rel="stylesheet">

	<link rel="preconnect" href="https://fonts.googleapis.com/">
	<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&amp;family=Sarabun:wght@100;200;300;400;500;600;700;800&amp;display=swap" rel="stylesheet">

	<!-- Custom Stylesheet -->

    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/template.css') }}">
	<link rel="stylesheet" href="{{ asset('assets/vendor/rangeslider/rangeslider.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendor/switcher/switcher.css') }}">
	<link rel="stylesheet" class="skin" href="{{ asset('assets/css/skin/skin-3.css') }}">



    <link rel="icon" href="{{ asset('assets/img/favicon.png') }}">


</head>

<body id="bg">
    {{-- <div id="loading-area">
        <div>
            <div class="text">ConsultZone</div>
            <div class="line"></div>
        </div>
    </div> --}}
    <div class="page-wraper">
        @include('layouts.inc.header')

        <div class="page-content bg-white">
            @yield('page_content')
        </div>

        @include('layouts.inc.footer')

        <button class="scroltop icon-up" type="button"><i class="fas fa-arrow-up"></i></button>

    </div>


    {{-- Javascripts Here .... --}}
    <script src="{{ asset('assets/js/jquery.min.js') }}"></script><!-- JQUERY.MIN JS -->
    <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script><!-- BOOTSTRAP.MIN JS -->
    <script src="{{ asset('assets/vendor/switcher/switcher.js') }}"></script><!-- SWITCHER -->
    <script src="{{ asset('assets/vendor/wow/wow.js') }}"></script><!-- WOW JS -->
    <script src="{{ asset('assets/vendor/rangeslider/rangeslider.js') }}"></script><!-- RANGESLIDER -->
    <script src="{{ asset('assets/vendor/magnific-popup/magnific-popup.js') }}"></script><!-- MAGNIFIC POPUP JS -->
    <script src="{{ asset('assets/vendor/masonry/isotope.pkgd.min.js') }}"></script><!-- ISOTOPE -->
    <script src="{{ asset('assets/vendor/imagesloaded/imagesloaded.js') }}"></script><!-- IMAGESLOADED -->
    <script src="{{ asset('assets/vendor/masonry/masonry-4.2.2.js') }}"></script><!-- MASONRY -->
    <script src="{{ asset('assets/vendor/lightgallery/js/lightgallery-all.min.js') }}"></script><!-- LIGHTGALLERY -->
    <script src="{{ asset('assets/vendor/counter/waypoints-min.js') }}"></script><!-- WAYPOINTS JS -->
    <script src="{{ asset('assets/vendor/counter/counterup.min.js') }}"></script><!-- COUNTERUP JS -->
    <script src="{{ asset('assets/vendor/swiper/swiper-bundle.min.js') }}"></script><!-- OWL-CAROUSEL -->
    <script src="{{ asset('assets/vendor/paroller/skrollr.min.js') }}"></script><!-- PAROLLER -->
    <script src='www.google.com/recaptcha/api.js'></script> <!-- Google API For Recaptcha  -->
    <script src="{{ asset('assets/js/dz.carousel.js') }}"></script><!-- OWL-CAROUSEL -->
    <script src="{{ asset('assets/js/dz.ajax.js') }}"></script><!-- AJAX -->
    <script src="{{ asset('assets/js/custom.js') }}"></script><!-- CUSTOM JS -->



</body>

</html>
