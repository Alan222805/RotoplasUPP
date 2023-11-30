<?php

namespace App\Http\Controllers;

use App\Models\productosNuevosModel;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function __invoke()
    {
        return view('welcome');
    }
    public function index()
    {
        $product = productosNuevosModel::all();
        return view('administrador/Principal_admin', compact('product'));
    }

    public function formularioAgregarPrincipal()
    {
        return view('administrador/agregar_producto_principal');
    }

    public function agregarProducto(Request $request)
    {
        $producto = new productosNuevosModel();
        $producto->nombre = $request->nom;
        $producto->precio = $request->precio;
        $producto->descripcion = $request->desc;
        $producto->stock = $request->stock;
        $producto->id_categoria = $request->idCat;
        $producto->save();

        return redirect()->route('admin.agregar_producto', compact('producto'));
    }


    public function carritoAdmin()
    {
        return view('/administrador/carrito_admin');
    }

}
