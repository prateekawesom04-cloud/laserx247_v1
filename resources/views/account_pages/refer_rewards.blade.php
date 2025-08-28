@extends('master')

@section('body')
    <div class="container-xl py-4">
        <div class="text-center mb-3">
            <!-- Small gift image -->
            <div class="p-0 mb-2">
                <img src="{{ asset('images/gift-box.6ee27af8.png') }}" alt="Gift Box" style="width: 80px; height: auto;">
            </div>

            <strong>Refer And Rewards.</strong><br>
            <small>Copy your code, share it with your friends.</small>
        </div>

        <!-- Referral code-->
        <div class="mb-3">
            <label for="referralCode" class="form-label">Your Referral Code:</label>
            <div class="input-group">
                <input type="text" class="form-control" id="referralCode" placeholder="Enter Referral Code" readonly>
                <button class="btn btn-dark" type="button">Copy</button>
            </div>
        </div>

        <!-- Social media icons -->
        <div class="d-flex align-items-center justify-content-between mb-3">
            <span>Share this link via</span>
            <div class="d-flex gap-2">
                <a href="https://www.facebook.com/" class="btn btn-primary d-flex align-items-center justify-content-center"
                    style="width: 40px; height: 40px; border-radius: 6px;">
                    <i class="fab fa-facebook-f"></i>
                </a>
                <a href="https://www.instagram.com/" class="d-flex align-items-center justify-content-center"
                    style="width: 40px; height: 40px; border-radius: 6px; background: radial-gradient(circle at 30% 107%, #fdf497 0%, #fd5949 45%, #d6249f 60%, #285AEB 90%); color: white;">
                    <i class="fab fa-instagram"></i>
                </a>
                <a href="https://web.whatsapp.com/" class="btn btn-success d-flex align-items-center justify-content-center"
                    style="width: 40px; height: 40px; border-radius: 6px;">
                    <i class="fab fa-whatsapp"></i>
                </a>
                <a href="https://web.telegram.org/k/" class="btn btn-info d-flex align-items-center justify-content-center"
                    style="width: 40px; height: 40px; border-radius: 6px;">
                    <i class="fab fa-telegram-plane"></i>
                </a>
            </div>
        </div>


        <!-- Referral link -->
        <div class="mb-3">
            <label for="referralLink" class="form-label">Refer Link</label>
            <div class="input-group">
                <input type="text" class="form-control" id="referralLink" placeholder="Enter Referral Link" readonly>
                <button class="btn btn-dark" type="button">Copy</button>
            </div>
        </div>

        <!-- Note -->
        <div style="font-weight: 600; font-size: 15px;">
    <span style="font-size: 18px;">Note :</span><br>
    Referral apply on every wallet deposit. Maximum bonus you can receive for Referral Bonus is.
</div>

    </div>
@endsection
