@extends('site.layout')

@section('title', 'Mercado - Página inicial')

@section('tabela-main')
    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nome</th>
                <th scope="col">Preço</th>
                <th scope="col">Quantidade</th>
                <th scope="col">Código</th>
                <th scope="col">Opções</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($produtos as $produto)
                <tr>
                    <td scope="row">{{ $produto->id }}</td>
                    <td>{{ $produto->nome }}</td>
                    <td>{{ $produto->preco }}</td>
                    <td>{{ $produto->quantidade }}</td>
                    <td>{{ $produto->codigo }}</td>
                    <td>
                        <a href class="btn btn-warning" ="{{ route('site.edit', $produto->id)}}">Editar</a>
                    </td>
                    
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
