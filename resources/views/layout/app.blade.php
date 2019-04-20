<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <title>Nosso Site - @yield('title')</title>
</head>
<body>
@if(auth()->check())
<nav class="navbar navbar-light bg-light justify-content-between">
    <ul class="nav">
        <li class="nav-item"><a class="navbar-brand">@yield('title')</a></li>
        <li class="nav-item"><a class="nav-link" href="{{ route('produtos.create') }}">Adicionar Produto</a></li>
    </ul>

    <ul class="nav justify-content-end">
        <li class="nav-item"><a class="nav-link" href="{{ route('login.logout') }}">Sair</a></li>
    </ul>
</nav>
<br/>
@endif


<div class="container">
    @include('layout.message-success-error')
    @yield('content')
</div>

<script src="{{ asset('js/bootstrap.min.js') }}"></script>
</body>
</html>