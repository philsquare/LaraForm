<select name="{{ $name }}">
    @foreach($options as $id => $title)
        @if(isset($value))
            <option value="{{ $id }}" {{ ($id == $value OR old($name) == $id) ? 'selected' : ''  }}>{{ $title }}</option>
        @else
            <option value="{{ $id }}" {{ old($name) == $id ? 'selected' : '' }}>{{ $title }}</option>
        @endif
    @endforeach
</select>

