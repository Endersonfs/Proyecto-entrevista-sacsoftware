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

Route::get('/', function () {
    return view('welcome');
});

// mis vistas personales
// vista para el panel administrativo
Route::get('/admin', function(){
    return "Panel Administrativo";
});
//vista para clientes
Route::get('/clientes',function(){
    return "Clientes";
});