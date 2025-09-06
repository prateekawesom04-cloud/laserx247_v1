    <nav class="navbar">
      <div class="container-fluid">
        <ul class="navbar-nav flex-row w-100">
          <li class="nav-item">
            <a class="nav-link active-nav" href="{{ route('admin.index') }}">Dashboard</a>
          </li>

          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#">Downline List</a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="{{ route('admin.user_downline_list') }}">User Downline List</a></li>
              <li>
                <a class="dropdown-item" href="{{ route('admin.master_downline_list') }}">Master Downline List</a>
              </li>
            </ul>
          </li>

          <li class="nav-item"><a class="nav-link" href="{{ route('admin.my_account') }}">My Account</a></li>

          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#">My Report</a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="{{ route('admin.event_profit_loss') }}">Event Profit/Loss</a></li>
              <li>
                <a class="dropdown-item" href="{{ route('admin.downline_profit_loss') }}">Downline Profit/Loss</a>
              </li>
            </ul>
          </li>

          <li class="nav-item"><a class="nav-link" href="{{ route('admin.betlist') }}">BetList</a></li>
          <li class="nav-item">
            <a class="nav-link" href="{{ route('admin.market_analysis') }}">Market Analysis</a>
          </li>

          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#">Banking</a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="{{ route('admin.user_banking') }}">User Banking</a></li>
              <li><a class="dropdown-item" href="{{ route('admin.master_banking') }}">Master Banking</a></li>
            </ul>
          </li>

          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#">Payments</a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="{{ route('admin.payment_setup') }}">Payment Setup</a></li>
              <li><a class="dropdown-item" href="{{ route('admin.deposit_request') }}">Deposit Request</a></li>
              <li><a class="dropdown-item" href="{{ route('admin.withdraw_request') }}">Withdraw Request</a></li>
            </ul>
          </li>

          <li class="nav-item"><a class="nav-link" href="#">Commission</a></li>
          <li class="nav-item">
            <a class="nav-link" href="#">Password History</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Restore User</a>
          </li>

          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#">My Setting</a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="#">Admin Fund</a></li>
              <li><a class="dropdown-item" href="#">News</a></li>
              <li>
                <a class="dropdown-item" href="#">User General Setting</a>
              </li>
              <li><a class="dropdown-item" href="#">Block Market</a></li>
              <li><a class="dropdown-item" href="#">Event Wise Setting</a></li>
              <li><a class="dropdown-item" href="#">Betting</a></li>
              <li><a class="dropdown-item" href="#">Add Banner</a></li>
              <li><a class="dropdown-item" href="#">Add Number</a></li>
            </ul>
          </li>

          <li class="nav-item">
            <a class="nav-link fw-bold" href="#"><strong>Logout 🔒</strong></a>
          </li>
        </ul>
      </div>
    </nav>

    <script>
      // Active link
      const navLinks = document.querySelectorAll(".nav-link");
      navLinks.forEach((link) => {
        link.addEventListener("click", function () {
          navLinks.forEach((l) => l.classList.remove("active-nav"));
          this.classList.add("active-nav");
        });
      });

      // Dropdown toggle
      document.querySelectorAll(".dropdown-toggle").forEach((toggle) => {
        toggle.addEventListener("click", function (e) {
          e.preventDefault();
          const parent = this.parentElement;
          document.querySelectorAll(".dropdown").forEach((d) => {
            if (d !== parent) d.classList.remove("open");
          });
          parent.classList.toggle("open");
        });
      });

      // Close dropdown when clicked outside
      document.addEventListener("click", function (e) {
        if (!e.target.closest(".dropdown")) {
          document
            .querySelectorAll(".dropdown")
            .forEach((d) => d.classList.remove("open"));
        }
      });
    </script>