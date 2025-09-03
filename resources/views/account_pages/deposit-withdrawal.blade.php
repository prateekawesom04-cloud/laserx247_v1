@extends('super-master')

@section('body')
    <div class="main-container bg-white rounded shadow">
        <!-- Header -->
        <div class="header text-white p-3 d-flex justify-content-between align-items-center rounded-top">
            <a class="back-btn text-white px-2 py-1 rounded" style="font-size: 10px; visibility: hidden;">BACK</a>
            <div id="balanceInfo" class="balance-info px-2 py-1 rounded-pill" style="font-size: 14px;">Min: 200 Max: 50000
            </div>
        </div>

        <!-- Radio Section -->
        <div class="radio-section p-3 border-bottom">
            <div class="d-flex justify-content-center gap-4">
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="transaction_type" id="deposit" value="0"
                        checked>
                    <label class="form-check-label fw-medium" for="deposit" style="font-size: 13px;">Deposit</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="transaction_type" id="withdrawal" value="1">
                    <label class="form-check-label fw-medium" for="withdrawal" style="font-size: 13px;">Withdrawal</label>
                </div>
            </div>
        </div>

        <!-- Transaction Section -->
        <div class="p-3 deposit-section" id="depositSection">
            <h6 id="transactionHeader" class="fw-semibold text-dark mb-3" style="font-size: 13px;"></h6>
            <input type="text" class="form-control mb-3" id="transactionAmount" placeholder="Enter amount..."
                style="font-size: 12px;">

            <div class="row g-2 mb-3">
                <div class="col-6"><a class="amount-btn btn text-white w-100" data-amount="300"
                        style="font-size: 12px;">300</a></div>
                <div class="col-6"><a class="amount-btn btn text-white w-100" data-amount="500"
                        style="font-size: 12px;">500</a></div>
                <div class="col-6"><a class="amount-btn btn text-white w-100" data-amount="1000"
                        style="font-size: 12px;">1000</a></div>
                <div class="col-6"><a class="amount-btn btn text-white w-100" data-amount="2000"
                        style="font-size: 12px;">2000</a></div>
            </div>

            <div class="row g-2 mb-3">
                <div class="col-6"><a href="javascript:void(0)" class="btn btn-edit text-white w-100"
                        style="font-size: 11px;">📝 Edit Stake</a></div>
                <div class="col-6"><a href="javascript:void(0)" class="btn btn-submit text-white w-100"
                        style="font-size: 11px;">SUBMIT</a></div>
            </div>

            <div class="table-container rounded">
                <div class="table-wrapper">
                    <table class="table w-100 m-0">
                        <thead class="table-header text-white text-center py-0" style="font-size: 10px;">
                            <tr>
                                <th>PAYMENT TYPE</th>
                                <th>AMOUNT</th>
                                <th>STATUS</th>
                                <th>DATE</th>
                                <th>PAYMENT METHOD</th>
                                <th>TRANSACTION NO</th>
                                <th>UTR NO</th>
                                <th>REASON</th>
                            </tr>
                        </thead>
                        <tbody class="table-content">
                            <tr class="table-row text-center">
                                <td>1</td>
                                <td>2</td>
                                <td>3</td>
                                <td>4</td>
                                <td>5</td>
                                <td>6</td>
                                <td>7</td>
                                <td>8</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('js')
    <script>
        function initTransaction() {
            const minAmt = {
                    0: 500,
                    1: 200
                },
                max = 50000;

            function updateUI(t) {
                $('#balanceInfo').text(`Min: ${minAmt[t]} Max: ${max}`);
                $('#transactionAmount').val('').removeClass('is-invalid').attr(
                    'placeholder',
                    t == 0 ? 'Enter deposit amount...' : 'Enter withdrawal amount...'
                );
                $('.amount-btn').removeClass('active');
            }

            $('input[name="transaction_type"]').click(e => updateUI(+e.target.value));

            $('#transactionAmount').on('input', function() {
                this.value = this.value.replace(/\D/g, '');
                $(this).removeClass('is-invalid');
            });

            $('.amount-btn').click(function() {
                $('.amount-btn').removeClass('active');
                $(this).addClass('active');
                $('#transactionAmount').val($(this).data('amount')).removeClass('is-invalid');
            });

            $('.btn-submit').click(() => {
                let t = +$('input[name="transaction_type"]:checked').val(),
                    v = $('#transactionAmount').val(),
                    a = parseInt(v, 10);

                if (!v || isNaN(a) || a < minAmt[t] || a > max) {
                    $('#transactionAmount').addClass('is-invalid');
                    alert(`Enter amount between ${minAmt[t]} and ${max}`);
                    return;
                }
                alert(`Submitted: ${t == 0 ? 'Deposit' : 'Withdrawal'} ₹${a}`);
            });
            updateUI(+$('input[name="transaction_type"]:checked').val());
        }
        initTransaction();

        function paymentRequest(response) {
            response = JSON.parse(response);
            
            (response.data['pay_url']) ? window.location.href = response.data['pay_url'] : alert('issue');
        }

        $('a.btn-submit').click(function(e) {
            let data = {};

            data.payment_type = $('input[type=radio]:checked').val();
            // data.payment_type = 'create';
            if ($('#depositAmount').val() > 100) {
                data.money = $('#depositAmount').val() * 100;
                callApi('post', 'paymentRequest', data, paymentRequest);
            } else {
                if (data.payment_type == 0) {

                    alert('Please Enter Amount more than 100');

                } else {

                    alert('Please Enter Amount more than 500');

                }
            }
        });
    </script>
@endsection
