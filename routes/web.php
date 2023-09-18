<?php

use App\Http\Controllers\ProdutosController;
use Illuminate\Support\Facades\Route;

Route::controller(ProdutosController::class)->group(function() {
    Route::get('/', 'index');
});

