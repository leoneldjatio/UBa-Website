@extends('layouts/admin')

@include('includes/sidebar')

@section('content')
    @if( count($posts) > 0)
        @foreach ($posts as $post)
            <div class="card mb-3">
            <div class="card-header bg-light">
                <h4 class="card-title">{{$post->title}}</h4>
                <p class="mb-0">{{$post->subtitle}}</p>
            </div>
            <div class="card-body d-flex">
                    <a href="/posts/{{$post->id}}" class="btn btn-sm mr-2 btn-light">view</a>
                    <a href="/posts/{{$post->id}}/edit" class="btn btn-sm mr-2 btn-success">edit</a>
                    <form action="/posts/{{$post->id}}" method="POST" class="form-inline">
                        {{csrf_field()}}
                        <input type="hidden" name="_method" value="DELETE">
                        <input type="submit" class="btn btn-sm btn-warning" value="delete">
                    </form>
            </div>
            </div>
        @endforeach
        {{$posts->links()}}
    @else
        <p>No post found in database</p>
    @endif
@endsection

