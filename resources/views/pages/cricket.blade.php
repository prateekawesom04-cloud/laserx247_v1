@extends('sports_master')
{{-- @extends('mobile.master') --}}
@section('sports_body')
    <!-- Header -->
    <div class="d-flex justify-content-between align-items-center mb-1 px-1 bg-dark py-1">
        <!-- Left side -->
        <h6 class="mb-0 text-white">Cricket</h6>

        <!-- Right side buttons -->
        <div class="d-flex gap-1">
            <a href="javascript:void(0)" class="btn btn-success btn-sm px-2 py-1 flex-fill text-nowrap">+ LIVE</a>
            <a href="javascript:void(0)" class="btn btn-info btn-sm px-2 py-1 flex-fill text-nowrap">+ VIRTUAL</a>
            <a href="javascript:void(0)" class="btn btn-warning btn-sm px-2 py-1 flex-fill text-nowrap">+ PREMIUM</a>
            <a href="javascript:void(0)" class="btn btn-danger btn-sm px-2 py-1 flex-fill text-nowrap">♦ VIEW BY</a>
        </div>
    </div>
    <section class="container-fluid bg-light py-2">
        <div class="px-1">
            <div class="table-responsive">
                <table class="table table-sm table-bordered mb-0 text-center align-middle">
                    <thead class="table-secondary">
                        <tr>
                            <th class="w-50"></th>
                            <th>1</th>
                            <th>X</th>
                            <th>2</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>

                        <!-- Match 1 -->
                        <tr>
                            <td class="text-start">
                                <div><span class="text-success">●</span> <strong class="text-info">The Hundred -
                                        Womens</strong></div>
                                <div class="mt-1">
                                    <span class="badge bg-success">In-Play</span>
                                    <span class="badge bg-primary">📺</span>
                                    <small class="text-muted">08/05/2025 06:30</small>
                                </div>
                            </td>
                            <td><a class="btn btn-info btn-sm me-2">-</a><a
                                    class="btn btn-danger btn-sm">-</a></td>
                            <td><a class="btn btn-info btn-sm me-2">-</a><a
                                    class="btn btn-danger btn-sm">-</a></td>
                            <td><a class="btn btn-info btn-sm me-2">-</a><a
                                    class="btn btn-danger btn-sm">-</a></td>
                            <td><a class="btn btn-outline-secondary btn-sm">⚙</a></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </section>
@endsection
