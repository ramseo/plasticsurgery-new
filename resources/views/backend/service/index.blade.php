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

    <div class="col-12">
        <div class="card">
            <div class="card-header">
                <div class="card-title">
                    <h3 class="card-label">Manage Tickets</h3>
                </div>
                <div class="card-toolbar">

                </div>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table id="ticketsTable" class="display min-w850">
                        <thead>
                            <th> # </th>
                            <th> Date </th>
                            <th> User Name </th>
                            <th> Email </th>
                            <th> Ticket number </th>
                            <th> Subject </th>
                            <th> Type </th>
                            <th> Status </th>
                            <th> Action </th>
                        </thead>
                        <tbody>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <div class="col-lg-5">
        <div id="simple" class="simple"></div>
    </div>
@endsection

@push ('after-styles')

    <script type="text/javascript">


        var table = $('#ticketsTable').DataTable({
                processing: true,
                serverSide: true,
                ajax: "{{ route('backend.service.index') }}",
                columns: [
                    {data: 'id', name: 'id'},
                    {data: 'created_at',
                        render: function(data, type, row){
                            if(type === "sort" || type === "type"){
                                return data;
                            }
                            return moment(data).format("DD MMMM Y ");
                        }
                    },
                    {data: 'name', name: 'users.name'},
                    {data: 'email', name: 'users.email'},
                    {data: 'ticket_number', name: 'ticket_number'},
                    {data: 'subject', name: 'subject'},
                    {data: 'type', name: 'type'},
                    {data: 'status', name: 'status'},
                    {data: 'action', name: 'action', orderable: false, searchable: false},
                ],
            columnDefs: [{
                targets: [0, 1],
            },
                {
                    'targets': [7],
                    'className': 'dt-center',
                    'render': function(data, type, row, meta) {
                           return  ticket_status(row);
                    }
                }
            ],
            "order": [[1, 'desc']]
            });

        function ticket_status(data){
            let select = '<div class="status">';
            select += '<select class="form-control ticket_status" name="status" ticket="'+data.id+'">';
            let status = {open:'Open', pending:'Pending',answered:'Answered',resolved:'Resolved',closed:'Closed', spam:'Span'};
               $.each(status , function (k, v){
                   if(data.status == k){
                       select += '<option value="'+k+'" selected="selected">'+v+'</option>';
                   }else{
                       select += '<option value="'+k+'">'+v+'</option>';
                   }
               });
            select += '</select>';
            select += '</div>';
            return select;
        }

        {{--$(document).on('change', '.ticket_status', function (){--}}
        {{--    let data ={ _token: '{{ csrf_token() }}', ticket_id: $(this).attr('ticket'), status: $(this).val() }--}}
        {{--    $.post('{{ route('admin.tickets.update') }}', data, function (data){--}}
        {{--        toastr.success("Ticket updated successfully!");--}}
        {{--    },'json');--}}
        {{--});--}}
    </script>

@endpush

