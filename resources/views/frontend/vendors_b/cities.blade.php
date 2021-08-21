@extends('frontend.layouts.app')

@section('title') {{ __("Cities") }} @endsection

@section('content')

    <section id="breadcrumb-section">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xs-12 col-sm-12">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">{{$type->name}}</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </section>

    @if(isset($cities))
        <section id="city-section">
            <div class="container-fluid">
                <div class="col-xs-12 common-heading text-center">
                    <p class="shadow-text">{{$type->name}}</p>
                    <p class="head">Find Best {{$type->name}} in</p>
                </div>
                <div class="row city-row">
                    @foreach($cities as $city_item)
                        <div class="col-xs-12 col-sm-3 single-city-col">
                            <a href="{{url('/') . '/' . $type->slug . '/' . $city_item->slug}}">
                                <div class="img-col">
                                    <i class="fas fa-city"></i>
                                    <!-- <img class="img-fluid" src="" alt=""> -->
                                </div>
                                <div class="text-col">
                                    <p>{{$city_item->name}}</p>
                                </div>
                            </a>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
    @endif

    @if($content)
        @if($content->content != '')
            <section id="text-only-section" class="grey-section">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-xs-12 col-sm-12">
                            <div class="text-header">
                                <div class="text">
                                    {!! nl2br($content->content) !!}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        @endif

        @if($content->faq_content != '')
            <section id="text-only-section" class="grey-section">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-xs-12 col-sm-12">
                            <div class="text-header">
                                <div class="text">
                                    {!! nl2br($content->faq_content) !!}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        @endif
    @endif


@endsection
