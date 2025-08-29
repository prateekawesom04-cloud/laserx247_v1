@extends('super-master')
@section('body')
    <div class="container-fluid">
        <div class="layout-container">
            <!-- Left Sidebar -->
            <div class="layout-sidebar-left">
                @include('left-sidebar')
            </div>

            <!-- Main Body -->
            <div class="layout-content-center">
                <!-- News Bar -->
                <div class="bg-dark text-white py-2 px-3 d-flex align-items-center">
                    <span class="me-2">
                        <i class="fas fa-microphone text-warning"></i>
                    </span>
                    <strong class="me-2">News:</strong>
                    <marquee class="flex-grow-1">
                        🔥 Breaking News: Welcome to Laser247 - Your Ultimate Sports Betting Destination! &nbsp;&nbsp;&nbsp;
                        🔥 Enjoy Fast Deposits, Secure Betting & 24/7 Live Games!
                    </marquee>
                </div>

                <!-- Hero Banner -->
                <section class="mt-1">
                    <div id="heroCarousel" class="carousel slide" data-bs-ride="carousel">
                        <div class="carousel-indicators">
                            <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="0" class="active"></button>
                            <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="1"></button>
                            <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="2"></button>
                        </div>

                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="{{ asset('images/bnr1.png') }}" class="d-block w-100 img-fluid" alt="Hero Image 1">
                            </div>
                            <div class="carousel-item">
                                <img src="{{ asset('images/bnr2.png') }}" class="d-block w-100 img-fluid" alt="Hero Image 2">
                            </div>
                            <div class="carousel-item">
                                <img src="{{ asset('images/bnr3.png') }}" class="d-block w-100 img-fluid" alt="Hero Image 3">
                            </div>
                        </div>
                    </div>
                </section>

                @yield('sports_body')
            </div>

            <!-- Right Sidebar -->
            <div class="layout-sidebar-right">
                @include('right-sidebar')
            </div>
        </div>
    </div>
@endsection
