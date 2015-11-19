@extends('laraform::wrappers.form')

@section('field')

    <input name="{{ $name }}"
           type="text"
           value="{{ old($name) ?: (isset($value) ? $value : '') }}"
           class="{{ $class or 'uk-width-1-1' }} {{ $errors->has($name) ? 'uk-form-danger' : '' }}"
           id="{{ $id or '' }}"
           placeholder="{{ $placeholder or '' }}">

@overwrite