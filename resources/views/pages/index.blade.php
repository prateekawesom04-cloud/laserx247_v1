@extends('super-master')
@section('body')

<!-- News Bar + Banner -->
    <div class="">
        
        <div class="container-fluid">
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
        <div class="container-fluid">
            <div class="row w-100 mx-auto">
                <!-- Sports -->
                <div class="col-md-6 position-relative !p-[1px]">
                    <img src="{{ asset('images/banner-sport1.png') }}" alt="Sports" class="img-fluid w-100">
                    <div class="py-1 font-bold app_bar">Sports</div>
                    <div class="position-absolute top-0 end-0 bg-black bg-opacity-75 h-full text-white p-2 rounded flex flex-col">
                        <div class="fw-bold text-danger mb-1">(🔴) LIVE</div>
                        <ul class="list-unstyled small mb-0 overflow-auto">
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
                    <div class="app_bar py-1 font-bold">Sports Book</div>
                </div>
            </div>
        </div>
    
        <!-- Aviator & Mines -->
        <div class="container-fluid font-bold">
            <div class="row w-full mx-auto">
                <div class="col-6 !p-[1px] launch_game cursor-pointer" data-game_id="a04d1f3eb8ccec8a4823bdf18e3f0e84">
                    <img src="{{ asset('images/aviator-730-280.gif') }}" alt="Aviator" class="img-fluid w-100">
                    <div class="app_bar py-1">Aviator</div>
                </div>
                <div class="col-6 !p-[1px] launch_game cursor-pointer" data-game_id="5c4a12fb0a9b296d9b0d5f9e1cd41d65">
                    <img src="{{ asset('images/evoplay-730-280.gif') }}" alt="Mines" class="img-fluid w-100">
                    <div class="app_bar py-1">Mines</div>
                </div>
            </div>
        </div>
        

    <!-- new changes start -->

        <div class="app_index text-white">
            <div class="container-fluid">
                <div class="row pb-5 justify-center items-center">
                    
                    <div class="d-flex flex-column">

                        <!-- game List -->
                    @foreach ($providers as $key=>$provider)
                        @if(count($providers) - $key > 2)
                        <div class="app_card d-flex flex-column w-100 mb-[1px]">
                            <div class="d-flex flex-row justify-content-between items-center px-1 py-1 app_bar">
                                <!-- <div class="d-flex flex-row gap-3 justify-content-start">
                                </div> -->
                                <div class="font-bold">{{$provider->title}}</div>
                                <div class="d-flex flex-row gap-1 justify-content-end">
                                    <a href="javascript:void(0)" class="games_scroll d-flex items-center justify-content-center bg-[#212529] rounded-circle" data-scroll="-150" style="height: 22px;width: 22px;">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" stroke-width="1.5" stroke="white" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><path d="M15 6l-6 6l6 6"></path></svg>
                                    </a>
                                    <a href="javascript:void(0)" class="games_scroll d-flex align-items-center justify-content-center bg-[#212529] text-success rounded-circle" data-scroll="150" style="height: 22px;width: 22px;">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" stroke-width="1.5" stroke="white" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><path d="M9 6l6 6l-6 6"></path></svg>
                                    </a>
                                </div>
                            </div>
                            <div class="all_games flex flex-col w-full overflow-x-auto app_scroller scrollbar-hide">
                                <div class="app_games flex flex-row w-screen game_list items-center" data-provider="{{ strtolower(explode('provider=', $provider->link)[1]) }}">
                                </div>

                            </div>

                        </div>
                        @endif
                    @endforeach
                            
                        <div class="app_card d-flex flex-column mb-[1px]">
                            <div class="d-flex flex-row justify-content-between items-center px-1 py-1 app_bar">
                                <!-- <div class="d-flex flex-row gap-3 justify-content-start">
                                </div> -->
                                <div class="font-bold">Evo Play and Playtech</div>
                                <div class="d-flex flex-row gap-1 justify-content-end">
                                    <a href="javascript:void(0)" class="games_scroll d-flex items-center justify-content-center bg-[#212529] rounded-circle" data-scroll="-150" style="height: 22px;width: 22px;">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" stroke-width="1.5" stroke="white" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><path d="M15 6l-6 6l6 6"></path></svg>
                                    </a>
                                    <a href="javascript:void(0)" class="games_scroll d-flex align-items-center justify-content-center bg-[#212529] text-success rounded-circle" data-scroll="150" style="height: 22px;width: 22px;">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" stroke-width="1.5" stroke="white" fill="none" stroke-linecap="round" stroke-linejoin="round"><path stroke="none" d="M0 0h24v24H0z" fill="none"></path><path d="M9 6l6 6l-6 6"></path></svg>
                                    </a>
                                </div>
                            </div>
                            <div class="all_games flex flex-row w-full overflow-x-auto app_scroller scrollbar-hide">
                                <div class="app_games flex flex-row game_list items-center" data-provider="evoplay_playtech">
                                </div>
                            </div>

                        </div>

                        
                        <!-- provider List -->
                        <div class="app_card d-flex flex-column w-100 mb-3 app_scroller">
                            <div class="d-flex flex-row justify-content-between items-center px-1 py-1 app_bar">
                                <div class="d-flex flex-row gap-3 justify-content-start">
                                    <div class="font-bold">Game Providers</div>
                                </div>
                            </div>
                            <div class="flex flex-row flex-wrap justify-center w-100 gap-2">
                                @foreach ($providers as $provider)
                                <div class="p-2">
                                    <img src="{{$provider->img}}" alt="" srcset="" class="w-32 bg-gray-900 h-16 rounded-lg shadow">
                                </div>
                                @endforeach
                            </div>
                            <div class="app_providers flex flex-row">
                            </div>

                        </div>


                    </div>
                    
                </div>
            </div>
        </div>

    <!-- new changes end -->

    </div>


        <script>

            $('.games_scroll').click(function(e){

                let games_scroller = $(this);
                let currentScroller = $(this).parents('.app_card').find('.app_scroller');
                
                $(currentScroller).animate({
                    scrollLeft: '+='+$(games_scroller).attr('data-scroll')
                },300);
            });

            $(document).ready(function() {

                @foreach ($providers as $key=>$provider)
                @if(count($providers) - $key > 2)
                    callApi('get', 'gameList', {
                        'provider': "{{ strtolower(explode('provider=', $provider->link)[1]) }}",
                        'game_index':0
                    }, gameList);
                @endif
                @endforeach

                callApi('get', 'gameList', {
                        'provider': 'evoplay_playtech',
                        'providers': [
                            "{{ strtolower(explode('provider=', $providers[count($providers)-1]->link)[1]) }}",
                            "{{ strtolower(explode('provider=', $providers[count($providers)-2]->link)[1]) }}"
                        ],
                        'game_index':0
                    }, gameList);

            });

            $('body').on('click','a.load-more-btn',function(e){
                let data ={};
                data.provider = $(this).attr('data-provider');
                data.game_index = $(this).attr('data-game_index');
                
                callApi('get','gameList',data,gameList);
            });
        </script>
    @endsection
