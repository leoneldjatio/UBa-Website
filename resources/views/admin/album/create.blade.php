@extends('layouts.admin')

@include('includes/sidebar')

@section('content')
  <div class="card">
  <div class="card-body">
    <form role="form" enctype="multipart/form-data" action="/albumCreate" method="POST">
        @csrf
        <div class="form-group">
            <label for="image-des">Album title</label>
            <input type="text" class="form-control" name="album_name" id="image-name"  placeholder="Album name">
        </div>

        <div class="form-group">
            <label for="image-des">Album description</label>
            <textarea class="form-control" type="text" name="album_des" id="image-des" placeholder="Provide album description"></textarea>
        </div>
        <div class="form-group">
            <input type="file" class="custom-file" name="album_image" id="image" accept="image/png, image/jpeg, image/bmp" placeholder="Album cover photo">
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary text-uppercase mt-2 px-5 float-right">Create Album</button>
        </div>
    </form>
  </div>
  </div>
@endsection