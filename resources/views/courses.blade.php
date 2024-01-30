@extends('layouts.app')
@section('content')
    <!-- Start EduMim Page Title Area -->
    <section class="page-title-area item-bg1">
        <div class="container">
            <div class="page-title-content">
                <h2>Courses</h2>
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Pages</a></li>
                    <li class="breadcrumb-item"></li>
                    <li class="primery-link">Courses</li>
                </ul>
            </div>
        </div>
    </section>
    <!-- End EduMim Page Title Area -->

    <!-- Start EduMim Courses Area -->
    <div class="edu-courses-area pt-70 pb-100">
        <div class="container">
            <div class="edu-grid-sorting">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-md-7 result-count">
                        <a href="courses" class="courbtn active-courbtn"><i class='bx bx-grid-alt'></i></a>
                        <a href="courses2" class="courbtn"><i class='bx bx-list-ul'></i></a>
                        <p>Showing 12 Courses of 52</p>
                    </div>
                    <div class="col-lg-6 col-md-5 ordering">
                        <div class="select-box">
                            <label></label>
                            <select>
                                <option>Sort By: Popularity</option>
                                <option>Popularity</option>
                                <option>Another option</option>
                                <option>Potato</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="single-courses-box">
                        <div class="image">
                            <a href="single-course" class="d-block">
                                <img src="{{ config('app.url') }}/assets/img/all-img/c1.png" alt="image">
                            </a>
                            <div class="cr-tag">
                                <a href="#"><span>Development</span></a>
                            </div>
                        </div>
                        <div class="content">
                            <span class="cr-price">$10</span>
                            <h3><a href="single-course">Financial Security Thinking and Principles Theory</a></h3>
                            <ul class="cr-items">
                                <li><i class='bx bx-food-menu'></i> <span>2 Lessons</span> </li>
                                <li><i class='bx bx-time-five'></i> <span>4h 30m</span></li>
                                <li><i class='bx bx-star'></i> <span>4.5</span></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="single-courses-box">
                        <div class="image">
                            <a href="single-course" class="d-block">
                                <img src="{{ config('app.url') }}/assets/img/all-img/c2.png" alt="image">
                            </a>
                            <div class="cr-tag">
                                <a href="#"><span>Art & Design </span></a>
                            </div>
                        </div>
                        <div class="content">
                            <span class="cr-price">$18.27</span>
                            <h3><a href="single-course">Basic Fundamentals of Interior & Graphics Design</a></h3>
                            <ul class="cr-items">
                                <li><i class='bx bx-food-menu'></i> <span>2 Lessons</span> </li>
                                <li><i class='bx bx-time-five'></i> <span>4h 30m</span></li>
                                <li><i class='bx bx-star'></i> <span>4.5</span></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="single-courses-box">
                        <div class="image">
                            <a href="single-course" class="d-block">
                                <img src="{{ config('app.url') }}/assets/img/all-img/c3.png" alt="image">
                            </a>
                            <div class="cr-tag">
                                <a href="#"><span>Art & Design </span></a>
                            </div>
                        </div>
                        <div class="content">
                            <span class="cr-price">$20.07</span>
                            <h3><a href="single-course">Increasing Engagement with Instagram & Facebook</a></h3>
                            <ul class="cr-items">
                                <li><i class='bx bx-food-menu'></i> <span>2 Lessons</span> </li>
                                <li><i class='bx bx-time-five'></i> <span>4h 30m</span></li>
                                <li><i class='bx bx-star'></i> <span>4.5</span></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="single-courses-box">
                        <div class="image">
                            <a href="single-course" class="d-block">
                                <img src="{{ config('app.url') }}/assets/img/all-img/c4.png" alt="image">
                            </a>
                            <div class="cr-tag">
                                <a href="#"><span>Drawing</span></a>
                            </div>
                        </div>
                        <div class="content">
                            <span class="cr-price">$19</span>
                            <h3><a href="single-course">Introduction to Color Theory & Basic UI/UX </a></h3>
                            <ul class="cr-items">
                                <li><i class='bx bx-food-menu'></i> <span>2 Lessons</span> </li>
                                <li><i class='bx bx-time-five'></i> <span>4h 30m</span></li>
                                <li><i class='bx bx-star'></i> <span>4.5</span></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="single-courses-box">
                        <div class="image">
                            <a href="single-course" class="d-block">
                                <img src="{{ config('app.url') }}/assets/img/all-img/c5.png" alt="image">
                            </a>
                            <div class="cr-tag">
                                <a href="#"><span>Technology</span></a>
                            </div>
                        </div>
                        <div class="content">
                            <span class="cr-price">$40.23</span>
                            <h3><a href="single-course">Financial Security Thinking and Principles Theory</a></h3>
                            <ul class="cr-items">
                                <li><i class='bx bx-food-menu'></i> <span>2 Lessons</span> </li>
                                <li><i class='bx bx-time-five'></i> <span>4h 30m</span></li>
                                <li><i class='bx bx-star'></i> <span>4.5</span></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="single-courses-box">
                        <div class="image">
                            <a href="single-course" class="d-block">
                                <img src="{{ config('app.url') }}/assets/img/all-img/c6.png" alt="image">
                            </a>
                            <div class="cr-tag">
                                <a href="#"><span>Data Science</span></a>
                            </div>
                        </div>
                        <div class="content">
                            <span class="cr-price">$21</span>
                            <h3><a href="single-course">Free Logo Design: From Concept to Presentation</a></h3>
                            <ul class="cr-items">
                                <li><i class='bx bx-food-menu'></i> <span>2 Lessons</span> </li>
                                <li><i class='bx bx-time-five'></i> <span>4h 30m</span></li>
                                <li><i class='bx bx-star'></i> <span>4.5</span></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="section-button">
                    <a href="#" class="default-btn">Load More <i class='bx bx-revision'></i></a>
                </div>
            </div>
        </div>
    </div>
    <!-- End EduMim Courses Area -->
@endsection
