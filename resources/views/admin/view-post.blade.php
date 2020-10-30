@extends('layouts/admin')

@include('includes/sidebar')

@section('content')
<!-- Button trigger modal -->

<div class="card">
    <div class="card-header">
       <p>{{$post->title}}</p>
       <em>Published on: {{$post->created_at}}</em>
       <div>
           <a href="/posts/{{$post->id}}/edit" class="btn btn-sm btn-success">edit</a>
           {{-- <button type="button" class="btn btn-sm btn-warning" data-toggle="modal" data-target="#exampleModalCenter">
            delete
          </button> --}}
          <form action="/posts/{{$post->id}}" method="POST" class="form-inline">
            {{csrf_field()}}
            <input type="hidden" name="_method" value="DELETE">
            <input type="submit" class="btn btn-sm btn-warning" value="delete">
        </form>
       </div>
    </div>
    <div class="card-body">
        {{-- We need to render the body including the html from the ck-editor --}}
        {!!$post->body!!}
    </div>
</div>
 <!-- Modal -->
 <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <p>Are you sure you want to delete this post?</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-danger">Yes</button>
        </div>
      </div>
    </div>
  </div>
@endsection
