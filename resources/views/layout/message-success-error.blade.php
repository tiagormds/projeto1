@if($message = Session::get('success'))
    <div class="alert alert-success">
        {{ $message }}
    </div>
@endif

@if(count($errors)>0)
    <div class="alert alert-danger">
        <ul>
            @foreach($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
