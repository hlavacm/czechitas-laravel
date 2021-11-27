@if ($errors->any())
    <ul class="alert alert-danger">
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
@endif

<form method="POST" action="{{ $page ? route('pages.update', ['page' => $page->slug]) : route('pages.store') }}">
    @csrf
    <div class="form-group">
        <label for="title-field">{{ __('Title:*') }}</label>
        <input id="title-field" name="title" type="text" class="form-control @error('title') is-invalid @enderror"
            maxlength="150" value="{{ old('title', $page ? $page->title : null) }}">
        @error('title')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>
    <div class="form-group">
        <label for="slug-field">{{ __('Slug:*') }}</label>
        <input id="slug-field" name="slug" type="text" class="form-control @error('slug') is-invalid @enderror"
            maxlength="150" value="{{ old('slug', $page ? $page->slug : null) }}">
        @error('slug')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>
    <div class="form-group">
        <label for="description-field">{{ __('Description:') }}</label>
        <textarea id="description-field" name="description"
            class="form-control @error('description') is-invalid @enderror" rows="3"
            maxlength="2000">{{ old('description', $page ? $page->description : null) }}</textarea>
        @error('description')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>
    <div class="form-group">
        <label for="content-field">{{ __('Content:*') }}</label>
        <textarea id="content-field" name="content" class="form-control @error('content') is-invalid @enderror" rows="5"
            maxlength="2000">{{ old('content', $page ? $page->content : null) }}</textarea>
        @error('content')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>
    <div class="text-right">
        <button type="submit" class="btn btn-primary">{{ __('Save') }}</button>
    </div>
</form>
