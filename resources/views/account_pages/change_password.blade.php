@extends('master')

@section('body')
    <div class="main-container bg-white rounded shadow">
        <!-- Header -->
        <div class="header text-white p-3 text-center rounded-top" style="background-color: #007bff;">
            <div class="balance-info" style="font-size: 18px;">Change Password</div>
        </div>


        <!-- Change Password Section -->
        <div class="p-3 change-password-section">
            <h6 class="fw-semibold text-dark mb-3" style="font-size: 13px;">Update Your Password</h6>

            <!-- Old Password -->
            <div class="mb-3">
                <div class="input-group">
                    <input type="password" class="form-control" placeholder="Enter Old Password" id="oldPassword"
                        style="font-size: 12px;">
                    <button class="btn btn-outline-secondary" type="button" onclick="togglePassword('oldPassword')"
                        style="font-size: 12px;">👁️</button>
                </div>
            </div>

            <!-- New Password -->
            <div class="mb-3">
                <div class="input-group">
                    <input type="password" class="form-control" placeholder="Enter New Password" id="newPassword"
                        style="font-size: 12px;">
                    <button class="btn btn-outline-secondary" type="button" onclick="togglePassword('newPassword')"
                        style="font-size: 12px;">👁️</button>
                </div>
            </div>

            <!-- Confirm Password -->
            <div class="mb-3">
                <div class="input-group">
                    <input type="password" class="form-control" placeholder="Confirm New Password" id="confirmPassword"
                        style="font-size: 12px;">
                    <button class="btn btn-outline-secondary" type="button" onclick="togglePassword('confirmPassword')"
                        style="font-size: 12px;">👁️</button>
                </div>
            </div>

            <!-- Buttons -->
            <div class="row g-2">
                <div class="col-6">
                    <button type="reset" class="btn btn-edit text-white w-100" style="font-size: 11px;">📝 Reset</button>
                </div>
                <div class="col-6">
                    <button type="submit" class="btn btn-submit text-white w-100" style="font-size: 11px;">CHANGE</button>
                </div>
            </div>
        </div>
    </div>
@endsection
