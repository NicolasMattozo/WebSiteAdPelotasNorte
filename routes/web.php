<?php

use App\Http\Controllers\DepartamentosController;
use App\Http\Controllers\QuemSomosController;
use App\Http\Controllers\SetorController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OracaoController;

Route::get('/', function () {
    return view('index');
});

Route::get('/quem_somos', [QuemSomosController::class, 'quem_somos']);

Route::get('/setor1', [SetorController::class, 'setor1']);
Route::get('/setor2', [SetorController::class, 'setor2']);
Route::get('/setor3', [SetorController::class, 'setor3']);
Route::get('/setor4', [SetorController::class, 'setor4']);
Route::get('/setor5', [SetorController::class, 'setor5']);
Route::get('/setor6', [SetorController::class, 'setor6']);
Route::get('/setor7', [SetorController::class, 'setor7']);

Route::get('/umadpel', [DepartamentosController::class, 'umadpel']);
Route::get('/ufadpel', [DepartamentosController::class, 'ufadpel']);
Route::get('/ebenezer', [DepartamentosController::class, 'ebenezer']);
Route::get('/familia', [DepartamentosController::class, 'familia']);

Route::post('/pedido-oracao', [OracaoController::class, 'enviarPedido'])->name('pedido.oracao');


