@extends('layout.app')
@section('title', 'Lista de Produtos')
@section('content')
    <h1>Produtos</h1>
    <span><a style="float: right" href="{{ route('login.logout') }}">Sair</a></span><br/>

    @include('layout.campoDeBusca')

    <div class="row">
        @foreach($produtos as $produto)
            <div class="col-md-3">
                @if(file_exists("./img/produtos/".md5($produto->id).".jpg"))
                    <img src="{{ url('img/produtos/'.md5($produto->id).".jpg") }}" alt="Imagem Produto"
                         class="img-fluid img-thumbnail">
                @endif

                <h4 class="text-center"><a href="{{ route('produtos.show', $produto->id) }}">{{ $produto->titulo }}</a>
                </h4>
                <div class="mb-3">
                    <form method="POST" action="{{ route('produtos.destroy', $produto->id) }}">
                        <input type="hidden" name="_method" value="DELETE">
                        {{ csrf_field() }}

                        <a class="btn btn-primary" href="{{ route('produtos.edit', $produto->id) }}">Editar</a>
                        <button class="btn btn-danger">Excluir</button>

                    </form>

                </div>
            </div>
        @endforeach
    </div>

{{--    {{ $produtos->links() }}--}}
    {{ $produtos->appends($_GET)->links() }}
@endsection
