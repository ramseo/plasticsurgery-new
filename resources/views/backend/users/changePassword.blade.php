@extends('backend.layouts.app')

@section('title') {{ __($module_action) }} {{ $module_title }} @endsection

@section('breadcrumbs')
<x-backend-breadcrumbs>
    <x-backend-breadcrumb-item route='{{route("backend.$module_name.index")}}' icon='{{ $module_icon }}'>
        {{ $module_title }}
    </x-backend-breadcrumb-item>

    <x-backend-breadcrumb-item type="active">{{ __($module_action) }}</x-backend-breadcrumb-item>
</x-backend-breadcrumbs>
@endsection

@section('content')
<div class="card">
    <div class="card-body">
        <div class="row">
            <div class="col-8">
                <h4 class="card-title mb-0">
                    <i class="{{$module_icon}}"></i>
                    <?= "Dr." . " " . $user->first_name . " " . $user->last_name . " " . "Profile" ?>
                    <small class="text-muted">@lang('Change Password') </small>
                </h4>
                <div class="small text-muted">
                    Surgeon Management
                </div>
            </div>
            <!--/.col-->
            <div class="col-4">
                <div class="btn-toolbar float-right" role="toolbar" aria-label="Toolbar with button groups">
                    <x-buttons.return-back />
                </div>
            </div>
            <!--/.col-->
        </div>
        <!--/.row-->
        <hr>
        <div class="row">
            <div class="col">
                <strong>
                    @lang('Name'):
                </strong>
                {{ $$module_name_singular->name }}
            </div>
            <div class="col">
                <strong>
                    @lang('Email'):
                </strong>
                {{ $$module_name_singular->email }}
            </div>
        </div>
        <div class="row mt-4 mb-4">
            <div class="col">
                {{ html()->form('PATCH', route('backend.users.changePasswordUpdate', $$module_name_singular->id))->class('form-horizontal')->open() }}

                <!-- code -->
                <div class="form-group row">
                    {{ html()->label(__('labels.backend.users.fields.old_password'))->class('col-md-2 form-control-label')->for('old_password') }}
                    <div class="col-md-10">
                        <div class="password-container">
                            {{ html()->password('old_password')
                            ->class('form-control')
                            ->placeholder(__('labels.backend.users.fields.old_password'))
                            ->required() }}
                            <span class="displayPassword">
                                <i class="fa fa-eye" aria-hidden="true"></i>
                            </span>
                        </div>
                    </div>
                </div>
                <!-- code -->

                <div class="form-group row">
                    {{ html()->label(__('labels.backend.users.fields.new_password'))->class('col-md-2 form-control-label')->for('new_password') }}

                    <div class="col-md-10">
                        <div class="password-container">
                            {{ html()->password('new_password')
                            ->class('form-control')
                            ->placeholder(__('labels.backend.users.fields.new_password'))
                            ->required() }}
                            <span class="displayPassword">
                                <i class="fa fa-eye" aria-hidden="true"></i>
                            </span>
                        </div>
                    </div>
                </div>
                <!--form-group-->

                <div class="form-group row">
                    {{ html()->label(__('labels.backend.users.fields.new_password_confirmation'))->class('col-md-2 form-control-label')->for('new_password_confirmation') }}

                    <div class="col-md-10">
                        <div class="password-container">
                            {{ html()->password('new_password_confirmation')
                            ->class('form-control')
                            ->placeholder(__('labels.backend.users.fields.new_password_confirmation'))
                            ->required() }}
                            <span class="displayPassword">
                                <i class="fa fa-eye" aria-hidden="true"></i>
                            </span>
                        </div>
                    </div>
                </div>
                <!--form-group-->

                <div class="row">
                    <div class="col">
                        <div class="row">
                            <div class="col-4">
                                <div class="form-group">
                                    {{ html()->button($text = "<i class='fas fa-save'></i> Save", $type = 'submit')->class('btn btn-success') }}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                {{ html()->closeModelForm() }}
            </div>
            <!--/.col-->
        </div>
        <!--/.row-->
    </div>
    <div class="card-footer">
        <div class="row">
            <div class="col">
                <small class="float-right text-muted">
                    @lang('Updated'): {{$user->updated_at->diffForHumans()}},
                    @lang('Created at'): {{$user->created_at->isoFormat('LLLL')}}
                </small>
            </div>
        </div>
    </div>
</div>

@endsection