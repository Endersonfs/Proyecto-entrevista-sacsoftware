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
use App\Http\Controllers\ReporteController;

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
Route::get('/', AdminController::class)->name('dashboard')->middleware('auth');

// mis vistas personales
// vista llamando controlador para panel administrativo
Route::get('/admin', AdminController::class)->name('dashboard')->middleware('auth');
Route::get('/dashboard', AdminController::class)->name('dashboard')->middleware('auth');

//llamdando controlador para proveedores
Route::get('/proveedores',[ProveedoresController::class,'index'])->name('proveedores.index')->middleware('auth');
//llamando controlador para crear proveedor
Route::get('/proveedores/create', [ProveedoresController::class,'create'])->name('proveedores.create')->middleware('auth');

//llamando controlador para proveedor especifico
Route::get('/proveedores/{proveedor}',[ProveedoresController::class,'show'])->middleware('auth');

//llamando controlador para catalogo - creando rutas
Route::get('/catalogo',[CatalogoCuentaController::class,'index'])->name('catalogo.index')->middleware('auth');
//catalogo - activos
Route::get('/catalogo/activos',[CatalogoCuentaController::class,'activos'])->name('catalogo.activos')->middleware('auth');
Route::get('/catalogo/ac',[CatalogoCuentaController::class,'ac'])->middleware('auth');
Route::get('/catalogo/aceb',[CatalogoCuentaController::class,'aceb'])->middleware('auth');
Route::get('/catalogo/accg',[CatalogoCuentaController::class,'accg'])->middleware('auth');
Route::get('/catalogo/acb',[CatalogoCuentaController::class,'acb'])->middleware('auth');
Route::get('/catalogo/accc',[CatalogoCuentaController::class,'accc'])->middleware('auth');
Route::get('/catalogo/aci',[CatalogoCuentaController::class,'aci'])->middleware('auth');

Route::get('/catalogo/adg',[CatalogoCuentaController::class,'adg'])->middleware('auth');
Route::get('/catalogo/adgs',[CatalogoCuentaController::class,'adgs'])->middleware('auth');
Route::get('/catalogo/adgc',[CatalogoCuentaController::class,'adgc'])->middleware('auth');
Route::get('/catalogo/adgd',[CatalogoCuentaController::class,'adgd'])->middleware('auth');


Route::get('/catalogo/af',[CatalogoCuentaController::class,'af'])->middleware('auth');
Route::get('/catalogo/ad',[CatalogoCuentaController::class,'ad'])->middleware('auth');

//catalogo - pasivos
Route::get('/catalogo/pasivos',[CatalogoCuentaController::class,'pasivos'])->middleware('auth');
Route::get('/catalogo/pc',[CatalogoCuentaController::class,'pc'])->middleware('auth');
Route::get('/catalogo/pcpc',[CatalogoCuentaController::class,'pcpc'])->middleware('auth');
Route::get('/catalogo/pcpcd',[CatalogoCuentaController::class,'pcpcd'])->middleware('auth');
Route::get('/catalogo/pcpcdd',[CatalogoCuentaController::class,'pcpcdd'])->middleware('auth');
Route::get('/catalogo/pcpcdr',[CatalogoCuentaController::class,'pcpcdr'])->middleware('auth');

//catalogo - catipal
Route::get('/catalogo/capital',[CatalogoCuentaController::class,'capital'])->middleware('auth');
Route::get('/catalogo/cc',[CatalogoCuentaController::class,'cc'])->middleware('auth');
Route::get('/catalogo/ce',[CatalogoCuentaController::class,'ce'])->middleware('auth');

//asiento -
Route::get('/asientos',[AsientoController::class,'asientos.index'])->name('asientos.index')->middleware('auth');
Route::get('/asientos/formulario',[AsientoController::class,'formulario'])->name('asientos.formulario')->middleware('auth');
Route::get('/asientos/lista',[AsientoController::class,'lista'])->name('asientos.lista')->middleware('auth');
Route::post('/asientos/crear',[AsientoController::class,'crear'])->name('asientos.crear')->middleware('auth');

