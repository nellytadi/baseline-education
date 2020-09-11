@extends('layouts.layout')
@section('styles')
    <link rel="stylesheet" href="{{asset('assets/css/vendor/slider.min.css')}}">
    <style>
        :root {
            --header-bg-color: #f9f9f9;
            --nav-item-color: #21333e;
            --hero-bg-color: #f9f9f9;

            --section-1-bg-color: #eef4ed;
            --section-2-bg-color: #111117;
            --section-3-bg-color: #ffffff;
            --section-4-bg-color: #111117;
            --section-4-bg-image: url('{{asset('assets/images/bg-7.jpg')}}');
            --section-5-bg-color: #111117;
            --section-6-bg-color: #ffffff;

            --footer-bg-color: #111117;
        }
    </style>
@endsection
@section('content')
<!-- Hero -->
<section id="slider" class="hero p-0">
    <div class="swiper-container full-slider animation slider-h-100 slider-h-auto">

        <!-- Particles -->
        <div id="particles-1" class="full-image" data-mask="50"></div>

        <!-- Media -->
        <div class="parallax-x-bg"
             data-swiper-parallax="-50%"></div>

        <div class="swiper-wrapper">

            <!-- Item 1 -->
            <div class="swiper-slide slide-center">

                <div class="slide-content row">
                    <div class="col-12 d-flex justify-content-start inner">
                        <div class="left text-left">

                            <!-- Content -->
                            <h1 data-aos="zoom-in" data-aos-delay="2000" class="title effect-static-text">Admission <br><span
                                        class="featured"><span> Services</span></span></h1>
                            <p data-aos="zoom-in" data-aos-delay="2400" class="description">Our education consultants
                                completely review your documents before they submit to your chosen university.</p>

                            <!-- Action -->
                            <div data-aos="fade-up" data-aos-delay="2800" class="buttons">
                                <div class="d-sm-inline-flex">
                                    <a href="#contact" class="smooth-anchor mt-4 btn primary-button">GET IN TOUCH</a>
                                    <a href="{{url('/company-profile')}}" class="smooth-anchor ml-sm-4 mt-4 btn outline-button">READ
                                        MORE</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Item 2 -->
            <div class="swiper-slide slide-center">
                <div class="slide-content row">
                    <div class="col-12 d-flex justify-content-start justify-content-md-center inner">
                        <div class="center text-left text-md-center">

                            <!-- Content -->
                            <h1 data-aos="zoom-in" data-aos-delay="2000" class="title effect-static-text">Visa <span
                                        class="featured"><span>Assistance</span></span></h1>
                            <p data-aos="zoom-in" data-aos-delay="800" class="description smaller mr-auto ml-auto">We
                                provide you with a seamless visa applying experience, enabling you to confidently study
                                at the destination of your choice. </p>

                            <!-- Action -->
                            <div data-aos="fade-up" data-aos-delay="1200" class="buttons">
                                <div class="d-sm-inline-flex">
                                    <a href="#contact" class="smooth-anchor mt-4 btn primary-button">GET IN TOUCH</a>
                                    <a href="#services" class="smooth-anchor ml-sm-4 mt-4 btn outline-button">READ
                                        MORE</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Item 3 -->
            <div class="swiper-slide slide-center">
                <div class="slide-content row">
                    <div class="col-12 d-flex justify-content-start justify-content-md-end inner">
                        <div class="right text-left">

                            <!-- Content -->
                            <h1 data-aos="zoom-in" data-aos-delay="400" class="title effect-static-text">Career
                                <br><span class="featured"><span>Counselling</span></span></h1>
                            <p data-aos="zoom-in" data-aos-delay="800" class="description">We have a team of experts who
                                will advise you on the right career choice, course, institution and country that offers
                                the best opportunities for your desired career.</p>

                            <!-- Action -->
                            <div data-aos="fade-up" data-aos-delay="1200" class="buttons">
                                <div class="d-sm-inline-flex">
                                    <a href="#contact" class="smooth-anchor mt-4 btn primary-button">GET IN TOUCH</a>
                                    <a href="#services" class="smooth-anchor ml-sm-4 mt-4 btn outline-button">READ
                                        MORE</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div class="swiper-pagination"></div>
    </div>
