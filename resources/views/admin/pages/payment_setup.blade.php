@extends('admin.master')

@section('body')
<div class="container-fluid p-4">

  <!-- Card Container -->
  <div class="card border-success shadow-sm">
    
    <!-- Header -->
    <div class="card-header bg-success text-white fw-bold">Add Method</div>

    <!-- Action Button -->
    <div class="card-body pb-0">
      <div class="text-end mb-3">
        <a class="btn btn-dark btn-sm">Add Method</a>
      </div>

      <!-- Table -->
      <div class="table-responsive">
        <table class="table table-bordered align-middle table-hover text-center">
          <thead class="table-light">
            <tr>
              <th>Type</th>
              <th>Holder Name</th>
              <th>UPI ID / Account No / USDT Wallet Address</th>
              <th>IFSC Code</th>
              <th>Status</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>QRCODE</td>
              <td>-</td>
              <td>
                <img src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAEAAAAAQCAYAAACqb0vPAAAAFElEQVR42mP8z8BQz0AEYBxVSFUAATIDAFkW+XtrAAAAAElFTkSuQmCC"
                     alt="White QR"
                     class="img-fluid qr-img">
              </td>
              <td>-</td>
              <td><span class="status-active">Active</span></td>
              <td>
                <div class="d-flex justify-content-center align-items-center flex-wrap gap-2">
                  <a href="#" class="btn btn-sm btn-outline-danger" data-bs-toggle="modal"
                                        data-bs-target="#deleteConfirmationModal"data-bs-placement="top" title="Delete">🗑️</a>
                  <div class="form-check form-switch m-0">
                    <input class="form-check-input" type="checkbox" checked>
                  </div>
                </div>
              </td>
            </tr>

            <tr>
              <td>UPI</td>
              <td>Backy</td>
              <td>rebeccabacky@fbl</td>
              <td>-</td>
              <td><span class="status-active">Active</span></td>
              <td>
                <div class="d-flex justify-content-center align-items-center flex-wrap gap-2">
                  <button class="btn btn-sm btn-outline-danger" title="Delete">🗑️</button>
                  <div class="form-check form-switch m-0">
                    <input class="form-check-input" type="checkbox" checked>
                  </div>
                </div>
              </td>
            </tr>

          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
@endsection
