@extends('super-master')

@section('body')


    <div class="container py-5">
        <!-- Date Filter Card -->
        <div class="w-full">
            <div class="card app_content mb-2 shadow-sm border-0">
                <div class="card-body rounded-md">
                    <form class="app_col justify-around">
                        <div class="app_date_range app_row c gap-4">
                            <div class="w-min">
                                <label for="fromDate" class="form-label">From Date:</label>
                                <input type="datetime-local" id="fromDate" name="fromDate" class="form-control" value="2025-09-08T00:00">
                            </div>
                            <div class="w-min">
                                <label for="toDate" class="form-label">To Date:</label>
                                <input type="datetime-local" id="toDate" name="toDate" class="form-control" value="2025-09-15T00:00">
                            </div>
                        </div>
                        <div class="app_date_range app_row justify-evenly col-6">
                            <div class="w-min">
                                <button type="submit" class="app_btn btn w-100 mt-4">Submit</button>
                            </div>
                            <div class="w-min">
                                <button type="reset" class="app_btn btn w-100 mt-4">Reset</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="row g-4">

        <!-- Stats Cards -->
        @foreach ($providers as $provider)
        <!-- <div class="col-4">
            <div class="app_content app_col p-2 m-2 rounded shadow-sm">
                <h6>{{$provider->title}}</h6>
                <h5>0</h5>
            </div>
        </div> -->
        @endforeach

            <div class="col-4">
                <div class="app_content app_col p-2 m-2 rounded shadow-sm">
                    <h6>Total Deposit</h6>
                    <h5>{{$total_deposit}}</h5>
                </div>
            </div>
            <div class="col-4">
                <div class="app_content app_col p-2 m-2 rounded shadow-sm">
                    <h6>Total Withdrawal</h6>
                    <h5>{{$total_withdraw}}</h5>
                </div>
            </div>
            <div class="col-4">
                <div class="app_content app_col p-2 m-2 rounded shadow-sm">
                    <h6>Total Loss</h6>
                    <h5>0</h5>
                </div>
            </div>
            <div class="col-4">
                <div class="app_content app_col p-2 m-2 rounded shadow-sm">
                    <h6>Total Win</h6>
                    <h5>0</h5>
                </div>
            </div>
            <div class="col-4">
                <div class="app_content app_col p-2 m-2 rounded shadow-sm">
                    <h6>Total Bonus</h6>
                    <h5>0</h5>
                </div>
            </div>

        </div>
    </div>

@endsection