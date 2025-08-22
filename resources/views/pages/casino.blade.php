@extends('sports_master')
@section('sports_body')
    <title>Casino</title>

    <style>
        :root {
            --topbar: #243A48;
            --tabsbar: #243A48;
            --selcat: #243A48;
            --search: #e41a1e;
            --thumb-caption: #243A48;
        }

        body {
            margin: 0;
            padding: 0;
            background: #f0f2f3;
        }

        /* TOP BAR */
        .casino-topbar {
            background: var(--topbar);
            min-height: 40px;
        }

        /* Search */
        .search-box input {
            height: 26px;
            font-size: .75rem;
            border-radius: 0;
        }

        .search-box button {
            height: 26px;
            font-size: .75rem;
            border-radius: 0;
            padding: 0 .5rem;
            background: var(--search);
            color: #fff;
        }

        /* PRIMARY TABS */
        .tabs-strip {
            background: var(--tabsbar);
            white-space: nowrap;
            overflow-x: auto;
            margin: 6px 0;
            padding: 0;
        }

        .tabs-strip::-webkit-scrollbar {
            height: 6px;
        }

        .tabs-strip::-webkit-scrollbar-thumb {
            background: #aaa;
            border-radius: 10px;
        }

        .tabs-strip::-webkit-scrollbar-track {
            background: #f1f1f1;
        }

        /* ul inline flex */
        .tabs-strip ul {
            display: inline-flex;
            flex-wrap: nowrap;
            margin: 0;
            padding: 0;
            gap: 4px;
        }

        /* nav links styling */
        .tabs-strip .nav-link {
            color: #fff;
            font-size: .75rem;
            padding: .45rem 1rem;
            border-radius: 0;
            background: var(--tabsbar);
            white-space: nowrap;
            flex-shrink: 0;
        }

        .tabs-strip .nav-link.active {
            background: #fff;
            color: #000;
            font-weight: 600;
        }

        /* CATEGORY STRIP */
        .cat-strip {
            background: #fff;
            border-top: 1px solid #cfd4d6;
            border-bottom: 1px solid #cfd4d6;
            white-space: nowrap;
            overflow-x: auto;
            margin: 0;
            padding: .2rem 0;
        }

        .cat-pill {
            border: 1px solid #cfd4d6;
            border-radius: 0;
            padding: .25rem .5rem;
            font-size: .7rem;
            font-weight: 600;
            display: inline-flex;
            align-items: center;
            gap: .3rem;
            min-width: 110px;
            height: 32px;
            justify-content: center;
            background: #fff;
            color: #000;
        }

        .cat-pill.active {
            background: var(--selcat);
            color: #fff;
            border-color: var(--selcat);
        }

        .icon-20 {
            width: 20px;
            height: 20px;
            display: inline-block;
        }

        .cat-strip::-webkit-scrollbar {
            height: 6px;
        }

        .cat-strip::-webkit-scrollbar-thumb {
            background: #aaa;
            border-radius: 10px;
        }

        .cat-strip::-webkit-scrollbar-track {
            background: #f1f1f1;
        }

        .cat-strip .cat-wrapper {
            display: inline-flex;
            flex-wrap: nowrap;
            margin: 0;
            padding: 0 4px;
            gap: 4px;
        }

        /* GAME GRID */
        .game-thumb {
            width: 100%;
            height: 110px;
            object-fit: cover;
            border: 1px solid #cfd4d6;
            border-radius: 0;
        }

        .thumb-caption {
            background: var(--thumb-caption);
            color: #fff;
            text-align: center;
            font-size: .65rem;
            font-weight: 700;
            text-transform: uppercase;
            padding: .25rem;
            margin-top: 1px;
        }

        .row.g-0>[class^="col"] {
            padding: 1px;
        }
    </style>

    <!-- TOP BAR -->
    <div class="casino-topbar d-flex align-items-center justify-content-between px-2">
        <span class="text-white fw-semibold small">Casino</span>
        <form class="d-flex search-box" role="search">
            <input class="form-control form-control-sm" type="search" placeholder="Search Games..." aria-label="Search">
            <a href="javascript:void(0)" onclick="this.closest('form').submit(); return false;">Go</a>

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
        <div class="col-2">
            <img class="game-thumb" src="{{ asset('images/dt_mac88.webp') }}" alt="">
            <div class="thumb-caption">Play Now</div>
        </div>
        <div class="col-2">
            <img class="game-thumb" src="{{ asset('images/dtl_20_20.webp') }}" alt="">
            <div class="thumb-caption">Play Now</div>
        </div>
        <div class="col-2">
            <img class="game-thumb" src="{{ asset('images/dt_1day.webp') }}" alt="">
            <div class="thumb-caption">Play Now</div>
        </div>
        <div class="col-2">
            <img class="game-thumb" src="{{ asset('images/dt2.webp') }}" alt="">
            <div class="thumb-caption">Play Now</div>
        </div>
        <div class="col-2">
            <img class="game-thumb" src="{{ asset('images/vr_2020_dtl.webp') }}" alt="">
            <div class="thumb-caption">Play Now</div>
        </div>
        <div class="col-2">
            <img class="game-thumb" src="{{ asset('images/vr_dragontiger.webp') }}" alt="">
            <div class="thumb-caption">Play Now</div>
        </div>
    </div>
@endsection
