<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Session;

class AdultController extends Controller
{
    public function index(Request $request,$age="No definida"){

        $age = session('age');
        $name = session('name');
        return view('adults')->with(['title'=>"Contenido para adultos",'age'=>$age,'name'=>$name]);
    }

   public function endSesion(Request $request){
       $request->session()->flush();

     return view('home');
   }

}
