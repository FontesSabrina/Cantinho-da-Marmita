<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\MarmitaController;
use App\Http\Controllers\PedidoController;

// Página Inicial
Route::get('/', function () {
    return view('home');
});

// Rotas de Clientes
Route::get('/clientes', [ClienteController::class, 'index'])->name('clientes.index');
Route::get('/clientes/novo', [ClienteController::class, 'create'])->name('clientes.create');
Route::post('/clientes', [ClienteController::class, 'store'])->name('clientes.store');
Route::delete('/clientes/{cliente}', [ClienteController::class, 'destroy'])->name('clientes.destroy');

// Rota para abrir o formulário de edição
Route::get('/clientes/{cliente}/editar', [ClienteController::class, 'edit'])->name('clientes.edit');

// Rota para salvar as alterações feitas na edição
Route::put('/clientes/{cliente}', [ClienteController::class, 'update'])->name('clientes.update');

// Rotas de Marmitas
Route::get('/marmitas', [MarmitaController::class, 'index'])->name('marmitas.index');

// Rotas de Pedidos
Route::get('/pedidos', [PedidoController::class, 'index'])->name('pedidos.index');