</section>

<!-- Services -->
<section id="services" class="section-1 offers featured">
    <div class="container">
        <div class="row intro">
            <div class="col-12 col-md-9 align-self-center text-center text-md-left">
                <span class="pre-title m-auto ml-md-0">Our Expertise</span>
                <h2>Excellent <span class="featured"><span>Services</span></span></h2>
                <p>We are leaders in providing consulting services with a set of cutting-edge technologies and a team
                    of experienced and renowned professionals. These are some services we provide.</p>
            </div>
            {{--<div class="col-12 col-md-3 align-self-end">--}}
                {{--<a href="#" class="btn mx-auto mr-md-0 ml-md-auto primary-button">SEE ALL</a>--}}
            {{--</div>--}}
        </div>
        <div class="row justify-content-center items">
            <div class="col-12 col-md-6 col-lg-4 item">
                <div class="card">
                    <i class="icon icon-event"></i>
                    <h4>Admission Services</h4>
                    <p>Our education consultants completely review your documents before they submit to your chosen
                        university.</p>
                    <a href="{{url('admission-services')}}"><i class="btn-icon pulse fas fas fa-arrow-right"></i></a>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-8 item">
                <div class="card">
                    <i class="icon icon-briefcase"></i>
                    <h4>Career Counselling</h4>
                    <p>We have a team of experts who will advise you on the right career choice, course, institution and
                        country that offers the best opportunities for your desired career.</p>
                    <a href="{{url('career-counselling')}}"><i class="btn-icon pulse fas fas fa-arrow-right"></i></a>

                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-4 item">
                <div class="card">
                    <i class="icon icon-book-open"></i>
                    <h4>English Tests</h4>
                    <p>Our team of professionals advises and prepare students on the English tests to take based on the
                        school’s requirements. </p>
                    <a href="{{url('english-tests')}}"><i class="btn-icon pulse fas fas fa-arrow-right"></i></a>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-4 item">
                <div class="card">
                    <i class="icon icon-plane"></i>
                    <h4>Visa Assistance</h4>
                    <p>We provide you with a seamless visa applying experience, enabling you to confidently study at the
                        destination of your choice.</p>
                    <a href="{{url('visa-assistance')}}"><i class="btn-icon pulse fas fas fa-arrow-right"></i></a>
                </div>
            </div>
            <div class="col-12 col-md-6 col-lg-4 item">
                <div class="card">
                    <i class="icon icon-call-in"></i>
                    <h4>Interview Preparation</h4>
                    <p> We prepare prospective international students through meetings conducted by experts in interview
                        processes and techniques.</p>
                    <a href="{{url('interview-preparations')}}"><i class="btn-icon pulse fas fas fa-arrow-right"></i></a>
                </div>
            </div>

        </div>
    </div>
</section>


<!-- Fun Facts -->
<section id="funfacts" class="section-4 odd counter funfacts">
    <div class="container">
        <div class="row mb-md-5 text-center">
            <div class="col-12">
                <span class="pre-title">What are we doing</span>
                <h2><span class="featured"><span>Results</span></span> in Numbers</h2>
            </div>
        </div>
        <div data-aos-id="counter" data-aos="fade-up" data-aos-delay="200"
             class="row justify-content-center text-center items">
            <div class="col-12 col-md-6 col-lg-3 item">
                <div data-percent="5" class="radial">
                    <span></span>
                </div>
                <h4>Certifications</h4>
            </div>
            <div class="col-12 col-md-6 col-lg-3 item">
                <div data-percent="10" class="radial">
                    <span></span>
                </div>
                <h4>Experts</h4>
            </div>
            <div class="col-6 col-md-6 col-lg-3 item">
                <div data-percent="85" class="radial">
                    <span></span>
                </div>
                <h4>Customers</h4>
            </div>
            <div class="col-12 col-md-6 col-lg-3 item">
                <div data-percent="7" class="radial">
                    <span></span>
                </div>
                <h4>Countries Served</h4>
            </div>
        </div>
    </div>
