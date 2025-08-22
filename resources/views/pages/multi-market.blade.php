@extends('master')
@section('body')
    <!-- Sidebar -->
    <div class="d-flex" style="font-family: Calibri, 'Trebuchet MS'; min-height: 100vh;">
        <aside class="bg-light border p-2" style="width:250px; font-family: Calibri, 'Trebuchet MS';">
            <div class="accordion" id="sportsAccordion">

                <!-- Cricket -->
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingCricket">
                        <a href="javascript:void(0)" class="accordion-button collapsed py-2" data-bs-toggle="collapse"
                            data-bs-target="#collapseCricket" aria-expanded="false" aria-controls="collapseCricket">
                            Cricket
                        </a>
                    </h2>
                    <div id="collapseCricket" class="accordion-collapse collapse" data-bs-parent="#sportsAccordion">
                        <div class="accordion-body p-2">
                            <!-- Match data will load here -->
                        </div>
                    </div>
                </div>

                <!-- Football -->
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingFootball">
                        <a href="javascript:void(0)" class="accordion-button collapsed py-2" data-bs-toggle="collapse"
                            data-bs-target="#collapseFootball" aria-expanded="false" aria-controls="collapseFootball">
                            Football
                        </a>
                    </h2>
                    <div id="collapseFootball" class="accordion-collapse collapse" data-bs-parent="#sportsAccordion">
                        <div class="accordion-body p-2">
                            Football Dummy API Content
                        </div>
                    </div>
                </div>

                <!-- Tennis -->
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingTennis">
                        <a href="javascript:void(0)" class="accordion-button collapsed py-2" data-bs-toggle="collapse"
                            data-bs-target="#collapseTennis" aria-expanded="false" aria-controls="collapseTennis">
                            Tennis
                        </a>
                    </h2>
                    <div id="collapseTennis" class="accordion-collapse collapse" data-bs-parent="#sportsAccordion">
                        <div class="accordion-body p-2">
                            Tennis Dummy API Content
                        </div>
                    </div>
                </div>

                <!-- Horse Racing -->
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingHorse">
                        <a href="javascript:void(0)" class="accordion-button collapsed py-2" data-bs-toggle="collapse"
                            data-bs-target="#collapseHorse" aria-expanded="false" aria-controls="collapseHorse">
                            Horse Racing
                        </a>
                    </h2>
                    <div id="collapseHorse" class="accordion-collapse collapse" data-bs-parent="#sportsAccordion">
                        <div class="accordion-body p-2">
                            Horse Racing Dummy API Content
                        </div>
                    </div>
                </div>

                <!-- Greyhound Racing -->
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingGreyhound">
                        <a href="javascript:void(0)" class="accordion-button collapsed py-2" data-bs-toggle="collapse"
                            data-bs-target="#collapseGreyhound" aria-expanded="false" aria-controls="collapseGreyhound">
                            Greyhound Racing
                        </a>
                    </h2>
                    <div id="collapseGreyhound" class="accordion-collapse collapse" data-bs-parent="#sportsAccordion">
                        <div class="accordion-body p-2">
                            Greyhound Racing Dummy API Content
                        </div>
                    </div>
                </div>

                <!-- Binary -->
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingBinary">
                        <a href="javascript:void(0)" class="accordion-button collapsed py-2" data-bs-toggle="collapse"
                            data-bs-target="#collapseBinary" aria-expanded="false" aria-controls="collapseBinary">
                            Binary
                        </a>
                    </h2>
                    <div id="collapseBinary" class="accordion-collapse collapse" data-bs-parent="#sportsAccordion">
                        <div class="accordion-body p-2">
                            Binary Dummy API Content
                        </div>
                    </div>
                </div>

                <!-- Basketball -->
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingBasketball">
                        <a href="javascript:void(0)" class="accordion-button collapsed py-2" data-bs-toggle="collapse"
                            data-bs-target="#collapseBasketball" aria-expanded="false" aria-controls="collapseBasketball">
                            Basketball
                        </a>
                    </h2>
                    <div id="collapseBasketball" class="accordion-collapse collapse" data-bs-parent="#sportsAccordion">
                        <div class="accordion-body p-2">
                            Basketball Dummy API Content
                        </div>
                    </div>
                </div>

                <!-- Baseball -->
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingBaseball">
                        <a href="javascript:void(0)" class="accordion-button collapsed py-2" data-bs-toggle="collapse"
                            data-bs-target="#collapseBaseball" aria-expanded="false" aria-controls="collapseBaseball">
                            Baseball
                        </a>
                    </h2>
                    <div id="collapseBaseball" class="accordion-collapse collapse" data-bs-parent="#sportsAccordion">
                        <div class="accordion-body p-2">
                            Baseball Dummy API Content
                        </div>
                    </div>
                </div>

                <!-- Table Tennis -->
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingTableTennis">
                        <a href="javascript:void(0)" class="accordion-button collapsed py-2" data-bs-toggle="collapse"
                            data-bs-target="#collapseTableTennis" aria-expanded="false"
                            aria-controls="collapseTableTennis">
                            Table Tennis
                        </a>
                    </h2>
                    <div id="collapseTableTennis" class="accordion-collapse collapse" data-bs-parent="#sportsAccordion">
                        <div class="accordion-body p-2">
                            Table Tennis Dummy API Content
                        </div>
                    </div>
                </div>

                <!-- Volleyball -->
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingVolleyball">
                        <a href="javascript:void(0)" class="accordion-button collapsed py-2" data-bs-toggle="collapse"
                            data-bs-target="#collapseVolleyball" aria-expanded="false"
                            aria-controls="collapseVolleyball">
                            Volleyball
                        </a>
                    </h2>
                    <div id="collapseVolleyball" class="accordion-collapse collapse" data-bs-parent="#sportsAccordion">
                        <div class="accordion-body p-2">
                            Volleyball Dummy API Content
                        </div>
                    </div>
                </div>

                <!-- Darts -->
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingDarts">
                        <a href="javascript:void(0)" class="accordion-button collapsed py-2" data-bs-toggle="collapse"
                            data-bs-target="#collapseDarts" aria-expanded="false" aria-controls="collapseDarts">
                            Darts
                        </a>
                    </h2>
                    <div id="collapseDarts" class="accordion-collapse collapse" data-bs-parent="#sportsAccordion">
                        <div class="accordion-body p-2">
                            Darts Dummy API Content
                        </div>
                    </div>
                </div>

                <!-- Futsal -->
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingFutsal">
                        <a href="javascript:void(0)" class="accordion-button collapsed py-2" data-bs-toggle="collapse"
                            data-bs-target="#collapseFutsal" aria-expanded="false" aria-controls="collapseFutsal">
                            Futsal
                        </a>
                    </h2>
                    <div id="collapseFutsal" class="accordion-collapse collapse" data-bs-parent="#sportsAccordion">
                        <div class="accordion-body p-2">
                            Futsal Dummy API Content
                        </div>
                    </div>
                </div>

            </div>
        </aside>

        <!-- Main Content -->
        <main class="flex-grow-1">
            <!-- News Bar -->
            <div class="bg-dark text-white p-1 mb-1">
                <div class="d-flex align-items-center w-100">
                    <div class="pe-2">🎤 News</div>
                    <div class="flex-grow-1">
                        <marquee behavior="scroll" direction="left">
                            🏏 CPL 2025 , THE HUNDRED MENS & WOMENS 2025 SPECIAL CUP WINNER🏆 AND FANCY MARKET STARTED IN
                            OUR EXCHANGE 🏏 PLAY NOW!
                        </marquee>
                    </div>
                </div>
            </div>


            <!-- Match 1 -->
            <div>
                <!-- Match Header -->
                <div class="bg-dark text-white px-2 py-1 d-flex justify-content-between align-items-center border-bottom">
                    <span>🎮 WEST INDIES T10 VS SOUTH AFRICA T10</span>
                    <button class="btn btn-sm btn-outline-light py-0 px-1">→</button>
                </div>

                <!-- Match Odds Header -->
                <div class="bg-success text-white px-2 py-1 d-flex align-items-center border-bottom">
                    <span class="me-1">📈</span>
                    <span>MATCH ODDS</span>
                    <span class="ms-1">ℹ️</span>
                </div>

                <!-- Betting Table -->
                <table class="table table-bordered mb-0 table-sm">
                    <thead>
                        <tr class="table-light">
                            <th class="text-start border-end p-1"></th>
                            <th colspan="2" class="text-center bg-info text-white border-end p-1">Back</th>
                            <th colspan="2" class="text-center bg-danger text-white border-end p-1">Lay</th>
                            <th class="text-center p-1">Min/Max</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="text-start border-end p-1">Dummy Runner</td>
                            <td class="text-center border-end p-1">-</td>
                            <td class="text-center border-end p-1">-</td>
                            <td class="text-center border-end p-1">-</td>
                            <td class="text-center border-end p-1">-</td>
                            <td class="text-center p-1">-</td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <!-- Match 2 -->
            <div>
                <!-- Match Header -->
                <div class="bg-dark text-white px-2 py-1 d-flex justify-content-between align-items-center border-bottom">
                    <span>🎮 MULTAN SULTANS SUPER OVER VS LAHORE QALANDARS SUPER OVER</span>
                    <button class="btn btn-sm btn-outline-light py-0 px-1">→</button>
                </div>

                <!-- Match Odds Header -->
                <div class="bg-success text-white px-2 py-1 d-flex align-items-center border-bottom">
                    <span class="me-1">📈</span>
                    <span>MATCH ODDS</span>
                    <span class="ms-1">ℹ️</span>
                </div>

                <!-- Betting Table -->
                <table class="table table-bordered mb-0 table-sm">
                    <thead>
                        <tr class="table-light">
                            <th class="text-start border-end p-1"></th>
                            <th colspan="2" class="text-center bg-info text-white border-end p-1">Back</th>
                            <th colspan="2" class="text-center bg-danger text-white border-end p-1">Lay</th>
                            <th class="text-center p-1">Min/Max</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="text-start border-end p-1">Dummy Runner</td>
                            <td class="text-center border-end p-1">-</td>
                            <td class="text-center border-end p-1">-</td>
                            <td class="text-center border-end p-1">-</td>
                            <td class="text-center border-end p-1">-</td>
                            <td class="text-center p-1">-</td>
                        </tr>
                    </tbody>
                </table>
            </div>

        </main>
    </div>
@endsection
