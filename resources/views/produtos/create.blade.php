@extends('layout.app')
@section('title', 'Adicionar produto')
@section('content')
    <h1 class="mb-3">Adicionar um novo Produto</h1>

    @include('layout.message-success-error')

    <form method="POST" action="{{ route('produtos.store') }}">
        {{ csrf_field() }}
        <div class="form-group mb-3">
            <label for="sku">SKU</label>
            <input type="text" class="form-control" id="sku" name="sku" placeholder="Digite o Código do Produto..."
                   required>
        </div>
        <div class="form-group mb-3">
            <label for="titulo">Título</label>
            <input type="text" class="form-control" id="titulo" name="titulo" placeholder="Digite o Nome do Produto..."
                   required>
        </div>
        <div class="form-group mb-3">
            <label for="descricao">Descrição</label>
            <textarea class="form-control" id="descricao" name="descricao" rows="3"
                      placeholder="Digite uma breve descrição do Produto..." required></textarea>
        </div>
        <label for="preco">Preço</label>
        <div class="input-group mb-3">
            <div class="input-group-prepend">
                <span class="input-group-text" id="basic-addon1">R$</span>
            </div>
            <input type="number" step=".01" class="form-control" id="preco" name="preco" placeholder="0,00" required>
        </div>
        <button type="submit" class="btn btn-primary">Cadastrar Produto</button>
    </form>

@endsection