<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\proyectos;
use App\alumnos;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Storage;
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

        if($alumnos->ESTADO==3)
        {
            return view('descargarCartaPresentacion')->with(compact('alumnos','proyectos','validaciones'));
        }

        if($alumnos->ESTADO==4)
        {
            return view('informeTecnico')->with(compact('alumnos','proyectos','validaciones'));
        }

        if($alumnos->ESTADO==5)
        {
             return view('calificacionExterno')->with(compact('alumnos','proyectos','validaciones'));
        }

        if($alumnos->ESTADO==8)
        {
             return view('fin')->with(compact('alumnos','proyectos','validaciones'));
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
        if($alumno->ESTADO==0){
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
        return back();
        }

        if($alumno->ESTADO==3){
        if(Input::get('terminar')) {

        $alumnos = alumnos::find($alumno->ALUMNID);
        $alumnos->ESTADO=4;
        $alumnos->save();
        return back();
      
      }
        else if(Input::get('descargar')){
        return $this->forceDonwload();
      }

   }

    if($alumno->ESTADO==4){
        if($request->file('archivo2')==null)
            return back()->with('info','Debe seleccionar un archivo');

        $NODECONTROL=$request->input('NODECONTROL');
        $alumno= DB::table('alumnos')->where('idusuario', auth()->user()->id)->first();
        $alumnos = alumnos::find($alumno->ALUMNID);
        $alumnos->archivo1=$request->file('archivo2')->store('public');;
        $alumnos->ESTADO=5;       
        $alumnos->save();
     return back();
    }

        if($alumno->ESTADO==5){
        if($request->file('archivo3')==null)
            return back()->with('info','Debe seleccionar un archivo');
        $NODECONTROL=$request->input('NODECONTROL');
        $alumno= DB::table('alumnos')->where('idusuario', auth()->user()->id)->first();
        $alumnos = alumnos::find($alumno->ALUMNID);
        $alumnos->archivo3=$request->file('archivo3')->store('public');;
        $alumnos->ESTADO=6;       
        $alumnos->save();
     return back();
    }
}

 public function forceDonwload()
    {
                $alumno = DB::table('alumnos')->where('idusuario', auth()->user()->id)->first(); 
        $pathToFile = storage_path("app/$alumno->archivo1");
        $name = $alumno->NOMBREALUMN.' '.$alumno->APELLIDOSALUMN.'.pdf';
        $headers = ['Content-Type: application/pdf'];

        return response()->download($pathToFile, $name, $headers);
    }




}
