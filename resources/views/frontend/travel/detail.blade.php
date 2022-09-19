@extends('frontend.layouts.app')

@section('title') {{app_name()}} @endsection

@section('content')


<section id="breadcrumb-section">
    <div class="container-fluid">
        <div class="row">
            <div class="col-xs-12 col-sm-12">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Travel</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</section>


<section id="vendor-detail-section">
    <div class="container-fluid">
        <div class="row vendor-detail-main-col  hny">
            <div class="col-xs-12 col-sm-7 vendor-detail-img-col">
                <div class="hny-content grey-text">
                    {!!$travel->content!!}
                </div>
                <h3>Related Articles</h3>
                <div class="row">
                    @if($related_travels)
                        @foreach($related_travels as $r_travel)
                            <div class="col-lg-4 col-md-4">
                                <a href="{{url('/') . '/honeymoon-ideas/' . $r_travel->slug }}">
                                     @php
                                        $travel_img = asset('img/default-vendor.jpg');
                                        if($r_travel->featured_image){
                                            if(file_exists( public_path().'/'. $r_travel->featured_image )){
                                                $travel_img = asset($r_travel->featured_image);
                                            }
                                        }
                                    @endphp
                                    <div class="honeymoon-thumbnail-img">
                                        <img src="{{$travel_img}}" class="img-fluid">
                                        <p>{{$travel->name}}7</p>
                                        <span>{{$travel->intro}}</span>
                                    </div>
                                </a>
                            </div>
                       @endforeach
                    @endif
                </div>
            </div>
            @include('frontend.travel.side')
        </div>
    </div>
</section>

@endsection