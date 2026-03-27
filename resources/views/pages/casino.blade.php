@extends('sports_master')
@section('sports_body')
    <!-- TOP BAR -->
    <div class="casino-topbar d-flex align-items-center justify-content-between px-2">
        <span class="text-white fw-semibold small">Casino</span>
        <form class="d-flex search-box" role="search">
            <input class="form-control form-control-sm rounded-pill" type="search" placeholder="Search Games..."
                aria-label="Search">
            <a class="btn btn-danger btn-sm rounded-pill ms-0" type="submit">
                Go
            </a>
        </form>
    </div>


    <!-- PRIMARY TABS -->
    <div class="tabs-strip">
        <ul class="nav">
            <li class="nav-item"><a class="nav-link active" href="javascript:void(0)">ALL</a></li>
            <li class="nav-item"><a class="nav-link" href="javascript:void(0)">RECENT</a></li>
            <li class="nav-item"><a class="nav-link" href="javascript:void(0)">MAC88</a></li>
            <li class="nav-item"><a class="nav-link" href="javascript:void(0)">MAC EXCITE</a></li>
            <li class="nav-item"><a class="nav-link" href="javascript:void(0)">LIVE PREDICTION</a></li>
            <li class="nav-item"><a class="nav-link" href="javascript:void(0)">FUN GAMES</a></li>
            <li class="nav-item"><a class="nav-link" href="javascript:void(0)">MAC88 VIRTUALS</a></li>
            <li class="nav-item"><a class="nav-link" href="javascript:void(0)">COLOR AND CHICKEN GAME</a></li>
            <li class="nav-item"><a class="nav-link" href="javascript:void(0)">CREED</a></li>
            <li class="nav-item"><a class="nav-link" href="javascript:void(0)">SMARTSOFT</a></li>
            <li class="nav-item"><a class="nav-link" href="javascript:void(0)">TURBOGAMES</a></li>
            <li class="nav-item"><a class="nav-link" href="javascript:void(0)">EVOLUATION</a></li>
            <li class="nav-item"><a class="nav-link" href="javascript:void(0)">EZUGI GAMING</a></li>
            <li class="nav-item"><a class="nav-link" href="javascript:void(0)">VIVO GAMING</a></li>
            <li class="nav-item"><a class="nav-link" href="javascript:void(0)">EVOPLAY ENTERTAINMENT</a></li>
            <li class="nav-item"><a class="nav-link" href="javascript:void(0)">SPRIEB</a></li>
            <li class="nav-item"><a class="nav-link" href="javascript:void(0)">JILI</a></li>
            <li class="nav-item"><a class="nav-link" href="javascript:void(0)">KINGMAKER</a></li>
            <li class="nav-item"><a class="nav-link" href="javascript:void(0)">AESEXY</a></li>
            <li class="nav-item"><a class="nav-link" href="javascript:void(0)">POPOK</a></li>
        </ul>
    </div>

    <!-- CATEGORY STRIP -->
    <div class="cat-strip">
        <div class="cat-wrapper d-inline-flex gap-1 px-1">
            <div class="cat-pill active"><span class="icon-20">🎲</span> DRAGON TIGER</div>
            <div class="cat-pill"><span class="icon-20">🎴</span> BACCARAT</div>
            <div class="cat-pill"><span class="icon-20">⚪</span> SICBO</div>
            <div class="cat-pill"><span class="icon-20">🎡</span> ROULETTE</div>
            <div class="cat-pill"><span class="icon-20">♠</span> POKER</div>
            <div class="cat-pill"><span class="icon-20">7</span> LUCKY7</div>
            <div class="cat-pill"><span class="icon-20">🃏</span> ANDARBAHAR</div>
            <div class="cat-pill"><span class="icon-20">♣</span> TEENPATTI</div>
        </div>
    </div>

    <!-- GRID -->
    <div class="row g-0">
        <div class="col-4 col-md-2">
            <img class="game-thumb" src="{{ asset('images/dt_mac88.webp') }}" alt="">
            <div class="thumb-caption">Play Now</div>
        </div>
        <div class="col-4 col-md-2">
            <img class="game-thumb" src="{{ asset('images/dtl_20_20.webp') }}" alt="">
            <div class="thumb-caption">Play Now</div>
        </div>
        <div class="col-4 col-md-2">
            <img class="game-thumb" src="{{ asset('images/dt_1day.webp') }}" alt="">
            <div class="thumb-caption">Play Now</div>
        </div>
        <div class="col-4 col-md-2">
            <img class="game-thumb" src="{{ asset('images/dt2.webp') }}" alt="">
            <div class="thumb-caption">Play Now</div>
        </div>
        <div class="col-4 col-md-2">
            <img class="game-thumb" src="{{ asset('images/vr_2020_dtl.webp') }}" alt="">
            <div class="thumb-caption">Play Now</div>
        </div>
        <div class="col-4 col-md-2">
            <img class="game-thumb" src="{{ asset('images/vr_dragontiger.webp') }}" alt="">
            <div class="thumb-caption">Play Now</div>
        </div>
    </div>
@endsection
