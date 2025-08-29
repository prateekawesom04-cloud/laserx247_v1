@extends('master')

@section('body')
    <div class="main-container bg-white rounded shadow">
        <!-- Header -->
        <div class="header text-white p-3 d-flex justify-content-between align-items-center rounded-top">
            <button class="back-btn text-white px-2 py-1 rounded" style="font-size: 10px;">BACK</button>
            <div class="balance-info px-2 py-1 rounded-pill" style="font-size: 14px;">Min: 100 Max: 50000</div>
        </div>

        <!-- Radio Section -->
        <div class="radio-section p-3 border-bottom">
            <div class="d-flex justify-content-center gap-4">
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="transaction_type" id="deposit" value="deposit"
                        checked>
                    <label class="form-check-label fw-medium" for="deposit" style="font-size: 13px;">Deposit</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="transaction_type" id="withdrawal"
                        value="withdrawal">
                    <label class="form-check-label fw-medium" for="withdrawal" style="font-size: 13px;">Withdrawal</label>
                </div>
            </div>
        </div>

        <!-- Deposit Section -->
        <div class="p-3 deposit-section" id="depositSection">
            <h6 class="fw-semibold text-dark mb-3" style="font-size: 13px;">Enter Deposit Amount</h6>

            <input type="number" class="form-control mb-3" id="depositAmount" placeholder="Enter amount..." min="100"
                max="50000" style="font-size: 12px;">

            <div class="row g-2 mb-3">
                <div class="col-6"><button class="amount-btn btn text-white w-100" data-amount="300"
                        style="font-size: 12px;">300</button></div>
                <div class="col-6"><button class="amount-btn btn text-white w-100" data-amount="500"
                        style="font-size: 12px;">500</button></div>
                <div class="col-6"><button class="amount-btn btn text-white w-100" data-amount="1000"
                        style="font-size: 12px;">1000</button></div>
                <div class="col-6"><button class="amount-btn btn text-white w-100" data-amount="2000"
                        style="font-size: 12px;">2000</button></div>
            </div>

            <div class="row g-2 mb-3">
                <div class="col-6"><button class="btn btn-edit text-white w-100" style="font-size: 11px;">📝 Edit
                        Stake</button></div>
                <div class="col-6"><button class="btn btn-submit text-white w-100" style="font-size: 11px;">SUBMIT</button>
                </div>
            </div>

            <div class="table-container rounded">
                <div class="table-wrapper">
                    <div class="table-header text-white text-center py-0" style="font-size: 10px;">
                        <div class="row g-1 mx-0">
                            <div class="col">PAYMENT TYPE</div>
                            <div class="col">AMOUNT</div>
                            <div class="col">STATUS</div>
                            <div class="col">DATE</div>
                            <div class="col">PAYMENT METHOD</div>
                            <div class="col">TRANSACTION NO</div>
                            <div class="col">UTR NO</div>
                            <div class="col">REASON</div>
                        </div>
                    </div>
                    <div class="table-content">
                        <div class="text-center py-3 text-muted fst-italic" style="font-size: 11px;">No data found!</div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Withdrawal Section -->
        <div class="p-3 withdrawal-section" id="withdrawalSection">
            <div class="d-flex justify-content-between align-items-center mb-3">
                <h6 class="fw-semibold text-dark mb-0" style="font-size: 13px;">Add Account To Withdraw...</h6>
                <button class="btn btn-success btn-sm" style="font-size: 10px;">ADD ACCOUNT</button>
            </div>

            <div class="table-container rounded">
                <div class="table-wrapper">
                    <div class="table-header text-white text-center py-0" style="font-size: 10px;">
                        <div class="row g-1 mx-0">
                            <div class="col">PAYMENT TYPE</div>
                            <div class="col">AMOUNT</div>
                            <div class="col">STATUS</div>
                            <div class="col">DATE</div>
                            <div class="col">PAYMENT METHOD</div>
                            <div class="col">TRANSACTION NO</div>
                            <div class="col">UTR NO</div>
                            <div class="col">REASON</div>
                        </div>
                    </div>
                    <div class="table-content">
                        <div class="text-center py-3 text-muted fst-italic" style="font-size: 11px;">No data found!</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
