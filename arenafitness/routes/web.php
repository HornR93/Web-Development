<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\SubscriptionController;


Route::get('/register', [AuthController::class, 'index']);
Route::get('/login', [AuthController::class, 'login']);
Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'authenticate']);

Route::middleware(['auth'])->group(function () {    

    Route::get('/', [HomeController::class, 'index']);
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
    Route::get('/subscription', [SubscriptionController::class, 'index'])->name('subscription.index');
    Route::post('/subscription', [SubscriptionController::class, 'store'])->name('subscription.create');

});