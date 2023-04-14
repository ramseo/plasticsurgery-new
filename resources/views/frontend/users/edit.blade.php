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
    }

    .profile-form-section {
        margin-top: 28px;
    }
</style>

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
            <div class="col-xs-12 col-sm-9 mtab">

                <!-- tabs code -->
                <ul class="nav nav-tabs" role="tablist">
                    <li class="nav-item active">
                        <a class="nav-link active ancr doctor-profile-tab-cls" data-toggle="tab" href="#doctor-profile-tab" aria-expanded="true">
                            Doctor Profile
                        </a>
                    </li>
                    <li class="nav-item">
                        <a onclick="removeActive('doctor-profile-tab-cls')" class="nav-link ancr" data-toggle="tab" href="#doctor-reviews-tab" aria-expanded="false">
                            Doctor Results
                        </a>
                    </li>
                </ul>

                <div class="tab-content">
                    <div id="doctor-profile-tab" class="container tab-pane active in">
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
                                            <!-- Multiple Cities -->
                                            <?php
                                            $get_userprofiles = get_userprofiles($user->id);

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
                                            <!-- Multiple Cities -->
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <?php
                                            $field_name = 'experience_years';
                                            $field_lable = label_case($field_name);
                                            $field_placeholder = $field_lable;
                                            $required = "required";
                                            ?>
                                            {{ html()->label($field_lable, $field_name) }} {!! fielf_required($required) !!}
                                            {!! Form::text($field_name, $get_userprofiles->bio, ['class' => 'form-control','placeholder' => 'Experience Years', $required => $required]) !!}
                                            <!-- {{ html()->text($field_name)->placeholder($field_placeholder)->class('form-control')->attributes(["$required"]) }} -->
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-sm-6">
                                        <div class="form-group">
                                            <?php
                                            $field_name = 'address';
                                            $field_lable = label_case($field_name);
                                            $field_placeholder = $field_lable;
                                            $required = "required";
                                            ?>
                                            {{ html()->label($field_lable, $field_name) }} {!! fielf_required($required) !!}
                                            {!! Form::textarea($field_name, $get_userprofiles->address, ['class' => 'form-control', 'rows' => 5, 'cols' => 10,'placeholder' => 'Address', $required => $required]) !!}
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
                    <div id="doctor-reviews-tab" class="container tab-pane fade">
                        <div class="row" style="clear: both;margin-top: 18px;">
                            <div class="col-12">
                                <div class="dropzone" id="file-dropzone"></div>
                            </div>
                        </div>

                        <?php

                        $getResultImgs = getResultImgs($user->id);

                        if ($getResultImgs) {
                        ?>
                            <div class="container">
                                <div class="row">
                                    <div class="gallery1 row">
                                        @foreach ($getResultImgs as $image)
                                        <div class="col-3 gallery-col">
                                            <div class="gallery-img-col">
                                                <img class="img-fluid" src="{{ asset('storage/album').'/'.$image->album_id.'/'.$image->name }}" alt="img" />
                                            </div>
                                            <div class="gallery-action-col text-center">
                                                <a onclick="return confirm('Are you sure?')" class="" href="{{ route('vendor.image.delete', $image->id) }}"><i class="fas fa-trash-alt"></i></a>
                                            </div>
                                        </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        <?php } ?>

                    </div>
                </div>
                <!-- tabs code -->
            </div>
        </div>
    </div>
</section>

@endsection

<!-- Select2 Library -->
<x-library.select2 />
<x-library.datetime-picker />

@push ('after-scripts')
<script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.7.0/min/dropzone.min.js"></script>
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

    function removeActive(cls) {
        var elm = $('.' + cls).parent();
        $(elm).removeClass("active");
    }
</script>

<script type="text/javascript">
    // Add the following code if you want the name of the file appear on select
    $(".custom-file-input").on("change", function() {
        var fileName = $(this).val().split("\\").pop();
        $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
    });
</script>

<script>
    Dropzone.options.fileDropzone = {
        url: '<?= route('vendor.image.store', $user->id) ?>',
        acceptedFiles: ".jpeg,.jpg,.png,.gif",
        addRemoveLinks: true,
        maxFilesize: 1000,
        headers: {
            'X-CSRF-TOKEN': "<?= csrf_token() ?>"
        },
        removedfile: function(file) {
            var name = file.upload.filename;
            $.ajax({
                type: 'POST',
                url: '<?= route('vendor.image.remove') ?>',
                data: {
                    "_token": "<?= csrf_token() ?>",
                    name: name
                },
                success: function(data) {
                    console.log("File has been successfully removed!!");
                },
                error: function(e) {
                    console.log(e);
                }
            });
            var fileRef;
            return (fileRef = file.previewElement) != null ?
                fileRef.parentNode.removeChild(file.previewElement) : void 0;
        },
        success: function(file, response) {
            console.log(file);
        },
    }
</script>

@endpush