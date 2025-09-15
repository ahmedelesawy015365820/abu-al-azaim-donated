@extends('layout.website.master')

@section('title', __('website.home'))

@section('content')

<!-- start of wpo-hero-slide-section-->
<section class="wpo-hero-slider">
    <div class="swiper-container">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <div class="slide-inner slide-bg-image" data-background="{{ asset('website/images/slider/slide-1.jpg') }}">
                    <div class="container-fluid">
                        <div class="slide-content">
                            <div data-swiper-parallax="300" class="slide-title">
                                <span>We can brighten every child's future.</span>
                            </div>
                            <div data-swiper-parallax="400" class="slide-sub-title">
                                <h2>Give support
                                    to <span>poverties</span> & <span class="text">Old</span>
                                    non profit Care</h2>
                            </div>
                            <div data-swiper-parallax="500" class="slide-btns">
                                <a href="about.html" class="theme-btn">About Us</a>
                                <div class="call">
                                    <div class="icon">
                                        <i class="flaticon-phone"></i>
                                    </div>
                                    <div class="text">
                                        <h3>Call Us Now</h3>
                                        <span>+025 757 576 560</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="bg-shape">
                        <img src="{{ asset('website/images/slider/shape-1.svg') }}" alt="">
                    </div>
                    <div class="shape-1">
                        <img src="{{ asset('website/images/slider/shape-2.svg') }}" alt="">
                    </div>
                    <div class="shape-2">
                        <img src="{{ asset('website/images/slider/shape-3.svg') }}" alt="">
                    </div>
                    <div class="shape-3">
                        <img src="{{ asset('website/images/slider/shape-4.png') }}" alt="">
                    </div>
                    <div class="shape-4">
                        <img src="{{ asset('website/images/slider/shape-5.svg') }}" alt="">
                    </div>
                    <div class="shape-5">
                        <img src="{{ asset('website/images/slider/shape-6.svg') }}" alt="">
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="slide-inner slide-bg-image" data-background="{{ asset('website/images/slider/slide-2.jpg') }}">
                    <div class="container-fluid">
                        <div class="slide-content">
                            <div data-swiper-parallax="300" class="slide-title">
                                <span>We are always open for children</span>
                            </div>
                            <div data-swiper-parallax="400" class="slide-sub-title">
                                <h2>Give support
                                    to <span>poverties</span> & <span class="text">Old</span>
                                    non profit Care</h2>
                            </div>
                            <div data-swiper-parallax="500" class="slide-btns">
                                <a href="about.html" class="theme-btn">About Us</a>
                                <div class="call">
                                    <div class="icon">
                                        <i class="flaticon-phone"></i>
                                    </div>
                                    <div class="text">
                                        <h3>Call Us Now</h3>
                                        <span>+025 757 576 560</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="bg-shape">
                        <img src="{{ asset('website/images/slider/shape-1.svg') }}" alt="">
                    </div>
                    <div class="shape-1">
                        <img src="{{ asset('website/images/slider/shape-2.svg') }}" alt="">
                    </div>
                    <div class="shape-2">
                        <img src="{{ asset('website/images/slider/shape-3.svg') }}" alt="">
                    </div>
                    <div class="shape-3">
                        <img src="{{ asset('website/images/slider/shape-4.png') }}" alt="">
                    </div>
                    <div class="shape-4">
                        <img src="{{ asset('website/images/slider/shape-5.svg') }}" alt="">
                    </div>

                </div>
            </div>
        </div>
        <!-- end swiper-wrapper -->

        <!-- swipper controls -->
        <div class="swiper-pagination"></div>
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
    </div>
</section>

<!-- Start partners -->
<section class="partners-section">
    <h2 class="d-none">No Content</h2>
    <ul class="partners-slider">
        <li>
            <div>
                <img src="{{ asset('website/images/partners/1.png') }}" alt="">
            </div>
        </li>
        <li>
            <div>
                <img src="{{ asset('website/images/partners/2.png') }}" alt="">
            </div>
        </li>
        <li>
            <div>
                <img src="{{ asset('website/images/partners/3.png') }}" alt="">
            </div>
        </li>
        <li>
            <div>
                <img src="{{ asset('website/images/partners/4.png') }}" alt="">
            </div>
        </li>
        <li>
            <div>
                <img src="{{ asset('website/images/partners/5.png') }}" alt="">
            </div>
        </li>
        <li>
            <div>
                <img src="{{ asset('website/images/partners/6.png') }}" alt="">
            </div>
        </li>
        <li>
            <div>
                <img src="{{ asset('website/images/partners/7.png') }}" alt="">
            </div>
        </li>
        <li>
            <div>
                <img src="{{ asset('website/images/partners/4.png') }}" alt="">
            </div>
        </li>

    </ul>