//Inventario -
Route::get('/inventario/lista',[InventarioController::class,'index'])->name('inventario.list')->middleware('auth');
Route::get('/inventario/listaregistro',[InventarioController::class,'listaregistro'])->name('inventario.listaregistro')->middleware('auth');
Route::get('/inventario/agregar',[InventarioController::class,'agregar'])->name('inventario.agregar')->middleware('auth');
Route::post('inventario/guardar',[InventarioController::class,'guardarRegistro'])->name('inventario.guardar')->middleware('auth');

// Balance financiero
Route::get('/balancefinanciero/bcomprobacion',[BalanceFinancieroController::class,'balanceComprobacion'])->middleware('auth');

//Recepcion
Route::get('/recepcion/crear',[RecesionController::class,'create'])->name('recepcion.crear')->middleware('auth');
///Route::get('/recepcion/crear',[RecesionController::class,'create'])->name('recepcion.crear');
Route::get('/recepcion/lista',[RecesionController::class, 'lista'])->name('recepcion.lista')->middleware('auth');
Route::get('/recepcion/listaopcion',[RecesionController::class,'listaopcion'])->name('recepcion.listaopciones')->middleware('auth');
Route::get('/recepcion/bio',[RecesionController::class,'crearbio'])->name('recepcion.bio')->middleware('auth');
Route::post('/recepcion/guardar',[RecesionController::class,'guardarBio'])->name('recepcion.guardar')->middleware('auth');
Route::get('/recepcion/{detallesbio}',[RecesionController::class,'detallesbio'])->name('recepcion.verdetalles')->middleware('auth');

// estados financieros -> realizar controlador
Route::get('/estadofinaciero/balancegeneral',[EstadoFinanciero::class,'balanceGeneral'])->name('estadofinanciero.balancegeneral')->middleware('auth');
//tareas -> realizar controlador
Route::get('/tareas',[Tareas::class,'lista'])->name('tareas.index');

// facturacion
Route::get('/facturar',[FacturarController::class,'index'])->name('facturar.index')->middleware('auth');
Route::get('/facturar/opciones',[FacturarController::class,'index'])->name('facturar.tipo')->middleware('auth');
Route::get('/facturar/privada',[FacturarController::class,'privado'])->name('facturar.privado')->middleware('auth');
Route::get('/facturar/asegurado',[FacturarController::class,'asegurado'])->name('facturar.asegurado')->middleware('auth');

// Reporte
Route::get('/reporte/pagosarsexcel',[ReporteController::class,'reportePagoARSExcel'])->name('reporte.pagosarsexcel')->middleware('auth');
Route::get('/reporte/pagosarsexcelform',[ReporteController::class,'reportePagoARSExcelForm'])->name('reporte.pagosarsexcel.form')->middleware('auth');
Route::post('/reporte/pagosimportexcelform',[ReporteController::class,'reportePagoARSExcelImport'])->name('reporte.pagosarsexcel.import')->middleware('auth');
Route::post('/reporte/reclamacionesEnviadas',[ReporteController::class,'reclamacionesEnviadasArsImport'])->name('reporte.reclamacionesEnviadas.import')->middleware('auth');
Route::get('/reporte/reclamacioneslista',[ReporteController::class,'reportePagoARSExcelLista'])->name('reporte.reclamacionesEnviadas.lista')->middleware('auth');
Route::post('/reporte/reclamacioneslistasearch',[ReporteController::class,'reportePagoARSExcelBuscarForm'])->name('reporte.reclamacionesEnviadas.buscador')->middleware('auth');
Route::get('/reporte/reclamacioneslistacleandata',[ReporteController::class,'reportePagoARSExcelLimpiardata'])->name('reporte.reclamacionesEnviadas.cleandata')->middleware('auth');
// Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
//     return view('/dashboard');
// })->name('dashboard');
