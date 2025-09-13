<div class="modal fade user-status-modal" id="casinocontrolModal" tabindex="-1" aria-labelledby="casinocontrolModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-sm">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header py-2 bg-primary text-white">
        <h5 class="modal-title fs-6" id="casinocontrolModalLabel">Casino Control</h5>
        <a href="#" class="btn-close btn-sm" data-bs-dismiss="modal" aria-label="Close"></a>
      </div>

      <!-- Modal Body -->
      <div class="modal-body">

        <!-- Casino Name Field -->
        <div class="mb-3">
          <label for="casino-name" class="form-label">Casino Name</label>
          <input type="text" class="form-control form-control-sm" id="casino-name" placeholder="Enter casino name" required>
        </div>

        <!-- Casino Status Field -->
        <div class="mb-3">
          <label for="casino-status" class="form-label">Casino Status</label>
          <select class="form-select form-select-sm" id="casino-status" required>
            <option value="">Select Status</option>
            <option value="active">Active</option>
            <option value="inactive">Inactive</option>
          </select>
        </div>

        <!-- Max Bets Allowed Field -->
        <div class="mb-3">
          <label for="max-bets" class="form-label">Max Bets Allowed</label>
          <input type="number" class="form-control form-control-sm" id="max-bets" placeholder="Enter max bet amount" required>
        </div>

        <!-- Date and Time Field -->
        <div class="mb-3">
          <label for="casino-datetime" class="form-label">Start Date & Time</label>
          <input type="datetime-local" class="form-control form-control-sm" id="casino-datetime" required>
        </div>

        <!-- Remarks Field -->
        <div class="mb-3">
          <label for="remarks" class="form-label">Remarks</label>
          <textarea class="form-control form-control-sm" id="remarks" rows="3" placeholder="Enter remarks or additional info"></textarea>
        </div>

      </div>

      <!-- Modal Footer -->
      <div class="modal-footer">
        <a type="button" class="btn btn-secondary btn-sm" data-bs-dismiss="modal">Close</a>
        <a type="submit" class="btn btn-primary btn-sm">Save Changes</a>
      </div>

    </div>
  </div>
</div>