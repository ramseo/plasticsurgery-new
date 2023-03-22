@extends('frontend.layouts.app')

@section('title') {{app_name()}} @endsection

@section('content')


<!-- page-banner-height -->
<section id="page-banner" class="">
    <div class="container-fluid">
        <div class="row">
            <div class="banner-container">
                <div class="vendor-img">
                    <img src="<?= asset('images/vendor-banner-min.jpg') ?>" alt="image alt" class="img-fluid filter-cls margin-img-0">
                    <div class="banner-search-col">
                        <div class="search-header">
                            <p class="text">Search By City</p>
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
                <li class="breadcrumb-item active" aria-current="page">Search By City</li>
            </ol>
        </nav>
    </div>
</section>

<section id="vendor-detail-section">
    <div class="container-fluid">
        <div class=" vendor-detail-main-col">
            @foreach($cities as $city)
            @php $vendors = isset($city_vendors[$city['id']])? $city_vendors[$city['id']] : array() ; @endphp
            @if($vendors)
            <div class="container-fluid ol-crsl padding-null">
                <div class="thumb-img-city">
                    <img src="{{asset('storage/city/icon/'.$city['icon'])}}" alt="<?= $city['alt'] ?>">
                </div>
                <h2>Top Vendors in {{$city['name']}} Cities</h2>
                <span>To improve these suggestions -
                    <a href="#">Fill Requirements for Photographers</a>
                </span>
                <div class="owl-carousel owl-theme owl-loaded common-slider">
                    <div class="owl-stage-outer">
                        <div class="owl-stage">
                            @foreach($vendors as $vendor)
                            <div class="owl-item">
                                @php $vendorType = getData('types', 'id', $vendor->type_id); @endphp
                                <a href="{{url('/') . '/' . $vendorType->slug . '/' . $city['slug'] . '/' . $vendor->slug }}">
                                    <div class="item">
                                        @php
                                        $vendor_profile_img = asset('img/default-vendor.jpg');
                                        if($vendor->image){
                                        if(file_exists( public_path().'/storage/vendor/profile/'. $vendor->image )){
                                        $vendor_profile_img = asset('storage/vendor/profile/'.$vendor->image);
                                        }
                                        }
                                        @endphp
                                        <img src="{{$vendor_profile_img}}" alt="image alt">
                                        <div class="carousel-content">
                                            <h5>{{$vendor->business_name}}</h5>
                                            <p><span>₹</span> {{$vendor->price}}</p>
                                            <span class="days"> {{$vendor->label}}</span>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
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