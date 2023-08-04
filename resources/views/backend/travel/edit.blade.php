@extends('backend.layouts.app')

@section('title') Edit Travel @endsection

@section('breadcrumbs')
<x-backend-breadcrumbs>
    <x-backend-breadcrumb-item route='{{route("backend.travel.index")}}' icon='c-icon cil-people'>
        Travel
    </x-backend-breadcrumb-item>
    <x-backend-breadcrumb-item type="active">Edit</x-backend-breadcrumb-item>
</x-backend-breadcrumbs>
@endsection

@section('content')
<div class="card">
    <div class="card-body">
        <div class="row">
            <div class="col-8">
                <h4 class="card-title mb-0">
                    <i class="c-icon cil-people"></i> Travel <small class="text-muted">Create</small>
                </h4>
                <div class="small text-muted">
                    Travel Management Dashboard
                </div>
            </div>
            <div class="col-4">
                <div class="btn-toolbar float-right" role="toolbar" aria-label="Toolbar with button groups">
                    <a href="{{ route('backend.travel.index')}}" class="btn btn-secondary btn-sm ml-1" data-toggle="tooltip" title="Service List"><i class="fas fa-list-ul"></i> List</a>
                </div>
            </div>
        </div>
        <hr>
        <div class="row mt-4">
            <div class="col">
                {{ Form::open(array('url' => url("admin/travel/update/$travel->id"), 'files' => true)) }}
                <div class="row">
                    <div class="col-6">
                        <div class="form-group">
                            {{ Form::label('name', 'name') }} {!! fielf_required("required") !!}
                            {{ Form::text('name', $travel->name, array('class' => 'form-control')) }}
                        </div>
                    </div>

                    <div class="col-12">
                        <div class="form-group">
                            {{ Form::label('intro', 'Short Description') }}
                            {{ Form::textarea('intro', $travel->intro, array('class' => 'form-control','id'=> 'description')) }}
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-group">
                            {{ Form::label('content', 'Content') }} {!! fielf_required("required") !!}
                            {{ Form::textarea('content', $travel->content, array('class' => 'form-control','id'=> 'content')) }}
                        </div>
                    </div>

                    <div class="col-12">
                        <div class="form-group">
                            {{ Form::label('featured_image', 'Featured Image') }} {!! fielf_required("required") !!}
                            <div class="input-group mb-3">
                                {{ Form::text('featured_image', $travel->featured_image, array('class' => 'form-control')) }}
                                <div class="input-group-append">
                                    <button class="btn btn-info" type="button" id="button-image"><i class="fas fa-folder-open"></i> @lang('Browse')</button>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="row">
                    <div class="col-6">
                        <div class="form-group">
                            {{ Form::label('meta_title', 'Meta title') }}
                            {{ Form::text('meta_title', $travel->meta_title, array('class' => 'form-control')) }}
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-group">
                            {{ Form::label('meta_keywords', 'Meta keywords') }}
                            {{ Form::text('meta_keywords', $travel->meta_keywords, array('class' => 'form-control')) }}
                        </div>
                    </div>

                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="form-group">
                            {{ Form::label('meta_description', 'Meta description') }}
                            {{ Form::text('meta_description', $travel->meta_description, array('class' => 'form-control')) }}
                        </div>
                    </div>
                </div>


                <div class="row">
                    <div class="col-6">
                        <div class="form-group">
                            {{ html()->button($text = "<i class='fas fa-plus-circle'></i>Update", $type = 'submit')->class('btn btn-success') }}
                        </div>
                    </div>
                    <div class="col-6">

                        <div class="float-right">
                            <a href="{{route('backend.travel.destroy', $travel)}}" class="btn btn-danger" data-method="DELETE" data-token="{{csrf_token()}}" data-toggle="tooltip" title="{{__('labels.backend.delete')}}" data-confirm="Are you sure?"><i class="fas fa-trash-alt"></i></a>
                            <a href="{{ route('backend.travel.index') }}" class="btn btn-warning" data-toggle="tooltip" title="{{__('labels.backend.cancel')}}"><i class="fas fa-reply"></i> Cancel</a>
                        </div>
                    </div>
                </div>

                {{ html()->form()->close() }}

            </div>
        </div>
    </div>

    <div class="card-footer">
        <div class="row">
            <div class="col">

            </div>
        </div>
    </div>
</div>

@stop




@push('after-styles')
<!-- File Manager -->
<link rel="stylesheet" href="{{ asset('vendor/file-manager/css/file-manager.css') }}">
<link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-colorpicker/2.3.6/css/bootstrap-colorpicker.css" rel="stylesheet">
@endpush


@push ('after-scripts')
<script type="text/javascript" src="{{ asset('vendor/ckeditor/ckeditor.js') }}"></script>
<script type="text/javascript" src="{{ asset('vendor/file-manager/js/file-manager.js') }}"></script>

<script type="text/javascript">
    CKEDITOR.replace('content', {
        filebrowserImageBrowseUrl: '/file-manager/ckeditor',
        language: '{{App::getLocale()}}',
        defaultLanguage: 'en'
    });
    document.addEventListener("DOMContentLoaded", function() {

        var elem1 = document.getElementById('button-image');
        if (elem1 !== null && elem1 !== 'undefined') {
            document.getElementById('button-image').addEventListener('click', (event) => {
                event.preventDefault();

                window.open('/file-manager/fm-button', 'fm', 'width=800,height=600');
            });
        }

    });

    // set file link
    function fmSetLink($url) {
        document.getElementById('featured_image').value = $url;
    }
</script>
@endpush