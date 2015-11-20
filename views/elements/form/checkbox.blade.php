@extends('laraform::wrappers.form')

@section('field')

    <input name="{{ $field['name'] }}" type="checkbox" value="{{ $field['value'] or '1' }}"
           class="{{ $errors->has($field['name']) ? 'uk-form-danger' : '' }}"
            {{ (old($field['name']) OR $field['checked']) ? 'checked="checked"' : '' }}>

@overwrite