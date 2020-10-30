@if(count($errors) > 0)
    @foreach ($errors->all() as $error)
        <div class="alert alert-danger">
            <span data-dismis="alert" aria-label="close" role="button">&times;</span>
            {{$error}}
        </div>
    @endforeach
@endif


@if(session('success'))
    <div class="alert alert-success">
        <span data-dismis="alert" aria-label="close" role="button">&times;</span>
        {{session('success')}}
    </div>
@endif


@if(session('error'))
    <div class="alert alert-danger">
        <span data-dismis="alert" aria-label="close" role="button">&times;</span>
        {{session('error')}}
    </div>
@endif
