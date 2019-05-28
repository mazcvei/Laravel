<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdultController extends Controller
{
    public function index(Request $request,$age="No definida"){
        $age=$request->age;
        return view('adults')->with(['title'=>"Contenido para adultos",'age'=>$age]);
    }
   public function check(){
       return view('checkage');
   }

   /* public function check(Request $request){
        $age=$request->age;
        redirect('/adults',$age);

    }*/
}
