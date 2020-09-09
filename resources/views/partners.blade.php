@extends('layouts.layout')

@section('styles')
    <style>
        :root {

            --section-1-bg-color: #eef4ed;
            --section-2-bg-color: #111117;
            --section-3-bg-color: #ffffff;
            --section-4-bg-color: #111117;
            --section-4-bg-image: url('{{asset('assets/images/bg-7.jpg')}}');
            --section-5-bg-color: #111117;
            --section-6-bg-color: #ffffff;

            --footer-bg-color: #111117;
        }
        .card.card-1 {
            background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('{{asset('assets/images/consultants.jpg')}}') no-repeat;
        }

        .card.card-2 {
            background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('{{asset('assets/images/scholarship.jpg')}}') no-repeat;
        }

        .card.card-3 {
            background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('{{asset('assets/images/partnership.jpg')}}') no-repeat;
        }

        .card.card-4 {
            background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('{{asset('assets/images/visa-approed.jpg')}}') no-repeat;
        }

        .card.card-5 {
            background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('{{asset('assets/images/flights.jpeg')}}') no-repeat;
        }

        .card.card-6 {
            background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('{{asset('assets/images/hotline.jpg')}}') no-repeat;
        }

        .card p,.card h4 {
            color: #fff;
        }


    </style>
@endsection
@section('content')
    <!-- Hero -->
    <section id="slider" class="hero p-0 odd featured">
        <div class="swiper-container no-slider animation slider-h-50 slider-h-auto">
            <div class="swiper-wrapper">

                <!-- Item 1 -->
                <div class="swiper-slide slide-center">

                    <!-- Media -->

                    <img src="{{asset('assets/videos/building.jpg')}}" class="full-image to-bottom">
                    <div class="slide-content row text-center">
                        <div class="col-12 mx-auto inner">

                            <!-- Content -->
                            <nav data-aos="zoom-out-up" data-aos-delay="800" aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Partners</li>
                                </ol>
                            </nav>
                            <h1 class="mb-0 title effect-static-text">Partners</h1>
                        </div>
                    </div>
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
                <div class="row">
                    <div class="col-12 align-self-center">
                        <p style="margin-bottom: 50px;">  Baseline educational Services have established strong links with highly ranked universities and colleges in different countries.
                            To learn more about different study options, Applications, and Admissions procedures, Kindly Fill the Study Abroad Applications form below. Additionally, one of our Education Consultants will contact you to answer your questions or guide you through your Applications, Admission, and Visa processes.
                        </p>
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
                            <img src="{{asset('assets/images/uk-uni/birmingham.png')}}" alt="Lorem ipsum">
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
                            <img src="{{asset('"assets/images/uk-uni/nottinham.jpg')}}" alt="Lorem ipsum">
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
                    <div class="col-1 filter-sizer"></div>
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


@endsection
@section('scripts')

@endsection