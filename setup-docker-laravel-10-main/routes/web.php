<?php

use App\Http\Controllers\productsController;
use App\Http\Controllers\clientController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::prefix('produtos')->group(function() {
    //all products
    Route::get('/', [productsController::class, 'index'])->name('home');
    Route::delete('/delete', [productsController::class, 'delete'])->name('deleteProduto');
    //new product
    Route::get('/incluirProduto', [productsController::class, 'addProduto'])->name('incluirProduto');
    Route::post('/incluirProduto', [productsController::class, 'addProduto'])->name('incluirProduto');
    //att product
    Route::get('/editarProduto/{id}', [productsController::class, 'editProduto'])->name('editarProduto');
    Route::put('/editarProduto/{id}', [productsController::class, 'editProduto'])->name('editarProduto');
});

Route::prefix('clientes')->group(function() {
    //all products
    Route::get('/', [clientController::class, 'index'])->name('homeClientes');
    Route::delete('/delete', [clientController::class, 'delete'])->name('deleteCliente');
    //new product
    Route::get('/incluirCliente', [clientController::class, 'addCliente'])->name('incluirCliente');
    Route::post('/incluirCliente', [clientController::class, 'addCliente'])->name('incluirCliente');
    //att product
    Route::get('/editarCliente/{id}', [clientController::class, 'editCliente'])->name('editarCliente');
    Route::put('/editarCliente/{id}', [clientController::class, 'editCliente'])->name('editarCliente');
});