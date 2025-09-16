@php
    
    $userAgent = $_SERVER['HTTP_USER_AGENT'];

@endphp

    @if (stripos($userAgent, 'Mobile') !== false)
        @include('mobile.master')
    @elseif (stripos($userAgent, 'Tablet') !== false)
        @include('mobile.master')
    @else
        @include('master')
    
    @endif


