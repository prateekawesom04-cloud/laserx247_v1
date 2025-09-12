<!-- Edit News Modal -->
<div class="modal fade" id="editNewsModal" tabindex="-1" aria-labelledby="editNewsModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-sm">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header py-2" style="background-color: #007bff; color: white;">
        <h5 class="modal-title fs-6" id="editNewsModalLabel">Edit News</h5>
        <button type="button" class="btn-close btn-sm" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>

      <!-- Modal Body -->
      <div class="modal-body p-3">
        <form action="#" method="POST" id="editNewsForm">
          @csrf

          <!-- News Input -->
          <div class="mb-3">
            <label for="newsContent" class="form-label">News</label>
            <input type="text" class="form-control" id="newsContent" name="newsContent" value="Breaking News Here...">
          </div>

          <!-- Buttons -->
          <div class="d-flex justify-content-end">
            <button type="submit" class="btn btn-primary me-2">Update</button>
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
          </div>
        </form>
      </div>

    </div>
  </div>
</div>