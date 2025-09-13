<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Models\User;
use App\Models\Transaction;

class UserController extends Controller
{
    protected $currentUser;

    public function __construct(){
        $this->currentUser = User::getCurrentUser();
    }

    public function profile(Request $request){
        if(Session::get('user_session')=='demo_user_demo'){
            $data = [
                'user_id'=>'demo data',
                'available_chips'=>'demo data',
                'exposure'=>'demo data'
            ];
        } else{

            $user = $this->currentUser;
            
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
        
        $user = $this->currentUser;
        $data = Transaction::where([
            'user_uid'=>$user->user_uid,
            'payment_type'=>'0'
        ])->get();
        return view('account_pages.deposit',compact('data'));

    }
    
    public function withdrawal(Request $request){
        
        $user = $this->currentUser;
        $data = Transaction::where([
            'user_uid'=>$user->user_uid,
            'payment_type'=>'1'
        ])->get();
        return view('account_pages.withdrawal',compact('data'));

    }

    public function enterStakes(Request $request){
        return view('account_pages.enterStakes');
    }
    
    public function addStake(Request $request){
        $user = $this->currentUser;
        $oldStakes = json_decode($user->additional_data,true);
        $oldStakes['stakes'][] = $request->stake;
        
        $user->additional_data = json_encode($oldStakes);
        $user->save();
        
        return response()->json([
            'message'=> 'Stake added',
            'error_code'=> '201'
        ]);
    }

    public function transaction(Request $request){
        
        $user = $this->currentUser;
        $data = Transaction::where('user_uid',$user->user_uid)->get();
        return view('account_pages.transaction',compact('data'));

    }

    public function refer_rewards(){

        $data = $this->currentUser;
        return view('account_pages.refer_rewards',compact('data'));
    }

    public function referral_code(Request $request,$referral_code){
        session('referral_code',$referral_code);
        return redirect('register');
    }
}
