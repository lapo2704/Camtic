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
Route::resource('equipos','EquipoController');
Route::resource('jugadores','JugadoreController');
Route::resource('grupos','GrupoController');
Route::resource('sistemajuego','SistemaJuegoController');
Route::resource('posiciones','PosicionesController');
Route::resource('goleadores','GoleadoresController');
Route::resource('fechas','FechasController');
Route::resource('tarjetas','TarjetasController');

Route::get('/', function () {
    return view('welcome');
});