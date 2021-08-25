@extends('backend.layouts.app')

@section('title') @lang("Dashboard") @endsection

@section('breadcrumbs')
<x-backend-breadcrumbs/>
@endsection


@section('content')
    @if(auth()->user()->getRoleNames()->first() == 'vendor')
        @include('backend.vendor-dash')
    @endif
@endsection
