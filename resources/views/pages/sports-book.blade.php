@extends('master')
@section('body')
    <div class="d-flex vh-100">
        <!-- Sidebar -->
        <div class="sidebar">
            <!-- Top Buttons Grid (1 row, 3 columns) -->
            <div class="top-buttons">
                <button class="nav-btn active">
                    📅<br><small>Events</small>
                </button>
                <button class="nav-btn">
                    ▶<br><small>Live</small>
                </button>
                <button class="nav-btn">
                    ★<br><small>Favourite</small>
                </button>
            </div>

            <!-- Second Row -->
            <div class="second-buttons">
                <button class="nav-btn">
                    🔄<br><small>My Bets</small>
                </button>
                <button class="nav-btn">
                    📊<br><small>Results</small>
                </button>
                <button class="nav-btn">
                    🔍<br><small>Search</small>
                </button>
            </div>

            <div class="all-sports-title">ALL SPORTS</div>

            <div class="sports-list">
                <div class="sport-item active">
                    <span class="sport-name">
                        <span class="sport-icon">🏏</span>
                        Cricket
                    </span>
                    <span class="arrow">›</span>
                </div>

                <div class="sport-item">
                    <span class="sport-name">
                        <span class="sport-icon">⚽</span>
                        Soccer
                    </span>
                    <span class="arrow">›</span>
                </div>

                <div class="sport-item">
                    <span class="sport-name">
                        <span class="sport-icon">🎾</span>
                        Tennis
                    </span>
                    <span class="arrow">›</span>
                </div>

                <div class="sport-item">
                    <span class="sport-name">
                        <span class="srl-text">SRL</span>
                        Simulated Reality League
                    </span>
                    <span class="arrow">›</span>
                </div>

                <div class="sport-item">
                    <span class="sport-name">
                        <span class="sport-icon">🏈</span>
                        American Football
                    </span>
                    <span class="arrow">›</span>
                </div>

                <div class="sport-item">
                    <span class="sport-name">
                        <span class="sport-icon">🏸</span>
                        Badminton
                    </span>
                    <span class="arrow">›</span>
                </div>

                <div class="sport-item">
                    <span class="sport-name">
                        <span class="sport-icon">⚾</span>
                        Baseball
                    </span>
                    <span class="arrow">›</span>
                </div>

                <div class="sport-item">
                    <span class="sport-name">
                        <span class="sport-icon">🏀</span>
                        Basketball
                    </span>
                    <span class="arrow">›</span>
                </div>
            </div>
        </div>

        <!-- Main Content -->
        <div class="main-content">
            <!-- Carousel Banner -->
            <div id="cricketCarousel" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <!-- Slide 1 -->
                    <div class="carousel-item active">
                        <img src="{{ asset('images/laser247-banner3.jpeg') }}" class="d-block w-100"
                            style="height: 200px; object-fit: cover;">
                    </div>
                    <!-- Slide 2 -->
                    <div class="carousel-item">
                        <img src="{{ asset('images/laser247-banner5.jpeg') }}" class="d-block w-100"
                            style="height: 200px; object-fit: cover;">
                    </div>
                    <!-- Slide 3 -->
                    <div class="carousel-item">
                        <img src="{{ asset('images/laser247-banner6.jpeg') }}" class="d-block w-100"
                            style="height: 200px; object-fit: cover;">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#cricketCarousel" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon"></span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#cricketCarousel" data-bs-slide="next">
                    <span class="carousel-control-next-icon"></span>
                </button>
            </div>


            <!-- Tabs -->
            <div class="sports-tabs">
                <button class="tab-btn">
                    ★
                </button>
                <button class="tab-btn active">
                    🏏 Cricket
                    <span class="count active-count">30</span>
                </button>
                <button class="tab-btn">
                    ⚽ Soccer
                    <span class="count">892</span>
                </button>
                <button class="tab-btn">
                    🎾 Tennis
                    <span class="count">110</span>
                </button>
                <button class="tab-btn">
                    🎮 Simulated Reality League
                    <span class="count">55</span>
                </button>
                <button class="tab-btn">
                    🏈 American Football
                    <span class="count">4</span>
                </button>
                <button class="tab-btn">
                    🏸 Badminton
                    <span class="count">46</span>
                </button>
                <button class="tab-btn">
                    ⚾ Baseball
                    <span class="count">26</span>
                </button>
                <button class="tab-btn">
                    🏀 Basketball
                </button>
            </div>
            <!-- Live Events Section -->
            <div class="d-flex justify-content-between align-items-center mb-3">
                <h5 class="mb-0">Live Events</h5>
                <div class="text-muted small">&#94;</div>
            </div>

            <!-- Match Card -->
            <div class="event-card">
                <div class="row g-3">
                    <!-- Time -->
                    <div class="col-auto text-center time-column">
                        <div class="text-muted small">Today📡</div>
                        <div class="text-muted small">09:44 AM</div>
                    </div>

                    <!-- Match Info -->
                    <div class="col">
                        <div class="event-header mb-2">Virtual Cricket / Virtual Cricket In-Play</div>
                        <div class="d-flex justify-content-between align-items-start">
                            <div>
                                <div class="mb-1">
                                    <span class="team-icon">🏏</span>
                                    <span class="text-success">Kolkata</span>
                                </div>
                                <div>
                                    <span class="team-icon text-danger">🏏</span>
                                    <span class="text-danger">Mumbai</span>
                                </div>
                            </div>
                            <button class="fav-btn">☆</button>
                        </div>
                    </div>

                    <!-- Score -->
                    <div class="col-md-2 text-center">
                        <div class="score-title">Score</div>
                        <div class="score-box mt-1">0 : 164</div>
                    </div>

                    <!-- Locked Buttons -->
                    <div class="col-md-4">
                        <div class="score-title text-center mb-1">1x2</div>
                        <div class="d-flex gap-2">
                            <button class="locked-btn">🔒</button>
                            <button class="locked-btn">🔒</button>
                            <button class="locked-btn">🔒</button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Virtual Events Section -->
            <div class="d-flex justify-content-between align-items-center mb-3">
                <h5 class="mb-0">Virtual Cricket events</h5>
                <div class="text-muted small">&#94;</div>
            </div>

            <!-- Match Card -->
            <div class="event-card">
                <div class="row g-3">
                    <!-- Time -->
                    <div class="col-auto text-center time-column">
                        <div class="text-muted small">Today📡</div>
                        <div class="text-muted small">09:44 AM</div>
                    </div>

                    <!-- Match Info -->
                    <div class="col">
                        <div class="event-header mb-2">Virtual Cricket / Virtual Cricket In-Play</div>
                        <div class="d-flex justify-content-between align-items-start">
                            <div>
                                <div class="mb-1">
                                    <span class="team-icon">🏏</span>
                                    <span class="text-success">Kolkata</span>
                                </div>
                                <div>
                                    <span class="team-icon text-danger">🏏</span>
                                    <span class="text-danger">Mumbai</span>
                                </div>
                            </div>
                            <button class="fav-btn">☆</button>
                        </div>
                    </div>

                    <!-- Score -->
                    <div class="col-md-2 text-center">
                        <div class="score-title">Score</div>
                        <div class="score-box mt-1">0 : 164</div>
                    </div>

                    <!-- Locked Buttons -->
                    <div class="col-md-4">
                        <div class="score-title text-center mb-1">1x2</div>
                        <div class="d-flex gap-2">
                            <button class="locked-btn">🔒</button>
                            <button class="locked-btn">🔒</button>
                            <button class="locked-btn">🔒</button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Upcoming Events Section -->
            <div class="d-flex justify-content-between align-items-center mb-3">
                <h5 class="mb-0">Upcoming events</h5>
                <div class="text-muted small">&#94;</div>
            </div>

            <!-- Match Card -->
            <div class="event-card">
                <div class="row g-3">
                    <!-- Time -->
                    <div class="col-auto text-center time-column">
                        <div class="text-muted small">Today📡</div>
                        <div class="text-muted small">09:44 AM</div>
                    </div>


                    <!-- Match Info -->
                    <div class="col">
                        <div class="event-header mb-2">India / T20 Delhi Premier League </div>
                        <div class="d-flex justify-content-between align-items-start">
                            <div>
                                <div class="mb-1">
                                    <span class="team-icon">🏏</span>
                                    <span class="text-success">Kolkata</span>
                                </div>
                                <div>
                                    <span class="team-icon text-danger">🏏</span>
                                    <span class="text-danger">Mumbai</span>
                                </div>

                            </div>
                            <button class="fav-btn">☆</button>
                        </div>
                    </div>

                    <!-- Score -->
                    <div class="col-md-2 text-center">
                        <div class="score-title">Score</div>
                        <div class="score-box mt-1">0 : 0</div>
                    </div>

                    <!-- Locked Buttons -->
                    <div class="col-md-4">
                        <div class="score-title text-center mb-1">1x2</div>
                        <div class="d-flex gap-2">
                            <button class="locked-btn">2.24</button>
                            <button class="locked-btn">🔒</button>
                            <button class="locked-btn">1.61</button>
                        </div>
                    </div>
                </div>
            </div><!-- Upcoming Events Section End -->
            <div class="view-all-link text-center mt-2">
                <a href="#" class="text-decoration-none fw-semibold">
                    View all Cricket upcoming events (22) »
                </a>
            </div>

        </div>
    </div>
    </div>
@endsection
