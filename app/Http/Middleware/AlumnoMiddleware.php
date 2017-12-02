<?php

namespace App\Http\Middleware;

use Closure;

class AlumnoMiddleware
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
        if(auth()->user()->tipoid !=2)
            if(auth()->user()->tipoid ==1)
            return redirect('crearProyecto');

            if(auth()->user()->tipoid ==3)
                return redirect('calificar');

            if(auth()->user()->tipoid ==4)
                return redirect('comprobante'); 

            if(auth()->user()->tipoid ==5)
                return redirect('solicitudes'); 
            if(auth()->user()->tipoid ==6)
                return redirect('solicitudes2'); 
        return $next($request);
    }
}
