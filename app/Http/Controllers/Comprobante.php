<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Comprobante extends Controller
{
        public function index()
    {
    	return view('comprobante');
    }
}
