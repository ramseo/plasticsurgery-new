@extends('frontend.layouts.app')

@section('title') {{ __("Cities") }} @endsection

@push('after-styles')
    <style>
        .vendor-location-links .btn {
            padding: 10px 15px 10px 15px;
        }
    </style>
@endpush

@section('content')

<section id="page-banner">
        <div class="container-fluid">
            <div class="row">
                <div class="banner-container">
                    @php
                        $vendor_banner = asset('images/vendor-banner.jpg');
                        if($type->banner){
                            if(file_exists( public_path().'/storage/type/banner/'. $type->banner )){
                                $vendor_banner = asset('storage/type/banner/'.$type->banner);
                            }
                        }
                    @endphp
                    <img src="{{$vendor_banner}}" alt="" class="img-fluid">
                    <div class="banner-search-col">
                        <div class="search-header">
                            <p class="head">{{$type->name}}</p>
                            <p class="text">Find best {{$type->name}} in your city</p>
                        </div>
                        @if(isset($cities))
                            <div class="vendor-location-links">
                                <ul class="list-inline">


{{--                                    @if(isset($cities[0]))--}}
{{--                                        <li class="list-inline-item">--}}
{{--                                            <a href="#" class="btn btn-secondary">{{$cities[0]->name}}</a>--}}
{{--                                            <p>{{$cities[0]->name}}</p>--}}
{{--                                        </li>--}}
{{--                                    @endif--}}
{{--                                    @if(isset($cities[1]))--}}
{{--                                        <li class="list-inline-item">--}}
{{--                                            <a href="#" class="btn btn-secondary">{{$cities[1]->name}}</a>--}}
{{--                                            <p>{{$cities[1]->name}}</p>--}}
{{--                                        </li>--}}
{{--                                    @endif--}}
{{--                                    @if(isset($cities[2]))--}}
{{--                                        <li class="list-inline-item">--}}
{{--                                            <a href="#" class="btn btn-secondary">{{$cities[2]->name}}</a>--}}
{{--                                            <p>{{$cities[2]->name}}</p>--}}
{{--                                        </li>--}}
{{--                                    @endif--}}
{{--                                    @if(isset($cities[3]))--}}
{{--                                        <li class="list-inline-item">--}}
{{--                                            <a href="#" class="btn btn-secondary">{{$cities[3]->name}}</a>--}}
{{--                                            <p>{{$cities[3]->name}}</p>--}}
{{--                                        </li>--}}
{{--                                    @endif--}}
                                    @if(count($cities) > 4)
                                        @for ($x = 0; $x <= 3; $x++) {
                                        <li class="list-inline-item">
                                            <a href="{{url($type->slug.'/'.$cities[$x]->slug)}}" class="btn btn-secondary">{{$cities[$x]->name}}</a>
                                        </li>
                                        @endfor
                                        <li class="list-inline-item">
                                            <a href="#" class="city-modal-link btn btn-primary" data-link-type="{{$type->slug}}" data-toggle="modal" data-target="#cityModal">
                                                Other Cities
                                            </a>
                                        </li>
                                        @else
                                            @foreach ($cities as $citie)
                                            <li class="list-inline-item">
                                                <a href="{{url($type->slug.'/'.$citie->slug)}}" class="btn btn-secondary">{{$citie->name}}</a>
                                            </li>
                                            @endforeach
                                    @endif
                                </ul>
                            </div>
                        @endif
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

    @if(isset($cities))
        <!-- <section id="city-section">
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
                                </div>
                                <div class="text-col">
                                    <p>{{$city_item->name}}</p>
                                </div>
                            </a>
                        </div>
                    @endforeach
                </div>
            </div>
        </section> -->
    @endif

    @if(isset($cities) && $cities)
        <div id="cityModal" class="modal fade" data-backdrop="static" data-keyboard="false">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Select City</h4>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>
                    <div class="modal-body">
                        <div id="modal-search">
                            <div class="search-input-col">
                                <input type="text" id="myInput" class="form-control" onkeyup="myFunction()" placeholder="Search...">
                                <i class="fa fa-search"></i>
                            </div>
                            <ul id="myUL" class="list-unstyled city-list">
                                @php $city_count = 1; @endphp
                                @foreach($cities as $city)
                                    @if($city_count > 4)
                                        <li><a class="city-link" href="{{$city->slug}}">{{$city->name}} <i class="fas fa-long-arrow-alt-right"></i></a></li>
                                    @endif
                                    @php $city_count++; @endphp
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        @push ("after-scripts")
            <script>
                function myFunction() {
                    var input, filter, ul, li, a, i, txtValue;
                    input = document.getElementById('myInput');
                    filter = input.value.toUpperCase();
                    ul = document.getElementById("myUL");
                    li = ul.getElementsByTagName('li');
                    for (i = 0; i < li.length; i++) {
                        a = li[i].getElementsByTagName("a")[0];
                        txtValue = a.textContent || a.innerText;
                        if (txtValue.toUpperCase().indexOf(filter) > -1) {
                            li[i].style.display = "";
                        } else {
                            li[i].style.display = "none";
                        }
                    }
                }
                $(document).ready(function(){
                    $('.city-modal-link').click(function(){
                        var vType = $(this).attr('data-link-type');
                        var cityLinks = $('.city-link');

                        $(cityLinks).each(function(index, value) {
                            var cityLink = $(value).attr('href');
                            var newLink = vType + '/' + cityLink;
                            $(value).attr('href', newLink);
                        });
                    });
                });
            </script>
        @endpush

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
