@extends('laraform::wrappers.form')

@section('field')

    <textarea name="{{ $field['name'] }}"
              id="{{ isset($field['id']) ? $field['id'] : '' }}"
              class="{{ isset($field['class']) ? $field['class'] : 'uk-width-1-1' }} {{ $errors->has($field['name']) ? 'uk-form-danger' : '' }}">{{ old($field['name']) ?: (isset($field['value']) ? $field['value'] : '') }}</textarea>

@overwrite