<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>My Account Offcanvas</title>

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Font Awesome -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" rel="stylesheet">

  <style>
    .offcanvas-header {
      background: linear-gradient(to right, #00c6ff, #0072ff);
      color: white;
    }

    .offcanvas-body {
      background-color: #f8f9fa;
    }

    .account-info {
      font-size: 14px;
    }

    .menu-item {
      display: flex;
      align-items: center;
      gap: 10px;
      padding: 12px;
      border-bottom: 1px solid #e9ecef;
      cursor: pointer;
    }

    .menu-item:hover {
      background-color: #e2f0ff;
    }
  </style>
</head>
<body>

  <!-- YOUR EXACT ANCHOR TAG -->
  

  <!-- Bootstrap Offcanvas -->
  <div class="offcanvas offcanvas-end" tabindex="-1" id="accountPanel">
    <div class="offcanvas-header">
      <div>
        <h5 class="mb-0">12faf4cf3444</h5>
        <small class="account-info">Last Login: 1756100089</small>
      </div>
      <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas"></button>
    </div>

    <div class="offcanvas-body p-0">
      <div class="list-group list-group-flush">
        <div class="menu-item"><i class="fas fa-wallet"></i> Wallet</div>
        <div class="menu-item"><i class="fas fa-user"></i> Profile</div>
        <div class="menu-item"><i class="fas fa-star"></i> Favourite</div>
        <div class="menu-item"><i class="fas fa-user-friends"></i> Refer And Earn</div>
        <div class="menu-item"><i class="fas fa-file-alt"></i> Account Statement</div>
        <div class="menu-item"><i class="fas fa-tasks"></i> Unsettled Bets</div>
        <div class="menu-item"><i class="fas fa-balance-scale"></i> Profit/Loss</div>
        <div class="menu-item"><i class="fas fa-chart-pie"></i> Market Analysis</div>
        <div class="menu-item"><i class="fas fa-key"></i> Change Password</div>
        <div class="menu-item text-danger"><i class="fas fa-sign-out-alt"></i> Logout</div>
      </div>
    </div>
  </div>

  <!-- Bootstrap JS Bundle -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

  <!-- JavaScript to handle the anchor click -->
  <script>
    document.getElementById("myAccountBtn").addEventListener("click", function (e) {
      e.preventDefault(); // prevent navigation to "account"
      const offcanvas = new bootstrap.Offcanvas(document.getElementById("accountPanel"));
      offcanvas.show();
    });
  </script>
</body>
</html>
