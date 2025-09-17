<nav class="navbar px-3 py-2 app_bar">
    <div class="container-fluid">
        <a href="{{route('index')}}"><img src="{{ asset('images/logo.png') }}" alt="Logo" height="40" width="100" /></a>
        <div class="d-flex ms-auto align-items-center">

            @if (session('user_session'))
                <!-- Notification Bell Icon -->
                <a class="btn p-0 me-3 text-white fs-5" data-bs-toggle="offcanvas" data-bs-target="#notificationPanel"
                    aria-controls="notificationPanel">
                    <i class="fas fa-bell"></i>
                </a>
                <!-- Balance & Exp Label Style Box -->
                <div class="btn btn-outline-light btn-sm me-2 fw-bold d-inline-flex align-items-center px-2 py-1 app_bar">
                    <a href="javascript:void(0)" class="text-decoration-none text-white me-3">
                        <span class="text-white-50">Bal:</span> <span class="fw-bold">{{ $userData->wallet_amount }}</span>
                    </a>
                    <a href="javascript:void(0)" class="text-decoration-none text-white">
                        <span class="text-white-50">Exp:</span> <span class="fw-bold">{{ $userData->unsattled_amount }}</span>
                    </a>
                </div>

                <a href="#" class="btn btn-outline-light btn-sm me-2 fw-bold" data-bs-toggle="offcanvas"
                    data-bs-target="#accountPanel" aria-controls="accountPanel">My Account</a>
            @else
                <a href="login" class="btn btn-outline-light btn-sm me-2 fw-bold">Login</a>
                <a href="register" class="btn btn-outline-light btn-sm me-2 fw-bold">Register</a>
            @endif
        </div>
    </div>
</nav>

<!-- Notification Offcanvas Panel -->
<div class="offcanvas offcanvas-end fst-italic" tabindex="-1" id="notificationPanel"
    aria-labelledby="notificationPanelLabel">
    <div class="offcanvas-header bg-primary text-white">
        <h5 class="offcanvas-title fw-bold" id="notificationPanelLabel">Notifications</h5>
        <a type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></a>
    </div>
    <div class="offcanvas-body p-3 bg-light">
        <!-- Tabs -->
        <div class="btn-group w-100 mb-4" role="group">
            <a type="button" class="btn btn-outline-primary active">All</a>
            <a type="button" class="btn btn-outline-primary">Bonus Claim</a>
            <a type="button" class="btn btn-outline-primary">Deposit</a>
            <a type="button" class="btn btn-outline-primary">Withdrawal</a>
        </div>

        <!-- Empty State -->
        <div class="text-center text-muted mt-5">
            <i class="fas fa-bell fa-3x mb-3 text-primary"></i>
            <h6 class="fw-semibold">Notification center is empty</h6>
            <p class="small fst-italic">Please refresh the page, and maybe we will surprise you</p>
        </div>
    </div>
</div>
