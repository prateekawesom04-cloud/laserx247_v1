<!-- Account Offcanvas -->
<div class="offcanvas offcanvas-end fw-bold md:!w-max" tabindex="-1" id="accountPanel" aria-labelledby="accountPanelLabel">
    <!-- Header -->
    <div class="offcanvas-header app_bar flex flex-row gap-3">
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
            <a href="{{route('user.profile')}}" class="list-group-item list-group-item-action d-flex align-items-center fs-7 mb-1">
                🧑 <span class="ms-2">Profile</span>
            </a>
            <a href="{{ route('user.deposit') }}" class="list-group-item list-group-item-action d-flex align-items-center fs-7 mb-1">
                💰 <span class="ms-2">Deposit</span>
            </a>
            <a href="{{ route('user.withdrawal') }}" class="list-group-item list-group-item-action d-flex align-items-center fs-7 mb-1">
                💸 <span class="ms-2">Withdrawal</span>
            </a>
            <a href="{{ route('user.enterStakes') }}" class="list-group-item list-group-item-action d-flex align-items-center fs-7 mb-1">
                ✏️ <span class="ms-2">Edit Stakes</span>
            </a>
            <a href="{{route('user.transaction')}}" class="list-group-item list-group-item-action d-flex align-items-center fs-7 mb-1">
                📄 <span class="ms-2">Transactions</span>
            </a>
            <a href="{{route('user.profit_loss')}}" class="list-group-item list-group-item-action d-flex align-items-center fs-7 mb-1">
                ⚖️ <span class="ms-2">Profit / Loss</span>
            </a>
            <a href="{{route('user.favourite')}}" class="list-group-item list-group-item-action d-flex align-items-center fs-7 mb-1">
                ⭐ <span class="ms-2">Favourite</span>
            </a>
            <a href="{{route('user.refer_rewards')}}" class="list-group-item list-group-item-action d-flex align-items-center fs-7 mb-1">
                🤝 <span class="ms-2">Refer and Earn</span>
            </a>
            <a href="{{route('user.statements')}}" class="list-group-item list-group-item-action d-flex align-items-center fs-7 mb-1">
                📑 <span class="ms-2">Account Statement</span>
            </a>
            <a href="{{route('user.bonus')}}" class="list-group-item list-group-item-action d-flex align-items-center fs-7 mb-1">
                🎁 <span class="ms-2">Bonus</span>
            </a>
            <a href="{{route('user.game_statics')}}" class="list-group-item list-group-item-action d-flex align-items-center fs-7 mb-1">
                📊 <span class="ms-2">Game statics</span>
            </a>
            <a href="{{route('user.notification')}}" class="list-group-item list-group-item-action d-flex align-items-center fs-7 mb-1">
                🔔 <span class="ms-2">Notification</span>
            </a>
            <a href="{{route('user.unsettled_bets')}}" class="list-group-item list-group-item-action d-flex align-items-center fs-7 mb-1">
                ⏳ <span class="ms-2">Unsettled Bets</span>
            </a>
            <a href="{{route('user.change_password')}}" class="list-group-item list-group-item-action d-flex align-items-center fs-7 mb-1">
                🔐 <span class="ms-2">Change Password</span>
            </a>
            <a href="{{url('logout')}}" class="list-group-item list-group-item-action d-flex align-items-center text-danger fs-6">
                🚪 <span class="ms-2">Logout</span>
            </a>
        </div>
    </div>
</div>
