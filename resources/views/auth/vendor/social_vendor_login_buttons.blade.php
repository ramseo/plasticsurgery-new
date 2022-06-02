@if(env('FACEBOOK_ACTIVE') || env('GITHUB_ACTIVE') || env('GOOGLE_ACTIVE'))
<div class="card-header bg-transparent pb-4">
    <div class="text-muted text-center mt-2 mb-4">
      
    </div>

    <div class="text-center">
        @if(env('FACEBOOK_ACTIVE'))
        <a href="{{route('social.vendorlogin', 'facebook')}}" class="btn btn-neutral btn-icon mb-2">
            <span class="btn-inner--icon"> <i class="fab fa-facebook"></i> </span>
            <span class="btn-inner--text">Log in with Facebook</span>
        </a>
        @endif

       

        @if(env('GOOGLE_ACTIVE'))
        <a href="{{route('social.vendorlogin', 'google')}}" class="btn btn-neutral btn-icon mb-2">
            <span class="btn-inner--icon"><i class="fab fa-google"></i> </span>
            <span class="btn-inner--text">Log in with Google</span>
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
</div>


@endif
