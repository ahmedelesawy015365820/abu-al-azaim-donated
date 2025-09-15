@extends('layout.website.master')

@section('title',__('website.team'))

@section('content')
    <!--======== Team Page Banner Start ========-->
    <section class="rs-page-banner">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="rs-page-banner__content">
                        <h1 class="title">{{__('website.Faq')}}</h1>
                        <ul>
                            <li><i class="ri-home-wifi-line"></i> <a href="{{route('home')}}">{{__('website.home')}}</a></li>
                            <li><i class="ri-arrow-right-fill"></i> {{__('website.Faq')}}</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--======== Team Page Banner Ends ========-->

    <!--======== Faq Page Start ========-->
    <div class="rs-faq-page pt-120 pb-120">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="rs-faq-page__box">
                        <div class="rs-faq__wrapper">
                            @foreach($faqs as $index => $faq)
                                <div class="accordion {{ !$index ? 'active' : ''}}">
                                    <div class="accordion_tab active">
                                        {{ !$index ? '0' : ''}}{{ 1 + $index }} {{ $faq->title }}
                                        <div class="accordion_arrow">
                                            <i class="ri-add-fill"></i>
                                        </div>
                                    </div>
                                    <div class="accordion_content">
                                        <div class="accordion_item">
                                            <p>
                                                {{ $faq->description }}
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="rs-faq-page__thumb">
                        <img src="{{ asset('website/images/faq/faq-left-img.png') }}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--======== Faq Page Ends ========-->

    <!--======== Faq Contact Start ========-->
    <section class="rs-contact rs-faq-contact pt-110 pb-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-7"></div>
                <div class="col-lg-5">
                    <div class="rs-section-title black">
                        <div class="top-sub-heading">
                            <img src="{{ asset('website/images/heart-pulse-rate-orange-2.svg') }}" alt="icon">
                            <span>{{ __('website.contact') }}</span>
                            <img src="{{ asset('website/images/heart-pulse-rate-orange.svg') }}" alt="icon">

                        </div>
                        <h2 style="color: #000" class="title-2 split-in-fade">
                            {{ __('website.Send message') }}
                        </h2>
                    </div>
                    <div class="rs-contact__form-box">
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
        <div class="rs-contact__thumb">
            <img src="{{ asset('website/images/contact/contact-man.png') }}" alt="">
            <img class="item-2" src="{{ asset('website/images/contact/contact-image02.png') }}" alt="">
        </div>
        <div class="rs-contact__shape1">
            <img src="{{ asset('website/images/contact/circle-plus.svg') }}" alt="">
        </div>
        <div class="rs-contact__shape2">
            <img src="{{ asset('website/images/contact/contact_arrow_right.png') }}" alt="">
        </div>
    </section>
    <!--======== Faq Contact Ends ========-->
@endsection