@extends('super-master')

@section('body')


    <div class="container-fluid">
        <div class="mobile-padding py-4">
            <div class="row g-4">
                <!-- Date Filter Card -->
                <div class="col-12">
                    <div class="card mb-2 shadow-sm border-0">
                        <div class="card-body">
                            <form class="row gy-3 gx-3">
                                <div class="col-6 col-md-3">
                                    <label for="fromDate" class="form-label">From Date:</label>
                                    <input type="datetime-local" id="fromDate" name="fromDate" class="form-control"
                                        value="2025-09-08T00:00" />
                                </div>
                                <div class="col-6 col-md-3">
                                    <label for="toDate" class="form-label">To Date:</label>
                                    <input type="datetime-local" id="toDate" name="toDate" class="form-control"
                                        value="2025-09-15T00:00" />
                                </div>
                                <div class="col-6 col-md-3">
                                    <button type="submit" class="btn btn-primary w-100 mt-4">Submit</button>
                                </div>
                                <div class="col-6 col-md-3">
                                    <button type="reset" class="btn btn-danger w-100 mt-4">Reset</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>

                <!-- Stats Cards -->
                <div class="col-12">
                    <div class="row text-center g-3">
                        @foreach ($providers as $provider)
                        <div class="col-4 col-md-2">
                            <div class="bg-primary text-white p-3 rounded shadow-sm">
                                <h6>{{$provider->title}}</h6>
                                <h5>0</h5>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>

            </div>
        </div>
    </div>

@endsection