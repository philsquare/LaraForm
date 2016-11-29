@extends('laraform::wrappers.form')

@section('field')

    <input name="{{ $field['name'] }}"
           type="password"
           class="{{ isset($field['class']) ? $field['class'] : 'uk-width-1-1' }} {{ $errors->has($field['name']) ? 'uk-form-danger' : '' }}"
           id="{{ isset($field['id']) ? $field['id'] : '' }}"
           placeholder="{{ isset($field['placeholder']) ? $field['placeholder'] : '' }}">

@overwrite