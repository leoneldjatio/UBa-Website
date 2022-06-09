@extends('layouts.content')

@section('content')
    <div class="container shadow-custom white_round push-up my-5">

        <h2 class="title text-center font-weight-bold text-dark mb-4">List of all faqs</h2>
        <p class="lead text-secondary">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quos porro quasi quia
            accusamus,
            accusantium voluptate ipsum quisquam fuga officiis neque?</p>

        {{-- accordion --}}
        <div id="faqs-accordion" role="tablist" aria-multiselectable="true">
            <div class="card">
                <div class="card-header" role="tab" id="question one">
                    <h5 class="mb-0">
                        <a data-toggle="collapse" data-parent="#faqs-accordion" href="#question response"
                            aria-expanded="true" aria-controls="question response">
                            question on here
                        </a>
                    </h5>
                </div>
                <div id="question response" class="collapse in" role="tabpanel" aria-labelledby="question one">
                    <div class="card-body">
                        question response goes here
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
