@extends('mobile.master')
@section('body')
    <!-- Carousel Banner Section -->
    <div>
        <section class="mt-1">
            <div id="heroCarousel" class="carousel slide" data-bs-ride="carousel">

                <!-- ✅ Carousel Indicators as Dots -->
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="0" class="active" aria-current="true"
                        aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="1"
                        aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="2"
                        aria-label="Slide 3"></button>
                </div>

                <!-- Carousel Items -->
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="{{ asset('images/bnr1.png') }}" class="d-block w-100 img-fluid" alt="Slide 1">
                    </div>
                    <div class="carousel-item">
                        <img src="{{ asset('images/bnr2.png') }}" class="d-block w-100 img-fluid" alt="Slide 2">
                    </div>
                    <div class="carousel-item">
                        <img src="{{ asset('images/bnr3.png') }}" class="d-block w-100 img-fluid" alt="Slide 3">
                    </div>
                </div>
            </div>

        </section>
        @yield('mobile.sports_body')
    </div>
@endsection
