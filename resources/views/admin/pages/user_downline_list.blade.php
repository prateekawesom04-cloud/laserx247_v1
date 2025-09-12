@extends('admin.master')
@section('body')
    <div class="container-fluid p-4">

        <!-- Add User Link Button -->
        <div class="mb-3 text-end">
            <a href="#" class="btn btn-outline-success btn-sm" data-bs-toggle="modal" data-bs-target="#mainModal">
                <i class="bi bi-person-plus"></i> Add User
            </a>
        </div>

        <!-- Info Cards in Card -->
        <div class="card border border-success mb-4">
            <div class="card-body py-3">
                <div class="row text-center small">
                    <div class="col-md-2 mb-2">
                        <div class="border p-2">
                            <div class="fw-semibold">Total Balance</div>
                            <div class="text-primary">IRP {{ $userData->wallet_amount }}</div>
                        </div>
                    </div>
                    <div class="col-md-2 mb-2">
                        <div class="border p-2">
                            <div class="fw-semibold">Total Exposure</div>
                            <div class="text-danger">IRP ( {{ $userData->unsattled_amount }} )</div>
                        </div>
                    </div>
                    <div class="col-md-2 mb-2">
                        <div class="border p-2">
                            <div class="fw-semibold">Available Balance</div>
                            <div class="text-primary">IRP 1000</div>
                        </div>
                    </div>
                    <div class="col-md-2 mb-2">
                        <div class="border p-2">
                            <div class="fw-semibold">Balance</div>
                            <div class="text-primary">IRP 1012099026.00</div>
                        </div>
                    </div>
                    <div class="col-md-2 mb-2">
                        <div class="border p-2">
                            <div class="fw-semibold">Total Avail. bal.</div>
                            <div class="text-primary">IRP 1000</div>
                        </div>
                    </div>
                    <div class="col-md-2 mb-2">
                        <div class="border p-2">
                            <div class="fw-semibold">Upline P/L</div>
                            <div class="text-danger">IRP 1012100026.00</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Table in Card -->
        <div class="card border border-success">
            <div class="card-body py-3">

                <!-- Show Entries and Search -->
                <div class="d-flex justify-content-between align-items-center mb-3 small">
                    <div class="col-md-6 d-flex align-items-center">
                        <label class="me-2" for="show-entries">Show</label>
                        <select id="show-entries" class="form-select w-auto">
                            <option>10</option>
                            <option>25</option>
                            <option>50</option>
                            <option>100</option>
                        </select>
                        <span class="ms-2">entries</span>
                    </div>

                    <div class="d-flex align-items-center">
                        <input type="search" class="form-control form-control-sm border border-success me-2"
                            placeholder="Search" style="width: 150px;">
                        <input type="search" class="form-control form-control-sm border border-success me-2"
                            placeholder="Search by client" style="width: 150px;">
                        <a href="#" class="btn btn-primary btn-sm me-2">Add Client Account</a>
                        <a href="#" class="btn btn-primary btn-sm text-white">Inactive List</a>

                    </div>
                </div>

                <!-- Scrollable Table -->
                <div class="table-responsive" style="max-height: 400px; overflow-y: auto;">
                    <table class="table table-bordered table-sm align-middle text-center small">
                        <thead class="table-light">
                            <tr>
                                <th>Username</th>
                                <th>Credit Ref.</th>
                                <th>Balance</th>
                                <th>Exposure</th>
                                <th>Exposure Limit</th>
                                <th>Avail .Bal.</th>
                                <th>Ref. P/L</th>
                                <th>Partnership</th>
                                <th>U Lock</th>
                                <th>B Lock</th>
                                <th>My %</th>
                                <th>Status</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <!-- Row 1 -->
                            @foreach ($users as $user)
                                <tr>
                                    <td><span class="badge bg-success">USER</span> demo</td>
                                    <td>{{ $user->user_uid }}</td>
                                    <td>{{ $user->wallet_amount }}</td>
                                    <td>{{ $user->unsattled_amount }}</td>
                                    <td>200000</td>
                                    <td>1000</td>
                                    <td>1000</td>
                                    <td>100</td>
                                    <td><input type="checkbox" name="u_lock" /></td>
                                    <td><input type="checkbox" name="b_lock" /></td>
                                    <td>10%</td>
                                    <td><span
                                            class="badge bg-{{ $user->status == 3 ? 'danger' : 'success' }}">{{ $user->status == 3 ? 'inactive' : 'active' }}</span>
                                    </td>
                                    <td class="text-nowrap">
                                        <a href="{{ route('admin.my_account') }}" class="btn btn-sm fw-bold"
                                            style="background-color: #f47442; color: white;" title="User Details"
                                            id="modalTooltipBtn">U</a>

                                        <a href="#" class="btn btn-sm fw-bold"
                                            style="background-color: #157a06; color: white;" data-bs-toggle="modal"
                                            data-bs-target="#balanceModal" data-bs-placement="top"
                                            title="Deposit / Collection" id="modalTooltipBtn">D/C</a>

                                        <a href="#" class="btn btn-sm fw-bold"
                                            style="background-color: #2f3c88; color: white;" data-bs-toggle="modal"
                                            data-bs-target="#balanceModal" data-bs-placement="top" title="Withdrawal"
                                            id="modalTooltipBtn">W</a>

                                        <a href="#" class="btn btn-sm fw-bold"
                                            style="background-color: #fff700; color: black;" data-bs-toggle="modal"
                                            data-bs-target="#changePasswordModal"data-bs-placement="top"
                                            title="Password Change" id="modalTooltipBtn">P</a>

                                        <a href="#" class="btn btn-sm fw-bold"
                                            style="background-color: #e287f2; color: black;" data-bs-toggle="modal"
                                            data-bs-target="#balanceModal" data-bs-placement="top" title="Game Control"
                                            id="modalTooltipBtn">GC</a>

                                        <a href="#" class="btn btn-sm fw-bold"
                                            style="background-color: #5efc4d; color: black;" data-bs-toggle="modal"
                                            data-bs-target="#balanceModal" data-bs-placement="top" title="Casino Control"
                                            id="modalTooltipBtn">CC</a>

                                        <a href="#" class="btn btn-sm fw-bold"
                                            style="background-color: #fc4d4d; color: black;" data-bs-toggle="modal"
                                            data-bs-target="#deleteConfirmationModal"data-bs-placement="top"
                                            title="Delete">D</a>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>

            </div>
        </div>
    </div>
@endsection
<script>
    const tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="modal"]'));
    tooltipTriggerList.map(tooltipTriggerEl => new bootstrap.Tooltip(tooltipTriggerEl));
</script>
