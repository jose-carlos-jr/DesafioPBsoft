<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\CadastrarController;
use App\Http\Controllers\ListarProdutosController;
 
Route::get('/', [HomeController::class, 'index']);
Route:: get('/cadastrar', [CadastrarController::class, 'insertform']); 
Route:: post('/create', [CadastrarController::class, 'insert']);
Route:: post('/create', [CadastrarController::class, 'insert']);
Route:: get('/listar', [ListarProdutosController::class, 'index']);
Route:: post('/listar', [ListarProdutosController::class, 'index']);

//Route:: delete('/delete', [ListarProdutosController::class, 'destroy']);