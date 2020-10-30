@extends('layouts/admin')

@include('includes/sidebar')

@section('content')
	
	<h1>Welcome to our gallery</h1>
	<div class="btn-group">
		<a href="gallery/create" class="btn btn-primary btn-sm">Add a new photo</a>
	</div>
	<div class="row">
		@if($pictures)
			@foreach($pictures as $picture)
				<div class="col-sm-12 col-md-4 col-lg-3">
					<div class="card">
						<img src="{{asset('gallery/'. $picture->url)}}" class="card-img-top">
						<div class="card-body">
							<p class="card-text">{{$picture->description}}</p>
						</div>
						<div class="card-footer">
							<form action="/gallery/{{$picture->id}}" method="POST" class="form-inline">
		                        {{csrf_field()}}
		                        <input type="hidden" name="_method" value="DELETE">
		                        <input type="submit" class="btn btn-sm btn-danger" value="delete">
		                    </form>
						</div>
					</div>
				</div>
				@endforeach

				@else 
					<p>No pictures found in gallery</p>
		@endif
	</div>

@endsection