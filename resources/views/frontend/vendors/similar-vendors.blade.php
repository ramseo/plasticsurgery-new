@php
$similar_vendors = get_similar_vendors($vendor_details->type_id);
@endphp

@if($similar_vendors)
<section id="photographers-section">
    <div class="container-fluid">
        <div class="col-xs-12 common-left-heading">
            <p class="head">Similar {{$type->name}}</p>
            <p class="grey-text">These are {{$type->name}} similar to '{{$vendor_details->business_name}}'</p>
        </div>
        <div class="row vendor-list-row">
            @foreach($similar_vendors as $similar_vendor)
            @php
            $vendorCity = getData('cities', 'id', $similar_vendor->city_id);
            $vendorType = getData('types', 'id', $similar_vendor->type_id);
            $reviews = getDataArray('vendor_reviews', 'vendor_id', $similar_vendor->id);
            $average = averageReview($reviews);
            @endphp
            <div class="col-xs-12 col-sm-4">
                <div class="common-card vendor-card-col vendor-box-cls">
                    <a target="_blank" href="{{url('/') . '/' . $vendorType->slug . '/' . $vendorCity->slug . '/' . $similar_vendor->slug }}">
                        <div class="img-col">
                            @php
                            $vendor_profile_img = asset('img/default-vendor.jpg');
                            if($similar_vendor->image){
                            if(file_exists( public_path().'/storage/vendor/profile/'. $similar_vendor->image )){
                            $vendor_profile_img = asset('storage/vendor/profile/'.$similar_vendor->image);
                            }
                            }
                            @endphp

                            <?php if ($similar_vendor->most_popular == 1) { ?>
                                <div class="ribbon ribbon-top-left">
                                    <span>Most Popular</span>
                                </div>
                            <?php } ?>
                            <div class="img-col min-height-img pos-rel-cls">
                                <img src="{{$vendor_profile_img}}" alt="image alt" class="img-fluid min-height-270">
                                <!-- caption -->
                                <div class="image__overlay image__overlay--primary">
                                    <div class="image__title">see profile</div>
                                </div>
                                <!-- caption -->
                            </div>

                        </div>
                        <div class="text-col">
                            <ul class="list-inline space-list">
                                <li>
                                    <p class="title">{{$similar_vendor->business_name}}</p>
                                    <p class="grey-text">{{$vendorCity->name}}</p>
                                </li>
                                @if($average > 0)
                                <li class="text-right">
                                    <span class="vendor-rating"><i class="fa fa-star"></i> {{number_format($average, 1)}}</span>
                                    <p><a href="#" class="grey-text">{{count($reviews)}} Reviews</a></p>
                                </li>
                                @endif
                            </ul>
                            <ul class="list-inline vendor-card space-list v-center">
                                <li>
                                    <p class="price"><span>Rs. {{$similar_vendor->price}}</span></p>
                                </li>
                                <li class="text-right">
                                    <p class="grey-text margin-null">
                                        <?= Str::words($similar_vendor->label, '5')  ?>
                                    </p>
                                </li>
                            </ul>
                        </div>
                    </a>
                </div>
            </div>
            @endforeach
        </div>
        <!-- <div class="col-xs-12 col-sm-12 load-more-col text-center">
                <a href="#" class="btn btn-primary text-uppercase">Show more Photographers</a>
            </div> -->
    </div>
</section>
@endif

