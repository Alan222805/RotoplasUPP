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
    Route::get('principal', 'index');
    Route::get('capacitate', 'capacitate');
    Route::get('productos', 'productos');
    Route::get('carrito', 'carrito');
    Route::get('login', 'login');
    Route::get('signin', 'signin');
    Route::get('conocenos', 'conocenos');
});
