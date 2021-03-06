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
                                    <li class="breadcrumb-item active" aria-current="page">Company profile</li>
                                </ol>
                            </nav>
                            <h1 class="mb-0 title effect-static-text">Company profile</h1>
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
                            {{--<span class="pre-title m-0">A success story</span>--}}
                            <h2><span class="featured"><span>Company </span></span> Profile</h2>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 align-self-center">
                            <p>We are an established and registered Education consulting agency in Nigeria. We assist
                                students seeking to study abroad by providing the widest range of services and
                                commitments. </p>
                            <p>We have a team of seasoned and trained consultants that guide students from the process
                                of career counseling, course selection, admission, visa, and post-arrival support. We
                                partner with leading universities in the UK, US, Canada and others to give our
                                students varied options to pick from. </p>
                            <p>As a leading agency, we understand our client’s major needs which are <b>TRUST</b> and
                                <b>QUALITY
                                    SERVICES</b>-, and go the extra mile to ensure their expectations are met. So, our
                                values
                                are built on <b>Excellence</b>, <b>Quality Services Delivery</b>, and <b>Positive
                                    relationships </b>– These
                                have been our driving force in realizing our goals of
                            </p>
                            <blockquote> “Getting our Students the results
                                they want and building a lasting relationship with students and parents.
                            </blockquote>
                            <p>As a result,
                                Baseline Educational services have successfully recruited students to over 20 different
                                countries to study abroad and their positive testimonies have impacted greatly on our
                                business.
                            </p>
                            <p>
                                We go beyond placements and career counseling. The students are given the opportunity to
                                discover themselves and make well-versed decisions about their careers. We are aware
                                that good choices lead to a successful career so we give quality and sincere advice that
                                would help our students choose the right schools and courses to achieve their goals.
                            </p>
                            <p>Our mode of operations includes; </p>
                            <ul>
                                <li>University and College fair</li>
                                <li>Boarding School fair</li>
                                <li>Workshops & Informative seminars</li>
                                <li>Pre-departure Seminars for students</li>
                                <li>Exhibitions /On Spot Admissions and Assessment</li>
                            </ul>
                            <p>At our office, we have information sessions with our partner institutions which allows us
                                to be updated with any new developments in their various institutions. We also organize
                                and attend externally organized education fairs to represent our organization or partner
                                institutions. </p>
                            <p>
                                We have distinguished ourselves as a leading <b>education consultant</b> in Nigeria
                                where Trust
                                and Quality services are guaranteed to <b>get quality results</b>. We understand that
                                    for
                                    anything, there has to be a base and we are the <b>base to get you to the peak of achieving your dreams of securing an international education</b>.
                                    Start from the <b>base</b>. Start your <b>international education journey</b> with
                                    <b>BASELINE
                                        EDUCATIONAL SERVICES TODAY!</b>

                            </p>
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


    @include('layouts.admission-requirements')

@endsection
@section('scripts')

@endsection