<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use App\Models\Transaction;
use App\Models\User;
use App\Models\Bonus;

class UserController extends Controller
{
    protected $currentUser;
    protected $user_additional_data;

    public function __construct(){
        $this->currentUser = User::getCurrentUser();
        $this->user_additional_data = json_decode($this->currentUser->additional_data);
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
            'error_code'=> '200'
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

    public function notification(Request $request){
        $bonusData = $this->user_additional_data->bonusData;
        $notifications = '';
        if(property_exists($this->user_additional_data, 'notification')){
            $notifications = $this->user_additional_data->notification;
        }
        return view('account_pages.notification',compact('bonusData','notifications'));
    }

    public function bonus(Request $request){
        $bonusData = $this->user_additional_data->bonusData;
        return view('account_pages.bonus',compact('bonusData'));
    }

    public function claimBonus(Request $request){

        $userData = $this->currentUser;
        $bonusData = $this->user_additional_data->bonusData;
        $user_bonus_wager = $bonusData->{$request->bonus_id}->wager_amount;

        $bonus = Bonus::where([
            'status'=>1,
            'bonus_uid'=>$request->bonus_id
        ])->first();

        $wager_amount = $bonus->wager_amount;

        if($user_bonus_wager < $wager_amount){
            return response()->json([
                'message'=> 'Please fulfill the wager',
                'response_code'=> '405'
            ]);
        } else{
            // add request to add amount in wallet
            if($bonus->type == 2){
                $userData->wallet_amount += $bonus->amount;
            }
        }
        return response()->json([
            'message'=> 'Bonus Amount added to your wallet',
            'response_code'=> '200'
        ]);
    }

}
