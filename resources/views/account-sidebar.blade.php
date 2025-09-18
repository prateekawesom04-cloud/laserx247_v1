<!-- Account Offcanvas -->
<div class="offcanvas offcanvas-end fw-bold" tabindex="-1" id="accountPanel" aria-labelledby="accountPanelLabel">
    <!-- Header -->
    <div class="offcanvas-header app_bar text-white">
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
                Account ID: <span class="text-warning fs-6">{{ $userData->phone }}</span>
            </h5>
            <small class="d-block mt-1 text-white-50 fs-7">
                Last Login: <span class="fst-italic fs-7">{{ $userData->updated_at }}</span>
            </small>
        </div>
        @endif
        <a type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></a>
    </div>

    <!-- Body -->
    <div class="offcanvas-body app_bar p-3">
        <div class="list-group list-group-flush">
            <a href="{{route('user.profile')}}" class="list-group-item list-group-item-action d-flex align-items-center fs-7 mb-3">
                <i class="fas fa-user me-3 text-primary"></i> <span class="">Profile</span>
            </a>
            {{-- <a href="{{route('user.wallet')}}" class="list-group-item list-group-item-action d-flex align-items-center fs-7 mb-3">
                <i class="fas fa-wallet me-3 text-success"></i> <span class="">Wallet</span>
            </a> --}}
            <a href="{{ route('user.deposit') }}"
                class="list-group-item list-group-item-action d-flex align-items-center fs-7 mb-3">
                <i class="fas fa-money-bill-wave me-3 text-success"></i> <span class="">Deposit</span>
            </a>
            <a href="{{ route('user.withdrawal') }}"
                class="list-group-item list-group-item-action d-flex align-items-center fs-7 mb-3">
                <i class="fas fa-wallet me-3 text-danger"></i> <span class="">Withdrawal</span>
            </a>
            <a href="{{ route('user.enterStakes') }}"
                class="list-group-item list-group-item-action d-flex align-items-center fs-7 mb-3">
                <i class="fas fa-pen me-3 text-info"></i> <span class="">Edit Stakes</span>
            </a>
            <a href="{{route('user.transaction')}}" class="list-group-item list-group-item-action d-flex align-items-center fs-7 mb-3">
                <i class="fas fa-file-alt me-3 text-primary"></i> <span class="">Transactions</span>
            </a>
            <a href="{{route('user.profit_loss')}}" class="list-group-item list-group-item-action d-flex align-items-center fs-7 mb-3">
                <i class="fas fa-balance-scale me-3 text-info"></i> <span class="">Profit / Loss</span>
            </a>
            <a href="{{route('user.favourite')}}" class="list-group-item list-group-item-action d-flex align-items-center fs-7 mb-3">
                <i class="fas fa-star me-3 text-warning"></i> <span class="">Favourite</span>
            </a>
            <a href="{{route('user.refer_rewards')}}" class="list-group-item list-group-item-action d-flex align-items-center fs-7 mb-3">
                <i class="fas fa-handshake me-3 text-info"></i> <span class="">Refer and Earn</span>
            </a>
            <a href="{{route('user.statements')}}" class="list-group-item list-group-item-action d-flex align-items-center fs-7 mb-3">
                <i class="fas fa-file-alt me-3 text-primary"></i> <span class="">Account Statement</span>
            </a>
            <a href="{{route('user.bonus')}}" class="list-group-item list-group-item-action d-flex align-items-center fs-7 mb-3">
                <i class="fas fa-gift me-3 text-success"></i> <span class="">Bonus</span>
            </a>
            <a href="{{route('user.game_statics')}}" class="list-group-item list-group-item-action d-flex align-items-center fs-7 mb-3">
                <i class="fas fa-chart-line me-3 text-info"></i> <span class="">Game statics</span>
            </a>
            <a href="{{route('user.notification')}}" class="list-group-item list-group-item-action d-flex align-items-center fs-7 mb-3">
                <i class="fas fa-bell me-3 text-warning"></i> <span class="">Notification</span>
            </a>
            <a href="{{route('user.unsettled_bets')}}" class="list-group-item list-group-item-action d-flex align-items-center fs-7 mb-3">
                <i class="fas fa-clock me-3 text-danger"></i> <span class="">Unsettled Bets</span>
            </a>
            {{-- <a href="{{route('user.market_analysis')}}" class="list-group-item list-group-item-action d-flex align-items-center fs-7 mb-3">
                <i class="fas fa-chart-pie me-3 text-danger"></i> <span class="">Market Analysis</span>
            </a> --}}
            <a href="{{route('user.change_password')}}" class="list-group-item list-group-item-action d-flex align-items-center fs-7 mb-3">
                <i class="fas fa-key me-3 text-warning"></i> <span class="">Change Password</span>
            </a>
            <a href="{{url('logout')}}" class="list-group-item list-group-item-action d-flex align-items-center text-danger fs-6">
                <i class="fas fa-sign-out-alt me-3"></i> <span class="">Logout</span>
            </a>
        </div>
    </div>
</div>