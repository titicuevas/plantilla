<?php

use App\Http\Controllers\UserController;
use App\Http\Controllers\VuelosController;

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Route::get('login', [UserController::class, 'loginForm']);
Route::post('login', [UserController::class, 'login']);
Route::post('logout', [UserController::class, 'logout']);
Route::get('vuelos',[VuelosController::class,'viaje']);