<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Redirect;
use App\Http\Controllers\AuthController;
use App\Models\User;
use App\Models\Game;
use App\Models\GameHistory;

class GamesController extends Controller
{
    //
    public function gameList(Request $request){

        $games = Storage::disk('local')->get('games_data/'.$request->provider.'.json');
        
        // $games = json_decode($games);

        $games = json_decode($games, true);
        $games = array_slice($games, $request->game_index*6, 6);
        return response()->json([
            'provider'=> $request->provider,
            'games'=> $games,
            'game_index'=>$request->game_index+1
        ]);
    }

    public function launchGame(Request $request){

        $user = User::getCurrentUser();
        
        $data = [];

        // if(1){
        if(!empty($user)){
            
            $data['user_id'] = $user->user_uid;
            $data['wallet_amount'] = $user->wallet_amount;
            // $data['wallet_amount'] = '565.67';
            $data['game_uid'] = $request->game_uid;
            $data['token'] = env('GAME_TOKEN');
            $data['timestamp'] = date("Y-m-d H:i:s");
            // dd(json_encode($data));
            $payload= json_encode($data);

            $iv_length = openssl_cipher_iv_length('AES-256-CBC');
            $iv = openssl_random_pseudo_bytes($iv_length);

            $data['payload'] = base64_encode(
                    openssl_encrypt(
                        json_encode($data,JSON_UNESCAPED_SLASHES),
                        'AES-256-CBC',
                        env('GAME_SECRET_KEY'),
                        OPENSSL_RAW_DATA,$iv
                    )
                );
            // dd($data);
            // $data['payload'] = (new AuthController)->aes256Encrypt(env('GAME_SECRET_KEY'), $payload);

            $http_query = http_build_query($data);
            // dd($http_query);
            $url = 'https://bosswin.in/launch_game?'.$http_query;

            // return redirect($url);
            
            return $url;
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
}
