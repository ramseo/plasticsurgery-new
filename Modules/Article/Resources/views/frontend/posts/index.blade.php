@extends('frontend.layouts.app')

@section('title') {{ __("Blog") }} @endsection

@section('content')


<section id="page-banner" class="">
    <div class="container-fluid">
        <div class="row">
            <div class="banner-container">
                <div class="vendor-img">
                    <img class="filter-cls" src="{{asset('images/vendor-banner-min.jpg')}}" alt="page banner" class="img-fluid">
                    <div class="banner-search-col">
                        <div class="search-header">
                            <p class="text">Blog</p>
                        </div>
                    </div>
                </div>
                <div class="container-fluid">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="/">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Blog</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- <section id="breadcrumb-section">
    <div class="container-fluid">
        <div class="row">
            <div class="col-xs-12 col-sm-12">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="/">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Blog</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</section> -->

@if(count($$module_name))
<section class="listing-section">
    <div class="container-fluid">
        <div class="row">
            @foreach ($$module_name as $$module_name_singular)
            @php
            $details_url = route("frontend.$module_name.show",[$$module_name_singular->slug]);
            @endphp
            <div class="col-12 col-md-4 mb-4">
                <div class="common-card">
                    <div class="img-col">
                        <a href="{{$details_url}}"><img src="{{$$module_name_singular->featured_image}}" class="img-fluid" alt=""></a>
                    </div>
                    <div class="text-col">
                        <a href="{{$details_url}}">
                            <p class="title">{{$$module_name_singular->name}}</p>
                        </a>
                        <p class="text">
                            <!-- {!!isset($$module_name_singular->created_by_alias)? $$module_name_singular->created_by_alias : '<a href="'.route('frontend.users.profile', $$module_name_singular->created_by).'"><h6 class="text-muted small ml-2 mb-0">'.$$module_name_singular->created_by_name.'</h6></a>'!!} -->
                            {{Str::words($$module_name_singular->intro, '15')}}
                        </p>
                        <!-- <p class="date">09 June 2021</p> -->
                    </div>
                </div>
            </div>
            @endforeach
        </div>

        <div class="d-flex justify-content-center w-100 mt-3">
            {{$$module_name->links()}}
        </div>
    </div>
</section>
@endif

@endsection