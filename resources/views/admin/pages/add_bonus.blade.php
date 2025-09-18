@extends('admin.master')

@section('body')
<div class="container-fluid p-4">
    <div class="mb-3 d-flex justify-content-end gap-2">
            <a href="#" class="btn btn-outline-info btn-sm" data-bs-toggle="modal" data-bs-target="#editBonusModal">
                 Create Bonus
            </a>
        </div>
    <div class="card shadow-sm">
        <div class="card-header bg-primary text-white">
            <h5 class="mb-0">Assign Bonus to User</h5>
        </div>
        <div class="card-body">
            <form>
                <!-- User ID -->
                <div class="mb-4">
                    <label for="userId" class="form-label fw-semibold">User ID:</label>
                    <input type="text" class="form-control" id="userId" name="userId" placeholder="Enter user ID" required>
                </div>

                <!-- Bonus Type -->
                <div class="mb-4">
                    <label for="bonusType" class="form-label fw-semibold">Bonus Type:</label>
                    <select class="form-select" id="bonusType" name="bonusType" required>
                        <option value="" selected disabled>-- Select Bonus Type --</option>
                        <option value="Red envelope">Red envelope</option>
                        <option value="Agent red envelope recharge">Agent red envelope recharge</option>
                        <option value="Recharge gift">Recharge gift</option>
                        <option value="Bonus recharge">Bonus recharge</option>
                        <option value="First full gift">First full gift</option>
                        <option value="Invite bonus">Invite bonus</option>
                        <option value="Card binding gift">Card binding gift</option>
                        <option value="Weekly Awards">Weekly Awards</option>
                        <option value="Agent Bonus">Agent Bonus</option>
                        <option value="Daily Awards">Daily Awards</option>
                        <option value="New members get bonuses by playing games">New members get bonuses by playing games</option>
                        <option value="Return Awards">Return Awards</option>
                    </select>
                </div>

                <!-- Bonus Amount -->
                <div class="mb-4">
                    <label for="bonusAmount" class="form-label fw-semibold">Bonus Amount:</label>
                    <input type="number" class="form-control" id="bonusAmount" name="bonusAmount" placeholder="Enter amount" min="0" step="0.01" required>
                </div>

                <!-- Wager  -->
                <div class="mb-4">
                    <label for="wager" class="form-label fw-semibold">Wager Requirement:</label>
                    <input type="number" class="form-control" id="wager" name="wager" placeholder="Enter wager multiplier" min="1" step="1" required>
                </div>

                <!-- Remark -->
                <div class="mb-4">
                    <label for="remark" class="form-label fw-semibold">Remark:</label>
                    <textarea class="form-control" id="remark" name="remark" rows="3" placeholder="Add a remark (optional)"></textarea>
                </div>

                <!-- Submit Button -->
                <div class="d-grid">
                    <button type="submit" class="btn btn-primary btn-lg">Assign Bonus</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
