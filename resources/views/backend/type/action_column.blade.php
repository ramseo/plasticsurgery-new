<div class="text-right">
        <a href='{!!route("backend.type.edit", $data)!!}'
           class='btn btn-primary btn-sm'
           data-toggle="tooltip"
           title="Edit">
            <i class="fas fa-edit"></i>
        </a>
    <a href='{{ url("admin/service/". $data->id)}}'
       class='btn btn-primary btn-sm'
       data-toggle="tooltip"
       title="Services">
        <i class="fas fa-cog"></i>
    </a>

    <a href='{{ url("admin/budget/". $data->id)}}'
       class='btn btn-primary btn-sm'
       data-toggle="tooltip"
       title="Budget">
        <i class="fas fa-search-dollar"></i>
    </a>
{{--        <x-buttons.show route='{{ url("admin/service/". $data->id)}}' title="{{__('Show')}} {{ ucwords(Str::singular($module_name)) }}" small="true" />--}}
</div>
