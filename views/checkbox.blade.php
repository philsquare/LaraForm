<input name="{{ $name }}" type="checkbox" value="1"
       class="{{ $errors->has($name) ? 'uk-form-danger' : '' }}"
        {{ (old($name) OR $checked) ? 'checked="checked"' : '' }}>

