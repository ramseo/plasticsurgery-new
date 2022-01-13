@extends('frontend.layouts.app')

@section('title') {{$user->name}}'s Profile @endsection

@section('content')

<section id="breadcrumb-section">
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
</section>

<section id="user-profile-section">
    <div class="container-fluid">
        <div class="col-xs-12 col-sm-12 user-profile-main-col">

            <div class="row text-right">
{{--                @if ($user->email_verified_at == null)--}}
{{--                <p class="lead">--}}
{{--                    <a class="btn btn-primary" href="{{route('frontend.users.emailConfirmationResend', $user->id)}}">Confirm Email</a>--}}
{{--                </p>--}}
{{--                @endif--}}
                @include('frontend.includes.messages')
            </div>

        </div>
    </div>
</section>


<section class="profile-form-section">
    <div class="container-fluid">
        <div class="row">
            <div class="col-xs-12 col-sm-3">
                <div class="menu-menu-col">
                    <ul class="list-unstyled">
                        <li><a class="active" href="{{ route('frontend.users.profileEdit', auth()->user()->id) }}"><i class="fa fa-user"></i> My Profile</a></li>
                        <li><a href="{{ route('frontend.users.quotations', auth()->user()->id) }}"><i class="far fa-file-alt"></i> Quotations</a></li>
                        <li><a href="{{ route('frontend.users.changePassword', auth()->user()->id) }}"><i class="fa fa-key"></i> Change Password</a></li>
                        <li><a href="{{ route('logout') }}"><i class="fas fa-lock"></i> Logout</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-xs-12 col-sm-9">
                <div class="card bg-white border-light shadow-soft flex-md-row no-gutters p-4">
                    <div class="card-body d-flex flex-column justify-content-between col-auto">

                            {{ html()->modelForm($userprofile, 'PATCH', route('frontend.users.profileUpdate', $user->id))->class('form-horizontal')->acceptsFiles()->open() }}

                        <div class="form-group row">
                            <div class="col-md-2">
                                <img src="{{asset($user->avatar)}}" class="user-profile-image img-fluid img-thumbnail" style="max-height:200px; max-width:200px;" />
                            </div>
                            <div class="col-md-4">
                                {{ html()->label(__('labels.backend.users.fields.avatar'))->class('form-control-label')->for('name') }}
                                <div class="form-group">
                                    <label for="file-multiple-input">Click here to update photo</label>
                                    <input id="file-multiple-input" name="avatar" multiple="" type="file" class="form-control-file">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <!-- <div class="form-group row">
                                    <div class="col-12 text-right">
                                        <a href="{{ route('frontend.users.changePassword', $user->id) }}" class="btn btn-warning btn-sm"><i class="now-ui-icons objects_key-25"></i>&nbsp;Change password</a>
                                    </div>
                                </div> -->
                            </div>
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
                                    $value = ($userprofile->$field_name != "")? $userprofile->$field_name->toDateString() : "";
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
                            <div class="clearfix"></div>
                        </div>

                        <div class="row">
                            <div class="col-12 col-sm-6">
                                <div class="form-group">
                                    <?php
                                    $field_name = 'address';
                                    $field_lable = label_case($field_name);
                                    $field_placeholder = $field_lable;
                                    $required = "";
                                    ?>
                                    {{ html()->label($field_lable, $field_name) }} {!! fielf_required($required) !!}
                                    {{ html()->textarea($field_name)->placeholder($field_placeholder)->class('form-control')->attributes(["$required"]) }}
                                </div>
                            </div>
                            <div class="col-12 col-sm-6">
                                <div class="form-group">
                                    <?php
                                    $field_name = 'bio';
                                    $field_lable = label_case($field_name);
                                    $field_placeholder = $field_lable;
                                    $required = "";
                                    ?>
                                    {{ html()->label($field_lable, $field_name) }} {!! fielf_required($required) !!}
                                    {{ html()->textarea($field_name)->placeholder($field_placeholder)->class('form-control')->attributes(["$required"]) }}
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 col-sm-3">
                                <div class="form-group">
                                    <?php
                                    $field_name = 'url_website';
                                    $field_lable = label_case($field_name);
                                    $field_placeholder = $field_lable;
                                    $required = "";
                                    ?>
                                    {{ html()->label($field_lable, $field_name) }} {!! fielf_required($required) !!}
                                    {{ html()->text($field_name)->placeholder($field_placeholder)->class('form-control')->attributes(["$required"]) }}
                                </div>
                            </div>
                            <div class="col-12 col-sm-3">
                                <div class="form-group">
                                    <?php
                                    $field_name = 'url_facebook';
                                    $field_lable = label_case($field_name);
                                    $field_placeholder = $field_lable;
                                    $required = "";
                                    ?>
                                    {{ html()->label($field_lable, $field_name) }} {!! fielf_required($required) !!}
                                    {{ html()->text($field_name)->placeholder($field_placeholder)->class('form-control')->attributes(["$required"]) }}
                                </div>
                            </div>
                            <div class="col-12 col-sm-3">
                                <div class="form-group">
                                    <?php
                                    $field_name = 'url_twitter';
                                    $field_lable = label_case($field_name);
                                    $field_placeholder = $field_lable;
                                    $required = "";
                                    ?>
                                    {{ html()->label($field_lable, $field_name) }} {!! fielf_required($required) !!}
                                    {{ html()->text($field_name)->placeholder($field_placeholder)->class('form-control')->attributes(["$required"]) }}
                                </div>
                            </div>
                            <div class="col-12 col-sm-3">
                                <div class="form-group">
                                    <?php
                                    $field_name = 'url_linkedin';
                                    $field_lable = label_case($field_name);
                                    $field_placeholder = $field_lable;
                                    $required = "";
                                    ?>
                                    {{ html()->label($field_lable, $field_name) }} {!! fielf_required($required) !!}
                                    {{ html()->text($field_name)->placeholder($field_placeholder)->class('form-control')->attributes(["$required"]) }}
                                </div>
                            </div>
                        </div>

                        <div class="row mt-4">
                            <div class="col-3 mx-auto">
                                <div class="form-group">
                                    {!! Form::button("Save", ['class' => 'btn btn-primary btn-block', 'type'=>'submit']) !!}
                                </div>
                            </div>
                        </div>

                    {{ html()->closeModelForm() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
