@extends('admin.master')
@section('body')
    <div class="container-fluid bg-light p-4">

        <!-- Add User Link Button -->
        <div class="mb-3 d-flex justify-content-end gap-2">
            <a href="#" class="btn btn-outline-success btn-sm d-flex align-items-center gap-1">
                <span>Clip summary</span>
                <input type="checkbox" />
            </a>
            <a href="#" class="btn btn-outline-success btn-sm">
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
                            <div class="text-primary">IRP 1000</div>
                        </div>
                    </div>
                    <div class="col-md-2 mb-2">
                        <div class="border p-2">
                            <div class="fw-semibold">Total Exposure</div>
                            <div class="text-danger">IRP ( 0 )</div>
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
                    <div>
                        <input type="search" class="form-control form-control-sm border border-success" placeholder="Search"
                            style="width: 200px;">
                    </div>
                </div>

                <!-- Scrollable Table -->
                <div class="table-responsive" style="max-height: 400px; overflow-y: auto;">
                    <table class="table table-bordered table-sm align-middle text-center small ">
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
                                <th>Status</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <!-- Row 1 -->
                            <tr>
                                <td><span class="badge bg-success">USER</span> demo</td>
                                <td>0</td>
                                <td>1000</td>
                                <td class="text-danger">(0)</td>
                                <td>200000</td>
                                <td>1000</td>
                                <td>1000</td>
                                <td>100</td>
                                <td><span class="badge bg-success">active</span></td>
                                <td>
                                    <a href="#" class="btn btn-sm btn-outline-secondary">₹</a>
                                    <a href="#" class="btn btn-sm btn-outline-secondary">👤</a>
                                    <a href="#" class="btn btn-sm btn-outline-secondary">⚙️</a>
                                    <a href="#" class="btn btn-sm btn-outline-secondary">📄</a>
                                    <a href="#" class="btn btn-sm btn-outline-danger">🗑️</a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>

            </div>
        </div>

    </div>
@endsection
