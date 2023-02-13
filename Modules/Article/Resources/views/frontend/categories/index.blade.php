@extends('frontend.layouts.app')

@section('title') {{ __("Categories") }} @endsection

@section('content')

<section class="section-header bg-primary text-white pb-7 pb-lg-11">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-md-8 text-center">
                <h1 class="display-2 mb-4">
                    Categories
                </h1>
                <p class="lead">
                    All the article categories.
                </p>

                @include('frontend.includes.messages')
            </div>
        </div>
    </div>
    <div class="pattern bottom"></div>
</section>

<section class="section section-lg line-bottom-light">
    <div class="container mt-n7 mt-lg-n12 z-2">
        <div class="row">
            @foreach ($$module_name as $$module_name_singular)
            <?php
            $details_url = route("frontend.$module_name.show", [$$module_name_singular->slug]);
            $cat_image = asset('img/default-vendor.jpg');
            if ($$module_name_singular->image) {
                if (file_exists(public_path() . '/storage/categories/image/' . $$module_name_singular->image)) {
                    $cat_image = asset('storage/categories/image/' . $$module_name_singular->image);
                }
            }
            ?>
            <div class="col-12 col-md-4 mb-4">
                <div class="card bg-white border-light shadow-soft p-4 rounded min-height-505">
                    <a href="{{$details_url}}">
                        <img src="<?= $cat_image ?>" class="card-img-top" alt="<?= ($$module_name_singular->alt) ? $$module_name_singular->alt : $$module_name_singular->name ?>">
                    </a>
                    <div class="card-body p-0 pt-4">
                        <a href="{{$details_url}}" class="h3">
                            <?= Str::words($$module_name_singular->name, '5') ?>
                        </a>
                        <p class="mb-3">
                            <?= Str::words($$module_name_singular->description, 25) ?>
                        </p>
                        <p class="mb-3 font-weight-bold">
                            Total {{$$module_name_singular->posts->count()}} posts.
                        </p>
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

@endsection