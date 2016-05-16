<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
Route::resource('equipos','EquiposController');
Route::resource('jugadores','JugadoresController');
Route::resource('grupos','GruposController');
Route::resource('sistemasjuegos','SistemasJuegosController');
Route::resource('posiciones','PosicionesController');
Route::resource('goleadores','GoleadoresController');
Route::resource('fechas','FechasController');
Route::resource('tarjetas','TarjetasController');
Route::resource('clasificados','ClasificadosController');


Route::get('/', function () {
    return view('welcome');
});