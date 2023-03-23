<div class="row">
    <div class="col-6">
        <div class="form-group">
            <?php
            $field_name = 'city';
            $field_lable = __("cms::$module_name.$field_name");
            $field_placeholder = __("Select an option");
            $required = "";
            $getAllCities = getAllCities();

            ?>
            {{ html()->label($field_lable, $field_name) }} {!! fielf_required($required) !!}
            {{ html()->select($field_name, $getAllCities)->placeholder($field_placeholder)->class('form-control select2 this-select-item')->id('this-select-item')->attributes(["$required"]) }}
        </div>
    </div>
</div>

<div class="row">
    <div class="col-12">
        <div class="form-group">
            <?php
            $field_name = 'content';
            $field_lable = __("cms::$module_name.$field_name");
            $field_placeholder = $field_lable;
            $required = "";
            ?>
            {{ html()->label($field_lable, $field_name) }} {!! fielf_required($required) !!}
            {{ html()->textarea($field_name)->placeholder($field_placeholder)->class('form-control')->attributes(["$required"]) }}
        </div>
    </div>
</div>

<!-- Select2 Library -->
<x-library.select2 />
<x-library.datetime-picker />

@push('after-styles')
<!-- File Manager -->
<link rel="stylesheet" href="{{ asset('vendor/file-manager/css/file-manager.css') }}">
@endpush

@push ('after-scripts')
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
        defaultLanguage: 'en',
        allowedContent: true
    });

    document.addEventListener("DOMContentLoaded", function() {

        document.getElementById('button-image').addEventListener('click', (event) => {
            event.preventDefault();

            window.open('/file-manager/fm-button', 'fm', 'width=800,height=600');
        });
    });

    // set file link
    function fmSetLink($url) {
        document.getElementById('featured_image').value = $url;
    }
</script>

<script>
    $(document).on('change', '.this-select-item', function() {
        var selected_city = $(this).find(":selected").text();

        $.ajax({
            url: "<?= route('backend.pages.checkcity') ?>",
            type: "post",
            dataType: 'json',
            data: {
                "_token": "<?= csrf_token() ?>",
                city: selected_city,
            },
            success: function(response) {
                console.log(response);
                if (response.status == false) {
                    alert(selected_city + " " + 'page was already added!');
                    $("#this-select-item").val(null).trigger("change");
                }
            },
            error: function(xhr, textStatus, errorThrown) {
                alert('AJAX ERROR ! Check the console !');
                console.error(errorThrown);
                submitBtn.button('reset');
            }
        });
    });
</script>
@endpush