</section>
<!-- end partners -->

<!-- start funfact -->
<section class="funfact-section section-padding">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 col-12 wow fadeInLeft" data-wow-delay="0.1s">
                <div class="content">
                    <h2>Hope, Support, and Love for All</h2>
                    <h3>We work together
                        & never <span>give</span> up</h3>
                    <p>We work together to make a lasting difference, helping people. With kindness and hard work, we bring hope and make positive changes for those in need.</p>
                    <a href="tel:+4733378901">
                        <i class="flaticon-phone-call"></i>
                        <span>(415) 555-98 76 44</span>
                    </a>
                </div>
            </div>
            <div class="col-lg-6 col-12 wow fadeInRight" data-wow-delay="0.1s">
                <div class="funfact">
                    <ul>
                        <li>
                            <div class="count">
                                <h3><span class="odometer" data-count="500">00</span>+</h3>
                            </div>
                            <span>Cities we have connected</span>
                        </li>
                        <li>
                            <div class="count">
                                <h3><span class="odometer" data-count="1.2">00</span>m</h3>
                            </div>
                            <span>Raise funds every month</span>
                        </li>
                        <li>
                            <div class="count">
                                <h3><span class="odometer" data-count="100">00 </span>+</h3>
                            </div>
                            <span>We have monthly donor</span>
                        </li>
                        <li>
                            <div class="count">
                                <h3><span class="odometer" data-count="95">00</span>%</h3>
                            </div>
                            <span>Successful campains</span>
                        </li>

                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="shape">
        <img src="{{ asset('website/images/funfuck-shape.svg') }}" alt="">
    </div>
</section>
<!-- end funfact -->

<!-- start about -->
<section class="about-section section-padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-12">
                <div class="about-image">
                    <div class="img-1">
                        <img src="{{ asset('website/images/about/about-1.jpg') }}" alt="">
                        <a href="https://www.youtube.com/embed/VqmFKnHG5q8?si=YcvnY_zzMv21k4iM"
                            class="video-btn" data-type="iframe">
                            <i class="flaticon-play"></i>
                        </a>
                    </div>
                    <div class="img-2">
                        <img src="{{ asset('website/images/about/about-2.jpg') }}" alt="">
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-12 wow fadeInRight" data-wow-delay="0.1s">
                <div class="about-content">
                    <h2>Building Brighter Futures Through Kindness.</h2>
                    <h3>Helping each other can
                        make <span>world</span> better</h3>
                    <p>Helping each other creates a stronger, kinder world. We build trust, spread compassion, and inspire others to do the same. Together, we can overcome challenges and make lasting positive changes.</p>

                    <div class="inner-content">
                        <div class="inner-item">
                            <div class="icon">
                                <i class="flaticon-charity"></i>
                            </div>
                            <div class="content">
                                <h4>Trusted organization</h4>
                                <span>AidUs is a trusted and reliable organization dedicated to making real, positive change.</span>
                            </div>
                        </div>
                        <div class="inner-item">
                            <div class="icon">
                                <i class="flaticon-medal"></i>
                            </div>
                            <div class="content">
                                <h4>Awarded services</h4>
                                <span>We are known for its awarded services, recognized for impactful solutions.</span>
                            </div>
                        </div>
                    </div>
                    <ul>
                        <li><i class="flaticon-check"></i>We help companies develop powerful corporate social 
                            <a href="#">Responsibility</a>
                        </li>
                        <li><i class="flaticon-check"></i>Helped fund 3,265 Project powerful corporate poor.
                        </li>
                    </ul>
                    <div class="about-btn">
                        <a href="about.html" class="theme-btn">About Us</a>
                        <div class="ceo">
                            <div class="image">
                                <img src="{{ asset('website/images/about/ceo.jpg') }}" alt="">
                            </div>
                            <div class="text">
                                <h4>Moses Fahey</h4>
                                <span>Ceo & Founder</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="shape-1">
        <img src="{{ asset('website/images/about/shape1.svg') }}" alt="">
    </div>
    <div class="shape-2">
        <img src="{{ asset('website/images/about/shape2.svg') }}" alt="">
    </div>
    <div class="shape-3">
        <img src="{{ asset('website/images/about/shape3.svg') }}" alt="">
    </div>
    <div class="shape-4">
        <img src="{{ asset('website/images/about/shape4.svg') }}" alt="">
    </div>
    <div class="shape-5">
        <img src="{{ asset('website/images/about/shape5.svg') }}" alt="">
    </div>
    <div class="shape-6">
        <img src="{{ asset('website/images/about/shape6.svg') }}" alt="">
    </div>
