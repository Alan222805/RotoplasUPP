<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function __invoke()
    {
        return view('welcome');
    }
    public function index()
    {
        return view('Principal');
    }
    public function carritoAdmin()
    {
        return view('carrito_admin');
    }
}
