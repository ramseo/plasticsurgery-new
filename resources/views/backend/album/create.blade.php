@extends('backend.layouts.app')

@section('title') Create Album @endsection

@section('breadcrumbs')
<x-backend-breadcrumbs>
    <x-backend-breadcrumb-item route='{{route("vendor.album.index")}}' icon='c-icon cil-people' >
        Album
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
                    <i class="c-icon cil-people"></i> Album <small class="text-muted">Create</small>
                </h4>
                <div class="small text-muted">
                    Album Management Dashboard
                </div>
            </div>
            <!--/.col-->
            <div class="col-4">
                <div class="btn-toolbar float-right" role="toolbar" aria-label="Toolbar with button groups">
                    <a href="{{ route("vendor.album.index") }}" class="btn btn-secondary btn-sm ml-1" data-toggle="tooltip" title="Type List"><i class="fas fa-list-ul"></i> List</a>
                </div>
            </div>
            <!--/.col-->
        </div>
        <!--/.row-->

        <hr>

        <div class="row mt-4">
            <div class="col">
                {{ html()->form('POST', route("vendor.album.store"))->class('form')->open() }}
                {{ Form::hidden('vendor_id', $vendor->id) }}
                <div class="row">
                    <div class="col-12 col-md-8">
                        <div class="form-group">
                            {{ Form::label('name', 'Name') }} {!! fielf_required("required") !!}
                            {{ Form::text('name', null, array('class' => 'form-control')) }}
                        </div>
                    </div>

                    <div class="col-6 col-md-4">
                        <div class="form-group">
                            {{ Form::label('order', 'Order') }}
                            {{ Form::text('order', null, array('class' => 'form-control')) }}
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 ">
                        <div class="form-group">
                            {{ Form::label('description', 'Description') }}
                            {{ Form::text('description', null, array('class' => 'form-control')) }}
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 col-md-3">
                        <div class="form-group">
                            {{ Form::label('status', 'Status?') }}
                            <br>
                            Yes  {{ Form::radio('status', 1) }}
                            No {{ Form::radio('status', 0) }}
{{--                            Yes  {{ Form::radio('status', 1, $vendor->travel_to_other_cities == 1?  true : false) }}--}}
{{--                            No {{ Form::radio('status', 0, $vendor->travel_to_other_cities == 0 ? true : false) }}--}}
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
