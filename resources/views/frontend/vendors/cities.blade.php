@extends('frontend.layouts.app')

@section('title') {{ __("Cities") }} @endsection

@section('content')

    <section id="breadcrumb-section">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xs-12 col-sm-12">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">{{$type->name}}</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </section>

    @if(isset($cities))
        <section id="city-section">
            <div class="container-fluid">
                <div class="col-xs-12 common-heading text-center">
                    <p class="shadow-text">{{$type->name}}</p>
                    <p class="head">Find Best {{$type->name}} in</p>

                </div>
                <div class="row city-row">
                    @foreach($cities as $city_item)
                        <div class="col-xs-12 col-sm-3 single-city-col">
                            <a href="{{url('/') . '/' . $type->slug . '/' . $city_item->slug}}">
                                <div class="img-col">
                                    <i class="fas fa-city"></i>
                                    <!-- <img class="img-fluid" src="" alt=""> -->
                                </div>
                                <div class="text-col">
                                    <p>{{$city_item->name}}</p>
                                </div>
                            </a>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
    @endif

    @if(isset($vendors))
        <section id="photographers-section">
            <div class="container-fluid">
                <div class="col-xs-12 common-heading text-center">
                    <p class="shadow-text">{{$type->name}}</p>
                    @if($content)
                        @if($content->title != '')
                            <p class="head">{{$content->title}} in all cities ({{$vendors_total}})</p>
                        @endif
                        @if($content->description != '')
                            <p class="text">
                                {!! $content->description !!}
                            </p>
                        @endif
                    @endif
                </div>
                <div class="row vendor-list-row">
                    @if($vendors->count() > 0)
                        @foreach($vendors as $vendor)
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
                    @endif
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
            <section id="text-only-section"  class="mt-5" >
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
