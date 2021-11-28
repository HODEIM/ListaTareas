<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\tareaControlador;

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

Route::get('/',  [tareaControlador::class, 'index']);

Route::get('/vertareas',  [tareaControlador::class, 'ver']);

Route::get('/veranadir', [tareaControlador::class, 'veradd'] );

Route::post('/anadir', [tareaControlador::class, 'add'] );

Route::delete('/tarea/{id}', [tareaControlador::class, 'delete']);

Route::get('/vereliminar',  [tareaControlador::class, 'vereliminar']);

Route::delete('/eliminar/{id}', [tareaControlador::class, 'delete']);