</section>

<!-- Projects -->
<section id="projects" class="section-3 showcase blog-grid filter-section projects">
    <div class="overflow-holder">
        <div class="container">
            <div class="row text-center intro">
                <div class="col-12">
                    <span class="pre-title">We have different study options</span>
                    <h2 class="mb-0">Our <span class="featured"><span>Partners</span></span></h2>
                </div>
            </div>
            <div class="row justify-content-center text-center">
                <div class="col-12">
                    <div class="btn-group btn-group-toggle" data-toggle="buttons">
                        <label class="btn">
                            <input type="radio" value="all" checked class="btn-filter-item">
                            <span>All</span>
                        </label>
                        <label class="btn active">
                            <input type="radio" value="uk" class="btn-filter-item">
                            <span>UK</span>
                        </label>
                        <label class="btn">
                            <input type="radio" value="irish" class="btn-filter-item">
                            <span>Irish</span>
                        </label>
                        <label class="btn">
                            <input type="radio" value="us" class="btn-filter-item">
                            <span>US</span>
                        </label>
                        <label class="btn">
                            <input type="radio" value="canadian" class="btn-filter-item">
                            <span>Canadian</span>
                        </label>
                        <label class="btn">
                            <input type="radio" value="german" class="btn-filter-item">
                            <span>German</span>
                        </label>
                        <label class="btn">
                            <input type="radio" value="australian" class="btn-filter-item">
                            <span>Australian</span>
                        </label>
                        <label class="btn">
                            <input type="radio" value="netherlands" class="btn-filter-item">
                            <span>Netherlands</span>
                        </label>
                    </div>
                </div>
            </div>
            <div class="row items filter-items">
                <!--UK SCHOOLS-->
                <div class="col-6 col-md-4 col-lg-2 item filter-item"
                     data-groups='["uk"]'>
                    <div class="row card p-0 text-center">
                        <img src="{{asset('assets/images/uk-uni/uni-hertford.png')}}" alt="Lorem ipsum">
                    </div>
                </div>

                <div class="col-6 col-md-4 col-lg-2 item filter-item"
                     data-groups='["uk"]'>
                    <div class="row card p-0 text-center">
                        <img src="{{asset('assets/images/uk-uni/kingston.png')}}" alt="Lorem ipsum">
                    </div>
                </div>

                <div class="col-6 col-md-4 col-lg-2 item filter-item"
                     data-groups='["uk"]'>
                    <div class="row card p-0 text-center">
                        <img src="{{asset('assets/images/uk-uni/birmingham.jpg')}}" alt="Lorem ipsum">
                    </div>
                </div>

                <div class="col-6 col-md-4 col-lg-2 item filter-item"
                     data-groups='["uk"]'>
                    <div class="row card p-0 text-center">
                        <img src="{{asset('assets/images/uk-uni/conventry.png')}}" alt="Lorem ipsum">
                    </div>
                </div>
                <div class="col-6 col-md-4 col-lg-2 item filter-item"
                     data-groups='["uk"]'>
                    <div class="row card p-0 text-center">
                        <img src="{{asset('assets/images/uk-uni/cransfield.png')}}" alt="Lorem ipsum">
                    </div>
                </div>
                <div class="col-6 col-md-4 col-lg-2 item filter-item"
                     data-groups='["uk"]'>
                    <div class="row card p-0 text-center">
                        <img src="{{asset('assets/images/uk-uni/derby.png')}}" alt="Lorem ipsum">
                    </div>
                </div>
                <div class="col-6 col-md-4 col-lg-2 item filter-item"
                     data-groups='["uk"]'>
                    <div class="row card p-0 text-center">
                        <img src="{{asset('assets/images/uk-uni/essex.png')}}" alt="Lorem ipsum">
                    </div>
                </div>
                <div class="col-6 col-md-4 col-lg-2 item filter-item"
                     data-groups='["uk"]'>
                    <div class="row card p-0 text-center">
                        <img src="{{asset('assets/images/uk-uni/kent.jpg')}}" alt="Lorem ipsum">
                    </div>
                </div>
                <div class="col-6 col-md-4 col-lg-2 item filter-item"
                     data-groups='["uk"]'>
                    <div class="row card p-0 text-center">
                        <img src="{{asset('assets/images/uk-uni/leeds.jpg')}}" alt="Lorem ipsum">
                    </div>
                </div>
                <div class="col-6 col-md-4 col-lg-2 item filter-item"
                     data-groups='["uk"]'>
                    <div class="row card p-0 text-center">
                        <img src="{{asset('assets/images/uk-uni/liverpool.png')}}" alt="Lorem ipsum">
                    </div>
                </div>
                <div class="col-6 col-md-4 col-lg-2 item filter-item"
                     data-groups='["uk"]'>
                    <div class="row card p-0 text-center">
                        <img src="{{asset('assets/images/uk-uni/nottinham.jpg')}}" alt="Lorem ipsum">
                    </div>
                </div>
                <div class="col-6 col-md-4 col-lg-2 item filter-item"
                     data-groups='["uk"]'>
                    <div class="row card p-0 text-center">
                        <img src="{{asset('assets/images/uk-uni/nottinham-trent.jpg')}}" alt="Lorem ipsum">
                    </div>
                </div>
                <div class="col-6 col-md-4 col-lg-2 item filter-item"
                     data-groups='["uk"]'>
                    <div class="row card p-0 text-center">
                        <img src="{{asset('assets/images/uk-uni/surrey.jpg')}}" alt="Lorem ipsum">
                    </div>
                </div>

                <!--END UK-->

                <!--IRISH-->
                <div class="col-6 col-md-4 col-lg-2 item filter-item"
                     data-groups='["irish"]'>
                    <div class="row card p-0 text-center">
                        <img src="{{asset('assets/images/irish-uni/griffith.jpg')}}" alt="Lorem ipsum">
                    </div>
                </div>

                <div class="col-6 col-md-4 col-lg-2 item filter-item"
                     data-groups='["irish"]'>
                    <div class="row card p-0 text-center">
                        <img src="{{asset('assets/images/irish-uni/ait.png')}}" alt="Lorem ipsum">
                    </div>
                </div>
                <div class="col-6 col-md-4 col-lg-2 item filter-item"
                     data-groups='["irish"]'>
                    <div class="row card p-0 text-center">
                        <img src="{{asset('assets/images/irish-uni/dcu.png')}}" alt="Lorem ipsum">
                    </div>
                </div>
                <div class="col-6 col-md-4 col-lg-2 item filter-item"
                     data-groups='["irish"]'>
                    <div class="row card p-0 text-center">
                        <img src="{{asset('assets/images/irish-uni/ireland.jpg')}}" alt="Lorem ipsum">
                    </div>
                </div>
                <div class="col-6 col-md-4 col-lg-2 item filter-item"
                     data-groups='["irish"]'>
                    <div class="row card p-0 text-center">
                        <img src="{{asset('assets/images/irish-uni/limerick.png')}}" alt="Lorem ipsum">
                    </div>
                </div>
                <!--END IRISH-->

                <!--GERMAN-->
                <div class="col-6 col-md-4 col-lg-2 item filter-item"
                     data-groups='["german"]'>
                    <div class="row card p-0 text-center">
                        <img src="{{asset('assets/images/german/gisma.png')}}" alt="Lorem ipsum">
                    </div>
                </div>
                <!--END GERMAN-->

                <!--CANADIAN-->
                <div class="col-6 col-md-4 col-lg-2 item filter-item"
                     data-groups='["canadian"]'>
                    <div class="row card p-0 text-center">
                        <img src="{{asset('assets/images/canadian/alberta.jpg')}}" alt="Lorem ipsum">
                    </div>
                </div>
                <div class="col-6 col-md-4 col-lg-2 item filter-item"
                     data-groups='["canadian"]'>
                    <div class="row card p-0 text-center">
                        <img src="{{asset('assets/images/canadian/bodwell.png')}}" alt="Lorem ipsum">
                    </div>
                </div>
                <div class="col-6 col-md-4 col-lg-2 item filter-item"
                     data-groups='["canadian"]'>
                    <div class="row card p-0 text-center">
                        <img src="{{asset('assets/images/canadian/manitoba.png')}}" alt="Lorem ipsum">
                    </div>
                </div>
                <div class="col-6 col-md-4 col-lg-2 item filter-item"
                     data-groups='["canadian"]'>
                    <div class="row card p-0 text-center">
                        <img src="{{asset('assets/images/canadian/taie.png')}}" alt="Lorem ipsum">
                    </div>
                </div>
                <div class="col-6 col-md-4 col-lg-2 item filter-item"
                     data-groups='["canadian"]'>
                    <div class="row card p-0 text-center">
                        <img src="{{asset('assets/images/canadian/regina.png')}}" alt="Lorem ipsum">
                    </div>
                </div>
                <div class="col-6 col-md-4 col-lg-2 item filter-item"
                     data-groups='["canadian"]'>
                    <div class="row card p-0 text-center">
                        <img src="{{asset('assets/images/canadian/windsor.png')}}" alt="Lorem ipsum">
                    </div>
                </div>

                <!--END CANADIAN-->

                <!--US -->
                <div class="col-6 col-md-4 col-lg-2 item filter-item"
                     data-groups='["us"]'>
                    <div class="row card p-0 text-center">
                        <img src="{{asset('assets/images/us/utah.png')}}" alt="Lorem ipsum">
                    </div>
                </div>
                <div class="col-6 col-md-4 col-lg-2 item filter-item"
                     data-groups='["us"]'>
                    <div class="row card p-0 text-center">
                        <img src="{{asset('assets/images/us/pace.jpg')}}" alt="Lorem ipsum">
                    </div>
                </div>
                <div class="col-6 col-md-4 col-lg-2 item filter-item"
                     data-groups='["us"]'>
                    <div class="row card p-0 text-center">
                        <img src="{{asset('assets/images/us/northern.jpg')}}" alt="Lorem ipsum">
                    </div>
                </div>
                <div class="col-6 col-md-4 col-lg-2 item filter-item"
                     data-groups='["us"]'>
                    <div class="row card p-0 text-center">
                        <img src="{{asset('assets/images/us/american.png')}}" alt="Lorem ipsum">
                    </div>
                </div>
                <!--END US-->

                <!--AUSTRALIA-->
                <div class="col-6 col-md-4 col-lg-2 item filter-item"
                     data-groups='["australian"]'>
                    <div class="row card p-0 text-center">
                        <img src="{{asset('assets/images/australia/melbourne.png')}}" alt="Lorem ipsum">
                    </div>
                </div>
                <div class="col-6 col-md-4 col-lg-2 item filter-item"
                     data-groups='["australian"]'>
                    <div class="row card p-0 text-center">
                        <img src="{{asset('assets/images/australia/sydney.png')}}" alt="Lorem ipsum">
                    </div>
                </div>
                <!--END AUSTRALIA-->

                <!--NETHERLANDS -->
                <div class="col-6 col-md-4 col-lg-2 item filter-item"
                     data-groups='["netherlands"]'>
                    <div class="row card p-0 text-center">
                        <img src="{{asset('assets/images/netherlands/hague.png')}}" alt="Lorem ipsum">
                    </div>
                </div>
                <div class="col-6 col-md-4 col-lg-2 item filter-item"
                     data-groups='["netherlands"]'>
                    <div class="row card p-0 text-center">
                        <img src="{{asset('assets/images/netherlands/twente.png')}}" alt="Lorem ipsum">
                    </div>
                </div>
                <!--END NETHERLANDS -->
                <div class="col-1 filter-sizer"></div>
            </div>
        </div>
    </div>
</section>




@endsection
