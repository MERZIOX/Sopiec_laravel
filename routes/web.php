<?php

use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('welcome');
// }); 

// Se debe poner la ruta completa o no funcionará.
// Este controlador de tipo get es limitado
// Route::get('/','App\Http\Controllers\InicioController@index');

//Un controlador de tipo resource es más amplio, sirve para manejar los distintos metodos
Route::resource('/', 'App\Http\Controllers\InicioController');
