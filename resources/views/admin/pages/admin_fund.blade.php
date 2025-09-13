@extends('admin.master')

@section('body')
<div class="container-fluid p-4">
    <div class="card shadow rounded bg-white" style="max-width: 600px; margin: 0 auto;">
        <div class="card-header bg-primary text-white p-2 rounded-top">
            <h4 class="mb-0">Admin Fund</h4>
        </div>
        <form class="px-4">
            <!-- Group 1: Current Balance, Remarks, Total Balance -->
            <div class="mb-3">
                <label for="currentBalance" class="form-label">Current Balance</label>
                <input type="text" class="form-control" id="currentBalance" value="150.00" disabled>
            </div>

            <div class="mb-3">
                <label for="remarks" class="form-label">Remarks</label>
                <input type="text" class="form-control" id="remarks" placeholder="Enter Remark..">
            </div>

            <div class="mb-3">
                <label for="totalBalance" class="form-label">Total Balance</label>
                <input type="text" class="form-control" id="totalBalance" value="150.00" disabled>
            </div>

            <!-- Group 2: Password, Deposit Fund -->
            <div class="row mb-3">
                <div class="col-12 col-md-6">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" class="form-control" id="password" placeholder="Enter Password..">
                </div>

                <div class="col-12 col-md-6">
                    <label for="depositFund" class="form-label">Deposit Fund</label>
                    <input type="number" class="form-control" id="depositFund" placeholder="Enter Deposit..">
                </div>
            </div>

            <!-- Submit Button -->
            <div class="text-center">
                <a type="submit" class="btn btn-primary w-100 py-2">Submit</a>
            </div>
        </form>
    </div>
</div>
@endsection
