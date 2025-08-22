<!-- Header -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark px-3">
      <!-- Logo -->
      <a class="navbar-brand" href="#">
        <img src="{{asset('images/logo.png')}}" alt="Logo" height="45" />
      </a>

      <!-- Toggler for Mobile -->
      <button
        class="navbar-toggler"
        type="button"
        data-bs-toggle="collapse"
        data-bs-target="#navbarContent"
      >
        <span class="navbar-toggler-icon"></span>
      </button>

      <!-- Collapsible Content -->
      <div class="collapse navbar-collapse justify-content-end" id="navbarContent">
        @if(session()->has('user_session'))
        <!-- Logged In Info (Hidden by Default, Show After Login) -->
        <div class="d-none d-lg-flex align-items-center me-3" id="loggedInInfo">
          <span class="me-3 text-white">Bal 0 Exp 0</span>

          <!-- User Dropdown -->
          <div class="dropdown">
            <button
              class="btn btn-dark dropdown-toggle d-flex align-items-center"
              type="button"
              data-bs-toggle="dropdown"
              aria-expanded="false"
            >
              <img
                src="image/default-user-icon.svg"
                alt="User"
                class="rounded-circle me-2"
                width="24"
                height="24"
              />
              Demo123
            </button>

            <ul class="dropdown-menu dropdown-menu-end bg-dark text-white">
              <li>
                <h6 class="dropdown-header bg-info text-white">Demo123</h6>
              </li>
              <li><hr class="dropdown-divider" /></li>
              <li><a class="dropdown-item text-white" href="#"><i class="fas fa-wallet me-2 text-info"></i>Wallet</a></li>
              <li><a class="dropdown-item text-white" href="#"><i class="fas fa-user me-2 text-info"></i>Profile</a></li>
              <li><a class="dropdown-item text-white" href="#"><i class="fas fa-star me-2 text-info"></i>Favourite</a></li>
              <li><a class="dropdown-item text-white" href="#"><i class="fas fa-gift me-2 text-info"></i>Refer & Earn</a></li>
              <li><a class="dropdown-item text-white" href="#"><i class="fas fa-file-alt me-2 text-info"></i>Account Statement</a></li>
              <li><a class="dropdown-item text-white" href="#"><i class="fas fa-clock me-2 text-info"></i>Unsettled Bets</a></li>
              <li><a class="dropdown-item text-white" href="#"><i class="fas fa-chart-line me-2 text-info"></i>Profit/Loss</a></li>
              <li><a class="dropdown-item text-white" href="#"><i class="fas fa-chart-bar me-2 text-info"></i>Market Analysis</a></li>
              <li><a class="dropdown-item text-white" href="#"><i class="fas fa-key me-2 text-info"></i>Change Password</a></li>
              <li><hr class="dropdown-divider" /></li>
              <li>
                <button class="dropdown-item text-danger fw-bold">
                  <i class="fas fa-sign-out-alt me-2"></i> LOGOUT
                </button>
              </li>
            </ul>
          </div>
        </div>
        @endif
        <!-- Desktop Auth -->
        <div class="d-none d-lg-flex align-items-center">
          <a href="sign-up" class="btn btn-danger">Register</a>
          <a href="login" class="btn btn-danger me-2">Log In</a>
        </div>

        <!-- Mobile Auth -->
        <div class="d-lg-none mt-2">
          <a href="signup" class="btn btn-danger me-2">Sign Up</a>
          <a href="login" class="btn btn-danger">Login</a>
        </div>
      </div>
    </nav>