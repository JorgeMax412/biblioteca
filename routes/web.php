<?php

use App\Http\Controllers\CategoriasController;
use App\Http\Controllers\ClientesController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

//PANTALLA PRINCIPAL

Route::get('/inicio/{nombre}/{apellido}', function ($nombre, $apellido) {
    return view('index', ['nombre' => $nombre, 'apellido' => $apellido]);
});

//CLIENTES
Route::get('/cliente/lista', [ClientesController::class, 'index']);

Route::get('/cliente/nuevo', [ClientesController::class, 'create']);
Route::post('/cliente/nuevo', [ClientesController::class, 'store']);

Route::delete('/cliente/delete{codigo}', [ClientesController::class, 'destroy'])->name('cliente.destroy');

Route::get('/cliente/editar/{codigo}', [ClientesController::class, 'edit'])->name('cliente.edit');
Route::put('/cliente/editar/{codigo}', [ClientesController::class, 'update'])->name('cliente.update');

//CATEGORIAS

Route::get('/categoria/lista', [CategoriasController::class, 'index']);

Route::get('/categoria/nuevo', [CategoriasController::class, 'create']);
Route::post('/categoria/nuevo', [CategoriasController::class, 'store']);

Route::delete('/categoria/delete{codigo}', [CategoriasController::class, 'destroy'])->name('categoria.destroy');

Route::get('/categoria/editar/{codigo}', [CategoriasController::class, 'edit'])->name('categoria.edit');
Route::put('/categoria/editar/{codigo}', [CategoriasController::class, 'update'])->name('categoria.update');