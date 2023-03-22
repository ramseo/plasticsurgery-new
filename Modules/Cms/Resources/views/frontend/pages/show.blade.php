@extends('frontend.layouts.app')

@section('title') {{$$module_name_singular->meta_title}} @endsection

@section('site-meta-tags')
<meta name="keyword" content="{{ $$module_name_singular->meta_keywords ? $$module_name_singular->meta_keywords : setting('meta_keyword') }}">
<meta name="description" content="{{ $$module_name_singular->meta_description ? $$module_name_singular->meta_description : setting('meta_keyword') }}">
@endsection

@section('page-banner')
<!-- @if($$module_name_singular->featured_image) -->
<!-- page-banner-height -->
<!-- <section id="page-banner" class="">
    <div class="container-fluid">
        <div class="row">
            <div class="banner-container">
                <div class="vendor-img">
                    <img src="{{$$module_name_singular->featured_image}}" alt="page banner" class="img-fluid filter-cls margin-img-0">
                    <div class="banner-search-col">
                        <div class="search-header">
                            <p class="text">{{$$module_name_singular->name}}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> -->
<!-- @endif -->

<div class="header-space"></div>
<div class="cit">
    <div class="container">
        <p>{{$$module_name_singular->name}}</p>
    </div>
</div>

<div class="container-fluid">
    <div class="container">
        <?= $$module_name_singular->content ?>
        <!-- {!!$$module_name_singular->content!!} -->
    </div>
</div>

<!-- <section id="breadcrumb-sec">
    <div class="container-fluid">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="/">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">{{$$module_name_singular->name}}</li>
            </ol>
        </nav>
    </div>
</section> -->
@endsection


@section('content')
<!-- <article>
    <div class="container-fluid">
        <div class="row">
            @php
            $post_details_url = route('frontend.posts.show',[encode_id($$module_name_singular->id), $$module_name_singular->slug]);
            @endphp
            <div class="blog-detail-content-col cms-pages-content">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col">
                            <div class="col-xs-12 common-heading text-center">
                                <p class="shadow-text">{{$$module_name_singular->name}}</p>
                                <p class="head">{{$$module_name_singular->name}}</p>
                            </div>
                            <div class="mob-content">
                                <p>{!!$$module_name_singular->content!!}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</article> -->

@endsection

@push ("after-scripts")

@endpush