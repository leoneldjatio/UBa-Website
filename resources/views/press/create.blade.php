@extends('layouts.admin')


@section('content')
    <form action="{{ route('press.store') }}" method="POST" enctype="multipart/form-data">

        @csrf

        @include('press.form')

        <div class="form-group">
            <button type="submit" class="btn btn-primary px-4 shadow-sm">Save</button>
        </div>
    </form>
@endsection
