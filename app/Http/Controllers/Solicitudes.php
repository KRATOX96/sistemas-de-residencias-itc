<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Solicitudes extends Controller
{
    public function index()
    {
    	return view('solicitudes');
    }
}
