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
                        <div class="doc-star-rating-profile">
                            <ul class="list-inline space-list">
                                <li class="list-inline-item">
                                    <ul class="list-inline">
                                        <li class="list-inline-item yellow-star">
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
                                        </li>
                                        <li class="list-inline-item yellow-star">
                                            <i class="fa fa-star"></i>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
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
                    <h4 class="modal-title">
                        Dr. <?= $doctor_details->first_name . " " . $doctor_details->last_name ?>
                    </h4>
                    <button id="eliminate-val-error" type="button" class="close" data-dismiss="modal">&times;</button>
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
                                <?php
                                if (auth()->user() != Null) {
                                    $loggedInUserName = auth()->user()->first_name . " " . auth()->user()->last_name;
                                ?>
                                    <input id="reviewTitle" value="<?= $loggedInUserName ?>" name="name" type="text" class="form-control" readonly>
                                <?php
                                } else {
                                ?>
                                    <input id="reviewTitle" name="name" type="text" class="form-control">
                                <?php } ?>
                            </div>
                            <div class="form-group">
                                <label for="">Your Review</label>
                                <textarea id="reviewDescription" name="" class="form-control"></textarea>
                            </div>
                            <div class="form-group save-btn-cls">
                                @auth
                                <input id="reviewUserId" type="hidden" value="{{Auth::user()->id}}">
                                @endauth
                                <input id="reviewVendorId" type="hidden" value="{{$doctor_details->id}}">
                                <input type="submit" class="btn btn-primary" value="Submit">
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

@endpush