<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp;

class ApiCallController extends Controller
{
    //
    public function callApi(Request $request,$apiName){
        $url = url('/').'/api/'.$apiName;
        $data = [
            'name'=>$request->name,
            'email'=>$request->email,
            'password'=>$request->password
        ];
        // return redirect()->action(
        //     [AuthController::class, $apiName],
        //     ['request'=>$data]
        // );
        // return to_route($apiName,['request'=>$data]);
        // dd($data);
        // $client = new GuzzleHttp\Client();
        // $res = $client->request('POST',url('/').'/api/'.$apiName, ['data' => $data]);
        // echo $res->getBody();
        // dd('res',$res);
        // echo $res->getStatusCode(); // 200
        // dd(url('/'));

        $ch = curl_init();

        curl_setopt($ch, CURLOPT_URL, $url);

        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

        $response = curl_exec($ch);


        curl_close($ch);      

        echo $response;
    }
}
