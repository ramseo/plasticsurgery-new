<div class="row">
    <div class="col-12 col-md-6">
        <div class="form-group">
            <?php
            $field_name = 'title';
            $field_lable = label_case('name');
            $field_placeholder = $field_lable;
            $required = "required";
            ?>
            {{ html()->label($field_lable, $field_name) }} {!! fielf_required($required) !!}
            {{ html()->text($field_name)->placeholder($field_placeholder)->class('form-control')->attributes(["$required"])->value($data->title) }}
        </div>
    </div>
    <div class="col-12 col-md-6">
        <div class="form-group">
            <?php
            $field_name = 'url';
            $field_lable = label_case($field_name);
            $field_placeholder = $field_lable;
            $required = "";
            ?>
            {{ html()->label($field_lable, $field_name) }} {!! fielf_required($required) !!}
            {{ html()->text($field_name)->placeholder($field_placeholder)->class('form-control')->attributes(["$required"])->value($data->url) }}
        </div>
    </div>
</div>