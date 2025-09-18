<!-- Navbar -->
<nav class="navbar navbar-expand-lg px-3 py-2 m-0 aap_bar_1">
    <div class="container-fluid">
        <div class="flex flex-row items-center justify-evenly">
            <!-- Logo -->
            <a class="navbar-brand w-[40%]" href="{{route('index')}}">
                <img src="{{ asset('images/logo.png') }}" alt="Logo" class="w-full" />
            </a>

        <!-- Right Side Content -->
        @if (session('user_session'))
            <div class="d-flex align-items-center justify-end ms-auto w-[60%]">
                <!-- Info Box -->
                <div class="d-flex align-items-center"
                    style="background-color: #2b3c48; border-radius: 6px; padding: 5px 10px; min-width: 100px;">

                    <!-- Left: Username -->
                    <div class="me-4 text-white d-flex align-items-center" style="font-weight: 00; font-size: 14px;">
                        <i class="bi bi-person-fill me-1"></i> {{ $userData->phone }}
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
            <div class="d-flex ms-auto align-items-center justify-end gap-2 w-[60%]">
                <a href="login" class="btn btn-sm fw-bold" style="background-color: #05113C; color: white;">
                    Login
                </a>
                <a href="register" class="btn btn-sm fw-bold" style="background-color: #05113C; color: white;">
                    Register
                </a>
            </div>
        @endif
            
        </div>
    </div>
</nav>

<!-- Deposit & Withdrawal Buttons -->
@if (session('user_session'))
    <div class="container-fluid py-0">
        <div class="row justify-content-center g-1">
            <div class="col-6 col-md-3 p-0">
                <a href="{{route('user.deposit')}}" class="btn fw-bold text-white w-100 py-1"
                    style="background-color: #00b8f6; border-radius: 0;font-size: 12px;">
                    💳 DEPOSIT
                </a>
            </div>
            <div class="col-6 col-md-3 p-0">
                <a href="{{route('user.withdrawal')}}" class="btn fw-bold text-white w-100 py-1"
                    style="background-color: #07054c; border-radius: 0;font-size: 12px;">
                    💸 WITHDRAWAL
                </a>
            </div>
        </div>
    </div>
@endif
