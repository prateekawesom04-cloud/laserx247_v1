@extends('admin.master')

@section('body')
    <div class="container-fluid py-4">
        <div class="row g-3">

            <!-- Sidebar -->
            <div class="col-12 col-md-4 col-lg-3">
                <div class="card shadow-sm h-100">
                    <div class="card-header bg-primary text-white fw-bold">Add Client</div>
                    <ul class="list-group list-group-flush">
                        <li>
                            <a href="javascript:void(0);" class="list-group-item list-group-item-action sidebar-link active"
                                data-target="manual-section">Manual Way</a>
                        </li>
                        <li>
                            <a href="javascript:void(0);" class="list-group-item list-group-item-action sidebar-link"
                                data-target="gateway-section">Payment Gateway</a>
                        </li>
                    </ul>
                </div>
            </div>

            <!-- Content Area -->
            <div class="col-12 col-md-8 col-lg-9 mx-auto">

                <!-- Manual Section -->
                <div id="manual-section">
                    {{-- Account Details --}}
                    <div class="card mb-4 shadow-sm border-0">
                        <div class="card-header bg-primary text-white d-flex align-items-center">
                            <i class="fa-solid fa-id-badge me-2"></i>
                            <strong>Account Details</strong>
                        </div>
                        <div class="card-body row g-4">
                            <div class="col-md-6">
                                <label for="account_type" class="form-label">Account Type</label>
                                <select class="form-select" name="account_type" id="account_type" required>
                                    <option selected disabled>Select User Type</option>
                                    <option value="admin">Admin</option>
                                    <option value="super_admin">Super Admin</option>
                                    <option value="super_master">Super Master</option>
                                    <option value="master">Master</option>
                                    <option value="agent">Agent</option>
                                    <option value="user">User</option>
                                </select>
                            </div>
                            <div class="col-md-6">
                                <label for="client_name" class="form-label">Client Name</label>
                                <input type="text" class="form-control" name="client_name" id="client_name"
                                    placeholder="Enter Client Name" required>
                            </div>
                        </div>
                    </div>

                    {{-- Personal Details --}}
                    <div class="card mb-4 shadow-sm border-0">
                        <div class="card-header bg-secondary text-white d-flex align-items-center">
                            <i class="fa-solid fa-id-badge me-2"></i>
                            <strong>Personal Details</strong>
                        </div>
                        <div class="card-body row g-4">
                            <div class="col-md-6">
                                <label for="username" class="form-label">User Name</label>
                                <input type="text" class="form-control" name="username" id="username" required>
                            </div>
                            <div class="col-md-6">
                                <label for="reference_name" class="form-label">Reference Name</label>
                                <input type="text" class="form-control" name="reference_name" id="reference_name">
                            </div>
                            <div class="col-md-6">
                                <label for="password" class="form-label">Password</label>
                                <input type="password" class="form-control" name="password" id="password" required>
                            </div>
                            <div class="col-md-6">
                                <label for="password_confirmation" class="form-label">Retype Password</label>
                                <input type="password" class="form-control" name="password_confirmation"
                                    id="password_confirmation" required>
                            </div>
                        </div>
                    </div>

                    {{-- Commission --}}
                    <div class="card mb-4 shadow-sm border-0" id="commission-section">
                        <div class="card-header bg-info text-white d-flex align-items-center">
                            <i class="fa-solid fa-percent me-2"></i>
                            <strong>Commission: Cricket / Soccer / Tennis</strong>
                        </div>
                        <div class="card-body">
                            <label for="commission_mo" class="form-label">Commission M.O</label>
                            <div class="input-group">
                                <input type="number" class="form-control" name="commission_mo" id="commission_mo"
                                    min="0" max="100" value="1">
                                <span class="input-group-text">%(1%)</span>
                            </div>
                        </div>
                    </div>

                    {{-- User Settings --}}
                    <div class="card mb-4 shadow-sm border-0" id="user-settings-section">
                        <div class="card-header bg-dark text-white d-flex align-items-center">
                            <i class="fa-solid fa-gear me-2"></i>
                            <strong>User Settings</strong>
                        </div>
                        <div class="card-body row g-4">
                            <div class="col-md-6">
                                <label for="max_bet" class="form-label">Max Bet</label>
                                <input type="number" class="form-control" name="max_bet" id="max_bet" min="0"
                                    value="0">
                            </div>
                            <div class="col-md-6">
                                <label for="max_profit" class="form-label">Max Profit</label>
                                <input type="number" class="form-control" name="max_profit" id="max_profit"
                                    min="0" value="0">
                            </div>
                        </div>
                    </div>

                    {{-- Partnership Sharing --}}
                    <div class="card mb-4 shadow-sm border-0" id="partnership-section">
                        <div class="card-header bg-info text-white d-flex align-items-center">
                            <i class="fa-solid fa-users me-2"></i>
                            <strong>Partnership Sharing</strong>
                        </div>
                        <div class="card-body">
                            <label for="downline_sharing" class="form-label">Downline Sharing</label>
                            <div class="input-group">
                                <input type="number" class="form-control" name="downline_sharing" id="downline_sharing"
                                    min="0" max="100">
                                <span class="input-group-text">%(My Sharing 0%)</span>
                            </div>
                        </div>
                    </div>

                    {{-- Sport & Casino Balance --}}
                    <div class="card mb-4 shadow-sm border-0" id="balance-section">
                        <div class="card-header bg-dark text-white d-flex align-items-center">
                            <i class="fa-solid fa-coins me-2"></i>
                            <strong>Sport & Casino Balance</strong>
                        </div>
                        <div class="card-body row g-4">
                            <div class="col-md-4">
                                <label for="credit_reference" class="form-label">Credit Reference</label>
                                <input type="text" class="form-control" name="credit_reference"
                                    id="credit_reference">
                            </div>
                            <div class="col-md-4">
                                <label for="add_deposit" class="form-label">Add Deposit</label>
                                <input type="number" class="form-control" name="add_deposit" id="add_deposit">
                            </div>
                            <div class="col-md-4">
                                <label for="deposit_remark" class="form-label">Deposit Remark</label>
                                <input type="text" class="form-control" name="deposit_remark" id="deposit_remark">
                            </div>
                        </div>
                    </div>

                    {{-- Master Password --}}
                    <div class="card mb-4 shadow-sm border-0">
                        <div class="card-header bg-danger text-white d-flex align-items-center">
                            <i class="fa-solid fa-shield me-2"></i>
                            <strong>Security</strong>
                        </div>
                        <div class="card-body">
                            <label for="master_password" class="form-label">Master Password</label>
                            <input type="password" class="form-control" name="master_password" id="master_password"
                                required>
                        </div>
                    </div>

                    <div class="d-grid mb-5">
                        <a type="submit" class="btn btn-success btn-lg">
                            <i class="fa-solid fa-circle-plus me-2"></i> Create Account
                        </a>
                    </div>
                </div>
                <!-- Payment Gateway Section -->
                <div id="gateway-section" style="display: none;">
                    <div class="card shadow-sm border-0">
                        <div class="card-header bg-warning text-dark d-flex align-items-center">
                            <i class="fa-solid fa-circle-plus me-2 fs-5"></i>
                            <strong>Payment Gateway</strong>
                        </div>
                        <div class="card-body">
                            <!-- Enter Amount -->
                            <div class="mb-4">
                                <label for="deposit-amount" class="form-label fw-semibold">Enter Amount</label>
                                <div class="input-group">
                                    <span class="input-group-text"><i class="fa-solid fa-indian-rupee-sign"></i></span>
                                    <input type="number" class="form-control" id="deposit-amount"
                                        placeholder="e.g. 500">
                                </div>
                            </div>

                            <!-- Quick Amount Buttons -->
                            <div class="row g-3 mb-4">
                                <div class="col-6 col-md-3">
                                    <a class="btn btn-outline-primary w-100 quick-amount" data-amount="300">300</a>
                                </div>
                                <div class="col-6 col-md-3">
                                    <a class="btn btn-outline-primary w-100 quick-amount" data-amount="500">500</a>
                                </div>
                                <div class="col-6 col-md-3">
                                    <a class="btn btn-outline-primary w-100 quick-amount" data-amount="1000">1000</a>
                                </div>
                                <div class="col-6 col-md-3">
                                    <a class="btn btn-outline-primary w-100 quick-amount" data-amount="2000">2000</a>
                                </div>
                            </div>

                            <!-- Submit Button -->
                            <div class="d-grid mb-4">
                                <a class="btn btn-success btn-lg">
                                    <i class="fa-solid fa-credit-card me-2"></i>Submit Deposit
                                </a>
                            </div>

                            <!-- Transaction Table -->
                            <div class="table-responsive">
                                <h6 class="text-dark fw-semibold mb-3">Transaction History</h6>
                                <table class="table table-bordered table-striped table-sm text-center align-middle">
                                    <thead class="table-dark">
                                        <tr class="small">
                                            <th>Payment Type</th>
                                            <th>Amount</th>
                                            <th>Status</th>
                                            <th>Date</th>
                                            <th>Transaction No</th>
                                            <th>Reason</th>
                                        </tr>
                                    </thead>
                                    <tbody class="small">
                                        <tr>
                                            <td>Deposit</td>
                                            <td>1000</td>
                                            <td><span class="badge bg-success">Success</span></td>
                                            <td>2025-09-12</td>
                                            <td>TXN123456</td>
                                            <td>Initial Deposit</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection

