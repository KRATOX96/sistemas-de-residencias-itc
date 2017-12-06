<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\proyectos;
use App\alumnos;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Storage;
class Comprobante extends Controller
{
        public function index()
    {
    	         		$alumnos= DB::table('alumnos')->select('alumnos.NODECONTROL','alumnos.APELLIDOSALUMN','alumnos.NOMBREALUMN','carreras.CARRERANOMBRE','proyectos.PROYECTONOMBRE','proyectos.PROYECTODESCRIPCION','proyectos.PROYECTOLUGAR','alumnos.ESTADO')->join('proyectos','alumnos.PROYECTOID', 'proyectos.PROYECTOID')->join('carreras','carreras.CARRERAID','alumnos.CARRERAID')->where('alumnos.ESTADO',7)->paginate(5);
    	return view('comprobante')->with('alumnos',$alumnos);
    }
    public function elFin($id){
    	    	
    	 $alumnos= DB::table('alumnos')->select('alumnos.NODECONTROL','alumnos.APELLIDOSALUMN','alumnos.NOMBREALUMN','alumnos.plan','alumnos.creditos','carreras.CARRERANOMBRE','proyectos.PROYECTONOMBRE','proyectos.PROYECTODESCRIPCION','alumnos.servicioS','alumnos.actividadesC','alumnos.situacionE','alumnos.semestre','proyectos.PROYECTOLUGAR','alumnos.ESTADO','alumnos.archivo1','alumnos.archivo2','alumnos.archivo3','alumnos.archivo4')->join('proyectos','alumnos.PROYECTOID', 'proyectos.PROYECTOID')->join('carreras','carreras.CARRERAID','alumnos.CARRERAID')->where('alumnos.NODECONTROL',$id)->first();


    if(Input::get('terminar')) {

        $alumnos = alumnos::find($alumno->ALUMNID);
        $alumnos->ESTADO=7;
        $alumnos->save();
        return back();
      
      }
        else if(Input::get('descargar1')){
        return $this->forceDonwload1($alumnos);
      }
              else if(Input::get('descargar2')){
        return $this->forceDonwload2($alumnos);
      }
              else if(Input::get('descargar3')){
        return $this->forceDonwload3($alumnos);
      }
  }
  public function mostrarComprobante($id)
  {

  	    	 $alumnos= DB::table('alumnos')->select('alumnos.NODECONTROL','alumnos.APELLIDOSALUMN','alumnos.archivo2','alumnos.archivo3','alumnos.archivo4','alumnos.NOMBREALUMN','alumnos.plan','alumnos.creditos','carreras.CARRERANOMBRE','proyectos.PROYECTONOMBRE','proyectos.PROYECTODESCRIPCION','alumnos.servicioS','alumnos.actividadesC','alumnos.situacionE','alumnos.semestre','proyectos.PROYECTOLUGAR','alumnos.ESTADO')->join('proyectos','alumnos.PROYECTOID', 'proyectos.PROYECTOID')->join('carreras','carreras.CARRERAID','alumnos.CARRERAID')->where('alumnos.NODECONTROL',$id)->first();
 	    
    	 if($alumnos->ESTADO==7)
    {
        return view('comprobante2')->with('alumno',$alumnos);
    }
         else
        {
            return redirect('comprobante');
        }
  }

   public function forceDonwload1($alumno)
    {
        $pathToFile1 = storage_path("app/$alumno->archivo2");
        $name1 = 'Informe tecnico '.$alumno->NOMBREALUMN.' '.$alumno->APELLIDOSALUMN.'.pdf';
        $headers1 = ['Content-Type: application/pdf'];

        return response()->download($pathToFile1, $name1, $headers1);
    }

       public function forceDonwload2($alumno)
    {
        $pathToFile1 = storage_path("app/$alumno->archivo3");
        $name1 = 'Calificacion del asesor externo '.$alumno->NOMBREALUMN.' '.$alumno->APELLIDOSALUMN.'.pdf';
        $headers1 = ['Content-Type: application/pdf'];

        return response()->download($pathToFile1, $name1, $headers1);

    }

       public function forceDonwload3($alumno)
    {
        $pathToFile1 = storage_path("app/$alumno->archivo4");
        $name1 = 'Calificacion del asesor interno '.$alumno->NOMBREALUMN.' '.$alumno->APELLIDOSALUMN.'.pdf';
        $headers1 = ['Content-Type: application/pdf'];

        return response()->download($pathToFile1, $name1, $headers1);
    }

}
