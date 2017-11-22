<?php 
 
namespace App\Http\Controllers; 
 
use Illuminate\Http\Request; 
 use App\carrera;
 use App\proyectos;

class CrearProyecto extends Controller 
{ 
    public function index() 
    { 
    	$carreras=carrera::all();
        return view('CrearProyecto')->with(compact('carreras')); 
    } 

    public function post(Request $request)
    {
    	$messages=[
    		'nAlumnos.required'=>'el campo numero de alumnos no puede estar vacio.',
    		'nAlumnos.numeric'=>'el campo numero de alumnos debe ser numerico.',
    		'NombreProyecto.required'=>'el campo nombre de proyecto no puede estar vacio.',
    		'NombreProyecto.unique'=>'ya existe un proyecto con el mismo nombre',
    		'Lugar.required'=>'el campo lugar no puede estar vacio.',
    		'textArea.required'=>'el campo descripcion no puede estar vacio.',
    		'semestres.required'=>'el campo semestres minimos no puede estar vacio.'
    	];
    	$this->validate($request,[
    		'nAlumnos'=>'required|numeric',
    		'NombreProyecto'=>'required|unique:proyectos,PROYECTONOMBRE',
    		'Lugar'=>'required',
    		'textArea'=>'required',
    		'semestres'=>'required'],$messages);

    	$proyectos=new proyectos();
    	$proyectos->NUMERO_ALUMNOS=$request->input('nAlumnos');
    	$proyectos->PROYECTONOMBRE=$request->input('NombreProyecto');
    	$proyectos->PROYECTOLUGAR=$request->input('Lugar');
    	$proyectos->PROYECTODESCRIPCION=$request->input('textArea');
    	$proyectos->CARRERAID=$request->input('carrera');
    	$proyectos->semestre=$request->input('semestres');
    	$proyectos->save();

    	return back()->with('mensaje', 'El proyecto se guardo satisfactoriamente');
    }
} 