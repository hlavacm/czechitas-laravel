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

            <div class="col-md-8 mt-4">
                <div class="card">
                    <div class="card-header">{{ __('Form') }}</div>

                    <div class="card-body">

                        <form>
                            @csrf
                            <div class="form-group">
                                <label for="name-field">{{ __('Name:*') }}</label>
                                <input id="name-field" type="text" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="email-field">{{ __('E-mail:*') }}</label>
                                <input id="email-field" type="email" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="subject-field">{{ __('Subject:*') }}</label>
                                <input id="subject-field" type="text" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="message-field">{{ __('Message:*') }}</label>
                                <textarea id="message-field" rows="3" class="form-control"></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
