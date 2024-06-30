<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title inertia>{{ config('app.name', 'Laravel') }}</title>
        <!-- favicons Icons -->
        <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('images/favicons/apple-touch-icon.png') }}">
        <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('images/favicons/favicon-32x32.png') }}">
        <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('images/favicons/favicon-16x16.png') }}">
        <link rel="manifest" href="{{ asset('images/favicons/site.webmanifest') }}">
        <!-- fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,wght@0,400;0,500;0,700;1,400;1,500;1,700&display=swap"rel="stylesheet">

        <link rel="stylesheet" href="{{ asset('vendors/bootstrap/css/bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{ asset('vendors/animate/animate.min.css') }}">
        <link rel="stylesheet" href="{{ asset('vendors/animate/custom-animate.css') }}">
        <link rel="stylesheet" href="{{ asset('vendors/fontawesome/css/all.min.css') }}">
        <link rel="stylesheet" href="{{ asset('vendors/jarallax/jarallax.css') }}">
        <link rel="stylesheet" href="{{ asset('vendors/jquery-magnific-popup/jquery.magnific-popup.css') }}">
        <link rel="stylesheet" href="{{ asset('vendors/nouislider/nouislider.min.css') }}">
        <link rel="stylesheet" href="{{ asset('vendors/nouislider/nouislider.pips.css') }}">
        <link rel="stylesheet" href="{{ asset('vendors/odometer/odometer.min.css') }}">
        <link rel="stylesheet" href="{{ asset('vendors/swiper/swiper.min.css') }}">
        <link rel="stylesheet" href="{{ asset('vendors/insur-icons/style.css') }}">
        <link rel="stylesheet" href="{{ asset('vendors/insur-two-icon/style.css') }}">
        <link rel="stylesheet" href="{{ asset('vendors/tiny-slider/tiny-slider.min.css') }}">
        <link rel="stylesheet" href="{{ asset('vendors/reey-font/stylesheet.css') }}">
        <link rel="stylesheet" href="{{ asset('vendors/owl-carousel/owl.carousel.min.css') }}">
        <link rel="stylesheet" href="{{ asset('vendors/owl-carousel/owl.theme.default.min.css') }}">
        <link rel="stylesheet" href="{{ asset('vendors/bxslider/jquery.bxslider.css') }}">
        <link rel="stylesheet" href="{{ asset('vendors/bootstrap-select/css/bootstrap-select.min.css') }}">
        <link rel="stylesheet" href="{{ asset('vendors/vegas/vegas.min.css') }}">
        <link rel="stylesheet" href="{{ asset('vendors/jquery-ui/jquery-ui.css') }}">
        <link rel="stylesheet" href="{{ asset('vendors/timepicker/timePicker.css') }}">
        <link rel="stylesheet" href="{{ asset('vendors/ion.rangeSlider/css/ion.rangeSlider.min.css') }}">
        <meta name="description" content="Insur HTML 5 Template ">
        @routes
        @vite(['resources/sass/insur.scss','resources/sass/insur-dark.scss','resources/js/insur.js','resources/js/app.js',"resources/js/Pages/{$page['component']}.vue"])
        @inertiaHead
    </head>
    <body class="custom-cursor">
        <div class="custom-cursor__cursor"></div>
        <div class="custom-cursor__cursor-two"></div>
        <div class="preloader">
            <div class="preloader__image"></div>
        </div>

        <div class="page-wrapper">
            @include('components.header')
            @include('components.stricky')
            @inertia
            @include('components.footer')
        </div><!-- /.page-wrapper -->

    <script src="{{ asset('vendors/jquery/jquery-3.6.0.min.js') }}"></script>
    <script src="{{ asset('vendors/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('vendors/jarallax/jarallax.min.js') }}"></script>
    <script src="{{ asset('vendors/jquery-ajaxchimp/jquery.ajaxchimp.min.js') }}"></script>
    <script src="{{ asset('vendors/jquery-appear/jquery.appear.min.js') }}"></script>
    <script src="{{ asset('vendors/jquery-circle-progress/jquery.circle-progress.min.js') }}"></script>
    <script src="{{ asset('vendors/jquery-magnific-popup/jquery.magnific-popup.min.js') }}"></script>
    <script src="{{ asset('vendors/jquery-validate/jquery.validate.min.js') }}"></script>
    <script src="{{ asset('vendors/nouislider/nouislider.min.js') }}"></script>
    <script src="{{ asset('vendors/odometer/odometer.min.js') }}"></script>
    <script src="{{ asset('vendors/swiper/swiper.min.js') }}"></script>
    <script src="{{ asset('vendors/tiny-slider/tiny-slider.min.js') }}"></script>
    <script src="{{ asset('vendors/wnumb/wNumb.min.js') }}"></script>
    <script src="{{ asset('vendors/wow/wow.js') }}"></script>
    <script src="{{ asset('vendors/isotope/isotope.js') }}"></script>
    <script src="{{ asset('vendors/countdown/countdown.min.js') }}"></script>
    <script src="{{ asset('vendors/owl-carousel/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('vendors/bxslider/jquery.bxslider.min.js') }}"></script>
    <script src="{{ asset('vendors/bootstrap-select/js/bootstrap-select.min.js') }}"></script>
    <script src="{{ asset('vendors/vegas/vegas.min.js') }}"></script>
    <script src="{{ asset('vendors/jquery-ui/jquery-ui.js') }}"></script>
    <script src="{{ asset('vendors/timepicker/timePicker.js') }}"></script>
    <script src="{{ asset('vendors/circleType/jquery.circleType.js') }}"></script>
    <script src="{{ asset('vendors/circleType/jquery.lettering.min.js') }}"></script>
    <script src="{{ asset('vendors/ion.rangeSlider/js/ion.rangeSlider.min.js') }}"></script>

    <!-- template js -->
    <script src="{{ asset('js/insur.js') }}"></script>
    </body>
</html>
