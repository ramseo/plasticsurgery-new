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
                        <li class="breadcrumb-item"><a href="{{ route('frontend.posts.index') }}">Blog</a></li>
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
                <p>
                    <span class="font-weight-bold">
                        Category:
                    </span>

{{--                    <a href="{{route('frontend.categories.show', [encode_id($$module_name_singular->category_id), $$module_name_singular->category->slug])}}" class="badge badge-sm badge-warning text-uppercase px-3">{{$$module_name_singular->category_name}}</a>--}}
                </p>
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

<div class="blog-comments-col">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 col-lg-8">
                <h5 class="mb-4">
{{--                    @if($$module_name_singular->comments->count())--}}
{{--                    <span class="text-primary">({{$$module_name_singular->comments->count()}})</span>--}}
{{--                    @endif--}}

{{--                    @lang('Comments')--}}
                </h5>
                <div class="row">
                    @auth
                    <div class="col-12 align-self-center">
                        <p>
                            <a class="btn btn-primary" data-toggle="collapse" href="#commentForm" role="button" aria-expanded="false" aria-controls="commentForm"><i class="far fa-comment-alt"></i> Write new comment</a>
                        </p>
                    </div>
                    <div class="row justify-content-md-center">
                        <div class="col align-self-center">
                            <div class="collapse multi-collapse" id="commentForm">
                                <div class="card card-body">
                                    <p>
                                        Your comment will be in the moderation queue. If your comment will be approved, you will get notification and it will be displayed here.
                                        <br>
                                        Please submit once & wait till published.
                                    </p>

                                    {{ html()->form('POST', route("frontend.comments.store"))->class('form')->open() }}
                                    <div class="row">
                                        <div class="col-12">
                                            <div class="form-group">
                                                <?php
                                                $field_name = 'name';
                                                $field_lable = "Subject";
                                                $field_placeholder = $field_lable;
                                                $required = "required";
                                                ?>
                                                {{ html()->label($field_lable, $field_name) }} {!! fielf_required($required) !!}
                                                {{ html()->text($field_name)->placeholder($field_placeholder)->class('form-control')->attributes(["$required"]) }}
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-group">
                                                <?php
                                                $field_name = 'comment';
                                                $field_lable = "Details Comment";
                                                $field_placeholder = $field_lable;
                                                $required = "required";
                                                ?>
                                                {{ html()->label($field_lable, $field_name) }} {!! fielf_required($required) !!}
                                                {{ html()->textarea($field_name)->placeholder($field_placeholder)->class('form-control')->attributes(["$required", "rows"=>5]) }}
                                            </div>
                                        </div>
                                    </div>

                                    <?php
                                    $field_name = 'post_id';
                                    $field_lable = label_case($field_name);
                                    $field_placeholder = $field_lable;
                                    $required = "required";
                                    ?>
                                    {{ html()->hidden($field_name)->value(encode_id($$module_name_singular->id))->attributes(["$required"]) }}

                                    <?php
                                    $field_name = 'user_id';
                                    $field_lable = label_case($field_name);
                                    $field_placeholder = $field_lable;
                                    $required = "required";
                                    ?>
                                    {{ html()->hidden($field_name)->value(encode_id(auth()->user()->id))->attributes(["$required"]) }}

                                    <div class="row">
                                        <div class="col-6">
                                            <div class="form-group">
                                                {{ html()->button($text = "<i class='fas fa-save'></i> Submit", $type = 'submit')->class('btn btn-success') }}
                                            </div>
                                        </div>
                                    </div>

                                    {{ html()->form()->close() }}
                                </div>
                            </div>
                        </div>
                    </div>
                    @endauth
                    @guest
                    <div class="col-12 col-sm-6 align-self-center">
                        <p>
                            <a href="{{route('login')}}?redirectTo={{url()->current()}}" class="btn btn-primary btn-block"><i class="fas fa-user-shield"></i> Login & Write comment</a>
                        </p>
                    </div>
                    @endguest
                </div>

                <div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@push ("after-scripts")
<script src="https://cdn.jsdelivr.net/npm/sharer.js@latest/sharer.min.js"></script>
@endpush
