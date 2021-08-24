@extends('frontend.layouts.app')

@section('title') {{ __("Vendors") }} @endsection

@push('after-styles')
    <style>
        #footer {
            margin: 3px 0 0 0;
        }
        #text-only-section {
            padding-bottom: 15px;
        }
    </style>
@endpush

@section('content')
    @include('frontend.vendors.filters', ['selected_city' => $city, 'selected_type' => $type])

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
                                    @php
                                        $selected_budget = '';
                                        $budget_label = 'Total Budget';
                                        if(isset($_GET['budget'])){
                                            $selected_budget = getData('budgets', 'id', $_GET['budget']);
                                            if($selected_budget->filter == 'less_then'){
                                                $budget_label = "Less than Rs.".$selected_budget->min;
                                            }elseif($selected_budget->filter == 'between'){
                                                $budget_label = 'Rs.'.$selected_budget->min . ' - ' . $selected_budget->max;
                                            }elseif($selected_budget->filter == 'above'){
                                                $budget_label = 'Above Rs.'. $selected_budget->min;
                                            }
                                        }
                                    @endphp
                                    <a href="#" class="btn btn-secondary filter-link">{{$budget_label}} <i class="fas fa-chevron-down"></i></a>
                                </li>
                                <li class="list-inline-item">
                                    @php
                                        $sort_text = 'Relevance';
                                        if(isset($_GET['sort'])){
                                            if($_GET['sort'] == 'relevance'){
                                                $sort_text = 'Relevance';
                                            }elseif($_GET['sort'] == 'low_to_high'){
                                                $sort_text = 'Price (Low to High)';
                                            }elseif($_GET['sort'] == 'high_to_low'){
                                                $sort_text = 'Price (High to Low)';
                                            }
                                        }
                                    @endphp
                                    <a href="#" class="btn btn-secondary filter-link">Sort: {{$sort_text}} <i class="fas fa-chevron-down"></i></a>
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
{{--                <p class="head">{{$type->name}} in {{$city->name}}</p>--}}
                @if($content)
                    @if($content->content != '')
                        <p class="head">{{$content->title}} ({{$vendors_total}})</p>
                        <p class="text">
                            {!! $content->description !!}
                        </p>
                    @endif
                @endif
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
                                        @if($vendor->price)
                                            <ul class="list-inline vendor-card space-list v-center">
                                                <li>
                                                    <p class="price"><span>Rs. {{$vendor->price}}</span></p>
                                                </li>
                                                <li class="text-right">
                                                    <p class="grey-text" style="margin: 0px;">{{$vendor->label}}</p>
                                                </li>
                                            </ul>
                                        @endif
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

    @php
        $latestReviews = getDataArray('vendor_reviews', 'type_id', $type->id);
    @endphp

    @if(count($latestReviews) > 0)
        <section id="latest-reviews">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 common-heading text-center with-lines">
                        <p class="shadow-text">Reviews</p>
                        <p class="head">Latest Reviews of {{$type->name}} on Wed.in</p>
                    </div>
                    <div class="col-xs-12 col-sm-12 row reviews-list-col">
                        @foreach($latestReviews as $review)
                            @php
                                $review_user = getData('users', 'id', $review->user_id);
                                $review_vendor = getData('vendors', 'id', $review->vendor_id);
                                $vendorCity = getData('cities', 'id', $review_vendor->city_id);
                                $vendorType = getData('types', 'id', $review_vendor->type_id);
                            @endphp
                            <div class="col-xs-12 col-sm-6 single-review">
                                <div class="review-header">
                                    <ul class="list-inline space-list">
                                        <li>
                                            <div class="d-flex">
                                                <div class="img-col">
                                                    <img src="https://cdn.landesa.org/wp-content/uploads/default-user-image.png" class="img-fluid" alt="">
                                                </div>
                                                <div class="text-col">
                                                    <p class="name">{{$review_user->first_name . ' '. $review_user->last_name}}</p>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <span class="vendor-rating"><i class="fa fa-star"></i> {{number_format($review->rating, 1)}}</span>
                                        </li>
                                    </ul>
                                </div>
                                <div class="review-body">
                                    <p>Review for - <a href="{{url('/') . '/' . $vendorType->slug . '/' . $vendorCity->slug . '/' . $review_vendor->slug }}">{{$review_vendor->business_name}}</a></p>
                                    <p>{{$review->description}}</p>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </section>
    @endif

    @if($content)
        @if($content->content != '')
            <section id="text-only-section" class="grey-section">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-xs-12 col-sm-12">
                            <div class="text-header">
                                <div class="text">
                                    {!! $content->content !!}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        @endif

        @if($content->faq_content != '')
            <section id="text-only-section" class="mt-5" >
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-xs-12 col-sm-12">
                            <div class="text-header">
                                <div class="text">
                                    {!! $content->faq_content !!}
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
