@extends('admin.master')

@section('body')
<div class="container-fluid p-4">
    <div class="card">
        <div class="card-header bg-primary text-white">
            <h5 class="mb-0">User General Setting</h5>
        </div>
        <div class="card-body">
            <h6 class="mb-3">Cricket</h6>
            <form>
                <div class="row mb-3">
                    <div class="col-12 col-md-4">
                        <label for="min_stake" class="form-label">Min Stake:</label>
                        <input type="text" class="form-control" name="min_stake" id="min_stake">
                    </div>
                    <div class="col-12 col-md-4">
                        <label for="max_stake" class="form-label">Max Stake:</label>
                        <input type="text" class="form-control" name="max_stake" id="max_stake">
                    </div>
                    <div class="col-12 col-md-4">
                        <label for="max_profit" class="form-label">Max Profit:</label>
                        <input type="text" class="form-control" name="max_profit" id="max_profit">
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-12 col-md-4">
                        <label for="max_loss" class="form-label">Max Loss:</label>
                        <input type="text" class="form-control" name="max_loss" id="max_loss">
                    </div>
                    <div class="col-12 col-md-4">
                        <label for="bet_delay" class="form-label">Bet Delay:</label>
                        <input type="text" class="form-control" name="bet_delay" id="bet_delay">
                    </div>
                    <div class="col-12 col-md-4">
                        <label for="pre_inplay_profit" class="form-label">Pre Inplay Profit:</label>
                        <input type="text" class="form-control" name="pre_inplay_profit" id="pre_inplay_profit">
                    </div>
                </div>

                <div class="row mb-3">
                    <div class="col-12 col-md-4">
                        <label for="pre_inplay_stake" class="form-label">Pre Inplay Stake:</label>
                        <input type="text" class="form-control" name="pre_inplay_stake" id="pre_inplay_stake">
                    </div>
                    <div class="col-12 col-md-4">
                        <label for="min_odds" class="form-label">Min Odds:</label>
                        <input type="text" class="form-control" name="min_odds" id="min_odds">
                    </div>
                    <div class="col-12 col-md-4">
                        <label for="max_odds" class="form-label">Max Odds:</label>
                        <input type="text" class="form-control" name="max_odds" id="max_odds">
                    </div>
                </div>

                <!-- Checkboxes -->
                <div class="row mb-3">
                    <div class="col-12 col-md-6">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="unmatch_bet" id="unmatch_bet">
                            <label class="form-check-label" for="unmatch_bet">Unmatch Bet</label>
                        </div>
                    </div>
                    <div class="col-12 col-md-6">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="lock_bet" id="lock_bet">
                            <label class="form-check-label" for="lock_bet">Lock Bet</label>
                        </div>
                    </div>
                    <div class="col-12 col-md-6">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="match_odds" id="match_odds">
                            <label class="form-check-label" for="match_odds">Match Odds</label>
                        </div>
                    </div>
                    <div class="col-12 col-md-6">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="update_all_users" id="update_all_users">
                            <label class="form-check-label" for="update_all_users">Click to update for all users</label>
                        </div>
                    </div>
                </div>

                <div class="text-end">
                    <a type="submit" class="btn btn-primary">Update</a>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
