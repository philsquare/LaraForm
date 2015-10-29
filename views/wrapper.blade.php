<div class="uk-form-row">
    <span class="errors">{{ $errors->first($name) }}</span>
    <label for="{{ $name }}" class="uk-form-label">{{ $label }}</label>
    <div class="uk-form-controls">
        @include('partials.form.' . $type)
    </div>
</div>