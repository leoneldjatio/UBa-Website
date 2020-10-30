@extends('layouts.admin')

@include('includes/sidebar')

@section('content')
    <div class="card">
        <div class="card-body">
            <form role="form" enctype="multipart/form-data" action="/photos/store" method="POST">
                @csrf
                <div class="form-group">
                    <label for="image-des">Photo title</label>
                    <input type="text" class="form-control" name="title" id="image-name"  placeholder="Photo name">
                </div>

                <div class="form-group">
                    <label for="image-des">Photo description</label>
                    <textarea class="form-control" type="text" name="description" id="image-des" placeholder="Provide photo description"></textarea>
                </div>
                <div class="form-group">
                    <input type="file" class="custom-file" name="photo" id="image" accept="image/png, image/jpeg, image/bmp" placeholder="Upload Photo">
                </div>
                <div class="form-group">
                    <input type="hidden" class="" name="album_id" id="album_id" accept="" value="{{$album_id}}">
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary text-uppercase mt-2 px-5 float-right">Upload Photo</button>
                </div>
            </form>
        </div>
    </div>
@endsection