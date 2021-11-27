@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ $page->title }}</div>

                    <div class="card-body">
                        @if ($page->description)
                            <p>{{ $page->description }}</p>
                        @endif

                        <p>{{ $page->content }}</p>
                    </div>
                </div>
            </div>

            @if (url()->current() == route('pages.show', ['page' => 'contact']))
                <div class="col-md-8 mt-4">
                    <div class="card">
                        <div class="card-header">{{ __('Form') }}</div>

                        <div class="card-body">
                            @include('pages.contact-form')
                        </div>
                    </div>
                </div>
            @endif

        </div>
    </div>
@endsection
