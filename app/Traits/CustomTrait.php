<?php

namespace App\Traits;

trait CustomTrait {

    public function callApi($url, $CURLOPT_RETURNTRANSFER=false, $CURLOPT_ENCODING='', $CURLOPT_MAXREDIRS=1, $CURLOPT_TIMEOUT=60, $CURLOPT_HTTP_VERSION='CURL_HTTP_VERSION_1_1', $CURLOPT_CUSTOMREQUEST='POST',array $CURLOPT_HTTPHEADER=[]){
        
        $curl = curl_init();

        curl_setopt_array($curl, [
            CURLOPT_URL => $url,
            CURLOPT_RETURNTRANSFER => $CURLOPT_RETURNTRANSFER,
            CURLOPT_ENCODING => $CURLOPT_ENCODING,
            CURLOPT_MAXREDIRS => $CURLOPT_MAXREDIRS,
            CURLOPT_TIMEOUT => $CURLOPT_TIMEOUT,
            CURLOPT_HTTP_VERSION => $CURLOPT_HTTP_VERSION,
            CURLOPT_CUSTOMREQUEST => $CURLOPT_CUSTOMREQUEST,
            CURLOPT_HTTPHEADER => $CURLOPT_HTTPHEADER,
        ]);

        $response = curl_exec($curl);
        $err = curl_error($curl);

        curl_close($curl);

        if ($err) {
            return [
                'response'=>$err,
                'response_code'=>'400'
            ];
        } else {
            return [
                'response'=>$response,
                'response_code'=>'200'
            ];
        }
    }

}