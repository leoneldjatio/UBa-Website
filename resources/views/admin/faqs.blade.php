@extends('layouts.admin')

@include('includes.sidebar')

@section('content')
    <div class="card flex-row p-2 justify-content-between align-items-center mb-3">
        <h3 class="text-secondary font-weight-bold">List of faqs</h3>
        <a href="{{ route('faqs.create') }}" class="btn btn-primary">Add FAQ</a>
    </div>

    {{-- accordion --}}
    <div id="faqs-accordion" role="tablist" aria-multiselectable="true">
        @foreach ($faqs as $faq)
            <div class="card mb-4">
                <div class="card-header" id="{{ $faq->question }}">
                    <h2 class="mb-0">
                        <button class="btn btn-link btn-block text-left" type="button" data-toggle="collapse"
                            data-target="#{{ $faq->question . '-' . $faq->id }}" aria-expanded="true"
                            aria-controls="{{ $faq->question . '-' . $faq->id }}">
                            {{ $faq->question }}
                        </button>
                    </h2>
                </div>

                <div id="{{ $faq->question . '-' . $faq->id }}" class="collapse show" aria-labelledby="{{ $faq->question }}"
                    data-parent="#faqs-accordion">
                    <div class="card-body">
                        {{ $faq->response }}
                    </div>
                    <div class="card-footer">
                        <a href="{{ route('faqs.edit', $faq->id) }}" class="btn btn-sm btn-success">Edit</a>
                        <button class="btn btn-sm btn-danger delete-btn"
                            data-route="{{ route('faqs.destroy', $faq->id) }}">Delete</button>
                    </div>
                </div>
            </div>
        @endforeach
    </div>

    {{-- delete form --}}
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
