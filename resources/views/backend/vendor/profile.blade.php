@extends('backend.layouts.app')

@section('title') Profile @endsection

@section('breadcrumbs')
<x-backend-breadcrumbs>
{{--    <x-backend-breadcrumb-item route='{{route("backend.profile")}}' icon='c-icon cil-people' >--}}
{{--        Service--}}
{{--    </x-backend-breadcrumb-item>--}}
    <x-backend-breadcrumb-item type="active">Edit</x-backend-breadcrumb-item>
</x-backend-breadcrumbs>
@endsection

@section('content')
<div class="card">
    <div class="card-body">
        <div class="row">
            <div class="col-8">
                <h4 class="card-title mb-0">
                    <i class="c-icon cil-people"></i>  Profile <small class="text-muted">Create</small>
                </h4>
                <div class="small text-muted">
                    Profile Management Dashboard
                </div>
            </div>
            <!--/.col-->
            <div class="col-4">
                <div class="btn-toolbar float-right" role="toolbar" aria-label="Toolbar with button groups">
{{--                    <a href="{{ route("backend.$module_name.show", $$module_name_singular->id) }}" class="btn btn-primary btn-sm ml-1" data-toggle="tooltip" title="Show Details"><i class="fas fa-tv"></i> Show</a>--}}
                </div>
            </div>
            <!--/.col-->
        </div>
        <!--/.row-->

        <hr>

        <div class="row mt-4">
            <div class="col">
                {{ Form::open(array('route' =>'vendor.profile.update', 'files' => true,'id' => 'profileForm')) }}
                <div class="row">
                    <div class="col-12 col-md-6">
                        <div class="form-group">
                            {{ Form::label('business_name', 'Business Name') }} {!! fielf_required("required") !!}
                            {{ Form::text('business_name', null, array('class' => 'form-control')) }}
                        </div>
                    </div>

                    <div class="col-6 col-md-2">
                        <div class="form-group">
                            {{ Form::label('since', 'Working Since (year)') }}
                            {{ Form::text('since', null, array('class' => 'form-control')) }}
                        </div>
                    </div>
                    <div class="col-6 col-md-4">
                        <div class="form-group">
                            {{ Form::label('wedding_covered', 'Number of weddings covered') }}
                            {{ Form::text('slug', null, array('class' => 'form-control')) }}
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="form-group">
                            {{ Form::label('description', 'About') }}  {!! fielf_required("required") !!}
                            {{ Form::textarea('description', null, array('class' => 'form-control')) }}
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-group">
                            {{ Form::label('business_address', 'Address') }}  {!! fielf_required("required") !!}
                            {{ Form::textarea('business_address', null, array('class' => 'form-control')) }}
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12 col-md-3">
                        <div class="form-group">
                            {{ Form::label('travel_to_other_cities', 'Travel to other Indian cities?') }} {!! fielf_required("required") !!}
                            <br>
                           Yes  {{ Form::radio('travel_to_other_cities', 1, true) }}
                           No {{ Form::radio('travel_to_other_cities', 0, false) }}
                        </div>
                    </div>
                    <div class="col-6 col-md-3">
                        <div class="form-group">
                            {{ Form::label('website_link', 'Website') }}
                            {{ Form::text('website_link', null, array('class' => 'form-control')) }}
                        </div>
                    </div>
                    <div class="col-6 col-md-3">
                        <div class="form-group">
                            {{ Form::label('facebook_link', 'Facebook') }}
                            {{ Form::text('facebook_link', null, array('class' => 'form-control')) }}
                        </div>
                    </div>
                    <div class="col-6 col-md-3">
                        <div class="form-group">
                            {{ Form::label('instagram_link', 'Instagram') }}
                            {{ Form::text('instagram_link', null, array('class' => 'form-control')) }}
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-4">
                        <div class="form-group">
                            {{ html()->submit($text = icon('fas fa-save')." Save")->class('btn btn-success') }}
                        </div>
                    </div>

                    <div class="col-8">
                        <div class="float-right">

{{--                            <a href="{{route("backend.profile")}}" class="btn btn-warning" data-toggle="tooltip" title="{{__('labels.backend.cancel')}}"><i class="fas fa-reply"></i> Cancel</a>--}}
                        </div>
                    </div>
                </div>

                {{ Form::close() }}
            </div>
        </div>
    </div>

    <div class="card-footer">
        <div class="row">
            <div class="col">
                <small class="float-right text-muted">
{{--                    Updated: {{$service->updated_at->diffForHumans()}},--}}
{{--                    Created at: {{$service->created_at->isoFormat('LLLL')}}--}}
                </small>
            </div>
        </div>
    </div>
</div>

@stop
