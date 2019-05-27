<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
    {
        return view('posts')->with(['titulo' => "Listado de entradas"]);

    }

    public function get(Request $request)
    {

    }

    public function show()
    {

    }
}

