@extends('frontend.layouts.app')

@section('title') {{ __("Vendors") }} @endsection

@section('content')
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
                                    <a href="#" class="btn btn-secondary">Delhi NCR</a>
                                    <p>Delhi NCR</p>
                                </li>
                                <li class="list-inline-item">
                                    <a href="#" class="btn btn-secondary">Bangalore</a>
                                    <p>Bangalore</p>
                                </li>
                                <li class="list-inline-item">
                                    <a href="#" class="btn btn-secondary">Mumbai</a>
                                    <p>Mumbai</p>
                                </li>
                                <li class="list-inline-item">
                                    <a href="#" class="btn btn-secondary">Chennai</a>
                                    <p>Chennai</p>
                                </li>
                                <li class="list-inline-item">
                                    <div class="dropdown">
                                        <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
                                            Other Cities
                                        </button>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item" href="#">Link 1</a>
                                            <a class="dropdown-item" href="#">Link 2</a>
                                            <a class="dropdown-item" href="#">Link 3</a>
                                        </div>
                                    </div>
                                    <p>Other Cities</p>
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
                        <div class="col-xs-12 col-sm-4">
                            <div class="common-card vendor-card-col">
                                <div class="img-col">
                                    <img src="{{asset('images/real-story.jpg')}}" alt="" class="img-fluid">
                                </div>
                                <div class="text-col">
                                    <ul class="list-inline space-list">
                                        @php $vendorCity = getData('cities', 'id', $vendor->city_id); @endphp
                                        <li>
                                            <p class="title">{{$vendor->business_name}}</p>
                                            <p class="grey-text">{{$vendorCity->name}}</p>
                                        </li>
                                        <li class="text-right">
                                            <span class="vendor-rating"><i class="fa fa-star"></i> 5.0</span>
                                            <p><a href="#" class="grey-text">10 Reviews</a></p>
                                        </li>
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

    <section id="text-only-section" class="grey-section">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xs-12 col-sm-12">
                    <div class="text-header">
                        <div class="text">
                            {!! nl2br($type->description) !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection