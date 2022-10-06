<style type="text/css">

</style>
<footer id="footer" class="footer pt-5 pb-3  text-white overflow-hidden" style=" background: rgb(235, 10, 62);">
   <!-- <div class="pattern pattern-soft top"></div> -->
   <div class="container-fluid">
      <div class="row">
         <div class="col-12 col-sm-12 col-lg-12">
            <h5>{{ env('APP_NAME') }} - Your Personal Wedding Planner</h5>
            @if(setting('footer_about_us'))
            {!! setting('footer_about_us') !!}
            @endif
         </div>
      </div>
      <br>
      <!-- searches start -->
      <div class="main-selection-option">
         <div class="on-selection">
            <!-- vendor type start -->
            <div class="optional-vendr">
               <div class="rgst-vndr">
                  <a class="btn btn-primary" href="{{url('search-by-vendors')}}">Search By Vendor</a>
               </div>
            </div>
            <!-- vendor type end -->
            <div class="optional-vendr">
               <div class="rgst-vndr">
                  <a class="btn btn-primary" href="{{url('search-by-city')}}">Search By City</a>
               </div>
            </div>
            <!-- select city end -->
            <!-- register as a vendor start -->
            <div class="optional-vendr">
               <div class="rgst-vndr">
                  <a class="btn btn-primary" href="{{url('register')}}">Register Now</a>
               </div>
            </div>
            <!-- register as a vendor end -->
         </div>
      </div>
      <!-- searches end -->
      <div class="row">
         <div class="col-xs-12 col-sm-8 mb-lg-0  ">
            <p class="footer-brand mr-lg-5 d-flex"> Are you a vendor? </p>
            <p class="my-4">
               Sign up on {{ env('APP_NAME')}} to reach more couples and book more weddings!
            </p>
            <a target="_blank" rel="noopener" href="#" class="strt">Start Here <i class="fa fa-arrow-right"></i></a>
            <h6>Contact us to get best deals</h6>
            <p class="font-small">{{ env('MAIL_FROM_ADDRESS')}}</p>
            <p class="font-small">+91 9888898888</p>
            <h6>Get Latest Blog Alerts</h6>
            <form id="newsletterForm" action="">
               <div class="input-group newsletter-group" style="background: white;">
                  <input id="newsletterEmail" type="text" class="form-control" name="email" placeholder="Email">
                  <div class="input-group-append" style="background: white;">
                     <button class="btn btn-outline-secondary" style="background:#E4E4E4;" type="submit"><i class="fas fa-check" style="color: rgb(235, 10, 62);"></i></button>
                  </div>
               </div>
            </form>
         </div>
         <div class="col-lg-4  footer-col">
            <p class="footer-brand mr-lg-5 d-flex"> Follow us for more ideas & fun</p>
          
            @if(setting('facebook_url'))
            <a href="{{setting('facebook_url')}}" target="_blank">
               <div class="button">
                  <div class="icon">
                     <i class="fab fa-facebook-f"></i>
                  </div>
                  <span>@wed.in</span>
               </div>
               <span class="scl">Facebook</span>
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
               <span class="scl">Twitter</span>
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
               <span class="scl">Pintrest</span>
            </a>
            @endif
            @if(setting('instagram_url'))
            <a href="{{setting('instagram_url')}}" target="_blank">
               <div class="button">
                  <div class="icon">
                     <i class="fab fa-instagram"></i>
                  </div>
                  <span>@wed.in</span>
               </div>
               <span class="scl">Instagram</span>
            </a>
            @endif
            <!-- @if(setting('linkedin_url'))
            <a href="{{setting('linkedin_url')}}" target="_blank">
               <div class="button">
                  <div class="icon">
                     <i class="fab fa-linkedin"></i>
                  </div>
                  <span>@wed.in</span>
               </div>
               <span class="scl">Linked in</span>
            </a>
            @endif -->
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
      </div>
      <br>
      <div class="row">
         <div class="col-12 col-sm-8 col-lg-8">
         </div>
         <div class="col-6 col-sm-4 col-lg-4  mb-lg-0 text-left">
         </div>
      </div>
      <hr style="background: #ddd;">
      <div class="row">
         <div class="col-6 col-sm-3 mb-4 mb-lg-0 text-left">
            <?php
            $start_planning = dynamic_menu('menutype', 'url', 'start-planning');
            $wedding_ideas = dynamic_menu('menutype', 'url', 'wedding-ideas');
            $photo_gallery = dynamic_menu('menutype', 'url', 'photo-gallery');
            $pages_menu = dynamic_menu('menutype', 'url', 'pages');
            ?>
            <h6>
               Start Planning
            </h6>
            <ul class="links-vertical">
               @foreach($start_planning as $menu_item)
               <li><a target="_blank" href="{{$menu_item->url}}">{{$menu_item->title}}</a></li>
               @endforeach
               <!-- <li><a target="_blank" href="#">Search By City</a></li>
               <li><a target="_blank" href="#">Top Rated Vendors</a></li>
               <li><a target="_blank" href="#">Destination Wedding</a></li> -->
            </ul>
         </div>
         <div class="col-6 col-sm-3 mb-4 mb-lg-0 text-left">
            <h6>
               Wedding Ideas
            </h6>
            <ul class="links-vertical">
               @foreach($wedding_ideas as $menu_item)
               <li><a target="_blank" href="{{$menu_item->url}}">{{$menu_item->title}}</a></li>
               @endforeach
               <!-- <li><a target="_blank" href="#">Wedding Inspiration Gallery</a></li>
               <li><a target="_blank" href="#">Real Wedding</a></li>
               <li><a target="_blank" href="#">Submit Wedding</a></li> -->
            </ul>
         </div>
         <div class="col-6 col-sm-3 mb-4 mb-lg-0 text-left">
            <h6>
               Photo Gallery
            </h6>
            <ul class="links-vertical">
               @foreach($photo_gallery as $menu_item)
               <li><a target="_blank" href="{{$menu_item->url}}">{{$menu_item->title}}</a></li>
               @endforeach
               <!-- <li><a target="_blank" href="#">Wedding Jewellery</a></li>
               <li><a target="_blank" href="#">Bridal Makeup</a></li>
               <li><a target="_blank" href="#">Wedding Decor</a></li>
               <li><a target="_blank" href="#">Wedding Photography</a></li>
               <li><a target="_blank" href="#">Groom Wear</a></li>
               <li><a target="_blank" href="#">Wedding Accessories</a></li>
               <li><a target="_blank" href="#">Mehendi Designs</a></li> -->
            </ul>
         </div>
         <div class="col-6 col-sm-3 mb-4 mb-lg-0 text-left">
            <h6>
               Pages
            </h6>
            <ul class="links-vertical">
               @foreach($pages_menu as $menu_item)
               <li><a target="_blank" href="{{$menu_item->url}}">{{$menu_item->title}}</a></li>
               @endforeach
               <!-- <li><a target="_blank" href="#">Themes</a></li>
               <li><a target="_blank" href="#">Support</a></li>
               <li><a target="_blank" href="#">Contact Us</a></li> -->
            </ul>
         </div>
      </div>
      <hr style="background: #ddd;">
      <div class="row">
         <div class="col mb-md-0">
            <div class="d-flex text-center justify-content-center align-items-center">
               <p class="font-weight-normal mb-0">
                  © {{date('Y')}} <a href="{{ env('APP_URL')}}">{{ env('APP_NAME')}}</a>
               </p>
            </div>
         </div>
      </div>
   </div>
</footer>
@push('after-scripts')
<script>
   $(document).ready(function() {
      $('#newsletterForm').submit(function(e) {
         e.preventDefault();
         $.ajax({
            type: 'POST',
            url: "{{route('frontend.newsletter')}}",
            data: {
               '_token': "<?php echo csrf_token() ?>",
               'email': $('#newsletterEmail').val()
            },
            success: function(res) {
               if (res.success) {
                  $('#newsletterForm').trigger('reset');
                  toastr.success(res.message, 'Subscribed Successfully!');
               } else {
                  toastr.error(res.message, 'Error!');
               }
            }
         });
      });
   });
</script>
@endpush