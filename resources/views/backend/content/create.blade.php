@extends('backend.layouts.app')

@section('title') Create Content @endsection

@section('breadcrumbs')
<x-backend-breadcrumbs>
    <x-backend-breadcrumb-item route='{{route("backend.service.index")}}' icon='c-icon cil-people'>
        Content
    </x-backend-breadcrumb-item>
    <x-backend-breadcrumb-item type="active">Create</x-backend-breadcrumb-item>
</x-backend-breadcrumbs>
@endsection

@section('content')
<div class="card">
    <div class="card-body">
        <div class="row">
            <div class="col-8">
                <h4 class="card-title mb-0">
                    <i class="c-icon cil-people"></i> Content <small class="text-muted">Create</small>
                </h4>
                <div class="small text-muted">
                    Content Management Dashboard
                </div>
            </div>
            <div class="col-4">
                <div class="btn-toolbar float-right" role="toolbar" aria-label="Toolbar with button groups">
                    <a href="{{ route('backend.content.index')}}" class="btn btn-secondary btn-sm ml-1" data-toggle="tooltip" title="Service List"><i class="fas fa-list-ul"></i> List</a>
                </div>
            </div>
        </div>
        <hr>
        <div class="row mt-4">
            <div class="col">
                {{ html()->form('POST', route('backend.content.store'))->class('form')->open() }}
                <div class="row">

                    <div class="col-6">
                        <div class="form-group">
                            {{ Form::label('type_id', 'Vendor Type') }} {!! fielf_required("required") !!}
                            {{ Form::select('type_id', $types, null, array('class' => 'form-control')) }}
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-group">
                            {{ Form::label('city_id', 'City') }} {!! fielf_required("required") !!}
                            {{ Form::select('city_id', $cities, null, array('class' => 'form-control')) }}
                        </div>
                    </div>

                    <div class="col-12">
                        <div class="form-group">
                            {{ Form::label('title', 'Title') }} {!! fielf_required("required") !!}
                            {{ Form::text('title', null, array('class' => 'form-control')) }}
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-group">
                            {{ Form::label('description', 'Description') }}
                            {{ Form::textarea('description', null, array('class' => 'form-control','id'=> 'description')) }}
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-group">
                            {{ Form::label('content', 'Content') }}
                            {{ Form::textarea('content', null, array('class' => 'form-control', 'id'=> 'content')) }}
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-group">
                            {{ Form::label('faq_content', 'FAQ Content') }}
                            {{ Form::textarea('faq_content', null, array('class' => 'form-control', 'id'=> 'faq')) }}
                        </div>
                    </div>
                </div>


                <div class="row">
                    <div class="col-6">
                        <div class="form-group">
                            {{ Form::label('meta_title', 'Meta title') }}
                            {{ Form::text('meta_title', null, array('class' => 'form-control')) }}
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-group">
                            {{ Form::label('meta_keywords', 'Meta keywords') }}
                            {{ Form::text('meta_keywords', null, array('class' => 'form-control')) }}
                        </div>
                    </div>

                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="form-group">
                            {{ Form::label('meta_description', 'Meta description') }}
                            {{ Form::text('meta_description', null, array('class' => 'form-control')) }}
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-6">
                        <div class="form-group">
                            {{ html()->button($text = "<i class='fas fa-plus-circle'></i>Create", $type = 'submit')->class('btn btn-success') }}
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="float-right">
                            <div class="form-group">
                                <button type="button" class="btn btn-warning" onclick="history.back(-1)"><i class="fas fa-reply"></i> Cancel</button>
                            </div>
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
<script type="text/javascript">
    $(document).ready(function() {
        $('.select2-category').select2({
            theme: "bootstrap",
            placeholder: '@lang("Select an option")',
            minimumInputLength: 2,
            allowClear: true,
            ajax: {
                url: '{{route("backend.categories.index_list")}}',
                dataType: 'json',
                data: function(params) {
                    return {
                        q: $.trim(params.term)
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

        $('.select2-tags').select2({
            theme: "bootstrap",
            placeholder: '@lang("Select an option")',
            minimumInputLength: 2,
            allowClear: true,
            ajax: {
                url: '{{route("backend.tags.index_list")}}',
                dataType: 'json',
                data: function(params) {
                    return {
                        q: $.trim(params.term)
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



<script type="text/javascript" src="{{ asset('vendor/ckeditor/ckeditor.js') }}"></script>
<script type="text/javascript" src="{{ asset('vendor/file-manager/js/file-manager.js') }}"></script>

<script type="text/javascript">
    CKEDITOR.replace('description', {
        filebrowserImageBrowseUrl: '/file-manager/ckeditor',
        language: '{{App::getLocale()}}',
        defaultLanguage: 'en'
    });
    CKEDITOR.replace('content', {
        filebrowserImageBrowseUrl: '/file-manager/ckeditor',
        language: '{{App::getLocale()}}',
        defaultLanguage: 'en'
    });
    CKEDITOR.replace('faq', {
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