@extends('layouts/admin')

@include('includes/sidebar')

@section('content')

    <h1>Welcome to our Albums</h1>
    <div class="btn-group">
        <a href="album" class="btn btn-primary btn-sm">Add a new album</a>
    </div>
    <br><br>
    <div class="row">
        @if($albums)
            @foreach($albums as $album)
                <div class="col-sm-12 col-md-4 col-lg-3" style="padding-bottom: 15px">
                    <a href="/albums/{{$album->id}}" class="">
                        <div class="card h-100" style="width: 12rem;">
                            <div class="embed-responsive view overlay">
                        <img src="{{ url('/storage/'.$album->cover_image)}}" class="card-img-top img-fluid" style="height: 15rem">
                        <div class="card-body">
                            <p class="text-center text-uppercase">{{$album->name}}</p>
                        </div>
                        <div class="card-footer">
                            <form action="/album/delete/{{$album->id}}" method="POST" class="form-inline">
                                {{csrf_field()}}
                                <input type="hidden" name="_method" value="DELETE">
                                <input type="submit" class="btn btn-sm btn-danger" value="delete">
                            </form>
                        </div>
                            </div>
                        </div></a>
                </div>
            @endforeach

        @else
            <p>No Albums Found</p>
        @endif
    </div>


@endsection