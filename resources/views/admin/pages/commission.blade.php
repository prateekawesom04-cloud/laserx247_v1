@extends('admin.master')

@section('body')
    <div class="container-fluid bg-light p-4">

        <!-- Date Range Card -->
        <div class="card mb-3">
            <div class="card-body">
                <div class="row g-3 align-items-center">
                    <div class="col-sm-auto">
                        <input type="date" class="form-control" value="2025-09-01" />
                    </div>
                    <div class="col-auto">TO</div>
                    <div class="col-sm-auto">
                        <input type="date" class="form-control" value="2025-09-02" />
                    </div>
                    <div class="col-sm-auto">
                        <a class="btn btn-success">Get Commission</a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Tabs and Table Card -->
        <div class="card">
            <div class="card mb-3">
                <div class="card-body py-2 px-3 bg-success text-white">
                    <h5 class="mb-0">Agent Commission</h5>
                </div>
            </div>
            <div class="card-body">

                <!-- Tabs -->
                <ul class="nav nav-tabs mb-3" role="tablist">
                    <li class="nav-item" role="presentation">
                        <a class="nav-link active text-dark" id="fancy-tab" data-bs-toggle="tab" data-bs-target="#fancy"
                            type="button" role="tab">Fancy</a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a class="nav-link text-dark" id="matka-tab" data-bs-toggle="tab" data-bs-target="#matka"
                            type="button" role="tab">Matka</a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a class="nav-link text-dark" id="casino-tab" data-bs-toggle="tab" data-bs-target="#casino"
                            type="button" role="tab">Casino</a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a class="nav-link text-dark" id="binary-tab" data-bs-toggle="tab" data-bs-target="#binary"
                            type="button" role="tab">Binary</a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a class="nav-link text-dark" id="sportbook-tab" data-bs-toggle="tab" data-bs-target="#sportbook"
                            type="button" role="tab">Sportbook</a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a class="nav-link text-dark" id="bookmaker-tab" data-bs-toggle="tab" data-bs-target="#bookmaker"
                            type="button" role="tab">Bookmaker</a>
                    </li>
                </ul>

                <!-- Tab Content -->
                <div class="tab-content border rounded-bottom p-3 bg-white">
                    <!-- Fancy Tab -->
                    <div class="tab-pane fade show active" id="fancy" role="tabpanel" aria-labelledby="fancy-tab">
                        <div class="row mb-3">
                            <div class="col-md-auto mb-2 mb-md-0">
                                Show
                                <select class="form-select d-inline-block w-auto">
                                    <option>10</option>
                                    <option>25</option>
                                    <option>50</option>
                                    <option>100</option>
                                </select>
                                entries
                            </div>
                            <div class="col-md-auto ms-auto">
                                Search:
                                <input type="search" class="form-control d-inline-block w-auto" />
                            </div>
                        </div>

                        <div class="table-responsive">
                            <table class="table table-bordered table-sm mb-0">
                                <thead class="table-secondary">
                                    <tr>
                                        <th>Agent Name</th>
                                        <th>Turn Over</th>
                                        <th>Commission</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td colspan="4" class="text-center">No data!</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                        <div class="d-flex flex-column flex-md-row justify-content-between mt-3">
                            <div>Showing 1 to 10 of 0 entries</div>
                            <div class="mt-2 mt-md-0">
                                <a class="btn btn-link btn-sm">First</a>
                                <a class="btn btn-link btn-sm">Previous</a>
                                <a class="btn btn-link btn-sm">Next</a>
                                <a class="btn btn-link btn-sm">Last</a>
                            </div>
                        </div>
                    </div>

                    <!-- Other Tabs -->
                    <div class="tab-pane fade" id="matka" role="tabpanel" aria-labelledby="matka-tab">No data!</div>
                    <div class="tab-pane fade" id="casino" role="tabpanel" aria-labelledby="casino-tab">No data!</div>
                    <div class="tab-pane fade" id="binary" role="tabpanel" aria-labelledby="binary-tab">No data!
                    </div>
                    <div class="tab-pane fade" id="sportbook" role="tabpanel" aria-labelledby="sportbook-tab">No data!
                    </div>
                    <div class="tab-pane fade" id="bookmaker" role="tabpanel" aria-labelledby="bookmaker-tab">No data!
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
