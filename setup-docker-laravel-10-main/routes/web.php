<?php

use App\Http\Controllers\productsController;
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
    Route::get('/editarProduto', [productsController::class, 'editProduto'])->name('editarProduto');
    Route::post('/editarProduto', [productsController::class, 'editProduto'])->name('editarProduto');
});
