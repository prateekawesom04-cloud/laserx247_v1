<!-- Navbar -->
<div class="">
    <nav class="nav nav-pills flex-nowrap overflow-auto px-1 py-1 small"
        style="white-space: nowrap; scrollbar-width: thin;">
        <a class="app_nav-link nav-link text-white py-1 px-2" href="home">Home</a>
        <a class="nav-link text-white py-1 px-2" href="{{route('pages.in-play')}}">In-Play</a>
        <a class="nav-link text-white py-1 px-2" href="{{route('pages.multi-market')}}">Multi Market</a>
        @foreach($_GAMES as $key=>$games)
        @if($key<5)
        <a class="nav-link text-white py-1 px-2" href="{{route('pages.'.strtolower(str_replace(' ', '-', $games)))}}">{{$games}}</a>
        @else
        <a class="nav-link text-white py-1 px-2" href="javascript:void(0)">{{$games}}</a>
        @endif
        @endforeach
    </nav>
</div>
