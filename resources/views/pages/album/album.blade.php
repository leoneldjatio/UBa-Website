@extends('layouts/app')
@section('content')
    <div class="container white_round shadow-custom shift-up">
        <h1 class="text-center">{{$album->name}}</h1>
        <a class="btn btn-secondary" href="/">Go Back</a>
        <br><br>
        <div class="row">
            @if($album)
                @foreach($album->photos as $photo)
                    <div class="col-sm-12 col-md-4 col-lg-3"style="padding-bottom: 15px">
                        <a href="/photos/{{$photo->id}}" class="">
                            <div class="card h-100" style="width: 16rem;">
                                <div class="embed-responsive view overlay">
                                    <img src="{{url('/storage/'. $photo->photo)}}" class="card-img-top img-fluid" style="max-height: 16rem;">
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
    </div>

    @endsection