</section>
<!-- end about -->

<!-- start mission vission -->
<section class="MV-section">
    <div class="container-fluid p-0">
        <div class="row g-0">
            <div class="col-xl-4 col-lg-6 col-md-6 col-12">
                <div class="card-mv wow fadeInUp" data-wow-delay="0.1s">
                    <img src="{{ asset('website/images/mission-vission/1.jpg') }}" alt="">
                    <div class="icon">
                        <a href="event-single.html"><i>+</i>
                            <div class="shape">
                                <svg viewBox="0 0 98 99" fill="none">
                                    <path
                                        d="M0 0H98V99C98 99 61.8947 91.6967 42.5526 55.9918C23.2105 20.2869 0 0 0 0Z"
                                        fill="#F74F22" />
                                </svg>
                            </div>
                        </a>
                    </div>
                    <div class="text">
                        <h2><a href="event-single.html">Food & water Charity.</a></h2>
                        <i class="flaticon-tap"></i>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-6 col-md-6 col-12">
                <div class="card-mv wow fadeInUp" data-wow-delay="0.2s">
                    <img src="{{ asset('website/images/mission-vission/2.jpg') }}" alt="">
                    <div class="icon">
                        <a href="event-single.html"><i>+</i>
                            <div class="shape">
                                <svg viewBox="0 0 98 99" fill="none">
                                    <path
                                        d="M0 0H98V99C98 99 61.8947 91.6967 42.5526 55.9918C23.2105 20.2869 0 0 0 0Z"
                                        fill="#F74F22" />
                                </svg>
                            </div>
                        </a>
                    </div>
                    <div class="text">
                        <h2><a href="event-single.html">Become a volunteer</a></h2>
                        <i class="flaticon-handshake"></i>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-lg-6 col-md-6 col-12">
                <div class="card-mv wow fadeInUp" data-wow-delay="0.1s">
                    <img src="{{ asset('website/images/mission-vission/3.jpg') }}" alt="">
                    <div class="icon">
                        <a href="event-single.html"><i>+</i>
                            <div class="shape">
                                <svg viewBox="0 0 98 99" fill="none">
                                    <path
                                        d="M0 0H98V99C98 99 61.8947 91.6967 42.5526 55.9918C23.2105 20.2869 0 0 0 0Z"
                                        fill="#F74F22" />
                                </svg>
                            </div>
                        </a>
                    </div>
                    <div class="text">
                        <h2><a href="event-single.html">Send gift for children</a></h2>
                        <i class="flaticon-gift"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end mission vission -->

