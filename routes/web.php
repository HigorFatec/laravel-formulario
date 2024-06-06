<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProdutoController;
use App\Http\Controllers\SiteController;
use App\Http\Controllers\EmpresaController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\FornecedorFisicoController;
use App\Http\Controllers\SobreController;

Route::get('/', [HomeController::class, 'index'])->name('index');

Route::get('/fornecedor_juridico', [EmpresaController::class, 'create'])->name('empresa.create');
Route::get('/fornecedor_fisico', [FornecedorFisicoController::class, 'create'])->name('fisico.fornecedor_fisico');



Route::post('/empresa/store', [EmpresaController::class, 'store'])->name('empresa.store');
Route::post('/fornecedor_fisico/store', [FornecedorFisicoController::class, 'store'])->name('fornecedor_fisico.store');

Route::get('/empresa/success', function () {
    return view('empresa.success');
})->name('empresa.success');

Route::get('/fisico/success', function () {
    return view('fisico.success');
})->name('fisico.success');


Route::get('/sobre', [SobreController::class, 'index'])->name('site.sobre');