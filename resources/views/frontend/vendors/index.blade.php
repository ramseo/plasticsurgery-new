@extends('frontend.layouts.app')

@section('title') {{ __("Vendors") }} @endsection

@section('content')
    <div class="filter-overlay" style="display: none;"></div>
    <div id="filter-main-col" class="">
        <div class="filter-inner-col">
            <div class="filter-top-bar">
                <ul class="list-inline">
                    <li class="list-inline-item">
                        <p>Filter</p>
                    </li>
                    <li class="list-inline-item">
                        <select class="form-control" name="" id="">
                            <option value="">Select Category</option>
                        </select>
                    </li>
                    <li class="list-inline-item">
                        <p>IN</p>
                    </li>
                    <li class="list-inline-item">
                        <select class="form-control" name="" id="">
                            <option value="">Select City</option>
                        </select>
                    </li>
                </ul>
            </div>
            <div class="filter-body-col">
                <div class="container">
                    <div class="filter-form-col">
                        <div class="single-filter-col col-xs-12 col-sm-4">
                            <div class="filter-col-header">
                                <p>Services</p>
                            </div>
                            <div class="filter-col-body">
                                <ul class="list-unstyled filter-list">
                                    <li>
                                        <label class="custom-box-label">
                                            <input type="checkbox" class="">
                                            <span class="custom-box"><i class="fa fa-check"></i></span>
                                            <span class="text">Label</span>
                                        </label>
                                    </li>
                                    <li>
                                        <label class="custom-box-label">
                                            <input type="checkbox" class="">
                                            <span class="custom-box"><i class="fa fa-check"></i></span>
                                            <span class="text">Label</span>
                                        </label>
                                    </li>
                                    <li>
                                        <label class="custom-box-label">
                                            <input type="checkbox" class="">
                                            <span class="custom-box"><i class="fa fa-check"></i></span>
                                            <span class="text">Label</span>
                                        </label>
                                    </li>
                                    <li>
                                        <label class="custom-box-label">
                                            <input type="checkbox" class="">
                                            <span class="custom-box"><i class="fa fa-check"></i></span>
                                            <span class="text">Label</span>
                                        </label>
                                    </li>
                                    <li>
                                        <label class="custom-box-label">
                                            <input type="checkbox" class="">
                                            <span class="custom-box"><i class="fa fa-check"></i></span>
                                            <span class="text">Label</span>
                                        </label>
                                    </li>
                                    <li>
                                        <label class="custom-box-label">
                                            <input type="checkbox" class="">
                                            <span class="custom-box"><i class="fa fa-check"></i></span>
                                            <span class="text">Label</span>
                                        </label>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="single-filter-col col-xs-12 col-sm-4">
                            <div class="filter-col-header">
                                <p>Services</p>
                            </div>
                            <div class="filter-col-body">
                                <ul class="list-unstyled filter-list">
                                    <li>
                                        <label class="custom-box-label custom-radio-box">
                                            <input type="radio" class="">
                                            <span class="custom-box"><i class="fa fa-check"></i></span>
                                            <span class="text">Label</span>
                                        </label>
                                    </li>
                                    <li>
                                        <label class="custom-box-label custom-radio-box">
                                            <input type="radio" class="">
                                            <span class="custom-box"><i class="fa fa-check"></i></span>
                                            <span class="text">Label</span>
                                        </label>
                                    </li>
                                    <li>
                                        <label class="custom-box-label custom-radio-box">
                                            <input type="radio" class="">
                                            <span class="custom-box"><i class="fa fa-check"></i></span>
                                            <span class="text">Label</span>
                                        </label>
                                    </li>
                                    <li>
                                        <label class="custom-box-label custom-radio-box">
                                            <input type="radio" class="">
                                            <span class="custom-box"><i class="fa fa-check"></i></span>
                                            <span class="text">Label</span>
                                        </label>
                                    </li>
                                    <li>
                                        <label class="custom-box-label custom-radio-box">
                                            <input type="radio" class="">
                                            <span class="custom-box"><i class="fa fa-check"></i></span>
                                            <span class="text">Label</span>
                                        </label>
                                    </li>
                                    <li>
                                        <label class="custom-box-label custom-radio-box">
                                            <input type="radio" class="">
                                            <span class="custom-box"><i class="fa fa-check"></i></span>
                                            <span class="text">Label</span>
                                        </label>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="single-filter-col col-xs-12 col-sm-4">
                            <div class="filter-col-header">
                                <p>Services</p>
                            </div>
                            <div class="filter-col-body">
                                <ul class="list-unstyled filter-list">
                                    <li>
                                        <label class="custom-box-label custom-radio-box">
                                            <input type="radio" class="">
                                            <span class="custom-box"><i class="fa fa-check"></i></span>
                                            <span class="text">Label</span>
                                        </label>
                                    </li>
                                    <li>
                                        <label class="custom-box-label custom-radio-box">
                                            <input type="radio" class="">
                                            <span class="custom-box"><i class="fa fa-check"></i></span>
                                            <span class="text">Label</span>
                                        </label>
                                    </li>
                                    <li>
                                        <label class="custom-box-label custom-radio-box">
                                            <input type="radio" class="">
                                            <span class="custom-box"><i class="fa fa-check"></i></span>
                                            <span class="text">Label</span>
                                        </label>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="filter-footer-col">
                <ul class="list-inline">
                    <li class="list-inline-item">
                        <button class="btn btn-warning cancel-filter" type="button">Cancel</button>
                    </li>
                    <li class="list-inline-item">
                        <button class="btn btn-primary" type="submit">Search</button>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <section id="page-banner">
        <div class="container-fluid">
            <div class="row">
                <div class="banner-container">
                    @php
                        $vendor_banner = asset('images/vendor-banner.jpg');
                        if($type->banner){
                            if(file_exists( public_path().'/storage/vendor/type/banner/'. $type->banner )){
                                $vendor_banner = asset('storage/vendor/type/banner/'.$type->banner);
                            }
                        }
                    @endphp
                    <img src="{{$vendor_banner}}" alt="" class="img-fluid">
                    <div class="banner-search-col">
                        <div class="search-header">
                            <p class="text">Best {{$type->name}} in {{$city->name}}</p>
                        </div>
                        <div class="vendor-location-links">
                            <ul class="list-inline">
                                <li class="list-inline-item">
                                    <a href="#" class="btn btn-primary filter-link">{{$type->name}} <i class="fas fa-chevron-down"></i></a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="#" class="btn btn-primary filter-link">{{$city->name}} <i class="fas fa-chevron-down"></i></a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="#" class="btn btn-secondary filter-link">Total Budget <i class="fas fa-chevron-down"></i></a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="#" class="btn btn-secondary filter-link">Sort: Relevance <i class="fas fa-chevron-down"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="container-fluid">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">{{$type->name}}</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="photographers-section">
        <div class="container-fluid">
            <div class="col-xs-12 common-heading text-center">
                <p class="shadow-text">{{$type->name}}</p>
                <p class="head">{{$type->name}} in {{$city->name}}</p>
            </div>
            <div class="row vendor-list-row">
                @if($data->count() > 0)
                    @foreach($data as $vendor)
                        @php
                            $vendorCity = getData('cities', 'id', $vendor->city_id);
                            $vendorType = getData('types', 'id', $vendor->type_id);
                            $reviews = getDataArray('vendor_reviews', 'vendor_id', $vendor->id);
                            $average =  averageReview($reviews);
                        @endphp
                        <div class="col-xs-12 col-sm-4">
                            <div class="common-card vendor-card-col">
                                <a href="{{url('/') . '/' . $vendorType->slug . '/' . $vendorCity->slug . '/' . $vendor->slug }}">
                                    @php
                                        $vendor_profile_img = asset('img/default-vendor.jpg');
                                        if($vendor->image){
                                            if(file_exists( public_path().'/storage/vendor/profile/'. $vendor->image )){
                                                $vendor_profile_img = asset('storage/vendor/profile/'.$vendor->image);
                                            }
                                        }
                                    @endphp
                                    <div class="img-col">
                                        <img src="{{$vendor_profile_img}}" alt="" class="img-fluid">
                                    </div>
                                    <div class="text-col">
                                        <ul class="list-inline space-list">
                                            <li>
                                                <p class="title">{{$vendor->business_name}}</p>
                                                <p class="grey-text">{{$vendorCity->name}}</p>
                                            </li>
                                            @if($average > 0)
                                                <li class="text-right">
                                                    <span class="vendor-rating"><i class="fa fa-star"></i> {{number_format($average, 1)}}</span>
                                                    <p><a href="javascript:void(0)" class="grey-text">{{count($reviews)}} Reviews</a></p>
                                                </li>
                                            @endif
                                        </ul>
                                        <ul class="list-inline vendor-card space-list v-center">
                                            <li>
                                                <p class="price"><span>Rs. 50,000</span></p>
                                            </li>
                                            <li class="text-right">
                                                <p class="grey-text" style="margin: 0px;">For 1 Day of Photo + Video</p>
                                            </li>
                                        </ul>
                                    </div>
                                </a>
                            </div>
                        </div>
                    @endforeach
                @else
                    <div class="col-12 no-records text-center">
                        <p>No {{$type->name}} found in {{$city->name}}</p>
                    </div>
                @endif
            </div>
            <!-- <div class="col-xs-12 col-sm-12 load-more-col text-center">
                <a href="#" class="btn btn-primary text-uppercase">Show more Photographers</a>
            </div> -->
        </div>
    </section>

    @include('frontend.includes.featured-vendors')

    <section id="latest-reviews">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xs-12 col-sm-12 common-heading text-center with-lines">
                    <p class="shadow-text">Reviews</p>
                    <p class="head">Latest Reviews of Photographers on Wed.in</p>
                </div>
                <div class="col-xs-12 col-sm-12 row reviews-list-col">
                    <div class="col-xs-12 col-sm-6 single-review">
                        <div class="review-header">
                            <ul class="list-inline space-list">
                                <li>
                                    <div class="d-flex">
                                        <div class="img-col">
                                            <img src="https://cdn.landesa.org/wp-content/uploads/default-user-image.png" class="img-fluid" alt="">
                                        </div>
                                        <div class="text-col">
                                            <p class="name">Gaurav Kumar</p>
                                            <p class="grey-text">about 22 hours ago</p>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <span class="vendor-rating"><i class="fa fa-star"></i> 5.0</span>
                                </li>
                            </ul>
                        </div>
                        <div class="review-body">
                            <p>Review for - <a href="#">FrameFitoor Photography</a></p>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make
                                a type specimen book. It has survived not only five centuries,</p>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 single-review">
                        <div class="review-header">
                            <ul class="list-inline space-list">
                                <li>
                                    <div class="d-flex">
                                        <div class="img-col">
                                            <img src="https://cdn.landesa.org/wp-content/uploads/default-user-image.png" class="img-fluid" alt="">
                                        </div>
                                        <div class="text-col">
                                            <p class="name">Gaurav Kumar</p>
                                            <p class="grey-text">about 22 hours ago</p>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <span class="vendor-rating"><i class="fa fa-star"></i> 5.0</span>
                                </li>
                            </ul>
                        </div>
                        <div class="review-body">
                            <p>Review for - <a href="#">FrameFitoor Photography</a></p>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make
                                a type specimen book. It has survived not only five centuries,</p>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 single-review">
                        <div class="review-header">
                            <ul class="list-inline space-list">
                                <li>
                                    <div class="d-flex">
                                        <div class="img-col">
                                            <img src="https://cdn.landesa.org/wp-content/uploads/default-user-image.png" class="img-fluid" alt="">
                                        </div>
                                        <div class="text-col">
                                            <p class="name">Gaurav Kumar</p>
                                            <p class="grey-text">about 22 hours ago</p>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <span class="vendor-rating"><i class="fa fa-star"></i> 5.0</span>
                                </li>
                            </ul>
                        </div>
                        <div class="review-body">
                            <p>Review for - <a href="#">FrameFitoor Photography</a></p>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make
                                a type specimen book. It has survived not only five centuries,</p>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 single-review">
                        <div class="review-header">
                            <ul class="list-inline space-list">
                                <li>
                                    <div class="d-flex">
                                        <div class="img-col">
                                            <img src="https://cdn.landesa.org/wp-content/uploads/default-user-image.png" class="img-fluid" alt="">
                                        </div>
                                        <div class="text-col">
                                            <p class="name">Gaurav Kumar</p>
                                            <p class="grey-text">about 22 hours ago</p>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <span class="vendor-rating"><i class="fa fa-star"></i> 5.0</span>
                                </li>
                            </ul>
                        </div>
                        <div class="review-body">
                            <p>Review for - <a href="#">FrameFitoor Photography</a></p>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make
                                a type specimen book. It has survived not only five centuries,</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @if($content)
        @if($content->content != '')
        <section id="text-only-section" class="grey-section">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-xs-12 col-sm-12">
                        <div class="text-header">
                            <div class="text">
                                {!! nl2br($content->content) !!}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        @endif

        @if($content->faq_content != '')
            <section id="text-only-section" class="grey-section">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-xs-12 col-sm-12">
                            <div class="text-header">
                                <div class="text">
                                    {!! nl2br($content->faq_content) !!}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        @endif
    @endif


@endsection

@push('after-scripts')
    <script>
        $(document).ready(function(){
            $('.filter-link').click(function(){
                $('#filter-main-col').addClass('activeFilter');
                $('.filter-overlay').fadeIn();
            });
            $('.cancel-filter').click(function(){
                $('#filter-main-col').removeClass('activeFilter');
                $('.filter-overlay').fadeOut();
            });
        });
    </script>
@endpush
