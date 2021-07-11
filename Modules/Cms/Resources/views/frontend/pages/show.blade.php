@extends('frontend.layouts.app')

@section('title') {{$$module_name_singular->name}} @endsection

@section('content')
<section id="breadcrumb-section">
    <div class="container-fluid">
        <div class="row">
            <div class="col-xs-12 col-sm-12">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="/">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">{{$$module_name_singular->name}}</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</section>
<article>
    <div class="container-fluid">
        <div class="row">
            <div class="col-xs-12 col-sm-12 blog-detail-main-col">
                <h1 class="display-3">
                    {{$$module_name_singular->name}}
                </h1>
                <div class="blog-meta">
                    <span class="">
                        <i class="fa fa-user"></i>
                        {{isset($$module_name_singular->created_by_alias)? $$module_name_singular->created_by_alias : $$module_name_singular->created_by_name}}
                    </span>
                    &nbsp;
                    <span class="post-date">
                        <i class="fa fa-calendar"></i>
                        {{$$module_name_singular->published_at_formatted}}
                    </span>
                </div>
                @include('frontend.includes.messages')
            </div>

            @php
                $post_details_url = route('frontend.posts.show',[encode_id($$module_name_singular->id), $$module_name_singular->slug]);
            @endphp
            <div class="blog-detail-content-col">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col">
                            <img class="img-fluid" src="{{$$module_name_singular->featured_image}}" alt="{{$$module_name_singular->name}}">
                            <p>{!!$$module_name_singular->content!!}</p>
                            <p>
{{--                                @foreach ($$module_name_singular->tags as $tag)--}}
{{--                                <a href="{{route('frontend.tags.show', [encode_id($tag->id), $tag->slug])}}" class="badge badge-sm badge-info text-uppercase px-3">{{$tag->name}}</a>--}}
{{--                                @endforeach--}}
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</article>

@endsection

@push ("after-scripts")
<script src="https://cdn.jsdelivr.net/npm/sharer.js@latest/sharer.min.js"></script>
@endpush
