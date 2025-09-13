@extends('admin.master')
@section('body')
    <!-- Responsive Account Page -->
    <div class="container-fluid p-4">
        <div class="row g-3">

            <!-- Sidebar -->
            <div class="col-12 col-md-4 col-lg-3">
                <div class="card shadow-sm h-100">
                    <div class="card-header bg-primary text-white fw-bold">
                        My Account
                    </div>

                    <!-- Grid layout for small screens, stacked for md -->
                    <ul class="list-group list-group-flush mb-0 d-none d-md-block">
                        <!-- Desktop (md and up): Stacked list -->
                        <li>
                            <a href="javascript:void(0);" class="list-group-item list-group-item-action sidebar-link active"
                                data-target="profile">My Profile</a>
                        </li>
                        <li>
                            <a href="javascript:void(0);" class="list-group-item list-group-item-action sidebar-link"
                                data-target="statement">Account Statement</a>
                        </li>
                        <li>
                            <a href="javascript:void(0);" class="list-group-item list-group-item-action sidebar-link"
                                data-target="activity">Activity Log</a>
                        </li>
                    </ul>

                    <div class="d-block d-md-none px-2 py-2">
                        <!-- Mobile/Tablet (below md): -->
                        <div class="row g-2 text-center">
                            <div class="col-4">
                                <a href="javascript:void(0);" class="btn btn-outline-primary w-100 sidebar-link active"
                                    data-target="profile">Profile</a>
                            </div>
                            <div class="col-4">
                                <a href="javascript:void(0);" class="btn btn-outline-primary w-100 sidebar-link"
                                    data-target="statement">Statement</a>
                            </div>
                            <div class="col-4">
                                <a href="javascript:void(0);" class="btn btn-outline-primary w-100 sidebar-link"
                                    data-target="activity">Activity</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Content Area -->
            <div class="col-12 col-md-8 col-lg-9 mx-auto">

                <!-- Profile Section -->
                <div id="profile-section">
                    <div class="card shadow-sm">
                        <div class="card-header bg-primary text-white fw-bold">Account Details</div>
                        <div class="card-body p-0">
                            <div class="d-flex justify-content-between align-items-center border-bottom px-3 py-2">
                                <div class="fw-bold text-muted">Name</div>
                                <div>agplaycrick99</div>
                            </div>
                            <div class="d-flex justify-content-between align-items-center border-bottom px-3 py-2">
                                <div class="fw-bold text-muted">Commission</div>
                                <div>0</div>
                            </div>
                            <!-- Rolling Commission -->
                            <div class="d-flex justify-content-between align-items-center border-bottom px-3 py-2">
                                <div class="fw-bold text-muted">Rolling Commission</div>
                                <div>

                                    <a href="#" data-bs-toggle="modal" data-bs-target="#rollingCommissionModal"
                                        title="Edit">
                                        <i class="fas fa-pen-to-square icon-btn"></i>
                                    </a>
                                    <a href="#" data-bs-toggle="modal" data-bs-target="#agentrollingCommissionModal"
                                        title="View">
                                        <i class="fas fa-eye icon-btn"></i>
                                    </a>
                                </div>
                            </div>

                            <!-- Agent Rolling Commission -->
                            <div class="d-flex justify-content-between align-items-center border-bottom px-3 py-2">
                                <div class="fw-bold text-muted">Agent Rolling Commission</div>
                                <a href="#" data-bs-toggle="modal" data-bs-target="#agentrollingCommissionModal"
                                    title="View">
                                    <i class="fas fa-eye icon-btn"></i>
                                </a>
                            </div>

                            <div class="d-flex justify-content-between align-items-center border-bottom px-3 py-2">
                                <div class="fw-bold text-muted">Currency</div>
                                <div>INR</div>
                            </div>
                            <div class="d-flex justify-content-between align-items-center border-bottom px-3 py-2">
                                <div class="fw-bold text-muted">Partnership</div>
                                <div>100</div>
                            </div>
                            <div class="d-flex justify-content-between align-items-center border-bottom px-3 py-2">
                                <div class="fw-bold text-muted">Mobile Number</div>
                                <div>0</div>
                            </div>
                            <div class="d-flex justify-content-between align-items-center px-3 py-2">
                                <div class="fw-bold text-muted">Password</div>
                                <div>********* <i class="fas fa-pen-to-square icon-btn" title="Edit Password"
                                        data-bs-toggle="modal" data-bs-target="#changePasswordModal"></i>
                                    </i></div>
                            </div>

                        </div>
                    </div>
                </div>

                <!-- Statement Section -->
                <div id="statement-section" style="display: none;">
                    <div class="card shadow-sm">
                        <div class="card-header bg-primary text-white fw-bold">Account Statement</div>
                        <div class="card-body">

                            <div class="row mb-3 g-2">
                                <div class="col-12 col-sm-6 col-md-4">
                                    <select class="form-control">
                                        <option>Data Source</option>
                                    </select>
                                </div>
                                <div class="col-6 col-sm-6 col-md-3">
                                    <input type="date" class="form-control" value="2025-09-02">
                                </div>
                                <div class="col-6 col-sm-6 col-md-3">
                                    <input type="date" class="form-control" value="2025-09-02">
                                </div>
                                <div class="col-12 col-md-2">
                                    <button class="btn btn-primary w-100">Get Statement</button>
                                </div>
                            </div>

                            <div class="table-responsive">
                                <table class="table table-bordered table-striped">
                                    <thead class="table-primary">
                                        <tr>
                                            <th>Date/Time</th>
                                            <th>Deposit</th>
                                            <th>Withdraw</th>
                                            <th>Balance</th>
                                            <th>Remarks</th>
                                            <th>From/To</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td colspan="6" class="text-center">No data!</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>

                        </div>
                    </div>
                </div>

                <!-- Activity Log Section -->
                <div id="activity-section" style="display: none;">
                    <div class="card shadow-sm">
                        <div class="card-header bg-primary text-white fw-bold">Activity Log</div>
                        <div class="card-body p-0">
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped mb-0">
                                    <thead class="table-primary">
                                        <tr>
                                            <th>Login Date & Time</th>
                                            <th>Login Status</th>
                                            <th>IP Address</th>
                                            <th>ISP</th>
                                            <th>City/State/Country</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>04-05-2024 10:16:03</td>
                                            <td class="text-success fw-bold">Login Successful</td>
                                            <td>0</td>
                                            <td>0</td>
                                            <td>0/0/0</td>
                                        </tr>
                                        <tr>
                                            <td>03-05-2024 17:44:10</td>
                                            <td class="text-success fw-bold">Login Successful</td>
                                            <td>0</td>
                                            <td>0</td>
                                            <td>0/0/0</td>
                                        </tr>
                                        <tr>
                                            <td>03-05-2024 10:51:24</td>
                                            <td class="text-success fw-bold">Login Successful</td>
                                            <td>157.38.148.224</td>
                                            <td>0</td>
                                            <td>Rajasthan/India</td>
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
@endsection

<!-- JS to toggle sections -->
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const links = document.querySelectorAll('.sidebar-link');
        const sections = {
            profile: document.getElementById('profile-section'),
            statement: document.getElementById('statement-section'),
            activity: document.getElementById('activity-section'),
        };

        links.forEach(link => {
            link.addEventListener('click', function() {
                links.forEach(l => l.classList.remove('active'));
                this.classList.add('active');

                const target = this.getAttribute('data-target');

                for (const key in sections) {
                    sections[key].style.display = (key === target) ? 'block' : 'none';
                }
            });
        });
    });
</script>
