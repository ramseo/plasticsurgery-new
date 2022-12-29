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


$(document).on('click', '.album-cls', function () {
    $('html,body').animate({
        scrollTop: $(".new-div").offset().top - 100
    }, 'slow');
});

$(document).on('click', '.price-arrow-down', function () {
    $('html,body').animate({
        scrollTop: $(".pricing-col").offset().top - 100
    }, 'slow');
});

$(document).on('click', '.rating-scroll-event', function () {
    $('html,body').animate({
        scrollTop: $(".detail-review-header").offset().top - 140
    }, 'slow');
});

function copyToClipboard(elementId) {

    // Create a "hidden" input
    var aux = document.createElement("input");

    // Assign it the value of the specified element
    aux.setAttribute("value", document.getElementById(elementId).innerHTML);

    // Append it to the body
    document.body.appendChild(aux);

    // Highlight its content
    aux.select();

    // Copy the highlighted text
    document.execCommand("copy");

    // change text
    $("#text-copy-btn").html("Copied!");
    setTimeout(function () {
        $("#shareModal").modal("hide");
        $("#text-copy-btn").html("Copy Link");
    }, 2000)

    // Remove it from the body
    document.body.removeChild(aux);

}
