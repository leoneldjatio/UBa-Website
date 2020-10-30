@extends('layouts/app')
@section('content')
    <div class="container white_round shadow-custom shift-up">
        <div class="mb-sm-4" style="padding-left: 250px;padding-right: 150px">
            <h2>{{$photo->title}}</h2>
            <p>{{$photo->description}}</p>
            <a class="btn btn-primary" href="/albums/{{$photo->album_id}}">Back To Album</a>
            <hr>
            <img src="{{ url('/storage/'.$photo->photo)}}" alt="{{$photo->title}}">
            <br><br>
        </div>
    </div>

    @endsection