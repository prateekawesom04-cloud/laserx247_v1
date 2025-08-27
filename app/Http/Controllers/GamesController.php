<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Redirect;
use App\Http\Controllers\AuthController;

class GamesController extends Controller
{
    //
    public function gameList(Request $request){

        $games = Storage::disk('local')->get('games_data/'.$request->provider.'.json');
        
        // $games = json_decode($games);

        $games = json_decode($games, true);
        $games = array_slice($games, 0, 6);
        return response()->json([
            'provider'=> $request->provider,
            'games'=> $games
        ]);
    }

    public function launchGame(Request $request){
        // $user = User::where([
        //     'user_uid'=>session('user_uid')
        // ])->first();
        
        $data = [];

        if(1){
        // if(session('user_uid')){
            $data['user_uid'] = '345456';
            // $data['wallet_amount'] = $user->wallet_amount;
            $data['wallet_amount'] = '565.67';
            $data['game_uid'] = $request->game_id;
            $data['token'] = env('GAME_TOKEN');
            $data['timestamp'] = time();
            $payload= json_encode($data, JSON_UNESCAPED_SLASHES);
            $data['payload'] = (new AuthController)->aes256Encrypt(env('GAME_SECRET_KEY'), $payload);
            $http_query = http_build_query($data);
            // return Redirect::to('https://colourforge.in/?'.$http_query);
            return $http_query;
        } else {
            return response()->json([
                'err_msg'=>'Please Login',
                'error_code'=> '104'
            ]);
        }
        // $data['wallet_amount']
        // $data['wallet_amount']
        // $data['wallet_amount']


    }
}
