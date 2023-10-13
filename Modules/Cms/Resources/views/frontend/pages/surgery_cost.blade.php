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
$doctors = DB::table('users')->select('*')->whereNotNull('city')->Where('is_active', 1)->orderBy("sortable")->get()->toArray();
if ($doctors) {
?>
    <div class="container-fluid">
        <div class="container padding_t_b">
            <p class="title">our surgeons:</p>
            <div class="identity surgeon-filter">
                <select attr="cost" id="surgeon-filter">
                    <option value="">Sort Surgeons By Alphabet</option>
                    <?php
                    $alphabets_arr = [];
                    $fr_name_arr = array_column($doctors, "first_name");
                    foreach ($fr_name_arr as $item) {
                        if (!in_array($item[0], $alphabets_arr)) {
                            array_push($alphabets_arr, $item[0]);
                        }
                    }

                    foreach ($alphabets_arr as $elements) {
                    ?>
                        <option value="<?= strtolower($elements) ?>">
                            <?= $elements ?>
                        </option>
                    <?php } ?>
                </select>
                <div class="sort-btn">
                    <button page-attr="cost" attr="desc" id="sort-by-asc-des" type="button" class="btn">
                        Click To Sort By Descending Order
                    </button>
                </div>
            </div>
            <div id="ajax-surgeons" class="row">
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
                                    Dr. <?= substr($doc_item->first_name . " " . $doc_item->last_name, 0, 25) ?>
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