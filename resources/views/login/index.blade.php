@extends('layout.app')
@section('title', 'Página de Login')
@section('content')
<!-- no additional media querie or css is required -->
<div class="container">
    <div class="row justify-content-center align-items-center" style="height:100vh">
        <div class="col-4">
            <div class="card">
                <div class="card-body">
                    <form action="{{ route('login.entrar') }}" method="post">
                        {{ csrf_field() }}
                        <div class="form-group">
                            <input type="text" class="form-control" name="email" placeholder="E-mail">
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" name="password" placeholder="Senha">
                        </div>
                        <button class="btn btn-primary">login</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="{{ asset('js/jquery.min.js') }}"></script>
@endsection