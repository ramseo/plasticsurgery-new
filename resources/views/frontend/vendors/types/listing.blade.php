@extends('frontend.layouts.app')

@section('title') {{ __("Cities") }} @endsection

@push('after-styles')
<style>
    .vendor-location-links .btn {
        padding: 10px 15px 10px 15px;
    }

    .ajax-load {
        padding: 10px 0px;
        width: 100%;
    }
</style>
@endpush
@section('content')
<section id="page-banner">
    <div class="container-fluid">
        <div class="row">
            <div class="banner-container">
                <?php
                $vendor_banner = asset('images/vendor-banner.jpg');
                if (!isMobile()) {
                    if ($type->banner) {
                        if (file_exists(public_path() . '/storage/type/banner/' . $type->banner)) {
                            $vendor_banner = asset('storage/type/banner/' . $type->banner);
                        }
                    }
                } else {
                    if ($type->mobile_banner) {
                        if (file_exists(public_path() . '/storage/type/mobile_banner/' . $type->mobile_banner)) {
                            $vendor_banner = asset('storage/type/mobile_banner/' . $type->mobile_banner);
                        }
                    }
                }
                ?>
                <div class="vendor-img">
                    <img src="{{$vendor_banner}}" alt="{{$type->name}}" class="img-fluid vendor-img-min-height">
                    <div class="banner-search-col">
                        <div class="search-header">
                            <p class="head">{{$type->name}}</p>
                            <p class="text">Find best {{$type->name}} in your city</p>
                        </div>
                        @if(isset($cities))
                        <div class="vendor-location-links">
                            <ul class="list-inline">
                                @if(count($cities) > 4)
                                @for ($x = 0; $x <= 3; $x++) <li class="list-inline-item">
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
{{-- @include('frontend.vendors.inner.cities')--}}
@include('frontend.vendors.types.inner.modal')
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
        <div class="row vendor-list-row" id="post-data">
            {{-- @include('frontend.vendors.types.inner.vendors')--}}
        </div>
        <div class="ajax-load text-center" style="display:none">
            <p><img src="{{asset('img/loader.gif')}}" alt="Loading More... "></p>
        </div>
    </div>
</section>
@include('frontend.vendors.types.inner.content')
@endsection

@push('after-scripts')


<script type="text/javascript">
    var page = 1;

    let footerOffsetHeight = document.getElementById('footer').offsetHeight;
    let textOnlySectionOffsetHeight = document.getElementById('text-only-section').offsetHeight;
    let totalHeight = footerOffsetHeight + textOnlySectionOffsetHeight;
    loadMoreData(page);
    $(window).scroll(function() {
        if ($(window).scrollTop() >= ($(document).height() - $(window).height() - totalHeight)) {
            page++;
            loadMoreData(page);
        }
    });


    function loadMoreData(page) {
        $.ajax({
                url: '{{route("frontend.type-ajax")}}' + '?type={{ Request::segment(1) }}&page=' + page,
                type: "get",
                beforeSend: function() {
                    $('.ajax-load').show();
                }
            })
            .done(function(data) {
                if (!data.html) {
                    $('.ajax-load').html("No more records found");
                    return;
                }
                $('.ajax-load').hide();
                $("#post-data").append(data.html);
            })
            .fail(function(jqXHR, ajaxOptions, thrownError) {
                alert('server not responding...');
            });
    }
</script>
@endpush