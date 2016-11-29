@extends('laraform::wrappers.form')

@section('field')

    <input name="{{ $field['name'] }}"
           type="text"
           value="{{ old($field['name']) ?: (isset($field['value']) ? $field['value']->format('Y-m-d') : '') }}"
           class="{{ isset($field['class']) ? $field['class'] : 'uk-width-1-1' }} {{ $errors->has($field['name']) ? 'uk-form-danger' : '' }}"
           id="{{ isset($field['id']) ? $field['id'] : '' }}"
           placeholder="{{ isset($field['placeholder']) ? $field['placeholder'] : '' }}">

@overwrite