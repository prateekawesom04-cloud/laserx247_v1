<!-- Rolling Commission Modal -->
<div class="modal fade rolling-commission-modal" id="rollingCommissionModal" tabindex="-1" aria-labelledby="rollingCommissionModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-sm">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header py-2 bg-primary text-white">
        <h5 class="modal-title fs-6" id="rollingCommissionModalLabel">Rolling Commission</h5>
        <a type="button" class="btn-close btn-sm" data-bs-dismiss="modal" aria-label="Close"></a>
      </div>

      <!-- Modal Body with the form -->
      <div class="modal-body">
        <form action="#" method="POST">
          @csrf

          <!-- Repeating Row for Each Input -->
          <div class="row mb-2 align-items-center">
            <label class="col-5 col-form-label" for="fancy">Fancy</label>
            <div class="col-7">
              <input type="text" name="fancy" class="form-control form-control-sm" placeholder="...">
            </div>
          </div>

          <div class="row mb-2 align-items-center">
            <label class="col-5 col-form-label" for="matka">Matka</label>
            <div class="col-7">
              <input type="text" name="matka" class="form-control form-control-sm" placeholder="...">
            </div>
          </div>

          <div class="row mb-2 align-items-center">
            <label class="col-5 col-form-label" for="casino">Casino</label>
            <div class="col-7">
              <input type="text" name="casino" class="form-control form-control-sm" placeholder="...">
            </div>
          </div>

          <div class="row mb-2 align-items-center">
            <label class="col-5 col-form-label" for="sportbook">Sportbook</label>
            <div class="col-7">
              <input type="text" name="sportbook" class="form-control form-control-sm" placeholder="...">
            </div>
          </div>

          <div class="row mb-2 align-items-center">
            <label class="col-5 col-form-label" for="bookmaker">Bookmaker</label>
            <div class="col-7">
              <input type="text" name="bookmaker" class="form-control form-control-sm" placeholder="...">
            </div>
          </div>

          <div class="row mb-2 align-items-center">
            <label class="col-5 col-form-label" for="virtual_sports">Virtual Sports</label>
            <div class="col-7">
              <input type="text" name="virtual_sports" class="form-control form-control-sm" placeholder="...">
            </div>
          </div>

          <div class="row mb-3 align-items-center">
            <label class="col-5 col-form-label" for="password">Password</label>
            <div class="col-7">
              <input type="password" name="password" class="form-control form-control-sm">
            </div>
          </div>

          <!-- Footer Buttons -->
          <div class="d-flex justify-content-end gap-2">
            <a href="#" onclick="this.closest('form').submit();" class="btn btn-primary btn-sm">Submit</a>
            <a href="#" class="btn btn-secondary btn-sm" data-bs-dismiss="modal">Cancel</a>
          </div>
        </form>
      </div>

    </div>
  </div>
</div>
