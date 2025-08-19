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
            'email'=>$request->email
        ])->first();

        if(!empty($user) && Hash::check($request->password,$user->password)){
            Session::put(['user_session'=>$user->id]);
            return redirect()->route('index')->with(['login'=>1]);
        } else{
            return redirect()->route('index')->with(['login'=>0]);
        }
    }

    public function register(Request $request){
        $rules = [
            'name' => 'required|string|min:3|max:255',
            'email' => 'required|unique:users|email',
        ];
        
        $validator = Validator::make($request->all(), $rules);
        $errors = [];
        if($validator->fails()){
            foreach ($validator->errors()->messages() as $key => $value) {
                $errors[] = $value[0];
            }
            return $errors;
            // return redirect()->route('index');
        } else{
            $user = new User;
            $user->name = $request->name;
            $user->email = $request->email;
            $user->password = Hash::make($request->password);
            $user->save();

            // return True;
            Session::put(['user_session'=>$user->id.'_user_'.$user->email]);
            return redirect()->route('index')->with(['login'=>'1']);
            
        }
        
    }

    public function validateData($data) {
        $data = [
            'name'=>$request->name,
            'email'=>$request->email,
            'password'=>$request->password
        ];
        
    }

}
