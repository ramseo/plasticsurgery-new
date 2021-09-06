<section id="about-us">
    <div class="container-fluid">
        <div class="row">
            <div class="col-xs-12 col-sm-6 img-col">
                <img src="images/about.jpg" alt="" class="img-fluid">
            </div>
            <div class="col-xs-12 col-sm-6 text-col">
                <div class="col-xs-12 common-heading">
                    <p class="shadow-text">About Us</p>
                    <p class="head">About Us</p>
                </div>
                <div class="mt-2">
                    @if(setting('about_us'))
                        {!! setting('about_us') !!}
                    @endif
                </div>
                @if(setting('about_link'))
                <div class="mt-4">
                    <a href="{{setting('about_link')}}" class="btn btn-primary">READ MORE</a>
                </div>
                @endif
            </div>
        </div>
    </div>
</section>
