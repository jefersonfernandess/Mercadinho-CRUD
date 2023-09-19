<?php

namespace App\Http\Controllers;

use App\Models\Produtos;
use Illuminate\Http\Request;

class ProdutosController extends Controller
{
    public function index() {

        $produtos = Produtos::get();
        return view('site.home', compact('produtos'));
    }
    
    public function create() {
        return view('site.create');
    }

    public function store(Request $request) {
        Produtos::create($request->all());
        
        return redirect()->route('site.index');
    }
}
