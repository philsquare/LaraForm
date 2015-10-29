<input name="{{ $name }}"
       type="email"
       value="{{ old($name) ?: (isset($value) ? $value : '') }}"
       class="uk-width-1-1 {{ $errors->has($name) ? 'uk-form-danger' : '' }}"
       id="{{ $id or '' }}"
       placeholder="{{ isset($placeholder) ? $placeholder : '' }}">