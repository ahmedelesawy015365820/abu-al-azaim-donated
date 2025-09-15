<section class="slider__area">
    <div class="swiper slider-active">
        <div class="swiper-wrapper">
            @foreach($homeSliders as $homeSlider)
                <div class="swiper-slide slider__bg" data-background="{{ $homeSlider->media?->url }}">
                    <div class="container custom-container-two">
                        <div class="row">
                            <div class="col-xl-7 col-lg-8">
                                <div class="slider__content">
                                    <span class="sub-title">{{ $homeSlider->current_translation?->title }}</span>
                                    <h2 class="title">{{ $homeSlider->current_translation?->description }}</h2>
                                    <a href="{{ route('contact') }}" class="btn">{{ __('website.Learn More') }} <img src="{{ asset('website/img/icons/right_arrow.svg')}}" alt="" class="injectable"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
