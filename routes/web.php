<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Auth::routes();

Route::get('/registro',function()
{
	return view('auth/register');
});
Route::get('/','HomeController@redirect');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['middleware'=>'JEP'],function (){
Route::get('/crearProyecto','CrearProyecto@index');
Route::post('/crearProyecto','CrearProyecto@post');
});


Route::get('/instrucciones','instrucciones@index')->middleware('auth');;
Route::get('/notificaciones','notificaciones@index')->middleware('auth');;



Route::group(['middleware'=>'Alumno'],function (){
Route::get('/panel','HomeController@panel');
Route::get('/solicitarResidencia','solicitarResidencia@index');
Route::get('/avances','avances@index');
});

Route::group(['middleware'=>'Asesor'],function (){
Route::get('/calificar','Calificar@index');
});

Route::group(['middleware'=>'JDA'],function (){
Route::get('/solicitudes','Solicitudes@index');
});

Route::group(['middleware'=>'JSE'],function (){
Route::get('/comprobante','Comprobante@index');
});