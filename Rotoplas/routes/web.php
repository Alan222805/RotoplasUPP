<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
Route::get('/', function () {
    return view('welcome');
});

Route::controller(UserController::class)->group(function () {
    Route::get('Principal', 'index');
    Route::get('capacitate', 'capacitate');
    Route::get('productos', 'productos');
    Route::get('carrito', 'carrito');
    Route::get('Log_in', 'login');
    Route::get('Sign_in', 'signin');
    Route::get('Conocenos', 'conocenos');
});

Route::controller(AdminController::class)->group(function () {
    Route::get('carrito_admin', 'carritoAdmin');
});
