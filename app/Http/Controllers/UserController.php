<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Models\User;
use App\Models\Transaction;

class UserController extends Controller
{
    
    public function profile(Request $request){
        if(Session::get('user_session')=='demo_user_demo'){
            $data = [
                'user_id'=>'demo data',
                'available_chips'=>'demo data',
                'exposure'=>'demo data'
            ];
        } else{

            $user = User::getCurrentUser();
            
            $data = [
                'user_id'=>$user->phone,
                'available_chips'=>$user->wallet_amount,
                'exposure'=>$user->unsattled_amount
            ];

        }
        $data = (object)$data;

        return view('account_pages.profile',compact('data'));
        
    }

    public function deposit(Request $request){
        
        $user = User::getCurrentUser();
        $data = Transaction::where('user_uid',$user->user_uid)->get();
        // foreach ($data as $key => $value) {
        //     dump($key,'----',$value->user_uid);
        // }
        // dd($data);
        return view('account_pages.deposit-withdrawal',compact('data'));

    }

    public function refer_rewards(){

        $data = User::getCurrentUser();
        return view('account_pages.refer_rewards',compact('data'));
    }

    public function referral_code(Request $request,$referral_code){
        session('referral_code',$referral_code);
        return redirect('register');
    }
}
