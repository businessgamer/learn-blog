@extends('layouts.app')
@section('content')
<!-- Start Educated Banner Area -->
<div class="edu-banner-area banner01">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 col-md-12">
                <div class="edu-banner-content">
                    <h1>Online <span class="shape01">Education</span> For The Future</h1>
                    <p>Now Fulfill Your Dreams With The Power of Online Education.</p>

                    <div class="subscribe-inner-area">
                        <form class="newsletter-form" data-toggle="validator">
                            <label><i class='bx bx-envelope-open'></i></label>
                            <input type="text" class="input-newsletter" placeholder="Enter your mail" name="EMAIL"
                                required autocomplete="off">
                            <button type="submit" class="default-btn">Get Started Now</button>
                            <div id="validator-newsletter1" class="form-result"></div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-12">
                <div class="edu-banner-image">
                    <img src="{{ config('app.url') }}/assets/img/banner/man1.png" alt="banner-img">
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Educated Banner Area -->

<!-- Start Educated About Area -->
<div class="edu-about-area ptb-100">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 col-md-12">
                <div class="edu-about-image">
                    <img src="{{ config('app.url') }}/assets/img/all-img/about1.png" alt="banner-img">
                </div>
            </div>
            <div class="col-lg-6 col-md-12">
                <div class="edu-about-content">
                    <p class="sub-title">About Educated</p>
                    <h2> The Place Where You Can <span class="shape02">Achieve</span></h2>
                    <p>Educated offers a unique digital education platform where individuals can access a variety of
                        online courses including marketing, technical skills, languages, and social subjects.</p>
                    <div class="about-list">
                        <div class="items">
                            <div class="about-single-content">
                                <div class="icon2">
                                    <img src="{{ config('app.url') }}/assets/img/svg/light.svg" alt="icon">
                                </div>
                                <div class="content">
                                    <h3>Our Mission</h3>
                                    <p>Connecting with individuals at every corner, making them aware of the
                                        innumerable benefits that online and distance learning offers.</p>
                                </div>
                            </div>
                        </div>
                        <div class="items">
                            <div class="about-single-content">
                                <div class="icon2">
                                    <img src="{{ config('app.url') }}/assets/img/svg/target.svg" alt="icon">
                                </div>
                                <div class="content">
                                    <h3>Our Vision</h3>
                                    <p>To provide accurate guidance and assistance to individuals wishing to pursue
                                        their education through online or distance learning methods.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <a href="about" class="default-btn">Read More Us</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Educated About Area -->
<!-- Start Educated Subscribe Area -->
<div class="subscribe-area pt-100 pb-70 ">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-4 col-md-12 col-sm-12">
                <div class="subcribe-content">
                    <img src="{{ config('app.url') }}/assets/img/svg/big-mail.svg" alt="google-search-engine">
                    <h3>Find Online Courses</h3>
                </div>
            </div>
            <div class="col-lg-6 col-md-12 col-sm-12">
                <div class="subscribe-from">
                    <form class="newsletter-form" data-toggle="validator">
                        <input type="text" class="input-newsletter" placeholder="Search Your Favorite Skills Course"
                            name="EMAIL" required autocomplete="off">
                        <button type="submit" class="default-btn">Get Started Now</button>
                        <div id="validator-newsletter3" class="form-result"></div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<br>
<!-- End Educated Subscribe Area -->
<!-- Start Educated Brands-area Area -->
<div class="brands-area-area pb-100">
    <div class="container">
        <div class="brands-title">
            <h3>Trusted By 1k+ Company Arround The World!</h3>
        </div>
         <marquee direction="left">
        <ul class="brands-list">
            <li><a href="#"><img src="{{ config('app.url') }}/assets/img/all-img/brands/1.svg" alt="brands"></a>
            </li>
            <li><a href="#"><img src="{{ config('app.url') }}/assets/img/all-img/brands/2.svg" alt="brands"></a>
            </li>
            <li><a href="#"><img src="{{ config('app.url') }}/assets/img/all-img/brands/3.svg" alt="brands"></a>
            </li>
            <li><a href="#"><img src="{{ config('app.url') }}/assets/img/all-img/brands/4.svg" alt="brands"></a>
            </li>
            <li><a href="#"><img src="{{ config('app.url') }}/assets/img/all-img/brands/5.svg" alt="brands"></a>
            </li>
        </ul>
         </marquee>
    </div>
