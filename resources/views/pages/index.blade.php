@extends('master')
@section('body')

<!-- Main Banner -->
<section class="container-fluid p-0 text-center">
  <img src="{{ asset('images/slider1.gif') }}" class="img-fluid d-block mx-auto" style="width:83%;" alt="Popular Events">
</section>

<!-- Sports & Sports Book Section -->
<section class="container my-2" style="width:100%;">
  <div class="row g-2">
    <!-- Sports -->
    <div class="col-md-6 position-relative">
      <img src="{{ asset('images/banner-sport1.png') }}" alt="Sports" class="img-fluid w-100">
      <div class="bg-dark text-white py-1">Sports</div>

      <!-- Overlay Right -->
      <div class="position-absolute top-0 end-0 bg-dark bg-opacity-75 text-white p-2 rounded overflow-auto" style="max-height:200px; width:150px;">
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
</section>

<!-- Aviator & Mines -->
<section class="container my-2" style="width:100%;">
  <div class="row g-2">
    <!-- Aviator -->
    <div class="col-md-6">
      <img src="{{ asset('images/aviator-730-280.gif') }}" alt="Aviator" class="img-fluid w-100">
      <div class="bg-dark text-white py-1">Aviator</div>
    </div>

    <!-- Mines -->
    <div class="col-md-6">
      <img src="{{ asset('images/evoplay-730-280.gif') }}" alt="Mines" class="img-fluid w-100">
      <div class="bg-dark text-white py-1">Mines</div>
    </div>
  </div>
</section>

<!-- New Launch -->
<section class="container my-3" style="width:100%;">
  <div class="bg-dark text-white py-2">NEW LAUNCH</div>
  <div class="row g-2 mt-2">
    <div class="col-6 col-md-3">
      <img src="{{ asset('images/luckylase2.webp') }}" alt="Lucky Lace 2" class="img-fluid w-100">
      <div class="bg-dark text-white py-1">Lucky Lace 2</div>
    </div>
    <div class="col-6 col-md-3">
      <img src="{{ asset('images/chicken-road-cross.webp') }}" alt="Chicken Road Cross" class="img-fluid w-100">
      <div class="bg-dark text-white py-1">Chicken Road Cross</div>
    </div>
    <div class="col-6 col-md-3">
      <img src="{{ asset('images/stairpong.webp') }}" alt="Stair Pong" class="img-fluid w-100">
      <div class="bg-dark text-white py-1">Stair Pong</div>
    </div>
    <div class="col-6 col-md-3">
      <img src="{{ asset('images/rps.webp') }}" alt="Rock Paper Scissors" class="img-fluid w-100">
      <div class="bg-dark text-white py-1">Rock Paper Scissors</div>
    </div>
  </div>
</section>

@if(!session()->has('user_session'))
<!-- Recent Games -->
<section class="container my-3" style="width:100%;">
  <div class="bg-dark text-white py-2">RECENT GAMES</div>
  <div class="row g-2 mt-2">
    <div class="col-6 col-md-3">
      <img src="{{ asset('images/gmx_pilotcup.jpg') }}" alt="Pilot Cup" class="img-fluid w-100">
      <div class="bg-dark text-white py-1">Pilot Cup</div>
    </div>
    <div class="col-6 col-md-3">
      <img src="{{ asset('images/evo_crazytime.webp') }}" alt="Crazy Time" class="img-fluid w-100">
      <div class="bg-dark text-white py-1">Crazy Time</div>
    </div>
    <div class="col-6 col-md-3">
      <img src="{{ asset('images/andar_bahar_228000.webp') }}" alt="Andar Bahar" class="img-fluid w-100">
      <div class="bg-dark text-white py-1">Andar Bahar</div>
    </div>
    <div class="col-6 col-md-3">
      <img src="{{ asset('images/dt_mac88.webp') }}" alt="Dragon Tiger" class="img-fluid w-100">
      <div class="bg-dark text-white py-1">Dragon Tiger</div>
    </div>
  </div>
</section>
@endif

@if(session()->has('user_session'))
{{-- after login --}}
<!-- My Favourite -->
<section class="container my-3" style="width:100%;">
  <div class="bg-dark text-white py-2">RECENT GAMES</div>
  <div class="row g-2 mt-2">
    <div class="col-6 col-md-3">
      <img src="{{ asset('images/gmx_pilotcup.jpg') }}" alt="Pilot Cup" class="img-fluid w-100">
      <div class="bg-dark text-white py-1">Pilot Cup</div>
    </div>
    <div class="col-6 col-md-3">
      <img src="{{ asset('images/evo_crazytime.webp') }}" alt="Crazy Time" class="img-fluid w-100">
      <div class="bg-dark text-white py-1">Crazy Time</div>
    </div>
    <div class="col-6 col-md-3">
      <img src="{{ asset('images/andar_bahar_228000.webp') }}" alt="Andar Bahar" class="img-fluid w-100">
      <div class="bg-dark text-white py-1">Andar Bahar</div>
    </div>
    <div class="col-6 col-md-3">
      <img src="{{ asset('images/dt_mac88.webp') }}" alt="Dragon Tiger" class="img-fluid w-100">
      <div class="bg-dark text-white py-1">Dragon Tiger</div>
    </div>
  </div>
</section>
@endif

<!-- Our Provider -->
<section class="container my-3" style="width:90%;">
  <div class="bg-dark text-white py-2">OUR PROVIDER</div>
  <div class="row g-2 mt-2">
    <div class="col-6 col-md-3">
      <img src="{{ asset('images/creed.webp') }}" alt="Creed" class="img-fluid w-100">
      <div class="bg-dark text-white py-1">Creed</div>
    </div>
    <div class="col-6 col-md-3">
      <img src="{{ asset('images/mac88.webp') }}" alt="Mac" class="img-fluid w-100">
      <div class="bg-dark text-white py-1">Mac Excite</div>
    </div>
    <div class="col-6 col-md-3">
      <img src="{{ asset('images/mac88_cp.webp') }}" alt="Mac88" class="img-fluid w-100">
      <div class="bg-dark text-white py-1">Mac88</div>
    </div>
    <div class="col-6 col-md-3">
      <img src="{{ asset('images/fungames.webp') }}" alt="Fun Game" class="img-fluid w-100">
      <div class="bg-dark text-white py-1">Fun Game</div>
    </div>
  </div>
</section>



@endsection
