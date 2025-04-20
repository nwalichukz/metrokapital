@extends('layout.pages')
@section('content')
        <!-- page-title -->
        <section class="page-title centred">
            <div class="bg-layer" style="background-image: url(assets/images/background/page-title.jpg);"></div>
            <div class="pattern-layer">
                <div class="pattern-1" style="background-image: url(assets/images/shape/shape-18.png);"></div>
                <div class="pattern-2" style="background-image: url(assets/images/shape/shape-17.png);"></div>
            </div>
            <div class="auto-container">
                <div class="content-box">
                    <h1>About Us</h1>
                    <ul class="bread-crumb clearfix">
                        <li><a href="index.html">Home</a></li>
                        <li>About Us</li>
                    </ul>
                </div>
            </div>
        </section>
        <!-- page-title end -->


        <!-- about-section -->
        <section class="about-section pt_120 pb_120">
            <div class="pattern-layer rotate-me"></div>
            <div class="auto-container">
                <div class="row clearfix">
                    <div class="col-lg-6 col-md-12 col-sm-12 image-column">
                        <div class="image_block_one">
                            <div class="image-box pr_90 mr_40">
                                <div class="image-shape" style="background-image: url(assets/images/shape/shape-3.png);"></div>
                                <figure class="image"><img src="{{ asset('assets/images/resource/about-1.jpg')}}" alt=""></figure>
                                <div class="rating-box">
                                    <ul class="rating mb_5 clearfix">
                                        <li><i class="icon-9"></i></li>
                                        <li><i class="icon-9"></i></li>
                                        <li><i class="icon-9"></i></li>
                                        <li><i class="icon-9"></i></li>
                                        <li><i class="icon-9"></i></li>
                                    </ul>
                                    <h6>5 Star Rating Bank</h6>
                                </div>
                                <div class="experience-box">
                                    <div class="inner">
                                        <h2>40</h2>
                                        <h6>Years of Experiense</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12 col-sm-12 content-column">
                        <div class="content_block_one">
                            <div class="content-box ml_40">
                                <div class="sec-title mb_20">
                                    <h6>About US</h6>
                                    <h2>Financial Guidance for Every Stage of Life.</h2>
                                </div>
                                <div class="text-box mb_40">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec felis, suscipit you take action against fraud. See it the Security Center for and Mobile and Online Banking.</p>
                                </div>
                                <div class="inner-box mb_45">
                                    <div class="single-item">
                                        <div class="icon-box"><i class="icon-10"></i></div>
                                        <h3>Solution Focused</h3>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec felis tincidunt feugiat</p>
                                    </div>
                                    <div class="single-item">
                                        <div class="icon-box"><i class="icon-11"></i></div>
                                        <h3>99.99% Success</h3>
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec felis tincidunt feugiat</p>
                                    </div>
                                </div>
                                <div class="btn-box">
                                    <a href="index.html" class="theme-btn btn-one">Discover More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- about-section end -->


        <!-- funfact-section -->
        <section class="funfact-section about-page pt_95 pb_120">
            <div class="auto-container">
                <div class="inner-container clearfix">
                    <div class="funfact-block-one">
                        <div class="inner-box">
                            <div class="icon-box"><i class="icon-21"></i></div>
                            <div class="count-outer count-box">
                                <span class="count-text" data-speed="1500" data-stop="50">0</span><span>k+</span>
                            </div>
                            <p>Happy Clients</p>
                        </div>
                    </div>
                    <div class="funfact-block-one">
                        <div class="inner-box">
                            <div class="icon-box"><i class="icon-22"></i></div>
                            <div class="count-outer count-box">
                                <span class="count-text" data-speed="1500" data-stop="90">0</span><span>Bn</span>
                            </div>
                            <p>Total Transection</p>
                        </div>
                    </div>
                    <div class="funfact-block-one">
                        <div class="inner-box">
                            <div class="icon-box"><i class="icon-23"></i></div>
                            <div class="count-outer count-box">
                                <span class="count-text" data-speed="1500" data-stop="40">0</span><span>+</span>
                            </div>
                            <p>Branchs in USA</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- funfact-section end -->


        <!-- video-section -->
        <section class="video-section alternat-2 centred">
            <div class="bg-layer parallax-bg" data-parallax='{"y": 100}' style="background-image: url(assets/images/background/video-bg.jpg);"></div>
            <div class="auto-container">
                <div class="inner-box">
                    <h2>The 3rd Generation Private Commercial Bank</h2>
                    <div class="video-btn">
                        <a href="https://www.youtube.com/watch?v=nfP5N9Yc72A&amp;t=28s" class="lightbox-image" data-caption="">
                            <i class="icon-20"></i>
                            <span class="border-animation border-1"></span>
                            <span class="border-animation border-2"></span>
                            <span class="border-animation border-3"></span>
                        </a>
                    </div>
                </div>
            </div>
        </section>
        <!-- video-section end -->


        <!-- feature-style-three -->
        <section class="feature-style-three pt_120 pb_90">
            <div class="auto-container">
                <div class="sec-title mb_70 centred">
                    <h6>Why US</h6>
                    <h2>Why Choose Us</h2>
                </div>
                <div class="row clearfix">
                    <div class="col-lg-3 col-md-6 col-sm-12 feature-block">
                        <div class="feature-block-one wow fadeInUp animated" data-wow-delay="00ms" data-wow-duration="1500ms">
                            <div class="inner-box">
                                <div class="icon-box"><i class="icon-5"></i></div>
                                <h4><a href="index.html">Secure International Transaction</a></h4>
                                <p>Tortor neque sed tellus estian eget dui id ante tristique more tristique dolor.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12 feature-block">
                        <div class="feature-block-one wow fadeInUp animated" data-wow-delay="200ms" data-wow-duration="1500ms">
                            <div class="inner-box">
                                <div class="icon-box"><i class="icon-6"></i></div>
                                <h4><a href="index.html">24/7 Support from the Expert Team</a></h4>
                                <p>Tortor neque sed tellus estian eget dui id ante tristique more tristique dolor.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12 feature-block">
                        <div class="feature-block-one wow fadeInUp animated" data-wow-delay="400ms" data-wow-duration="1500ms">
                            <div class="inner-box">
                                <div class="icon-box"><i class="icon-7"></i></div>
                                <h4><a href="index.html">Lowest Processing Fee than Other Banks</a></h4>
                                <p>Tortor neque sed tellus estian eget dui id ante tristique more tristique dolor.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-12 feature-block">
                        <div class="feature-block-one wow fadeInUp animated" data-wow-delay="600ms" data-wow-duration="1500ms">
                            <div class="inner-box">
                                <div class="icon-box"><i class="icon-8"></i></div>
                                <h4><a href="index.html">Less Time in any Loans Approval</a></h4>
                                <p>Tortor neque sed tellus estian eget dui id ante tristique more tristique dolor.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- feature-style-three end -->


        <!-- apps-section -->
        <section class="apps-section about-page pb_120">
            <div class="light-icon" style="background-image: url(assets/images/icons/icon-4.png);"></div>
            <div class="auto-container">
                <div class="inner-container">
                    <div class="shape">
                        <div class="shape-1" style="background-image: url(assets/images/shape/shape-4.png);"></div>
                        <div class="shape-2" style="background-image: url(assets/images/shape/shape-3.png);"></div>
                    </div>
                    <div class="row align-items-center">
                        <div class="col-lg-6 col-md-12 col-sm-12 image-column">
                            <div class="image-box">
                                <figure class="image image-1"><img src="{{ asset('assets/images/resource/mockup-1.png')}}" alt=""></figure>
                                <figure class="image image-2"><img src="{{ asset('assets/images/resource/mockup-2.png')}}" alt=""></figure>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12 col-sm-12 content-column">
                            <div class="content-box">
                                <div class="sec-title mb_20">
                                    <h6>Mobile App</h6>
                                    <h2>Get the Fastest and Most Secure Banking</h2>
                                </div>
                                <div class="text-box mb_50">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec felis, suscipit you take action against fraud. See it the Security Center for and Mobile and Online Banking.</p>
                                </div>
                                <div class="btn-box">
                                    <a href="index.html" class="play-store mr_20">
                                        <img src="{{ asset('assets/images/icons/icon-2.png')}}" alt="">
                                        <span>get it on</span>
                                        Google Play
                                    </a>
                                    <a href="index.html" class="play-store">
                                        <img src="{{ asset('assets/images/icons/icon-3.png')}}" alt="">
                                        <span>Download on the</span>
                                        App Store
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- apps-section end -->


        <!-- testimonial-style-two -->
        <section class="testimonial-style-two pt_120 pb_120">
            <div class="bg-layer" style="background-image: url(assets/images/background/testimonial-bg-2.jpg);"></div>
            <div class="auto-container">
                <div class="row clearfix">
                    <div class="col-lg-4 col-md-12 col-sm-12 title-column">
                        <div class="sec-title mr_70">
                            <h6>Testimonials</h6>
                            <h2>Love from Happy Clients</h2>
                            <p>Amet dui scelerisque habitant eget tincidunt facilisis pretium lorem ipsum dilore. </p>
                        </div>
                    </div>
                    <div class="col-lg-8 col-md-12 col-sm-12 content-column">
                        <div class="two-item-carousel owl-carousel owl-theme owl-dots-none nav-style-one">
                            <div class="testimonial-block-two">
                                <div class="inner-box">
                                    <div class="author-box">
                                        <figure class="thumb-box">
                                            <img src="{{ asset('assets/images/resource/testimonial-4.png')}}" alt=""></figure>
                                        <h4>Julien Anthor</h4>
                                        <span class="designation">Manager</span>
                                    </div>
                                    <ul class="rating mb_15 clearfix">
                                        <li><i class="icon-9"></i></li>
                                        <li><i class="icon-9"></i></li>
                                        <li><i class="icon-9"></i></li>
                                        <li><i class="icon-9"></i></li>
                                        <li><i class="icon-9"></i></li>
                                    </ul>
                                    <p>“Lorem ipsum dolor sit amet consectetur adipiscing elit pellentesque etiam nis quis at arcu nunc neque ac integer sit lobortis diam semper nulla duis in blandit.”</p>
                                </div>
                            </div>
                            <div class="testimonial-block-two">
                                <div class="inner-box">
                                    <div class="author-box">
                                        <figure class="thumb-box">
                                            <img src="{{ asset('assets/images/resource/testimonial-5.png')}}" alt=""></figure>
                                        <h4>Rolier Demonil</h4>
                                        <span class="designation">Manager</span>
                                    </div>
                                    <ul class="rating mb_15 clearfix">
                                        <li><i class="icon-9"></i></li>
                                        <li><i class="icon-9"></i></li>
                                        <li><i class="icon-9"></i></li>
                                        <li><i class="icon-9"></i></li>
                                        <li><i class="icon-9"></i></li>
                                    </ul>
                                    <p>“Lorem ipsum dolor sit amet consectetur adipiscing elit pellentesque etiam nis quis at arcu nunc neque ac integer sit lobortis diam semper nulla duis in blandit.”</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- testimonial-style-two end -->


        <!-- subscribe-section -->
        <section class="subscribe-section">
            <div class="pattern-layer" style="background-image: url(assets/images/shape/shape-5.png);"></div>
            <div class="auto-container">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-md-12 col-sm-12 text-column">
                        <div class="text-box">
                            <h2>Subscribe us to Recieve Latest Updates</h2>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12 col-sm-12 form-column">
                        <div class="form-inner ml_40">
                            <form method="post" action="#">
                                <div class="form-group">
                                    <input type="email" name="email" placeholder="Your email" required>
                                    <button type="submit" class="theme-btn btn-two">Subscribe Now</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- subscribe-section end -->
         @endsection