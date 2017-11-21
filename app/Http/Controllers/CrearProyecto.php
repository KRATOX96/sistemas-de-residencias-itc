<?php 
 
namespace App\Http\Controllers; 
 
use Illuminate\Http\Request; 
 use App\carrera;
class CrearProyecto extends Controller 
{ 
    public function index() 
    { 
    	$carreras=carrera::all();
        return view('CrearProyecto')->with(compact('carreras')); 
    } 

    public function post(Request $request)
    {
    	return dd($request->all());
    }
} 