@extends('frontend.layouts.app')

@section('title') {{app_name()}} @endsection

@section('content')
@php
$cities = getDataArray('cities');
$types = getDataArray('types');
@endphp

<!-- Banner search -->
@include('frontend.includes.banner-search')

<!-- Category list -->
@include('frontend.includes.category-list')

<!-- Home content list -->
@include('frontend.includes.home-content')

<!-- About block -->
@include('frontend.includes.about-block')

<!-- Home cities -->
@include('frontend.includes.home-cities')

@endsection