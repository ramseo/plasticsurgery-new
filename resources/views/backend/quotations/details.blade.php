@extends('backend.layouts.app')

@section('title') Details @endsection

@section('breadcrumbs')
<x-backend-breadcrumbs>
    @php
        $vendor_id = Auth::user()->id;
    @endphp
    <x-backend-breadcrumb-item route='{{url("admin/quotations/$vendor_id")}}' icon='c-icon cil-people' >
        Quotations
    </x-backend-breadcrumb-item>
    <x-backend-breadcrumb-item type="active">Details</x-backend-breadcrumb-item>
</x-backend-breadcrumbs>
@endsection

@section('content')
<div class="card">
    <div class="card-body">
        <div class="row">
            <div class="col-8">
                <h4 class="card-title mb-0">
                    <i class="c-icon cil-people"></i>  Quotation Details
                </h4>
                <div class="small text-muted">
                    Quotation Details Dashboard
                </div>
            </div>
            <div class="col-4">

            </div>
        </div>
        <hr>
        <div class="row mt-4">
            <div class="col">
                <table class="table table-bordered table-striped">
                    <tr>
                        <th width="200">Name</th>
                        <td>{{$details->name}}</td>
                    </tr>
                    <tr>
                        <th>Email</th>
                        <td>{{$details->email}}</td>
                    </tr>
                    <tr>
                        <th>Phone</th>
                        <td>{{$details->phone}}</td>
                    </tr>
                    <tr>
                        <th>Budget</th>
                        <td>{{$details->budget}}</td>
                    </tr>
                    <tr>
                        <th>Dates</th>
                        <td>{{$details->dates}}</td>
                    </tr>
                    <tr>
                        <th>Services</th>
                        <td>
                            @php
                                $services = json_decode($details->service_json, true);
                            @endphp
                            <div>
                                <p class="h4">Selected Services</p>
                            </div>
                            @foreach($services as $service)
                                @php
                                    $selected_services = get_vendor_selected_services($details->vendor_id, 'top', $service['service_id']);
                                @endphp
                                <div class="service-col">
                                    <ul class="list-unstyled">
                                        <li>
                                            <strong class="text-primary">Service: </strong> {{$selected_services->name}}
                                        </li>
                                        <li>
                                            <strong>Current Service Price: </strong> {{$selected_services->input_type_value}}
                                        </li>
                                        <li>
                                            <strong>Time: </strong> {{$selected_services->service_type == 'complete' ? 'Complete Service' : 'For '. $service['quantity'] . ' ' . $selected_services->service_type}}
                                        </li>
                                    </ul>
                                </div>
                                <hr style="border-top: 1px dashed rgba(0, 0, 21, 0.2);">
                            @endforeach
                        </td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
</div>

@stop

