<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="{{asset('img/cosmetic-lg.png')}}">
    <link rel="icon" type="image/png" href="{{asset('img/cosmetic-lg.png')}}">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>@yield('title') | {{ config('app.name') }}</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="{{ setting('meta_description') }}">
    <meta name="keyword" content="{{ setting('meta_keyword') }}">

    @include('frontend.includes.meta')

    <!-- Shortcut Icon -->
    <link rel="shortcut icon" href="{{asset('img/cosmetic-lg.png')}}">
    <link rel="icon" type="image/ico" href="{{asset('img/cosmetic-lg.png')}}" sizes="80x20" />

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    @stack('before-styles')

    <link rel="stylesheet" href="{{ mix('css/dashboard.css') }}">
    <link rel="stylesheet" href="{{ mix('css/wed.css') }}">

    @stack('after-styles')

    <x-google-analytics config="{{ setting('google_analytics') }}" />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" type="text/css" rel="stylesheet">
</head>

<body class="auth-body">

    <!-- <nav id="navbar-main" class="navbar navbar-horizontal navbar-transparent navbar-main navbar-expand-lg navbar-light">
        <div class="container">
            <a class="navbar-brand" href="/">
                <img src="{{asset('img/logo.png')}}" height="30">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar-collapse" aria-controls="navbar-collapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="navbar-collapse navbar-custom-collapse collapse" id="navbar-collapse">
                @guest
                    <ul class="navbar-nav align-items-lg-center ml-lg-auto">
                        <li class="nav-item">
                            <a href="{{ route('login') }}" class="nav-link">
                                <span class="nav-link-inner--text">Login</span>
                            </a>
                        </li>
                    @if (Route::has('register'))
                        <li class="nav-item">
                            <a href="{{ route('register') }}" class="nav-link">
                                <span class="nav-link-inner--text">Register</span>
                            </a>
                        </li>
                    @endif
                </ul>
                @endguest
            </div>
        </div>
    </nav> -->

    <section id="auth-section">
        <div class="container-fluid">
            <div class="row height-100vh">
                <div class="col-md-6 cs-bg-color">
                    <a href="<?= url('/') ?>">
                        <img class="auth-logo" src="{{asset('img/logo-cosmeticsurgery.png')}}" alt="logo">
                    </a>
                </div>
                <div class="col-md-6 auth-form-col position-relative">
                    @yield('content')
                </div>
            </div>
        </div>
    </section>

    @include('auth.footer')

    @stack('before-scripts')

    <script src="{{ mix('js/dashboard.js') }}"></script>

    <script>
        $(document).ready(function() {
            $('.displayPassword').click(function() {
                var inputType = $(this).parents('.password-container').find('input').attr('type');
                if (inputType == 'password') {
                    $(this).parents('.password-container').find('input').attr('type', 'text');
                    $(this).find('img').attr('src', "{{asset('images/hide-password.png')}}");
                } else {
                    $(this).parents('.password-container').find('input').attr('type', 'password');
                    $(this).find('img').attr('src', "{{asset('images/view-password.png')}}");
                }
            });
        });
    </script>

    @stack('after-scripts')

</body>

</html>