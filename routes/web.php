<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

Route::get('/', [AuthController::class, 'login']);
Route::get('register', [AuthController::class, 'register']);
Route::get('forgot_password', [AuthController::class, 'forgot_password']);

