@extends('admin.master')
@section('body')
    <section class="container-fluid p-4">
        <div class="px-3">
            <!-- Responsive Table Wrapper -->
            <div class="table-responsive">
                <table class="table table-sm table-bordered mb-0 text-center align-middle">
                    <thead class="table-secondary">
                        <tr>
                            <th class="w-50 text-start" style="min-width: 150px;">Match</th>
                            <th>1</th>
                            <th>2</th>
                            <th>Options</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- Match Row -->
                        <tr>
                            <td class="text-start" style="white-space: normal;">
                                <div><span class="text-success">●</span> <strong class="text-info">The Hundred -
                                        Womens</strong></div>
                                <div class="mt-1">
                                    <span class="badge bg-success">In-Play</span>
                                    <span class="badge bg-primary">📺</span>
                                    <small class="text-white d-block d-md-inline">08/05/2025 06:30</small>
                                </div>
                            </td>
                            <td>
                                <div class="d-flex flex-wrap justify-content-center gap-1">
                                    <a class="btn btn-info btn-sm">9.02</a>
                                    <a class="btn btn-danger btn-sm">3.03</a>
                                </div>
                            </td>
                            <td>
                                <div class="d-flex flex-wrap justify-content-center gap-1">
                                    <a class="btn btn-info btn-sm">3.03</a>
                                    <a class="btn btn-danger btn-sm">9.02</a>
                                </div>
                            </td>
                            <td>
                                <a class="btn btn-outline-primary btn-sm"><i class="fa-solid fa-map-pin"></i></a>
                            </td>
                        </tr>
                        {{-- match-2 --}}
                        <tr>
                            <td class="text-start" style="white-space: normal;">
                                <div><span class="text-success">●</span> <strong class="text-info">NBA Finals</strong></div>
                                <div class="mt-1">
                                    <span class="badge bg-success">Live</span>
                                    <span class="badge bg-primary">📺</span>
                                    <small class="text-white d-block d-md-inline">08/05/2025 22:00</small>
                                </div>
                            </td>
                            <td>
                                <div class="d-flex flex-wrap justify-content-center gap-1">
                                    <a class="btn btn-info btn-sm">9.02</a>
                                    <a class="btn btn-danger btn-sm">3.03</a>
                                </div>
                            </td>
                            <td>
                                <div class="d-flex flex-wrap justify-content-center gap-1">
                                    <a class="btn btn-info btn-sm">3.03</a>
                                    <a class="btn btn-danger btn-sm">9.02</a>
                                </div>
                            </td>
                            <td>
                                <a class="btn btn-outline-primary btn-sm"><i class="fa-solid fa-map-pin"></i></a>
                            </td>
                        </tr>

                    </tbody>
                </table>
            </div>

        </div>
    </section>
@endsection
