@extends('layout.app')
@section('title', 'Editar produto - '.$produto->titulo)
@section('content')
    {{--    <h1 class="mb-3">Atualizar Produto - {{ $produto->titulo }}</h1>--}}

    {{--    @include('layout.message-success-error')--}}

    <form method="POST" action="{{ route('produtos.update', $produto->id) }}" enctype="multipart/form-data">
        <input type="hidden" name="_method" value="PUT">
        {{ csrf_field() }}

        @include('produtos._form')

        <div class="input-group mb-3">
            <label for="imgproduto">Imagem</label>
            <input class="form-control-file" type="file" id="imgproduto" name="imgproduto">
        </div>

        <button type="submit" class="btn btn-primary">Atualizar Produto</button>
    </form>
    <br/>
    <a href="javascript:history.go(-1)">Voltar</a>

@endsection
