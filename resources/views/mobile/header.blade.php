<!-- Navbar -->
<nav class="navbar navbar-expand-lg px-3 py-2 m-0"
    style="background: linear-gradient(to right, #070047, #0052a1, #00c2ff);">
    <div class="container-fluid">
        <!-- Logo -->
        <a class="navbar-brand" href="{{route('index')}}">
            <img src="{{ asset('images/logo.png') }}" alt="Logo" height="35" width="100" />
        </a>

        <!-- Right Side Content -->
        @if (session('user_session'))
            <div class="d-flex align-items-center ms-auto">
                <!-- Info Box -->
                <div class="d-flex align-items-center"
                    style="background-color: #2b3c48; border-radius: 6px; padding: 5px 10px; min-width: 100px;">

                    <!-- Left: Username -->
                    <div class="me-4 text-white d-flex align-items-center" style="font-weight: 00; font-size: 14px;">
                        <i class="bi bi-person-fill me-1"></i> {{ substr($userData->user_uid,0,6) }} ...
                    </div>
                    <!-- Right: Balance and Expiry -->
                    <div class="text-white text-end" style="font-size: 13px; line-height: 1.2;">
                        <div>
                            <i class="bi bi-coin me-1"></i> <span style="color: #ffffff;">{{ $userData->wallet_amount }}</span>
                        </div>
                        <div>
                            Exp: <span style="color: #ff4c4c;">{{ $userData->unsattled_amount }}</span>
                        </div>
                    </div>
                </div>
            </div>
        @else
            <!-- Login/Register (if not logged in) -->
            <div class="d-flex ms-auto align-items-center gap-2">
                <a href="login" class="btn btn-sm fw-bold" style="background-color: #05113C; color: white;">
                    Login
                </a>
                <a href="register" class="btn btn-sm fw-bold" style="background-color: #05113C; color: white;">
                    Register
                </a>
            </div>
        @endif
    </div>
</nav>

<!-- Deposit & Withdrawal Buttons -->
@if (session('user_session'))
    <div class="container-fluid py-0">
        <div class="row justify-content-center g-1">
            <div class="col-6 col-md-3 p-0">
                <a href="{{route('user.deposit')}}" class="btn fw-bold text-white w-100"
                    style="background-color: #28a745; border-radius: 0; padding: 12px 0;">
                    💳 DEPOSIT
                </a>
            </div>
            <div class="col-6 col-md-3 p-0">
                <a href="{{route('user.deposit')}}" class="btn fw-bold text-white w-100"
                    style="background-color: #dc3545; border-radius: 0; padding: 12px 0;">
                    💸 WITHDRAWAL
                </a>
            </div>
        </div>
    </div>
@endif
