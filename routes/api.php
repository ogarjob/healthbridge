<?php

use App\Http\Controllers\Api\AppointmentController;
use App\Http\Controllers\Api\AppointmentStatusController;
use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\DepartmentController;
use App\Http\Controllers\Api\NewUserController;
use App\Http\Controllers\Api\TransactionController;
use App\Http\Controllers\Api\UserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::post('/login',     [AuthController::class, 'store'])->name('login');
Route::post('/register',  [NewUserController::class, 'store'])->name('register');
Route::delete('/logout',  [AuthController::class, 'destroy'])->name('logout');

Route::apiResource('appointments',  AppointmentController::class)->only('store');

Route::middleware('auth')->group(function () {
    Route::apiResource('users',                         UserController::class)->only('store', 'update', 'destroy');
    Route::apiresource('departments',                   DepartmentController::class)->only('store', 'update', 'destroy');
    Route::apiResource('appointments',                  AppointmentController::class)->only('update');
    Route::apiResource('appointments.status',           AppointmentStatusController::class)->only('store');
    Route::apiResource('appointments.transactions',     TransactionController::class)->only('store');
});
