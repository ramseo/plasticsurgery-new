@extends('backend.layouts.app')

@section('title') Create Budget @endsection

@section('breadcrumbs')
<x-backend-breadcrumbs>
    <x-backend-breadcrumb-item route='{{route("backend.service.index")}}' icon='c-icon cil-people' >
        Budget
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
                    <i class="c-icon cil-people"></i> Budget <small class="text-muted">Create</small>
                </h4>
                <div class="small text-muted">
                    Budget Management Dashboard
                </div>
            </div>
            <div class="col-4">
                <div class="btn-toolbar float-right" role="toolbar" aria-label="Toolbar with button groups">
                    <a href="{{ route('backend.budget.index').'/'. $typeId}}" class="btn btn-secondary btn-sm ml-1" data-toggle="tooltip" title="Service List"><i class="fas fa-list-ul"></i> List</a>
                </div>
            </div>
        </div>
        <hr>
        <div class="row mt-4">
            <div class="col">
                {{ html()->form('POST', url("admin/budget/store/".$typeId))->class('form')->open() }}
                <div class="row">

                    <div class="col-6 col-md-4">
                        @php $filter =  array(''=>'Select', 'less_then'=> 'Less then ','between'=>'Between', 'above'=> 'Above');  @endphp
                        <div class="form-group">
                            {{ Form::label('filter', 'Budget Filter') }}
                            {{ Form::select('filter', $filter, null, array('class' => 'form-control filter')) }}
                        </div>
                    </div>
                    <div class="col-6 col-md-4">
                        <div class="form-group">
                            {{ Form::label('min', 'Amount') }}
                            {{ Form::number('min', null, array('class' => 'form-control')) }}
                        </div>
                    </div>
                    <div class="col-6 col-md-4 filter_amount">
                        <div class="form-group">
                            {{ Form::label('max', 'Max Amount') }}
                            {{ Form::number('max', null, array('class' => 'form-control')) }}
                        </div>
                    </div>
                    <div class="col-6 col-md-4">
                        <div class="form-group">
                            {{ Form::label('order', 'Order') }}
                            {{ Form::number('order', null, array('class' => 'form-control')) }}
                        </div>
                    </div>
                </div>
                <input type="hidden" value="{{$typeId}}" name="type_id">
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
