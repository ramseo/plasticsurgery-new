@extends ('backend.layouts.app')

@section('title') <title>Video | Index</title>  @endsection


@section('breadcrumbs')
    <x-backend-breadcrumbs>
        <x-backend-breadcrumb-item route='{{route("vendor.album.index")}}' icon='c-icon cil-people' >
            Video
        </x-backend-breadcrumb-item>
        <x-backend-breadcrumb-item type="active">Create</x-backend-breadcrumb-item>
    </x-backend-breadcrumbs>
@endsection


@section('content')
<div class="card">
    <div class="card-body">
        <div class="row">
            <div class="col-8">
                <h4 class="card-title mb-0">
                    <i class="c-icon cil-people"></i> Video <small class="text-muted">Data Table Video</small>
                </h4>
                <div class="small text-muted">
                    Video Management Dashboard
                </div>
            </div>
            <div class="col-4">

                <div class="float-right">
                    <a href='{{ route("vendor.video.create")}}'
                       class='btn btn-success btn-sm'
                       data-toggle="tooltip"
                       title="{{__('Create')}}">
                        <i class="fas fa-plus-circle"></i>
                    </a>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="table-responsive">
                    <table id="datatable" class="table table-bordered table-hover table-responsive-sm">
                        <thead>
                            <th> # </th>
                            <th> URL </th>
                            <th> Action </th>
                        </thead>
                        <tbody>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>

</div>
@endsection

@push ('after-styles')
    <!-- DataTables Core and Extensions -->
    <link rel="stylesheet" href="{{ asset('vendor/datatable/datatables.min.css') }}">

@endpush
@push ('after-scripts')
    <script type="text/javascript" src="{{ asset('vendor/datatable/datatables.min.js') }}"></script>

    <script type="text/javascript">


        var table = $('#datatable').DataTable({
            processing: true,
            serverSide: true,
                ajax: "{{ route('vendor.video.index')}}",
                columns: [
                    {data: 'id', name: 'id'},
                    {data: 'url', name: 'url'},
                    {data: 'action', name: 'action', orderable: false, searchable: false},
                ],
            columnDefs: [{
                targets: [0, 1],
            }
            ],
            "order": [[1, 'desc']]
            });

    </script>

@endpush

