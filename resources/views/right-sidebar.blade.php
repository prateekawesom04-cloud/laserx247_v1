<div class="d-flex">
    <aside class="col-12 col-md-4 bg-dark text-white p-3 rounded flex-fill d-flex flex-column">
        <!-- Header -->
        <h5 class="text-center mb-3">Open Bets</h5>

        <!-- Search -->
        <input type="text" class="form-control form-control-sm mb-3" placeholder="Search bets..." />

        <!-- Tabs -->
        <ul class="nav nav-tabs mb-3" id="betsTab" role="tablist">
            <li class="nav-item" role="presentation">
                <a href="javascript:void(0)" class="nav-link active" id="matched-tab" data-bs-toggle="tab"
                    data-bs-target="#matched" role="tab" aria-controls="matched" aria-selected="true">Matched</a>
            </li>
            <li class="nav-item" role="presentation">
                <a href="javascript:void(0)" class="nav-link" id="unmatched-tab" data-bs-toggle="tab"
                    data-bs-target="#unmatched" role="tab" aria-controls="unmatched"
                    aria-selected="false">UnMatched</a>
            </li>
            <li class="nav-item" role="presentation">
                <a href="javascript:void(0)" class="nav-link" id="fancy-tab" data-bs-toggle="tab"
                    data-bs-target="#fancy" role="tab" aria-controls="fancy" aria-selected="false">Fancy</a>
            </li>
        </ul>

        <!-- Tab Content -->
        <div class="tab-content flex-fill d-flex flex-column" id="betsTabContent">
            <div class="tab-pane fade show active flex-fill" id="matched" role="tabpanel"
                aria-labelledby="matched-tab">
                <div class="table-responsive h-100">
                    <table class="table table-dark table-striped table-sm align-middle text-center">
                        <thead>
                            <tr>
                                <th>Selname</th>
                                <th>Odds</th>
                                <th>Stake</th>
                                <th>Date/Time</th>
                            </tr>
                        </thead>
                        <tbody>
                            <!-- Dynamic rows -->
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="tab-pane fade" id="unmatched" role="tabpanel" aria-labelledby="unmatched-tab">
                <p class="text-center text-muted py-3">No unmatched bets</p>
            </div>
            <div class="tab-pane fade" id="fancy" role="tabpanel" aria-labelledby="fancy-tab">
                <p class="text-center text-muted py-3">No fancy bets</p>
            </div>
        </div>
    </aside>
</div>
