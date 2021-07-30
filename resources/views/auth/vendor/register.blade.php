@extends('auth.layout')

@section('title') @lang('Vendor Signup') @endsection

@section('content')

<div class="col-xs-12 col-md-10 auth-inner-form-col">
    <div class="form-header">
        <a class="page-back-link" href="/"><img class="img-fluid" src="{{asset('images/back-arrow.png')}}" alt=""></a>
        <p class="header-title">@lang('Register as Vendor')</p>
        <p class="header-text">@lang("Please fill up the form below to register.")</p>
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
        <form role="form" method="POST" action="{{ route('register-vendor') }}">
            @csrf
            <input type="hidden" name="redirectTo" value="{{ request()->redirectTo }}">
            <div class="form-row">
                <div class="col-6 form-group mat-group">
                    <label for="">{{ __('First Name') }}</label>
                    <input type="text" class="form-control" id="first_name" name="first_name" value="{{ old('first_name') }}" placeholder="{{ __('First Name') }}" aria-label="first_name" aria-describedby="first_name" required>
                </div>
                <div class="col-6 form-group mat-group">
                    <label for="">{{ __('Last Name') }}</label>
                    <input type="last_name" class="form-control" id="last_name" name="last_name" value="{{ old('last_name') }}" placeholder="{{ __('Last Name') }}" aria-label="last_name" aria-describedby="last_name" required>
                </div>
            </div>
            <div class="form-row">
                <div class="col-12 form-group mat-group">
                    <label for="">{{ __('Email') }}</label>
                    <input type="email" class="form-control" id="email" name="email" value="{{ old('email') }}" placeholder="{{ __('Email') }}" aria-label="email" aria-describedby="email" required>
                </div>
            </div>
            <div class="form-row">
                <div class="col-6 form-group mat-group">
                    @php
                        $types = getDataArray('types');
                    @endphp
                    <label for="">{{ __('Vendor Type') }}</label>
                    <select name="" id="" class="form-control">
                        <option value="">Select</option>
                        @if(isset($types) && $types)
                            @foreach($types as $type)
                                <option value="{{$type->id}}">{{$type->name}}</option>
                            @endforeach
                        @endif
                    </select>
                </div>
                <div class="col-6 form-group mat-group">
                    @php
                        $cities = getDataArray('cities');
                    @endphp
                    <label for="">{{ __('City') }}</label>
                    <select name="" id="" class="form-control">
                        <option value="">Select</option>
                        @if(isset($cities) && $cities)
                            @foreach($cities as $city)
                                <option value="{{$city->id}}">{{$city->name}}</option>
                            @endforeach
                        @endif
                    </select>
                </div>
            </div>
            <div class="form-row">
                <div class="col-6 form-group mat-group">
                    <label for="">{{ __('Password') }}</label>
                    <div class="password-container">
                        <input type="password" class="form-control" id="password" name="password" placeholder="@lang('Password')" aria-label="@lang('Password')" aria-describedby="password" required>
                        <span class="displayPassword"><img src="{{asset('images/view-password.png')}}" alt=""></span>
                    </div>
                </div>
                <div class="col-6 form-group mat-group">
                    <label for="">{{ __('Confirm Password') }}</label>
                    <div class="password-container">
                        <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" placeholder="@lang('Confirm Password')" aria-label="@lang('password_confirmation')" aria-describedby="password_confirmation" required>
                        <span class="displayPassword"><img src="{{asset('images/view-password.png')}}" alt=""></span>
                    </div>
                </div>
            </div>
            <div class="form-group mat-group list-top-group">
                <div class="custom-control custom-control-alternative custom-checkbox">
                    <input class="custom-control-input" id="customCheckRegister" type="checkbox">
                    <label class="custom-control-label" for="customCheckRegister">
                        <span class="text-muted">I agree with the <a href="#!">Privacy Policy</a></span>
                    </label>
                </div>
            </div>
            <div class="form-group submit-group">
                <input type="submit" class="btn btn-primary btn-block" value="@lang('Create account')">
            </div>
            <div class="alternate-text-group">
                <p class="text-center">Already have an account? <a class="text-primary" href="{{ route('login') }}">Login</a></p>
            </div>
        </form>
    </div>
</div>

@endsection
