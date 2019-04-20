<div class="row">
    <div class="col-md-12">
        <form action="{{ route('produtos.busca') }}" method="post">
            {{ csrf_field() }}

            <div class="input-group mb-3">
                <input class="form-control" type="text" name="busca" id="busca" placeholder="Procurar produto no site" value="@if(isset($busca)) {{ $busca }} @endif">
                <div class="input-group-append">
                    <button class="btn btn-outline-secondary">Buscar</button>
                </div>
            </div>
        </form>
    </div>
</div>




{{--<form class="form-inline" action="{{ route('produtos.busca') }}" method="post">--}}
{{--    {{ csrf_field() }}--}}


{{--    <input class="form-control mr-sm-2" type="search" name="buscar" id="busca" placeholder="Buscar" value="@if(isset($busca)) {{ $busca }} @endif">--}}
{{--    <button class="btn btn-outline-success my-2 my-sm-0">Buscar</button>--}}
{{--</form>--}}

{{--<form class="form-inline">--}}
{{--    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">--}}
{{--    <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>--}}
{{--</form>--}}