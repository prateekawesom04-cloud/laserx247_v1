@extends('master')
@section('body')
    <div class="container-fluid px-0">
        <div class="row gx-0">

            <!-- Left Side: Carousel + Tabs -->
            <div class="col-md-9">

                <!-- Carousel Banner Section -->
                <section class="mt-1">
                    <div id="heroCarousel" class="carousel slide" data-bs-ride="carousel">

                        <!-- Indicators -->
                        <div class="carousel-indicators">
                            <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="0" class="active"
                                aria-current="true" aria-label="Slide 1"></button>
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

                <!-- EXCHANGE / SPORTSBOOK Toggle -->
                <div class="row gx-0 bg-primary text-white text-center">
                    <div class="col-auto p-2">
                        <a href="javascript:void(0)" class="btn btn-dark">EXCHANGE</a>
                    </div>
                    <div class="col-auto p-2">
                        <a href="javascript:void(0)" class="btn btn-outline-light">SPORTSBOOK</a>
                    </div>
                </div>

                <!-- In-Play, Today, Tomorrow Tabs -->
                <div class="row gx-0 mt-2">
                    <div class="col-12 d-flex gap-2 ps-3">
                        <a href="javascript:void(0)" class="btn btn-dark">In-Play</a>
                        <a href="javascript:void(0)" class="btn btn-outline-secondary">Today</a>
                        <a href="javascript:void(0)" class="btn btn-outline-secondary">Tomorrow</a>
                    </div>
                </div>

                <!-- Content Section -->
                <div class="row gx-0 bg-light mt-3" style="min-height: 300px;">
                    <div class="col-12 p-3">
                        <p class="text-muted m-0">No Data Found</p>
                    </div>
                </div>
            </div>

            <!-- Right Side: Open Bets -->
            <div class="col-md-3 border-start">
                <div class="bg-dark text-white p-2 fw-bold">Open Bets</div>
                <div class="p-3" style="height: 100%;">
                   
                </div>
            </div>

        </div>
    </div>
@endsection
