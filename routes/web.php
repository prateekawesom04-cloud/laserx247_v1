<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ApiCallController;
use Illuminate\Foundation\Http\Middleware\VerifyCsrfToken;

Route::get('/', function () {
    return view('pages.index');
})->name('index');

Route::get('/removeSession', function () {
    Session::forget('user_session');
});

Route::get('login', function () {
    return view('pages.login');
})->name('pages.login');

Route::get('register', function () {
    return view('pages.register');
})->name('pages.register');

Route::get('home', function () {
    return view('pages.home');
});

Route::get('in-play', function () {
    return view('pages/in-play');
});

Route::get('demoLogin', [AuthController::class,'demoLogin'])->name('demoLogin');

// POST requests

Route::post('login', [AuthController::class,'login'])->name('login')->withoutMiddleware([VerifyCsrfToken::class]);

Route::post('register', [AuthController::class,'register'])->name('register')->withoutMiddleware([VerifyCsrfToken::class]);





// testing part

Route::get('callApi/{apiName}',[ApiCallController::class,'callApi']);

Route::middleware('auth_middleware')->group(function(){
    Route::get('test', function(){
        return 'testing routes';
    });
    
});