<!-- JS to toggle sections -->
<script>
    document.addEventListener('DOMContentLoaded', () => {
        // Sidebar links
        document.querySelectorAll('.sidebar-link').forEach(link => {
            link.addEventListener('click', () => {
                document.querySelectorAll('.sidebar-link').forEach(l => l.classList.remove(
                    'active'));
                link.classList.add('active');

                const target = link.getAttribute('data-target');
                ['manual', 'gateway'].forEach(key => {
                    document.getElementById(`${key}-section`).style.display = target
                        .includes(key) ? 'block' : 'none';
                });
            });
        });

        const accountType = document.getElementById('account_type');
        const cards = {
            commission: document.querySelector('.card:has(#commission_mo)'),
            userSettings: document.querySelector('.card:has(#max_bet)'),
            partnership: document.querySelector('.card:has(#downline_sharing)'),
            balance: document.querySelector('.card:has(#credit_reference)')
        };

        function updateSections() {
            const isUser = accountType.value === 'user';
            cards.commission.style.display = isUser ? 'block' : 'none';
            cards.userSettings.style.display = isUser ? 'block' : 'none';
            cards.partnership.style.display = isUser ? 'none' : 'block';
            cards.balance.style.display = isUser ? 'none' : 'block';
        }

        if (accountType) {
            accountType.addEventListener('change', updateSections);
            updateSections(); // run once on load
        }
        // Quick Amount Buttons
        const input = document.getElementById('deposit-amount');
        document.querySelectorAll('.quick-amount').forEach(btn =>
            btn.onclick = () => input.value = btn.dataset.amount
        );
    });
</script>
