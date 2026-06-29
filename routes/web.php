<?php

use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Backend\DashboardController;
use App\Http\Controllers\Backend\SurveyController;
use App\Http\Middleware\AccessDeniedAuth;
use Illuminate\Support\Facades\Route;

// ROUTE FOR ADMINISTRATOR LOGINS.
// LOGIN.
Route::get('/login', [AuthController::class, 'showLogin'])->name('login');
Route::post('/login', [AuthController::class, 'login']);

// REGISTER.
Route::get('/register', [AuthController::class, 'showRegister'])->name('register');
Route::post('/register', [AuthController::class, 'register']);

// LOGOUT.
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

    // FORCE the blank HOMEPAGE to REDIRECT to the Login Screen.
    Route::get('/', function () {
        return redirect()->route('login');
    });

// ROUTE FOR ADMINISTRATOR DASHBOARDS.
Route::prefix('admin')->name('admin.')->middleware(['auth', AccessDeniedAuth::class])->group(function () {

    // Dashboard.
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    // Survey Resources.
    Route::resource('/surveys', SurveyController::class);

    // 

});