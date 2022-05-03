@php
    $types = getDataArray('types');
    $cities = getDataArray('cities');
@endphp
<style type="text/css">
.button {    float: left;    width: 60px;    height: 60px;    cursor: pointer;    background: #fff;    overflow: hidden;    border-radius: 50px;    transition: all 0.3s ease-in-out;    box-shadow: 0 10px 10px rgba(0, 0, 0, 0.1);}
.button span {    font-size: 20px;    font-weight: 500;    line-height: 60px;    margin-left: 10px;}
.button:hover {    width: 200px;}
.button:hover .icon {    background: rgb(235, 10, 62);}
.button span {    color: rgb(235, 10, 62);}
.button .icon {    width: 60px;    height: 60px;    text-align: center;    border-radius: 50px;    display: inline-block;    transition: all 0.3s ease-in-out;}
.button .icon i {    color: rgb(235, 10, 62); font-size: 25px;    line-height: 60px;    transition: all 0.3s ease-in-out;}
.button:hover i {    color: #fff;}
</style>
<footer id="footer">
    <div class="container-fluid">
        <div class="row">
            <div class="col-xs-12 col-sm-12 footer-col">
                <p class="footer-head">Follow us for more ideas & fun</p>
                @if(setting('instagram_url'))
                    <a href="{{setting('instagram_url')}}" target="_blank">
                       <div class="button">
                                <div class="icon">
                                    <i class="fab fa-instagram"></i>
                                </div>
                                <span>@wed.in</span>
                            
                        </div>
                    </a>
                @endif
                @if(setting('facebook_url'))
                    <a href="{{setting('facebook_url')}}" target="_blank">
                        <div class="button">
                            <div class="icon">
                                <i class="fab fa-facebook-f"></i>
                            </div>
                            <span>@wed.in</span>
                        </div>
                    </a>
                @endif
                @if(setting('twitter_url'))
                    <a href="{{setting('twitter_url')}}" target="_blank">
                        <div class="button">
                            <div class="icon">
                                <i class="fab fa-twitter"></i>
                            </div>
                            <span>@wed.in</span>
                        </div>
                    </a>
                @endif
                @if(setting('pinterest_url'))
                    <a href="{{setting('pinterest_url')}}" target="_blank">
                        <div class="button">
                            <div class="icon">
                                <i class="fab fa-pinterest"></i>
                            </div>
                            <span>@wed.in</span>
                        </div>
                    </a>
                @endif
                @if(setting('linkedin_url'))
                    <a href="{{setting('linkedin_url')}}" target="_blank">
                        <div class="button">
                            <div class="icon">
                                <i class="fab fa-linkedin"></i>
                            </div>
                            <span>@wed.in</span>
                        </div>
                    </a>
                @endif
                 @if(setting('youtube_url'))
                    <a href="{{setting('youtube_url')}}" target="_blank">
                       <div class="button">
                            <div class="icon">
                                <i class="fab fa-youtube"></i>
                            </div>
                            <span>@wed.in</span>
                        </div>
                    </a>
                @endif
            </div>
            <div class="col-xs-12 col-sm-12 footer-col">
                <img src="{{asset('images/color-logo.png')}}" alt="" class="img-fluid">
                <div class="footer-text-col mt-4">
                    <p class="footer-bold">{{setting('footer_tagline')}}</p>
                    <p class="footer-text">{{setting('footer_about_us')}}</p>
                    <a href="#" class="btn btn-primary mt-3">HIRE A VENDOR</a>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 footer-col">
                <p class="footer-head">More About Us</p>
                @php
                    $footer_menu = getDataArray('menus','menu', 'footer');
                @endphp
                @if($footer_menu)
                    <ul class="list-inline footer-color-list">
                        @foreach($footer_menu as $menu_item)
                            <li class="list-inline-item"><a href="{{$menu_item->url}}">{{$menu_item->title}}</a></li>
                        @endforeach
                    </ul>
                @endif
                @if(setting('show_copyright'))
                    <p class="footer-small-text">{{setting('copyright_text')}}</p>
                @endif
            </div>
            <div class="col-xs-12 col-sm-12 footer-col">
                <p class="footer-head">Contact Us</p>
                <div class="row">
                    <div class="col-xs-12 col-sm-5">
                        <p class="list-header"><img src="images/heart-icon.png" alt=""> If you are getting married & need help</p>
                        <ul class="list-unstyled footer-contact-list">
                            @if(setting('support_email'))
                                <li>
                                    <a class="active" href="mailto:{{setting('support_email')}}"><i class="far fa-envelope"></i> support@wed.in</a>
                                </li>
                            @endif
                            @if(setting('support_telephone'))
                                <li>
                                    <a href="tel:{{setting('support_telephone')}}"><i class="fas fa-phone-alt"></i> {{setting('support_telephone')}}</a>
                                </li>
                            @endif
                        </ul>
                    </div>
                    <div class="col-xs-12 col-sm-5">
                        <p class="list-header"><img src="images/heart-icon.png" alt=""> If you are a wedding vendor & need help</p>
                        <ul class="list-unstyled footer-contact-list">
                            @if(setting('vendor_support_email'))
                                <li>
                                    <a href="mailto:{{setting('vendor_support_email')}}"><i class="far fa-envelope"></i> support@wed.in</a>
                                </li>
                            @endif
                            @if(setting('vendor_support_telephone'))
                                <li>
                                    <a href="tel:{{setting('vendor_support_telephone')}}"><i class="fas fa-phone-alt"></i> {{setting('vendor_support_telephone')}}</a>
                                </li>
                            @endif
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 footer-col">
                <p class="footer-head">Get Amazing Wedding Ideas</p>
                <p class="list-header"><img src="images/heart-icon.png" alt=""> Get Latest wedding blog updates</p>
                <div class="row">
                    <div class="col-xs-12 col-sm-4">
                        <form id="newsletterForm" action="">
                            <div class="input-group newsletter-group">
                                <input id="newsletterEmail" type="text" class="form-control" name="email" placeholder="Email">
                                <div class="input-group-append">
                                    <button class="btn btn-outline-secondary" type="submit"><i
                                            class="fas fa-check"></i></button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            @if(isset($types) && $types)
                <div class="col-xs-12 col-sm-12 footer-col">
                    <p class="footer-head">Wedding Vendors in over 100 cities</p>
                    @foreach($types as $type)
                        <div class="footer-list-col">
                            <p class="list-header strong"><img src="images/heart-icon.png" alt=""> {{$type->name}}</p>
                            <ul class="list-inline footer-color-list">
                                @if(isset($cities) && $cities)
                                    @foreach($cities as $city)
                                        <li class="list-inline-item">
                                            <a href="{{url($type->slug.'/'.$city->slug)}}">{{$type->name}} in {{$city->name}}</a>
                                        </li>
                                    @endforeach
                                @endif
                            </ul>
                        </div>
                    @endforeach
                </div>
            @endif

        </div>
    </div>
</footer>

@push('after-scripts')
    <script>
        $(document).ready(function(){
            $('#newsletterForm').submit(function(e){
                e.preventDefault();
                $.ajax({
                    type: 'POST',
                    url: "{{route('frontend.newsletter')}}",
                    data: {
                        '_token': "<?php echo csrf_token() ?>",
                        'email': $('#newsletterEmail').val()
                    },
                    success: function(res) {
                        if(res.success){
                            $('#newsletterForm').trigger('reset');
                            toastr.success(res.message, 'Subscribed Successfully!');
                        }else{
                            toastr.error(res.message, 'Error!');
                        }
                    }
                });
            });
        }); 
    </script>
@endpush
