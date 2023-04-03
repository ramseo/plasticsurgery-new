@extends('frontend.layouts.app')

@section('title') {{$$module_name_singular->meta_title}} @endsection

@section('site-meta-tags')
<meta name="description" content="{{ $$module_name_singular->meta_description ? $$module_name_singular->meta_description : setting('meta_keyword') }}">
@endsection


@section('content')

<div class="header-space"></div>
<div class="cit">
    <div class="container">
        <p>{{$$module_name_singular->name}}</p>
    </div>
</div>

<div class="container-fluid">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <p class="identity">
                    top cosmetic surgeons in <?= $city ?>
                </p>
                <div class="row">
                    <?php
                    $getAssignedDoctors = getAssignedDoctors($city);
                    if ($getAssignedDoctors) {
                        foreach ($getAssignedDoctors as $item) {
                    ?>
                            <div class="col-lg-3 doc-flex-cls">
                                <div class="col-lg-5 padd-null">
                                    <div class="doc-img-div">
                                        <?php if (file_exists(public_path() . '/storage/user/profile/' . $item->avatar)) { ?>
                                            <img src="<?= asset('/storage/user/profile/' . $item->avatar) ?>" style="width:100%" />
                                        <?php } else { ?>
                                            <img src="<?= asset($item->avatar) ?>" style="width:100%" />
                                        <?php } ?>
                                    </div>
                                    <div class="doc-star-rating">
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
                                <div class="col-lg-7 doc-details-sec">
                                    <div class="doc-name">
                                        Dr. <?= Str::words($item->first_name . " " . $item->last_name, '2')  ?>
                                    </div>
                                    <div class="doc-tagline">
                                        Plastic/Cosmetic
                                        Surgeon
                                    </div>
                                    <div class="doc-city">
                                        <i class="fa fa-map-marker" aria-hidden="true"></i>
                                        <?= $city ?>
                                    </div>
                                    <div class="btn btn-default doc-view-btn">
                                        view more
                                    </div>
                                </div>
                            </div>
                    <?php
                        }
                    }
                    ?>
                </div>
                <div class="row">
                    <div class="col">
                        <p>
                            At present, he serves the cosmetic and plastic surgery patients in his clinic in <?= $city ?>,
                            which he started in 2009 after returning from UK.
                            He dons the role of Managing Director and Chief Aesthetic Plastic Surgeon,
                            respectively in the clinic.
                            Alongside, They are also serving an Honorary Consultant Aesthetic Plastic Surgeon at Oyster and Pearl Hospitals,
                            and Ruby Hall Clinic, both in <?= $city ?>.
                            Among his major specialties include ethnic Rhinoplasty,
                            Facial rejuvenation, scar less Gynaecomastia (Male Breasts),
                            Breast Augmentation, Breast reduction and asymmetry correction,
                            Mummy Makeover (including Breast Lift),
                            and body Contouring using High Definition VASER and Microaire liposuction among others.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid">
    <div class="container">
        <div class="row">
            <div class="col">
                <p class="identity">COSMETIC SURGERY COST IN <?= $city ?></p>
                <p>The cosmetic surgery charges depend on the type of surgery you are about to undergo. Much will rely on the clinic and the surgeon through which you have agreed to go under the knife. You may have to pay somewhere between 50,000 INR to 150000 as per the surgery you opt for.
                    Contacting the clinic will help you know
                    about the involved costs in detail.</p>

                <p class="identity">Our Services</p>
                <p>In Dr. Ashish Davalbhakta’s clinic in <?= $city ?>, you can get the treatment at affordable cost under the supervision of Dr. Ashish Davalbhakta himself. You can know about the respective treatment in detail by seeking an appointment with him via call. If you cannot make it to the
                    clinic in person, there is also the option of e-consultation.</p>
                <p>The <?= $city ?> based clinic offers varied treatments under Cosmetic Surgery, Cosmetology and Wellness domains. It has even received “The Best Cosmetic Surgery Clinic in <?= $city ?>” by TOI in 2017, 2018 and 2019, for its excellent efforts in the healthcare field. Much credit for this recognition goes to the robust techniques, safety standards and the high
                    satisfaction levels that the clinic ensures during the treatment.</p>
                <p>As a part of aesthetic plastic surgery services, the clinic provides body and facial reshaping, fat grafting,
                    chin or cheek augmentation, breast augmentation, nose reshaping, vaginal
                    rejuvenation or genital surgery for men and women, and so on.<. /p>

            </div>
        </div>
    </div>
</div>

