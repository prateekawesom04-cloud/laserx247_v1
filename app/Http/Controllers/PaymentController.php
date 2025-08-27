<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PaymentController extends Controller
{
    //
    public function requestPayment(Request $request){
        $data = [];

        $data['app_id'] = env('LG_PAY_APP_ID');
        $data['trade_type'] = env('LG_PAY_APP_ID');
        $data['order_sn'] = "laserx_p_".time();
        $data['money'] = $request->money*100;
        $data['notify_url'] = $callback_url;
        $data['ip'] = $request->ip;
        $data['sign'] = md5_sign($data, env('LG_PAY_SECRET_KEY'));
        
        // Prepare cURL request
        $url = "https://www.lg-pay.com/api/order/".$request->payment_type;
        $ch = curl_init();

        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($data));
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, [
            "Content-Type: application/x-www-form-urlencoded"
        ]);

        // Execute and capture the response
        $response = curl_exec($ch);

        if (curl_errno($ch)) {
            return curl_error($ch);
        } 

        curl_close($ch);
        
        return $response;

    }

    public function md5_sign($data, $key,$unset=[]) {
        ksort($data);
        foreach ($unset as $value){
            unset($data[$value]);
        }
        $string = http_build_query($data);
        $string = urldecode($string); 
        $string = trim($string) . "&key=" . $key;
        return strtoupper(md5($string));
    }

    public function paymentCallback(Request $request){
        $post_sign = $_POST['sign'];
        $sign = md5_sign($_POST,env('LG_PAY_SECRET_KEY'),['sign']);
        if($sign == $post_sign){
            

            return $request->all();
        }
    }

}
