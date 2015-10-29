<input name="{{ $name }}"
       type="password"
       class="uk-width-1-1 {{ $errors->has($name) ? 'uk-form-danger' : '' }}"
       id="{{ $id or '' }}"
       placeholder="{{ isset($placeholder) ? $placeholder : '' }}">