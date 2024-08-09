@extends('layouts.app')
@section('content')
    <!-- Start EduMim Page Title Area -->
    <section class="page-title-area item-bg1">
        <div class="container">
            <div class="page-title-content">
                <h2>About Educated: An Online Education Platform</h2>
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Pages</a></li>
                    <li class="breadcrumb-item"></li>
                    <li class="primery-link">Educated</li>
                </ul>
            </div>
        </div>
    </section>
    <!-- End EduMim Page Title Area -->

    <!-- Start EduMim About Area -->
    <div class="edu-about-area ptb-100">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-7 col-md-12">
                    <div class="edu-about-image">
                        <img src="{{ config('app.url') }}/assets/img/all-img/about5.png" alt="banner-img">
                    </div>
                </div>
                <div class="col-lg-5 col-md-12">
                    <div class="edu-about-content">
                        <p class="sub-title">About Educated</p>
                        <h2>Learn Everyting Is Here And<span class="shape02">Anywhere</span></h2>
                        <p>Here at Educated, we are dedicated supporters of the transformative potential of learning and
                            development and the spirit of knowledge sharing. Although our journey began modestly, we now
                            proudly serve as the platform of choice, attracting over 50,000 eLearning professionals and
                            corporate training buyers every month.</p>
                        <div class="about-list">
                            <div class="items">
                                <div class="about-single-content">
                                    <div class="icon">
                                        <img src="{{ config('app.url') }}/assets/img/icon/video.svg" alt="icon">
                                    </div>
                                    <div class="content">
                                        <h3>All Classes Video Provided</h3>
                                        <p>There are many variations of passages of the Lorem Ipsum available.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="items">
                                <div class="about-single-content">
                                    <div class="icon">
                                        <img src="{{ config('app.url') }}/assets/img/icon/web-white.svg" alt="icon">
                                    </div>
                                    <div class="content">
                                        <h3>All Classes Video Provided</h3>
                                        <p>There are many variations of passages of the Lorem Ipsum available.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End EduMim About Area -->

 
    <!-- Start EduMim platfroom Area -->
    <div class="edu-platfrom-area ptb-100">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5 col-md-12 col-sm-12">
                    <div class="edu-platfrom-content">
                        <p class="sub-title">Best Online Learning Platform</p>
                        <h2> One Platfrom & Many <span class="shape02">Courses</span> For You </h2>
                        <p>As we grow at Educated, our unwavering commitment remains to support our community with the
                            same unwavering dedication and enthusiasm. Our primary objective is to enhance the
                            publication and dissemination of our content, ensuring that it becomes even more accessible
                            and user-friendly for our ever-growing community of e-learning members and valued partners.
                        </p>
                        <div class="platfrom-list">
                            <div class="items">
                                <div class="edu-platfrom-img">
                                    <img src="{{ config('app.url') }}/assets/img/svg/ok.svg" alt="banner-img">
                                </div>
                                <div class="platfrom-single-content">
                                    <h3>9/10 Average Satisfaction Rate</h3>
                                </div>
                            </div>
                            <div class="items">
                                <div class="edu-platfrom-img">
                                    <img src="{{ config('app.url') }}/assets/img/svg/ok.svg" alt="banner-img">
                                </div>
                                <div class="platfrom-single-content">
                                    <h3>96% Completitation Rate</h3>
                                </div>
                            </div>
                            <div class="items">
                                <div class="edu-platfrom-img">
                                    <img src="{{ config('app.url') }}/assets/img/svg/ok.svg" alt="banner-img">
                                </div>
                                <div class="platfrom-single-content">
                                    <h3>Friendly Environment & Expert Teacher</h3>
                                </div>
                            </div>
                        </div>
                        <a href="#" class="default-btn">Explore Our Courses</a>
                    </div>
                </div>
                <div class="col-lg-7 col-md-12 col-sm-12">
                    <div class="edu-platfrom-image">
                        <img src="{{ config('app.url') }}/assets/img/all-img/about2.png" alt="banner-img">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End EduMim platfrom Area -->

    

    <!-- Start EduMim Video and Brand Area -->
    <div class="edu-video-area">
        <div class="video-area">
            <div class="container">
                <div class="video-content videoBg">
                    <a href="https://www.youtube.com/watch?v=PWvPbGWVRrU" class="video-btn popup-youtube"><i
                            class='bx bx-play'></i></a>
                </div>
            </div>
        </div>
        <div class="brands-area sectionBg07 ptb-100">
            <div class="container">
                <div class="brands-title">
                    <h3><span class="mini-shape">Trusted</span> By 1000+ Companies</h3>
                </div>
                <ul class="brands-list">
                    <li><a href="#"><img src="{{ config('app.url') }}/assets/img/all-img/brands/1.svg"
                                alt="brands"></a>
                    </li>
                    <li><a href="#"><img src="{{ config('app.url') }}/assets/img/all-img/brands/2.svg"
                                alt="brands"></a>
                    </li>
                    <li><a href="#"><img src="{{ config('app.url') }}/assets/img/all-img/brands/3.svg"
                                alt="brands"></a>
                    </li>
                    <li><a href="#"><img src="{{ config('app.url') }}/assets/img/all-img/brands/4.svg"
                                alt="brands"></a>
                    </li>
                    <li><a href="#"><img src="{{ config('app.url') }}/assets/img/all-img/brands/5.svg"
                                alt="brands"></a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!-- End EduMim Video Area -->

    <!-- Start EduMim Team Area -->
    <div class="edu-team-area ptb-100">
        <div class="container">
            <div class="edu-section-title">
                <p class="sub-title">Team Member</p>
                <h2>Our Expert <span class="shape02">Instructors</span></h2>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="single-team-box">
                        <div class="image">
                            <img src="{{ config('app.url') }}/assets/img/all-img/team1.png" alt="image">
                        </div>
                        <div class="content">
                            <h3>Erics Widget</h3>
                            <p>UI/UX Designer</p>
                        </div>
                        <div class="scial-links">
                            <ul>
                                <li><a href="#" class="sg-1"><i class='bx bxl-facebook'></i></a></li>
                                <li><a href="#" class="sg-2"><i class='bx bxl-twitter'></i></a></li>
                                <li><a href="#" class="sg-3"><i class='bx bxl-linkedin'></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="single-team-box">
                        <div class="image">
                            <img src="{{ config('app.url') }}/assets/img/all-img/team2.png" alt="image">
                        </div>
                        <div class="content">
                            <h3>Daniel Steven</h3>
                            <p>UI/UX Designer</p>
                        </div>
                        <div class="scial-links">
                            <ul>
                                <li><a href="#" class="sg-1"><i class='bx bxl-facebook'></i></a></li>
                                <li><a href="#" class="sg-2"><i class='bx bxl-twitter'></i></a></li>
                                <li><a href="#" class="sg-3"><i class='bx bxl-linkedin'></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="single-team-box">
                        <div class="image">
                            <img src="{{ config('app.url') }}/assets/img/all-img/team3.png" alt="image">
                        </div>
                        <div class="content">
                            <h3>Nelson Decosta</h3>
                            <p>UI/UX Designer</p>
                        </div>
                        <div class="scial-links">
                            <ul>
                                <li><a href="#" class="sg-1"><i class='bx bxl-facebook'></i></a></li>
                                <li><a href="#" class="sg-2"><i class='bx bxl-twitter'></i></a></li>
                                <li><a href="#" class="sg-3"><i class='bx bxl-linkedin'></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <div class="single-team-box">
                        <div class="image">
                            <img src="{{ config('app.url') }}/assets/img/all-img/team4.png" alt="image">
                        </div>
                        <div class="content">
                            <h3>Selina Gomez</h3>
                            <p>UI/UX Designer</p>
                        </div>
                        <div class="scial-links">
                            <ul>
                                <li><a href="#" class="sg-1"><i class='bx bxl-facebook'></i></a></li>
                                <li><a href="#" class="sg-2"><i class='bx bxl-twitter'></i></a></li>
                                <li><a href="#" class="sg-3"><i class='bx bxl-linkedin'></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End EduMim Team Area -->

    <!-- Start EduMim Subscribe Area -->
    <div class="subscribe-area ptb-70">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-4 col-md-12 col-sm-12">
                    <div class="subcribe-content">
                        <img src="{{ config('app.url') }}/assets/img/svg/big-mail.svg" alt="mail">
                        <h2>Subscribe to My Newsletter</h2>
                    </div>
                </div>
                <div class="col-lg-8 col-md-12 col-sm-12">
                    <div class="subscribe-from">
                        <form class="newsletter-form" data-toggle="validator">
                            <input type="text" class="input-newsletter" placeholder="Enter your email address"
                                name="EMAIL" required autocomplete="off">
                            <button type="submit" class="default-btn">Get Started Now</button>
                            <div id="validator-newsletter1" class="form-result"></div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End EduMim Subscribe Area -->
@endsection
