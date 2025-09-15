@extends('layout.website.master')

@section('title',__('website.about'))

@section('content')
    <!--======== About Page Banner Start ========-->
    <section class="rs-page-banner">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="rs-page-banner__content">
                        <h1 class="title">{{ __('website.about') }}</h1>
                        <ul>
                            <li><i class="ri-home-wifi-line"></i> <a href="{{ route('home') }}">{{ __('website.home') }}</a></li>
                            <li>
                                @if(app()->getLocale() == 'en')
                                    <i class="ri-arrow-left-fill"></i>
                                @else
                                    <i class="ri-arrow-right-fill"></i>
                                @endif
                                {{ __('website.about') }}
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--======== About Page Banner Ends ========-->

    <!--======== About Page Start ========-->
    <section id="rs-about" class="rs-about rs-about-page pb-120 pt-120">
        <div class="rs-about__shape">
            <img src="{{ asset('website/images/about/arrow-purple-2.svg') }}" alt="">
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="rs-about__thumb-box">
                        <img src="{{ $oneAbout->firstPhoto?->url }}" onerror='src="{{ asset('website/images/about/about-image.png') }}"' alt="">
                        <div class="rs-about__play-box">
                            <span>{{ __('website.Intro') }}</span>
                            <div class="play-icon">
                                <a class="rs-popup-videos" href="{{ $oneAbout->url }}"><i class="fa fa-play"></i></a>
                            </div>
                        </div>
                        <div class="rs-about__countdown-box">
                            <div class="icon">
                                <img src="{{ asset('website/images/about/count-down-experience-icon.svg') }}" alt="">
                            </div>
                            <div class="coundown-text">
                                <span><span class="rs-count" >{{ $oneAbout->years_experience }}</span>+</span>
                                <h4 class="title">{{ __('website.years') }}</h4>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="rs-about__box">
                        <div class="top-sub-heading">
                            <img src="{{ asset('website/images/heart-pulse-rate-orange-2.svg') }}" alt="icon">
                            <span>{{ __('website.Who We Are') }}</span>
                            <img src="{{ asset('website/images/heart-pulse-rate-orange.svg') }}" alt="icon">
                        </div>
                        <h2 class="title-2 split-in-fade">{{ $oneAbout->title }} <span>{{ $oneAbout->title_color }}</span> </h2>
                        <p>{{ $oneAbout->description }}</p>
                        <ul>
                            @if($oneAbout->details)
                                @foreach($oneAbout->details as $detail)
                                    <li>
                                        <div class="icon">
                                            <svg height="60" width="60" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 60 60" style="enable-background:new 0 0 60 60;" xml:space="preserve">
                                    <style type="text/css">
                                        .st0 {
                                            opacity: 0.1;
                                            fill: #0C43FE;
                                            enable-background: new;
                                        }

                                        .st1 {
                                            fill: url(#SVGID_1_);
                                        }
                                    </style>
                                                <path class="st0" d="M6,0h48c3.3,0,6,2.7,6,6v48c0,3.3-2.7,6-6,6H6c-3.3,0-6-2.7-6-6V6C0,2.7,2.7,0,6,0z" />
                                                <linearGradient id="SVGID_1_" gradientUnits="userSpaceOnUse" x1="18" y1="29.6667" x2="42" y2="29.6667">
                                                    <stop offset="0" style="stop-color:#4B63FC" />
                                                    <stop offset="1" style="stop-color:#B32AF3" />
                                                </linearGradient>
                                                <path class="st1" d="M30,15l11,2.4c0.6,0.1,1,0.7,1,1.3v13.3c0,2.7-1.3,5.2-3.6,6.7L30,44.3l-8.4-5.6c-2.2-1.5-3.6-4-3.6-6.7V18.7
                                    c0-0.6,0.4-1.2,1-1.3L30,15z M35.9,24.6l-6.6,6.6l-3.8-3.8l-1.9,1.9l5.7,5.7l8.5-8.5L35.9,24.6z" />
                                </svg>

                                        </div>
                                        <span>{{ $detail->title }}</span>
                                    </li>
                                @endforeach
                            @endif
                        </ul>
                        <a class="main-btn" href="{{ route('about') }}">
                            {{ __('website.Discover More') }}
                            <i class="ri-arrow-right-fill"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--======== About Page Ends ========-->

    <!--======== About Featured Start ========-->
    <section class="rs-featured-2 about-featured pt-115 pb-120 mb-120">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <div class="rs-section-title black">
                        <div class="top-sub-heading">
                            <img src="{{ asset('website/images/heart-pulse-rate-orange-2.svg') }}" alt="icon">
                            <span>{{ __('website.Our Feachered Services') }}</span>
                            <img src="{{ asset('website/images/heart-pulse-rate-orange.svg') }}" alt="icon">
                        </div>
                        <h2 style="color: #000 !important;" class="title-2 split-in-fade">{{ __('website.We run all kinds of IT services') }}</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                @foreach ($services as $service) 
                    <div class="col-lg-4 col-sm-6">
                        <div class="rs-featured-2__item">
                            <div class="rs-thumb">
                                <img src="{{ $service->image->url }}" alt="{{ app()->getLocale() == 'en' ? $service->title_en :$service->title_ar}}">
                            </div>
                            <div class="rs-content">
                                <div class="rs-icon">
                                    <img src="{{ $service->icon->url }}" alt="{{ app()->getLocale() == 'en' ? $service->title_en :$service->title_ar}}">
                                </div>
                                <h4 class="title"><a href="{{ route('service-details', ['slug' => $service->slug]) }}">{{ app()->getLocale() == 'en' ? $service->title_en :$service->title_ar}}</a></h4>
                                <p>{{ app()->getLocale() == 'en' ? $service->description_en :$service->description_ar}}</p>
                                <div class="rs-link">
                                    <a class="rs-link" href="{{ route('service-details', ['slug' => $service->slug]) }}">
                                        {{ __('website.Read More') }}
                                         <i class="ri-arrow-right-fill"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="rs-featured-2__btn">
                        <a class="main-btn" href="{{ route('service') }}">
                            {{ __('website.View All Services') }}
                            <i class="ri-arrow-right-fill"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--======== About Featured Ends ========-->

    <!--======== Why Choose 2 Start ========-->
    <section class="rs-why-choose-2 pb-85">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="rs-why-choose__content">
                        <div class="rs-section-title black">
                            <div class="top-sub-heading">
                                <img src="{{ asset('website/images/heart-pulse-rate-orange-2.svg') }}" alt="icon">
                                <span>{{ __('website.Why Choose Us') }}</span>
                                <img src="{{ asset('website/images/heart-pulse-rate-orange.svg') }}" alt="icon">
                            </div>
                            <h2 class="title-2 split-in-fade" style="color: #000 !important;">{{ __('website.Reasons to') }} <span class="color">{{ __('website.count on us') }}</span></h2>
                            <p>{{ __('website.Bring to the table win-win survival strategies to ensure proactive domination At the end of the day') }}</p>
                        </div>
                        <div class="rs-why-choose__item-list">
                            <ul>
                                <li>
                                    <div class="thumb">
                                        <img src="{{ asset('website/images/why-choose/ch-ico2.png') }}" alt="">
                                    </div>
                                    <div class="content">
                                        <h4 class="title">{{ __('website.First Growing Process') }}</h4>
                                        <p>{{ __('website.Bring to the table win-win survival strategies to ensur') }}</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="thumb">
                                        <img src="{{ asset('website/images/why-choose/ch-ico3.png') }}" alt="">
                                    </div>
                                    <div class="content">
                                        <h4 class="title">{{ __('website.Dedicated Support') }}</h4>
                                        <p>{{ __('website.Leverage agile frameworks to provide a robust') }}</p>
                                    </div>
                                </li>
                                <li>
                                    <div class="thumb">
                                        <img src="{{ asset('website/images/why-choose/ch-ico1.png') }}" alt="">
                                    </div>
                                    <div class="content">
                                        <h4 class="title">{{ __('website.AI Machine & Deep Learning') }}</h4>
                                        <p>{{ __('website.Podcasting operational change management inside') }}</p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="rs-why-choose-2__thumb wow fadeInRight" data-wow-duration="1.5s" data-wow-delay="0.4s">
                        <div class="rs-thumb-1">
                            <img src="{{ asset('website/images/why-choose/chose-right-left.jpg') }}" alt="">
                        </div>
                        <div class="rs-thumb-2">
                            <img src="{{ asset('website/images/why-choose/chose-right-right.jpg') }}" alt="">
                            <img src="{{ asset('website/images/why-choose/chose-right-bottom.png') }}" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--======== Why Choose 2 Ends ========-->

    <!--======== Counter Start ========-->
    <section class="rs-counter pb-120">
        <div class="container">
            <div class="row">
                @foreach($counterSections as $counterSection)
                    <div class="col-lg-2 col-md-4 col-sm-6">
                        <div class="rs-counter__item">
                            <div class="icon">
                                <img width="53" src="{{ $counterSection->media?->url }}" onerror='src="{{ asset('website/images/counter/mobile-device.png') }}"' alt="">
                            </div>
                            <span style="direction: ltr"><span class="rs-count odometer" data-count="{{ $counterSection->count }}">00</span>+</span>
                            <h4 class="title">{!! $counterSection->title !!}</h4>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <!--======== Counter Ends ========-->

    <!--======== Testimonial Start ========-->
    <section class="rs-testimonial pt-110 pb-145">
        <div class="container">
            <div class="row">
                <div class="col-lg-3"></div>
                <div class="col-lg-6">
                    <div class="rs-section-title black">
                        <div class="top-sub-heading">
                            <img src="{{ asset('website/images/heart-pulse-rate-orange-2.svg') }}" alt="icon">
                            <span>{{ __('website.Testimonials') }}</span>
                            <img src="{{ asset('website/images/heart-pulse-rate-orange.svg') }}" alt="icon">
                        </div>
                        <h2 class="title-2 split-in-fade" style="color: #000 !important;">{{ __('website.What Customers Said About Our Lumin') }}</h2>
                    </div>
                </div>
                <div class="col-lg-3"></div>
            </div>
            <div class="rs-carousel owl-carousel nav-style1" data-loop="true" data-items="3" data-margin="30" data-autoplay="true" data-hoverpause="false" data-autoplay-timeout="5000" data-smart-speed="800" data-dots="false" data-nav="true" data-nav-speed="false" data-center-mode="false" data-mobile-device="1" data-mobile-device-nav="true" data-mobile-device-dots="false" data-ipad-device="2" data-ipad-device-nav="true" data-ipad-device-dots="false" data-ipad-device2="2" data-ipad-device-nav2="true" data-ipad-device-dots2="false" data-md-device="2" data-lg-device="3" data-md-device-nav="true" data-md-device-dots="false" data-doteach="false">
                @foreach($testimonials as $testimonial)
                    <div class="rs-testimonial__item">
                        <div class="rs-testimonial-content-box">
                            <p>{{ $testimonial->description }}</p>
                            <div class="rs-ratings">
                                <img src="{{ asset('website/images/testimonial/rating-1.png') }}" alt="rating">
                            </div>
                            <div class="rs-quote">
                                <img
                                        src="{{ asset('website/images/testimonial/quote-white.svg') }}" alt=""
                                        style="{{app()->getLocale() == 'en' ? '' : 'transform: rotate3d(0, 12, 1, 186deg)'}}"
                                >
                            </div>
                        </div>
                        <div class="rs-testimonial-user">
                            <div class="thumb">
                                <img
                                        src="{{ $testimonial->media?->url }}"
                                        onerror='src="{{ asset('website/images/testimonial/testi1.jpg') }}"'
                                        alt=""
                                >
                            </div>
                            <div class="content">
                                <h4 class="title">{{ $testimonial->title }}</h4>
                                <span>{{ $testimonial->job }}</span>
                                <div class="country">
                                    {{--                            <img src="{{ asset('website/images/testimonial/flag-1.jpg') }}" alt="">--}}
                                    {{--                            <span> New York, USA</span>--}}
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <!--======== Testimonial Ends ========-->

    <!--======== Brand Start ========-->
    <div class="rs-brand pb-90 pt-85">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="rs-brand__top-title">
                        <img src="{{ asset('website/images/heart-pulse-rate-orange-2.svg') }}" alt="">
                        <span>{{ __('website.More than 100+ Brands with work Lumin') }}</span>
                        <img src="{{ asset('website/images/heart-pulse-rate-orange.svg') }}" alt="">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="rs-brand__slider">
                        <div class="rs-carousel owl-carousel nav-style1" data-loop="true" data-items="5" data-margin="0" data-autoplay="true" data-hoverpause="true" data-autoplay-timeout="3000" data-smart-speed="500" data-dots="false" data-nav="false" data-nav-speed="false" data-center-mode="false" data-mobile-device="2" data-mobile-device-nav="false" data-mobile-device-dots="false" data-ipad-device="4" data-ipad-device-nav="false" data-ipad-device-dots="false" data-ipad-device2="3" data-ipad-device-nav2="false" data-ipad-device-dots2="false" data-md-device="4" data-lg-device="5" data-md-device-nav="false" data-md-device-dots="false" data-doteach="false">
                            @foreach($partners as $partner)
                                <div class="rs-brand-slider-item">
                                    <a href="{{ $partner->url ? $partner->url : '#' }}">
                                        <img src="{{ $partner->media?->url }}" alt="{{ $partner->title }}">
                                        <img class="item-2" src="{{ asset('website/images/brand/partner-white-1.png') }}" alt="">
                                    </a>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--======== Brand Ends ========-->
@endsection