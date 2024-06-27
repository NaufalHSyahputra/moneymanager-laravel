<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TimePeriodController;

Route::get('/', function () {
    return view('welcome');
});

// Route::apiResource('account', \App\Http\Controllers\AccountController::class);
// Route::apiResource('account_type', \App\Http\Controllers\AccountTypeController::class);
// Route::apiResource('category', \App\Http\Controllers\CategoryController::class);
// Route::apiResource('category_type', \App\Http\Controllers\CategoryTypeController::class);
// Route::apiResource('loan', \App\Http\Controllers\LoanController::class);
// Route::apiResource('payee', \App\Http\Controllers\PayeeController::class);
// Route::apiResource('payee_type', \App\Http\Controllers\PayeeTypeController::class);
// Route::apiResource('setting', \App\Http\Controllers\SettingController::class);
// Route::apiResource('transaction', \App\Http\Controllers\TransactionController::class);