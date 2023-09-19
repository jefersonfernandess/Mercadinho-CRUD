@extends('site.layout')

@section('title', 'Mercado - Adicionar produto')

@section('create-form')
    
    <div class="container">
        <h1 class="">Cadastrar novo produto</h1>

        <form action="{{ route('site.store') }}" method="post">

            @csrf
            <div class="row">
                <div class="col">
                  <input type="text" class="form-control" placeholder="Nome" aria-label="Nome" name="nome">
                </div>

                <div class="col">
                  <input type="text" class="form-control" placeholder="Preço" aria-label="Preço" name="preco">
                </div>
                
                <div class="col">
                    <input type="text" class="form-control" placeholder="Quantidade" aria-label="Quantidade" name="quantidade">
                  </div>
                <div class="col">
                    <input type="text" class="form-control" placeholder="Código" aria-label="Código" name="codigo">
                </div>
            
                <div class="col">
                    <button type="submit" class="btn btn-success">Cadastrar</button>
                </div>
            </div>

        </form> 
    </div>    

    

@endsection