<!-- start service -->
<section class="service-section section-padding">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-8 col-12">
                <div class="section-title">
                    <span>Together, We Can Change Lives Forever.</span>
                    <h2>our non-profit services
                        you must love</h2>
                </div>
            </div>
            <div class="col-lg-4 col-12">
                <div class="all-Service-btn">
                    <a href="service.html" class="theme-btn">All Services</a>
                </div>
            </div>
        </div>
        <div class="service-wrap">
            <div class="row">
                <div class="col-lg-5 col-12">
                    <div class="service-left">
                        <ul>
                            <li>
                                <a href="service-single.html"><i class="flaticon-fund"></i>Fund Raised &
                                    Donation</a>
                            </li>
                            <li>
                                <a href="service-single.html" class="active"><i
                                        class="flaticon-first-aid-kit"></i>Medical
                                    Treatment Help</a>
                            </li>
                            <li>
                                <a href="service-single.html"><i class="flaticon-charity"></i>development
                                    programs</a>
                            </li>
                            <li>
                                <a href="service-single.html"><i class="flaticon-cardiogram"></i>Child medical
                                    research</a>
                            </li>
                            <li>
                                <a href="service-single.html"><i class="flaticon-gift-box"></i>Corporate Gifts
                                    donate</a>
                            </li>
                        </ul>
                        <div class="s-more">
                            <a href="service.html">More Services</a>
                        </div>
                        <div class="shape">
                            <svg width="58" height="59" viewBox="0 0 58 59" fill="none">
                                <path
                                    d="M54.2137 14.9275C54.2946 23.4127 50.103 33.234 41.2272 34.6262C37.1014 35.2805 32.7028 33.2479 30.8405 29.3128C29.3958 26.2582 30.6579 22.3036 34.283 22.3228L34.2834 22.3229C36.8308 22.4389 39.1016 23.8711 40.3776 26.1666C45.2298 34.7562 35.5413 42.6647 28.2657 43.9192C19.8266 45.3851 11.4459 42.0345 5.84436 35.6938C5.03073 34.7748 3.55462 36.121 4.36829 37.04C10.4434 43.9139 19.4507 47.4913 28.578 45.8928C36.012 44.5998 43.8881 38.6038 43.3965 29.7439C43.2909 27.8559 42.7123 26.0594 41.7215 24.5411C40.7307 23.0228 39.363 21.8381 37.7608 21.1094C35.1648 19.9251 31.342 19.8652 29.3149 22.5945C26.9759 25.7034 28.6092 30.1415 30.6692 32.6273C33.0047 35.3931 36.3868 36.8987 39.9684 36.7675C50.3966 36.3523 56.1943 24.9281 56.0937 15.0108C56.0797 13.7323 54.2016 13.6272 54.2143 14.9274L54.2137 14.9275Z"
                                    fill="#F74F22" />
                                <path
                                    d="M8.63745 45.0051C7.10278 41.9681 5.74123 38.8277 4.55951 35.6002L3.84907 37.0423C7.72181 36.3585 11.5486 35.3144 15.2857 33.9219C16.4345 33.49 16.1333 31.5058 14.9742 31.9486C11.2394 33.3434 7.4142 34.3881 3.5432 35.0709C3.25617 35.1419 3.00764 35.3474 2.86862 35.6295C2.73 35.9117 2.71602 36.2392 2.83057 36.5193C4.00526 39.7433 5.35851 42.8809 6.88467 45.9158C7.44574 47.0269 9.18094 46.1094 8.60779 44.9946L8.63745 45.0051Z"
                                    fill="#F74F22" />
                            </svg>
                        </div>
                    </div>
                </div>
                <div class="col-lg-7 col-12">
                    <div class="service-image">
                        <ul>
                            <li><img src="{{ asset('website/images/service/1.jpg') }}" alt="">
                                <a href="https://www.youtube.com/embed/VqmFKnHG5q8?si=YcvnY_zzMv21k4iM"
                                    class="video-btn" data-type="iframe">
                                    <i class="flaticon-play"></i>
                                </a>
                            </li>
                            <li><img src="{{ asset('website/images/service/2.jpg') }}" alt=""></li>
                            <li><img src="{{ asset('website/images/service/3.jpg') }}" alt=""></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="shape-1">
        <img src="{{ asset('website/images/service/shape-1.svg') }}" alt="">
    </div>
    <div class="shape-2">
        <img src="{{ asset('website/images/service/shape-2.svg') }}" alt="">
    </div>
</section>
<!-- end service -->

