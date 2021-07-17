<footer id="footer">
    <div class="container-fluid">
        <div class="row">
            <div class="col-xs-12 col-sm-12 footer-col">
                <p class="footer-head">Follow us for more ideas & fun</p>
                <ul class="list-inline">
                    @if(setting('instagram_url'))
                        <li class="list-inline-item">
                            <a href="{{setting('instagram_url')}}">
                                <img src="{{asset('images/i-btn.png')}}" alt="" class="img-fluid">
                            </a>
                        </li>
                    @endif
                    @if(setting('facebook_url'))
                        <li class="list-inline-item">
                            <a href="{{setting('facebook_url')}}"><img src="{{asset('images/f-btn.png')}}" alt="" class="img-fluid"></a>
                        </li>
                    @endif
                    @if(setting('pinterest_url'))
                        <li class="list-inline-item">
                            <a href="{{setting('pinterest_url')}}"><img src="{{asset('images/p-btn.png')}}" alt="" class="img-fluid"></a>
                        </li>
                    @endif
                </ul>
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
                <ul class="list-inline footer-color-list">
                    <li class="list-inline-item">
                        <a href="#">About Us</a>
                    </li>
                    <li class="list-inline-item">
                        <a href="#">Careers</a>
                    </li>
                    <li class="list-inline-item">
                        <a href="#">Contact Us</a>
                    </li>
                    <li class="list-inline-item">
                        <a href="#">Privacy Policy</a>
                    </li>
                    <li class="list-inline-item">
                        <a href="#">Sitemap</a>
                    </li>
                    <li class="list-inline-item">
                        <a href="#">Terms & Conditions</a>
                    </li>
                    <li class="list-inline-item">
                        <a href="#">Wedding Guest Post</a>
                    </li>
                </ul>
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
            <div class="col-xs-12 col-sm-12 footer-col">
                <p class="footer-head">Wedding Vendors in over 100 cities</p>
                <div class="footer-list-col">
                    <p class="list-header strong"><img src="images/heart-icon.png" alt=""> Wedding Photographers</p>
                    <ul class="list-inline footer-color-list">
                        <li class="list-inline-item">
                            <a href="#">Wedding Photographers</a>
                        </li>
                        <li class="list-inline-item">
                            <a href="#">Wedding Photographers in Delhi NCR</a>
                        </li>
                        <li class="list-inline-item">
                            <a href="#">Wedding Photographers in Mumbai</a>
                        </li>
                        <li class="list-inline-item">
                            <a href="#">Wedding Photographers in Chennai</a>
                        </li>
                        <li class="list-inline-item">
                            <a href="#">Wedding Photographers in Banglore</a>
                        </li>
                        <li class="list-inline-item">
                            <a href="#">Wedding Photographers in Hyderabad</a>
                        </li>
                        <li class="list-inline-item">
                            <a href="#">Wedding Photographers in Chandigarh</a>
                        </li>
                        <li class="list-inline-item">
                            <a href="#">Wedding Photographers in Kolkata</a>
                        </li>
                        <li class="list-inline-item">
                            <a href="#">Wedding Photographers in Kerala</a>
                        </li>
                        <li class="list-inline-item">
                            <a href="#">Engagement Shoot in Delhi NCR</a>
                        </li>
                        <li class="list-inline-item">
                            <a href="#">Engagement Shoot in Mumbai</a>
                        </li>
                        <li class="list-inline-item">
                            <a href="#">Engagement Shoot in Chennai</a>
                        </li>
                        <li class="list-inline-item">
                            <a href="#">Engagement Shoot in Banglore</a>
                        </li>
                        <li class="list-inline-item">
                            <a href="#">Engagement Shoot in Hyderabad</a>
                        </li>
                        <li class="list-inline-item">
                            <a href="#">Engagement Shoot in Chandigarh</a>
                        </li>
                        <li class="list-inline-item">
                            <a href="#">Engagement Shoot in Kolkata</a>
                        </li>
                        <li class="list-inline-item">
                            <a href="#">Engagement Shoot in Kerala</a>
                        </li>
                        <li class="list-inline-item">
                            <a href="#">Pre-Wedding Shoot in Delhi NCR</a>
                        </li>
                        <li class="list-inline-item">
                            <a href="#">Pre-Wedding Shoot in Mumbai</a>
                        </li>
                        <li class="list-inline-item">
                            <a href="#">Pre-Wedding Shoot in Chennai</a>
                        </li>
                        <li class="list-inline-item">
                            <a href="#">Pre-Wedding Shoot in Banglore</a>
                        </li>
                        <li class="list-inline-item">
                            <a href="#">Pre-Wedding Shoot in Hyderabad</a>
                        </li>
                        <li class="list-inline-item">
                            <a href="#">Pre-Wedding Shoot in Chandigarh</a>
                        </li>
                        <li class="list-inline-item">
                            <a href="#">Pre-Wedding Shoot in Kolkata</a>
                        </li>
                        <li class="list-inline-item">
                            <a href="#">Pre-Wedding Shoot in Kerala</a>
                        </li>
                    </ul>
                </div>
                <div class="footer-list-col">
                    <p class="list-header strong"><img src="images/heart-icon.png" alt=""> Wedding Planners</p>
                    <ul class="list-inline footer-color-list">
                        <li class="list-inline-item">
                            <a href="#">Wedding Photographers</a>
                        </li>
                        <li class="list-inline-item">
                            <a href="#">Wedding Photographers in Delhi NCR</a>
                        </li>
                        <li class="list-inline-item">
                            <a href="#">Wedding Photographers in Mumbai</a>
                        </li>
                        <li class="list-inline-item">
                            <a href="#">Wedding Photographers in Chennai</a>
                        </li>
                        <li class="list-inline-item">
                            <a href="#">Wedding Photographers in Banglore</a>
                        </li>
                        <li class="list-inline-item">
                            <a href="#">Wedding Photographers in Hyderabad</a>
                        </li>
                        <li class="list-inline-item">
                            <a href="#">Wedding Photographers in Chandigarh</a>
                        </li>
                        <li class="list-inline-item">
                            <a href="#">Wedding Photographers in Kolkata</a>
                        </li>
                        <li class="list-inline-item">
                            <a href="#">Wedding Photographers in Kerala</a>
                        </li>
                        <li class="list-inline-item">
                            <a href="#">Engagement Shoot in Delhi NCR</a>
                        </li>
                        <li class="list-inline-item">
                            <a href="#">Engagement Shoot in Mumbai</a>
                        </li>
                        <li class="list-inline-item">
                            <a href="#">Engagement Shoot in Chennai</a>
                        </li>
                        <li class="list-inline-item">
                            <a href="#">Engagement Shoot in Banglore</a>
                        </li>
                        <li class="list-inline-item">
                            <a href="#">Engagement Shoot in Hyderabad</a>
                        </li>
                        <li class="list-inline-item">
                            <a href="#">Engagement Shoot in Chandigarh</a>
                        </li>
                        <li class="list-inline-item">
                            <a href="#">Engagement Shoot in Kolkata</a>
                        </li>
                        <li class="list-inline-item">
                            <a href="#">Engagement Shoot in Kerala</a>
                        </li>
                        <li class="list-inline-item">
                            <a href="#">Pre-Wedding Shoot in Delhi NCR</a>
                        </li>
                        <li class="list-inline-item">
                            <a href="#">Pre-Wedding Shoot in Mumbai</a>
                        </li>
                        <li class="list-inline-item">
                            <a href="#">Pre-Wedding Shoot in Chennai</a>
                        </li>
                        <li class="list-inline-item">
                            <a href="#">Pre-Wedding Shoot in Banglore</a>
                        </li>
                        <li class="list-inline-item">
                            <a href="#">Pre-Wedding Shoot in Hyderabad</a>
                        </li>
                        <li class="list-inline-item">
                            <a href="#">Pre-Wedding Shoot in Chandigarh</a>
                        </li>
                        <li class="list-inline-item">
                            <a href="#">Pre-Wedding Shoot in Kolkata</a>
                        </li>
                        <li class="list-inline-item">
                            <a href="#">Pre-Wedding Shoot in Kerala</a>
                        </li>
                    </ul>
                </div>
                <div class="footer-list-col">
                    <p class="list-header strong"><img src="images/heart-icon.png" alt=""> Bridal Makeup Artists</p>
                    <ul class="list-inline footer-color-list">
                        <li class="list-inline-item">
                            <a href="#">Wedding Photographers</a>
                        </li>
                        <li class="list-inline-item">
                            <a href="#">Wedding Photographers in Delhi NCR</a>
                        </li>
                        <li class="list-inline-item">
                            <a href="#">Wedding Photographers in Mumbai</a>
                        </li>
                        <li class="list-inline-item">
                            <a href="#">Wedding Photographers in Chennai</a>
                        </li>
                        <li class="list-inline-item">
                            <a href="#">Wedding Photographers in Banglore</a>
                        </li>
                        <li class="list-inline-item">
                            <a href="#">Wedding Photographers in Hyderabad</a>
                        </li>
                        <li class="list-inline-item">
                            <a href="#">Wedding Photographers in Chandigarh</a>
                        </li>
                        <li class="list-inline-item">
                            <a href="#">Wedding Photographers in Kolkata</a>
                        </li>
                        <li class="list-inline-item">
                            <a href="#">Wedding Photographers in Kerala</a>
                        </li>
                        <li class="list-inline-item">
                            <a href="#">Engagement Shoot in Delhi NCR</a>
                        </li>
                        <li class="list-inline-item">
                            <a href="#">Engagement Shoot in Mumbai</a>
                        </li>
                        <li class="list-inline-item">
                            <a href="#">Engagement Shoot in Chennai</a>
                        </li>
                        <li class="list-inline-item">
                            <a href="#">Engagement Shoot in Banglore</a>
                        </li>
                        <li class="list-inline-item">
                            <a href="#">Engagement Shoot in Hyderabad</a>
                        </li>
                        <li class="list-inline-item">
                            <a href="#">Engagement Shoot in Chandigarh</a>
                        </li>
                        <li class="list-inline-item">
                            <a href="#">Engagement Shoot in Kolkata</a>
                        </li>
                        <li class="list-inline-item">
                            <a href="#">Engagement Shoot in Kerala</a>
                        </li>
                        <li class="list-inline-item">
                            <a href="#">Pre-Wedding Shoot in Delhi NCR</a>
                        </li>
                        <li class="list-inline-item">
                            <a href="#">Pre-Wedding Shoot in Mumbai</a>
                        </li>
                        <li class="list-inline-item">
                            <a href="#">Pre-Wedding Shoot in Chennai</a>
                        </li>
                        <li class="list-inline-item">
                            <a href="#">Pre-Wedding Shoot in Banglore</a>
                        </li>
                        <li class="list-inline-item">
                            <a href="#">Pre-Wedding Shoot in Hyderabad</a>
                        </li>
                        <li class="list-inline-item">
                            <a href="#">Pre-Wedding Shoot in Chandigarh</a>
                        </li>
                        <li class="list-inline-item">
                            <a href="#">Pre-Wedding Shoot in Kolkata</a>
                        </li>
                        <li class="list-inline-item">
                            <a href="#">Pre-Wedding Shoot in Kerala</a>
                        </li>
                    </ul>
                </div>
                <div class="footer-list-col">
                    <p class="list-header strong"><img src="images/heart-icon.png" alt=""> Wedding Venues</p>
                    <ul class="list-inline footer-color-list">
                        <li class="list-inline-item">
                            <a href="#">Wedding Photographers</a>
                        </li>
                        <li class="list-inline-item">
                            <a href="#">Wedding Photographers in Delhi NCR</a>
                        </li>
                        <li class="list-inline-item">
                            <a href="#">Wedding Photographers in Mumbai</a>
                        </li>
                        <li class="list-inline-item">
                            <a href="#">Wedding Photographers in Chennai</a>
                        </li>
                        <li class="list-inline-item">
                            <a href="#">Wedding Photographers in Banglore</a>
                        </li>
                        <li class="list-inline-item">
                            <a href="#">Wedding Photographers in Hyderabad</a>
                        </li>
                        <li class="list-inline-item">
                            <a href="#">Wedding Photographers in Chandigarh</a>
                        </li>
                        <li class="list-inline-item">
                            <a href="#">Wedding Photographers in Kolkata</a>
                        </li>
                        <li class="list-inline-item">
                            <a href="#">Wedding Photographers in Kerala</a>
                        </li>
                        <li class="list-inline-item">
                            <a href="#">Engagement Shoot in Delhi NCR</a>
                        </li>
                        <li class="list-inline-item">
                            <a href="#">Engagement Shoot in Mumbai</a>
                        </li>
                        <li class="list-inline-item">
                            <a href="#">Engagement Shoot in Chennai</a>
                        </li>
                        <li class="list-inline-item">
                            <a href="#">Engagement Shoot in Banglore</a>
                        </li>
                        <li class="list-inline-item">
                            <a href="#">Engagement Shoot in Hyderabad</a>
                        </li>
                        <li class="list-inline-item">
                            <a href="#">Engagement Shoot in Chandigarh</a>
                        </li>
                        <li class="list-inline-item">
                            <a href="#">Engagement Shoot in Kolkata</a>
                        </li>
                        <li class="list-inline-item">
                            <a href="#">Engagement Shoot in Kerala</a>
                        </li>
                        <li class="list-inline-item">
                            <a href="#">Pre-Wedding Shoot in Delhi NCR</a>
                        </li>
                        <li class="list-inline-item">
                            <a href="#">Pre-Wedding Shoot in Mumbai</a>
                        </li>
                        <li class="list-inline-item">
                            <a href="#">Pre-Wedding Shoot in Chennai</a>
                        </li>
                        <li class="list-inline-item">
                            <a href="#">Pre-Wedding Shoot in Banglore</a>
                        </li>
                        <li class="list-inline-item">
                            <a href="#">Pre-Wedding Shoot in Hyderabad</a>
                        </li>
                        <li class="list-inline-item">
                            <a href="#">Pre-Wedding Shoot in Chandigarh</a>
                        </li>
                        <li class="list-inline-item">
                            <a href="#">Pre-Wedding Shoot in Kolkata</a>
                        </li>
                        <li class="list-inline-item">
                            <a href="#">Pre-Wedding Shoot in Kerala</a>
                        </li>
                    </ul>
                </div>
                <div class="footer-list-col">
                    <p class="list-header strong"><img src="{{asset('images/heart-icon.png')}}" alt=""> Wedding Decorators</p>
                    <ul class="list-inline footer-color-list">
                        <li class="list-inline-item">
                            <a href="#">Wedding Photographers</a>
                        </li>
                        <li class="list-inline-item">
                            <a href="#">Wedding Photographers in Delhi NCR</a>
                        </li>
                        <li class="list-inline-item">
                            <a href="#">Wedding Photographers in Mumbai</a>
                        </li>
                        <li class="list-inline-item">
                            <a href="#">Wedding Photographers in Chennai</a>
                        </li>
                        <li class="list-inline-item">
                            <a href="#">Wedding Photographers in Banglore</a>
                        </li>
                        <li class="list-inline-item">
                            <a href="#">Wedding Photographers in Hyderabad</a>
                        </li>
                        <li class="list-inline-item">
                            <a href="#">Wedding Photographers in Chandigarh</a>
                        </li>
                        <li class="list-inline-item">
                            <a href="#">Wedding Photographers in Kolkata</a>
                        </li>
                        <li class="list-inline-item">
                            <a href="#">Wedding Photographers in Kerala</a>
                        </li>
                        <li class="list-inline-item">
                            <a href="#">Engagement Shoot in Delhi NCR</a>
                        </li>
                        <li class="list-inline-item">
                            <a href="#">Engagement Shoot in Mumbai</a>
                        </li>
                        <li class="list-inline-item">
                            <a href="#">Engagement Shoot in Chennai</a>
                        </li>
                        <li class="list-inline-item">
                            <a href="#">Engagement Shoot in Banglore</a>
                        </li>
                        <li class="list-inline-item">
                            <a href="#">Engagement Shoot in Hyderabad</a>
                        </li>
                        <li class="list-inline-item">
                            <a href="#">Engagement Shoot in Chandigarh</a>
                        </li>
                        <li class="list-inline-item">
                            <a href="#">Engagement Shoot in Kolkata</a>
                        </li>
                        <li class="list-inline-item">
                            <a href="#">Engagement Shoot in Kerala</a>
                        </li>
                        <li class="list-inline-item">
                            <a href="#">Pre-Wedding Shoot in Delhi NCR</a>
                        </li>
                        <li class="list-inline-item">
                            <a href="#">Pre-Wedding Shoot in Mumbai</a>
                        </li>
                        <li class="list-inline-item">
                            <a href="#">Pre-Wedding Shoot in Chennai</a>
                        </li>
                        <li class="list-inline-item">
                            <a href="#">Pre-Wedding Shoot in Banglore</a>
                        </li>
                        <li class="list-inline-item">
                            <a href="#">Pre-Wedding Shoot in Hyderabad</a>
                        </li>
                        <li class="list-inline-item">
                            <a href="#">Pre-Wedding Shoot in Chandigarh</a>
                        </li>
                        <li class="list-inline-item">
                            <a href="#">Pre-Wedding Shoot in Kolkata</a>
                        </li>
                        <li class="list-inline-item">
                            <a href="#">Pre-Wedding Shoot in Kerala</a>
                        </li>
                    </ul>
                </div>
                <div class="footer-list-col">
                    <p class="list-header strong"><img src="{{asset('images/heart-icon.png')}}" alt=""> Wedding Video graphers
                    </p>
                    <ul class="list-inline footer-color-list">
                        <li class="list-inline-item">
                            <a href="#">Wedding Photographers</a>
                        </li>
                        <li class="list-inline-item">
                            <a href="#">Wedding Photographers in Delhi NCR</a>
                        </li>
                        <li class="list-inline-item">
                            <a href="#">Wedding Photographers in Mumbai</a>
                        </li>
                        <li class="list-inline-item">
                            <a href="#">Wedding Photographers in Chennai</a>
                        </li>
                        <li class="list-inline-item">
                            <a href="#">Wedding Photographers in Banglore</a>
                        </li>
                        <li class="list-inline-item">
                            <a href="#">Wedding Photographers in Hyderabad</a>
                        </li>
                        <li class="list-inline-item">
                            <a href="#">Wedding Photographers in Chandigarh</a>
                        </li>
                        <li class="list-inline-item">
                            <a href="#">Wedding Photographers in Kolkata</a>
                        </li>
                        <li class="list-inline-item">
                            <a href="#">Wedding Photographers in Kerala</a>
                        </li>
                        <li class="list-inline-item">
                            <a href="#">Engagement Shoot in Delhi NCR</a>
                        </li>
                        <li class="list-inline-item">
                            <a href="#">Engagement Shoot in Mumbai</a>
                        </li>
                        <li class="list-inline-item">
                            <a href="#">Engagement Shoot in Chennai</a>
                        </li>
                        <li class="list-inline-item">
                            <a href="#">Engagement Shoot in Banglore</a>
                        </li>
                        <li class="list-inline-item">
                            <a href="#">Engagement Shoot in Hyderabad</a>
                        </li>
                        <li class="list-inline-item">
                            <a href="#">Engagement Shoot in Chandigarh</a>
                        </li>
                        <li class="list-inline-item">
                            <a href="#">Engagement Shoot in Kolkata</a>
                        </li>
                        <li class="list-inline-item">
                            <a href="#">Engagement Shoot in Kerala</a>
                        </li>
                        <li class="list-inline-item">
                            <a href="#">Pre-Wedding Shoot in Delhi NCR</a>
                        </li>
                        <li class="list-inline-item">
                            <a href="#">Pre-Wedding Shoot in Mumbai</a>
                        </li>
                        <li class="list-inline-item">
                            <a href="#">Pre-Wedding Shoot in Chennai</a>
                        </li>
                        <li class="list-inline-item">
                            <a href="#">Pre-Wedding Shoot in Banglore</a>
                        </li>
                        <li class="list-inline-item">
                            <a href="#">Pre-Wedding Shoot in Hyderabad</a>
                        </li>
                        <li class="list-inline-item">
                            <a href="#">Pre-Wedding Shoot in Chandigarh</a>
                        </li>
                        <li class="list-inline-item">
                            <a href="#">Pre-Wedding Shoot in Kolkata</a>
                        </li>
                        <li class="list-inline-item">
                            <a href="#">Pre-Wedding Shoot in Kerala</a>
                        </li>
                    </ul>
                </div>
                <div class="footer-list-col">
                    <p class="list-header strong"><img src="images/heart-icon.png" alt=""> Mehndi Artists</p>
                    <ul class="list-inline footer-color-list">
                        <li class="list-inline-item">
                            <a href="#">Wedding Photographers</a>
                        </li>
                        <li class="list-inline-item">
                            <a href="#">Wedding Photographers in Delhi NCR</a>
                        </li>
                        <li class="list-inline-item">
                            <a href="#">Wedding Photographers in Mumbai</a>
                        </li>
                        <li class="list-inline-item">
                            <a href="#">Wedding Photographers in Chennai</a>
                        </li>
                        <li class="list-inline-item">
                            <a href="#">Wedding Photographers in Banglore</a>
                        </li>
                        <li class="list-inline-item">
                            <a href="#">Wedding Photographers in Hyderabad</a>
                        </li>
                        <li class="list-inline-item">
                            <a href="#">Wedding Photographers in Chandigarh</a>
                        </li>
                        <li class="list-inline-item">
                            <a href="#">Wedding Photographers in Kolkata</a>
                        </li>
                        <li class="list-inline-item">
                            <a href="#">Wedding Photographers in Kerala</a>
                        </li>
                        <li class="list-inline-item">
                            <a href="#">Engagement Shoot in Delhi NCR</a>
                        </li>
                        <li class="list-inline-item">
                            <a href="#">Engagement Shoot in Mumbai</a>
                        </li>
                        <li class="list-inline-item">
                            <a href="#">Engagement Shoot in Chennai</a>
                        </li>
                        <li class="list-inline-item">
                            <a href="#">Engagement Shoot in Banglore</a>
                        </li>
                        <li class="list-inline-item">
                            <a href="#">Engagement Shoot in Hyderabad</a>
                        </li>
                        <li class="list-inline-item">
                            <a href="#">Engagement Shoot in Chandigarh</a>
                        </li>
                        <li class="list-inline-item">
                            <a href="#">Engagement Shoot in Kolkata</a>
                        </li>
                        <li class="list-inline-item">
                            <a href="#">Engagement Shoot in Kerala</a>
                        </li>
                        <li class="list-inline-item">
                            <a href="#">Pre-Wedding Shoot in Delhi NCR</a>
                        </li>
                        <li class="list-inline-item">
                            <a href="#">Pre-Wedding Shoot in Mumbai</a>
                        </li>
                        <li class="list-inline-item">
                            <a href="#">Pre-Wedding Shoot in Chennai</a>
                        </li>
                        <li class="list-inline-item">
                            <a href="#">Pre-Wedding Shoot in Banglore</a>
                        </li>
                        <li class="list-inline-item">
                            <a href="#">Pre-Wedding Shoot in Hyderabad</a>
                        </li>
                        <li class="list-inline-item">
                            <a href="#">Pre-Wedding Shoot in Chandigarh</a>
                        </li>
                        <li class="list-inline-item">
                            <a href="#">Pre-Wedding Shoot in Kolkata</a>
                        </li>
                        <li class="list-inline-item">
                            <a href="#">Pre-Wedding Shoot in Kerala</a>
                        </li>
                    </ul>
                </div>
                <div class="footer-list-col">
                    <p class="list-header strong"><img src="images/heart-icon.png" alt=""> Pre Wedding Shoot</p>
                    <ul class="list-inline footer-color-list">
                        <li class="list-inline-item">
                            <a href="#">Wedding Photographers</a>
                        </li>
                        <li class="list-inline-item">
                            <a href="#">Wedding Photographers in Delhi NCR</a>
                        </li>
                        <li class="list-inline-item">
                            <a href="#">Wedding Photographers in Mumbai</a>
                        </li>
                        <li class="list-inline-item">
                            <a href="#">Wedding Photographers in Chennai</a>
                        </li>
                        <li class="list-inline-item">
                            <a href="#">Wedding Photographers in Banglore</a>
                        </li>
                        <li class="list-inline-item">
                            <a href="#">Wedding Photographers in Hyderabad</a>
                        </li>
                        <li class="list-inline-item">
                            <a href="#">Wedding Photographers in Chandigarh</a>
                        </li>
                        <li class="list-inline-item">
                            <a href="#">Wedding Photographers in Kolkata</a>
                        </li>
                        <li class="list-inline-item">
                            <a href="#">Wedding Photographers in Kerala</a>
                        </li>
                        <li class="list-inline-item">
                            <a href="#">Engagement Shoot in Delhi NCR</a>
                        </li>
                        <li class="list-inline-item">
                            <a href="#">Engagement Shoot in Mumbai</a>
                        </li>
                        <li class="list-inline-item">
                            <a href="#">Engagement Shoot in Chennai</a>
                        </li>
                        <li class="list-inline-item">
                            <a href="#">Engagement Shoot in Banglore</a>
                        </li>
                        <li class="list-inline-item">
                            <a href="#">Engagement Shoot in Hyderabad</a>
                        </li>
                        <li class="list-inline-item">
                            <a href="#">Engagement Shoot in Chandigarh</a>
                        </li>
                        <li class="list-inline-item">
                            <a href="#">Engagement Shoot in Kolkata</a>
                        </li>
                        <li class="list-inline-item">
                            <a href="#">Engagement Shoot in Kerala</a>
                        </li>
                        <li class="list-inline-item">
                            <a href="#">Pre-Wedding Shoot in Delhi NCR</a>
                        </li>
                        <li class="list-inline-item">
                            <a href="#">Pre-Wedding Shoot in Mumbai</a>
                        </li>
                        <li class="list-inline-item">
                            <a href="#">Pre-Wedding Shoot in Chennai</a>
                        </li>
                        <li class="list-inline-item">
                            <a href="#">Pre-Wedding Shoot in Banglore</a>
                        </li>
                        <li class="list-inline-item">
                            <a href="#">Pre-Wedding Shoot in Hyderabad</a>
                        </li>
                        <li class="list-inline-item">
                            <a href="#">Pre-Wedding Shoot in Chandigarh</a>
                        </li>
                        <li class="list-inline-item">
                            <a href="#">Pre-Wedding Shoot in Kolkata</a>
                        </li>
                        <li class="list-inline-item">
                            <a href="#">Pre-Wedding Shoot in Kerala</a>
                        </li>
                    </ul>
                </div>
            </div>
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
