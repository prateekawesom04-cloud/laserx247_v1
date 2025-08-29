<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\GamesController;
use App\Http\Controllers\ApiCallController;
use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken;
use Illuminate\Support\Facades\View;


// Route::get('/{slug}', function ($slug) {
//     if(View::exists('pages.'.$slug)){
//         return view('pages.'.$slug);
//     } else{
//         return redirect($slug);
//     }
// });

Route::get('/', function () {
    return view('pages.index');
})->name('index');

Route::get('removeSession', function () {
    Session::forget('user_session');
});

Route::get('login', function () {
    return view('pages.login');
})->name('pages.login');

Route::get('register', function () {
    return view('pages.register');
})->name('pages.register');

Route::get('forgot-page', function () {
    return view('pages.forgot-page');
});

Route::get('home', function () {
    return view('pages.home');
});

Route::get('/in-play', function () {
    return view('pages.in-play');
});
Route::get('/multi-market', function () {
    return view('pages.multi-market');
});
Route::get('/cricket', function () {
    return view('pages.cricket');
});
Route::get('/football', function () {
    return view('pages.football');
});
Route::get('/tennis', function () {
    return view('pages.tennis');
});
Route::get('/casino', function () {
    return view('pages.casino');
});
Route::get('/sports-book', function () {
    return view('pages.sports-book');
});
Route::get('/providers_tab', function () {
    return view('pages.providers_tab');
});
Route::get('/deposit-withdrawal', function () {
    return view('account_pages.deposit-withdrawal');
});
Route::get('/wallet', function () {
    return view('account_pages.wallet');
});
Route::get('/statements', function () {
    return view('account_pages.statements');
});
Route::get('/change_password', function () {
    return view('account_pages.change_password');
});
Route::get('/profile', function () {
    return view('account_pages.profile');
});
Route::get('/profit_loss', function () {
    return view('account_pages.profit_loss');
});
Route::get('/refer_rewards', function () {
    return view('account_pages.refer_rewards');
});
Route::get('/unsettled_bets', function () {
    return view('account_pages.unsettled_bets');
});
Route::get('/favourite', function () {
    return view('account_pages.favourite');
});
// Games


Route::get('gameList', [GamesController::class,'gameList'])->name('gameList');




Route::get('demoLogin', [AuthController::class,'demoLogin'])->name('demoLogin');


// POST requests

Route::post('login', [AuthController::class,'login'])->name('login')->withoutMiddleware([VerifyCsrfToken::class]);

Route::post('register', [AuthController::class,'register'])->name('register')->withoutMiddleware([VerifyCsrfToken::class]);

Route::post('forgetPassword', [AuthController::class,'forgetPassword'])->name('forgetPassword')->withoutMiddleware([VerifyCsrfToken::class]);

Route::post('launchGame', [GamesController::class,'launchGame'])->name('launchGame')->withoutMiddleware([VerifyCsrfToken::class]);





// testing part

Route::get('callApi/{apiName}',[ApiCallController::class,'callApi']);

Route::middleware('auth_middleware')->group(function(){
    Route::get('test', function(){
        return 'testing routes';
    });
    
});


// @if(!session()->has('user_session'))
