<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\clienteModel;
use App\Models\cursosModel;
use App\Models\productosModel;
use App\Models\productosNuevosModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function __invoke()
    {
        return view('welcome');
    }

    public function index()
    {
        $producto = productosNuevosModel::all();
        return view('Principal', compact('producto'));
    }



    //codigo para productos
    public function productos() //Funcion para mostrar los productos
    {
        $product = productosModel::paginate(6);
        return view('/productos', compact('product'));
    }
    //Fin de codigo para productos

    //codigo para cursos
    public function mostrarCursos() //Funcion para mostrar los cursos
    {
        $cursos = cursosModel::paginate(6);
        return view('/capacitate', compact('cursos'));
    }
    //Fin de codigo para cursos

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
        return view('/Conocenos');
    }


    public function carritoUser()
    {
        return view('/carrito_usuario');
    }

    public function formularioDireccion(){
        return view('/formulario_direccion');
    }

    public function datosBancarios(){
        return view('/datos_bancarios');
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
}
