@extends('master')

@section('body')
    <div class="container-fluid mt-3 px-4">

        <div class="card shadow-sm border-0">
            <div class="card-body pb-0">

                <!-- Tabs & Search Row -->
                <div class="bg-dark rounded px-3 py-3 mb-3 d-flex justify-content-between align-items-center flex-wrap gap-3"
                    style="background-color: #243A48;">

                    <!-- Tabs -->
                    <ul class="nav nav-pills flex-wrap gap-2 mb-0" id="myTab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <a class="nav-link active text-white fw-semibold small" id="all-tab" data-bs-toggle="tab"
                                href="#all" role="tab" aria-controls="all" aria-selected="true">
                                All
                            </a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a class="nav-link text-white fw-semibold small" id="jilli-tab" data-bs-toggle="tab"
                                href="#jilli" role="tab" aria-controls="jilli" aria-selected="false">
                                Jilli
                            </a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a class="nav-link text-white fw-semibold small" id="game-tab" data-bs-toggle="tab"
                                href="#game" role="tab" aria-controls="game" aria-selected="false">
                                Game
                            </a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a class="nav-link text-white fw-semibold small" id="pgsoft-tab" data-bs-toggle="tab"
                                href="#pgsoft" role="tab" aria-controls="pgsoft" aria-selected="false">
                                PG Soft
                            </a>
                        </li>
                    </ul>

                    <!-- Custom Styled Search -->
                    <form class="position-relative" style="max-width: 300px; width: 100%;" role="search">
                        <input type="search"
                            class="form-control ps-4 pe-5 py-2 rounded-pill bg-white text-dark border-0 shadow-sm"
                            placeholder="Search..." aria-label="Search">
                        <a href="#"
                            class="position-absolute top-50 end-0 translate-middle-y me-2 d-flex align-items-center justify-content-center rounded-circle bg-black shadow"
                            style="width: 34px; height: 34px;">
                            <i class="bi bi-search text-danger"></i>
                        </a>

                    </form>
                </div>

                <!-- Tab Content -->
                <div class="tab-content pt-3" id="myTabContent">
                    <div class="tab-pane fade show active" id="all" role="tabpanel" aria-labelledby="all-tab">
                        <p>All content goes here...</p>
                    </div>
                    <div class="tab-pane fade" id="jilli" role="tabpanel" aria-labelledby="jilli-tab">
                        <p>Jilli content goes here...</p>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection
