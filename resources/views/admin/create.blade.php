@extends('layouts/admin')

@include('includes/sidebar')

@section('content')
	<div class="card">
        <div class="card-header">
            Create new Post
        </div>
        <div class="card-body">
            <form role="form" enctype="multipart/form-data" action="/posts" method="POST">
                {{csrf_field()}}
                {{-- <input type="hidden" name="_method" value="PUT"> --}}

                <div class="form-group">
                    <input type="file" name="image" id="image" accept="image/png, image/jpeg, image/bmp" placeholder="Upload picture">
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" name="title" placeholder="Blog title">
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" name="subtitle" placeholder="Blog subtitle (optional)">
                </div>
                {{-- <div class="form-group">
                    <input type="file" name="blog_image" placeholder="Header image">
                </div> --}}
                <div class="form-group">
                    <textarea class="form-control" id="post-body"name="body" placeholder="Blog content" rows="7"></textarea>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary text-uppercase mt-2 px-5 float-right">Create Post</button>
                </div>
            </form>
        </div>
    </div>
@endsection
