<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }

    public function redirect()
    {
            if(auth()->user()->tipoid ==1)
                return redirect('crearProyecto');

            if(auth()->user()->tipoid ==2)
                return redirect('panel');

            if(auth()->user()->tipoid ==3)
                return redirect('solicitudes');

            if(auth()->user()->tipoid ==4)
                return redirect('calificar'); 

            if(auth()->user()->tipoid ==5)
                return redirect('comprobante'); 
    }

    public function panel()
    {
        return view('panel');
    }
}
