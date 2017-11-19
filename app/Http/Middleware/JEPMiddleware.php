<?php

namespace App\Http\Middleware;

use Closure;

class JEPMiddleware
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
        if(auth()->user()->tipoid !=1)
            if(auth()->user()->tipoid ==2)
            return redirect('panel');

            if(auth()->user()->tipoid ==3)
                return redirect('calificar');

            if(auth()->user()->tipoid ==4)
                return redirect('comprobante'); 

            if(auth()->user()->tipoid ==5)
                return redirect('solicitudes'); 
            
        return $next($request);
    }
}

