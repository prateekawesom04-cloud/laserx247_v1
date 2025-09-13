@extends('admin.master')

@section('body')
    <div class="container-fluid p-4">

        <!-- Filter Section -->
        <div class="card shadow-sm border-0 mb-4 mt-4">
            <div class="card-body border border-primary">
                <form>
                    <div class="row g-3">
                        <div class="col-12 col-sm-6 col-md-3">
                            <label for="choose-type" class="form-label">Choose Type</label>
                            <select id="choose-type" class="form-select form-select-sm">
                                <option>UnSettle</option>
                            </select>
                        </div>

                        <div class="col-12 col-sm-6 col-md-3">
                            <label for="choose-sport" class="form-label">Choose Sport</label>
                            <select id="choose-sport" class="form-select form-select-sm">
                                <option>Cricket</option>
                            </select>
                        </div>

                        <div class="col-12 col-sm-6 col-md-2">
                            <label for="from-date" class="form-label">From Date</label>
                            <input type="date" id="from-date" class="form-control form-control-sm" value="2025-09-02">
                        </div>

                        <div class="col-12 col-sm-6 col-md-2">
                            <label for="to-date" class="form-label">To Date</label>
                            <input type="date" id="to-date" class="form-control form-control-sm" value="2025-09-02">
                        </div>

                        <div class="col-12 col-md-2">
                            <button type="submit" class="btn btn-primary w-100 btn-sm mt-sm-4 mt-md-0">Get History</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>

        <!-- Bet History Section -->
        <div class="card shadow-sm border-0 mb-4">
            <div class="card-header bg-primary text-white">
                <strong>Bet History</strong>
            </div>
            <div class="card-body">

                <!-- Table Controls -->
                <div class="row mb-3">
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
                    <div class="col-md-6 d-flex justify-content-end align-items-center ">
                        <label class="me-2 " for="search">Search:</label>
                        <input type="search" id="search" class="form-control w-auto border border-primary">
                    </div>
                </div>
                <!-- Bet History Table -->
                <div class="table-responsive">
                    <table class="table table-bordered text-center align-middle table-sm">
                        <thead class="table-light">
                            <tr>
                                <th>User Name</th>
                                <th>Sport Name</th>
                                <th>Event</th>
                                <th>Market</th>
                                <th>Selection</th>
                                <th>Type</th>
                                <th>Odds Req.</th>
                                <th>Stake</th>
                                <th>Place Time</th>
                                <th>Settle Time</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td colspan="10" class="text-muted">No data!</td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <!-- Pagination -->
                <div class="d-flex flex-column flex-md-row justify-content-between align-items-center mt-3">
                    <div class="small text-muted mb-2 mb-md-0">Showing 1 to 10 of 0 entries</div>
                    <nav>
                        <ul class="pagination pagination-sm mb-0">
                            <li class="page-item disabled"><a class="page-link">First</a></li>
                            <li class="page-item disabled"><a class="page-link">Previous</a></li>
                            <li class="page-item disabled"><a class="page-link">Next</a></li>
                            <li class="page-item disabled"><a class="page-link">Last</a></li>
                        </ul>
                    </nav>
                </div>

            </div>
        </div>
    </div>
@endsection
