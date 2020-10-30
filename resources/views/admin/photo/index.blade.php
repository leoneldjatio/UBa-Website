
@extends('layouts.admin')

@include('includes/sidebar')

@section('content')
    <h2>{{$photo->title}}</h2>
    <p>{{$photo->description}}</p>
    <a class="btn btn-primary" href="/albums/{{$photo->album_id}}">Back To Album</a>
    <hr>
    <img src="{{ url('/storage/'.$photo->photo)}}" alt="{{$photo->title}}">
     <br><br>
    <form action="/photo/{{$photo->id}}" method="POST" class="form-inline">
        {{csrf_field()}}
        <input type="hidden" name="_method" value="DELETE">
        <input type="submit" class="btn btn-sm btn-danger" value="delete">
    </form>
    <br><br>
    @endsection
