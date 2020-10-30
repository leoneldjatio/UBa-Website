@extends('layouts.admin')

@include('includes/sidebar')

@section('content')

<form role="form" enctype="multipart/form-data" action="/gallery" method="POST">
    {{csrf_field()}}
    {{-- <input type="hidden" name="_method" value="PUT"> --}}

    <div class="form-group">
        <input type="file" class="custom-file" name="image" id="image" accept="image/png, image/jpeg, image/bmp" placeholder="Upload picture">
    </div>
   
    <div class="form-group">
    	<label for="image-des">Image title (description)</label>
        <input class="form-control" type="text" name="image-des" id="image-des" placeholder="Provide image description">
    </div>
    <div class="form-group">
        <button type="submit" class="btn btn-primary text-uppercase mt-2 px-5 float-right">Add photo</button>
    </div>
</form>
@endsection