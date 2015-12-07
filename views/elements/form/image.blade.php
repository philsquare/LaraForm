@extends('laraform::wrappers.form')

@section('field')

    @if(isset($field['url']))
        <div class="image">
            <img src="{{ $field['url'] }}">
        </div>
    @endif

    <input type="file" name="{{ $field['name'] }}">

@overwrite