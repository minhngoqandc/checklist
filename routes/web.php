<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider wi(thin a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/login', function () {
    return view('frontend.login');
});

Route::get('/create', function () {
    return view('frontend.createAccount');
});

