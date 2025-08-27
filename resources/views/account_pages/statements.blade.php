@extends('master')

@section('body')
    <div class="container mt-5" style="max-width: 800px;">
        <div class="card shadow-sm">
            <div class="card-header bg-dark text-white">
                <h5 class="mb-0">Account Statement Filter</h5>
            </div>
            <div class="card-body">
                <form method="GET" action="">
                    <div class="row g-3">
                        <div class="col-md-6">
                            <label for="from_date" class="form-label">From Date</label>
                            <input type="date" class="form-control" id="from_date" name="from_date"
                                value="{{ request('from_date') ?? date('Y-m-d') }}">
                        </div>
                        <div class="col-md-6">
                            <label for="to_date" class="form-label">To Date</label>
                            <input type="date" class="form-control" id="to_date" name="to_date"
                                value="{{ request('to_date') ?? date('Y-m-d') }}">
                        </div>
                        <div class="col-md-8">
                            <label for="type" class="form-label">Transaction Type</label>
                            <select class="form-select" id="type" name="type">
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
                            </select>
                        </div>
                        <div class="col-md-4 d-flex align-items-end">
                            <button type="submit" class="btn btn-dark w-100">Get Statement</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>

        <div class="card shadow-sm mt-4">
            <div class="card-header bg-dark text-white">
                <h5 class="mb-0">Account Statement</h5>
            </div>
            <div class="card-body p-2">
                <div class="table-responsive">
                    <table class="table table-bordered table-hover table-sm mb-0" style="min-width: 900px;">
                        <thead class="table-dark">
                            <tr class="text-center">
                                <th>NO</th>
                                <th>DATE</th>
                                <th>AMOUNT</th>
                                <th>COMMISSION</th>
                                <th>TOTAL</th>
                                <th>BALANCE</th>
                                <th>DESCRIPTION</th>
                                <th>DETAILS</th>
                            </tr>
                        </thead>
                        <tbody class="text-center">
                            <tr>
                                <td colspan="8" class="text-muted">No Data Found</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
