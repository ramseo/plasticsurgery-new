@extends('frontend.layouts.app')

@section('title') {{$$module_name_singular->meta_title}} @endsection

@section('site-meta-tags')
<meta name="description" content="{{ $$module_name_singular->meta_description ? $$module_name_singular->meta_description : setting('meta_keyword') }}">
@endsection


@section('content')

<div class="header-space"></div>
<div class="cit">
    <div class="container top-head-padd-null">
        <p>{{$$module_name_singular->name}}</p>
    </div>
</div>

<!-- Doctors Listing -->
<?php
$getAssignedDoctors = getAssignedDoctors(ucwords($city));
if ($getAssignedDoctors->isNotEmpty()) {
?>
    <div id="city-page-surgery" class="container-fluid">
        <div class="container city-page-surgery">
            <p class="identity width-100">
                top plastic surgeons in <?= ucwords($city) ?>
            </p>
            <div class="col-lg-12 doc-flex-cls padd-null">
                <?php
                $getAssignedDoctors = getAssignedDoctors($city);
                if ($getAssignedDoctors->isNotEmpty()) {
                    foreach ($getAssignedDoctors as $item) {
                        $reviews = getDataArray('vendor_reviews', 'user_id', $item->id);
                        $average = averageReview($reviews);
                ?>

                        <div class="col-lg-4 col-md-4">
                            <div class="aon-med-team bg-light-gray">
                                <div class="aon-med-team-pic col-md-4 padd-null">
                                    <a target="_blank" href="<?= url("surgeon/dr-$item->username") ?>">
                                        <?php if (file_exists(public_path() . '/storage/user/profile/' . $item->avatar)) { ?>
                                            <img src="<?= asset('/storage/user/profile/' . $item->avatar) ?>" alt="doctor img" />
                                        <?php } else { ?>
                                            <img src="<?= asset("img/default-avatar.jpg") ?>" alt="doctor img" />
                                        <?php } ?>
                                    </a>
                                </div>
                                <div class="aon-med-team-info col-md-8 padd-null">
                                    <h4 class="aon-title">
                                        <a target="_blank" href="<?= url("surgeon/dr-$item->username") ?>">
                                            Dr. <?= Str::words($item->first_name . " " . $item->last_name, 2) ?>
                                        </a>
                                    </h4>
                                    <div class="aon-med-team-discription doc-tagline">
                                        <?php
                                        $get_userprofiles = get_userprofiles($item->id);
                                        echo $get_userprofiles->degree;
                                        ?>
                                    </div>
                                    <span class="aon-med-team-position">
                                        Plastic Surgeon
                                    </span>
                                    <span class="aon-med-team-location">
                                        <i class="fa fa-map-marker"></i>
                                        <?= getCitiesById($item->city, 'pipe') ?>, India
                                    </span>
                                    <div class="aon-df-rating">
                                        <?php
                                        $totalRating = 5;
                                        $starRating = $average;

                                        for ($i = 1; $i <= $totalRating; $i++) {
                                            if ($starRating < $i) {
                                                if (is_float($starRating) && (round($starRating) == $i)) {
                                                    echo "";
                                                } else {
                                                    echo "<span class='fa fa-star-o'></span>";
                                                }
                                            } else {
                                                echo "<span class='fa fa-star'></span>";
                                            }
                                        }

                                        ?>
                                        <span>
                                            (<?= $average ?>)
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                    <div class="col-sm-12">
                        <div class="aon-addmore-btn-section pb-4">
                            <a href="javascript:void(0)" class="aon-addplus">
                                <i class="fa fa-star-o"></i>
                            </a>
                        </div>
                    </div>
                <?php } ?>
            </div>



            <div class="row">
                <div class="col">
                    <p>
                        We help you search for the most popular cosmetic surgeons in <?= ucwords($city) ?>.
                        Our surgeons specialize in the enhancement procedures of the breast, face,
                        and body. They hold years of experience in performing several reconstructive
                        surgeries and have helped patients to restore their appearance after
                        accidents, burns, and deformities.
                        Our experts are skilled at carrying out Rhinoplasty, Blepharoplasty,
                        Gynecomastia, Breast Augmentation, and Tummy Tuck among others.
                        Owing to their adept expertise, the patients have been approaching them
                        from India as well as overseas countries.
                    </p>
                </div>
            </div>
        </div>
    </div>
<?php } ?>
<!-- Doctors Listing -->

<div id="city-page-surgery-content" class="container-fluid">
    <div class="container city-page-surgery">
        <?php if ($surgery_str == "rhinoplasty") { ?>
            <div class="col padd-null">
                <div class="top-content">
                    <strong>
                        Want to get rid of the disfigured nose? Rhinoplasty is the solution.
                    </strong>
                    <p>
                        A nose job or Rhinoplasty refers to operating the nose to alter its shape or
                        enhance its functionality. The motive for this surgery could be aesthetic or
                        to repair the nose damage caused due to a birth defect, a disease,
                        or a previous surgery. It could also be effective in correcting
                        breathing defects. Consulting any of our seasoned plastic surgeons
                        in <?= ucwords($city) ?> can help you serve your purpose with success.
                    </p>
                </div>
                <p class="identity">
                    Why Are Our Cosmetic Surgeons in <?= ucwords($city) ?> the Best for Rhinoplasty?
                </p>
                <ul>
                    <li>
                        Deep knowledge of facial aesthetics
                    </li>
                    <li>
                        Highly experienced nose surgeons in <?= ucwords($city) ?>
                    </li>
                    <li>
                        Certified from varied national and international plastic surgery associations
                    </li>
                    <li>
                        Extremely qualified and experienced cosmetic surgeons
                    </li>
                    <li>
                        Adept at performing high-definition nose surgery in <?= ucwords($city) ?>
                    </li>
                    <li>
                        Specializations in Reconstruction Rhinoplasty, Reduction Rhinoplasty,
                        augmentation Rhinoplasty, and so on
                    </li>
                    <li>
                        Pro-active at educating people about various aspects of cosmetic
                        surgery treatments, including nose surgery
                    </li>
                    <li>
                        Dexterous in coming up with expected results appreciably
                    </li>
                </ul>
                <p class="identity">
                    COST OF <?= $surgery_str ?> IN <?= ucwords($city) ?>
                </p>
                <p>
                    The cost of Rhinoplasty surgery in <?= ucwords($city) ?> depends primarily on the complexity
                    of the nose surgery. Moreover, surgeon’s fees, the cost for administering
                    anesthesia, facilities provided in the operating room, medical tests,
                    surgery garments, prescriptions, etc. will be in addition to the
                    Rhinoplasty cost. Your surgeon can guide you better during a
                    candid consultation.
                </p>
                <p class="identity">OUR SERVICES</p>
                <p>
                    Approaching any of our plastic surgeons for Rhinoplasty would be the best choice
                    in <?= ucwords($city) ?> to ensure scar-less and painless surgery with faster recovery
                    time. You can regain your aesthetic appearance at an affordable cost
                    through the most experienced hands in <?= ucwords($city) ?>. Just consult one
                    of our expert surgeons and open the door to your facial
                    transformation with a beautiful, new-looking nose.
                    Cordial services, upscale treatment facilities,
                    and hassle-free cosmetic surgery of our
                    expert surgeons await your presence.
                </p>

                <p class="identity">
                    FAQs on <?= $surgery_str ?> Surgery in <?= ucwords($city) ?>
                </p>
                <!-- ACCODION -->
                <div class="accordion-container">
                    <a onclick="accordion_elm(this)" href="#" class="accordion-toggle">
                        <span>
                            1. Are you a good candidate for <?= $surgery_str ?>?
                        </span>
                        <span class="accordion-icon">
                            <i class="fa fa-chevron-down pull-right" aria-hidden="true"></i>
                        </span>
                    </a>
                    <div class="accordion-content">
                        <ul>
                            <li>You can be an ideal candidate to undergo nose surgery in <?= ucwords($city) ?> if</li>
                            <li>Your face has grown to its full potential</li>
                            <li>
                                You wish to get a natural position and contour of your nasal cartilage, soft tissue, and bone restored
                            </li>
                            <li>You are in good health and free of any life-threatening medical condition</li>
                            <li>
                                Your nose is out of shape due to an accidental injury or because of a congenital disorder
                            </li>
                            <li>You do not smoke</li>
                            <li>You do not consume alcohol</li>
                            <li>You do not have any allergic effects of anesthesia on your body</li>
                            <li>You have a positive outlook toward the surgery</li>
                        </ul>
                    </div>
                </div>
                <div class="accordion-container">
                    <a onclick="accordion_elm(this)" href="#" class="accordion-toggle">
                        <span>
                            2. What is the cost of <?= $surgery_str ?>?
                        </span>
                        <span class="accordion-icon">
                            <i class="fa fa-chevron-down pull-right" aria-hidden="true"></i>
                        </span>
                    </a>
                    <div class="accordion-content">
                        <p>
                            On average, it may range between 50,000 INR to 2,50,000 INR. Nasal
                            implants would accompany added expenditure. It would be wise to
                            consult your nose surgeon in <?= ucwords($city) ?> to know the exact cost
                            of Rhinoplasty
                        </p>
                    </div>
                </div>
                <div class="accordion-container">
                    <a onclick="accordion_elm(this)" href="#" class="accordion-toggle">
                        <span>
                            3. What are the risks related to <?= $surgery_str ?>?
                        </span>
                        <span class="accordion-icon">
                            <i class="fa fa-chevron-down pull-right" aria-hidden="true"></i>
                        </span>
                    </a>
                    <div class="accordion-content">
                        <ul>
                            <li>Intense pain or numbness in the initial days after the surgery in <?= ucwords($city) ?></li>
                            <li>Possibility of bruising and infection</li>
                            <li>Tiny scars that fade away with time</li>
                            <li>Fluid build-up in the treated area, causing seroma</li>
                            <li>Reduced sensation in the skin</li>
                            <li>Skin discolouration</li>
                            <li>Allergic behaviour to several medications or anesthesia</li>
                            <li>
                                Septum in both nasal cavities could face excessive swelling and protrude
                                after 3-5 days of surgery, leading to septal hematoma- massive
                                bleeding between mucoperichondrial flaps.
                            </li>
                            <li>A hole in the area of nasal septum called Nasal septal perforation</li>
                            <li>Chance of correction surgery</li>
                            <li>Unfavourable results</li>
                        </ul>
                    </div>
                </div>
                <div class="accordion-container">
                    <a onclick="accordion_elm(this)" href="#" class="accordion-toggle">
                        <span>
                            4. When can you go for <?= $surgery_str ?>?
                        </span>
                        <span class="accordion-icon">
                            <i class="fa fa-chevron-down pull-right" aria-hidden="true"></i>
                        </span>
                    </a>
                    <div class="accordion-content">
                        <p>
                            From young ones to adults, anyone can opt for Rhinoplasty surgery in
                            <?= ucwords($city) ?>. However, the consent of parents is necessary in case
                            of surgery on teenagers. The minimum age for girls and boys
                            should be 15 and 17 years respectively for nose surgery.
                        </p>
                    </div>
                </div>
                <div class="accordion-container">
                    <a onclick="accordion_elm(this)" href="#" class="accordion-toggle">
                        <span>
                            5. What are the things to do before <?= $surgery_str ?> surgery
                        </span>
                        <span class="accordion-icon">
                            <i class="fa fa-chevron-down pull-right" aria-hidden="true"></i>
                        </span>
                    </a>
                    <div class="accordion-content">
                        <ul>
                            <li>You should be aware of every pros and cons related to Rhinoplasty surgery</li>
                            <li>Make sure to satisfy yourself completely about the procedure in direct consultation with your surgeon</li>
                            <li>Clean your face at least two times a day to break free from dead skin</li>
                            <li>Arrange for someone to take you back after the procedure</li>
                            <li>
                                Wear loose garments or those with chains or buttons, so that it is easy to
                                wear or take them off
                            </li>
                            <li>Have someone to look after you and your kids at home after the surgery</li>
                            <li>
                                Stop smoking and drinking as they could lead to bleeding during the surgery
                            </li>
                            <li>Keep yourself hydrated with water</li>
                            <li>
                                Avoid eating anything for at least 8 hours before the surgery
                            </li>
                            <li>Apply for a few weeks off from your work for a complete recovery</li>
                            <li>
                                Avoid the use of over-the-counter medicated creams that include salicylic
                                acid, Retin-A, benzoyl peroxide, etc.
                            </li>
                            <li>Avoid exposure to the sun</li>
                            <li>
                                Inform your surgeon about any existing medication so that he could adjust
                                them accordingly
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="accordion-container">
                    <a onclick="accordion_elm(this)" href="#" class="accordion-toggle">
                        <span>
                            6. What to expect on the day of <?= $surgery_str ?> surgery?
                        </span>
                        <span class="accordion-icon">
                            <i class="fa fa-chevron-down pull-right" aria-hidden="true"></i>
                        </span>
                    </a>
                    <div class="accordion-content">
                        <ul>
                            <li>
                                Be at the clinic with a positive frame of mind for the nose surgery in <?= ucwords($city) ?>
                            </li>
                            <li>
                                You could expect the medical staff to ask you a few questions or carry out a medical check-up
                            </li>
                            <li>
                                The anesthesiologist could ask if you have any adverse behaviour to anesthesia
                                so that he could adjust the dose based on your response
                            </li>
                            <li>
                                The nose surgery may take around 2-3 hours to complete depending on the compaction
                                of the procedure.
                            </li>
                            <li>
                                You could expect a little bit of discomfort which will fade away with time
                            </li>
                            <li>
                                You could expect the surgeon to provide you with important instructions for
                                prompt healing. Make sure to follow them religiously
                            </li>
                            <li>
                                At times, the result may not be close to natural, so it is important to have realistic
                                expectations from the surgery in <?= ucwords($city) ?>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- ACCODION -->
            </div>
        <?php } elseif ($surgery_str == "blepharoplasty") { ?>
            <div class="col padd-null">
                <div class="top-content">
                    <p>
                        <strong>
                            Want to get rid of your sagging eyelids?
                        </strong>
                    </p>
                    <p>
                        If yes, then Blepharoplasty or eyelid lift is a befitting solution.
                        Due to ageing, genetics, or environmental factors, the skin of
                        your eyelid may lose the usual elasticity, tone, and texture.
                        The muscles of your eyelid may also undergo severe changes.
                        Eventually, depending on the current situation of your
                        eyelids, our plastic surgeons would perform upper or
                        lower blepharoplasty, or both to improve your
                        eyelid appearance.
                    </p>
                </div>
                <p class="identity">
                    Why Are Our Plastic Surgeons the Best in <?= ucwords($city) ?> for Blepharoplasty?
                </p>
                <ul>
                    <li>
                        Prominent plastic surgeons in <?= ucwords($city) ?> to perform Blepharoplasty
                    </li>
                    <li>
                        Helps patients in regaining the eyelid appearance appreciably
                    </li>
                    <li>
                        Can perform corrective surgery on lower or upper eyelids, or both simultaneously
                    </li>
                    <li>
                        Help to get away with the initial signs of ageing with Blepharoplasty in <?= ucwords($city) ?>
                    </li>
                    <li>
                        A reputed member of several national and international plastic surgery associations
                    </li>
                </ul>

                <p class="identity">
                    COST OF <?= $surgery_str ?> IN <?= ucwords($city) ?>
                </p>
                <p>
                    The Blepharoplasty cost in <?= ucwords($city) ?> may depend on whether you are about
                    to undergo upper eyelid surgery or lower eyelid surgery. Moreover,
                    if you are up for this treatment to regain your aesthetic look,
                    your medical insurance may not cover it for cosmetic reasons.
                    Any of our Plastic surgeons would be the best to provide
                    all the relevant information on Blepharoplasty cost.
                </p>
                <p class="identity">
                    OUR SERVICES
                </p>
                <p>
                    To restore your youthful and charming eyelids, opting for Blepharoplasty in <?= ucwords($city) ?>
                    would be an ideal decision. It would be wise to consult any of our expert eyelid
                    lift surgeons to know about all the pros and cons of this treatment and the
                    longevity of its results. You should also be clear about your
                    expectations with the surgery. Our surgeons provide industry
                    best healthcare facilities to enable you to experience the
                    utmost comfort during the surgery.
                </p>

                <p class="identity">
                    FAQs on Blepharoplasty Surgery in <?= ucwords($city) ?>
                </p>

                <!-- ACCODION -->
                <div class="accordion-container">
                    <a onclick="accordion_elm(this)" href="#" class="accordion-toggle">
                        <span>
                            1. Are you a good candidate for Blepharoplasty?
                        </span>
                        <span class="accordion-icon">
                            <i class="fa fa-chevron-down pull-right" aria-hidden="true"></i>
                        </span>
                    </a>
                    <div class="accordion-content">
                        <p>
                            To be a suitable candidate for Blepharoplasty surgery in <?= ucwords($city) ?>,
                            you should abide by the following criteria:
                        </p>
                        <ul>
                            <li>
                                Droopy eyelids with an enlarged eye white portion
                            </li>
                            <li>
                                Sagging upper eyelids formed because of fatty tissues under the skin
                            </li>
                            <li>
                                Urge to break free from under-eye bags and dark circles
                            </li>
                            <li>
                                Good health overall
                            </li>
                            <li>
                                No severe medical issues
                            </li>
                            <li>
                                Facing vision hassles due to sagging upper eyelids
                            </li>
                            <li>
                                Wish to enhance the facial appearance
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="accordion-container">
                    <a onclick="accordion_elm(this)" href="#" class="accordion-toggle">
                        <span>
                            2. What is the cost of Blepharoplasty?
                        </span>
                        <span class="accordion-icon">
                            <i class="fa fa-chevron-down pull-right" aria-hidden="true"></i>
                        </span>
                    </a>
                    <div class="accordion-content">
                        <p>
                            The eyelid surgery in <?= ucwords($city) ?> would cost you around 80,000 INR
                            to 2,00,000 INR. The overall expense may however fluctuate
                            depending on the surgeon, clinic, facilities used,
                            medications, etc.
                        </p>
                    </div>
                </div>
                <div class="accordion-container">
                    <a onclick="accordion_elm(this)" href="#" class="accordion-toggle">
                        <span>
                            3. What are the risks related to Blepharoplasty?
                        </span>
                        <span class="accordion-icon">
                            <i class="fa fa-chevron-down pull-right" aria-hidden="true"></i>
                        </span>
                    </a>
                    <div class="accordion-content">
                        <ul>
                            <li>
                                Allergic behaviour to the use of anesthesia
                            </li>
                            <li>
                                Reduced sensation in the treated area
                            </li>
                            <li>
                                Bleeding or swelling
                            </li>
                            <li>
                                Intense pain on rare occasions
                            </li>
                            <li>
                                Condition of fluid accumulation
                            </li>
                            <li>
                                Temporary impaired or blurred vision
                            </li>
                            <li>
                                Permanent loss of vision in very sporadic cases
                            </li>
                            <li>
                                Slack and outward-rolling lower of the lower eyelid, called ectropion
                            </li>
                            <li>
                                Watery or dry eyes
                            </li>
                            <li>
                                Lower eyelid generates lumps
                            </li>
                            <li>
                                Irritation in the eyes’ surface due to a lump formed in the lower eyelid
                            </li>
                            <li>
                                Possibility of correction surgery
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="accordion-container">
                    <a onclick="accordion_elm(this)" href="#" class="accordion-toggle">
                        <span>
                            4. When can you go for Blepharoplasty?
                        </span>
                        <span class="accordion-icon">
                            <i class="fa fa-chevron-down pull-right" aria-hidden="true"></i>
                        </span>
                    </a>
                    <div class="accordion-content">
                        <p>
                            If you start experiencing baggy or droopy upper eyelids, this is the right
                            time to opt for Blepharoplasty surgery from one of our experienced
                            surgeons in <?= ucwords($city) ?>. The surgery also becomes a necessity when
                            you develop vision problems due to excess skin forming in your
                            lower or upper eyelids. As for age, you should be around 30
                            years old or more, because droopy eyelids start appearing
                            at this age.
                        </p>
                    </div>
                </div>
                <div class="accordion-container">
                    <a onclick="accordion_elm(this)" href="#" class="accordion-toggle">
                        <span>
                            5. What are the things to do before the Blepharoplasty Surgery?
                        </span>
                        <span class="accordion-icon">
                            <i class="fa fa-chevron-down pull-right" aria-hidden="true"></i>
                        </span>
                    </a>
                    <div class="accordion-content">
                        <ul>
                            <li>
                                Get your eyes checked in a lab to ensure your eye health is top-notch
                            </li>
                            <li>
                                Consult with your surgeon in <?= ucwords($city) ?> about your current medication
                                regime to get the best advice for adjustments before surgery
                            </li>
                            <li>
                                Kick the habit and avoid smoking and drinking 4-6 months prior
                                to surgery for a better and faster recovery
                            </li>
                            <li>
                                Stay away from anti-inflammatory drugs and herbal supplements to
                                avoid unwanted side effects such as bruising or bleeding
                            </li>
                            <li>
                                Be fully informed of all the risks and side effects of surgeru
                                so that you can make an informed decision
                            </li>
                            <li>
                                Hydrated yourself completely with water and other liquids
                            </li>
                            <li>
                                Be mentally and physically prepared for surgery to ensure a smooth
                                and successful procedure
                            </li>
                            <li>
                                Avoid slipover clothing and buy some loose-fitting dresses that could
                                fasten in the back or front
                            </li>
                            <li>
                                Avoid wearing your valuables during the surgery like jewellery,
                                leave them at home
                            </li>
                            <li>
                                Avoid any kind of facial or eye make-up
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="accordion-container">
                    <a onclick="accordion_elm(this)" href="#" class="accordion-toggle">
                        <span>
                            6. What to expect on the day of Blepharoplasty surgery?
                        </span>
                        <span class="accordion-icon">
                            <i class="fa fa-chevron-down pull-right" aria-hidden="true"></i>
                        </span>
                    </a>
                    <div class="accordion-content">
                        <ul>
                            <li>
                                Come to the clinic in <?= ucwords($city) ?> with a positive attitude
                                on the day of your Blepharoplasty surgery
                            </li>
                            <li>
                                A member of the staff will administer anesthesia to ensure
                                you experience no pain during the surgery
                            </li>
                            <li>
                                The staff will perform several health tests, such as
                                measuring your sugar level, oxygen level, and
                                blood pressure, before the surgery
                            </li>
                            <li>
                                The duration of the surgery (1-2 hours) will depend on whether
                                the surgeon is repositioning the fat on the upper eyelids,
                                lower eyelids, or both. Additional time may be required
                                for a cheek lift
                            </li>
                            <li>
                                The doctor will stitch the treated area after the surgery,
                                and the stitches will remain for approximately one week
                            </li>
                            <li>
                                The recovery time for upper eyelid surgery is typically 7-10 days,
                                while lower eyelid surgery may take 10-14 days for complete recovery
                            </li>
                            <li>
                                You should have realistic expectations with the surgery in <?= ucwords($city) ?>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- ACCODION -->
            </div>
        <?php } elseif ($surgery_str == "facelift") {  ?>
            <div class="col padd-null">
                <div class="top-content">
                    <p>
                        Do you wish to restore your lost facial charm? Opting for a Facelift surgery
                        in <?= ucwords($city) ?> could serve your purpose significantly. Also termed
                        as Rhytidectomy, this procedure aims at getting away with the ageing
                        signs visible on the face and neck. These may include sagging skin,
                        fold lines, excess or reduced fat, muscular deformities in the jaw
                        and cheeks, double chin or turkey neck, and so on. Visit the best
                        plastic surgeon in <?= ucwords($city) ?> to know more about Facelift
                        surgery.
                    </p>
                </div>
                <p class="identity">
                    Why should you approach Our Surgeons for Facelift surgery in <?= ucwords($city) ?>?
                </p>
                <ul>
                    <li>
                        Hold excellence in performing reconstructive and plastic surgery treatments
                    </li>
                    <li>
                        Renowned plastic surgeons in <?= ucwords($city) ?> for Facelift surgery
                    </li>
                    <li>
                        Help patients regain a younger facial and neck appearance
                    </li>
                    <li>
                        Board-certified Plastic surgeons, and members of numerous
                        plastic surgery associations in India and abroad
                    </li>
                    <li>
                        Make you feel at ease while performing Rhytidectomy
                    </li>
                </ul>
                <p class="identity">
                    COST OF <?= $surgery_str ?> IN <?= ucwords($city) ?>
                </p>
                <p>
                    Depending on whether you want to undergo a full facelift or a mini Facelift surgery
                    in <?= ucwords($city) ?>, the cost may differ accordingly. Our expert facelift
                    surgeons would be the best to help you get detailed information
                    about the cost of the Facelift surgery.
                </p>
                <p class="identity">OUR SERVICES</p>
                <p>
                    Our experienced Facelift surgeon works dedicatedly to improve the appearance of your
                    face and neck. They hold adept expertise in performing Full Facelift,
                    Lower or Mid Facelift, Cheek Lift, Neck Lift, or Endoscopic Facelift.
                    To get more info on the type of Facelift surgery that would suit
                    you, you can always consult any of our Facelift surgery
                    experts in <?= ucwords($city) ?>.
                </p>

                <p class="identity">
                    FAQs on Facelift Surgery in <?= ucwords($city) ?>
                </p>

                <!-- ACCODION -->
                <div class="accordion-container">
                    <a onclick="accordion_elm(this)" href="#" class="accordion-toggle">
                        <span>
                            1. Are you a good candidate for Facelift Surgery?
                        </span>
                        <span class="accordion-icon">
                            <i class="fa fa-chevron-down pull-right" aria-hidden="true"></i>
                        </span>
                    </a>
                    <div class="accordion-content">
                        <p>
                            Abiding by the following conditions will make you an ideal
                            candidate for Facelift surgery in <?= ucwords($city) ?>:
                        </p>
                        <ul>
                            <li>
                                Want to improve the overall facial appearance
                            </li>
                            <li>
                                Good overall skin condition and elasticity
                            </li>
                            <li>
                                The flexibility of the skin to bounce back on pinching
                            </li>
                            <li>
                                Non-alcoholic and a non-smoker
                            </li>
                            <li>
                                The strong bone structure of the face
                            </li>
                            <li>
                                Complete knowledge of the healing process
                            </li>
                            <li>
                                Realistic goals with surgery results
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="accordion-container">
                    <a onclick="accordion_elm(this)" href="#" class="accordion-toggle">
                        <span>
                            2. What is the cost of Facelift Surgery?
                        </span>
                        <span class="accordion-icon">
                            <i class="fa fa-chevron-down pull-right" aria-hidden="true"></i>
                        </span>
                    </a>
                    <div class="accordion-content">
                        <p>
                            You may have to spend around 2,50,000 INR for a full Facelift surgery
                            and approximately 1,50,000 INR for a mini Facelift surgery in
                            <?= ucwords($city) ?>. The cost may change depending on the cosmetic
                            surgeon you approach. Your decision to include Lip
                            Augmentation, Chin Surgery, and other facial
                            surgeries will also influence the cost
                            significantly.
                        </p>
                    </div>
                </div>
                <div class="accordion-container">
                    <a onclick="accordion_elm(this)" href="#" class="accordion-toggle">
                        <span>
                            3. What are the risks related to Facelift Surgery?
                        </span>
                        <span class="accordion-icon">
                            <i class="fa fa-chevron-down pull-right" aria-hidden="true"></i>
                        </span>
                    </a>
                    <div class="accordion-content">
                        <p>
                            While Facelift surgery in <?= ucwords($city) ?> can produce great results, it is wise to be aware of several potential complications associated with it:
                        </p>
                        <ul>
                            <li>
                                Hematoma (the build-up of blood under the skin) can occur within the first day after surgery, causing swelling and pressure.
                            </li>
                            <li>
                                Scarring is a common concern with Facelift surgery, but you can hide them along natural creases or the hairline.
                            </li>
                            <li>
                                Like any surgical procedure, Facelift surgery also carries a risk of infection.
                            </li>
                            <li>
                                In rare cases, Facelift surgery may damage blood vessels, leading to bleeding.
                            </li>
                            <li>
                                Slow wound healing is a possibility after Facelift surgery, which is why it is advisable to follow all post-operative instructions.
                            </li>
                            <li>
                                Although rare, nerve damage can be a possibility during Facelift surgery in <?= ucwords($city) ?>, resulting in an uneven facial appearance.
                            </li>
                            <li>
                                In some cases, the blood supply to facial tissues may hamper the surgery proceedings, which could lead to skin or hair loss.
                            </li>
                            <li>
                                Change in weight can affect the results of Facelift surgery adversely, so it is better to maintain a stable weight.
                            </li>
                            <li>
                                While revision surgeries are not common, they may become unavoidable if the initial procedure did not go as planned.
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="accordion-container">
                    <a onclick="accordion_elm(this)" href="#" class="accordion-toggle">
                        <span>
                            4. When can you go for Facelift Surgery?
                        </span>
                        <span class="accordion-icon">
                            <i class="fa fa-chevron-down pull-right" aria-hidden="true"></i>
                        </span>
                    </a>
                    <div class="accordion-content">
                        <p>
                            When the effect of growing age starts showing up on your face, probably in your 40s and beyond, opting for a Facelift surgery in <?= ucwords($city) ?> could be a suitable move. It will help you break free from sagging skin, wrinkles, deep lines, and fine lines formed on the neck and facial area.
                        </p>
                    </div>
                </div>
                <div class="accordion-container">
                    <a onclick="accordion_elm(this)" href="#" class="accordion-toggle">
                        <span>
                            5. What are the things to do before the Facelift surgery?
                        </span>
                        <span class="accordion-icon">
                            <i class="fa fa-chevron-down pull-right" aria-hidden="true"></i>
                        </span>
                    </a>
                    <div class="accordion-content">
                        <ul>
                            <li>
                                Undergoing proper medical evaluation as recommended by your surgeon will help you to remain prepared for the surgery in a better manner
                            </li>
                            <li>
                                Make sure you have the requisite funds to finance Facelift surgery in <?= ucwords($city) ?>
                            </li>
                            <li>
                                Make your surgeon aware of your current medications so that he could make adjustments accordingly for a safe surgery
                            </li>
                            <li>
                                Quit smoking as it contains nicotine, which can affect blood circulation and lead to severe surgery complications
                            </li>
                            <li>
                                Keep your body hydrated with water and other additive-free liquids to facilitate satisfying healing
                            </li>
                            <li>
                                Have some to take you home from the clinic after the surgery
                            </li>
                            <li>
                                Arrange for some loose-fitted clothes, such as those with zip, buttons, which are easy to wear or remove
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="accordion-container">
                    <a onclick="accordion_elm(this)" href="#" class="accordion-toggle">
                        <span>
                            6. What to expect on the day of Facelift surgery?
                        </span>
                        <span class="accordion-icon">
                            <i class="fa fa-chevron-down pull-right" aria-hidden="true"></i>
                        </span>
                    </a>
                    <div class="accordion-content">
                        <ul>
                            <li>
                                Come to the clinic with a cool and composed mind on the surgery day
                            </li>
                            <li>
                                Expect your surgeon to have an open discussion with you to address any concerns or questions you may have
                            </li>
                            <li>
                                The specialist will ask if you have an allergic reaction to anesthesia to adjust the dose accordingly
                            </li>
                            <li>
                                The duration of a Facelift surgery in <?= ucwords($city) ?> can vary from 3-6 hours, depending on the complexity of the procedure. Additional cosmetic procedures can extend the time even further
                            </li>
                            <li>
                                During the procedure, the surgeon will likely lift and tighten your facial muscles and tissues with the help of advanced techniques
                            </li>
                            <li>
                                After the surgery, you may experience discomfort in the treated areas, which should subside within a couple of days
                            </li>
                            <li>
                                It is common to experience bruising and swelling, which should resolve within 1-2 weeks
                            </li>
                            <li>
                                It is important to have practical expectations about the outcome of the surgery instead of expecting miracles
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- ACCODION -->
            </div>
        <?php } elseif ($surgery_str == "brow lift") { ?>
            <div class="col padd-null">
                <div class="top-content">
                    <p>
                        Are you noticing sagging skin on your forehead, eyebrows, and upper eyelids? If yes, it is high time to go for a Brow Lift surgery in <?= ucwords($city) ?>. Surgeons use two different methods to lift the eyebrows and forehead.
                    </p>
                    <strong>
                        Classic lift
                    </strong>
                    <p>
                        The first method requires the surgeon to make a continuous cut from the ears to your hairline.
                    </p>
                    <strong>
                        Endoscopic lift
                    </strong>
                    <p>
                        The second type of Brow lift surgery is less invasive as compared to the first one. It needs the surgeon to make smaller cuts to protect the tissues.
                    </p>
                </div>
                <p class="identity">
                    Why Consult Our Surgeons for Brow Lift Surgery in <?= ucwords($city) ?>
                </p>
                <ul>
                    <li>
                        Experienced plastic surgeons with expertise in Brow Lift surgery
                    </li>
                    <li>
                        Hold certifications from various national and international plastic surgery associations
                    </li>
                    <li>
                        Expertise in performing surgeries with minimal or no scars at all
                    </li>
                    <li>
                        Help patients get an appealing forehead appearance
                    </li>
                    <li>
                        Interact with the patients to clear all their apprehensions before the surgery
                    </li>
                </ul>
                <p class="identity">
                    COST OF <?= $surgery_str ?> IN <?= ucwords($city) ?>
                </p>
                <p>
                    The cost for Brow Lift in <?= ucwords($city) ?> may differ as per the surgeon or the hospital you choose for the treatment. The cost of medicines, hospital facilities, lab tests, anesthesia, or the surgeon’s fees will also affect the overall expense. You can connect with any of our Brow lift surgeons in <?= ucwords($city) ?> to learn more about the cost of this treatment.
                </p>
                <p class="identity">OUR SERVICES</p>
                <p>
                    Our brow lift surgeons in <?= ucwords($city) ?> will care to perform the surgery with complete satisfaction. They will make you feel relaxed during the entire procedure, thanks to their safe hands and the cordial assistance of their medical staff. Our expert surgeons extend the facilities of advanced surgery equipment, operation beds, experienced nursing staff, and every possible medical amenity to ensure long-lasting success for your Brow lift surgery in <?= ucwords($city) ?>.
                </p>

                <p class="identity">
                    FAQs on Brow Lift Surgery in <?= ucwords($city) ?>
                </p>

                <!-- ACCODION -->
                <div class="accordion-container">
                    <a onclick="accordion_elm(this)" href="#" class="accordion-toggle">
                        <span>
                            1. Are you a good candidate for Brow Lift surgery?
                        </span>
                        <span class="accordion-icon">
                            <i class="fa fa-chevron-down pull-right" aria-hidden="true"></i>
                        </span>
                    </a>
                    <div class="accordion-content">
                        <p>
                            To be an ideal candidate for Brow Lift surgery in <?= ucwords($city) ?>, abiding by these points would be essential:
                        </p>
                        <ul>
                            <li>
                                Additional skin has left your eyebrows to sag
                            </li>
                            <li>
                                Sagging brows have started creating vision problems
                            </li>
                            <li>
                                Vertical frown lines have started emerging between the brows
                            </li>
                            <li>
                                Forehead is becoming home to horizontal wrinkles and fine lines
                            </li>
                            <li>
                                Good overall health, free from any severe medical condition
                            </li>
                            <li>
                                Non-smoker and non-alcoholic
                            </li>
                            <li>
                                Realistic goals with the surgery
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="accordion-container">
                    <a onclick="accordion_elm(this)" href="#" class="accordion-toggle">
                        <span>
                            2. What is the cost of Brow Lift surgery?
                        </span>
                        <span class="accordion-icon">
                            <i class="fa fa-chevron-down pull-right" aria-hidden="true"></i>
                        </span>
                    </a>
                    <div class="accordion-content">
                        <p>
                            The Brow Lift surgery in <?= ucwords($city) ?> would cost you around 60,000 INR to 1,30,000 INR. The expense may increase further depending on the surgeon, hospital, facilities, techniques, medical equipment, and other major factors.
                        </p>
                    </div>
                </div>
                <div class="accordion-container">
                    <a onclick="accordion_elm(this)" href="#" class="accordion-toggle">
                        <span>
                            3. What are the risks related to Brow Lift surgery?
                        </span>
                        <span class="accordion-icon">
                            <i class="fa fa-chevron-down pull-right" aria-hidden="true"></i>
                        </span>
                    </a>
                    <div class="accordion-content">
                        <p>
                            Brow Lift may accompany several risks, just like any other surgery:
                        </p>
                        <ul>
                            <li>
                                Intense pain after the surgery
                            </li>
                            <li>
                                Bruising, and swelling in the treated area
                            </li>
                            <li>
                                Accumulation of fluid or seroma, which may require drainage
                            </li>
                            <li>
                                Allergic reactions to sutures, antiseptic medicines, or dressings
                            </li>
                            <li>
                                Chances of infection due to the use of surgical materials
                            </li>
                            <li>
                                Allergy to anesthesia
                            </li>
                            <li>
                                Skin scarring resulting due to sutures with visible marks
                            </li>
                            <li>
                                Lost or reduced sensation in the scalp and facial skin,
                            </li>
                            <li>
                                Itching in the incision site
                            </li>
                            <li>
                                Irregularities in skin contour causing depression
                            </li>
                            <li>
                                Wrinkling of the skin
                            </li>
                            <li>
                                Risk of damage to deeper structures such as the eyes, nerves, skull bone, muscles, and blood vessels,
                            </li>
                            <li>
                                Asymmetrical face due to botched surgery
                            </li>
                            <li>
                                Chance of revisional surgery
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="accordion-container">
                    <a onclick="accordion_elm(this)" href="#" class="accordion-toggle">
                        <span>
                            4. When can you go for Brow Lift surgery?
                        </span>
                        <span class="accordion-icon">
                            <i class="fa fa-chevron-down pull-right" aria-hidden="true"></i>
                        </span>
                    </a>
                    <div class="accordion-content">
                        <p>
                            People start developing droopy brow lines, wrinkles, or fine lines across the forehead as they cross the 40-year mark. The age group of 40-65 is hence a probable time to opt for Brow Lift surgery in <?= ucwords($city) ?>. In rare cases, if young patients aged between their 20s and 30s get “worry lines” due to genetic problems they may also undergo Brow Lift surgery.
                        </p>
                    </div>
                </div>
                <div class="accordion-container">
                    <a onclick="accordion_elm(this)" href="#" class="accordion-toggle">
                        <span>
                            5. What are the things to do before the Brow Lift Surgery?
                        </span>
                        <span class="accordion-icon">
                            <i class="fa fa-chevron-down pull-right" aria-hidden="true"></i>
                        </span>
                    </a>
                    <div class="accordion-content">
                        <ul>
                            <li>
                                Stop smoking and drinking alcohol at least 2 weeks before the procedure.
                            </li>
                            <li>
                                Consult with the doctor about your medical history and any medications you are currently taking, as they may need adjustment.
                            </li>
                            <li>
                                Discuss any concerns or questions you have about the surgery with your cosmetic surgeon.
                            </li>
                            <li>
                                Be clear about your need to undergo the surgery and be aware of the potential risks and benefits.
                            </li>
                            <li>
                                Undergo medical tests such as Complete Blood Count (CBC), Clotting Time (CT), and Bleeding Time (BT) a few days before the surgery to ensure your perfect overall health.
                            </li>
                            <li>
                                Avoid taking anti-inflammatory drugs or other medications that may increase the risk of bleeding or bruising.
                            </li>
                            <li>
                                Have someone to accompany you home after the surgery
                            </li>
                            <li>
                                Wear loose-fitted clothes that are easy to wear and take off
                            </li>
                            <li>
                                Do not eat anything at least 8 hours before the surgery
                            </li>
                            <li>
                                Keep your body hydrated to ensure a speedy recovery
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="accordion-container">
                    <a onclick="accordion_elm(this)" href="#" class="accordion-toggle">
                        <span>
                            6. What to expect on the day of Brow Lift surgery?
                        </span>
                        <span class="accordion-icon">
                            <i class="fa fa-chevron-down pull-right" aria-hidden="true"></i>
                        </span>
                    </a>
                    <div class="accordion-content">
                        <ul>
                            <li>
                                On the surgery day, arrive at the hospital with a cool mind
                            </li>
                            <li>
                                Inform the anesthesiologist if you have an allergy to anesthesia so that the expert may adjust the dose accordingly
                            </li>
                            <li>
                                The surgeon will create the necessary incisions to remove excess fat, tighten sagging skin, and smooth out wrinkles on the forehead
                            </li>
                            <li>
                                Depending on the complications arising during the procedure, you can expect the surgery to take around 1-2 hours
                            </li>
                            <li>
                                The surgeon will provide you with several prescriptions and instructions for a successful recovery
                            </li>
                            <li>
                                It may take up to 6 months for your forehead to fully recover
                            </li>
                            <li>
                                The surgeon will also suggest regular follow-up visits at the clinic after the surgery
                            </li>
                            <li>
                                It is important to have realistic expectations for the results of the procedure, as the outcome may differ from your aspirations
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        <?php } elseif ($surgery_str == "neck lift") { ?>
            <div class="col padd-null">
                <div class="top-content">
                    <p>
                        Wrinkling and creasing around the neck often leave you with an aged look. To get away with fat and excess skin responsible for these aging signs, a neck lift is a worthwhile treatment. Our neck lift surgeons in <?= ucwords($city) ?> can help you get a slimmer and smoother neck with a carefully done treatment.
                    </p>
                </div>
                <p class="identity">
                    Why Approach Our Surgeons for Neck Lift Surgery in <?= ucwords($city) ?>?
                </p>
                <ul>
                    <li>
                        Skilled in performing surgery on the area surrounding the neck and head
                    </li>
                    <li>
                        Work on a natural approach to make your neck proportionate to your facial features
                    </li>
                    <li>
                        Carry out candid discussions with the patients before performing neck lift surgery in <?= ucwords($city) ?>
                    </li>
                    <li>
                        Works actively in coming up with successful results as expected by the patient
                    </li>
                    <li>
                        Member of many national and international plastic surgery associations
                    </li>
                </ul>

                <p class="identity">
                    COST OF <?= $surgery_str ?> Surgery IN <?= ucwords($city) ?>
                </p>
                <p>
                    The cost of neck lift surgery in <?= ucwords($city) ?> differs according to the surgeon you approach for the treatment. The type of surgery can also make a difference in the cost. For example:
                </p>
                <ul>
                    <li>
                        Platysmaplasty - to modify or remove the neck muscles or
                    </li>
                    <li>
                        Cervicoplasty -to eliminate the excess skin in the neck
                    </li>
                </ul>
                <p>
                    Our neck lift surgeons can help you know about the overall cost of the surgery the better way.
                </p>

                <p class="identity">
                    OUR SERVICE
                </p>
                <p>
                    Our neck lift surgeons in <?= ucwords($city) ?> could make a difference to your facial appearance with an improved neck. Our experts can tighten the skin around your neck to enable you to shun away the aging signs. Feel free to approach our experienced surgeons and get the treatment through advanced medical equipment, with cordial support from their nursing staff.
                </p>

                <p class="identity">
                    FAQs on Neck Lift Surgery in <?= ucwords($city) ?>
                </p>
                <!-- ACCODION -->
                <div class="accordion-container">
                    <a onclick="accordion_elm(this)" href="#" class="accordion-toggle">
                        <span>
                            1. Are you a good candidate for Neck Lift?
                        </span>
                        <span class="accordion-icon">
                            <i class="fa fa-chevron-down pull-right" aria-hidden="true"></i>
                        </span>
                    </a>
                    <div class="accordion-content">
                        <p>
                            To be a good candidate for Neck Lift in <?= ucwords($city) ?>, you should fulfil the below-mentioned conditions:
                        </p>
                        <ul>
                            <li>
                                Fulfilling the conditions below will make you an ideal candidate for Neck Lift surgery in <?= ucwords($city) ?>
                            </li>
                            <li>
                                A healthy body without any major medical conditions that could hinder the recovery process
                            </li>
                            <li>
                                Refrain from nicotine or alcohol consumption
                            </li>
                            <li>
                                A weak chin or a short neck resulting in a double chin that you wish to eliminate
                            </li>
                            <li>
                                Sagging in your jawline and a loss of volume in your chin, leading to the development of jowls
                            </li>
                            <li>
                                Excessive sagging in your neck due to weakened underlying neck muscles, commonly known as Turkey neck.
                            </li>
                            <li>
                                Develop platysmal bands that create a thick, rubber-band-like appearance around the neck, extending from Adam's apple area to the chin
                            </li>
                            <li>
                                Formation of creases and wrinkles on your neck
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="accordion-container">
                    <a onclick="accordion_elm(this)" href="#" class="accordion-toggle">
                        <span>
                            2. What is the cost of a Neck Lift?
                        </span>
                        <span class="accordion-icon">
                            <i class="fa fa-chevron-down pull-right" aria-hidden="true"></i>
                        </span>
                    </a>
                    <div class="accordion-content">
                        <p>
                            The cost of a Neck Lift surgery in <?= ucwords($city) ?> ranges from 70,000 INR to 1,00,000 INR. The cost may depend on several factors, such as the extent of skin and fat removal, muscle plication, the requirement for liposuction, and the level of skill and experience of the surgeon performing the procedure. Medical facilities, medicines, surgeon’s fees, etc., also add up to the cost of Neck Lift surgery.
                        </p>
                    </div>
                </div>
                <div class="accordion-container">
                    <a onclick="accordion_elm(this)" href="#" class="accordion-toggle">
                        <span>
                            3. What are the risks related to Neck Lift surgery?
                        </span>
                        <span class="accordion-icon">
                            <i class="fa fa-chevron-down pull-right" aria-hidden="true"></i>
                        </span>
                    </a>
                    <div class="accordion-content">
                        <ul>
                            <li>
                                Risk of excessive bleeding, which can lead to the development of Hematoma.
                            </li>
                            <li>
                                Nerve damage, skin loss, wound breakdown
                            </li>
                            <li>
                                Formation of seroma - an abnormal accumulation of fluid at the site of the surgical incision
                            </li>
                            <li>
                                Allergic reactions to anesthesia
                            </li>
                            <li>
                                Scarring, bruising, or intense pain
                            </li>
                            <li>
                                Loss or reduction of sensation in the treated area
                            </li>
                            <li>
                                Asymmetric neck after the surgery in <?= ucwords($city) ?>
                            </li>
                            <li>
                                Stiffness in the neck after the procedure
                            </li>
                            <li>
                                Possibility of revisional surgery
                            </li>
                            <li>
                                Infection due to the use of sutures and other surgical materials
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="accordion-container">
                    <a onclick="accordion_elm(this)" href="#" class="accordion-toggle">
                        <span>
                            4. When can you go for Neck Lift surgery?
                        </span>
                        <span class="accordion-icon">
                            <i class="fa fa-chevron-down pull-right" aria-hidden="true"></i>
                        </span>
                    </a>
                    <div class="accordion-content">
                        <p>
                            If you are experiencing significant weight loss, loose neck skin, excess fat deposits, or horizontal skin bands (neckbands), you could consider opting for a Neck Lift procedure in <?= ucwords($city) ?>. Typically, individuals between the ages of 35 and 65 opt for this procedure. It is important to note that you should remain fit both physically and mentally before undergoing surgery.
                        </p>
                    </div>
                </div>
                <div class="accordion-container">
                    <a onclick="accordion_elm(this)" href="#" class="accordion-toggle">
                        <span>
                            5. What are the things to do before the Neck Lift Surgery?
                        </span>
                        <span class="accordion-icon">
                            <i class="fa fa-chevron-down pull-right" aria-hidden="true"></i>
                        </span>
                    </a>
                    <div class="accordion-content">
                        <p>
                            If you are considering a Neck lift surgery in <?= ucwords($city) ?>, it is important to include the following items on your checklist:
                        </p>
                        <ul>
                            <li>
                                Ensure you have a good mental and physical state
                            </li>
                            <li>
                                Get a blood test to confirm your overall health
                            </li>
                            <li>
                                If you're pregnant,
                            </li>
                            <li>
                                It is advisable to postpone the surgery in case you are pregnant or have plans to be pregnant
                            </li>
                            <li>
                                Arrange for transportation to and from the clinic on the day of the surgery
                            </li>
                            <li>
                                Arrange for someone to help you with daily tasks after the surgery
                            </li>
                            <li>
                                Wear loose-fitting clothes to stay comfortable during and after the surgery
                            </li>
                            <li>
                                Inform your surgeon of any current medications you are taking
                            </li>
                            <li>
                                Avoid the consumption of aspirin, health supplements, and anti-inflammatory drugs to prevent excessive bleeding during the surgery
                            </li>
                            <li>
                                Stay hydrated with water or additive-free fluids
                            </li>
                            <li>
                                Refrain from eating anything at least eight hours before the surgery.
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="accordion-container">
                    <a onclick="accordion_elm(this)" href="#" class="accordion-toggle">
                        <span>
                            6. What to expect on the day of Neck Lift surgery?
                        </span>
                        <span class="accordion-icon">
                            <i class="fa fa-chevron-down pull-right" aria-hidden="true"></i>
                        </span>
                    </a>
                    <div class="accordion-content">
                        <ul>
                            <li>
                                During the Neck Lift surgery in <?= ucwords($city) ?>, be at the clinic with a positive attitude
                            </li>
                            <li>
                                Someone will administer general anesthesia to ensure a pain-free surgery experience
                            </li>
                            <li>
                                The surgeon will create incisions to access the deep structural tissues of the lower face and neck
                            </li>
                            <li>
                                The expert may also eliminate excess skin from the neck
                            </li>
                            <li>
                                The procedure typically lasts for 1-3 hours and is most effective for patients with loose skin in the neck area
                            </li>
                            <li>
                                Following the surgery in <?= ucwords($city) ?>, it generally takes 2 weeks for pain, swelling, and bruising to subside and for the neck contours to become visible
                            </li>
                            <li>
                                Recovery time is typically 4-6 weeks, after which most individuals can return to work, though in some cases, recovery may take longer
                            </li>
                            <li>
                                Within approximately 3 months, all swelling in the neck area should be resolved completely
                            </li>
                            <li>
                                It is important to have realistic expectations regarding the outcome of the surgery
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        <?php } elseif ($surgery_str == "chin surgery") { ?>
            <div class="col padd-null">
                <div class="top-content">
                    <p>
                        While performing Chin Surgery the plastic surgeon places a custom-fit chin implant to enhance the facial appearance of the patient. Also termed Mentoplasty or Genioplasty, the procedure improves the jawline structure and strengthens a recessed and weaker chin. Our chin surgeons in <?= ucwords($city) ?> hold dexterity in executing this treatment with extreme precision.
                    </p>
                </div>
                <p class="identity">
                    Why Consult Our Surgeons for Chin Surgery in <?= ucwords($city) ?>?
                </p>
                <ul>
                    <li>
                        Experienced in performing numerous chin surgeries to improve the patient’s facial harmony.
                    </li>
                    <li>
                        Certified by many reputed plastic surgery associations in India and overseas.
                    </li>
                    <li>
                        Work with precision to bring the patient’s chin in improved proportion with other facial features
                    </li>
                    <li>
                        Satisfy all the queries and concerns of the patients before starting the surgery
                    </li>
                    <li>
                        Satisfy all the queries and concerns of the patients before starting the surgery
                    </li>
                </ul>
                <p class="identity">
                    COST OF <?= $surgery_str ?> IN <?= ucwords($city) ?>
                </p>
                <p>
                    The type of chin implant that you opt for Chin Surgery is one of the mainstay factors to decide the surgery cost. For instance, you can choose bone graft, cadaveric tissue graft silicone or polyethylene implant, or autologous tissue graft. This will however exclude the cost of anesthetics, the fees of the surgeon, and the charges for operating room facilities. Direct discussion with any of our chin surgeons in <?= ucwords($city) ?> will help you get a deeper insight into the cost of the entire procedure and the additional facilities.
                </p>
                <p class="identity">OUR SERVICES</p>
                <p>
                    With our highly experienced chin surgeons in <?= ucwords($city) ?> performing your surgery, you are in safe hands. Their sophisticated operating rooms studded with advanced surgery equipment will make your treatment easier and hassle-free. You can always contact our expert chin surgeons in <?= ucwords($city) ?> to get the ingrained details associated with Chin Surgery.
                </p>
                <p class="identity">
                    FAQs on Chin Surgery in <?= ucwords($city) ?>
                </p>

                <div class="accordion-container">
                    <a onclick="accordion_elm(this)" href="#" class="accordion-toggle">
                        <span>
                            1. Are you a good candidate for Chin Surgery?
                        </span>
                        <span class="accordion-icon">
                            <i class="fa fa-chevron-down pull-right" aria-hidden="true"></i>
                        </span>
                    </a>
                    <div class="accordion-content">
                        <p>
                            If you want to opt for Chin Surgery in <?= ucwords($city) ?>, adhering to the following points will make you an ideal candidate
                        </p>
                        <ul>
                            <li>
                                Your face looks unappealing due to the asymmetrical chin
                            </li>
                            <li>
                                The chin lacks projection or is too short
                            </li>
                            <li>
                                A weak jawline makes you feel insecure
                            </li>
                            <li>
                                Good health overall and a stable body weight
                            </li>
                            <li>
                                Free from any severe medical condition
                            </li>
                            <li>
                                Non-alcoholic and a non-smoker
                            </li>
                            <li>
                                Realistic expectation with the Chin Surgery result
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="accordion-container">
                    <a onclick="accordion_elm(this)" href="#" class="accordion-toggle">
                        <span>
                            2. What is the cost of Chin Surgery?
                        </span>
                        <span class="accordion-icon">
                            <i class="fa fa-chevron-down pull-right" aria-hidden="true"></i>
                        </span>
                    </a>
                    <div class="accordion-content">
                        <p>
                            Undergoing Chin Surgery in <?= ucwords($city) ?> may cost you around 70,000 INR - 150,000 INR. The price may vary depending on the surgeon’s fees, the choice of hospital or clinic, the procedure carried out, etc.
                        </p>
                    </div>
                </div>
                <div class="accordion-container">
                    <a onclick="accordion_elm(this)" href="#" class="accordion-toggle">
                        <span>
                            3. What are the risks related to Chin Surgery?
                        </span>
                        <span class="accordion-icon">
                            <i class="fa fa-chevron-down pull-right" aria-hidden="true"></i>
                        </span>
                    </a>
                    <div class="accordion-content">
                        <strong>
                            Several complications may arise as a result of Chin Surgery in <?= ucwords($city) ?>:
                        </strong>
                        <ul>
                            <li>
                                Allergic behaviour on administering anesthesia
                            </li>
                            <li>
                                Inflammation in the chin area
                            </li>
                            <li>
                                The chin may appear asymmetrical
                            </li>
                            <li>
                                Minimal to “black and blue” bruising on the sides of the chin
                            </li>
                            <li>
                                Tingling sensation or numbness in the chin or lower lip
                            </li>
                            <li>
                                Unfavourable results, such as asymmetrical facial proportions
                            </li>
                            <li>
                                Dislocated chin implant after the surgery
                            </li>
                            <li>
                                Urge to replace the existing silicone chin implant with an implant of another size
                            </li>
                            <li>
                                Excessive scarring around the chin implant
                            </li>
                            <li>
                                Discolouration of skin
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="accordion-container">
                    <a onclick="accordion_elm(this)" href="#" class="accordion-toggle">
                        <span>
                            4. When can you go for Chin Surgery?
                        </span>
                        <span class="accordion-icon">
                            <i class="fa fa-chevron-down pull-right" aria-hidden="true"></i>
                        </span>
                    </a>
                    <div class="accordion-content">
                        <p>
                            If you are not happy with the projection or appearance of your chin, the option to undergo Chin Surgery in <?= ucwords($city) ?> is wide open. This cosmetic procedure can make your chin appear on par with other facial features. Although there is no specific age requirement for Chin Surgery, individuals must have a fully developed chin to undergo the procedure. Even teenagers 15-16 years old can undergo this surgery with the consent of their parents.
                        </p>
                    </div>
                </div>
                <div class="accordion-container">
                    <a onclick="accordion_elm(this)" href="#" class="accordion-toggle">
                        <span>
                            5. What are the things to do before the Chin Surgery?
                        </span>
                        <span class="accordion-icon">
                            <i class="fa fa-chevron-down pull-right" aria-hidden="true"></i>
                        </span>
                    </a>
                    <div class="accordion-content">
                        <ul>
                            <li>
                                Before getting Chin Surgery in <?= ucwords($city) ?>, make sure to consult with your cosmetic surgeon and clarify any doubts or concerns you may have.
                            </li>
                            <li>
                                To determine your eligibility for the procedure, the surgeon will conduct various lab tests and medical evaluations.
                            </li>
                            <li>
                                Follow the instructions provided by your surgeon regarding what to do and what to avoid before and after the surgery.
                            </li>
                            <li>
                                It's recommended to quit smoking and alcohol consumption well in advance to avoid introducing toxins and carcinogens to your body.
                            </li>
                            <li>
                                Inform your surgeon of any medications you are currently taking, as they may need proper adjustment adjusted before the surgery.
                            </li>
                            <li>
                                Buy or arrange for comfortable clothing after the surgery, it should be easy to wear and remove
                            </li>
                            <li>
                                Have someone to take you back home after the surgery
                            </li>
                            <li>
                                Keep yourself hydrated with water and additive-free liquids as it could help in healing wounds and satisfying recovery.
                            </li>
                            <li>
                                You can have a light meal around 6-8 hours before the surgery, but make sure it is not protein-rich, fried, or fatty
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="accordion-container">
                    <a onclick="accordion_elm(this)" href="#" class="accordion-toggle">
                        <span>
                            6. What to expect on the day of Chin surgery?
                        </span>
                        <span class="accordion-icon">
                            <i class="fa fa-chevron-down pull-right" aria-hidden="true"></i>
                        </span>
                    </a>
                    <div class="accordion-content">
                        <ul>
                            <li>
                                Be at the clinic with a positive mindset on the surgery day
                            </li>
                            <li>
                                Usually, surgeons perform this surgery as an outpatient treatment.
                            </li>
                            <li>
                                You could expect the anesthesiologist to administer either general or IV anesthesia to numb the chin area
                            </li>
                            <li>
                                Our surgeons in <?= ucwords($city) ?> will use the latest techniques to make incisions either inside your mouth or under your chin.
                            </li>
                            <li>
                                After carrying out the surgery, the doctor will close the incisions with tapes, sutures, or skin adhesives.
                            </li>
                            <li>
                                The surgeon may also apply facial drains to prevent fluid build-up in your neck and reduce blood loss,
                            </li>
                            <li>
                                The drains will be removed after a couple of days of Chin Surgery
                            </li>
                            <li>
                                The surgery usually takes around an hour to complete, and you can return home about two hours after the completion of the surgery.
                            </li>
                            <li>
                                You could expect some swelling and slight discomfort,
                            </li>
                            <li>
                                The chin and neck skin may appear tight due to bruising and swelling.
                            </li>
                            <li>
                                The surgery can indeed make positive changes to your face
                            </li>
                            <li>
                                It is still essential to have realistic expectations about the results.
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        <?php } elseif ($surgery_str == "cheek augmentation") { ?>
            <div class="col padd-null">
                <div class="top-content">
                    <p>
                        <strong>
                            The Trustworthy Cheek Augmentation Surgeons in <?= ucwords($city) ?>
                        </strong>
                    </p>
                    <p>
                        If you are noticing a flat appearance of your mid-face, it is due to your deformed cheekbones. It may have happened due to an accident or any other reason. In any case, opting for cheek implant surgery is a befitting solution to remedy this flawed appearance. The sole purpose of this surgery is to lift or add volume to your cheeks. Our Cheek Augmentation surgeons in <?= ucwords($city) ?> hold a thriving record of performing cheek implants and fat grafting - the two widely performed surgeries in this regard.
                    </p>
                </div>
                <p class="identity">
                    Why Consult Our Surgeons for Cheek Augmentation Surgery in <?= ucwords($city) ?>?
                </p>
                <ul>
                    <li>
                        Have performed countless cheek surgeries to enhance the facial appearance of the patients
                    </li>
                    <li>
                        Extremely qualified and experienced to perform Cheek Augmentation surgery in <?= ucwords($city) ?>
                    </li>
                    <li>
                        Members of several renowned Indian and international plastic surgery associations
                    </li>
                    <li>
                        Proficient in carrying out malar, sub-malar, and extended malar implants
                    </li>
                </ul>
                <p class="identity">
                    COST OF <?= $surgery_str ?> Surgery IN <?= ucwords($city) ?>
                </p>
                <p>
                    The cost of Cheek Augmentation surgery in <?= ucwords($city) ?> relies largely on the type of cheek implant used for your treatment. The charges for surgeon’s fees, medical facilities, operating room, anesthesia, and other associated expenses will also add up to the overall cost of Cheek Augmentation. Contact our Cheek Augmentation surgeon in <?= ucwords($city) ?> to get detailed info about the surgery cost.
                </p>

                <p class="identity">OUR SERVICES</p>
                <p>
                    During your surgery, our surgeons make sure to equip make you feel comfortable the best way possible. They also boast of their robust equipment and cordial nursing staff. Moreover, our Cheek Augmentation surgeons in <?= ucwords($city) ?> are among the topmost in the healthcare industry. Overall, you can leave their clinics duly satisfied with an enhanced facial appearance.
                </p>

                <!-- oooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooo -->
                <p class="identity">
                    FAQs on Chin Surgery in <?= ucwords($city) ?>
                </p>

                <div class="accordion-container">
                    <a onclick="accordion_elm(this)" href="#" class="accordion-toggle">
                        <span>
                            1. Are you a good candidate for Cheek Augmentation?
                        </span>
                        <span class="accordion-icon">
                            <i class="fa fa-chevron-down pull-right" aria-hidden="true"></i>
                        </span>
                    </a>
                    <div class="accordion-content">
                        <p>
                            If you want to undergo Cheek Augmentation surgery in <?= ucwords($city) ?>, you should abide by the following criteria:
                        </p>
                        <ul>
                            <li>
                                Have facial defects or have experienced facial trauma
                            </li>
                            <li>
                                Experience bone resorption due to ageing
                            </li>
                            <li>
                                Desire to improve your facial appearance
                            </li>
                            <li>
                                Have deflated, flat, or hollow cheeks due to growing age
                            </li>
                            <li>
                                Have asymmetrical cheeks
                            </li>
                            <li>
                                Do not have any chronic health conditions or severe gum disease
                            </li>
                            <li>
                                Wish to get away with sagging skin beneath the eyes, sagging jowls, or deepening nasolabial folds
                            </li>
                            <li>
                                Do not smoke or consume alcohol
                            </li>
                            <li>
                                Have overall good health
                            </li>
                            <li>
                                Have realistic expectations regarding the outcomes of the surgery
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="accordion-container">
                    <a onclick="accordion_elm(this)" href="#" class="accordion-toggle">
                        <span>
                            2. What is the cost of Cheek Augmentation?
                        </span>
                        <span class="accordion-icon">
                            <i class="fa fa-chevron-down pull-right" aria-hidden="true"></i>
                        </span>
                    </a>
                    <div class="accordion-content">
                        <p>
                            Cheek Augmentation surgery in <?= ucwords($city) ?> costs between 100,000 INR to 130,000 INR on average. Additional procedures done in conjunction with Cheek Augmentation will result in extra expenses.
                        </p>
                    </div>
                </div>
                <div class="accordion-container">
                    <a onclick="accordion_elm(this)" href="#" class="accordion-toggle">
                        <span>
                            3. What are the risks related to Cheek Augmentation?
                        </span>
                        <span class="accordion-icon">
                            <i class="fa fa-chevron-down pull-right" aria-hidden="true"></i>
                        </span>
                    </a>
                    <div class="accordion-content">
                        <ul>
                            <li>
                                Allergic behaviour to anesthesia
                            </li>
                            <li>
                                Infection and bleeding at the treated site
                            </li>
                            <li>
                                Fluid build-up or seroma in the area
                            </li>
                            <li>
                                Hematoma or blood clotting in the treated area
                            </li>
                            <li>
                                Displacement of the implant in the cheek
                            </li>
                            <li>
                                Reduced skin sensation
                            </li>
                            <li>
                                Fat necrosis or the death of fatty tissue beneath the skin
                            </li>
                            <li>
                                Severe and persistent pain
                            </li>
                            <li>
                                Poor wound healing
                            </li>
                            <li>
                                Cardiac and pulmonary complications
                            </li>
                            <li>
                                Deep vein thrombosis (DVT)
                            </li>
                            <li>
                                Lumpiness or unevenness in the treated area
                            </li>
                            <li>
                                Excessive scarring around the cheek implant
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="accordion-container">
                    <a onclick="accordion_elm(this)" href="#" class="accordion-toggle">
                        <span>
                            4. When can you go for Cheek Augmentation?
                        </span>
                        <span class="accordion-icon">
                            <i class="fa fa-chevron-down pull-right" aria-hidden="true"></i>
                        </span>
                    </a>
                    <div class="accordion-content">
                        <p>
                            Cheek Augmentation is a suitable option if you want to enhance the appearance of your sagging, worn-out, or hollow cheek. The surgery can be performed in <?= ucwords($city) ?> on individuals over the age of 18, with the majority of patients being between 35-65 years old.
                        </p>
                    </div>
                </div>
                <div class="accordion-container">
                    <a onclick="accordion_elm(this)" href="#" class="accordion-toggle">
                        <span>
                            5. What are the things to do before the Cheek Augmentation Surgery?
                        </span>
                        <span class="accordion-icon">
                            <i class="fa fa-chevron-down pull-right" aria-hidden="true"></i>
                        </span>
                    </a>
                    <div class="accordion-content">
                        <p>
                            To prepare for Cheek Augmentation surgery in <?= ucwords($city) ?>, you should do the following:
                        </p>
                        <ul>
                            <li>
                                Undergo a medical evaluation before the surgery as recommended by your surgeon
                            </li>
                            <li>
                                Have your facial structure examined to help the surgeon determine where to make incisions
                            </li>
                            <li>
                                Avoid eating or drinking anything for at least 8 hours before the surgery
                            </li>
                            <li>
                                Stay hydrated with plenty of water and fluids
                            </li>
                            <li>
                                Avoid consuming medications that lead to bleeding during or after the surgery
                            </li>
                            <li>
                                Inform your surgeon about any existing medication to help him adjust the medicines accordingly
                            </li>
                            <li>
                                Have someone accompany you to the clinic and take you home after the surgery
                            </li>
                            <li>
                                Wear comfortable attire with easy-to-use fasteners like buttons or zippers so that it is easier to wear or take them off
                            </li>
                            <li>
                                Refrain from smoking and consuming alcohol for at least 2 weeks before the Cheek Augmentation surgery
                            </li>
                            <li>
                                Take pictures of your cheeks before the surgery to compare them with the post-surgery results
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="accordion-container">
                    <a onclick="accordion_elm(this)" href="#" class="accordion-toggle">
                        <span>
                            6. What to expect on the day of Cheek Augmentation surgery?
                        </span>
                        <span class="accordion-icon">
                            <i class="fa fa-chevron-down pull-right" aria-hidden="true"></i>
                        </span>
                    </a>
                    <div class="accordion-content">
                        <ul>
                            <li>
                                On the day of Cheek Augmentation surgery in <?= ucwords($city) ?>, be at the clinic with a calm and composed mindset.
                            </li>
                            <li>
                                Cooperate with the medical staff during your pre-surgery examination
                            </li>
                            <li>
                                The anesthesia specialist may inquire about your reaction to anesthesia to ensure that the dosage is adjusted accordingly
                            </li>
                            <li>
                                To lift or add volume to your cheeks, the surgeon will create an incision inside the mouth at the selected area
                            </li>
                            <li>
                                The surgeon may place an implant under the skin and on the cheekbone as per the requirement
                            </li>
                            <li>
                                The incision will be closed with sutures
                            </li>
                            <li>
                                The entire procedure takes approximately 1-1.5 hours
                            </li>
                            <li>
                                It will leave no visible scars due to the incision being made inside the mouth
                            </li>
                            <li>
                                You may experience pain in the incision site on the surgery day but will disappear with time
                            </li>
                            <li>
                                After a week of the surgery, you can return to work
                            </li>
                            <li>
                                Have realistic expectations with the Cheek Augmentation surgery in <?= ucwords($city) ?>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- 00000000000000000000000000000000000000000000000000000000000000000000000 -->
            </div>
        <?php } elseif ($surgery_str == "lip augmentation") {  ?>
            <div class="col padd-null">
                <div class="top-content">
                    <p>
                        Do you wish to get plumper and fuller lips? If yes, Lip Augmentation is the best cosmetic surgery procedure to attain your wish. You can opt from among silicone or expanded polytetrafluoroethylene implants. Alternatively, lip fillers such as Restylane and Juvederm are among the other widely preferred choices. Our experienced cosmetic surgeons in <?= ucwords($city) ?> can help you opt for the most suitable Lip Augmentation treatment.
                    </p>
                </div>
                <p class="identity">
                    Why Are Our Surgeons the Preferred Lip Augmentation Surgeons in <?= ucwords($city) ?>?
                </p>
                <ul>
                    <li>
                        Expert in carrying out Lip Augmentation procedures in <?= ucwords($city) ?>
                    </li>
                    <li>
                        Perform satisfying Lip Augmentation to ensure long-lasting results
                    </li>
                    <li>
                        Can perform less visible and more natural lip implants.
                    </li>
                    <li>
                        Member of several plastic surgery associations in India and overseas
                    </li>
                </ul>
                <p class="identity">
                    COST OF <?= $surgery_str ?> IN <?= ucwords($city) ?>
                </p>
                <p>
                    Several factors play their part in defining the cost of the Lip Augmentation procedure. These may include Lip Augmentation grade, advanced technology, fees of the surgeon, auxiliary services, and more. Your choice between lip implants and lip fillers will also incur different costs. For a better estimate of the involved surgery costs, you can always consult any of our renowned Lip Augmentation surgeons in <?= ucwords($city) ?>.
                </p>
                <p class="identity">OUR SERVICES</p>
                <p>
                    Approach any of our Lip Augmentation experts in <?= ucwords($city) ?> to get an enhanced lip appearance. The treatment will help you get more natural and fuller lips without leaving behind noticeable scars or marks. Their sophisticated operating room, laced with advanced medical equipment will make your treatment simpler than you could ever think of. Feel free to connect with skilled plastic surgeons and make way for an enhanced facial appearance.
                </p>

                <p class="identity">
                    FAQs on Lip Augmentation Surgery in <?= ucwords($city) ?>
                </p>
                <!-- ACCODION -->
                <div class="accordion-container">
                    <a onclick="accordion_elm(this)" href="#" class="accordion-toggle">
                        <span>
                            1. Are you a good candidate for Lip Augmentation Surgery?
                        </span>
                        <span class="accordion-icon">
                            <i class="fa fa-chevron-down pull-right" aria-hidden="true"></i>
                        </span>
                    </a>
                    <div class="accordion-content">
                        <p>
                            To be a suitable candidate for Lip Augmentation in <?= ucwords($city) ?>, you must meet the following essential requirements:
                        </p>
                        <ul>
                            <li>
                                Lips with inadequate volume, shape, or symmetry
                            </li>
                            <li>
                                Unappealing lips, making you feel embarrassed
                            </li>
                            <li>
                                Damaged lips due to an accident or an injury
                            </li>
                            <li>
                                Enough lip tissue to conceal the implant
                            </li>
                            <li>
                                Good overall health with no significant medical conditions
                            </li>
                            <li>
                                Having adequate fat in the donor area
                            </li>
                            <li>
                                Having realistic expectations regarding the outcome of the procedure
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="accordion-container">
                    <a onclick="accordion_elm(this)" href="#" class="accordion-toggle">
                        <span>
                            2. What is the cost of Lip Augmentation Surgery?
                        </span>
                        <span class="accordion-icon">
                            <i class="fa fa-chevron-down pull-right" aria-hidden="true"></i>
                        </span>
                    </a>
                    <div class="accordion-content">
                        <p>
                            A Lip Augmentation procedure in <?= ucwords($city) ?> will cost around 40,000 INR - 1,00,000 INR. The amount could differ significantly based on the cosmetic surgeon and the treatment you choose, the facilities provided, and several other factors.
                        </p>
                    </div>
                </div>
                <div class="accordion-container">
                    <a onclick="accordion_elm(this)" href="#" class="accordion-toggle">
                        <span>
                            3. What are the risks related to Lip Augmentation Surgery?
                        </span>
                        <span class="accordion-icon">
                            <i class="fa fa-chevron-down pull-right" aria-hidden="true"></i>
                        </span>
                    </a>
                    <div class="accordion-content">
                        <p>
                            Mentioned below are some of the potential risks and complications associated with undergoing Lip Augmentation surgery in <?= ucwords($city) ?>:
                        </p>
                        <ul>
                            <li>
                                Adverse reactions to anesthesia or other medications used during the procedure
                            </li>
                            <li>
                                Redness, tenderness, or itching at the incision area
                            </li>
                            <li>
                                Infection or bleeding in the treated area due to the use of surgical materials
                            </li>
                            <li>
                                Persistent swelling or bruising
                            </li>
                            <li>
                                Cold sores or fever blisters around the lips
                            </li>
                            <li>
                                Asymmetry of the lips
                            </li>
                            <li>
                                Irregularities and lumps in the surgical incision site
                            </li>
                            <li>
                                Chances of scarring, ulceration, or stiffness in the lips
                            </li>
                            <li>
                                Loss of tissue due to inadvertent injection into blood vessels
                            </li>
                            <li>
                                Possibility of Hematoma or clotting of a pool of blood in the treated area
                            </li>
                            <li>
                                Chances of seroma or flood accumulation
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="accordion-container">
                    <a onclick="accordion_elm(this)" href="#" class="accordion-toggle">
                        <span>
                            4. When can you go for Lip Augmentation Surgery?
                        </span>
                        <span class="accordion-icon">
                            <i class="fa fa-chevron-down pull-right" aria-hidden="true"></i>
                        </span>
                    </a>
                    <div class="accordion-content">
                        <p>
                            You can go for Lip Augmentation Surgery at almost any age beyond 18 years. At this age, you are more prone to have a healthy body, immune enough to withstand the effect of anesthesia and other medicines given during the surgery. You would feel the need to undergo this surgery in <?= ucwords($city) ?> if you observe thin lips or decreased lip volume because of ageing fact.
                        </p>
                    </div>
                </div>
                <div class="accordion-container">
                    <a onclick="accordion_elm(this)" href="#" class="accordion-toggle">
                        <span>
                            5. What are the things to do before the Lip Augmentation Surgery?
                        </span>
                        <span class="accordion-icon">
                            <i class="fa fa-chevron-down pull-right" aria-hidden="true"></i>
                        </span>
                    </a>
                    <div class="accordion-content">
                        <p>
                            Following these guidelines would be worthwhile in preparing for a Lip Augmentation surgery in <?= ucwords($city) ?>:
                        </p>
                        <ul>
                            <li>
                                Undergo the recommended tests in a lab suggested by your surgeon
                            </li>
                            <li>
                                Refrain from taking any blood-thinning medications to avoid significant bruising after the injection.
                            </li>
                            <li>
                                Avoid tobacco, alcohol, and caffeine 24 hours before and after the surgery to reduce the risk of complications.
                            </li>
                            <li>
                                Keep your face clean and free of any makeup to minimise the risk of infection.
                            </li>
                            <li>
                                Stay hydrated by drinking plenty of water before the surgery to facilitate safe recovery.
                            </li>
                            <li>
                                Arrange for someone to accompany you to the clinic and take you back home.
                            </li>
                            <li>
                                Prepare comfortable clothing to wear at home after the surgery to avoid any inconvenience.
                            </li>
                            <li>
                                Have a clear understanding of the possible outcomes before undergoing Lip Augmentation surgery.
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="accordion-container">
                    <a onclick="accordion_elm(this)" href="#" class="accordion-toggle">
                        <span>
                            6. What to expect on the day of Lip Augmentation surgery?
                        </span>
                        <span class="accordion-icon">
                            <i class="fa fa-chevron-down pull-right" aria-hidden="true"></i>
                        </span>
                    </a>
                    <div class="accordion-content">
                        <ul>
                            <li>
                                Arrive at the place of the surgery with a calm and composed mind
                            </li>
                            <li>
                                Have realistic expectations with the surgery so that unfavourable results may not bother you much
                            </li>
                            <li>
                                The surgeon may use several surgical or non-surgical techniques for Lip Augmentation
                            </li>
                            <li>
                                Mostly, surgeons use fillers such as hyaluronic acid for Lip Augmentation as a non-surgical method
                            </li>
                            <li>
                                Often, surgeons also carry out a lip implant or lip lift method for permanent Lip Augmentation
                            </li>
                            <li>
                                Usually, a Lip Augmentation surgery done in a <?= ucwords($city) ?> clinic may take around 30 minutes to complete
                            </li>
                            <li>
                                During this surgery, you could expect administering the anesthesia to make your lips numb
                            </li>
                            <li>
                                The surgeon would create a small incision in both corners of your mouth to insert a clamp via one side and thread it to the other incised corner
                            </li>
                            <li>
                                After pulling the implants through the tunnels, the doctor will close the incisions permanently by stitching them into sutures
                            </li>
                            <li>
                                There may arise pain in the injection site and side of your lips
                            </li>
                            <li>
                                The swelling would disappear in 1-2 days. In rare instances, it may take around a week
                            </li>
                            <li>
                                Complete recovery from the treatment may take around two weeks. Therefore, if you wish to flaunt your augmented lips at a wedding or any other special event, schedule the surgery two weeks before the occasion
                            </li>
                            <li>
                                Make sure to have realistic expectations with the Lip Augmentation surgery in <?= ucwords($city) ?>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        <?php } elseif ($surgery_str == "buccal fat removal") { ?>
            <div class="col padd-null">
                <div class="top-content">
                    <p>
                        Do you want to break free from your round face or baby, chipmunk, or chubby cheeks? Buccal Fat Removal in <?= ucwords($city) ?> is the best remedy to your problem. Also termed Buccal Lipectomy or Cheek Fat Reduction, it refers to the elimination of fat pads accumulated in the cheek area. When done successfully through one of our experienced Buccal Fat Removal surgeons in <?= ucwords($city) ?>, the treatment results in a finely contoured lower jawline and upper cheekbone.
                    </p>
                </div>
                <p class="identity">
                    Why prefer Our Surgeons for Buccal Fat Removal in <?= ucwords($city) ?>?
                </p>
                <ul>
                    <li>
                        Years of expertise in performing Buccal Fat Removal in <?= ucwords($city) ?>
                    </li>
                    <li>
                        Dexterous in carrying out safe, painless, and quick treatment
                    </li>
                    <li>
                        Work proficiently to remove buccal fat-pad tissue
                    </li>
                    <li>
                        Help to get slimmer, thinner, and better cheeks
                    </li>
                    <li>
                        Pay attention to your concerns and surgery expectations patiently
                    </li>
                </ul>
                <p class="identity">
                    COST OF <?= $surgery_str ?> IN <?= ucwords($city) ?>
                </p>
                <p>
                    The cost would depend largely on the clinic and the surgeon you opt for the treatment. Likewise, the fees of the surgeon, post-operative follow-ups, medicines, hospital facility, and the patient’s profile also contribute toward deciding the cost of Buccal Fat Removal in <?= ucwords($city) ?>. Our renowned plastic surgeons are the best to inform you about the cost involved with the Buccal Fat Removal treatment in <?= ucwords($city) ?>.
                </p>
                <p class="identity">
                    OUR SERVICES
                </p>
                <p>
                    Approach our Buccal Fat Removal experts in <?= ucwords($city) ?> to reduce your cheek fat and attain a flawless appearance. With our experienced surgeons, you will get advanced medical facilities, upscale treatment equipment, a well-equipped operating room, and a cordial nursing staff. Consult any of our renowned plastic surgeons today and proceed towards regaining your charming appearance.
                </p>

                <p class="identity">
                    FAQs on Buccal Fat Removal Surgery in <?= ucwords($city) ?>
                </p>
                <div class="accordion-container">
                    <a onclick="accordion_elm(this)" href="#" class="accordion-toggle">
                        <span>
                            1. Are you a good candidate for Buccal Fat Removal?
                        </span>
                        <span class="accordion-icon">
                            <i class="fa fa-chevron-down pull-right" aria-hidden="true"></i>
                        </span>
                    </a>
                    <div class="accordion-content">
                        <p>
                            To be a suitable candidate for Buccal Fat Removal surgery in <?= ucwords($city) ?>, you should abide by the below-mentioned points:
                        </p>
                        <ul>
                            <li>
                                Cheeks with accumulated extraordinary fat
                            </li>
                            <li>
                                Larger than usual Buccal Fat Pads
                            </li>
                            <li>
                                Round and fuller face
                            </li>
                            <li>
                                Wish to have a slimmer and well-defined facial appearance
                            </li>
                            <li>
                                A healthy body with a stable weight
                            </li>
                            <li>
                                Non-smoker and a non-alcoholic
                            </li>
                            <li>
                                50 years old or beyond
                            </li>
                            <li>
                                Diagnosed with the rare Parry-Romberg syndrome or progressive hemifacial atrophy, which results in the shrinkage of one portion of the facial skin
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="accordion-container">
                    <a onclick="accordion_elm(this)" href="#" class="accordion-toggle">
                        <span>
                            2. What is the cost of Buccal Fat Removal?
                        </span>
                        <span class="accordion-icon">
                            <i class="fa fa-chevron-down pull-right" aria-hidden="true"></i>
                        </span>
                    </a>
                    <div class="accordion-content">
                        <p>
                            The estimated cost of a Buccal Fat Removal procedure in <?= ucwords($city) ?> is approximately 65,000 INR. However, this cost may vary depending on various factors such as the location, the experience of the cosmetic surgeon, and additional recovery expenses. The type of anesthesia administered and the prescription medication required for aftercare may affect the total cost of the procedure as well.
                        </p>
                    </div>
                </div>
                <div class="accordion-container">
                    <a onclick="accordion_elm(this)" href="#" class="accordion-toggle">
                        <span>
                            3. What are the risks related to Buccal Fat Removal?
                        </span>
                        <span class="accordion-icon">
                            <i class="fa fa-chevron-down pull-right" aria-hidden="true"></i>
                        </span>
                    </a>
                    <div class="accordion-content">
                        <p>
                            Here are some of the risks associated with Buccal Fat Removal surgery in <?= ucwords($city) ?>
                        </p>
                        <ul>
                            <li>
                                Infection at the incision site
                            </li>
                            <li>
                                Adverse reactions to anesthesia
                            </li>
                            <li>
                                Injury to the salivary or facial ducts
                            </li>
                            <li>
                                Reduced sensation in the incision area
                            </li>
                            <li>
                                Asymmetry in the cheeks
                            </li>
                            <li>
                                Hematoma or the formation of clotted blood at the treatment site
                            </li>
                            <li>
                                Bleeding, bruising, or swelling
                            </li>
                            <li>
                                Pulmonary and cardiac complications
                            </li>
                            <li>
                                Unbearable pain after the effect of anesthesia ends
                            </li>
                            <li>
                                Need for correction surgery
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="accordion-container">
                    <a onclick="accordion_elm(this)" href="#" class="accordion-toggle">
                        <span>
                            4. When can you go for Buccal Fat Removal?
                        </span>
                        <span class="accordion-icon">
                            <i class="fa fa-chevron-down pull-right" aria-hidden="true"></i>
                        </span>
                    </a>
                    <div class="accordion-content">
                        <p>
                            The growth of fat pads continues until a person reaches their twenties. Cosmetic surgeons hence advise patients aged 20 and above to consider undergoing Buccal Fat Removal surgery in <?= ucwords($city) ?>. Individuals who feel that their larger-than-desired fat pads are giving them a youthful or childlike appearance may also choose to undergo this surgery.
                        </p>
                    </div>
                </div>
                <div class="accordion-container">
                    <a onclick="accordion_elm(this)" href="#" class="accordion-toggle">
                        <span>
                            5. What are the things to do before the Buccal Fat Removal Surgery?
                        </span>
                        <span class="accordion-icon">
                            <i class="fa fa-chevron-down pull-right" aria-hidden="true"></i>
                        </span>
                    </a>
                    <div class="accordion-content">
                        <ul>
                            <li>
                                Clear your confusion about the Buccal Fat Removal surgery in <?= ucwords($city) ?>
                            </li>
                            <li>
                                Provide your medical history and a list of any current medications you are taking
                            </li>
                            <li>
                                Your surgeon may suggest medical evaluations and lab tests prior to the surgery
                            </li>
                            <li>
                                To reduce the risk of bleeding during surgery, it is advisable to avoid anti-inflammatory drugs, aspirin, supplements, and naturopathic medicines beforehand
                            </li>
                            <li>
                                Refrain from consuming alcohol and tobacco at least two weeks before the surgery
                            </li>
                            <li>
                                Have someone to escort you back after the surgery
                            </li>
                            <li>
                                Arrange for domestic help at home to take care of your kids and the daily activities
                            </li>
                            <li>
                                Apply for at least one week off from the office to take complete rest
                            </li>
                            <li>
                                Do not eat anything at least 8 hours before the surgery
                            </li>
                            <li>
                                keep yourself hydrated with water and other liquid consumables
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="accordion-container">
                    <a onclick="accordion_elm(this)" href="#" class="accordion-toggle">
                        <span>
                            6. What to expect on the day of Buccal Fat Removal surgery?
                        </span>
                        <span class="accordion-icon">
                            <i class="fa fa-chevron-down pull-right" aria-hidden="true"></i>
                        </span>
                    </a>
                    <div class="accordion-content">
                        <ul>
                            <li>
                                On the surgery day, be at the clinic with a relaxed mind
                            </li>
                            <li>
                                Cooperate with the staff in performing your body check-up immediately before the surgery
                            </li>
                            <li>
                                The surgeon or anesthesiologist will ask about your behaviour with anesthesia and adjust the dose accordingly
                            </li>
                            <li>
                                The surgeon will create small incisions inside your cheeks and leave them open to drain
                            </li>
                            <li>
                                You could expect the surgeon to create minor incisions inside both cheeks and leave them open to drain. These will disappear own within 2-3 days
                            </li>
                            <li>
                                Buccal Fat Removal in <?= ucwords($city) ?> will take around 30 minutes to complete, which is much less time compared to other surgeries.
                            </li>
                            <li>
                                After the surgery, you may experience swelling on your face, which will vanish in a few days
                            </li>
                            <li>
                                As a favourable outcome, you will get appealing cheeks with less fat
                            </li>
                            <li>
                                In rare instances, if the results do not turn out as expected, the surgeon might suggest you undergo another procedure
                            </li>
                            <li>
                                In any case, you should have realistic expectations with the Buccal Fat Removal surgery in <?= ucwords($city) ?>
                            </li>
                        </ul>
                    </div>
                </div>

            </div>
        <?php } elseif ($surgery_str == "ear surgery") { ?>
            <div class="col padd-null">
                <div class="top-content">
                    <p>
                        Do you want to regain your damaged or weird-looking ears back in their natural form? If yes, Ear Surgery is the best solution to serve your cause. Also known as Otoplasty or Pinnaplasty, this cosmetic surgery procedure reshapes, resizes, or repositions your ears as per the severity of your case. The treatment helps to regain the natural appearance of your years that have become defective by birth or due to an accident. The Ear Surgery in <?= ucwords($city) ?> performed by our seasoned ear surgeons can also repair perforations, take care of hearing problems, and mitigate the pain resulting from otitis media.
                    </p>
                </div>
                <p class="identity">
                    Why Choose Our Surgeons for Ear Surgery in <?= ucwords($city) ?>?
                </p>
                <ul>
                    <li>
                        Experienced surgeons in <?= ucwords($city) ?> to perform Ear Surgery
                    </li>
                    <li>
                        Work with perfection to help you regain the natural appearance of your ears
                    </li>
                    <li>
                        Extremely qualified and experienced specialists in ear surgeries
                    </li>
                    <li>
                        Members of several national and international associations for plastic surgery
                    </li>
                    <li>
                        Care about patient’s concerns and their expectations with the surgery
                    </li>
                </ul>

                <p class="identity">
                    COST OF <?= $surgery_str ?> IN <?= ucwords($city) ?>
                </p>
                <p>
                    The charges for ear reconstruction surgery in <?= ucwords($city) ?> will vary according to the surgeon and the clinic you approach. The cost is likely to include the fees of the surgeon, pre and post-operative care, anesthesia charges, medical facilities, surgery garments, and more. For a better understanding of the cost, you can have a direct appointment with any of our expert ear surgeons in <?= ucwords($city) ?>.
                </p>
                <p class="identity">OUR SERVICES</p>
                <p>
                    Get a rejuvenated ear with carefully done surgery through our expert ear surgeons in <?= ucwords($city) ?>. Whether your bad-shaped ear is the result of a congenital deformity or an accident, our specialist surgeon will make sure to bring it back to its natural shape. The advanced facilities we provide at our clinic will further assist in your surgery. We keep you at the disposal of industry best surgery equipment, caring nursing staff, and refurbished surgery rooms. Contact our ear surgeon to learn more about this treatment. You will leave our clinic, happy and satisfied for sure.
                </p>
                <p class="identity">
                    FAQs on Ear Surgery in <?= ucwords($city) ?>
                </p>
                <!-- ACCODION -->
                <div class="accordion-container">
                    <a onclick="accordion_elm(this)" href="#" class="accordion-toggle">
                        <span>
                            1. Are you a good candidate for Ear Surgery?
                        </span>
                        <span class="accordion-icon">
                            <i class="fa fa-chevron-down pull-right" aria-hidden="true"></i>
                        </span>
                    </a>
                    <div class="accordion-content">
                        <p>
                            To be a suitable candidate for Otoplasty in <?= ucwords($city) ?> would need you to fulfil the following important points:
                        </p>
                        <ul>
                            <li>
                                You are experiencing hearing loss problems
                            </li>
                            <li>
                                You have any of the congenital ear defects such as cagot ear, scroll ear, Stahl’s ear deformity, Wildermuth’s ear, or cleft earlobe
                            </li>
                            <li>
                                You want to correct a previous failed Otoplasty surgery
                            </li>
                            <li>
                                Your ears protrude excessively or are asymmetrical
                            </li>
                            <li>
                                You have a healthy body with no chronic or life-threatening medical conditions that could interfere with healing
                            </li>
                            <li>
                                You are not pregnant or breastfeeding
                            </li>
                            <li>
                                You are a non-smoker and a non-alcoholic
                            </li>
                            <li>
                                You wish to improve the appearance of your uneven ears
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="accordion-container">
                    <a onclick="accordion_elm(this)" href="#" class="accordion-toggle">
                        <span>
                            2. What is the cost of Ear Surgery?
                        </span>
                        <span class="accordion-icon">
                            <i class="fa fa-chevron-down pull-right" aria-hidden="true"></i>
                        </span>
                    </a>
                    <div class="accordion-content">
                        <p>
                            The cost of Ear Surgery in <?= ucwords($city) ?> may range between 40,000 INR - 60,000 INR or more, depending on the hospital, the choice of Surgeon, the type of anesthesia used, and other factors. Fixing an appointment with any of our cosmetic surgeons will help you to get exact figures regarding the Otoplasty.
                        </p>
                    </div>
                </div>
                <div class="accordion-container">
                    <a onclick="accordion_elm(this)" href="#" class="accordion-toggle">
                        <span>
                            3. What are the risks related to Ear Surgery?
                        </span>
                        <span class="accordion-icon">
                            <i class="fa fa-chevron-down pull-right" aria-hidden="true"></i>
                        </span>
                    </a>
                    <div class="accordion-content">
                        <p>
                            Some of the probable risks of Otoplasty are as follows:
                        </p>
                        <ul>
                            <li>
                                Pain, bleeding, or infection at the surgical site
                            </li>
                            <li>
                                Hearing impairment
                            </li>
                            <li>
                                Adverse reactions to anesthesia
                            </li>
                            <li>
                                Asymmetry in the placement of the ear
                            </li>
                            <li>
                                Permanent or temporary scarring
                            </li>
                            <li>
                                Allergic reactions to surgical materials
                            </li>
                            <li>
                                Change in skin sensation
                            </li>
                            <li>
                                Uneven contours resulting in a pinned-back appearance
                            </li>
                            <li>
                                Blocked or stuffy ear
                            </li>
                            <li>
                                Discharge of bloody fluid from the ear canal or the incision site
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="accordion-container">
                    <a onclick="accordion_elm(this)" href="#" class="accordion-toggle">
                        <span>
                            4. When can you go for Ear Surgery?
                        </span>
                        <span class="accordion-icon">
                            <i class="fa fa-chevron-down pull-right" aria-hidden="true"></i>
                        </span>
                    </a>
                    <div class="accordion-content">
                        <p>
                            You can undergo Ear Surgery at any age after your ears develop completely. Usually, human ears grow to their full potential at the age of 5. However, doctors still advise waiting till the kid gets 7 years old to go for the surgery in <?= ucwords($city) ?>. From 7 to adulthood, any time is suitable for the procedure.
                        </p>
                    </div>
                </div>
                <div class="accordion-container">
                    <a onclick="accordion_elm(this)" href="#" class="accordion-toggle">
                        <span>
                            5. What are the things to do before the Ear Surgery?
                        </span>
                        <span class="accordion-icon">
                            <i class="fa fa-chevron-down pull-right" aria-hidden="true"></i>
                        </span>
                    </a>
                    <div class="accordion-content">
                        <p>
                            Before you go under the knife for Otoplasty in <?= ucwords($city) ?>, here are some significant points to care for:
                        </p>
                        <ul>
                            <li>
                                Follow the instructions of your surgeon to prepare well for the ear corrective surgery
                            </li>
                            <li>
                                Undergo any necessary lab tests or medical examinations.
                            </li>
                            <li>
                                Inform your surgeon about any medications you are currently taking
                            </li>
                            <li>
                                Stop consuming tobacco and alcohol at least two weeks before the surgery
                            </li>
                            <li>
                                Arrange for someone to take you home after the surgery,
                            </li>
                            <li>
                                Maintain a positive attitude towards the procedure.
                            </li>
                            <li>
                                Avoid taking any herbal supplements, anti-inflammatory medications, or drugs that could increase bleeding
                            </li>
                            <li>
                                Buy or arrange for clothing such as buttoned shirts that are easy to wear and remove
                            </li>
                            <li>
                                Discuss any concerns or questions you may have about the surgery with your ear surgeon.
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="accordion-container">
                    <a onclick="accordion_elm(this)" href="#" class="accordion-toggle">
                        <span>
                            6. What to expect on the day of Ear surgery?
                        </span>
                        <span class="accordion-icon">
                            <i class="fa fa-chevron-down pull-right" aria-hidden="true"></i>
                        </span>
                    </a>
                    <div class="accordion-content">
                        <ul>
                            <li>
                                Arrive at the clinic with a positive frame of mind on the day of Otoplasty surgery in <?= ucwords($city) ?>
                            </li>
                            <li>
                                Feel relaxed and at ease while the staff performs the necessary checkups on your body
                            </li>
                            <li>
                                The anesthesiologist will administer anesthesia to the selected area
                            </li>
                            <li>
                                The entire surgery will take around 2-3 hours to complete
                            </li>
                            <li>
                                During the treatment, the surgeon will remove, replace, or repair any of the three little middle ear bones (or Ossiculoplasty)
                            </li>
                            <li>
                                You may feel dizziness for a few days after the surgery
                            </li>
                            <li>
                                Ear pain could bother you for around a week after the surgery
                            </li>
                            <li>
                                Make sure to have realistic expectations with the treatment in <?= ucwords($city) ?> for a quick recovery
                            </li>
                        </ul>
                    </div>
                </div>

            </div>
        <?php } elseif ($surgery_str == "breast augmentation") { ?>
            <div class="col padd-null">
                <div class="top-content">
                    <p>
                        <strong>
                            Renowned Surgeons for Breast Augmentation in <?= ucwords($city) ?>
                        </strong>
                    </p>
                    <p>
                        Augmentation mammoplasty or Breast Augmentation aims at enhancing the shape, size, roundness, or completeness of the female breasts. The surgery requires our surgeons in <?= ucwords($city) ?> to use saline, silicone implants beneath the breast tissue. A composite breast implant is also one of the widely used options for Breast Augmentation. With our consummate surgeons working for your cause, you can ensure to regain the appearance of your breasts as per your expectation.
                    </p>
                </div>
                <p class="identity">
                    Why Approach Our Surgeons for Breast Augmentation in <?= ucwords($city) ?>?
                </p>
                <ul>
                    <li>
                        Top plastic surgeons in <?= ucwords($city) ?> for Breast Enhancement
                    </li>
                    <li>
                        Dexterous in fixing all types of Breast Augmentation implants
                    </li>
                    <li>
                        Years of experience in performing successful Breast Augmentation surgeries
                    </li>
                    <li>
                        Interact with the patients directly to know about their reason for the surgery
                    </li>
                    <li>
                        Member of several Plastic Surgery associations in India and abroad
                    </li>
                </ul>
                <p class="identity">
                    COST OF <?= $surgery_str ?> SURGERY IN <?= ucwords($city) ?>
                </p>
                <p>
                    The cost of a breast enhancement procedure depends largely on the type of implant used, the level of medical facilities provided, the fees of the surgeon, anesthesia, and other charges. You can connect directly with our Breast Augmentation surgeon in <?= ucwords($city) ?> to know about the cost of the surgery in detail.
                </p>
                <p class="identity">OUR SERVICES</p>
                <p>
                    Our expert surgeons perform Breast Augmentation surgery in <?= ucwords($city) ?> with due satisfaction and success. Advanced facilities and services at their respective setups, help them further in carrying out the procedure without hassles. Keeping pace with the latest trends in the healthcare domain, our surgeons care to ensure upscale and advanced services.
                </p>
                <p>
                    All our experts leverage sophisticated technical equipment for the surgery and their nursing staff tries its best to attend to all your concerns during the surgery. Fix your appointment with our Breast Augmentation surgeon in <?= ucwords($city) ?> today and get the best possible treatment in our clinic.
                </p>

                <p class="identity">
                    FAQs on Breast Augmentation Surgery in <?= ucwords($city) ?>
                </p>
                <!-- ACCODION -->
                <div class="accordion-container">
                    <a onclick="accordion_elm(this)" href="#" class="accordion-toggle">
                        <span>
                            1. Are you a good candidate for Breast Augmentation?
                        </span>
                        <span class="accordion-icon">
                            <i class="fa fa-chevron-down pull-right" aria-hidden="true"></i>
                        </span>
                    </a>
                    <div class="accordion-content">
                        <p>
                            You need to abide by the below-mentioned conditions to be a suitable candidate for Breast Augmentation surgery in <?= ucwords($city) ?>:
                        </p>
                        <ul>
                            <li>
                                No plans for childbearing anytime soon
                            </li>
                            <li>
                                No pregnancy goals or breastfeeding activities
                            </li>
                            <li>
                                Wish to restore the appearance of breasts as they used to be before pregnancy
                            </li>
                            <li>
                                Want to break free from asymmetrical, flattened, or sagging breasts
                            </li>
                            <li>
                                Unable to maintain proper cleavage
                            </li>
                            <li>
                                Good overall health
                            </li>
                            <li>
                                No severe medical condition
                            </li>
                            <li>
                                Non-alcoholic and a non-smoker
                            </li>
                            <li>
                                Realistic goals with the surgery
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="accordion-container">
                    <a onclick="accordion_elm(this)" href="#" class="accordion-toggle">
                        <span>
                            2. What is the cost of Breast Augmentation?
                        </span>
                        <span class="accordion-icon">
                            <i class="fa fa-chevron-down pull-right" aria-hidden="true"></i>
                        </span>
                    </a>
                    <div class="accordion-content">
                        <p>
                            The cost of Breast Augmentation surgery in <?= ucwords($city) ?> may range between 1,00,000 INR and 1,50,000 INR or even more. Much will rely on the breast implant technique used. Consulting any of our surgeons will help you to know the actual cost of the procedure
                        </p>
                    </div>
                </div>
                <div class="accordion-container">
                    <a onclick="accordion_elm(this)" href="#" class="accordion-toggle">
                        <span>
                            3. What are the risks related to Breast Augmentation?
                        </span>
                        <span class="accordion-icon">
                            <i class="fa fa-chevron-down pull-right" aria-hidden="true"></i>
                        </span>
                    </a>
                    <div class="accordion-content">
                        <ul>
                            <li>
                                Reduced sensation in nipples and breasts
                            </li>
                            <li>
                                changed in the implant position
                            </li>
                            <li>
                                Adverse reaction to anesthesia
                            </li>
                            <li>
                                rupture or leakage in the breast implants
                            </li>
                            <li>
                                Fluid build-up, leading to seroma
                            </li>
                            <li>
                                Chances of Hematoma or blood accumulation in the treated a
                            </li>
                            <li>
                                Risk of blood leakage from blood vessels after Breast Augmentation, which may cause hematoma
                            </li>
                            <li>
                                Asymmetrical breasts after the surgery
                            </li>
                            <li>
                                Persistent pain in the surgical site
                            </li>
                            <li>
                                Possibility of revisional surgery
                            </li>
                            <li>
                                Formation of scars near the implant
                            </li>
                            <li>
                                intense pain in the treated area
                            </li>
                            <li>
                                Chances of infection, swelling, bruising, etc.
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="accordion-container">
                    <a onclick="accordion_elm(this)" href="#" class="accordion-toggle">
                        <span>
                            4. When can you go for Breast Augmentation?
                        </span>
                        <span class="accordion-icon">
                            <i class="fa fa-chevron-down pull-right" aria-hidden="true"></i>
                        </span>
                    </a>
                    <div class="accordion-content">
                        <p>
                            Any time after a woman’s breasts get fully developed is a good time to go for Breast Augmentation surgery in <?= ucwords($city) ?>. To be precise, you should be at least 18 years old to undergo the procedure. A majority of women opt for this surgery in <?= ucwords($city) ?> when they are between their 20s and 30 as they are likely to be healthier, well-developed, more aware, and duly prepared for the surgery in this age group.
                        </p>
                    </div>
                </div>
                <div class="accordion-container">
                    <a onclick="accordion_elm(this)" href="#" class="accordion-toggle">
                        <span>
                            5. What are the things to do before Breast Augmentation Surgery?
                        </span>
                        <span class="accordion-icon">
                            <i class="fa fa-chevron-down pull-right" aria-hidden="true"></i>
                        </span>
                    </a>
                    <div class="accordion-content">
                        <ul>
                            <li>
                                Consult your surgeon to clear your doubt about the surgery, if any
                            </li>
                            <li>
                                Drink ample water to keep your body hydrated
                            </li>
                            <li>
                                Avoid eating something after midnight prior to the surgery in <?= ucwords($city) ?>
                            </li>
                            <li>
                                Take a balanced and healthy diet
                            </li>
                            <li>
                                Avoid smoking and drinking alcohol for at least 2 weeks before the surgery
                            </li>
                            <li>
                                Keep your body properly hydrated with water
                            </li>
                            <li>
                                Eat a healthy diet
                            </li>
                            <li>
                                Avoid eating or drinking anything after midnight to tolerate the effect of anaesthesia
                            </li>
                            <li>
                                Wash your body properly with an antimicrobial soap
                            </li>
                            <li>
                                Avoid putting on any jewellery or piercing during the surgery
                            </li>
                            <li>
                                Make your nails free from polish so that the staff could easily measure your oxygen level
                            </li>
                            <li>
                                If you are wearing contact lenses, dentures, etc., make sure to put them off
                            </li>
                            <li>
                                Arrange for someone to take you back after the surgery
                            </li>
                            <li>
                                Have someone to help you at home with your daily chores after the surgery
                            </li>
                            <li>
                                Have some compression bras in advance at home to wear after the surgery during the initial recovery phase.
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="accordion-container">
                    <a onclick="accordion_elm(this)" href="#" class="accordion-toggle">
                        <span>
                            6. What to expect on the day of Breast Augmentation surgery?
                        </span>
                        <span class="accordion-icon">
                            <i class="fa fa-chevron-down pull-right" aria-hidden="true"></i>
                        </span>
                    </a>
                    <div class="accordion-content">
                        <ul>
                            <li>
                                You should bear a cool and calm mind on the surgery day in <?= ucwords($city) ?>
                            </li>
                            <li>
                                The anesthesiologist will administer anesthesia based on your past reactions to it
                            </li>
                            <li>
                                The surgeon will create an incision to place the breast implants
                            </li>
                            <li>
                                You could expect the procedure to take around 1-2 hours or more depending on the severity of the surgery
                            </li>
                            <li>
                                You could expect a feeling of stretching or pulling in the treated area
                            </li>
                            <li>
                                In the starting days after the surgery, you may feel tiredness and reduced energy
                            </li>
                            <li>
                                You may also experience persistent pain, which will vanish in a week or two
                            </li>
                            <li>
                                You should have realistic expectations with the surgery
                            </li>
                        </ul>
                    </div>
                </div>

            </div>
        <?php } elseif ($surgery_str == "breast lift") { ?>
            <div class="col padd-null">
                <div class="top-content">
                    <p>
                        Do you want to get rid of excess skin accumulated on your breasts to avoid that sagging appearance? A Breast Lift is a preferred surgery option in <?= ucwords($city) ?> to remedy your situation. Our experienced plastic surgeons can help you get an appealing Breast Lift by removing the unwanted skin and reshaping the breast tissue. Also termed Mastopexy, females prefer opting for this surgery after delivery to avoid experiencing droopy breasts.
                    </p>
                </div>
                <p class="identity">
                    Why Are Our Surgeons the Best for a Breast Lift in <?= ucwords($city) ?>?
                </p>
                <ul>
                    <li>
                        Renowned plastic surgeons in <?= ucwords($city) ?> for Breast Lift
                    </li>
                    <li>
                        Experienced in delivering thriving results in the form of firmer and contoured breasts
                    </li>
                    <li>
                        Take care of the right nipple position and reduced areola size during the surgery
                    </li>
                    <li>
                        Instil confidence among women with Breast Lift surgeries
                    </li>
                    <li>
                        Cost-effective Breast Lift surgeons in <?= ucwords($city) ?>
                    </li>
                </ul>
                <p class="identity">
                    COST OF <?= $surgery_str ?> SURGERY IN <?= ucwords($city) ?></p>
                <p>
                    The estimated cost of Breast Lift surgery relies on the type of Breast Lift procedure used, accreditation, surgical facilities utilised, and the surgeon’s experience. The cost of this surgery also includes the charges for administering anesthesia, prescribed medication, medical tests, surgical facility, post-surgery garments, and more. Interacting with any of our Breast Lift surgeons will give you a better idea about the involved cost.
                </p>
                <p class="identity">OUR SERVICES</p>
                <p>
                    Our Breast Lift surgeons hold high credibility in performing successful procedures, thereby rebuilding confidence among the patients. Whether you are opting for a primary Breast Lift or a revision Breast Lift, our surgeons will provide you with all the requisite facilities necessary for the procedure. Their advanced medical equipment, facilities, and cordial nursing staff will make you feel comfortable during the surgery. Feel free to contact any of our expert Breast Lift surgeons in <?= ucwords($city) ?> to give an effective lift to your sagging breasts.
                </p>
                <p class="identity">
                    FAQs on Breast Lift Surgery in <?= ucwords($city) ?>
                </p>

                <!-- ACCODION -->
                <div class="accordion-container">
                    <a onclick="accordion_elm(this)" href="#" class="accordion-toggle">
                        <span>
                            1. Are you a good candidate for Breast Lift surgery?
                        </span>
                        <span class="accordion-icon">
                            <i class="fa fa-chevron-down pull-right" aria-hidden="true"></i>
                        </span>
                    </a>
                    <div class="accordion-content">
                        <p>
                            To be an ideal candidate for Breast Lift surgery in <?= ucwords($city) ?>, you would need to fulfil the following pointers:
                        </p>
                        <ul>
                            <li>
                                Sagging breasts because of pregnancy, breastfeeding, ageing, or weight change
                            </li>
                            <li>
                                Good overall health with a consistent body weight
                            </li>
                            <li>
                                Nipples and areolas pointing downwards
                            </li>
                            <li>
                                Flat, pendulous, and elongated breasts
                            </li>
                            <li>
                                Stretched skin with enlarged areolas
                            </li>
                            <li>
                                Non-smoker and non-alcoholic
                            </li>
                            <li>
                                Realistic goals regarding the surgery
                            </li>
                            <li>
                                Sagging breasts are affecting your professional life, especially if you are into acting or modelling
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="accordion-container">
                    <a onclick="accordion_elm(this)" href="#" class="accordion-toggle">
                        <span>
                            2. What is the cost of a Breast Lift surgery?
                        </span>
                        <span class="accordion-icon">
                            <i class="fa fa-chevron-down pull-right" aria-hidden="true"></i>
                        </span>
                    </a>
                    <div class="accordion-content">
                        <p>
                            The cost of Breast Lift surgery in <?= ucwords($city) ?> will fall somewhere between 1,50,000 INR to 2,0,000 INR. Additional procedures like Breast Implants will add up to your expenditure accordingly. Feel free to consult any of our experienced surgeons to get detailed info on the involved cost.
                        </p>
                    </div>
                </div>
                <div class="accordion-container">
                    <a onclick="accordion_elm(this)" href="#" class="accordion-toggle">
                        <span>
                            3. What are the risks related to Breast Lifts?
                        </span>
                        <span class="accordion-icon">
                            <i class="fa fa-chevron-down pull-right" aria-hidden="true"></i>
                        </span>
                    </a>
                    <div class="accordion-content">
                        <p>
                            There can be several risks associated with Breast Lift surgery in <?= ucwords($city) ?> on rare occasions.
                        </p>
                        <ul>
                            <li>
                                Allergic reaction to anesthesia
                            </li>
                            <li>
                                Possibility of Hematoma that leads to clotting of a pool of blood in the incision area
                            </li>
                            <li>
                                Chances of infection at the surgical site
                            </li>
                            <li>
                                Excessive bleeding due to the intake of anti-inflammatory medicines before the surgery
                            </li>
                            <li>
                                Asymmetrical breasts with uneven shape and irregular contour
                            </li>
                            <li>
                                Temporary or permanent change in sensation in the breast or
                            </li>
                            <li>
                                Deep vein thrombosis complications
                            </li>
                            <li>
                                Cardiac and pulmonary complications
                            </li>
                            <li>
                                Fat necrosis or dead fatty tissue found deep inside the skin
                            </li>
                            <li>
                                Delayed healing because of poorly treated incisions
                            </li>
                            <li>
                                Revision Breast Lift surgery
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="accordion-container">
                    <a onclick="accordion_elm(this)" href="#" class="accordion-toggle">
                        <span>
                            4. When can you go for Breast Lift?
                        </span>
                        <span class="accordion-icon">
                            <i class="fa fa-chevron-down pull-right" aria-hidden="true"></i>
                        </span>
                    </a>
                    <div class="accordion-content">
                        <p>
                            Having completely developed breasts is one of the primary conditions to go for a Breast Lift surgery. You can be a teenager, in your 20s, or maybe older. But if you satisfy this one condition, you can opt for the surgery without hassles. Women often consider this procedure in <?= ucwords($city) ?> due to improve their breast size that has become badly shaped due to pregnancy-related issues, weight changes, or genetic reasons,
                        </p>
                    </div>
                </div>
                <div class="accordion-container">
                    <a onclick="accordion_elm(this)" href="#" class="accordion-toggle">
                        <span>
                            5. What are the things to do before Breast Lift Surgery?
                        </span>
                        <span class="accordion-icon">
                            <i class="fa fa-chevron-down pull-right" aria-hidden="true"></i>
                        </span>
                    </a>
                    <div class="accordion-content">
                        <p>
                            The points below can prove helpful to consider before going for the Breast Lift surgery in <?= ucwords($city) ?>:
                        </p>
                        <ul>
                            <li>
                                Follow the instructions of your surgeon to undergo medical evaluation or lab testing.
                            </li>
                            <li>
                                Inform your surgeon about any medications you are taking to help him make proper adjustments accordingly
                            </li>
                            <li>
                                A baseline mammogram before and after the surgery can help to detect any changes in breast tissue
                            </li>
                            <li>
                                Refrain from taking supplements, anti-inflammatory drugs, aspirin, or any other medication that could increase bleeding
                            </li>
                            <li>
                                Avoid consuming alcohol or tobacco products for at least 2-3 weeks prior to the surgery
                            </li>
                            <li>
                                Discuss any concerns you may have about the procedure, expected outcomes, and recovery period with your surgeon.
                            </li>
                            <li>
                                Make sure to maintain realistic expectations regarding the surgery results
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="accordion-container">
                    <a onclick="accordion_elm(this)" href="#" class="accordion-toggle">
                        <span>
                            6. What to expect on the day of Breast Lift surgery?
                        </span>
                        <span class="accordion-icon">
                            <i class="fa fa-chevron-down pull-right" aria-hidden="true"></i>
                        </span>
                    </a>
                    <div class="accordion-content">
                        <ul>
                            <li>
                                You should have a positive attitude with a relaxed mind on the day of surgery in <?= ucwords($city) ?>
                            </li>
                            <li>
                                Depending on the associated complications, the surgeon may around 1 to 2 hours to complete the surgery
                            </li>
                            <li>
                                To prevent swelling and fluid build-up, the surgeon may leave a small tube near the incision site. This tube will be removed a few days after the surgery.
                            </li>
                            <li>
                                You may go home on the same day of your Mastopexy procedure if there is no severe problem
                            </li>
                            <li>
                                You may experience some discomfort around the incision area during or after the surgery.
                            </li>
                            <li>
                                Temporary symptoms such as tightness, bruising, or swelling are likely to occur.
                            </li>
                            <li>
                                You can expect your breast tissues to be reshaped and repositioned after the completion of the Breast Lift surgery in <?= ucwords($city) ?>,
                            </li>
                        </ul>
                    </div>
                </div>

            </div>
        <?php } elseif ($surgery_str == "breast reduction") {  ?>
            <div class="col padd-null">
                <div class="top-content">
                    <p>
                        <strong>
                            Renowned Surgeons in <?= ucwords($city) ?> for Breast Reduction Surgery
                        </strong>
                    </p>
                    <p>
                        Are you unhappy with your extra-large breasts (macromastia) and envy women with comparably smaller breasts? Don’t be! Our plastic surgeons in <?= ucwords($city) ?> can help you with Breast Reduction surgery to get your curves in shape. Also termed as reduction mammoplasty, this procedure requires the removal of excess breast tissue, glandular tissue, and skin to attain a size, which is proportionate to your body. Our experienced surgeons will ensure relief from physical discomfort, back pain, and other problems arising due to large breasts as well.
                    </p>
                </div>
                <p class="identity">
                    Why Are Our Surgeons Best Suited to Perform Breast Reduction in <?= ucwords($city) ?>?
                </p>
                <ul>
                    <li>
                        Adept expertise to perform Breast Reduction surgery in <?= ucwords($city) ?>
                    </li>
                    <li>
                        Expert in performing Vertical Breast Reduction, Liposuction, Scarless Breast Reduction, and Anchor Breast Reduction
                    </li>
                    <li>
                        Help to regain confidence in the patients with reduced breasts
                    </li>
                    <li>
                        Enable the patients to get rid of back, shoulder, and neck pain, droopy big breasts, and the discomfort due to bra strap indentation
                    </li>
                    <li>
                        Perform the surgery at an affordable cost
                    </li>
                </ul>
                <p class="identity">
                    COST OF <?= $surgery_str ?> SURGERY IN <?= ucwords($city) ?>
                </p>
                <p>
                    The cost of Breast Reduction surgery depends largely on the type of Breast Reduction procedure performed. In addition, factors like surgical amenities, surgeon’s expertise and experience, medications, etc. also contribute to deciding the Breast Reduction surgery cost in <?= ucwords($city) ?>. It would be worthwhile to consult our expert plastic surgeon for detailed information on the cost of the surgery.
                </p>
                <p class="identity">
                    OUR SERVICES
                </p>
                <p>
                    Our surgeons provide advanced treatment facilities in <?= ucwords($city) ?> that will make you feel extremely comfortable during the entire surgery. Their surgery rooms comprise all the sophisticated facilities required for breast surgery, including the latest equipment and upscale operation beds. The efficient nursing team of our surgeons cares for you with perfection throughout the surgery. Furthermore, with our consummate Breast Reduction surgeon doing the job, you can feel yourself in the safest hands.
                </p>

                <p class="identity">
                    FAQs on Breast Reduction Surgery in <?= ucwords($city) ?>
                </p>
                <!-- ACCODION -->
                <div class="accordion-container">
                    <a onclick="accordion_elm(this)" href="#" class="accordion-toggle">
                        <span>
                            1. Are you a good candidate for Breast Reduction?
                        </span>
                        <span class="accordion-icon">
                            <i class="fa fa-chevron-down pull-right" aria-hidden="true"></i>
                        </span>
                    </a>
                    <div class="accordion-content">
                        <p>
                            An ideal candidate for Breast Reduction surgery in <?= ucwords($city) ?> should satisfy the below-mentioned criteria:
                        </p>
                        <ul>
                            <li>
                                Extraordinarily large breasts that are becoming hard to manage
                            </li>
                            <li>
                                Healthy body, good enough to withstand the complications of Breast Reduction surgery without hassles
                            </li>
                            <li>
                                Free from any severe medical condition
                            </li>
                            <li>
                                Causing pain in the shoulder, neck, and back
                            </li>
                            <li>
                                Facing several skin conditions, cuts, and rashes in the shoulder because of large breasts
                            </li>
                            <li>
                                Bra straps leading to shoulder indentations
                            </li>
                            <li>
                                Facing problems in carrying out physical activities due to bad posture
                            </li>
                            <li>
                                Non-smoker and non-alcoholic
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="accordion-container">
                    <a onclick="accordion_elm(this)" href="#" class="accordion-toggle">
                        <span>
                            2. What is the cost of Breast Reduction?
                        </span>
                        <span class="accordion-icon">
                            <i class="fa fa-chevron-down pull-right" aria-hidden="true"></i>
                        </span>
                    </a>
                    <div class="accordion-content">
                        <p>
                            The typical cost of a Breast Reduction procedure in <?= ucwords($city) ?> is between 1,00,000 INR to 2,00,000 INR depending on the scale of the surgery. Anyone who has recently undergone the surgery can help you get a better idea of the cost involved. Besides, consulting with your surgeon in <?= ucwords($city) ?> is always advisable to know about the cost of Breast Reduction surgery.
                        </p>
                    </div>
                </div>
                <div class="accordion-container">
                    <a onclick="accordion_elm(this)" href="#" class="accordion-toggle">
                        <span>
                            3. What are the risks related to Breast Reduction?
                        </span>
                        <span class="accordion-icon">
                            <i class="fa fa-chevron-down pull-right" aria-hidden="true"></i>
                        </span>
                    </a>
                    <div class="accordion-content">
                        <ul>
                            <li>
                                Risk of infection
                            </li>
                            <li>
                                Excessive bleeding
                            </li>
                            <li>
                                Accumulation of flood along the incision site, leading to seroma
                            </li>
                            <li>
                                Allergic reactions to anesthesia such as breathing problems
                            </li>
                            <li>
                                Allergic behaviour toward surgery materials, like sutures, lotions, adhesives, etc.
                            </li>
                            <li>
                                reduced sensation in breasts and nipples on a permanent or temporary basis
                            </li>
                            <li>
                                Asymmetrical breasts resulting due to surgery
                            </li>
                            <li>
                                Risk of blood clots or Deep Vein Thrombosis (DVT) after recovery in rare cases
                            </li>
                            <li>
                                Need for correction surgery
                            </li>
                            <li>
                                Partial or permanent nipple loss
                            </li>
                            <li>
                                Damage to nerve cells
                            </li>
                            <li>
                                Excessive scars in rare instances
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="accordion-container">
                    <a onclick="accordion_elm(this)" href="#" class="accordion-toggle">
                        <span>
                            4. When can you go for Breast Reduction?
                        </span>
                        <span class="accordion-icon">
                            <i class="fa fa-chevron-down pull-right" aria-hidden="true"></i>
                        </span>
                    </a>
                    <div class="accordion-content">
                        <p>
                            Ideally, you should be more than 18 years old to opt for this surgery and your breasts must be completely developed. Young girls in their teens who are facing severe back problems can also choose to undergo this surgery in <?= ucwords($city) ?>. Women with large breasts often opt for this procedure in their old age to get rid of poor posture, chronic neck pain, etc.
                        </p>
                    </div>
                </div>
                <div class="accordion-container">
                    <a onclick="accordion_elm(this)" href="#" class="accordion-toggle">
                        <span>
                            5. What are the things to do before Breast Reduction Surgery?
                        </span>
                        <span class="accordion-icon">
                            <i class="fa fa-chevron-down pull-right" aria-hidden="true"></i>
                        </span>
                    </a>
                    <div class="accordion-content">
                        <p>
                            Before going for the Breast Reduction surgery in <?= ucwords($city) ?> you should take care to do the following:
                        </p>
                        <ul>
                            <li>
                                Undergo Mammogram
                            </li>
                            <li>
                                Undergo medical evaluation and tests recommended by your surgeon
                            </li>
                            <li>
                                do not smoke or drink for around 6 weeks before the surgery
                            </li>
                            <li>
                                Maintain a balanced and nutritious diet
                            </li>
                            <li>
                                Keep your body hydrated to avoid hassles during the surgery
                            </li>
                            <li>
                                Arrange for someone to take you home after the surgery
                            </li>
                            <li>
                                Have domestic help to look after you and your kids (if any) after the surgery
                            </li>
                            <li>
                                Buy loose clothes in advance so that you could wear them comfortably later on
                            </li>
                            <li>
                                Prefer having compression garments and clothes with buttons or chains
                            </li>
                            <li>
                                Avoid the consumption of Aspirin, anti-inflammatory drugs, and herbal supplements as they could lead to excessive bleeding
                            </li>
                            <li>
                                Take off from your office before the surgery so that you could get ample time for rest
                            </li>

                        </ul>
                    </div>
                </div>
                <div class="accordion-container">
                    <a onclick="accordion_elm(this)" href="#" class="accordion-toggle">
                        <span>
                            6. What to expect on the day of Breast Reduction surgery?
                        </span>
                        <span class="accordion-icon">
                            <i class="fa fa-chevron-down pull-right" aria-hidden="true"></i>
                        </span>
                    </a>
                    <div class="accordion-content">
                        <ul>
                            <li>
                                Come to the clinic in <?= ucwords($city) ?> with a calm and composed attitude
                            </li>
                            <li>
                                Have a positive attitude toward the surgery
                            </li>
                            <li>
                                Have realistic expectations about the surgery
                            </li>
                            <li>
                                You could expect to get an adjusted dose of anesthesia depending on your past reactions to it
                            </li>
                            <li>
                                Your surgeon will start the surgery by making an incision to reduce fat tissues
                            </li>
                            <li>
                                He will operate on the breast skin to remove excess fat and glandular tissue
                            </li>
                            <li>
                                With this, you could expect the repositioning of the nipple and reduction of the areola
                            </li>
                            <li>
                                The entire surgery may take around 2-3 hours depending on the extent and complications of Breast Reduction
                            </li>
                            <li>
                                You could expect your body to heal completely within 2 to 6 weeks of the surgery
                            </li>
                            <li>
                                The post-operative swelling, scars, and incision lines will diminish in a few weeks after the surgery
                            </li>
                        </ul>
                    </div>
                </div>

            </div>
        <?php } elseif ($surgery_str == "breast implant removal") { ?>
            <div class="col padd-null">
                <div class="top-content">
                    <p>
                        <strong>
                            Well-Known Surgeons in <?= ucwords($city) ?> for Breast Implant Removal Surgery
                        </strong>
                    </p>
                    <p>
                        Many reasons could tend the females to opt for Breast Implant Removal, such as breast cancer or a change in the lifecycle. Many other conditions bleeding, infection, calcium build-up, necrosis, capsular contraction, and more could also prompt them to get away with the implants. The procedure is just opposite to breast augmentation and aims at removing breast implants or revising the breast size and shape. Our skilled plastic surgeons in <?= ucwords($city) ?> hold high end-expertise in performing this surgery with thriving results.
                    </p>
                </div>
                <p class="identity">
                    Why Approach Our Surgeons for Breast Implant Removal in <?= ucwords($city) ?>?
                </p>
                <ul>
                    <li>
                        Best plastic surgeons in <?= ucwords($city) ?> for Breast Implant Removal surgery
                    </li>
                    <li>
                        Expert in removing old implants and replacing them with new ones
                    </li>
                    <li>
                        Repositioning the implants existing in the breasts
                    </li>
                    <li>
                        Removing the implants with no replacement
                    </li>
                    <li>
                        Help women flaunt a confident appearance
                    </li>
                    <li>
                        Extremely qualified and experienced plastic surgeons in <?= ucwords($city) ?>
                    </li>
                </ul>
                <p class="identity">
                    COST OF <?= $surgery_str ?> IN <?= ucwords($city) ?>
                </p>
                <p>
                    The cost of Breast Implant Removal depends mainly upon the expertise of the surgeon, the location of treatment, and the type of procedure. It may include the surgeon’s fee, facilities used during the treatment, post-operative garments, surgeon’s prescription, etc. While some insurance plans may cover Breast Implant Removal in <?= ucwords($city) ?> if deemed medically necessary, the cost of getting new implants may not be covered.
                </p>
                <p class="identity">OUR SERVICES</p>
                <p>
                    Similar to breast augmentation and breast reduction surgeries, we offer comprehensive facilities and services for Breast Implant Removal in <?= ucwords($city) ?>. Our experienced surgeons are committed to providing top-notch treatment facilities, utilising the latest and advanced surgical equipment, and assisting you with the friendly nursing staff. You can expect a fulfilling Breast Implant Removal under the supervision of our qualified and proficient plastic surgeons.
                </p>
                <!-- oooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooo -->
                <p class="identity">
                    FAQs on Breast Implant Removal Surgery in <?= ucwords($city) ?>
                </p>

                <div class="accordion-container">
                    <a onclick="accordion_elm(this)" href="#" class="accordion-toggle">
                        <span>
                            1. Are you a good candidate for Breast Implant Removal?
                        </span>
                        <span class="accordion-icon">
                            <i class="fa fa-chevron-down pull-right" aria-hidden="true"></i>
                        </span>
                    </a>
                    <div class="accordion-content">
                        <p>
                            Conditions that make you a suitable candidate for Breast Implant Removal in <?= ucwords($city) ?> include:
                        </p>
                        <ul>
                            <li>
                                Dissatisfaction with the appearance of breast implants
                            </li>
                            <li>
                                Maintaining a stable weight
                            </li>
                            <li>
                                No severe medical conditions
                            </li>
                            <li>
                                Feeling intense pain or discomfort
                            </li>
                            <li>
                                Implants making breasts too bulky
                            </li>
                            <li>
                                Implant rupture or leakage
                            </li>
                            <li>
                                Realistic expectations with the surgery results
                            </li>
                            <li>
                                Infection due to breast implants
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="accordion-container">
                    <a onclick="accordion_elm(this)" href="#" class="accordion-toggle">
                        <span>
                            2. What is the cost of Breast Implant Removal?
                        </span>
                        <span class="accordion-icon">
                            <i class="fa fa-chevron-down pull-right" aria-hidden="true"></i>
                        </span>
                    </a>
                    <div class="accordion-content">
                        <p>
                            Typically, the cost of Breast Implant Removal surgery in <?= ucwords($city) ?> is around 100,000 INR, but it may vary depending on several factors. For detailed and accurate information about the cost, we recommend scheduling a consultation with any of our experienced cosmetic surgeons.
                        </p>
                    </div>
                </div>
                <div class="accordion-container">
                    <a onclick="accordion_elm(this)" href="#" class="accordion-toggle">
                        <span>
                            3. What are the risks related to Breast Implant Removal?
                        </span>
                        <span class="accordion-icon">
                            <i class="fa fa-chevron-down pull-right" aria-hidden="true"></i>
                        </span>
                    </a>
                    <div class="accordion-content">
                        <p>
                            Mostly the Breast Implant Removal surgery in <?= ucwords($city) ?> will accompany rare or no complications at all. Here are some of the occasional risks that may occur:
                        </p>
                        <ul>
                            <li>
                                Displeasure with the breast appearance post-surgery
                            </li>
                            <li>
                                Anesthesia-related risks
                            </li>
                            <li>
                                Unevenness in breast size and shape
                            </li>
                            <li>
                                Infection due to surgery materials
                            </li>
                            <li>
                                Possibility of bleeding due to the intake of anti-inflammatory medicines
                            </li>
                            <li>
                                Swelling, bruising
                            </li>
                            <li>
                                Formation of seroma or fluid accumulation around the implant site
                            </li>
                            <li>
                                Sagging skin around the breasts
                            </li>
                            <li>
                                Reduced sensation around the nipples
                            </li>
                            <li>
                                Excessive but invisible scarring
                            </li>
                            <li>
                                Possible need for correction surgery in <?= ucwords($city) ?>
                            </li>
                            <li>
                                Rare chance of Deep Vein Thrombosis (DVT)
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="accordion-container">
                    <a onclick="accordion_elm(this)" href="#" class="accordion-toggle">
                        <span>
                            4. When can you go for Breast Implant Removal?
                        </span>
                        <span class="accordion-icon">
                            <i class="fa fa-chevron-down pull-right" aria-hidden="true"></i>
                        </span>
                    </a>
                    <div class="accordion-content">
                        <p>
                            Breast Implant Removal in <?= ucwords($city) ?> is an option for those who are not satisfied with the results of their breast implant surgery. Generally, any healthy adult woman can undergo this procedure. It is however essential to consult with your surgeon about your reasons for implant removal, as he can provide better guidance.
                        </p>
                    </div>
                </div>
                <div class="accordion-container">
                    <a onclick="accordion_elm(this)" href="#" class="accordion-toggle">
                        <span>
                            5. What are the things to do before Breast Implant Removal Surgery?
                        </span>
                        <span class="accordion-icon">
                            <i class="fa fa-chevron-down pull-right" aria-hidden="true"></i>
                        </span>
                    </a>
                    <div class="accordion-content">
                        <ul>
                            <li>
                                Consult your surgeon about the expected outcomes of the implant removal surgery in <?= ucwords($city) ?> for better preparation
                            </li>
                            <li>
                                Undergo a thorough medical evaluation and complete body check-up to ensure perfect health before the surgery.
                            </li>
                            <li>
                                Make sure to consult your surgeon to adjust your existing medications.
                            </li>
                            <li>
                                Avoid smoking and alcohol consumption to avert the chances of excessive bleeding during the surgery.
                            </li>
                            <li>
                                Do not consume aspirin, anti-inflammatory drugs, and health supplements.
                            </li>
                            <li>
                                Arrange for a caregiver who can take you home after the surgery
                            </li>
                            <li>
                                Have a caregiver at home to assist you with daily activities during the initial few days after the surgery.
                            </li>
                            <li>
                                Wear loose clothes to feel comfortable.
                            </li>
                            <li>
                                Eat a healthy and nutritious diet
                            </li>
                            <li>
                                Keep your body hydrated and additive-free fluids
                            </li>
                            <li>
                                Do not eat anything for around 8 hours before the surgery
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="accordion-container">
                    <a onclick="accordion_elm(this)" href="#" class="accordion-toggle">
                        <span>
                            6. What to expect on the day of Breast Implant Removal surgery?
                        </span>
                        <span class="accordion-icon">
                            <i class="fa fa-chevron-down pull-right" aria-hidden="true"></i>
                        </span>
                    </a>
                    <div class="accordion-content">
                        <ul>
                            <li>
                                It is important to approach the day of Breast Implant Removal surgery in <?= ucwords($city) ?> with a calm and positive mindset.
                            </li>
                            <li>
                                The type and quantity of anesthesia you receive will depend on your ability to tolerate it.
                            </li>
                            <li>
                                The surgeon will create an incision to remove the breast implant.
                            </li>
                            <li>
                                The entire procedure will take around 1-3 hours depending on the presence of excess scar tissues, leakage, or a rupture at the treatment site
                            </li>
                            <li>
                                You may feel pain after the anesthesia effect ends
                            </li>
                            <li>
                                It may take a few weeks to recover from pain, discomfort, swelling, and bruising.
                            </li>
                            <li>
                                Full recovery from the surgery may take about 4-6 weeks.
                            </li>
                            <li>
                                Managing your expectations and having realistic goals is crucial for a successful Breast Implant Removal procedure in <?= ucwords($city) ?>.
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- 00000000000000000000000000000000000000000000000000000000000000000000000 -->
            </div>
        <?php } elseif ($surgery_str == "breast implant revision") { ?>
            <div class="col padd-null">
                <div class="top-content">
                    <p>
                        <strong>
                            The Well-Known Surgeons in <?= ucwords($city) ?> for Breast Implant Revision Surgery
                        </strong>
                    </p>
                    <p>
                        Breast implant revision aims at improving the appearance of female breasts by replacing old implants with new ones. This may tend the plastic surgeons in <?= ucwords($city) ?> to increase or decrease the implant size, reduce breast size or lift it. Typically, women may consider breast revision surgery around 10 or more years after breast implant surgery. The purpose may be to improve the aesthetic appearance of the breasts, prevent sagging breasts due to dislocated implants, or address issues such as implant leakage or rupture.
                    </p>
                </div>
                <p class="identity">
                    Why Are Our Surgeons the Best for Breast Implant Revision in <?= ucwords($city) ?>?
                </p>
                <ul>
                    <li>
                        Experienced plastic surgeons in <?= ucwords($city) ?> to perform breast implant revision surgery
                    </li>
                    <li>
                        Expertise in changing the implants from silicone to saline or vice versa
                    </li>
                    <li>
                        Can help to solve implant-related complications through breast revision surgery
                    </li>
                    <li>
                        Experienced to deal with the issues like scarring, rupture, etc., that originated from earlier breast augmentation surgery
                    </li>
                    <li>
                        Help women regain their natural breasts
                    </li>
                </ul>
                <p class="identity">
                    COST OF <?= $surgery_str ?> IN <?= ucwords($city) ?>
                </p>
                <p>
                    The cost of breast implant revision in <?= ucwords($city) ?> will depend on various factors such as the type of breast implant replacement, the expertise of the surgeon, the hospital or clinic, and the geographical location. Depending on the complications resulting from your previous breast implants, your insurance may cover a portion of the surgery cost. If you undergo breast revision surgery within 10 years of the initial surgery, your insurance may also cover the cost of the procedure.
                </p>
                <p class="identity">OUR SERVICES</p>
                <p>
                    Our Surgeons are well equipped with advanced facilities when it comes to performing breast revision surgery in <?= ucwords($city) ?>. You will feel relaxed and at ease during the procedure. Our experienced breast revision surgeons will perform the treatment without hassles and with successful results. Moreover, the assistance of their capable nursing staff, advanced surgery equipment, and the sophisticated operating room will be of great help in the success of your operation. Connect with any of our surgeons today and fix your appointment for the surgery.
                </p>

                <!-- oooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooo -->
                <p class="identity">
                    FAQs on Breast Implant Removal Surgery in <?= ucwords($city) ?>
                </p>

                <div class="accordion-container">
                    <a onclick="accordion_elm(this)" href="#" class="accordion-toggle">
                        <span>
                            1. Are you a good candidate for Breast Revision surgery?
                        </span>
                        <span class="accordion-icon">
                            <i class="fa fa-chevron-down pull-right" aria-hidden="true"></i>
                        </span>
                    </a>
                    <div class="accordion-content">
                        <p>
                            An ideal candidate for Breast Revision surgery in <?= ucwords($city) ?> should meet the following criteria:
                        </p>
                        <ul>
                            <li>
                                Experiencing Capsular contracture or facing implant malposition
                            </li>
                            <li>
                                Having rippling in the breast implant
                            </li>
                            <li>
                                Wish to change the size of the breasts
                            </li>
                            <li>
                                Being in good overall health and free of medical ailments
                            </li>
                            <li>
                                Not happy with breast surgery done earlier due to resulting complications
                            </li>
                            <li>
                                Have realistic expectations for the revision surgery
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="accordion-container">
                    <a onclick="accordion_elm(this)" href="#" class="accordion-toggle">
                        <span>
                            2. What is the cost of Breast Revision?
                        </span>
                        <span class="accordion-icon">
                            <i class="fa fa-chevron-down pull-right" aria-hidden="true"></i>
                        </span>
                    </a>
                    <div class="accordion-content">
                        <p>
                            The average cost of Breast Revision Surgery in <?= ucwords($city) ?> starts from around 1,00,000 INR. The expenses may rise further depending on the complications of the procedure. Factors such as the type and size of the breast implants chosen, the condition of the current implants, and the expertise of the cosmetic surgeon may affect the cost.
                        </p>
                    </div>
                </div>
                <div class="accordion-container">
                    <a onclick="accordion_elm(this)" href="#" class="accordion-toggle">
                        <span>
                            3. What are the risks related to Breast Revision?
                        </span>
                        <span class="accordion-icon">
                            <i class="fa fa-chevron-down pull-right" aria-hidden="true"></i>
                        </span>
                    </a>
                    <div class="accordion-content">
                        <p>
                            Undergoing Breast Revision in <?= ucwords($city) ?> may lead to several risks on an occasional basis:
                        </p>
                        <ul>
                            <li>
                                Bleeding due to smoking or consuming alcohol
                            </li>
                            <li>
                                Possibility of infection because of the use of surgery materials
                            </li>
                            <li>
                                Persistent pain after the effect of anesthesia wears off
                            </li>
                            <li>
                                Bruising in the surgical incision site which will probably vanish in a few days
                            </li>
                            <li>
                                Bad healing of wounds caused due to incisions
                            </li>
                            <li>
                                The condition of Seroma or fluid accumulation in the treated site
                            </li>
                            <li>
                                Chances of dead fatty tissue deep down the skin or Fat necrosis
                            </li>
                            <li>
                                Hanging skin of the breasts
                            </li>
                            <li>
                                Unappealing results with Unusual scarring
                            </li>
                            <li>
                                Change in the shape of breasts and skin sensation
                            </li>
                            <li>
                                The rare possibility of Hematoma
                            </li>
                            <li>
                                Occasional chance of Deep Vein Thrombosis (DVT)
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="accordion-container">
                    <a onclick="accordion_elm(this)" href="#" class="accordion-toggle">
                        <span>
                            4. When can you go for Breast Revision surgery?
                        </span>
                        <span class="accordion-icon">
                            <i class="fa fa-chevron-down pull-right" aria-hidden="true"></i>
                        </span>
                    </a>
                    <div class="accordion-content">
                        <p>
                            Breast Revision surgery in <?= ucwords($city) ?> may become inevitable for the following reasons:
                        </p>
                        <ul>
                            <li>
                                Discomfort or pain caused by the implants
                            </li>
                            <li>
                                Rupture or leakage in the breast implants
                            </li>
                            <li>
                                Bottoming out of the implants, causing them to fall below the breast crease
                            </li>
                            <li>
                                Shifting or rotating the implants
                            </li>
                            <li>
                                Desire to change the size of the breast implants
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="accordion-container">
                    <a onclick="accordion_elm(this)" href="#" class="accordion-toggle">
                        <span>
                            5. What are the things to do before Breast Revision Surgery?
                        </span>
                        <span class="accordion-icon">
                            <i class="fa fa-chevron-down pull-right" aria-hidden="true"></i>
                        </span>
                    </a>
                    <div class="accordion-content">
                        <p>
                            To prepare for Breast Revision Surgery in <?= ucwords($city) ?>, taking the following steps would be advisable:
                        </p>
                        <ul>
                            <li>
                                Schedule a consultation with your surgeon to discuss the benefits and risks of the procedure.
                            </li>
                            <li>
                                Share your previous experience with breast surgery with the surgeon to help him tailor the revision surgery to your needs.
                            </li>
                            <li>
                                Plan to take at least one week off work after the surgery.
                            </li>
                            <li>
                                Purchase comfortable clothing to wear during the recovery period.
                            </li>
                            <li>
                                Refrain from smoking or consuming alcohol leading up to the surgery.
                            </li>
                            <li>
                                Aim for at least 8 hours of sleep the night before the procedure.
                            </li>
                            <li>
                                Avoid eating or drinking anything for 8 hours prior to the surgery.
                            </li>
                            <li>
                                Stay hydrated by drinking water and other fluids before the surgery.
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="accordion-container">
                    <a onclick="accordion_elm(this)" href="#" class="accordion-toggle">
                        <span>
                            6. What to expect on the day of Breast Revision Surgery?
                        </span>
                        <span class="accordion-icon">
                            <i class="fa fa-chevron-down pull-right" aria-hidden="true"></i>
                        </span>
                    </a>
                    <div class="accordion-content">
                        <ul>
                            <li>
                                Approach the clinic with a positive state of mind.
                            </li>
                            <li>
                                Cooperate with the staff during medical check-ups.
                            </li>
                            <li>
                                The anesthesiologist will adjust the anesthesia dose according to your previous experience with it.
                            </li>
                            <li>
                                To perform the Breast Revision surgery in <?= ucwords($city) ?>, the surgeon will make an incision.
                            </li>
                            <li>
                                The surgery may take at least 45 minutes to 2 hours to complete.
                            </li>
                            <li>
                                The surgeon will do his best to achieve the expected breast shape, size, and texture with the revision surgery.
                            </li>
                            <li>
                                However, the results may not always meet your expectations and may cause disappointment.
                            </li>
                            <li>
                                Therefore, it is good to have realistic expectations for Breast Revision surgery in <?= ucwords($city) ?>.
                            </li>
                            <li>
                                You can usually resume work after 1-2 weeks of the surgery, but the surgeon may advise against vigorous activities for about three weeks.
                            </li>
                            <li>
                                Bruising, swelling, and pain should subside within 2-3 weeks.
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- 00000000000000000000000000000000000000000000000000000000000000000000000 -->
            </div>
        <?php } elseif ($surgery_str == "gynecomastia") { ?>
            <div class="col padd-null">
                <div class="top-content">
                    <p>
                        <strong>
                            Well-Known Surgeons in <?= ucwords($city) ?> for Gynecomastia Surgery
                        </strong>
                    </p>
                    <p>
                        Gynecomastia or reduction mammoplasty refers to the condition of enlarged or extensively developed breasts in men. It may result due to obesity, hormonal modifications, or because of hereditary reasons. If not treated timely, it may lead to lower self-esteem and discomfort. Our gynecomastia surgeons in <?= ucwords($city) ?> hold adept expertise and experience to reduce the extended breasts in males, along with being chest contours back in shape.
                    </p>
                </div>
                <p class="identity">
                    Why Are Our Surgeons the Best for Gynecomastia Surgery in <?= ucwords($city) ?>?
                </p>
                <ul>
                    <li>
                        Highly qualified and experienced to perform gynecomastia surgery in <?= ucwords($city) ?>
                    </li>
                    <li>
                        Can deal with unwanted localized fat and glandular tissue development around the breasts
                    </li>
                    <li>
                        Hold expertise in carrying out liposuction to treat gynecomastia
                    </li>
                    <li>
                        Treat each patient distinctly, as per a tailor-made treatment plan depending on the patient’s medical condition, age, and weight
                    </li>
                </ul>
                <p class="identity">
                    COST OF <?= $surgery_str ?> SURGERY IN <?= ucwords($city) ?>
                </p>
                <p>
                    The cost of this surgery depends on the geographical location, the reputation of the clinic and the surgeon, the fees of the surgeon, and the method to deal with gynecomastia. Besides, the expenses will also subsume anesthesia, medical test, operating room facility, and imaging studies, if any. A candid discussion with any of our surgeons in <?= ucwords($city) ?> can help you serve this purpose the better way.
                </p>
                <p class="identity">OUR SERVICES</p>
                <p>
                    You can rely on the expert medical assistance of our surgeons during your gynecomastia surgery in <?= ucwords($city) ?>. Our highly qualified and consummate surgeons will make sure that you get results as expected. With helpful nursing staff, advanced surgery equipment, and upscale operation rooms, you can undergo surgery without hassles. Feel free to connect with any of our skilled and experienced plastic surgeons and clear all your doubts before going under the knife. For sure, you will leave the clinic in <?= ucwords($city) ?> with more confidence and high self-esteem.
                </p>
                <p class="identity">
                    FAQs on Gynecomastia Surgery in <?= ucwords($city) ?>
                </p>
                <!-- ACCODION -->
                <div class="accordion-container">
                    <a onclick="accordion_elm(this)" href="#" class="accordion-toggle">
                        <span>
                            1. Are you a good candidate for Gynecomastia surgery?
                        </span>
                        <span class="accordion-icon">
                            <i class="fa fa-chevron-down pull-right" aria-hidden="true"></i>
                        </span>
                    </a>
                    <div class="accordion-content">
                        <p>
                            Abiding by the below-mentioned points will help you be an ideal candidate for Gynecomastia surgery in <?= ucwords($city) ?>:
                        </p>
                        <ul>
                            <li>
                                Primary Gynecomastia - You get male boobs at a very early age because of hormonal imbalance
                            </li>
                            <li>
                                Secondary Gynecomastia – You get male breasts due to excessive weight gain immaterial of your age
                            </li>
                            <li>
                                You want to have a better body appearance
                            </li>
                            <li>
                                You are physically fit and have a good overall health
                            </li>
                            <li>
                                You are in the teenage or 20s, as this age group is likely to have higher skin elasticity
                            </li>
                            <li>
                                You do not smoke or drink
                            </li>
                            <li>
                                You have set realistic goals with the surgery
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="accordion-container">
                    <a onclick="accordion_elm(this)" href="#" class="accordion-toggle">
                        <span>
                            2. What is the cost of Gynecomastia surgery?
                        </span>
                        <span class="accordion-icon">
                            <i class="fa fa-chevron-down pull-right" aria-hidden="true"></i>
                        </span>
                    </a>
                    <div class="accordion-content">
                        <p>
                            The cost of male breast surgery in <?= ucwords($city) ?> is likely to fall within the range of 30,000 to 2,00,000 Indian rupees. The total expense of the procedure will also get influenced by the surgical technique employed by the surgeon.
                        </p>
                    </div>
                </div>
                <div class="accordion-container">
                    <a onclick="accordion_elm(this)" href="#" class="accordion-toggle">
                        <span>
                            3. What are the risks related to Gynecomastia surgery?
                        </span>
                        <span class="accordion-icon">
                            <i class="fa fa-chevron-down pull-right" aria-hidden="true"></i>
                        </span>
                    </a>
                    <div class="accordion-content">
                        <p>
                            Here are some of the common risk factors associated with Gynecomastia surgery:
                        </p>
                        <ul>
                            <li>
                                Hematoma or collection of blood between your skin and the muscles due to excessive bleeding after the surgery
                            </li>
                            <li>
                                Accumulation of fluid in the treated area, leading to seroma
                            </li>
                            <li>
                                Allergic behavior to anesthesia
                            </li>
                            <li>
                                Unbearable pain up to a few days after the surgery
                            </li>
                            <li>
                                Harm to deeper structures during the surgery
                            </li>
                            <li>
                                Excessive bleeding, swelling, bruising, etc.
                            </li>
                            <li>
                                Venous Thrombosis or Cardiopulmonary issues
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="accordion-container">
                    <a onclick="accordion_elm(this)" href="#" class="accordion-toggle">
                        <span>
                            4. When can you go for Gynecomastia surgery?
                        </span>
                        <span class="accordion-icon">
                            <i class="fa fa-chevron-down pull-right" aria-hidden="true"></i>
                        </span>
                    </a>
                    <div class="accordion-content">
                        <p>
                            A majority of surgeons in <?= ucwords($city) ?> suggest that individuals with Gynecomastia should wait until they attain the age of 18 years old before considering surgery. By this age, the human body is likely to have developed to its maximum potential. Generally, older men are more inclined to undergo this procedure.
                        </p>
                    </div>
                </div>
                <div class="accordion-container">
                    <a onclick="accordion_elm(this)" href="#" class="accordion-toggle">
                        <span>
                            5. What are the things to do before Gynecomastia surgery?
                        </span>
                        <span class="accordion-icon">
                            <i class="fa fa-chevron-down pull-right" aria-hidden="true"></i>
                        </span>
                    </a>
                    <div class="accordion-content">
                        <ul>
                            <li>
                                Avoid blood thinners like aspirin, anti-inflammatory drugs, and supplements to decrease the risk of excessive blood loss.
                            </li>
                            <li>
                                Consult with your doctor and adjust medications as required.
                            </li>
                            <li>
                                Complete all necessary diagnostic tests to ensure perfect health for the surgery.
                            </li>
                            <li>
                                Quit smoking or alcohol consumption at least two weeks before the procedure.
                            </li>
                            <li>
                                Follow your surgeon's instructions to modify your medications accordingly.
                            </li>
                            <li>
                                Do not take supplements or drugs that have blood-thinning properties.
                            </li>
                            <li>
                                Maintain an 8-hour gap between your last meal and the surgery.
                            </li>
                            <li>
                                Avoid drinking water or any other fluids for at least 6 hours before the procedure.
                            </li>
                            <li>
                                Arrange for someone to assist you in returning home after the surgery.
                            </li>
                            <li>
                                Wear a compression garment in the first 24 hours after the procedure to reduce pain and swelling
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="accordion-container">
                    <a onclick="accordion_elm(this)" href="#" class="accordion-toggle">
                        <span>
                            6. What to expect on the day of Gynecomastia surgery?
                        </span>
                        <span class="accordion-icon">
                            <i class="fa fa-chevron-down pull-right" aria-hidden="true"></i>
                        </span>
                    </a>
                    <div class="accordion-content">
                        <ul>
                            <li>
                                On the day of Gynecomastia surgery, it is good to arrive at the clinic with a positive mindset.
                            </li>
                            <li>
                                You could expect the duration of the procedure to range from 1 to 2 hours, depending on the amount of tissue removal required.
                            </li>
                            <li>
                                In some cases, the surgeon may also perform liposuction in the chest to achieve optimal results.
                            </li>
                            <li>
                                The expert will create small incisions in the treatment area to carry out the procedure.
                            </li>
                            <li>
                                After the completion of the surgery in <?= ucwords($city) ?>, you may experience mild soreness in the initial days.
                            </li>
                            <li>
                                It is essential to maintain realistic expectations concerning the outcomes of the surgery.
                            </li>
                            <li>
                                The healing time will depend largely on the way you follow the recovery instructions from your surgeon
                            </li>
                            <li>
                                You may feel some pain, swelling, or bruising in the initial days, which will vanish with time.
                            </li>
                            <li>
                                After the successful completion, you can expect a positive change in your overall appearance
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        <?php } elseif ($surgery_str == "liposuction") { ?>
            <div class="col padd-null">
                <div class="top-content">
                    <p>
                        <strong>
                            Struggling to lose that extra flab on your body?
                        </strong>
                    </p>
                    <p>
                        Liposuction can help you out. Yes! It is usual to develop unwanted fat on your belly, hips, thighs, arms, or face. Nevertheless, if despite exercising or regular dieting you are not able to lose it, Liposuction is a befitting solution. Consulting any of our ideal plastic surgeons in <?= ucwords($city) ?> can assist in getting you rid of uninvited fat.
                    </p>
                </div>
                <p class="identity">
                    Why Choose Our Cosmetic Surgeons for Liposuction in <?= ucwords($city) ?>?
                </p>
                <ul>
                    <li>
                        Trustworthy plastic surgeons in <?= ucwords($city) ?>, with expertise in performing Liposuction
                    </li>
                    <li>
                        Capable of performing the surgery on any part of your body
                    </li>
                    <li>
                        Leverage advanced fat reduction techniques leaving behind minimal scars
                    </li>
                    <li>
                        Assist you regain your lost confidence with a successful Liposuction surgery in <?= ucwords($city) ?>
                    </li>
                    <li>
                        Can perform several treatments like Ultrasound-Assisted Liposuction, Tumescent Liposuction, Power-Assisted Liposuction, and Suction-Assisted Liposuction with ease
                    </li>
                    <li>
                        Renowned plastic surgeons in <?= ucwords($city) ?> with years of experience in carrying out Liposuction surgery with positive results
                    </li>
                    <li>
                        Members of several Plastic surgery associations in India and worldwide
                    </li>
                </ul>
                <p class="identity">
                    COST OF <?= $surgery_str ?> IN <?= ucwords($city) ?>
                </p>
                <p>
                    Different plastic surgeons will quote different charges for Liposuction surgery. This will however exclude the cost of clinic facilities, medical tests, pre-operative scans, surgeon’s fees, anesthesia, and more. Moreover, the cost of Liposuction may also increase depending on the severity of the treatment area. For instance, parts like inner thighs or chins can cost dearer as compared to other locations.
                </p>

                <p class="identity">
                    OUR SERVICES
                </p>
                <p>
                    We help you get the best Liposuction surgery in <?= ucwords($city) ?> under the supervision of our experienced plastic surgeons. With us, you can make the most of advanced surgery equipment, upscale Liposuction procedures, amicable hospital staff members, and the best cleanliness you could ever expect. Feel free to consult our bankable Liposuction surgeons in <?= ucwords($city) ?> and put forth your first step toward regaining a fat-free body.
                </p>
                <p class="identity">
                    FAQs on Liposuction Surgery in <?= ucwords($city) ?>:
                </p>
                <!-- ACCODION -->
                <div class="accordion-container">
                    <a onclick="accordion_elm(this)" href="#" class="accordion-toggle">
                        <span>
                            1. Are you a good candidate for Liposuction?
                        </span>
                        <span class="accordion-icon">
                            <i class="fa fa-chevron-down pull-right" aria-hidden="true"></i>
                        </span>
                    </a>
                    <div class="accordion-content">
                        <p>
                            To be an ideal candidate for Liposuction in <?= ucwords($city) ?> you should satisfy the following conditions:
                        </p>
                        <ul>
                            <li>
                                Your weight is close to 30% of your ideal weight
                            </li>
                            <li>
                                Your fat deposits cease to go away despite regular exercising and having a balanced diet
                            </li>
                            <li>
                                You are not feeling positive about the excess fat deposits on your body
                            </li>
                            <li>
                                You are extremely overweight and it is affecting your daily life
                            </li>
                            <li>
                                You want to restore your appearance, lost due to excessive weight
                            </li>
                            <li>
                                You are a non-smoker and a non-alcoholic person
                            </li>
                            <li>
                                You have realistic expectations with the surgery
                            </li>
                            <li>
                                You are a model or an actor, and your unwanted fat is creating obstacles in your professional life
                            </li>
                            <li>
                                You are ready to follow the instructions of your surgeon after undergoing the procedure
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="accordion-container">
                    <a onclick="accordion_elm(this)" href="#" class="accordion-toggle">
                        <span>
                            2. What is the cost of Liposuction surgery?
                        </span>
                        <span class="accordion-icon">
                            <i class="fa fa-chevron-down pull-right" aria-hidden="true"></i>
                        </span>
                    </a>
                    <div class="accordion-content">
                        <p>
                            The surgery for Liposuction in <?= ucwords($city) ?> may go up to 1.5 lakhs depending on the surgeon you choose and various other factors. It would be best to consult any of our surgeons to know the actual cost of Liposuction surgery.
                        </p>
                    </div>
                </div>
                <div class="accordion-container">
                    <a onclick="accordion_elm(this)" href="#" class="accordion-toggle">
                        <span>
                            3. What are the risks related to Liposuction?
                        </span>
                        <span class="accordion-icon">
                            <i class="fa fa-chevron-down pull-right" aria-hidden="true"></i>
                        </span>
                    </a>
                    <div class="accordion-content">
                        <p>
                            Among the prominent risks and complications related to Liposuction surgery in <?= ucwords($city) ?> include the following:
                        </p>
                        <ul>
                            <li>
                                Contour irregularities like bumpy skin, uneven fat removal, scarring, poor skin elasticity
                            </li>
                            <li>
                                Life-threatening skin infection
                            </li>
                            <li>
                                Formation of pockets of Fluid known as seroma, which are better to drain out with a needle before they could damage your body
                            </li>
                            <li>
                                Temporary or permanent loss of sensation in the incision site
                            </li>
                            <li>
                                Unusually deep penetration of the thin tube during the surgery, which could puncture
                            </li>
                            <li>
                                Life-threatening lung, kidney, and heart problems in case of excessive Liposuction
                            </li>
                            <li>
                                Intense pain after the surgery
                            </li>
                            <li>
                                Possibility of swelling or bruising in the treated area
                            </li>
                            <li>
                                Uncontrolled bleeding due to the intake of anti-inflammatory medicines
                            </li>
                            <li>
                                Chance of correction surgery
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="accordion-container">
                    <a onclick="accordion_elm(this)" href="#" class="accordion-toggle">
                        <span>
                            4. When can you go for Liposuction?
                        </span>
                        <span class="accordion-icon">
                            <i class="fa fa-chevron-down pull-right" aria-hidden="true"></i>
                        </span>
                    </a>
                    <div class="accordion-content">
                        <p>
                            Skin elasticity of the human body is the best between the age of 30 and 35 years. Hence, if you are in this age bracket, it is the right time to go for Liposuction surgery in <?= ucwords($city) ?>. Consultation with any of our surgeons will help you to know more about the right time to opt for Liposuction.
                        </p>
                    </div>
                </div>
                <div class="accordion-container">
                    <a onclick="accordion_elm(this)" href="#" class="accordion-toggle">
                        <span>
                            5. What are the things to do before Liposuction Surgery?
                        </span>
                        <span class="accordion-icon">
                            <i class="fa fa-chevron-down pull-right" aria-hidden="true"></i>
                        </span>
                    </a>
                    <div class="accordion-content">
                        <ul>
                            <li>
                                Try to attain your target weight or at least reach close to it before the surgery
                            </li>
                            <li>
                                Focus on muscle-building months before undergoing the surgery in <?= ucwords($city) ?>
                            </li>
                            <li>
                                Make sure to eat a healthy and balanced diet
                            </li>
                            <li>
                                Stop the use of nicotine, as its presence could impact the results of plastic surgery adversely
                            </li>
                            <li>
                                Prepare your home for the recovery period before leaving for the surgery
                            </li>
                            <li>
                                Ask someone’s help to take you back after the surgery
                            </li>
                            <li>
                                Arrange for someone in the home to help you with daily activities
                            </li>
                            <li>
                                Keep your body perfectly hydrated
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="accordion-container">
                    <a onclick="accordion_elm(this)" href="#" class="accordion-toggle">
                        <span>
                            6. What to expect on the day of liposuction surgery?
                        </span>
                        <span class="accordion-icon">
                            <i class="fa fa-chevron-down pull-right" aria-hidden="true"></i>
                        </span>
                    </a>
                    <div class="accordion-content">
                        <ul>
                            <li>
                                When going for Liposuction surgery in <?= ucwords($city) ?>, have a calm and composed mind
                            </li>
                            <li>
                                Cooperate with the staff in the clinic in their routine activities
                            </li>
                            <li>
                                Inform the anesthesia expert if you have a history of adverse reactions to anesthesia
                            </li>
                            <li>
                                Consult your surgeon about your apprehensions and concerns regarding the surgery, if any
                            </li>
                            <li>
                                You could expect the surgeon to create an incision on the target area to perform Liposuction
                            </li>
                            <li>
                                The surgeon would take around 1-2 hours to perform the entire Liposuction procedure depending on the area that needs treatment
                            </li>
                            <li>
                                You could expect speedy recovery depending on the extent to which you abide by the instructions of your surgeon
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        <?php } elseif ($surgery_str == "tummy tuck") {  ?>
            <div class="col padd-null">
                <div class="top-content">
                    <p>
                        <strong>
                            The Expert Tummy Tuck Surgeons in <?= ucwords($city) ?>
                        </strong>
                    </p>
                    <p>
                        Are you fed up with excess fat on your belly and cannot wait to get rid of it? Tummy tuck surgery is the best solution for your problem. Also known as abdominoplasty, this surgery helps to get a more flat and firm abdomen. It also tightens and repairs the underlying tendons and muscles. Consulting our tummy tuck surgeons in <?= ucwords($city) ?> will be beneficial to enable you to break free from your fat.
                    </p>
                </div>
                <p class="identity">
                    Why Approach Our Plastic Surgeons for Tummy Tuck Surgery in <?= ucwords($city) ?>?
                </p>
                <ul>
                    <li>
                        Perform careful tummy tuck surgery to ensure a smoother abdomen for the patients
                    </li>
                    <li>
                        Eliminate stubborn fat stuck up in the abdomen and tighten the loose skin
                    </li>
                    <li>
                        Restore and repair weak and separated stomach muscles
                    </li>
                    <li>
                        Help the patients get a well-toned and appealing body
                    </li>
                    <li>
                        Works appreciably to furnish the results as per the expectations of the patients
                    </li>
                </ul>
                <p class="identity">
                    COST OF <?= $surgery_str ?> IN <?= ucwords($city) ?>
                </p>
                <p>
                    The charges of the abdominoplasty in <?= ucwords($city) ?> will depend largely on the experience of the surgeon, the type of surgery done, and the location of the clinic. Additionally, factors like surgical facilities in the operating room, anesthesia, post-surgery garments, and medical tests also play an important role in fixing the cost of surgery. It is best to discuss the cost of tummy tuck surgery with our experienced plastic surgeon. Mostly, insurance companies do not cover this procedure, so make sure to clarify with your medical insurance provider if they will consider insurance for Tummy Tuck surgery.
                </p>

                <p class="identity">OUR SERVICES</p>
                <p>
                    Our surgeons provide industry best amenities in their clinics in <?= ucwords($city) ?>. While you opt to undergo the tummy tuck surgery from our experienced surgeons, you can remain rest assured of a satiating treatment. Their nursing staff will be prompt to attend to your necessities. Further, they also offer the best operating room facilities and advanced medical equipment to ease the entire procedure. Feel free to connect with any of our surgeons to get detailed information about the tummy tuck surgery at our end.
                </p>

                <p class="identity">
                    FAQs on Tummy Tuck Surgery in <?= ucwords($city) ?>
                </p>
                <!-- ACCODION -->
                <div class="accordion-container">
                    <a onclick="accordion_elm(this)" href="#" class="accordion-toggle">
                        <span>
                            1. Are you a good candidate for Tummy Tuck surgery?
                        </span>
                        <span class="accordion-icon">
                            <i class="fa fa-chevron-down pull-right" aria-hidden="true"></i>
                        </span>
                    </a>
                    <div class="accordion-content">
                        <ul>
                            <li>
                                These conditions will necessitate your candidature for Tummy Tuck surgery n <?= ucwords($city) ?>
                            </li>
                            <li>
                                Good overall health, free of any chronic disease
                            </li>
                            <li>
                                Wish to break free from unwanted fat tissues accumulated on your abs and waist
                            </li>
                            <li>
                                Have suffered significant weight loss, leading to sagging skin
                            </li>
                            <li>
                                Your body has witnessed a drastic adverse transformation post pregnancy
                            </li>
                            <li>
                                Unable to part ways with additional fat despite maintaining a balanced diet and exercising regularly
                            </li>
                            <li>
                                You do not drink or smoke
                            </li>
                            <li>
                                You are not able to get away with excess fat despite exercising and having a balanced diet
                            </li>
                            <li>
                                You have maintained your body weight within the permissible limit
                            </li>
                            <li>
                                You have loose abdomen muscles
                            </li>
                            <li>
                                You have to restore your appearance
                            </li>
                            <li>
                                You have set realistic goals
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="accordion-container">
                    <a onclick="accordion_elm(this)" href="#" class="accordion-toggle">
                        <span>
                            2. What is the cost of Tummy Tuck?
                        </span>
                        <span class="accordion-icon">
                            <i class="fa fa-chevron-down pull-right" aria-hidden="true"></i>
                        </span>
                    </a>
                    <div class="accordion-content">
                        <p>
                            The estimated cost of Tummy Tuck surgery in <?= ucwords($city) ?> ranges between 1,00,000 INR and 2,00,000 INR. To know accurate figures, consultation with any of our plastic surgeons will be advisable.
                        </p>
                    </div>
                </div>
                <div class="accordion-container">
                    <a onclick="accordion_elm(this)" href="#" class="accordion-toggle">
                        <span>
                            3. What are the risks related to Tummy Tuck?
                        </span>
                        <span class="accordion-icon">
                            <i class="fa fa-chevron-down pull-right" aria-hidden="true"></i>
                        </span>
                    </a>
                    <div class="accordion-content">
                        <ul>
                            <li>
                                Fluid build-up under the skin of the incision area called seroma
                            </li>
                            <li>
                                Allergic reaction to anesthesia
                            </li>
                            <li>
                                Bad wound healing along the incision line
                            </li>
                            <li>
                                Excessive scarring, which is difficult to hide
                            </li>
                            <li>
                                Possibility of a revisional surgery
                            </li>
                            <li>
                                Intense pain, swelling, bruising, etc
                            </li>
                            <li>
                                Temporary loss of skin sensation
                            </li>
                            <li>
                                Numbness due to repositioned abdominal tissues could cause
                            </li>
                            <li>
                                Skin discoloration
                            </li>
                            <li>
                                Excessive bleeding from the surgical incision site
                            </li>
                            <li>
                                Chance of a correction surgery
                            </li>
                            <li>
                                Slow recovery due to inadequate placement of sutures to close the tissues
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="accordion-container">
                    <a onclick="accordion_elm(this)" href="#" class="accordion-toggle">
                        <span>
                            4. When can you go for Tummy Tuck?
                        </span>
                        <span class="accordion-icon">
                            <i class="fa fa-chevron-down pull-right" aria-hidden="true"></i>
                        </span>
                    </a>
                    <div class="accordion-content">
                        <p>
                            You could opt for a Tummy Tuck surgery in <?= ucwords($city) ?> at almost any age beyond 18 years. Usually, women in their 30s or 40s opt for this procedure, as their body is likely to be healthy in this age bracket, and they can maintain the results for a long time by following the instructions of the surgeon.
                        </p>
                    </div>
                </div>
                <div class="accordion-container">
                    <a onclick="accordion_elm(this)" href="#" class="accordion-toggle">
                        <span>
                            5. What are the things to do before the Tummy Tuck Surgery?
                        </span>
                        <span class="accordion-icon">
                            <i class="fa fa-chevron-down pull-right" aria-hidden="true"></i>
                        </span>
                    </a>
                    <div class="accordion-content">
                        <ul>
                            <li>
                                Your body weight should be stable for at least one year prior to undergoing the Tummy Tuck surgery in <?= ucwords($city) ?>
                            </li>
                            <li>
                                It is better to lose weight if you are overweight so that the surgeon could consider you for the procedure
                            </li>
                            <li>
                                Maintain a balanced diet for the surgery
                            </li>
                            <li>
                                Avoid using any medicine without the consent of your surgeon
                            </li>
                            <li>
                                Hydrate your body properly to avoid dehydration-related complications
                            </li>
                            <li>
                                Although rare, be prepared for any kind of adverse outcome
                            </li>
                            <li>
                                Have someone to drive you home after the Tummy Tuck surgery in <?= ucwords($city) ?>
                            </li>
                            <li>
                                Arrange for some domestic help to assist you in daily chores
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="accordion-container">
                    <a onclick="accordion_elm(this)" href="#" class="accordion-toggle">
                        <span>
                            6. What to expect on the day of Tummy Tuck surgery?
                        </span>
                        <span class="accordion-icon">
                            <i class="fa fa-chevron-down pull-right" aria-hidden="true"></i>
                        </span>
                    </a>
                    <div class="accordion-content">
                        <ul>
                            <li>
                                On the surgery day, arrive at the clinic with a calm and composed mind
                            </li>
                            <li>
                                Cooperate with the clinic staff in their routine activities regarding the surgery
                            </li>
                            <li>
                                Inform the anesthesia expert if you have a history of allergic behavior to anesthesia
                            </li>
                            <li>
                                The surgeon will make you feel relaxed and at ease to help you get ready for the surgery
                            </li>
                            <li>
                                During the surgery in <?= ucwords($city) ?>, you could expect the surgeon to create incisions on the selected portions to eliminate excess fat
                            </li>
                            <li>
                                The entire surgery may take 2-3 hours depending on the complications of the surgery
                            </li>
                            <li>
                                To reduce pain during the surgery, you could also expect some antibiotics or painkillers from the staff
                            </li>
                            <li>
                                In the starting 2-3 days, you may expect bloating, mild pain, or pressure in the treated area
                            </li>
                            <li>
                                You may experience swelling in the first week after the surgery, which you can hide by wearing a compression garment
                            </li>
                            <li>
                                You should have realistic expectations with the surgery in <?= ucwords($city) ?>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        <?php } elseif ($surgery_str == "buttock enhancement") { ?>
            <div class="col padd-null">
                <div class="top-content">
                    <p>
                        <strong>
                            Get the Best Plastic Surgeons for Buttock Enhancement in <?= ucwords($city) ?>
                        </strong>
                    </p>
                    <p>
                        Extremely small, big, or sagging buttocks or those with dimples can thwart the appearance of your back. Those willing to get their buttocks back in shape may therefore opt for Buttock Enhancement surgery. It will work effectively in enhancing the shape, size, and contour of your back, thus enabling you to get rounder, fuller, and more appealing buttocks. Our plastic surgeons in <?= ucwords($city) ?> can perform this procedure with high-end expertise to enable you to regain your toned body.
                    </p>
                </div>
                <p class="identity">
                    Why Approach Our Surgeons for Buttock Enhancement Surgery in <?= ucwords($city) ?>?
                </p>
                <ul>
                    <li>
                        Dexterous in performing all the types of buttock related procedures in <?= ucwords($city) ?> such as buttock augmentation, implants, Brazilian butt lifts, and fat grafting
                    </li>
                    <li>
                        Ensure symmetry of buttocks without making them look artificial
                    </li>
                    <li>
                        Have a high success rate with Buttock Enhancement surgery
                    </li>
                    <li>
                        Instil self-confidence and increase the self-esteem of the patients with the surgery
                    </li>
                </ul>
                <p class="identity">
                    COST OF <?= $surgery_str ?> IN <?= ucwords($city) ?>
                </p>
                <p>
                    The cost of surgery for Buttock Enhancement relies on your current geographical location, the type of surgery you opt for, and the reputation of the surgeon you approach. Other factors to decide the cost may include room charges, the surgeon’s fees, medical tests, facilities provided in the clinic, and more. For deeper insight into the associated cost, you can always consult any of our renowned Buttock Enhancement surgeons in <?= ucwords($city) ?>.
                </p>
                <p class="identity">OUR SERVICES</p>
                <p>
                    A successful Buttock Enhancement surgery goes a long way in boosting one’s self-confidence. Hence, the need to choose the best plastic surgeon is of high importance. With our experienced surgeons in <?= ucwords($city) ?>, you will be in safe hands. Moreover, you will avail the best of services in their clinic, along with technically sound and advanced surgery equipment, a well-equipped surgery room, and amicable nursing staff. Your satisfaction remains paramount to us.
                </p>
                <p class="identity">
                    FAQs on Buttock Enhancement Surgery in <?= ucwords($city) ?>
                </p>
                <!-- ACCODION -->
                <div class="accordion-container">
                    <a onclick="accordion_elm(this)" href="#" class="accordion-toggle">
                        <span>
                            1. Are you a good candidate for Buttock Enhancement?
                        </span>
                        <span class="accordion-icon">
                            <i class="fa fa-chevron-down pull-right" aria-hidden="true"></i>
                        </span>
                    </a>
                    <div class="accordion-content">
                        <p>
                            Mentioned below are important to consider if you wish to be a suitable candidate for Buttock Enhancement surgery in <?= ucwords($city) ?>:
                        </p>
                        <ul>
                            <li>
                                Your butts are lagging behind in the size, curves, roundness and the desired appeal
                            </li>
                            <li>
                                You have a healthy body, free from any severe medical condition
                            </li>
                            <li>
                                Your body is strong enough to withstand the adverse influence of anesthesia
                            </li>
                            <li>
                                Your butts are not gaining weight and size despite a balanced diet and regular exercising
                            </li>
                            <li>
                                You should have a particular donor site having sufficient stubborn fat cells that could be transferred to your butts
                            </li>
                            <li>
                                There has to be a donor site comprising stubborn fat cells in ample quantity, to transfer them to the butt
                            </li>
                            <li>
                                You have set realistic goals and do not expect miracles from the surgery
                            </li>
                            <li>
                                You are a non-drinker and a non-smoker
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="accordion-container">
                    <a onclick="accordion_elm(this)" href="#" class="accordion-toggle">
                        <span>
                            2. What is the cost of Buttock Enhancement?
                        </span>
                        <span class="accordion-icon">
                            <i class="fa fa-chevron-down pull-right" aria-hidden="true"></i>
                        </span>
                    </a>
                    <div class="accordion-content">
                        <p>
                            A Buttock Enhancement surgery would cost around 2,00,000 INR to 4,00,000 INR. It may appear a big amount but as compared to other parts of the world, the cost of the Brazillian Butt Lift in <?= ucwords($city) ?>, India is still affordable.
                        </p>
                    </div>
                </div>
                <div class="accordion-container">
                    <a onclick="accordion_elm(this)" href="#" class="accordion-toggle">
                        <span>
                            3. What are the risks related to Buttock Enhancement?
                        </span>
                        <span class="accordion-icon">
                            <i class="fa fa-chevron-down pull-right" aria-hidden="true"></i>
                        </span>
                    </a>
                    <div class="accordion-content">
                        <p>
                            In rare instances, there can be several side effects of the Buttock Enhancement surgery in <?= ucwords($city) ?>, as below:
                        </p>
                        <ul>
                            <li>
                                Clotting of a pool of blood, also called as hematoma
                            </li>
                            <li>
                                Accumulation of fluid or seroma
                            </li>
                            <li>
                                Fat necrosis or the dead fat tissue, which mostly disappears without treatment
                            </li>
                            <li>
                                Reduction or loss of sensation in the treated area
                            </li>
                            <li>
                                Stretch marks and permanent scars
                            </li>
                            <li>
                                Poor healing of wounds
                            </li>
                            <li>
                                Infection due to the allergic reaction to medical equipment or medicines
                            </li>
                            <li>
                                Bleeding due to the intake of anti-inflammatory medicines
                            </li>
                            <li>
                                Possibility of Nerve damage
                            </li>
                            <li>
                                Unappealing and uneven butts
                            </li>
                            <li>
                                Correction surgery
                            </li>
                            <li>
                                Dislocated or ruptured butt implant
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="accordion-container">
                    <a onclick="accordion_elm(this)" href="#" class="accordion-toggle">
                        <span>
                            4. When can you go for Buttock Enhancement?
                        </span>
                        <span class="accordion-icon">
                            <i class="fa fa-chevron-down pull-right" aria-hidden="true"></i>
                        </span>
                    </a>
                    <div class="accordion-content">
                        <p>
                            If you are dissatisfied with the appearance of your flat or square buttocks, you may consider Buttock Enhancement surgery in <?= ucwords($city) ?>. This option may also be suitable if you have lost a significant amount of weight or if you wish to achieve a more balanced body shape. According to experts, the ideal age for this surgery is 25, as it allows ample time for the brain to fully develop.
                        </p>
                    </div>
                </div>
                <div class="accordion-container">
                    <a onclick="accordion_elm(this)" href="#" class="accordion-toggle">
                        <span>
                            5. What are the things to do before the Buttock Enhancement Surgery?
                        </span>
                        <span class="accordion-icon">
                            <i class="fa fa-chevron-down pull-right" aria-hidden="true"></i>
                        </span>
                    </a>
                    <div class="accordion-content">
                        <p>
                            These points will help you to prepare well for the Buttock Enhancement Surgery in <?= ucwords($city) ?>:
                        </p>
                        <ul>
                            <li>
                                To ensure that your body is ready for surgery, follow your surgeon's advice regarding blood tests
                            </li>
                            <li>
                                Take the prescribed medication as directed
                            </li>
                            <li>
                                Refrain from smoking or drinking alcohol for at least two to three weeks before and after the procedure
                            </li>
                            <li>
                                Inform your surgeon if you are taking any other medications so that he can adjust your treatment plan accordingly
                            </li>
                            <li>
                                Surgeons recommend wearing loose clothing to make the patients feel comfortable during movement
                            </li>
                            <li>
                                Have someone accompany you home after the procedure.
                            </li>
                            <li>
                                Arrange for domestic help to look after you and your family so that you could take rest
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="accordion-container">
                    <a onclick="accordion_elm(this)" href="#" class="accordion-toggle">
                        <span>
                            6. What to expect on the day of Buttock Enhancement surgery?
                        </span>
                        <span class="accordion-icon">
                            <i class="fa fa-chevron-down pull-right" aria-hidden="true"></i>
                        </span>
                    </a>
                    <div class="accordion-content">
                        <ul>
                            <li>
                                When coming for the surgery in <?= ucwords($city) ?>, make sure to be calm and relaxed.
                            </li>
                            <li>
                                The hospital or clinic staff will conduct necessary tests to evaluate your health and prepare you for the procedure.
                            </li>
                            <li>
                                Anesthesia will be administered to numb the area being treated,
                            </li>
                            <li>
                                If you have a history of allergic reactions to anesthesia, it's important to inform your surgeon beforehand.
                            </li>
                            <li>
                                The surgery may take up to two hours or more so you need to bear patience.
                            </li>
                            <li>
                                Following the procedure, your surgeon will likely prescribe antibiotics, pain medication, and stool softeners, among other things.
                            </li>
                            <li>
                                or proper healing, follow post-operative instructions, such as resting, avoiding stress on the treated area, refraining from showering for a few days, and wearing compression garments.
                            </li>
                            <li>
                                After the healing period, you can expect a noticeable improvement in the appearance of your buttocks.
                            </li>
                            <li>
                                It is better to have realistic expectations for the surgery to avoid disappointment in case of unfavourable results
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        <?php } elseif ($surgery_str == "body lift") { ?>
            <div class="col padd-null">
                <div class="top-content">
                    <p>
                        <strong>
                            Reputed Plastic Surgeons for Body Lift in <?= ucwords($city) ?>
                        </strong>
                    </p>
                    <p>
                        Do you want to break free from your loose sagging skin caused due to pregnancy, a weight loss program, or age factor? If yes, Body Lift is a suitable treatment to help your purpose. Also known as Belt Lipectomy, this method tightens the skin of the abdomens, groin, thighs, buttocks, and waist. The surgery involves eliminating unwanted fat and skin through incisions along with repositioning adjoining tissues. Our Body Lift surgeon in <?= ucwords($city) ?> can help you gain an appealing body contour full of youth and charm.
                    </p>
                </div>
                <p class="identity">
                    Why are Our Surgeons the Best for Body Lift Surgery in <?= ucwords($city) ?>?
                </p>
                <ul>
                    <li>
                        Skilled at performing complete Body Lift, mid Body Lift, and Lower Body Lift
                    </li>
                    <li>
                        Use advanced and painless techniques to perform Body lift in <?= ucwords($city) ?>
                    </li>
                    <li>
                        Board-certified surgeons with years of experience and specialized training
                    </li>
                    <li>
                        Affiliated with reputed hospitals and clinics
                    </li>
                </ul>
                <p class="identity">
                    COST OF BODY LIFT IN <?= ucwords($city) ?>
                </p>
                <p>
                    The cost of Body Lift treatment depends largely on the complexity of the procedure, the skills of the surgeon, and the hospital where you opt for the surgery. Other factors that decide the cost may include facilities in the operating room, anesthesia, post-surgery garments, and so on. For details, you can contact any of our expert Body Lift surgeons in <?= ucwords($city) ?>.
                </p>
                <p class="identity">OUR SERVICES</p>
                <p>
                    With a satisfying Body Lift treatment from our renowned plastic surgeons in <?= ucwords($city) ?>, you can get back to your life with more confidence. During your stint with our experienced surgeons, you will get the best treatment and satisfying post-surgery care. In addition to performing successful Body Lift procedures, our surgeons will also provide you with advanced surgery facilities and a cordial nursing team.
                </p>
                <p class="identity">
                    FAQs on Body Lift Surgery in <?= ucwords($city) ?>
                </p>
                <!-- ACCODION -->
                <div class="accordion-container">
                    <a onclick="accordion_elm(this)" href="#" class="accordion-toggle">
                        <span>
                            1. Are you a good candidate for Body Lift?
                        </span>
                        <span class="accordion-icon">
                            <i class="fa fa-chevron-down pull-right" aria-hidden="true"></i>
                        </span>
                    </a>
                    <div class="accordion-content">
                        <p>
                            To be an ideal candidate for a Body Lift procedure in <?= ucwords($city) ?>, you should meet the following requirements:
                        </p>
                        <ul>
                            <li>
                                Have loose soft tissue in one or more areas of the body
                            </li>
                            <li>
                                Have lost significant weight, such as because of bariatric surgery
                            </li>
                            <li>
                                Want to regain the appealing body
                            </li>
                            <li>
                                Good health with no medical conditions
                            </li>
                            <li>
                                that may hinder the healing process
                            </li>
                            <li>
                                Do not smoke or drink, or have left these addictions for hassle-free recovery
                            </li>
                            <li>
                                Have no plans for pregnancy in the near future
                            </li>
                            <li>
                                Maintain a healthy lifestyle with a well-balanced diet
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="accordion-container">
                    <a onclick="accordion_elm(this)" href="#" class="accordion-toggle">
                        <span>
                            2. What is the cost of a Body Lift?
                        </span>
                        <span class="accordion-icon">
                            <i class="fa fa-chevron-down pull-right" aria-hidden="true"></i>
                        </span>
                    </a>
                    <div class="accordion-content">
                        <p>
                            The cost of a Body Lift procedure in <?= ucwords($city) ?> may range between 200,000 INR and 300,000 INR. This charge may differ based on individual factors such as height, weight, degree of weight loss, requirement for liposuction, overall health status, and other relevant considerations.
                        </p>
                    </div>
                </div>
                <div class="accordion-container">
                    <a onclick="accordion_elm(this)" href="#" class="accordion-toggle">
                        <span>
                            3. What are the risks related to Body Lift?
                        </span>
                        <span class="accordion-icon">
                            <i class="fa fa-chevron-down pull-right" aria-hidden="true"></i>
                        </span>
                    </a>
                    <div class="accordion-content">
                        <ul>
                            <li>
                                Visible scarring after the surgery in <?= ucwords($city) ?>
                            </li>
                            <li>
                                The possibility of bleeding, which can lead to hematoma
                            </li>
                            <li>
                                Increased risk of infection, fever, and red or inflamed skin (cellulitis) in larger areas
                            </li>
                            <li>
                                Poor healing of the incision site
                            </li>
                            <li>
                                Wound breakdown or dehiscence
                            </li>
                            <li>
                                Extrusion of sutures from the skin, causing irritation and necessitating removal
                            </li>
                            <li>
                                Reduced sensation in the treated area or permanent or temporary basis
                            </li>
                            <li>
                                Contour irregularities such as asymmetrical fullness, bulges, etc.
                            </li>
                            <li>
                                Skin swelling and discoloration
                            </li>
                            <li>
                                Allergic behaviour to anesthesia or surgical materials, such as tape, gloves, or suture materials
                            </li>
                            <li>
                                Need for correction surgery
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="accordion-container">
                    <a onclick="accordion_elm(this)" href="#" class="accordion-toggle">
                        <span>
                            4. When can you go for Body Lift?
                        </span>
                        <span class="accordion-icon">
                            <i class="fa fa-chevron-down pull-right" aria-hidden="true"></i>
                        </span>
                    </a>
                    <div class="accordion-content">
                        <p>
                            You can experience the best results from a Body Lift surgery in <?= ucwords($city) ?> only when you have gained the target weight and have succeeded to maintain it for at least 6 months after the surgery. Weight fluctuation can impact the surgery negatively. You should be at least 18 years of age to undergo Body Lift surgery.
                        </p>
                    </div>
                </div>
                <div class="accordion-container">
                    <a onclick="accordion_elm(this)" href="#" class="accordion-toggle">
                        <span>
                            5. What are the things to do before the Body Lift Surgery?
                        </span>
                        <span class="accordion-icon">
                            <i class="fa fa-chevron-down pull-right" aria-hidden="true"></i>
                        </span>
                    </a>
                    <div class="accordion-content">
                        <p>
                            To prepare for a Body Lift procedure in <?= ucwords($city) ?>, you should take the following steps:
                        </p>
                        <ul>
                            <li>
                                Refrain from smoking and drinking alcohol for at least two weeks prior to the surgery.
                            </li>
                            <li>
                                Undergo medical testing and ensure that medical records are readily available for the surgeon's review.
                            </li>
                            <li>
                                Aim to lose between 30% and 50% of your maximum weight before the surgery.
                            </li>
                            <li>
                                Bring necessary medications and compression garments to the surgery.
                            </li>
                            <li>
                                Arrange for someone to assist with daily tasks and take you back home after the surgery.
                            </li>
                            <li>
                                Avoid consuming herbal supplements, aspirin, and other anti-inflammatory drugs as they may increase the risk of bleeding.
                            </li>
                            <li>
                                Maintain adequate hydration before and after the procedure.
                            </li>
                            <li>
                                Refrain from eating anything for at least 8 hours before the scheduled surgery time.
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="accordion-container">
                    <a onclick="accordion_elm(this)" href="#" class="accordion-toggle">
                        <span>
                            6. What to expect on the day of Body Lift surgery?
                        </span>
                        <span class="accordion-icon">
                            <i class="fa fa-chevron-down pull-right" aria-hidden="true"></i>
                        </span>
                    </a>
                    <div class="accordion-content">
                        <ul>
                            <li>
                                Be at the clinic in <?= ucwords($city) ?> with a positive frame of mind
                            </li>
                            <li>
                                Clear any confusion you have with your surgeon
                            </li>
                            <li>
                                Cooperate with the medical staff during your body check-up
                            </li>
                            <li>
                                Inform the anesthesia expert about your reaction to anesthesia so that he could administer the dose accordingly
                            </li>
                            <li>
                                You could expect the entire Body Lift surgery to continue for around 4-8 hours
                            </li>
                            <li>
                                During this period, the surgeon will perform the lower or upper Body Lift as per your requirement
                            </li>
                            <li>
                                The surgeon could also carry out other procedures in conjunction with Body Lift such as Arm Lift, Tummy Tuck, Face Lift, etc.
                            </li>
                            <li>
                                It may take around 2-3 weeks for you to recover from the Body Lift surgery
                            </li>
                            <li>
                                To do your daily activities, you will have to wait for around 4-6 weeks
                            </li>
                            <li>
                                For complete and satisfying healing, you should follow the instructions of your surgeon
                            </li>
                            <li>
                                You must have realistic expectations with the surgery in <?= ucwords($city) ?>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        <?php } elseif ($surgery_str == "arm lift") { ?>
            <div class="col padd-null">
                <div class="top-content">
                    <p>
                        <strong>
                            Connect with Renowned Arm Lift Surgeons in <?= ucwords($city) ?>
                        </strong>
                    </p>
                    <p>
                        You may appear fit, but is your skin elastic enough? Have you started noticing loose skin flaps or ‘bat wings’ hanging from the upper arms? An Arm Lift Surgery or Brachioplasty can improve that loose and sagging portion shaping up in your upper arms, giving way to better contours. Our experienced Arm Lift surgeons in <?= ucwords($city) ?> can help you appreciably in serving your purpose. They can help you gain a toned arm and an appealing overall appearance.
                    </p>
                </div>
                <p class="identity">
                    Why Trust Our Surgeons for Arm Lift Surgery in <?= ucwords($city) ?>?
                </p>
                <ul>
                    <li>
                        Adept at carrying out the procedure with minimum risk and maximum symmetry in the shape of your arms
                    </li>
                    <li>
                        Can perform various Arm Lift procedures like liposuction and limited, standard, and extended Arm Lift surgeries
                    </li>
                    <li>
                        Expert in doing surgeries with minimum scars
                    </li>
                    <li>
                        Board-certified surgeons in <?= ucwords($city) ?> with credible experience in Arm Lift Surgery
                    </li>
                </ul>
                <p class="identity">
                    COST OF ARM LIFT SURGERY IN <?= ucwords($city) ?>
                </p>
                <p>
                    Various factors govern the cost of an Arm Lift in <?= ucwords($city) ?>, such as the experience, expertise, and fees of the surgeon. Anesthesia, room facilities, medical tests, post-operative garments, and other aspects are equally important in this regard. Consulting any of our Arm Lift surgeons will help to know more about the cost of the surgery.
                </p>
                <p class="identity">OUR SERVICES</p>
                <p>
                    Getting Arm Lift treatment from our expert plastic surgeon in <?= ucwords($city) ?> can help you restore the appearance of your arm appreciably. You can count on our expert surgeons for superior-quality treatment facilities. They provide the best technical equipment, operating rooms, and nursing staff to make you feel at ease during the surgery. Undergoing the surgery from any of our Arm Lift surgeons in <?= ucwords($city) ?> will make you feel relaxed and comfortable.
                </p>

                <p class="identity">
                    FAQs on Arm Lift Surgery in <?= ucwords($city) ?>
                </p>
                <!-- ACCODION -->
                <div class="accordion-container">
                    <a onclick="accordion_elm(this)" href="#" class="accordion-toggle">
                        <span>
                            1. Are you a good candidate for Arm Lift Surgery?
                        </span>
                        <span class="accordion-icon">
                            <i class="fa fa-chevron-down pull-right" aria-hidden="true"></i>
                        </span>
                    </a>
                    <div class="accordion-content">
                        <p>
                            To be a suitable candidate for Arm Lift Surgery in <?= ucwords($city) ?>, you should fulfill certain criteria:
                        </p>
                        <ul>
                            <li>
                                Noticeable looseness in your upper arm skin as an adult
                            </li>
                            <li>
                                Experiencing loose hanging skin due to significant weight loss
                            </li>
                            <li>
                                Your weight is well within the permissible limit for the surgery
                            </li>
                            <li>
                                Good health without any medical conditions that could increase the risks of surgery or hinder healing,
                            </li>
                            <li>
                                No habit of smoking or drinking alcohol
                            </li>
                            <li>
                                Maintain a healthy lifestyle with a proper diet.
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="accordion-container">
                    <a onclick="accordion_elm(this)" href="#" class="accordion-toggle">
                        <span>
                            2. What is the cost of Arm Lift Surgery?
                        </span>
                        <span class="accordion-icon">
                            <i class="fa fa-chevron-down pull-right" aria-hidden="true"></i>
                        </span>
                    </a>
                    <div class="accordion-content">
                        <p>
                            The cost of Arm Lift Surgery in <?= ucwords($city) ?> typically ranges from 1,00,000 INR to 1,50,000 INR. The expenses may vary depending on the specific facilities and services chosen by the patient. In addition to the cost of the surgery itself, there may be additional charges for consultation fees, medication costs, and other support required for recovery.
                        </p>
                    </div>
                </div>
                <div class="accordion-container">
                    <a onclick="accordion_elm(this)" href="#" class="accordion-toggle">
                        <span>
                            3. What are the risks related to Arm Lift Surgery?
                        </span>
                        <span class="accordion-icon">
                            <i class="fa fa-chevron-down pull-right" aria-hidden="true"></i>
                        </span>
                    </a>
                    <div class="accordion-content">
                        <p>
                            Here are some of the potential risks associated with Arm Lift Surgery in <?= ucwords($city) ?>:
                        </p>
                        <ul>
                            <li>
                                Unevenness in the appearance of the arms
                            </li>
                            <li>
                                Allergic reaction to anesthesia
                            </li>
                            <li>
                                Abnormal scarring
                            </li>
                            <li>
                                Persistent bleeding
                            </li>
                            <li>
                                Affected blood vessels
                            </li>
                            <li>
                                Damage to nerves or muscles
                            </li>
                            <li>
                                Infection at the surgical site due to the use of surgical materials
                            </li>
                            <li>
                                Tightening of arm
                            </li>
                            <li>
                                Formation of seroma or fluid accumulation in the arm that may need to be drained using a needle
                            </li>
                            <li>
                                Wound breakdown, which may need an additional 2-3 weeks to heal
                            </li>
                            <li>
                                Poor healing due to incorrect surgery procedure
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="accordion-container">
                    <a onclick="accordion_elm(this)" href="#" class="accordion-toggle">
                        <span>
                            4. When can you go for Arm Lift Surgery?
                        </span>
                        <span class="accordion-icon">
                            <i class="fa fa-chevron-down pull-right" aria-hidden="true"></i>
                        </span>
                    </a>
                    <div class="accordion-content">
                        <p>
                            Arm lift surgery in <?= ucwords($city) ?> may be a suitable option for individuals experiencing age-related changes in their arms. Loose skin resulting from significant weight loss could also be one of the reasons to opt for this surgery. Our surgeons would recommend this procedure for adults during the winter season.
                        </p>
                    </div>
                </div>
                <div class="accordion-container">
                    <a onclick="accordion_elm(this)" href="#" class="accordion-toggle">
                        <span>
                            5. What are the things to do before the Arm Lift surgery?
                        </span>
                        <span class="accordion-icon">
                            <i class="fa fa-chevron-down pull-right" aria-hidden="true"></i>
                        </span>
                    </a>
                    <div class="accordion-content">
                        <p>
                            Prior to undergoing Arm Lift Surgery in <?= ucwords($city) ?>, you should take certain important preparatory measures:
                        </p>
                        <ul>
                            <li>
                                Discuss concerns regarding the surgery with your surgeon,
                            </li>
                            <li>
                                Refrain from eating and drinking for at least 8 hours before undergoing the procedure
                            </li>
                            <li>
                                Arrange comfortable and loose clothing for your recovery period in advance
                            </li>
                            <li>
                                Undergo a medical examination to ensure good health for the surgery
                            </li>
                            <li>
                                Stop smoking and alcohol consumption several weeks before the surgery to prevent slow wound healing
                            </li>
                            <li>
                                Adjust any existing medications after interacting with your surgeon
                            </li>
                            <li>
                                Avoiding the use of aspirin, anti-inflammatory drugs, or health supplements, as these may cause uncontrolled bleeding
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="accordion-container">
                    <a onclick="accordion_elm(this)" href="#" class="accordion-toggle">
                        <span>
                            6. What to expect on the day of Arm Lift surgery?
                        </span>
                        <span class="accordion-icon">
                            <i class="fa fa-chevron-down pull-right" aria-hidden="true"></i>
                        </span>
                    </a>
                    <div class="accordion-content">
                        <ul>
                            <li>
                                On the day of your Arm Lift Surgery in <?= ucwords($city) ?>, visit the clinic with a well-prepared and composed mind
                            </li>
                            <li>
                                You can expect to undergo necessary formalities and cooperate with the staff at the clinic
                            </li>
                            <li>
                                An anesthesiologist will evaluate your response to anesthesia and administer the appropriate dose accordingly
                            </li>
                            <li>
                                The surgeon will perform the Brachioplasty, which may take approximately 3-4 hours to complete
                            </li>
                            <li>
                                You may not perceive the passage of time due to the effects of anesthesia
                            </li>
                            <li>
                                During the procedure, the surgeon will make incisions on the back or inside of your arm, depending on the complication level
                            </li>
                            <li>
                                The surgeon may also choose to remove excess fat via liposuction
                            </li>
                            <li>
                                If you have a sitting job, you may be able to return to work within a week of the surgery
                            </li>
                            <li>
                                If your job requires physical exertion, the surgeon may recommend taking around two weeks off to rest
                            </li>
                            <li>
                                It is important to have realistic expectations about the outcome of the surgery in <?= ucwords($city) ?>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        <?php } elseif ($surgery_str == "thigh lift") { ?>
            <div class="col padd-null">
                <div class="top-content">
                    <p>
                        Due to your weight loss regime, you might have developed sagging skin on the inner thighs. Opting for a Thigh Lift surgery in <?= ucwords($city) ?> or Thighplasty could help you get away with such excess skin to get tighter thighs. The treatment however needs extreme precision, as it requires the surgeon to create a long incision to remove the excess skin that can go up to the full length of the thigh. With the expertise of our Thigh Lift surgeons, you can remain rest assured of a safe, painless, and successful Thigh Lift surgery in <?= ucwords($city) ?>.
                    </p>
                </div>
                <p class="identity">
                    Why Trust Our Surgeons for Thigh Lift Surgery in <?= ucwords($city) ?>?
                </p>
                <ul>
                    <li>
                        Board-certified surgeons in <?= ucwords($city) ?> with adept training at performing Thigh Lift
                    </li>
                    <li>
                        Work with precision to remove lose fat or skin, resulting in reshaped and smooth inner/outer thighs
                    </li>
                    <li>
                        Help patients to attain their ideal body goals with improved and tighter thighs.
                    </li>
                    <li>
                        Enable the patients to restore confidence in their body with a successful Thigh Lift surgery in <?= ucwords($city) ?>
                    </li>
                </ul>
                <p class="identity">
                    COST OF THIGH LIFT IN <?= ucwords($city) ?>
                </p>
                <p>
                    Usually, the cost of a Thigh Lift will vary depending on the surgeon and the clinic you choose, your geographic location, and the type of Thigh Lift surgery you undergo. In addition, the cost may also differ on various other factors like prescribed medication, lab tests, medical facilities, anesthesia, surgeon’s fees, specialized garments provided during surgery, and more. Our expert Thigh Lift surgeon in <?= ucwords($city) ?> will be the best person to furnish relevant details about the involved cost.
                </p>

                <p class="identity">OUR SERVICES</p>
                <p>
                    Our surgeons provide you with the best facilities in their respective clinics. Feel free to contact any of our Thigh Lift surgeons to get satisfying treatment. With advanced surgery equipment, hospitable nursing staff, and a well-equipped operating room, you will get complete attention during your Thigh Lift surgery. Our skilled and consummate Thigh Lift surgeons will ensure a noteworthy Thigh Lift on your body.
                </p>

                <p class="identity">
                    FAQs on Thigh Lift Surgery in <?= ucwords($city) ?>
                </p>
                <!-- ACCODION -->
                <div class="accordion-container">
                    <a onclick="accordion_elm(this)" href="#" class="accordion-toggle">
                        <span>
                            1. Are you a good candidate for Thigh Lift?
                        </span>
                        <span class="accordion-icon">
                            <i class="fa fa-chevron-down pull-right" aria-hidden="true"></i>
                        </span>
                    </a>
                    <div class="accordion-content">
                        <p>
                            To get a Thigh Lift surgery in <?= ucwords($city) ?> you must fulfill the following criteria:
                        </p>
                        <ul>
                            <li>
                                Maintain an ideal body weight
                            </li>
                            <li>
                                Have excess soft tissue on the inner or outer thigh
                            </li>
                            <li>
                                Ensure good overall health
                            </li>
                            <li>
                                Make sure to be free from any medical condition that could hinder healing or increase surgery risks
                            </li>
                            <li>
                                Follow a healthy diet chart
                            </li>
                            <li>
                                Do regular exercise
                            </li>
                            <li>
                                Abstain from smoking and alcohol consumption
                            </li>
                            <li>
                                Have a desire to enhance the appearance of their thighs.
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="accordion-container">
                    <a onclick="accordion_elm(this)" href="#" class="accordion-toggle">
                        <span>
                            2. What is the cost of a Thigh Lift?
                        </span>
                        <span class="accordion-icon">
                            <i class="fa fa-chevron-down pull-right" aria-hidden="true"></i>
                        </span>
                    </a>
                    <div class="accordion-content">
                        <p>
                            The expense associated with a Thigh Lift procedure in <?= ucwords($city) ?> may range from 70,000 INR to 1,50,000 INR. Multiple factors may influence the overall expenses, such as the cost of the surgical facility, the complication involved in the surgery, the proficiency of the surgeon, the cost of anesthesia and medication, and more.
                        </p>
                    </div>
                </div>
                <div class="accordion-container">
                    <a onclick="accordion_elm(this)" href="#" class="accordion-toggle">
                        <span>
                            3. What are the risks related to Thigh Lifts?
                        </span>
                        <span class="accordion-icon">
                            <i class="fa fa-chevron-down pull-right" aria-hidden="true"></i>
                        </span>
                    </a>
                    <div class="accordion-content">
                        <p>
                            Various potential risks can emerge during a Thigh Lifts surgery in <?= ucwords($city) ?>:
                        </p>
                        <ul>
                            <li>
                                Allergic behavior to anesthesia
                            </li>
                            <li>
                                Bleeding at the incision site
                            </li>
                            <li>
                                Excessive scarring
                            </li>
                            <li>
                                Intense pain after the anesthesia wears off
                            </li>
                            <li>
                                Blood clots in the legs (known as Deep Vein Thrombosis or DVT) seroma
                            </li>
                            <li>
                                Blood accumulation in a dead space after the surgery
                            </li>
                            <li>
                                Dead fatty tissue beneath the skin
                            </li>
                            <li>
                                Bruising and inflammation at the incision site
                            </li>
                            <li>
                                The need for a revisional surgery
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="accordion-container">
                    <a onclick="accordion_elm(this)" href="#" class="accordion-toggle">
                        <span>
                            4. When can you go for a Thigh Lift?
                        </span>
                        <span class="accordion-icon">
                            <i class="fa fa-chevron-down pull-right" aria-hidden="true"></i>
                        </span>
                    </a>
                    <div class="accordion-content">
                        <p>
                            If you aspire to get well-contoured proportioned thigh contours followed by smooth skin, a Thigh Lift in <?= ucwords($city) ?> would be an ideal choice. You would need to be at least 18 years of age to undergo this surgery and your body should be free of any severe medical condition.
                        </p>
                    </div>
                </div>
                <div class="accordion-container">
                    <a onclick="accordion_elm(this)" href="#" class="accordion-toggle">
                        <span>
                            5. What are the things to do before the Thigh Lift Surgery?
                        </span>
                        <span class="accordion-icon">
                            <i class="fa fa-chevron-down pull-right" aria-hidden="true"></i>
                        </span>
                    </a>
                    <div class="accordion-content">
                        <p>
                            To prepare for the Thigh Lift surgery in <?= ucwords($city) ?>, you should abide by the following pointers:
                        </p>
                        <ul>
                            <li>
                                Undergo a medical evaluation and complete a body check-up.
                            </li>
                            <li>
                                Avoid taking anti-inflammatory drugs, health supplements, or Aspirin to prevent excessive bleeding.
                            </li>
                            <li>
                                Provide your surgeon with a list of current medications to avoid any confusion.
                            </li>
                            <li>
                                Remove contact lenses, nail polish, makeup, and deodorant before the surgery
                            </li>
                            <li>
                                Stay hydrated by drinking water or fluids free of any additive
                            </li>
                            <li>
                                Refrain from eating or drinking anything for around 8 hours before the procedure Quit smoking or alcohol consumption to reduce the risk of complications during or after the surgery in <?= ucwords($city) ?>
                            </li>
                            <li>
                                Arrange for someone to accompany you to the hospital and drive you home
                            </li>
                            <li>
                                Have domestic help to assist you with your daily chores after the surgery
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="accordion-container">
                    <a onclick="accordion_elm(this)" href="#" class="accordion-toggle">
                        <span>
                            6. What to expect on the day of Thigh Lift surgery?
                        </span>
                        <span class="accordion-icon">
                            <i class="fa fa-chevron-down pull-right" aria-hidden="true"></i>
                        </span>
                    </a>
                    <div class="accordion-content">
                        <ul>
                            <li>
                                Visit the clinic in <?= ucwords($city) ?> with a positive frame of mind
                            </li>
                            <li>
                                Discuss your apprehensions with the surgeon before the surgery
                            </li>
                            <li>
                                The anesthesiologist would inquire about your behavior to anesthesia to adjust the dose accordingly
                            </li>
                            <li>
                                The surgeon will make an incision to remove the fat and excess skin from the incision site
                            </li>
                            <li>
                                After a successful surgery, you could get tight skin, improved leg contour, and restored skin elasticity
                            </li>
                            <li>
                                The entire surgery will take around 2-3 hours to complete
                            </li>
                            <li>
                                You may have to stay in the clinic for a few days after the Thigh Lift surgery, or as your surgeon recommends
                            </li>
                            <li>
                                Expect around 4-6 weeks for your wounds to heal completely
                            </li>
                            <li>
                                The surgeon could recommend not doing routine and strenuous activities for at least 2 weeks after the surgery in <?= ucwords($city) ?>
                            </li>
                            <li>
                                Make sure to have realistic expectations with the Thigh Lift surgery so that you do not get disappointed in case of adverse results
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        <?php } elseif ($surgery_str == "body contouring") { ?>
            <div class="col padd-null">
                <div class="top-content">
                    <p>
                        After a strict weight loss regime, you may succeed to shed those extra pounds, but it could lead to droopy or saggy skin as a side effect. With Body Contouring, you can get away with this excess skin and regain the tone of your body tissues. The procedure enables you to regain your lost elasticity with smoother contours. Our plastic surgeons in <?= ucwords($city) ?> can help you with this surgery by eliminating unwanted skin and fat cells from your body.
                    </p>
                </div>
                <p class="identity">
                    Why Approach Our Surgeons for Body Contouring in <?= ucwords($city) ?>?
                </p>
                <ul>
                    <li>
                        Board-certified surgeons in <?= ucwords($city) ?> with specialized training in plastic surgery
                    </li>
                    <li>
                        Experience in performing Body Contouring with success
                    </li>
                    <li>
                        Helps patients to restore body elasticity and enhance body contours in better proportion
                    </li>
                    <li>
                        Can perform multiple Body Contouring surgeries including Arm Lift, Breast Lift, Thigh Lift, Facelift, Tummy Tuck, and more
                    </li>
                </ul>
                <p class="identity">
                    COST OF BODY CONTOURING IN <?= ucwords($city) ?>
                </p>
                <p>
                    The cost of Body Contouring will rely largely on the type of surgery you choose. Depending on the part of your body, you can opt for an Arm Lift, Facelift, or other procedures. Considering the surgeon’s fee, medical tests, anesthesia, surgery equipment, and operating room are also substantial in fixing the cost of Body Contouring in <?= ucwords($city) ?>. Our experienced plastic surgeons can provide a better insight into the cost of Body Contouring in <?= ucwords($city) ?>.
                </p>

                <p class="identity">OUR SERVICES</p>
                <p>
                    You can come to us for a satiating Body Contouring surgery in <?= ucwords($city) ?>. Our accomplished plastic surgeons will make sure to perform the surgery with due comfort, satisfaction, and ease. Additionally, they extend world-class facilities, surgery rooms, technical equipment, and caring staff to ensure the patients get a satisfying experience overall. Fix an appointment with our Body Contouring surgeon and clarify all your concerns before undergoing the surgery at our clinic in <?= ucwords($city) ?>.
                </p>

                <!-- FAQS -->
                <p class="identity">
                    FAQs on Body Contouring Surgery in <?= ucwords($city) ?>
                </p>
                <div class="accordion-container">
                    <a onclick="accordion_elm(this)" href="#" class="accordion-toggle">
                        <span>
                            1. Are you a good candidate for Body Contouring?
                        </span>
                        <span class="accordion-icon">
                            <i class="fa fa-chevron-down pull-right" aria-hidden="true"></i>
                        </span>
                    </a>
                    <div class="accordion-content">
                        <p>
                            To be a suitable candidate for Body Contouring in <?= ucwords($city) ?>, the following points are important to consider:
                        </p>
                        <ul>
                            <li>
                                Wish to eliminate stubborn fat from areas that remain unaffected by diet and exercise
                            </li>
                            <li>
                                Maintain a steady weight close to your ideal body weight
                            </li>
                            <li>
                                Good health condition overall
                            </li>
                            <li>
                                Excellent skin elasticity
                            </li>
                            <li>
                                Not a smoker or drinker
                            </li>
                            <li>
                                Realistic expectations with the surgery
                            </li>
                            <li>
                                Specific areas of interest such as Inner Thighs, Love Handles, Bra Rolls, Bat Wings, Saddlebags, Tummy Fat, etc.
                            </li>
                            <li>
                                No plans to join any weight loss procedure
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="accordion-container">
                    <a onclick="accordion_elm(this)" href="#" class="accordion-toggle">
                        <span>
                            2. What is the cost of Body Contouring?
                        </span>
                        <span class="accordion-icon">
                            <i class="fa fa-chevron-down pull-right" aria-hidden="true"></i>
                        </span>
                    </a>
                    <div class="accordion-content">
                        <p>
                            The cost of a Body Contouring procedure in <?= ucwords($city) ?> may range from 1,00,000 INR to 3,00,000 INR. It will largely rely on the specific areas that require treatment. It is advisable to consult with your surgeon to get a more accurate estimate of the total cost involved.
                        </p>
                    </div>
                </div>
                <div class="accordion-container">
                    <a onclick="accordion_elm(this)" href="#" class="accordion-toggle">
                        <span>
                            3. What are the risks related to Body Contouring?
                        </span>
                        <span class="accordion-icon">
                            <i class="fa fa-chevron-down pull-right" aria-hidden="true"></i>
                        </span>
                    </a>
                    <div class="accordion-content">
                        <p>
                            Body Contouring in <?= ucwords($city) ?> may require the surgeon to remove a significant amount of excess skin, depending on the weight lost after Bariatric Surgery. Following are some of the potential risks associated with this surgery:
                        </p>
                        <ul>
                            <li>
                                Bruising and swelling in the incision area
                            </li>
                            <li>
                                Decreased sensation or numbness in the surgical site
                            </li>
                            <li>
                                Allergic behaviour such as infection, redness, nausea, itchiness, or nausea to anesthesia, or surgery materials
                            </li>
                            <li>
                                Pulling the incisions apart may result in delayed wound recover
                            </li>
                            <li>
                                Protrusion in the appearance of mons pubis because of distortion
                            </li>
                            <li>
                                Chances of Seroma of fluid build-up in the incision site
                            </li>
                            <li>
                                Excessive bleeding
                            </li>
                            <li>
                                The rare possibility of Skin necrosis or the death of tissues
                            </li>
                            <li>
                                Deep Vein Thrombosis (DVT), resulting in the formation of blood clots in the deep veins
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="accordion-container">
                    <a onclick="accordion_elm(this)" href="#" class="accordion-toggle">
                        <span>
                            4. When can you go for Body Contouring?
                        </span>
                        <span class="accordion-icon">
                            <i class="fa fa-chevron-down pull-right" aria-hidden="true"></i>
                        </span>
                    </a>
                    <div class="accordion-content">
                        <p>
                            People in <?= ucwords($city) ?> opt for Body Sculpting or Body Sculpting to get a thinner and more appealing body. Surgeons recommend going for it when regular exercise and balanced diets fail to show any effect in the body thinning regime. It is a widely demanded procedure for people who have suffered a massive loss of weight. Patients between the age of 30-60 years mostly prefer to undergo Body Contouring. At any age, good health remains the foremost condition.
                        </p>
                    </div>
                </div>
                <div class="accordion-container">
                    <a onclick="accordion_elm(this)" href="#" class="accordion-toggle">
                        <span>
                            5. What are the things to do before Body Contouring Surgery?
                        </span>
                        <span class="accordion-icon">
                            <i class="fa fa-chevron-down pull-right" aria-hidden="true"></i>
                        </span>
                    </a>
                    <div class="accordion-content">
                        <ul>
                            <li>
                                Talk to your surgeon to determine the most suitable Body Contouring procedure from among Upper-Body Lift, Lower-Body Lift, Abdominoplasty, Thigh Lift, or Arm Lift
                            </li>
                            <li>
                                Inform your surgeon about any existing medication you are taking, so that he could make proper adjustments
                            </li>
                            <li>
                                Prior to the surgery, undergo a complete medical evaluation and body check-up
                            </li>
                            <li>
                                Maintain a stable weight before and after the procedure to achieve desired results
                            </li>
                            <li>
                                Arrange for a family member or friend to accompany you home after the surgery
                            </li>
                            <li>
                                Have a domestic help at home to assist you with routine activities for at least one week
                            </li>
                            <li>
                                Expect scarring after the surgery and consult your surgeon about ways to minimize them
                            </li>
                            <li>
                                Abstain from eating or drinking anything 8 hours prior to the surgery in <?= ucwords($city) ?>
                            </li>
                            <li>
                                Keep yourself hydrated before and after the surgery to eliminate toxins from the body
                            </li>
                            <li>
                                To reduce the risk of increased bleeding after the surgery, avoid taking anti-inflammatory drugs, herbal supplements, or Aspirin
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="accordion-container">
                    <a onclick="accordion_elm(this)" href="#" class="accordion-toggle">
                        <span>
                            6. What to expect on the day of Body Contouring surgery?
                        </span>
                        <span class="accordion-icon">
                            <i class="fa fa-chevron-down pull-right" aria-hidden="true"></i>
                        </span>
                    </a>
                    <div class="accordion-content">
                        <ul>
                            <li>
                                Before arriving at the hospital or clinic in <?= ucwords($city) ?>, make sure you are mentally prepared for the procedure.
                            </li>
                            <li>
                                The anesthesiologist will inquire about your response to anesthesia and adjust the dosage if you are allergic.
                            </li>
                            <li>
                                The surgeon will create incisions at the necessary locations to remove excess fat tissue and tighten the skin.
                            </li>
                            <li>
                                Following the surgery, your incisions will be closed with self-absorbing sutures, which reduce the risk of infection.
                            </li>
                            <li>
                                The duration of surgery for a particular area of the body may take between 60 and 90 minutes,
                            </li>
                            <li>
                                If multiple procedures are required, the surgery may take up to 6 hours to complete.
                            </li>
                            <li>
                                Assuming no complications arise, you may be able to return to work in 4-6 weeks after the procedure,
                            </li>
                            <li>
                                It is essential to have realistic expectations with the surgery in <?= ucwords($city) ?>.
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- FAQS -->
            </div>
        <?php } elseif ($surgery_str == "mommy makeover") { ?>
            <div class="col padd-null">
                <div class="top-content">
                    <p>
                        If you believe pregnancy is the end of your beauty, it’s not! All thanks to the cosmetic procedure of a Mommy Makeover, you can get a restored body after your delivery. The treatment is also a welcome move to diminish your ageing signs reflecting on your breasts, face, and other body parts. With our Mommy Makeover surgeon in <?= ucwords($city) ?>, you can get a rejuvenated and slim body shape with minimal or no side effects at all.
                    </p>
                </div>
                <p class="identity">
                    Why Choose Our Surgeons for Mommy Makeover in <?= ucwords($city) ?>?
                </p>
                <ul>
                    <li>
                        Expert in restoring the pre-baby shape of women through custom-made treatments
                    </li>
                    <li>
                        Duly trained to perform Mommy Makeover procedures in <?= ucwords($city) ?>
                    </li>
                    <li>
                        Can help you to get away with excess skin, drooping breasts, and separated muscles of the abdomen
                    </li>
                    <li>
                        Help females fulfil their personal goals like breast symmetry, nipple repair, or even fitting in a swimsuit.
                    </li>
                </ul>
                <p class="identity">
                    COST OF MOMMY MAKEOVER IN <?= ucwords($city) ?>
                </p>
                <p>
                    Childbearing completely changes the body of a woman. But, with Mommy Makeover at our clinic at an affordable cost, you can regain the lost glamour of your body. The charges will depend very much on the reputation and experience of the surgeon and the clinic, along with the type of treatment, medical tests, anesthesia, surgery garments, etc. You can contact our cosmetic surgeons in <?= ucwords($city) ?> to know about the involved cost of a Mommy Makeover.
                </p>
                <p class="identity">OUR SERVICES</p>
                <p>
                    Our Mommy Makeover experts will help to bring your body back to shape so that you could feel more like yourself after pregnancy. They provide the best of services during your stay in their respective clinics for the surgery. Our surgeons in <?= ucwords($city) ?> perform the procedure in the industry best operating rooms laced with advanced treatment equipment with the assistance of their trained nursing staff. To know more about the procedure and to discuss your goals, feel free to consult any of our experienced Mommy Makeover specialists in <?= ucwords($city) ?>.
                </p>
                <!-- FAQS -->
                <p class="identity">
                    FAQs on Mommy Makeover Surgery in <?= ucwords($city) ?>
                </p>
                <div class="accordion-container">
                    <a onclick="accordion_elm(this)" href="#" class="accordion-toggle">
                        <span>
                            1. Are you a good candidate for Mommy Makeover?
                        </span>
                        <span class="accordion-icon">
                            <i class="fa fa-chevron-down pull-right" aria-hidden="true"></i>
                        </span>
                    </a>
                    <div class="accordion-content">
                        <p>
                            To be an ideal candidate for a Mommy Makeover in <?= ucwords($city) ?>, you should satisfy the following conditions:
                        </p>
                        <ul>
                            <li>
                                Excellent physical health
                            </li>
                            <li>
                                Should have attained the optimal body weight
                            </li>
                            <li>
                                A positive attitude towards the surgery
                            </li>
                            <li>
                                No more plans for childbearing
                            </li>
                            <li>
                                Non-smoker and a non-alcoholic
                            </li>
                            <li>
                                Have had a Caesarian or C-section delivery earlier
                            </li>
                            <li>
                                Delivered a minimum of 6 months ago
                            </li>
                            <li>
                                Stopped breastfeeding at least 6 months earlier
                            </li>
                            <li>
                                Reasonable expectations from the surgery
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="accordion-container">
                    <a onclick="accordion_elm(this)" href="#" class="accordion-toggle">
                        <span>
                            2. What is the cost of a Mommy Makeover?
                        </span>
                        <span class="accordion-icon">
                            <i class="fa fa-chevron-down pull-right" aria-hidden="true"></i>
                        </span>
                    </a>
                    <div class="accordion-content">
                        <p>
                            The estimated expense of a Mommy Makeover procedure in <?= ucwords($city) ?> is approximately 300,000 INR. However, the cost may vary depending on the specific surgeries you choose to include or exclude from your personalized Mommy Makeover package.
                        </p>
                    </div>
                </div>
                <div class="accordion-container">
                    <a onclick="accordion_elm(this)" href="#" class="accordion-toggle">
                        <span>
                            3. What are the risks related to Mommy Makeover?
                        </span>
                        <span class="accordion-icon">
                            <i class="fa fa-chevron-down pull-right" aria-hidden="true"></i>
                        </span>
                    </a>
                    <div class="accordion-content">
                        <ul>
                            <li>
                                Possibility of allergic behaviour to anesthesia
                            </li>
                            <li>
                                Excessive bleeding risk for individuals who consume tobacco or alcohol
                            </li>
                            <li>
                                Chances of fluid accumulation or Seroma
                            </li>
                            <li>
                                Development of Deep Vein Thrombosis (DVT)
                            </li>
                            <li>
                                Hematoma or pooling of blood that can lead to severe swelling and bruising
                            </li>
                            <li>
                                Risk of damage to lungs, nerves, muscles, blood vessels, and other underlying structures
                            </li>
                            <li>
                                Reduced skin sensation in the breasts and nipples
                            </li>
                            <li>
                                Pain and discomfort in the surgical incision sites
                            </li>
                            <li>
                                Distorted or misplaced belly button after a Tummy Tuck procedure
                            </li>
                            <li>
                                Visible scars resulting from Abdomniplasty or any breast surgery
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="accordion-container">
                    <a onclick="accordion_elm(this)" href="#" class="accordion-toggle">
                        <span>
                            4. When can you go for Mommy Makeover?
                        </span>
                        <span class="accordion-icon">
                            <i class="fa fa-chevron-down pull-right" aria-hidden="true"></i>
                        </span>
                    </a>
                    <div class="accordion-content">
                        <p>
                            A Mommy Makeover in <?= ucwords($city) ?> would be a suitable decision if you have completed the childbearing phase and have no plans for pregnancy. This cosmetic procedure aims to restore the body to its pre-pregnancy state. Surgeons usually recommend this treatment to patients between 30-50 years of age.
                        </p>
                    </div>
                </div>
                <div class="accordion-container">
                    <a onclick="accordion_elm(this)" href="#" class="accordion-toggle">
                        <span>
                            5. What are the things to do before the Mommy Makeover Surgery?
                        </span>
                        <span class="accordion-icon">
                            <i class="fa fa-chevron-down pull-right" aria-hidden="true"></i>
                        </span>
                    </a>
                    <div class="accordion-content">
                        <ul>
                            <li>
                                To prepare for your surgery in <?= ucwords($city) ?>, aim to reach your ideal weight.
                            </li>
                            <li>
                                Have someone to help in your daily activities after the surgery
                            </li>
                            <li>
                                Maintain a healthy lifestyle before and after the procedure,
                            </li>
                            <li>
                                Paying attention to a nutritious diet
                            </li>
                            <li>
                                Consult with the surgeon before taking any health supplements, herbs, or other medications to avoid potential complications.
                            </li>
                            <li>
                                Stop consuming tobacco or alcohol at least 2 weeks before the surgery
                            </li>
                            <li>
                                Arrange for an electric recliner or wedge pillow for comfortable back support post-surgery.
                            </li>
                            <li>
                                Use a laxative for smoother bowel movements.
                            </li>
                            <li>
                                Apply for off from your work in advance to take complete rest after the surgery
                            </li>
                            <li>
                                Minimise stress levels to maintain good physical and mental health before and after the procedure.
                            </li>
                            <li>
                                Boost your immune system and avoid falling victim to severe health conditions to be ready for the surgery
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="accordion-container">
                    <a onclick="accordion_elm(this)" href="#" class="accordion-toggle">
                        <span>
                            6. What to expect on the day of Mommy Makeover surgery?
                        </span>
                        <span class="accordion-icon">
                            <i class="fa fa-chevron-down pull-right" aria-hidden="true"></i>
                        </span>
                    </a>
                    <div class="accordion-content">
                        <ul>
                            <li>
                                Be at the clinic with a prepared mind, free of any confusion regarding Mommy Makeover surgery in <?= ucwords($city) ?>
                            </li>
                            <li>
                                The medical staff will perform routine check-ups on your body
                            </li>
                            <li>
                                You can discuss your concerns and questions about the surgery with your surgeon.
                            </li>
                            <li>
                                The surgeon will make incisions in appropriate locations depending on the specific procedures you choose to undergo.
                            </li>
                            <li>
                                Different procedures, such as Breast Augmentation, Breast Lift, Liposuction, and Tummy Tuck, may be combined in a Mommy Makeover.
                            </li>
                            <li>
                                Due to the complexity of the procedures involved, the entire Mommy Makeover may take up to 4-5 hours or longer to complete.
                            </li>
                            <li>
                                Plan for a recovery period of 7-10 days after the surgery.
                            </li>
                            <li>
                                The surgeon will advise you to resume normal activities only after one week of recovery.
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- FAQS -->
            </div>
        <?php } elseif ($surgery_str == "hair transplant") { ?>
            <div class="col padd-null">
                <div class="top-content">
                    <p>
                        <strong>
                            Trustworthy Hair Transplant Surgeons in <?= ucwords($city) ?>
                        </strong>
                    </p>
                    <p>
                        A Hair Transplant is a highly effective solution to address hair loss, alopecia, thinning hair, and baldness through two common procedures - FUE and FUT. The FUT technique involves removing a strip of hair-bearing skin from the donor area and transplanting the hair follicles to the recipient site. Likewise, FUE involves extracting individual hair follicles directly from the donor area and transplanting them to the area of hair loss. If you are going bald at a rapid pace and want to restore your hair, undergoing a Hair Transplant surgery from any of our skilled Hair Transplant surgeons in <?= ucwords($city) ?> would be a fruitful solution.
                    </p>
                </div>
                <p class="identity">
                    Why Choose Our Surgeons for Hair Transplant in <?= ucwords($city) ?>?
                </p>
                <ul>
                    <li>
                        Expert plastic surgeons endorsed with high-end qualifications and credible experience
                    </li>
                    <li>
                        Can perform Hair Transplant surgery with long-lasting results
                    </li>
                    <li>
                        Board-certified and trained surgeons
                    </li>
                    <li>
                        Member of several reputed plastic surgery associations in India and abroad
                    </li>
                    <li>
                        Carry out Hair Transplant surgeries at a reasonable cost
                    </li>
                </ul>
                <p class="identity">
                    COST OF HAIR TRANSPLANT TREATMENT IN <?= ucwords($city) ?>
                </p>
                <p>
                    The cost of Hair Transplant Surgery in <?= ucwords($city) ?> depends significantly on the requirement, grade of hair graft, the size of the head affected with hair loss or baldness, etc. Contacting any of our experienced Hair Transplant surgeons in <?= ucwords($city) ?> will help you know about the ingrained costs the best way.
                </p>
                <p class="identity">OUR SERVICES</p>
                <p>
                    All our surgeons provide excellent amenities to Hair Transplant aspirants. With our expert surgeons performing the treatment with the help of their trained and cordial nursing staff, you just cannot ask for more. They prefer using the industry best equipment to perform the surgery in the advanced and highly equipped surgery rooms. You can leave the clinics of our experienced Hair Transplant experts in <?= ucwords($city) ?> with due satisfaction. Fix an appointment with any of our expert surgeons today to find out more about your hair restoration prospects.
                </p>
                <p class="identity">
                    FAQs on Hair Transplant Surgery in <?= ucwords($city) ?>
                </p>
                <!-- ACCODION -->
                <div class="accordion-container">
                    <a onclick="accordion_elm(this)" href="#" class="accordion-toggle">
                        <span>
                            1. Are you a good candidate for Hair Transplant surgery?
                        </span>
                        <span class="accordion-icon">
                            <i class="fa fa-chevron-down pull-right" aria-hidden="true"></i>
                        </span>
                    </a>
                    <div class="accordion-content">
                        <p>
                            Satisfying these important pointers will make you a suitable candidate for Hair Transplant surgery in <?= ucwords($city) ?>:
                        </p>
                        <ul>
                            <li>
                                You are experiencing male pattern baldness for at least five years or more.
                            </li>
                            <li>
                                You have advanced to Stage 3 or beyond on the Norwood Scale.
                            </li>
                            <li>
                                You have healthy hair growth at the back and sides of your scalp to serve as a donor area.
                            </li>
                            <li>
                                You have scarring alopecia, a hair loss condition caused by damage to hair follicles.
                            </li>
                            <li>
                                Your hair loss misery is a result of scalp injuries, scarring, or previous cosmetic surgery procedures.
                            </li>
                            <li>
                                You have good overall health and a healthy scalp.
                            </li>
                            <li>
                                You have realistic expectations for the surgery.
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="accordion-container">
                    <a onclick="accordion_elm(this)" href="#" class="accordion-toggle">
                        <span>
                            2. What is the cost of a Hair Transplant?
                        </span>
                        <span class="accordion-icon">
                            <i class="fa fa-chevron-down pull-right" aria-hidden="true"></i>
                        </span>
                    </a>
                    <div class="accordion-content">
                        <p>
                            The cost depends mainly on the number of grafts transplanted. Mostly you will need to pay around 40 INR – 100 INR per graft. In case of a larger number of grafts, such as 2000 grafts, the cost will be between 55,000 INR – 80,000 INR. Likewise, for transplanting 5000 grafts, the cost will be in the range of 1,00,000 INR to 1,40,000 INR or maybe more. Various factors like level of baldness, transplant sessions, FUT or FUE technique used, and more, also affect the cost of Hair Transplant in <?= ucwords($city) ?>.
                        </p>
                    </div>
                </div>
                <div class="accordion-container">
                    <a onclick="accordion_elm(this)" href="#" class="accordion-toggle">
                        <span>
                            3. What are the risks related to Hair Transplant?
                        </span>
                        <span class="accordion-icon">
                            <i class="fa fa-chevron-down pull-right" aria-hidden="true"></i>
                        </span>
                    </a>
                    <div class="accordion-content">
                        <p>
                            Hair Transplant surgery is mostly a safe procedure. In rare instances, it may however accompany several complications:
                        </p>
                        <ul>
                            <li>
                                Unbearable pain in the treated area
                            </li>
                            <li>
                                Allergic behaviour to anesthesia
                            </li>
                            <li>
                                Drainage of pus or crust around the incision site
                            </li>
                            <li>
                                Unfavourable outcomes
                            </li>
                            <li>
                                Bleeding, scarring, or itching
                            </li>
                            <li>
                                Inflammation or swelling of hair follicles
                            </li>
                            <li>
                                Skin necrosis or wound dehiscence
                            </li>
                            <li>
                                Reduced sensation in the treated site of the scalp
                            </li>
                            <li>
                                Requirement for a correction surgery
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="accordion-container">
                    <a onclick="accordion_elm(this)" href="#" class="accordion-toggle">
                        <span>
                            4. When can you go for Hair Transplant?
                        </span>
                        <span class="accordion-icon">
                            <i class="fa fa-chevron-down pull-right" aria-hidden="true"></i>
                        </span>
                    </a>
                    <div class="accordion-content">
                        <p>
                            Usually, surgeons recommend the age of 21 years or beyond for Hair Transplant surgery. In case you have surpassed this stage and started noticing hair fall, this is high time to go for Hair Transplant before you go completely bald. Due to the early restoration phase, our surgeons in <?= ucwords($city) ?> may leverage your existing hair for the transplant.
                        </p>
                    </div>
                </div>
                <div class="accordion-container">
                    <a onclick="accordion_elm(this)" href="#" class="accordion-toggle">
                        <span>
                            5. What are the things to do before Hair Transplant Surgery?
                        </span>
                        <span class="accordion-icon">
                            <i class="fa fa-chevron-down pull-right" aria-hidden="true"></i>
                        </span>
                    </a>
                    <div class="accordion-content">
                        <ul>
                            <li>
                                Visit your surgeon to clear all the doubts in your mind regarding the procedure.
                            </li>
                            <li>
                                Have proper medical evaluation and undergo all the tests recommended by your surgeon, such as HCV, ECG, CBC, etc.
                            </li>
                            <li>
                                Stop drinking or smoking around 2 weeks before the surgery
                            </li>
                            <li>
                                Stop taking any existing medication unless allowed by the surgeon
                            </li>
                            <li>
                                Do not eat a spicy meal at night before the surgery in <?= ucwords($city) ?>
                            </li>
                            <li>
                                A gap of around 8 hours between your last meal and the surgery would be ideal
                            </li>
                            <li>
                                You may not be in the best of condition to go home on your own, hence make sure to have someone to accompany you
                            </li>
                            <li>
                                Arrange for loose-fitting dresses, such as button shirts, which are easy to wear and remove
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="accordion-container">
                    <a onclick="accordion_elm(this)" href="#" class="accordion-toggle">
                        <span>
                            6. What to expect on the day of Hair Transplant surgery?
                        </span>
                        <span class="accordion-icon">
                            <i class="fa fa-chevron-down pull-right" aria-hidden="true"></i>
                        </span>
                    </a>
                    <div class="accordion-content">
                        <p>
                            On the day of the treatment, arrive at your <?= ucwords($city) ?> clinic with a calm and composed mind
                        </p>
                        <ul>
                            <li>
                                Have realistic expectations with the surgery
                            </li>
                            <li>
                                Help the clinical staff with routine activities regarding patient care
                            </li>
                            <li>
                                The surgery may decide numb only your scalp by administering anesthesia instead of using it for the entire body
                            </li>
                            <li>
                                The Hair Transplant can be lengthy at times, so you need to bear patience
                            </li>
                            <li>
                                If the surgery involves transplanting large volumes of hair, one session might not be enough
                            </li>
                            <li>
                                In any such case, you will have to revisit the clinic for the completion of the remaining surgery in <?= ucwords($city) ?>
                            </li>
                            <li>
                                Your wounds will recover in a week or two. During recovery, you may expect a swollen, red, and scabby scalp. These signs will however vanish in around 10-14 days
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        <?php } elseif ($surgery_str == "men and plastic surgery") { ?>
            <div class="col padd-null">
                <div class="top-content">
                    <p>
                        Just like women, men also aspire to flaunt an appealing personality and this is no hidden fact. Our plastic surgeons hence pay due attention to the requirements of men as well. You can count on the professional excellence of our experienced surgeons to undergo your preferred treatment. Whether you are looking for a flat and slim belly or a perfect nose, reduced breasts, or wrinkle-free eyelids, our expert experts in <?= ucwords($city) ?> will help you to fulfill all these desires with appropriate surgeries.
                    </p>
                </div>
                <p class="identity">
                    Why Approach Our Surgeons Men and Plastic Surgery in <?= ucwords($city) ?>?
                </p>
                <ul>
                    <li>
                        Board-certified surgeons in <?= ucwords($city) ?>, duly trained to perform specialized plastic surgeries.
                    </li>
                    <li>
                        Experienced plastic surgeons perform varied plastic surgeries for males
                    </li>
                    <li>
                        Helps instill confidence among males with successful procedures
                    </li>
                    <li>
                        Can ensure long-lasting results with cost-effective treatments
                    </li>
                </ul>
                <p class="identity">
                    COST OF MEN’S PLASTIC SURGERY IN <?= ucwords($city) ?>
                </p>
                <p>
                    The estimated cost of plastic surgery for males differs as per the type of surgery opted for. Our plastic surgeons in <?= ucwords($city) ?> are proficient at correcting distinctive anomalies in males through various surgeries like Liposuction, Male Breast Reduction, Facelift, Hair Transplant, Botox, Blepharoplasty, and more. The rates for all of them vary significantly. You can consult our dexterous plastic surgeons directly to discuss your concerns and the surgery that you believe could help your cause. They will suggest the right treatment with the involved cost accordingly.
                </p>

                <p class="identity">OUR SERVICES</p>
                <p>
                    We are ever ready to assist our patients with all types of plastic surgery procedures. From non-invasive to minimally invasive to full body procedures, our dexterous plastic surgeon in <?= ucwords($city) ?> can perform all these surgery types with thriving results. Our excellent surgery facilities, well supported by a trained nursing staff help the surgeon to perform the required procedure with due satisfaction.
                </p>

                <p class="identity">
                    FAQs on Men’s Plastic Surgery in <?= ucwords($city) ?>
                </p>
                <!-- ACCODION -->
                <div class="accordion-container">
                    <a onclick="accordion_elm(this)" href="#" class="accordion-toggle">
                        <span>
                            1. Are you a good candidate for Men’s Plastic Surgery?
                        </span>
                        <span class="accordion-icon">
                            <i class="fa fa-chevron-down pull-right" aria-hidden="true"></i>
                        </span>
                    </a>
                    <div class="accordion-content">
                        <p>
                            To be a suitable candidate for plastic surgery aimed at enhancing your physical appearance as a male in <?= ucwords($city) ?>, you should satisfy the following conditions:
                        </p>
                        <ul>
                            <li>
                                An adult with good overall health
                            </li>
                            <li>
                                Free from any serious health conditions, such as high blood pressure, heart problems, or diabetes.
                            </li>
                            <li>
                                A non-smoker and non-drinker
                            </li>
                            <li>
                                Have excess sagging skin
                            </li>
                            <li>
                                The current body weight is near your ideal weight
                            </li>
                            <li>
                                Want to eliminate excess fat in areas such as your tummy, thighs, arms, and eyelids
                            </li>
                            <li>
                                Have realistic expectations regarding the outcome of the surgery
                            </li>
                            <li>
                                Interested in correcting any asymmetric body features
                            </li>
                            <li>
                                Wish to restore the damaged features of your body after an accident
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="accordion-container">
                    <a onclick="accordion_elm(this)" href="#" class="accordion-toggle">
                        <span>
                            2. What is the cost of Men’s Plastic Surgery?
                        </span>
                        <span class="accordion-icon">
                            <i class="fa fa-chevron-down pull-right" aria-hidden="true"></i>
                        </span>
                    </a>
                    <div class="accordion-content">
                        <p>
                            The cost of men's plastic surgery in <?= ucwords($city) ?> can differ depending on the specific procedure you opt for. For instance, dermal fillers, acne treatment, and laser skin treatment are available at rates starting from 1000 INR and increase significantly depending on the number of treatments you undergo. More extensive body contouring and reshaping surgeries may cost over 3,00,000 INR. To determine the exact cost of a procedure, it is advisable to consult any of our experienced surgeons.
                        </p>
                    </div>
                </div>
                <div class="accordion-container">
                    <a onclick="accordion_elm(this)" href="#" class="accordion-toggle">
                        <span>
                            3. What are the risks related to Men’s Plastic Surgery?
                        </span>
                        <span class="accordion-icon">
                            <i class="fa fa-chevron-down pull-right" aria-hidden="true"></i>
                        </span>
                    </a>
                    <div class="accordion-content">
                        <ul>
                            <li>
                                Allergic response to anesthesia
                            </li>
                            <li>
                                Loose or sagging skin after the surgery
                            </li>
                            <li>
                                Reduced sensation in the treated area
                            </li>
                            <li>
                                Acute pain at the incision site for the few days post surgery
                            </li>
                            <li>
                                Bleeding and swelling that persists for around a week
                            </li>
                            <li>
                                Infection due to the use of surgical items
                            </li>
                            <li>
                                Possibility of bruising, redness, itching, or fever
                            </li>
                            <li>
                                Seroma or pooling of fluid in the body
                            </li>
                            <li>
                                Hematoma or pooling of blood, which causes the skin to feel rubbery, spongy, and lumpy
                            </li>
                            <li>
                                Possibility of revisional surgery
                            </li>
                            <li>
                                Delayed healing due to poor stitching
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="accordion-container">
                    <a onclick="accordion_elm(this)" href="#" class="accordion-toggle">
                        <span>
                            4. When can you go for Men’s Plastic Surgery?
                        </span>
                        <span class="accordion-icon">
                            <i class="fa fa-chevron-down pull-right" aria-hidden="true"></i>
                        </span>
                    </a>
                    <div class="accordion-content">
                        <p>
                            Men's plastic surgery in <?= ucwords($city) ?> can be a good option for enhancing your appearance, distorted due to an injury or age. There is no set age limit for undergoing plastic surgery. Even teenagers can opt for it with their parent’s consent. However, it is wise to wait until you are at least 18 years old before considering plastic surgery.
                        </p>
                    </div>
                </div>
                <div class="accordion-container">
                    <a onclick="accordion_elm(this)" href="#" class="accordion-toggle">
                        <span>
                            5. What are the things to do before Men’s Plastic Surgery?
                        </span>
                        <span class="accordion-icon">
                            <i class="fa fa-chevron-down pull-right" aria-hidden="true"></i>
                        </span>
                    </a>
                    <div class="accordion-content">
                        <ul>
                            <li>
                                To prepare for your plastic surgery in <?= ucwords($city) ?>, follow the pre-surgery instructions provided by your surgeon
                            </li>
                            <li>
                                For optimal results, make the habit to have a healthy, balanced, and nutritious diet
                            </li>
                            <li>
                                Drinking around 6-8 glasses of water per day can cleanse and hydrate your body before the surgery
                            </li>
                            <li>
                                To ensure proper healing, it is advisable to stop smoking at least 2 weeks prior to the procedure
                            </li>
                            <li>
                                Avoid consuming alcohol for at least 2 weeks before the surgery
                            </li>
                            <li>
                                Arrange for someone to accompany you to the clinic and take you home after the surgery
                            </li>
                            <li>
                                Have domestic help to support you in daily activities for about a week following the procedure
                            </li>
                            <li>
                                Arranging for loose clothing in advance to wear after the surgery for faster recovery
                            </li>
                            <li>
                                Clear any doubts you have about plastic surgery in <?= ucwords($city) ?> with your surgeon beforehand
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="accordion-container">
                    <a onclick="accordion_elm(this)" href="#" class="accordion-toggle">
                        <span>
                            6. What to expect on the day of Men’s Plastic Surgery?
                        </span>
                        <span class="accordion-icon">
                            <i class="fa fa-chevron-down pull-right" aria-hidden="true"></i>
                        </span>
                    </a>
                    <div class="accordion-content">
                        <ul>
                            <li>
                                When arriving for Men's Plastic Surgery in <?= ucwords($city) ?>, you should come with a prepared mind
                            </li>
                            <li>
                                Discuss any concerns or reactions you have to anesthesia with the anesthesiologist to enable him to adjust the dose accordingly
                            </li>
                            <li>
                                The surgeon will utilize the most up-to-date and sophisticated equipment to make incisions in the targeted area of your body
                            </li>
                            <li>
                                Following the surgery and incision-making process, the surgeon will use sutures to close the incisions.
                            </li>
                            <li>
                                The length of the procedure will vary depending on the type of surgery you opt for and may take a few hours to complete
                            </li>
                            <li>
                                Strictly adhere to the aftercare instructions given by your surgeon for prompt healing
                            </li>
                            <li>
                                Take 2-3 weeks off from work for a satisfying recovery
                            </li>
                            <li>
                                To avoid complications from unfavorable results, make sure to have realistic expectations with the surgery
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        <?php } ?>
    </div>
</div>

<section id="procedure-listing">
    @include('cms::frontend.pages.inc-procedure-listing')
</section>


<div class="spacer">
    @include('cms::frontend.pages.footer-email')
</div>

@endsection

@push ("after-scripts")

@endpush