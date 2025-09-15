@extends('layout.website.master')

@section('title',__('translation.project'))

@section('content')
      <!--======== Project Page Banner Start ========-->
    <section class="rs-page-banner">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="rs-page-banner__content">
                        <h1 class="title">{{ __('website.our_project') }}</h1>
                        <ul>
                            <li><i class="ri-home-wifi-line"></i> <a href="{{ route('home') }}">{{ __('website.home') }}</a></li>
                            <li><i class="ri-arrow-right-fill"></i> {{ __('website.our_project') }}</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--======== Project Page Banner Ends ========-->

    <!--======== Project Grid Start ========-->
    <div id="rs-portfolios" class="rs-project-3 rs-project-grid pt-115">
        <div class="rs-project-3__slider">
            <div class="container">
                <div class="row">
                    @foreach($Projects as $project)
                    <div class="col-lg-4">
                        <div class="rs-project-3__item">
                            <div class="rs-thumb">
                                <img src="{{$project->media->url}}" alt="{{ $project->title }}">
                            </div>
                            <div class="rs-project-overlay">
                                <div class="rs-project-content">
                                    <div class="rs-title">
                                        <a href="{{ route('project-details', ['slug' => $project->slug]) }}">{{ $project->title }}</a>
                                    </div>
                                    <div class="rs-category">
                                        <span><i class="ri-price-tag-3-line"></i><a href="{{ route('project-details', ['slug' => $project->slug]) }}">{{ $project->projectCategory->title }}</a></span>
                                    </div>
                                    <div class="rs-text">
                                        <p>{{ $project->description }}</p>
                                    </div>
                                </div>
                                <div class="rs-link">
                                    <a href="{{ route('project-details', ['slug' => $project->slug]) }}"><i class="ri-arrow-right-up-line"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    <!--======== Project Grid Ends ========-->

    <!--======== Project Cta Start ========-->
    <section class="rs-project-cta pt-80 pb-90">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="rs-project-cta__content">
                        <h2 class="title">{{ __('website.Do you have similar development requirements?') }}</h2>
                        <p>{{ __('website.Collaboratively administrate empowered markets via plug-and-play networks dynamically procrastinate') }}</p>
                        <a class="main-btn mt-40" href="{{ route('contact') }}">{{ __('website.Contact With Us') }} <i class="ri-arrow-right-fill"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="rs-thumb" style="direction: ltr!important;">
            <img src="{{ asset('website/images/project/call_to_action_man.png') }}" alt="">
        </div>
    </section>
    <!--======== Project Cta Ends ========-->

@endsection