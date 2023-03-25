@extends('frontend.layouts.app')

@section('title') {{$$module_name_singular->meta_title}} @endsection

@section('site-meta-tags')
<meta name="keyword" content="{{ $$module_name_singular->meta_keywords ? $$module_name_singular->meta_keywords : setting('meta_keyword') }}">
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
            <?php
            $getAssignedDoctors = getAssignedDoctors($city);
            if ($getAssignedDoctors) {
                foreach ($getAssignedDoctors as $item) {
            ?>
                    <div class="col-lg-12">
                        <p class="identity">
                            DR. <?= $item->first_name . " " . $item->last_name ?>
                            – THE BEST RECONSTRUCTIVE AND AESTHETIC PLASTIC SURGEON IN <?= $city ?>
                        </p>
                        <div class="row">
                            <div class="col-lg-2">
                                <?php if (file_exists(public_path() . '/storage/user/profile/' . $item->avatar)) { ?>
                                    <img src="<?= asset('/storage/user/profile/' . $item->avatar) ?>" style="width:100%" />
                                <?php } else { ?>
                                    <img src="<?= asset($user->avatar) ?>" style="width:100%" />
                                <?php } ?>
                                <div class="profile">
                                    <a href="dr-ashish-davalbhakta">
                                        <button class="btn-btn">View DR. PROFILE</button>
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-9">
                                <p>
                                    <strong>
                                        Dr. <?= $item->first_name . " " . $item->last_name ?>
                                    </strong>
                                </p>
                                <p>Dr. <?= $item->first_name . " " . $item->last_name ?> (MB MS MCH, Plastic Surgery and FRCS from Glasgow) is an experienced Board Certified Plastic Surgeon who has acquired most of Cosmetic Surgery training in USA and UK. After doing MS General Surgery in 1993 from B J Medical College, he completed Masters in Plastic Surgery from Bombay University in 1996. Later, he went to the United Kingdom to get specialized training in cosmetic and reconstructive surgery. He also did fellowships in various aesthetic surgery domains from renowned hospitals in the United States. He has so far treated more than 5000 patients from India and all across the globe including Middle East, Africa, Australia, Canada, USA and UK.</p>
                                <br>
                                <p>At present, he serves the cosmetic and plastic surgery patients in his clinic in Pune, which he started in 2009 after returning from UK. He dons the role of Managing Director and Chief Aesthetic Plastic Surgeon, respectively in the clinic. Alongside, Dr. Davalbhakta is also serving an Honorary Consultant Aesthetic Plastic Surgeon at Oyster and Pearl Hospitals, and Ruby Hall Clinic, both in Pune. Among his major specialties include ethnic Rhinoplasty, Facial rejuvenation, scar less Gynaecomastia (Male Breasts), Breast Augmentation, Breast reduction and asymmetry correction, Mummy Makeover (including Breast Lift), and body Contouring using High Definition VASER and Microaire liposuction among others.</p>
                            </div>
                        </div>
                    </div>
            <?php
                }
            }
            ?>

        </div>
    </div>
</div>

