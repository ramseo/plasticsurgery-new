@extends('frontend.layouts.app')
@section('title') {{ __("Vendor") . ' | ' . $vendor_details->business_name }} @endsection

@section('content')
@php
$vendorUser = getData('users', 'id', $vendor_details->user_id);
$albums = getDataArray('albums', 'vendor_id', $vendor_details->id);
$videos = getDataArray('videos', 'vendor_id', $vendor_details->id);
$reviews = getReviewArray('vendor_reviews', 'vendor_id', $vendor_details->id);
$average = averageReview($reviews);

@endphp

<section id="breadcrumb-section">
    <div class="container-fluid">
        <div class="row">
            <div class="col-xs-12 col-sm-12">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
                        <li class="breadcrumb-item"><a href="{{url('/') . '/' . $type->slug}}">{{$type->name}}</a></li>
                        <li class="breadcrumb-item"><a href="{{url('/') . '/' . $type->slug . '/' . $city->slug}}">{{$city->name}}</a></li>
                        <li class="breadcrumb-item active" aria-current="page">{{$vendor_details->business_name}}</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</section>

<section id="vendor-detail-section">
    <div class="container-fluid">
        <div class="row vendor-detail-main-col padd-top-o">
            <!-- <div class="top-content-cls"> -->
            <div class="col-xs-12 col-sm-7 vendor-detail-img-col">
                @php
                $vendor_profile_img = asset('img/default-vendor.jpg');
                if($vendor_details->image){
                if(file_exists( public_path().'/storage/vendor/profile/'. $vendor_details->image )){
                $vendor_profile_img = asset('storage/vendor/profile/'.$vendor_details->image);
                }
                }
                @endphp
                <div class="img-col">
                    <img src="{{$vendor_profile_img}}" class="img-fluid" alt="image alt">
                    <?php if ($vendor_details->most_popular == 1) { ?>
                        <div class="ribbon ribbon-top-left">
                            <span>Most Popular</span>
                        </div>
                    <?php } ?>
                    <!-- code -->
                    <?php
                    $imgCount = 0;
                    if ($albums && count($albums) > 0) {
                        foreach ($albums as $albums_item) {
                            $album_images = getDataArray('images', 'album_id', $albums_item->id);
                            $imgCount = ($imgCount + count($album_images));
                        }
                    }
                    if ($imgCount > 0) {
                    ?>
                        <div class="album-cls album-count">
                            <span>
                                <div>
                                    <i class="fa fa-chevron-down album-count-cls"></i>
                                </div>
                                <div>
                                    <?= $imgCount . " " . "Photos" ?>
                                </div>
                            </span>
                        </div>
                    <?php } ?>
                    <!-- code -->
                </div>
                <!-- replaced content -->

            </div>
            <div class="col-xs-12 col-sm-5 vendor-detail-text-col">
                <div class="inner bg-white-custom">
                    <div class="inner-col">
                        @if($average > 0)
                        <span class="vendor-rating rating-scroll-event">
                            <i class="fa fa-star"></i>
                            {{number_format($average, 1)}}
                            <span>(<?= count($reviews) ?>)</span>
                            <i class="fa fa-chevron-down review-chevron-down"></i>
                        </span>
                        @endif
                        <p class="title">{{$vendor_details->business_name}}</p>
                        <p class="grey-text">{{$type->name}} in {{$city->name}}</p>
                    </div>
                    <hr>
                    <div class="inner-col">
                        <p class="price price-arrow-cls">
                            Rs. {{$vendor_details->price}}
                            <span class="float-right price-arrow-down">
                                <i class="fa fa-chevron-down"></i>
                            </span>
                        </p>
                        <p class="grey-text">{{$vendor_details->label}} <a id="see-full-list" class="grey-text" href="javascript:void(0)">(See Full Pricelist)</a></p>
                    </div>
                    <hr>
                    <div class="inner-col">
                        <ul class="list-inline share-ul">
                            <li class="list-inline-item">
                                <a href="#" class="grey-text" data-toggle="modal" data-target="#shareModal"><i class="far fa-share-square text-primary"></i> Share</a>
                            </li>
                            <!-- @auth
                            @endauth -->
                            <li class="list-inline-item">
                                <a href="#" class="grey-text" data-toggle="modal" data-target="#reviewModal"><i class="far fa-star text-primary"></i> Write Review</a>
                            </li>
                        </ul>
                    </div>

                    <hr>
                    <div class="inner-col">
                        <ul class="list-inline actions-ul">
                            @if (Auth::check())
                            <li class="list-inline-item">
                                <a href="<?= route('frontend.quotation', ['slug' => $vendor_details->slug]) ?>" class="btn btn-primary">
                                    <i class="fas fa-rupee-sign"></i>
                                    Get Quotation
                                </a>
                            </li>
                            @else
                            <li class="list-inline-item">
                                <?php $currentUrl = url()->current(); ?>
                                <a href="<?= route('login') . "?current_url=$currentUrl" ?>" class="btn btn-primary">
                                    Get Quotation
                                </a>
                            </li>
                            @endif
                            <li class="list-inline-item">
                                <button class="btn btn-success callButton"><i class="fas fa-phone-alt"></i> CALL/CHAT</button>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- </div> -->
            <div class="col-sm-12 new-div">
                @if($albums && count($albums) > 0)
                @include('frontend.vendors.vendor-album',['vendor_albmum' => $albums])
                <hr>
                @endif

                @if($videos && count($videos) > 0)
                @include('frontend.vendors.vendor-videos',['vendor_videos' => $videos])
                <hr>
                @endif

                @php
                $top_services = get_vendor_services($vendor_details->id, 'top');
                $bottom_services = get_vendor_services($vendor_details->id, 'bottom');
                @endphp
                @if($top_services && count($top_services) > 0)
                <div class="vendor-detail-cols pricing-col">
                    <p class="head">Pricing</p>
                    @foreach($top_services as $top_service)
                    @include('frontend.vendors.vendor-service',['service_item' => $top_service])
                    @endforeach
                </div>
                <hr>
                @endif
                <div class="vendor-detail-cols">
                    @if($bottom_services && count($bottom_services) > 0)
                    <p class="head">About</p>
                    <div class="vendor-detail-cols">
                        @foreach($bottom_services as $bottom_service)
                        @include('frontend.vendors.vendor-service',['service_item' => $bottom_service])
                        @endforeach
                    </div>
                    @endif
                </div>
                <hr>

                @if($reviews)
                @include('frontend.vendors.vendor-reviews',['reviews' => $reviews])
                @endif
            </div>
        </div>
    </div>
