@extends('super-master')

@section('body')

@php

        $stakes = json_decode($userData->additional_data,true)['stakes'];

@endphp


<div class="main-container bg-white rounded shadow">
    <!-- Header -->
    <div class="header text-white p-3 d-flex justify-content-center align-items-center rounded-top">
        Add Stake
    </div>
    <!-- Transaction Section -->
    <div class="p-3 deposit-section" id="stakeSection">
        <h6 id="transactionHeader" class="fw-semibold text-dark mb-3" style="font-size: 13px;"></h6>
        <input type="text" class="form-control mb-3" id="stakeAmount" placeholder="Enter Stake..."
            style="font-size: 12px;">

        <div class="row g-2 mb-3">
            @foreach($stakes as $stake)
            <div class="col-6"><a class="amount-btn btn text-white w-100" data-amount="{{$stake}}"
                    style="font-size: 12px;">{{$stake}}</a></div>
            @endforeach
        </div>

        <div class="row g-2 mb-3 justify-content-center">
            <!-- <div class="col-6"><a href="javascript:void(0)" class="btn btn-edit text-white w-100"
                    style="font-size: 11px;">📝 Edit Stake</a></div> -->
            <div class="col-6"><a href="javascript:void(0)" class="btn btn-submit text-white w-100 submitStake"
                    style="font-size: 11px;">SUBMIT</a></div>
        </div>

    </div>
</div>

@endsection

@section('js')

<script>
    $('.submitStake').click(function(){
        if($('#stakeAmount').val()==''){
            alert('Please Enter Stake');
            return false;
        }
        let data = {
            stake: $('#stakeAmount').val()
        };
        callApi('post', 'addStake', data, addStake);

    });

    function addStake(response){
        alert(response.message);
        window.location.reload();
    }

    $('.amount-btn').click(function() {
        $('.amount-btn').removeClass('active');
        $(this).addClass('active');
        $('#stakeAmount').val($(this).attr('data-amount'));
    });
</script>

@endsection