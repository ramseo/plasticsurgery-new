@extends('backend.layouts.app')

@section('title')
<title>Tickets | Index</title>
@endsection
{{--@section('header-title')--}}
{{--    Manage Tickets--}}
{{--@endsection--}}
{{--@section('styles')--}}

{{--@endsection--}}


@section('content')
    <div class="card">
        <div class="card-body">
            <div class="row">
                <div class="col-8">
                    <h4 class="card-title mb-0">
                        <i class="c-icon cil-people"></i> Service <small class="text-muted">Data Table Service</small>
                    </h4>
                    <div class="small text-muted">
                        {{ Str::title('service') }} Management Dashboard
                    </div>
                </div>
                <div class="col-4">
                    <div class="float-right">
                        <a href='{{ route("backend.service.create").'/'. $typeId}}'
                           class='btn btn-success btn-sm'
                           data-toggle="tooltip"
                           title="{{__('Create')}}">
                            <i class="fas fa-plus-circle"></i>
                        </a>

                        {{--                    <x-buttons.create route='{{ route("backend.$module_name.create",$typeId) }}' title="{{__('Create')}} {{ ucwords(Str::singular($module_name)) }}"/>--}}

                        {{--                    <div class="btn-group" role="group" aria-label="Toolbar button groups">--}}
                        {{--                        <div class="btn-group" role="group">--}}
                        {{--                            <button id="btnGroupToolbar" type="button" class="btn btn-secondary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">--}}
                        {{--                                <i class="fas fa-cog"></i>--}}
                        {{--                            </button>--}}
                        {{--                            <div class="dropdown-menu" aria-labelledby="btnGroupToolbar">--}}
                        {{--                                <a class="dropdown-item" href="{{ route("backend.$module_name.trashed") }}">--}}
                        {{--                                    <i class="fas fa-eye-slash"></i> View trash--}}
                        {{--                                </a>--}}
                        {{--                            </div>--}}
                        {{--                        </div>--}}
                        {{--                    </div>--}}
                    </div>
                </div>
            </div>
            <!--/.row-->

            <div class="row mt-4">
                <div class="col">
                    <div class="table-responsive">
                        <table id="ticketsTable" class="display min-w850">
                            <thead>
                            <th> # </th>
                            <th> Name </th>
                            <th> Subject </th>
                            <th> Action </th>
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


        var table = $('#ticketsTable').DataTable({
            processing: true,
            serverSide: true,
                ajax: "{{ route('backend.service.index').'/'. $typeId}}",
                columns: [
                    {data: 'id', name: 'id'},
                    {data: 'name', name: 'name'},
                    {data: 'description', name: 'description'},
                    {data: 'action', name: 'action', orderable: false, searchable: false},
                ],
            columnDefs: [{
                targets: [0, 1],
            }
            ],
            "order": [[1, 'desc']]
            });

        // function ticket_status(data){
        //     let select = '<div class="status">';
        //     select += '<select class="form-control ticket_status" name="status" ticket="'+data.id+'">';
        //     let status = {open:'Open', pending:'Pending',answered:'Answered',resolved:'Resolved',closed:'Closed', spam:'Span'};
        //        $.each(status , function (k, v){
        //            if(data.status == k){
        //                select += '<option value="'+k+'" selected="selected">'+v+'</option>';
        //            }else{
        //                select += '<option value="'+k+'">'+v+'</option>';
        //            }
        //        });
        //     select += '</select>';
        //     select += '</div>';
        //     return select;
        // }

        {{--$(document).on('change', '.ticket_status', function (){--}}
        {{--    let data ={ _token: '{{ csrf_token() }}', ticket_id: $(this).attr('ticket'), status: $(this).val() }--}}
        {{--    $.post('{{ route('admin.tickets.update') }}', data, function (data){--}}
        {{--        toastr.success("Ticket updated successfully!");--}}
        {{--    },'json');--}}
        {{--});--}}
    </script>

@endpush

