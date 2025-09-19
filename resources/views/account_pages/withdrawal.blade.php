@extends('super-master')

@section('body')
    <div class="main-container app_content rounded shadow mt-4">
        <!-- Header -->
        <div class="d-flex justify-content-between modal-header-dark align-items-center p-3 border-bottom">
            <span class="px-2 py-1 rounded fw-semibold">Withdraw</span>
            <div id="balanceInfo" class="px-2 py-1 rounded-pill" style="font-size: 14px;">Min: 500 Max: 50000</div>
        </div>

        <!-- Transaction Section -->
        <div class="modal-body-dark p-3 deposit-section" id="depositSection">
            <h6 id="transactionHeader" class="fw-semibold text-dark mb-3" style="font-size: 13px;"></h6>
            <input type="text" class="form-control mb-3" id="depositAmount" placeholder="Enter amount..."
                style="font-size: 12px;">

            <div class="row g-2 mb-3">
                @foreach([500,1000,2000,4000] as $amount)
                <div class="col-5 mb-2 mx-auto">
                    <a class="amount-btn btn btn-dark w-100 text-white" data-amount="{{$amount}}"
                        style="font-size: 12px;">{{$amount}}</a>
                </div>
                @endforeach 
            </div>

            <div class="row g-2 mb-3 justify-content-center">
                <!-- <div class="col-6"><a href="javascript:void(0)" class="btn btn-edit w-100"
                                    style="font-size: 11px;">📝 Edit Stake</a></div> -->
                <div class="col-6"><a href="javascript:void(0)" class="btn btn-submit w-100"
                        style="font-size: 11px;">SUBMIT</a></div>
            </div>

            <div class="table-container rounded flex items-center justify-center" style="white-space: nowrap;">
                <div class="table-wrapper">
                    <table class="table w-100 m-0">
                        <thead class="table-header text-center py-0" style="font-size: 10px;">
                            <tr>
                                <th>PAYMENT TYPE</th>
                                <th>AMOUNT</th>
                                <th>STATUS</th>
                                <th>DATE</th>
                                <th>TRANSACTION NO</th>
                                <th>REASON</th>
                            </tr>
                        </thead>
                        <tbody class="table-content">
                            @if (count($data) > 0)
                                @foreach ($data as $value)
                                    <tr class="table-row text-center">
                                        <td>{{ $value->payment_type ? 'withdraw' : 'deposit' }}</td>
                                        <td>{{ $value->transfer_amount }}</td>
                                        <td>{{ $value->status == 0 ? 'success' : 'processing' }}</td>
                                        <td>{{ $value->created_at->format('Y-m-d') }}</td>
                                        <td>{{ $value->order_sn }}</td>
                                        <td>{{ $value->remark }}</td>
                                    </tr>
                                @endforeach
                            @else
                                <tr>
                                    <td colspan="6" class="text-center">No Data Found</td>
                                </tr>
                            @endif
                        </tbody>
                    </table>
                </div>

            </div>
        </div>
    </div>


    @php

    $modal_body = '
    
        <form id="withdrawal_details">
            
            <div class="mb-3">
                <label for="amount" class="form-label">Account Holder</label>
                <input type="text" id="account_holder" name="account_holder" class="form-control text-black" placeholder="Account Holder">
            </div>
            
            <div class="mb-3">
                <label for="amount" class="form-label">Account Number</label>
                <input type="text" id="amount" name="account_number" class="form-control text-black" placeholder="Account Number">
            </div>
            
            <div class="mb-3">
                <label for="amount" class="form-label">Confirm Account Number</label>
                <input type="text" id="amount" name="confirm_account_number" class="form-control text-black" placeholder="Confirm Account Number">
            </div>
            
            <div class="mb-3">
                <label for="amount" class="form-label">Bank Name</label>
                <input type="text" id="amount" name="bank_name" class="form-control text-black" placeholder="Bank Name">
            </div>
            
            <div class="mb-3">
                <label for="amount" class="form-label">IFSC Code</label>
                <input type="text" id="amount" name="ifsc_code" class="form-control text-black" placeholder="IFSC Code">
            </div>
            
            <div class="mb-3">
                <label for="amount" class="form-label">UPI ID</label>
                <input type="text" id="amount" name="upi_id" class="form-control text-black" placeholder="UPI ID">
            </div>

        </form>
    
    ';

    @endphp
    
    @include('includes.appModel',[
    'modal_id'=>'modal-id',
    'modal_head'=>'Modal Header',
    'modal_body'=>$modal_body
    ])

@endsection

@section('js')
    <script>

        $('.modal_action_btn').click(function(){
            let formData = {};
            formData['user_uid'] = '{{$userData->user_uid}}';
            let form = $(this).parents('.modal').find('form');
            
            form.find('input').each(function(){
                
                formData[$(this).attr('name')] = $(this).val();

            });

                callApi('post', 'addBank', formData, addBank);
            
        });

        function addBank(response){
            if(response.response_code==200){
                localStorage.setItem('choose_bank',true);
                $('.modal').modal('hide');
                alert(response.message);
            } else{
                alert(response.message);
            }
            console.log(response);
            
        }

        function paymentRequest(response) {
            response = response.response;
            if (response.data['pay_url']) {
                window.location.href = response.data['pay_url'];
            } else {
                alert('Payment failed');
            }
        }

        $('a.btn-submit').click(function(e) {

            if(!localStorage.getItem('choose_bank')){
                $('.modal').modal('show');
                return false;
            }
            
            let data = {};

            data.payment_type = '1';

            if ($('#depositAmount').val() >= 500) {
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

