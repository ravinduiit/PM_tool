<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('Auth.user_login');
});

Route::get('/profilePage', function () {
    return view('profilePage');
});

Route::get('/projectList', function () {
    return view('projectList');
});

Route::get('/addUser', function () {
    return view('addUser');
});


Route::get('/teams', function () {
    return view('teams');
});

Route::get('/projectSettings', function () {
    return view('projectSettings');
});