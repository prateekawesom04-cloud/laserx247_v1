<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GameHistory extends Model
{
    //
    use HasFactory;

    protected $fillable = [
        'game_uid',
        'user_uid',
        'user_ip',
        'bet_amount',
        'win_amount',
        'loss_amount',
        'game_round',
        'token',
        'wallet_before',
        'wallet_after'
    ];
}