<div class="container-fluid">
    <div class="container">
        <?= $$module_name_singular->content ?>
        <!-- <div class="row">
            <div class="col">
                <p class="identity">COSMETIC SURGERY COST IN PUNE</p>
                <p>The cosmetic surgery charges depend on the type of surgery you are about to undergo. Much will rely on the clinic and the surgeon through which you have agreed to go under the knife. You may have to pay somewhere between 50,000 INR to 150000 as per the surgery you opt for.
                    Contacting the clinic will help you know
                    about the involved costs in detail.</p>

                <p class="identity">Our Services</p>
                <p>In Dr. Ashish Davalbhakta’s clinic in Pune, you can get the treatment at affordable cost under the supervision of Dr. Ashish Davalbhakta himself. You can know about the respective treatment in detail by seeking an appointment with him via call. If you cannot make it to the
                    clinic in person, there is also the option of e-consultation.</p>
                <p>The Pune based clinic offers varied treatments under Cosmetic Surgery, Cosmetology and Wellness domains. It has even received “The Best Cosmetic Surgery Clinic in Pune” by TOI in 2017, 2018 and 2019, for its excellent efforts in the healthcare field. Much credit for this recognition goes to the robust techniques, safety standards and the high
                    satisfaction levels that the clinic ensures during the treatment.</p>
                <p>As a part of aesthetic plastic surgery services, the clinic provides body and facial reshaping, fat grafting,
                    chin or cheek augmentation, breast augmentation, nose reshaping, vaginal
                    rejuvenation or genital surgery for men and women, and so on.<. /p>
            </div>
        </div> -->
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
                                        <a href="rhinoplasty-pune">Rhinoplasty</a>
                                    </li>
                                    <li>
                                        <a href="blepharoplasty-pune">Blepharoplasty</a>
                                    </li>
                                    <li>
                                        <a href="facelift-pune">Facelift</a>
                                    </li>
                                    <li>
                                        <a href="brow-lift-pune">Brow-Lift</a>
                                    </li>
                                    <li>
                                        <a href="neck-lift-pune">Neck-Lift</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6">
                                <ul>
                                    <li>
                                        <a href="chin-surgery-pune">Chin Surgery</a>
                                    </li>
                                    <li>
                                        <a href="cheek-augmentation-pune">Cheek-augmentation</a>
                                    </li>
                                    <li>
                                        <a href="lip-augmentation-pune">Lip-augmentation</a>
                                    </li>
                                    <li>
                                        <a href="buccal-fat-removal-pune">Buccal-Fat-Removal</a>
                                    </li>
                                    <li>
                                        <a href="ear-surgery-pune">Ear-Surgery</a>
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
                                        <a href="breast-augmentation-pune">Breast Augmentation</a>
                                    </li>
                                    <li>
                                        <a href="breast-lift-pune">Breast Lift</a>
                                    </li>
                                    <li>
                                        <a href="breast-reduction-pune">Breast Reduction</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6">
                                <ul>
                                    <li>
                                        <a href="breast-implant-removal-pune">Breast Implant Removal</a>
                                    </li>
                                    <li>
                                        <a href="breast-implant-revision-pune">Breast Implant Revision</a>
                                    </li>
                                    <li>
                                        <a href="gynecomastia-pune">Gynecomastia</a>
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
                                        <a href="liposuction-pune">Liposuction</a>
                                    </li>
                                    <li>
                                        <a href="tummy-tuck-pune">Tummy-tuck</a>
                                    </li>
                                    <li>
                                        <a href="buttock-enhancement-pune">Buttock Enhancement</a>
                                    </li>
                                    <li>
                                        <a href="body-lift-pune">Body Lift</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6">
                                <ul>
                                    <li>
                                        <a href="arm-lift-pune">Arm Lift</a>
                                    </li>
                                    <li>
                                        <a href="thigh-lift-pune">Thigh Lift</a>
                                    </li>
                                    <li>
                                        <a href="body-contouring-pune">Body Contouring</a>
                                    </li>
                                    <li>
                                        <a href="mommy-makeover-pune">Mommy Makeover</a>
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
                                        <a href="hair-transplant-pune">Hair Transplant</a>
                                    </li>
                                    <li>
                                        <a href="gynecomastia-pune">Gynecomastia</a>
                                    </li>
                                    <li>
                                        <a href="men-and-plastic-surgery-pune">Men and Plastic Surgery</a>
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
                                        <a href="hair-transplant-pune">Hair Transplant</a>
                                    </li>
                                    <li>
                                        <a href="gynecomastia-pune">Gynecomastia</a>
                                    </li>
                                    <li>
                                        <a href="men-and-plastic-surgery-pune">Men and Plastic Surgery</a>
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
                                        <a href="hair-transplant-pune">Hanir Transplant</a>
                                    </li>
                                    <li>
                                        <a href="gynecomastia-pune">Gynecomastia</a>
                                    </li>
                                    <li>
                                        <a href="men-and-plastic-surgery-pune">Men and Plastic Surgery</a>
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
                            <a href="rhinoplasty-pune">Rhinoplasty</a>
                        </li>
                        <li>
                            <a href="blepharoplasty-pune">Blepharoplasty</a>
                        </li>
                        <li>
                            <a href="facelift-pune">Facelift</a>
                        </li>
                        <li>
                            <a href="brow-lift-pune">Brow-Lift</a>
                        </li>
                        <li>
                            <a href="neck-lift-pune">Neck-Lift</a>
                        </li>
                        <li>
                            <a href="chin-surgery-pune">Chin Surgery</a>
                        </li>
                        <li>
                            <a href="cheek-augmentation-pune">Cheek-augmentation</a>
                        </li>
                        <li>
                            <a href="lip-augmentation-pune">Lip-augmentation</a>
                        </li>
                        <li>
                            <a href="buccal-fat-removal-pune">Buccal-Fat-Removal</a>
                        </li>
                        <li>
                            <a href="ear-surgery-pune">Ear-Surgery</a>
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
                            <a href="breast-augmentation-pune">Breast Augmentation</a>
                        </li>
                        <li>
                            <a href="breast-lift-pune">Breast Lift</a>
                        </li>
                        <li>
                            <a href="breast-reduction-pune">Breast Reduction</a>
                        </li>
                        <li>
                            <a href="breast-implant-removal-pune">Breast Implant Removal</a>
                        </li>
                        <li>
                            <a href="breast-implant-revision-pune">Breast Implant Revision</a>
                        </li>
                        <li>
                            <a href="gynecomastia-pune">Gynecomastia</a>
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
                            <a href="liposuction-pune">Liposuction</a>
                        </li>
                        <li>
                            <a href="tummy-tuck-pune">Tummy-tuck</a>
                        </li>
                        <li>
                            <a href="buttock-enhancement-pune">Buttock Enhancement</a>
                        </li>
                        <li>
                            <a href="body-lift-pune">Body Lift</a>
                        </li>
                        <li>
                            <a href="arm-lift-pune">Arm Lift</a>
                        </li>
                        <li>
                            <a href="thigh-lift-pune">Thigh Lift</a>
                        </li>
                        <li>
                            <a href="body-contouring-pune">Body Contouring</a>
                        </li>
                        <li>
                            <a href="mommy-makeover-pune">Mommy Makeover</a>
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
                            <a href="hair-transplant-pune">Hair Transplant</a>
                        </li>
                        <li>
                            <a href="gynecomastia-pune">Gynecomastia</a>
                        </li>
                        <li>
                            <a href="men-and-plastic-surgery-pune">Men and Plastic Surgery</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid">
    <div class="container">
        <p class="identity m-auto text-center" style="width:fit-content">
            View All Cosmetic Surgery Procedures
        </p>
        <div class="pro-list" style="height: auto;">
            <h3 class="text-center">COSMETIC SURGERY IN <?= $city ?> – AESTHETICS MEDISPA</h3>
            <ul>
                <li>The clinic offers the services of duly trained and vastly experienced doctors and staff under the supervision of Dr. Ashish Davalbhakta.</li>
                <li>The hospital features a full-fledged O.T, consisting of all the advanced equipment required for performing state-of-the-art surgical procedures.</li>
                <li>Committed to executing the intended goal of ensuring 100% patient satisfaction.</li>
                <li>Maintains 100% confidentiality with extreme safety standards.</li>
                <li>Gives absolute clarity on what to expect with the surgery and delivering the results accordingly.</li>
                <li>It has 3rd generation of Sonic machine to perform Liposuction and VASER.</li>
                <li>Comprises Micro air power-assisted liposuction machines.</li>
                <li>Advanced devices for breast augmentation, Rhinoplasty, Abdominoplasty, radio-frequency cauterization and other procedures.</li>
                <li>The O.T. at this medispa includes the integrated day surgery facility.</li>
                <li>Other important procedures include Botox and Fillers, Mommy Makeover, Anti-aging treatments, Liposuction, Breast Augmentation, Weight Management, Spa therapies, etc.</li>
                <li>Ideal clinic to undergo cosmetic surgery for Indian as well as overseas patients.</li>
                <li>Located in the heart of the city with major markets and facilities in close proximity</li>
            </ul>
        </div>
    </div>
