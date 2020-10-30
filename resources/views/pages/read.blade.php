@extends('layouts/content')

@section('content')
    <div class="container white_round mt-4 shadow-custom">
        @if ($post)
            <div class="row">
                <div class="col-md-8 offset-md-2">
                    <div class="text-center">
                        <img src="{{ asset('storage/' . $post->image) }}" class="img-fluid rounded" alt="Responsive image">
                    </div><br>
                    <h2 class="text-center" style="color: brown; font-weight: bold; text-decoration: underline;">
                        {{ $post->title }}</h2>
                    <h4 class="text-center">{{ $post->subtitle }}</h4>
                    {!! $post->body !!}
                </div>
            </div>
        @endif
    </div>

@endsection
