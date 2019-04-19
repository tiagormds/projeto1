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