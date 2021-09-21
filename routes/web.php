<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProveedoresController;
use App\Http\Controllers\CatalogoCuentaController;
use App\Http\Controllers\AsientoController;
use App\Http\Controllers\InventarioController;
use App\Http\Controllers\BalanceFinancieroController;
use App\Http\Controllers\RecesionController;

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
Route::get('/admin', AdminController::class)->name('dashboard');
//llamdando controlador para proveedores
Route::get('/proveedores',[ProveedoresController::class,'index'])->name('proveedores.index');
//llamando controlador para crear proveedor
Route::get('/proveedores/create', [ProveedoresController::class,'create'])->name('proveedores.create');

//llamando controlador para proveedor especifico
Route::get('/proveedores/{proveedor}',[ProveedoresController::class,'show']);

//llamando controlador para catalogo - creando rutas
Route::get('/catalogo',[CatalogoCuentaController::class,'index'])->name('catalogo.index');
//catalogo - activos
Route::get('/catalogo/activos',[CatalogoCuentaController::class,'activos'])->name('catalogo.activos');;
Route::get('/catalogo/ac',[CatalogoCuentaController::class,'ac']);
Route::get('/catalogo/aceb',[CatalogoCuentaController::class,'aceb']);
Route::get('/catalogo/accg',[CatalogoCuentaController::class,'accg']);
Route::get('/catalogo/acb',[CatalogoCuentaController::class,'acb']);
Route::get('/catalogo/accc',[CatalogoCuentaController::class,'accc']);
Route::get('/catalogo/aci',[CatalogoCuentaController::class,'aci']);

Route::get('/catalogo/adg',[CatalogoCuentaController::class,'adg']);
Route::get('/catalogo/adgs',[CatalogoCuentaController::class,'adgs']);
Route::get('/catalogo/adgc',[CatalogoCuentaController::class,'adgc']);
Route::get('/catalogo/adgd',[CatalogoCuentaController::class,'adgd']);


Route::get('/catalogo/af',[CatalogoCuentaController::class,'af']);
Route::get('/catalogo/ad',[CatalogoCuentaController::class,'ad']);

//catalogo - pasivos
Route::get('/catalogo/pasivos',[CatalogoCuentaController::class,'pasivos']);
Route::get('/catalogo/pc',[CatalogoCuentaController::class,'pc']);
Route::get('/catalogo/pcpc',[CatalogoCuentaController::class,'pcpc']);
Route::get('/catalogo/pcpcd',[CatalogoCuentaController::class,'pcpcd']);
Route::get('/catalogo/pcpcdd',[CatalogoCuentaController::class,'pcpcdd']);
Route::get('/catalogo/pcpcdr',[CatalogoCuentaController::class,'pcpcdr']);

//catalogo - catipal
Route::get('/catalogo/capital',[CatalogoCuentaController::class,'capital']);
Route::get('/catalogo/cc',[CatalogoCuentaController::class,'cc']);
Route::get('/catalogo/ce',[CatalogoCuentaController::class,'ce']);

//asiento -
Route::get('/asientos/formulario',[AsientoController::class,'formulario']);
Route::get('/asientos/lista',[AsientoController::class,'lista']);
Route::post('/asientos/crear',[AsientoController::class,'crear']);

//Inventario -
Route::get('/inventario/lista',[InventarioController::class,'index'])->name('inventario.list');;
Route::get('/inventario/listaregistro',[InventarioController::class,'listaregistro'])->name('inventario.listaregistro');
Route::get('/inventario/agregar',[InventarioController::class,'agregar'])->name('inventario.agregar');;
Route::post('inventario/guardar',[InventarioController::class,'guardarRegistro'])->name('inventario.guardar');

// Balance financiero
Route::get('/balancefinanciero/bcomprobacion',[BalanceFinancieroController::class,'balanceComprobacion']);

//Recepcion
Route::get('/recision/crear',[RecesionController::class,'create'])->name('recepcion.crear');
Route::get('/recision/lista',[RecesionController::class, 'lista'])->name('recepcion.lista');
Route::get('/recision/listaopcion',[RecesionController::class,'listaopcion'])->recepcion('recepcion.listaopciones');
Route::get('/recision/bio',[RecesionController::class,'crearbio'])->name('recepcion.bio');
Route::post('/recision/guardar',[RecesionController::class,'guardarBio'])->name('recepcion.guardar');;
Route::get('/recision/{detallesbio}',[RecesionController::class,'detallesbio'])->name('recepcion.verdetalles');



Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
