
@extends('layouts/admin')

@include('includes/sidebar')

@section('content')
    <h1>{{$album->name}}</h1>
    <a class="btn btn-secondary" href="/albumIndex">Go Back</a>
    <a class="btn btn-primary" href="/photos/create/{{$album->id}}">Upload Photo to Album</a>
    <br><br>
    <div class="row">
        @if($album)
            @foreach($album->photos as $photo)
                <div class="col-sm-12 col-md-4 col-lg-3" style="padding-bottom: 15px;padding-left: 15px">
                    <a href="/photo/{{$photo->id}}" class="">
                        <div class="card h-100" style="width: 12rem;">
                            <div class="embed-responsive view overlay">
                            <img src="{{url('/storage/'. $photo->photo)}}" class="card-img-top img-fluid" style="height: 15rem">
                            <div class="card-body">
                                <p class="card-text">{{$photo->title}}</p>
                            </div>
                            {{--<div class="card-footer">
                                <form action="/gallery/{{$picture->id}}" method="POST" class="form-inline">
                                    {{csrf_field()}}
                                    <input type="hidden" name="_method" value="DELETE">
                                    <input type="submit" class="btn btn-sm btn-danger" value="delete">
                                </form>
                            </div>--}}
                            </div>
                        </div></a>
                </div>
            @endforeach

        @else
            <p>No pictures found in Album</p>
        @endif
    </div>
@endsection


