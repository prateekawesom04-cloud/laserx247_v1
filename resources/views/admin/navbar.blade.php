    <nav class="navbar">
        <div class="container-fluid">
            <ul class="navbar-nav flex-row w-100">
                <li class="nav-item">
                    <a class="nav-link active-nav" href="{{ route('admin.index') }}">Dashboard</a>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">Downline List</a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="{{ route('admin.user_downline_list') }}">User Downline
                                List</a></li>
                        <li>
                            <a class="dropdown-item" href="{{ route('admin.master_downline_list') }}">Master Downline
                                List</a>
                        </li>
                    </ul>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="{{ route('admin.my_account') }}">My Account</a>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">My Report</a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="{{ route('admin.event_profit_loss') }}">Event Profit/Loss</a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="{{ route('admin.downline_profit_loss') }}">Downline
                                Profit/Loss</a>
                        </li>
                    </ul>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="{{ route('admin.betlist') }}">BetList</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="{{ route('admin.market_analysis') }}">Market Analysis</a>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">Banking</a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="{{ route('admin.user_banking') }}">User Banking</a></li>
                        <li><a class="dropdown-item" href="{{ route('admin.master_banking') }}">Master Banking</a></li>
                    </ul>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">Payments</a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="{{ route('admin.payment_setup') }}">Payment Setup</a></li>
                        <li><a class="dropdown-item" href="{{ route('admin.deposit_request') }}">Deposit Request</a>
                        </li>
                        <li><a class="dropdown-item" href="{{ route('admin.withdraw_request') }}">Withdraw Request</a>
                        </li>
                    </ul>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="{{ route('admin.commission') }}">Commission</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="{{ route('admin.password_history') }}">Password History</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="{{ route('admin.restore_user') }}">Restore User</a>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">My Setting</a>
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
        // Simple active link functionality
        document.querySelectorAll(".nav-link, .dropdown-item").forEach((link) => {
            link.addEventListener("click", function() {
                // Remove active from all
                document
                    .querySelectorAll(".nav-link, .dropdown-item")
                    .forEach((l) => l.classList.remove("active-nav"));

                // Add active to clicked
                this.classList.add("active-nav");
            });
        });

        // Mobile dropdown positioning
        document.querySelectorAll(".dropdown-toggle").forEach((toggle) => {
            toggle.addEventListener("click", function() {
                if (window.innerWidth <= 991) {
                    setTimeout(() => {
                        const menu = this.nextElementSibling;
                        const rect = this.getBoundingClientRect();

                        menu.style.position = "fixed";
                        menu.style.top = rect.bottom + 2 + "px";
                        menu.style.left =
                            Math.min(rect.left, window.innerWidth - 200) + "px";
                    }, 10);
                }
            });
        });
    </script>
