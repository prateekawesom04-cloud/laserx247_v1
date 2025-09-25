<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Schema;
use Stevebauman\Location\Facades\Location;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\Models\Bonus;
use App\Models\Transaction;
use App\Models\Activity;
use App\Models\Payment;
use App\Models\Appdata;
use App\Models\GameHistory;

class AdminDataController extends Controller
{
    //

    protected $model_map = [
            'users'=>'App\Models\User',
            'transactions'=>'App\Models\Transaction',
            'payments'=>'App\Models\Payment',
        ];

    public function checkMasterPassword($masterPassword){
            
        $user = User::getCurrentUser();
        if(!Hash::check($masterPassword,$user->password)){
            return false;
        }
        return true;
    }
    
    public function index(){
        $user = User::getCurrentUser();
        $gameData = GameHistory::join('users','users.user_uid','=','game_histories.user_uid')->where('admin_uid',$user->user_uid)->get();
        $p_l = 0;
        foreach($gameData as $g_user){
            $p_l+=$g_user->bet_amount;
        }
        
        $user = User::whereIn('status', [1,2,3])->count();
        $userTotal = User::all()->count();
        $totalBets = count($gameData);
        return view('admin.pages.index',compact('user','userTotal','p_l','totalBets'));
    }
    
    public function user_downline_list(Request $request){
        $users = User::whereIn('status', [5])->get();
        return view('admin.pages.user_downline_list',compact('users'));
    }
    
    public function inactive_user_downline_list(Request $request){
        $users = User::where('status', 6)->get();
        return view('admin.pages.user_downline_list',compact('users'));
    }

    public function updateWallet(Request $request){
        if(!$this->checkMasterPassword($request->masterPassword)){
            return response()->json([
                'error'=> 'wrong master password',
                'response_code'=>'400'
            ]);
        }
        $user = User::where('user_uid',$request->user_uid)->first();
        if($request->payment_type == 0){
            $user->wallet_amount += $request->transfer_amount;
        } else{
            $user->wallet_amount -= $request->transfer_amount;
        }
        $user->save();
        
        $transaction = new Transaction();
        $transaction->user_uid = $user->user_uid;
        // $transaction->user_uid = '121';
        $transaction->order_sn = time().date("Ymd")."_p_".time().rand(0000,9999);
        $transaction->transfer_amount = $request->transfer_amount;
        $transaction->ip = $request->ip();
        $transaction->status = 1;
        $transaction->payment_type = $request->payment_type;
        $transaction->currency = "INR";
        $transaction->remark = $request->remark;
        $transaction->save();

        return response()->json([
            'response'=> 'data updated',
            'response_code'=>'200',
            'redirect'=>$request->previous_url
        ]);
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

    public function submitForm(Request $request){   
        $user = User::getCurrentUser();
        if(!Hash::check($request->masterPassword,$user->password)){
            return response()->json([
                'error'=> 'wrong master password',
                'response_code'=>'400'
            ]);
        }
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

    
    public function getDateRangeData(Request $request){

        dd($request->all());

        return response()->json([
            'redirect'=> $request->previous_url,
            'response_code'=>'200'
        ]);
    }

    public function createModelData(Request $request){

        // if ($request->hasFile('payment_method_uid')) {
        if (!empty($request->allFiles())) {
            $file = $request->file('payment_method_uid');
            $request->payment_method_uid = '/img/'.time() . '_' . $file->getClientOriginalName();
            $filePath = $file->storeAs('', $request->payment_method_uid, 'public'); // Store in 'public/uploads'

        }
        
        $table = $this->model_map[$request->m_key];
        
        $table = new $table();
        
        $tableName = $table->getTable();
        $columns = Schema::getColumnListing($tableName);
        array_splice($columns, 0, 1);
        array_splice($columns, count($columns)-2, 2);
        
        foreach ($columns as $key => $value) {
            $table->{$value} = $request->{$value};
        }
        if(property_exists($table,'additional_data')){
            $table->additional_data = json_encode($request->all());
        }

        $table->save();

        return response()->json([
            'redirect'=> $request->previous_url,
            'response_code'=>'200'
        ]);
    }

    public function getModelData(Request $request){
        
        $table = $this->model_map[$request->m_key];
        $table = new $table();
        $table = $table->where([
            $request->search_data_key=>$request->search_data_value,
            'user_uid'=>$request->user_uid
            ])->get();
        // dd($table);
        
        return response()->json([
            'data'=> $table,
            'redirect'=> $request->previous_url,
            'response_code'=>'200'
        ]);
    }
    
    public function updateModelData(Request $request){
        
        $table = $this->model_map[$request->m_key];
        
        $table = new $table();
        $table = $table->where($request->search_data_key,$request->search_data_value)->first();
        $table->{$request->update_data_key} = $request->update_data_value;
        $table->save();
        
        return response()->json([
            'redirect'=> $request->previous_url,
            'response_code'=>'200'
        ]);
    }
     
    public function submitUserUpdates(Request $request){
        
        $table = $this->model_map[$request->m_key];
        $table = new $table();
        $tableName = $table->getTable();
        
        $table = $table->where($request->search_data_key,$request->search_data_value)->first();
        dd($table);
        $columns = Schema::getColumnListing($tableName);
        array_splice($columns, 0, 1);
        array_splice($columns, count($columns)-2, 2);
        
        foreach ($columns as $key => $value) {
            if(isset($request->{$value})){
                $table->{$value} = $request->{$value};
            }
        }

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

        // $userData = User::getCurrentUser();
        $user = User::where('user_uid',$request->user_uid)->first();
        $activity = Activity::where('user_uid',$request->user_uid)->get();
        $transactions = Transaction::where('user_uid',$request->user_uid)->get();
        // dd($transactions);
        return view('admin.pages.my_account',compact('user','activity','transactions'));
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
    
    public function payments(){
        $payments = Payment::all();
        return view('admin.pages.payments',compact('payments'));
    }

    public function commission(){
        
        return view('admin.pages.commission');
    }
    
    public function news_view(Request $request){
        $domain = $request->host();
        $news  = [];
        $appData = Appdata::where('app_domain',$domain)->first();
        $additional_data = json_decode($appData->additional_data);
        if($additional_data != ''){
            if(property_exists($additional_data,'marquee')){
                $news = $additional_data->marquee;
            }
        }
        // dd($news);
        return view('admin.pages.news_view',compact('news'));
    }
      
    public function update_news(Request $request){
        $newsData = [];
        $domain = $request->host();
        $appData = Appdata::where('app_domain',$domain)->first();
        $additional_data = json_decode($appData->additional_data,true);
        $newsData['news_id'] = isset($additional_data['marquee'])?count($additional_data['marquee']):0;
        $newsData['news'] = $request->news;
        // dd($newsData);
        if(isset($request->news_id)){
            $additional_data['marquee'][$request->news_id]['news'] = $request->news;
        } else{
            $additional_data['marquee'][] = $newsData;
        }
        $appData->additional_data = json_encode($additional_data);
        $appData->save();

        return response()->json([
            'redirect'=> url()->previous(),
            'response_code'=>'200'
        ]);
    }

    public function delete_news(Request $request){
        $newsData = [];
        $domain = $request->host();
        $appData = Appdata::where('app_domain',$domain)->first();
        $additional_data = json_decode($appData->additional_data,true);
        unset($additional_data['marquee'][$request->news_id]);
        $appData->additional_data = json_encode($additional_data);
        $appData->save();

        return response()->json([
            'redirect'=> url()->previous(),
            'response_code'=>'200'
        ]);
    }
}
