@extends('frontend.layouts.app')

@section('title') {{$$module_name_singular->meta_title}} @endsection

@section('site-meta-tags')
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
    <div class="container padding_t_b">
        {!!$$module_name_singular->content!!}
    </div>
</div>

<!-- surgeons listing -->
<?php
$doctors = DB::table('users')->select('*')->whereNotNull('city')->Where('is_active', 1)->orderBy("first_name")->get()->toArray();
if ($doctors) {
?>
    <div class="container-fluid">
        <div class="container padding_t_b">
            <p class="title">our surgeons:</p>
            <div class="row">
                <?php foreach ($doctors as $doc_item) { ?>
                    <div class="col-sm-2">
                        <a target="_blank" href="<?= url("surgeon/dr-$doc_item->username") ?>">
                            <div class="list-doctor">
                                <?php if (file_exists(public_path() . '/storage/user/profile/' . $doc_item->avatar)) { ?>
                                    <img class="card-img-top" src="<?= asset('/storage/user/profile/' . $doc_item->avatar) ?>" alt="<?= $doc_item->first_name . ' ' . $doc_item->last_name ?>" style="width:100%" />
                                <?php } else { ?>
                                    <img class="card-img-top" src="<?= asset($doc_item->avatar) ?>" alt="<?= $doc_item->first_name . ' ' . $doc_item->last_name ?>" style="width:100%" />
                                <?php } ?>
                                <p>
                                    Dr. <?= $doc_item->first_name . " " . $doc_item->last_name ?>
                                </p>
                            </div>
                        </a>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>
<?php } ?>
<div class="clearfix"></div>
<!-- surgeons listing -->

@endsection

@push ("after-scripts")

@endpush