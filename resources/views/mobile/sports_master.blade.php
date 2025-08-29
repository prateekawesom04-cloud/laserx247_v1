@extends('mobile.master')
@section('body')
<!-- News Bar -->
<div class="bg-dark text-white  mt-1 py-2 px-3 d-flex align-items-center">
  <!-- Icon -->
  <span class="me-2">
    <i class="fas fa-microphone text-warning"></i>
  </span>
  <strong class="me-2">News:</strong>

  <!-- Scrolling text -->
  <marquee class="flex-grow-1">
    🔥 Breaking News: Welcome to Laser247 - Your Ultimate Sports Betting Destination! &nbsp;&nbsp;&nbsp;
    🔥 Enjoy Fast Deposits, Secure Betting & 24/7 Live Games!
  </marquee>
</div>
    <!-- Carousel Banner Section -->
    <div>
        <section class="mt-1 ">
    <div id="heroCarousel" class="carousel slide" data-bs-ride="carousel">

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

        <!-- Carousel Indicators below -->
        <div class="carousel-indicators mt-2">
            <a type="a" data-bs-target="#heroCarousel" data-bs-slide-to="0" class="active"
                aria-current="true" aria-label="Slide 1"></a>
            <a type="a" data-bs-target="#heroCarousel" data-bs-slide-to="1"
                aria-label="Slide 2"></a>
            <a type="a" data-bs-target="#heroCarousel" data-bs-slide-to="2"
                aria-label="Slide 3"></a>
        </div>
    </div>
</section>

        @yield('mobile.sports_body')
    </div>
@endsection