<!-- start causes -->
<section class="causes-section section-padding pt-0">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-12">
                <div class="section-title">
                    <span>Charity makes no decrease in property.</span>
                    <h2>Helping each other can
                        make <span>world</span> better</h2>
                </div>
            </div>
        </div>
    </div>
    <div class="causes-slider owl-carousel">
        <div class="causes-card">
            <div class="image">
                <span>Health</span>
                <img src="{{ asset('website/images/causes/1.jpg') }}" alt="">
            </div>
            <div class="text">
                <h2><a href="causes-single.html">Bringing Clean Water to Rural Communities</a></h2>
                <p>Our initiative provides clean water to rural communities, improving health</p>
            </div>
            <div class="progress-wrap">
                <div class="progress-item">
                    <div class="progress">
                        <div class="bar" style="width: 90%;"></div>
                    </div>
                    <span class="cssProgress-label">90%</span>
                </div>
                <ul>
                    <li>
                        <span class="title">Goal:</span>
                        <span>$20.000</span>
                    </li>
                    <li>
                        <span class="title">Raised:</span>
                        <span>$20.000</span>
                    </li>
                    <li>
                        <span class="title">Goal:</span>
                        <span>$20.000</span>
                    </li>
                </ul>
            </div>
        </div>
        <div class="causes-card">
            <div class="image">
                <span>Health</span>
                <img src="{{ asset('website/images/causes/3.jpg') }}" alt="">
            </div>
            <div class="text">
                <h2><a href="causes-single.html">Lifeskills for Children in South Africa</a></h2>
                <p>Teaching life skills to children in Africa empowers them for a brighter.</p>
            </div>
            <div class="progress-wrap">
                <div class="progress-item">
                    <div class="progress">
                        <div class="bar" style="width: 90%;"></div>
                    </div>
                    <span class="cssProgress-label">90%</span>
                </div>
                <ul>
                    <li>
                        <span class="title">Goal:</span>
                        <span>$20.000</span>
                    </li>
                    <li>
                        <span class="title">Raised:</span>
                        <span>$20.000</span>
                    </li>
                    <li>
                        <span class="title">Goal:</span>
                        <span>$20.000</span>
                    </li>
                </ul>
            </div>
        </div>
        <div class="causes-card">
            <div class="image">
                <span>Health</span>
                <img src="{{ asset('website/images/causes/2.jpg') }}" alt="">
            </div>
            <div class="text">
                <h2><a href="causes-single.html">Providing Healthy Food for the children</a></h2>
                <p>We provide healthy food for children, ensuring they grow strong.</p>
            </div>
            <div class="progress-wrap">
                <div class="progress-item">
                    <div class="progress">
                        <div class="bar" style="width: 90%;"></div>
                    </div>
                    <span class="cssProgress-label">90%</span>
                </div>
                <ul>
                    <li>
                        <span class="title">Goal:</span>
                        <span>$20.000</span>
                    </li>
                    <li>
                        <span class="title">Raised:</span>
                        <span>$20.000</span>
                    </li>
                    <li>
                        <span class="title">Goal:</span>
                        <span>$20.000</span>
                    </li>
                </ul>
            </div>
        </div>
        <div class="causes-card">
            <div class="image">
                <span>Health</span>
                <img src="{{ asset('website/images/causes/3.jpg') }}" alt="">
            </div>
            <div class="text">
                <h2><a href="causes-single.html">Improving Access to Medical Care in Remote Areas</a></h2>
                <p>Bringing healthcare closer to those in need, we reduce disparities.</p>
            </div>
            <div class="progress-wrap">
                <div class="progress-item">
                    <div class="progress">
                        <div class="bar" style="width: 90%;"></div>
                    </div>
                    <span class="cssProgress-label">90%</span>
                </div>
                <ul>
                    <li>
                        <span class="title">Goal:</span>
                        <span>$20.000</span>
                    </li>
                    <li>
                        <span class="title">Raised:</span>
                        <span>$20.000</span>
                    </li>
                    <li>
                        <span class="title">Goal:</span>
                        <span>$20.000</span>
                    </li>
                </ul>
            </div>
        </div>
        <div class="causes-card">
            <div class="image">
                <span>Health</span>
                <img src="{{ asset('website/images/causes/4.jpg') }}" alt="">
            </div>
            <div class="text">
                <h2><a href="causes-single.html">Help Children Rise out of Poverty</a></h2>
                <p>We help children rise out of poverty by providing education and support.</p>
            </div>
            <div class="progress-wrap">
                <div class="progress-item">
                    <div class="progress">
                        <div class="bar" style="width: 90%;"></div>
                    </div>
                    <span class="cssProgress-label">90%</span>
                </div>
                <ul>
                    <li>
                        <span class="title">Goal:</span>
                        <span>$20.000</span>
                    </li>
                    <li>
                        <span class="title">Raised:</span>
                        <span>$20.000</span>
                    </li>
                    <li>
                        <span class="title">Goal:</span>
                        <span>$20.000</span>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="shape">
        <img src="{{ asset('website/images/causes/shape.svg') }}" alt="">
    </div>
    <div class="shape-2">
        <img src="{{ asset('website/images/causes/bg.jpg') }}" alt="">
    </div>
</section>
<!-- end causes -->

