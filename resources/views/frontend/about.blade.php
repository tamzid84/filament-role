@extends('frontend.layouts.master')

@section('title', 'Home - Aircon Service')

@section('content')

 <!-- Page Header Start -->
    <div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container text-center py-5">
            <h1 class="display-4 text-white animated slideInDown mb-4">About Us</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Pages</a></li>
                    <li class="breadcrumb-item active" aria-current="page">About</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->
      <!-- About Start -->
     @include('frontend.partials.about')
    <!-- About End -->


    <!-- Facts Start -->
    
    @include('frontend.partials.facts')
    <!-- Facts End -->


    <!-- Features Start -->
    @include('frontend.partials.feature')
    
    <!-- Features End -->
      <!-- Team Start -->
    @include('frontend.partials.team')
    <!-- Team End -->


@endsection
