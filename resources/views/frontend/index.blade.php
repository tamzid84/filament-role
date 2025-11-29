@extends('frontend.layouts.master')

@section('title', 'Home - Aircon Service')

@section('content')

<!-- Carousel Start -->



    <div class="container-fluid p-0 mb-5">
    <div id="header-carousel" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="w-100" src="{{asset('frontend/img/carousel-1.jpg')}}" alt="Image">
                <div class="carousel-caption">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-7 pt-5">
                                <h1 class="display-4 text-white mb-4 animated slideInDown">
                                    Solar PV System Supply & Installation in Bangladesh. Sustainable Power Solutions.
                                </h1>
                                <p class="fs-5 text-body mb-4 pb-2 mx-sm-5 animated slideInDown">
                                    A best-quality solar panel and inverter system ensures efficient and reliable solar energy conversion for residential, commercial, and industrial applications.
                                </p>
                                <a href="files/details.pdf" target="_blank"
                                   class="btn btn-primary py-3 px-5 animated slideInDown">Explore More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="carousel-item">
                <img class="w-100" src="{{asset('frontend/img/carousel-2.jpg')}}" alt="Image">
                <div class="carousel-caption">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-7 pt-5">
                                <h1 class="display-4 text-white mb-4 animated slideInDown">
                                    3 MVA 33/11 KV Sub Station in Bangladesh. Elevating Energy Access.
                                </h1>
                                <p class="fs-5 text-body mb-4 pb-2 mx-sm-5 animated slideInDown">Bringing Power to the People</p>
                                <a href="files/details.pdf" target="_blank"
                                   class="btn btn-primary py-3 px-5 animated slideInDown">Explore More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>

        <button class="carousel-control-next" type="button" data-bs-target="#header-carousel" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>

    </div>
</div>
    <!-- Carousel End -->
      <!-- About Start -->
      @include('frontend.partials.about')
    <!-- About End -->


    <!-- Facts Start -->
    @include('frontend.partials.facts')
    <!-- Facts End -->


    <!-- Features Start -->
    @include('frontend.partials.feature')
    <!-- Features End -->


    <!-- Service Start -->
    @include('frontend.partials.service')
    <!-- Service End -->


    <!-- Quote Start -->
    @include('frontend.partials.quote')
    <!-- Quote End -->


    <!-- Team Start -->
    @include('frontend.partials.team')
    <!-- Team End -->

<!-- Vision & Mission Start -->
<div class="container py-5">
    <div class="text-center mb-5 wow fadeInUp" data-wow-delay="0.1s">
        <h1 class="display-6">Our Vision & Mission</h1>
    </div>

    <div class="row g-5">

        <!-- Vision -->
        <div class="col-lg-6 wow fadeInLeft" data-wow-delay="0.3s">
            <div class="p-4 border rounded shadow-sm bg-white h-100">
                <div class="d-flex align-items-center mb-3">
                    <i class="fa fa-eye text-primary fs-1 me-3"></i>
                    <h2 class="mb-0">Our Vision</h2>
                </div>
                <p class="mb-0 fs-5">
                    Mukti Power Private Ltd has a vision to look forward and to supply high quality with low cost.
                </p>
            </div>
        </div>

        <!-- Mission -->
        <div class="col-lg-6 wow fadeInRight" data-wow-delay="0.3s">
            <div class="p-4 border rounded shadow-sm bg-white h-100">
                <div class="d-flex align-items-center mb-3">
                    <i class="fa fa-bullseye text-primary fs-1 me-3"></i>
                    <h2 class="mb-0">Our Mission</h2>
                </div>
                <p class="mb-0 fs-5">
                    Mukti Power
Private Ltd has want to achieve the goals & target with a commitment of supply modern machinery and good management.
                </p>
            </div>
        </div>

    </div>
</div>
<!-- Vision & Mission End -->

    <!-- Testimonial Start -->
    @include('frontend.partials.testomonial')
    <!-- Testimonial End -->

    <div class="text-center my-4">
    <a href="https://statcounter.com/p13178971/?guest=1" 
      target="_blank" class="btn btn-primary py-3 px-5 view-btn">
       View My Visitors
    </a>
</div>

<style>
    .view-btn {
        transition: 0.3s ease-in-out;
    }
    .view-btn:hover {
        background-color: #0b5ed7; /* darker shade */
        transform: translateY(-3px);
        box-shadow: 0 8px 15px rgba(0,0,0,0.2);
    }
</style>


@endsection