</div>
<!-- End Educated Brands-area -->

<!-- Start Educated Services Area -->
<div class="edu-services-area ptb-100">
    <div class="container">
        <div class="edu-section-title">
            <p class="sub-title">Core Features</p>
            <h2>Why <span class="shape02">Choose</span> Educated</h2>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-4 col-sm-6 col-md-6">
                <div class="edu-services-box">
                    <div class="icon">
                        <i class='bx bx-layer'></i>
                    </div>
                    <h3>Learn More Anywhere</h3>
                    <p>Wherever you feel like learning something new, you can increase your skills and knowledge with
                        the educated platform.</p>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6 col-md-6">
                <div class="edu-services-box">
                    <div class="icon">
                        <i class='bx bx-chalkboard'></i>
                    </div>
                    <h3>Expert Instructor</h3>
                    <p>Our first priority is to make you an expert in your skills. Therefore all our teachers are
                        experts in their field. When you study from experts then you will become an expert.</p>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6 col-md-6">
                <div class="edu-services-box">
                    <div class="icon">
                        <i class='bx bx-support'></i>
                    </div>
                    <h3>24/7 Strong Support</h3>
                    <p>Our expert teachers are always ready to help you. If any question comes to your mind while
                        reading, you can telegram us. Our expert teachers will answer your questions within 24 hours.
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Educated Services Area Area -->

<!-- Start Educated platfroom Area -->
<div class="edu-platfrom-area ptb-100">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-5 col-md-12 col-sm-12">
                <div class="edu-platfrom-content">
                    <p class="sub-title">Best Online Learning Platform</p>
                    <h2> One Platform & Many <span class="shape02">Courses</span> For You </h2>
                    <p>Now you can further develop your knowledge and skills by taking a variety of online certificate
                        courses from a single education platform. </p>
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
<!-- End Educated platform Area -->

<!-- Start Educated Topics Area -->
<div class="edu-topics-area pt-100">
    <div class="container">
        <div class="edu-section-title">
            <p class="sub-title">Start Learning From Today</p>
            <h2>Popular <span class="shape02">Topics</span> To Learn </h2>
        </div>
        @if(isset($categories) && count($categories) > 0)
        <div class="row justify-content-center">
            @foreach($categories as $category)
            <div class="col-lg-3 col-md-6 col-sm-12">
                <a href="{{ route('blogs.category', $category->slug) }}" class="topic-box">
                    <div class="single-topic-box lg-01">
                        <div class="icon">
                            <img src="{{Voyager::image($category->icon)}}" alt="icon">
                        </div>
                        <div class="content">
                            <h3>{{$category->name}}</h3>
                        </div>
                    </div>
                </a>
            </div>
            @endforeach
        </div>
        @endif
    </div>
</div>
<!-- End Educated Topics Area -->

<!-- Start Educated Counter Area -->
<div class="edu-counter-area">
    <div class="container">
        <div class="counter-box">
            <ul class="counter-list">
                <li>
                    <h3><span class="odometer" data-count="82">00</span><span class="sign">K+</span></h3>
                    <p>Enrolled Students</p>
                </li>
                <li>
                    <h3><span class="odometer" data-count="348">00</span><span class="sign">+</span></h3>
                    <p>Academic Programs</p>
                </li>
                <li>
                    <h3><span class="odometer" data-count="125">00</span><span class="sign">+</span></h3>
                    <p>Winning Award</p>
                </li>
                <li>
                    <h3><span class="odometer" data-count="37">00</span><span class="sign">+</span></h3>
                    <p>Certified Students</p>
                </li>
            </ul>
        </div>
    </div>
</div>
<!-- Start Educated Counter Area -->

