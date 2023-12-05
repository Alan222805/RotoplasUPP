<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;

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

Route::get('/dashboard', function () {
    return view('/dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';


Route::controller(UserController::class)->group(function () {
    Route::get('Principal', 'index') ->name('user.index');
    Route::get('capacitate', 'capacitate')->name('user.capacitate');
    Route::get('productos', 'productos')->name('user.productos');
    //Route::get('carrito', 'carrito');
    Route::get('Log_in', 'login');
    Route::get('Sign_in', 'signin');
    Route::get('Conocenos', 'conocenos') ->name('user.conocenos');
    Route::get('pruebaBD', 'prueba');
    Route::get('formulario', 'formulario');
    Route::post('create', 'crearCliente');
    Route::get('carrito_usuario/formulario_direccion', 'formularioDireccion') ->name('carrito.formulario_direccion');
    Route::get('carrito_usuario/formulario_direccion/datos_bancarios', 'datosBancarios') ->name('carrito.datos_bancarios');
    Route::get('datos_bancarios', 'datosBancarios');

    //Mostrar cursos
    Route::get('capacitate_usuario', 'mostrarCursos')->name('user.mostrarCursos');

    //Mostrar productos en el carrito
    Route::get('carrito_usuario', 'mostrarProductosCarrito')->name('user.carrito_usuario');

    //filtrar productos

});

Route::controller(AdminController::class)->group(function () {
    Route::get('Conocenos_admin', 'conocenosAdmin') ->name('admin.conocenosAdmin');
    Route::get('carrito_admin', 'carritoAdmin')->name('admin.carritoAdmin');
    Route::get('<carrito_admin>inventario', 'inventario')->name('admin.inventario');
    Route::get('Principal_admin', 'index') ->name('admin.index');
    //Agregar productos a la pagina principal
    Route::get('Principal_admin/agregar_producto_principal', 'formularioAgregarPrincipal') ->name('admin.formulario_producto_principal');
    Route::post('agregar_producto_principal', 'agregarProductoPrincipal')->name('admin.agregar_producto');
    //Modificar productos de la pagina principal
    Route::get('Principal_admin/modificar_producto_principal/{producto}', 'formularioModificarPrincipal') ->name('admin.formulario_modificar_producto_principal');
    Route::put('Principal_admin/modificar_producto_principal/{producto}', 'modificarProductoPrincipal')->name('admin.modificar_producto');
    //Eliminar productos de la pagina principal
    Route::delete('Principal_admin/eliminar_producto_principal/{producto}', 'eliminarProductoPrincipal')->name('admin.eliminar_producto');


//----------------------------------------------------------------------------------------------------------------------------------------------------

    //Mostrar cursos en el administrador
    Route::get('capacitate_admin', 'mostrarCursosAdmin')->name('admin.mostrarCursosAdmin');

    //Agregar cursos a la pantalla de capacitate
    Route::get('capacitate_admin/agregar_cursos', 'formularioAgregarCursos') ->name('admin.formulario_agregar_cursos');
    Route::post('agregar_cursos', 'agregarCursos')->name('admin.agregar_cursos');

    //Modificar cursos de la pantalla de capacitate
    Route::get('capacitate_admin/modificar_cursos/{curso}', 'formularioModificarCursos') ->name('admin.formulario_modificar_cursos');
    Route::put('capacitate_admin/modificar_cursos/{curso}', 'modificarCursos')->name('admin.modificar_cursos');

    //Eliminar cursos de la pantalla de capacitate
    Route::delete('capacitate_admin/eliminar_cursos/{curso}', 'eliminarCursos')->name('admin.eliminar_cursos');


//----------------------------------------------------------------------------------------------------------------------------------------------------

    //Mostrar productos en el administrador
    Route::get('productos_admin', 'mostrarProductosAdmin')->name('admin.mostrarProductosAdmin');

    //Modificar productos de la pantalla de productos
    Route::get('productos_admin/modificar_productos/{producto}', 'formularioModificarProductos') ->name('admin.formulario_modificar_productos');
    Route::put('productos_admin/modificar_productos/{producto}', 'modificarProductos')->name('admin.modificar_productos');

    //Eliminar productos de la pantalla de productos
    Route::delete('productos_admin/eliminar_productos/{producto}', 'eliminarProductos')->name('admin.eliminar_productos');

});
