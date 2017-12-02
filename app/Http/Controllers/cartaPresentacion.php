<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\alumnos;
use App\proyectos;
use App\asesores;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Redirect;
class cartaPresentacion extends Controller
{

    public function index($id)
    {

        $alumnos= DB::table('alumnos')->select('alumnos.NODECONTROL','alumnos.APELLIDOSALUMN','alumnos.NOMBREALUMN','alumnos.plan','alumnos.creditos','alumnos.CARRERANOMBRE','proyectos.PROYECTONOMBRE','proyectos.PROYECTODESCRIPCION','alumnos.servicioS','alumnos.actividadesC','alumnos.situacionE','alumnos.semestre','proyectos.PROYECTOLUGAR','alumnos.ESTADO','alumnos.ASESORID')->join('proyectos','alumnos.PROYECTOID', 'proyectos.PROYECTOID')->where('alumnos.NODECONTROL',$id)->first();
        $asesor= DB::table('asesores')->where('ASESORID',$alumnos->ASESORID)->first();
    if($alumnos->ESTADO==2)
    {
        return view('cartaPresentacion')->with('alumno',$alumnos)->with('asesores',$asesor);
    }
         else
        {
            return redirect('/solicitudes2');
        }

    }


    public function post(Request $request){
        
        $NODECONTROL=$request->input('NODECONTROL');
        $alumno= DB::table('alumnos')->where('NODECONTROL',$NODECONTROL)->first();
        $alumnos = alumnos::find($alumno->ALUMNID);
        $alumnos->archivo1=$request->file('archivo1')->store('public');;
        $alumnos->ESTADO=3;       
        $alumnos->save();
     return back();
   }

}
