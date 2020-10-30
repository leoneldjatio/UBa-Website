@extends('layouts/content')

@section('content')
    <div class="container white_round mt-4 shadow-custom">
        <h1>Welcome to our blog</h1>
        <div class="row">
            @if (count($posts) > 0)
                @foreach ($posts as $post)
                    <div class="col-md-3">
                        <div class="card">
                            <img src="{{ asset('storage/' . $post->image) }}" alt="Blog image" class="card-image-top">
                            <div class="card-body">
                                <h3 class="card-title text-primary mb-0"><a
                                        href="/blog/{{ $post->id }}">{{ $post->title }}</a></h3>
                                <h5><small>{{ $post->subtitle }}</small></h5>
                                <p><em>{{ $post->create_at }}</em></p>
                            </div>
                        </div>
                    </div>
                @endforeach
            @else
                <p>No posts available yet</p>
                <a href="#" class="btn">Go back</a>
            @endif
        </div>
    </div>
@endsection
