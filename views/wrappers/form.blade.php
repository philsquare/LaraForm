@if(isset($wrapper) && $wrapper === false)

    @yield('field')

@else

    <div class="uk-form-row">
        <span class="errors">{{ $errors->first($name) }}</span>

        <label for="{{ $name }}" class="uk-form-label">{{ isset($label) && $label !== false ? $label : ucwords($name)}}</label>

        <div class="uk-form-controls">
            @yield('field')
        </div>
    </div>

@endif