<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">

<title>MetroKapital - @if(!empty($title)) {{$title}} @endif</title>

<!-- Fav Icon -->
<link rel="icon" href="assets/images/favicon.ico" type="image/x-icon">

<!-- Google Fonts -->
<link href="https://fonts.googleapis.com/css2?family=Manrope:wght@200;300;400;500;600;700;800&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">

<!-- Stylesheets -->
   <link href="{{ asset('/css/font-awesome-all.css')}}" rel="stylesheet">
<link href="{{ asset('assets/css/flaticon.css')}}" rel="stylesheet">
<link href="{{ asset('assets/css/owl.css')}}" rel="stylesheet">
<link href="{{ asset('assets/css/bootstrap.css')}}" rel="stylesheet">
<link href="{{ asset('assets/css/jquery.fancybox.min.css')}}" rel="stylesheet">
<link href="{{ asset('assets/css/animate.css')}}" rel="stylesheet">
<link href="{{ asset('assets/css/nice-select.css')}}" rel="stylesheet">
<link href="{{ asset('assets/css/elpath.css')}}" rel="stylesheet">
<link href="{{ asset('assets/css/color/theme-color.css')}}" id="jssDefault" rel="stylesheet">
<link href="{{ asset('assets/css/switcher-style.css')}}" rel="stylesheet">
<link href="{{ asset('assets/css/rtl.css')}}" rel="stylesheet">
<link href="{{ asset('assets/css/style.css')}}" rel="stylesheet">
<link href="{{ asset('assets/css/module-css/page-title.css')}}" rel="stylesheet">
<link href="{{ asset('assets/css/module-css/contact.css')}}" rel="stylesheet">
<link href="{{ asset('assets/css/module-css/subscribe.css')}}" rel="stylesheet">
<link href="{{ asset('assets/css/responsive.css')}}" rel="stylesheet">

</head>


