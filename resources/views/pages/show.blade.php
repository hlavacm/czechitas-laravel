@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ $page->title }}</div>

                <div class="card-body">
                    @if($page->description)
                        <p>{{ $page->description }}</p>
                    @endif

                    <p>{{ $page->content }}</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
