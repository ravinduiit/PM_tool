<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

Route::get('/', function () {
    return view('layout.main');
});

Route::get('/profilePage', function () {
    return view('profilePage');
});

Route::get('/projectList', function () {
    return view('projectList');
});

Route::get('/create_project', function () {
    return view('create_project');
});
Route::get('/dashboard', function () {
    return view('dashboard');
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

Route::get('/project/dashboard', function () {
    return view('project_dashboard');
});

//google authenctication 
Route::get('/auth/google/redirect', function (Request $request) {
    return Socialite::driver("google")->redirect();
});

Route::get('/auth/google/callback', function (Request $request) {
    // $googleUser = Socialite::driver("google")->user();
    // dd($googleUser);
});