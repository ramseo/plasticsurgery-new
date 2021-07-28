<div class="row">
    <div class="col-12 col-md-6">
        <div class="form-group">
            <?php
            $field_name = 'name';
            $field_lable = label_case($field_name);
            $field_placeholder = $field_lable;
            $required = "required";
            ?>
            {{ html()->label($field_lable, $field_name) }} {!! fielf_required($required) !!}
            {{ html()->text($field_name)->placeholder($field_placeholder)->class('form-control')->attributes(["$required"]) }}
        </div>
    </div>
    <div class="col-6 col-md-4">
        <div class="form-group">
            <?php
            $field_name = 'slug';
            $field_lable = label_case($field_name);
            $field_placeholder = $field_lable;
            $required = "";
            ?>
            {{ html()->label($field_lable, $field_name) }} {!! fielf_required($required) !!}
            {{ html()->text($field_name)->placeholder($field_placeholder)->class('form-control')->attributes(["$required"]) }}
        </div>
    </div>
    <div class="col-6 col-md-2">
        <div class="form-group">
            <?php
            $field_name = 'order';
            $field_lable = label_case($field_name);
            $field_placeholder = $field_lable;
            $required = "";
            ?>
            {{ html()->label($field_lable, $field_name) }} {!! fielf_required($required) !!}
            {{ html()->text($field_name)->placeholder($field_placeholder)->class('form-control')->attributes(["$required"]) }}
        </div>
    </div>
</div>
<div class="row">
    <div class="col-12">
        <div class="form-group">
            <?php
            $field_name = 'description';
            $field_lable = label_case($field_name);
            $field_placeholder = $field_lable;
            $required = "";
            ?>
            {{ html()->label($field_lable, $field_name) }} {!! fielf_required($required) !!}
            {{ html()->textarea($field_name)->placeholder($field_placeholder)->class('form-control')->attributes(["$required"]) }}
        </div>
    </div>
</div>

<div class="row">
    <div class="col-4">

        <div class="form-group">
            {{ Form::label('icon', 'Icon') }}
            <div class="custom-file">
                <input type="file" class="custom-file-input"  name="icon">
                <label class="custom-file-label">Choose file</label>
            </div>
        </div>
    </div>
    <div class="col-4">
        <div class="form-group">
            {{ Form::label('image', 'Image') }}
            <div class="custom-file">
                <input type="file" class="custom-file-input"  name="image">
                <label class="custom-file-label">Choose file</label>
            </div>
        </div>
    </div>
    <div class="col-4">
        <div class="form-group">
            {{ Form::label('banner', 'Banner') }}
            <div class="custom-file">
                <input type="file" class="custom-file-input"  name="banner">
                <label class="custom-file-label">Choose file</label>
            </div>
        </div>
    </div>

</div>


@push ('after-scripts')
<script type="text/javascript">
    // Add the following code if you want the name of the file appear on select
    $(".custom-file-input").on("change", function() {
        var fileName = $(this).val().split("\\").pop();
        $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
    });
</script>
@endpush
