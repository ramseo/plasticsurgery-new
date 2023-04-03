@extends('frontend.layouts.app')

@section('title') {{$$module_name_singular->meta_title}} @endsection

@section('site-meta-tags')
<meta name="keyword" content="{{ $$module_name_singular->meta_keywords ? $$module_name_singular->meta_keywords : setting('meta_keyword') }}">
<meta name="description" content="{{ $$module_name_singular->meta_description ? $$module_name_singular->meta_description : setting('meta_keyword') }}">
@endsection

@section('content')

<div class="header-space"></div>
<div class="cit">
    <div class="container">
        <p>{{$$module_name_singular->name}}</p>
    </div>
</div>

<div class="container-fluid">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <?= $$module_name_singular->content ?>
            </div>
            <div class="col-lg-4 loc">

                <?php
                $popular_cities1 = popular_cities_surgeries("cities", $skip = 0, $take = 13);
                $popular_cities2 = popular_cities_surgeries("cities", $skip = 13, $take = 100);
                ?>

                <p class="identity text-center">
                    Clinic Locations
                </p>
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <?php if ($popular_cities1) { ?>
                            <ul>
                                <?php foreach ($popular_cities1 as $cities1) { ?>
                                    <li><a href="<?= $cities1->slug ?>"><?= $cities1->name ?></a></li>
                                <?php } ?>
                            </ul>
                        <?php } ?>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <?php if ($popular_cities2) { ?>
                            <ul>
                                <?php foreach ($popular_cities2 as $cities2) { ?>
                                    <li><a href="<?= $cities2->slug ?>"><?= $cities2->name ?></a></li>
                                <?php } ?>
                            </ul>
                        <?php } ?>
                    </div>
                </div>

                <?php
                $popular_surgeries1 = popular_cities_surgeries("popular-surgeries", $skip = 0, $take = 16);
                $popular_surgeries2 = popular_cities_surgeries("popular-surgeries", $skip = 16, $take = 100);
                ?>

                <p class="identity text-center">Popular Surgeries</p>
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <?php if ($popular_surgeries1) { ?>
                            <ul>
                                <?php foreach ($popular_surgeries1 as $surgeries1) { ?>
                                    <li><a href="<?= $surgeries1->url ?>"><?= $surgeries1->title ?></a></li>
                                <?php } ?>
                            </ul>
                        <?php } ?>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <?php if ($popular_surgeries2) { ?>
                            <ul>
                                <?php foreach ($popular_surgeries2 as $surgeries2) { ?>
                                    <li><a href="<?= $surgeries2->url ?>"><?= $surgeries2->title ?></a></li>
                                <?php } ?>
                            </ul>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>

@endsection

@push ("after-scripts")

@endpush