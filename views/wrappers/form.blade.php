@if(isset($field['wrapper']) && $field['wrapper'] === false)

    @yield('field')

@else

    <div class="uk-form-row">
        <span class="errors">{{ $errors->first($field['name']) }}</span>

        <label for="{{ $field['name'] }}" class="uk-form-label">{{ isset($field['label']) && $field['label'] !== false ? $field['label'] : ucwords($field['name'])}}</label>

        <div class="uk-form-controls">
            @yield('field')
        </div>
    </div>

@endif