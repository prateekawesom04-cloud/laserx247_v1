@extends('super-master')

@section('body')
    <div class="main-container bg-white rounded shadow p-2">
        <!-- Header -->
        
        <div class="header text-white p-3 text-center rounded-top relative flex items-center justify-between" style="background-color: #007bff;">
            <div class="flex-1"></div>
            <div class="balance-info flex-1" style="font-size: 18px;">
                <i class="fas fa-user me-2"></i> My Profile
            </div>
            <div class="flex items-center justify-end flex-1">
                <div class="btn bg-white color-black mx-3 p-1 hover:!text-black">Add Bank</div>
            </div>
        </div>
        <h3 class="text-center mb-0 mt-2">Bank Details</h3>
        @include('includes.bankDetail')

        <hr>
        <!-- Profile Section -->
         
        <h3 class="text-center mb-0 mt-2">Wallet Details</h3>
        <div class="p-3 user_profile">
            <div class="px-2 py-2 rounded" style="font-size: 12px;">
                <div class="d-flex justify-content-between py-2 border-bottom">
                    <div class="fw-medium text-dark">User ID</div>
                    <div>{{ $data->user_id }}</div>
                </div>
                <div class="d-flex justify-content-between py-2 border-bottom">
                    <div class="fw-medium text-dark">Available Chips</div>
                    <div>{{ $data->available_chips }}</div>
                </div>
                <div class="d-flex justify-content-between py-2 border-bottom">
                    <div class="fw-medium text-dark">Exposure</div>
                    <div>{{$data->exposure}}</div>
                </div>
                {{-- <div class="d-flex justify-content-between py-2">
                    <div class="fw-medium text-dark">Total Chips</div>
                    <div>0.00</div>
                </div> --}}
            </div>
        </div>
    </div>

@endsection
