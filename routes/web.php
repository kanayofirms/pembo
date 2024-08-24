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
    Route::post('admin/staff/add', [StaffController::class, 'store']);
    Route::get('admin/staff/edit/{id}', [StaffController::class, 'edit']);
    Route::post('admin/staff/edit/{id}', [StaffController::class, 'update']);
    Route::get('admin/staff/view/{id}', [StaffController::class, 'view']);
    Route::get('admin/staff/delete/{id}', [StaffController::class, 'destroy']);

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
    Route::post('admin/loan/add', [LoanController::class, 'store']);
    Route::get('admin/loan/edit/{id}', [LoanController::class, 'edit']);
    Route::post('admin/loan/edit/{id}', [LoanController::class, 'update']);
    Route::get('admin/loan/delete/{id}', [LoanController::class, 'destroy']);

    //Loan User
    Route::get('admin/loan_user/list', [LoanUserController::class, 'index']);
    Route::get('admin/loan_user/add', [LoanUserController::class, 'create']);
    Route::post('admin/loan_user/add', [LoanUserController::class, 'store']);
    Route::get('admin/loan_user/delete/{id}', [LoanUserController::class, 'destroy']);

    //Profile
    Route::get('admin/profile', [DashboardController::class, 'profile']);
    Route::post('admin/profile/update', [DashboardController::class, 'update']);

});

Route::group(['middleware' => 'staff'], function () {
    Route::get('staff/dashboard', [DashboardController::class, 'index']);
    Route::get('staff/loan_user/list', [LoanUserController::class, 'staff_loan_user']);
    Route::get('staff/loan_user/delete/{id}', [LoanUserController::class, 'loan_user_destroy']);
});

Route::get('logout', [AuthController::class, 'logout']);


