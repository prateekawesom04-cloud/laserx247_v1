<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Redirect;
use App\Http\Controllers\AuthController;
use App\Traits\CustomTrait;
use App\Models\User;
use App\Models\Game;
use App\Models\GameHistory;

class GamesController extends Controller
{
    use CustomTrait;
    //
    public function gameList(Request $request){
        if($request->providers) {
            $games_1 = Storage::disk('local')->get('games_data/'.$request->providers[0].'.json');
            $games_1 = array_slice(json_decode($games_1, true),0,4);

            $games_2 = Storage::disk('local')->get('games_data/'.$request->providers[1].'.json');
            $games_2 = array_slice(json_decode($games_2, true),0,4);

            $games = array_merge($games_1,$games_2);
        } else{
            
            $games = Storage::disk('local')->get('games_data/'.$request->provider.'.json');
            $games = json_decode($games, true);

        }
        
        // $games = json_decode($games);
        
        $games = array_slice($games, $request->game_index*16, 16);
        return response()->json([
            'provider'=> $request->provider,
            'games'=> $games,
            'game_index'=>$request->game_index+1
        ]);
    }

// Game Launch using Bosswin start

    public function launchGame(Request $request){
        
        $user = User::getCurrentUser();
        
        $data = [];

        // if(1){
        if(!empty($user)){
            
            $data['user_id'] = $user->user_uid;
            $data['wallet_amount'] = $user->wallet_amount;
            $data['game_uid'] = $request->game_id;
            $data['token'] = env('GAME_TOKEN');
            $data['timestamp'] = date("Y-m-d H:i:s");
                
            $data['payload'] = (new AuthController)->aes256Encrypt(env('GAME_SECRET_KEY'), json_encode($data));

            $http_query = http_build_query($data);
            
            $url = 'https://bosswin.in/launch_game?'.$http_query;
            
            
            return response()->json([
                'url'=>$url,
                'error_code'=> '101'
            ]);
        } else {
            return response()->json([
                'err_msg'=>'Please Login',
                'error_code'=> '104'
            ]);
        }

    }

    public function launchGameCallback(Request $request) : void {

        $gameHistory = new GameHistory();
        $gameHistory->user_uid = $request->mobile;
        $gameHistory->user_uid = $request->mobile;
        $gameHistory->bet_amount = $request->bet_amount;
        $gameHistory->win_amount = $request->win_amount;
        $gameHistory->game_uid = $request->game_uid;
        $gameHistory->game_round = $request->game_round;
        $gameHistory->token = $request->token;
        $gameHistory->wallet_before = $request->wallet_before;
        $gameHistory->wallet_after = $request->wallet_after;
        $gameHistory->updated_at = date("Y-m-d H:i:s",$request->timestamp);
        $gameHistory->save();

        $user = User::where('user_uid',$request->mobile);
        $user->wallet_amount = $request->wallet_after;
        $user->save();

    }

// Game Launch using Bosswin end


// Sports Api start

    public function sportsbook(Request $request){
        
        $url = env('SPORTSBOOK_URL');
        $CURLOPT_RETURNTRANSFER=true;
        $CURLOPT_TIMEOUT = 30;
        $CURLOPT_MAXREDIRS = 10;
        $CURLOPT_CUSTOMREQUEST = 'GET';
        $headers = [
            "x-rapidapi-host: ".env('X_RAPIDAPI_HOST'),
            "x-rapidapi-key: ".env('X_RAPIDAPI_KEY')
        ];

        $response = $this->callApi(
            $url,
            $CURLOPT_RETURNTRANSFER,
            $CURLOPT_TIMEOUT,
            $CURLOPT_MAXREDIRS,
            $CURLOPT_CUSTOMREQUEST,
            $headers
        );

        dd($response['response']);
    }

// Sports Api end

}
