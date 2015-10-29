<input name="{{ $name }}"
       type="text"
       value="{{ old($name) ?: (isset($value) ? $value : '') }}"
       class="{{ isset($class) ? $class : 'uk-width-1-1' }} {{ $errors->has($name) ? 'uk-form-danger' : '' }}"
       id="{{ $id or '' }}"
        placeholder="{{ isset($placeholder) ? $placeholder : '' }}">