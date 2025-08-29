@extends('master')

@section('body')
    <div class="main-container bg-white rounded shadow">
        <!-- Header -->

        <div class="header text-white p-3 text-center rounded-top" style="background-color: #007bff;">
            <div class="balance-info" style="font-size: 18px;">
                <i class="fas fa-user me-2"></i> My Profile
            </div>
        </div>
        <!-- Profile Section -->
        <div class="p-3">
            <div class="px-2 py-2 rounded" style="font-size: 12px;">
                <div class="d-flex justify-content-between py-2 border-bottom">
                    <div class="fw-medium text-dark">User ID</div>
                    <div>Demo123</div>
                </div>
                <div class="d-flex justify-content-between py-2 border-bottom">
                    <div class="fw-medium text-dark">Available Chips</div>
                    <div>0.00</div>
                </div>
                <div class="d-flex justify-content-between py-2 border-bottom">
                    <div class="fw-medium text-dark">Exposure</div>
                    <div>0</div>
                </div>
                <div class="d-flex justify-content-between py-2">
                    <div class="fw-medium text-dark">Total Chips</div>
                    <div>0.00</div>
                </div>
            </div>
        </div>
    </div>
@endsection
