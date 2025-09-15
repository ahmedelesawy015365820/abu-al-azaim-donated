<section class="cta__area fix">
    <div class="cta__bg" data-background="{{ asset('website/img/bg/cta_bg.jpg')}}"></div>
    <div class="container">
        <div class="row align-items-end">
            <div class="col-lg-8">
                <div class="cta__content">
                    <h2 class="title">{{ __('website.Ready to work with our team?') }}</h2>
                    <div class="cta__btn">
                        <a href="{{ route('contact') }}" class="btn btn-two">{{ __('website.Let’s build together') }}<img src="{{ asset('website/img/icons/right_arrow.svg')}}" alt="" class="injectable"></a>
                        <a href="{{ route('contact') }}" class="btn transparent-btn">{{ __('website.Contact With Us') }} <img src="{{ asset('website/img/icons/right_arrow.svg')}}" alt="" class="injectable"></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="cta__content-right" data-aos="fade-up" data-aos-delay="600">
                    <h4 class="title">{{ __('website.Leading Developer Of Commercial & Residential Projects') }}</h4>
                </div>
            </div>
        </div>
    </div>
    <div class="cta__shape">
        <img src="{{ asset('website/img/images/cta_shape.png')}}" alt="shape" data-aos="fade-down-left" data-aos-delay="400">
    </div>
</section>