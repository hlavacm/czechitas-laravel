@if ($errors->any())
    <ul class="alert alert-danger">
        @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
        @endforeach
    </ul>
@endif

<form method="POST" action="{{ route('pages.contact') }}">
    @csrf
    <div class="form-group">
        <label for="name-field">{{ __('Name:*') }}</label>
        <input id="name-field" name="name" type="text" class="form-control @error('name') is-invalid @enderror"
            maxlength="100" value="{{ old('name') }}">
        @error('name')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>
    <div class="form-group">
        <label for="email-field">{{ __('E-mail:*') }}</label>
        <input id="email-field" name="email" type="email" class="form-control @error('email') is-invalid @enderror"
            maxlength="250" value="{{ old('email') }}">
        @error('email')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>
    <div class="form-group">
        <label for="subject-field">{{ __('Subject:*') }}</label>
        <input id="subject-field" name="subject" type="text" class="form-control @error('subject') is-invalid @enderror"
            maxlength="150" value="{{ old('subject') }}">
        @error('subject')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>
    <div class="form-group">
        <label for="message-field">{{ __('Message:*') }}</label>
        <textarea id="message-field" name="message" class="form-control @error('message') is-invalid @enderror" rows="5"
            maxlength="2000">{{ old('message') }}</textarea>
        @error('message')
            <div class="invalid-feedback">{{ $message }}</div>
        @enderror
    </div>
    <div class="text-right">
        <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
    </div>
</form>
