@extends('frontend.layouts.app')

@section('title') {{$$module_name_singular->meta_title}} @endsection

@section('site-meta-tags')
<meta name="description" content="{{ $$module_name_singular->meta_description ? $$module_name_singular->meta_description : setting('meta_keyword') }}">
@endsection


@section('content')

<div class="header-space"></div>
<div class="cit">
    <div class="container">
        <p class="cities_cls">
            <?= $$module_name_singular->name ?>
        </p>
    </div>
</div>

<div class="container-fluid">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <p class="identity">
                    <span>
                        DR. <?= $doctor_details->first_name . " " . $doctor_details->last_name ?>
                    </span>
                    <span class="pull-right profile-write-review">
                        <a href="#" data-toggle="modal" data-target="#reviewModal">
                            Write a Review
                            <i class="fa fa-pencil" aria-hidden="true"></i>
                        </a>
                    </span>
                </p>
                <div class="row">
                    <div class="col-lg-2">
                        <?php if (file_exists(public_path() . '/storage/user/profile/' . $doctor_details->avatar)) { ?>
                            <img src="<?= asset('/storage/user/profile/' . $doctor_details->avatar) ?>" style="width:100%">
                        <?php } else { ?>
                            <img src="<?= asset($doctor_details->avatar) ?>" style="width:100%">
                        <?php } ?>
                        <!-- codeff -->
                        <?php
                        $reviews = getDataArray('vendor_reviews', 'user_id', $doctor_details->id);
                        $average = averageReview($reviews);
                        ?>
                        <!-- codeff -->
                        <?php if ($average > 0) { ?>
                            <div class="doc-star-rating-profile">
                                <ul class="list-inline space-list">
                                    <li class="list-inline-item">
                                        <ul class="list-inline">
                                            <?php
                                            for ($i = 1; $i <= $average; $i++) {
                                            ?>
                                                <li class="list-inline-item yellow-star">
                                                    <i class="fa fa-star"></i>
                                                </li>
                                            <?php } ?>
                                            <!-- <li class="list-inline-item yellow-star">
                                                <i class="fa fa-star"></i>
                                            </li>
                                            <li class="list-inline-item yellow-star">
                                                <i class="fa fa-star"></i>
                                            </li>
                                            <li class="list-inline-item yellow-star">
                                                <i class="fa fa-star"></i>
                                            </li>
                                            <li class="list-inline-item yellow-star">
                                                <i class="fa fa-star"></i>
                                            </li> -->
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        <?php } ?>
                    </div>
                    <div class="col-lg-10">
                        <p>
                            <strong>
                                <i>Plastic Surgeon, M.S., M.Ch.</i>
                            </strong>
                        </p>
                        <p>
                            <strong>Years of Experience:</strong>
                            <?= $doctor_details->year_experience ?> years
                        </p>
                        <p>
                            <strong>Address:</strong>
                            <?= $doctor_details->address ?>
                        </p>
                        <p class="doc-details-cities">
                            <?= $citiesStr ?> India.
                        </p>
                        <p>
                            <strong>Email:</strong>
                            <a href="mailto:<?= $doctor_details->email ?>">
                                <?= $doctor_details->email ?>
                            </a>
                        </p>
                    </div>
                </div>
                <p class="identity">
                    Specializations:
                </p>
                <ul>
                    <li>Nose Surgery</li>
                    <li>Facelift</li>
                    <li>Breast Surgery</li>
                    <li>Body Contouring</li>
                    <li>Liposuction</li>
                    <li>Tummy tuck</li>
                    <li>Scar Removal</li>
                    <li>Eyelid Surgery</li>
                </ul>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid">
    <div class="container">
        <div class="row">
            <div class="col">
                <p class="identity">
                    ABOUT DR. <?= $doctor_details->first_name . " " . $doctor_details->last_name ?>
                </p>
                <p>
                    Renowned as one of the most reputed cosmetic surgeons in India, Dr. <?= $doctor_details->first_name . " " . $doctor_details->last_name ?> is a most-sought surgeon for people looking to improve their physical appearance through cosmetic surgeries. She has 19 years of experience in the field of cosmetic surgery, helping people to feel confident with their new and improved appearances.
                </p>
                <p>
                    Dr. <?= $doctor_details->first_name . " " . $doctor_details->last_name ?> has worked on several patients looking to better their features including surgeries for victims of road accidents and burns, and people with physical deformities. She is a talented cosmetic surgeon in identifying and understanding the end results that the patient is looking for and takes a comprehensive approach to achieve the same. She is known for her skills in microvascular surgeries and is one of the widely demanded cosmetic surgeons in Hyderabad to perform many other similar reconstructive surgeries.
                </p>
                <p>
                    Her in-depth knowledge of the cosmetic surgical procedures and the detailed analysis of the patient profile has time and again made her one of the most successful cosmetic surgeons.
                </p>
                <p class="identity">MEMBERSHIPS:</p>
                <p>
                    Dr. <?= $doctor_details->first_name . " " . $doctor_details->last_name ?> is a member of numerous national and international associations for plastic and cosmetic surgeons:
                </p>
                <ul>
                    <li>International Society of Aesthetic Plastic Surgeons (ISAPS)</li>
                    <li>American Society of Aesthetic Plastic Surgeons ( ASAPS)</li>
                    <li>Indian Association of Aesthetic Plastic Surgeons (IAAPS)</li>
                    <li>Association of Plastic Surgeons of India ( APSI)</li>
                    <li>Indian Medical Association (IMA)</li>
                    <li>American Society of Plastic Surgeons (ASPS)</li>
                </ul>
            </div>
        </div>
    </div>
