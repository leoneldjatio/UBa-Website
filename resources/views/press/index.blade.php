@extends('layouts.admin')

@include('includes.sidebar')


@section('content')

    <div class="header">
        <p>Press Releases</p>
        <a href="{{ route('press.create') }}" class="btn btn-primary">new press release</a>
    </div>

    <table classs="table table-stripped table-hoverable">
        <thead>
            <th>
            <td>#number</td>
            <td>Title</td>
            <td>Options</td>
            </th>
        </thead>
        <tbody>
            @foreach ($pressReleases as $press)
                <tr>
                    <td>1</td>
                    <td>{{ $press->title }}</td>
                    <td>
                        <a href="{{ route('press.edit', $press->id) }}" class="btn btn-sm btn-info">edit</a>
                        <a href="{{ asset($press->file) }}" class="btn btn-sm btn-warning mr-2">download</a>
                        <a href="{{ route('press.destroy', $press->id) }}" class="btn btn-sm btn-danger">delete</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
