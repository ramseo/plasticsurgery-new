@extends('auth.layout')

@section('title') @lang('Login') @endsection

@section('content')

<div class="col-xs-12 col-md-10 auth-inner-form-col margin-login">
    <div class="form-header">
        <a class="page-back-link" href="/"><img class="img-fluid" src="{{asset('images/back-arrow.png')}}" alt=""></a>
        <p class="header-title">Sign in</p>
        <p class="header-text">Welcome Back, Sign in to Wed.in</p>
    </div>
    <div class="form-body">
          
        @include('flash::message')
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

        @if(env('FACEBOOK_ACTIVE') || env('GITHUB_ACTIVE') || env('GOOGLE_ACTIVE'))
            <div class="text-center">
                @if(env('FACEBOOK_ACTIVE'))
                <a href="{{route('facebook.login')}}" class="btn btn-block btn-outline-info">
                    <span class="btn-inner--icon"> <i class="fab fa-facebook"></i> </span>
                    <span class="btn-inner--text">Log in with Facebook</span>
                </a>
                @endif
                @if(env('GOOGLE_ACTIVE'))
                <a href="{{route('social.login', 'google')}}" class="btn btn-block btn-outline-primary">
                    <span class="btn-inner--icon"><i class="fab fa-google"></i> </span>
                    <span class="btn-inner--text"> Log in with Google</span>
                </a>
                @endif
            </div>

        <style type="text/css">
            .or-text-row { display: table-row; }
            .or-text { display: table; width: 100%; position: relative; margin: 20px 0; }
            .or-text-step button[disabled] { opacity: 1 !important; filter: alpha(opacity=100) !important; }
            .or-text-row:before { top: 14px; bottom: 0; position: absolute; content: " "; width: 100%; height: 1px; background-color: #e8e8e8; z-order: 0; }
            .or-text-line { display: table-cell; text-align: center; position: relative; width: 100%; }
            .or-text-line p { margin-top:10px; }
            .btn-circle { width: 30px; height: 30px; text-align: center; padding: 2px 0; font-size: 17px; line-height: 1.428571429; border-radius: 15px;}      
        </style>

        <div class="or-text">
            <div class="or-text-row">
                <div class="or-text-line">
                    <button type="button" class="btn btn-neutral btn-circle" disabled="disabled">Or</button>
                </div>
            </div>
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
