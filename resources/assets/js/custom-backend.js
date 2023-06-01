// const { flagSet } = require("@coreui/icons");

// Bootstrap Tooltip enabled and active
$(function () {
    $('[data-toggle="tooltip"]').tooltip();

    $('#flash-overlay-modal').modal();
})


$(document).on('click', '.del-link', function (e) {
    var answer = confirm('Are you sure?');
    if (answer) {
        // Proceed
    } else {
        e.preventDefault();
    }
});

$(document).on('click', '.displayPassword', function () {
    var inputType = $(this).parents('.password-container').find('input').attr('type');
    if (inputType == 'password') {
        $(this).parents('.password-container').find('input').attr('type', 'text');
        $(this).html('<i class="fa fa-eye-slash" aria-hidden="true"></i>');
    } else {
        $(this).parents('.password-container').find('input').attr('type', 'password');
        $(this).html('<i class="fa fa-eye" aria-hidden="true"></i>');
    }
});

$(document).on("click", '#sidebar-show-hide', function () {
    var elm = $(this).children();
    var cls = $(elm).attr("class");
    if (cls == "fa fa-chevron-left fa-2x") {
        $('#sidebar').css({ "margin-left": "-256px", "position": "fixed" });
        $('.c-wrapper').css({ "margin-left": "0" });

        $(elm).attr("class", "fa fa-chevron-right fa-2x");
    } else {
        $('#sidebar').css({ "margin-left": "0", "position": "fixed" });
        $('.c-wrapper').css({ "margin-left": "256px" });
        $(elm).attr("class", "fa fa-chevron-left fa-2x");
    }
});

$(document).on("change", '.sort-menu-cls', function () {

    $.ajax({
        url: menu_sort_path,
        type: 'post',
        data: {
            sort: this.value,
            menu_id: $(this).attr("menu-id"),
            menu_item_id: $(this).attr("menu-item-id"),
            "_token": csrf_token,
        },
        dataType: 'json',
        success: function (response) {
            if (response.status) {
                console.log("sort updated");
            } else {
                alert("The sort value " + response.sort + " is already assigned");
                this.defaultSelected;
                location.reload();
            }
        }
    });
})
