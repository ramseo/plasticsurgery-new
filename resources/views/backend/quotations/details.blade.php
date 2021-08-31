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
                
            </div>
        </div>
    </div>
</div>

@stop

