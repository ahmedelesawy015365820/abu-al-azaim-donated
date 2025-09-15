@extends('layout.website.master')

@section('title',__('website.services'))

@section('content')
    <!--======== Service Details Page Banner Start ========-->
    <section class="rs-page-banner">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="rs-page-banner__content">
                        <h1 class="title">{{__('website.Service Details')}}</h1>
                        <ul>
                            <li><i class="ri-home-wifi-line"></i> <a href="{{route('home')}}">{{__('website.home')}}</a></li>
                            <li><i class="ri-arrow-right-fill"></i> {{__('website.Service Details')}}</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--======== Service Details Page Banner Ends ========-->

    <!--======== Service Details 1 Start ========-->
    <section class="rs-service-details pt-120 pb-120">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="rs-service-details__content">
                        <div class="rs-thumb">
                            <img src="{{ $service->image->url }}" alt="">
                        </div>
                        <div class="rs-content">
                            <h3 class="title">{{ app()->getLocale() == 'en' ? $service->title_en :$service->title_ar }}</h3>
                            <p>{{ app()->getLocale() == 'en' ? $service->description_en :$service->description_ar }}</p>
                            <div class="quote-text">
                                <p>“{{ app()->getLocale() == 'en' ? $service->quote_en :$service->quote_ar }}”</p>
                            </div>
                            {{-- <p>Proactively envisioned multimedia based expertise and cross-media growth strategies. Seamlessly visualize quality intellectual capital without superior collaboration and idea-sharing. Holistically pontificate installed base portals after maintainable products.</p> --}}
                            <h3 class="title mt-30"> {{__('website.Working challenge')}}</h3>
                            <div class="rs-service-list-box">
                                <div class="rs-thumb">
                                    <img src="{{ asset('website/images/service/service-detail-small-img.jpg')}}" alt="">
                                </div>
                                <div class="rs-list">
                                    <ul>
                                        <li><i class="ri-share-forward-fill"></i>{{__('website.Document the short and long term goals.')}} </li>
                                        <li><i class="ri-share-forward-fill"></i>{{__('website.Automated development pipelines.')}} </li>
                                        <li><i class="ri-share-forward-fill"></i>{{__('website.Objectively innovate empowered.')}} </li>
                                        <li><i class="ri-share-forward-fill"></i>{{__('website.Predominate extensible testing procedures.')}} </li>
                                        <li><i class="ri-share-forward-fill"></i>{{__('website.Phosfluorescently engage worldwide.')}} </li>
                                    </ul>
                                </div>
                            </div>
                            <h3 class="title pt-40 pb-15">{{__('website.Benefits with our services')}}</h3>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="rs-service-benefit">
                                        <h4 class="title">{{__('website.Flexible Solutions')}}</h4>
                                        <p>{{__('website.Proactively envisioned multimedia based expertise and cross-media growth.')}}</p>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="rs-service-benefit">
                                        <h4 class="title">{{__('website.24/7 Unlimited Support')}}</h4>
                                        <p>{{__('website.Collaboratively administrate empowered markets via plug-and-play networks.')}}</p>
                                    </div>
                                </div>
                            </div>
                            <h3 class="title pt-40 pb-15">{{__('website.Questions about service')}}</h3>
                            <div class="rs-faq__wrapper">

                                 @foreach ($service->serviceFaqs as $index => $faq)
                                    
                                    <div class="accordion {{ $index == 0 ?'active': ''}}">
                                        <div class="accordion_tab {{ $index == 0 ?'active': ''}}">
                                            0{{$index + 1}} {{ app()->getLocale() == 'en' ? $faq->title_en :$faq->title_ar }}
                                            <div class="accordion_arrow">
                                                <i class="ri-add-fill"></i>
                                            </div>
                                        </div>
                                        <div class="accordion_content">
                                            <div class="accordion_item">
                                                <p>{{ app()->getLocale() == 'en' ? $faq->description_en :$faq->description_ar }} </p>
                                            </div>
                                        </div>
                                    </div>
                                        
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="rs-service-details__sidebar">
                        <div class="category-box sidebar-common">
                            <div class="sidebar-top-title">
                                <h3 class="title">{{__('website.Categories')}}</h3>
                            </div>
                            <ul>
                                @foreach ($services as $category)
                                    <li><a href="{{ route('service-details', $category->slug) }}"><span>{{ app()->getLocale() == 'en' ? $category->title_en :$category->title_ar }}</span> <i class="ri-arrow-right-fill"></i></a></li>
                                @endforeach
                            </ul>
                        </div>
                        <div class="solution-box sidebar-common mt-40">
                            <h4 class="title">{{__('website.Do you have a Technical Issues?')}}</h4>
                            <a class="main-btn" href="{{route('contact')}}">{{__('website.Find Solution')}} <i class="ri-arrow-right-fill"></i></a>
                        </div>
                        <div class="download-box sidebar-common mt-40">
                            <div class="sidebar-top-title">
                                <h3 class="title">{{__('website.Download Brochure')}}</h3>
                            </div>
                            <ul>
                                
                                <li><a class="active" href="{{$service->pdf?->url}}" download><span>{{__('website.Download PDF')}}</span> <i class="ri-download-cloud-2-fill"></i></a></li>
                                {{-- <li><a class="active" href="#"><span>Download DOC</span> <i class="ri-download-cloud-2-fill"></i></a></li> --}}
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--======== Service Details 1 Ends ========-->
@endsection