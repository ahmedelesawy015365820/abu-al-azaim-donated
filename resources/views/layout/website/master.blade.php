<!doctype html>
<html class="no-js" lang="{{ app()->getLocale() }}" dir="{{ app()->getLocale() == 'en' ? 'ltr' : 'rtl' }}">


<!-- Mirrored from themegenix.com/demo/renova/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 15 May 2025 14:48:34 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Abu-Al Azaim | @yield('title', 'Home')</title>
    <meta name="description" content="Renova - Construction Building & Renovation Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Favicon -->
    <link rel="shortcut icon" type="image/png" href="{{ asset('website/images/favicon.png')}}">
    <!-- Place favicon.ico in the root directory -->

    <!-- CSS here -->
    @if(app()->getLocale() == 'ar')
        <link rel="stylesheet" href="{{ asset('website/css/bootstrap-rtl.min.css')}}">
    @else
        <link rel="stylesheet" href="{{ asset('website/css/bootstrap.min.css')}}">
    @endif

    <link href="{{ asset('website/css/themify-icons.css')}}" rel="stylesheet">
    <link href="{{ asset('website/css/flaticon_aidus.css')}}" rel="stylesheet">

    @if(app()->getLocale() == 'ar')
        <link rel="stylesheet" href="{{ asset('website/css/bootstrap-rtl.min.css')}}">
    @else
        <link rel="stylesheet" href="{{ asset('website/css/bootstrap.min.css')}}">
    @endif

    <link href="{{ asset('website/css/animate.css')}}" rel="stylesheet">
    <link href="{{ asset('website/css/owl.carousel.css')}}" rel="stylesheet">
    <link href="{{ asset('website/css/owl.theme.css')}}" rel="stylesheet">
    <link href="{{ asset('website/css/slick.css')}}" rel="stylesheet">
    <link href="{{ asset('website/css/slick-theme.css')}}" rel="stylesheet">
    <link href="{{ asset('website/css/swiper.min.css')}}" rel="stylesheet">
    <link href="{{ asset('website/css/owl.transitions.css')}}" rel="stylesheet">
    <link href="{{ asset('website/css/jquery.fancybox.css')}}" rel="stylesheet">
    <link href="{{ asset('website/css/odometer-theme-default.css')}}" rel="stylesheet">

    @if(app()->getLocale() == 'ar')
        <link rel="stylesheet" href="{{ asset('website/sass/style-rtl.css')}}">
    @else
        <link rel="stylesheet" href="{{ asset('website/sass/style.css')}}">
    @endif

    @stack('style')

</head>

<body>

    <!-- start page-wrapper -->
    <div class="page-wrapper">

        <!-- start preloader -->
        <div class="preloader">
            <div class="vertical-centered-box">
                <div class="content">
                    <div class="loader-circle"></div>
                    <div class="loader-line-mask">
                        <div class="loader-line"></div>
                    </div>
                    <img src="{{ asset('website/images/preloader.png')}}" alt="">
                </div>
            </div>
        </div>
        <!-- end preloader -->

        <!-- header-area -->
        @include('layout.website.header')
        <!-- header-area-end -->

        <!-- content -->
        @yield('content')
        <!-- content -->


        <!-- footer-area -->
        @include('layout.website.footer')
        <!-- footer-area-end -->

    </div>

<!-- JS here -->
@include('layout.website.script')

@stack('script')

</body>


<!-- Mirrored from themegenix.com/demo/renova/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 15 May 2025 14:48:59 GMT -->
</html>