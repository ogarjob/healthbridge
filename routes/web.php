<?php

use App\Http\Controllers\AppointmentController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DepartmentController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserAppointmentController;
use App\Http\Controllers\UserController;
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

Route::get('/', HomeController::class)->name('home');

Route::middleware('auth')->group(function () {
    Route::get('/dashboard',                    DashboardController::class)->name('dashboard');
    Route::resource('users',                UserController::class)->only('index', 'show');
    Route::resource('departments',          DepartmentController::class)->only('index');
    Route::resource('appointments',         AppointmentController::class)->only('index', 'show');
    Route::resource('users.appointments',   UserAppointmentController::class)->only('index');
    Route::singleton('settings',            SettingController::class)->only('edit');

});

