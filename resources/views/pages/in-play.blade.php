@extends('master')
@section('body')
<!-- Hero (desktop only) -->
          <div id="heroCarousel" class="carousel slide d-none d-md-block">
            <div class="carousel-indicators">
              <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="0" class="active" aria-label="Slide 1"></button>
              <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
              <button type="button" data-bs-target="#heroCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner rounded">
              <div class="carousel-item active" data-bs-interval="4000">
                <img src="https://picsum.photos/1400/300?1" class="d-block w-100" alt="Banner 1">
              </div>
              <div class="carousel-item" data-bs-interval="4000">
                <img src="https://picsum.photos/1400/300?2" class="d-block w-100" alt="Banner 2">
              </div>
              <div class="carousel-item" data-bs-interval="4000">
                <img src="https://picsum.photos/1400/300?3" class="d-block w-100" alt="Banner 3">
              </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#heroCarousel" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#heroCarousel" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>

          <!-- Tabs: Exchange / Sportsbook -->
          <div class="container-fluid px-0 mt-2">
            <div class="d-flex justify-content-center">
              <div class="btn-group" role="group" aria-label="Switch View">
                <button class="btn btn-info text-white fw-bold">EXCHANGE</button>
                <button class="btn btn-secondary fw-bold">SPORTSBOOK</button>
              </div>
            </div>
          </div>

          <!-- Sub Tabs -->
          <div class="container-fluid px-0 mt-2">
            <ul class="nav nav-pills gap-2">
              <li class="nav-item">
                <button class="nav-link active">In-Play</button>
              </li>
              <li class="nav-item">
                <button class="nav-link">Today</button>
              </li>
              <li class="nav-item">
                <button class="nav-link">Tomorrow</button>
              </li>
            </ul>
          </div>

          <!-- Matches Header -->
          <div class="container-fluid px-0 mt-2">
            <div class="d-flex justify-content-between align-items-center bg-dark text-white rounded px-2 py-2">
              <div class="d-flex align-items-center fw-bold">
                <span class="me-2">🏏</span>
                <span>Cricket</span>
              </div>
              <div class="d-flex gap-2">
                <button class="btn btn-outline-light btn-sm">LIVE</button>
                <button class="btn btn-outline-light btn-sm">VIRTUAL</button>
                <button class="btn btn-light btn-sm fw-semibold">PREMIUM</button>
              </div>
            </div>
          </div>

          <!-- Betting Grid -->
          <div class="container-fluid px-0 mt-2">
            <div class="table-responsive">
              <table class="table align-middle mb-0">
                <thead class="table-secondary d-none d-md-table-header-group">
                  <tr class="text-center">
                    <th class="text-start">Match</th>
                    <th>1</th>
                    <th>X</th>
                    <th>2</th>
                  </tr>
                </thead>
                <tbody class="bg-white">

                  <!-- Row 1 -->
                  <tr>
                    <td>
                      <div class="d-flex gap-2">
                        <span class="badge text-bg-danger">LIVE</span>
                        <div>
                          <div class="d-flex align-items-center gap-2 small text-secondary">
                            <span class="fw-semibold text-dark">In-Play</span>
                            <span class="badge text-bg-light">B</span>
                            <span class="badge text-bg-light">F</span>
                            <span class="text-muted">08/05/2025 05:30</span>
                          </div>
                          <div class="fw-semibold">The Hundred - Womens</div>
                        </div>
                      </div>
                    </td>
                    <td class="text-center d-none d-md-table-cell">
                      <div class="btn-group w-100">
                        <button class="btn btn-sm btn-info text-dark fw-bold">1.85</button>
                        <button class="btn btn-sm btn-warning fw-bold">1.90</button>
                      </div>
                    </td>
                    <td class="text-center d-none d-md-table-cell">
                      <div class="btn-group w-100">
                        <button class="btn btn-sm btn-info text-dark fw-bold">-</button>
                        <button class="btn btn-sm btn-warning fw-bold">-</button>
                      </div>
                    </td>
                    <td class="text-center d-none d-md-table-cell">
                      <div class="btn-group w-100">
                        <button class="btn btn-sm btn-info text-dark fw-bold">2.15</button>
                        <button class="btn btn-sm btn-warning fw-bold">2.20</button>
                      </div>
                    </td>
                  </tr>

                  <!-- Row 2 -->
                  <tr>
                    <td>
                      <div class="d-flex gap-2">
                        <span class="badge text-bg-success">LIVE</span>
                        <div>
                          <div class="d-flex align-items-center gap-2 small text-secondary">
                            <span class="fw-semibold text-dark">In-Play</span>
                            <span class="badge text-bg-light">B</span>
                            <span class="badge text-bg-light">F</span>
                            <span class="text-muted">05/08/2025 23:00</span>
                          </div>
                          <div class="fw-semibold">The Hundred</div>
                        </div>
                      </div>
                    </td>
                    <td class="text-center d-none d-md-table-cell">
                      <div class="btn-group w-100">
                        <button class="btn btn-sm btn-info text-dark fw-bold">1.65</button>
                        <button class="btn btn-sm btn-warning fw-bold">1.70</button>
                      </div>
                    </td>
                    <td class="text-center d-none d-md-table-cell">
                      <div class="btn-group w-100">
                        <button class="btn btn-sm btn-info text-dark fw-bold">-</button>
                        <button class="btn btn-sm btn-warning fw-bold">-</button>
                      </div>
                    </td>
                    <td class="text-center d-none d-md-table-cell">
                      <div class="btn-group w-100">
                        <button class="btn btn-sm btn-info text-dark fw-bold">2.35</button>
                        <button class="btn btn-sm btn-warning fw-bold">2.40</button>
                      </div>
                    </td>
                  </tr>

                  <!-- Row 3 -->
                  <tr>
                    <td>
                      <div class="d-flex gap-2">
                        <span class="badge text-bg-danger">LIVE</span>
                        <div>
                          <div class="d-flex align-items-center gap-2 small text-secondary">
                            <span class="fw-semibold text-dark">In-Play</span>
                            <span class="badge text-bg-light">B</span>
                            <span class="badge text-bg-light">F</span>
                            <span class="text-muted">11:30</span>
                          </div>
                          <div class="fw-semibold">West Indies SRL V England SRL</div>
                        </div>
                      </div>
                    </td>
                    <td class="text-center d-none d-md-table-cell">
                      <div class="btn-group w-100">
                        <button class="btn btn-sm btn-info text-dark fw-bold">1.75</button>
                        <button class="btn btn-sm btn-warning fw-bold">1.80</button>
                      </div>
                    </td>
                    <td class="text-center d-none d-md-table-cell">
                      <div class="btn-group w-100">
                        <button class="btn btn-sm btn-info text-dark fw-bold">-</button>
                        <button class="btn btn-sm btn-warning fw-bold">-</button>
                      </div>
                    </td>
                    <td class="text-center d-none d-md-table-cell">
                      <div class="btn-group w-100">
                        <button class="btn btn-sm btn-info text-dark fw-bold">2.05</button>
                        <button class="btn btn-sm btn-warning fw-bold">2.10</button>
                      </div>
                    </td>
                  </tr>

                  <!-- Row 4 -->
                  <tr>
                    <td>
                      <div class="d-flex gap-2">
                        <span class="badge text-bg-danger">LIVE</span>
                        <div>
                          <div class="d-flex align-items-center gap-2 small text-secondary">
                            <span class="fw-semibold text-dark">In-Play</span>
                            <span class="badge text-bg-light">B</span>
                            <span class="badge text-bg-light">F</span>
                            <span class="badge text-bg-light">G</span>
                            <span class="text-muted">11:50</span>
                          </div>
                          <div class="fw-semibold">WEST INDIES T10 VS PAKISTAN T10</div>
                        </div>
                      </div>
                    </td>
                    <td class="text-center d-none d-md-table-cell">
                      <div class="btn-group w-100">
                        <button class="btn btn-sm btn-info text-dark fw-bold">1.95</button>
                        <button class="btn btn-sm btn-warning fw-bold">2.00</button>
                      </div>
                    </td>
                    <td class="text-center d-none d-md-table-cell">
                      <div class="btn-group w-100">
                        <button class="btn btn-sm btn-info text-dark fw-bold">-</button>
                        <button class="btn btn-sm btn-warning fw-bold">-</button>
                      </div>
                    </td>
                    <td class="text-center d-none d-md-table-cell">
                      <div class="btn-group w-100">
                        <button class="btn btn-sm btn-info text-dark fw-bold">1.85</button>
                        <button class="btn btn-sm btn-warning fw-bold">1.90</button>
                      </div>
                    </td>
                  </tr>

                  <!-- Row 5 -->
                  <tr>
                    <td>
                      <div class="d-flex gap-2">
                        <span class="badge text-bg-success">LIVE</span>
                        <div>
                          <div class="d-flex align-items-center gap-2 small text-secondary">
                            <span class="fw-semibold text-dark">In-Play</span>
                            <span class="badge text-bg-light">B</span>
                            <span class="badge text-bg-light">F</span>
                            <span class="badge text-bg-light">G</span>
                            <span class="text-muted">12:00</span>
                          </div>
                          <div class="fw-semibold">INDIA T10 VS PAKISTAN T10</div>
                        </div>
                      </div>
                    </td>
                    <td class="text-center d-none d-md-table-cell">
                      <div class="btn-group w-100">
                        <button class="btn btn-sm btn-info text-dark fw-bold">1.55</button>
                        <button class="btn btn-sm btn-warning fw-bold">1.60</button>
                      </div>
                    </td>
                    <td class="text-center d-none d-md-table-cell">
                      <div class="btn-group w-100">
                        <button class="btn btn-sm btn-info text-dark fw-bold">-</button>
                        <button class="btn btn-sm btn-warning fw-bold">-</button>
                      </div>
                    </td>
                    <td class="text-center d-none d-md-table-cell">
                      <div class="btn-group w-100">
                        <button class="btn btn-sm btn-info text-dark fw-bold">2.45</button>
                        <button class="btn btn-sm btn-warning fw-bold">2.50</button>
                      </div>
                    </td>
                  </tr>

                </tbody>
              </table>
            </div>
          </div>
        </div>

        <!-- Right Sidebar (desktop only) -->
        <aside class="col-12 col-md-3 col-lg-3 d-none d-md-block">
          <div class="card">
            <div class="card-body">
              <h6 class="card-title mb-2 fw-bold">Open Bets</h6>
              <p class="text-secondary small mb-0">No open bets available</p>
            </div>
          </div>
        </aside>
      </div>
    </div>
@endsection