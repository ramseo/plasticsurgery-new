@extends('frontend.layouts.app')

@section('title') {{$user->name}}'s Profile @endsection

@section('content')

<style>
    .edit-pics {
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .edit-pics img {
        object-fit: cover;
        /* object-position: -45px; */
    }

    .profile-form-section {
        margin-top: 28px;
    }
</style>

<!-- <section id="breadcrumb-section">
    <div class="container-fluid">
        <div class="row">
            <div class="col-xs-12 col-sm-12">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="/">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">My Profile</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</section> -->
{{--<section id="user-profile-section">--}}
{{-- <div class="container-fluid">--}}
{{-- <div class="col-xs-12 col-sm-12 user-profile-main-col">--}}

{{-- <div class="row text-right">--}}
{{-- @if ($user->email_verified_at == null)--}}
{{-- <p class="lead">--}}
{{-- <a class="btn btn-primary" href="{{route('frontend.users.emailConfirmationResend', $user->id)}}">Confirm Email</a>--}}
{{-- </p>--}}
{{-- @endif--}}
{{-- @include('frontend.includes.messages')--}}
{{-- </div>--}}

{{-- </div>--}}
{{-- </div>--}}
{{--</section>--}}

<div class="header-space"></div>
<div class="cit">
    <div class="container">
        <p>My Profile</p>
    </div>
</div>

<section class="profile-form-section">
    <div class="container-fluid">
        <div class="row">
            <div class="col-xs-12 col-sm-3 avatar-menu-bar">
                @include('frontend.users.menu')
            </div>
            <div class="col-xs-12 col-sm-9">
                <div class="card bg-white border-light shadow-soft flex-md-row no-gutters p-4">
                    <div class="card-body d-flex flex-column justify-content-between col-auto">
                        <?php
                        $getUserProvider = getUserProvider($user->id);
                        ?>

                        {{ html()->modelForm($user, 'POST', route('frontend.users.profileUpdate'))->class('form-horizontal')->acceptsFiles()->open() }}

                        <div class="form-group row ml-2">
                            <div class="<?= ($getUserProvider == NULL) ? "col-md-6" : "col-md-12" ?> edit-pics avatar-padding">

                                @if(file_exists(public_path().'/storage/user/profile/'. $user->avatar))
                                <img src="{{asset('/storage/user/profile/'. $user->avatar)}}" class="user-profile-image img-fluid img-thumbnail" style="max-height:200px; max-width:200px;" />
                                @else
                                <img src="{{asset($user->avatar)}}" class="user-profile-image img-fluid img-thumbnail" style="max-height:200px; max-width:200px;" />
                                @endif

                            </div>
                            <?php
                            if ($getUserProvider == NULL) {
                            ?>
                                <div class="col-md-6 avatar-padding">
                                    {{ html()->label(__('labels.backend.users.fields.avatar'))->class('form-control-label')->for('name') }}
                                    <div class="form-group">
                                        <label for="file-multiple-input">Click here to update photo</label>
                                        <input id="file-multiple-input" name="avatar" multiple="" type="file" class="form-control-file">
                                        <small>Please upload a 200*200 size image</small>
                                    </div>
                                </div>
                            <?php } ?>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <?php
                                    $field_name = 'first_name';
                                    $field_lable = label_case($field_name);
                                    $field_placeholder = $field_lable;
                                    $required = "required";
                                    ?>
                                    {{ html()->label($field_lable, $field_name) }} {!! fielf_required($required) !!}
                                    {{ html()->text($field_name)->placeholder($field_placeholder)->class('form-control')->attributes(["$required"]) }}
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <?php
                                    $field_name = 'last_name';
                                    $field_lable = label_case($field_name);
                                    $field_placeholder = $field_lable;
                                    $required = "required";
                                    ?>
                                    {{ html()->label($field_lable, $field_name) }} {!! fielf_required($required) !!}
                                    {{ html()->text($field_name)->placeholder($field_placeholder)->class('form-control')->attributes(["$required"]) }}
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <?php
                                    $field_name = 'email';
                                    $field_lable = label_case($field_name);
                                    $field_placeholder = $field_lable;
                                    $required = "";
                                    ?>
                                    {{ html()->label($field_lable, $field_name) }} {!! fielf_required($required) !!}
                                    {{ html()->email($field_name)->placeholder($field_placeholder)->class('form-control')->attributes(["$required"])->disabled() }}
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <?php
                                    $field_name = 'mobile';
                                    $field_lable = label_case($field_name);
                                    $field_placeholder = $field_lable;
                                    $required = "";
                                    ?>
                                    {{ html()->label($field_lable, $field_name) }} {!! fielf_required($required) !!}
                                    {{ html()->text($field_name)->placeholder($field_placeholder)->class('form-control')->attributes(["$required"]) }}
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <?php
                                    $field_name = 'date_of_birth';
                                    $field_lable = label_case($field_name);
                                    $field_placeholder = $field_lable;
                                    $value = ($user->date_of_birth != "") ? $user->date_of_birth->toDateString() : "";
                                    $required = "required";
                                    ?>
                                    {{ html()->label($field_lable, $field_name) }} {!! fielf_required($required) !!}
                                    {{ html()->text($field_name)->placeholder($field_placeholder)->class('form-control')->value($value)->attributes(["$required", 'type'=>'date']) }}
                                </div>
                            </div>

                            <div class="col-sm-6">
                                <div class="form-group">
                                    <?php
                                    $field_name = 'gender';
                                    $field_lable = label_case($field_name);
                                    $field_placeholder = "-- Select an option --";
                                    $required = "";
                                    $select_options = [
                                        'Female' => 'Female',
                                        'Male' => 'Male',
                                        'Other' => 'Other',
                                    ];
                                    ?>
                                    {{ html()->label($field_lable, $field_name) }} {!! fielf_required($required) !!}
                                    {{ html()->select($field_name, $select_options)->placeholder($field_placeholder)->class('form-control ')->attributes(["$required"]) }}
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group tags-group">

                                    <!-- Multiple Tags -->
                                    <?php
                                    $field_name = 'city[]';
                                    $field_lable = label_case($field_name);
                                    $field_relation = "city";
                                    $required = "";

                                    if (!$user) {
                                    ?>
                                        {{ html()->label($field_lable, "city") }}
                                        {{ html()->select($field_name, ($module_name_singular) ?optional($module_name_singular->$field_relation)->pluck('name', 'id'):'')->class('form-control select2-cities')->attributes(['multiple']) }}
                                    <?php
                                    } else {
                                        $getSelectedTagVal = getSelectedCityVal(json_decode($user->city));
                                    ?>
                                        <label for="city">Cities</label>
                                        <select name="city[]" class="form-control select2-cities" multiple>
                                            <?php
                                            if ($getSelectedTagVal) {
                                                foreach ($getSelectedTagVal as $item) {
                                            ?>
                                                    <option value="<?= $item['id'] ?>" selected>
                                                        <?= $item['name'] ?>
                                                    </option>
                                            <?php
                                                }
                                            }
                                            ?>
                                        </select>
                                    <?php } ?>

                                    <!-- Multiple Tags -->

                                </div>
                            </div>
                        </div>

                        <div class="mx-auto avatar-save">
                            {!! Form::button("Save", ['class' => 'btn btn-primary btn-block', 'type'=>'submit']) !!}
                        </div>

                        {{ html()->closeModelForm() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection

<!-- Select2 Library -->
<x-library.select2 />
<x-library.datetime-picker />

@push ('after-scripts')
<script>
    $(document).ready(function() {

        $('.select2-cities').select2({
            theme: "bootstrap",
            multiple: true,
            placeholder: '@lang("Select an option")',
            minimumInputLength: 0,
            allowClear: true,
            ajax: {
                url: '{{route("frontend.users.get_user_cities")}}',
                dataType: 'json',
                data: function(params) {
                    return {
                        q: $.trim(params.term),
                    };
                },
                processResults: function(data) {
                    return {
                        results: data
                    };
                },
                cache: true
            }
        });

    });
</script>
@endpush