<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\clienteModel;
use App\Models\cursosModel;
use App\Models\productosModel;
use App\Models\productosNuevosModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;


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
    public function productos(Request $request) //Funcion para mostrar los productos
    {

        $query = productosModel::query(); // Inicializa la consulta Eloquent

        // Filtros
        /* if ($request->filled('category')) {
            $query->where('categoria', $request->input('category'));
        } */

        if ($request->filled('price_min')) {
            $query->where('precio', '>=', $request->input('price_min'));
        }

        if ($request->filled('price_max')) {
            $query->where('precio', '<=', $request->input('price_max'));
        }

        // Otros filtros aquí...

        $productos = $query->get(); // Ejecuta la consulta y obtén los resultados

        return view('/productos', ['productos' => $productos]);
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


    /* public function carritoUser()
    {
        return view('/carrito_usuario');
    } */

    public function formularioDireccion()
    {
        return view('/formulario_direccion');
    }

    public function datosBancarios()
    {
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


    //----------------------------------------------------------------------------------------------------------------------------------------------------

    //mostrar productos del carrito
    public function mostrarProductosCarrito()
    {

        $productos = DB::table('productos as prod')
            ->join('elementos_carrito as el', 'prod.id', '=', 'el.idProducto')
            ->join('carrito as car', 'el.idCarrito', '=', 'car.id')
            ->select('prod.nombre', 'prod.urlImagen', 'prod.precio', 'el.cantidadProducto', DB::raw('prod.precio * el.cantidadProducto as subtotal'))
            ->paginate(4);


        return view('/carrito_usuario', compact('productos'));
    }


//----------------------------------------------------------------------------------------------------------------------------------------------------

    //codigo para filtrar productos

}
