@extends('layout.website.master')

@section('title',__('website.about'))

@section('content')
        <!-- start of breadcumb -->
        <div class="breadcumb-area">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="breadcumb-wrap">
                            <h2>مؤسسة غير ربحية موثوقة</h2>
                            <h3><span>من</span> نحن</h3>
                        </div>
                    </div>
                </div>
            </div>

            <div class="shape">
                <svg width="128" height="357" viewBox="0 0 128 357" fill="none">
                    <path
                        d="M-9.73063 357C-11.832 304.262 -1.65343 268.562 21.3305 247.878C27.4705 242.355 34.4642 238.095 41.2608 233.944C44.6099 231.887 48.0903 229.757 51.4066 227.519C63.6866 219.217 71.3041 210.301 74.5875 200.338C75.1457 198.713 75.5397 196.981 75.7695 195.212C68.2505 198.569 62.1762 199.688 56.5944 198.749C50.5201 197.703 43.5592 193.19 41.6548 185.43C40.3086 179.871 42.2787 173.987 46.974 169.691C52.5229 164.601 60.1405 163.23 65.8865 166.262C74.686 170.882 78.4948 181.639 78.0679 191.783C98.3923 181.603 114.58 162.002 121.77 138.72C129.289 114.318 126.695 86.4868 114.809 64.2508C110.048 55.3348 103.711 46.9963 97.6043 38.9466C86.375 24.1467 74.7845 8.87758 72.6831 -10.3623C70.8116 -28.1583 78.0679 -46.4596 91.2016 -57L92.3508 -55.2312C79.7753 -45.124 72.8473 -27.6529 74.686 -10.6511C76.6889 7.93905 87.6227 22.3419 99.1475 37.5388C105.32 45.6607 111.69 54.0714 116.55 63.1318C128.698 85.8731 131.358 114.39 123.675 139.369C116.221 163.591 99.2131 183.913 77.9366 194.201C77.6739 196.584 77.1814 198.894 76.4591 201.06C72.9786 211.528 65.1313 220.769 52.4573 229.36C49.1082 231.634 45.5949 233.764 42.213 235.821C35.5148 239.9 28.5868 244.16 22.5782 249.538C0.0867844 269.753 -9.82913 304.839 -7.76058 356.856L-9.73063 357ZM59.3525 166.767C55.1825 166.767 51.1111 168.716 48.2873 171.315C44.2159 175.033 42.4757 180.087 43.6249 184.816C45.2994 191.638 51.5379 195.645 56.9556 196.584C62.1762 197.486 67.955 196.367 75.1457 193.154C75.4412 193.01 75.7695 192.866 76.065 192.721C76.7217 182.975 73.1756 172.398 65.0656 168.139C63.2269 167.2 61.2568 166.767 59.3525 166.767Z"
                        fill="white" fill-opacity="0.18" />
                </svg>
            </div>
            <div class="shape-s2">
                <img src="{{ asset('website/images/slider/shape-2.svg') }}" alt="">
            </div>
            <div class="shape-s3">
                <img src="{{ asset('website/images/donate-2.svg') }}" alt="">
            </div>

        </div>
        <!-- end of breadcumb-->


        <!-- start about -->
        <section class="about-section-s4 section-padding">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-12">
                        <div class="about-image">
                            <div class="image1">
                                <img src="{{ asset('website/images/about/about-3.jpg') }}" alt="">
                            </div>
                            <div class="image2">
                                <img src="{{ asset('website/images/about/about-4.jpg') }}" alt="">
                            </div>
                            <div class="shape-love">
                                <img src="{{ asset('website/images/about/shape4.svg') }}" alt="">
                            </div>
                            <div class="text">
                                <h2>منذ</h2>
                                <h3><span class="odometer" data-count="1999">00</span></h3>
                                <div class="shape">
                                    <img src="{{ asset('website/images/about/shape11.svg') }}" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-12">
                        <div class="right-content">
                            <h2><img src="{{ asset('website/images/healthcare.svg') }}" alt="">نبني مستقبلاً أكثر إشراقًا من خلال اللطف.</h2>
                            <h3>مساعدة بعضنا البعض يمكن أن تجعل <span>العالم</span> أفضل</h3>
                            <p>مساعدة الآخرين تخلق عالمًا أقوى وأكثر لطفًا. نحن نبني الثقة، ننشر التعاطف، ونُلهم الآخرين لفعل الشيء نفسه. معًا، يمكننا تجاوز التحديات وإحداث تغييرات إيجابية دائمة.</p>

                            <div class="about-tab">
                                <div class="tab">
                                    <button class="tablinks" onclick="openTab(event, 'Tab1')">مهمتنا</button>
                                    <button class="tablinks" onclick="openTab(event, 'Tab2')">رؤيتنا</button>
                                    <button class="tablinks" onclick="openTab(event, 'Tab3')">التميّز</button>
                                </div>
                                <div id="Tab1" class="tabcontent">
                                    <div class="tab-wrap">
                                        <div class="left">
                                            <img src="{{ asset('website/images/about/about-5.jpg') }}" alt="">
                                            <a href="https://www.youtube.com/embed/VqmFKnHG5q8?si=YcvnY_zzMv21k4iM"
                                                class="video-btn" data-type="iframe">
                                                <i class="flaticon-play"></i>
                                            </a>
                                        </div>
                                        <div class="right">
                                            <ul>
                                                <li><i class="flaticon-check"></i> نمو الأفراد</li>
                                                <li><i class="flaticon-check"></i>ساعد في تمويل 3,265 مشروع قوي</li>
                                                <li><i class="flaticon-check"></i>شركة غير ربحية حائزة على جوائز</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div id="Tab2" class="tabcontent">
                                    <div class="tab-wrap">
                                        <div class="left">
                                            <img src="{{ asset('website/images/about/about-6.jpg') }}" alt="">
                                            <a href="https://www.youtube.com/embed/VqmFKnHG5q8?si=YcvnY_zzMv21k4iM"
                                                class="video-btn" data-type="iframe">
                                                <i class="flaticon-play"></i>
                                            </a>
                                        </div>
                                        <div class="right">
                                            <ul>
                                                <li><i class="flaticon-check"></i> المعيار القياسي لفقرة لوريم إيبسوم
                                                </li>
                                                <li><i class="flaticon-check"></i>ساعد في تمويل 3,265 مشروع قوي
                                                </li>
                                                <li><i class="flaticon-check"></i>شركة غير ربحية حائزة على جوائز</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div id="Tab3" class="tabcontent">
                                    <div class="tab-wrap">
                                        <div class="left">
                                            <img src="{{ asset('website/images/about/about-7.jpg') }}" alt="">
                                            <a href="https://www.youtube.com/embed/VqmFKnHG5q8?si=YcvnY_zzMv21k4iM"
                                                class="video-btn" data-type="iframe">
                                                <i class="flaticon-play"></i>
                                            </a>
                                        </div>
                                        <div class="right">
                                            <ul>
                                                <li><i class="flaticon-check"></i>هناك العديد من الاختلافات في الفقرات
                                                </li>
                                                <li><i class="flaticon-check"></i>ساعد في تمويل 3,265 مشروع قوي
                                                </li>
                                                <li><i class="flaticon-check"></i>شركة غير ربحية حائزة على جوائز</li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="author-wrap">
                                <ul class="author-img">
                                    <li><img src="{{ asset('website/images/about/aut-1.jpg') }}" alt=""></li>
                                    <li class="active"><img src="{{ asset('website/images/about/aut-2.jpg') }}" alt=""></li>
                                    <li><img src="{{ asset('website/images/about/aut-3.jpg') }}" alt=""></li>
                                </ul>
                                <div class="author-text">أكثر من 5 ملايين عميل <div class="shape"><img
                                            src="{{ asset('website/images/about/shape10.svg') }}" alt=""></div>
                                </div>
                                <div class="contact">
                                    <div class="icon">
                                        <img src="{{ asset('website/images/about/call.svg') }}" alt="">
                                    </div>
                                    <div class="text">
                                        <span>الهاتف:</span>
                                        <h4>+236 (456) 896 22</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="shape-1">
                <img src="{{ asset('website/images/about/shape7.svg') }}" alt="">
            </div>
            <div class="shape-2">
                <img src="{{ asset('website/images/about/shape2.svg') }}" alt="">
            </div>
            <div class="shape-3">
                <img src="{{ asset('website/images/about/shape8.svg') }}" alt="">
            </div>
        </section>
        <!-- end about -->

        <!-- start funfact -->
        <section class="funfact-section-s2">
            <h3 class="d-none"> section title</h3>
            <div class="container">
                <div class="wraper">
                    <div class="row g-0">
                        <div class="col col-lg-3 col-md-6 col-12">
                            <div class="item">
                                <i class="flaticon-pawprint"></i>
                                <h2><span class="odometer" data-count="560">00</span></h2>
                                <p>مشاريع تمويل </p>
                            </div>
                        </div>
                        <div class="col col-lg-3 col-md-6 col-12">
                            <div class="item">
                                <i class="flaticon-donation"></i>
                                <h2><span class="odometer" data-count="100">00</span>%</h2>
                                <p>تم جمعها الآن</p>
                            </div>
                        </div>
                        <div class="col col-lg-3 col-md-6 col-12">
                            <div class="item">
                                <i class="flaticon-global-distribution"></i>
                                <h2><span class="odometer" data-count="3">00</span>م+</h2>
                                <p>فروع عالمية</p>
                            </div>
                        </div>
                        <div class="col col-lg-3 col-md-6 col-12">
                            <div class="item">
                                <i class="flaticon-charity"></i>
                                <h2><span class="odometer" data-count="300">00</span>+</h2>
                                <p>متطوعون</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- end funfact -->

        <!-- start service -->
        <section class="service-section-s5 section-padding">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-12">
                        <div class="section-title">
                            <span><img src="{{ asset('website/images/healthcare.svg') }}" alt="">معًا، يمكننا تغيير الحياة إلى الأبد.</span>
                            <h2>مساعدة بعضنا البعض يمكن أن تجعل <span>العالم</span> أفضل</h2>
                        </div>
                    </div>
                    <div class="col-lg-6 col-12">
                        <div class="service-btn">
                            <a href="javascript:void(0)" class="theme-btn">كل الخدمات</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="service-slider-s4">
                <div class="service-card-s2">
                    <div class="icon">
                        <img src="{{ asset('website/images/service/icon-1.svg') }}" alt="">
                    </div>
                    <div class="content">
                       <h2><a href="javascript:void(0)">لقد حصلوا على منزل جديد</a></h2>
                        <p>مع أكثر من مليون منزل معروض للبيع على الموقع، يمكن لمنصة Trulia أن تساعدك في العثور على منزل تحب أن تسميه بيتك.</p>
                      <div class="services-btn">
                        <a href="javascript:void(0)">عرض التفاصيل</a>
                        </div>
                    </div>
                </div>
                 <div class="service-card-s2">
                    <div class="icon">
                        <img src="{{ asset('website/images/service/icon-1.svg') }}" alt="">
                    </div>
                    <div class="content">
                       <h2><a href="javascript:void(0)">لقد حصلوا على منزل جديد</a></h2>
                        <p>مع أكثر من مليون منزل معروض للبيع على الموقع، يمكن لمنصة Trulia أن تساعدك في العثور على منزل تحب أن تسميه بيتك.</p>
                      <div class="services-btn">
                        <a href="javascript:void(0)">عرض التفاصيل</a>
                        </div>
                    </div>
                </div>
                  <div class="service-card-s2">
                    <div class="icon">
                        <img src="{{ asset('website/images/service/icon-1.svg') }}" alt="">
                    </div>
                    <div class="content">
                       <h2><a href="javascript:void(0)">لقد حصلوا على منزل جديد</a></h2>
                        <p>مع أكثر من مليون منزل معروض للبيع على الموقع، يمكن لمنصة Trulia أن تساعدك في العثور على منزل تحب أن تسميه بيتك.</p>
                      <div class="services-btn">
                        <a href="javascript:void(0)">عرض التفاصيل</a>
                        </div>
                    </div>
                </div>
                  <div class="service-card-s2">
                    <div class="icon">
                        <img src="{{ asset('website/images/service/icon-1.svg') }}" alt="">
                    </div>
                    <div class="content">
                       <h2><a href="javascript:void(0)">لقد حصلوا على منزل جديد</a></h2>
                        <p>مع أكثر من مليون منزل معروض للبيع على الموقع، يمكن لمنصة Trulia أن تساعدك في العثور على منزل تحب أن تسميه بيتك.</p>
                      <div class="services-btn">
                        <a href="javascript:void(0)">عرض التفاصيل</a>
                        </div>
                    </div>
                </div>
                  <div class="service-card-s2">
                    <div class="icon">
                        <img src="{{ asset('website/images/service/icon-1.svg') }}" alt="">
                    </div>
                    <div class="content">
                       <h2><a href="javascript:void(0)">لقد حصلوا على منزل جديد</a></h2>
                        <p>مع أكثر من مليون منزل معروض للبيع على الموقع، يمكن لمنصة Trulia أن تساعدك في العثور على منزل تحب أن تسميه بيتك.</p>
                      <div class="services-btn">
                        <a href="javascript:void(0)">عرض التفاصيل</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="shape">
                <img src="{{ asset('website/images/service/shape-4.png') }}" alt="">
            </div>
        </section>
        <!-- end service -->

        <!-- start cta -->
        <section class="cta-section">
            <div class="container">
                <div class="content">
                    <span>الرحمة في العمل: انضم إلينا اليوم</span>
                    <h3>الأطفال بحاجة إلى مساعدتك
                        تبرع اليوم</h3>
                    <a href="javascript:void(0)" class="theme-btn">كن متطوعًا</a>
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

        <!-- start donate -->
        <section class="donate-section section-padding ">
            <div class="container">
                <div class="donation-from">
                    <div class="text">
                        <h2>نحن دائمًا متواجدون من أجل الأطفال</h2>
                        <h3>دعم صناديق الغذاء للمحتاجين</h3>
                    </div>
                    <div class="Support">
                        <span>تبرّع الآن <span>دعم متواصل 24/7</span></span>
                    </div>
                    <div class="progress-wrap">
                        <ul>
                            <li>
                                <span>$7,560.00</span>
                                <span class="title">تم جمع</span>
                            </li>
                            <li>
                                <span>$10,000.00</span>
                                <span class="title">الهدف</span>
                            </li>
                        </ul>
                        <div class="progress-item">
                            <div class="progress">
                                <div class="bar" style="width: 50%;"></div>
                            </div>
                            <span class="cssProgress-label">50%</span>
                        </div>

                    </div>
                    <div class="donate-amount ">
                        <button class="active amount-btn">$100</button>
                        <button class="amount-btn">$300.00</button>
                        <button class="amount-btn">$400.00</button>
                        <button class="amount-btn">$200.00</button>
                        <button class="amount-btn">$600.00</button>
                        <input type="text" class="addAmount-value" placeholder="$0.00">
                    </div>
                    <div class="donate-now">
                        <div class="donation-one__btn-box">
                            <a href="javascript:void(0)" class="donation-one__btn theme-btn">تبرع الآن <i
                                    class="flaticon-heart"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="shape">
                <img src="{{ asset('website/images/cta-shap-2.svg') }}" alt="">
            </div>
            <div class="right-text">
                <h1>تبرّع الآن</h1>
                <div class="shape-2">
                    <img src="{{ asset('website/images/cta-shap-3.svg') }}" alt="">
                </div>
            </div>
        </section>
        <!-- end donate -->

        <!-- start Volunteer -->
        <section class="volunteer-section section-padding">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-6 col-12">
                        <div class="section-title text-center">
                            <span>يمكنك مساعدة المحتاجين معنا</span>
                            <h2>تعرف على <span>فريق العمل</span></h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-3 col-md-6 col-12">
                        <div class="vol-card wow fadeInUp" data-wow-delay="0.2s">
                            <div class="image">
                                <img src="{{ asset('website/images/volunteer/1.jpg') }}" alt="">
                                <span class="hover-icon"><i class="flaticon-share"></i></span>
                                <ul>
                                    <li><a href="javascript:void(0)"><i class="flaticon-camera"></i></a></li>
                                    <li><a href="javascript:void(0)"><i class="flaticon-facebook-app-symbol"></i></a></li>
                                    <li><a href="javascript:void(0)"><i class="flaticon-linkedin"></i></a></li>
                                    <li><a href="javascript:void(0)"><i class="flaticon-twitter"></i></a></li>
                                </ul>
                            </div>
                            <div class="text">
                                <h3><a href="javascript:void(0)">ليزلي ألكسندر</a></h3>
                                <span>مصمم جرافيك</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-12">
                        <div class="vol-card wow fadeInUp" data-wow-delay="0.0s">
                            <div class="image">
                                <img src="{{ asset('website/images/volunteer/2.jpg') }}" alt="">
                                <span class="hover-icon"><i class="flaticon-share"></i></span>
                                <ul>
                                    <li><a href="javascript:void(0)"><i class="flaticon-camera"></i></a></li>
                                    <li><a href="javascript:void(0)"><i class="flaticon-facebook-app-symbol"></i></a></li>
                                    <li><a href="javascript:void(0)"><i class="flaticon-linkedin"></i></a></li>
                                    <li><a href="javascript:void(0)"><i class="flaticon-twitter"></i></a></li>
                                </ul>
                            </div>
                            <div class="text">
                                <h3><a href="javascript:void(0)">جوشوا نانالي</a></h3>
                                <span>مصمم جرافيك</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-12">
                        <div class="vol-card wow fadeInUp" data-wow-delay="0.2s">
                            <div class="image">
                                <img src="{{ asset('website/images/volunteer/3.jpg') }}" alt="">
                                <span class="hover-icon"><i class="flaticon-share"></i></span>
                                <ul>
                                    <li><a href="javascript:void(0)"><i class="flaticon-camera"></i></a></li>
                                    <li><a href="javascript:void(0)"><i class="flaticon-facebook-app-symbol"></i></a></li>
                                    <li><a href="javascript:void(0)"><i class="flaticon-linkedin"></i></a></li>
                                    <li><a href="javascript:void(0)"><i class="flaticon-twitter"></i></a></li>
                                </ul>
                            </div>
                            <div class="text">
                                <h3><a href="javascript:void(0)">ليتورنو</a></h3>
                                <span>مصمم جرافيك</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-12">
                        <div class="vol-card wow fadeInUp" data-wow-delay="0.0s">
                            <div class="image">
                                <img src="{{ asset('website/images/volunteer/4.jpg') }}" alt="">
                                <span class="hover-icon"><i class="flaticon-share"></i></span>
                                <ul>
                                    <li><a href="javascript:void(0)"><i class="flaticon-camera"></i></a></li>
                                    <li><a href="javascript:void(0)"><i class="flaticon-facebook-app-symbol"></i></a></li>
                                    <li><a href="javascript:void(0)"><i class="flaticon-linkedin"></i></a></li>
                                    <li><a href="javascript:void(0)"><i class="flaticon-twitter"></i></a></li>
                                </ul>
                            </div>
                            <div class="text">
                                <h3><a href="javascript:void(0)">ليليان لويس</a></h3>
                                <span>مصمم جرافيك</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="all-btn">
                    <a href="javascript:void(0)" class="theme-btn">كل الخدمات</a>
                </div>
            </div>
        </section>
        <!-- end Volunteer -->

        <!-- start project -->
        <section class="project-section-s2 section-padding">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-6 col-12">
                        <div class="section-title text-center">
                            <span>نحن دائمًا متواجدون من أجل الأطفال</span>
                            <h2>دراسات الحالة الخاصة بنا حول <span>مساعدة</span> الناس</h2>
                        </div>
                    </div>
                </div>
            </div>
            <div class="project-slider-s2 owl-carousel">
                <div class="project-card">
                    <img src="{{ asset('website/images/project/4.jpg') }}" alt="">
                    <div class="content">
                        <h2><a href="javascript:void(0)">مشاكل الأطفال وكبار السن</a></h2>
                        <span>رعاية الأطفال وكبار السن</span>
                        <div class="icon"><a href="javascript:void(0)"><i class="flaticon-arrow-up"></i></a></div>
                    </div>
                </div>
                <div class="project-card">
                    <img src="{{ asset('website/images/project/5.jpg') }}" alt="">
                    <div class="content">
                        <h2><a href="javascript:void(0)">مشاكل الأطفال والرعاية</a></h2>
                        <span>رعاية الأطفال وكبار السن</span>
                        <div class="icon"><a href="javascript:void(0)"><i class="flaticon-arrow-up"></i></a></div>
                    </div>
                </div>
                <div class="project-card">
                    <img src="{{ asset('website/images/project/6.jpg') }}" alt="">
                    <div class="content">
                        <h2><a href="javascript:void(0)">دراستنا حول مساعدة الناس</a></h2>
                        <span>رعاية الأطفال وكبار السن</span>
                        <div class="icon"><a href="javascript:void(0)"><i class="flaticon-arrow-up"></i></a></div>
                    </div>
                </div>
            </div>
            <div class="bg-shape">
                <img src="{{ asset('website/images/project/shapebg-3.svg') }}" alt="">
            </div>
        </section>
        <!-- end project -->

        <!-- start testimonial -->
        {{-- <Section class="testimonial-section-s2 section-padding ">
            <div class="container">
                <div class="testimonial-wrap testimonial-slider-s2">
                    <div class="image slider-for">
                        <div class="item">
                            <span class="feedback"><i class="flaticon-double-quotes"></i></span>
                            <img src="{{ asset('website/images/testimonial/3.jpg') }}" alt="">
                            <ul>
                                <li><i class="flaticon-star"></i></li>
                                <li><i class="flaticon-star"></i></li>
                                <li><i class="flaticon-star"></i></li>
                                <li><i class="flaticon-star"></i></li>
                                <li><i class="flaticon-star"></i></li>
                            </ul>
                        </div>
                        <div class="item">
                            <span class="feedback"><i class="flaticon-double-quotes"></i></span>
                            <img src="{{ asset('website/images/testimonial/2.jpg') }}" alt="">
                            <ul>
                                <li><i class="flaticon-star"></i></li>
                                <li><i class="flaticon-star"></i></li>
                                <li><i class="flaticon-star"></i></li>
                                <li><i class="flaticon-star"></i></li>
                                <li><i class="flaticon-star"></i></li>
                            </ul>
                        </div>
                    </div>
                    <div class="content-wrap">
                        <div class="slider-nav">
                            <div class="content">
                                <p>Climb the mountain not to plant your flag but to
                                    embrace the ways challenge, enjoy the air, and
                                    behold the. Climb it see the world, not so the
                                    world can see you. This is due to their excellent
                                    service competitive pricing</p>
                                <div class="client-name">
                                    <h4>Leslie Alexander/</h4>
                                    <span>Customer</span>
                                </div>

                            </div>
                            <div class="content">
                                <p>
                                    I recently used for my logistics needs, and I am
                                    thoroughly impressed with their exceptional service. I contacted
                                    them, team demonstrated and making the entire
                                    process smooth and hassle-free.
                                </p>
                                <div class="client-name">
                                    <h4>Michel Jhonson/</h4>
                                    <span>Customer</span>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="shape">
                <img src="{{ asset('website/images/testimonial/shape.svg') }}" alt="">
            </div>
            <div class="shape-2">
                <img src="{{ asset('website/images/testimonial/shape-2.svg') }}" alt="">
            </div>
        </Section> --}}
        <!-- end testimonial -->

        <!-- start partners -->
        <section class="partners-section-s3">
            <h2 class="d-none">لا يوجد محتوى</h2>
            <ul class="partners-slider-s3">
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

        <!-- start blog -->
        <section class="blog-section-s4 section-padding">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-6 col-12">
                        <div class="section-title">
                            <span>الأمل والدعم والمحبة للجميع.</span>
                            <h2>أحدث المقالات والأخبار
                                والمدونات التي تحتاجها</h2>
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
                                <li><i class="flaticon-chat"></i>2 تعليقات</li>
                            </ul>
                            <div class="content">
                                <h3><a href="javascript:void(0)">قصص الأمل: نحتفل بتأثيرنا المجتمعي</a>
                                </h3>
                                <p>الأعمال هي نشاط كسب الرزق أو شراء وبيع المنتجات</p>
                                <div class="content_bottom">
                                    <span><a href="javascript:void(0)">اقرأ المزيد <i class="flaticon-next"></i></a></span>
                                    <span><a href="javascript:void(0)">
                                            <img src="{{ asset('website/images/blog/business.svg') }}" alt="">
                                            أعمال</a></span>

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
                                <li><i class="flaticon-chat"></i>2 تعليقات</li>
                            </ul>
                            <div class="content">
                                <h3><a href="javascript:void(0)">كيف يُحدث دعمك السخي فرقًا</a></h3>
                                <p>الأعمال هي نشاط كسب الرزق أو شراء وبيع المنتجات</p>
                                <div class="content_bottom">
                                    <span><a href="javascript:void(0)">اقرأ المزيد <i class="flaticon-next"></i></a></span>
                                    <span><a href="javascript:void(0)">
                                            <img src="{{ asset('website/images/blog/business.svg') }}" alt="">
                                            أعمال</a></span>

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
                                <li><i class="flaticon-chat"></i>2 تعليقات</li>
                            </ul>
                            <div class="content">
                                <h3><a href="javascript:void(0)">هدفنا هو مساعدة الأطفال الفقراء حول العالم</a></h3>
                                <p>الأعمال هي نشاط كسب الرزق أو شراء وبيع المنتجات</p>
                                <div class="content_bottom">
                                    <span><a href="javascript:void(0)">اقرأ المزيد <i class="flaticon-next"></i></a></span>
                                    <span><a href="javascript:void(0)">
                                            <img src="{{ asset('website/images/blog/business.svg') }}" alt="">
                                            أعمال</a></span>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- end blog -->
@endsection