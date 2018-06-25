<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Punto;


class PuntoController extends Controller
{
    public function index()
    {        
        $puntos = Punto::get();
        return view('puntos.index')->with('puntos', $puntos);
    }
}