@extends('backend.layouts.app')

@section('title') @lang("Dashboard") @endsection

@section('breadcrumbs')
<x-backend-breadcrumbs/>
@endsection

@section('content')
        <div class="card">
            <div class="card-header">
                <h5 class="card-title m-0">Please Complete following points:</h5>
            </div>
            <div class="card-body">
                <ol class="m-0 list-unstyled p-0" style="font-size: 16px;">
                    <li><i class="fas fa-times-circle text-danger"></i> 1. Complete your profile</li>
                    <li><i class="fas fa-times-circle text-danger"></i> 2. Update your Price And Services</li>
                    <li><i class="fas fa-check-circle text-success"></i> 3. Create minimum 2 albums and minimum of 10 images for each album</li>
                </ol>
            </div>
        </div>
@endsection
