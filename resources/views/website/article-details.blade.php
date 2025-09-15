@extends('layout.website.master')

@section('title', __('website.contact'))

@section('content')
    <!--======== Contact Page Banner Start ========-->
    <section class="rs-page-banner">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="rs-page-banner__content">
                        <h1 class="title">@lang('website.Article Details')</h1>
                        <ul>
                            <li><i class="ri-home-wifi-line"></i> <a href="/">@lang('website.home')</a></li>
                            <li><i class="ri-arrow-right-fill"></i> <a href="/blogs">@lang('website.Articles')</a></li>
                            <li><i class="ri-arrow-right-fill"></i> @lang('website.Article Details')</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <section class="rs-blog-single-page pt-80 pb-120">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="rs-blog-single-page__content mt-40">
                        <div class="rs-thumb pb-45">
                            <img src="{{ $article->media?->url }}" alt="{{ $article->title }}"
                                style="width: 860px;height:470px">

                            {{-- <div class="rs-meta-box">
                                <ul>
                                    <li><i class="ri-calendar-line"></i>
                                        {{ $article->created_at->format('Y-m-d H:i') }}</li>
                                    <li><a href="#"><i class="ri-price-tag-3-line"></i>
                                            {{ $article->category?->title }}</a></li>
                                </ul>
                            </div> --}}
                        </div>
                        <div class="rs-content">
                            <h1 class="title"><a
                                    href="{{ route('blog-details',['slug' => $article->slug]) }}">{{ $article->title }}</a>
                            </h1>

                            <div>
                                {!! $article->content !!}
                            </div>
                        </div>
                        <div class="rs-form">
                            <h3 class="title">@lang('website.Leave a Reply')</h3>
                            <p>@lang('website.Your email address will not be published. Required fields are marked *')</p>
                            <form action="/blogs/submit-quiry" method="post">
                                @csrf
                                <input type="hidden" required name="article_id" value="{{$article->id}}">

                                <div class="row">

                                    <div class="col-lg-6">
                                        <div class="input-box">
                                            <input type="text" placeholder="@lang('website.Name')*" required name="name">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="input-box">
                                            <input type="email" placeholder="@lang('website.Email')*" required name="email">
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="input-box">
                                            <textarea name="comment" id="#" placeholder="@lang('website.Comment')*" required></textarea>
                                            <button class="main-btn" type="submit">@lang('website.Post Comment')</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
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
                                    <a
                                        href="{{ url('/blogs') . (request()->has('search') ? '?search=' . urlencode(request('search')) : '') }}">
                                        @lang('website.All Categories') <i class="ri-arrow-right-fill"></i>
                                    </a>
                                </li>

                                @foreach ($categories as $category)
                                    <li>
                                        <a class="{{ $article->category_id == $category->id ? 'active' : '' }}"
                                            href="{{ route('blogs') }}?category_id={{ $article->category_id }}"
                                        >
                                            {{ $category->title }} <i class="ri-arrow-right-fill"></i>
                                        </a>
                                    </li>
                                @endforeach
                            </ul>
                        </div>

                        <div class="rs-blog-sidebar-post rs-blog-common mt-40">
                            <h4 class="rs-sidebar-title">@lang('website.Recent Articles')</h4>


                            @forelse ($latestArticles as $item)
                                <div class="rs-blog-sidebar-item mb-25">
                                    <div class="rs-thumb">
                                        <a href="/blogs/blog-details/{{ $item->id }}/{{ $item->slug }}"><img
                                                src="{{ $item->media->url }}" style="width:50px;heigh:50px"
                                                alt="{{ $item->title }}"></a>
                                    </div>
                                    <div class="rs-content">
                                        <h5 class="title"><a
                                                href="/blogs/blog-details/{{ $item->id }}/{{ $item->slug }}">{{ $item->title }}</a>
                                        </h5>
                                        <span><i class="ri-calendar-line"></i> {{ $item->created_at->format('Y-m-d H:i') }}
                                        </span>
                                    </div>
                                </div>
                            @empty
                                <h6>@lang('website.No Data Found here')</h6>
                            @endforelse




                        </div>

                    </div>
                </div>

            </div>
        </div>
    </section>
@endsection
