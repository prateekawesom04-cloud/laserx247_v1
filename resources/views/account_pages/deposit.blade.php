@extends('super-master')

@section('body')
    <div class="main-container app_content rounded shadow mt-4 deposit-page-container">
        <!-- Header -->
        <div class="d-flex justify-content-between modal-header-dark align-items-center p-3 border-bottom">
            <span class="px-2 py-1 rounded fw-semibold">Deposit</span>
            <div id="balanceInfo" class="px-2 py-1 rounded-pill" style="font-size: 14px;">Min: 200 Max: 50000</div>
        </div>

        <!-- Deposit Section -->
        <div class="modal-body-dark p-3" id="deposit-section">
            <h6 class="fw-semibold mb-3" style="font-size: 13px;">Amount</h6>
            <div class="row g-2 mb-3">
                <div class="col-12">
                    <input type="text" class="form-control" id="depositAmount" placeholder="Enter amount..."
                        style="font-size: 13px;">
                </div>
            </div>
            <div class="row g-2 mb-3">
                @foreach ([300, 500, 1000, 2000] as $amount)
                    <div class="col-5 mb-2 mx-auto">
                        <a class="amount-btn btn btn-dark w-100 text-white" data-amount="{{ $amount }}"
                            style="font-size: 12px;">{{ $amount }}</a>
                    </div>
                @endforeach
            </div>
            <div class="row g-2 mb-3">
                <div class="col-12">
                    <a href="javascript:void(0)" class="btn btn-success text-white w-100 btn-submit"
                        style="font-size: 13px;">SUBMIT</a>
                </div>
            </div>

            <!-- Table Section -->
            <div class="table-responsive rounded mt-4" style="white-space: nowrap;">
                <table class="table table-bordered text-white mb-0">
                    <thead class="text-center">
                        <tr>
                            <th>Payment Type</th>
                            <th>Amount</th>
                            <th>Status</th>
                            <th>Date</th>
                            <th>Transaction No</th>
                            <th>Reason</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if (count($data) > 0)
                            @foreach ($data as $value)
                                <tr class="text-center" style="background-color: #3e3e3e;">
                                    <td>{{ $value->payment_type ? 'Withdraw' : 'Deposit' }}</td>
                                    <td>{{ $value->transfer_amount }}</td>
                                    <td>{{ $value->status == 2 ? 'Success' : 'Processing' }}</td>
                                    <td>{{ \Carbon\Carbon::parse($value->created_at)->format('d M Y') }}</td>
                                    <td style="word-break: break-word;">{{ $value->order_sn }}</td>
                                    <td>{{ $value->remark }}</td>
                                </tr>
                            @endforeach
                        @else
                            <tr>
                                <td colspan="6" class="text-center text-white">No Data Found</td>
                            </tr>
                        @endif
                    </tbody>
                </table>
            </div>
        </div>

        <!-- New Section After Submit -->
        <div class="modal-body-dark p-3 d-none" id="new-section">
            <!-- Scrollable Cards -->
            <div class="deposit-page-card-scroll-wrapper mb-3">
                <div class="deposit-page-scrollable-cards">
                    <div class="deposit-page-payment-card tab-btn active" data-tab="whatsapp">
                        <div class="deposit-page-card-title">WhatsApp <br>Deposit</div>
                        <img src="https://img.icons8.com/color/48/000000/whatsapp.png" class="deposit-page-card-icon" />
                    </div>
                    <div class="deposit-page-payment-card tab-btn" data-tab="account">
                        <div class="deposit-page-card-title">Account</div>
                        <img src="https://img.icons8.com/color/48/000000/bank.png" class="deposit-page-card-icon" />
                    </div>
                    <div class="deposit-page-payment-card tab-btn" data-tab="upi">
                        <div class="deposit-page-card-title">UPI</div>
                        <img src="https://img.icons8.com/color/48/000000/google-pay-india.png"
                            class="deposit-page-card-icon" />
                    </div>
                </div>
            </div>

            <!-- Tab Content -->
            <div class="deposit-page-tab-content-area">

                <!-- WhatsApp Tab -->
                <div id="whatsapp-tab" class="deposit-page-tab-content-box">
                    <div class="bg-dark p-3 rounded text-white">
                        <p>For WhatsApp deposit, contact support via WhatsApp.</p>
                    </div>
                </div>

                <!-- Account Tab -->
                <div id="account-tab" class="deposit-page-tab-content-box deposit-page-d-none">
                    <div class="bg-dark p-3 rounded text-white">
                        <div class="deposit-page-info-row">
                            <span>Bank Name:</span>
                            <span class="deposit-page-value">Kotur Viyas bnk</span>
                            <a class="deposit-page-copy-btn" data-copy="..."><i class="fa-regular fa-copy"></i></a>
                        </div>
                        <hr class="deposit-page-divider">
                        <div class="deposit-page-info-row">
                            <span>A/C No:</span>
                            <span class="deposit-page-value">131304000000001</span>
                            <a class="deposit-page-copy-btn" data-copy="..."><i class="fa-regular fa-copy"></i></a>
                        </div>
                        <hr class="deposit-page-divider">
                        <div class="deposit-page-info-row">
                            <span>IFSC Code:</span>
                            <span class="deposit-page-value">KVBL0001313</span>
                            <a class="deposit-page-copy-btn" data-copy="..."><i class="fa-regular fa-copy"></i></a>
                        </div>
                        <hr class="deposit-page-divider">
                        <div class="deposit-page-info-row">
                            <span>Account Name:</span>
                            <span class="deposit-page-value">Mr Hinson mohammed</span>
                            <a class="deposit-page-copy-btn" data-copy="..."><i class="fa-regular fa-copy"></i></a>
                        </div>
                        <hr class="deposit-page-divider">
                        <div class="deposit-page-info-row"><span>Min Amount:</span><span
                                class="deposit-page-value">300</span></div>
                        <hr class="deposit-page-divider">
                        <div class="deposit-page-info-row"><span>Max Amount:</span><span
                                class="deposit-page-value">100000</span></div>
                    </div>
                </div>

                <!-- UPI Tab -->
                <div id="upi-tab" class="deposit-page-tab-content-box deposit-page-d-none">
                    <div class="bg-dark p-3 rounded text-white">
                        <div class="deposit-page-info-row">
                            <span>Name:</span>
                            <span class="deposit-page-value">Rahul Sharma</span>
                            <a class="deposit-page-copy-btn" data-copy="..."><i class="fa-regular fa-copy"></i></a>
                        </div>
                        <hr class="deposit-page-divider">
                        <div class="deposit-page-info-row">
                            <span>UPI ID:</span>
                            <span class="deposit-page-value">rahul@upi</span>
                            <a class="deposit-page-copy-btn" data-copy="..."><i class="fa-regular fa-copy"></i></a>
                        </div>
                        <hr class="deposit-page-divider">
                        <div class="deposit-page-info-row"><span>Min Amount:</span><span
                                class="deposit-page-value">200</span></div>
                        <hr class="deposit-page-divider">
                        <div class="deposit-page-info-row"><span>Max Amount:</span><span
                                class="deposit-page-value">100000</span></div>
                        <hr class="deposit-page-divider">
                        <div class="text-center mt-2">
                            <img src="https://api.qrserver.com/v1/create-qr-code/?data=rahul@upi&size=120x120"
                                alt="QR Code" class="img-fluid rounded">
                        </div>
                    </div>
                </div>
            </div>

            <div class="row gx-3 mt-3 mb-3">
                <!-- Common Section (col-12) -->
                <div class="col-12 mb-3">
                    <div class="row gx-3">
                        <!-- 1. How to Transfer UPI to Bank -->
                        <div class="col-md-6">
                            <div class="bg-dark p-2 rounded text-white text-center common-deposit-text-size h-100">
                                <h6 class="fw-semibold mb-2">How to Transfer UPI to Bank</h6>
                                <p class="mb-0">
                                    Click here:
                                    <a href="https://www.upitobank.info" target="_blank" class="text-info">
                                        www.upitobank.info
                                    </a>
                                </p>
                            </div>
                        </div>

                        <!-- 2. Payment Related Issues -->
                        <div class="col-md-6">
                            <div class="bg-dark p-2 rounded text-white text-center common-deposit-text-size h-100">
                                <h6 class="fw-semibold mb-2">For Payment Related Issues</h6>
                                <a href="https://wa.me/919999999999" target="_blank" class="btn btn-success">
                                    <i class="fab fa-whatsapp"></i> Contact on WhatsApp
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- 3. Unique Transaction Reference Card -->
            <div class="bg-dark p-3 rounded text-white mt-3 mb-3 common-deposit-text-size">
                <div class="mb-3">
                    <label for="utrNumber" class="form-label">Unique Transaction Reference (UTR)</label>
                    <input type="text" id="utrNumber" class="form-control"
                        placeholder="Enter 6 to 12 Digit UTR Number">
                </div>
            </div>

            <!-- 4. Payment Proof Upload Card -->
            <div class="bg-dark p-2 rounded text-white mt-3 mb-3 common-deposit-text-size">
                <div class="mb-3">
                    <label class="form-label">Upload Your Payment Proof</label>
                    <input type="file" id="paymentProof" class="form-control">
                </div>
            </div>

            <!-- 5. Amount Card -->
            <div class="bg-dark p-2 rounded text-white mt-3 mb-3 common-deposit-text-size">
                <div class="mb-3">
                    <label for="utrAmount" class="form-label">Amount</label>
                    <input type="text" id="utrAmount" class="form-control" placeholder="Enter Amount">
                </div>
            </div>

            <!-- 6. Terms and Conditions Card -->
            <div class="form-check mb-4 common-deposit-text-size">
                <input class="form-check-input" type="checkbox" id="termsCheck">
                <label class="form-check-label" for="termsCheck">
                    I have read and agree with the <a href="#" class="text-info">terms of payment and withdrawal
                        policy</a>.
                </label>
            </div>

            <a class="btn btn-success w-100 mb-3">SUBMIT</a>

        </div>

    </div>
    <style>
        .deposit-page-card-scroll-wrapper {
            overflow-x: auto;
            white-space: nowrap;
        }

        .deposit-page-scrollable-cards {
            display: flex;
            gap: 10px;
            scroll-snap-type: x mandatory;
            padding-bottom: 2px;
        }

        .deposit-page-payment-card {
            background: #f0f0f0;
            padding: 12px 8px;
            border-radius: 8px;
            min-width: 100px;
            text-align: center;
            scroll-snap-align: start;
            cursor: pointer;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .deposit-page-payment-card.active {
            background-color: #198754;
            color: white;
        }

        .deposit-page-card-title {
            font-size: 12px;
            margin-bottom: 6px;
            font-weight: 600;
        }

        .deposit-page-card-icon {
            width: 24px;
            height: 24px;
        }

        /* Consistent font size for all elements in sections 1 to 6 */
        .common-deposit-text-size,
        .modal-body-dark label,
        .modal-body-dark input,
        .modal-body-dark .form-label,
        .modal-body-dark .form-check-label,
        .modal-body-dark .deposit-page-info-row,
        .modal-body-dark .deposit-page-card-title,
        .modal-body-dark h6,
        .modal-body-dark a {
            font-size: 13px;
        }

        .deposit-page-tab-content-box {
            display: block;
        }

        .deposit-page-d-none {
            display: none !important;
        }

        .deposit-page-info-row {
            display: flex;
            justify-content: space-between;
            align-items: center;
            font-size: 13px;
            margin-bottom: 5px;
            gap: 10px;
        }

        .deposit-page-value {
            flex-grow: 1;
            text-align: right;
        }

        .deposit-page-copy-btn {
            background: none;
            border: none;
            color: #0dcaf0;
            font-size: 12px;
            cursor: pointer;
        }

        .deposit-page-divider {
            border-color: #555;
            margin: 5px 0;
        }
        </style>
@endsection

@section('js')
    <script>
        function paymentRequest(response) {
            
            if(response.message){
                if(response.response_code == 200){
                    responseToast(response.message,'bg-success');
                    setTimeout(() => {
                            window.location.href = '{{url()->current()}}';
                    }, 1000);
                } else{
                    responseToast(response.message,'bg-danger');
                }
            } else{
                responseToast(response,'bg-warning');
            }
        }

    // On submit button click
    $('a.btn-submit').click(function() {
        let amount = parseInt($('#depositAmount').val());
        let data = {};
        data.payment_type = '0';

        if (amount >= 200) {
            data.money = amount;

            // Make API call
            callApi('post', 'paymentRequest', data, paymentRequest);

            // Optional: switch section
            $('#deposit-section').addClass('d-none');
            $('#new-section').removeClass('d-none');
        } else {
            alert('Please Enter Amount more than 200');
        }
    });

    // Quick amount buttons
    $('.amount-btn').click(function() {
        $('.amount-btn').removeClass('active');
        $(this).addClass('active');
        $('#depositAmount').val($(this).attr('data-amount'));
    });

    // Copy button
    $(document).on('click', '.deposit-page-copy-btn', function() {
        let text = $(this).data('copy');
        navigator.clipboard.writeText(text);
    });

    // Tab switching
    $('.tab-btn').click(function() {
        $('.tab-btn').removeClass('active');
        $(this).addClass('active');
        let tab = $(this).data('tab');
        $('.deposit-page-tab-content-box').addClass('deposit-page-d-none');
        $('#' + tab + '-tab').removeClass('deposit-page-d-none');
    });
</script>
@endsection
