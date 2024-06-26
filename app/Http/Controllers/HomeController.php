<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }

    public function venta()
    {
        return view('ventas\venta');
    }
    public function ppp()
    {
        return view('home');
    }

    public function usuarios()
    {
        return view('usuarios\usuarios');
    }
}