</div>

<div class="container-fluid">
    <div class="container text-center">
        <p class="identity text-center m-auto" style="width:fit-content">
            OUR PUNE CLINIC LOCATION:
        </p>
        <div class="row mt-4">
            <div class="col-lg-4 col-md-12 col-sm-12 ">
                <div class="tbuv ">
                    <img src="img/pune-clinic-1.jpg">
                </div>
            </div>
            <div class="col-lg-4 col-md-12 col-sm-12">
                <div class="tbuv">
                    <img src="img/pune-clinic-2.jpg">
                </div>
            </div>
            <div class="col-lg-4 col-md-12 col-sm-12">
                <div class="tbuv">
                    <img src="img/pune-clinic-3.jpg">
                </div>
            </div>
        </div>
    </div>
</div>

<div class="spacer">
    <div class="container-fluid">
        <div class="container">
            <p class="small-heading m-auto">Get the right procedure</p>
            <br>
            <h2 class="apt text-center"><span style="color:#082092"><strong>Book an Appointment </strong></span>with your <span style="color:green;"><strong class="animate animated">Top Cosmetic Surgeon</strong></span></h2>
            <br>
            <p class="small-heading m-auto">It will be our pleasure to serve you with our specialisation.</p>
            <div class="row">
                <div class="col-lg-6">
                    <div class="ico">
                        <i class="fa fa-map-marker" aria-hidden="true"></i>
                        <h6>Visit us in person</h6>
                        <h6>Next to Model Colony Lake, Off FC Road, Pune, Maharashtra.</h6>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="ico">
                        <i class="fa fa-paper-plane-o" aria-hidden="true"></i>
                        <h6>Email us</h6>
                        <h6><a href="mailto:drashish@cosmeticsurgery.in">drashish@cosmeticsurgery.in</a></h6>
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