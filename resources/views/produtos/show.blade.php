@extends('layout.app')
@section('title', $produto->titulo)
@section('content')
<h1>{{ $produto->titulo }}</h1>

<ul>
    <li><strong>SKU: </strong> {{ $produto->sku }}</li>
    <li><strong>Preço: </strong> {{ $produto->preco }}</li>
    <li><strong>Adicinado em: </strong> {{ date_format($produto->created_at, 'd/m/Y') }}</li>
</ul>
<p>{{ $produto->descricao }}</p>
<a href="javascript:history.go(-1)">Voltar</a>
@endsection
