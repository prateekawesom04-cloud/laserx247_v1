@extends('admin.master')

@section('body')
<div class="container-fluid p-4">

  {{-- Deposit Request Section --}}
  <div class="card mb-4 shadow-sm">
    <div class="card-header bg-success text-white fw-bold">Deposit Request</div>
    <div class="card-body p-0">
      <div class="table-responsive">
        <table class="table table-bordered table-hover align-middle text-center mb-0">
          <thead class="table-light">
            <tr>
              <th>User Name</th>
              <th>Type</th>
              <th>Amount</th>
              <th>Screen Shot</th>
              <th>UTR Number</th>
              <th>Remark</th>
              <th>Request Date</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td colspan="8" class="text-center text-muted">No data</td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>

  {{-- Transaction History Section --}}
  <div class="card shadow-sm">
    <div class="card-header bg-success text-white fw-bold">Transaction History</div>
    <div class="card-body p-0">
      <div class="table-responsive">
        <table class="table table-bordered table-hover align-middle text-center mb-0">
          <thead class="table-light">
            <tr>
              <th>User Name</th>
              <th>Type</th>
              <th>UPI ID</th>
              <th>Holder Name</th>
              <th>Remarks</th>
              <th>Amount</th>
              <th>Screen Shot</th>
              <th>UTR Number</th>
              <th>Request Date</th>
              <th>Status</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>demo</td>
              <td>UPI</td>
              <td>sarochafreen@ybl</td>
              <td>Sarocha</td>
              <td></td>
              <td>500</td>
              <td>
                <img src="{{ asset('') }}" class="img-fluid pm-screenshot-img" alt="screenshot">
              </td>
              <td>23464565616</td>
              <td>25/08/2025, 16:49:22</td>
              <td><span class="text-danger fw-bold">Reject</span></td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>

</div>
@endsection
