<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;
use App\Http\Middleware\EnsureUserHasRole;
use App\Http\Controllers\ProductoController;



Route::get('/', [AuthController::class, 'index'])->name('login');
Route::post('/logear', [AuthController::class, 'logear'])->name('logear');



// Rutas accesibles solo si estás logueado
Route::middleware('auth')->group(function () {

    //vistas
    Route::get('/catalogo', [ProductoController::class, 'listado'])->name('productos.listado');
    Route::get('/welcome', [AuthController::class, 'welcome'])->name('welcome');
    Route::get('/nosotros', [AuthController::class, 'nosotros'])->name('nosotros');
    Route::get('/pruebas', [AuthController::class, 'pruebas'])->name('pruebas');


    //acciones
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout'); // ✅ Nueva ruta correcta
    Route::resource('productos', ProductoController::class);
});




// Rutas accesibles solo si estás logueado Y además eres admin
Route::middleware(['auth', EnsureUserHasRole::class . ':admin'])->group(function () {
    Route::resource('users', AdminController::class);
});
