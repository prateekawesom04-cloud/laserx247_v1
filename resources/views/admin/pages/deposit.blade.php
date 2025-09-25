@extends('admin.master')
@section('body')
    <div class="container-fluid p-4">
        <div class="card border border-primary">
            <div class="card border border-primary">
                <div class="card-header bg-primary text-white p-2 rounded-top">
                    <h4 class="mb-0">Deposit Amount</h4>
                </div>
                <div class="card-body">

                    <!-- Controls Section -->
                    <div class="overflow-auto mb-3">
                        <div class="d-flex flex-nowrap justify-content-between align-items-center gap-3"
                            style="min-width: 320px;">
                            <!-- Show Entries -->
                            <div class="d-flex align-items-center flex-shrink-0">
                                <label class="me-2 mb-0">Show</label>
                                <select class="form-select w-auto me-2">
                                    <option>10</option>
                                    <option>25</option>
                                    <option>50</option>
                                </select>
                            </div>

                            <!-- Search -->
                            <div class="d-flex align-items-center flex-shrink-0">
                                <label class="me-2 mb-0">Search:</label>
                                <input type="search" class="form-control form-control-sm w-auto">
                            </div>
                        </div>
                    </div>

                    <!-- Table -->
                    <div class="table-responsive">
                        <table class="table table-bordered table-striped acc-table">
                            <thead class="table-secondary">
                                <tr>
                                    <th>UID</th>
                                    <th>Transaction ID</th>
                                    <th>Type</th>
                                    <th>Balance</th>
                                    <th>Date/Time</th>
                                    <th>Screenshot</th>
                                    <th>Remark</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @if($transactions!='')
                                @foreach($transactions as $transaction)
                                <tr>
                                    <td><strong>{{$transaction->user_uid}}</strong></td>
                                    <td>{{$transaction->order_sn}}</td>
                                    <td>{{($transaction->payment_type==0)?'Deposit':'Withdraw'}}</td>
                                    <td>{{$transaction->transfer_amount}}</td>
                                    <td>{{$transaction->created_at}}</td>
                                    <td>
                                        <img src="" alt="White QR" class="img-fluid qr-img">
                                    </td>
                                    <td>{{$transaction->remark}}</td>
                                    
                                    <td>
                                        <div class="dropdown">
                                            <select name="status" data-order_sn="{{$transaction->order_sn}}" class="transaction_status form-select form-select-sm custom-select"
                                                aria-label="Select status">
                                                <option value="2" {{($transaction->status==2)?'selected':''}}>Pending</option>
                                                <option value="1" {{($transaction->status==1)?'selected':''}}>Processed</option>
                                                <option value="0" {{($transaction->status==0)?'selected':''}}>Reject</option>
                                            </select>
                                        </div>
                                    </td>
                                </tr>
                                @endforeach
                                @else
                                <tr>
                                    <td><strong>1234567890</strong></td>
                                    <td>TXN123456</td>
                                    <td>Upi</td>
                                    <td>0</td>
                                    <td>0</td>
                                    <td class="text-danger"><b>(0)</b></td>
                                    <td>04-05-2024 10:16:03</td>
                                    <td>
                                        <img src="" alt="White QR" class="img-fluid qr-img">
                                    </td>
                                    <td><input type="text" class="form-control form-control-sm" value="-"></td>
                                    <td>
                                        <div class="dropdown">
                                            <select class="form-select form-select-sm custom-select"
                                                aria-label="Select status">
                                                <option selected>Pending</option>
                                                <option value="1">Processed</option>
                                                <option value="2">Reject</option>
                                            </select>
                                        </div>
                                    </td>
                                </tr>
                                @endif
                            </tbody>
                        </table>
                    </div>

                    <!-- Bottom Controls -->
                    <div
                        class="d-flex flex-column flex-md-row justify-content-between align-items-stretch align-items-md-center gap-2 mt-3">
                        <a class="btn acc-btn-clear w-100 w-md-auto">Clear All</a>
                        <input type="password" class="form-control acc-password-input w-100 w-md-auto"
                            placeholder="•••••••">
                        <a class="btn acc-btn-submit w-100 w-md-auto">Submit Payment</a>
                    </div>

                    <!-- Entry Info -->
                    <div class="mt-3 text-end">
                        <small>Showing 1 to 10 of 2 entries</small>
                    </div>

                </div>
            </div>
        </div>
    @endsection


    @section('js')
    <script>
        $('.transaction_status').on('change',function(){
            let formData = {};
            
            formData['previous_url'] = '{{url()->previous()}}';
            formData['search_data_key'] = 'order_sn';
            formData['search_data_value'] = $(this).attr('data-order_sn');
            formData['update_data_key'] = $(this).attr('name');
            formData['update_data_value'] = $(this).val();
            formData['m_key'] = 'transactions';
            callAdminApi('post', `{{url('/admin')}}/updateModelData`, formData, ajax_response_reload);
        });
    </script>
    @endsection