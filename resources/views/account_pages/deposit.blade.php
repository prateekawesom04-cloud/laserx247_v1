@extends('super-master')

@section('body')
    <div class="main-container app_content rounded shadow mt-4">
        <!-- Header -->
        <div class="d-flex justify-content-between modal-header-dark align-items-center p-3 border-bottom">
            <span class="px-2 py-1 rounded fw-semibold">Deposit</span>
            <div id="balanceInfo" class="px-2 py-1 rounded-pill" style="font-size: 14px;">Min: 200 Max: 50000</div>
        </div>

        <!-- Deposit Section -->
        <div class="modal-body-dark p-3">
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
                            <th style="text-transform: capitalize; min-width: 110px;">Payment Type</th>
                            <th style="min-width: 70px;">Amount</th>
                            <th style="min-width: 90px;">Status</th>
                            <th style="min-width: 110px;">Date</th>
                            <th style="min-width: 150px;">Transaction No</th>
                            <th style="min-width: 100px;">Reason</th>
                        </tr>
                    </thead>
                    <tbody>
                        @if (count($data) > 0)
                            @foreach ($data as $value)
                                <tr class="text-center" style="background-color: #3e3e3e;">
                                    <td style="text-transform: capitalize;">
                                        {{ $value->payment_type ? 'Withdraw' : 'Deposit' }}</td>
                                    <td>{{ $value->transfer_amount }}</td>
                                    <td>{{ $value->status == 0 ? 'Success' : 'Processing' }}</td>
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
    </div>
@endsection

@section('js')
    <script>
        function paymentRequest(response) {
            response = JSON.parse(response);
            if (response.data['pay_url']) {
                window.location.href = response.data['pay_url'];
            } else {
                alert('Payment failed');
            }
        }

        $('a.btn-submit').click(function(e) {
            let data = {};

            data.payment_type = '0';

            if ($('#depositAmount').val() >= 200) {
                data.money = $('#depositAmount').val();
                callApi('post', 'paymentRequest', data, paymentRequest);
            } else {

                if (data.payment_type == 0) {

                    alert('Please Enter Amount more than 200');

                } else {

                    alert('Please Enter Amount more than 500');

                }
            }
        });

        $('.amount-btn').click(function() {
            $('.amount-btn').removeClass('active');
            $(this).addClass('active');
            $('#depositAmount').val($(this).attr('data-amount'));
        });



        // function initTransaction() {
        //     const minAmt = {
        //             0: 500,
        //             1: 200
        //         },
        //         max = 50000;

        //     function updateUI(t) {
        //         $('#balanceInfo').text(`Min: ${minAmt[t]} Max: ${max}`);
        //         $('#transactionAmount').val('').removeClass('is-invalid').attr(
        //             'placeholder',
        //             t == 0 ? 'Enter deposit amount...' : 'Enter withdrawal amount...'
        //         );
        //         $('.amount-btn').removeClass('active');
        //     }

        //     $('input[name="transaction_type"]').click(e => updateUI(+e.target.value));

        //     $('#transactionAmount').on('input', function() {
        //         this.value = this.value.replace(/\D/g, '');
        //         $(this).removeClass('is-invalid');
        //     });

        //     $('.amount-btn').click(function() {
        //         $('.amount-btn').removeClass('active');
        //         $(this).addClass('active');
        //         $('#transactionAmount').val($(this).data('amount')).removeClass('is-invalid');
        //     });

        //     $('.btn-submit').click(() => {
        //         let t = +$('input[name="transaction_type"]:checked').val(),
        //             v = $('#transactionAmount').val(),
        //             a = parseInt(v, 10);

        //         if (!v || isNaN(a) || a < minAmt[t] || a > max) {
        //             $('#transactionAmount').addClass('is-invalid');
        //             alert(`Enter amount between ${minAmt[t]} and ${max}`);
        //             return;
        //         }
        //         alert(`Submitted: ${t == 0 ? 'Deposit' : 'Withdrawal'} ₹${a}`);
        //     });
        //     updateUI(+$('input[name="transaction_type"]:checked').val());
        // }

        // initTransaction();

        // function paymentRequest(response) {
        //     response = JSON.parse(response);

        //     (response.data['pay_url']) ? window.location.href = response.data['pay_url'] : alert('issue');
        // }

        // $('a.btn-submit').click(function(e) {
        //     let data = {};

        //     data.payment_type = $('input[type=radio]:checked').val();
        //     // data.payment_type = 'create';
        //     if ($('#depositAmount').val() > 100) {
        //         data.money = $('#depositAmount').val() * 100;
        //         callApi('post', 'paymentRequest', data, paymentRequest);
        //     } else {
        //         if (data.payment_type == 0) {

        //             alert('Please Enter Amount more than 100');

        //         } else {

        //             alert('Please Enter Amount more than 500');

        //         }
        //     }
        // });
    </script>
@endsection
