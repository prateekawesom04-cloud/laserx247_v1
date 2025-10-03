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
                    @foreach($payments as $payment)
                    <div class="deposit-page-payment-card tab-btn active" data-tab="{{$payment->payment_method}}">
                        <div class="deposit-page-card-title">{{$payment->payment_method}}</div>
                        <!-- <img src="https://img.icons8.com/color/48/000000/whatsapp.png" class="deposit-page-card-icon" /> -->
                    </div>
                    @endforeach
                </div>
            </div>

            <!-- Tab Content -->
            <div class="deposit-page-tab-content-area">

                <!-- WhatsApp Tab -->
                @foreach($payments as $payment)
                    @if(str_contains($payment->payment_method_uid, 'img/'))
                    <!-- UPI Tab -->
                    <div id="{{$payment->payment_method}}-tab" class="deposit-page-tab-content-box deposit-page-d-none">
                        <div class="bg-dark p-3 rounded text-white">
                            <!-- <div class="deposit-page-info-row">
                                <span>Holder Name:</span>
                                <span class="deposit-page-value">{{$payment->holder_name}}</span>
                                <a class="deposit-page-copy-btn" data-copy="..."><i class="fa-regular fa-copy"></i></a>
                            </div>
                            <hr class="deposit-page-divider"> -->
                            <div class="text-center mt-2">
                                <img src="{{asset('storage').$payment->payment_method_uid}}"
                                    alt="QR Code" class="img-fluid rounded" style="max-height:400px;">
                            </div>
                        </div>
                    </div>
                    @else
                    <div id="{{$payment->payment_method}}-tab" class="deposit-page-tab-content-box deposit-page-d-none">
                        <div class="bg-dark p-3 rounded text-white">
                            <div class="deposit-page-info-row">
                                <span>Holder Name:</span>
                                <span class="deposit-page-value">{{$payment->holder_name}}</span>
                                <a class="deposit-page-copy-btn" data-copy="..."><i class="fa-regular fa-copy"></i></a>
                            </div>
                            <hr class="deposit-page-divider">
                            <div class="deposit-page-info-row">
                                <span>Payment Id:</span>
                                <span class="deposit-page-value">{{$payment->payment_method_uid}}</span>
                                <a class="deposit-page-copy-btn" data-copy="..."><i class="fa-regular fa-copy"></i></a>
                            </div>
                        </div>
                    </div>
                    @endif
                @endforeach
            </div>

            <form id="depositRequest">

                <!-- 3. Unique Transaction Reference Card -->
                <div class="bg-dark p-3 rounded text-white mt-3 mb-3 common-deposit-text-size">
                    <div class="mb-3">
                        <label for="utrNumber" class="form-label">Unique Transaction Reference (UTR)</label>
                        <input name="order_sn" type="text" id="utrNumber" class="form-control"
                            placeholder="Enter 6 to 12 Digit UTR Number">
                    </div>
                </div>
    
                <!-- 4. Payment Proof Upload Card -->
                <div class="bg-dark p-2 rounded text-white mt-3 mb-3 common-deposit-text-size">
                    <div class="mb-3">
                        <label class="form-label">Upload Your Payment Proof</label>
                        <input name="payment_proof" type="file" id="paymentProof" class="form-control">
                    </div>
                </div>
    
                <!-- 5. Amount Card -->
                <div class="bg-dark p-2 rounded text-white mt-3 mb-3 common-deposit-text-size">
                    <div class="mb-3">
                        <label for="utrAmount" class="form-label">Amount</label>
                        <input name="transfer_amount" type="text" id="transfer_amount" class="form-control" placeholder="Enter Amount">
                    </div>
                </div>
            </form>

            <!-- 6. Terms and Conditions Card -->
            <div class="form-check mb-4 common-deposit-text-size">
                <input class="form-check-input" type="checkbox" id="termsCheck">
                <label class="form-check-label" for="termsCheck">
                    I have read and agree with the <a href="#" class="text-info">terms of payment and withdrawal
                        policy</a>.
                </label>
            </div>

            <a class="btn btn-success w-100 mb-3 createManualRequest">SUBMIT</a>

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
        function paymentGatewayMethod(response) {
            response = JSON.parse(response.response);
            if (response.data['pay_url']) {
                window.location.href = response.data['pay_url'];
            } else {
                alert('Payment failed');
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
            @if($agent)
                // callApi('post', 'paymentGatewayMethod', data, paymentGatewayMethod);
                // Optional: switch section
                $('#deposit-section').addClass('d-none');
                $('#new-section').removeClass('d-none');
            @else
                callApi('post', 'paymentGatewayMethod', data, paymentGatewayMethod);
            @endif
            
        } else {
            alert('Please Enter Amount more than 200');
        }
    });

    // Quick amount buttons
    $('.amount-btn').click(function() {
        $('.amount-btn').removeClass('active');
        $(this).addClass('active');
        $('#depositAmount').val($(this).attr('data-amount'));
        $('#transfer_amount').val($(this).attr('data-amount'));
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

    $(document).ready(function(){
        $($('.deposit-page-tab-content-box')[0]).removeClass('deposit-page-d-none');
    });

    $('.createManualRequest').on('click',function(){
        let formData = new FormData($('#depositRequest')[0]);
        callAdminApi('post', 'depositRequest', formData, createManualRequest);
    });

        
    function createManualRequest(response){
        if(response.message){
            if(response.response_code == 200){
                responseToast(response.message,'bg-success');
                setTimeout(() => {
                        window.location.href = '{{url('/')}}';
                }, 1000);
            } else{
                responseToast(response.message,'bg-danger');
            }
        } else{
            responseToast(response,'bg-warning');
        }
    }
    
</script>
@endsection
