<?php

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;

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

    public function capacitate(){
        return view('capacitate');
    }
    public function productos(){
        return view('productos');
    }
    public function carrito(){
        return view('carrito');
    }
    public function login(){
        return view('Log_in');
    }
    public function signin(){
        return view('Sign_in');
    }
    public function conocenos(){
        return view('Conocenos');
    }

}
