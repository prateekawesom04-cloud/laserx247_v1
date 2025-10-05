<!-- Header -->
<div class="responsive-header">
    <div class="header-inner flex flex-row">
        <!-- Logo Section -->
        <div class="logo-section w-25">
            <img src="{{ asset('images/A_logo.png') }}" alt="Logo" class="header-logo" />
        </div>

        <!-- Admin Info Section -->
        <div class="admin-info w-75">
            <div class="admin-row">
                {{-- <span class="admin-badge">Admin</span> --}}

                <div class="dropdown">
                    <a class="admin-name dropdown-toggle" href="#" role="button" id="adminDropdown"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        admin1234
                    </a>
                    <ul class="dropdown-menu dropdown-menu-end fw-light" aria-labelledby="adminDropdown">
                        <li><a class="dropdown-item" href="#"><i class="fa-solid fa-coins me-2"></i>Coins: <span>{{$userData->wallet_amount}} </a></span></li>
                        <li><a class="dropdown-item" href="#"><i class="fa-solid fa-lock me-2"></i>Change
                                Password</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
