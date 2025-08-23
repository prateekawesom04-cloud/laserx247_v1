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
            Session::put(['user_session'=>$user->id.'_user_'.$user->user_id]);
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
            $user->user_id = $request->phone.'_'.date("Y_m_d");
            $user->password = Hash::make($request->password);
            $user->save();

            Session::put(['user_session'=>$user->id.'_user_'.$user->user_id]);
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

            return redirect()->route('pages.login');
            
        }

    }

    public function getOtp($phone){

        $otp = random_int(100000, 999999);

        session('user_otp',$otp);
        session('otp_expiry_time',time() + (5 * 60));
        return $otp;

    }

    public function verifyOtp($otp){

        if (time() < session('otp_expiry_time')){
            if($otp == session('user_otp')){
                return True;
            }
        }
        return False;
        
    }

    public function demoLogin(){
        Session::put(['user_session'=>'demo_user']);
        return redirect()->route('index');
    }

    public function validateData($data) {
        $data = [
            'name'=>$request->name,
            'email'=>$request->email,
            'password'=>$request->password
        ];
        
    }

}
