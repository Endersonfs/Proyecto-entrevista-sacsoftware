<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProveedoresController;
use App\Http\Controllers\CatalogoCuentaController;
use App\Http\Controllers\AsientoController;
use App\Http\Controllers\InventarioController;
use App\Http\Controllers\BalanceFinancieroController;
use App\Http\Controllers\RecesionController;
use App\Http\Controllers\FacturarController;

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

// Route::middleware(['auth:sanctum', 'verified'])->get('/', function () {
//     return view('welcome');
// })->name('dashboard');
Route::middleware(['auth:sanctum', 'verified'])->get('/', AdminController::class)->name('dashboard');

// mis vistas personales
// vista llamando controlador para panel administrativo
Route::middleware(['auth:sanctum', 'verified'])->get('/admin', AdminController::class)->name('dashboard');
Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', AdminController::class)->name('dashboard');

//llamdando controlador para proveedores
Route::middleware(['auth:sanctum', 'verified'])->get('/proveedores',[ProveedoresController::class,'index'])->name('proveedores.index');
//llamando controlador para crear proveedor
Route::middleware(['auth:sanctum', 'verified'])->get('/proveedores/create', [ProveedoresController::class,'create'])->name('proveedores.create');

//llamando controlador para proveedor especifico
Route::middleware(['auth:sanctum', 'verified'])->get('/proveedores/{proveedor}',[ProveedoresController::class,'show']);

//llamando controlador para catalogo - creando rutas
Route::middleware(['auth:sanctum', 'verified'])->get('/catalogo',[CatalogoCuentaController::class,'index'])->name('catalogo.index');
//catalogo - activos
Route::middleware(['auth:sanctum', 'verified'])->get('/catalogo/activos',[CatalogoCuentaController::class,'activos'])->name('catalogo.activos');
Route::middleware(['auth:sanctum', 'verified'])->get('/catalogo/ac',[CatalogoCuentaController::class,'ac']);
Route::middleware(['auth:sanctum', 'verified'])->get('/catalogo/aceb',[CatalogoCuentaController::class,'aceb']);
Route::middleware(['auth:sanctum', 'verified'])->get('/catalogo/accg',[CatalogoCuentaController::class,'accg']);
Route::middleware(['auth:sanctum', 'verified'])->get('/catalogo/acb',[CatalogoCuentaController::class,'acb']);
Route::middleware(['auth:sanctum', 'verified'])->get('/catalogo/accc',[CatalogoCuentaController::class,'accc']);
Route::middleware(['auth:sanctum', 'verified'])->get('/catalogo/aci',[CatalogoCuentaController::class,'aci']);

Route::middleware(['auth:sanctum', 'verified'])->get('/catalogo/adg',[CatalogoCuentaController::class,'adg']);
Route::middleware(['auth:sanctum', 'verified'])->get('/catalogo/adgs',[CatalogoCuentaController::class,'adgs']);
Route::middleware(['auth:sanctum', 'verified'])->get('/catalogo/adgc',[CatalogoCuentaController::class,'adgc']);
Route::middleware(['auth:sanctum', 'verified'])->get('/catalogo/adgd',[CatalogoCuentaController::class,'adgd']);


Route::middleware(['auth:sanctum', 'verified'])->get('/catalogo/af',[CatalogoCuentaController::class,'af']);
Route::middleware(['auth:sanctum', 'verified'])->get('/catalogo/ad',[CatalogoCuentaController::class,'ad']);

//catalogo - pasivos
Route::middleware(['auth:sanctum', 'verified'])->get('/catalogo/pasivos',[CatalogoCuentaController::class,'pasivos']);
Route::middleware(['auth:sanctum', 'verified'])->get('/catalogo/pc',[CatalogoCuentaController::class,'pc']);
Route::middleware(['auth:sanctum', 'verified'])->get('/catalogo/pcpc',[CatalogoCuentaController::class,'pcpc']);
Route::middleware(['auth:sanctum', 'verified'])->get('/catalogo/pcpcd',[CatalogoCuentaController::class,'pcpcd']);
Route::middleware(['auth:sanctum', 'verified'])->get('/catalogo/pcpcdd',[CatalogoCuentaController::class,'pcpcdd']);
Route::middleware(['auth:sanctum', 'verified'])->get('/catalogo/pcpcdr',[CatalogoCuentaController::class,'pcpcdr']);

