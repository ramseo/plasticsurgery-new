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

    <!-- About block -->
    @include('frontend.includes.about-block')

    <!-- Wedding stories -->
    @include('frontend.includes.wedding-stories')

    <!-- Featured vendors -->
    @include('frontend.includes.featured-vendors')

    <!-- Latest blogs -->
    @include('frontend.includes.latest-blogs')

@endsection