<!-- Start Educated Testimonial Area -->
<div class="edu-testimonial-area ptb-100">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-4 col-md-6 col-sm-12">
                <div class="edu-review">
                    <div class="image">
                        <img src="{{ config('app.url') }}/assets/img/all-img/ins-2.png" alt="icon">
                    </div>
                    <div class="content">
                        <p>You might be raised on a farm. Sometimes languages are difficult and difficult to find
                            the right the adjective to go with noun.</p>
                        <ul class="ratings">
                            <li><i class='bx bxs-star'></i></li>
                            <li><i class='bx bxs-star'></i></li>
                            <li><i class='bx bxs-star'></i></li>
                            <li><i class='bx bxs-star'></i></li>
                            <li><i class='bx bxs-star'></i></li>
                        </ul>
                        <h3>Jhon Smith</h3>
                        <span>UI UX Designer</span>
                    </div>
                </div>
                <div class="edu-review-box">
                    <p>"You own your data and gain complete control over your business."</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12">
                <div class="edu-set-box">
                    <h3>4.9/5</h3>
                    <ul class="ratings">
                        <li><i class='bx bxs-star'></i></li>
                        <li><i class='bx bxs-star'></i></li>
                        <li><i class='bx bxs-star'></i></li>
                        <li><i class='bx bxs-star'></i></li>
                        <li><i class='bx bxs-star'></i></li>
                    </ul>
                    <p>2000+ Satisfied Students</p>
                </div>
                <div class="edu-review-single">
                    <div class="image">
                        <img src="{{ config('app.url') }}/assets/img/all-img/ins-3.png" alt="icon">
                    </div>
                    <div class="content">
                        <p>You might be raised on a farm. Sometimes some languages and difficult for difficult to
                            find.</p>
                        <ul class="ratings">
                            <li><i class='bx bxs-star'></i></li>
                            <li><i class='bx bxs-star'></i></li>
                            <li><i class='bx bxs-star'></i></li>
                            <li><i class='bx bxs-star'></i></li>
                            <li><i class='bx bxs-star'></i></li>
                        </ul>
                        <h3>Jhon Smith</h3>
                        <span>UI UX Designer</span>
                    </div>
                </div>
            </div>
            <div class="col-lg-5">
                <div class="edu-testimonial-content">
                    <p class="sub-title">Testimonial</p>
                    <h2> What Says Our <span class="shape02">Students</span> About Us</h2>
                    <p>Like thousands of our students, you too can become an expert in your skills by studying online
                        from Educated. And you can get the job of your dreams, because the more skills one has at this
                        time, the more progress one is making. Know what our alumni say about this.</p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Educated Testimonial Area -->

<!-- Start Educated Team Area -->
<div class="edu-team-area ptb-100">
    <div class="container">
        <div class="edu-section-title">
            <p class="sub-title">Team Member</p>
            <h2>Our Expert <span class="shape02">Trainers</span></h2>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-3 col-md-6 col-sm-12">
                <div class="single-team-box">
                    <div class="image">
                        <img src="{{ config('app.url') }}/assets/img/all-img/team1.png" alt="image">
                    </div>
                    <div class="content">
                        <h3>Umesh K Tivari</h3>
                        <p>Creative Writer & Film Director</p>
                    </div>

                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12">
                <div class="single-team-box">
                    <div class="image">
                        <img src="{{ config('app.url') }}/assets/img/all-img/jkb.jpg" alt="image">
                    </div>
                    <div class="content">
                        <h3>Jitendra K Brajwasi</h3>
                        <p>SEO Marketing Trainer</p>
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

                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12">
                <div class="single-team-box">
                    <div class="image">
                        <img src="{{ config('app.url') }}/assets/img/all-img/team4.png" alt="image">
                    </div>
                    <div class="content">
                        <h3>Jatin Thakur</h3>
                        <p>English Teacher</p>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Educated Team Area -->

<!-- Start Educated Courses Block Area -->
<div class="edu-courseBlock-area pb-100">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6 col-md-12 col-sm-12">
                <div class="single-courseBlock-box cblockBg mb-30">
                    <div class="content">
                        <p class="sub-title">Build Your Career</p>
                        <h3>Become an <span class="shape02">Trainers</span></h3>
                        <p>Learn at your own pace, move between multiple courses.</p>
                        <a href="#" class="default-btn">Book A Seat</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-12 col-sm-12">
                <div class="single-courseBlock-box cblockBg02">
                    <div class="content">
                        <p class="sub-title">Build Your Skills</p>
                        <h3>Become A <span class="shape02">Smart Student</span></h3>
                        <p>Learn at your own pace, move between multiple courses.</p>
                        <a href="#" class="default-btn primery-black">Book A Seat</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Educated Courses Block Area  -->

