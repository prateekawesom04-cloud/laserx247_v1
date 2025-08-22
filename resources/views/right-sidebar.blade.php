<div class="d-flex justify-content-center bg-light" style="min-height: 100vh;">
    <aside class="w-100" style="max-width: 400px; background-color: #f4f4f4; font-size: 13px; border: 1px solid #ccc;">
        <!-- Header -->
        <div class="bg-dark text-white px-2 py-1" style="background-color: #223344 !important;">
            <strong style="font-size: 13px;">Open Bets</strong>
        </div>

        <!-- Search -->
        <div class="p-2 border-bottom">
            <input type="text" class="form-control form-control-sm" placeholder="Search bets..." style="font-size: 13px;">
        </div>

        <!-- Tabs -->
        <ul class="nav nav-tabs nav-fill border-bottom" id="betsTab" role="tablist" style="font-size: 13px;">
            <li class="nav-item" role="presentation">
                <a class="nav-link active border-end" id="matched-tab" data-bs-toggle="tab"
                   href="#matched" role="tab" aria-controls="matched" aria-selected="true">
                    Matched
                </a>
            </li>
            <li class="nav-item" role="presentation">
                <a class="nav-link border-end" id="unmatched-tab" data-bs-toggle="tab"
                   href="#unmatched" role="tab" aria-controls="unmatched" aria-selected="false">
                    UnMatched
                </a>
            </li>
            <li class="nav-item" role="presentation">
                <a class="nav-link" id="fancy-tab" data-bs-toggle="tab"
                   href="#fancy" role="tab" aria-controls="fancy" aria-selected="false">
                    Fancy
                </a>
            </li>
        </ul>

        <!-- Tab Content -->
        <div class="tab-content" id="betsTabContent" style="height: calc(100vh - 150px); overflow-y: auto;">
            <!-- Matched -->
            <div class="tab-pane fade show active" id="matched" role="tabpanel" aria-labelledby="matched-tab">
                <div class="table-responsive">
                    <table class="table table-bordered table-sm mb-0 text-center align-middle" style="font-size: 12px;">
                        <thead class="table-light">
                            <tr>
                                <th>Selname</th>
                                <th>Odds</th>
                                <th>Stake</th>
                                <th>Date/Time</th>
                            </tr>
                        </thead>
                    </table>
                </div>
            </div>

            <!-- Unmatched -->
            <div class="tab-pane fade" id="unmatched" role="tabpanel" aria-labelledby="unmatched-tab">
                <p class="text-center text-muted py-3">No unmatched bets</p>
            </div>

            <!-- Fancy -->
            <div class="tab-pane fade" id="fancy" role="tabpanel" aria-labelledby="fancy-tab">
                <p class="text-center text-muted py-3">No fancy bets</p>
            </div>
        </div>
    </aside>
</div>
