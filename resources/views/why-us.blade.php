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
                                    <li class="breadcrumb-item active" aria-current="page">Why us</li>
                                </ol>
                            </nav>
                            <h1 class="mb-0 title effect-static-text">Why Us</h1>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- Partners -->
    <section id="partners" class="section-1 offers">
        <div class="container">
            <div class="row text-center intro">
                <div class="col-12">
                    {{--<span class="pre-title m-0">A success story</span>--}}
                    <h2><span class="featured"><span>Why </span></span> Us</h2>
                    <p class="text-max-800">We are aware that good choices lead to a successful career so we give quality and sincere advice.</p>
                </div>
            </div>

            <div class="row justify-content-center items">
                <div data-aos="fade-up" class="col-12 col-md-6 item">
                    <div class="card card-1">

                        <h4> Experienced Consultants</h4>
                        <p>We have a team of dedicated and experienced professionals who are always eager to listen
                            and get students the results they want. They work to ensure that students’ journey to
                            achieving their dreams abroad is effortless at all stages.</p>

                    </div>
                </div>
                <div data-aos="fade-up" class="col-12 col-md-6 item">
                    <div class="card card-2">

                        <h4> Scholarships / Discounts</h4>
                        <p>We work with our students through different scholarship options available in different
                            countries to suit their budgets. For example, do you know that you get a 4000 euros
                            scholarship if you finished with a 2.2 in Ireland?</p>

                    </div>
                </div>
                <div data-aos="fade-up" class="col-12 col-md-6 item">
                    <div class="card card-3">

                        <h4> Partnership With Top Institutions</h4>
                        <p>Want a top school? We partner with top universities and schools abroad to give our students
                            varied options to choose from.</p>

                    </div>
                </div>

                <div data-aos="fade-up" class="col-12 col-md-6 item">
                    <div class="card card-4">

                        <h4> Visa Success Rate</h4>
                        <p>Our team of experienced consultants  will walk you through the Visa process through professional counselling on the rules and application checklist</p>
                    </div>
                </div>

                <div data-aos="fade-up" class="col-12 col-md-6 item">
                    <div class="card card-5">

                        <h4>Pre -Departure And Post -Landing Assistance</h4>
                        <p>Our work doesn’t stop until we ensure that you are fully settled in. So, our team of expert
                            offer counseling on the dos and don’ts and other essential information you need to know
                            about studying abroad.</p>

                    </div>
                </div>

                <div data-aos="fade-up" class="col-12 col-md-6 item">
                    <div class="card card-6">

                        <h4> Our Hotlines Are Open 24/7</h4>
                        {{--<p>Want a top school? We partner with top universities and schools abroad to give our students varied options to choose from.</p>--}}

                    </div>
                </div>


            </div>
        </div>
    </section>

    @include('layouts.admission-requirements')

@endsection
@section('scripts')

@endsection