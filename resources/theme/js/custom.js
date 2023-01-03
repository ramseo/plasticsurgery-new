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

function copyLinkText(GfGInput) {
    /* Get the text field */
    var copyGfGText = document.getElementById(GfGInput);

    /* Select the text field */
    copyGfGText.select();

    /* Copy the text inside the text field */
    document.execCommand("copy");

    // change text
    $("#text-copy-btn").html("Copied!");
    setTimeout(function () {
        $("#shareModal").modal("hide");
        $("#text-copy-btn").html("Copy Link");
    }, 2000)
}

$(document).on('click', '.show-more-reviews', function () {
    $('.detail-review-body .single-review').css("display", 'block');
    $('.show-more-reviews').hide();
});

$(document).ready(function () {
    var totalReviews = $('.detail-review-body .single-review').length;
    if (totalReviews > 3) {
        $('.show-more-reviews').show();
    } else {
        $('.show-more-reviews').hide();
    }

    var showReviews = $('.detail-review-body .rev-mor-cls').length;
    $('.show-more-reviews').html("Show More" + " " + showReviews + " " + "Reviews");
})
