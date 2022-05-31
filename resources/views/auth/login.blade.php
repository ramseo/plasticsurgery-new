@extends('auth.layout')

@section('title') @lang('Login') @endsection

@section('content')

<div class="col-xs-12 col-md-10 auth-inner-form-col">
    <div class="form-header">
        <a class="page-back-link" href="/"><img class="img-fluid" src="{{asset('images/back-arrow.png')}}" alt=""></a>
        <p class="header-title">Sign in</p>
        <p class="header-text">Welcome Back, Sign in to Wed.in</p>
    </div>
    <div class="form-body">
          
        @include('flash::message')
        @include('auth.social_login_buttons')
        @if ($errors->any())
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <p><i class="fas fa-exclamation-triangle"></i> @lang('Please fix the following errors & try again!')</p>
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        @endif
        <form role="form" method="POST" action="{{ route('login') }}">
            @csrf
            <!-- redirectTo URL -->
            <input type="hidden" name="redirectTo" value="{{ request()->redirectTo }}">
            <div class="form-group mat-group">
                <label for="">Email</label>
                <input type="email" class="form-control" id="email" name="email" value="{{ old('email') }}" placeholder="{{ __('E-Mail Address') }}" aria-label="email" aria-describedby="input-email" required>
            </div>
            <div class="form-group mat-group">
                <label for="">Password</label>
                <div class="password-container">
                    <input type="password" class="form-control" id="password" name="password" placeholder="@lang('Password')" aria-label="@lang('Password')" aria-describedby="input-password" required>
                    <span class="displayPassword"><img src="{{asset('images/view-password.png')}}" alt=""></span>
                </div>
            </div>
            <div class="form-group mat-group list-top-group">
                <ul class="list-inline space-list">
                    <li class="list-inline-item">
                        <div class="custom-control custom-control-alternative custom-checkbox">
                            <input class="custom-control-input" name="remember" id="remember" type="checkbox" {{ old('remember') ? 'checked' : '' }}>
                            <label class="custom-control-label" for="remember">
                                <span class="text-muted">
                                    Remember me
                                </span>
                            </label>
                        </div>
                    </li>
                    <li class="list-inline-item">
                        <a class="text-muted" href="{{ route('password.request') }}">{{ __('Forgot Your Password?') }}</a>
                    </li>
                </ul>
            </div>
            <div class="form-group submit-group">
                <input type="submit" class="btn btn-primary btn-block" value="@lang('Login')">
            </div>
            <div class="alternate-text-group">
                <p class="text-center">Don't have an account? <a class="text-primary" href="{{ route('register') }}">Sign up</a></p>
            </div>
        </form>
    </div>
</div>

@endsection
