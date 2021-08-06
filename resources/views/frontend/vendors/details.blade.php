@extends('frontend.layouts.app')

@section('title') {{ __("Vendor") . ' | ' . $vendor_details->business_name }} @endsection

@push('before-styles')
    <link rel="stylesheet" href="{{asset('theme/css/rateit.css')}}">
@endpush

@section('content')
    @php
        $albums = getDataArray('albums', 'vendor_id', $vendor_details->id);
        $videos = getDataArray('videos', 'vendor_id', $vendor_details->id);
    @endphp
    <section id="breadcrumb-section">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xs-12 col-sm-12">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
                            <li class="breadcrumb-item"><a href="{{url('/') . '/' . $type->slug . '/' . $city->slug}}">{{$type->name}}</a></li>
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
            <div class="row vendor-detail-main-col">
                <div class="col-xs-12 col-sm-7 vendor-detail-img-col">
                    <div class="img-col">
                        <img src="images/real-story.jpg" class="img-fluid" alt="">
                    </div>

                    @if($albums)
                        @include('frontend.vendors.vendor-album',['vendor_albmum' => $albums])
                    @endif
                    
                    <hr>
                    <div class="vendor-detail-cols">
                        <p class="head">Pricing</p>
                        <div class="single-price">
                            <ul class="list-inline space-list">
                                <li>
                                    <p class="grey-text text-uppercase">Candid Photography</p>
                                    <p class="info"><i class="fas fa-rupee-sign"></i> 70,000 per day</p>
                                </li>
                                <li>
                                    <i class="fas fa-chevron-down"></i>
                                </li>
                            </ul>
                        </div>
                        <div class="single-price">
                            <ul class="list-inline space-list">
                                <li>
                                    <p class="grey-text text-uppercase">Traditional Photography</p>
                                    <p class="info"><i class="fas fa-rupee-sign"></i> 70,000 per day</p>
                                </li>
                                <li>
                                    <i class="fas fa-chevron-down"></i>
                                </li>
                            </ul>
                        </div>
                        <div class="single-price">
                            <ul class="list-inline space-list">
                                <li>
                                    <p class="grey-text text-uppercase">Cinematic Photography</p>
                                    <p class="info"><i class="fas fa-rupee-sign"></i> 70,000 per day</p>
                                </li>
                                <li>
                                    <i class="fas fa-chevron-down"></i>
                                </li>
                            </ul>
                        </div>
                        <div class="single-price">
                            <ul class="list-inline space-list">
                                <li>
                                    <p class="grey-text text-uppercase">Traditional Videography</p>
                                    <p class="info"><i class="fas fa-rupee-sign"></i> 70,000 per day</p>
                                </li>
                                <li>
                                    <i class="fas fa-chevron-down"></i>
                                </li>
                            </ul>
                        </div>
                        <div class="single-price">
                            <ul class="list-inline space-list">
                                <li>
                                    <p class="grey-text text-uppercase">Photo Album</p>
                                    <p class="info"><i class="fas fa-rupee-sign"></i> 70,000 per day</p>
                                </li>
                                <li>
                                    <i class="fas fa-chevron-down"></i>
                                </li>
                            </ul>
                        </div>
                        <div class="single-price">
                            <ul class="list-inline space-list">
                                <li>
                                    <p class="grey-text text-uppercase">Pre-Wedding shoot</p>
                                    <p class="info"><i class="fas fa-rupee-sign"></i> 70,000 per day</p>
                                </li>
                                <li>
                                    <i class="fas fa-chevron-down"></i>
                                </li>
                            </ul>
                        </div>
                        <div class="single-price">
                            <ul class="list-inline space-list">
                                <li>
                                    <p class="grey-text text-uppercase">Payment Policy</p>
                                    <p class="info">15% - At the Time of booking</p>
                                    <p class="info">80% - On Event date</p>
                                    <p class="info">100% - After deliverables are delivered</p>
                                </li>
                            </ul>
                        </div>
                        <div class="single-price">
                            <ul class="list-inline space-list">
                                <li>
                                    <p class="grey-text text-uppercase">Cancellation Policy</p>
                                    <p class="info">30% of the booking charges are refundable.</p>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <hr>
                    <div class="vendor-detail-cols">
                        <p class="head">About</p>
                        <p class="text-uppercase small-head"><strong>Introduction</strong></p>
                        <p class="grey-text">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                        <p class="text-uppercase small-head"><strong>Working since</strong></p>
                        <p class="grey-text">2000</p>
                        <p class="text-uppercase small-head"><strong>Travel Policy</strong></p>
                        <p class="grey-text">Travel & Stay paid by client</p>
                    </div>
                    <hr>
                    <div class="vendor-detail-cols">
                        <p class="head">Latest Reviews (10)</p>
                        <div class="detail-review-header">
                            <p class="review">5.0</p>
                            <ul class="list-inline">
                                <li class="list-inline-item text-success">
                                    <i class="fa fa-star"></i>
                                </li>
                                <li class="list-inline-item text-success">
                                    <i class="fa fa-star"></i>
                                </li>
                                <li class="list-inline-item text-success">
                                    <i class="fa fa-star"></i>
                                </li>
                                <li class="list-inline-item text-success">
                                    <i class="fa fa-star"></i>
                                </li>
                                <li class="list-inline-item text-success">
                                    <i class="fa fa-star"></i>
                                </li>
                            </ul>
                            <div class="rate-plugin">
                                <p><strong>Rate 'Focus Wedding Photographers'</strong></p>
                                <ul class="list-inline">
                                    <li class="list-inline-item">
                                        <i class="far fa-star"></i>
                                    </li>
                                    <li class="list-inline-item">
                                        <i class="far fa-star"></i>
                                    </li>
                                    <li class="list-inline-item">
                                        <i class="far fa-star"></i>
                                    </li>
                                    <li class="list-inline-item">
                                        <i class="far fa-star"></i>
                                    </li>
                                    <li class="list-inline-item">
                                        <i class="far fa-star"></i>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <hr>
                        <div class="detail-review-body">
                            <div class="col-xs-12 single-review">
                                <div class="review-header">
                                    <ul class="list-inline space-list">
                                        <li>
                                            <div class="d-flex">
                                                <div class="img-col">
                                                    <img src="https://cdn.landesa.org/wp-content/uploads/default-user-image.png" class="img-fluid" alt="">
                                                </div>
                                                <div class="text-col">
                                                    <p class="name">Gaurav Kumar</p>
                                                    <ul class="list-inline rating-list">
                                                        <li class="list-inline-item">
                                                            <ul class="list-inline">
                                                                <li class="list-inline-item text-success">
                                                                    <i class="fa fa-star"></i>
                                                                </li>
                                                                <li class="list-inline-item text-success">
                                                                    <i class="fa fa-star"></i>
                                                                </li>
                                                                <li class="list-inline-item text-success">
                                                                    <i class="fa fa-star"></i>
                                                                </li>
                                                                <li class="list-inline-item text-success">
                                                                    <i class="fa fa-star"></i>
                                                                </li>
                                                                <li class="list-inline-item text-success">
                                                                    <i class="fa fa-star"></i>
                                                                </li>
                                                            </ul>
                                                        </li>
                                                        <li class="list-inline-item">
                                                            <p class="grey-text">about 22 hours ago</p>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <div class="review-body">
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries,</p>
                                    <div class="col-xs-12 single-review">
                                        <div class="review-header">
                                            <ul class="list-inline space-list">
                                                <li>
                                                    <div class="d-flex">
                                                        <div class="img-col">
                                                            <img src="https://cdn.landesa.org/wp-content/uploads/default-user-image.png" class="img-fluid" alt="">
                                                        </div>
                                                        <div class="text-col">
                                                            <p class="name">Focus Wedding Photographers</p>
                                                            <ul class="list-inline rating-list">
                                                                <li class="list-inline-item">
                                                                    <ul class="list-inline">
                                                                        <li class="list-inline-item text-success">
                                                                            <i class="fa fa-star"></i>
                                                                        </li>
                                                                        <li class="list-inline-item text-success">
                                                                            <i class="fa fa-star"></i>
                                                                        </li>
                                                                        <li class="list-inline-item text-success">
                                                                            <i class="fa fa-star"></i>
                                                                        </li>
                                                                        <li class="list-inline-item text-success">
                                                                            <i class="fa fa-star"></i>
                                                                        </li>
                                                                        <li class="list-inline-item text-success">
                                                                            <i class="fa fa-star"></i>
                                                                        </li>
                                                                    </ul>
                                                                </li>
                                                                <li class="list-inline-item">
                                                                    <p class="grey-text">about 22 hours ago</p>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="review-body">
                                            <p>Thanks</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 single-review">
                                <div class="review-header">
                                    <ul class="list-inline space-list">
                                        <li>
                                            <div class="d-flex">
                                                <div class="img-col">
                                                    <img src="https://cdn.landesa.org/wp-content/uploads/default-user-image.png" class="img-fluid" alt="">
                                                </div>
                                                <div class="text-col">
                                                    <p class="name">Gaurav Kumar</p>
                                                    <ul class="list-inline rating-list">
                                                        <li class="list-inline-item">
                                                            <ul class="list-inline">
                                                                <li class="list-inline-item text-success">
                                                                    <i class="fa fa-star"></i>
                                                                </li>
                                                                <li class="list-inline-item text-success">
                                                                    <i class="fa fa-star"></i>
                                                                </li>
                                                                <li class="list-inline-item text-success">
                                                                    <i class="fa fa-star"></i>
                                                                </li>
                                                                <li class="list-inline-item text-success">
                                                                    <i class="fa fa-star"></i>
                                                                </li>
                                                                <li class="list-inline-item text-success">
                                                                    <i class="fa fa-star"></i>
                                                                </li>
                                                            </ul>
                                                        </li>
                                                        <li class="list-inline-item">
                                                            <p class="grey-text">about 22 hours ago</p>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <div class="review-body">
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries,</p>
                                    <div class="col-xs-12 single-review">
                                        <div class="review-header">
                                            <ul class="list-inline space-list">
                                                <li>
                                                    <div class="d-flex">
                                                        <div class="img-col">
                                                            <img src="https://cdn.landesa.org/wp-content/uploads/default-user-image.png" class="img-fluid" alt="">
                                                        </div>
                                                        <div class="text-col">
                                                            <p class="name">Focus Wedding Photographers</p>
                                                            <ul class="list-inline rating-list">
                                                                <li class="list-inline-item">
                                                                    <ul class="list-inline">
                                                                        <li class="list-inline-item text-success">
                                                                            <i class="fa fa-star"></i>
                                                                        </li>
                                                                        <li class="list-inline-item text-success">
                                                                            <i class="fa fa-star"></i>
                                                                        </li>
                                                                        <li class="list-inline-item text-success">
                                                                            <i class="fa fa-star"></i>
                                                                        </li>
                                                                        <li class="list-inline-item text-success">
                                                                            <i class="fa fa-star"></i>
                                                                        </li>
                                                                        <li class="list-inline-item text-success">
                                                                            <i class="fa fa-star"></i>
                                                                        </li>
                                                                    </ul>
                                                                </li>
                                                                <li class="list-inline-item">
                                                                    <p class="grey-text">about 22 hours ago</p>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="review-body">
                                            <p>Thanks</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 single-review">
                                <div class="review-header">
                                    <ul class="list-inline space-list">
                                        <li>
                                            <div class="d-flex">
                                                <div class="img-col">
                                                    <img src="https://cdn.landesa.org/wp-content/uploads/default-user-image.png" class="img-fluid" alt="">
                                                </div>
                                                <div class="text-col">
                                                    <p class="name">Gaurav Kumar</p>
                                                    <ul class="list-inline rating-list">
                                                        <li class="list-inline-item">
                                                            <ul class="list-inline">
                                                                <li class="list-inline-item text-success">
                                                                    <i class="fa fa-star"></i>
                                                                </li>
                                                                <li class="list-inline-item text-success">
                                                                    <i class="fa fa-star"></i>
                                                                </li>
                                                                <li class="list-inline-item text-success">
                                                                    <i class="fa fa-star"></i>
                                                                </li>
                                                                <li class="list-inline-item text-success">
                                                                    <i class="fa fa-star"></i>
                                                                </li>
                                                                <li class="list-inline-item text-success">
                                                                    <i class="fa fa-star"></i>
                                                                </li>
                                                            </ul>
                                                        </li>
                                                        <li class="list-inline-item">
                                                            <p class="grey-text">about 22 hours ago</p>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <div class="review-body">
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries,</p>
                                    <div class="col-xs-12 single-review">
                                        <div class="review-header">
                                            <ul class="list-inline space-list">
                                                <li>
                                                    <div class="d-flex">
                                                        <div class="img-col">
                                                            <img src="https://cdn.landesa.org/wp-content/uploads/default-user-image.png" class="img-fluid" alt="">
                                                        </div>
                                                        <div class="text-col">
                                                            <p class="name">Focus Wedding Photographers</p>
                                                            <ul class="list-inline rating-list">
                                                                <li class="list-inline-item">
                                                                    <ul class="list-inline">
                                                                        <li class="list-inline-item text-success">
                                                                            <i class="fa fa-star"></i>
                                                                        </li>
                                                                        <li class="list-inline-item text-success">
                                                                            <i class="fa fa-star"></i>
                                                                        </li>
                                                                        <li class="list-inline-item text-success">
                                                                            <i class="fa fa-star"></i>
                                                                        </li>
                                                                        <li class="list-inline-item text-success">
                                                                            <i class="fa fa-star"></i>
                                                                        </li>
                                                                        <li class="list-inline-item text-success">
                                                                            <i class="fa fa-star"></i>
                                                                        </li>
                                                                    </ul>
                                                                </li>
                                                                <li class="list-inline-item">
                                                                    <p class="grey-text">about 22 hours ago</p>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="review-body">
                                            <p>Thanks</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-5 vendor-detail-text-col">
                    <div class="inner bg-white-custom">
                        <div class="inner-col">
                            <span class="vendor-rating"><i class="fa fa-star"></i> 5.0</span>
                            <p class="title">{{$vendor_details->business_name}}</p>
                            <p class="grey-text">{{$type->name}} in {{$city->name}}</p>
                        </div>
                        <hr>
                        <div class="inner-col">
                            <p class="price">Rs. 1,50,000</p>
                            <p class="grey-text">For 1 Day of Photo + Video <a class="grey-text" href="#">(See Full Pricelist)</a></p>
                        </div>
                        <hr>
                        <div class="inner-col">
                            <ul class="list-inline share-ul">
                                <li class="list-inline-item">
                                    <a href="#" class="grey-text"><i class="far fa-share-square text-primary"></i> Share</a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="#" class="grey-text" data-toggle="modal" data-target="#reviewModal"><i class="far fa-star text-primary"></i> Write Review</a>
                                </li>
                            </ul>
                        </div>
                        <hr>
                        <div class="inner-col">
                            <ul class="list-inline actions-ul">
                                <li class="list-inline-item">
                                    <a href="#" class="btn btn-primary"><i class="fas fa-rupee-sign"></i> Get Quotation</a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="#" class="btn btn-success"><i class="fas fa-phone-alt"></i> CALL/CHAT</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="photographers-section">
        <div class="container-fluid">
            <div class="col-xs-12 common-left-heading">
                <p class="head">Similar Wedding Photographers</p>
                <p class="grey-text">These are Photographers similar to 'Focus Wedding Photographers'</p>
            </div>
            <div class="row vendor-list-row">
                <div class="col-xs-12 col-sm-4">
                    <div class="common-card vendor-card-col">
                        <div class="img-col">
                            <img src="images/real-story.jpg" alt="" class="img-fluid">
                        </div>
                        <div class="text-col">
                            <ul class="list-inline space-list">
                                <li>
                                    <p class="title">Focus Wedding Photographers</p>
                                    <p class="grey-text">Ludhiana</p>
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
                <div class="col-xs-12 col-sm-4">
                    <div class="common-card vendor-card-col">
                        <div class="img-col">
                            <img src="images/real-story.jpg" alt="" class="img-fluid">
                        </div>
                        <div class="text-col">
                            <ul class="list-inline space-list">
                                <li>
                                    <p class="title">Focus Wedding Photographers</p>
                                    <p class="grey-text">Ludhiana</p>
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
                <div class="col-xs-12 col-sm-4">
                    <div class="common-card vendor-card-col">
                        <div class="img-col">
                            <img src="images/real-story.jpg" alt="" class="img-fluid">
                        </div>
                        <div class="text-col">
                            <ul class="list-inline space-list">
                                <li>
                                    <p class="title">Focus Wedding Photographers</p>
                                    <p class="grey-text">Ludhiana</p>
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
                <div class="col-xs-12 col-sm-4">
                    <div class="common-card vendor-card-col">
                        <div class="img-col">
                            <img src="images/real-story.jpg" alt="" class="img-fluid">
                        </div>
                        <div class="text-col">
                            <ul class="list-inline space-list">
                                <li>
                                    <p class="title">Focus Wedding Photographers</p>
                                    <p class="grey-text">Ludhiana</p>
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
                <div class="col-xs-12 col-sm-4">
                    <div class="common-card vendor-card-col">
                        <div class="img-col">
                            <img src="images/real-story.jpg" alt="" class="img-fluid">
                        </div>
                        <div class="text-col">
                            <ul class="list-inline space-list">
                                <li>
                                    <p class="title">Focus Wedding Photographers</p>
                                    <p class="grey-text">Ludhiana</p>
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
                <div class="col-xs-12 col-sm-4">
                    <div class="common-card vendor-card-col">
                        <div class="img-col">
                            <img src="images/real-story.jpg" alt="" class="img-fluid">
                        </div>
                        <div class="text-col">
                            <ul class="list-inline space-list">
                                <li>
                                    <p class="title">Focus Wedding Photographers</p>
                                    <p class="grey-text">Ludhiana</p>
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
                <div class="col-xs-12 col-sm-4">
                    <div class="common-card vendor-card-col">
                        <div class="img-col">
                            <img src="images/real-story.jpg" alt="" class="img-fluid">
                        </div>
                        <div class="text-col">
                            <ul class="list-inline space-list">
                                <li>
                                    <p class="title">Focus Wedding Photographers</p>
                                    <p class="grey-text">Ludhiana</p>
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
                <div class="col-xs-12 col-sm-4">
                    <div class="common-card vendor-card-col">
                        <div class="img-col">
                            <img src="images/real-story.jpg" alt="" class="img-fluid">
                        </div>
                        <div class="text-col">
                            <ul class="list-inline space-list">
                                <li>
                                    <p class="title">Focus Wedding Photographers</p>
                                    <p class="grey-text">Ludhiana</p>
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
                <div class="col-xs-12 col-sm-4">
                    <div class="common-card vendor-card-col">
                        <div class="img-col">
                            <img src="images/real-story.jpg" alt="" class="img-fluid">
                        </div>
                        <div class="text-col">
                            <ul class="list-inline space-list">
                                <li>
                                    <p class="title">Focus Wedding Photographers</p>
                                    <p class="grey-text">Ludhiana</p>
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
            </div>
            <div class="col-xs-12 col-sm-12 load-more-col text-center">
                <a href="#" class="btn btn-primary text-uppercase">Show more Photographers</a>
            </div>
        </div>
    </section>

    @include('frontend.includes.featured-vendors')

    <section id="text-only-section" class="mt-section">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xs-12 col-sm-12">
                    <div class="text-header">
                        {!! $vendor_details->description !!}
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="modal fade" id="reviewModal">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Write Review</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <div class="review-form-main-col">
                        <form id="reviewForm" action="">
                            <div class="form-group">
                                <div class="review-rating" data-rateit-mode="font" data-rateit-resetable="false"></div>
                                <input type="hidden" id="review-rating-hidden">
                            </div>
                            <div class="form-group">
                                <label for="">Title</label>
                                <input id="reviewTitle" type="text" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="">Your Review</label>
                                <textarea id="reviewDescription" name="" class="form-control"></textarea>
                            </div>
                            <div class="form-group">
                                <input id="reviewUserId" type="hidden" value="">
                                <input id="reviewVendorId" type="hidden" value="">
                                <input type="submit" class="btn btn-primary" value="Submit">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('after-scripts')
    <script src="{{asset('theme/js/jquery.rateit.min.js')}}"></script>
    <script>
        $(document).ready(function(){
            var options = {minMargin: 10, maxMargin: 35, itemSelector: ".item"};
            $(".containerCollage").justifiedGallery();
            $('.review-rating').rateit({ max: 5, step: 1, backingfld: '#review-rating-hidden' }); 

            $('#reviewForm').submit(function(e){
                e.preventDefault();
                $.ajax({
                    type: 'POST',
                    url: "{{route('frontend.post-review')}}",
                    data: {
                        '_token': "<?php echo csrf_token() ?>",
                        'user_id': $('#reviewUserId').val(),
                        'vendor_id': $('#reviewVendorId').val(),
                        'title': $('#reviewTitle').val(),
                        'rating': $('#review-rating-hidden').val(),
                        'description': $('#reviewDescription').val()
                    },
                    success: function(res) {
                        if(res.success){
                            $('#reviewForm').trigger('reset');
                            toastr.success(res.message, 'Review posted Successfully!');
                        }else{
                            toastr.error(res.message, 'Error!');
                        }
                    }
                });
            });
        });
    </script>
@endpush

