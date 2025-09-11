<!-- Add Downline Modal -->
<div class="modal fade add-downline-modal" id="addDownlineModal" tabindex="-1" aria-labelledby="addDownlineModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-sm">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header py-2 bg-primary text-white">
        <h5 class="modal-title fs-6" id="addDownlineModalLabel">Add Downline</h5>
        <button type="button" class="btn-close btn-sm" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>

      <!-- Modal Body with Form -->
      <div class="modal-body p-3">
        <form action="#" method="POST" id="addDownlineForm">
          @csrf

          <div class="mb-3">
            <label for="username" class="form-label">Username</label>
            <input type="text" name="username" class="form-control">
          </div>

          <div class="mb-3">
            <label for="account_type" class="form-label">Account Type</label>
            <select name="account_type" class="form-control" required>
              <option value="">Select Type</option>
              <option value="super_master">Super Master</option>
              <option value="master">Master</option>
              <option value="agent">Agent</option>
              <option value="user">User</option>
            </select>
          </div>

          <div class="mb-3">
            <label for="opening_balance" class="form-label">Opening Balance</label>
            <input type="number" name="opening_balance" class="form-control" placeholder="Opening Balance...">
          </div>

          <div class="mb-3">
            <label for="credit_reference" class="form-label">Credit Reference</label>
            <input type="text" name="credit_reference" class="form-control" placeholder="Credit Reference...">
          </div>

          <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input type="password" name="password" class="form-control">
          </div>

        </form>
      </div>

      <!-- Modal Footer -->
      <div class="modal-footer py-2 px-3">
        <a href="#" class="btn btn-primary btn-sm" onclick="document.getElementById('addDownlineForm').submit(); return false;">Create</a>
        <a href="#" class="btn btn-secondary btn-sm" data-bs-dismiss="modal">Cancel</a>
      </div>

    </div>
  </div>
</div>
