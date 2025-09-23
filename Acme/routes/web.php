<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsersController; // 👈 IMPORTANTE

Route::get('/', function () {
    return view('welcome');
});

Route::group(['prefix'=>'dashboard'],function(){
    Route::get("/", function(){
        return view('admin.dashboard');
    });
    Route::get("/users",[UsersController::class, 'getUsers']);
});
