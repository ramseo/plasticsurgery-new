@extends('backend.layouts.app')

@section('title') {{ $module_action }} {{ $module_title }} @endsection

@section('breadcrumbs')
<x-backend-breadcrumbs>
    <x-backend-breadcrumb-item type="active" icon=''>{{ $module_title }}</x-backend-breadcrumb-item>
</x-backend-breadcrumbs>
@endsection

@section('content')
<div class="card">
    <div class="card-body">
        <div class="row">
            <div class="col-8">
                <h4 class="card-title mb-0">
                    {{ $module_title }} <small class="text-muted">{{ $module_action }}</small>
                </h4>
                <div class="small text-muted">
                    {{ Str::title($module_name) }} Management Dashboard
                </div>
            </div>
            <div class="col-4">

            </div>
        </div>

        <div class="row mt-4">
            <div class="col">
                <table id="datatable" class="table table-bordered table-hover table-responsive-sm">
                    <thead>
                        <tr>
                            <th>
                                #
                            </th>
                            <th>
                                Full Name
                            </th>
                            <th>
                                Mobile Number
                            </th>
                            <th>
                                Added On
                            </th>
                            <th>
                                Action
                            </th>
                        </tr>
                    </thead>
                    @if($inquiry)
                    <tbody>
                        @php $count = 0; @endphp
                        @foreach($inquiry as $item)
                        @php $count++; @endphp
                        <tr>
                            <td>{{$count}}</td>
                            <td>{{$item->full_name}}</td>
                            <td>{{$item->mobile_number}}</td>
                            <td>{{date('d-m-Y h:i:s', strtotime($item->created_at))}}</td>
                            <td>
                                <a href="<?= url("admin/inquiry/destroy/$item->id") ?>" class="btn btn-danger " data-method="DELETE" data-token="<?= csrf_token() ?>" data-toggle="tooltip" title="Delete Inquiry" data-confirm="Are you sure?">
                                    <i class="fas fa-trash-alt"></i>
                                </a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                    @endif
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
    $('#datatable').DataTable();
</script>
@endpush