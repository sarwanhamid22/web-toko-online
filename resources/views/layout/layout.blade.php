<!DOCTYPE html>
<html lang="en" class="darkmode" data-theme="light">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel 11 Template</title>
    <!-- ..::Favicon::.. -->
    <link rel="apple-touch-icon"  href="{{ asset('assets/images/fav.png') }}">
    <link rel="shortcut icon" type="image/x-icon"  href="{{ asset('assets/images/fav.png') }}">
    <!-- ..::Bootstrap V5 CSS::.. -->
    <link rel="stylesheet" type="text/css"  href="{{ asset('assets/css/bootstrap.min.css') }}">
    <!-- ..::Font Awesome 5 CSS::.. -->
    <link rel="stylesheet" type="text/css"  href="{{ asset('assets/css/all.min.css') }}">
    <!-- ..::RT Icons CSS::.. -->
    <link rel="stylesheet" type="text/css"  href="{{ asset('assets/css/rt-icons.css') }}">
    <!-- ..::Animate css::.. -->
    <link rel="stylesheet" type="text/css"  href="{{ asset('assets/css/animate.min.css') }}">
    <!-- ..::Magnific popup Plugin::.. -->
    <link rel="stylesheet" type="text/css"  href="{{ asset('assets/css/magnific-popup.css') }}">
    <!-- ..::Swiper Slider Plugin::.. -->
    <link rel="stylesheet" type="text/css"  href="{{ asset('assets/css/swiper-bundle.min.css') }}">
    <!-- ..::Mobile Menu CSS::.. -->
    <link rel="stylesheet" type="text/css"  href="{{ asset('assets/css/metisMenu.css') }}">
    <!-- ..::Main Menu CSS::.. -->
    <link rel="stylesheet" type="text/css"  href="{{ asset('assets/css/rtsmenu.css') }}">
    <!-- ..::Preloader CSS::.. -->
    <link rel="stylesheet" type="text/css"  href="{{ asset('assets/css/preloader.css') }}">
    <!-- ..::Main Stylesheet::.. -->
    <link rel="stylesheet" href="{{ asset('assets/css/variables/variable1.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/jquery.nstSlider.min.css') }}"/>
    <!-- ..::Main Stylesheet::.. -->
    <link rel="stylesheet" type="text/css"  href="{{ asset('assets/css/main.css') }}">

    @yield('head')

</head>

<body>

    <!-- ..::Preloader Section Start Here::.. -->
    @include('layouts.preloader')
    <!-- ..::Preloader End Here::.. -->

    <div class="anywere"></div>

    {{-- Header --}}
    @include('layouts.header')


    {{-- Konten --}}
    @yield('content')

    {{-- Footer --}}
    @include('layouts.footer')

    {{-- Scroll to Top --}}
    @include('layouts.scroll')

    {{-- Script --}}
    <!-- 1️⃣ Jquery PERTAMA -->
    <script src="{{ asset('assets/js/vendors/jquery-3.6.0.min.js') }}"></script>

    <!-- 2️⃣ Baru plugin-plugin lain -->
    <script src="{{ asset('assets/js/vendors/zoom.js') }}"></script>
    <script src="{{ asset('assets/js/vendors/jquery.nstSlider.min.js') }}"></script>
    <script src="{{ asset('assets/js/vendors/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/js/vendors/wow.min.js') }}"></script>
    <script src="{{ asset('assets/js/vendors/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('assets/js/vendors/jquery.nice-select.js') }}"></script>
    <script src="{{ asset('assets/js/vendors/metisMenu.min.js') }}"></script>
    <script src="{{ asset('assets/js/vendors/rtsmenu.js') }}"></script>
    <script src="{{ asset('assets/js/vendors/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('assets/js/vendors/jquery.magnific-popup.min.js') }}"></script>

    <!-- 3️⃣ Terakhir MAIN -->
    <script src="{{ asset('assets/js/main.js') }}"></script>


    @yield('scripts')


</body>
</html>
