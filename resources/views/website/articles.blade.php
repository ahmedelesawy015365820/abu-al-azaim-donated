@extends('layout.website.master')

@section('title', __('website.contact'))

@section('content')
  <!-- start of breadcumb -->
        <div class="breadcumb-area">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="breadcumb-wrap">
                            <h2>مؤسسة غير ربحية موثوقة</h2>
                            <h3><span>صفحة</span> المقالات</h3>
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







        <section class="blog-pg-section section-padding">
            <div class="container">
            <div class="row">
                <div class="col col-lg-8 col-md-12 col-12">
                <div class="blog-content">
                    <div class="post format-standard-image">
                    <div class="entry-media">
                        <img src="{{ asset('website/images/blog/img-10.jpg') }}" alt>
                        <span>24 <br>
                        فبراير</span>
                    </div>
                    <div class="entry-meta">
                        <ul>
                        <li><i class="fi flaticon-user"></i><a href="#">خالد ناصر</a>
                        </li>
                        <li><i class="fi ti-comment-alt"></i> <a href="#">تعليقات (٨)</a></li>
                        <li><i class="fi flaticon-clock"></i><a href="#">قراءة 3 دقائق</a></li>
                        </ul>
                    </div>
                    <div class="entry-details">
                        <h3><a href="/blogs/blog-details/test">الفرع المسمى جمعية ابو العزايم الخيرية</a>
                        </h3>
                        <p>هناك العديد من نسخ لوريم إيبسوم المتاحة، لكن معظمها تعرض لتعديلات بأشكال مختلفة، سواء بإضافة نكات أو كلمات عشوائية تبدو غير منطقية. إذا كنت ستستخدم مقطعاً من لوريم إيبسوم.</p>
                        <a href="/blogs/blog-details/test" class="read-more">اقرأ المزيد</a>
                    </div>
                    </div>
                    <div class="post format-standard-image">
                    <div class="entry-media">
                        <img src="{{ asset('website/images/blog/img-11.jpg') }}" alt>
                        <span>25 <br>
                        فبراير</span>
                    </div>
                    <div class="entry-meta">
                        <ul>
                        <li><i class="fi flaticon-user"></i><a href="#">خالد ناصر</a>
                        </li>
                        <li><i class="fi ti-comment-alt"></i> <a href="#">تعليقات (٧)</a></li>
                        <li><i class="fi flaticon-clock"></i><a href="#">قراءة 3 دقائق</a></li>
                        </ul>
                    </div>
                    <div class="entry-details">
                        <h3><a href="/blogs/blog-details/test">الفرع المسمى جمعية ابو العزايم الخيرية</a>
                        </h3>
                        <p>هناك العديد من نسخ لوريم إيبسوم المتاحة، لكن معظمها تعرض لتعديلات بأشكال مختلفة، سواء بإضافة نكات أو كلمات عشوائية تبدو غير منطقية. إذا كنت ستستخدم مقطعاً من لوريم إيبسوم.</p>
                        <a href="/blogs/blog-details/test" class="read-more">اقرأ المزيد</a>
                    </div>
                    </div>
                    <div class="post format-standard-image">
                    <div class="entry-media">
                        <img src="{{ asset('website/images/blog/img-12.jpg') }}" alt>
                        <span>28 <br>
                        فبراير</span>
                    </div>
                    <div class="entry-meta">
                        <ul>
                        <li><i class="fi flaticon-user"></i><a href="#">خالد ناصر</a>
                        </li>
                        <li><i class="fi ti-comment-alt"></i> <a href="#">تعليقات (٩)</a></li>
                        <li><i class="fi flaticon-clock"></i><a href="#">قراءة ٩ دقائق</a></li>
                        </ul>
                    </div>
                    <div class="entry-details">
                        <h3><a href="/blogs/blog-details/test">الفرع المسمى جمعية ابو العزايم الخيرية</a>
                        </h3>
                        <p>هناك العديد من نسخ لوريم إيبسوم المتاحة، لكن معظمها تعرض لتعديلات بأشكال مختلفة، سواء بإضافة نكات أو كلمات عشوائية تبدو غير منطقية. إذا كنت ستستخدم مقطعاً من لوريم إيبسوم.</p>
                        <a href="/blogs/blog-details/test" class="read-more">اقرأ المزيد</a>
                    </div>
                    </div>
                    <div class="pagination-wrapper pagination-wrapper">
                    <ul class="pg-pagination">
                        <li>
                        <a href="#" aria-label="Previous">
                            <i class="fi ti-angle-right"></i>
                        </a>
                        </li>
                        <li class="active"><a href="#">١</a></li>
                        <li><a href="#">٢</a></li>
                        <li><a href="#">٣</a></li>
                        <li>
                        <a href="#" aria-label="Next">
                            <i class="fi ti-angle-left left"></i>
                        </a>
                        </li>
                    </ul>
                    </div>
                </div>
                </div>
                <div class="col col-lg-4">
                <div class="blog-sidebar">
                    <div class="widget about-widget">
                    <div class="img-holder">
                        <img src="{{ asset('website/images/blog/about-widget.jpg') }}" alt="">
                    </div>
                    <h4>دكتور احمد العيسوي</h4>
                    <span>مدوِّنة / مصورة</span>
                    <p>تُعرف باسم جمعية ابو العزايم الخيرية، وهي مديرة التصميم والمصورة في نيويورك.</p>
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
                        <input type="text" class="form-control" placeholder="ابحث عن مقال..">
                        <button type="submit"><i class="ti-search"></i></button>
                        </div>
                    </form>
                    </div>
                    <div class="widget recent-post-widget">
                    <h3>مقالات ذات صلة</h3>
                    <div class="posts">
                        <div class="post">
                        <div class="img-holder">
                            <img src="{{ asset('website/images/recent-posts/img-1.jpg') }}" alt>
                        </div>
                        <div class="details">
                            <span class="date"><i class="flaticon-calendar"></i> فبراير ٢٠٢٥ </span>
                            <h4><a href="/blogs/blog-details/test">
                                القضايا الميزانية تجبرنا على التغير</a>
                            </h4>
                        </div>
                        </div>
                        <div class="post">
                        <div class="img-holder">
                            <img src="{{ asset('website/images/recent-posts/img-2.jpg') }}" alt>
                        </div>
                        <div class="details">
                            <span class="date"><i class="flaticon-calendar"></i>٨ فبراير ٢٠٢٥ </span>
                            <h4><a href="/blogs/blog-details/test">
                                أفضل المنتجات التي تشكل الموضة</a>
                            </h4>
                        </div>
                        </div>
                        <div class="post">
                        <div class="img-holder">
                            <img src="{{ asset('website/images/recent-posts/img-3.jpg') }}" alt>
                        </div>
                        <div class="details">
                            <span class="date"><i class="flaticon-calendar"></i>٨ فبراير ٢٠٢٥ </span>
                            <h4><a href="/blogs/blog-details/test">
                                أفضل المنتجات التي تشكل الموضة</a>
                            </h4>
                        </div>
                        </div>
                    </div>
                    </div>
                    <div class="widget tag-widget">
                    <h3>الكلمات الشائعة</h3>
                    <ul>
                        <li><a href="#">إعطاء</a></li>
                        <li><a href="#">جهود الإغاثة</a></li>
                        <li><a href="#">تأثير إيجابي</a></li>
                        <li><a href="#">الطيبة</a></li>
                        <li><a href="#">المساعدة</a></li>
                        <li><a href="#">رعاية</a></li>
                    </ul>
                    </div>
                    <div class="widget category-widget">
                    <h3>التصنيفات</h3>
                    <ul>
                        <li><a href="blog.html">حملة تبرعات<span>٣</span></a></li>
                        <li><a href="blog.html" class="active">التواصل المجتمعي <span>٤</span></a></li>
                        <li><a href="blog.html">مساعدة المتطوعين<span>٩</span></a></li>
                        <li><a href="blog.html">حدث جمع تبرعات <span>٣</span></a></li>
                    </ul>
                    </div>
                </div>
                </div>
            </div>
            </div>
        </section>


@endsection
