<!DOCTYPE html>

<html lang="en">

<head>

    <!-- ==============================================
    Basic Page Needs
    =============================================== -->
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    <meta http-equiv="x-ua-compatible" content="IE=9"/>


    <title>Baseline Educational Service</title>

    <meta name="description"
          content="An established and registered Education consulting agency in Nigeria assisting students seek to study abroad by providing the widest range of services and commitments. ">
    <meta name="subject" content="Education consulting agency">
    <meta name="author" content="Baseline Educational Service">

    <!-- ==============================================
    Favicons
    =============================================== -->
    <link rel="shortcut icon" href="{{asset('assets/images/favicon.ico')}}">
    <link rel="apple-touch-icon" href="{{asset('assets/images/apple-touch-icon.png')}}">
    <link rel="apple-touch-icon" sizes="72x72" href="{{asset('assets/images/apple-touch-icon-72x72.png')}}">
    <link rel="apple-touch-icon" sizes="114x114" href="{{asset('assets/images/apple-touch-icon-114x114.png')}}">

    <!-- ==============================================
    Vendor Stylesheet
    =============================================== -->
    <link rel="stylesheet" href="{{asset('assets/css/vendor/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/vendor/slider.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/main.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/vendor/icons.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/vendor/icons-fa.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/vendor/animation.min.css')}}">
    <!-- <link rel="stylesheet" href="{{asset('assets/css/vendor/gallery.min.css')}}"> -->
    <link rel="stylesheet" href="{{asset('assets/css/vendor/cookie-notice.min.css')}}">

    <!-- ==============================================
    Custom Stylesheet
    =============================================== -->
    <link rel="stylesheet" href="{{asset('assets/css/default.css')}}">

    <!-- ==============================================
    Theme Color
    =============================================== -->
    <meta name="theme-color" content="#21333e">

    <!-- ==============================================
    Theme Settings
    =============================================== -->
    @yield('styles')

</head>

<body>

<!--&lt;!&ndash; Preloader &ndash;&gt;-->
<!--<div id="preloader" data-timeout="2000" class="odd preloader counter">-->
<!--<div data-aos="fade-up" data-aos-delay="500" class="row justify-content-center text-center items">-->
<!--<div data-percent="100" class="radial">-->
<!--<span></span>-->
<!--</div>-->
<!--</div>-->
<!--</div>-->

