@extends('laraform::wrappers.form')

@section('field')

    <input name="{{ $name }}" type="checkbox" value="{{ $value or '1' }}"
           class="{{ $errors->has($name) ? 'uk-form-danger' : '' }}"
            {{ (old($name) OR $checked) ? 'checked="checked"' : '' }}>

@overwrite