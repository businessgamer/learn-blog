@extends('layouts.app',['title'=>$title])
@section('content')
    <!-- Start EduMim Page Title Area -->
    <section class="page-title-area item-bg1">
        <div class="container">
            <div class="page-title-content">
                <h2>{{ $title ?? 'Blogs' }}</h2>
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/">Home</a></li>
                    <li class="breadcrumb-item"></li>
                    <li class="primery-link">{{ $title ?? 'Blogs' }}</li>
                </ul>
            </div>
        </div>
    </section>
    <!-- End EduMim Page Title Area -->

    <!-- Start EduMim Blog Area -->
    <div class="edu-blog-area ptb-100">
        <div class="container">
            @if(isset($blogs)  && count($blogs) > 0)
                <div class="row justify-content-center">
                    @foreach($blogs as $blog)
                        <div class="col-lg-4 col-md-6 col-sm-6">
                            <div class="single-blog-box">
                                <div class="image">
                                    <a href="{{ route('blog.slug',$blog->slug) }}" class="d-block">
                                        <img src="{{ Voyager::image($blog->image) }}" alt="{{Voyager::image($blog->title)}}">
                                    </a>
                                    @isset($blog->category)
                                        <div class="cr-tag">
                                            <a href="{{ route('blogs.category',$blog->category->slug) }}"><span>{{ $blog->category->name}}</span></a>
                                        </div>
                                    @endisset
                                </div>
                                <div class="content">
                                    <ul class="cr-items">
                                        @isset($blog->user)
                                            <li>
                                                <a href="{{route('author',$blog->author_id)}}">
                                                    <i class='bx bx-user'></i><span>{{ $blog->user->name}}</span>
                                                </a>
                                            </li>
                                        @endisset
                                        <li><i class='bx bx-star'></i><span>{{ $blog->created_at->format('M d, Y') }}</span></li>
                                    </ul>
                                    <h3><a href="{{ route('blog.slug',$blog->slug) }}">{{ $blog->title }}</a></h3>
                                    <a class="blog-btn" href="{{ route('blog.slug',$blog->slug) }}">Read More</a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                    {{--                    <div class="col-lg-12 col-md-12 col-sm-12">--}}
                    {{--                        <div class="pagination-area text-center">--}}
                    {{--                            <a href="blog-grid.html" class="prev page-numbers"><i class='bx bx-chevrons-left'></i></a>--}}
                    {{--                            <span class="page-numbers current" aria-current="page">1</span>--}}
                    {{--                            <a href="blog-grid.html" class="page-numbers">2</a>--}}
                    {{--                            <a href="blog-grid.html" class="page-numbers">3</a>--}}
                    {{--                            <a href="blog-grid.html" class="page-numbers">4</a>--}}
                    {{--                            <a href="blog-grid.html" class="next page-numbers"><i class='bx bx-chevrons-right'></i></a>--}}
                    {{--                        </div>--}}
                    {{--                    </div>--}}
                </div>
            @endif
        </div>
    </div>
    <!-- End EduMim Blog Area -->
@endsection