<!-- Header -->
<header id="header">

    <!-- Top Navbar -->
    <nav class="navbar navbar-expand top">
        <div class="container header">

            <!-- Navbar Items [left] -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link pl-0"><i class="fas fa-clock mr-2"></i>Open Hours: Mon - Sat - 9:00 -
                        17:00</a>
                </li>
            </ul>

            <!-- Nav holder -->
            <div class="ml-auto"></div>

            <!-- Navbar Items [right] -->
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a href="tel:+234 813 7821 173" class="nav-link"><i class="fas fa-phone-alt mr-2"></i>+234 813 7821
                        173</a>
                </li>
                <li class="nav-item">
                    <a href="mailto:info@baselineeducationalservices.com" class="nav-link"><i
                                class="fas fa-envelope mr-2"></i>info@baselineeducationalservices.com</a>
                </li>
            </ul>

            <!-- Navbar Icons -->
            <ul class="navbar-nav icons">
                <li class="nav-item social">
                    <a href="https://www.facebook.com/Baselinedu" class="nav-link" target="_blank"><i
                                class="fab fa-facebook-f"></i></a>
                </li>
                <li class="nav-item social">
                    <a href="https://twitter.com/BaselineEducat1" class="nav-link" target="_blank"><i
                                class="fab fa-twitter"></i></a>
                </li>
                <li class="nav-item social">
                    <a href="https://www.instagram.com/baseline_edu/" class="nav-link" target="_blank"><i
                                class="fab fa-instagram"></i></a>
                </li>

            </ul>

        </div>
    </nav>

    <!-- Navbar -->
    <nav class="navbar navbar-expand navbar-fixed sub">
        <div class="container header">

            <!-- Navbar Brand-->
            <a class="navbar-brand light" href="{{url('/')}}">
                <img src="{{asset('assets/images/logo.png')}}" alt="Baseline Educational Service">
            </a>

            <!-- Nav holder -->
            <div class="ml-auto"></div>

            <!-- Navbar Items -->
            <ul class="navbar-nav items">
                <li class="nav-item">
                    <a href="{{url('/')}}" class="nav-link">HOME</a>
                </li>
                <li class="nav-item dropdown">
                    <a href="#" class="nav-link">ABOUT <i class="icon-arrow-down"></i></a>
                    <ul class="dropdown-menu">
                        <li class="nav-item dropdown">
                            <a class="nav-link" href="{{url('company-profile')}}">Company Profile </a>
                            <a class="nav-link" href="{{url('why-us')}}">Why us </a>
                            <a class="nav-link" href="{{url('partners')}}">Partners </a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item dropdown">
                    <a href="#" class="nav-link">SERVICES <i class="icon-arrow-down"></i></a>
                    <ul class="dropdown-menu">
                        <li class="nav-item dropdown">
                            <a class="nav-link" href="{{url('career-counselling')}}">Career Counselling </a>
                            <a class="nav-link" href="{{url('admission-services')}}">Admission Services </a>
                            <a class="nav-link" href="{{url('english-tests')}}">English Tests </a>
                            <a class="nav-link" href="{{url('visa-assistance')}}">Visa Assistance </a>
                            <a class="nav-link" href="{{url('interview-preparations')}}">Interview Preparation </a>
                        </li>
                    </ul>
                </li>

            </ul>

        {{--<!-- Navbar Icons -->--}}
        {{--<ul class="navbar-nav icons">--}}
        {{--<li class="nav-item">--}}
        {{--<a href="#" class="nav-link" data-toggle="modal" data-target="#search">--}}
        {{--<i class="icon-magnifier"></i>--}}
        {{--</a>--}}
        {{--</li>--}}
        {{--</ul>--}}

        <!-- Navbar Toggle -->
            <ul class="navbar-nav toggle">
                <li class="nav-item">
                    <a href="#" class="nav-link" data-toggle="modal" data-target="#menu">
                        <i class="icon-menu m-0"></i>
                    </a>
                </li>
            </ul>

            <!-- Navbar Action -->
            <ul class="navbar-nav action">
                <li class="nav-item ml-3">
                    <a href="#contact" class="smooth-anchor btn ml-lg-auto primary-button">CONTACT US</a>
                </li>
            </ul>
        </div>
    </nav>

</header>


@yield('content')
<style>
    #services .card h4{
        color:var(--primary-t-color);
    }
    #services .card li{
        font-size:15px;
    }
