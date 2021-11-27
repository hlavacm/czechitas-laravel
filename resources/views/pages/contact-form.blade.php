<form method="POST" action="{{ route('pages.contact') }}">
    @csrf
    <div class="form-group">
        <label for="name-field">{{ __('Name:*') }}</label>
        <input id="name-field" name="name" type="text" maxlength="100" class="form-control">
    </div>
    <div class="form-group">
        <label for="email-field">{{ __('E-mail:*') }}</label>
        <input id="email-field" name="email" type="email" maxlength="250" class="form-control">
    </div>
    <div class="form-group">
        <label for="subject-field">{{ __('Subject:*') }}</label>
        <input id="subject-field" name="subject" type="text" maxlength="150" class="form-control">
    </div>
    <div class="form-group">
        <label for="message-field">{{ __('Message:*') }}</label>
        <textarea id="message-field" name="message" rows="3" maxlength="2000" class="form-control"></textarea>
    </div>
    <button type="submit" class="btn btn-primary">{{ __('Submit') }}</button>
</form>
