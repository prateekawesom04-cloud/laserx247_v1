@extends('admin.master')

@section('body')
<div class="container-fluid py-4">
    <form id="createAccountForm">

        <!-- Account Details -->
        <div class="card mb-4 shadow-sm border-0">
            <div class="card-header bg-primary text-white py-1">
                <h5 class="mb-0">
                    <i class="fa-solid fa-id-badge me-2"></i> Account Details
                </h5>
            </div>
            <div class="card-body">
                <div class="row g-4">
                    <div class="col-md-6">
                        <label for="accountType" class="form-label">
                            <i class="fas fa-user-tag me-1 text-primary"></i> Account Type
                        </label>
                        <select id="accountType" class="form-select border-2" required>
                            <option selected disabled>Select User Type</option>
                            <option value="admin">👤 Admin</option>
                            <option value="super_admin">⭐ Super Admin</option>
                            <option value="super_master">🎯 Super Master</option>
                            <option value="master">🔧 Master</option>
                            <option value="agent">🤝 Agent</option>
                            <option value="user">👨‍💼 User</option>
                        </select>
                    </div>
                    <div class="col-md-6">
                        <label for="clientName" class="form-label">
                            <i class="fas fa-building me-1 text-primary"></i> Client Name
                        </label>
                        <input id="clientName" type="text" class="form-control border-2" placeholder="Enter Client Name" required>
                    </div>
                </div>
            </div>
        </div>

        <!-- Personal Details -->
        <div class="card mb-4 shadow-sm border-0">
            <div class="card-header bg-success text-white py-1">
                <h5 class="mb-0">
                    <i class="fa-solid fa-address-card me-2"></i> Personal Details
                </h5>
            </div>
            <div class="card-body">
                <div class="row g-4">
                    <div class="col-md-6">
                        <label for="username" class="form-label">
                            <i class="fas fa-user me-1 text-success"></i> User Name
                        </label>
                        <input id="username" type="text" class="form-control border-2" required>
                    </div>
                    <div class="col-md-6">
                        <label for="referenceName" class="form-label">
                            <i class="fas fa-user-friends me-1 text-success"></i> Reference Name
                        </label>
                        <input id="referenceName" type="text" class="form-control border-2">
                    </div>
                    <div class="col-md-6">
                        <label for="password" class="form-label">
                            <i class="fas fa-lock me-1 text-success"></i> Password
                        </label>
                        <div class="input-group">
                            <input id="password" type="password" class="form-control border-2" required>
                            <a class="btn btn-outline-success" type="button">
                                <i class="fas fa-eye"></i>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <label for="confirmPassword" class="form-label">
                            <i class="fas fa-lock me-1 text-success"></i> Retype Password
                        </label>
                        <div class="input-group">
                            <input id="confirmPassword" type="password" class="form-control border-2" required>
                            <a class="btn btn-outline-success" type="button">
                                <i class="fas fa-eye"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Commission -->
        <div class="card mb-4 shadow-sm border-0">
            <div class="card-header bg-info text-white py-1">
                <h5 class="mb-0">
                    <i class="fa-solid fa-percent me-2"></i> Commission: Cricket / Soccer / Tennis
                </h5>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-8 mx-auto">
                        <label for="commission" class="form-label">
                            <i class="fas fa-chart-line me-1 text-info"></i> Commission M.O
                        </label>
                        <div class="input-group">
                            <span class="input-group-text bg-info text-white border-0">
                                <i class="fas fa-percentage"></i>
                            </span>
                            <input id="commission" type="number" class="form-control border-2 text-center" min="0" max="100" value="1">
                            <span class="input-group-text bg-light border-2">%(1%)</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- User Settings -->
        <div class="card mb-4 shadow-sm border-0">
            <div class="card-header bg-warning text-dark py-1">
                <h5 class="mb-0">
                    <i class="fa-solid fa-gear me-2"></i> User Settings
                </h5>
            </div>
            <div class="card-body">
                <div class="row g-4">
                    <div class="col-md-6">
                        <label for="maxBet" class="form-label">
                            <i class="fas fa-coins me-1 text-warning"></i> Max Bet
                        </label>
                        <div class="input-group">
                            <span class="input-group-text bg-warning border-0">₹</span>
                            <input id="maxBet" type="number" class="form-control border-2 text-center" min="0" value="0">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <label for="maxProfit" class="form-label">
                            <i class="fas fa-trophy me-1 text-warning"></i> Max Profit
                        </label>
                        <div class="input-group">
                            <span class="input-group-text bg-warning border-0">₹</span>
                            <input id="maxProfit" type="number" class="form-control border-2 text-center" min="0" value="0">
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Partnership Sharing -->
        <div class="card mb-4 shadow-sm border-0">
            <div class="card-header bg-secondary text-white py-1">
                <h5 class="mb-0">
                    <i class="fa-solid fa-users me-2"></i> Partnership Sharing
                </h5>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-8 mx-auto">
                        <label for="sharing" class="form-label">
                            <i class="fas fa-handshake me-1 text-secondary"></i> Downline Sharing
                        </label>
                        <div class="input-group">
                            <span class="input-group-text bg-secondary text-white border-0">
                                <i class="fas fa-share-alt"></i>
                            </span>
                            <input id="sharing" type="number" class="form-control border-2 text-center" min="0" max="100">
                            <span class="input-group-text bg-light border-2">%(My Sharing 0%)</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Sport & Casino Balance -->
        <div class="card mb-4 shadow-sm border-0">
            <div class="card-header bg-dark text-white py-1">
                <h5 class="mb-0">
                    <i class="fa-solid fa-coins me-2"></i> Sport & Casino Balance
                </h5>
            </div>
            <div class="card-body">
                <div class="row g-4">
                    <div class="col-md-4">
                        <label for="creditRef" class="form-label">
                            <i class="fas fa-credit-card me-1 text-dark"></i> Credit Reference
                        </label>
                        <input id="creditRef" type="text" class="form-control border-2">
                    </div>
                    <div class="col-md-4">
                        <label for="deposit" class="form-label">
                            <i class="fas fa-plus-circle me-1 text-success"></i> Add Deposit
                        </label>
                        <div class="input-group">
                            <span class="input-group-text bg-success text-white border-0">₹</span>
                            <input id="deposit" type="number" class="form-control border-2 text-center">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <label for="depositRemark" class="form-label">
                            <i class="fas fa-comment me-1 text-dark"></i> Deposit Remark
                        </label>
                        <input id="depositRemark" type="text" class="form-control border-2">
                    </div>
                </div>
            </div>
        </div>

        <!-- Security -->
        <div class="card mb-4 shadow-sm border-0">
            <div class="card-header bg-danger text-white py-1">
                <h5 class="mb-0">
                    <i class="fa-solid fa-shield me-2"></i> Security
                </h5>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-8 mx-auto">
                        <label for="masterPassword" class="form-label">
                            <i class="fas fa-key me-1 text-danger"></i> Master Password
                        </label>
                        <div class="input-group">
                            <span class="input-group-text bg-danger text-white border-0">
                                <i class="fas fa-shield-alt"></i>
                            </span>
                            <input id="masterPassword" type="password" class="form-control border-2" required>
                            <a class="btn btn-outline-danger" type="button">
                                <i class="fas fa-eye"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Submit Button -->
        <div class="text-center mb-5">
            <a type="submit" class="btn btn-success px-5 py-1 shadow-lg">
                <i class="fa-solid fa-circle-plus me-2"></i>
                Create Account
            </a>
        </div>
    </form>
</div>
@endsection
