<!-- Compact Reusable Modal with Form -->
<div class="modal fade" id="editBonusModal" tabindex="-1" aria-labelledby="editBonusModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content text-black">
            <div class="modal-body">
                <form id="editBonusForm">
                    <!-- Bonus Type Dropdown -->
                    <div class="mb-3">
                        <label for="bonusType" class="form-label">Bonus Type</label>
                        <select id="bonusType" name="type" class="form-select text-black">
                            <option value="0">Register</option>
                            <option value="1">Refer</option>
                            <option value="2">Admin</option>
                        </select>
                    </div>

                    <!-- Amount -->
                    <div class="mb-3">
                        <label for="amount" class="form-label">Amount</label>
                        <input type="text" id="amount" name="amount" class="form-control text-black">
                    </div>

                    <!-- Wager Amount -->
                    <div class="mb-3">
                        <label for="wagerAmount" class="form-label">Wager Amount</label>
                        <input type="text" id="wagerAmount" name="wager_amount" class="form-control text-black">
                    </div>

                    <!-- Description -->
                    <div class="mb-3">
                        <label for="description" class="form-label">Description</label>
                        <input type="text" id="description" name="description" class="form-control text-black">
                    </div>

                    <!-- Status -->
                    <div class="form-check form-switch mb-3">
                        <input class="form-check-input" type="checkbox" id="status" name="status">
                        <label class="form-check-label" for="status">Status</label>
                    </div>
                </form>
            </div>

            <div class="modal-footer">
                <a href="javascript:0" type="submit" form="editBonusForm" class="btn btn-primary">Save</a>
            </div>
        </div>
    </div>
</div>
<script>
    document.getElementById('editBonusForm').addEventListener('submit', function (e) {
        e.preventDefault();
        const isChecked = document.getElementById('status').checked;
        console.log(isChecked);
    });
</script>
