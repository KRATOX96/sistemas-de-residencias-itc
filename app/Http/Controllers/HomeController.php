<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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
                   if(auth()->user()->tipoid ==6)
                return redirect('solicitudes2'); 
    }

    public function panel()
    {
        $alumnos = DB::table('alumnos')->where('idusuario', auth()->user()->id)->first(); 
            $NombreCarrera=$alumnos->CARRERAID;
            $NombreCarrera=DB::table('carreras')->where('CARRERAID',$NombreCarrera)->first(); 
         return view('panel')->with(compact('alumnos'))->with('NombreCarrera',$NombreCarrera->CARRERANOMBRE);
    }
}
