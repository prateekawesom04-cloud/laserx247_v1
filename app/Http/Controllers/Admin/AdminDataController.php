<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Symfony\Component\HttpFoundation\Response;
use App\Models\User;
use App\Models\Bonus;

class AdminDataController extends Controller
{
    //
    public function index(){
        $user = User::whereIn('status', [1,2,3])->count();
        $userTotal = User::all()->count();
        return view('admin.pages.index',compact('user','userTotal'));
    }

    public function user_downline_list(){

        $users = User::whereIn('status', [1,2])->get();

        return view('admin.pages.user_downline_list',compact('users'));
    }

    public function createBonus(Request $request){
        $bonus = new Bonus();
        $bonus->bonus_uid = time().rand(111,999);
        $bonus->type = $request->type;
        $bonus->amount = $request->amount;
        $bonus->wager_amount = $request->wager_amount;
        $bonus->description = $request->description;
        $bonus->status = $request->status;
        $bonus->save();

        return response()->json([
            'message'=> 'Bonus created',
            'error_code'=> '200'
        ]);

    }

    public function addBonus($request){
        
        $bonus['bonus_uid'] = $request->bonus_uid;
        $bonus['amount'] = $request->amount;
        $bonus['wager_amount'] = $request->wager_amount;

        $userData =  User::getCurrentUser('user_uid',$request->user_uid);

        $additional_data = json_decode($userData->additional_data,true);

        $additional_data['bonusData'][] = $bonus;
        $userData->additional_data = json_encode( $additional_data,true);
        $userData->save();

        return response()->json([
            'message'=> 'Bonus added',
            'error_code'=> '200'
        ]);
    }
}
