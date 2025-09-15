<div class="brand__area mt-5 section-pb-120">
    <div class="container">
        <div class="swiper brand-active">
            <div class="swiper-wrapper">
                @foreach($partners as $partner)
                <div class="swiper-slide">
                    <div class="brand__item">
                        <img alt="{{ $partner->current_translation?->title }}" src="{{ $partner->media?->url }}">
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>