<!-- start cta -->
<section class="cta-section">
    <div class="container">
        <div class="content">
            <span>Compassion in Action: Join Us Today</span>
            <h3>children need your help
                by donating today</h3>
            <a href="causes-single.html" class="theme-btn">become voluteer</a>
        </div>
    </div>
    <div class="shape">
        <img src="{{ asset('website/images/cta-shap.svg') }}" alt="">
    </div>
    <div class="shape-1">
        <img src="{{ asset('website/images/curved_shape.svg') }}" alt="">
    </div>
    <div class="shape-2">
        <img src="{{ asset('website/images/arrow1.svg') }}" alt="">
    </div>
</section>
<!-- end cta -->

<!-- start project -->
<section class="project-section section-padding">
    <div class="container">
        <div class="section-title">
            <span>We are always open for children</span>
            <h2>our case study about helping people</h2>
        </div>
    </div>
    <div class="project-slider owl-carousel">
        <div class="project-card">
            <img src="{{ asset('website/images/project/1.jpg') }}" alt="">
            <div class="content">
                <h2><a href="project-single.html">Shelter for the Homeless</a></h2>
                <span>Child & old care</span>
                <div class="icon"><a href="project-single.html"><i class="flaticon-arrow-up"></i></a></div>
            </div>
        </div>
        <div class="project-card">
            <img src="{{ asset('website/images/project/2.jpg') }}" alt="">
            <div class="content">
                <h2><a href="project-single.html">Empowering Through Food</a></h2>
                <span>Child & old care</span>
                <div class="icon"><a href="project-single.html"><i class="flaticon-arrow-up"></i></a></div>
            </div>
        </div>
        <div class="project-card">
            <img src="{{ asset('website/images/project/3.jpg') }}" alt="">
            <div class="content">
                <h2><a href="project-single.html">old people & Child trouble</a></h2>
                <span>Child & old care</span>
                <div class="icon"><a href="project-single.html"><i class="flaticon-arrow-up"></i></a></div>
            </div>
        </div>
        <div class="project-card">
            <img src="{{ asset('website/images/project/2.jpg') }}" alt="">
            <div class="content">
                <h2><a href="project-single.html">Clean Water to Rural</a></h2>
                <span>Child & old care</span>
                <div class="icon"><a href="project-single.html"><i class="flaticon-arrow-up"></i></a></div>
            </div>
        </div>
    </div>
</section>
<!-- end project -->

<!-- start testimonial -->
<section class="testimonial-section">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6 col-12">
                <div class="section-title">
                    <span>Together, We Can Change Lives Forever</span>
                    <h2>Helping each other can
                        make <span>world</span> better</h2>
                </div>
            </div>
        </div>
        <div class="testimonial-wrap">
            <div class="testimonial-slider owl-carousel">
                <div class="testimonial-card">
                    <ul>
                        <li><i class="flaticon-star"></i></li>
                        <li><i class="flaticon-star"></i></li>
                        <li><i class="flaticon-star"></i></li>
                        <li><i class="flaticon-star"></i></li>
                        <li><i class="flaticon-star"></i></li>
                    </ul>
                    <p>AidUs has been a beacon of hope for our community. Their commitment to providing essential resources and support has transformed lives and created opportunities for many. With their dedicated team.</p>
                    <div class="autr-name">
                        <div class="image">
                            <img src="{{ asset('website/images/testimonial/1.jpg') }}" alt="">
                        </div>
                        <div class="text">
                            <h3>Michel Jhonson</h3>
                            <span>Donar</span>
                        </div>
                    </div>
                </div>
                <div class="testimonial-card">
                    <ul>
                        <li><i class="flaticon-star"></i></li>
                        <li><i class="flaticon-star"></i></li>
                        <li><i class="flaticon-star"></i></li>
                        <li><i class="flaticon-star"></i></li>
                        <li><i class="flaticon-star"></i></li>
                    </ul>
                    <p>AidUs has made a big difference in our lives. They provide important help and give us the tools to build a better future. The kindness of their team inspires us every day. We are very thankful for all they do</p>
                    <div class="autr-name">
                        <div class="image">
                            <img src="{{ asset('website/images/testimonial/2.jpg') }}" alt="">
                        </div>
                        <div class="text">
                            <h3>Tommy Kraft</h3>
                            <span>Customer</span>
                        </div>
                    </div>
                </div>
                <div class="testimonial-card">
                    <ul>
                        <li><i class="flaticon-star"></i></li>
                        <li><i class="flaticon-star"></i></li>
                        <li><i class="flaticon-star"></i></li>
                        <li><i class="flaticon-star"></i></li>
                        <li><i class="flaticon-star"></i></li>
                    </ul>
                    <p>AidUs has been a beacon of hope for our community. Their commitment to providing essential resources and support has transformed lives and created opportunities for many. With their dedicated team.</p>
                    <div class="autr-name">
                        <div class="image">
                            <img src="{{ asset('website/images/testimonial/3.jpg') }}" alt="">
                        </div>
                        <div class="text">
                            <h3>Curtis Fahey</h3>
                            <span>Ceo AidUs</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- end testimonial -->

