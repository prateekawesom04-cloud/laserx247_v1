<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\AuthController;
use App\Models\Transaction;

class PaymentController extends Controller
{
    //
    public function paymentRequest(Request $request){
        
        $data = [];
        $data['app_id'] = env('LG_PAY_APP_ID');
        $data['order_sn'] = date("Y-m-d")."_p_".time();
        $data['money'] = $request->money;
        $data['notify_url'] = url('/').'/paymentCallback';

        // $user = User::where([
        //     'user_uid'=>session('user_uid')
        // ])->first();
        
        $transaction = new Transaction();
        $transaction->user_uid = '121';
        $transaction->order_sn = $data['order_sn'];
        $transaction->transfer_amount = $data['money'];
        $transaction->ip = $request->ip();
        $transaction->status = 2;
        $transaction->payment_type = $request->payment_type;
        $transaction->currency = "INR";
        $transaction->remark = "remark001";
        $transaction->save();


        // if(session('user_uid')){}
        

        if($request->payment_type == 0){

            $data['trade_type'] = 'INRUPI';
            $data['ip'] = $request->ip();
            $data['remark'] = "remark001";
        
        } elseif ($request->payment_type == 1) {

            $data['currency'] = $request->currency;
            
        } else{
            return False;
        }

        $data['sign'] = (new AuthController)->md5_sign($data, env('LG_PAY_SECRET_KEY'));
        
    
        $url = "https://www.lg-pay.com/api/".($request->payment_type) ? 'deposit' : 'create'."/order";
        $ch = curl_init();

        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($data));
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, [
            "Content-Type: application/x-www-form-urlencoded"
        ]);

        $response = curl_exec($ch);

        if (curl_errno($ch)) {
            return curl_error($ch);
        } 

        curl_close($ch);
        
        return $response;

    }

    public function paymentCallback(Request $request){

        $data =[];

        $data['order_sn'] = $request->order_sn;
        $data['money'] = $request->money;
        $data['status'] = $request->status;
        $data['pay_time'] = $request->pay_time;
        $data['msg'] = $request->msg;
        $data['remark'] = $request->remark;

        // $model = YourModel::findOrFail($id);
        // $model->fill(request()->all());
        // $model->save();

        $sign = md5_sign($data,env('LG_PAY_SECRET_KEY'));
        if($sign == $request->sign){
            $transaction = Transaction::where('order_sn',$request->order_sn);

            $transaction->transfer_amount = $request->money;
            $transaction->status = $request->status;
            $transaction->save();

        }
    }

}
