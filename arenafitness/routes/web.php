<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;


Route::get('/register', [AuthController::class, 'index']);
Route::get('/login', [AuthController::class, 'login']);

Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'authenticate']);

    
    Route::get('/', [HomeController::class, 'index']);
    
