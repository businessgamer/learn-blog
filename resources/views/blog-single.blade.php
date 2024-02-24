@extends('layouts.app', ['title' => $blog->title])
@section('head')
    <meta property="article:published_time" content="{{$blog->created_at}}"/>
    <meta property="article:modified_time" content="{{$blog->updated_at}}"/>
    <meta property="og:image" content="{{ Voyager::image($blog->image) }}"/>
    <meta property="og:image:type" content="image/png"/>
@endsection
@section('content')
    <!-- Start EduMim Page Title Area -->
    <section class="page-title-area item-bg1">
        <div class="container">
            <div class="page-title-content">
                <h2>{{ $blog->title }}</h2>
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/">Home</a></li>
                    <li class="breadcrumb-item"></li>
                    <li class="primery-link">{{ $blog->title }}</li>
                </ul>
            </div>
        </div>
    </section>
    <!-- End EduMim Page Title Area -->

    <!-- Start EduMim Blog Details Area with SideBar -->
    <div class="edu-courses-area pt-70 pb-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-12">
                    <div class="blog-details-desc">
                        <div class="article-image">
                            <img src="{{ Voyager::image($blog->image) }}" alt="{{ $blog->title }}">
                        </div>
                        <div class="article-content">
                            <div class="entry-meta">
                                <ul>
                                    @isset($blog->user)
                                        <li><i class='bx bx-user'></i> <a
                                                    href="{{ route('author', $blog->author_id) }}">{{ $blog->user->name }}</a></li>
                                    @endif
                                    <li><i class='bx bx-calendar'></i>{{ $blog->created_at->format('D M, Y') }}</li>
                                </ul>
                            </div>

                            {!! $blog->body !!}

                            <div class="article-footer">
                                @if (isset($blog->tags) && count($blog->tags) > 0)
                                    <div class="article-tags">
                                        <span>Tags:</span>
                                        @foreach ($blog->tags as $tag)
                                            <a href="{{ route('blog.tag', $tag->tag_name) }}">{{ $tag->tag_name }}</a>
                                        @endforeach
                                    </div>
                                @endif
                                <div class="article-share">
                                    <span>Share On:</span>
                                    <ul class="social">
                                        <li><a href="#" class="facebook" target="_blank"><img
                                                        src="{{ config('app.url') }}/assets/img/icon/fb.svg" alt="icon"></a>
                                        </li>
                                        <li><a href="#" class="twitter" target="_blank"><img
                                                        src="{{ config('app.url') }}/assets/img/icon/ins.svg"
                                                        alt="icon"></a></li>
                                        <li><a href="#" class="linkedin" target="_blank"><img
                                                        src="{{ config('app.url') }}/assets/img/icon/tw.svg"
                                                        alt="icon"></a></li>
                                        <li><a href="#" class="linkedin" target="_blank"><img
                                                        src="{{ config('app.url') }}/assets/img/icon/pn.svg"
                                                        alt="icon"></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="edu-post-navigation">
                                <div class="prev-link-wrapper">
                                    @if (isset($prevPost))
                                        <div class="info-prev-link-wrapper">
                                            <a href="{{ route('blog.slug', $prevPost->slug) }}">
                                                    <span class="image-prev">
                                                        <img src="{{ Voyager::image($prevPost->image) }}"
                                                             alt="{{ $prevPost->title }}">
                                                    </span>
                                                <span class="prev-link-info-wrapper">
                                                        <span class="post-nav-title">Prev Post</span>
                                                        <span class="prev-title">{{ $prevPost->title }}</span>
                                                    </span>
                                            </a>
                                        </div>
                                    @endif
                                </div>

                                @if (isset($nextPost))
                                    <div class="next-link-wrapper">
                                        <div class="info-next-link-wrapper">
                                            <a href="{{ route('blog.slug', $nextPost->slug) }}">
                                                    <span class="prev-link-info-wrapper">
                                                        <span class="post-nav-title">Prev Post</span>
                                                        <span class="prev-title">{{ $nextPost->title }}</span>
                                                    </span>
                                                <span class="image-prev">
                                                        <img src="{{ Voyager::image($nextPost->image) }}"
                                                             alt="{{ $nextPost->title }}">
                                                    </span>
                                            </a>
                                        </div>
                                    </div>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12">
                    <aside class="blog-sidebar-widgets">
                        @if (isset($recentBlogs) && count($recentBlogs) > 0)
                            <div class="widget widget-recent-blog">
                                <h3 class="widget-title">Recent Posts </h3>
                                @foreach ($recentBlogs as $recent_blog)
                                    <article class="item">
                                        <a href="{{ route('blog.slug', $recent_blog->slug) }}" class="thumb">
                                            <img src="{{ Voyager::image($recent_blog->image) }}"
                                                 alt="{{ $recent_blog->title }}">
                                        </a>
                                        <div class="info">
                                            <h4 class="title">
                                                <a
                                                        href="{{ route('blog.slug', $recent_blog->slug) }}">{{ $recent_blog->title }}</a>
                                            </h4>
                                            <a href="{{ route('blog.slug', $recent_blog->slug) }}" class="re-blog-btn">Read
                                                More</a>
                                        </div>
                                    </article>
                                @endforeach
                            </div>
                        @endif
                    </aside>
                </div>
            </div>
        </div>
    </div>
    <!-- End EduMim Blog Area -->
@endsection
