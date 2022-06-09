@extends('layouts.admin')

@include('includes.sidebar')


@section('content')
    <div class="card">
        <div class="card-header">Create new FAQ questions</div>
        <div class="card-body">
            <form class="form" action="{{ route('faqs.update', $faqs->id) }}" method="POST">
                @csrf
                @method('PATCH')

                @include('faqs.form')

                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Update</button>
                </div>
            </form>
        </div>
    </div>

@endsection
