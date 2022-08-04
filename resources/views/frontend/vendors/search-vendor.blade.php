@extends('frontend.layouts.app')
@section('title') {{app_name()}} @endsection

@section('content')

<section id="page-banner" class="page-banner-height">
   <div class="container-fluid">
         <div class="row">
            <div class="banner-container">
               <img src="/storage/files/vendor-banner.jpg" alt="" class="img-fluid">
               <div class="banner-search-col">
                     <div class="search-header">
                     <br>
                     <br>
                        <p class="text">Search By Vendor</p>
                     </div>
               </div>
               <div class="container-fluid">
                     <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                           <li class="breadcrumb-item"><a href="/">Home</a></li>
                           <li class="breadcrumb-item active" aria-current="page">Search By Vendor</li>
                        </ol>
                     </nav>
               </div>
            </div>
         </div>
   </div>
</section>
<br>
<br>


<section id="vendor-detail-section">
   <div class="container-fluid">
      <div class=" vendor-detail-main-col">
            @foreach($types as $type)
            @php $vendors = isset($type_vendors[$type['id']])?  $type_vendors[$type['id']] : array() ;  @endphp
               @if($vendors)
                  <div class="container ol-crsl">
                        <div class="thumb-img">
                           @php
                              $vendor_profile_icon_img = '';
                              if($type['icon']){
                                    if(file_exists( public_path().'/storage/vendor/icon/'. $type['icon'] )){
                                       $vendor_profile_icon_img = asset('storage/vendor/icon/'.$type['icon']);
                                    }
                              }
                           @endphp
                           @if($vendor_profile_icon_img)
                           <img src="{{ $vendor_profile_icon_img }}" alt="">
                           @endif
                        </div>
                        <h2>Top {{$type['name']}} in All Indian Cities</h2>
                        <span>To improve these suggestions - <a href="#">Fill Requirements for {{$type['name']}}</a></span>
                        <div class="owl-carousel owl-theme owl-loaded common-slider owl-drag ">
                           <div class="owl-stage-outer">
                              <div class="owl-stage" style="transform: translate3d(-1527px, 0px, 0px); transition: all 0.25s ease 0s; width: 3334px;">
                                    @foreach($vendors as $vendor)
                                    <div class="owl-item cloned" style="width: 128.906px; margin-right: 10px;">
                                    @php $city = getData('cities', 'id', $vendor['city_id']);    @endphp
                                                <a href="{{url('/') . '/' . $type['slug'] . '/' . $city->slug . '/' . $vendor['slug'] }}">
                                                   <div class="item">
                                                   @php
                                                      $vendor_profile_img = asset('img/default-vendor.jpg');
                                                      if($vendor['image']){
                                                            if(file_exists( public_path().'/storage/vendor/profile/'. $vendor['image'] )){
                                                               $vendor_profile_img = asset('storage/vendor/profile/'.$vendor['image']);
                                                            }
                                                      }
                                                   @endphp
                                                   <img src="{{$vendor_profile_img}}" alt="">
                                                   <div class="carousel-content">
                                                      <h5>{{$vendor['business_name']}}</h5>
                                                      <p><span>₹</span> {{$vendor['price']}}</p>
                                                   <span class="days"> {{$vendor['label']}}</span>
                                                   </div> 

                                                   </div>
                                                </a>
                                       </div>
                                    @endforeach
                              </div>
                           </div>   
                           <div class="owl-nav"><button type="button" role="presentation" class="owl-prev"><span aria-label="Previous">‹</span></button><button type="button" role="presentation" class="owl-next disabled"><span aria-label="Next">›</span></button></div>
                           <div class="owl-nav enable"></div>
                        </div>
                  </div>
                  <br>
                  <br>
               @endif
            @endforeach
      </div>
   </div>
</section>

@endsection

@push('after-styles')
<style>
   .owl-item {width: 128.906px; margin-right: 10px; background:powderblue; }
</style>
@endpush
@push('before-scripts')
<script src="https://owlcarousel2.github.io/OwlCarousel2/assets/vendors/jquery.min.js"></script>
<script>
   $(document).ready(function(){
     var owl = $('.owl-carousel');
   owl.owlCarousel({
       items:4.1, 
     // items change number for slider display on desktop
        dots:false,
        nav:true,
         navText: ["<i class='fas fa-arrow-left'></i>", "<i class='fas fa-arrow-right'></i>"],
       loop:true,
       margin:5,
       // autoplay:true,
       // autoplayTimeout:3000,
       autoplayHoverPause:true
   });


   });
</script>

@endpush