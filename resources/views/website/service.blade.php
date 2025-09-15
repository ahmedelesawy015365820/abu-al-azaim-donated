@extends('layout.website.master')

@section('title',__('website.services'))

@section('content')
<!--======== Service Page Banner Start ========-->
<section class="rs-page-banner">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="rs-page-banner__content">
                    <h1 class="title"> {{__('website.services')}}</h1>
                    <ul>
                        <li><i class="ri-home-wifi-line"></i> <a href="{{route('home')}}">{{__('website.home')}}</a></li>
                        <li><i class="ri-arrow-right-fill"></i> {{__('website.services')}}</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<!--======== Service Page Banner Ends ========-->

<!--======== Service Grid 1 Start ========-->
<section class="rs-service-grid  pt-115 ">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <div class="rs-section-title black">
                    <div class="top-sub-heading">
                        <img src="{{ asset('website/images/heart-pulse-rate-orange-2.svg') }}" alt="icon">
                        <span>{{__('website.Our Featured Services')}}</span>
                        <img src="{{ asset('website/images/heart-pulse-rate-orange.svg') }}" alt="icon">
                    </div>
                    <h2 class="title-2 split-in-fade" style="color:#000 !important;">{{__('website.We run all kinds of IT services')}}</h2>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="rs-service-grid-top-text">
                    <p> {{__('website.Bring to the table win-win survival strategies to ensure proactive domination At the end of the day.')}}</p>
                </div>
            </div>
        </div>
        <div class="row">
            @foreach ($services as $service)
                  <div class="col-lg-4 col-sm-6">
                <div class="rs-featured-2__item">
                    <div class="rs-thumb">
                        <img src="{{ $service->image->url }}" alt="{{ app()->getLocale() == 'en' ? $service->title_en :$service->title_ar }}">
                    </div>
                    <div class="rs-content">
                        <div class="rs-icon">
                            <img src="{{ $service->icon->url }}" alt="{{ app()->getLocale() == 'en' ? $service->title_en :$service->title_ar }}">
                        </div>
                        <h4 class="title"><a href="{{ route('service-details', $service->slug) }}">{{ app()->getLocale() == 'en' ? $service->title_en :$service->title_ar }}</a></h4>
                        <p>{{ app()->getLocale() == 'en' ? $service->description_en :$service->description_ar }}</p>
                        <div class="rs-link">
                            <a class="rs-link" href="{{ route('service-details', $service->slug) }}">{{__('website.Read More')}} <i class="ri-arrow-right-fill"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
          
           
        </div>
    </div>
</section>
<!--======== Service Grid 1 Ends ========-->

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