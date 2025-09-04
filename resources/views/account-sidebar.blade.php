<!-- Account Offcanvas -->
<div class="offcanvas offcanvas-end fst-italic" tabindex="-1" id="accountPanel" aria-labelledby="accountPanelLabel">
    <!-- Header -->
    <div class="offcanvas-header bg-primary text-white">
        @if (!session('user_session'))
        <div>
            <h5 class="mb-0 fw-bold fs-6" id="accountPanelLabel">
                Account ID: <span class="text-warning fs-6">12faf4cf3444</span>
            </h5>
            <small class="d-block mt-1 text-white-50 fs-7">
                Last Login: <span class="fst-italic fs-7">1756100089</span>
            </small>
        </div>
        @else
        <div>
            <h5 class="mb-0 fw-bold fs-6" id="accountPanelLabel">
                Account ID: <span class="text-warning fs-6">{{ $userData->user_uid }}</span>
            </h5>
            <small class="d-block mt-1 text-white-50 fs-7">
                Last Login: <span class="fst-italic fs-7">{{ $userData->updated_at }}</span>
            </small>
        </div>
        @endif
        <a type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></a>
    </div>

    <!-- Body -->
    <div class="offcanvas-body p-3 bg-light">
        <div class="list-group list-group-flush">
            <a href="profile" class="list-group-item list-group-item-action d-flex align-items-center fs-7 mb-3">
                <i class="fas fa-user me-3 text-primary"></i> <span class="fw-semibold">Profile</span>
            </a>
            {{-- <a href="wallet" class="list-group-item list-group-item-action d-flex align-items-center fs-7 mb-3">
                <i class="fas fa-wallet me-3 text-success"></i> <span class="fw-semibold">Wallet</span>
            </a> --}}
            <a href="{{ url('/deposit') }}"
                class="list-group-item list-group-item-action d-flex align-items-center fs-7 mb-3">
                <i class="fas fa-plus-circle me-3 text-success"></i> <span class="fw-semibold">Deposit / Withdrawal</span>
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
            {{-- <a href="market_analysis" class="list-group-item list-group-item-action d-flex align-items-center fs-7 mb-3">
                <i class="fas fa-chart-pie me-3 text-danger"></i> <span class="fw-semibold">Market Analysis</span>
            </a> --}}
            <a href="change_password" class="list-group-item list-group-item-action d-flex align-items-center fs-7 mb-3">
                <i class="fas fa-key me-3 text-warning"></i> <span class="fw-semibold">Change Password</span>
            </a>
            <a href="{{url('logout')}}" class="list-group-item list-group-item-action d-flex align-items-center text-danger fs-6">
                <i class="fas fa-sign-out-alt me-3"></i> <span class="fw-semibold">Logout</span>
            </a>
        </div>
    </div>
</div>