</style>
<section id="services" class="section-1 offers featured">
    <div class="container">
        <div class="row intro">
            <div class="col-12 col-md-9 align-self-center text-center text-md-left">
                {{--<span class="pre-title m-auto ml-md-0">Our Expertise</span>--}}
                <h2><span class="featured"><span>Admission</span></span> Requirements</h2>

                {{--<p>We are leaders in providing consulting services with a set of cutting-edge technologies and a team--}}
                {{--of experienced and renowned professionals. These are some services we provide.</p>--}}
            </div>
            <div class="col-12 col-md-3" style="margin-top: 10px">
                <a href="https://docs.google.com/forms/d/e/1FAIpQLSecmMGBMgFER1EvvSqbN7k79rncNOL0-VNgLGJ3Mi68W1WEiw/viewform?usp=sf_link" target="_blank" class="btn mx-auto mr-md-0 ml-md-auto primary-button">Apply now</a>
            </div>
        </div>


        <div class="row justify-content-center items">
            <div class="col-12 col-md-12 col-lg-4 item">
                <div class="card">
                    <i class="icon icon-home"></i>
                    <h4> Foundation Program</h4>

                    <ul>
                        <li>WAEC</li>
                        <li>IELTS</li>
                        <li>International Passport Data Page</li>

                    </ul>
                    <a href="https://docs.google.com/forms/d/e/1FAIpQLSecmMGBMgFER1EvvSqbN7k79rncNOL0-VNgLGJ3Mi68W1WEiw/viewform?usp=sf_link" target="_blank">
                        <i class="btn-icon pulse fas fas fa-arrow-right"></i>
                    </a>
                </div>
            </div>

            <div class="col-12 col-md-12 col-lg-8 item">
                <div class="card">
                    <i class="icon icon-graduation"></i>
                    <h4> Master Degree</h4>

                    <ul>
                        <li>Undergraduate Certificate</li>
                        <li>Transcripts</li>
                        <li>IELTS</li>
                        <li>CV</li>
                        <li>Recommendation Letter (WORK PLACE/ UNIVERSITY)</li>

                        <li>Personal Statement</li>
                        <li> International Data Page</li>
                        <li> WAEC</li>
                    </ul>
                    <a href="https://docs.google.com/forms/d/e/1FAIpQLScIrbmP31KRyZi6Pt75Ye8WjGmY9os3BMA7OLfzYVtQk347sg/viewform?usp=sf_link" target="_blank">
                        <i class="btn-icon pulse fas fas fa-arrow-right"></i>
                    </a>
                </div>

            </div>
            <div class="col-12 col-md-12 col-lg-12 item">

                <div class="card">
                    <i class="icon icon-docs"></i>
                    <h4> PhD </h4>

                    <ul>
                        <li>Undergraduate Certificate</li>
                        <li> Master Degree Certificate</li>
                        <li>Master degree Transcript</li>
                        <li> Recommendation Letter (WORKPLACE/ UNIVERSITY)</li>
                        <li> International Passport Data Page</li>
                        <li> Research Topic &, Research Proposal- (2-3pages) or as stated by the University</li>
                    </ul>
                    <a href="https://docs.google.com/forms/d/e/1FAIpQLScIrbmP31KRyZi6Pt75Ye8WjGmY9os3BMA7OLfzYVtQk347sg/viewform?usp=sf_link" target="_blank">
                        <i class="btn-icon pulse fas fas fa-arrow-right"></i>
                    </a>
                </div>
            </div>
        </div>


    </div>

</section>

<!-- About -->
<section id="about" class="section-2 odd highlights image-right featured">
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-6 pr-md-5 align-self-center text-center text-md-left text">
                <div data-aos="fade-up" class="row intro">
                    <div class="col-12 p-0">
                        <span class="pre-title m-auto m-md-0">About Baseline</span>
                        <h2><span class="featured"><span>Baseline</span></span> Educational Services</h2>
                        <p>We are an established and registered Education consulting agency in Nigeria. We assist
                            students seeking to study abroad by providing the widest range of services and
                            commitments.</p>

                    </div>
                </div>
                <div class="row items">
                    <div data-aos="fade-up" class="col-12 col-md-6 p-0 pr-md-4 item">
                        <h4>
                            <div class="float-left">
                                <i class="mr-2 icon-badge"></i>
                            </div>
                            <div>
                                Excellence
                            </div>
                        </h4>

                    </div>
                    <div data-aos="fade-up" class="col-12 col-md-6 p-0 item">

                        <h4>
                            <div class="float-left">
                                <i class="mr-2 icon-lock"></i>
                            </div>
                            <div>
                                Trust
                            </div>
                        </h4>

                    </div>
                </div>
                <div class="row items">
                    <div data-aos="fade-up" class="col-12 col-md-6 p-0 item">
                        <h4>
                            <div class="float-left">
                                <i class="mr-2 icon-note"></i>
                            </div>
                            <div>
                                Quality Services Delivery
                            </div>

                        </h4>

                    </div>
                    <div data-aos="fade-up" class="col-12 col-md-6 p-0 pr-md-4 item">
                        <h4>
                            <div class="float-left">
                                <i class="mr-2 icon-graduation"></i>
                            </div>
                            <div>
                                Positive relationships
                            </div>
                        </h4>
                    </div>
                </div>

                <!-- Action -->
                <div data-aos="fade-up" class="buttons">
                    <div class="d-sm-inline-flex mb-5 mb-md-0">
                        <a href="#contact" class="smooth-anchor mx-auto mt-4 btn primary-button">GET IN TOUCH</a>
                        <a href="#" class="smooth-anchor mx-auto ml-sm-4 mt-4 btn outline-button">READ MORE</a>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 p-0 image">
                <img src="{{asset('assets/images/about.jpg')}}" class="fit-image" alt="Fit Image">
            </div>
        </div>
    </div>
