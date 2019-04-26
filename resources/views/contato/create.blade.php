@extends('layout.app')
@section('title', 'Formulário de Contato')
@section('content')
    {{--    <h1 class="mb-3">Adicionar um novo Produto</h1>--}}

    {{--    @include('layout.message-success-error')--}}

    <form method="POST" action="{{ route('contato.enviar') }}">
        {{ csrf_field() }}

        @include('produtos._form')

        <button type="submit" class="btn btn-primary">Cadastrar Produto</button>
    </form>
    <br/>
    <a href="javascript:history.go(-1)">Voltar</a>

@endsection
