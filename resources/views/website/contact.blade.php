@extends('layout.website.master')

@section('title',__('website.contact'))

@section('content')
    <!--======== Contact Page Banner Start ========-->
    <section class="rs-page-banner">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="rs-page-banner__content">
                        <h1 class="title">{{__('website.contact')}}</h1>
                        <ul>
                            <li><i class="ri-home-wifi-line"></i> <a href="{{route('home')}}">{{__('website.home')}}</a></li>
                            <li><i class="ri-arrow-right-fill"></i> {{__('website.contact')}}</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--======== Contact Page Banner Ends ========-->

    <!--======== Contact Page Start ========-->
    <section class="rs-contact-page pt-120 pb-120">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="rs-contact-page__info">
                        <div class="rs-section-title black">
                            <h3 class="title-2 split-in-fade" style="color:rgb(0, 37, 89);">{{__('website.Get in touch with us')}}</h3>
                        </div>
                        <div class="rs-contact-page__info-box">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="info-box-item mb-15">
                                        <div class="rs-info-icon">
                                            <i class="ri-phone-line"></i>
                                        </div>
                                        <div class="rs-info-contact">
                                            <span>{{__('website.Call Us1')}}</span>
                                            <h5 class="title"><a href="tel:+{{ $setting->mobile_2 }}">{{ $setting->mobile_2 }}</a> </h5>
                                        </div>
                                    </div>
                                    <div class="info-box-item">
                                        <div class="rs-info-icon">
                                            <i class="ri-map-2-line"></i>
                                        </div>
                                        <div class="rs-info-contact">
                                            <span>{{__('website.officeAddress')}}</span>
                                            <h5 class="title">{!! $setting->address !!}</h5>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="info-box-item mb-15">
                                        <div class="rs-info-icon">
                                            <i class="ri-phone-line"></i>
                                        </div>
                                        <div class="rs-info-contact">
                                            <span>{{__('website.Call Us1')}}</span>
                                            <h5 class="title"><a href="tel:+{{ $setting->mobile_1 }}">{{ $setting->mobile_1 }}</a> </h5>
                                        </div>
                                    </div>
                                    <div class="info-box-item">
                                        <div class="rs-info-icon">
                                            <i class="ri-mail-send-line"></i>
                                        </div>
                                        <div class="rs-info-contact">
                                            <span>{{__('website.Email Address')}}</span>
                                            <h5 class="title"><a href="mailto:{{ $setting->email_1 }}">{{ $setting->email_1 }}</a></h5>
                                        </div>
                                    </div>
                                    <div class="info-box-item">
                                        <div class="rs-info-icon">
                                            <i class="ri-mail-send-line"></i>
                                        </div>
                                        <div class="rs-info-contact">
                                            <span>{{__('website.Email Address')}}</span>
                                            <h5 class="title"><a href="mailto:{{ $setting->email_2 }}">{{ $setting->email_2 }}</a></h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="rs-contact-page__info-social mt-20">
                            <h5 class="title">{{__('website.follow')}}</h5>
                            <ul>
                                @if($setting->facebook)
                                <li><a href="{{$setting->facebook}}"><i class="ri-facebook-fill"></i></a></li>
                                @endif
                                @if($setting->twitter)
                                <li><a href="{{$setting->twitter}}"><i class="ri-twitter-x-fill"></i></a></li>
                                @endif
                                @if($setting->linkedin)
                                <li><a href="{{ $setting->linkedin }}"><i class="ri-linkedin-fill"></i></a></li>
                                @endif
                                @if($setting->instagram)
                                <li><a href="{{ $setting->instagram }}"><i class="ri-instagram-fill"></i></a></li>
                                @endif
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="rs-contact-page__content">
                        <div class="rs-section-title black">
                            <h3 class="title-2 split-in-fade" style="color:rgb(0, 37, 89);">{{__('website.Let’s discuss the project')}}</h3>
                            <p>{{__('website.Leverage agile frameworks to provide a robust synopsis for high level overviews strategy foster collaborative thinking to further the overall value proposition diversity and empowerment')}}</p>
                        </div>
                        <form id="contact-form" action="{{ route('contact.store') }}" method="post">
                        @csrf
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="input-box">
                                        <input type="text" id="name" name="name" placeholder="{{ __('website.Your Name') }}">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="input-box">
                                        <input type="email" id="email" name="email" placeholder="{{ __('website.Your Email') }}">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="input-box">
                                        <input type="text" id="topic" name="topic" placeholder="{{ __('website.Your Topic') }}">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="input-box">
                                        <input type="text" id="phone" name="phone" placeholder="{{ __('website.Your Phone') }}">
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="input-box">
                                        <textarea name="message" id="message" placeholder="{{ __('website.Message') }}"></textarea>
                                        <button type="submit" class="main-btn">
                                            {{ __('website.Send message') }}
                                            @if (app()->getLocale() == 'en')
                                                <i class="ri-arrow-left-fill"></i>
                                            @else
                                                <i class="ri-arrow-right-fill"></i>
                                            @endif
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </form>
                        <p id="form-messages" class="form-message"></p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--======== Contact Page Ends ========-->

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

    <!--======== Contact Map Start ========-->
    <div class="rs-contact-map">
        {!! $setting->map !!}
    </div>
    <!--======== Contact Map Ends ========-->
@endsection