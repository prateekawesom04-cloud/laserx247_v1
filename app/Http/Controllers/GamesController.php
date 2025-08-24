<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class GamesController extends Controller
{
    //
    public function gameList(Request $request){

        $games = Storage::disk('local')->get('games_data/'.$request->provider.'.json');
        
        // $games = json_decode($games);

        $games = json_decode($games, true);
        
        return response()->json($games);
    }
}
