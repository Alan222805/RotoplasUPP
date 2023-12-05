<?php

namespace App\Http\Controllers;

use App\Models\productosModel;
use App\Models\productosNuevosModel;
use App\Models\cursosModel;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function __construct()
    {
        $this->middleware('admin');
    }

    public function __invoke()
    {
        return view('welcome');
    }
    public function index()
    {
        $product = productosNuevosModel::all();
        return view('administrador/Principal_admin', compact('product'));
    }

    public function conocenosAdmin(){
        return view('/administrador/Conocenos_admin');
    }

    //productos para la pagina inicio
    public function formularioAgregarPrincipal()
    {
        return view('administrador/agregar_producto_principal');
    }

    public function inventario(){
        $obj = productosModel::Paginate(5);
        return view('administrador/inventario', compact('obj'));
    }

//----------------------------------------------------------------------------------------------------------------------------------------------------

    //Codigo para la pagina principal

    public function agregarProductoPrincipal(Request $request) //Funcion para agregar productos a la pagina principal
    {
        //agregar productos a la pagina principal
        $producto = new productosNuevosModel();
        $producto->nombre = $request->nom;
        $producto->precio = $request->precio;
        $producto->descripcion = $request->desc;
        $producto->stock = $request->stock;
        $producto->urlImagen = $request->url;
        $producto->id_categoria = $request->idCat;
        $producto->save();

        //agregar productos a la tabla productos
        $product = new productosModel();
        $product->nombre = $request->nom;
        $product->precio = $request->precio;
        $product->descripcion = $request->desc;
        $product->stock = $request->stock;
        $product->urlImagen = $request->url;
        $product->id_categoria = $request->idCat;
        $product->save();

        return redirect()->route('admin.index', compact('producto'));
    }

    public function formularioModificarPrincipal(productosNuevosModel $producto){ //Funcion para ir a formulario de modificar productos de la pagina principal

        return view('administrador/modificar_producto_principal', compact('producto'));
    }

    public function modificarProductoPrincipal(Request $request, productosNuevosModel $producto){ //Funcion para modificar productos de la pagina principal
        $producto->nombre = $request->nom;
        $producto->precio = $request->precio;
        $producto->descripcion = $request->desc;
        $producto->stock = $request->stock;
        $producto->urlImagen = $request->url;
        $producto->id_categoria = $request->idCat;
        $producto->update();

        return redirect()->route('admin.index', compact('producto'));
    }

    public function eliminarProductoPrincipal(productosNuevosModel $producto){
        $producto->delete();
        return redirect()->route('admin.index', compact('producto'));
    }

    public function carritoAdmin()
    {
        return view('/administrador/carrito_admin');
    }

//----------------------------------------------------------------------------------------------------------------------------------------------------

    //codigo para cursos
    public function mostrarCursosAdmin() //Funcion para mostrar los cursos
    {
        $cursos = cursosModel::paginate(6);
        return view('/administrador/capacitate_admin', compact('cursos'));
    }

    public function formularioAgregarCursos() //Funcion para ir a formulario de agregar cursos
    {
        return view('/administrador/agregar_cursos');
    }

    public function agregarCursos(Request $request) //Funcion para agregar cursos
    {
        $curso = new cursosModel();
        $curso->nombre_curso = $request->nom;
        $curso->precio = $request->precio;
        $curso->duracion_horas = $request->durHor;
        $curso->descripcion = $request->desc;
        $curso->urlImagen = $request->url;
        $curso->id_categoria = $request->idCat;
        $curso->save();

        return redirect()->route('admin.mostrarCursosAdmin', compact('curso'));
    }

    public function formularioModificarCursos(cursosModel $curso) //Funcion para ir a formulario de modificar cursos
    {
        return view('/administrador/modificar_cursos', compact('curso'));
    }

    public function modificarCursos(Request $request, cursosModel $curso) //Funcion para modificar cursos
    {
        $curso->nombre_curso = $request->nom;
        $curso->precio = $request->precio;
        $curso->duracion_horas = $request->durHor;
        $curso->descripcion = $request->desc;
        $curso->urlImagen = $request->url;
        $curso->id_categoria = $request->idCat;
        $curso->update();

        return redirect()->route('admin.mostrarCursosAdmin', compact('curso'));
    }


    public function eliminarCursos(cursosModel $curso) //Funcion para eliminar cursos
    {
        $curso->delete();
        return redirect()->route('admin.mostrarCursosAdmin', compact('curso'));
    }


//----------------------------------------------------------------------------------------------------------------------------------------------------

    //codigo para productos de la pagina de productos
    public function mostrarProductosAdmin() //Funcion para mostrar los productos de la pagina de productos
    {
        $product = productosModel::paginate(6);
        return view('/administrador/productos_admin', compact('product'));
    }

    public function formularioModificarProductos(productosModel $producto) //Funcion para ir a formulario de modificar productos de la pagina de productos
    {
        return view('/administrador/modificar_productos', compact('producto'));
    }

    public function modificarProductos(Request $request, productosModel $producto) //Funcion para modificar productos de la pagina de productos
    {
        $producto->nombre = $request->nom;
        $producto->precio = $request->precio;
        $producto->descripcion = $request->desc;
        $producto->stock = $request->stock;
        $producto->urlImagen = $request->url;
        $producto->id_categoria = $request->idCat;
        $producto->update();

        return redirect()->route('admin.mostrarProductosAdmin', compact('producto'));
    }

    public function eliminarProductos(productosModel $producto) //Funcion para eliminar productos de la pagina de productos
    {
        $producto->delete();
        return redirect()->route('admin.mostrarProductosAdmin', compact('producto'));
    }
}