//catalogo - catipal
Route::middleware(['auth:sanctum', 'verified'])->get('/catalogo/capital',[CatalogoCuentaController::class,'capital']);
Route::middleware(['auth:sanctum', 'verified'])->get('/catalogo/cc',[CatalogoCuentaController::class,'cc']);
Route::middleware(['auth:sanctum', 'verified'])->get('/catalogo/ce',[CatalogoCuentaController::class,'ce']);

//asiento -
Route::middleware(['auth:sanctum', 'verified'])->get('/asientos',[AsientoController::class,'asientos.index'])->name('asientos.index');
Route::middleware(['auth:sanctum', 'verified'])->get('/asientos/formulario',[AsientoController::class,'formulario'])->name('asientos.formulario');
Route::middleware(['auth:sanctum', 'verified'])->get('/asientos/lista',[AsientoController::class,'lista'])->name('asientos.lista');
Route::middleware(['auth:sanctum', 'verified'])->post('/asientos/crear',[AsientoController::class,'crear'])->name('asientos.crear');

//Inventario -
Route::middleware(['auth:sanctum', 'verified'])->get('/inventario/lista',[InventarioController::class,'index'])->name('inventario.list');
Route::middleware(['auth:sanctum', 'verified'])->get('/inventario/listaregistro',[InventarioController::class,'listaregistro'])->name('inventario.listaregistro');
Route::middleware(['auth:sanctum', 'verified'])->get('/inventario/agregar',[InventarioController::class,'agregar'])->name('inventario.agregar');
Route::middleware(['auth:sanctum', 'verified'])->post('inventario/guardar',[InventarioController::class,'guardarRegistro'])->name('inventario.guardar');

// Balance financiero
Route::middleware(['auth:sanctum', 'verified'])->get('/balancefinanciero/bcomprobacion',[BalanceFinancieroController::class,'balanceComprobacion']);

//Recepcion
Route::middleware(['auth:sanctum', 'verified'])->get('/recision/crear',[RecesionController::class,'create'])->name('recepcion.crear');
Route::middleware(['auth:sanctum', 'verified'])->get('/recision/lista',[RecesionController::class, 'lista'])->name('recepcion.lista');
Route::middleware(['auth:sanctum', 'verified'])->get('/recision/listaopcion',[RecesionController::class,'listaopcion'])->name('recepcion.listaopciones');
Route::middleware(['auth:sanctum', 'verified'])->get('/recision/bio',[RecesionController::class,'crearbio'])->name('recepcion.bio');
Route::middleware(['auth:sanctum', 'verified'])->post('/recision/guardar',[RecesionController::class,'guardarBio'])->name('recepcion.guardar');
Route::middleware(['auth:sanctum', 'verified'])->get('/recision/{detallesbio}',[RecesionController::class,'detallesbio'])->name('recepcion.verdetalles');

// estados financieros -> realizar controlador
Route::middleware(['auth:sanctum', 'verified'])->get('/estadofinaciero/balancegeneral',[EstadoFinanciero::class,'balanceGeneral'])->name('estadofinanciero.balancegeneral');
//tareas -> realizar controlador
Route::middleware(['auth:sanctum', 'verified'])->get('/tareas',[Tareas::class,'lista'])->name('tareas.index');

// facturacion
Route::middleware(['auth:sanctum', 'verified'])->get('/facturar',[FacturarController::class,'index'])->name('facturar.index');
Route::middleware(['auth:sanctum', 'verified'])->get('/facturar/opciones',[FacturarController::class,'index'])->name('facturar.tipo');
Route::middleware(['auth:sanctum', 'verified'])->get('/facturar/privada',[FacturarController::class,'privado'])->name('facturar.privado');
Route::middleware(['auth:sanctum', 'verified'])->get('/facturar/asegurado',[FacturarController::class,'asegurado'])->name('facturar.asegurado');

// Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
//     return view('/dashboard');
// })->name('dashboard');
