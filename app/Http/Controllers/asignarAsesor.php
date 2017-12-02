<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\alumnos;
use App\proyectos;
use App\asesores;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Redirect;
class asignarAsesor extends Controller
{

    public function index($id)
    {

        $alumnos= DB::table('alumnos')->select('alumnos.NODECONTROL','alumnos.APELLIDOSALUMN','alumnos.NOMBREALUMN','alumnos.plan','alumnos.creditos','alumnos.CARRERANOMBRE','proyectos.PROYECTONOMBRE','proyectos.PROYECTODESCRIPCION','alumnos.servicioS','alumnos.actividadesC','alumnos.situacionE','alumnos.semestre','proyectos.PROYECTOLUGAR','alumnos.ESTADO')->join('proyectos','alumnos.PROYECTOID', 'proyectos.PROYECTOID')->where('alumnos.NODECONTROL',$id)->first();
        $asesores= DB::table('asesores')->get();
    if($alumnos->ESTADO==1)
    {
        return view('asignarAsesor')->with('alumno',$alumnos)->with('asesores',$asesores);
    }
         else
        {
            return redirect('/solicitudes');
        }

    }


    public function post(Request $request){
        $NombreAsesor=$request->input('NombreAsesor');
        if($NombreAsesor!='null'){
        $NODECONTROL=$request->input('NODECONTROL');
        $asesor=DB::table('asesores')->where('ASESORNOMBRE',$NombreAsesor)->first();
        $alumno= DB::table('alumnos')->where('NODECONTROL',$NODECONTROL)->first();
        $ASESORID=$asesor->ASESORID;
        $alumnos = alumnos::find($alumno->ALUMNID);
        $alumnos->ASESORID=$ASESORID;
        $alumnos->ESTADO=2;       
        $alumnos->save();
        }
        return back();
   }

}
