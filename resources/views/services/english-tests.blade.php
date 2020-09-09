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
                                    <li class="breadcrumb-item active" aria-current="page">English Tests</li>
                                </ol>
                            </nav>
                            <h1 class="mb-0 title effect-static-text">English Tests</h1>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- Single -->
    <section id="single" class="section-1 single featured">
        <div class="container">
            <div class="row">

                <!-- Main -->
                <div class="col-12 col-lg-8 p-0 align-self-top text">
                    <div class="row intro m-0">
                        <div class="col-12">
                            <span class="pre-title m-0">A success story</span>
                            <h2><span class="featured"><span>English   </span></span> Tests</h2>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 align-self-center">
                            <p>English proficiency tests are one of the major requirements for study or visa application
                                for some universities. Our team of professionals advises and prepare students on the
                                English tests to take based on the school’s requirements.
                            </p>
                            <p>We also offer preparatory classes for IELTS which is one of the most recognized and
                                accepted English tests for different institutions and schools.
                            </p>
                            <p>Why Take our IELTS PREPARATORY CLASSES:
                            </p>
                            <ul>
                                <li>Trained and certified tutors</li>
                                <li>Registration of the examination</li>
                                <li>High Success rate</li>
                                <li>Free Manual and training materials</li>
                                <li>Mock examination and revision classes to determine if you ready to TAKE THE EXAMINATION.</li>
                            </ul>

                        </div>
                    </div>
                </div>

                <!-- Sidebar -->
                <aside class="col-12 col-lg-4 pl-lg-5 p-0 float-right sidebar">
                    <div class="row">
                        <div class="col-12 align-self-center text-left">

                            <h4>Our Services</h4>


                            <ul class="list-group list-group-flush">
                                <li class="list-group-item d-flex  align-items-center">
                                    <a href="{{url('career-counselling')}}"><i class="icon icon-organization"></i></a>
                                    Career Counselling
                                </li>
                                <li class="list-group-item d-flex align-items-center">
                                    <a href="{{url('admission-services')}}"><i class="icon icon-globe-alt"></i></a>
                                    Admission Services
                                </li>
                                <li class="list-group-item d-flex  align-items-center">
                                    <a href="{{url('english-tests')}}"><i class="icon icon-layers"></i></a>
                                    English Tests
                                </li>
                                <li class="list-group-item d-flex  align-items-center">
                                    <a href="{{url('visa-assistance')}}"><i class="icon icon-pie-chart"></i></a>
                                    Visa Assistance
                                </li>
                                <li class="list-group-item d-flex  align-items-center">
                                    <a href="{{url('interview-preparations')}}"><i class="icon icon-briefcase"></i></a>
                                    Interview Preparation
                                </li>

                            </ul>
                        </div>
                    </div>
                </aside>
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