<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\alumnos;
use App\proyectos;
use Illuminate\Support\Facades\DB;

class Calificar extends Controller
{
 public function index($id)
    {
    	$asesor = DB::table('asesores')->where('USUARIOID', auth()->user()->id)->first();
    	$alumnos= DB::table('alumnos')->select('alumnos.NODECONTROL','alumnos.APELLIDOSALUMN','alumnos.NOMBREALUMN','carreras.CARRERANOMBRE','proyectos.PROYECTONOMBRE','proyectos.PROYECTODESCRIPCION','proyectos.PROYECTOLUGAR','alumnos.ESTADO', 'asesores.ASESORID','alumnos.servicioS','alumnos.actividadesC','alumnos.situacionE','alumnos.semestre','proyectos.PROYECTOLUGAR','alumnos.ESTADO','alumnos.creditos','alumnos.plan')->join('proyectos','alumnos.PROYECTOID', 'proyectos.PROYECTOID')->join('asesores','alumnos.ASESORID', 'asesores.ASESORID')->join('carreras','carreras.CARRERAID','alumnos.CARRERAID')->where('alumnos.NODECONTROL',$id)->first();
        $asesor= DB::table('asesores')->where('ASESORID',$alumnos->ASESORID)->first();
    if($alumnos->ESTADO==6)
    {
        return view('calificar2')->with('alumno',$alumnos)->with('asesores',$asesor);
    }
         else
        {
            return redirect('/solicitudes');
        }
    }

    public function listado1()
    {
    		$asesor = DB::table('asesores')->where('USUARIOID', auth()->user()->id)->first();
    		$alumnos= DB::table('alumnos')->select('alumnos.NODECONTROL','alumnos.APELLIDOSALUMN','alumnos.NOMBREALUMN','carreras.CARRERANOMBRE','proyectos.PROYECTONOMBRE','proyectos.PROYECTODESCRIPCION','proyectos.PROYECTOLUGAR','alumnos.ESTADO', 'asesores.ASESORID')->join('proyectos','alumnos.PROYECTOID', 'proyectos.PROYECTOID')->join('asesores','alumnos.ASESORID', 'asesores.ASESORID')->join('carreras','carreras.CARRERAID','alumnos.CARRERAID')->where('asesores.ASESORID',$asesor->ASESORID)->where('alumnos.ESTADO',6)->paginate(5);
    	return view('calificar')->with('alumnos',$alumnos);
   		
    }
        public function post(Request $request){
     if($request->file('archivo4')==null)
            return back()->with('info','Debe seleccionar un archivo');

        $NODECONTROL=$request->input('NODECONTROL');
        $alumno= DB::table('alumnos')->where('NODECONTROL',$NODECONTROL)->first();
        $alumnos = alumnos::find($alumno->ALUMNID);
        $alumnos->archivo4=$request->file('archivo4')->store('public');;
        $alumnos->ESTADO=7;       
        $alumnos->save();
     return back();
        }
   }

