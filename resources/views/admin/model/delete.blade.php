<div class="modal fade delete-confirmation-modal" id="deleteConfirmationModal" tabindex="-1" aria-labelledby="deleteConfirmationModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-sm">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header modal-header-dark py-2">
        <h5 class="modal-title fs-6 fw-bold text-danger" id="deleteConfirmationModalLabel">Delete Confirmation</h5>
        <a href="javascript:0" class="btn-close btn-sm" data-bs-dismiss="modal" aria-label="Close"></a>
      </div>

      <!-- Modal Body with Form -->
      <div class="modal-body-dark">
        <form action="#" method="POST" id="deleteForm">
          @csrf

          <div class="text-center mb-3">
             <p class="mb-3 text-white fw-semibold fs-6">Are you sure you want to delete this item?</p>
          </div>

          <div class="d-flex justify-content-end">
            <!-- Delete button-->
            <a href="javascript:0" class="btn btn-danger" onclick="document.getElementById('deleteForm').submit();">Delete</a>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