<!-- codepp -->
<div class="container-fluid mtab pt-4 pb-4" style="background-color:#f8f8f8">
    <div class="container">
        <p class="identity m-auto text-center" style="width:fit-content">
            Find Your Procedure
        </p>
        <ul class="nav nav-tabs" role="tablist">
            <li class="nav-item active">
                <a class="nav-link active ancr" data-toggle="tab" href="#home" aria-expanded="true">
                    Face Procedures
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link ancr" data-toggle="tab" href="#menu1" aria-expanded="false">
                    Breast Procedures
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link ancr" data-toggle="tab" href="#menu2" aria-expanded="false">
                    Body Procedures
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link ancr" data-toggle="tab" href="#menu3" aria-expanded="false">
                    Male Specific Procedures
                </a>
            </li>
        </ul>

        <div class="tab-content">
            <div id="home" class="container tab-pane active in">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-6">
                        <img src="img/face.jpg" style="width:100%">
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6">
                                <ul>
                                    <li>
                                        <a href="rhinoplasty-<?= $city ?>">Rhinoplasty</a>
                                    </li>
                                    <li>
                                        <a href="blepharoplasty-<?= $city ?>">Blepharoplasty</a>
                                    </li>
                                    <li>
                                        <a href="facelift-<?= $city ?>">Facelift</a>
                                    </li>
                                    <li>
                                        <a href="brow-lift-<?= $city ?>">Brow-Lift</a>
                                    </li>
                                    <li>
                                        <a href="neck-lift-<?= $city ?>">Neck-Lift</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6">
                                <ul>
                                    <li>
                                        <a href="chin-surgery-<?= $city ?>">Chin Surgery</a>
                                    </li>
                                    <li>
                                        <a href="cheek-augmentation-<?= $city ?>">Cheek-augmentation</a>
                                    </li>
                                    <li>
                                        <a href="lip-augmentation-<?= $city ?>">Lip-augmentation</a>
                                    </li>
                                    <li>
                                        <a href="buccal-fat-removal-<?= $city ?>">Buccal-Fat-Removal</a>
                                    </li>
                                    <li>
                                        <a href="ear-surgery-<?= $city ?>">Ear-Surgery</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div id="menu1" class="container tab-pane fade">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-6">
                        <img src="img/breast.jpg" style="width:100%">
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6">
                                <ul>
                                    <li>
                                        <a href="breast-augmentation-<?= $city ?>">Breast Augmentation</a>
                                    </li>
                                    <li>
                                        <a href="breast-lift-<?= $city ?>">Breast Lift</a>
                                    </li>
                                    <li>
                                        <a href="breast-reduction-<?= $city ?>">Breast Reduction</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6">
                                <ul>
                                    <li>
                                        <a href="breast-implant-removal-<?= $city ?>">Breast Implant Removal</a>
                                    </li>
                                    <li>
                                        <a href="breast-implant-revision-<?= $city ?>">Breast Implant Revision</a>
                                    </li>
                                    <li>
                                        <a href="gynecomastia-<?= $city ?>">Gynecomastia</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div id="menu2" class="container tab-pane fade">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-6">
                        <img src="img/body.jpg" style="width:100%">
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6">
                                <ul>
                                    <li>
                                        <a href="liposuction-<?= $city ?>">Liposuction</a>
                                    </li>
                                    <li>
                                        <a href="tummy-tuck-<?= $city ?>">Tummy-tuck</a>
                                    </li>
                                    <li>
                                        <a href="buttock-enhancement-<?= $city ?>">Buttock Enhancement</a>
                                    </li>
                                    <li>
                                        <a href="body-lift-<?= $city ?>">Body Lift</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6">
                                <ul>
                                    <li>
                                        <a href="arm-lift-<?= $city ?>">Arm Lift</a>
                                    </li>
                                    <li>
                                        <a href="thigh-lift-<?= $city ?>">Thigh Lift</a>
                                    </li>
                                    <li>
                                        <a href="body-contouring-<?= $city ?>">Body Contouring</a>
                                    </li>
                                    <li>
                                        <a href="mommy-makeover-<?= $city ?>">Mommy Makeover</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div id="menu3" class="container tab-pane fade">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-6">
                        <img src="img/male.jpg" style="width:100%">
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6">
                                <ul>
                                    <li>
                                        <a href="hair-transplant-<?= $city ?>">Hair Transplant</a>
                                    </li>
                                    <li>
                                        <a href="gynecomastia-<?= $city ?>">Gynecomastia</a>
                                    </li>
                                    <li>
                                        <a href="men-and-plastic-surgery-<?= $city ?>">Men and Plastic Surgery</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div id="menu4" class="container tab-pane fade">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-6">
                        <img src="img/body-hair-to-head.jpg" style="width:100%">
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6">
                                <ul>
                                    <li>
                                        <a href="hair-transplant-<?= $city ?>">Hair Transplant</a>
                                    </li>
                                    <li>
                                        <a href="gynecomastia-<?= $city ?>">Gynecomastia</a>
                                    </li>
                                    <li>
                                        <a href="men-and-plastic-surgery-<?= $city ?>">Men and Plastic Surgery</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div id="menu5" class="container tab-pane fade">
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-6">
                        <img src="img/failed-hair-transplant-repair.jpg" style="width:100%">
                    </div>
                    <div class="col-lg-6 col-md-6 col-sm-6">
                        <div class="row">
                            <div class="col-lg-6 col-md-6 col-sm-6">
                                <ul>
                                    <li>
                                        <a href="hair-transplant-<?= $city ?>">Hanir Transplant</a>
                                    </li>
                                    <li>
                                        <a href="gynecomastia-<?= $city ?>">Gynecomastia</a>
                                    </li>
                                    <li>
                                        <a href="men-and-plastic-surgery-<?= $city ?>">Men and Plastic Surgery</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid aco">
    <div id="accordion">
        <div class="card">
            <div class="card-header" id="headingOne">
                <h2 class="btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                    Face Procedures
                </h2>
            </div>

            <div id="collapseOne" class="collapse in show" aria-labelledby="headingOne" data-parent="#accordion" aria-expanded="true" style="">
                <div class="card-body">
                    <img src="img/face.jpg" style="width:100%">
                    <ul>
                        <li>
                            <a href="rhinoplasty-<?= $city ?>">Rhinoplasty</a>
                        </li>
                        <li>
                            <a href="blepharoplasty-<?= $city ?>">Blepharoplasty</a>
                        </li>
                        <li>
                            <a href="facelift-<?= $city ?>">Facelift</a>
                        </li>
                        <li>
                            <a href="brow-lift-<?= $city ?>">Brow-Lift</a>
                        </li>
                        <li>
                            <a href="neck-lift-<?= $city ?>">Neck-Lift</a>
                        </li>
                        <li>
                            <a href="chin-surgery-<?= $city ?>">Chin Surgery</a>
                        </li>
                        <li>
                            <a href="cheek-augmentation-<?= $city ?>">Cheek-augmentation</a>
                        </li>
                        <li>
                            <a href="lip-augmentation-<?= $city ?>">Lip-augmentation</a>
                        </li>
                        <li>
                            <a href="buccal-fat-removal-<?= $city ?>">Buccal-Fat-Removal</a>
                        </li>
                        <li>
                            <a href="ear-surgery-<?= $city ?>">Ear-Surgery</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="card">
            <div class="card-header" id="headingTwo">
                <h2 class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                    Breast Procedures
                </h2>
            </div>
            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">
                <div class="card-body">
                    <img src="img/breast.jpg" style="width:100%">
                    <ul>
                        <li>
                            <a href="breast-augmentation-<?= $city ?>">Breast Augmentation</a>
                        </li>
                        <li>
                            <a href="breast-lift-<?= $city ?>">Breast Lift</a>
                        </li>
                        <li>
                            <a href="breast-reduction-<?= $city ?>">Breast Reduction</a>
                        </li>
                        <li>
                            <a href="breast-implant-removal-<?= $city ?>">Breast Implant Removal</a>
                        </li>
                        <li>
                            <a href="breast-implant-revision-<?= $city ?>">Breast Implant Revision</a>
                        </li>
                        <li>
                            <a href="gynecomastia-<?= $city ?>">Gynecomastia</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="card">
            <div class="card-header" id="headingThree">
                <h2 class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                    Body Procedures
                </h2>
            </div>
            <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">
                <div class="card-body">
                    <img src="img/body.jpg" style="width:100%">
                    <ul>
                        <li>
                            <a href="liposuction-<?= $city ?>">Liposuction</a>
                        </li>
                        <li>
                            <a href="tummy-tuck-<?= $city ?>">Tummy-tuck</a>
                        </li>
                        <li>
                            <a href="buttock-enhancement-<?= $city ?>">Buttock Enhancement</a>
                        </li>
                        <li>
                            <a href="body-lift-<?= $city ?>">Body Lift</a>
                        </li>
                        <li>
                            <a href="arm-lift-<?= $city ?>">Arm Lift</a>
                        </li>
                        <li>
                            <a href="thigh-lift-<?= $city ?>">Thigh Lift</a>
                        </li>
                        <li>
                            <a href="body-contouring-<?= $city ?>">Body Contouring</a>
                        </li>
                        <li>
                            <a href="mommy-makeover-<?= $city ?>">Mommy Makeover</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <div class="card">
            <div class="card-header" id="headingfour">
                <h2 class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapsefour" aria-expanded="false" aria-controls="collapsefour">
                    Male-Specific Procedures<br>
                </h2>
            </div>
            <div id="collapsefour" class="collapse" aria-labelledby="headingfour" data-parent="#accordion">
                <div class="card-body">
                    <img src="img/male.jpg" style="width:100%">
                    <ul>
                        <li>
                            <a href="hair-transplant-<?= $city ?>">Hair Transplant</a>
                        </li>
                        <li>
                            <a href="gynecomastia-<?= $city ?>">Gynecomastia</a>
                        </li>
                        <li>
                            <a href="men-and-plastic-surgery-<?= $city ?>">Men and Plastic Surgery</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="spacer">
    <div class="container-fluid">
        <div class="container">
            <!-- <p class="small-heading m-auto">
                Get the right procedure
            </p>
            <br>
            <h2 class="apt text-center">
                <span style="color:#082092">
                    <strong>Book an Appointment</strong>
                </span>
                with your
                <span style="color:green">
                    <strong class="animate animated">
                        Top Cosmetic Surgeon
                    </strong>
                </span>
            </h2>
            <br>
            <p class="small-heading m-auto">
                It will be our pleasure to serve you with our specialisation.
            </p> -->
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
<!-- codepp -->

@endsection

@push ("after-scripts")

@endpush