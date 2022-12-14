@extends('frontend.layouts.app')
@section('title') {{app_name()}} @endsection

@section('content')

<!-- page-banner-height -->
<section id="page-banner" class="">
   <div class="container-fluid">
      <div class="row">
         <!-- here -->
         <div class="banner-container">
            <div class="vendor-img">
               <!-- /storage/files/vendor-banner-min.jpg -->
               <img src="/storage/files/vendor-banner-min.jpg" alt="image alt" class="img-fluid filter-cls margin-img-auto">
               <div class="banner-search-col">
                  <div class="search-header">
                     <p class="text">Search By Vendor</p>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>

<section id="breadcrumb-sec">
   <div class="container-fluid">
      <nav aria-label="breadcrumb">
         <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="/">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Search By Vendor</li>
         </ol>
      </nav>
   </div>
</section>

<section id="vendor-detail-section">
   <div class="container-fluid">
      <div class=" vendor-detail-main-col">
         @foreach($types as $type)
         @php $vendors = isset($type_vendors[$type['id']])? $type_vendors[$type['id']] : array() ; @endphp
         @if($vendors)
         <div class="container-fluid ol-crsl padding-null">
            <div class="thumb-img">
               <img src="{{asset('storage/type/icon/'.$type['icon'])}}" alt="image alt">
            </div>

            <h2>Top {{$type['name']}} in All Indian Cities</h2>
            <span>
               To improve these suggestions -
               <a href="#">
                  Fill Requirements for {{$type['name']}}
               </a>
            </span>
            <div class="owl-carousel owl-theme owl-loaded common-slider">
               <div class="owl-stage-outer">
                  <div class="owl-stage">
                     @foreach($vendors as $vendor)
                     <div class="owl-item">
                        @php $city = getData('cities', 'id', $vendor['city_id']); @endphp
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
                                 <p><span class="vndr-rating">★ 5 Mumbai</span></p>
                                 <span class="days"> {{$vendor['label']}}</span>
                              </div>
                           </div>
                        </a>
                     </div>
                     @endforeach
                  </div>
               </div>
            </div>
         </div>
         <hr>
         @endif
         @endforeach
      </div>
   </div>
</section>

@endsection

@push('before-scripts')
<script src="https://owlcarousel2.github.io/OwlCarousel2/assets/vendors/jquery.min.js"></script>
<script>
   $(document).ready(function() {
      var owl = $('.owl-carousel');

      owl.owlCarousel({
         items: 4,
         dots: false,
         nav: true,
         navText: ["<i class='fas fa-arrow-left'></i>", "<i class='fas fa-arrow-right'></i>"],
         // loop: $('.owl-carousel .owl-item').length > 5 ? true : false,
         loop: false,
         margin: 5,
         autoplay: false,
         autoplayTimeout: 3000,
         autoplayHoverPause: true,
         responsive: {
            0: {
               items: 2
            },
            600: {
               items: 4
            },
            1000: {
               items: 4
            }
         }
      });


   });
</script>

@endpush