@extends('admin.master')

@section('body')
<div class="bg-light p-4">
    <div class="container-fluid">
        <div class="card shadow-sm">
            <div class="card-header pch-header">
                Password Change History
            </div>
            <div class="card-body">

                <!-- Top controls -->
              <div class="row mb-3 g-2">
                    <div class="col-md-6 col-sm-12 d-flex flex-wrap align-items-center">
                        <label class="me-2" for="show-entries">Show</label>
                        <select id="show-entries" class="form-select w-auto">
                            <option>10</option>
                            <option>25</option>
                            <option>50</option>
                            <option>100</option>
                        </select>
                        <span class="ms-2">entries</span>
                    </div>
                    <div class="col-md-6 col-sm-12 d-flex flex-wrap justify-content-md-end align-items-center">
                        <label class="me-2" for="search">Search:</label>
                        <input type="search" id="search" class="form-control w-auto">
                    </div>
                </div>

                <!-- Responsive Table -->
                <div class="table-responsive">
                    <table class="table table-bordered table-hover pch-table mb-0">
                        <thead class="table-light">
                            <tr>
                                <th>User Name</th>
                                <th>Remark</th>
                                <th>Date</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td colspan="3" class="text-center">No data!</td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <!-- Footer -->
                <div class="row g-2 mt-3">
                    <div class="col-md-6 col-sm-12">
                        <div class="pch-footer-text text-md-start text-center">
                            Showing 1 to 10 of 0 entries
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-12">
                        <nav>
                            <ul class="pagination pagination-sm justify-content-md-end justify-content-center mb-0">
                                <li class="page-item"><a class="page-link" href="#">First</a></li>
                                <li class="page-item"><a class="page-link" href="#">Previous</a></li>
                                <li class="page-item"><a class="page-link" href="#">Next</a></li>
                                <li class="page-item"><a class="page-link" href="#">Last</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
@endsection
