@extends('layout.website.master')

@section('title', __('website.contact'))

@section('content')
    <!--======== Contact Page Banner Start ========-->
    <section class="rs-page-banner">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="rs-page-banner__content">
                        <h1 class="title">@lang('website.Articles')</h1>
                        <ul>
                            <li><i class="ri-home-wifi-line"></i> <a href="/">@lang('website.home')</a></li>
                            <li><i class="ri-arrow-right-fill"></i> @lang('website.Articles')</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <section class="rs-blog-standard-page pt-80 pb-120">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="rs-blog-standard-page__box mt-40">
                        @forelse ($articles as $article)
                            <div class="rs-blog-standard-item mb-50">
                                <div class="rs-thumb">
                                    <a href="{{ route('blog-details',['slug' => $article->slug]) }}">
                                        <img src="{{ $article->media->url }}" alt="{{ $article->title }}"
                                            style="height: 470px;width:860px">
                                    </a>
                                    <div class="rs-meta-box">
                                        <ul>
                                            <li><i class="ri-calendar-line"></i>
                                                {{ $article->created_at->format('Y-m-d H:i') }}</li>
                                            <li><a href="#"><i class="ri-price-tag-3-line"></i>
                                                    {{ $article->category?->title }}</a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="rs-content">
                                    <h1 class="title"><a
                                            href="{{ route('blog-details',['slug' => $article->slug]) }}">{{ $article->title }}</a>
                                    </h1>

                                    <div style="height: 100px;overflow:hidden" >
                                        {!! $article->content !!}
                                    </div>
                                    <div class="rs-link">
                                        <a class="main-btn-2"
                                            href="{{ route('blog-details',['slug' => $article->slug]) }}">@lang('website.Continue Reading')
                                            <i class="ri-arrow-right-fill"></i></a>
                                    </div>
                                </div>
                            </div>
                        @empty
                            <h1>@lang('website.No Data Found here')</h1>
                        @endforelse

                        <div class="rs-shop-page__breadcrumb">
                            {!! $articles->appends(request()->query())->links() !!}
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="rs-blog-standard-page__sidebar mt-40">
                        <div class="rs-blog-search rs-blog-common">
                            <form action="/blogs" method="GET">
                                <div class="rs-search">
                                    <input type="text" placeholder="@lang('website.Searching')" name="search"
                                        value="{{ request('search') ?? '' }}">
                                    @if (request()->has('category_id'))
                                        <input type="hidden" name="category_id" value="{{ request('category_id') }}">
                                    @endif
                                    <button class="main-btn" type="submit"><i class="ri-search-line"></i></button>
                                </div>
                            </form>
                        </div>

                        <div class="rs-blog-category rs-blog-common mt-40">
                            <h4 class="rs-sidebar-title">@lang('website.Categories')</h4>
                            <ul>
                                <li>
                                    <a class="{{ request()->has('category_id') ? '' : 'active' }}"
                                        href="{{ url('/blogs') . (request()->has('search') ? '?search=' . urlencode(request('search')) : '') }}">
                                        @lang('website.All Categories') <i class="ri-arrow-right-fill"></i>
                                    </a>
                                </li>

                                @foreach ($categories as $category)
                                    <li>
                                        <a class="{{ request()->has('category_id') && request()->category_id == $category->id ? 'active' : '' }}"
                                            href="{{ request()->fullUrlWithQuery(['category_id' => $category->id]) }}">
                                            {{ $category->title }} <i class="ri-arrow-right-fill"></i>
                                        </a>
                                    </li>
                                @endforeach
                            </ul>
                        </div>



                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