<!-- start process -->
<section class="process-section">
    <div class="container">
        <div class="wrape">
            <div class="item">
                <div class="icon">
                    <i class="flaticon-order"></i>
                    <span>01</span>
                </div>
                <h2>Identify needs</h2>
                <div class="shape">
                    <img src="{{ asset('website/images/process-arrow-shape.svg') }}" alt="">
                </div>
            </div>
            <div class="item">
                <div class="icon">
                    <i class="flaticon-shield"></i>
                    <span>02</span>
                </div>
                <h2>Collect Money</h2>
                <div class="shape">
                    <img src="{{ asset('website/images/process-arrow-shape.svg') }}" alt="">
                </div>
            </div>
            <div class="item">
                <div class="icon">
                    <i class="flaticon-return-box"></i>
                    <span>03</span>
                </div>
                <h2>Engage Volunteers</h2>
                <div class="shape">
                    <img src="{{ asset('website/images/process-arrow-shape.svg') }}" alt="">
                </div>
            </div>
            <div class="item">
                <div class="icon">
                    <i class="flaticon-delivery-truck"></i>
                    <span>04</span>
                </div>
                <h2>Distribute Goods</h2>
                <div class="shape">
                    <img src="{{ asset('website/images/process-arrow-shape.svg') }}" alt="">
                </div>
            </div>

        </div>
    </div>
    <div class="shape-1">
        <img src="{{ asset('website/images/process/shape1.svg') }}" alt="">
    </div>
    <div class="shape-2">
        <img src="{{ asset('website/images/process/shape2.svg') }}" alt="">
    </div>
    <div class="shape-3">
        <img src="{{ asset('website/images/process/shape3.svg') }}" alt="">
    </div>
    <div class="shape-4">
        <img src="{{ asset('website/images/process/shape4.svg') }}" alt="">
    </div>
    <div class="shape-5">
        <img src="{{ asset('website/images/process/shape5.svg') }}" alt="">
    </div>
</section>
<!-- end process -->

<!-- start instagam -->
<section class="instagam-section section-padding pb-0">
    <div class="shape">
        <img src="{{ asset('website/images/instagam/shape.png') }}" alt="">
        <div class="shape-2">
            <img src="{{ asset('website/images/instagam/shape-2.svg') }}" alt="">
        </div>
    </div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12">
                <div class="section-title">
                    <span>We are always open for children</span>
                    <h2>Recent Instagram Post</h2>
                </div>
            </div>
        </div>
    </div>
    <div class="gallery-main-wrap">
        <div class="sortable-gallery">
            <div class="grid wow fadeInUp" data-wow-delay="0.2s">
                <div class="img-holder">
                    <a href="{{ asset('website/images/instagam/1.jpg') }}" class="fancybox" data-fancybox-group="gall-1">
                        <img src="{{ asset('website/images/instagam/1.jpg') }}" alt class="img img-responsive">
                        <div class="hover-content">
                            <i class="flaticon-camera"></i>
                        </div>
                    </a>
                </div>
            </div>
            <div class="grid wow fadeInUp" data-wow-delay="0.0s">
                <div class="img-holder">
                    <a href="{{ asset('website/images/instagam/2.jpg') }}" class="fancybox" data-fancybox-group="gall-1">
                        <img src="{{ asset('website/images/instagam/2.jpg') }}" alt class="img img-responsive">
                        <div class="hover-content">
                            <i class="flaticon-camera"></i>
                        </div>
                    </a>
                </div>
            </div>
            <div class="grid wow fadeInUp" data-wow-delay="0.2s">
                <div class="img-holder">
                    <a href="{{ asset('website/images/instagam/3.jpg') }}" class="fancybox" data-fancybox-group="gall-1">
                        <img src="{{ asset('website/images/instagam/3.jpg') }}" alt class="img img-responsive">
                        <div class="hover-content">
                            <i class="flaticon-camera"></i>
                        </div>
                    </a>
                </div>
            </div>
            <div class="grid wow fadeInUp" data-wow-delay="0.0s">
                <div class="img-holder">
                    <a href="{{ asset('website/images/instagam/4.jpg') }}" class="fancybox" data-fancybox-group="gall-1">
                        <img src="{{ asset('website/images/instagam/4.jpg') }}" alt class="img img-responsive">
                        <div class="hover-content">
                            <i class="flaticon-camera"></i>
                        </div>
                    </a>
                </div>
            </div>
            <div class="grid wow fadeInUp" data-wow-delay="0.2s">
                <div class="img-holder">
                    <a href="{{ asset('website/images/instagam/5.jpg') }}" class="fancybox" data-fancybox-group="gall-1">
                        <img src="{{ asset('website/images/instagam/5.jpg') }}" alt class="img img-responsive">
                        <div class="hover-content">
                            <i class="flaticon-camera"></i>
                        </div>
                    </a>
                </div>
            </div>
        </div>

    </div>
