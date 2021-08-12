@extends('backend.layouts.app')

@section('title') Edit Budget @endsection

@section('breadcrumbs')
<x-backend-breadcrumbs>
    <x-backend-breadcrumb-item route='{{url("admin/budget/update/$budget->id")}}' icon='c-icon cil-people' >
        Service
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
                    <i class="c-icon cil-people"></i>  Budget <small class="text-muted">Edit</small>
                </h4>
                <div class="small text-muted">
                    Budget Management Dashboard
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
                {{ Form::open(array('url' =>url("admin/budget/update/$budget->id"), 'files' => true,'id' => 'ticketForm')) }}

                <div class="row">

                    <div class="col-6 col-md-4">
                        @php $filter =  array(''=>'Select', 'less_then'=> 'Less then ','between'=>'Between', 'above'=> 'Above');  @endphp
                        <div class="form-group">
                            {{ Form::label('filter', 'Budget Filter') }}
                            {{ Form::select('filter', $filter, $budget->filter, array('class' => 'form-control filter')) }}
                        </div>
                    </div>
                    <div class="col-6 col-md-4">
                        <div class="form-group">
                            {{ Form::label('min', 'Amount') }}
                            {{ Form::number('min', $budget->min, array('class' => 'form-control')) }}
                        </div>
                    </div>
                    <div class="col-6 col-md-4 filter_amount">
                        <div class="form-group">
                            {{ Form::label('max', 'Max Amount') }}
                            {{ Form::number('max', $budget->max, array('class' => 'form-control')) }}
                        </div>
                    </div>
                    <div class="col-6 col-md-4">
                        <div class="form-group">
                            {{ Form::label('order', 'Order') }}
                            {{ Form::number('order', $budget->order, array('class' => 'form-control')) }}
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
                            @can('delete_service')
{{--                            <a href="{{route("backend.service.destroy", $service)}}" class="btn btn-danger" data-method="DELETE" data-token="{{csrf_token()}}" data-toggle="tooltip" title="{{__('labels.backend.delete')}}"><i class="fas fa-trash-alt"></i></a>--}}
                            @endcan
                            <a href="{{ url("admin/budget/$budget->id") }}" class="btn btn-warning" data-toggle="tooltip" title="{{__('labels.backend.cancel')}}"><i class="fas fa-reply"></i> Cancel</a>
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
                    Updated: {{$budget->updated_at->diffForHumans()}},
                    Created at: {{$budget->created_at->isoFormat('LLLL')}}
                </small>
            </div>
        </div>
    </div>
</div>

@stop

@push('after-scripts')
    <script>
        input_filter();
        function input_filter(){
            let input_type = $('.filter').val();
            if(input_type == 'between'){
                $('.filter_amount').show();
            }else{
                $('.filter_amount').hide();
            }
        }

        $(document).on('change', '.filter', function () {
            input_filter();
        });
    </script>
@endpush
