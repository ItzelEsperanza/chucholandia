<?php

use Illuminate\Support\Facades\Route;

//Controladores namespces
use App\Http\Controllers\ProductoController; // Siempre agrega el nombre del controllador!!!
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\MascotaController;
use App\Http\Controllers\CitaController;
use App\Http\Controllers\ClienteMascotaServicioController;
use App\Http\Controllers\ServicioController;
use App\Http\Controllers\FileController;
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

/*Route::get('/', function () {
    return view('welcome');
});*/


/*
Route::get('inicio', function () {
    return view('inicio');
});
*/

//Productos
Route::get('productos',[ProductoController::class,'index'])->name('productos.index'); //indexProductos.blade.php
Route::get('productos/create',[ProductoController::class,'create'])->name('productos.create'); //creteProductos.blade.php
Route::get('productos/{id}',[ProductoController::class,'show'])->name('productos.show'); //showProductos.blade.php
Route::get('productos/{id}/edit',[ProductoController::class,'edit'])->name('productos.edit'); //editProductos.blade.php
Route::post('productos',[ProductoController::class,'store'])->name('productos.store'); // No tiene view
Route::put('productos/{id}',[ProductoController::class,'update'])->name('productos.update'); // No tiene view
Route::delete('productos/{id}',[ProductoController::class,'destroy'])->name('productos.destroy'); // Se incluye en showProductos.blade.php

//Clientes
Route::get('clientes/create',[ClienteController::class,'create'])->name('clientes.create'); //creteClientes.blade.php
Route::get('clientes/{id}',[ClienteController::class,'show'])->name('clientes.show'); //showClientes.blade.php
Route::post('clientes',[ClienteController::class,'store'])->name('clientes.store'); // No tiene view

//Contacto
Route::get('contacto',[ClienteController::class,'contacto'])->name('clientes.contacto'); //contacto.blade.php
Route::get('/',[ClienteController::class,'welcome'])->name('clientes.welcome'); //contacto.blade.php

//Mascotas
Route::get('mascotas/create',[MascotaController::class,'create'])->name('mascotas.create'); //creteMascotas.blade.php
Route::get('mascotas/{id}',[MascotaController::class,'show'])->name('mascotas.show'); //showMascotas.blade.php
Route::post('mascotas',[MascotaController::class,'store'])->name('mascotas.store'); // No tiene view

//Citas
Route::get('citas/create',[CitaController::class,'create'])->name('citas.create'); //creteClientes.blade.php
Route::get('citas/check',[CitaController::class,'check'])->name('citas.check'); //creteClientes.blade.php
Route::post('citas',[CitaController::class,'store'])->name('citas.store'); // No tiene view

//Servicios
Route::get('servicios',[ServicioController::class,'index'])->name('servicios.index'); //indexServicios.blade.php

//Files
Route::get('files',[FileController::class,'index'])->name('files.index'); //indexServicios.blade.php
Route::get('files/create',[FileController::class,'create'])->name('files.create'); //indexServicios.blade.php
Route::get('files/show',[FileController::class,'show'])->name('files.show'); //showServicios.blade.php
Route::post('files',[FileController::class,'store'])->name('files.store'); // No tiene view


Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');


