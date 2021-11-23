<?php


use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AlojamientoController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\RoleController;



// Route::get('/', function () {
//     return view('auth.login');
// });
Route::get('/', [HomeController::class, 'home'])->name('home');
Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
Route::resource('alojamientos', AlojamientoController::class);

Route::resource('users', UserController::class);
Route::resource('roles', RoleController::class);