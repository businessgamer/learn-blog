@extends('layouts.app')
@section('content')
    <!-- Start EduMim Page Title Area -->
    <section class="page-title-area item-bg1">
        <div class="container">
            <div class="page-title-content">
                <h2>Blog Grid with Right Sidebar</h2>
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Pages</a></li>
                    <li class="breadcrumb-item"></li>
                    <li class="primery-link">Blog Grid with Right Sidebar</li>
                </ul>
            </div>
        </div>
    </section>
    <!-- End EduMim Page Title Area -->

    <!-- Start EduMim Blog Area with SideBar -->
    <div class="edu-blog-area pt-70 pb-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="row justify-content-center">
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <div class="single-blog-box">
                                <div class="image">
                                    <a href="blog-single" class="d-block">
                                        <img src="{{ config('app.url') }}/assets/img/all-img/blog-1.png" alt="image">
                                    </a>
                                    <div class="cr-tag">
                                        <a href="#"><span>Development</span></a>
                                    </div>
                                </div>
                                <div class="content">
                                    <ul class="cr-items">
                                        <li><a href="#"><i class="bx bx-user"></i><span>Admin</span></a></li>
                                        <li><i class="bx bx-star"></i><span>Jan 29, 2023</span></li>
                                    </ul>
                                    <h3><a href="blog-single">Financial Security Thinking and Principles Theory</a></h3>
                                    <a class="blog-btn" href="blog-single">Read More</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <div class="single-blog-box">
                                <div class="image">
                                    <a href="blog-single" class="d-block">
                                        <img src="{{ config('app.url') }}/assets/img/all-img/blog-2.png" alt="image">
                                    </a>
                                    <div class="cr-tag">
                                        <a href="#"><span>Development</span></a>
                                    </div>
                                </div>
                                <div class="content">
                                    <ul class="cr-items">
                                        <li><a href="#"><i class="bx bx-user"></i><span>Admin</span></a></li>
                                        <li><i class='bx bx-time-five'></i><span>Jan 12, 2023</span></li>
                                    </ul>
                                    <h3><a href="blog-single">Financial Security Thinking and Principles Theory</a></h3>
                                    <a class="blog-btn" href="blog-single">Read More</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <div class="single-blog-box">
                                <div class="image">
                                    <a href="blog-single" class="d-block">
                                        <img src="{{ config('app.url') }}/assets/img/all-img/blog-3.png" alt="image">
                                    </a>
                                    <div class="cr-tag">
                                        <a href="#"><span>Education</span></a>
                                    </div>
                                </div>
                                <div class="content">
                                    <ul class="cr-items">
                                        <li><a href="#"><i class='bx bx-user'></i><span>Admin</span></a></li>
                                        <li><i class='bx bx-time-five'></i><span>Jan 17, 2023</span></li>
                                    </ul>
                                    <h3><a href="blog-single">Education Is About Create Leaders For Tomorrow</a></h3>
                                    <a class="blog-btn" href="blog-single">Read More</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <div class="single-blog-box">
                                <div class="image">
                                    <a href="blog-single" class="d-block">
                                        <img src="{{ config('app.url') }}/assets/img/all-img/blog-4.png" alt="image">
                                    </a>
                                    <div class="cr-tag">
                                        <a href="#"><span>Education</span></a>
                                    </div>
                                </div>
                                <div class="content">
                                    <ul class="cr-items">
                                        <li><a href="#"><i class='bx bx-user'></i><span>Admin</span></a></li>
                                        <li><i class='bx bx-time-five'></i><span>Jan 29, 2023</span></li>
                                    </ul>
                                    <h3><a href="blog-single">Education Is About Create Leaders For Tomorrow</a></h3>
                                    <a class="blog-btn" href="blog-single">Read More</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <div class="single-blog-box">
                                <div class="image">
                                    <a href="blog-single" class="d-block">
                                        <img src="{{ config('app.url') }}/assets/img/all-img/blog-5.png" alt="image">
                                    </a>
                                    <div class="cr-tag">
                                        <a href="#"><span>Education</span></a>
                                    </div>
                                </div>
                                <div class="content">
                                    <ul class="cr-items">
                                        <li><a href="#"><i class='bx bx-user'></i><span>Admin</span></a></li>
                                        <li><i class='bx bx-time-five'></i><span>Jan 23, 2023</span></li>
                                    </ul>
                                    <h3><a href="blog-single">Professional Ceramic Moulding for Beginners</a></h3>
                                    <a class="blog-btn" href="blog-single">Read More</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <div class="single-blog-box">
                                <div class="image">
                                    <a href="blog-single" class="d-block">
                                        <img src="{{ config('app.url') }}/assets/img/all-img/blog-6.png" alt="image">
                                    </a>
                                    <div class="cr-tag">
                                        <a href="#"><span>Education</span></a>
                                    </div>
                                </div>
                                <div class="content">
                                    <ul class="cr-items">
                                        <li><a href="#"><i class='bx bx-user'></i><span>Admin</span></a></li>
                                        <li><i class='bx bx-time-five'></i><span>Jan 26, 2023</span></li>
                                    </ul>
                                    <h3><a href="blog-single">Professional Mobile Painting and Sculpting</a></h3>
                                    <a class="blog-btn" href="blog-single">Read More</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12 col-md-12 col-sm-12">
                            <div class="pagination-area text-center">
                                <a href="blog-grid" class="prev page-numbers"><i class='bx bx-chevrons-left'></i></a>
                                <span class="page-numbers current" aria-current="page">1</span>
                                <a href="blog-grid" class="page-numbers">2</a>
                                <a href="blog-grid" class="page-numbers">3</a>
                                <a href="blog-grid" class="page-numbers">4</a>
                                <a href="blog-grid" class="next page-numbers"><i class='bx bx-chevrons-right'></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12">
                    <aside class="blog-sidebar-widgets">
                        <div class="widget widget-search">
                            <form class="search-form">
                                <label>
                                    <input type="search" class="search-field" placeholder="Search...">
                                </label>
                                <button class="widget-search-btn" type="submit"><i
                                        class="bx bx-search-alt"></i></button>
                            </form>
                        </div>
                        <div class="widget widget-catgory">
                            <h3 class="widget-title">Categories</h3>
                            <ul>
                                <a href="#">
                                    <li><span>Development (23)</span> <i class='bx bx-chevron-right'></i></li>
                                </a>
                                <a href="#">
                                    <li><span>Art & Design (45)</span> <i class='bx bx-chevron-right'></i></li>
                                </a>
                                <a href="#">
                                    <li><span>Data Science (14)</span> <i class='bx bx-chevron-right'></i></li>
                                </a>
                                <a href="#">
                                    <li><span>Digital Marketing (18)</span> <i class='bx bx-chevron-right'></i></li>
                                </a>
                                <a href="#">
                                    <li><span>Technology (28)</span> <i class='bx bx-chevron-right'></i></li>
                                </a>
                                <a href="#">
                                    <li><span>It Management (34)</span> <i class='bx bx-chevron-right'></i></li>
                                </a>
                            </ul>
                        </div>
                        <div class="widget widget-recent-blog">
                            <h3 class="widget-title">Related Blogs</h3>
                            <article class="item">
                                <a href="#" class="thumb"><img
                                        src="{{ config('app.url') }}/assets/img/all-img/rc-1.png" alt="iamge"></a>
                                <div class="info">
                                    <h4 class="title"><a href="#">How to Manage Ads For Clients The Right Way</a>
                                    </h4>
                                    <a href="#" class="re-blog-btn">Read More</a>
                                </div>
                            </article>
                            <article class="item">
                                <a href="#" class="thumb"><img
                                        src="{{ config('app.url') }}/assets/img/all-img/rc-2.png" alt="iamge"></a>
                                <div class="info">
                                    <h4 class="title"><a href="#">How to Manage Ads For Clients The Right Way</a>
                                    </h4>
                                    <a href="#" class="re-blog-btn">Read More</a>
                                </div>
                            </article>
                            <article class="item">
                                <a href="#" class="thumb"><img
                                        src="{{ config('app.url') }}/assets/img/all-img/rc-3.png" alt="iamge"></a>
                                <div class="info">
                                    <h4 class="title"><a href="#">How to Manage Ads For Clients The Right Way</a>
                                    </h4>
                                    <a href="#" class="re-blog-btn">Read More</a>
                                </div>
                            </article>
                        </div>
                        <div class="widget widget-tag-cloud">
                            <h3 class="widget-title">Popular Tags</h3>
                            <div class="tagcloud">
                                <a href="#">Business</a>
                                <a href="#">Design</a>
                                <a href="#">Teachers</a>
                                <a href="#">Education</a>
                                <a href="#">Classroom</a>
                                <a href="#">Students</a>
                                <a href="#">e-Learning</a>
                                <a href="#">Book</a>
                            </div>
                        </div>
                        <div class="widget widget-ins-gallery">
                            <h3 class="widget-title">Instagram Feed</h3>
                            <div class="insta-gallery">
                                <a href="#">
                                    <div class="insta-item">
                                        <img src="{{ config('app.url') }}/assets/img/all-img/ins-1.png" alt="iamge">
                                        <span class="post-icon"><i class='bx bxl-instagram'></i></span>
                                    </div>
                                </a>
                                <a href="#">
                                    <div class="insta-item">
                                        <img src="{{ config('app.url') }}/assets/img/all-img/ins-2.png" alt="iamge">
                                        <span class="post-icon"><i class='bx bxl-instagram'></i></span>
                                    </div>
                                </a>
                                <a href="#">
                                    <div class="insta-item">
                                        <img src="{{ config('app.url') }}/assets/img/all-img/ins-3.png" alt="iamge">
                                        <span class="post-icon"><i class='bx bxl-instagram'></i></span>
                                    </div>
                                </a>
                                <a href="#">
                                    <div class="insta-item">
                                        <img src="{{ config('app.url') }}/assets/img/all-img/ins-4.png" alt="iamge">
                                        <span class="post-icon"><i class='bx bxl-instagram'></i></span>
                                    </div>
                                </a>
                                <a href="#">
                                    <div class="insta-item">
                                        <img src="{{ config('app.url') }}/assets/img/all-img/ins-5.png" alt="iamge">
                                        <span class="post-icon"><i class='bx bxl-instagram'></i></span>
                                    </div>
                                </a>
                                <a href="#">
                                    <div class="insta-item">
                                        <img src="{{ config('app.url') }}/assets/img/all-img/ins-6.png" alt="iamge">
                                        <span class="post-icon"><i class='bx bxl-instagram'></i></span>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </aside>
                </div>
            </div>
        </div>
    </div>
    <!-- End EduMim Blog Area -->
@endsection
