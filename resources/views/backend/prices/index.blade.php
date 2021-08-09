@extends ('backend.layouts.app')

@section('title')  Price And Services @endsection

@section('breadcrumbs')
    <x-backend-breadcrumbs>
        <x-backend-breadcrumb-item type="active" icon=''></x-backend-breadcrumb-item>
    </x-backend-breadcrumbs>
@endsection

@section('content')
<div class="card">
<div class="card-body">
        <div class="row">
            <div class="col-8">
                <h4 class="card-title mb-0">
                    <i class="c-icon cil-people"></i>  Price And Services
                </h4>
                <div class="small text-muted">
                    Price And Services Management
                </div>
            </div>
            <div class="col-4">

{{--                <div class="float-right">--}}
{{--                    <a href='{{ route("vendor.album.create")}}'--}}
{{--                       class='btn btn-success btn-sm'--}}
{{--                       data-toggle="tooltip"--}}
{{--                       title="{{__('Create')}}">--}}
{{--                        <i class="fas fa-plus-circle"></i>--}}
{{--                    </a>--}}
{{--                </div>--}}
            </div>
        </div>
    <div class="form">
        {{ Form::open(array('url' => route("vendor.price.store"), 'files' => true,'id' => 'priceForm')) }}
{{--        {{ Form::hidden('album_id', $price->id) }}--}}
{{--        {{dd($pricesData)}}--}}

            @foreach($services as $service)


                @include('backend.prices.service', compact('services','pricesData'))

            @endforeach

        <div class="row">
            <div class="col-12">
                <div class="form-group">
                    {{ html()->submit($text = icon('fas fa-save')." Save")->class('btn btn-success') }}
                </div>
            </div>
        </div>

        {{ Form::close() }}
    </div>

</div>
@endsection


@push ('after-styles')
@endpush

@push ('after-scripts')
@endpush

