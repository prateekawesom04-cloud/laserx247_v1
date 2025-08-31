<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Models\User;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    //
    public function login(Request $request){
        // dd('request',$request);
        // return response()->json($request);
        $user = User::where([
            'phone'=>$request->phone
        ])->first();

        if(empty($user)){
            return response()->json([
                'error'=> 'User not found',
                'error_code'=> '104'
            ]);
        }
        if(Hash::check($request->password,$user->password)){
            Session::put([
                'user_session'=>$user->id.'_user_'.$user->user_uid,
                'user_uid'=>$user->user_uid
            ]);
            return True;
        } else{
            return response()->json([
                'error'=> 'Wrong Password',
                'error_code'=> '105'
            ]);
        }
    }

    public function register(Request $request){
        $rules = [
            'phone' => 'required|numeric|digits:10',
            'password' => 'required|min:6',
            'confirm_password' => 'required|same:password',
        ];
        
        $validator = Validator::make($request->all(), $rules);
        $errors = [];
        if($validator->fails()){
            foreach ($validator->errors()->messages() as $key => $value) {
                $errors[] = $value[0];
            }
            return response()->json([
                'error'=> $errors[0],
                'error_code'=> '105'
            ]);
            
            // return response()->json($errors);
        } else{
            $user = new User;
            $user->phone = $request->phone;
            $user->user_uid = $request->phone.'_'.date("Y_m_d");
            $user->password = Hash::make($request->password);
            $user->save();

            Session::put(['user_session'=>$user->id.'_user_'.$user->user_uid]);
            return True;
            // return redirect()->route('index');
            
        }
        
    }

    public function forgetPassword(Request $request){
        
        $rules = [
            'phone' => 'required|numeric|digits:10',
            'password' => 'required|min:6',
            'confirm_password' => 'required|same:password',
        ];
        
        $validator = Validator::make($request->all(), $rules);
        $errors = [];
        if($validator->fails()){
            foreach ($validator->errors()->messages() as $key => $value) {
                $errors[] = $value[0];
            }
            return response()->json($errors);
        } else{
            $user = User::where([
                'phone'=>$request->phone
            ])->first();
            $user->password = Hash::make($request->password);
            $user->save();
            
            return True;
            
        }

    }

    public function getOtp($phone){

        $otp = random_int(100000, 999999);

        session('user_otp_'.$phone,$otp);
        session('otp_expiry_time',time() + (5 * 60));
        return $otp;
    
    }

    public function verifyOtp(Request $request){

        if (time() < session('otp_expiry_time')){
            if($request->otp == session('user_otp_'.$request->phone)){
                return response()->json([
                    'otp'=> $request->otp
                ]);
            }
        }
        return response()->json([
            'error'=> 'otp expired'
        ]);
    }

    public function demoLogin(){
        Session::put(['user_session'=>'demo_user']);
        return True;
    }

    public function validateData($data) {
        $data = [
            'name'=>$request->name,
            'email'=>$request->email,
            'password'=>$request->password
        ];
        
    }

    // Additional authentication functions

    
	public function generate_jwt($headers, $payload, $secret = 'testing_jwt') {
		$headers_encoded = base64url_encode(json_encode($headers));
		
		$payload_encoded = base64url_encode(json_encode($payload));
		
		$signature = hash_hmac('SHA256', "$headers_encoded.$payload_encoded", $secret, true);
		$signature_encoded = base64url_encode($signature);
		
		$jwt = "$headers_encoded.$payload_encoded.$signature_encoded";
		
		return $jwt;
	}

    public function is_jwt_valid($jwt, $secret = 'testing_jwt') {
		
		$res = [
			'status' => '',
			'payload' => '',
		];

		$tokenParts = explode('.', $jwt);
		$header = base64_decode($tokenParts[0]);
		$payload = base64_decode($tokenParts[1]);
		$signature_provided = $tokenParts[2];

		$base64_url_header = base64url_encode($header);
		$base64_url_payload = base64url_encode($payload);
		$signature = hash_hmac('SHA256', $base64_url_header . "." . $base64_url_payload, $secret, true);
		$base64_url_signature = base64url_encode($signature);

		$is_signature_valid = ($base64_url_signature === $signature_provided);
		
		if (!$is_signature_valid) {
			$res['status']='Failed';
		} else {
			$res['status']='Success';
			$res['payload']=json_decode($payload, 1);
		}
		
		$allvalue = json_encode($res);
		
		return $allvalue;
	}
	
	public function base64url_encode($str) {
		return rtrim(strtr(base64_encode($str), '+/', '-_'), '=');
	}

    public function aes256Encrypt($secret_key,$string){
        $cipher = "AES-256-CBC";
        $key = hash('sha256', $secret_key);
        $iv = substr($key, 0, 16);
		$output = openssl_encrypt($string, $cipher, $key, 0, $iv);
		$output = base64_encode($output);
        return $output;
    }
    
    public function aes256Decrypt($secret_key,$string){
        $cipher = "AES-256-CBC";
        $key = hash('sha256', $secret_key);
        $iv = substr($key, 0, 16);
		$output = openssl_decrypt(base64_decode($string), $cipher, $key, 0, $iv);
        return $output;
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

    public function sendOtp(Request $request){

        $otp = random_int(100000, 999999);

        session('user_otp_'.$request->phone,$otp);
        session('otp_expiry_time',time() + (5 * 60));

        $data = [
            // 'APIKey'=>env('SMS_API_KEY'),
            'user'=>'awesomecart',
            'password'=>'Awesomecart@612',
            'senderid'=>'WEBSMS',
            'channel'=>'Trans',
            'DCS'=>0,
            'flashsms'=>0,
            'number'=>$request->phone,
            'text'=>'your otp for registration in 69exchange.in is'.session('user_otp'),
            'route'=>'VC-P'
        ];

        $string = http_build_query($data);

        $smsUrl = "http://bulksms.actinnsol.com/api/mt/SendSMS?".$string;

        $ch = curl_init();
        
        curl_setopt_array($ch, [
            CURLOPT_URL => $smsUrl, 
            CURLOPT_RETURNTRANSFER => 1, 
            CURLOPT_POST => 1,
            CURLOPT_SSL_VERIFYHOST=>false,
            CURLOPT_SSL_VERIFYPEER=>false,
            CURLOPT_TIMEOUT=> 120
        ]);

        $response = curl_exec($ch);
        
        if (curl_errno($ch)) {
            return curl_error($ch);
        } 

        curl_close($ch);

        return $response;
    }

}
