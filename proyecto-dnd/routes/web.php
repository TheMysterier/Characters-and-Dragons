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

Route::get('/', 'HomeController@getHome');

Route::group(['middleware' => 'auth'], function() {
    Route::get('partidas/', 'PartidaController@listarPartidas');
    Route::post('partida/create', 'PartidaController@save');
    Route::get('partida/delete/{id}', 'PartidaController@deletePartida');
    Route::get('personaje/create/{id}', 'PersonajeController@getCreate');
    Route::put('personaje/create/{id}/save', 'PersonajeController@save');
    Route::get('personaje/edit/{idPartida}/{idPersonaje}', 'PersonajeController@getEdit');
    Route::put('personaje/edit/{idPartida}/{idPersonaje}/{idRaza}/save', 'PersonajeController@postEdit');
    Route::get('personaje/delete/{id}', 'PersonajeController@deletePersonaje');
    Route::get('tablas', 'TablasController@getTablas');
    Route::get('dados', 'DadosController@getDados');
});

Auth::routes();

