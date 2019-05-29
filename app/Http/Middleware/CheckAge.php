<?php

namespace App\Http\Middleware;

use Closure;

class CheckAge
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
       // dd("Valor sesion: ".$request->session()->get('age')." Valor request: ".$request->age);

        if($request->age==null && session('age')==null){
            // dd("Valor sesion: ".$request->session()->get('age')." Valor request: ".$request->age);

            return redirect()->route('check');

        }else{
           // dd("Valor sesion: ".$request->session()->get('age')." Valor request: ".$request->age);

            if(session('age')<18){
                return redirect('/');

            }

        }
        return $next($request);
    }
}
