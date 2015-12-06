<div class="uk-width-medium-1-3 uk-container-center uk-margin-top">
    <div class="uk-panel uk-panel-box">
        <h1>Login</h1>
        <form class="uk-form uk-form-stacked" method="POST" action="{{ $action }}">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">

            @include('laraform::elements.form.email', ['field' => ['name' => 'email']])
            @include('laraform::elements.form.password', ['field' => ['name' => 'password']])
            @include('laraform::elements.form.checkbox', ['field' => ['name' => 'remember', 'checked' => false]])

            <div class="uk-form-row">
                <div class="uk-grid uk-grid-collapse">
                    <div class="uk-width-medium-1-2">
                        <button type="submit" class="uk-button uk-button-primary">Login</button>
                    </div>
                    <div class="uk-width-medium-1-2">
                        <a href="{{ url('/password/email') }}" class="forgot-password">Forgot Your Password?</a>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>