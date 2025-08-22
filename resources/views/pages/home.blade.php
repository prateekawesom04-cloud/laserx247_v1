@extends('sports_master')
@section('sports_body')
    <!-- Centered Buttons -->
    <div class="container-fluid text-center py-2 bg-info bg-gradient">
        <a href="javascript:void(0)" class="btn btn-dark btn-sm px-4 me-2">EXCHANGE</a>
        <a href="javascript:void(0)" class="btn btn-light btn-sm px-4">SPORTSBOOK</a>
    </div>

    <!-- Highlights Section -->
    <section class="container-fluid bg-light py-2">
        <!-- Header -->
        <div class="d-flex justify-content-between align-items-center mb-2 px-2 bg-dark py-1">
            <!-- Left side -->
            <h5 class="mb-0 text-white">Highlights</h5>

            <!-- Right side - Equal Width Small Buttons -->
            <div class="d-flex gap-1">
                <a href="javascript:void(0)" class="btn btn-success btn-sm px-2 py-1 flex-fill text-nowrap">+ LIVE</a>
                <a href="javascript:void(0)" class="btn btn-info btn-sm px-2 py-1 flex-fill text-nowrap">+ VIRTUAL</a>
                <a href="javascript:void(0)" class="btn btn-warning btn-sm px-2 py-1 flex-fill text-nowrap">+ PREMIUM</a>
                <a href="javascript:void(0)" class="btn btn-danger btn-sm px-2 py-1 flex-fill text-nowrap">♦ VIEW BY</a>
            </div>
        </div>

        <!-- Sports Tabs with Equal Width and Smaller Size -->
        <div class="px-3 mb-3">
            <div class="bg-white border rounded-3 p-2 shadow-sm">
                <div class="overflow-auto">
                    <ul class="nav nav-pills flex-nowrap gap-1">
                        <li class="nav-item flex-shrink-0">
                            <a class="nav-link active bg-gradient bg-dark text-white rounded-pill px-2 py-1 text-nowrap fw-semibold"
                                href="#">Cricket</a>
                        </li>
                        <li class="nav-item flex-shrink-0">
                            <a class="nav-link text-dark border border-secondary rounded-pill px-2 py-1 bg-light text-nowrap"
                                href="#">Football</a>
                        </li>
                        <li class="nav-item flex-shrink-0">
                            <a class="nav-link text-dark border border-secondary rounded-pill px-2 py-1 bg-light text-nowrap"
                                href="#">Tennis</a>
                        </li>
                        <li class="nav-item flex-shrink-0">
                            <a class="nav-link text-dark border border-secondary rounded-pill px-2 py-1 bg-light text-nowrap"
                                href="#">Casino</a>
                        </li>
                        <li class="nav-item flex-shrink-0">
                            <a class="nav-link text-dark border border-secondary rounded-pill px-2 py-1 bg-light text-nowrap"
                                href="#">Sports book</a>
                        </li>
                        <li class="nav-item flex-shrink-0">
                            <a class="nav-link text-dark border border-secondary rounded-pill px-2 py-1 bg-light text-nowrap"
                                href="#">Horse Racing</a>
                        </li>
                        <li class="nav-item flex-shrink-0">
                            <a class="nav-link text-dark border border-secondary rounded-pill px-2 py-1 bg-light text-nowrap"
                                href="#">Greyhound Racing</a>
                        </li>
                        <li class="nav-item flex-shrink-0">
                            <a class="nav-link text-dark border border-secondary rounded-pill px-2 py-1 bg-light text-nowrap"
                                href="#">Binary</a>
                        </li>
                        <li class="nav-item flex-shrink-0">
                            <a class="nav-link text-dark border border-secondary rounded-pill px-2 py-1 bg-light text-nowrap"
                                href="#">Kabaddi</a>
                        </li>
                        <li class="nav-item flex-shrink-0">
                            <a class="nav-link text-dark border border-secondary rounded-pill px-2 py-1 bg-light text-nowrap"
                                href="#">Politics</a>
                        </li>
                        <li class="nav-item flex-shrink-0">
                            <a class="nav-link text-dark border border-secondary rounded-pill px-2 py-1 bg-light text-nowrap"
                                href="#">Basketball</a>
                        </li>
                        <li class="nav-item flex-shrink-0">
                            <a class="nav-link text-dark border border-secondary rounded-pill px-2 py-1 bg-light text-nowrap"
                                href="#">Baseball</a>
                        </li>
                        <li class="nav-item flex-shrink-0">
                            <a class="nav-link text-dark border border-secondary rounded-pill px-2 py-1 bg-light text-nowrap"
                                href="#">Table Tennis</a>
                        </li>
                        <li class="nav-item flex-shrink-0">
                            <a class="nav-link text-dark border border-secondary rounded-pill px-2 py-1 bg-light text-nowrap"
                                href="#">Volley Ball</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- Matches Table -->
        <div class="px-3">
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
                            <td><button class="btn btn-info btn-sm me-2">-</button><button
                                    class="btn btn-danger btn-sm">-</button></td>
                            <td><button class="btn btn-info btn-sm me-2">-</button><button
                                    class="btn btn-danger btn-sm">-</button></td>
                            <td><button class="btn btn-info btn-sm me-2">-</button><button
                                    class="btn btn-danger btn-sm">-</button></td>
                            <td><button class="btn btn-outline-secondary btn-sm">⚙</button></td>
                        </tr>

                        <!-- Match 2 -->
                        <tr>
                            <td class="text-start">
                                <div><span class="text-success">●</span> <strong class="text-info">The Hundred</strong>
                                </div>
                                <div class="mt-1">
                                    <span class="badge bg-success">In-Play</span>
                                    <span class="badge bg-primary">📺</span>
                                    <span class="badge bg-warning text-dark">⏰</span>
                                    <small class="text-muted">05/08/2025 23:00</small>
                                </div>
                            </td>
                            <td><button class="btn btn-info btn-sm me-2">-</button><button
                                    class="btn btn-danger btn-sm">-</button></td>
                            <td><button class="btn btn-info btn-sm me-2">-</button><button
                                    class="btn btn-danger btn-sm">-</button></td>
                            <td><button class="btn btn-info btn-sm me-2">-</button><button
                                    class="btn btn-danger btn-sm">-</button></td>
                            <td><button class="btn btn-outline-secondary btn-sm">⚙</button></td>
                        </tr>

                        <!-- Match 3 -->
                        <tr>
                            <td class="text-start">
                                <div><span class="text-success">●</span> <strong class="text-info">Caribbean Premier League
                                        - Winner</strong></div>
                                <div class="mt-1">
                                    <span class="badge bg-success">In-Play</span>
                                    <span class="badge bg-primary">📺</span>
                                    <small class="text-muted">15/08/2025 01:00</small>
                                </div>
                            </td>
                            <td><button class="btn btn-info btn-sm me-2">-</button><button
                                    class="btn btn-danger btn-sm">-</button></td>
                            <td><button class="btn btn-info btn-sm me-2">-</button><button
                                    class="btn btn-danger btn-sm">-</button></td>
                            <td><button class="btn btn-info btn-sm me-2">-</button><button
                                    class="btn btn-danger btn-sm">-</button></td>
                            <td><button class="btn btn-outline-secondary btn-sm">⚙</button></td>
                        </tr>

                        <!-- Match 4 -->
                        <tr>
                            <td class="text-start">
                                <div><span class="text-success">●</span> <strong class="text-info">Chicago Kingsmen v
                                        Pakistan Shaheens</strong></div>
                                <div class="mt-1">
                                    <span class="badge bg-success">In-Play</span>
                                    <span class="badge bg-primary">📺</span>
                                    <span class="badge bg-warning text-dark">⏰</span>
                                    <span class="badge bg-info">📱</span>
                                    <small class="text-muted">09:00</small>
                                </div>
                            </td>
                            <td><button class="btn btn-info btn-sm me-2">-</button><button
                                    class="btn btn-danger btn-sm">-</button></td>
                            <td><button class="btn btn-info btn-sm me-2">-</button><button
                                    class="btn btn-danger btn-sm">-</button></td>
                            <td><button class="btn btn-info btn-sm me-2">-</button><button
                                    class="btn btn-danger btn-sm">-</button></td>
                            <td><button class="btn btn-outline-secondary btn-sm">⚙</button></td>
                        </tr>

                        <!-- Match 5 -->
                        <tr>
                            <td class="text-start">
                                <div><span class="text-success">●</span> <strong class="text-info">Islamabad United SRL V
                                        Quetta Gladiators SRL</strong></div>
                                <div class="mt-1">
                                    <span class="badge bg-success">In-Play</span>
                                    <small class="text-muted">09:30</small>
                                </div>
                            </td>
                            <td><button class="btn btn-info btn-sm me-2">-</button><button
                                    class="btn btn-danger btn-sm">-</button></td>
                            <td><button class="btn btn-info btn-sm me-2">-</button><button
                                    class="btn btn-danger btn-sm">-</button></td>
                            <td><button class="btn btn-info btn-sm me-2">-</button><button
                                    class="btn btn-danger btn-sm">-</button></td>
                            <td><button class="btn btn-outline-secondary btn-sm">⚙</button></td>
                        </tr>

                    </tbody>
                </table>
            </div>
        </div>
    </section>
@endsection
