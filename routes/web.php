<?php

use App\Http\Controllers\ProdutosController;
use Illuminate\Support\Facades\Route;

Route::controller(ProdutosController::class)->group(function() {
    Route::get('/', 'index')->name('site.index');
    Route::get('/adicionar-novo-produto', 'create')->name('site.create');
    Route::post('/', 'store')->name('site.store');
    Route::get('/editar/{id}', 'edit')->name('site.edit');
    Route::put('/{id}/update', 'update')->name('site.update');
    //Route::delete('/{id}', 'destroy')->name('site.delete');
});

