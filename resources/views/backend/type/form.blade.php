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
            $field_name = 'colour';
            $field_lable = label_case($field_name);
            $field_placeholder = $field_lable;
            $required = "required";
            ?>
            {{ html()->label($field_lable, $field_name) }} {!! fielf_required($required) !!}
            {{ html()->text($field_name)->placeholder($field_placeholder)->class('form-control')->attributes(["$required"]) }}
        </div>
    </div>
    <div class="col-4">

        <div class="form-group">
            {{ Form::label('icon', 'Icon') }} {!! fielf_required($required) !!}
            <div class="custom-file">
                <input type="file" class="custom-file-input" name="icon">
                <label class="custom-file-label">Choose file</label>
            </div>
        </div>
        @if($type)
        <div>
            @php
            $vendor_icon_img = asset('img/default-vendor.jpg');
            if($type->icon){
            if(file_exists( public_path().'/storage/type/icon/'. $type->icon )){
            $vendor_icon_img = asset('storage/type/icon/'.$type->icon);
            }
            }
            @endphp
            <img id="imgPreview" src="{{ $vendor_icon_img }}" alt="alt img" class="img-fluid">
        </div>
        @endif

    </div>
    <div class="col-4">
        <div class="form-group">
            {{ Form::label('image', 'Image') }} {!! fielf_required($required) !!}
            <div class="custom-file">
                <input type="file" class="custom-file-input" name="image">
                <label class="custom-file-label">Choose file</label>
            </div>
        </div>
        @if($type)
        <div>
            @php
            $vendor_image = asset('img/default-vendor.jpg');
            if($type->image){
            if(file_exists( public_path().'/storage/type/image/'. $type->image )){
            $vendor_image = asset('storage/type/image/'.$type->image);
            }
            }
            @endphp
            <img id="imgPreview" src="{{ $vendor_image }}" alt="alt img" class="img-fluid">
        </div>
        @endif
    </div>
    <div class="col-4">
        <div class="form-group">
            {{ Form::label('banner', 'Banner') }} {!! fielf_required($required) !!}
            <div class="custom-file">
                <input type="file" class="custom-file-input" name="banner">
                <label class="custom-file-label">Choose file</label>
            </div>
        </div>
        @if($type)
        <div>
            @php
            $vendor_banner_img = asset('img/default-vendor.jpg');
            if($type->banner){
            if(file_exists( public_path().'/storage/type/banner/'. $type->banner )){
            $vendor_banner_img = asset('storage/type/banner/'.$type->banner);
            }
            }
            @endphp
            <img id="imgPreview" src="{{ $vendor_banner_img }}" alt="alt img" class="img-fluid">
        </div>
        @endif
    </div>
    <!-- code -->
    <div class="col-4">
        <div class="form-group">
            {{ Form::label('Mobile banner ', 'Mobile Banner') }} {!! fielf_required($required) !!}
            <div class="custom-file">
                <input type="file" class="custom-file-input" name="mobile_banner">
                <label class="custom-file-label">Choose file</label>
            </div>
        </div>
        @if($type)
        <div>
            @php
            $vendor_mobile_banner_img = asset('img/default-vendor.jpg');
            if($type->mobile_banner){
            if(file_exists( public_path().'/storage/type/mobile_banner/'. $type->mobile_banner )){
            $vendor_mobile_banner_img = asset('storage/type/mobile_banner/'.$type->mobile_banner);
            }
            }
            @endphp
            <img id="imgPreview" src="{{ $vendor_mobile_banner_img }}" alt="alt img" class="img-fluid">
        </div>
        @endif
    </div>
    <!-- code -->

</div>

@push ('after-scripts')
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-colorpicker/2.3.6/js/bootstrap-colorpicker.js"></script>
<script type="text/javascript">
    // Add the following code if you want the name of the file appear on select
    $(".custom-file-input").on("change", function() {
        var fileName = $(this).val().split("\\").pop();
        $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
    });
    $('#colour').colorpicker();
</script>
@endpush




<!-- Select2 Library -->
<x-library.select2 />
<x-library.datetime-picker />

@push('after-styles')
<!-- File Manager -->
<link rel="stylesheet" href="{{ asset('vendor/file-manager/css/file-manager.css') }}">
<link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-colorpicker/2.3.6/css/bootstrap-colorpicker.css" rel="stylesheet">
@endpush

@push ('after-scripts')
<script type="text/javascript">
    $(document).ready(function() {
        $('.select2-category').select2({
            theme: "bootstrap",
            placeholder: '@lang("Select an option")',
            minimumInputLength: 2,
            allowClear: true,
            ajax: {
                url: '{{route("backend.categories.index_list")}}',
                dataType: 'json',
                data: function(params) {
                    return {
                        q: $.trim(params.term)
                    };
                },
                processResults: function(data) {
                    return {
                        results: data
                    };
                },
                cache: true
            }
        });

        $('.select2-tags').select2({
            theme: "bootstrap",
            placeholder: '@lang("Select an option")',
            minimumInputLength: 2,
            allowClear: true,
            ajax: {
                url: '{{route("backend.tags.index_list")}}',
                dataType: 'json',
                data: function(params) {
                    return {
                        q: $.trim(params.term)
                    };
                },
                processResults: function(data) {
                    return {
                        results: data
                    };
                },
                cache: true
            }
        });
    });
</script>

<!-- Date Time Picker & Moment Js-->
<script type="text/javascript">
    $(function() {
        $('.datetime').datetimepicker({
            format: 'YYYY-MM-DD HH:mm:ss',
            icons: {
                time: 'far fa-clock',
                date: 'far fa-calendar-alt',
                up: 'fas fa-arrow-up',
                down: 'fas fa-arrow-down',
                previous: 'fas fa-chevron-left',
                next: 'fas fa-chevron-right',
                today: 'far fa-calendar-check',
                clear: 'far fa-trash-alt',
                close: 'fas fa-times'
            }
        });
    });
</script>

<script type="text/javascript" src="{{ asset('vendor/ckeditor/ckeditor.js') }}"></script>
<script type="text/javascript" src="{{ asset('vendor/file-manager/js/file-manager.js') }}"></script>

<script type="text/javascript">
    CKEDITOR.replace('content', {
        filebrowserImageBrowseUrl: '/file-manager/ckeditor',
        language: '{{App::getLocale()}}',
        defaultLanguage: 'en'
    });
    CKEDITOR.replace('faq', {
        filebrowserImageBrowseUrl: '/file-manager/ckeditor',
        language: '{{App::getLocale()}}',
        defaultLanguage: 'en'
    });
    document.addEventListener("DOMContentLoaded", function() {

        var elem1 = document.getElementById('button-image');
        if (elem1 !== null && elem1 !== 'undefined') {
            document.getElementById('button-image').addEventListener('click', (event) => {
                event.preventDefault();

                window.open('/file-manager/fm-button', 'fm', 'width=800,height=600');
            });
        }

    });

    // set file link
    function fmSetLink($url) {
        document.getElementById('featured_image').value = $url;
    }
</script>
@endpush