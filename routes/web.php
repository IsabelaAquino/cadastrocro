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

Route::get('/', function () {
    return view('home');
});



Route::get('/series', 'SeriesController@index')->name('listar_series')->middleware('auth');
Route::get('/series/criar', 'SeriesController@create')->name('form_criar_serie')->middleware('auth');
Route::post('/series/criar', 'SeriesController@store')->middleware('auth');
Route::delete('/series/{id}', 'SeriesController@destroy')->middleware('auth');
Route::post('/series/{id}/editaNome', 'SeriesController@update')->middleware('auth');

Route::get('/series/{serieId}/temporadas', 'TemporadasController@index')->middleware('auth');
Route::get('/temporadas/{temporada}/episodios', 'EpisodiosController@index')->middleware('auth');
Route::post('/temporadas/{temporada}/episodios/assistir', 'EpisodiosController@assistir')->middleware('auth');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home')->middleware('auth');
Route::get('/perfil/usuario', 'EnderecosController@create')->name('form_perfil_usuario')->middleware('auth');
Route::post('/perfil/usuario', 'EnderecosController@update')->middleware('auth');
