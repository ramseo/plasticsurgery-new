@extends('backend.layouts.app')

@section('title')
    Customer | Index
@endsection

@section('content')
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-8">
                    <h4 class="card-title mb-0">
                        <i class="c-icon cil-people"></i> Customer <small class="text-muted">Data Table Customer</small>
                    </h4>
                    <div class="small text-muted">
                        Customer Management Dashboard
                    </div>
                </div>
                <div class="col-4">
                    <div class="btn-toolbar float-right" role="toolbar" aria-label="Toolbar with button groups">
                        <a href="{{ route("backend.customer.index") }}" class="btn btn-secondary btn-sm ml-1" data-toggle="tooltip" title="Type List"><i class="fas fa-list-ul"></i> List</a>
                    </div>
{{--                    <div class="float-right">--}}
{{--                        <a href='{{ route("backend.content.create")}}'--}}
{{--                           class='btn btn-success btn-sm'--}}
{{--                           data-toggle="tooltip"--}}
{{--                           title="{{__('Create')}}">--}}
{{--                            <i class="fas fa-plus-circle"></i>--}}
{{--                        </a>--}}
{{--                    </div>--}}
                </div>
            </div>
            <!--/.row-->

            <div class="row mt-4">
                <div class="col">
                    <div class="table-responsive">
                        <table id="datatable" class="table table-bordered table-hover table-responsive-sm">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>{{ __('labels.backend.users.fields.name') }}</th>
                                <th>{{ __('labels.backend.users.fields.email') }}</th>
                                <th>{{ __('labels.backend.users.fields.status') }}</th>
                                <th class="text-right">{{ __('labels.backend.action') }}</th>
                            </tr>
                            </thead>
                            <tbody>
                            </tbody>
                        </table>
                    </div>
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
    <script type="text/javascript" src="{{ asset('vendor/datatable/datatables.min.js') }}"></script>

    <script type="text/javascript">
        var table = $('#datatable').DataTable({
            processing: true,
            serverSide: true,
                ajax: "{{ route('backend.customer.index')}}",
                columns: [
                    {data: 'id', name: 'id'},
                    {data: 'name', name: 'name'},
                    {data: 'email', name: 'email'},
                    {data: 'status', name: 'status'},
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

