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
        $produto = Produtos::find($id);
        if ($produto) {
            return view('site.edit', compact('produto'));
        }
        else {

        return view('site.index')
            ->with('msg', 'Produto não encontrado!');
        }
    }

    public function update(Request $request, $id) {
        $produto = Produtos::find($id);

        $produto->update($request->all());

        return redirect()->route('site.index');
    }

    public function destroy($id) {
        $produto = Produtos::find($id);
    
        $produto->delete();
        $produto = Produtos::all();
        return redirect()->route('site.index')
            ->with('msg', "Produto excluído com sucesso!");
    }
}