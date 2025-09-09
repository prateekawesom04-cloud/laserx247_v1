<?php

$providers = Storage::disk('local')->get('games_data/providers.json');

$providers = json_decode($providers);

?>
@extends('super-master')
@section('body')

<!-- News Bar + Banner -->
    <div class="container">
        
        <div class="container-fluid px-0">
            <div class="">
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
        <div class="container">
            <div class="row">
                <!-- Sports -->
                <div class="col-md-6 position-relative !p-[1px]">
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
                <div class="col-md-6 !p-[1px]">
                    <img src="{{ asset('images/sportbook.png') }}" alt="Sports Book" class="img-fluid w-100">
                    <div class="bg-dark text-white py-1">Sports Book</div>
                </div>
            </div>
        </div>
    
        <!-- Aviator & Mines -->
        <div class="container">
            <div class="row">
                <div class="col-md-6 !p-[1px]">
                    <img src="{{ asset('images/aviator-730-280.gif') }}" alt="Aviator" class="img-fluid w-100">
                    <div class="bg-dark text-white py-1">Aviator</div>
                </div>
                <div class="col-md-6 !p-[1px]">
                    <img src="{{ asset('images/evoplay-730-280.gif') }}" alt="Mines" class="img-fluid w-100">
                    <div class="bg-dark text-white py-1">Mines</div>
                </div>
            </div>
        </div>
        </div>

    </div>


<!-- new changes start -->

    <div class="app_index">
        <div class="container">
            <div class="row pb-5 justify-center items-center">
                
                <div class="d-flex flex-column">

                    <!-- game List -->
                    <div class="app_card d-flex flex-column w-100 mb-[1px]">
                        <div class="d-flex flex-row justify-content-between px-3 py-1 bg-[#f00]">
                            <div class="d-flex flex-row gap-3 justify-content-start">
                                <div>Our Games</div>
                            </div>
                            <div class="d-flex flex-row gap-1 justify-content-end">
                                <!-- <a href="javascript:void(0)" class="left_scroll d-flex align-items-center justify-content-center bg-gray-200 text-success rounded-circle" style="height: 22px;width: 22px;">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" stroke-width="1.5" stroke="green" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><path d="M15 6l-6 6l6 6"></path></svg>
                                </a>
                                <a href="javascript:void(0)" class="right_scroll d-flex align-items-center justify-content-center bg-gray-200 text-success rounded-circle" style="height: 22px;width: 22px;">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" stroke-width="1.5" stroke="green" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><path d="M9 6l6 6l-6 6"></path></svg>
                                </a> -->
                            </div>
                        </div>
                        <div class="all_games flex flex-col w-full overflow-x-auto app_scroller">
                            @foreach ($providers as $provider)
                            <div class="app_games flex flex-row w-screen game_list items-center" data-provider="{{ strtolower(explode('provider=', $provider->link)[1]) }}">
                            </div>

                            @endforeach
                        </div>

                    </div>
                    
                    <!-- provider List -->
                    <div class="app_card d-flex flex-column w-100 mb-3 app_scroller">
                        <div class="d-flex flex-row justify-content-between px-3 py-1 bg-[#f00]">
                            <div class="d-flex flex-row gap-3 justify-content-start">
                                <!-- <div><svg xmlns="http://www.w3.org/2000/svg" fill="red" viewBox="0 0 16 16" height="20" width="20"><path d="M8 16c3.314 0 6 -2 6 -5.5 0 -1.5 -0.5 -4 -2.5 -6 0.25 1.5 -1.25 2 -1.25 2C11 4 9 0.5 6 0c0.357 2 0.5 4 -2 6 -1.25 1 -2 2.729 -2 4.5C2 14 4.686 16 8 16m0 -1c-1.657 0 -3 -1 -3 -2.75 0 -0.75 0.25 -2 1.25 -3C6.125 10 7 10.5 7 10.5c-0.375 -1.25 0.5 -3.25 2 -3.5 -0.179 1 -0.25 2 1 3 0.625 0.5 1 1.364 1 2.25C11 14 9.657 15 8 15" stroke-width="1"></path></svg></div> -->
                                <div>Game Providers</div>
                            </div>
                            <!-- <div class="d-flex flex-row gap-1 justify-content-end">
                                <a href="javascript:void(0)" class="left_scroll d-flex align-items-center justify-content-center bg-gray-200 text-success rounded-circle" style="height: 22px;width: 22px;">
                                    <svg data-scroll="-5" xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" stroke-width="1.5" stroke="green" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><path d="M15 6l-6 6l6 6"></path></svg>
                                </a>
                                <a href="javascript:void(0)" class="right_scroll d-flex align-items-center justify-content-center bg-gray-200 text-success rounded-circle" style="height: 22px;width: 22px;">
                                    <svg data-scroll="5" xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" stroke-width="1.5" stroke="green" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><path d="M9 6l6 6l-6 6"></path></svg>
                                </a>
                            </div> -->
                        </div>
                        <div class="flex flex-row flex-wrap justify-center w-100 gap-2">
                            @foreach ($providers as $provider)
                            <div class="p-2">
                                <img src="{{$provider->img}}" alt="" srcset="" class="w-32 bg-gray-900 h-16 rounded-lg shadow">
                            </div>
                            @endforeach
                        </div>
                        <div class="app_providers flex flex-row overflow-x-auto">
                        </div>

                    </div>


                </div>
                
            </div>
        </div>
    </div>

<!-- new changes end -->

        <script>

            $('a svg').click(function(e){

                let currentScroller = $(this).parents('.app_card').find('.app_scroller');
                console.log('currentscroller-----',currentScroller);
                
                $(currentScroller).scrollLeft($(currentScroller).scrollLeft()+$(this).attr('data-scroll'));
            });

            $(document).ready(function() {

                @foreach ($providers as $provider)
                    callApi('get', 'gameList', {
                        'provider': "{{ strtolower(explode('provider=', $provider->link)[1]) }}",
                        'game_index':0
                    }, gameList);
                @endforeach

            });

            $('body').on('click','a.load-more-btn',function(e){
                let data ={};
                data.provider = $(this).attr('data-provider');
                data.game_index = $(this).attr('data-game_index');
                
                callApi('get','gameList',data,gameList);
            });
        </script>
    @endsection
