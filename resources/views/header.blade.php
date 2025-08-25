<nav class="navbar navbar-dark bg-dark px-3 py-2">
  <div class="container-fluid">
    <img src="{{ asset('images/logo.png') }}" alt="Logo" height="35" />
    <div class="d-flex ms-auto">
      <a href="login" class="btn btn-outline-danger btn-sm me-2">Login</a>
      <a href="register" class="btn btn-outline-danger btn-sm me-2">Register</a>
     <a href="#" class="btn btn-outline-danger btn-sm" data-bs-toggle="offcanvas" data-bs-target="#accountPanel" 
   aria-controls="accountPanel">My Account</a>
    </div>
  </div>
</nav>

<!-- Offcanvas Panel -->
<div class="offcanvas offcanvas-end" tabindex="-1" id="accountPanel" aria-labelledby="accountPanelLabel">
  <div class="offcanvas-header bg-primary text-white">
    <div>
      <h5 class="mb-0" id="accountPanelLabel">12faf4cf3444</h5>
      <small class="account-info">Last Login: 1756100089</small>
    </div>
    <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
  </div>
  <div class="offcanvas-body p-0 bg-light">
    <div class="list-group list-group-flush">
      <div class="menu-item"><i class="fas fa-user me-2"></i> Profile</div>
      <div class="menu-item"><i class="fas fa-wallet me-2"></i> Wallet</div>
      <div class="menu-item"><i class="fas fa-plus-circle me-2 text-success"></i> Deposit/Withdrawal</div>
      <div class="menu-item"><i class="fas fa-balance-scale me-2"></i> Profit/Loss</div>
      <div class="menu-item"><i class="fas fa-star me-2"></i> Favourite</div>
      <div class="menu-item"><i class="fas fa-user-friends me-2"></i> Refer And Earn</div>
      <div class="menu-item"><i class="fas fa-file-alt me-2"></i> Account Statement</div>
      <div class="menu-item"><i class="fas fa-tasks me-2"></i> Unsettled Bets</div>
      <div class="menu-item"><i class="fas fa-chart-pie me-2"></i> Market Analysis</div>
      <div class="menu-item"><i class="fas fa-key me-2"></i> Change Password</div>
      <div class="menu-item text-danger"><i class="fas fa-sign-out-alt me-2"></i> Logout</div>
</div>
  </div>
</div>