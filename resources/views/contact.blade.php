@extends('layouts.app')
@section('content')
    <!-- Start EduMim Page Title Area -->
    <section class="page-title-area item-bg1">
        <div class="container">
            <div class="page-title-content">
                <h2>Contact Us</h2>
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Pages</a></li>
                    <li class="breadcrumb-item"></li>
                    <li class="primery-link">Contact</li>
                </ul>
            </div>
        </div>
    </section>
    <!-- End EduMim Page Title Area -->

    <!-- Start EduMim Contact Area -->
    <section class="edu-contact-area ptb-100">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5 col-md-12">
                    <div class="edu-content">
                        <div class="edu-contact-title">
                            <p class="sub-title">Contact Us</p>
                            <h2>Get In Touch <span class="shape02">Today</span></h2>
                            <p>There are many variations of passages of Lorem Ipsum available, but the majority have
                                suffered.</p>
                        </div>
                        <div class="edu-contact-info-box">
                            <div class="icon">
                                <img src="{{ config('app.url') }}/assets/img/svg/mail.svg" alt="icon">
                            </div>
                            <h3>Email-Us :</h3>
                            <p><a href="https://bestwpware.com/cdn-cgi/l/email-protection#3058555c5c5f705745445f1e535f5d"><span
                                        class="__cf_email__"
                                        data-cfemail="2e6d41405a4f4d5a57415b5c434f47426e49434f4742004d4143">[email&#160;protected]</span></a>
                            </p>
                        </div>

                        <div class="edu-contact-info-box">
                            <div class="icon">
                                <img src="{{ config('app.url') }}/assets/img/svg/call.svg" alt="icon">
                            </div>
                            <h3>Call Us:</h3>
                            <p><a href="tel:+44457895789">+88012 2910 1781, +88019 6128 1689</a></p>
                        </div>

                        <div class="edu-contact-info-box">
                            <div class="icon">
                                <img src="{{ config('app.url') }}/assets/img/svg/map.svg" alt="icon">
                            </div>
                            <h3>Office :</h3>
                            <p>Mountain Green Road 2389, NY, USA</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-7 col-md-12">
                    <div class="contact-form">
                        <form id="contactForm">
                            <div class="row">
                                <div class="col-lg-6 col-md-6">
                                    <div class="form-group">
                                        <input type="text" name="name" class="form-control" id="name" required
                                            data-error="Please enter your name" placeholder="Name">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>

                                <div class="col-lg-6 col-md-6">
                                    <div class="form-group">
                                        <input type="email" name="email" class="form-control" id="email" required
                                            data-error="Please enter your email" placeholder="Email">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>

                                <div class="col-lg-6 col-md-6">
                                    <div class="form-group">
                                        <input type="text" name="phone" class="form-control" id="phone_number" required
                                            data-error="Please enter your phone number" placeholder="Phone No*">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>

                                <div class="col-lg-6 col-md-6">
                                    <div class="form-group">
                                        <input type="text" name="website" class="form-control" id="web_link" required
                                            data-error="Website Address" placeholder="Website Address">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>

                                <div class="col-lg-12 col-md-12">
                                    <div class="form-group">
                                        <textarea name="message" id="message" class="form-control" cols="30" rows="6" required
                                            data-error="Please enter your message" placeholder="Write your message..."></textarea>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>

                                <div class="col-lg-12 col-md-12">
                                    <button type="submit" class="default-btn"><i class='bx bx-paper-plane'></i> Send
                                        Message</button>
                                    <div id="msgSubmit" class="h3 text-center hidden"></div>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End EduMim Contact Area -->
@endsection
