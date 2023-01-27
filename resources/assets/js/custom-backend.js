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
    var elm = $(this).parent();
    var cls = $(elm).attr("class");
    if (cls == "fa fa-chevron-left") {
        $(elm).attr("class", "fa fa-chevron-right");
    } else {
        $(elm).attr("class", "fa fa-chevron-left");
    }
})
