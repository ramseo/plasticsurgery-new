@extends ('backend.layouts.app')

@section ('title', 'Content Trash')

@section('breadcrumbs')
<x-backend-breadcrumbs>
    <x-backend-breadcrumb-item type="active" icon=''>Content</x-backend-breadcrumb-item>
</x-backend-breadcrumbs>
@stop

@section('content')
<div class="card">
    <div class="card-body">
        <div class="row">
            <div class="col-8">
                <h4 class="card-title mb-0">
                    <i class=""></i>Content <small class="text-muted">Trash</small>
                </h4>
                <div class="small text-muted">
                    @lang(":module_name Management Dashboard", ['module_name'=>Str::title('Trash')])
                </div>
            </div>
            <!--/.col-->
            <div class="col-4">
                <div class="float-right">
                    <a href="{{ route("backend.content.index") }}" class="btn btn-secondary mt-1 btn-sm" data-toggle="tooltip" title="Content List"><i class="fas fa-list"></i> List</a>
                </div>
            </div>
            <!--/.col-->
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
                            <th>
                                Name
                            </th>
                            <th>
                                Page
                            </th>
                            <th>
                                Updated At
                            </th>
                            <th>
                                Created By
                            </th>
                            <th class="text-right">
                                Action
                            </th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach($contents as $content)
                        <tr>
                            <td>
                                {{ $content->id }}
                            </td>
                            <td>
                                <a href="{{ url("admin/$module_name", $content->id) }}">{{ $content->name }}</a>
                            </td>
                            <td>
                                {{ $content->slug }}
                            </td>
                            <td>
                                {{ $content->updated_at->diffForHumans() }}
                            </td>
                            <td>
                                {{ $content->created_by }}
                            </td>
                            <td class="text-right">
                                <a href="{{route("backend.content.restore", $content)}}" class="btn btn-warning btn-sm" data-method="PATCH" data-token="{{csrf_token()}}" data-toggle="tooltip" title="{{__('labels.backend.restore')}}"><i class='fas fa-undo'></i> {{__('labels.backend.restore')}}</a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <div class="card-footer">
        <div class="row">
            <div class="col-7">
                <div class="float-left">
                    Total {{ $contents->total() }} Content
                </div>
            </div>
            <div class="col-5">
                <div class="float-right">
                    {!! $contents->render() !!}
                </div>
            </div>
        </div>
    </div>
</div>

@stop
