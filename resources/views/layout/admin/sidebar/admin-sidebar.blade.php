<ul class="main-menu">

    <!-- Start::slide -->
    <li class="slide">
        <a href="{{ route('admin.dashboard') }}"
            class="side-menu__item {{ request()->routeIs('admin.dashboard') ? 'active' : '' }}">
            <i class="bx bx-home side-menu__icon"></i>
            <span class="side-menu__label">{{ __('translation.main') }}</span>
        </a>
    </li>

    <!-- Start::home -->
    <li
        class="slide has-sub {{ request()->routeIs('admin.page.home-sliders') || request()->routeIs('admin.page.setting')  || request()->routeIs('admin.page.counter') || request()->routeIs('admin.page.partners') || request()->routeIs('admin.page.faq-section') || request()->routeIs('admin.page.faq') ? 'active open' : '' }}">
        <a href="javascript:void(0);"
            class="side-menu__item {{ request()->routeIs('admin.page.home-sliders') || request()->routeIs('admin.page.setting')  || request()->routeIs('admin.page.counter') || request()->routeIs('admin.page.partners') || request()->routeIs('admin.page.faq-section') || request()->routeIs('admin.page.faq') ? 'active' : '' }}">
            <i class="bi bi-map side-menu__icon"></i>
            <span class="side-menu__label">الصفحة الرئيسية</span>
            <i class="fe fe-chevron-right side-menu__angle"></i>
        </a>
        <ul class="slide-menu child1">
            <li class="slide side-menu__label1">
                <a href="javascript:void(0)">الصفحة الرئيسية</a>
            </li>
            <li class="slide">
                <a href="{{ route('admin.page.home-sliders') }}"
                    class="side-menu__item {{ request()->routeIs('admin.page.home-sliders') ? 'active' : '' }}">
                    السكشن المتحرك
                </a>
            </li>
            <li class="slide">
                <a href="{{ route('admin.page.counter') }}"
                    class="side-menu__item {{ request()->routeIs('admin.page.counter') ? 'active' : '' }}">
                    العدادات
                </a>
            </li>
            <li class="slide">
                <a href="{{ route('admin.page.faq-section') }}"
                    class="side-menu__item {{ request()->routeIs('admin.page.faq-section') ? 'active' : '' }}">
                    قسم الأسئلة الشائعة
                </a>
            </li>
            <li class="slide">
                <a href="{{ route('admin.page.faq') }}"
                    class="side-menu__item {{ request()->routeIs('admin.page.faq') ? 'active' : '' }}">
                    الأسئلة الشائعة
                </a>
            </li>
            <li class="slide">
                <a href="{{ route('admin.page.partners') }}"
                    class="side-menu__item {{ request()->routeIs('admin.page.partners') ? 'active' : '' }}">
                    الشركاء
                </a>
            </li>
            <li class="slide">
                <a href="{{ route('admin.page.team') }}"
                    class="side-menu__item {{ request()->routeIs('admin.page.team') ? 'active' : '' }}">
                    اعضاء الشركة
                </a>
            </li>
            <li class="slide">
                <a href="{{ route('admin.page.testimonial') }}"
                    class="side-menu__item {{ request()->routeIs('admin.page.testimonial') ? 'active' : '' }}">
                    اراء العملاء
                </a>
            </li>
            <li class="slide">
                <a href="{{ route('admin.page.setting') }}"
                    class="side-menu__item {{ request()->routeIs('admin.page.setting') ? 'active' : '' }}">
                    الاعدادات
                </a>
            </li>
        </ul>
    </li>
    <!-- End::home -->

    <!-- Start::about -->
    <li
        class="slide has-sub {{ request()->routeIs('admin.page.one-about') || request()->routeIs('admin.page.two-about') || request()->routeIs('admin.page.counter-about') ? 'active open' : '' }}">
        <a href="javascript:void(0);"
            class="side-menu__item {{ request()->routeIs('admin.page.one-about') || request()->routeIs('admin.page.two-about') || request()->routeIs('admin.page.counter-about') ? 'active' : '' }}">
            <i class="bi bi-map side-menu__icon"></i>
            <span class="side-menu__label">صفحة من نحن</span>
            <i class="fe fe-chevron-right side-menu__angle"></i>
        </a>
        <ul class="slide-menu child1">
            <li class="slide side-menu__label1">
                <a href="javascript:void(0)">صفحة من نحن</a>
            </li>
            <li class="slide">
                <a href="{{ route('admin.page.one-about') }}"
                    class="side-menu__item {{ request()->routeIs('admin.page.one-about') ? 'active' : '' }}">
                    السكشن الاول
                </a>
            </li>
            <li class="slide">
                <a href="{{ route('admin.page.two-about') }}"
                    class="side-menu__item {{ request()->routeIs('admin.page.two-about') ? 'active' : '' }}">
                    السكشن الثاني
                </a>
            </li>
            <li class="slide">
                <a href="{{ route('admin.page.counter-about') }}"
                    class="side-menu__item {{ request()->routeIs('admin.page.counter-about') ? 'active' : '' }}">
                    العدادات
                </a>
            </li>
        </ul>
    </li>
    <!-- End::about -->

    <li
        class="slide has-sub {{ request()->routeIs('admin.page.articles') || request()->routeIs('admin.page.article-categories') ? 'active open' : '' }}">
        <a href="javascript:void(0);"
            class="side-menu__item {{ request()->routeIs('admin.page.articles') || request()->routeIs('admin.page.article-categories') ? 'active' : '' }}">
            <i class="bi bi-map side-menu__icon"></i>
            <span class="side-menu__label">صفحة المقالات</span>
            <i class="fe fe-chevron-right side-menu__angle"></i>

        </a>

        <ul class="slide-menu child1">
            <li class="slide side-menu__label1">
                <a href="javascript:void(0)">صفحة المقالات</a>
            </li>

            <li class="slide">
                <a href="{{ route('admin.page.article-categories') }}"
                    class="side-menu__item {{ request()->routeIs('admin.page.article-categories') ? 'active' : '' }}">
                    فئات المقالات
                </a>
            </li>

            <li class="slide">
                <a href="{{ route('admin.page.articles') }}"
                    class="side-menu__item {{ request()->routeIs('admin.page.articles') ? 'active' : '' }}">
                    المقالات
                </a>
            </li>

               <li class="slide">
                <a href="{{ route('admin.page.articles-queries') }}"
                    class="side-menu__item {{ request()->routeIs('admin.page.articles-queries') ? 'active' : '' }}">
                    استعلامات المقالات
                </a>
            </li>

        </ul>
    </li>
   

    <!-- Start::about -->
    <li
        class="slide has-sub {{ request()->routeIs('admin.page.services') || request()->routeIs('admin.page.service-faqs') ? 'active open' : '' }}">
        <a href="javascript:void(0);"
            class="side-menu__item {{ request()->routeIs('admin.page.services') || request()->routeIs('admin.page.service-faqs') ? 'active' : '' }}">
            <i class="bi bi-map side-menu__icon"></i>
            <span class="side-menu__label">الخدمات</span>
            <i class="fe fe-chevron-right side-menu__angle"></i>
        </a>
        <ul class="slide-menu child1">
            <li class="slide">
                <a href="{{ route('admin.page.services') }}"
                    class="side-menu__item {{ request()->routeIs('admin.page.services') ? 'active' : '' }}">
                    الخدمات
                </a>
            </li>
            <li class="slide">
                <a href="{{ route('admin.page.service-faqs') }}"
                    class="side-menu__item {{ request()->routeIs('admin.page.service-faqs') ? 'active' : '' }}">
                    الأسئلة الشائعة للخدمات
                </a>
            </li>

        </ul>
    </li>
    <!-- End::about -->

       <li
        class="slide has-sub {{ request()->routeIs('admin.page.project-categories') || request()->routeIs('admin.page.projects') || request()->routeIs('admin.page.project-challenge-solutions') ? 'active open' : '' }}">
        <a href="javascript:void(0);"
            class="side-menu__item {{ request()->routeIs('admin.page.articles') || request()->routeIs('admin.page.projects') || request()->routeIs('admin.page.project-challenge-solutions') ? 'active' : '' }}">
            <i class="bi bi-map side-menu__icon"></i>
            <span class="side-menu__label">صفحة المشاريع</span>
            <i class="fe fe-chevron-right side-menu__angle"></i>

        </a>

        <ul class="slide-menu child1">
            <li class="slide side-menu__label1">
                <a href="javascript:void(0)">صفحة المشاريع</a>
            </li>

          

            <li class="slide">
                <a href="{{ route('admin.page.project-categories') }}"
                    class="side-menu__item {{ request()->routeIs('admin.page.project-categories') ? 'active' : '' }}">
                    فئات المشاريع
                </a>
            </li>

            
            <li class="slide">
                <a href="{{ route('admin.page.projects') }}"
                    class="side-menu__item {{ request()->routeIs('admin.page.projects') ? 'active' : '' }}">
                    المشاريع
                </a>
            </li>

             <li class="slide">
                <a href="{{ route('admin.page.project-challenge-solutions') }}"
                    class="side-menu__item {{ request()->routeIs('admin.page.project-challenge-solutions') ? 'active' : '' }}">
                    تحديات المشاريع
                </a>
            </li>


        </ul>
    </li>

</ul>
