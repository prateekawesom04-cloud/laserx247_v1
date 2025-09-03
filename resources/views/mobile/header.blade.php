<!-- Header -->
<nav class="navbar navbar-expand-lg px-3 py-2"style="background: linear-gradient(to right, #070047, #0052a1, #00c2ff);">
    <div class="container-fluid">
        <!-- Logo -->
        <a class="navbar-brand" href="#">
            <img src="{{ asset('images/logo.png') }}" alt="Logo" height="35" />
        </a>

        <!-- Right-aligned buttons -->
        @if (!session('user_session'))
            <div class="d-flex justify-content-center gap-2 d-lg-none mt-2">
                <a href="login" class="btn btn-sm fw-bold" style="background-color: #05113C; color:  white;">
                    Login
                </a>
                <a href="register" class="btn btn-sm fw-bold" style="background-color: #05113C; color:  white;">
                    Register
                </a>
            </div>
        @else
            <div class="d-flex justify-content-center gap-2 d-lg-none mt-2">
                <a href="{{ url('/deposit') }}" class="btn btn-sm fw-bold" style="background-color: #05113C; color:  white;">
                    Deposit
                </a>
                <a href="{{ url('/deposit') }}" class="btn btn-sm fw-bold" style="background-color: #05113C; color:  white;">
                    Withdrawal
                </a>
                <a href="#" class="btn btn-sm fw-bold d-flex align-items-center gap-1"
                    style="background-color: #05113C; color:  white;">
                    <i class="bi bi-coin"></i> {{ (isset($userData))?$userData->wallet_amount:'200' }}
                </a>
            </div>
        @endif

    </div>
</nav>
