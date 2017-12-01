<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\alumnos;
use App\proyectos;
use Illuminate\Support\Facades\DB;
class Solicitudes extends Controller
{
    public function index()
    {
    	return view('solicitudes');
    }

    public function listado1()
    {
    	if(auth()->user()->tipoid==5){
    		$alumnos= DB::table('alumnos')->select('alumnos.NODECONTROL','alumnos.APELLIDOSALUMN','alumnos.NOMBREALUMN','alumnos.CARRERANOMBRE','proyectos.PROYECTONOMBRE')->join('proyectos','alumnos.PROYECTOID', 'proyectos.PROYECTOID')->where('alumnos.ESTADO',1)->paginate(5);
    	return view('solicitudesAlumnos')->with('alumnos',$alumnos);
   		}
    }
        public function listado2()
    {
    	if(auth()->user()->tipoid==6){
    		$alumnos= DB::table('alumnos')->select('alumnos.NODECONTROL','alumnos.APELLIDOSALUMN','alumnos.NOMBREALUMN','alumnos.CARRERANOMBRE','proyectos.PROYECTONOMBRE')->join('proyectos','alumnos.PROYECTOID', 'proyectos.PROYECTOID')->where('alumnos.ESTADO',2)->paginate(5);
    	return view('solicitudesAlumnos')->with('alumnos',$alumnos);
   		}
    }
}
