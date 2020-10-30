@extends('layouts.admin')

@include('includes.sidebar')

@section('content')
    <div class="card">
        <div class="card-header">New Press release</div>
        <div class="card-body">
            <form action="{{ route('press.store') }}" method="POST" enctype="multipart/form-data">

                @csrf

                @include('press.form')

                <div class="form-group">
                    <button type="submit" class="btn btn-primary px-4 shadow-sm">Save</button>
                </div>
            </form>
        </div>
    </div>
@endsection
