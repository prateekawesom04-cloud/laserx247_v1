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
            $data['user_id'] = '345456';
            // $data['wallet_amount'] = $user->wallet_amount;
            $data['wallet_amount'] = '565.67';
            $data['game_uid'] = '2fa9a84d096d6ff0bab53f81b79876c8';
            $data['token'] = env('GAME_TOKEN');
            $data['timestamp'] = time();
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
            $url = 'https://colourforge.in?'.$http_query;

            // return redirect($url);
            
            return $url;
        } else {
            return response()->json([
                'err_msg'=>'Please Login',
                'error_code'=> '104'
            ]);
        }


        // https://bosswin.in/launch_game?user_id=225&wallet_amount=939.45&game_uid=ba2adf72179e1ead9e3dae8f0a7d4c07&token=2a4ee16f-c3c1-4c0c-94cd-b7ca28&timestamp=1756285833432&payload=OGpH%2FxBHdnAF%2BHCLiFFof%2BnENwQE3h848ji2zlNbmP3e6W%2FZimD91bkVO2w7ZKCwAo3Rvr9wKwd4kg9RAx0US2b%2Fl5ku0bQGBV0aicf2MiFS12bYZgrY3avL7IEF6MONbtug7s1E07nioR0FkGhnNa2%2BXEYqTnBkrkB5%2Fomdv1TFCedUxNahkMcwgvMC8GPOWe%2BaG7Z1P4pHBKM0Tmriyg%3D%3D", returnType: 1

    }
}
