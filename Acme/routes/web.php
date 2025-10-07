<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PlanoController;
use App\Http\Controllers\UsersController;

Route::get('/', function () {
    return view('welcome');
});

Route::group(['prefix'=>'dashboard'], function() {
    Route::get("/", function() {
        return view('admin.dashboard');
    });

    Route::get("/users",[UsersController::class, 'getUsers']);
    Route::get("/plano",[PlanoController::class, 'getPlanos'])->name('planos.index');
    Route::post("/plano",[PlanoController::class, 'createPlanos'])->name('planos.store');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
