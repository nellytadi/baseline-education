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
    <!-- Partners -->
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
                            To learn more about different study options, applications, and admissions procedures, Kindly Fill the Study Abroad Applications form below. Additionally, one of our Education Consultants will contact you to answer your questions or guide you through your Applications, Admission, and Visa processes.
                        </p>
                    </div>
                </div>
               @include('layouts.partners')
            </div>
        </div>
    </section>


    @include('layouts.admission-requirements')


@endsection
@section('scripts')

@endsection