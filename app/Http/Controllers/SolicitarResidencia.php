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
    	$proyectos=proyectos::all()->where('semestre','<=', $alumnos->semestre)->where('CARRERAID',$NombreCarrera->CARRERAID)->where('NUMERO_ALUMNOS','>', 0);
        if($alumnos->ESTADO==0)
        {
         return view('SolicitarResidencia')->with(compact('alumnos','proyectos','validaciones'));
        }
        else
        {
            return view('avances')->with(compact('alumnos','proyectos','validaciones'));
        }
        
          
    }

    public function infoProyecto($id)
    {
       return proyectos::where('PROYECTOID',$id)->get();
        
    }

    public function infoAlumno($id)
    {
       return alumnos::where('idusuario',$id)->get();   
    }

    public function post(Request $request){
        $alumno = DB::table('alumnos')->where('idusuario', auth()->user()->id)->first(); 
        $nombreP=$request->input('NombreP');
        $proyecto=DB::table('proyectos')->where('PROYECTONOMBRE',$nombreP)->first();
        $proyectoId=$proyecto->PROYECTOID;
        $alumnos = alumnos::find($alumno->ALUMNID);
        $proyectos = proyectos::find($proyecto->PROYECTOID);
        $alumnos->PROYECTOID=$proyectoId;
        $alumnos->ESTADO=1;
        $proyectos->NUMERO_ALUMNOS=$proyectos->NUMERO_ALUMNOS-1;
        $alumnos->save();
        $proyectos->save();
   }

}
