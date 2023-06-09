@extends('backend.layouts.app')

@section('title') Create Service @endsection

@section('breadcrumbs')
<x-backend-breadcrumbs>
    <x-backend-breadcrumb-item route='{{route("backend.service.index")}}' icon='c-icon cil-people'>
        Service
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
                    <i class="c-icon cil-people"></i>
                    <b><?= $typeName->name ?></b>
                    <small class="text-muted">Service Create</small>
                </h4>
                <div class="small text-muted">
                    Service Management Dashboard
                </div>
            </div>
            <!--/.col-->
            <div class="col-4">
                <div class="btn-toolbar float-right" role="toolbar" aria-label="Toolbar with button groups">
                    <a href="{{ route('backend.service.index').'/'. $typeId}}" class="btn btn-secondary btn-sm ml-1" data-toggle="tooltip" title="Service List"><i class="fas fa-list-ul"></i> List</a>
                </div>
            </div>
            <!--/.col-->
        </div>
        <!--/.row-->

        <hr>

        <div class="row mt-4">
            <div class="col">
                {{ html()->form('POST', url("admin/service/store/".$typeId))->class('form')->open() }}

                <div class="row">
                    <div class="col-12 col-md-4">
                        <div class="form-group">
                            {{ Form::label('name', 'Name') }} {!! fielf_required("required") !!}
                            {{ Form::text('name', null, array('class' => 'form-control')) }}
                        </div>
                    </div>
                    <div class="col-6 col-md-4">
                        @php $positions = array(''=>'Select', 'top'=> 'Under Price','bottom'=>'Under About'); @endphp
                        <div class="form-group">
                            {{ Form::label('positions', 'Position') }} {!! fielf_required("required") !!}
                            {{ Form::select('positions', $positions, null, array('class' => 'form-control positions')) }}
                        </div>
                    </div>
                    <div class="col-6 col-md-4">
                        @php $type = array(''=>'Select', 'text'=> 'Text','price'=>'Price','number'=> 'Number','textarea'=> 'Textarea'); @endphp
                        <div class="form-group">
                            {{ Form::label('input_type', 'Type') }} {!! fielf_required("required") !!}
                            {{ Form::select('input_type', $type, null, array('class' => 'form-control input_type')) }}
                        </div>
                    </div>
                    <div class="col-6 col-md-4 input_type_price" style="display: none">
                        <div class="form-group">
                            {{ Form::label('label', 'Price Label') }}
                            {{ Form::text('label', null, array('class' => 'form-control')) }}
                        </div>
                    </div>
                    <div class="col-6 col-md-4 input_type_price" style="display: none">
                        @php $service_type = array(''=>'Select', 'minute'=> 'Minute','hour'=> 'Hour','day'=> 'Day','complete'=>'Complete'); @endphp
                        <div class="form-group">
                            {{ Form::label('service_type', 'Service Price Type') }}
                            {{ Form::select('service_type', $service_type, null, array('class' => 'form-control service_type')) }}
                        </div>
                    </div>

                    <div class="col-12 col-md-4">
                        <div class="form-group">
                            {{ Form::label('placeholder', 'Placeholder ( this for vendor only )') }}
                            {{ Form::text('placeholder', null, array('class' => 'form-control')) }}
                        </div>
                    </div>


                    <div class="col-6 col-md-4">
                        <div class="form-group">
                            {{ Form::label('order', 'Order') }}
                            {{ Form::text('order', null, array('class' => 'form-control')) }}
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
    input_type();

    function input_type() {
        let input_type = $('.input_type').val();
        if (input_type == 'price') {
            $('.input_type_price').show();
        } else {
            $('.input_type_price').hide();
        }
    }

    $(document).on('change', '.input_type', function() {
        input_type();
    });
</script>
@endpush