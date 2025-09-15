@extends('layout.website.master')

@section('title',__('translation.project'))

@section('content')
    <!--======== Project Details Page Banner Start ========-->
    <section class="rs-page-banner">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="rs-page-banner__content">
                        <h1 class="title">{{ __('website.project_details') }}</h1>
                        <ul>
                            <li><i class="ri-home-wifi-line"></i> <a href="{{ route('home') }}">{{ __('website.home') }}</a></li>
                            <li><i class="ri-arrow-right-fill"></i>{{ __('website.project_details') }}</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--======== Project Details Page Banner Ends ========-->

    <!--======== Project Details Start ========-->
    <section class="rs-project-details pt-90 pb-120">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="rs-project-details__content mt-30 ">
                        <div class="rs-thumb">
                            <img src="{{$project->media->url}}" alt="{{ $project->title }}">
                        </div>
                        <div class="rs-project-content">
                            <h2 class="title">{{ $project->title }}</h2>
                            <p>{{ $project->description }}</p>
                            <h5> {{ __('website.Challenge and solution') }}</h5>
                            @if ($project->challenge )
                                <p>{{ $project->challenge }}</p>
                                <div class="rs-list-box">
                                    <ul>
                                        @foreach ($project->projectChallengeSolutions as $solution)
                                            <li><i class="ri-share-forward-fill"></i> {{ $solution->title }}</li>
                                        @endforeach
                                    </ul>
                                
                                </div>
                            @endif
                          
                            {{-- <p>Keeping your eye on the ball while performing a deep dive on the start-up mentality to convergence on cross-platform integration. Derive convergence on cross-platform integration taking seamless key performance indicators offline to maximise the long tail.</p> --}}
                            <div class="rs-project-sourc">
                                <div class="rs-project-play">
                                    <img src="{{ asset('website/images/project/dingle-dual-image-first.jpg') }}" alt="">
                                    <div class="play-icon">
                                        <a class="rs-popup-videos" href="{{ $project->link }}"><i class="fa fa-play"></i></a>
                                    </div>
                                </div>
                                <div class="rs-project-sourc-box">
                                    <div class="rs-thumb">
                                        <img src="{{ asset('website/images/project/dingle-dual-image-last.jpg') }}" alt="">
                                    </div>
                                    <div class="rs-project-list">
                                        <h4 class="title"> {{ __('website.Sourcing the best cases of the year') }}</h4>
                                        <ul>
                                            <li><i class="ri-checkbox-circle-line"></i> {{ __('website.Provided Professional and Certified') }}</li>
                                            <li><i class="ri-checkbox-circle-line"></i> {{ __('website.Trusted Legal Represent') }}</li>
                                            <li><i class="ri-checkbox-circle-line"></i> {{ __('website.Full Range Of Quality Services') }}</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <h5>{{ __('website.Project overview') }}</h5>
                            <p>{{ $project->overview }}</p>
                            {{-- <div class="project-author-content">
                                <p>“Proactively envisioned multimedia based expertise and cross-media growth strategies. Seamlessly visualize quality intellectual capital without superior.”</p>
                                <span><span>- Jhon Henry</span> , CEO at Notero JSC -</span>
                            </div> --}}
                            <div class="rs-project-bar">
                                <div class="rs-social">
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
                                <div class="rs-project-switch-btn">
                                    <ul>
                                        @if ($previousProject)
                                            <li><a class="main-btn" href="{{ route('project-details', ['slug' => $previousProject->slug]) }}"><i class="ri-arrow-left-fill"></i> {{ __('website.Prev Post') }}</a></li>
                                        @endif
                                        @if ($nextProject)
                                            <li><a class="main-btn" href="{{ route('project-details', ['slug' => $nextProject->slug]) }}"> <i class="ri-arrow-right-fill"></i>{{ __('website.Next Post') }}</a></li>
                                        @endif
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="rs-project-details__sidebar mt-30">
                        <div class="project-sidebar-category">
                            <h4 class="title">{{ __('website.Project Information') }}</h4>
                            <div class="sidebar-category-box">
                                <div class="sidebar-category-item">
                                    <div class="rs-icon">
                                        <img src="{{ asset('website/images/project/project-sidebar-icon-1.png') }}" alt="">
                                    </div>
                                    <div class="rs-content">
                                        <h5>{{ __('website.Client') }}</h5>
                                        <span>{{ $project->client }}</span>
                                    </div>
                                </div>
                                <div class="sidebar-category-item">
                                    <div class="rs-icon">
                                        <img src="{{ asset('website/images/project/project-sidebar-icon-2.png') }}" alt="">
                                    </div>
                                    <div class="rs-content">
                                        <h5>{{ __('website.Country') }}</h5>
                                        <span>{{ $project->country }}</span>
                                    </div>
                                </div>
                                <div class="sidebar-category-item">
                                    <div class="rs-icon">
                                        <img src="{{ asset('website/images/project/project-sidebar-icon-3.png') }}" alt="">
                                    </div>
                                    <div class="rs-content">
                                        <h5>{{ __('website.Core technologies') }}</h5>
                                        <span>{{ $project->core_technologies }}</span>
                                    </div>
                                </div>
                                <div class="sidebar-category-item">
                                    <div class="rs-icon">
                                        <img src="{{ asset('website/images/project/project-sidebar-icon-4.png') }}" alt="">
                                    </div>
                                    <div class="rs-content">
                                        <h5>{{ __('website.Industry') }}</h5>
                                        <span>{{ $project->industry }}</span>
                                    </div>
                                </div>
                                <div class="sidebar-category-item">
                                    <div class="rs-icon">
                                        <img src="{{ asset('website/images/project/project-sidebar-icon-5.png') }}" alt="">
                                    </div>
                                    <div class="rs-content">
                                        <h5>{{ __('website.Date') }}</h5>
                                        <span>{{ $project->created_at->format('F jS, Y') }}</span>
                                    </div>
                                </div>
                                <div class="sidebar-category-item">
                                    <div class="rs-icon">
                                        <img src="{{ asset('website/images/project/project-sidebar-icon-6.png') }}" alt="">
                                    </div>
                                    <div class="rs-content">
                                        <h5>{{ __('website.Cost') }}</h5>
                                        <span>{{ $project->cost }}</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="sidebar-category-contact mt-40">
                            <h4 class="title">{{ __('website.Get Professional Help') }}</h4>
                            <span>{{ __('website.Contact Us') }}</span>
                            <img src="{{ asset('website/images/project/phone-white.png') }}" alt="">
                            <div class="rs-link">
                                <a href="tel:+{{ $setting->mobile_1 }}">+{{ $setting->mobile_1 }}4</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--======== Project Details Ends ========-->

    <!--======== Project Details Cta Start ========-->
    <section class="rs-project-cta rs-project-details-cta mb-120">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="rs-project-cta-box pt-80 pb-90">
                        <div class="rs-project-cta__content">
                            <h2 class="title">{{__('website.Do you have similar development requirements?')}}</h2>
                            <p>{{__('website.Collaboratively administrate empowered markets via plug-and-play networks dynamically procrastinate')}}</p>
                            <a class="main-btn" href="{{ route('contact') }}">{{__('website.Contact With Us')}} <i class="ri-arrow-right-fill"></i></a>
                        </div>
                        <div class="rs-thumb" style="direction: ltr!important;">
                            <img src="{{ asset('website/images/project/call_to_action_man.png') }}" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--======== Project Details Cta Ends ========-->

@endsection