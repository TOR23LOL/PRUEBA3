<?php

use Illuminate\Support\Facades\Route;
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

/*Route::get('/', function () {
    return view('welcome');
});*/

Route::get('/cliente', [ClienteController::class, 'index']);
Route::post('/guardar-informacion', [ClienteController::class, 'guardar']);
Route::get('/informacion', [ClienteController::class, 'informacion']);
Route::get('/edit/{id}', [ClienteController::class, 'editar']);
Route::put('/actualizar-datos/{id}', [ClienteController::class, 'actualizar']);
Route::delete('/eliminar/{id}', [ClienteController::class, 'eliminar']);

//RUTAS ADMINISTRATIVAS
Route::get('/adminCompu', [ClienteController::class, 'adminCompu']);
Route::get('/adminInven', [ClienteController::class, 'adminInven']);
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/home2', [App\Http\Controllers\HomeController::class, 'home'])->name('home2');