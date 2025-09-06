@extends('admin.master')

@section('body')
<!-- Withdraw Request Section -->
<div class="bg-light p-3">
  <section class="mb-4 bg-white rounded shadow-sm">
    <div class="section-header">Withdraw Request</div>
    <div class="table-responsive">
      <table class="table table-bordered table-hover mb-0">
        <thead class="table-light">
          <tr>
            <th>User Name</th>
            <th>Amount</th>
            <th>Type</th>
            <th>Bank Name</th>
            <th>Account No</th>
            <th>UPI ID</th>
            <th>IFSC Code</th>
            <th>Holder Name</th>
            <th>Remark</th>
            <th>Request Date</th>
            <th>Status</th>
            <th>Action</th>
            <th>Copy</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td colspan="13" class="no-data">No data</td>
          </tr>
        </tbody>
      </table>
    </div>
  </section>

  <!-- Transaction History Section -->
  <section class="mb-4 bg-white rounded shadow-sm">
    <div class="section-header">Transaction History</div>
    <div class="table-responsive">
      <table class="table table-bordered table-hover mb-0">
        <thead class="table-light">
          <tr>
            <th>User Name</th>
            <th>Type</th>
            <th>Remarks</th>
            <th>Amount</th>
            <th>Request Date</th>
            <th>Status</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td colspan="6" class="no-data">No data</td>
          </tr>
        </tbody>
      </table>
    </div>
  </section>
</div>
@endsection