@extends('sports_master')
@section('sports_body')

<!-- Hero Banner -->
<section>
  <div id="heroCarousel" class="carousel slide" data-bs-ride="carousel">

    <!-- Indicators -->
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="0" class="active"></button>
      <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="1"></button>
      <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="2"></button>
    </div>

    <!-- Carousel Items -->
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="{{ asset('images/bnr1.png') }}" class="d-block w-100 img-fluid" alt="Hero Image 1">
      </div>
      <div class="carousel-item">
        <img src="{{ asset('images/bnr2.png') }}" class="d-block w-100 img-fluid" alt="Hero Image 2">
      </div>
      <div class="carousel-item">
        <img src="{{ asset('images/bnr3.png') }}" class="d-block w-100 img-fluid" alt="Hero Image 3">
      </div>
    </div>
  </div>
</section>

<!-- Centered Buttons -->
<div class="container-fluid text-center py-2 bg-info bg-gradient">
  <button class="btn btn-dark btn-sm px-4 me-2">EXCHANGE</button>
  <button class="btn btn-light btn-sm px-4">SPORTSBOOK</button>
</div>

<!-- Highlights Section -->
<section class="container-fluid bg-light py-2">

  <!-- Header -->
  <div class="d-flex justify-content-between align-items-center mb-2 px-2 bg-dark py-1">
  <!-- Left side -->
  <h5 class="mb-0 text-white">Highlights</h5>

  <!-- Right side -->
  <div>
    <button class="btn btn-success btn-sm ">+ LIVE</button>
    <button class="btn btn-info btn-sm">+ VIRTUAL</button>
    <button class="btn btn-warning btn-sm">+ PREMIUM</button>
    <button class="btn btn-danger btn-sm">♦ VIEW BY</button>
  </div>
</div>


  <!-- Sports Tabs -->
  <div class="px-3 mb-3">
    <ul class="nav nav-pills flex-wrap overflow-auto">
      <li class="nav-item"><a class="nav-link active bg-dark text-white" href="#">Cricket</a></li>
      <li class="nav-item"><a class="nav-link text-dark border" href="#">Football</a></li>
      <li class="nav-item"><a class="nav-link text-dark border" href="#">Tennis</a></li>
      <li class="nav-item"><a class="nav-link text-dark border" href="#">Casino</a></li>
      <li class="nav-item"><a class="nav-link text-dark border" href="#">Sports book</a></li>
      <li class="nav-item"><a class="nav-link text-dark border" href="#">Horse Racing</a></li>
      <li class="nav-item"><a class="nav-link text-dark border" href="#">Greyhound Racing</a></li>
      <li class="nav-item"><a class="nav-link text-dark border" href="#">Binary</a></li>
      <li class="nav-item"><a class="nav-link text-dark border" href="#">Kabaddi</a></li>
      <li class="nav-item"><a class="nav-link text-dark border" href="#">Politics</a></li>
      <li class="nav-item"><a class="nav-link text-dark border" href="#">Basketball</a></li>
      <li class="nav-item"><a class="nav-link text-dark border" href="#">Baseball</a></li>
      <li class="nav-item"><a class="nav-link text-dark border" href="#">Table Tennis</a></li>
      <li class="nav-item"><a class="nav-link text-dark border" href="#">Volley Ball</a></li>
    </ul>
  </div>

  <!-- Matches Table -->
  <div class="px-3">
    <div class="table-responsive">
      <table class="table table-sm table-bordered mb-0 text-center align-middle">
        <thead class="table-secondary">
          <tr>
            <th class="w-50"></th>
            <th>1</th>
            <th>X</th>
            <th>2</th>
            <th></th>
          </tr>
        </thead>
        <tbody>

          <!-- Match 1 -->
          <tr>
            <td class="text-start">
              <div><span class="text-success">●</span> <strong class="text-info">The Hundred - Womens</strong></div>
              <div class="mt-1">
                <span class="badge bg-success">In-Play</span>
                <span class="badge bg-primary">📺</span>
                <small class="text-muted">08/05/2025 06:30</small>
              </div>
            </td>
            <td><button class="btn btn-info btn-sm">-</button></td>
            <td><button class="btn btn-danger btn-sm">-</button></td>
            <td><button class="btn btn-info btn-sm">-</button></td>
            <td><button class="btn btn-outline-secondary btn-sm">⚙</button></td>
          </tr>

          <!-- Match 2 -->
          <tr>
            <td class="text-start">
              <div><span class="text-success">●</span> <strong class="text-info">The Hundred</strong></div>
              <div class="mt-1">
                <span class="badge bg-success">In-Play</span>
                <span class="badge bg-primary">📺</span>
                <span class="badge bg-warning text-dark">⏰</span>
                <small class="text-muted">05/08/2025 23:00</small>
              </div>
            </td>
            <td><button class="btn btn-info btn-sm">-</button></td>
            <td><button class="btn btn-danger btn-sm">-</button></td>
            <td><button class="btn btn-info btn-sm">-</button></td>
            <td><button class="btn btn-outline-secondary btn-sm">⚙</button></td>
          </tr>

          <!-- Match 3 -->
          <tr>
            <td class="text-start">
              <div><span class="text-success">●</span> <strong class="text-info">Caribbean Premier League - Winner</strong></div>
              <div class="mt-1">
                <span class="badge bg-success">In-Play</span>
                <span class="badge bg-primary">📺</span>
                <small class="text-muted">15/08/2025 01:00</small>
              </div>
            </td>
            <td><button class="btn btn-info btn-sm">-</button></td>
            <td><button class="btn btn-danger btn-sm">-</button></td>
            <td><button class="btn btn-info btn-sm">-</button></td>
            <td><button class="btn btn-outline-secondary btn-sm">⚙</button></td>
          </tr>

          <!-- Match 4 -->
          <tr>
            <td class="text-start">
              <div><span class="text-success">●</span> <strong class="text-info">Chicago Kingsmen v Pakistan Shaheens</strong></div>
              <div class="mt-1">
                <span class="badge bg-success">In-Play</span>
                <span class="badge bg-primary">📺</span>
                <span class="badge bg-warning text-dark">⏰</span>
                <span class="badge bg-info">📱</span>
                <small class="text-muted">09:00</small>
              </div>
            </td>
            <td><button class="btn btn-info btn-sm">-</button></td>
            <td><button class="btn btn-danger btn-sm">-</button></td>
            <td><button class="btn btn-info btn-sm">-</button></td>
            <td><button class="btn btn-outline-secondary btn-sm">⚙</button></td>
          </tr>

          <!-- Match 5 -->
          <tr>
            <td class="text-start">
              <div><span class="text-success">●</span> <strong class="text-info">Islamabad United SRL V Quetta Gladiators SRL</strong></div>
              <div class="mt-1">
                <span class="badge bg-success">In-Play</span>
                <small class="text-muted">09:30</small>
              </div>
            </td>
            <td><button class="btn btn-info btn-sm">-</button></td>
            <td><button class="btn btn-danger btn-sm">-</button></td>
            <td><button class="btn btn-info btn-sm">-</button></td>
            <td><button class="btn btn-outline-secondary btn-sm">⚙</button></td>
          </tr>

        </tbody>
      </table>
    </div>
  </div>
</section>

@endsection
