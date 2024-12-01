<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;  
use App\Http\Controllers\userController;


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




Route::get('/teams', function () {
    return view('teams');
});

Route::get('/projectSettings', function () {
    return view('projectSettings');
});

Route::get('/project/dashboard', function () {
    return view('project_dashboard');
});

// User Routes
Route::get('/addUserPage', function () {
    return view('addUser');
});

Route::get('/user/list', [UserController::class, 'userList'])->name('userList');
Route::post('/user/add', [userController::class, 'addUser'])->name('addUser');
Route::delete('/user/delete/{userId}', [UserController::class, 'deleteUser'])->name('user.delete');

//google authenctication 
Route::get('/auth/google/redirect', function (Request $request) {
    return Socialite::driver("google")->redirect();
});

Route::get('/auth/google/callback', function (Request $request) {
    // try {
    //     $googleUser = Socialite::driver('google')->user();

        

    //     // You can log in the user and redirect to the dashboard or home page
    //     auth()->login($googleUser, true);
    //     return redirect()->to('/dashboard'); // Replace with your desired page
    // } catch (Exception $e) {
    //     return redirect('login');
    // }
});