</section>


<!-- Contact -->
<section id="contact" class="section-6 form contact">
    <div class="container">
        <div class="row">
            <div class="col-12 col-md-8 pr-md-5 align-self-center text">
                <div class="row intro">
                    <div class="col-12 p-0">
                        <span class="pre-title m-0">Send a message</span>
                        <h2>Get in <span class="featured">Touch</span></h2>
                        <p>We will respond to your message as soon as possible.</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 p-0">
                        @if ($errors->any())
                            <div class="col-12 col-12 m-0 pl-md-2">
                                @foreach ($errors->all() as $error)
                                    <span class="form-alert"> {{ $error }}  </span>
                                @endforeach

                            </div>
                        @endif

                        @if (session('status'))
                            @if (session('status') == "alert-success")
                                <div class="alert alert-success">
                                    <span class="form-alert"> {{ session('message') }}</span>
                                </div>
                            @endif
                            @if (session('status') == "alert-danger")
                                <div class="alert alert-danger">
                                    <span class="form-alert">  {{ session('message') }}</span>
                                </div>
                            @endif
                        @endif
                        <form action="{{url('contact')}}" method="post"
                              class="nexgen-simple-form">

                            <div class="row form-group-margin">
                                <div class="col-12 col-md-6 m-0 p-2 input-group">
                                    <input type="text" name="name" class="form-control field-name" placeholder="Name">
                                </div>
                                <div class="col-12 col-md-6 m-0 p-2 input-group">
                                    <input type="text" name="phone" class="form-control field-phone"
                                           placeholder="Phone">
                                </div>
                                <div class="col-12 m-0 p-2 input-group">
                                    <input type="email" name="email" class="form-control field-email"
                                           placeholder="Email">

                                </div>

                                <div class="col-12 m-0 p-2 input-group">
                                    <textarea name="message" class="form-control field-message"
                                              placeholder="Message"></textarea>
                                </div>


                                <div class="col-12 m-0 p-2 input-group">

                                    <div class="g-recaptcha"
                                         data-sitekey="6LfCZcsZAAAAAMLJdmNP68YlRx9p2tcQukvL-rUn"></div>
                                </div>
                                <div class="col-12 input-group m-0 p-2">
                                    <a class="btn primary-button">SEND</a>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-4">
                <div class="contacts">
                    <h4>Baseline Educational Services.</h4>
                    <p>Want a top school? Our hot lines are open 24 / 7</p>

                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <div class="float-left" style="margin-top: -10px;">

                                    <i class="fas fa-phone-alt mr-2"></i>
                                </div>
                                <div>
                                    +234 813 7821 173
                                </div>


                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">

                                <div class="float-left" style="margin-top: -10px;">
                                    <i class="fas fa-envelope mr-2"></i>
                                </div>
                                <div>
                                    info@baselineeducationalservices.com
                                </div>

                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <div class="float-left">
                                    <i class="fas fa-map-marker-alt mr-2"></i>
                                </div>
                                <div>
                                    Suite A, Philkruz Estate Phase IV, Kubwa, Abuja
                                </div>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="mt-2 btn outline-button" data-toggle="modal" data-target="#map">VIEW
                                MAP</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Footer -->
