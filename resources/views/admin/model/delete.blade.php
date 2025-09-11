<div class="modal fade delete-confirmation-modal" id="deleteConfirmationModal" tabindex="-1" aria-labelledby="deleteConfirmationModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-sm">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header py-2 bg-primary text-white">
        <h5 class="modal-title fs-6" id="deleteConfirmationModalLabel">Delete Confirmation</h5>
        <a href="#" class="btn-close btn-sm" data-bs-dismiss="modal" aria-label="Close"></a>
      </div>

      <!-- Modal Body with Form -->
      <div class="modal-body">
        <form action="#" method="POST" id="deleteForm">
          @csrf

          <div class="text-center mb-3">
            <p class="fw-bold text-danger mb-0">Are you sure you want to delete this item?</p>
          </div>

          <div class="d-flex justify-content-end">
            <a href="#" class="btn btn-secondary me-2" data-bs-dismiss="modal">Cancel</a>
            <!-- Delete button, submitting the form -->
            <a href="#" class="btn btn-danger" onclick="document.getElementById('deleteForm').submit();">Delete</a>
          </div>
        </form>
      </div>

    </div>
  </div>
</div>
