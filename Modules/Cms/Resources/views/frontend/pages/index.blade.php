@extends('frontend.layouts.app')

@section('title') {{ __("Posts") }} @endsection

@section('content')

<!-- <section class="section-header bg-primary text-white pb-7 pb-lg-11">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-md-8 text-center">
                <h1 class="display-2 mb-4">
                    The Super Articles
                </h1>
                <p class="lead">
                    We publish articles on a number of topics. We encourage you to read our posts and let us know your feedback. It would be really help us to move forward.
                </p>

                @include('frontend.includes.messages')
            </div>
        </div>
    </div>
    <div class="pattern bottom"></div>
</section> -->

<section id="breadcrumb-section">
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
</section>

@if(count($$module_name))
<section class="listing-section">
    <div class="container-fluid">
        <div class="row">

            @foreach ($$module_name as $$module_name_singular)
            @php
                $details_url = route("frontend.$module_name.show",[encode_id($$module_name_singular->id), $$module_name_singular->slug]);
            @endphp
            <div class="col-12 col-md-4 mb-4">
                <div class="common-card">
                    <div class="img-col">
                        <a href="{{$details_url}}"><img src="{{$$module_name_singular->featured_image}}" class="img-fluid" alt=""></a>
                    </div>
                    <div class="text-col">
                        <p class="title">{{$$module_name_singular->name}}</p>
                        <p class="text">
                            <!-- {!!isset($$module_name_singular->created_by_alias)? $$module_name_singular->created_by_alias : '<a href="'.route('frontend.users.profile', $$module_name_singular->created_by).'"><h6 class="text-muted small ml-2 mb-0">'.$$module_name_singular->created_by_name.'</h6></a>'!!} -->
                            {{Str::words($$module_name_singular->intro, '15')}}
                        </p>
                        <p class="date">09 June 2021</p>
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
