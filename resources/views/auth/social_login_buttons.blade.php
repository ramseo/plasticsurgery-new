@if(env('FACEBOOK_ACTIVE') || env('GITHUB_ACTIVE') || env('GOOGLE_ACTIVE'))
    <div class="text-center">
        @if(env('FACEBOOK_ACTIVE'))
        <a href="{{route('social.login', 'facebook')}}" class="btn btn-block btn-outline-info">
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
    <hr>    
@endif
