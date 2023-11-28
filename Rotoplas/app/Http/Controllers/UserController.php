<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\clienteModel;
use App\Models\productosModel;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function __invoke()
    {
        return view('welcome');
    }

    public function index()
    {
        return view('Principal');
    }

    public function capacitate()
    {
        return view('capacitate');
    }
    public function productos()
    {
        return view('productos', compact('producto'));
    }
    public function carrito()
    {
        return view('carrito');
    }
    public function login()
    {
        return view('Log_in');
    }
    public function signin()
    {
        return view('Sign_in');
    }
    public function conocenos()
    {
        return view('Conocenos');
    }

    public function datosBancarios(){
        return view('datos_bancarios');
    }

    public function carritoUser()
    {
        return view('carrito_usuario');
    }

    public function carritoAdmin()
    {
        return view('carrito_admin');
    }

    //Práctica de formulario
    public function prueba()
    {
        $obj = clienteModel::all();
        return view('pruebaBD', compact('obj'));
    }

    public function formulario()
    {
        return view('formulario');
    }

    public function crearCliente(Request $request)
    {
        $objeto = new clienteModel;
        $objeto->nombre = $request->nom;
        $objeto->direccion = $request->dir;
        $objeto->telefono = $request->tel;
        $objeto->email = $request->em;
        $objeto->edad = $request->ed;
        $objeto->sexo = $request->gen;
        $objeto->save();

        $obj = clienteModel::paginate();
        return view('pruebaBD', compact('obj'));
    }
    /*Fin practica de formulario */

    //Obtener registros de productos
    public function obtenerProductos()
    {
        $producto = productosModel::select('descripcion')->where('id', 1)->get();
    }
}
