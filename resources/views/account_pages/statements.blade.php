@extends('master')

@section('body')
    <div class="main-container bg-white rounded shadow">
        <!-- Header -->
        <div class="header text-white p-3 d-flex justify-content-between align-items-center rounded-top">
            <button class="back-btn text-white px-2 py-1 rounded" style="font-size: 10px;">BACK</button>
            <div class="balance-info px-2 py-1 rounded-pill" style="font-size: 14px;">Account Statement</div>
        </div>

        <!-- Filter Form -->
        <div class="p-3">
            <h6 class="fw-semibold text-dark mb-3" style="font-size: 13px;">Filter Your Statement</h6>

            <form method="GET" action="">
                <div class="row g-2 mb-3 align-items-end">
                    <!-- From Date -->
                    <div class="col-md-6">
                        <label for="from_date" class="form-label" style="font-size: 12px;">From Date</label>
                        <input type="date" class="form-control" id="from_date" name="from_date"
                            value="{{ request('from_date') ?? date('Y-m-d') }}" style="font-size: 12px;">
                    </div>

                    <!-- To Date -->
                    <div class="col-md-6">
                        <label for="to_date" class="form-label" style="font-size: 12px;">To Date</label>
                        <input type="date" class="form-control" id="to_date" name="to_date"
                            value="{{ request('to_date') ?? date('Y-m-d') }}" style="font-size: 12px;">
                    </div>

                    <!-- Type -->
                    <div class="col-md-6">
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
                    <div class="col-md-6">
                        <button type="submit" class="btn btn-submit text-white w-100" style="font-size: 11px;">
                            Get Statement
                        </button>
                    </div>
                </div>

            </form>
        </div>

        <!-- Table Section -->
        <div class="table-container rounded">
            <div class="table-wrapper">
                <div class="table-header text-white text-center py-0" style="font-size: 10px;">
                    <div class="row g-1 mx-0">
                        <div class="col">NO</div>
                        <div class="col">DATE</div>
                        <div class="col">AMOUNT</div>
                        <div class="col">COMMISSION</div>
                        <div class="col">TOTAL</div>
                        <div class="col">BALANCE</div>
                        <div class="col">DESCRIPTION</div>
                        <div class="col">DETAILS</div>
                    </div>
                </div>
                <div class="table-content">
                    <div class="text-center py-3 text-muted fst-italic" style="font-size: 11px;">No Data Found</div>
                </div>
            </div>
        </div>
    </div>
@endsection
