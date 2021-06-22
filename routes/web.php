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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/graduados/index', 'Graduados\GraduadosController@index')->name('graduados.index');

Route::get('/graduados/importar', 'Graduados\GraduadosController@importar')->name('graduados.importar');

Route::post('/graduados/importar/store', 'Graduados\GraduadosController@importarStore')->name('graduados.importar.store');