</div>

<div class="spacer">
    <div class="container-fluid">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="item-middle">
                        <div class="ico">
                            <i class="fa fa-paper-plane-o" aria-hidden="true"></i>
                            <h6>For any query related to treatment email us</h6>
                            <h6>
                                <a href="mailto:info@cosmeticsurgery.in">
                                    info@cosmeticsurgery.in
                                </a>
                            </h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- doctor review popup -->
<div class="modal fade" id="reviewModal">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="reachus-overlay">
                <div class="modal-header">
                    <button id="eliminate-val-error" type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-header justify-content-center">
                    <h4 class="modal-title">
                        <div class="doc-title">
                            Dr. <?= $doctor_details->first_name . " " . $doctor_details->last_name ?>, MD
                        </div>
                        <p class="text-center margin-null">Plastic Surgery</p>
                    </h4>
                </div>
                <div class="modal-body">
                    <div class="review-form-main-col">
                        <div class="alert alert-danger reviewAlert" style="display: none;"></div>
                        <form id="reviewForm">
                            <div class="form-group stars-cls">
                                <div class="review-rating" data-rateit-mode="font" data-rateit-resetable="false"></div>
                                <input type="hidden" id="review-rating-hidden" value="0">
                            </div>

                            <div class="form-group">
                                <label for="name">Name</label>
                                <input id="reviewTitle" name="name" type="text" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="">Your Review</label>
                                <textarea id="reviewDescription" name="" class="form-control"></textarea>
                            </div>
                            <div class="form-group save-btn-cls">
                                @auth
                                <input id="reviewUserId" type="hidden" value="{{Auth::user()->id}}">
                                @endauth
                                <input id="reviewDoctorId" type="hidden" value="{{$doctor_details->id}}">
                                <input type="submit" class="btn btn-primary submit-review" value="Submit Review">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- doctor review popup -->

@endsection

