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
                            if(file_exists( public_path().'/storage/type/banner/'. $type->banner )){
                                $vendor_banner = asset('storage/type/banner/'.$type->banner);
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
                    @if($content->title != '')
                        <p class="head">{{$content->title}} ({{$vendors_total}})</p>
                    @endif
                    @if($content->description != '')
                        <p class="text">
                            {!! $content->description !!}
                        </p>
                    @endif
                @endif
            </div>
            <div class="row vendor-list-row" id="post-data">
            </div>
            <div class="ajax-load text-center" style="display:none">
                <p><img src="{{asset('img/loader.gif')}}" alt="Loading More... "></p>
            </div>
{{--            <div class="row vendor-list-row">--}}
{{--                @if($vendors->count() > 0)--}}
{{--                    @include('frontend.vendors.types.inner.vendors')--}}
{{--                @else--}}
{{--                    <div class="col-12 no-records text-center">--}}
{{--                        <p>No {{$type->name}} found in {{$city->name}}</p>--}}
{{--                    </div>--}}
{{--                @endif--}}
{{--            </div>--}}
        </div>
    </section>

    @include('frontend.includes.featured-vendors')
    @include('frontend.vendors.types.inner.reviews')
    @include('frontend.vendors.types.inner.content')

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

    <script type="text/javascript">
        var page = 1;

        let footerOffsetHeight = document.getElementById('footer').offsetHeight;
        let textOnlySectionOffsetHeight = document.getElementById('featured-vendors').offsetHeight;
        let totalHeight = footerOffsetHeight+textOnlySectionOffsetHeight;
        loadMoreData(page);
        $(window).scroll(function() {
            if ($(window).scrollTop() >= ($(document).height() - $(window).height() - totalHeight)) {
                page++;
                loadMoreData(page);
            }
        });


        function loadMoreData(page){
            $.ajax(
                {
                    url: '{{route("frontend.city-ajax")}}'+'?type={{ Request::segment(1) }}&city={{ Request::segment(2) }}&page=' + page,
                    type: "get",
                    beforeSend: function()
                    {
                        $('.ajax-load').show();
                    }
                })
                .done(function(data)
                {
                    if(data.html == " "){
                        $('.ajax-load').html("No more records found");
                        return;
                    }
                    $('.ajax-load').hide();
                    $("#post-data").append(data.html);
                })
                .fail(function(jqXHR, ajaxOptions, thrownError)
                {
                    alert('server not responding...');
                });
        }
    </script>
@endpush
