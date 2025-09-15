<section class="about__area-two section-py-120">
    <div class="container">
        <div class="row align-items-center justify-content-center">
            <div class="col-lg-6 col-md-10">
                <div class="about__img-wrap-two">
                    <img src="{{ $oneAbout->firstPhoto?->url }}" onerror='src="{{ asset('website/img/images/inner_about01.jpg') }}"' alt="img" class="wow img-custom-anim-right animated" data-wow-duration="1.5s" data-wow-delay="0.2s">
                    <img src="{{ $oneAbout->secondPhoto?->url }}" onerror='src="{{ asset('website/img/images/inner_about02.jpg') }}"'  alt="img" class="wow img-custom-anim-left animated" data-wow-duration="1.5s" data-wow-delay="0.4s">
                    <img src="{{ $oneAbout->thirdPhoto?->url }}" onerror='src="{{ asset('website/img/images/inner_about03.jpg.jpg') }}"'  alt="img" class="wow img-custom-anim-top animated" data-wow-duration="1.5s" data-wow-delay="0.6s">
                </div>
            </div>
            <div class="col-lg-6">
                <div class="about__content-two">
                    <div class="section__title section__title-three mb-25">
                        <span class="sub-title">{{ __('website.More About Us') }}</span>
                        <h2 class="title">{{ $oneAbout->current_translation?->title }}</h2>
                    </div>
                    <p>{{ $oneAbout->current_translation?->description }}</p>
                    <div class="experience__wrap">
                        <div class="experience__box">
                            <h3 class="title">{{ $oneAbout->years_experience }}+</h3>
                            <span>{!! __('website.years') !!}</span>
                        </div>
                        <div class="about__list-box-two">
                            <ul class="list-wrap">
                                @foreach($oneAbout->details as $details)
                                    <li>{{ $details->current_translation?->title }}</li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                    <div class="about__content-bottom">
                        <div class="about__customer-box">
                            <h4 class="title">{{ $oneAbout->number_of_user }}+ {{ __('website.User') }}</h4>
                            <ul class="list-wrap customer">
                                <li><img src="{{ asset('website/img/images/author01.png') }}" alt="img"></li>
                                <li><img src="{{ asset('website/img/images/author02.png') }}" alt="img"></li>
                                <li><img src="{{ asset('website/img/images/author03.png') }}" alt="img"></li>
                                <li><img src="{{ asset('website/img/images/author04.png') }}" alt="img"></li>
                            </ul>
                        </div>
                        <a href="{{ route('service') }}" class="btn btn-two">{{ __('website.Book Your Service') }}</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>