@extends('admin.master')

@section('body')
<div class="py-4">
    <div class="container-fluid">
        <div class="card shadow-sm">
            <div class="card-header bg-primary text-white fw-bold">
                Password Change History
            </div>
            <div class="card-body">

                <!-- Top controls -->
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

                <!-- Responsive Table -->
                <div class="table-responsive">
                    <table class="table table-bordered table-hover mb-0">
                        <thead class="table-light">
                            <tr>
                                <th class="text-center">User Name</th>
                                <th class="text-center">Remark</th>
                                <th class="text-center">Date</th>
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
                    <div class="col-md-6 col-12">
                        <div class="text-md-start text-center">
                            Showing 1 to 10 of 0 entries
                        </div>
                    </div>
                    <div class="col-md-6 col-12">
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
