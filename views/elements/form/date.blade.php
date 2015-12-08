@extends('laraform::wrappers.form')

@section('field')

    <input name="{{ $field['name'] }}"
           type="text"
           value="{{ old($field['name']) ?: (isset($field['value']) ? $field['value']->format('Y-m-d') : '') }}"
           class="{{ $field['class'] or 'uk-width-1-1' }} {{ $errors->has($field['name']) ? 'uk-form-danger' : '' }}"
           id="{{ $field['id'] or '' }}"
           placeholder="{{ $field['placeholder'] or '' }}">

@overwrite