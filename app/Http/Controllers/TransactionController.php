<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Schema;
use App\Models\User;
use App\Models\Transaction;


class TransactionController extends Controller
{
    //
    public function updateTransaction(Request $request){
        $transaction = Transaction::where('order_sn',$request->order_sn)->first();
        $transaction->{$request->updateKey} = $request->{$request->updateKey};
        $transaction->save();

        return response()->json([
            'message'=> 'Transaction Updated Successfully',
            'response_code'=> '200'
        ]);
    }
}
