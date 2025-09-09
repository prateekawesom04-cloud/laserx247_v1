@extends('admin.master')
@section('body')

<div class="container-fluid p-4">
  <div class="card border border-success">
    <div class="card-body">

      <div class="d-flex justify-content-between align-items-center mb-3">
        <div>
          <label>Show 
            <select class="form-select d-inline-block w-auto">
              <option>10</option>
              <option>25</option>
              <option>50</option>
            </select> entries
          </label>
        </div>
        <div>
          <label>Search: 
            <input type="search" class="form-control d-inline-block w-auto">
          </label>
        </div>
      </div>

      <table class="table table-bordered table-striped acc-table">
        <thead class="table-secondary">
          <tr>
            <th>UID</th>
            <th>Balance</th>
            <th>Available D / W</th>
            <th>Exposure</th>
            <th>Credit Ref.</th>
            <th>Reference P/L</th>
            <th>Deposit/Withdraw</th>
            <th>Remark</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td><strong>demo</strong></td>
            <td>1000</td>
            <td>1000</td>
            <td class="text-danger"><b>(0)</b></td>
            <td>0.00 <i class="bi bi-pencil-square"></i></td>
            <td class="text-success"><b>1000</b></td>
            <td>
              <div class="d-flex align-items-center justify-content-center">
                <button class="btn btn-secondary btn-sm acc-btn-dw">D</button>
                <button class="btn btn-secondary btn-sm acc-btn-dw ms-1">W</button>
                <input type="number" class="form-control form-control-sm mx-2 acc-input-sm" value="0">
                <button class="btn btn-success btn-sm acc-btn-full">Full</button>
              </div>
            </td>
            <td><input type="text" class="form-control form-control-sm" value="Remark"></td>
          </tr>

          <tr>
            <td><strong>1234567890</strong></td>
            <td>0</td>
            <td>0</td>
            <td class="text-danger"><b>(0)</b></td>
            <td>0.00 <i class="bi bi-pencil-square"></i></td>
            <td class="text-danger"><b>0</b></td>
            <td>
              <div class="d-flex align-items-center justify-content-center">
                <button class="btn btn-secondary btn-sm acc-btn-dw">D</button>
                <button class="btn btn-secondary btn-sm acc-btn-dw ms-1">W</button>
                <input type="number" class="form-control form-control-sm mx-2 acc-input-sm" value="0">
                <button class="btn btn-success btn-sm acc-btn-full">Full</button>
              </div>
            </td>
            <td><input type="text" class="form-control form-control-sm" value="-"></td>
          </tr>
        </tbody>
      </table>

      <div class="d-flex justify-content-between mt-3">
        <button class="btn acc-btn-clear">Clear All</button>
        <input type="password" class="form-control acc-password-input" placeholder="•••••••">
        <button class="btn acc-btn-submit">Submit Payment</button>
      </div>

      <div class="mt-3 text-end">
        <small>Showing 1 to 10 of 2 entries</small>
      </div>

    </div>
  </div>
</div>

@endsection
