@extends('layouts.admin')

@include('includes.sidebar')


@section('content')
    <div class="card">
        <div class="card-header">Create new FAQ questions</div>
        <div class="card-body">
            <form class="form" action="{{ route('faqs.store') }}" method="POST">
                @csrf

                @include('faqs.form')

                <div class="form-group">
                    <button type="submit" class="btn btn-primary">save</button>
                </div>
            </form>
        </div>
    </div>

@endsection
