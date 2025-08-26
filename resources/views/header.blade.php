<nav class="navbar navbar-dark bg-dark px-3 py-2">
    <div class="container-fluid">
        <img src="{{ asset('images/logo.png') }}" alt="Logo" height="35" />
        <div class="d-flex ms-auto align-items-center">
            <!-- Notification Bell Icon -->
            <button class="btn p-0 me-3" data-bs-toggle="offcanvas" data-bs-target="#notificationPanel"
                aria-controls="notificationPanel" style="color: white; font-size: 20px;">
                <i class="fas fa-bell"></i>
            </button>

            <a href="login" class="btn btn-outline-danger btn-sm me-2">Login</a>
            <a href="register" class="btn btn-outline-danger btn-sm me-2">Register</a>
            <a href="#" class="btn btn-outline-danger btn-sm" data-bs-toggle="offcanvas"
                data-bs-target="#accountPanel" aria-controls="accountPanel">My Account</a>
        </div>
    </div>
</nav>

<!-- 🔔 Notification Offcanvas Panel -->
<div class="offcanvas offcanvas-end" tabindex="-1" id="notificationPanel" aria-labelledby="notificationPanelLabel">
    <div class="offcanvas-header border-bottom">
        <h5 class="offcanvas-title" id="notificationPanelLabel">Notifications</h5>
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body">

        <!-- Tabs -->
        <div class="btn-group w-100 mb-4" role="group">
            <button type="button" class="btn btn-outline-secondary active">All</button>
            <button type="button" class="btn btn-outline-secondary">Promo</button>
            <button type="button" class="btn btn-outline-secondary">Sports</button>
            <button type="button" class="btn btn-outline-secondary">Casino</button>
            <button type="button" class="btn btn-outline-secondary">Account</button>
        </div>

        <!-- Empty State -->
        <div class="text-center text-muted mt-5">
            <i class="fas fa-bell fa-3x mb-3"></i>
            <h6>Notification center is empty</h6>
            <p class="small">Please refresh the page, and maybe we will surprise you</p>
        </div>

    </div>
</div>

<!-- Account Offcanvas  -->
<div class="offcanvas offcanvas-end" tabindex="-1" id="accountPanel" aria-labelledby="accountPanelLabel">
    <div class="offcanvas-header bg-primary text-white">
        <div>
            <h5 class="mb-0" id="accountPanelLabel">12faf4cf3444</h5>
            <small class="account-info">Last Login: 1756100089</small>
        </div>
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas"
            aria-label="Close"></button>
    </div>
    <div class="offcanvas-body p-0 bg-light">
        <div class="list-group list-group-flush">
            <a href="javascript:void(0)" class="menu-item"><i class="fas fa-user me-2"></i> Profile</a>
            <a href="wallet" class="menu-item"><i class="fas fa-wallet me-2"></i> Wallet</a>
            <a href="deposit-withdrawal" class="menu-item"><i class="fas fa-plus-circle me-2 text-success"></i>
                Deposit/Withdrawal</a>
            <a href="javascript:void(0)" class="menu-item"><i class="fas fa-balance-scale me-2"></i> Profit/Loss</a>
            <a href="javascript:void(0)" class="menu-item"><i class="fas fa-star me-2"></i> Favourite</a>
            <a href="javascript:void(0)" class="menu-item"><i class="fas fa-user-friends me-2"></i> Refer And Earn</a>
            <a href="statements" class="menu-item"><i class="fas fa-file-alt me-2"></i> Account Statement</a>
            <a href="javascript:void(0)" class="menu-item"><i class="fas fa-tasks me-2"></i> Unsettled Bets</a>
            <a href="javascript:void(0)" class="menu-item"><i class="fas fa-chart-pie me-2"></i> Market Analysis</a>
            <a href="change_password" class="menu-item"><i class="fas fa-key me-2"></i> Change Password</a>
            <a href="javascript:void(0)" class="menu-item text-danger"><i class="fas fa-sign-out-alt me-2"></i>
                Logout</a>
        </div>
    </div>
</div>
