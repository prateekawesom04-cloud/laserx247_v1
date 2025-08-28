<?php

$providers = Storage::disk('local')->get('games_data/providers.json');

$providers = json_decode($providers);

?>

@extends('master')
@section('body')
    <!-- News Bar + Banner -->
    <div class="container-fluid px-0">
        <div class="container px-2 my-2">
            <!-- News Bar -->
            <div class="text-white d-flex align-items-center w-100 px-2" style="background:#000;">
                <span class="me-2"><i class="fas fa-microphone text-warning"></i></span>
                <strong class="me-2">News:</strong>
                <marquee class="flex-grow-1">
                    🔥 Breaking News: Welcome to Laser247 - Your Ultimate Sports Betting Destination! &nbsp;&nbsp;&nbsp;
                    🔥 Enjoy Fast Deposits, Secure Betting & 24/7 Live Games!
                </marquee>
            </div>

            <!-- Main Banner -->
            <div class="p-0">
                <img src="{{ asset('images/slider1.gif') }}" class="img-fluid d-block w-100" alt="Popular Events">
            </div>
        </div>
    </div>

    <!-- Sports & Sports Book -->
    <div class="container-fluid px-0">
        <div class="container px-2 my-2">
            <div class="row g-2">
                <!-- Sports -->
                <div class="col-md-6 position-relative">
                    <img src="{{ asset('images/banner-sport1.png') }}" alt="Sports" class="img-fluid w-100">
                    <div class="bg-dark text-white py-1">Sports</div>
                    <div class="position-absolute top-0 end-0 bg-dark bg-opacity-75 text-white p-2 rounded overflow-auto"
                        style="max-height:200px; width:150px;">
                        <div class="fw-bold text-danger mb-1">(🔴) LIVE</div>
                        <ul class="list-unstyled small mb-0">
                            <li class="d-flex justify-content-between border-bottom">Cricket <span>23</span></li>
                            <li class="d-flex justify-content-between border-bottom">Football <span>14</span></li>
                            <li class="d-flex justify-content-between border-bottom">Tennis <span>12</span></li>
                            <li class="d-flex justify-content-between border-bottom">Casino <span>0</span></li>
                            <li class="d-flex justify-content-between border-bottom">Sports Book <span>0</span></li>
                            <li class="d-flex justify-content-between border-bottom">Horse Racing <span>0</span></li>
                            <li class="d-flex justify-content-between border-bottom">Greyhound Racing <span>0</span></li>
                            <li class="d-flex justify-content-between border-bottom">Binary <span>1</span></li>
                            <li class="d-flex justify-content-between border-bottom">Kabaddi <span>0</span></li>
                            <li class="d-flex justify-content-between">Politics <span>0</span></li>
                        </ul>
                    </div>
                </div>

                <!-- Sports Book -->
                <div class="col-md-6">
                    <img src="{{ asset('images/sportbook.png') }}" alt="Sports Book" class="img-fluid w-100">
                    <div class="bg-dark text-white py-1">Sports Book</div>
                </div>
            </div>
        </div>
    </div>

    <!-- Aviator & Mines -->
    <div class="container-fluid px-0">
        <div class="container px-2 my-2">
            <div class="row g-2">
                <div class="col-md-6">
                    <img src="{{ asset('images/aviator-730-280.gif') }}" alt="Aviator" class="img-fluid w-100">
                    <div class="bg-dark text-white py-1">Aviator</div>
                </div>
                <div class="col-md-6">
                    <img src="{{ asset('images/evoplay-730-280.gif') }}" alt="Mines" class="img-fluid w-100">
                    <div class="bg-dark text-white py-1">Mines</div>
                </div>
            </div>
        </div>
    </div>
    </div>

    <!-- New Launch -->
    <div class="container-fluid px-0">
        <div class="container px-2 my-3">
            @foreach ($providers as $provider)
                <div class="bg-dark text-white py-2 px-3 d-flex justify-content-between align-items-center mt-4">
                    <div>{{ $provider->title }}</div>
                    <a href="{{ url('providers_games') }}/{{ strtolower(explode('provider=', $provider->link)[1]) }}"
                        class="btn btn-sm btn-outline-light">View All</a>
                </div>
                <div class="row g-2 mt-2 game_list"
                    data-provider='{{ strtolower(explode('provider=', $provider->link)[1]) }}'>
                    <div class="col-6 col-md-3">
                        <img src="{{ asset('images/rps.webp') }}" alt="Rock Paper Scissors" class="img-fluid w-100">
                        <div class="bg-dark text-white py-1">Rock Paper Scissors</div>
                    </div>
                </div>
                <div class="text-center mt-3">
                    <a class="btn btn-primary btn-sm load-more-btn">Load More</a>
                </div>
            @endforeach

        </div>

        <!-- License Info -->
        <div class="container-sm w-50 my-3">
            <div class="row border rounded p-2 align-items-center">
                <!-- Left Image -->
                <div class="col-3 text-center border-end">
                    <img src="{{ asset('images/gc.png') }}" alt="GC Logo" class="img-fluid" style="max-height:50px;">
                </div>

                <!-- Right Image + Text -->
                <div class="col-9 d-flex align-items-center">
                    <img src="{{ asset('images/lice.png') }}" alt="License Logo" class="img-fluid me-2"
                        style="max-height:50px;">
                    <p class="mb-0 fs-7"style="font-size: 0.75rem;">
                        LaserX247 is the trading name of Sports Target B.V., a company incorporated and regulated in Curaçao
                        under company number 148053 with its registered office at Fransche Bloemweg 4, Willemstad, Curaçao.
                    </p>
                </div>
            </div>
        </div>

        <p class="fs-7 mb-1 container-sm w-50 text-center"style="font-size: 0.75rem;">
            Our website works best in the newest and last prior version of these browsers: Google Chrome. Firefox
        </p>
        <script>
            $(document).ready(function() {

                @foreach ($providers as $provider)
                    callApi('get', 'gameList', {
                        'provider': "{{ strtolower(explode('provider=', $provider->link)[1]) }}"
                    }, gameList);
                @endforeach

            });
        </script>
    @endsection
