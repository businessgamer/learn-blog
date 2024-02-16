@extends('layouts.app', ['title' => $author->name])
@section('content')
    <!-- Start EduMim Page Title Area -->
    <section class="page-title-area item-bg1">
        <div class="container">
            <div class="page-title-content">
                <h2>{{ $author->name }}</h2>
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/">Home</a></li>
                    <li class="breadcrumb-item"></li>
                    <li class="primery-link">{{ $author->name }}</li>
                </ul>
            </div>
        </div>
    </section>
    <!-- End EduMim Page Title Area -->

    <!-- Start EduMim Instructor Single Details Area -->
    <div class="instructor-single-details ptb-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="instructor-sidebar-sticky">
                        <div class="image">
                            <img src="{{ config('app.url') }}/assets/img/all-img/single-ins.png" alt="image">
                        </div>
                        <div class="content">
                            <div class="instructor-content">
                                <h3>{{ $author->designation }}</h3>
                            </div>
                            <div class="instructor-social">
                                <h4>Follow Me On:</h4>
                                <ul>
                                    <li><a href="{{ $author->fb_link }}" target="_blank"><img
                                                src="{{ config('app.url') }}/assets/img/icon/fb.svg" alt="icon"></a>
                                    </li>
                                    <li><a href="{{ $author->in_link }}" target="_blank"><img
                                                src="{{ config('app.url') }}/assets/img/icon/ins.svg" alt="icon"></a>
                                    </li>
                                    <li><a href="{{ $author->tw_link }}" target="_blank"><img
                                                src="{{ config('app.url') }}/assets/img/icon/tw.svg" alt="icon"></a>
                                    </li>
                                    <li><a href="{{ $author->pn_link }}" target="_blank"><img
                                                src="{{ config('app.url') }}/assets/img/icon/pn.svg" alt="icon"></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="instructor-single-content">
                        <p>{!! $author->about ?? '' !!}</p>
                        <div class="edu-courses-area pb-70">
                            <div class="edu-section-title text-start">
                                <h2>Read Our Top <span class="shape02">Topics</span></h2>
                            </div>
                            @if (isset($author->posts) && count($author->posts) > 0)
                                <div class="row justify-content-center">
                                    @foreach ($author->posts as $blog)
                                        <div class="col-lg-6 col-md-6 col-sm-12">
                                            <div class="single-courses-box">
                                                <div class="image">
                                                    <a href="{{ route('blog.slug', $blog->slug) }}" class="d-block">
                                                        <img src="{{ Voyager::image($blog->image) }}"
                                                            alt="{{ $blog->title }}">
                                                    </a>
                                                </div>
                                                <div class="content">
                                                    <h3>
                                                        <a
                                                            href="{{ route('blog.slug', $blog->slug) }}">{{ $blog->title }}</a>
                                                    </h3>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End EduMim Instructor Single Details Area -->
@endsection
