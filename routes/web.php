<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages/index');
});
Route::get('/home', function () {
    return view('pages/home');
});
Route::get('/sign-up', function () {
    return view('pages/sign-up');
});
Route::get('/login', function () {
    return view('pages/login');
});
Route::get('/in-play', function () {
    return view('pages/in-play');
});