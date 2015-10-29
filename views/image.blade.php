@if(isset($url))
    <div class="image">
        <img src="{{ $url }}">
    </div>
@endif

<input type="file" name="{{ $name }}">