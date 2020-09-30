<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProveedoresController;

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
// vista llamando controlador para panel administrativo
Route::get('/admin', AdminController::class);
//llamdando controlador para proveedores
Route::get('/proveedores',[ProveedoresController::class,'index']);
//llamando controlador para crear proveedor
Route::get('/proveedores/create', [ProveedoresController::class,'create']);

//llamando controlador para proveedor especifico
Route::get('/proveedores/{proveedor}',[ProveedoresController::class,'show']);