</section>
<!-- end instagam -->

<!-- start blog -->
<section class="blog-section section-padding">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6 col-12">
                <div class="section-title">
                    <span>Hope, Support, and Love for All.</span>
                    <h2>our latest article news
                        & blogs you need</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-6 col-12">
                <div class="blog-card wow fadeInUp" data-wow-delay="0.0s">
                    <div class="image">
                        <img src="{{ asset('website/images/blog/img-1.jpg') }}" alt="">
                        <img src="{{ asset('website/images/blog/img-1.jpg') }}" alt="">
                    </div>
                    <ul>
                        <li><i class="flaticon-calendar"></i>02 Apr 2021</li>
                        <li><i class="flaticon-chat"></i>2 Comments</li>
                    </ul>
                    <div class="content">
                        <h3><a href="blog-single.html">Stories of Hope: Celebrating Our Community Impact</a></h3>
                        <p>Business is the activity of making one's liv
                            cing or buying and selling products</p>
                        <div class="content_bottom">
                            <span><a href="blog-single.html">Read More <i class="flaticon-next"></i></a></span>
                            <span><a href="blog-single.html">
                                    <img src="{{ asset('website/images/blog/business.svg') }}" alt="">
                                    Business</a></span>

                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-12">
                <div class="blog-card wow fadeInUp" data-wow-delay="0.1s">
                    <div class="image">
                        <img src="{{ asset('website/images/blog/img-2.jpg') }}" alt="">
                        <img src="{{ asset('website/images/blog/img-2.jpg') }}" alt="">
                    </div>
                    <ul>
                        <li><i class="flaticon-calendar"></i>02 Apr 2021</li>
                        <li><i class="flaticon-chat"></i>2 Comments</li>
                    </ul>
                    <div class="content">
                        <h3><a href="blog-single.html">How Your Generous Support Makes a Difference</a></h3>
                        <p>Business is the activity of making one's liv
                            cing or buying and selling products</p>
                        <div class="content_bottom">
                            <span><a href="blog-single.html">Read More <i class="flaticon-next"></i></a></span>
                            <span><a href="blog-single.html">
                                    <img src="{{ asset('website/images/blog/business.svg') }}" alt="">
                                    Business</a></span>

                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-12">
                <div class="blog-card wow fadeInUp" data-wow-delay="0.3s">
                    <div class="image">
                        <img src="{{ asset('website/images/blog/img-3.jpg') }}" alt="">
                        <img src="{{ asset('website/images/blog/img-3.jpg') }}" alt="">
                    </div>
                    <ul>
                        <li><i class="flaticon-calendar"></i>02 Apr 2021</li>
                        <li><i class="flaticon-chat"></i>2 Comments</li>
                    </ul>
                    <div class="content">
                        <h3><a href="blog-single.html">Our Goal Is Help The Poor Child Around The World</a></h3>
                        <p>Business is the activity of making one's liv
                            cing or buying and selling products</p>
                        <div class="content_bottom">
                            <span><a href="blog-single.html">Read More <i class="flaticon-next"></i></a></span>
                            <span><a href="blog-single.html">
                                    <img src="{{ asset('website/images/blog/business.svg') }}" alt="">
                                    Business</a></span>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="shape">
        <img src="{{ asset('website/images/blog/bg-shape.png') }}" alt="">
    </div>
</section>
<!-- end blog -->

@endsection