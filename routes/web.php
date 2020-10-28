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
    return view('filtro');
});

Route::get('/', [App\Http\Controllers\ClientesController::class, 'todo'])->name('filtro');

Route::get('/cliente', [App\Http\Controllers\ClientesController::class, 'index'])->name('cliente');
Route::post('/cliente/cadastrar', [App\Http\Controllers\ClientesController::class, 'create'])->name('cadastrarCliente');