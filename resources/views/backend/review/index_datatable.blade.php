<style>
    .switch-flex-cls {
        display: flex;
        align-items: center;
        flex-wrap: wrap;
    }

    .switch {
        position: relative;
        display: inline-block;
        width: 60px;
        height: 34px;
        margin-left: 10px;
        margin-bottom: 0;
    }

    .switch input {
        opacity: 0;
        width: 0;
        height: 0;
    }

    .slider {
        position: absolute;
        cursor: pointer;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background-color: #ccc;
        -webkit-transition: .4s;
        transition: .4s;
    }

    .slider:before {
        position: absolute;
        content: "";
        height: 26px;
        width: 26px;
        left: 4px;
        bottom: 4px;
        background-color: white;
        -webkit-transition: .4s;
        transition: .4s;
    }

    input:checked+.slider {
        background-color: #2eb85c;
    }

    input:focus+.slider {
        box-shadow: 0 0 1px #2eb85c;
    }

    input:checked+.slider:before {
        -webkit-transform: translateX(26px);
        -ms-transform: translateX(26px);
        transform: translateX(26px);
    }

    /* Rounded sliders */
    .slider.round {
        border-radius: 34px;
    }

    .slider.round:before {
        border-radius: 50%;
    }
</style>


@extends('backend.layouts.app')

@section('title') {{ $module_action }} {{ $module_title }} @endsection

@section('breadcrumbs')
<x-backend-breadcrumbs>
    <x-backend-breadcrumb-item type="active" icon='{{ $module_icon }}'>{{ $module_title }}</x-backend-breadcrumb-item>
</x-backend-breadcrumbs>
@endsection

@section('content')
<div class="card">
    <div class="card-body">
        <div class="row">
            <div class="col-8">
                <h4 class="card-title mb-0">
                    <i class="{{ $module_icon }}"></i> {{ $module_title }} <small class="text-muted">Data Table {{ $module_action }}</small>
                </h4>
                <div class="small text-muted">
                    {{ Str::title($module_name) }} Management Dashboard
                </div>
            </div>
        </div>
        <!--/.row-->

        <div class="row mt-4">
            <div class="col">
                <table id="datatable" class="table table-bordered table-hover table-responsive-sm">
                    <thead>
                        <tr>
                            <th>
                                #
                            </th>
                            <th width="60%">
                                Description
                            </th>
                            <th>
                                Rating
                            </th>
                            <th>
                                Vendor
                            </th>
                            <th width="15%" class="text-center">
                                Action
                            </th>
                        </tr>
                    </thead>
                </table>
            </div>
        </div>
    </div>
    <div class="card-footer">
        <div class="row">
            <div class="col-7">
                <div class="float-left">

                </div>
            </div>
            <div class="col-5">
                <div class="float-right">

                </div>
            </div>
        </div>
    </div>
</div>

@stop

@push ('after-styles')
<!-- DataTables Core and Extensions -->
<link rel="stylesheet" href="{{ asset('vendor/datatable/datatables.min.css') }}">

@endpush

@push ('after-scripts')
<!-- DataTables Core and Extensions -->
<script type="text/javascript" src="{{ asset('vendor/datatable/datatables.min.js') }}"></script>

<script type="text/javascript">
    $('#datatable').DataTable({
        processing: true,
        serverSide: true,
        autoWidth: true,
        responsive: true,
        ajax: '{{ route("backend.$module_name.index_data") }}',
        columns: [{
                data: 'id',
                name: 'id'
            },
            {
                data: 'description',
                name: 'description'
            },
            {
                data: 'rating',
                name: 'rating'
            },
            {
                data: 'vendor_id',
                name: 'vendor_id'
            },
            {
                data: 'action',
                name: 'action',
                orderable: false,
                searchable: false 
            }
        ]
    });

    function checkBox(elm) {
        var review_id = $(elm).attr("review_id");

        if ($(elm).is(":checked")) {
            $.ajax({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                url: "{{url('admin/review/is_active')}}",
                type: 'GET',
                data: {
                    is_active: 1,
                    review_id: review_id,
                    _token: '{{ csrf_token() }}',
                },
                dataType: 'json',
                success: function(response) {
                    console.log(response);
                }
            });
        } else {
            $.ajax({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                url: "{{url('admin/review/is_active')}}",
                type: 'GET',
                data: {
                    is_active: 0,
                    review_id: review_id,
                    _token: '{{ csrf_token() }}',
                },
                dataType: 'json',
                success: function(response) {
                    console.log(response);
                }
            });
        }
    }
</script>
@endpush