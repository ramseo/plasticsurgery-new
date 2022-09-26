// const { flagSet } = require("@coreui/icons");

// Bootstrap Tooltip enabled and active
$(function () {
    $('[data-toggle="tooltip"]').tooltip();

    $('#flash-overlay-modal').modal();
})


$(document).on('click', '.del-link', function (e) {
    var answer = confirm('Do you want to delete?');
    if (answer) {
        // Proceed
    } else {
        e.preventDefault();
    }
});
