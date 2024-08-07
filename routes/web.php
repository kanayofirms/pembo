<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\StaffController;




Route::get('/', [AuthController::class, 'login']);
Route::get('register', [AuthController::class, 'register']);
Route::post('register_post', [AuthController::class, 'register_post']);
Route::get('forgot_password', [AuthController::class, 'forgot_password']);

Route::get('admin/dashboard', [DashboardController::class, 'index']);
Route::get('admin/staff/list', [StaffController::class, 'index']);

