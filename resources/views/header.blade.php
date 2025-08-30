<nav class="navbar px-3 py-2" style="background: linear-gradient(to right, #070047, #0052a1, #00c2ff);">
    <div class="container-fluid">
        <img src="{{ asset('images/logo.png') }}" alt="Logo" height="40" />
        <div class="d-flex ms-auto align-items-center">

            @if(session('user_session'))
            <!-- Notification Bell Icon -->
            <a class="btn p-0 me-3 text-white fs-5" data-bs-toggle="offcanvas" data-bs-target="#notificationPanel"
                aria-controls="notificationPanel">
                <i class="fas fa-bell"></i>
        </a>
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
        <a type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas"
            aria-label="Close"></a>
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

<!-- Account Offcanvas -->
<div class="offcanvas offcanvas-end fst-italic" tabindex="-1" id="accountPanel" aria-labelledby="accountPanelLabel">
    <!-- Header -->
    <div class="offcanvas-header bg-primary text-white">
        <div>
            <h5 class="mb-0 fw-bold fs-6" id="accountPanelLabel">
                Account ID: <span class="text-warning fs-6">12faf4cf3444</span>
            </h5>
            <small class="d-block mt-1 text-white-50 fs-7">
                Last Login: <span class="fst-italic fs-7">1756100089</span>
            </small>
        </div>
        <a type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas"
            aria-label="Close"></a>
    </div>

    <!-- Body -->
    <div class="offcanvas-body p-3 bg-light">
        <div class="list-group list-group-flush">
            <a href="profile" class="list-group-item list-group-item-action d-flex align-items-center fs-7 mb-3">
                <i class="fas fa-user me-3 text-primary"></i> <span class="fw-semibold">Profile</span>
            </a>
            <a href="wallet" class="list-group-item list-group-item-action d-flex align-items-center fs-7 mb-3">
                <i class="fas fa-wallet me-3 text-success"></i> <span class="fw-semibold">Wallet</span>
            </a>
            <a href="deposit-withdrawal"
                class="list-group-item list-group-item-action d-flex align-items-center fs-7 mb-3">
                <i class="fas fa-plus-circle me-3 text-success"></i> <span class="fw-semibold">Deposit /
                    Withdrawal</span>
            </a>
            <a href="profit_loss" class="list-group-item list-group-item-action d-flex align-items-center fs-7 mb-3">
                <i class="fas fa-balance-scale me-3 text-info"></i> <span class="fw-semibold">Profit / Loss</span>
            </a>
            <a href="favourite" class="list-group-item list-group-item-action d-flex align-items-center fs-7 mb-3">
                <i class="fas fa-star me-3 text-warning"></i> <span class="fw-semibold">Favourite</span>
            </a>
            <a href="refer_rewards" class="list-group-item list-group-item-action d-flex align-items-center fs-7 mb-3">
                <i class="fas fa-user-friends me-3 text-secondary"></i> <span class="fw-semibold">Refer and Earn</span>
            </a>
            <a href="statements" class="list-group-item list-group-item-action d-flex align-items-center fs-7 mb-3">
                <i class="fas fa-file-alt me-3 text-primary"></i> <span class="fw-semibold">Account Statement</span>
            </a>
            <a href="unsettled_bets" class="list-group-item list-group-item-action d-flex align-items-center fs-7 mb-3">
                <i class="fas fa-tasks me-3 text-dark"></i> <span class="fw-semibold">Unsettled Bets</span>
            </a>
            <a href="market_analysis" class="list-group-item list-group-item-action d-flex align-items-center fs-7 mb-3">
                <i class="fas fa-chart-pie me-3 text-danger"></i> <span class="fw-semibold">Market Analysis</span>
            </a>
            <a href="change_password"
                class="list-group-item list-group-item-action d-flex align-items-center fs-7 mb-3">
                <i class="fas fa-key me-3 text-warning"></i> <span class="fw-semibold">Change Password</span>
            </a>
            <a href="#"
                class="list-group-item list-group-item-action d-flex align-items-center text-danger fs-6">
                <i class="fas fa-sign-out-alt me-3"></i> <span class="fw-semibold">Logout</span>
            </a>
        </div>
    </div>
</div>
