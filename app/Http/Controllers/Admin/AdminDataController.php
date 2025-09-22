<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Schema;
use Stevebauman\Location\Facades\Location;
use App\Models\User;
use App\Models\Bonus;
use App\Models\Transaction;
use App\Models\Activity;

class AdminDataController extends Controller
{
    //

    protected $model_map = [
            'users'=>'App\Models\User',
            'transactions'=>'App\Models\Transaction',
        ];

    public function index(){
        $user = User::whereIn('status', [1,2,3])->count();
        $userTotal = User::all()->count();
        return view('admin.pages.index',compact('user','userTotal'));
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

    public function assignBonus($user_uid,array $bonusData){
        

        $userData =  User::where('user_uid',$user_uid)->first();

        $additional_data = json_decode($userData->additional_data,true);

        $additional_data['bonusData'][$bonusData['bonus_uid']] = $bonusData;
        $userData->additional_data = json_encode( $additional_data);
        $userData->save();

        return response()->json([
            'message'=> 'Bonus added',
            'error_code'=> '200'
        ]);
    }


    // admin pages
    
    public function user_downline_list(){

        $users = User::whereIn('status', [4,5])->get();
        return view('admin.pages.user_downline_list',compact('users'));
    }

    public function submitForm(Request $request){


        $user = new User();

        // $user = User::whereIn('status', [1,2])->first();
        $tableName = (new User())->getTable();
        $columns = Schema::getColumnListing($tableName);
        array_splice($columns, 0, 1);
        array_splice($columns, count($columns)-2, 2);

        $request->phone = rand(0000000000,1111111111);
        foreach ($columns as $key => $value) {
            $user->{$value} = $request->{$value};
        }
        
        foreach ($columns as $key => $value) {
            $user->{$value} = $request->{$value};
        }
        $user->user_setting = json_encode($request->all());
        $user->save();

        return response()->json([
            'redirect'=> $request->previous_url,
            'response_code'=>'200'
        ]);
    }

    
    public function getDataDateRange(Request $request){

        return response()->json([
            'redirect'=> $request->previous_url,
            'response_code'=>'200'
        ]);
    }

    public function updateModelData(Request $request){
        
        $table = $this->model_map[$request->update_data_model_key];
        
        $table = new $table();
        $table = $table->where($request->search_data_key,$request->search_data_value)->first();
        $table->{$request->update_data_key} = $request->update_data_value;
        $table->save();
        
        return response()->json([
            'redirect'=> $request->previous_url,
            'response_code'=>'200'
        ]);
    }

    public function master_downline_list(){

        $users = User::whereIn('status', [4,5])->get();
        return view('admin.pages.master_downline_list',compact('users'));
    }
    
    public function my_account(Request $request){

        $user = User::getCurrentUser();
        $activity = Activity::where('user_uid',$user->user_uid)->get();
        $transactions = Transaction::where('user_uid',$user->user_uid)->get();
        // dd($transactions);
        return view('admin.pages.my_account',compact('activity','transactions'));
    }
    
    public function deposit(){
        $user = User::getCurrentUser();
        $transactions = Transaction::where([
            'user_uid'=>$user->user_uid,
            'payment_type'=>0
        ])->get();
        // dd($transactions);
        return view('admin.pages.deposit',compact('transactions'));
    }
    
    public function withdraw(){
        $user = User::getCurrentUser();
        $transactions = Transaction::where([
            'user_uid'=>$user->user_uid,
            'payment_type'=>1
        ])->get();
        // dd($transactions);
        return view('admin.pages.withdraw',compact('transactions'));
    }
}