</section>

@include('frontend.vendors.similar-vendors', ['vendor_details' => $vendor_details, 'city' => $city])
@include('frontend.includes.featured-vendors')

{{-- <section id="text-only-section" class="mt-section">--}}
{{-- <div class="container-fluid">--}}
{{-- <div class="row">--}}
{{-- <div class="col-xs-12 col-sm-12">--}}
{{-- <div class="text-header">--}}
{{-- {!! $vendor_details->description !!}--}}
{{-- </div>--}}
{{-- </div>--}}
{{-- </div>--}}
{{-- </div>--}}
{{-- </section>--}}

<div class="modal fade" id="shareModal">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Share This Profile</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
                <div class="vendor-social-main-col">
                    <ul class="list-inline text-center">
                        <li class="list-inline-item">
                            <a class="facebook" href="https://www.facebook.com/sharer.php?u=<?= url()->current() ?>&t=<?= $vendor_details->business_name ?>" target="_blank">
                                <i class="fab fa-facebook-square"></i>
                            </a>
                        </li>
                        <li class="list-inline-item">
                            <a class="twitter" href="https://twitter.com/share?text=<?= $vendor_details->business_name ?>&url=<?= url()->current() ?>&hashtags=wed.in" target="_blank">
                                <i class="fab fa-twitter-square"></i>
                            </a>
                        </li>
                        <li class="list-inline-item">
                            <a class="linkedin" href="https://www.linkedin.com/shareArticle?mini=true&url=<?= url()->current() ?>&title=Post" target="_blank">
                                <i class="fab fa-linkedin"></i>
                            </a>
                        </li>
                        <li class="list-inline-item">
                            <a class="pinterest" href="http://pinterest.com/pin/create/button/?url=<?= url()->current() ?>&description=Post" target="_blank">
                                <i class="fab fa-pinterest"></i>
                            </a>
                        </li>
                    </ul>
                </div>

                <input type="text" class="offscreen-cls" value="<?= url()->current() ?>" id="GfGInput" aria-hidden="true">
                <div class="copy-btn-cls">
                    <button id="text-copy-btn" onclick="copyLinkText('GfGInput')" class="btn btn-default">
                        Copy Link
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>
@include('frontend.popup.callchat', ['vendor_details' => $vendor_details, 'vendoruser' => $vendorUser])
@endsection

