<?php

namespace App\Http\Controllers;

use App\Models\Produtos;
use Illuminate\Http\Request;

class ProdutosController extends Controller
{
    public function index() {

        $produtos = Produtos::get();
        return view('index', compact('produtos'));
    } 
}