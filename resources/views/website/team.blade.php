@extends('layout.website.master')

@section('title',__('website.team'))

@section('content')
    <!--======== Team Page Banner Start ========-->
    <section class="rs-page-banner">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="rs-page-banner__content">
                        <h1 class="title">{{__('website.team')}}</h1>
                        <ul>
                            <li><i class="ri-home-wifi-line"></i> <a href="{{route('home')}}">{{__('website.home')}}</a></li>
                            <li><i class="ri-arrow-right-fill"></i> {{__('website.team')}}</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--======== Team Page Banner Ends ========-->

    <!--======== Team Grid Start ========-->
    <section class="rs-team-grid mt-110 pb-120 ">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="rs-section-title black">
                        <div class="top-sub-heading">
                            <img src="{{ asset('website/images/heart-pulse-rate-orange-2.svg') }}" alt="icon">
                            <span>{{__('website.Profesional People')}}</span>
                            <img src="{{ asset('website/images/heart-pulse-rate-orange.svg') }}" alt="icon">
                        </div>
                        <h2 class="title-2 split-in-fade" style="color: #000 !important;">{{__('website.Meet our expert team member')}}</h2>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="rs-team-text">
                        <p>{{__('website.Bring to the table win-win survival strategies to ensure proactive domination At the end of the day.')}}</p>
                    </div>
                </div>
            </div>
            <div class="row">
                @foreach($teams as $team)
                <div class="col-lg-3 col-sm-6">
                    <div class="rs-team-3__item mt-30">
                        <div class="rs-thumb">
                            <img src="{{ $team->media?->url }}" alt="{{ $team->title }}">
                            <div class="rs-social">
{{--                                <div class="share-icon">--}}
{{--                                    <i class="ri-share-line"></i>--}}
{{--                                </div>--}}
{{--                                <ul>--}}
{{--                                    <li><a href="#"><i class="ri-facebook-line"></i></a></li>--}}
{{--                                    <li><a href="#"><i class="ri-twitter-x-line"></i></a></li>--}}
{{--                                    <li><a href="#"><i class="ri-linkedin-line"></i></a></li>--}}
{{--                                </ul>--}}
                            </div>
                        </div>
                        <div class="rs-content">
                            <a href="#"><span>{{ $team->title }}</span></a>
                            <span>{{ $team->job }}</span>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
    <!--======== Team Grid Ends ========-->
@endsection