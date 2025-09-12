<!-- Edit Mobile Number Modal -->
<div class="modal fade" id="editMobileModal" tabindex="-1" aria-labelledby="editMobileModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-sm">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header py-2" style="background-color: #007bff; color: white;">
        <h5 class="modal-title fs-6" id="editMobileModalLabel">Edit Mobile Number</h5>
        <a type="button" class="btn-close btn-sm" data-bs-dismiss="modal" aria-label="Close"></a>
      </div>

      <!-- Modal Body with Form -->
      <div class="modal-body p-3">
        <form action="#" method="POST" id="editMobileForm">
          @csrf

          <!-- Mobile Number Input -->
          <div class="mb-3">
            <label for="mobileNumber" class="form-label">Mobile Number</label>
            <input type="text" class="form-control" id="mobileNumber" name="mobileNumber" value="1234567890">
          </div>

          <!-- Action Buttons -->
          <div class="d-flex justify-content-end">
            <a type="submit" class="btn btn-primary me-2">Update</a>
            <a type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</a>
          </div>
        </form>
      </div>

    </div>
  </div>
</div>