@push('after-scripts')
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.blockUI/2.70/jquery.blockUI.min.js"></script>
<script>
    $(document).ready(function() {
        $('.callButton').click(function() {
            if ('<?php echo Auth::check(); ?>' == '') {
                location.href = "{{ route('login') }}";
            } else {
                $('body').block({
                    message: "Processing..."
                });
                $.ajax({
                    type: 'POST',
                    url: "{{route('frontend.call')}}",
                    data: {
                        '_token': "<?php echo csrf_token(); ?>",
                        'user_id': "<?php echo Auth::check() == 1 ? Auth::user()->id : ''; ?>",
                        'vendor_id': "<?php echo $vendor_details->id; ?>"
                    },
                    success: function(res) {
                        if (res.success) {
                            $(".callPopup").addClass("active");
                            $("#call-slide").addClass("active");
                            // $('.reviewAlert').html('').hide();
                            // $('#reviewForm').trigger('reset');
                            // toastr.success(res.message, 'Review posted Successfully!');
                        } else {
                            // $('.reviewAlert').html(res.message).show();
                        }
                        $('body').unblock();
                    }
                });
            }

        });


        $('.cpp-after-call').click(function() {
            let review = $(this).attr('review');
            $('.cppSlide').removeClass('active');
            $.ajax({
                type: 'POST',
                url: "{{route('frontend.call-review')}}",
                data: {
                    '_token': "<?php echo csrf_token(); ?>",
                    'user_id': "<?php echo Auth::check() == 1 ? Auth::user()->id : ''; ?>",
                    'vendor_id': "<?php echo $vendor_details->id; ?>",
                    'review': review
                },
                success: function(res) {
                    if (res.success) {
                        $("#call-thank-you-slide").addClass("active");
                    } else {
                        // $('.reviewAlert').html(res.message).show();
                    }
                }
            });

        });

        $('.cppClose').click(function() {
            $('.callPopup').removeClass('active');
        });

    });

    $(document).ready(function() {
        var options = {
            minMargin: 10,
            maxMargin: 35,
            itemSelector: ".item"
        };
        $(".containerCollage").justifiedGallery();

        $('#reviewForm').submit(function(e) {
            e.preventDefault();
            $.ajax({
                type: 'POST',
                url: "{{route('frontend.post-review')}}",
                data: {
                    '_token': "<?php echo csrf_token() ?>",
                    'user_id': $('#reviewUserId').val(),
                    'vendor_id': $('#reviewVendorId').val(),
                    'type_id': $('#reviewVendorTypeId').val(),
                    'city_id': $('#reviewVendorCityId').val(),
                    'name': $('#reviewTitle').val(),
                    'rating': $('#review-rating-hidden').val(),
                    'description': $('#reviewDescription').val()
                },
                success: function(res) {
                    if (res.success) {
                        $('.reviewAlert').html('').hide();
                        $('#reviewForm').trigger('reset');
                        toastr.success(res.message, 'Review posted Successfully!');

                        setTimeout(function() {
                            $('#reviewModal').modal('hide');
                            $('#rateit-reset-2').trigger("click");
                        }, 1000);
                    } else {
                        console.log(res.message);
                        $('.reviewAlert').html(res.message).show();
                    }
                }
            });
        });

        $('#see-full-list').click(function(e) {
            e.preventDefault();
            $('html, body').animate({
                scrollTop: $(".pricing-col").offset().top
            }, 1500);
        });
    });
</script>
@endpush