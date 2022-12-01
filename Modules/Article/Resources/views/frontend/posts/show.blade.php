@extends('frontend.layouts.app')

@section('title') {{$$module_name_singular->meta_title}} @endsection

@section('site-meta-tags')
<meta name="keyword" content="{{ $$module_name_singular->meta_keywords ? $$module_name_singular->meta_keywords : setting('meta_keyword') }}">
<meta name="description" content="{{ $$module_name_singular->meta_description ? $$module_name_singular->meta_description : setting('meta_keyword') }}">
@endsection

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
            @php
            $post_details_url = route('frontend.posts.show',[encode_id($$module_name_singular->id), $$module_name_singular->slug]);
            @endphp
            <div class="col-xs-6 col-sm-6 blog-detail-content-col">
                <div class="col-sm-12">
                    <div class="row justify-content-center">
                        <img class="img-fluid" src="{{$$module_name_singular->featured_image}}" alt="{{$$module_name_singular->name}}">
                    </div>
                </div>
            </div>
            <div class="col-xs-6 col-sm-6 blog-detail-main-col">
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
                <div class="blog-flex-cat">
                    <span class="font-weight-bold">
                        Category:
                    </span>
                    <a target="_blank" href="{{route('frontend.categories.show', [$$module_name_singular->category->slug])}}" class="badge badge-sm badge-warning text-uppercase px-3">{{$$module_name_singular->category_name}}</a>
                </div>
                <!-- Multiple Tags -->
                <?php
                if ($$module_name_singular->tag_ids) {
                    $arr = json_decode($$module_name_singular->tag_ids);
                    $getPostTags = getSelectedTagVal($arr);
                ?>
                    <div class="blog-flex-cat">
                        <span class="font-weight-bold">
                            Tags:
                        </span>
                        <?php
                        foreach ($getPostTags as $tag) {
                            $tagSlug = $tag['slug'];
                        ?>
                            <a target="_blank" href="{{route('frontend.tags.show', [$tagSlug])}}" class="badge badge-sm badge-warning text-uppercase px-3">
                                <?= $tag['name'] ?>
                            </a>
                        <?php
                        }
                        ?>
                    </div>
                <?php } ?>
                <!-- Multiple Tags -->
                <div class="blog-intro">
                    {{$$module_name_singular->intro}}
                </div>
            </div>
            <div class="col-xs-12 col-sm-12">
                <div class="desc-top">
                    {!!$$module_name_singular->content!!}
                </div>
                <div class="tags-cls">
                    @foreach ($$module_name_singular->tags as $tag)
                    <a href="{{route('frontend.tags.show', [encode_id($tag->id), $tag->slug])}}" class="badge badge-sm badge-info text-uppercase px-3">{{$tag->name}}</a>
                    @endforeach
                </div>
                @include('frontend.includes.messages')
            </div>
        </div>
    </div>
</article>

