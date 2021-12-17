<?php


use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AlojamientoController;
use App\Http\Controllers\CategoriaAlojamientoController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DetalleHabitacionController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\NormaController;
use App\Http\Controllers\PermissionController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\ServicioController;
use App\Http\Controllers\TipoHabitacionController;

// Route::get('/', function () {
//     return view('auth.login');
// });
Route::get('/', [HomeController::class, 'home'])->name('home');
//Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');


Route::resource('users', UserController::class)
    ->except('show');

Route::resource('roles', RoleController::class);

Route::resource('permissions', PermissionController::class)
    ->except('show');

Route::resource('normas', NormaController::class);

Route::resource('servicios', ServicioController::class);

Route::resource('tipo-habitacions', TipoHabitacionController::class)
    ->except('show');

Route::resource('detalle-habitacions', DetalleHabitacionController::class);

Route::resource('categoria-alojamientos', CategoriaAlojamientoController::class)
    ->except('show');