<footer>

    <!-- Footer [content] -->
    <section id="footer" class="odd footer offers">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-4 footer-left">

                    <!-- Navbar Brand-->
                    <a class="navbar-brand" href="/">


                        <img src="{{asset('assets/images/logo.png')}}" alt="Baseline educational services">

                    </a>
                    <p>We assist students seeking to study abroad by providing the widest range of services and
                        commitments</p>
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a href="tel:+234 813 7821 173" class="nav-link">
                                <i class="fas fa-phone-alt mr-2"></i>
                                +234 813 7821 173
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="mailto:info@baselineeducationalservices.com" class="nav-link">
                                <i class="fas fa-envelope mr-2"></i>
                                info@baselineeducationalservices.com
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="fas fa-map-marker-alt mr-2"></i>
                                Suite A, Philkruz Estate Phase IV, Kubwa, Abuja
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#contact" class="mt-4 btn outline-button smooth-anchor">GET IN TOUCH</a>
                        </li>
                    </ul>
                </div>


                <div class="col-12 col-lg-4 footer-right">
                    <div class="items">
                        <div class="item">
                            <div class="card">
                                <h4>About</h4>

                                <a href="{{url('company-profile')}}"><i class="icon-arrow-right"></i>Company Profile</a>
                                <a href="{{url('why-us')}}"><i class="icon-arrow-right"></i>Why us </a>
                                <a href="{{url('partners')}}"><i class="icon-arrow-right"></i>Partners</a>

                            </div>
                        </div>

                    </div>

                </div>
                <div class="col-12 col-lg-4 footer-right">
                    <div class="items">
                        <div class="item">
                            <div class="card">
                                <h4>Services</h4>

                                <a href="{{url('career-counselling')}}"><i class="icon-arrow-right"></i>Career
                                    Counselling</a>
                                <a href="{{url('admission-services')}}"><i class="icon-arrow-right"></i>Admission
                                    Services</a>
                                <a href="{{url('english-tests')}}"><i class="icon-arrow-right"></i>English Tests</a>
                                <a href="{{url('visa-assistance')}}"><i class="icon-arrow-right"></i>Visa Assistance
                                </a>
                                <a href="{{url('interview-preparations')}}"><i class="icon-arrow-right"></i>Interview
                                    Preparation</a>

                            </div>
                        </div>

                    </div>

                </div>

            </div>
        </div>

    </section>

    <!-- Copyright -->
    <section id="copyright" class="p-3 odd copyright">
        <div class="container">
            <div class="row">
                <div class="col-12 col-md-6 p-3 text-center text-lg-left">
                    <p>©
                        <script>document.write(new Date().getFullYear())</script>
                        Baseline educational services
                    </p>

                </div>
                <div class="col-12 col-md-6 p-3 text-center text-lg-right">
                    <p> Developed by <a href="https://whycode.ng" target="_blank">Why Code Nigeria</a>.</p>
                </div>
            </div>
        </div>
    </section>

</footer>

{{--<!-- Modal [search] -->--}}
{{--<div id="search" class="p-0 modal fade" role="dialog" aria-labelledby="search" aria-hidden="true">--}}
{{--<div class="modal-dialog modal-dialog-slideout" role="document">--}}
{{--<div class="modal-content full">--}}
{{--<div class="modal-header" data-dismiss="modal">--}}
{{--<i class="icon-close fas fa-arrow-right"></i>--}}
{{--</div>--}}
{{--<div class="modal-body">--}}
{{--<form class="row">--}}
{{--<div class="col-12 p-0 align-self-center">--}}
{{--<div class="row">--}}
{{--<div class="col-12 p-0">--}}
{{--<h2>What are you looking for?</h2>--}}
{{--<div class="badges">--}}
{{--<span class="badge"><a href="#">Consulting</a></span>--}}
{{--<span class="badge"><a href="#">Audit</a></span>--}}
{{--<span class="badge"><a href="#">Assurance</a></span>--}}
{{--<span class="badge"><a href="#">Advisory</a></span>--}}
{{--<span class="badge"><a href="#">Financial</a></span>--}}
{{--<span class="badge"><a href="#">Capital Markets</a></span>--}}
{{--</div>--}}
{{--</div>--}}
{{--</div>--}}
{{--<div class="row">--}}
{{--<div class="col-12 p-0 input-group">--}}
{{--<input type="text" class="form-control" placeholder="Enter Keywords">--}}
{{--</div>--}}
{{--</div>--}}
{{--<div class="row">--}}
{{--<div class="col-12 p-0 input-group align-self-center">--}}
{{--<button class="btn primary-button">SEARCH</button>--}}
{{--</div>--}}
{{--</div>--}}
{{--</div>--}}
{{--</form>--}}
{{--</div>--}}
{{--</div>--}}
{{--</div>--}}
{{--</div>--}}

