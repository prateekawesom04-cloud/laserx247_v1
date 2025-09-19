@extends('super-master')

@section('body')
    <div class="main-container rounded shadow mt-4">
        <!-- Header -->
        <div
            class="modal-header-dark header text-white p-3 d-flex justify-content-center align-items-center rounded-top border-bottoms">
            <div class="px-2 py-1 text-center rounded-pill fw-semibold">Filter Your Profit/Loss Statement</div>
        </div>

        <!-- Filter Form -->
        <div class="modal-body-dark p-3">
            <form method="GET" action="">
                <div class="row g-0 mb-3 align-items-end form-group-button">
                    <!-- From Date -->

                    <div class="col-5 mb-2 mx-auto">
                        <label for="from_date" class="form-label" style="font-size: 12px;">From Date</label>
                        <input type="date" class="form-control" id="from_date" name="from_date"
                            value="{{ request('from_date') ?? date('Y-m-d') }}" style="font-size: 12px;">
                    </div>

                    <!-- To Date -->
                    <div class="col-5 mb-2 mx-auto">
                        <label for="to_date" class="form-label" style="font-size: 12px;">To Date</label>
                        <input type="date" class="form-control" id="to_date" name="to_date"
                            value="{{ request('to_date') ?? date('Y-m-d') }}" style="font-size: 12px;">
                    </div>

                    <!-- Type -->
                    <div class="col-5 mb-2 mx-auto">
                        <label for="type" class="form-label" style="font-size: 12px;">Type</label>
                        <select class="form-select" id="type" name="type" style="font-size: 12px;">
                            <option value="all">All</option>
                            <option value="cricket">Cricket</option>
                            <option value="football">Football</option>
                            <option value="tennis">Tennis</option>
                            <option value="deposit_withdraw">Deposit/Withdraw</option>
                            <option value="matka">Matka</option>
                            <option value="casino">Casino</option>
                            <option value="sportsbook">Sportsbook</option>
                            <option value="premium">Premium</option>
                            <option value="virtual_sports">Virtual Sports</option>
                            <option value="fantasy_cricket">Fantasy Cricket</option>
                            <option value="esports">Esports</option>
                            <option value="mixed_martial_arts">Mixed-Martial-Arts</option>
                            <option value="gaelic_games">Gaelic-Games</option>
                            <option value="volleyball">Volleyball</option>
                            <option value="handball">Handball</option>
                            <option value="australian_rules">Australian-Rules</option>
                            <option value="ice_hockey">Ice-Hockey</option>
                            <option value="basketball">Basketball</option>
                            <option value="baseball">Baseball</option>
                            <option value="american_football">American-Football</option>
                            <option value="snooker">Snooker</option>
                            <option value="table_tannis">Table-Tannis</option>
                            <option value="fifa_world_cup">Fifa-World-Cup</option>
                            <option value="winner_cup">Winner-Cup</option>
                            <option value="election">Election</option>
                            <option value="kabaddi">Kabaddi</option>
                        </select>

                    </div>
                    <div class="col-5 mb-2 mx-auto">
                        <a type="submit" class="btn btn-submit text-white w-100" style="font-size: 11px;">
                            Get Profit/Loss
                        </a>
                    </div>
                </div>

            </form>
        </div>
        <div class="d-flex justify-content-between align-items-center px-3 py-2"
            style="background-color: #1d2125; color: white; font-size: 14px;">
            <div class="balance-info">Profit/Loss</div>
            <div class="total-pl">Total P/L: ₹ 0.00</div>
        </div>

        <!-- Table Section -->
        <div class="table-container">
            <div class="table-wrapper">
                <div class="table-header text-white text-center py-0" style="font-size: 10px;">
                    <div class="row g-1 mx-0">
                        <div class="col">NO</div>
                        <div class="col">DATE</div>
                        <div class="col">AMOUNT</div>
                        <div class="col">COMMISSION</div>
                        <div class="col">TOTAL</div>
                        <div class="col">EVENT</div>
                    </div>
                </div>
                <div class="table-content">
                    <div class="text-center py-3 text-white fst-italic" style="font-size: 11px;">No Data Found</div>
                </div>
            </div>
        </div>
    </div>
@endsection
