@extends('site.layout')

@section('edit-form')

    <h1>Editar produto</h1>

    @if ($errors->any())
        <ul>
            @foreach ($errors->all() as $erro)
                <li>{{ $erro }}</li>
            @endforeach
        </ul>
    @endif

    <form action="{{ route('site.update', $produto->id) }}" method="post" class="row g-3">
        
        @csrf
        @method('put')
        <div class="col-auto">
          <label for="nome" class="visually-hidden">Nome</label>
          <input type="text"  class="form-control" name="nome" value="{{ $produto-> nome}}">
        </div>
        <div class="col-auto">
          <label for="preco" class="visually-hidden">Preço</label>
          <input type="text" class="form-control" name="preco" placeholder="Preço" value="{{ $produto-> preco}}">
        </div>
        <div class="col-auto">
            <label for="quantidade" class="visually-hidden">Preço</label>
            <input type="text" class="form-control" name="quantidade" placeholder="Quantidade" value="{{ $produto-> quantidade}}">
        </div>
        <div class="col-auto">
            <label for="codigo" class="visually-hidden">Preço</label>
            <input type="text" class="form-control" name="codigo" placeholder="Código" value="{{ $produto-> codigo}}">
        </div>

        <div class="col-auto">
            <button class="btn btn-secondary" type="submit">Atualizar</button>
        </div>
      </form> 

      <div class="col-auto">
        <form action="{{ route('site.destroy', $produto->id)}}" method="post">
            @csrf
            @method('DELETE')
            <button class="btn btn-danger" type="submit">Deletar</button>   
        </form>
    </div>
@endsection
