<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\proyectos;
use App\alumnos;
class SolicitarResidencia extends Controller
{
    public function index()
    {

    	$alumnos = DB::table('alumnos')->where('idusuario', auth()->user()->id)->first(); 
    	$validaciones=[
    		'creditos'=>$alumnos->creditos,
    		'ac'=>$alumnos->actividadesC,
    		'se'=>$alumnos->situacionE,
    		'ss'=>$alumnos->servicioS
    		];
    	$NombreCarrera=$alumnos->CARRERANOMBRE;
    	$NombreCarrera;
    	$NombreCarrera=DB::table('carreras')->where('CARRERANOMBRE',$NombreCarrera)->first();
    	$proyectos=proyectos::all()->where('semestre','<=', $alumnos->semestre)->where('CARRERAID',$NombreCarrera->CARRERAID);
  
         return view('SolicitarResidencia')->with(compact('alumnos','proyectos','validaciones'));
          
    }

    public function infoProyecto($id)
    {
       return proyectos::where('PROYECTOID',$id)->get();
        
    }

    public function infoAlumno($id)
    {
       return alumnos::where('idusuario',$id)->get();   
    }

}
