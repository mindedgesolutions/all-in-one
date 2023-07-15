<?php

use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\Auth\DashboardRedirect;
use App\Http\Controllers\UserSettings\PasswordController;
use App\Http\Controllers\UserSettings\ProfileController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Non Auth based routes -----------------*
Route::middleware('guest')->controller(AuthController::class)->group(function(){
    Route::get('/register', 'register')->name('register');
    Route::get('/', 'login')->name('login');
});

Route::middleware(['auth', 'prevent.back', 'user.basic'])->group(function(){
    Route::get('/dashboard', [AuthController::class, 'redirect'])->name('dashboard');

    // Role based routes starts -----------------*

    Route::controller(AuthController::class)->group(function(){
        Route::get('/admin-dashboard', 'adminDashboard')->name('admin.dashboard')->middleware('admin.dashboard');
        Route::get('/manager-dashboard', 'managerDashboard')->name('manager.dashboard')->middleware('manager.dashboard');
        Route::get('/your-dashboard', 'employeeDashboard')->name('employee.dashboard')->middleware('employee.dashboard');
    });

    // Role based routes ends -----------------*

    // Non-role based, but Auth based routes -----------------*
    Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
    Route::get('/profile', [ProfileController::class, 'profile'])->name('settings.profile');
    Route::get('/change-password', [PasswordController::class, 'changePassword'])->name('settings.password');
});