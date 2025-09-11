<div class="modal fade user-status-modal" id="userStatusModal" tabindex="-1" aria-labelledby="userStatusModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-sm">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header py-2 bg-primary text-white">
        <h5 class="modal-title fs-6" id="userStatusModalLabel">Status Change</h5>
        <a href="#" class="btn-close btn-sm" data-bs-dismiss="modal" aria-label="Close"></a>
      </div>

      <!-- User Info -->
      <div class="d-flex justify-content-between align-items-center px-3 mt-3">
        <div>
          <span class="badge bg-success">USER</span>
          <span class="ms-2">demo</span>
        </div>
        <div>
          <span class="badge" style="background-color: #c7e6c1; color: #27632a;">active</span>
        </div>
      </div>

      <!-- Status Action Buttons -->
      <div class="d-flex gap-2 justify-content-center my-3 px-3">
        <!-- Active -->
        <a href="#" class="btn btn-outline-success text-center" style="width: 100px; border-radius: 6px;">
          <i class="bi bi-check-circle fs-4"></i><br>
          <span class="fw-bold">Active</span>
        </a>

        <!-- Suspend -->
        <a href="#" class="btn btn-outline-danger text-center" style="width: 100px; border-radius: 6px;">
          <i class="bi bi-slash-circle fs-4"></i><br>
          <span class="fw-bold">Suspend</span>
        </a>

        <!-- Locked -->
        <a href="#" class="btn btn-outline-secondary text-center" style="width: 100px; border-radius: 6px;">
          <i class="bi bi-lock fs-4"></i><br>
          <span class="fw-bold">Locked</span>
        </a>
      </div>

      <!-- Password & Change Action -->
      <form action="#" method="POST" class="d-flex gap-2 align-items-center justify-content-center px-3 pb-3">
        @csrf
        <div class="input-group" style="width: 200px;">
          <input type="password" name="password" class="form-control" placeholder="••••••" required>
          <span class="input-group-text" style="cursor: pointer;">
            <i class="bi bi-eye-slash"></i>
          </span>
        </div>

        <!-- Submit as anchor button -->
        <a href="#" onclick="this.closest('form').submit();" class="btn btn-dark d-inline-block text-center" style="min-width: 120px;">
          Change
        </a>
      </form>

    </div>
  </div>
</div>
