<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index(){

    }

    public function show(){

        return view('formulario')->with(['datos'=>"Este es el titulo"]);
    }
}

