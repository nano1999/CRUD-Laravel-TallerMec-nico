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

//clientes


Route::get('/nuevoC', function () {
    return view('clientes.nuevo');
});

Route::resource('clientes', 'ClientesController');

Route::get('/listar', 'ClientesController@listar')->name('clientes.listar');



//vehiuclos

Route::resource('vehiculos', 'VehiculosController');

Route::get('/nuevoV', 'VehiculosController@nuevo');


//Reparaciones

Route::get('/nuevaR', function () {
    return view('reparaciones.index');
});

Route::resource('reparaciones', 'ReparacionesController');




//pruebas

Route::resource('repair', 'repairsController');



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');



