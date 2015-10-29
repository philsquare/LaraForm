<div class="uk-form-row">
    <span class="errors">{{ $errors->first($name) }}</span>

    @if(isset($label))
        <label for="{{ $name }}" class="uk-form-label">{{ $label }}</label>
    @endif
    
    <div class="uk-form-controls">
        @include('partials.form.' . $type)
    </div>
</div>