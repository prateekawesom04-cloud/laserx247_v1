<?php
    
    $userAgent = $_SERVER['HTTP_USER_AGENT'];
    $providers = Storage::disk('local')->get('games_data/providers.json');
    
    $providers = json_decode($providers);

?>
    @if (stripos($userAgent, 'Mobile') !== false)
        @include('mobile.master')
    @elseif (stripos($userAgent, 'Tablet') !== false)
        @include('mobile.master')
    @else
        @include('master')
    
    @endif