{{--<!-- Modal [sign] -->--}}
{{--<div id="sign" class="p-0 modal fade" role="dialog" aria-labelledby="sign" aria-hidden="true">--}}
{{--<div class="modal-dialog modal-dialog-slideout" role="document">--}}
{{--<div class="modal-content full">--}}
{{--<div class="modal-header" data-dismiss="modal">--}}
{{--<i class="icon-close fas fa-arrow-right"></i>--}}
{{--</div>--}}
{{--<div class="modal-body">--}}
{{--<form action="/" class="row">--}}
{{--<div class="col-12 p-0 align-self-center">--}}
{{--<div class="row">--}}
{{--<div class="col-12 p-0 pb-3">--}}
{{--<h2>Sign In</h2>--}}
{{--<p>Don't have an account? <a href="#" class="primary-color" data-toggle="modal"--}}
{{--data-target="#register">Register now</a>.</p>--}}
{{--</div>--}}
{{--</div>--}}
{{--<div class="row">--}}
{{--<div class="col-12 p-0 input-group">--}}
{{--<input type="email" class="form-control" placeholder="Email" required>--}}
{{--</div>--}}
{{--<div class="col-12 p-0 input-group">--}}
{{--<input type="password" class="form-control" placeholder="Password" required>--}}
{{--</div>--}}
{{--</div>--}}
{{--<div class="row">--}}
{{--<div class="col-12 p-0 input-group align-self-center">--}}
{{--<button class="btn primary-button">SIGN IN</button>--}}
{{--</div>--}}
{{--</div>--}}
{{--</div>--}}
{{--</form>--}}
{{--</div>--}}
{{--</div>--}}
{{--</div>--}}
{{--</div>--}}

{{--<!-- Modal [register] -->--}}
{{--<div id="register" class="p-0 modal fade" role="dialog" aria-labelledby="register" aria-hidden="true">--}}
{{--<div class="modal-dialog modal-dialog-slideout" role="document">--}}
{{--<div class="modal-content full">--}}
{{--<div class="modal-header" data-dismiss="modal">--}}
{{--<i class="icon-close fas fa-arrow-right"></i>--}}
{{--</div>--}}
{{--<div class="modal-body">--}}
{{--<form action="/" class="row">--}}
{{--<div class="col-12 p-0 align-self-center">--}}
{{--<div class="row">--}}
{{--<div class="col-12 p-0 pb-3">--}}
{{--<h2>Register</h2>--}}
{{--<p>Have an account? <a href="#" class="primary-color" data-toggle="modal"--}}
{{--data-target="#sign">Sign In</a>.</p>--}}
{{--</div>--}}
{{--</div>--}}
{{--<div class="row">--}}
{{--<div class="col-12 p-0 input-group">--}}
{{--<input type="text" class="form-control" placeholder="Name" required>--}}
{{--</div>--}}
{{--<div class="col-12 p-0 input-group">--}}
{{--<input type="email" class="form-control" placeholder="Email" required>--}}
{{--</div>--}}
{{--<div class="col-12 p-0 input-group">--}}
{{--<input type="password" class="form-control" placeholder="Password" required>--}}
{{--</div>--}}
{{--<div class="col-12 p-0 input-group">--}}
{{--<input type="password" class="form-control" placeholder="Confirm Password" required>--}}
{{--</div>--}}
{{--</div>--}}
{{--<div class="row">--}}
{{--<div class="col-12 p-0 input-group align-self-center">--}}
{{--<button class="btn primary-button">REGISTER</button>--}}
{{--</div>--}}
{{--</div>--}}
{{--</div>--}}
{{--</form>--}}
{{--</div>--}}
{{--</div>--}}
{{--</div>--}}
{{--</div>--}}

<!-- Modal [map] -->
<div id="map" class="p-0 modal fade" role="dialog" aria-labelledby="map" aria-hidden="true">
    <div class="modal-dialog modal-dialog-slideout" role="document">
        <div class="modal-content full">
            <div class="modal-header absolute" data-dismiss="modal">
                <i class="icon-close fas fa-arrow-right"></i>
            </div>
            <div class="modal-body p-0">
                <iframe scrolling="no" marginheight="0" marginwidth="0"
                        src="https://maps.google.com/maps?width=100%25&amp;height=100%25&amp;hl=en&amp;q=Philkruz%20Estate%20Phase%20IV,%20Kubwa%20Abuja+(My%20Business%20Name)&amp;t=&amp;z=15&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"
                        width="100%" height="100%" frameborder="0"></iframe>

            </div>
        </div>
    </div>
</div>

<!-- Modal [responsive menu] -->
<div id="menu" class="p-0 modal fade" role="dialog" aria-labelledby="menu" aria-hidden="true">
    <div class="modal-dialog modal-dialog-slideout" role="document">
        <div class="modal-content full">
            <div class="modal-header" data-dismiss="modal">
                <i class="icon-close fas fa-arrow-right"></i>
            </div>
            <div class="menu modal-body">
                <div class="row w-100">
                    <div class="items p-0 col-12 text-center">
                        <!-- Append [navbar] -->
                    </div>
                    <div class="contacts p-0 col-12 text-center">
                        <!-- Append [navbar] -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Scroll [to top] -->
<div id="scroll-to-top" class="scroll-to-top">
    <a href="#header" class="smooth-anchor">
        <i class="fas fa-arrow-up"></i>
    </a>
</div>

<!-- ==============================================
Google reCAPTCHA // Put your site key here
=============================================== -->
<script src="https://www.google.com/recaptcha/api.js?render=6Lf-NwEVAAAAAPo_wwOYxFW18D9_EKvwxJxeyUx7"></script>

<!-- ==============================================
Vendor Scripts
=============================================== -->
<script src="{{asset('assets/js/vendor/jquery.min.js')}}"></script>
<script src="{{asset('assets/js/vendor/jquery.easing.min.js')}}" defer></script>
<script src="{{asset('assets/js/vendor/jquery.inview.min.js')}}" defer></script>
<script src="{{asset('assets/js/vendor/popper.min.js')}}" defer></script>
<script src="{{asset('assets/js/vendor/bootstrap.min.js')}}"></script>
<script src="{{asset('assets/js/vendor/ponyfill.min.js')}}" defer></script>
<script src="{{asset('assets/js/vendor/slider.min.js')}}" defer></script>
<script src="{{asset('assets/js/vendor/animation.min.js')}}" defer></script>
<script src="{{asset('assets/js/vendor/progress-radial.min.js')}}" defer></script>
<script src="{{asset('assets/js/vendor/shuffle.min.js')}}" defer></script>
<script src="{{asset('assets/js/vendor/cookie-notice.min.js')}}" defer></script>
<script src="{{asset('assets/js/vendor/particles.min.js')}}"></script>
<script src="{{asset('assets/js/main.js')}}"></script>
<script src="https://www.google.com/recaptcha/api.js" async defer></script>
<!-- ==============================================
Particles
=============================================== -->
<script>
    particles('squares', 'particles-1');
</script>

</body>
</html>