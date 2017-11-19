<?php

namespace App\Http\Middleware;

use Closure;

class JSEMiddleware
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
        if(auth()->user()->tipoid !=4)
            if(auth()->user()->tipoid ==1)
            return redirect('crearProyecto');

            if(auth()->user()->tipoid ==2)
                return redirect('panel');

            if(auth()->user()->tipoid ==3)
                return redirect('calificar'); 

            if(auth()->user()->tipoid ==5)
                return redirect('solicitudes'); 
        return $next($request);
    }
}
