<section class="faq__area section-py-120">
    <div class="container">
        <div class="row">
            <div class="col-xl-6 col-lg-7">
                <div class="section__title mb-70">
                    <h2 class="title">{{ $faqSection->current_translation?->title }}</h2>
                    <h1 class="number">03</h1>
                </div>
            </div>
        </div>
        <div class="row align-items-center justify-content-center">
            <div class="col-lg-6 col-md-10">
                <div class="faq__img wow img-custom-anim-left animated"  data-wow-duration="1.5s" data-wow-delay="0.1s">
                    <img src="{{ $faqSection->media?->url }}" onerror="src='{{ asset('website/img/images/faq_img.jpg') }}'" alt="img">
                    <div class="faq__img-content">
                        <h5 class="title">{!! $faqSection->current_translation?->description !!}</h5>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="faq__wrap">
                    <div class="accordion" id="accordionExample">
                        @foreach($faqs as $index => $faq)
                            <div class="accordion-item">
                                <h2 class="accordion-header">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne-{{$index}}" aria-expanded="true" aria-controls="collapseOne{{$index}}">
                                        {{ $faq->current_translation?->title }}
                                    </button>
                                </h2>
                                <div id="collapseOne-{{$index}}" class="accordion-collapse collapse {{ $index == 0 ? 'show' : '' }}" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <p>{!! $faq->current_translation?->description !!}</p>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>