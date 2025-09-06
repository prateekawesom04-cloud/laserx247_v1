<?php

$providers = Storage::disk('local')->get('games_data/providers.json');

$providers = json_decode($providers);

?>
@extends('super-master')
@section('body')

<!-- new changes start -->

    <div class="app_index p-3 bg-gray-300">
        <div class="container">
            <div class="row p-3">
                <div class="col-md-3">
                    @include('l_sidebar')
                    @include('left-sidebar')
                </div>
                <div class="col-md-6 d-flex flex-column p-2">
                    <!-- Banner -->
                    <div class="app_banner w-100 mb-3 rounded-lg">
                        <img src="{{ asset('images/slider1.gif') }}" class="img-fluid d-block w-100 rounded-lg" alt="Popular Events">
                    </div>

                    <!-- game List -->
                    <div class="d-flex flex-column w-100 rounded-lg bg-white shadow mb-3">
                        <div class="d-flex flex-row justify-content-between border-b border-1 border-gray-200b px-3 py-1 rounded-t-lg">
                            <div class="d-flex flex-row gap-3 justify-content-start">
                                <div>Original</div>
                                <div>Crash Games</div>
                                <div>Live Roulette</div>
                            </div>
                            <div class="d-flex flex-row gap-1 justify-content-end">
                                <a href="javascript:void(0)" class="left_scroll d-flex align-items-center justify-content-center bg-gray-200 text-success rounded-circle" style="height: 22px;width: 22px;">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" stroke-width="1.5" stroke="green" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><path d="M15 6l-6 6l6 6"></path></svg>
                                </a>
                                <a href="javascript:void(0)" class="right_scroll d-flex align-items-center justify-content-center bg-gray-200 text-success rounded-circle" style="height: 22px;width: 22px;">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" stroke-width="1.5" stroke="green" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><path d="M9 6l6 6l-6 6"></path></svg>
                                </a>
                            </div>
                        </div>
                        <div class="app_games flex flex-row overflow-x-auto">
                            <div class="p-2 my-2">
                                <img src="https://promotions-material.s3.ap-south-1.amazonaws.com/trendingGames/7UPDOWN-1739615820768?q=65&w=625&px=auto&auto=format&ar=0.75030012004&fit=crop&blur=0" alt="" srcset="" class="w-40 rounded-lg">
                            </div>
                            <div class="p-2 my-2">
                                <img src="https://promotions-material.s3.ap-south-1.amazonaws.com/trendingGames/7UPDOWN-1739615820768?q=65&w=625&px=auto&auto=format&ar=0.75030012004&fit=crop&blur=0" alt="" srcset="" class="w-40 rounded-lg">
                            </div>
                            <div class="p-2 my-2">
                                <img src="https://promotions-material.s3.ap-south-1.amazonaws.com/trendingGames/7UPDOWN-1739615820768?q=65&w=625&px=auto&auto=format&ar=0.75030012004&fit=crop&blur=0" alt="" srcset="" class="w-40 rounded-lg">
                            </div>
                            <div class="p-2 my-2">
                                <img src="https://promotions-material.s3.ap-south-1.amazonaws.com/trendingGames/7UPDOWN-1739615820768?q=65&w=625&px=auto&auto=format&ar=0.75030012004&fit=crop&blur=0" alt="" srcset="" class="w-40 rounded-lg">
                            </div>
                            <div class="p-2 my-2">
                                <img src="https://promotions-material.s3.ap-south-1.amazonaws.com/trendingGames/7UPDOWN-1739615820768?q=65&w=625&px=auto&auto=format&ar=0.75030012004&fit=crop&blur=0" alt="" srcset="" class="w-40 rounded-lg">
                            </div>
                            <div class="p-2 my-2">
                                <img src="https://promotions-material.s3.ap-south-1.amazonaws.com/trendingGames/7UPDOWN-1739615820768?q=65&w=625&px=auto&auto=format&ar=0.75030012004&fit=crop&blur=0" alt="" srcset="" class="w-40 rounded-lg">
                            </div>
                            <div class="p-2 my-2">
                                <img src="https://promotions-material.s3.ap-south-1.amazonaws.com/trendingGames/7UPDOWN-1739615820768?q=65&w=625&px=auto&auto=format&ar=0.75030012004&fit=crop&blur=0" alt="" srcset="" class="w-48 rounded-lg">
                            </div>
                        </div>

                    </div>
                    
                    <!-- provider List -->
                    <div class="d-flex flex-column w-100 rounded-lg bg-white shadow mb-3">
                        <div class="d-flex flex-row justify-content-between border-b border-1 border-gray-200b px-3 py-1 rounded-t-lg">
                            <div class="d-flex flex-row gap-3 justify-content-start">
                                <div><svg xmlns="http://www.w3.org/2000/svg" fill="var(--icon-color-brand-secondary)" viewBox="0 0 16 16" height="20" width="20"><path d="M8 16c3.314 0 6 -2 6 -5.5 0 -1.5 -0.5 -4 -2.5 -6 0.25 1.5 -1.25 2 -1.25 2C11 4 9 0.5 6 0c0.357 2 0.5 4 -2 6 -1.25 1 -2 2.729 -2 4.5C2 14 4.686 16 8 16m0 -1c-1.657 0 -3 -1 -3 -2.75 0 -0.75 0.25 -2 1.25 -3C6.125 10 7 10.5 7 10.5c-0.375 -1.25 0.5 -3.25 2 -3.5 -0.179 1 -0.25 2 1 3 0.625 0.5 1 1.364 1 2.25C11 14 9.657 15 8 15" stroke-width="1"></path></svg></div>
                                <div>Game Providers</div>
                            </div>
                            <div class="d-flex flex-row gap-1 justify-content-end">
                                <a href="javascript:void(0)" class="left_scroll d-flex align-items-center justify-content-center bg-gray-200 text-success rounded-circle" style="height: 22px;width: 22px;">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" stroke-width="1.5" stroke="green" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><path d="M15 6l-6 6l6 6"></path></svg>
                                </a>
                                <a href="javascript:void(0)" class="right_scroll d-flex align-items-center justify-content-center bg-gray-200 text-success rounded-circle" style="height: 22px;width: 22px;">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" stroke-width="1.5" stroke="green" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><path d="M9 6l6 6l-6 6"></path></svg>
                                </a>
                            </div>
                        </div>
                        <div class="app_providers flex flex-row overflow-x-auto">
                            <div class="flex flex-col gap-2">
                                <div class="p-2">
                                    <img src="https://playcrick99.app/Images/Game-Provider/ezugi.svg" alt="" srcset="" class="w-32 h-16 rounded-lg shadow">
                                </div>
                                <div class="p-2">
                                    <img src="https://playcrick99.app/Images/Game-Provider/ezugi.svg" alt="" srcset="" class="w-32 h-16 rounded-lg shadow">
                                </div>
                                <div class="p-2">
                                    <img src="https://playcrick99.app/Images/Game-Provider/ezugi.svg" alt="" srcset="" class="w-32 h-16 rounded-lg shadow">
                                </div>
                            </div>
                            <div class="flex flex-col gap-2">
                                <div class="p-2">
                                    <img src="https://playcrick99.app/Images/Game-Provider/ezugi.svg" alt="" srcset="" class="w-32 h-16 rounded-lg shadow">
                                </div>
                                <div class="p-2">
                                    <img src="https://playcrick99.app/Images/Game-Provider/ezugi.svg" alt="" srcset="" class="w-32 h-16 rounded-lg shadow">
                                </div>
                                <div class="p-2">
                                    <img src="https://playcrick99.app/Images/Game-Provider/ezugi.svg" alt="" srcset="" class="w-32 h-16 rounded-lg shadow">
                                </div>
                            </div>
                            <div class="flex flex-col gap-2">
                                <div class="p-2">
                                    <img src="https://playcrick99.app/Images/Game-Provider/ezugi.svg" alt="" srcset="" class="w-32 h-16 rounded-lg shadow">
                                </div>
                                <div class="p-2">
                                    <img src="https://playcrick99.app/Images/Game-Provider/ezugi.svg" alt="" srcset="" class="w-32 h-16 rounded-lg shadow">
                                </div>
                                <div class="p-2">
                                    <img src="https://playcrick99.app/Images/Game-Provider/ezugi.svg" alt="" srcset="" class="w-32 h-16 rounded-lg shadow">
                                </div>
                            </div>
                            <div class="flex flex-col gap-2">
                                <div class="p-2">
                                    <img src="https://playcrick99.app/Images/Game-Provider/ezugi.svg" alt="" srcset="" class="w-32 h-16 rounded-lg shadow">
                                </div>
                                <div class="p-2">
                                    <img src="https://playcrick99.app/Images/Game-Provider/ezugi.svg" alt="" srcset="" class="w-32 h-16 rounded-lg shadow">
                                </div>
                                <div class="p-2">
                                    <img src="https://playcrick99.app/Images/Game-Provider/ezugi.svg" alt="" srcset="" class="w-32 h-16 rounded-lg shadow">
                                </div>
                            </div>
                            <div class="flex flex-col gap-2">
                                <div class="p-2">
                                    <img src="https://playcrick99.app/Images/Game-Provider/ezugi.svg" alt="" srcset="" class="w-32 h-16 rounded-lg shadow">
                                </div>
                                <div class="p-2">
                                    <img src="https://playcrick99.app/Images/Game-Provider/ezugi.svg" alt="" srcset="" class="w-32 h-16 rounded-lg shadow">
                                </div>
                                <div class="p-2">
                                    <img src="https://playcrick99.app/Images/Game-Provider/ezugi.svg" alt="" srcset="" class="w-32 h-16 rounded-lg shadow">
                                </div>
                            </div>
                        </div>

                    </div>


                </div>
                <div class="col-md-3">
                    @include('r_sidebar')
                    @include('right-sidebar')
                </div>
            </div>
        </div>
    </div>

<!-- new changes end -->

        <script>
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
