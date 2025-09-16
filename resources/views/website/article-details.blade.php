@extends('layout.website.master')

@section('title', __('website.contact'))

@section('content')
    <div class="breadcumb-area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcumb-wrap">
                        <h2>مؤسسة غير ربحية موثوقة</h2>
                        <h3><span>صفحة</span> تفاصيل المقالة</h3>
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



    <section class="blog-single-section section-padding">
        <div class="container">
            <div class="row">
                <div class="col col-lg-8 col-md-12 col-12">
                    <div class="post format-standard-image">
                        <div class="entry-media">
                            <img src="{{ asset('website/images/blog-details/img-1.jpg') }}" alt>
                        </div>
                        <div class="entry-meta">
                            <ul>
                                <li><i class="fi flaticon-calendar"></i><a href="#">٠٢ أبريل ٢٠٢٤</a>
                                </li>
                                <li><i class="fi ti-comment-alt"></i> <a href="#">تعليقات (٠٣)</a></li>
                                <li><i class="fi flaticon-clock"></i><a href="#">٣ دقائق قراءة</a></li>
                            </ul>
                        </div>
                        <div class="entry-details">
                            <h3>حملة تبرع لدعم الأسر المحتاجة</h3>
                            <p>تهدف هذه المقالة إلى تسليط الضوء على جهود التبرع التي تساعد في تقديم الغذاء، والملبس،
                                والدعم الصحي للأسر الأكثر احتياجًا في المجتمع. تبرعاتكم تساهم في تخفيف المعاناة
                                وبناء مستقبل أفضل للأطفال والعائلات.</p>
                            <p>تتضمن الحملة شراكات مع مؤسسات محلية لتوزيع السلال الغذائية وتنظيم عيادات طبية متنقلة
                                في المناطق النائية، بالإضافة إلى برامج تعليمية للأطفال المتأثرين.</p>
                            <p>نؤمن بأن كل مساهمة مهما كانت صغيرة تصنع فرقًا. بفضل تضافر الجهود، يمكننا الوصول إلى
                                مزيد من الأسر وتوفير الدعم المستدام لهم عبر برامج متابعة وتقييم منتظمة.</p>
                        </div>
                    </div>
                    <blockquote>
                        الوقت الذي نمنحه للآخرين يعيد إلينا الأمل ويغير مصير عائلة بأكملها.
                        <span>فريق جمع التبرعات</span>
                    </blockquote>
                    <div class="post-team-content">
                        <h3>كيف يتم توزيع التبرعات بشفافية</h3>
                        <div class="row align-items-center">
                            <div class="col-lg-7 col-12">
                                <ul class="content">
                                    <li>تجميع التبرعات وفرزها حسب الحاجة والأولوية.</li>
                                    <li>التعاون مع شركاء موثوقين للتوزيع الميداني.</li>
                                    <li>توثيق العمليات عبر تقارير دورية للمتبرعين.</li>
                                    <li>ضمان الوصول إلى المستفيدين الأشد ضعفًا.</li>
                                    <li>متابعة أثر البرامج وتحديث خطط التدخل.</li>
                                </ul>
                            </div>
                            <div class="col-lg-5 col-12">
                                <img src="{{ asset('website/images/blog-details/img-2.jpg') }}" alt="">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-12 im-1">
                            <img src="{{ asset('website/images/blog-details/img-3.jpg') }}" alt="">
                        </div>
                        <div class="col-lg-6 col-md-6 col-12 im-1">
                            <img src="{{ asset('website/images/blog-details/img-4.jpg') }}" alt="">
                        </div>
                    </div>
                    <p>من خلال تبرعاتكم، نتمكن من تقديم خدمات عاجلة ودعم طويل الأمد. ندعو الجميع للمشاركة
                        سواءً بالتبرع المالي أو التطوع بالوقت والخبرة لضمان أثر دائم ومستدام.</p>
                    <div class="tag-share-wrap">
                        <div class="row">
                            <div class="col-lg-6 col-12">
                                <div class="tag-share clearfix">
                                    <div class="tag">
                                        <span>وسوم: </span>
                                        <ul>
                                            <li><a href="#">أعمال</a></li>
                                            <li><a href="#">تصميم</a></li>
                                            <li><a href="#">تطبيقات</a></li>
                                            <li><a href="#">بيانات</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-12">
                                <div class="tag-share-s2 clearfix">
                                    <div class="tag">
                                        <span>مشاركة: </span>
                                        <ul>
                                            <li><a href="#"><i class="flaticon-facebook-app-symbol"></i></a></li>
                                            <li><a href="#"><i class="flaticon-linkedin"></i></a></li>
                                            <li><a href="#"><i class="flaticon-vimeo"></i></a></li>
                                            <li><a href="#"><i class="flaticon-twitter"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="comments-area">
                        <div class="comments-section">
                            <h3 class="comments-title">(٠٤) تعليق</h3>
                            <ol class="comments">
                                <li class="comment even thread-even depth-1" id="comment-1">
                                    <div id="div-comment-1">
                                        <div class="comment-theme">
                                            <div class="comment-image"><img
                                                    src="{{ asset('website/images/blog-details/comments-author/img-1.jpg') }}" alt>
                                            </div>
                                        </div>
                                        <div class="comment-main-area">
                                            <div class="comment-wrapper">
                                                <div class="comments-meta">
                                                    <h4>محمد أحمد <span class="comments-date">
                                                            ٢٥ يناير ٢٠٢٤</span></h4>
                                                </div>
                                                <div class="comment-area">
                                                    <p>
                                                        جزيل الشكر على هذه المبادرة. ساعدت التبرعات في توصيل مواد ضرورية
                                                        لعدد من الأسر في قريتنا، ونأمل أن تستمر الجهود.
                                                    </p>
                                                    <div class="comments-reply">
                                                        <a class="comment-reply-link" href="#"><i
                                                                class="flaticon-back"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <ul class="children">
                                        <li class="comment">
                                            <div>
                                                <div class="comment-theme">
                                                    <div class="comment-image"><img
                                                            src="{{ asset('website/images/blog-details/comments-author/img-2.jpg') }}" alt>
                                                    </div>
                                                </div>
                                                <div class="comment-main-area">
                                                    <div class="comment-wrapper">
                                                        <div class="comments-meta">
                                                            <h4>سارة علي<span class="comments-date">
                                                                    ٢٥ يناير ٢٠٢٤
                                                                </span></h4>
                                                        </div>
                                                        <div class="comment-area">
                                                            <p>عمل رائع ومجهود ملهم. أتمنى المزيد من الحملات المماثلة.</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </li>
                            </ol>
                        </div>

                        <div class="comment-respond">
                            <h3 class="comment-reply-title">اكتب تعليقك</h3>
                            <form id="commentForm" class="comment-form" novalidate>
                                <div class="form-inputs">
                                    <div>
                                        <input id="name" name="name" placeholder="أدخل اسمك*" type="text" required>
                                        <span class="error-message" id="nameError"></span>
                                    </div>
                                    <div>
                                        <input id="email" name="email" placeholder="أدخل بريدك الإلكتروني*" type="email" required>
                                        <span class="error-message" id="emailError"></span>
                                    </div>
                                    <div>
                                        <input id="phone" name="phone" placeholder="أدخل رقم هاتفك*" type="text" required>
                                        <span class="error-message" id="phoneError"></span>
                                    </div>
                                    <div>
                                        <input id="website" name="website" placeholder="الموقع الإلكتروني*" type="url" required>
                                        <span class="error-message" id="websiteError"></span>
                                    </div>
                                </div>
                                <div class="form-textarea">
                                    <textarea id="comment" name="comment" placeholder="اكتب رسالتك*" required></textarea>
                                    <span class="error-message" id="commentError"></span>
                                </div>
                                <div class="terms">
                                    <input class="checkbox" type="checkbox" id="Insuranceb">
                                    <label for="Insuranceb">حفظ اسمي وبريدي الإلكتروني والموقع في هذا المتصفح للمرة القادمة.</label>
                                </div>
                                <div class="form-submit">
                                    <input class="theme-btn" id="submit" value="إرسال التعليق" type="submit">
                                    <div id="loading" style="display: none;">جاري الإرسال، يرجى الانتظار...</div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col col-lg-4">
                    <div class="blog-sidebar">
                        <div class="widget about-widget">
                            <div class="img-holder">
                                <img src="{{ asset('website/images/blog/about-widget.jpg') }}" alt="">
                            </div>
                            <h4>مؤسسة ابو العزايم الخيرية</h4>
                            <span>جمعية غير ربحية</span>
                            <p>نعمل على جمع وتوزيع التبرعات للوصول إلى الأسر الأكثر احتياجًا، مع ضمان الشفافية
                                والمساءلة في كل خطوة.</p>
                            <ul>
                                <li><a href="#"><i class="flaticon-facebook-app-symbol"></i></a></li>
                                <li><a href="#"><i class="flaticon-linkedin"></i></a></li>
                                <li><a href="#"><i class="ti-pinterest"></i></a></li>
                                <li><a href="#"><i class="flaticon-twitter"></i></a></li>
                            </ul>
                        </div>
                        <div class="widget search-widget">
                            <h3>ابحث هنا</h3>
                            <form>
                                <div>
                                    <input type="text" class="form-control" placeholder="ابحث عن منشور..">
                                    <button type="submit"><i class="ti-search"></i></button>
                                </div>
                            </form>
                        </div>
                        <div class="widget recent-post-widget">
                            <h3>منشورات ذات صلة</h3>
                            <div class="posts">
                                <div class="post">
                                    <div class="img-holder">
                                        <img src="{{ asset('website/images/recent-posts/img-1.jpg') }}" alt>
                                    </div>
                                    <div class="details">
                                        <span class="date"><i class="flaticon-calendar"></i>٣٠ نوفمبر ٢٠٢٤ </span>
                                        <h4><a href="blog-single.html">
                                                مبادرات محلية لدعم الأسر المحتاجة</a>
                                        </h4>
                                    </div>
                                </div>
                                <div class="post">
                                    <div class="img-holder">
                                        <img src="{{ asset('website/images/recent-posts/img-2.jpg') }}" alt>
                                    </div>
                                    <div class="details">
                                        <span class="date"><i class="flaticon-calendar"></i>٣٠ نوفمبر ٢٠٢٤ </span>
                                        <h4><a href="blog-single.html">
                                                طرق فعّالة لجمع التبرعات</a>
                                        </h4>
                                    </div>
                                </div>
                                <div class="post">
                                    <div class="img-holder">
                                        <img src="{{ asset('website/images/recent-posts/img-3.jpg') }}" alt>
                                    </div>
                                    <div class="details">
                                        <span class="date"><i class="flaticon-calendar"></i>٣٠ نوفمبر ٢٠٢٤ </span>
                                        <h4><a href="blog-single.html">
                                                قصص نجاح من المستفيدين</a>
                                        </h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="widget tag-widget">
                            <h3>الوسوم الشائعة</h3>
                            <ul>
                                <li><a href="#">العطاء</a></li>
                                <li><a href="#">المساعدة</a></li>
                                <li><a href="#">التطوع</a></li>
                                <li><a href="#">التبرع</a></li>
                                <li><a href="#">المجتمع</a></li>
                                <li><a href="#">الرعاية</a></li>
                            </ul>
                        </div>
                        <div class="widget category-widget">
                            <h3>الفئات</h3>
                            <ul>
                                <li><a href="blog.html">حملات التبرع<span>٠٣</span></a></li>
                                <li><a href="blog.html" class="active">التواصل المجتمعي <span>٠٢</span></a></li>
                                <li><a href="blog.html">المساعدة التطوعية<span>٠٤</span></a></li>
                                <li><a href="blog.html">الأنشطة الخيرية <span>٠٥</span></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
