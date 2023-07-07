<?php

use App\Http\Controllers\CrudController;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Route;

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

//Route::get('/crud','App\Http\Controllers\CrudController@index');
//Route::resource('/crud', 'App\Http\Controllers\CrudController');
Route::get('/api', function (){
    $response = Http::get('http://127.0.0.1:8000/api/crud');
    dd($response);
});

Route::get('/', [CrudController::class, 'index'])->name('listar_dados');
Route::get('/crud', [CrudController::class, 'index'])->name('listar_dados');

Route::get('/crud/adicionar', [CrudController::class, 'create'])->name('form_criar_dado');
Route::post('/crud/adicionar', [CrudController::class, 'store'])->name('salvar_dado');
Route::get('/crud/editar/{id}', [CrudController::class, 'edit'])->name('form_editar_dado');
Route::put('/crud/update/{id}', [CrudController::class, 'update'])->name('atualizar_dado');
Route::delete('/crud/remover/{id}', [CrudController::class, 'destroy'])->name('remover_dado');

# ROTA JAVASCRIPT
Route::post('/nome/{id}/editaNome', [CrudController::class, 'editaNome']);


