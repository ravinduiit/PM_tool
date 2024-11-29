<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/login_admin', function () {
    return view('Auth.admin_login');
});

Route::get('/login_user', function () {
    return view('Auth.user_login');
});