@push ("after-scripts")
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.blockUI/2.70/jquery.blockUI.min.js"></script>
<script>
    $(document).ready(function() {
        $('.callButton').click(function() {
            if ('<?php echo Auth::check(); ?>' == '') {
                location.href = "{{ route('login') }}";
            } else {
                $('body').block({
                    message: "Processing..."
                });
                $.ajax({
                    type: 'POST',
                    url: "{{route('frontend.call')}}",
                    data: {
                        '_token': "<?php echo csrf_token(); ?>",
                        'user_id': "<?php echo Auth::check() == 1 ? Auth::user()->id : ''; ?>",
                        'vendor_id': "<?php echo '$vendor_details->id'; ?>"
                    },
                    success: function(res) {
                        if (res.success) {
                            $(".callPopup").addClass("active");
                            $("#call-slide").addClass("active");
                            // $('.reviewAlert').html('').hide();
                            // $('#reviewForm').trigger('reset');
                            // toastr.success(res.message, 'Review posted Successfully!');
                        } else {
                            // $('.reviewAlert').html(res.message).show();
                        }
                        $('body').unblock();
                    }
                });
            }

        });


        $('.cpp-after-call').click(function() {
            let review = $(this).attr('review');
            $('.cppSlide').removeClass('active');
            $.ajax({
                type: 'POST',
                url: "{{route('frontend.call-review')}}",
                data: {
                    '_token': "<?php echo csrf_token(); ?>",
                    'user_id': "<?php echo Auth::check() == 1 ? Auth::user()->id : ''; ?>",
                    'vendor_id': "<?php echo '$vendor_details->id;' ?>",
                    'review': review
                },
                success: function(res) {
                    if (res.success) {
                        $("#call-thank-you-slide").addClass("active");
                    } else {
                        // $('.reviewAlert').html(res.message).show();
                    }
                }
            });

        });

        $('.cppClose').click(function() {
            $('.callPopup').removeClass('active');
        });

    });

    $(document).ready(function() {
        var options = {
            minMargin: 10,
            maxMargin: 35,
            itemSelector: ".item"
        };
        $(".containerCollage").justifiedGallery();

        $('#reviewForm').submit(function(e) {
            e.preventDefault();
            $.ajax({
                type: 'POST',
                url: "{{route('frontend.post-review')}}",
                data: {
                    '_token': "<?php echo csrf_token() ?>",
                    'user_id': $('#reviewUserId').val(),
                    'doctor_id': $('#reviewDoctorId').val(),
                    'name': $('#reviewTitle').val(),
                    'rating': $('#review-rating-hidden').val(),
                    'description': $('#reviewDescription').val()
                },
                success: function(res) {
                    if (res.success) {
                        $('.reviewAlert').html('').hide();
                        $('#reviewForm').trigger('reset');
                        toastr.success(res.message, 'Review posted Successfully!');

                        setTimeout(function() {
                            $('#reviewModal').modal('hide');
                            $('#rateit-reset-2').trigger("click");
                        }, 1000);
                    } else {
                        console.log(res.message);
                        $('.reviewAlert').html(res.message).show();
                    }
                }
            });
        });

        // reply modal
        $('#replyForm').submit(function(e) {
            e.preventDefault();
            $.ajax({
                type: 'POST',
                url: "{{route('frontend.post-reply')}}",
                data: {
                    '_token': "<?php echo csrf_token() ?>",
                    'review_id': $('#update_review_id').val(),
                    'name': $('#replyTitle').val(),
                    'your_reply': $('#replyDescription').val(),
                    'vendor_image': "<?= '$vendor_details->image' ?>",
                },
                success: function(res) {

                    if (res.success) {
                        console.log(res.review_id);

                        $('.replyAlert').html('').hide();
                        $('#replyForm').trigger('reset');
                        toastr.success(res.message, 'Reply posted Successfully!');

                        setTimeout(function() {
                            $('#replyModal').modal('hide');
                            if (res.reply_html) {
                                $("#AjaxUpdateReply-" + res.review_id).html(res.reply_html);
                            }
                        }, 1000);

                    } else {
                        console.log(res.message);
                        $('.replyAlert').html(res.message).show();
                    }
                }
            });
        });
        // reply modal

        $('#see-full-list').click(function(e) {
            e.preventDefault();
            $('html, body').animate({
                scrollTop: $(".pricing-col").offset().top - 100
            }, 1500);
        });
    });
</script>

<script>
    $("#reviewModal").on('shown.bs.modal', function() {
        $('.review-rating').rateit({
            max: 5,
            step: 1,
            backingfld: '#review-rating-hidden'
        });
    });
</script>
@endpush