<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProdutosController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/produtos/novo', [ProdutosController::class, 'create']);
Route::post('/produtos/novo', [ProdutosController::class, 'store'])->name('registrar_produto');
Route::get('/produto/ver/{id}', [ProdutosController::class, 'show']);
Route::get('/produto/editar/{id}', [ProdutosController::class, 'edit']);
Route::post('/produto/editar/{id}', [ProdutosController::class, 'update'])->name('alterar_produto');
Route::get('/produto/excluir/{id}', [ProdutosController::class, 'delete']);
Route::post('/produto/excluir/{id}', 'ProdutosController@destroy')->name('excluir_produto');

