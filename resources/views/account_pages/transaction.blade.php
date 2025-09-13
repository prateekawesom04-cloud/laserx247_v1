@extends('super-master')

@section('body')
    <div class="main-container bg-white rounded shadow">

            <div class="table-container rounded flex items-center justify-center">
                @if(count($data))
                <div class="table-wrapper">
                    <table class="table w-100 m-0">
                        <thead class="table-header text-white text-center py-0" style="font-size: 10px;">
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
                            @foreach ($data as $value)
                                <tr class="table-row text-center">
                                    <td>{{($value->payment_type)? 'withdraw' : 'deposit'}}</td>
                                    <td>{{$value->transfer_amount}}</td>
                                    <td>{{($value->status==2)?'success':'under process or failed'}}</td>
                                    <td>{{$value->created_at->format('Y-m-d')}}</td>
                                    <td>{{$value->order_sn}}</td>
                                    <td>{{$value->remark}}</td>
                                </tr>                                
                            @endforeach
                        </tbody>
                    </table>
                </div>
                @else
                    <div class="table-row text-center">No Data Found</div>
                @endif
            </div>
        </div>
    </div>
@endsection
