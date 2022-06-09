@extends('layouts.admin')

@include('includes.sidebar')


@section('content')

    <div class="card">
        <div class="card-header d-flex justify-content-between align-items-centetr">
            <p class="pb-0">Press Releases</p>
            <a href="{{ route('press.create') }}" class="btn btn-primary">new press release</a>
        </div>

        <div class="card-body px-0">
            <table class="table table-hoverable table-rounded">
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Title</th>
                        <th>Optons</th>
                    </tr>
                </thead>
                <tbody>
                <?php $number=1?>
                        @foreach ($pressReleases as $press)
                    <tr>
                        
                            <td>{{$number}}</td>
                            <td>{{ $press->title }}</td>
                            <td>
                                <a href="{{ route('press.edit', $press->id) }}" class="btn btn-sm btn-info">edit</a>
                                <a href="{{ asset($press->file) }}" class="btn btn-sm btn-warning mr-2">download</a>
                                <button data-route={{ route('press.destroy', $press->id) }}
                                    class="btn btn-sm btn-danger delete-btn">delete</button>
                            </td>
                            <?php $number++?>
                        
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>

    <form action="" class="delete-form" method="POST">
        @csrf
        @method('DELETE')
    </form>

@endsection


@section('scripts')
    <script>
        const deleteForm = document.querySelector('.delete-form');
        const deleteBtns = Array.from(document.querySelectorAll('.delete-btn'));

        deleteBtns.forEach(btn => btn.addEventListener('click', event => {
            deleteForm.action = event.target.dataset.route;
            deleteForm.submit();
        }))

    </script>

@endsection
