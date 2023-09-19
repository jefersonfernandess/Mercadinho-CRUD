@extends('site.layout')

@section('title', 'Mercado - Página inicial')

@section('tabela-main')
    <table class="table table-striped mt-5">
        <thead>
            <tr>
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
                    <td>{{ $produto->nome }}</td>
                    <td>R$ {{ $produto->preco }}</td>
                    <td>{{ $produto->quantidade }} unidade(s)</td>
                    <td>{{ $produto->codigo }}</td>
                    <td><a class="btn btn-warning" href ="{{ route('site.edit', $produto->id)}}">Editar</a></td>
                    
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
