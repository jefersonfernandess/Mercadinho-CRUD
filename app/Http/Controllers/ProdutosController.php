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

    public function edit($id) {
        $produtos = Produtos::find($id);
        if ($produtos) {
            return view('site.edit', compact('produtos'));
        }
        else {

        return view('site.index')->with('produtos', $produtos)
            ->with('msg', 'Produto não encontrado!');
        }
    }

    public function update(Request $request, $id) {
        $produto = Produtos::find($id);

        $produto->nome = $request->input('nome');
        $produto->preco = $request->input('preco');
        $produto->quantidade = $request->input('quantidade');
        $produto->codigo = $request->input('codigo');
        
        $produto->save();

        return view('site.home');
    }
}