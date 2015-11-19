<textarea name="{{ $name }}"
      class="uk-width-1-1{{ $errors->has($name) ? 'uk-form-danger' : '' }}">{{ old($name) ?: (isset($value) ? $value: '') }}</textarea>