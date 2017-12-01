<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\alumnos;
use App\proyectos;
use App\asesores;
use Illuminate\Support\Facades\DB;
class asignarAsesor extends Controller
{

    public function index($id)
    {
        $alumnos= DB::table('alumnos')->select('alumnos.NODECONTROL','alumnos.APELLIDOSALUMN','alumnos.NOMBREALUMN','alumnos.plan','alumnos.creditos','alumnos.CARRERANOMBRE','proyectos.PROYECTONOMBRE','proyectos.PROYECTODESCRIPCION','alumnos.servicioS','alumnos.actividadesC','alumnos.situacionE','alumnos.semestre','proyectos.PROYECTOLUGAR')->join('proyectos','alumnos.PROYECTOID', 'proyectos.PROYECTOID')->where('alumnos.NODECONTROL',$id)->first();
        $asesores= DB::table('asesores')->get();
        return view('asignarAsesor')->with('alumno',$alumnos)->with('asesores',$asesores);

    }

}
