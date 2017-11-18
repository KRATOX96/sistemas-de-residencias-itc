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
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/',function()
{
	return view('auth.login');
});
Route::get('/panel','PanelController@index');
Route::get('/cambioContraseña','CambioPasw@index');
Route::get('/solicitarResidencia','solicitarResidencia@index');
Route::get('/crearProyecto','CrearProyecto@index');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