<?php
$getSpecificCityVendors = getVendorTypes($city->id);
if ($getSpecificCityVendors) {
?>
    <section id="find-more">
        <div class="container-fluid">
            <div class="col-xs-12 common-left-heading">
                <p class="head">Didn't find what you want?</p>
            </div>
            <div class="row">
                <?php foreach ($getSpecificCityVendors as $item) { ?>
                    <div class="col-md-6">
                        <div class="vendor-item">
                            <a target="_blank" href="<?= url('/') . '/' . $item->slug . '/' . $city->slug ?>">
                                <?= $item->name . " " . "in" . " " . $city->name ?>
                            </a>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </section>
<?php } ?>

<section id="best-matching">
    <div class="reachus-overlay">
        <div class="container-fluid">
            <div class="col-xs-12 common-left-heading">
                <p class="head">Get Best Matching Bridal Makeup Artists on your phone</p>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="err-div text-center">
                        <div class="full_name_err"></div>
                        <div class="mobile_number_err"></div>
                        <div class="google_recaptcha_err"></div>
                    </div>
                    <div class="bridal-matching-form">

                        <form id="best-matching-form" class="form-inline">
                            <div class="form-group mb-2">
                                <input type="text" name="full_name" class="form-control" id="full_name" placeholder="Full Name">
                            </div>
                            <div class="form-group mx-sm-3 mb-2">
                                <input type="number" name="mobile_number" class="form-control" id="mobile_number" placeholder="Mobile Number">
                            </div>
                            <div class="form-group mx-sm-3 mb-2">
                                <div class="g-recaptcha" data-sitekey="<?= env("DATA_SITEKEY_V2") ?>"></div>
                            </div>
                            <button id="save-best-matching" type="submit" class="btn btn-primary mb-2">
                                Save
                            </button>
                        </form>
                    </div>
                    <div class="bridal-matching-form-content">
                        <div>
                            <span class="icon-img">
                                <img src="<?= asset('images/whatsapp-icon.png') ?>">
                            </span>
                            <span class="bridal-matching-text">
                                WhatsApp/Call with your personal wedding manager
                            </span>
                        </div>
                        <div>
                            <span class="icon-img">
                                <img src="<?= asset('images/icon-notepad.png') ?>">
                            </span>
                            <span class="bridal-matching-text">
                                Tell her your doubts, requirements, budget and get best recommendations
                            </span>
                        </div>
                        <div>
                            <span class="icon-img">
                                <img src="<?= asset('images/icon-checkmark.png') ?>">
                            </span>
                            <span class="bridal-matching-text">
                                Get the best deal in your budget and plan!
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- popup -->
<div class="modal fade" id="enquiry-phone-Modal">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body">
                <div class="review-form-main-col">
                    <h4>Thank you for your enquiry</h4>
                    <div>
                        We received your details and contact you soon.
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- popup -->

@push('after-scripts')
<script>
    $(document).ready(function() {
        $('#best-matching-form').submit(function(event) {
            event.preventDefault();
            var status = true;

            $('.full_name_err').html("");
            $('.mobile_number_err').html("");
            $('.google_recaptcha_err').html("");

            if ($('input[name="full_name"]').val() == "") {
                $('.full_name_err').html("Please enter your full name!").css({
                    'color': '#fff',
                    'font-weight': 600
                });
                status = false;
            }

            if ($('input[name="mobile_number"]').val() == "") {
                $('.mobile_number_err').html("Please enter your mobile number!").css({
                    'color': '#fff',
                    'font-weight': 600
                });
                status = false;
            }

            var CURRENT_SERVER = "<?= env("CURRENT_SERVER") ?>";
            if (CURRENT_SERVER != "local") {
                if (grecaptcha.getResponse() == "") {
                    $('.google_recaptcha_err').html("You can't proceed without captcha!").css({
                        'color': '#fff',
                        'font-weight': 600
                    });
                    status = false;
                }
            }

            if (status) {
                $.ajax({
                    url: "<?= route('frontend.newsletter-save-phone') ?>",
                    type: "POST",
                    data: {
                        '_token': "<?= csrf_token() ?>",
                        'full_name': $('input[name="full_name"]').val(),
                        'mobile_number': $('input[name="mobile_number"]').val(),
                    },
                    dataType: 'json',
                    success: function(response) {
                        if (response.success) {
                            $("#enquiry-phone-Modal").modal("show");
                            $('#best-matching-form').trigger('reset');

                            setTimeout(function() {
                                $("#enquiry-phone-Modal").modal("hide");
                            }, 4000);
                        }
                    }
                });
            }
        })
    });
</script>
@endpush