<!-- Start Educated Faq Area -->
<div class="edu-faq-area sectionBg15 ptb-100">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 col-md-12">
                <div class="edu-faq-content">
                    <p class="sub-title">Frequently Asked Question</p>
                    <h2>General <span class="shape02">Questions</span></h2>
                </div>
                <div class="accordion edu-faqs-list" id="accordionFlushExample">
                    <div class="accordion-item faq-item">
                        <h2 class="faq-header" id="flush-headingOne">
                            <button class="accordion-button faq-button collapsed" type="button"
                                data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false"
                                aria-controls="flush-collapseOne">
                                Is the Educated platform completely free to use?
                            </button>
                        </h2>
                        <div id="flush-collapseOne" class="accordion-collapse collapse faq-collapse"
                            aria-labelledby="flush-headingOne" data-bs-parent="#accordionFlushExample">
                            <div class="faq-item-body">
                                <p>Yes, the Educated platform is free to use. There are no hidden fees or charges to
                                    access our courses.</p>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item faq-item">
                        <h2 class="faq-header" id="flush-headingTow">
                            <button class="accordion-button faq-button collapsed" type="button"
                                data-bs-toggle="collapse" data-bs-target="#flush-collapseTow" aria-expanded="false"
                                aria-controls="flush-collapseTow">
                                What types of courses are available on the Educated platform?
                            </button>
                        </h2>
                        <div id="flush-collapseTow" class="accordion-collapse collapse faq-collapse"
                            aria-labelledby="flush-headingTow" data-bs-parent="#accordionFlushExample">
                            <div class="faq-item-body">
                                <p>Educated platform offers a wide range of courses in a variety of subjects, including
                                    but not limited to business, technology, languages, arts, and sciences.</p>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item faq-item">
                        <h2 class="faq-header" id="flush-headingThree">
                            <button class="accordion-button faq-button collapsed" type="button"
                                data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false"
                                aria-controls="flush-collapseThree">
                                Are the educated platform courses recognized?
                            </button>
                        </h2>
                        <div id="flush-collapseThree" class="accordion-collapse collapse faq-collapse"
                            aria-labelledby="flush-headingThree" data-bs-parent="#accordionFlushExample">
                            <div class="faq-item-body">
                                <p>While our courses are designed to provide valuable learning experiences, they may not
                                    always be accredited by formal educational institutions. However, they are created
                                    and curated by industry experts and professionals.</p>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item faq-item">
                        <h2 class="faq-header" id="flush-headingFour">
                            <button class="accordion-button faq-button collapsed" type="button"
                                data-bs-toggle="collapse" data-bs-target="#flush-collapseFour" aria-expanded="false"
                                aria-controls="flush-collapseFour">
                                Can I earn a certificate or diploma from education platform courses?
                            </button>
                        </h2>
                        <div id="flush-collapseFour" class="accordion-collapse collapse faq-collapse"
                            aria-labelledby="flush-headingFour" data-bs-parent="#accordionFlushExample">
                            <div class="faq-item-body">
                                <p>Yes, upon successful completion of some courses, you may be eligible to receive a
                                    certificate of completion or other recognition to demonstrate your new skills and
                                    knowledge.</p>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-12">
                <div class="edu-about-image">
                    <img src="{{ config('app.url') }}/assets/img/all-img/faq.png" alt="banner-img">
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End Educated Faq Area -->

<!-- Start Educated Artical Area -->
<div class="edu-artical-area ptb-100">
    <div class="container">
        <div class="edu-section-title">
            <p class="sub-title">Blog & Airticle</p>
            <h2>Take A Look At The Latest <span class="shape02">Articles</span></h2>
        </div>
        <div class="row justify-content-center">
            @foreach ($blogs as $blog)
            <div class="col-lg-6 col-md-6 col-sm-12">
                <div class="single-artical-box ">
                    <div class="image">
                        <a href="{{ route('blog.slug',$blog->slug) }}"
                            class="d-block">
                            <img src="{{Voyager::image($blog->image)}}" alt="image">
                        </a>
                    </div>
                    <div class="content">
                        {{-- <div class="cr-tag">
                            <a href="blog-single"><span>Learning</span></a>
                        </div> --}}
                        <h3><a href="{{ route('blog.slug',$blog->slug) }}">{{ $blog->title }}</a></h3>
                        <ul class="cr-items">
                            <li><a href="#"><i class='bx bx-calendar'></i><span>{{ $blog->created_at->format('M d, Y')
                                        }}</span></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
<!-- End Educated Artical Area -->
@endsection
