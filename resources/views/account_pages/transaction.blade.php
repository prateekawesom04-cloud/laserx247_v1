@extends('super-master')

@section('body')
    <div class="main-container app_content rounded shadow mt-4">
<!-- Header -->
        <div class="modal-header-dark p-3 d-flex justify-content-center align-items-center rounded-top border-bottom">
            <div class="fw-semibold balance-info px-2 py-1 text-center rounded-pill">Transaction</div>
        </div>
        <div class="table-container rounded flex items-center justify-center"style="white-space: nowrap;">
            <div class="table-wrapper">
                <table class="table w-100 m-0">
                    <thead class="table-header text-white text-center py-0">
                        <tr>
                            <th>PAYMENT TYPE</th>
                            <th>AMOUNT</th>
                            <th>STATUS</th>
                            <th>DATE</th>
                            <th>TRANSACTION NO</th>
                            <th>REASON</th>
                        </tr>
                    </thead>
                    <tbody class="table-content">
                        @if (count($data) > 0)
                            @foreach ($data as $value)
                                <tr class="table-row text-center">
                                    <td>{{ $value->payment_type ? 'withdraw' : 'deposit' }}</td>
                                    <td>{{ $value->transfer_amount }}</td>
                                    <td>{{ $value->status == 0 ? 'success' : 'processing' }}</td>
                                    <td>{{ $value->created_at->format('Y-m-d') }}</td>
                                    <td>{{ $value->order_sn }}</td>
                                    <td>{{ $value->remark }}</td>
                                </tr>
                            @endforeach
                        @else
                            <tr>
                                <td colspan="6" class="text-center">No Data Found</td>
                            </tr>
                        @endif
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    </div>
@endsection
