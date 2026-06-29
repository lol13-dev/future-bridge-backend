<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\DashboardController;
use App\Http\Middleware\Middleware\AccessDeniedAuth;
use App\Http\Controllers\Backend\SurveyController;

// ROUTE FOR ADMINISTRATOR LOGINS.


// ROUTE FOR ADMINISTRATOR DASHBOARDS.
Route::prefix('admin')->name('admin.')->middleware(['auth', AccessDeniedAuth::class])->group(function () {

    // Dashboard.
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('admin.dashboard');

    // Survey Resources.
    Route::resource('/surveys', SurveyController::class)->names('admin.surveys');

    // 
    
});