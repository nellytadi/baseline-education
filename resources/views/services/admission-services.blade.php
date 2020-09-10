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
                                    <li class="breadcrumb-item active" aria-current="page">Admission Services</li>
                                </ol>
                            </nav>
                            <h1 class="mb-0 title effect-static-text">Admission Services</h1>
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
                            <h2><span class="featured"><span>Admission   </span></span> Services</h2>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 align-self-center">
                            <p> Our education consultants completely review your documents before they submit to your
                                chosen university. We scan your application and documents to confirm their accuracy and
                                check if they match with the University’s application requirements.
                            </p>
                            <p>
                                We also work with students on different levels of study available
                            </p>
                            <ul>
                                <li>Foundation/Undergraduate Programme</li>
                                <li>Postgraduate</li>
                                <li>Online Learning</li>
                            </ul>


                            <p>
                                <b> Foundation Year</b> is a program for university preparation that helps students to
                                adapt to the country of studying and acquire relevant academic skills and knowledge. This will
                                ensure that all students meet all the requirements for studying at the university. This
                                program is intended for international students who are high school graduates.

                            </p>
                            <p>
                                <b>Postgraduate Program</b> We have over 15 partner Universities around the world that
                                have been offering quality postgraduate programs for years. Kindly reach out to us to start
                                your application.
                            </p>
                            <p>
                                <b>Online Learning</b> We partner with colleges that offers online learning
                                opportunities for students to study in their home country or for people who may not want to travel abroad
                                for different reasons.
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



@endsection
@section('scripts')

@endsection