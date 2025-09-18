<!-- Navbar -->
<div class="">
    <nav class="nav nav-pills flex-nowrap overflow-auto px-1 py-1 small"
        style="white-space: nowrap; scrollbar-width: thin;">
        <a class="app_nav-link nav-link text-white py-1 px-2" href="home">Home</a>
        <a class="nav-link text-white py-1 px-2" href="in-play">In-Play</a>
        <a class="nav-link text-white py-1 px-2" href="multi-market">Multi Market</a>
        @foreach($_GAMES as $games)
        <a class="nav-link text-white py-1 px-2" href="cricket">{{$games}}</a>
        @endforeach
    </nav>
</div>
