<!-- Change Password Modal -->
<div class="modal fade change-password-modal" id="changePasswordModal" tabindex="-1" aria-labelledby="changePasswordModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-sm">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header py-2" style="background-color: #007bff; color: white;">
        <h5 class="modal-title fs-6" id="changePasswordModalLabel">Change Password</h5>
        <button type="button" class="btn-close btn-sm" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>

      <!-- Modal Body with Form -->
      <div class="modal-body p-3">
        <form action="#" method="POST" id="changePasswordForm">
          @csrf

          <div class="row">
            <!-- Old Password -->
            <div class="form-group col-md-6 mb-3">
              <label for="old_password">Old Password</label>
              <input type="password" name="old_password" id="old_password" class="form-control" placeholder="...">
            </div>

            <!-- New Password -->
            <div class="form-group col-md-6 mb-3">
              <label for="new_password">New Password</label>
              <input type="password" name="new_password" id="new_password" class="form-control" placeholder="...">
            </div>
          </div>

          <!-- Confirm Password -->
          <div class="form-group mb-4">
            <label for="confirm_password">Confirm Password</label>
            <input type="password" name="confirm_password" id="confirm_password" class="form-control" placeholder="...">
          </div>

          <!-- Buttons -->
          <div class="form-group text-end">
            <a href="#" class="btn btn-primary" onclick="document.getElementById('changePasswordForm').submit(); return false;">Confirm</a>
            <a href="#" class="btn btn-secondary" data-bs-dismiss="modal">No</a>
          </div>
        </form>
      </div>

    </div>
  </div>
</div>
