@if(session()->has('failed'))
    <div class="uk-alert uk-alert-danger" data-uk-alert>
        <a href="#" class="uk-alert-close uk-close"></a>
        {{ session('failed') }}
    </div>
@elseif(session()->has('success'))
    <div class="uk-alert uk-alert-success" data-uk-alert>
        <a href="#" class="uk-alert-close uk-close"></a>
        {{ session('success') }}
    </div>
@elseif(session('status'))
    <div class="alert alert-info">
        {{ session('status') }}
    </div>
@endif