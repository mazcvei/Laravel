<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CheckAgeController extends Controller
{
    public function index(){
     return view('checkage');
    }
    public function saveSession(Request $request){
        $valorSesion=$request->age;
        session(['age' => $valorSesion]);
        session(['name' => $request->name]);

        $valor=session('age');
        echo "Valor sesion: ". $valor;
        return redirect()->route('adult');
    }
}
