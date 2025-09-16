    <!--======== Header start ========-->
{{--<div class="full-width-header {{  !request()->routeIs('home') ? 'rs-header-layout2' : '' }}">--}}
{{--    <!--Header Start-->--}}
{{--    <header id="rs-header" class="rs-header">--}}
{{--    <!-- Menu Start -->--}}
{{--    <div class="menu-area menu-sticky">--}}
{{--    <!-- Offer Section End -->--}}
{{--         <div class="container custom-container">--}}
{{--           <div class="rs-menu-area">--}}
{{--            <div class="logo-area">--}}
{{--                <a href="{{ route('home') }}">--}}
{{--                    <img src="{{ asset('website/images/techzen_logo_home.png')}}" alt="">--}}
{{--                    <img class="dark-logo" src="{{ asset('website/images/footer_logo.png')}}" alt="">--}}
{{--                </a>--}}
{{--                <a href="{{ route('home') }}">--}}
{{--                    <img src="{{ asset('website/images/techzen_logo_home.png')}}" alt="">--}}
{{--                    <img class="dark-logo" src="{{ asset('website/images/footer_logo.png')}}" alt="">--}}
{{--                </a>--}}
{{--            </div>--}}
{{--            <div class="rs-header-rightside">--}}
{{--                <div class="main-menu hidden-md">--}}
{{--                    <ul class="nav-menu">--}}
{{--                        <li>--}}
{{--                            <a class="{{ request()->routeIs('home') ? 'active' : '' }}" href="{{ route('home') }}">--}}
{{--                                {{ __('website.home') }}--}}
{{--                            </a>--}}
{{--                        </li>--}}
{{--                        <li>--}}
{{--                            <a class="{{ request()->routeIs('about') ? 'active' : '' }}" href="{{ route('about') }}">{{ __('website.about') }}</a>--}}
{{--                        </li>--}}
{{--                        <li>--}}
{{--                            <a class="{{ request()->routeIs('service') ? 'active' : '' }}" href="{{ route('service') }}">{{ __('website.services') }}</a>--}}
{{--                        </li>--}}
{{--                        <li>--}}
{{--                            <a class="{{ request()->routeIs('project') ? 'active' : '' }}" href="{{ route('project') }}">{{ __('website.projects') }}</a>--}}
{{--                        </li>--}}
{{--                        <li><a class="{{ request()->routeIs('contact') ? 'active' : '' }}" href="{{ route('contact') }}">{{ __('website.contact') }}</a> </li>--}}
{{--                        <li class="has-clid relative">--}}
{{--                            <a href="#" class="{{ request()->routeIs('team') || request()->routeIs('blogs') || request()->routeIs('faq') ? 'active' : '' }}">--}}
{{--                                <cite class="rs_item_wrap">--}}
{{--                                    {{ __('website.More') }}--}}
{{--                                    <span class="menu-item-description" title="4">4</span>--}}
{{--                                </cite>--}}
{{--                            </a>--}}
{{--                            <ul class="sub-menu">--}}
{{--                                <li>--}}
{{--                                    <a class="{{ request()->routeIs('team') ? 'active' : '' }}" href="{{route('team')}}">{{__('website.team')}}</a>--}}
{{--                                </li>--}}
{{--                                <li>--}}
{{--                                    <a class="{{ request()->routeIs('faq') ? 'active' : '' }}" href="{{route('faq')}}">{{__('website.Faq')}}</a>--}}
{{--                                </li>--}}
{{--                                <li>--}}
{{--                                    <a class="{{ request()->routeIs('appointment') ? 'active' : '' }}" href="{{route('appointment')}}">{{__('website.appointment')}}</a>--}}
{{--                                </li>--}}
{{--                                <li>--}}
{{--                                    <a class="{{ request()->routeIs('blogs') ? 'active' : '' }}" href="{{route('blogs')}}">@lang("website.Articles")</a>--}}
{{--                                </li>--}}
{{--                            </ul>--}}
{{--                        </li>--}}
{{--                    </ul> <!-- //.nav-menu -->--}}
{{--                </div> <!-- //.main-menu -->--}}
{{--                <div class="rs-header-contct">--}}
{{--                    <a style="color: {{ !request()->routeIs('home') ? '#fff': '' }};" href="tel:+{{ $setting->mobile_1 }}"> <img src="{{ asset('website/images/phone-call1.svg')}}" alt="">{{ $setting->mobile_1 }}</a>--}}
{{--                </div>--}}
{{--                <div class="rs-search-box">--}}
{{--                    <div class="search_icons">--}}
{{--                        @if(app()->getLocale() == 'en')--}}
{{--                            <a--}}
{{--                                    title="{{ __('website.arabic') }}"--}}
{{--                                    href="{{ route('change.language','ar') }}"--}}
{{--                                    class="cart-count"--}}
{{--                            >--}}
{{--                                <i class="fa fa-globe"></i>--}}
{{--                            </a>--}}
{{--                        @else--}}
{{--                            <a--}}
{{--                                    title="{{ __('website.english') }}"--}}
{{--                                    href="{{ route('change.language','en') }}"--}}
{{--                                    class="cart-count"--}}
{{--                            >--}}
{{--                                <i class="fa fa-globe"></i>--}}
{{--                            </a>--}}
{{--                        @endif--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="header-btn">--}}
{{--                    <a class="main-btn" href="{{ route('contact') }}">--}}
{{--                        {{ __('website.Get a Quote') }}--}}
{{--                        <i class="ri-arrow-right-fill"></i>--}}
{{--                        --}}
{{--                    </a>--}}
{{--                </div>--}}
{{--                <div class="canvasmenu-trigger view-md">--}}
{{--                    <i class="fa fa-bars"></i>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--    <!-- Menu End -->--}}
{{--    </header>--}}
{{--    <!--Header End-->--}}
{{--    </div>--}}
    <!--======== Header Ends ========-->
    <!-- Start header -->
    <header id="header">
        <!-- start topbar -->
        <div class="topbar">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-12">
                        <ul class="contact-info">
                            <li>
                                <i class="ti-email"></i><span>support@aidus.com</span>
                            </li>
                            <li>
                                <a href="tel:+887869587496">
                                    <i class="flaticon-phone"></i><span>+88 7869 5874 96</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-lg-6 col-12">
                        <div class="contact-into">
                            <ul class="social-media">
                                <li><a href="#"><i class="flaticon-facebook-app-symbol"></i></a></li>
                                <li><a href="#"><i class="flaticon-linkedin"></i></a></li>
                                <li><a href="#"><i class="flaticon-camera"></i></a></li>
                                <li><a href="#"><i class="flaticon-vimeo"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end topbar -->

        <!-- start midbar -->
        <div class="midbar">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-lg-3 col-12">
                        <a href="index.html" class="logo-mid">
                            <img style="height: 81px;width: 90px;" src="{{ asset('website/images/logo.jpeg')}}" alt="">
                        </a>
                    </div>
                    <div class="col-lg-9 col-12">
                        <ul>
                            <li>
                                <div class="icon">
                                    <i class="flaticon-clock"></i>
                                </div>
                                <div class="text">
                                    <h3>{{ __('website.Opening Hours') }}</h3>
                                    <span>Mon _ Sat: 9.00 to 18.00</span>
                                </div>
                            </li>
                            <li>
                                <div class="icon">
                                    <i class="fi flaticon-home-address"></i>
                                </div>
                                <div class="text">
                                    <h3>{{ __('website.Our Address') }}</h3>
                                    <span>الشرقية , العاشر من رمضان</span>
                                </div>
                            </li>
                            <li>
                                <div class="icon">
                                    <i class="flaticon-phone-1"></i>
                                </div>
                                <div class="text">
                                    <h3>{{ __('website.contact') }}</h3>
                                    <span>(671) 555-0110</span>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- end midbar -->

        <div class="wpo-site-header">
            <nav class="navigation navbar navbar-expand-lg navbar-light">
                <div class="container-fluid">
                    <div class="row align-items-center">
                        <div class="col-lg-3 col-md-3 col-3 d-lg-none dl-block">
                            <div class="mobail-menu">
                                <button type="button" class="navbar-toggler open-btn">
                                    <span class="sr-only">Toggle navigation</span>
                                    <span class="icon-bar first-angle"></span>
                                    <span class="icon-bar middle-angle"></span>
                                    <span class="icon-bar last-angle"></span>
                                </button>
                            </div>
                        </div>
                        <div class="col-lg-0 col-md-6 col-6">
                            <div class="navbar-header">
                                <a class="navbar-brand" href="index.html"><img src="{{ asset('website/images/logo-2.svg')}}"
                                                                               alt=""></a>
                            </div>
                        </div>
                        <div class="col-lg-7 col-md-1 col-1">
                            <div id="navbar" class="collapse navbar-collapse navigation-holder">
                                <button class="menu-close"><i class="ti-close"></i></button>
                                <ul class="nav navbar-nav mb-2 mb-lg-0">
                                    <li>
                                        <a class="{{ request()->routeIs('home') ? 'active' : '' }}" href="{{ route('home') }}">
                                            {{ __('website.home') }}
                                        </a>
                                    </li>
                                    <li>
                                        <a class="{{ request()->routeIs('about') ? 'active' : '' }}" href="{{ route('about') }}">
                                            {{ __('website.about') }}
                                        </a>
                                    </li>
                                    <li>
                                        <a class="{{ request()->routeIs('service') ? 'active' : '' }}" href="{{ route('service') }}">
                                            {{ __('website.services') }}
                                        </a>
                                    </li>
                                    <li>
                                        <a class="{{ request()->routeIs('donate') ? 'active' : '' }}" href="{{ route('donate') }}">
                                            {{ __('website.donate') }}
                                        </a>
                                    </li>
                                    <li>
                                        <a class="{{ request()->routeIs('portfolio') ? 'active' : '' }}" href="{{ route('portfolio') }}">
                                            التبرعات السابقة
                                        </a>
                                    </li>
                                    <li>
                                        <a class="{{ request()->routeIs('contact') ? 'active' : '' }}" href="{{ route('contact') }}">
                                            {{ __('website.contact') }}
                                        </a>
                                    </li>
                                    <li class="menu-item-has-children">
                                        <a href="#" class="{{ request()->routeIs('team') || request()->routeIs('blogs') || request()->routeIs('faq') ? 'active' : '' }}">
                                            {{ __('website.More') }}
                                        </a>
                                        <ul class="sub-menu">
                                         
                                            <li>
                                                <a class="{{ request()->routeIs('blogs') ? 'active' : '' }}" href="{{route('blogs')}}">@lang("website.Articles")</a>
                                            </li>
                                            <li>
                                                <a class="{{ request()->routeIs('blog-details') ? 'active' : '' }}" href="{{route('blog-details','test')}}">تفاصيل المقال</a>
                                            </li>
                                            

                                            <li>
                                                <a class="{{ request()->routeIs('volunteer') ? 'active' : '' }}" href="{{route('volunteer')}}">@lang("website.volunteer")</a>
                                            </li>
                                             <li class="menu-item-has-children" >
                                            <a href="#">{{ __('website.events') }}</a>
                                                    <ul class="sub-menu">
                                                        <li><a class="{{ request()->routeIs('event') ? 'active' : '' }}" href="{{route('event')}}">{{ __('website.event') }}</a>
                                                        </li>
                                                        <li><a class="{{ request()->routeIs('event-details') ? 'active' : '' }}" href="{{route('event-details')}}">{{ __('website.event_details') }}</a>
                                                        </li>
                                                    </ul>
                                             </li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                            <!-- end of nav-collapse -->
                        </div>
                        <div class="col-lg-5 col-md-2 col-2">
                            <div class="header-right">
                                <div class="mini-cart">
                                    <button class="cart-toggle-btn"> <i class="fi flaticon-bag"></i> <span
                                                class="cart-count">2</span></button>
                                    <div class="mini-cart-content">
                                        <button class="mini-cart-close"><i class="ti-close"></i></button>
                                        <div class="mini-cart-items">
                                            <div class="mini-cart-item clearfix">
                                                <div class="mini-cart-item-image">
                                                    <a href="shop.html"><img
                                                                src="{{ asset('website/images/shop/mini-cart/img-1.jpg')}}" alt></a>
                                                </div>
                                                <div class="mini-cart-item-des">
                                                    <a href="shop.html">glass of juice</a>
                                                    <span class="mini-cart-item-price"> 20.15 x 1</span>
                                                    <span class="mini-cart-item-quantity"><a href="#"><i
                                                                    class="ti-close"></i></a></span>
                                                </div>
                                            </div>
                                            <div class="mini-cart-item clearfix">
                                                <div class="mini-cart-item-image">
                                                    <a href="shop.html"><img
                                                                src="{{ asset('website/images/shop/mini-cart/img-2.jpg')}}" alt></a>
                                                </div>
                                                <div class="mini-cart-item-des">
                                                    <a href="shop.html">Water filters</a>
                                                    <span class="mini-cart-item-price"> 13.25 x 2</span>
                                                    <span class="mini-cart-item-quantity"><a href="#"><i
                                                                    class="ti-close"></i></a></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="mini-cart-action clearfix">
                                            <span class="mini-checkout-price">Subtotal: <span> 215.14</span></span>
                                            <div class="mini-btn">
                                                <a href="checkout.html" class="view-cart-btn s1">Checkout</a>
                                                <a href="cart.html" class="view-cart-btn">View Cart</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="close-form">
                                    <a class="theme-btn" href="{{route('blogs')}}">@lang("website.Donate now")</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!-- end of container -->
            </nav>
        </div>

    </header>
    <!-- end of header -->