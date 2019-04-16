@extends('layout.app')
@section('title', 'Editar produto - '.$produto->titulo)
@section('content')
    <h1 class="mb-3">Atualizar Produto - {{ $produto->titulo }}</h1>

    @include('layout.message-success-error')

    <form method="POST" action="{{ route('produtos.update', $produto->id) }}">
        <input type="hidden" name="_method" value="PUT">
        {{ csrf_field() }}

        @include('produtos._form')

        <button type="submit" class="btn btn-primary">Atualizar Produto</button>
    </form>

@endsection
