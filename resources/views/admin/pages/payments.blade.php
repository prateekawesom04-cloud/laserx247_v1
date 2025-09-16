@extends('admin.master')

@section('body')
    <div class="container-fluid p-4">

        <!-- Card Container -->
        <div class="card border-primary shadow-sm">

            <!-- Header -->
            <div class="card border border-primary">
                <div class="card border border-primary">
                    <div class="card-header bg-primary text-white p-2 rounded-top">
                        <h4 class="mb-0">Add Method</h4>
                    </div>

                    <!-- Action Button -->
                    <div class="card-body pb-0">
                        <div class="text-end mb-3">
                            <a href="#"class="btn btn-primary btn-sm" data-bs-toggle="modal"
                                data-bs-target="#mainModal">Add Method</a>
                        </div>

                        </a>
                        <!-- Table -->
                        <div class="table-responsive">
                            <table class="table table-bordered align-middle table-hover text-center">
                                <thead class="table-light">
                                    <tr>
                                        <th>Type</th>
                                        <th>Holder Name</th>
                                        <th>UPI ID / Account No / USDT Wallet Address</th>
                                        <th>IFSC Code</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>QRCODE</td>
                                        <td>-</td>
                                        <td>
                                            <img src="" alt="White QR" class="img-fluid qr-img">
                                        </td>
                                        <td>-</td>
                                        <td><span class="status-active">Active</span></td>
                                        <td>
                                            <div class="d-flex justify-content-center align-items-center gap-2 flex-nowrap">
                                                <a class="btn btn-sm btn-outline-danger" title="Delete">🗑️</a>
                                                <div class="form-check form-switch m-0">
                                                    <input class="form-check-input" type="checkbox" checked>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>UPI</td>
                                        <td>Backy</td>
                                        <td>rebeccabacky@fbl</td>
                                        <td>-</td>
                                        <td><span class="status-active">Active</span></td>
                                        <td>
                                            <div class="d-flex justify-content-center align-items-center gap-2 flex-nowrap">
                                                <a class="btn btn-sm btn-outline-danger" title="Delete">🗑️</a>
                                                <div class="form-check form-switch m-0">
                                                    <input class="form-check-input" type="checkbox" checked>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        @endsection
