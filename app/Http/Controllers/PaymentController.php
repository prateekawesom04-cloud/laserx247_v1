<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\AuthController;

class PaymentController extends Controller
{
    //
    public function paymentRequest(Request $request){
        $data = [];

        $data['app_id'] = env('LG_PAY_APP_ID');
        $data['trade_type'] = 'INRUPI';
        $data['order_sn'] = date("Y-m-d")."_p_".time();
        $data['money'] = $request->money;
        $data['notify_url'] = 'https://okwingame.world/#/wallet/RechargeHistory';
        $data['ip'] = '0.0.0.0';
        $data['remark'] = "remark001";

        $data['sign'] = (new AuthController)->md5_sign($data, env('LG_PAY_SECRET_KEY'));
        
        // Prepare cURL request
        $url = "https://www.lg-pay.com/api".$request->payment_type."/order";
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
        $post_sign = $_POST['sign'];
        $sign = md5_sign($_POST,env('LG_PAY_SECRET_KEY'),['sign']);
        if($sign == $post_sign){
            

            return $request->all();
        }
    }

}
