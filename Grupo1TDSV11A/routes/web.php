<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PedidoController;
use App\Http\Controllers\ClienteController;

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
//     return view('home');
// });

Route::get('/', [HomeController::class, 'index'])->middleware('auth');

/* Rutas para cliente */

Route::get('/clientes', [ClienteController::class, 'index'])->middleware('auth');
Route::get('/clientes/create', [ClienteController::class, 'create'])->middleware('auth');
Route::post('/clientes/store', [ClienteController::class, 'store'])->middleware('auth');
Route::get('/clientes/edit/{cliente}', [ClienteController::class, 'edit'])->middleware('auth');

Route::put('/clientes/update/{cliente}', [ClienteController::class, 'update'])->middleware('auth');

Route::delete('/clientes/destroy/{id}', [ClienteController::class, 'destroy'])->middleware('auth');

/* Rutas para pedido */

Route::get('/pedidos', [PedidoController::class, 'index'])->middleware('auth');

/* Rutas para reportes */

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