<!-- page wrapper -->
<body>

    <div class="boxed_wrapper ltr">


        <!-- preloader -->
        <div class="loader-wrap">
            <div class="preloader">
                <div class="preloader-close">close</div>
                <div id="handle-preloader" class="handle-preloader">
                    <div class="animation-preloader">
                        <div class="spinner"></div>
                        <div class="txt-loading">
                            <span data-text-preloader="m" class="letters-loading">
                                m
                            </span>
                            <span data-text-preloader="e" class="letters-loading">
                                e
                            </span>
                            <span data-text-preloader="t" class="letters-loading">
                                t
                            </span>
                            <span data-text-preloader="r" class="letters-loading">
                                r
                            </span>
                            <span data-text-preloader="o" class="letters-loading">
                                o
                            </span>
                            <span data-text-preloader="a" class="letters-loading">
                                k
                            </span>
                            <span data-text-preloader="a" class="letters-loading">
                                a
                            </span>
                            <span data-text-preloader="p" class="letters-loading">
                                p
                            </span>
                            <span data-text-preloader="i" class="letters-loading">
                                i
                            </span>
                            <span data-text-preloader="t" class="letters-loading">
                                t
                            </span>
                            <span data-text-preloader="a" class="letters-loading">
                                a
                            </span>
                            <span data-text-preloader="l" class="letters-loading">
                                l
                            </span>
                        </div>
                    </div>  
                </div>
            </div>
        </div>
        <!-- preloader end -->


        <!-- page-direction -->
        <div class="page_direction">
            <div class="demo-rtl direction_switch"><button class="rtl">RTL</button></div>
            <div class="demo-ltr direction_switch"><button class="ltr">LTR</button></div>
        </div>
        <!-- page-direction end -->


        <!-- switcher menu -->
        <div class="switcher">
            <div class="switch_btn">
                <button><i class="fas fa-palette"></i></button>
            </div>
            <div class="switch_menu">
                <!-- color changer -->
                <div class="switcher_container">
                    <ul id="styleOptions" title="switch styling">
                        <li>
                            <a href="javascript: void(0)" data-theme="theme-color" class="theme-color"></a>
                        </li>
                        <li>
                            <a href="javascript: void(0)" data-theme="pink" class="pink-color"></a>
                        </li>
                        <li>
                            <a href="javascript: void(0)" data-theme="violet" class="violet-color"></a>
                        </li>
                        <li>
                            <a href="javascript: void(0)" data-theme="crimson" class="crimson-color"></a>
                        </li>
                        <li>
                            <a href="javascript: void(0)" data-theme="orange" class="orange-color"></a>
                        </li>
                    </ul>
                </div> 
            </div>
        </div>
        <!-- end switcher menu -->


        <!-- main header -->
        <header class="main-header">
            <!-- header-top -->
            <div class="header-top">
                <div class="large-container">
                    <div class="top-inner">
                        <ul class="links-list clearfix">
                            <li><a href="{{ url('/get-login')}}">Login</a></li>
                            <li><a href="{{url('/get-register')}}">Register</a></li>
                        
                        </ul>
                        <ul class="info-list clearfix"> 
                           
                           
                        </ul>
                    </div>
                </div>
            </div>
            <!-- header-lower -->
            <div class="header-lower">
                <div class="large-container">
                    <div class="outer-box">
                        <div class="logo-box">
                            <div class="shape"></div>
                            <figure class="logo"><a href="#">
                                <img src="{{ asset('assets/images/logo.png')}}" alt=""></a></figure>
                        </div>
                        <div class="menu-area">
                            <!--Mobile Navigation Toggler-->
                            <div class="mobile-nav-toggler">
                                <i class="icon-bar"></i>
                                <i class="icon-bar"></i>
                                <i class="icon-bar"></i>
                            </div>
                            <nav class="main-menu navbar-expand-md navbar-light clearfix">
                                <div class="collapse navbar-collapse show clearfix" id="navbarSupportedContent">
                                    <ul class="navigation clearfix">
                                        <li class=""><a href="{{url('/')}}">Home</a>
                                            {{--<ul>
                                                <li><a href="index.html">Home Page One</a></li>
                                                <li><a href="index-2.html">Home Page Two</a></li>
                                                <li><a href="index-3.html">Home Page Three</a></li>
                                                <li><a href="index-onepage.html">OnePage Home</a></li>
                                            </ul>--}}
                                        </li> 
                                        <li><a href="{{url('/about-us')}}">About</a></li>
                                        {{--<li class="dropdown"><a href="index.html">Services</a>
                                            <ul>
                                                <li><a href="service.html">Our Services</a></li>
                                                <li><a href="service-2.html">Our Services 2</a></li>
                                                <li><a href="service-details.html">Digital Banking</a></li>
                                                <li><a href="service-details-2.html">Mobile & Web Banking</a></li>
                                                <li><a href="service-details-3.html">Insurance Policies</a></li>
                                                <li><a href="service-details-4.html">Home & Property Loan</a></li>
                                                <li><a href="service-details-5.html">All Bank Account</a></li>
                                                <li><a href="service-details-6.html">Borrowing Accounts</a></li>
                                                <li><a href="service-details-7.html">Private Banking</a></li>
                                                <li><a href="service-details-8.html">Fixed Term Account</a></li>
                                            </ul>
                                        </li> 
                                        <li class="dropdown"><a href="index.html">Pages</a>
                                            <ul>
                                                <li class="dropdown"><a href="index.html">Directors</a>
                                                    <ul>
                                                        <li><a href="team.html">Board of Directors</a></li>
                                                        <li><a href="team-details.html">Director Details</a></li>
                                                    </ul>
                                                </li>
                                                <li class="dropdown"><a href="index.html">Career</a>
                                                    <ul>
                                                        <li><a href="career.html">Career Page</a></li>
                                                        <li><a href="career-details.html">Career Details</a></li>
                                                    </ul>
                                                </li>
                                                <li class="dropdown"><a href="index.html">Blog</a>
                                                    <ul>
                                                        <li><a href="blog.html">Blog Grid</a></li>
                                                        <li><a href="blog-2.html">Blog Image</a></li>
                                                        <li><a href="blog-3.html">Blog Standard</a></li>
                                                        <li><a href="blog-details.html">Blog Details</a></li>
                                                    </ul>
                                                </li>
                                                <li><a href="currency.html">Currency Exchange</a></li>
                                                <li><a href="credit-cards.html">Credit Cards</a></li>
                                                <li><a href="faq.html">General FAQ’s</a></li>
                                                <li><a href="error.html">404 Error</a></li>
                                            </ul>
                                        </li> --}}
                                        <li class="current"><a href="{{url('/contact-us')}}">Contact</a></li> 
                                    </ul>
                                </div>
                            </nav>
                            <div class="menu-right-content ml_70">
                                <a href="{{url('/get-login')}}" class="theme-btn btn-two mr_20">Login</a>
                                <a href="{{url('get-register')}}" class="theme-btn btn-one">Open Account</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!--sticky Header-->
            <div class="sticky-header">
                <div class="large-container">
                    <div class="outer-box">
                        <div class="logo-box">
                            <div class="shape"></div>
                            <figure class="logo"><a href="{{url('/')}}">
                                <img src="{{ asset('assets/images/logo.png')}}" alt=""></a></figure>
                        </div>
                        <div class="menu-area">
                            <nav class="main-menu clearfix">
                                <!--Keep This Empty / Menu will come through Javascript-->
                            </nav>
                            <div class="menu-right-content ml_70">
                                <a href="{{url('get-login')}}" class="theme-btn btn-two mr_20">Login</a>
                                <a href="{{url('/get-register')}}" class="theme-btn btn-one">Open Account</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- main-header end -->






        @yield('content')

        



        <!-- main-footer -->
        <footer class="main-footer">
            <div class="widget-section">
                <div class="pattern-layer">
                    <div class="pattern-1" style="background-image: url(assets/images/shape/shape-8.png);"></div>
                    <div class="pattern-2" style="background-image: url(assets/images/shape/shape-9.png);"></div>
                </div>
                <div class="auto-container">
                    <div class="row clearfix">
                        <div class="col-lg-3 col-md-6 col-sm-12 footer-column">
                            <div class="footer-widget logo-widget">
                                <figure class="footer-logo">
                                    <a href="{{url('/')}}">
                                <img src="{{ asset('assets/images/logo-2.png')}}" alt=""></a></figure>
                                <p>Please get to us let us know how we can help you.</p>
                                <ul class="social-links">
                                       
                                        <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                        <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                                        <li><a href="https://www.youtube.com/@metrokapitalor"><i class="fab fa-youtube"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12 footer-column">
                            <div class="footer-widget links-widget ml_40">
                                <div class="widget-title">
                                    <h4>Explore</h4>
                                </div>
                                <div class="widget-content">
                                    <ul class="links-list clearfix">
                                        <li><a href="{{url('/about-us')}}">About Us</a></li>
                                        <li><a href="{{url('faq')}}"> FAQ </a></li>
                                        <li><a href="{{url('contact-us')}}"> Contact us </a></li>
                                        <li><a href="{{url('islamic-banking')}}"> Islamic Banking </a></li>
                                        
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12 footer-column">
                            <div class="footer-widget links-widget">
                                <div class="widget-title">
                               
                                </div>
                                <div class="widget-content">
                                    <ul class="links-list clearfix">
                                        {{--<li><a href="index.html">Credit Card</a></li>
                                        <li><a href="index.html">Saving Account</a></li>
                                        <li><a href="index.html">Digital Gift Cards</a></li>
                                        <li><a href="index.html">Apply for Loans</a></li>
                                        <li><a href="index.html">Mobile Application</a></li>--}}
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-6 col-sm-12 footer-column">
                            <div class="footer-widget contact-widget">
                                <div class="widget-title">
                               
                                </div>
                                <div class="form-inner">
                                    <form method="post" action="index.html">
                                        <div class="form-group">
                                            <div class="select-box">
                                                <select class="wide">
                                                   {{--<option data-display="Branch">Branch</option>
                                                   <option value="1">California</option>
                                                   <option value="2">Man City</option>
                                                   <option value="3">New York</option>--}}
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <input type="text" name="location" placeholder="Location">
                                        </div>
                                        <div class="form-group">
                                            <button type="submit" class="theme-btn btn-one">Find on Map</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-bottom centred">
                <div class="auto-container">
                    <div class="copyright"><p>Copyright {{date('Y')}} by <a href="{{url('/')}}">MetroKapital</a>. All Right Reserved.</p></div>
                </div>
            </div>
        </footer>
        <!-- main-footer end -->



        <!--Scroll to top-->
        <div class="scroll-to-top">
            <div>
                <div class="scroll-top-inner">
                    <div class="scroll-bar">
                        <div class="bar-inner"></div>
                    </div>
                    <div class="scroll-bar-text">Go To Top</div>
                </div>
            </div>
        </div>
        <!-- Scroll to top end -->
        
    </div>


    <!-- jequery plugins -->
    <script src="{{ asset('assets/js/jquery.js')}}"></script>
    <script src="{{ asset('assets/js/bootstrap.min.js')}}"></script>
    <script src="{{ asset('assets/js/owl.js')}}"></script>
    <script src="{{ asset('assets/js/wow.js')}}"></script>
    <script src="{{ asset('assets/js/validation.js')}}"></script>
    <script src="{{ asset('assets/js/jquery.fancybox.js')}}"></script>
    <script src="{{ asset('assets/js/appear.js')}}"></script>
    <script src="{{ asset('assets/js/isotope.js')}}"></script>
    <script src="{{ asset('assets/js/parallax-scroll.js')}}"></script>
    <script src="{{ asset('assets/js/jquery.nice-select.min.js')}}"></script>
    <script src="{{ asset('assets/js/jQuery.style.switcher.min.js')}}"></script>

    <!-- main-js -->
    <script src="{{ asset('assets/js/script.js')}}"></script>

</body><!-- End of .page_wrapper -->
</html>
