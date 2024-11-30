<?php

use Illuminate\Support\Facades\Route;

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