<?php

use App\Http\Controllers\LoanTypesController;
use App\Http\Controllers\LoanUserController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\StaffController;
use App\Http\Controllers\LoanPlanController;
use App\Http\Controllers\LoanController;








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
    Route::post('/admin/loan_types/add', [LoanTypesController::class, 'store']);
    Route::get('admin/loan_types/edit/{id}', [LoanTypesController::class, 'edit']);
    Route::post('admin/loan_types/edit/{id}', [LoanTypesController::class, 'update']);
    Route::get('admin/loan_types/delete/{id}', [LoanTypesController::class, 'delete']);

    //Loan Plan
    Route::get('admin/loan_plan/list', [LoanPlanController::class, 'index']);
    Route::get('admin/loan_plan/add', [LoanPlanController::class, 'add']);
    Route::post('admin/loan_plan/add', [LoanPlanController::class, 'store']);
    Route::get('admin/loan_plan/edit/{id}', [LoanPlanController::class, 'edit']);
    Route::post('admin/loan_plan/edit/{id}', [LoanPlanController::class, 'update']);
    Route::get('admin/loan_plan/delete/{id}', [LoanPlanController::class, 'delete']);

    //Loan Menu
    Route::get('admin/loan/list', [LoanController::class, 'index']);
    Route::get('admin/loan/add', [LoanController::class, 'create']);

    //Loan User
    Route::get('admin/loan_user/list', [LoanUserController::class, 'index']);
    Route::get('admin/loan_user/add', [LoanUserController::class, 'create']);
    Route::post('admin/loan_user/add', [LoanUserController::class, 'store']);
});

Route::group(['middleware' => 'staff'], function () {
    Route::get('staff/dashboard', [DashboardController::class, 'index']);
});

Route::get('logout', [AuthController::class, 'logout']);


