@extends('frontend.layouts.app')

@section('title') {{browser_title($uri_string,$table,$column_index)}} @endsection

@section('content')
@php
$cities = getDataArray('cities');
$types = getDataArray('types');
@endphp

<!-- Banner search -->
@include('frontend.includes.banner-search')

<!-- Category list -->
@include('frontend.includes.category-list')

<!-- Category list -->
@include('frontend.includes.make-us-different')

<!-- Home content list -->
@include('frontend.includes.home-content')

<!-- Home cities -->
@include('frontend.includes.home-cities')

<!-- About block -->
@include('frontend.includes.about-block')

@endsection