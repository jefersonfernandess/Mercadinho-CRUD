@extends('site.layout')

@section('edit-form')

    <h1>Editar livro</h1>

    @if ($errors->any())
        <ul>
            @foreach ($errors->all() as $erro)
                <li>{{ $erro }}</li>
            @endforeach
        </ul>
    @endif

    <form action="{{ route('site.update', $produtos->id) }}" method="post">

        @csrf
        @method('put')
        <input type="text" name="nome" placeholder="Nome" value="{{ $produtos->nome }}">
        <input type="text" name="preco" placeholder="Preço" value="{{ $produtos->preco }}">
        <input type="text" name="quantidade" placeholder="Quantidade" value="{{ $produtos->quantidade }}">
        <input type="text" name="codigo" placeholder="Código" value="{{ $produtos->codigo }}">
        <button type="submit">Atualizar</button>

    </form>
@endsection
