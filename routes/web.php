<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.index');
});
Route::get('/home', function () {
    return view('pages.home');
});
Route::get('/register', function () {
    return view('pages.register');
});
Route::get('/login', function () {
    return view('pages.login');
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