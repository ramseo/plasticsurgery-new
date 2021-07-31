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
        <i class="fas fa-server"></i>
    </a>
{{--        <x-buttons.show route='{{ url("admin/service/". $data->id)}}' title="{{__('Show')}} {{ ucwords(Str::singular($module_name)) }}" small="true" />--}}
</div>
