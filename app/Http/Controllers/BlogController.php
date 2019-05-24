<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
    {
        return view('entradas')->with(['titulo' => "Listado de entradas"]);

    }

    public function get(Request $request)
    {
        $datos = $request->only('name', 'surname', 'age','text');
        return view('datos', ['datos' => $datos]);
    }

    public function show()
    {

    }
}

