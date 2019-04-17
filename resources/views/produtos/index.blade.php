@extends('layout.app')
@section('title', 'Lista de Produtos')
@section('content')
    <h1>Produtos</h1>

    <div class="row">
        @foreach($produtos as $produto)
            <div class="col-md-3">
                @if(file_exists("./img/produtos/".md5($produto->id).".jpg"))
                    <img src="{{ url('img/produtos/'.md5($produto->id).".jpg") }}" alt="Imagem Produto" class="img-fluid img-thumbnail">
                @endif

                <h4 class="text-center"><a href="#">{{ $produto->titulo }}</a></h4>
                    <a class="btn btn-primary" href="{{ route('produtos.show', $produto->id) }}">Editar</a>
                    <a class="btn btn-danger" href="">Excluir</a>
            </div>
        @endforeach
    </div>
@endsection
