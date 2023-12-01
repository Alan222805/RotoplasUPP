<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use App\Models\clienteModel;

Route::get('/', function () {
    return view('welcome');
});

Route::controller(UserController::class)->group(function () {
    Route::get('Principal', 'index') ->name('user.index');
    Route::get('capacitate', 'capacitate')->name('user.capacitate');
    Route::get('productos', 'productos')->name('user.productos');
    Route::get('carrito', 'carrito');
    Route::get('Log_in', 'login');
    Route::get('Sign_in', 'signin');
    Route::get('Conocenos', 'conocenos') ->name('user.conocenos');
    Route::get('pruebaBD', 'prueba');
    Route::get('formulario', 'formulario');
    Route::post('create', 'crearCliente');
    Route::get('carrito_usuario', 'carritoUser')->name('user.carrito_usuario');
    Route::get('carrito_usuario/formulario_direccion', 'formularioDireccion') ->name('carrito.formulario_direccion');
    Route::get('carrito_usuario/formulario_direccion/datos_bancarios', 'datosBancarios') ->name('carrito.datos_bancarios');
    Route::get('datos_bancarios', 'datosBancarios');
});

Route::controller(AdminController::class)->group(function () {
    Route::get('carrito_admin', 'carritoAdmin');
    Route::get('<carrito_admin>inventario', 'inventario')->name('admin.inventario');
    Route::get('Principal_admin', 'index');
    Route::get('Principal_admin/agregar_producto_principal', 'formularioAgregarPrincipal') ->name('admin.formulario_producto_principal');
    Route::post('Principal_admin', 'agregarProducto') ->name('admin.agregar_producto');
    Route::get('Principal_admin/modificar_producto_principal', 'formularioModificarPrincipal') ->name('admin.formulario_modificar_producto_principal');
});
