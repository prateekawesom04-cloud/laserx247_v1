@extends('super-master')

@section('body')
    <div class="main-container rounded shadow p-2 modal-body-dark mt-4">
        <!-- Header -->
        <div class="header text-white p-3 text-center rounded-top modal-header-dark border-bottom">
            <div class="d-flex justify-content-between align-items-center flex-wrap ">
                
                <!-- Left Spacer -->
                <div class="flex-grow-1 d-none d-sm-block"></div>
                
                <!-- Center Title -->
                <div class="text-center flex-grow-1 profile-title mb-2 mb-sm-0 fw-semibold">
                    👨‍💼 My Profile
                </div>
                
                <!-- Right Button -->
                <div class="text-end flex-grow-1">
                    <button class="btn btn-light btn-sm">Add Bank</button>
                </div>
            </div>
        </div>

        {{-- Bank Detail Partial --}}
        @include('includes.bankDetail')

        <hr>

        <!-- Profile Section -->
        <h3 class="text-center mb-0 mt-2">Wallet Details</h3>
        <div class="p-3 user_profile">
            <div class="px-2 py-2 rounded wallet-info">
                <div class="d-flex justify-content-between py-2 border-bottom">
                    <div class="fw-medium">User ID</div>
                    <div>{{ $data->user_id }}</div>
                </div>
                <div class="d-flex justify-content-between py-2 border-bottom">
                    <div class="fw-medium">Available Chips</div>
                    <div>{{ $data->available_chips }}</div>
                </div>
                <div class="d-flex justify-content-between py-2 border-bottom">
                    <div class="fw-medium">Exposure</div>
                    <div>{{ $data->exposure }}</div>
                </div>
            </div>
        </div>
    </div>
@endsection
