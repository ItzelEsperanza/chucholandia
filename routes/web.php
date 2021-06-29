<?php

use Illuminate\Support\Facades\Route;

//Controladores namespces
use App\Http\Controllers\ProductoController; // Siempre agrega el nombre del controllador!!!

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

Route::get('productos',[ProductoController::class,'index']); //indexProductos.blade.php
Route::get('productos/create',[ProductoController::class,'create'])->name('productos.create'); //creteProductos.blade.php
Route::post('productos',[ProductoController::class,'store'])->name('productos.store'); // No tiene view

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');


