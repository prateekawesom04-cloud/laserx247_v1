@extends('master')
@section('body')
    <div class="d-flex flex-column flex-md-row vh-100">
        <!-- Sidebar -->
        <div class="sidebar d-none d-md-block">
            <!-- Top Buttons Grid -->
            <div class="top-buttons">
                <a class="nav-btn active">📅<br><small>Events</small></a>
                <a class="nav-btn">▶<br><small>Live</small></a>
                <a class="nav-btn">★<br><small>Favourite</small></a>
            </div>

            <!-- Second Row -->
            <div class="second-buttons">
                <a class="nav-btn">🔄<br><small>My Bets</small></a>
                <a class="nav-btn">📊<br><small>Results</small></a>
                <a class="nav-btn">🔍<br><small>Search</small></a>
            </div>

            <div class="all-sports-title">ALL SPORTS</div>

            <div class="sports-list">
                <div class="sport-item active"><span class="sport-name"><span
                            class="sport-icon">🏏</span>Cricket</span><span class="arrow">›</span></div>
                <div class="sport-item"><span class="sport-name"><span class="sport-icon">⚽</span>Soccer</span><span
                        class="arrow">›</span></div>
                <div class="sport-item"><span class="sport-name"><span class="sport-icon">🎾</span>Tennis</span><span
                        class="arrow">›</span></div>
                <div class="sport-item"><span class="sport-name"><span class="srl-text">SRL</span>Simulated Reality
                        League</span><span class="arrow">›</span></div>
                <div class="sport-item"><span class="sport-name"><span class="sport-icon">🏈</span>American
                        Football</span><span class="arrow">›</span></div>
                <div class="sport-item"><span class="sport-name"><span class="sport-icon">🏸</span>Badminton</span><span
                        class="arrow">›</span></div>
                <div class="sport-item"><span class="sport-name"><span class="sport-icon">⚾</span>Baseball</span><span
                        class="arrow">›</span></div>
                <div class="sport-item"><span class="sport-name"><span class="sport-icon">🏀</span>Basketball</span><span
                        class="arrow">›</span></div>
            </div>
        </div>

        <!-- Main Content -->
        <div class="w-100">
            <!-- Carousel Banner -->
            <div id="cricketCarousel" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active"><img src="{{ asset('images/laser247-banner3.jpeg') }}"
                            class="d-block w-100"></div>
                    <div class="carousel-item"><img src="{{ asset('images/laser247-banner11.webp') }}" class="d-block w-100">
                    </div>
                    <div class="carousel-item"><img src="{{ asset('images/laser247-banner9.jpeg') }}" class="d-block w-100">
                    </div>
                </div>
                <a class="carousel-control-prev" type="button" data-bs-target="#cricketCarousel" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon"></span>
                </a>
                <a class="carousel-control-next" type="button" data-bs-target="#cricketCarousel" data-bs-slide="next">
                    <span class="carousel-control-next-icon"></span>
                </a>
            </div>

            <!-- Tabs -->
            <div class="d-flex flex-nowrap overflow-auto bg-light p-2 border-bottom">
                <a href="#" class="btn btn-outline-secondary me-2 flex-shrink-0 px-3 text-decoration-none">★</a>
                <a href="#" class="btn btn-primary me-2 flex-shrink-0 position-relative text-decoration-none">🏏 <span
                        class="d-none d-sm-inline">Cricket</span><span class="d-md-none d-sm-inline">Cricket</span><span
                        class="badge bg-light text-primary position-absolute top-0 start-100 translate-middle rounded-pill">30</span></a>
                <a href="#"
                    class="btn btn-outline-secondary me-2 flex-shrink-0 position-relative text-decoration-none">⚽ <span
                        class="d-none d-sm-inline">Soccer</span><span class="d-md-none d-sm-inline">Scoccer</span><span
                        class="badge bg-secondary position-absolute top-0 start-100 translate-middle rounded-pill">892</span></a>
                <a href="#"
                    class="btn btn-outline-secondary me-2 flex-shrink-0 position-relative text-decoration-none">🎾 <span
                        class="d-none d-sm-inline">Tennis</span><span class="d-md-none d-sm-inline">Tennis</span><span
                        class="badge bg-secondary position-absolute top-0 start-100 translate-middle rounded-pill">110</span></a>
                <a href="#"
                    class="btn btn-outline-secondary me-2 flex-shrink-0 position-relative text-decoration-none">🎮 <span
                        class="d-none d-md-inline">Simulated Reality League</span><span
                        class="d-md-none d-sm-inline">SRL</span><span
                        class="badge bg-secondary position-absolute top-0 start-100 translate-middle rounded-pill">55</span></a>
                <a href="#"
                    class="btn btn-outline-secondary me-2 flex-shrink-0 position-relative text-decoration-none">🏈 <span
                        class="d-none d-lg-inline">American Football</span><span
                        class="d-lg-none d-sm-inline">Football</span><span
                        class="badge bg-secondary position-absolute top-0 start-100 translate-middle rounded-pill">4</span></a>
                <a href="#"
                    class="btn btn-outline-secondary me-2 flex-shrink-0 position-relative text-decoration-none">🏸 <span
                        class="d-none d-sm-inline">Badminton</span><span class="d-md-none d-sm-inline">Badminton</span><span
                        class="badge bg-secondary position-absolute top-0 start-100 translate-middle rounded-pill">46</span></a>
                <a href="#"
                    class="btn btn-outline-secondary me-2 flex-shrink-0 position-relative text-decoration-none">⚾ <span
                        class="d-none d-sm-inline">Baseball</span><span class="d-md-none d-sm-inline">Baseball</span><span
                        class="badge bg-secondary position-absolute top-0 start-100 translate-middle rounded-pill">26</span></a>
                <a href="#" class="btn btn-outline-secondary flex-shrink-0 text-decoration-none">🏀 <span
                        class="d-none d-sm-inline">Basketball</span></a>
            </div>

            <div class="p-3 p-md-4">
                <!-- Live Events -->
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <h5 class="mb-0 fw-bold">Live Events</h5>
                    <div class="text-muted">&#94;</div>
                </div>

                <div class="card shadow-sm mb-4 border-0">
                    <div class="card-body p-2 p-md-3">
                        <!-- Mobile Layout -->
                        <div class="d-block d-md-none">
                            <div class="d-flex justify-content-between align-items-center mb-2">
                                <div>
                                    <div class="text-muted small fw-semibold">Today📡 09:44 AM</div>
                                    <div class="text-muted small">Virtual Cricket / Virtual Cricket In-Play</div>
                                </div>
                                <a href="#"
                                    class="btn btn-outline-warning btn-sm border-0 text-decoration-none">☆</a>
                            </div>
                            <div class="row g-2 align-items-center">
                                <div class="col-8">
                                    <div class="mb-2 d-flex align-items-center"><span class="me-2 fs-6">🏏</span><span
                                            class="text-success fw-bold">Kolkata</span></div>
                                    <div class="d-flex align-items-center"><span
                                            class="me-2 fs-6 text-danger">🏏</span><span
                                            class="text-danger fw-bold">Mumbai</span></div>
                                </div>
                                <div class="col-4 text-center">
                                    <div class="text-muted small fw-semibold mb-1">Score</div>
                                    <div class="bg-light border rounded p-1 fw-bold text-dark small">0 : 164</div>
                                </div>
                            </div>
                            <div class="mt-3">
                                <div class="text-muted small text-center fw-semibold mb-2">1x2</div>
                                <div class="row g-1">
                                    <div class="col-4"><a href="#"
                                            class="btn btn-secondary w-100 disabled text-decoration-none">🔒</a></div>
                                    <div class="col-4"><a href="#"
                                            class="btn btn-secondary w-100 disabled text-decoration-none">🔒</a></div>
                                    <div class="col-4"><a href="#"
                                            class="btn btn-secondary w-100 disabled text-decoration-none">🔒</a></div>
                                </div>
                            </div>
                        </div>

                        <!-- Desktop Layout -->
                        <div class="d-none d-md-block">
                            <div class="row g-3 align-items-center">
                                <div class="col-12 col-sm-6 col-md-auto text-center text-md-start">
                                    <div class="text-muted small fw-semibold">Today📡</div>
                                    <div class="text-muted small">09:44 AM</div>
                                </div>
                                <div class="col-12 col-sm-6 col-md">
                                    <div class="text-muted small mb-2 fw-semibold">Virtual Cricket / Virtual Cricket
                                        In-Play</div>
                                    <div class="d-flex justify-content-between align-items-start">
                                        <div class="flex-grow-1">
                                            <div class="mb-2 d-flex align-items-center"><span
                                                    class="me-2 fs-6">🏏</span><span
                                                    class="text-success fw-bold">Kolkata</span></div>
                                            <div class="d-flex align-items-center"><span
                                                    class="me-2 fs-6 text-danger">🏏</span><span
                                                    class="text-danger fw-bold">Mumbai</span></div>
                                        </div>
                                        <a href="#"
                                            class="btn btn-outline-warning btn-sm border-0 text-decoration-none">☆</a>
                                    </div>
                                </div>
                                <div class="col-6 col-md-3 col-lg-2 text-center">
                                    <div class="text-muted small fw-semibold mb-1">Score</div>
                                    <div class="bg-light border rounded p-2 fw-bold text-dark">0 : 164</div>
                                </div>
                                <div class="col-6 col-md-6 col-lg-4">
                                    <div class="text-muted small text-center fw-semibold mb-2">1x2</div>
                                    <div class="row g-1">
                                        <div class="col-4"><a href="#"
                                                class="btn btn-secondary w-100 disabled text-decoration-none">🔒</a></div>
                                        <div class="col-4"><a href="#"
                                                class="btn btn-secondary w-100 disabled text-decoration-none">🔒</a></div>
                                        <div class="col-4"><a href="#"
                                                class="btn btn-secondary w-100 disabled text-decoration-none">🔒</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Virtual Cricket Events -->
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <h5 class="mb-0 fw-bold">Virtual Cricket events</h5>
                    <div class="text-muted">&#94;</div>
                </div>

                <div class="card shadow-sm mb-4 border-0">
                    <div class="card-body p-2 p-md-3">
                        <!-- Mobile Layout -->
                        <div class="d-block d-md-none">
                            <div class="d-flex justify-content-between align-items-center mb-2">
                                <div>
                                    <div class="text-muted small fw-semibold">Today📡 09:44 AM</div>
                                    <div class="text-muted small">Virtual Cricket / Virtual Cricket In-Play</div>
                                </div>
                                <a href="#"
                                    class="btn btn-outline-warning btn-sm border-0 text-decoration-none">☆</a>
                            </div>
                            <div class="row g-2 align-items-center">
                                <div class="col-8">
                                    <div class="mb-2 d-flex align-items-center"><span class="me-2 fs-6">🏏</span><span
                                            class="text-success fw-bold">Kolkata</span></div>
                                    <div class="d-flex align-items-center"><span
                                            class="me-2 fs-6 text-danger">🏏</span><span
                                            class="text-danger fw-bold">Mumbai</span></div>
                                </div>
                                <div class="col-4 text-center">
                                    <div class="text-muted small fw-semibold mb-1">Score</div>
                                    <div class="bg-light border rounded p-1 fw-bold text-dark small">0 : 164</div>
                                </div>
                            </div>
                            <div class="mt-3">
                                <div class="text-muted small text-center fw-semibold mb-2">1x2</div>
                                <div class="row g-1">
                                    <div class="col-4"><a href="#"
                                            class="btn btn-secondary w-100 disabled text-decoration-none">🔒</a></div>
                                    <div class="col-4"><a href="#"
                                            class="btn btn-secondary w-100 disabled text-decoration-none">🔒</a></div>
                                    <div class="col-4"><a href="#"
                                            class="btn btn-secondary w-100 disabled text-decoration-none">🔒</a></div>
                                </div>
                            </div>
                        </div>

                        <!-- Desktop Layout -->
                        <div class="d-none d-md-block">
                            <div class="row g-3 align-items-center">
                                <div class="col-12 col-sm-6 col-md-auto text-center text-md-start">
                                    <div class="text-muted small fw-semibold">Today📡</div>
                                    <div class="text-muted small">09:44 AM</div>
                                </div>
                                <div class="col-12 col-sm-6 col-md">
                                    <div class="text-muted small mb-2 fw-semibold">Virtual Cricket / Virtual Cricket
                                        In-Play</div>
                                    <div class="d-flex justify-content-between align-items-start">
                                        <div class="flex-grow-1">
                                            <div class="mb-2 d-flex align-items-center"><span
                                                    class="me-2 fs-6">🏏</span><span
                                                    class="text-success fw-bold">Kolkata</span></div>
                                            <div class="d-flex align-items-center"><span
                                                    class="me-2 fs-6 text-danger">🏏</span><span
                                                    class="text-danger fw-bold">Mumbai</span></div>
                                        </div>
                                        <a href="#"
                                            class="btn btn-outline-warning btn-sm border-0 text-decoration-none">☆</a>
                                    </div>
                                </div>
                                <div class="col-6 col-md-3 col-lg-2 text-center">
                                    <div class="text-muted small fw-semibold mb-1">Score</div>
                                    <div class="bg-light border rounded p-2 fw-bold text-dark">0 : 164</div>
                                </div>
                                <div class="col-6 col-md-6 col-lg-4">
                                    <div class="text-muted small text-center fw-semibold mb-2">1x2</div>
                                    <div class="row g-1">
                                        <div class="col-4"><a href="#"
                                                class="btn btn-secondary w-100 disabled text-decoration-none">🔒</a></div>
                                        <div class="col-4"><a href="#"
                                                class="btn btn-secondary w-100 disabled text-decoration-none">🔒</a></div>
                                        <div class="col-4"><a href="#"
                                                class="btn btn-secondary w-100 disabled text-decoration-none">🔒</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Upcoming Events -->
                <div class="d-flex justify-content-between align-items-center mb-3">
                    <h5 class="mb-0 fw-bold">Upcoming events</h5>
                    <div class="text-muted">&#94;</div>
                </div>

                <div class="card shadow-sm mb-4 border-0">
                    <div class="card-body p-2 p-md-3">
                        <!-- Mobile Layout -->
                        <div class="d-block d-md-none">
                            <div class="d-flex justify-content-between align-items-center mb-2">
                                <div>
                                    <div class="text-muted small fw-semibold">Today📡 09:44 AM</div>
                                    <div class="text-muted small">India / T20 Delhi Premier League</div>
                                </div>
                                <a href="#"
                                    class="btn btn-outline-warning btn-sm border-0 text-decoration-none">☆</a>
                            </div>
                            <div class="row g-2 align-items-center">
                                <div class="col-8">
                                    <div class="mb-2 d-flex align-items-center"><span class="me-2 fs-6">🏏</span><span
                                            class="text-success fw-bold">Kolkata</span></div>
                                    <div class="d-flex align-items-center"><span
                                            class="me-2 fs-6 text-danger">🏏</span><span
                                            class="text-danger fw-bold">Mumbai</span></div>
                                </div>
                                <div class="col-4 text-center">
                                    <div class="text-muted small fw-semibold mb-1">Score</div>
                                    <div class="bg-light border rounded p-1 fw-bold text-dark small">0 : 0</div>
                                </div>
                            </div>
                            <div class="mt-3">
                                <div class="text-muted small text-center fw-semibold mb-2">1x2</div>
                                <div class="row g-1">
                                    <div class="col-4"><a href="#"
                                            class="btn btn-success w-100 fw-bold small text-decoration-none">2</a></div>
                                    <div class="col-4"><a href="#"
                                            class="btn btn-secondary w-100 disabled text-decoration-none">🔒</a></div>
                                    <div class="col-4"><a href="#"
                                            class="btn btn-warning w-100 fw-bold small text-decoration-none">1</a></div>
                                </div>
                            </div>
                        </div>

                        <!-- Desktop Layout -->
                        <div class="d-none d-md-block">
                            <div class="row g-3 align-items-center">
                                <div class="col-12 col-sm-6 col-md-auto text-center text-md-start">
                                    <div class="text-muted small fw-semibold">Today📡</div>
                                    <div class="text-muted small">09:44 AM</div>
                                </div>
                                <div class="col-12 col-sm-6 col-md">
                                    <div class="text-muted small mb-2 fw-semibold">India / T20 Delhi Premier League</div>
                                    <div class="d-flex justify-content-between align-items-start">
                                        <div class="flex-grow-1">
                                            <div class="mb-2 d-flex align-items-center"><span
                                                    class="me-2 fs-6">🏏</span><span
                                                    class="text-success fw-bold">Kolkata</span></div>
                                            <div class="d-flex align-items-center"><span
                                                    class="me-2 fs-6 text-danger">🏏</span><span
                                                    class="text-danger fw-bold">Mumbai</span></div>
                                        </div>
                                        <a href="#"
                                            class="btn btn-outline-warning btn-sm border-0 text-decoration-none">☆</a>
                                    </div>
                                </div>
                                <div class="col-6 col-md-3 col-lg-2 text-center">
                                    <div class="text-muted small fw-semibold mb-1">Score</div>
                                    <div class="bg-light border rounded p-2 fw-bold text-dark">0 : 0</div>
                                </div>
                                <div class="col-6 col-md-6 col-lg-4">
                                    <div class="text-muted small text-center fw-semibold mb-2">1x2</div>
                                    <div class="row g-1">
                                        <div class="col-4"><a href="#"
                                                class="btn btn-success w-100 fw-bold small text-decoration-none">2</a>
                                        </div>
                                        <div class="col-4"><a href="#"
                                                class="btn btn-secondary w-100 disabled text-decoration-none">🔒</a></div>
                                        <div class="col-4"><a href="#"
                                                class="btn btn-warning w-100 fw-bold small text-decoration-none">1</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- View All Link -->
                <div class="text-center mt-3">
                    <a href="#" class="text-decoration-none fw-semibold text-primary">View all Cricket upcoming
                        events (22) »</a>
                </div>
            </div>
        </div>
    </div>
@endsection
