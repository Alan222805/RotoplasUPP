<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

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
    Route::get('conocenos', 'conocenos');
});
