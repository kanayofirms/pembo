<?php

use App\Http\Controllers\LoanTypesController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\StaffController;




Route::get('/', [AuthController::class, 'login']);
Route::post('login_post', [AuthController::class, 'login_post']);
Route::get('register', [AuthController::class, 'register']);
Route::post('register_post', [AuthController::class, 'register_post']);
Route::get('forgot_password', [AuthController::class, 'forgot_password']);


Route::group(['middleware' => 'admin'], function () {
    Route::get('admin/dashboard', [DashboardController::class, 'index']);
    Route::get('admin/staff/list', [StaffController::class, 'index']);
    Route::get('admin/staff/add', [StaffController::class, 'add']);
    Route::post('admin/staff/add', [StaffController::class, 'add_post']);
    Route::get('admin/staff/edit/{id}', [StaffController::class, 'staff_edit']);
    Route::post('admin/staff/edit/{id}', [StaffController::class, 'staff_edit_update']);
    Route::get('admin/staff/delete/{id}', [StaffController::class, 'staff_delete']);

    //Loan Types
    Route::get('admin/loan_types/list', [LoanTypesController::class, 'index']);
    Route::get('/admin/loan_types/add', [LoanTypesController::class, 'add']);
});

Route::group(['middleware' => 'staff'], function () {
    Route::get('staff/dashboard', [DashboardController::class, 'index']);
});

Route::get('logout', [AuthController::class, 'logout']);


