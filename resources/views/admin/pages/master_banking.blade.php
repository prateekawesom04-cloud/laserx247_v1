@extends('admin.master')
@section('body')
    <div class="container-fluid p-4">
        <div class="card border border-primary">
            <div class="card-body">

                <!-- Controls Section -->
                <div class="overflow-auto mb-3">
                    <div class="d-flex flex-nowrap justify-content-between align-items-center gap-3"
                        style="min-width: 320px;">
                        <!-- Show Entries -->
                        <div class="d-flex align-items-center flex-shrink-0">
                            <label class="me-2 mb-0">Show</label>
                            <select class="form-select w-auto me-2">
                                <option>10</option>
                                <option>25</option>
                                <option>50</option>
                            </select>

                        </div>

                        <!-- Search -->
                        <div class="d-flex align-items-center flex-shrink-0">
                            <label class="me-2 mb-0">Search:</label>
                            <input type="search" class="form-control form-control-sm w-auto">
                        </div>
                    </div>
                </div>

                <!-- Table -->
                <div class="table-responsive">
                    <table class="table table-bordered table-striped acc-table">
                        <thead class="table-secondary">
                            <tr>
                                <th>UID</th>
                                <th>Balance</th>
                                <th>Available D / W</th>
                                <th>Exposure</th>
                                <th>Credit Ref.</th>
                                <th>Reference P/L</th>
                                <th>Deposit/Withdraw</th>
                                <th>Remark</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><strong>1234567890</strong></td>
                                <td>0</td>
                                <td>0</td>
                                <td class="text-danger"><b>(0)</b></td>
                                <td>0.00 <i class="fas fa-pen-to-square"></i></td>
                                <td class="text-danger"><b>0</b></td>
                                <td>
                                    <div class="d-flex flex-nowrap align-items-center justify-content-start">
                                        <a class="btn btn-secondary btn-sm acc-btn-dw mb-2 mb-sm-0">D</a>
                                        <a class="btn btn-secondary btn-sm acc-btn-dw ms-1 mb-2 mb-sm-0">W</a>
                                        <input type="number"
                                            class="form-control form-control-sm mx-2 acc-input-sm mb-2 mb-sm-0"
                                            value="0">
                                        <a class="btn btn-success btn-sm acc-btn-full mb-2 mb-sm-0">Full</a>
                                    </div>
                                </td>
                                <td><input type="text" class="form-control form-control-sm" value="-"></td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <!-- Bottom Controls -->
                <div
                    class="d-flex flex-column flex-md-row justify-content-between align-items-stretch align-items-md-center gap-2 mt-3">
                    <a class="btn acc-btn-clear w-100 w-md-auto">Clear All</a>
                    <input type="password" class="form-control acc-password-input w-100 w-md-auto" placeholder="•••••••">
                    <a class="btn acc-btn-submit w-100 w-md-auto">Submit Payment</a>
                </div>

                <!-- Entry Info -->
                <div class="mt-3 text-end">
                    <small>Showing 1 to 10 of 2 entries</small>
                </div>

            </div>
        </div>
    </div>
@endsection