<div class="blog-comments-col">
    <div class="container-fluid">
        <div class="row">
            <div class="col-xs-12 col-sm-12">
                <h5 class="mb-4">
                    @if($$module_name_singular->comments->count())
                    <span class="text-primary">({{$$module_name_singular->comments->count()}})</span>
                    @endif
                    @lang('Comments')
                </h5>

                @auth
                <div class="col-xs-12 align-self-center">
                    <a class="btn btn-primary" data-toggle="collapse" href="#commentForm" role="button" aria-expanded="false" aria-controls="commentForm">
                        <i class="far fa-comment-alt"></i>
                        Write new comment
                    </a>
                </div>
                <div class="row justify-content-md-center">
                    <div class="col align-self-center">
                        <div class="collapse multi-collapse" id="commentForm">
                            <div class="card card-body">
                                <div>
                                    Your comment will be in the moderation queue. If your comment will be approved, you will get notification and it will be displayed here.
                                    <br>
                                    Please submit once & wait till published.
                                </div>
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
                                            {{ html()->button($text = "Submit", $type = 'submit')->class('btn btn-primary') }}
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

                <div>
                    <div class="mt-5 detail-review-body">
                        @php
                        $comments_all = $$module_name_singular->comments;
                        $comments_level1 = $comments_all->where('parent_id','');
                        @endphp

                        @foreach ($comments_level1 as $comment)
                        <div class="col-xs-12 single-review">
                            <div class="review-header">
                                <ul class="list-inline space-list">
                                    <li>
                                        <div class="d-flex">
                                            <div class="img-col">
                                                <img src="https://cdn.landesa.org/wp-content/uploads/default-user-image.png" class="img-fluid" alt="">
                                            </div>
                                            <div class="text-col">
                                                <p class="name">{{$comment->user_name}}</p>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="review-body grey-text">
                                <p class="m-0">
                                    {{$comment->name}}
                                </p>
                                <p>{!!$comment->comment!!}</p>
                                <div class="mt-4 mb-3 d-flex justify-content-between">
                                    @auth
                                    <button type="button" id="replyBtn{{encode_id($comment->id)}}" class="btn btn-outline-primary btn-sm float-right m-0" data-toggle="collapse" href="#replyForm{{encode_id($comment->id)}}" role="button" aria-expanded="false" aria-controls="replyForm{{encode_id($comment->id)}}"><i class="fas fa-reply mr-2"></i> Reply</button>
                                    @else
                                    <a href="{{route('login')}}?redirectTo={{url()->current()}}" class="btn btn-primary btn-sm float-right m-0"><i class="fas fa-user-shield"></i> Login & Reply</a>
                                    @endauth
                                </div>
                                @auth
                                <div class="collapse multi-collapse" id="replyForm{{encode_id($comment->id)}}">
                                    <p>
                                        {{ html()->form('POST', route("frontend.comments.store"))->class('form')->open() }}

                                        <?php
                                        $field_name = 'parent_id';
                                        $field_lable = label_case($field_name);
                                        $field_placeholder = $field_lable;
                                        $required = "required";
                                        ?>
                                        {{ html()->hidden($field_name)->value(encode_id($comment->id))->attributes(["$required"]) }}

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

                                        <?php
                                        $field_name = 'name';
                                        $field_lable = label_case($field_name);
                                        $field_placeholder = $field_lable;
                                        $required = "required";
                                        ?>
                                        {{ html()->hidden($field_name)->value("Reply of ".$comment->name)->attributes(["$required"]) }}

                                    <div class="row">
                                        <div class="col-9">
                                            <div class="form-group">
                                                <?php
                                                $field_name = 'comment';
                                                $field_lable = "Reply";
                                                $field_placeholder = $field_lable;
                                                $required = "required";
                                                ?>
                                                <!-- {{ html()->label($field_lable, $field_name) }} {!! fielf_required($required) !!} -->
                                                {{ html()->text($field_name)->placeholder($field_placeholder)->class('form-control')->attributes(["$required"]) }}
                                            </div>
                                        </div>

                                        <div class="col-3">
                                            <div class="form-group">
                                                {{ html()->button($text = "Submit", $type = 'submit')->class('btn btn-primary m-0') }}
                                            </div>
                                        </div>
                                    </div>

                                    {{ html()->form()->close() }}
                                    </p>
                                </div>
                                @endauth
                                <!-- Sub comment -->
                                @php
                                $comments_of_comment = $comments_all->where('parent_id', $comment->id);
                                @endphp
                                @if ($comments_of_comment)
                                @foreach ($comments_of_comment as $comment_reply)
                                <div class="col-xs-12 single-review">
                                    <div class="review-header">
                                        <ul class="list-inline space-list">
                                            <li>
                                                <div class="d-flex">
                                                    <div class="img-col">
                                                        <img src="https://cdn.landesa.org/wp-content/uploads/default-user-image.png" class="img-fluid" alt="">
                                                    </div>
                                                    <div class="text-col">
                                                        <p class="name">{{$comment_reply->user_name}}</p>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="review-body grey-text">
                                        <p>{!!$comment_reply->comment!!}</p>
                                    </div>
                                </div>
                                @endforeach
                                @endif
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@push ("after-scripts")
<script src="https://cdn.jsdelivr.net/npm/sharer.js@latest/sharer.min.js"></script>
@endpush