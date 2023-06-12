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
    <div class="container-fluid">
        <div class="container">
            <p class="identity width-100">
                top plastic surgeons in <?= ucwords($city) ?>
            </p>
            <div class="col-lg-12 doc-flex-cls padd-null">
                <?php
                $getAssignedDoctors = getAssignedDoctors(ucwords($city));
                if ($getAssignedDoctors) {
                    foreach ($getAssignedDoctors as $item) {
                        $reviews = getDataArray('vendor_reviews', 'user_id', $item->id);
                        $average = averageReview($reviews);
                ?>
                        <div class="col-lg-4">
                            <div class="col-12 doc-flex-cls doctor-box-shadow">
                                <div class="col-lg-4 padd-null">
                                    <div class="doc-img-div">
                                        <a target="_blank" href="<?= url("surgeon/dr-$item->username") ?>">
                                            <?php if (file_exists(public_path() . '/storage/user/profile/' . $item->avatar)) { ?>
                                                <img src="<?= asset('/storage/user/profile/' . $item->avatar) ?>" alt="doctor img" />
                                            <?php } else { ?>
                                                <img src="<?= asset("img/default-avatar.jpg") ?>" alt="doctor img" />
                                            <?php } ?>
                                        </a>
                                    </div>
                                    <div class="doc-star-rating">
                                        <ul class="list-inline space-list">
                                            <li class="list-inline-item">
                                                <ul class="list-inline">
                                                    <?php
                                                    $totalRating = 5;
                                                    $starRating = $average;

                                                    for ($i = 1; $i <= $totalRating; $i++) {
                                                        if ($starRating < $i) {
                                                            if (is_float($starRating) && (round($starRating) == $i)) {
                                                                echo "";
                                                            } else {
                                                                echo "<li class='list-inline-item yellow-star'>
                                                                       <i class='fa fa-star-o' aria-hidden='true'></i>
                                                                     </li>";
                                                            }
                                                        } else {
                                                            echo "<li class='list-inline-item yellow-star'>
                                                                   <i class='fa fa-star'></i>
                                                                 </li>";
                                                        }
                                                    }
                                                    ?>
                                                </ul>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="star-rating-count">
                                        (<?= count($reviews) ?>)
                                    </div>
                                </div>
                                <div class="col-lg-8 doc-details-sec padd-null">
                                    <div class="doc-name">
                                        <a target="_blank" href="<?= url("surgeon/dr-$item->username") ?>">
                                            Dr. <?= $item->first_name . " " . $item->last_name . ", MD" ?>
                                        </a>
                                    </div>
                                    <div class="doc-tagline">
                                        Plastic/Cosmetic
                                    </div>
                                    <div class="doc-tagline">
                                        Surgeon
                                    </div>
                                    <div class="doc-tagline">
                                        <?php
                                        $get_userprofiles = get_userprofiles($item->id);
                                        echo $get_userprofiles->degree;
                                        ?>
                                    </div>
                                    <div class="doc-city">
                                        <i class="fa fa-map-marker" aria-hidden="true"></i>
                                        <?= getCitiesById($item->city, 'pipe') ?>
                                    </div>
                                    <div class="doc-view-btn">
                                        <a target="_blank" href="<?= url("surgeon/dr-$item->username") ?>">
                                            view full profile
                                        </a>
                                    </div>
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

<div class="container-fluid">
    <div class="container">
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
                        in Hyderabad can help you serve your purpose with success.
                    </p>
                </div>
                <p class="identity">
                    Why Are Our Cosmetic Surgeons in Hyderabad the Best for Rhinoplasty?
                </p>
                <ul>
                    <li>
                        Deep knowledge of facial aesthetics
                    </li>
                    <li>
                        Highly experienced nose surgeons in Hyderabad
                    </li>
                    <li>
                        Certified from varied national and international plastic surgery associations
                    </li>
                    <li>
                        Extremely qualified and experienced cosmetic surgeons
                    </li>
                    <li>
                        Adept at performing high-definition nose surgery in Hyderabad
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
                    The cost of Rhinoplasty surgery in Hyderabad depends primarily on the complexity
                    of the nose surgery. Moreover, surgeon’s fees, the cost for administering
                    anesthesia, facilities provided in the operating room, medical tests,
                    surgery garments, prescriptions, etc. will be in addition to the
                    Rhinoplasty cost. Your surgeon can guide you better during a
                    candid consultation.
                </p>
                <p class="identity">OUR SERVICES</p>
                <p>
                    Approaching any of our plastic surgeons for Rhinoplasty would be the best choice
                    in Hyderabad to ensure scar-less and painless surgery with faster recovery
                    time. You can regain your aesthetic appearance at an affordable cost
                    through the most experienced hands in Hyderabad. Just consult one
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
                            <li>You can be an ideal candidate to undergo nose surgery in Hyderabad if</li>
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
                            consult your nose surgeon in Hyderabad to know the exact cost
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
                            <li>Intense pain or numbness in the initial days after the surgery in Hyderabad</li>
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
                            Hyderabad. However, the consent of parents is necessary in case
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
                                Be at the clinic with a positive frame of mind for the nose surgery in Hyderabad
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
                                expectations from the surgery in Hyderabad
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
                    Why Are Our Plastic Surgeons the Best in Hyderabad for Blepharoplasty?
                </p>
                <ul>
                    <li>
                        Prominent plastic surgeons in Hyderabad to perform Blepharoplasty
                    </li>
                    <li>
                        Helps patients in regaining the eyelid appearance appreciably
                    </li>
                    <li>
                        Can perform corrective surgery on lower or upper eyelids, or both simultaneously
                    </li>
                    <li>
                        Help to get away with the initial signs of ageing with Blepharoplasty in Hyderabad
                    </li>
                    <li>
                        A reputed member of several national and international plastic surgery associations
                    </li>
                </ul>

                <p class="identity">
                    COST OF <?= $surgery_str ?> IN <?= ucwords($city) ?>
                </p>
                <p>
                    The Blepharoplasty cost in Hyderabad may depend on whether you are about
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
                    To restore your youthful and charming eyelids, opting for Blepharoplasty in Hyderabad
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
                            To be a suitable candidate for Blepharoplasty surgery in Hyderabad,
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
                            The eyelid surgery in Hyderabad would cost you around 80,000 INR
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
                            surgeons in Hyderabad. The surgery also becomes a necessity when
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
                                Consult with your surgeon in Hyderabad about your current medication
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
                                Come to the clinic in Hyderabad with a positive attitude
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
                                You should have realistic expectations with the surgery in Hyderabad
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
                        in Hyderabad could serve your purpose significantly. Also termed
                        as Rhytidectomy, this procedure aims at getting away with the ageing
                        signs visible on the face and neck. These may include sagging skin,
                        fold lines, excess or reduced fat, muscular deformities in the jaw
                        and cheeks, double chin or turkey neck, and so on. Visit the best
                        plastic surgeon in Hyderabad to know more about Facelift
                        surgery.
                    </p>
                </div>
                <p class="identity">
                    Why should you approach Our Surgeons for Facelift surgery in Hyderabad?
                </p>
                <ul>
                    <li>
                        Hold excellence in performing reconstructive and plastic surgery treatments
                    </li>
                    <li>
                        Renowned plastic surgeons in Hyderabad for Facelift surgery
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
                    in Hyderabad, the cost may differ accordingly. Our expert facelift
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
                    experts in Hyderabad.
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
                            candidate for Facelift surgery in Hyderabad:
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
                            Hyderabad. The cost may change depending on the cosmetic
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
                            While Facelift surgery in Hyderabad can produce great results, it is wise to be aware of several potential complications associated with it:
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
                                Although rare, nerve damage can be a possibility during Facelift surgery in Hyderabad, resulting in an uneven facial appearance.
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
                            When the effect of growing age starts showing up on your face, probably in your 40s and beyond, opting for a Facelift surgery in Hyderabad could be a suitable move. It will help you break free from sagging skin, wrinkles, deep lines, and fine lines formed on the neck and facial area.
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
                                Make sure you have the requisite funds to finance Facelift surgery in Hyderabad
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
                                The duration of a Facelift surgery in Hyderabad can vary from 3-6 hours, depending on the complexity of the procedure. Additional cosmetic procedures can extend the time even further
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
                        Are you noticing sagging skin on your forehead, eyebrows, and upper eyelids? If yes, it is high time to go for a Brow Lift surgery in Hyderabad. Surgeons use two different methods to lift the eyebrows and forehead.
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
                    Why Consult Our Surgeons for Brow Lift Surgery in Hyderabad
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
                    The cost for Brow Lift in Hyderabad may differ as per the surgeon or the hospital you choose for the treatment. The cost of medicines, hospital facilities, lab tests, anesthesia, or the surgeon’s fees will also affect the overall expense. You can connect with any of our Brow lift surgeons in Hyderabad to learn more about the cost of this treatment.
                </p>
                <p class="identity">OUR SERVICES</p>
                <p>
                    Our brow lift surgeons in Hyderabad will care to perform the surgery with complete satisfaction. They will make you feel relaxed during the entire procedure, thanks to their safe hands and the cordial assistance of their medical staff. Our expert surgeons extend the facilities of advanced surgery equipment, operation beds, experienced nursing staff, and every possible medical amenity to ensure long-lasting success for your Brow lift surgery in Hyderabad.
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
                            To be an ideal candidate for Brow Lift surgery in Hyderabad, abiding by these points would be essential:
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
                            The Brow Lift surgery in Hyderabad would cost you around 60,000 INR to 1,30,000 INR. The expense may increase further depending on the surgeon, hospital, facilities, techniques, medical equipment, and other major factors.
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
                            People start developing droopy brow lines, wrinkles, or fine lines across the forehead as they cross the 40-year mark. The age group of 40-65 is hence a probable time to opt for Brow Lift surgery in Hyderabad. In rare cases, if young patients aged between their 20s and 30s get “worry lines” due to genetic problems they may also undergo Brow Lift surgery.
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
                        Wrinkling and creasing around the neck often leave you with an aged look. To get away with fat and excess skin responsible for these aging signs, a neck lift is a worthwhile treatment. Our neck lift surgeons in Hyderabad can help you get a slimmer and smoother neck with a carefully done treatment.
                    </p>
                </div>
                <p class="identity">
                    Why Approach Our Surgeons for Neck Lift Surgery in Hyderabad?
                </p>
                <ul>
                    <li>
                        Skilled in performing surgery on the area surrounding the neck and head
                    </li>
                    <li>
                        Work on a natural approach to make your neck proportionate to your facial features
                    </li>
                    <li>
                        Carry out candid discussions with the patients before performing neck lift surgery in Hyderabad
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
                    The cost of neck lift surgery in Hyderabad differs according to the surgeon you approach for the treatment. The type of surgery can also make a difference in the cost. For example:
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
                    Our neck lift surgeons in Hyderabad could make a difference to your facial appearance with an improved neck. Our experts can tighten the skin around your neck to enable you to shun away the aging signs. Feel free to approach our experienced surgeons and get the treatment through advanced medical equipment, with cordial support from their nursing staff.
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
                            To be a good candidate for Neck Lift in Hyderabad, you should fulfil the below-mentioned conditions:
                        </p>
                        <ul>
                            <li>
                                Fulfilling the conditions below will make you an ideal candidate for Neck Lift surgery in Hyderabad
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
                            The cost of a Neck Lift surgery in Hyderabad ranges from 70,000 INR to 1,00,000 INR. The cost may depend on several factors, such as the extent of skin and fat removal, muscle plication, the requirement for liposuction, and the level of skill and experience of the surgeon performing the procedure. Medical facilities, medicines, surgeon’s fees, etc., also add up to the cost of Neck Lift surgery.
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
                                Asymmetric neck after the surgery in Hyderabad
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
                            If you are experiencing significant weight loss, loose neck skin, excess fat deposits, or horizontal skin bands (neckbands), you could consider opting for a Neck Lift procedure in Hyderabad. Typically, individuals between the ages of 35 and 65 opt for this procedure. It is important to note that you should remain fit both physically and mentally before undergoing surgery.
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
                            If you are considering a Neck lift surgery in Hyderabad, it is important to include the following items on your checklist:
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
                                During the Neck Lift surgery in Hyderabad, be at the clinic with a positive attitude
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
                                Following the surgery in Hyderabad, it generally takes 2 weeks for pain, swelling, and bruising to subside and for the neck contours to become visible
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
                        While performing Chin Surgery the plastic surgeon places a custom-fit chin implant to enhance the facial appearance of the patient. Also termed Mentoplasty or Genioplasty, the procedure improves the jawline structure and strengthens a recessed and weaker chin. Our chin surgeons in Hyderabad hold dexterity in executing this treatment with extreme precision.
                    </p>
                </div>
                <p class="identity">
                    Why Consult Our Surgeons for Chin Surgery in Hyderabad?
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
                    The type of chin implant that you opt for Chin Surgery is one of the mainstay factors to decide the surgery cost. For instance, you can choose bone graft, cadaveric tissue graft silicone or polyethylene implant, or autologous tissue graft. This will however exclude the cost of anesthetics, the fees of the surgeon, and the charges for operating room facilities. Direct discussion with any of our chin surgeons in Hyderabad will help you get a deeper insight into the cost of the entire procedure and the additional facilities.
                </p>
                <p class="identity">OUR SERVICES</p>
                <p>
                    With our highly experienced chin surgeons in Hyderabad performing your surgery, you are in safe hands. Their sophisticated operating rooms studded with advanced surgery equipment will make your treatment easier and hassle-free. You can always contact our expert chin surgeons in Hyderabad to get the ingrained details associated with Chin Surgery.
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
                            If you want to opt for Chin Surgery in Hyderabad, adhering to the following points will make you an ideal candidate
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
                            Undergoing Chin Surgery in Hyderabad may cost you around 70,000 INR - 150,000 INR. The price may vary depending on the surgeon’s fees, the choice of hospital or clinic, the procedure carried out, etc.
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
                            Several complications may arise as a result of Chin Surgery in Hyderabad:
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
                            If you are not happy with the projection or appearance of your chin, the option to undergo Chin Surgery in Hyderabad is wide open. This cosmetic procedure can make your chin appear on par with other facial features. Although there is no specific age requirement for Chin Surgery, individuals must have a fully developed chin to undergo the procedure. Even teenagers 15-16 years old can undergo this surgery with the consent of their parents.
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
                                Before getting Chin Surgery in Hyderabad, make sure to consult with your cosmetic surgeon and clarify any doubts or concerns you may have.
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
                                Our surgeons in Hyderabad will use the latest techniques to make incisions either inside your mouth or under your chin.
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
                            The Trustworthy Cheek Augmentation Surgeons in Hyderabad
                        </strong>
                    </p>
                    <p>
                        If you are noticing a flat appearance of your mid-face, it is due to your deformed cheekbones. It may have happened due to an accident or any other reason. In any case, opting for cheek implant surgery is a befitting solution to remedy this flawed appearance. The sole purpose of this surgery is to lift or add volume to your cheeks. Our Cheek Augmentation surgeons in Hyderabad hold a thriving record of performing cheek implants and fat grafting - the two widely performed surgeries in this regard.
                    </p>
                </div>
                <p class="identity">
                    Why Consult Our Surgeons for Cheek Augmentation Surgery in Hyderabad?
                </p>
                <ul>
                    <li>
                        Have performed countless cheek surgeries to enhance the facial appearance of the patients
                    </li>
                    <li>
                        Extremely qualified and experienced to perform Cheek Augmentation surgery in Hyderabad
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
                    The cost of Cheek Augmentation surgery in Hyderabad relies largely on the type of cheek implant used for your treatment. The charges for surgeon’s fees, medical facilities, operating room, anesthesia, and other associated expenses will also add up to the overall cost of Cheek Augmentation. Contact our Cheek Augmentation surgeon in Hyderabad to get detailed info about the surgery cost.
                </p>

                <p class="identity">OUR SERVICES</p>
                <p>
                    During your surgery, our surgeons make sure to equip make you feel comfortable the best way possible. They also boast of their robust equipment and cordial nursing staff. Moreover, our Cheek Augmentation surgeons in Hyderabad are among the topmost in the healthcare industry. Overall, you can leave their clinics duly satisfied with an enhanced facial appearance.
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
                            If you want to undergo Cheek Augmentation surgery in Hyderabad, you should abide by the following criteria:
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
                            Cheek Augmentation surgery in Hyderabad costs between 100,000 INR to 130,000 INR on average. Additional procedures done in conjunction with Cheek Augmentation will result in extra expenses.
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
                            Cheek Augmentation is a suitable option if you want to enhance the appearance of your sagging, worn-out, or hollow cheek. The surgery can be performed in Hyderabad on individuals over the age of 18, with the majority of patients being between 35-65 years old.
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
                            To prepare for Cheek Augmentation surgery in Hyderabad, you should do the following:
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
                                On the day of Cheek Augmentation surgery in Hyderabad, be at the clinic with a calm and composed mindset.
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
                                Have realistic expectations with the Cheek Augmentation surgery in Hyderabad
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
                        Do you wish to get plumper and fuller lips? If yes, Lip Augmentation is the best cosmetic surgery procedure to attain your wish. You can opt from among silicone or expanded polytetrafluoroethylene implants. Alternatively, lip fillers such as Restylane and Juvederm are among the other widely preferred choices. Our experienced cosmetic surgeons in Hyderabad can help you opt for the most suitable Lip Augmentation treatment.
                    </p>
                </div>
                <p class="identity">
                    Why Are Our Surgeons the Preferred Lip Augmentation Surgeons in Hyderabad?
                </p>
                <ul>
                    <li>
                        Expert in carrying out Lip Augmentation procedures in Hyderabad
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
                    Several factors play their part in defining the cost of the Lip Augmentation procedure. These may include Lip Augmentation grade, advanced technology, fees of the surgeon, auxiliary services, and more. Your choice between lip implants and lip fillers will also incur different costs. For a better estimate of the involved surgery costs, you can always consult any of our renowned Lip Augmentation surgeons in Hyderabad.
                </p>
                <p class="identity">OUR SERVICES</p>
                <p>
                    Approach any of our Lip Augmentation experts in Hyderabad to get an enhanced lip appearance. The treatment will help you get more natural and fuller lips without leaving behind noticeable scars or marks. Their sophisticated operating room, laced with advanced medical equipment will make your treatment simpler than you could ever think of. Feel free to connect with skilled plastic surgeons and make way for an enhanced facial appearance.
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
                            To be a suitable candidate for Lip Augmentation in Hyderabad, you must meet the following essential requirements:
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
                            A Lip Augmentation procedure in Hyderabad will cost around 40,000 INR - 1,00,000 INR. The amount could differ significantly based on the cosmetic surgeon and the treatment you choose, the facilities provided, and several other factors.
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
                            Mentioned below are some of the potential risks and complications associated with undergoing Lip Augmentation surgery in Hyderabad:
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
                            You can go for Lip Augmentation Surgery at almost any age beyond 18 years. At this age, you are more prone to have a healthy body, immune enough to withstand the effect of anesthesia and other medicines given during the surgery. You would feel the need to undergo this surgery in Hyderabad if you observe thin lips or decreased lip volume because of ageing fact.
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
                            Following these guidelines would be worthwhile in preparing for a Lip Augmentation surgery in Hyderabad:
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
                                Usually, a Lip Augmentation surgery done in a Hyderabad clinic may take around 30 minutes to complete
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
                                Make sure to have realistic expectations with the Lip Augmentation surgery in Hyderabad
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        <?php } elseif ($surgery_str == "buccal fat removal") { ?>
            <div class="col padd-null">
                <div class="top-content">
                    <p>
                        Do you want to break free from your round face or baby, chipmunk, or chubby cheeks? Buccal Fat Removal in Hyderabad is the best remedy to your problem. Also termed Buccal Lipectomy or Cheek Fat Reduction, it refers to the elimination of fat pads accumulated in the cheek area. When done successfully through one of our experienced Buccal Fat Removal surgeons in Hyderabad, the treatment results in a finely contoured lower jawline and upper cheekbone.
                    </p>
                </div>
                <p class="identity">
                    Why prefer Our Surgeons for Buccal Fat Removal in Hyderabad?
                </p>
                <ul>
                    <li>
                        Years of expertise in performing Buccal Fat Removal in Hyderabad
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
                    The cost would depend largely on the clinic and the surgeon you opt for the treatment. Likewise, the fees of the surgeon, post-operative follow-ups, medicines, hospital facility, and the patient’s profile also contribute toward deciding the cost of Buccal Fat Removal in Hyderabad. Our renowned plastic surgeons are the best to inform you about the cost involved with the Buccal Fat Removal treatment in Hyderabad.
                </p>
                <p class="identity">
                    OUR SERVICES
                </p>
                <p>
                    Approach our Buccal Fat Removal experts in Hyderabad to reduce your cheek fat and attain a flawless appearance. With our experienced surgeons, you will get advanced medical facilities, upscale treatment equipment, a well-equipped operating room, and a cordial nursing staff. Consult any of our renowned plastic surgeons today and proceed towards regaining your charming appearance.
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
                            To be a suitable candidate for Buccal Fat Removal surgery in Hyderabad, you should abide by the below-mentioned points:
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
                            The estimated cost of a Buccal Fat Removal procedure in Hyderabad is approximately 65,000 INR. However, this cost may vary depending on various factors such as the location, the experience of the cosmetic surgeon, and additional recovery expenses. The type of anesthesia administered and the prescription medication required for aftercare may affect the total cost of the procedure as well.
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
                            Here are some of the risks associated with Buccal Fat Removal surgery in Hyderabad
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
                            The growth of fat pads continues until a person reaches their twenties. Cosmetic surgeons hence advise patients aged 20 and above to consider undergoing Buccal Fat Removal surgery in Hyderabad. Individuals who feel that their larger-than-desired fat pads are giving them a youthful or childlike appearance may also choose to undergo this surgery.
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
                                Clear your confusion about the Buccal Fat Removal surgery in Hyderabad
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
                                Buccal Fat Removal in Hyderabad will take around 30 minutes to complete, which is much less time compared to other surgeries.
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
                                In any case, you should have realistic expectations with the Buccal Fat Removal surgery in Hyderabad
                            </li>
                        </ul>
                    </div>
                </div>

            </div>
        <?php } elseif ($surgery_str == "ear surgery") { ?>
            <div class="col padd-null">
                <div class="top-content">
                    <p>
                        Do you want to regain your damaged or weird-looking ears back in their natural form? If yes, Ear Surgery is the best solution to serve your cause. Also known as Otoplasty or Pinnaplasty, this cosmetic surgery procedure reshapes, resizes, or repositions your ears as per the severity of your case. The treatment helps to regain the natural appearance of your years that have become defective by birth or due to an accident. The Ear Surgery in Hyderabad performed by our seasoned ear surgeons can also repair perforations, take care of hearing problems, and mitigate the pain resulting from otitis media.
                    </p>
                </div>
                <p class="identity">
                    Why Choose Our Surgeons for Ear Surgery in Hyderabad?
                </p>
                <ul>
                    <li>
                        Experienced surgeons in Hyderabad to perform Ear Surgery
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
                    The charges for ear reconstruction surgery in Hyderabad will vary according to the surgeon and the clinic you approach. The cost is likely to include the fees of the surgeon, pre and post-operative care, anesthesia charges, medical facilities, surgery garments, and more. For a better understanding of the cost, you can have a direct appointment with any of our expert ear surgeons in Hyderabad.
                </p>
                <p class="identity">OUR SERVICES</p>
                <p>
                    Get a rejuvenated ear with carefully done surgery through our expert ear surgeons in Hyderabad. Whether your bad-shaped ear is the result of a congenital deformity or an accident, our specialist surgeon will make sure to bring it back to its natural shape. The advanced facilities we provide at our clinic will further assist in your surgery. We keep you at the disposal of industry best surgery equipment, caring nursing staff, and refurbished surgery rooms. Contact our ear surgeon to learn more about this treatment. You will leave our clinic, happy and satisfied for sure.
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
                            To be a suitable candidate for Otoplasty in Hyderabad would need you to fulfil the following important points:
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
                            The cost of Ear Surgery in Hyderabad may range between 40,000 INR - 60,000 INR or more, depending on the hospital, the choice of Surgeon, the type of anesthesia used, and other factors. Fixing an appointment with any of our cosmetic surgeons will help you to get exact figures regarding the Otoplasty.
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
                            You can undergo Ear Surgery at any age after your ears develop completely. Usually, human ears grow to their full potential at the age of 5. However, doctors still advise waiting till the kid gets 7 years old to go for the surgery in Hyderabad. From 7 to adulthood, any time is suitable for the procedure.
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
                            Before you go under the knife for Otoplasty in Hyderabad, here are some significant points to care for:
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
                                Arrive at the clinic with a positive frame of mind on the day of Otoplasty surgery in Hyderabad
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
                                Make sure to have realistic expectations with the treatment in Hyderabad for a quick recovery
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
                            Renowned Surgeons for Breast Augmentation in Hyderabad
                        </strong>
                    </p>
                    <p>
                        Augmentation mammoplasty or Breast Augmentation aims at enhancing the shape, size, roundness, or completeness of the female breasts. The surgery requires our surgeons in Hyderabad to use saline, silicone implants beneath the breast tissue. A composite breast implant is also one of the widely used options for Breast Augmentation. With our consummate surgeons working for your cause, you can ensure to regain the appearance of your breasts as per your expectation.
                    </p>
                </div>
                <p class="identity">
                    Why Approach Our Surgeons for Breast Augmentation in Hyderabad?
                </p>
                <ul>
                    <li>
                        Top plastic surgeons in Hyderabad for Breast Enhancement
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
                    The cost of a breast enhancement procedure depends largely on the type of implant used, the level of medical facilities provided, the fees of the surgeon, anesthesia, and other charges. You can connect directly with our Breast Augmentation surgeon in Hyderabad to know about the cost of the surgery in detail.
                </p>
                <p class="identity">OUR SERVICES</p>
                <p>
                    Our expert surgeons perform Breast Augmentation surgery in Hyderabad with due satisfaction and success. Advanced facilities and services at their respective setups, help them further in carrying out the procedure without hassles. Keeping pace with the latest trends in the healthcare domain, our surgeons care to ensure upscale and advanced services.
                </p>
                <p>
                    All our experts leverage sophisticated technical equipment for the surgery and their nursing staff tries its best to attend to all your concerns during the surgery. Fix your appointment with our Breast Augmentation surgeon in Hyderabad today and get the best possible treatment in our clinic.
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
                            You need to abide by the below-mentioned conditions to be a suitable candidate for Breast Augmentation surgery in Hyderabad:
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
                            The cost of Breast Augmentation surgery in Hyderabad may range between 1,00,000 INR and 1,50,000 INR or even more. Much will rely on the breast implant technique used. Consulting any of our surgeons will help you to know the actual cost of the procedure
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
                            Any time after a woman’s breasts get fully developed is a good time to go for Breast Augmentation surgery in Hyderabad. To be precise, you should be at least 18 years old to undergo the procedure. A majority of women opt for this surgery in Hyderabad when they are between their 20s and 30 as they are likely to be healthier, well-developed, more aware, and duly prepared for the surgery in this age group.
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
                                Avoid eating something after midnight prior to the surgery in Hyderabad
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
                                You should bear a cool and calm mind on the surgery day in Hyderabad
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
                        Do you want to get rid of excess skin accumulated on your breasts to avoid that sagging appearance? A Breast Lift is a preferred surgery option in Hyderabad to remedy your situation. Our experienced plastic surgeons can help you get an appealing Breast Lift by removing the unwanted skin and reshaping the breast tissue. Also termed Mastopexy, females prefer opting for this surgery after delivery to avoid experiencing droopy breasts.
                    </p>
                </div>
                <p class="identity">
                    Why Are Our Surgeons the Best for a Breast Lift in Hyderabad?
                </p>
                <ul>
                    <li>
                        Renowned plastic surgeons in Hyderabad for Breast Lift
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
                        Cost-effective Breast Lift surgeons in Hyderabad
                    </li>
                </ul>
                <p class="identity">
                    COST OF <?= $surgery_str ?> SURGERY IN <?= ucwords($city) ?></p>
                <p>
                    The estimated cost of Breast Lift surgery relies on the type of Breast Lift procedure used, accreditation, surgical facilities utilised, and the surgeon’s experience. The cost of this surgery also includes the charges for administering anesthesia, prescribed medication, medical tests, surgical facility, post-surgery garments, and more. Interacting with any of our Breast Lift surgeons will give you a better idea about the involved cost.
                </p>
                <p class="identity">OUR SERVICES</p>
                <p>
                    Our Breast Lift surgeons hold high credibility in performing successful procedures, thereby rebuilding confidence among the patients. Whether you are opting for a primary Breast Lift or a revision Breast Lift, our surgeons will provide you with all the requisite facilities necessary for the procedure. Their advanced medical equipment, facilities, and cordial nursing staff will make you feel comfortable during the surgery. Feel free to contact any of our expert Breast Lift surgeons in Hyderabad to give an effective lift to your sagging breasts.
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
                            To be an ideal candidate for Breast Lift surgery in Hyderabad, you would need to fulfil the following pointers:
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
                            The cost of Breast Lift surgery in Hyderabad will fall somewhere between 1,50,000 INR to 2,0,000 INR. Additional procedures like Breast Implants will add up to your expenditure accordingly. Feel free to consult any of our experienced surgeons to get detailed info on the involved cost.
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
                            There can be several risks associated with Breast Lift surgery in Hyderabad on rare occasions.
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
                            Having completely developed breasts is one of the primary conditions to go for a Breast Lift surgery. You can be a teenager, in your 20s, or maybe older. But if you satisfy this one condition, you can opt for the surgery without hassles. Women often consider this procedure in Hyderabad due to improve their breast size that has become badly shaped due to pregnancy-related issues, weight changes, or genetic reasons,
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
                            The points below can prove helpful to consider before going for the Breast Lift surgery in Hyderabad:
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
                                You should have a positive attitude with a relaxed mind on the day of surgery in Hyderabad
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
                                You can expect your breast tissues to be reshaped and repositioned after the completion of the Breast Lift surgery in Hyderabad,
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
                            Renowned Surgeons in Hyderabad for Breast Reduction Surgery
                        </strong>
                    </p>
                    <p>
                        Are you unhappy with your extra-large breasts (macromastia) and envy women with comparably smaller breasts? Don’t be! Our plastic surgeons in Hyderabad can help you with Breast Reduction surgery to get your curves in shape. Also termed as reduction mammoplasty, this procedure requires the removal of excess breast tissue, glandular tissue, and skin to attain a size, which is proportionate to your body. Our experienced surgeons will ensure relief from physical discomfort, back pain, and other problems arising due to large breasts as well.
                    </p>
                </div>
                <p class="identity">
                    Why Are Our Surgeons Best Suited to Perform Breast Reduction in Hyderabad?
                </p>
                <ul>
                    <li>
                        Adept expertise to perform Breast Reduction surgery in Hyderabad
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
                    The cost of Breast Reduction surgery depends largely on the type of Breast Reduction procedure performed. In addition, factors like surgical amenities, surgeon’s expertise and experience, medications, etc. also contribute to deciding the Breast Reduction surgery cost in Hyderabad. It would be worthwhile to consult our expert plastic surgeon for detailed information on the cost of the surgery.
                </p>
                <p class="identity">
                    OUR SERVICES
                </p>
                <p>
                    Our surgeons provide advanced treatment facilities in Hyderabad that will make you feel extremely comfortable during the entire surgery. Their surgery rooms comprise all the sophisticated facilities required for breast surgery, including the latest equipment and upscale operation beds. The efficient nursing team of our surgeons cares for you with perfection throughout the surgery. Furthermore, with our consummate Breast Reduction surgeon doing the job, you can feel yourself in the safest hands.
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
                            An ideal candidate for Breast Reduction surgery in Hyderabad should satisfy the below-mentioned criteria:
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
                            The typical cost of a Breast Reduction procedure in Hyderabad is between 1,00,000 INR to 2,00,000 INR depending on the scale of the surgery. Anyone who has recently undergone the surgery can help you get a better idea of the cost involved. Besides, consulting with your surgeon in Hyderabad is always advisable to know about the cost of Breast Reduction surgery.
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
                            Ideally, you should be more than 18 years old to opt for this surgery and your breasts must be completely developed. Young girls in their teens who are facing severe back problems can also choose to undergo this surgery in Hyderabad. Women with large breasts often opt for this procedure in their old age to get rid of poor posture, chronic neck pain, etc.
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
                            Before going for the Breast Reduction surgery in Hyderabad you should take care to do the following:
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
                                Come to the clinic in Hyderabad with a calm and composed attitude
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
                            Well-Known Surgeons in Hyderabad for Breast Implant Removal Surgery
                        </strong>
                    </p>
                    <p>
                        Many reasons could tend the females to opt for Breast Implant Removal, such as breast cancer or a change in the lifecycle. Many other conditions bleeding, infection, calcium build-up, necrosis, capsular contraction, and more could also prompt them to get away with the implants. The procedure is just opposite to breast augmentation and aims at removing breast implants or revising the breast size and shape. Our skilled plastic surgeons in Hyderabad hold high end-expertise in performing this surgery with thriving results.
                    </p>
                </div>
                <p class="identity">
                    Why Approach Our Surgeons for Breast Implant Removal in Hyderabad?
                </p>
                <ul>
                    <li>
                        Best plastic surgeons in Hyderabad for Breast Implant Removal surgery
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
                        Extremely qualified and experienced plastic surgeons in Hyderabad
                    </li>
                </ul>
                <p class="identity">
                    COST OF <?= $surgery_str ?> IN <?= ucwords($city) ?>
                </p>
                <p>
                    The cost of Breast Implant Removal depends mainly upon the expertise of the surgeon, the location of treatment, and the type of procedure. It may include the surgeon’s fee, facilities used during the treatment, post-operative garments, surgeon’s prescription, etc. While some insurance plans may cover Breast Implant Removal in Hyderabad if deemed medically necessary, the cost of getting new implants may not be covered.
                </p>
                <p class="identity">OUR SERVICES</p>
                <p>
                    Similar to breast augmentation and breast reduction surgeries, we offer comprehensive facilities and services for Breast Implant Removal in Hyderabad. Our experienced surgeons are committed to providing top-notch treatment facilities, utilising the latest and advanced surgical equipment, and assisting you with the friendly nursing staff. You can expect a fulfilling Breast Implant Removal under the supervision of our qualified and proficient plastic surgeons.
                </p>
                <!-- oooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooo -->
                <p class="identity">
                    FAQs on Breast Implant Removal Surgery in Hyderabad
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
                            Conditions that make you a suitable candidate for Breast Implant Removal in Hyderabad include:
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
                            Typically, the cost of Breast Implant Removal surgery in Hyderabad is around 100,000 INR, but it may vary depending on several factors. For detailed and accurate information about the cost, we recommend scheduling a consultation with any of our experienced cosmetic surgeons.
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
                            Mostly the Breast Implant Removal surgery in Hyderabad will accompany rare or no complications at all. Here are some of the occasional risks that may occur:
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
                                Possible need for correction surgery in Hyderabad
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
                            Breast Implant Removal in Hyderabad is an option for those who are not satisfied with the results of their breast implant surgery. Generally, any healthy adult woman can undergo this procedure. It is however essential to consult with your surgeon about your reasons for implant removal, as he can provide better guidance.
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
                                Consult your surgeon about the expected outcomes of the implant removal surgery in Hyderabad for better preparation
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
                                It is important to approach the day of Breast Implant Removal surgery in Hyderabad with a calm and positive mindset.
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
                                Managing your expectations and having realistic goals is crucial for a successful Breast Implant Removal procedure in Hyderabad.
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
                            The Well-Known Surgeons in Hyderabad for Breast Implant Revision Surgery
                        </strong>
                    </p>
                    <p>
                        Breast implant revision aims at improving the appearance of female breasts by replacing old implants with new ones. This may tend the plastic surgeons in Hyderabad to increase or decrease the implant size, reduce breast size or lift it. Typically, women may consider breast revision surgery around 10 or more years after breast implant surgery. The purpose may be to improve the aesthetic appearance of the breasts, prevent sagging breasts due to dislocated implants, or address issues such as implant leakage or rupture.
                    </p>
                </div>
                <p class="identity">
                    Why Are Our Surgeons the Best for Breast Implant Revision in Hyderabad?
                </p>
                <ul>
                    <li>
                        Experienced plastic surgeons in Hyderabad to perform breast implant revision surgery
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
                    The cost of breast implant revision in Hyderabad will depend on various factors such as the type of breast implant replacement, the expertise of the surgeon, the hospital or clinic, and the geographical location. Depending on the complications resulting from your previous breast implants, your insurance may cover a portion of the surgery cost. If you undergo breast revision surgery within 10 years of the initial surgery, your insurance may also cover the cost of the procedure.
                </p>
                <p class="identity">OUR SERVICES</p>
                <p>
                    Our Surgeons are well equipped with advanced facilities when it comes to performing breast revision surgery in Hyderabad. You will feel relaxed and at ease during the procedure. Our experienced breast revision surgeons will perform the treatment without hassles and with successful results. Moreover, the assistance of their capable nursing staff, advanced surgery equipment, and the sophisticated operating room will be of great help in the success of your operation. Connect with any of our surgeons today and fix your appointment for the surgery.
                </p>

                <!-- oooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooooo -->
                <p class="identity">
                    FAQs on Breast Implant Removal Surgery in Hyderabad
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
                            An ideal candidate for Breast Revision surgery in Hyderabad should meet the following criteria:
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
                            The average cost of Breast Revision Surgery in Hyderabad starts from around 1,00,000 INR. The expenses may rise further depending on the complications of the procedure. Factors such as the type and size of the breast implants chosen, the condition of the current implants, and the expertise of the cosmetic surgeon may affect the cost.
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
                            Undergoing Breast Revision in Hyderabad may lead to several risks on an occasional basis:
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
                            Breast Revision surgery in Hyderabad may become inevitable for the following reasons:
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
                            To prepare for Breast Revision Surgery in Hyderabad, taking the following steps would be advisable:
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
                                To perform the Breast Revision surgery in Hyderabad, the surgeon will make an incision.
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
                                Therefore, it is good to have realistic expectations for Breast Revision surgery in Hyderabad.
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
                            Well-Known Surgeons in Hyderabad for Gynecomastia Surgery
                        </strong>
                    </p>
                    <p>
                        Gynecomastia or reduction mammoplasty refers to the condition of enlarged or extensively developed breasts in men. It may result due to obesity, hormonal modifications, or because of hereditary reasons. If not treated timely, it may lead to lower self-esteem and discomfort. Our gynecomastia surgeons in Hyderabad hold adept expertise and experience to reduce the extended breasts in males, along with being chest contours back in shape.
                    </p>
                </div>
                <p class="identity">
                    Why Are Our Surgeons the Best for Gynecomastia Surgery in Hyderabad?
                </p>
                <ul>
                    <li>
                        Highly qualified and experienced to perform gynecomastia surgery in Hyderabad
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
                    The cost of this surgery depends on the geographical location, the reputation of the clinic and the surgeon, the fees of the surgeon, and the method to deal with gynecomastia. Besides, the expenses will also subsume anesthesia, medical test, operating room facility, and imaging studies, if any. A candid discussion with any of our surgeons in Hyderabad can help you serve this purpose the better way.
                </p>
                <p class="identity">OUR SERVICES</p>
                <p>
                    You can rely on the expert medical assistance of our surgeons during your gynecomastia surgery in Hyderabad. Our highly qualified and consummate surgeons will make sure that you get results as expected. With helpful nursing staff, advanced surgery equipment, and upscale operation rooms, you can undergo surgery without hassles. Feel free to connect with any of our skilled and experienced plastic surgeons and clear all your doubts before going under the knife. For sure, you will leave the clinic in Hyderabad with more confidence and high self-esteem.
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
                            Abiding by the below-mentioned points will help you be an ideal candidate for Gynecomastia surgery in Hyderabad:
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
                            The cost of male breast surgery in Hyderabad is likely to fall within the range of 30,000 to 2,00,000 Indian rupees. The total expense of the procedure will also get influenced by the surgical technique employed by the surgeon.
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
                            A majority of surgeons in Hyderabad suggest that individuals with Gynecomastia should wait until they attain the age of 18 years old before considering surgery. By this age, the human body is likely to have developed to its maximum potential. Generally, older men are more inclined to undergo this procedure.
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
                                After the completion of the surgery in Hyderabad, you may experience mild soreness in the initial days.
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
                        Liposuction can help you out. Yes! It is usual to develop unwanted fat on your belly, hips, thighs, arms, or face. Nevertheless, if despite exercising or regular dieting you are not able to lose it, Liposuction is a befitting solution. Consulting any of our ideal plastic surgeons in Hyderabad can assist in getting you rid of uninvited fat.
                    </p>
                </div>
                <p class="identity">
                    Why Choose Our Cosmetic Surgeons for Liposuction in <?= ucwords($city) ?>?
                </p>
                <ul>
                    <li>
                        Trustworthy plastic surgeons in Hyderabad, with expertise in performing Liposuction
                    </li>
                    <li>
                        Capable of performing the surgery on any part of your body
                    </li>
                    <li>
                        Leverage advanced fat reduction techniques leaving behind minimal scars
                    </li>
                    <li>
                        Assist you regain your lost confidence with a successful Liposuction surgery in Hyderabad
                    </li>
                    <li>
                        Can perform several treatments like Ultrasound-Assisted Liposuction, Tumescent Liposuction, Power-Assisted Liposuction, and Suction-Assisted Liposuction with ease
                    </li>
                    <li>
                        Renowned plastic surgeons in Hyderabad with years of experience in carrying out Liposuction surgery with positive results
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
                    We help you get the best Liposuction surgery in Hyderabad under the supervision of our experienced plastic surgeons. With us, you can make the most of advanced surgery equipment, upscale Liposuction procedures, amicable hospital staff members, and the best cleanliness you could ever expect. Feel free to consult our bankable Liposuction surgeons in Hyderabad and put forth your first step toward regaining a fat-free body.
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
                            To be an ideal candidate for Liposuction in Hyderabad you should satisfy the following conditions:
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
                            The surgery for Liposuction in Hyderabad may go up to 1.5 lakhs depending on the surgeon you choose and various other factors. It would be best to consult any of our surgeons to know the actual cost of Liposuction surgery.
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
                            Among the prominent risks and complications related to Liposuction surgery in Hyderabad include the following:
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
                            Skin elasticity of the human body is the best between the age of 30 and 35 years. Hence, if you are in this age bracket, it is the right time to go for Liposuction surgery in Hyderabad. Consultation with any of our surgeons will help you to know more about the right time to opt for Liposuction.
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
                                Focus on muscle-building months before undergoing the surgery in Hyderabad
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
                                When going for Liposuction surgery in Hyderabad, have a calm and composed mind
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
                            The Expert Tummy Tuck Surgeons in Hyderabad
                        </strong>
                    </p>
                    <p>
                        Are you fed up with excess fat on your belly and cannot wait to get rid of it? Tummy tuck surgery is the best solution for your problem. Also known as abdominoplasty, this surgery helps to get a more flat and firm abdomen. It also tightens and repairs the underlying tendons and muscles. Consulting our tummy tuck surgeons in Hyderabad will be beneficial to enable you to break free from your fat.
                    </p>
                </div>
                <p class="identity">
                    Why Approach Our Plastic Surgeons for Tummy Tuck Surgery in Hyderabad?
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
                    The charges of the abdominoplasty in Hyderabad will depend largely on the experience of the surgeon, the type of surgery done, and the location of the clinic. Additionally, factors like surgical facilities in the operating room, anesthesia, post-surgery garments, and medical tests also play an important role in fixing the cost of surgery. It is best to discuss the cost of tummy tuck surgery with our experienced plastic surgeon. Mostly, insurance companies do not cover this procedure, so make sure to clarify with your medical insurance provider if they will consider insurance for Tummy Tuck surgery.
                </p>

                <p class="identity">OUR SERVICES</p>
                <p>
                    Our surgeons provide industry best amenities in their clinics in Hyderabad. While you opt to undergo the tummy tuck surgery from our experienced surgeons, you can remain rest assured of a satiating treatment. Their nursing staff will be prompt to attend to your necessities. Further, they also offer the best operating room facilities and advanced medical equipment to ease the entire procedure. Feel free to connect with any of our surgeons to get detailed information about the tummy tuck surgery at our end.
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
                                These conditions will necessitate your candidature for Tummy Tuck surgery n Hyderabad
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
                            The estimated cost of Tummy Tuck surgery in Hyderabad ranges between 1,00,000 INR and 2,00,000 INR. To know accurate figures, consultation with any of our plastic surgeons will be advisable.
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
                            You could opt for a Tummy Tuck surgery in Hyderabad at almost any age beyond 18 years. Usually, women in their 30s or 40s opt for this procedure, as their body is likely to be healthy in this age bracket, and they can maintain the results for a long time by following the instructions of the surgeon.
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
                                Your body weight should be stable for at least one year prior to undergoing the Tummy Tuck surgery in Hyderabad
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
                                Have someone to drive you home after the Tummy Tuck surgery in Hyderabad
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
                                During the surgery in Hyderabad, you could expect the surgeon to create incisions on the selected portions to eliminate excess fat
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
                                You should have realistic expectations with the surgery in Hyderabad
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
                            Get the Best Plastic Surgeons for Buttock Enhancement in Hyderabad
                        </strong>
                    </p>
                    <p>
                        Extremely small, big, or sagging buttocks or those with dimples can thwart the appearance of your back. Those willing to get their buttocks back in shape may therefore opt for Buttock Enhancement surgery. It will work effectively in enhancing the shape, size, and contour of your back, thus enabling you to get rounder, fuller, and more appealing buttocks. Our plastic surgeons in Hyderabad can perform this procedure with high-end expertise to enable you to regain your toned body.
                    </p>
                </div>
                <p class="identity">
                    Why Approach Our Surgeons for Buttock Enhancement Surgery in <?= ucwords($city) ?>?
                </p>
                <ul>
                    <li>
                        Dexterous in performing all the types of buttock related procedures in Hyderabad such as buttock augmentation, implants, Brazilian butt lifts, and fat grafting
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
                    The cost of surgery for Buttock Enhancement relies on your current geographical location, the type of surgery you opt for, and the reputation of the surgeon you approach. Other factors to decide the cost may include room charges, the surgeon’s fees, medical tests, facilities provided in the clinic, and more. For deeper insight into the associated cost, you can always consult any of our renowned Buttock Enhancement surgeons in Hyderabad.
                </p>
                <p class="identity">OUR SERVICES</p>
                <p>
                    A successful Buttock Enhancement surgery goes a long way in boosting one’s self-confidence. Hence, the need to choose the best plastic surgeon is of high importance. With our experienced surgeons in Hyderabad, you will be in safe hands. Moreover, you will avail the best of services in their clinic, along with technically sound and advanced surgery equipment, a well-equipped surgery room, and amicable nursing staff. Your satisfaction remains paramount to us.
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
                            Mentioned below are important to consider if you wish to be a suitable candidate for Buttock Enhancement surgery in Hyderabad:
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
                            A Buttock Enhancement surgery would cost around 2,00,000 INR to 4,00,000 INR. It may appear a big amount but as compared to other parts of the world, the cost of the Brazillian Butt Lift in Hyderabad, India is still affordable.
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
                            In rare instances, there can be several side effects of the Buttock Enhancement surgery in Hyderabad, as below:
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
                            If you are dissatisfied with the appearance of your flat or square buttocks, you may consider Buttock Enhancement surgery in Hyderabad. This option may also be suitable if you have lost a significant amount of weight or if you wish to achieve a more balanced body shape. According to experts, the ideal age for this surgery is 25, as it allows ample time for the brain to fully develop.
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
                            These points will help you to prepare well for the Buttock Enhancement Surgery in Hyderabad:
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
                                When coming for the surgery in Hyderabad, make sure to be calm and relaxed.
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
                            Do you have stubborn body fat that does not budge even with heavy exercise?
                        </strong>
                    </p>
                    <p>
                        A Body Lift can help you to get rid of excess fat and sagging skin. There are times when some fat deposits do not disintegrate even when you diet and exercise hard. A Body Lift surgery removes or minimizes these fat deposits and tightens your skin for a well-toned body appearance. All you need is to look out for one of our best cosmetic surgeons in <?= ucwords($city) ?> to get the best treatment.
                    </p>
                </div>
                <p class="identity">
                    Why Choose Our Surgeons for Body Lift in <?= ucwords($city) ?>?
                </p>
                <ul>
                    <li>
                        The best cosmetic surgeons in <?= ucwords($city) ?> with specialization in Body Lift
                    </li>
                    <li>
                        Expertise in understanding the patient’s requirements and helping them to achieve their body goals
                    </li>
                    <li>
                        Works on a customized treatment plan to remove the excess fat and skin
                    </li>
                    <li>
                        Skilled at whole Body Lift, lower Body Lift, and mid-Body Lift
                    </li>
                    <li>
                        Certified by several national and international boards of plastic and cosmetic surgeons
                    </li>
                </ul>
                <p class="identity">
                    COST OF BODY LIFT IN <?= ucwords($city) ?>
                </p>
                <p>
                    Since the procedure depends totally on your expectations, the areas of a Body Lift will have a significant influence on the total cost. If you are opting for a Body Lift only in the lower body, it will cost you less than the total Body Lift. You can visit our experienced cosmetic surgeons in <?= ucwords($city) ?> to seek recommendations on the best Body Lift procedure for you.
                </p>
                <p class="identity">OUR SERVICES</p>
                <p>
                    When exercising and dieting stop working, a Body Lift could help you get a toned and better-looking body! You can get rid of the flab to tighten the skin and get a toned body at our best surgeon’s clinic in <?= ucwords($city) ?>. No wonder, you can start wearing those body-fitting clothes and flaunt your gorgeous figure once you get the right treatment.
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
                            An ideal candidate for Body Lift in <?= ucwords($city) ?> should satisfy the following criteria:
                        </p>
                        <ul>
                            <li>
                                Looseness of soft tissue in single or several locations across the body
                            </li>
                            <li>
                                Weight loss in excess, mostly due to bariatric surgery
                            </li>
                            <li>
                                Healthy body, free of any medical ailments that could impair healing
                            </li>
                            <li>
                                A non-smoker and non-alcoholic person
                            </li>
                            <li>
                                Do not have any plans for pregnancy anytime soon
                            </li>
                            <li>
                                Living a healthy lifestyle and having a balanced meal
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
                            The average cost of a Body Lift procedure in <?= ucwords($city) ?> varies from 2,00,000 INR to 3,00,000 INR. It could fluctuate depending on various factors like your weight, height, the extent of weight loss, need for liposuction, overall health condition, and so on.
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
                                Excessive scarring
                            </li>
                            <li>
                                Chances of Bleeding, eventually leading to hematoma
                            </li>
                            <li>
                                Risk of infection, fever, and red skin (cellulitis) in large portions
                            </li>
                            <li>
                                Bad healing of the wound
                            </li>
                            <li>
                                Would dehiscence or breakdown
                            </li>
                            <li>
                                Extrusion of sutures from the skin, causing irritation; needs removal
                            </li>
                            <li>
                                Loss of sensation in the treated area
                            </li>
                            <li>
                                Asymmetrical fullness, bulges, and other contour irregularities
                            </li>
                            <li>
                                Swelling and discolouration of the skin
                            </li>
                            <li>
                                Allergic reaction to anesthesia or surgery materials like tape, gloves, suture materials, etc.
                            </li>
                            <li>
                                Possibility of revisional surgery
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
                            You can experience the best results from a Body Lift surgery in <?= ucwords($city) ?> only after you have gained the target weight, which remains intact for at least 6 months. Weight fluctuation can impact the surgery negatively. To opt for a Body Lift, the patient should have completed at least the age of 18.
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
                        <ul>
                            <li>
                                Quit smoking and drinking alcohol at least 2 weeks before the surgery
                            </li>
                            <li>
                                Undergo medical tests and keep your medical records handy for the surgeon to check
                            </li>
                            <li>
                                Make sure to lose 30% to 50% of your maximum weight before the surgery
                            </li>
                            <li>
                                requirements
                            </li>
                            <li>
                                Bring medications and compression garments with you
                            </li>
                            <li>
                                Arrange for someone to take you back home and help you with daily chores up to a few days after the surgery
                            </li>
                            <li>
                                Avoid taking herbal supplements, aspirin, and various anti-inflammatory drugs as they can pose bleeding risks
                            </li>
                            <li>
                                keep yourself hydrated before and after the procedure in <?= ucwords($city) ?>
                            </li>
                            <li>
                                Do not eat anything at least 8 hours before the surgery
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
                                On the day of surgery, visit the clinic with a calm mind
                            </li>
                            <li>
                                The anesthesia expert will inquire if you have an allergic behaviour to anesthesia and will adjust the dose accordingly
                            </li>
                            <li>
                                Depending on whether you are undergoing upper or lower Body Lift, the doctor will perform the necessary job
                            </li>
                            <li>
                                Usually, the surgery takes around 4-8 hours to complete under the influence of general anesthesia
                            </li>
                            <li>
                                Surgeons could also perform other surgeries like tummy tuck, arm lift, or arm lift in conjunction with the Body Lift procedure in <?= ucwords($city) ?>
                            </li>
                            <li>
                                You can get back to work in 2-3 weeks after the surgery and can do daily chores within 4-6 weeks
                            </li>
                            <li>
                                You could expect the surgeon to provide several instructions for a quick and satisfying recovery.
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- ACCODION -->
                <!-- <p class="cosmetic-faq-list">
                        1. Are you a good candidate for Body Lift?
                    </p>
                    <p>
                        An ideal candidate for Body Lift in <?= ucwords($city) ?> should satisfy the following criteria:
                    </p>
                    <ul>
                        <li>
                            Looseness of soft tissue in single or several locations across the body
                        </li>
                        <li>
                            Weight loss in excess, mostly due to bariatric surgery
                        </li>
                        <li>
                            Healthy body, free of any medical ailments that could impair healing
                        </li>
                        <li>
                            A non-smoker and non-alcoholic person
                        </li>
                        <li>
                            Do not have any plans for pregnancy anytime soon
                        </li>
                        <li>
                            Living a healthy lifestyle and having a balanced meal
                        </li>
                    </ul>
                    <p class="cosmetic-faq-list">
                        2. What is the cost of a Body Lift?
                    </p>
                    <p>
                        The average cost of a Body Lift procedure in <?= ucwords($city) ?> varies from 2,00,000 INR to 3,00,000 INR. It could fluctuate depending on various factors like your weight, height, the extent of weight loss, need for liposuction, overall health condition, and so on.
                    </p>
                    <p class="cosmetic-faq-list">
                        3. What are the risks related to Body Lift?
                    </p>
                    <ul>
                        <li>
                            Excessive scarring
                        </li>
                        <li>
                            Chances of Bleeding, eventually leading to hematoma
                        </li>
                        <li>
                            Risk of infection, fever, and red skin (cellulitis) in large portions
                        </li>
                        <li>
                            Bad healing of the wound
                        </li>
                        <li>
                            Would dehiscence or breakdown
                        </li>
                        <li>
                            Extrusion of sutures from the skin, causing irritation; needs removal
                        </li>
                        <li>
                            Loss of sensation in the treated area
                        </li>
                        <li>
                            Asymmetrical fullness, bulges, and other contour irregularities
                        </li>
                        <li>
                            Swelling and discolouration of the skin
                        </li>
                        <li>
                            Allergic reaction to anesthesia or surgery materials like tape, gloves, suture materials, etc.
                        </li>
                        <li>
                            Possibility of revisional surgery
                        </li>
                    </ul>
                    <p class="cosmetic-faq-list">
                        4. When can you go for Body Lift?
                    </p>
                    <p>
                        You can experience the best results from a Body Lift surgery in <?= ucwords($city) ?> only after you have gained the target weight, which remains intact for at least 6 months. Weight fluctuation can impact the surgery negatively. To opt for a Body Lift, the patient should have completed at least the age of 18.
                    </p>
                    <p class="cosmetic-faq-list">
                        5. What are the things to do before the Body Lift Surgery?
                    </p>
                    <ul>
                        <li>
                            Quit smoking and drinking alcohol at least 2 weeks before the surgery
                        </li>
                        <li>
                            Undergo medical tests and keep your medical records handy for the surgeon to check
                        </li>
                        <li>
                            Make sure to lose 30% to 50% of your maximum weight before the surgery
                        </li>
                        <li>
                            requirements
                        </li>
                        <li>
                            Bring medications and compression garments with you
                        </li>
                        <li>
                            Arrange for someone to take you back home and help you with daily chores up to a few days after the surgery
                        </li>
                        <li>
                            Avoid taking herbal supplements, aspirin, and various anti-inflammatory drugs as they can pose bleeding risks
                        </li>
                        <li>
                            keep yourself hydrated before and after the procedure in <?= ucwords($city) ?>
                        </li>
                        <li>
                            Do not eat anything at least 8 hours before the surgery
                        </li>
                    </ul>
                    <p class="cosmetic-faq-list">
                        6. What to expect on the day of Body Lift surgery?
                    </p>
                    <ul>
                        <li>
                            On the day of surgery, visit the clinic with a calm mind
                        </li>
                        <li>
                            The anesthesia expert will inquire if you have an allergic behaviour to anesthesia and will adjust the dose accordingly
                        </li>
                        <li>
                            Depending on whether you are undergoing upper or lower Body Lift, the doctor will perform the necessary job
                        </li>
                        <li>
                            Usually, the surgery takes around 4-8 hours to complete under the influence of general anesthesia
                        </li>
                        <li>
                            Surgeons could also perform other surgeries like tummy tuck, arm lift, or arm lift in conjunction with the Body Lift procedure in <?= ucwords($city) ?>
                        </li>
                        <li>
                            You can get back to work in 2-3 weeks after the surgery and can do daily chores within 4-6 weeks
                        </li>
                        <li>
                            You could expect the surgeon to provide several instructions for a quick and satisfying recovery.
                        </li>
                    </ul> -->
            </div>
        <?php } elseif ($surgery_str == "arm lift") { ?>
            <div class="col padd-null">
                <div class="top-content">
                    <p>
                        <strong>
                            Love to have better-looking, toned arms?
                        </strong>
                    </p>
                    <p>
                        Arm Lift Surgery or Brachioplasty is the procedure to treat drooping upper arms resulting due to ageing or massive weight loss. It requires the surgeon to remove the excess sagging skin of the upper arm resulting in well-toned and tightened arms.
                    </p>
                    <p>
                        Our reputed cosmetic surgeons in <?= ucwords($city) ?> advise the right treatment plan and the best-suited procedure for you.
                    </p>
                </div>
                <p class="identity">
                    Why Choose Our Surgeons for Arm Lift Surgery in <?= ucwords($city) ?>?
                </p>
                <ul>
                    <li>
                        The best cosmetic surgeons in <?= ucwords($city) ?> to treat patients with extremely sagging upper arms
                    </li>
                    <li>
                        Highly skilled at various arm lift surgeries like Liposuction, Limited Arm Lift, Standard Arm Lift, and Extended Arm Lift.
                    </li>
                    <li>
                        Adept at customizing the treatment and toning the upper arms that are symmetrical with the body
                    </li>
                    <li>
                        Leave only minimal scarring that becomes almost invisible over time.
                    </li>
                    <li>
                        Renowned cosmetic surgeons from <?= ucwords($city) ?>, duly certified by several national boards of cosmetic surgeries
                    </li>
                </ul>
                <p class="identity">
                    COST OF ARM LIFT SURGERY IN <?= ucwords($city) ?>
                </p>
                <p>
                    The Arm Lift Surgery cost depends largely on the cosmetic surgeon you choose and the specific area where you want to tone it. Usually, the cost of extended Arm Lift Surgery is higher than other surgeries since the surgeon not just removes the excess skin on the upper arms but also on the sides of the body. It is best to visit our reliable cosmetic surgeon in <?= ucwords($city) ?> and seek advice on the best course of action.
                </p>
                <p class="identity">OUR SERVICES</p>
                <p>
                    Are you feeling uncomfortable due to the excess skin on your upper arms? Are you finding it hard to tone down your excess skin through exercise? If yes then, you can always opt for Arm Lift Surgery by any of our experienced surgeons in <?= ucwords($city) ?>.
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
                            Abiding by the following points will make you a suitable candidate for Arm Lift Surgery in <?= ucwords($city) ?>:
                        </p>
                        <ul>
                            <li>
                                You are an adult having considerable laxity in the upper arm skin
                            </li>
                            <li>
                                You have lost weight significantly, which has caused loose hanging skin
                            </li>
                            <li>
                                You are an adult with a stable weight irrespective of your age
                            </li>
                            <li>
                                You are not overweight
                            </li>
                            <li>
                                You are a healthy person with no medical problem that could affect healing or enhance surgery risks
                            </li>
                            <li>
                                You don’t smoke or drink alcohol
                            </li>
                            <li>
                                You can maintain a healthy lifestyle with a proper diet
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
                            The average cost of Arm Lift surgery in <?= ucwords($city) ?> may be in the range of 1,00,000 INR to 1,50,000 INR. Much will depend on the facilities the patient has opted for. This cost for consultation, medicine costs, and other external support needed for recovery will be additional.
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
                        <ul>
                            <li>
                                Asymmetry in the appearance of arms
                            </li>
                            <li>
                                Excessive or unusual scarring
                            </li>
                            <li>
                                Persistent bleeding
                            </li>
                            <li>
                                Damage to the blood vessel, nerves, or muscles
                            </li>
                            <li>
                                Infection in the surgical site
                            </li>
                            <li>
                                Arm stiffness
                            </li>
                            <li>
                                Seroma or accumulation of fluids in the arm, which can be drained with the help of a needle
                            </li>
                            <li>
                                Breakdown of the wound, which will require 2-3 additional weeks to heal
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
                            If you are experiencing age-related changes in your arms or loose skin due to excessive weight loss, Arm Lift surgery in <?= ucwords($city) ?> could be a suitable choice to deal with your arm laxity condition. Winter is the best time to undergo this surgery. All you need is to be an adult to opt for the Arm Lift procedure in <?= ucwords($city) ?>.
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
                        <ul>
                            <li>
                                Consult your surgeon about the concerns related to Arm Lift
                            </li>
                            <li>
                                Stop eating and drinking at least 8 hours before the procedure
                            </li>
                            <li>
                                Arrange for loose and comfortable clothing at home in advance
                            </li>
                            <li>
                                Go for a medical exam to ensure your health is perfect before the surgery
                            </li>
                            <li>
                                Stop smoking several weeks earlier to avoid slow wound healing due to smoking-related health hassles
                            </li>
                            <li>
                                Adjust your existing medications after consultation with the doctor
                            </li>
                            <li>
                                Avoid the consumption of aspirin, anti-inflammatory drugs, or health supplements as they can result in excessive bleeding
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
                                Cooperate with the staff at the clinic in executing the necessary formalities
                            </li>
                            <li>
                                The anesthesia expert may ask you about your behaviour toward anesthesia and administer the dose accordingly
                            </li>
                            <li>
                                The surgeon in <?= ucwords($city) ?> may take around 3-4 hours to complete Brachioplasty. Due to the effect of anesthesia, you may not realize the lapse in time.
                            </li>
                            <li>
                                You will get incisions on the back or inside your arm depending on the choice of surgeon. Next, the excision of excess fat will take place via Liposuction
                            </li>
                            <li>
                                You may get back to work after the surgery in <?= ucwords($city) ?> within just a week if you have a sedentary job, but if it demands too much physical exertion, the surgeon would recommend resting for around two weeks after the surgery
                            </li>
                            <li>
                                You should have realistic goals in your mind regarding the surgery.
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- ACCODION -->
                <!-- <p class="cosmetic-faq-list">
                        1. Are you a good candidate for Arm Lift Surgery?
                    </p>
                    <p>
                        Abiding by the following points will make you a suitable candidate for Arm Lift Surgery in <?= ucwords($city) ?>:
                    </p>
                    <ul>
                        <li>
                            You are an adult having considerable laxity in the upper arm skin
                        </li>
                        <li>
                            You have lost weight significantly, which has caused loose hanging skin
                        </li>
                        <li>
                            You are an adult with a stable weight irrespective of your age
                        </li>
                        <li>
                            You are not overweight
                        </li>
                        <li>
                            You are a healthy person with no medical problem that could affect healing or enhance surgery risks
                        </li>
                        <li>
                            You don’t smoke or drink alcohol
                        </li>
                        <li>
                            You can maintain a healthy lifestyle with a proper diet
                        </li>
                    </ul>
                    <p class="cosmetic-faq-list">
                        2. What is the cost of Arm Lift Surgery?
                    </p>
                    <p>
                        The average cost of Arm Lift surgery in <?= ucwords($city) ?> may be in the range of 1,00,000 INR to 1,50,000 INR. Much will depend on the facilities the patient has opted for. This cost for consultation, medicine costs, and other external support needed for recovery will be additional.
                    </p>
                    <p class="cosmetic-faq-list">
                        3. What are the risks related to Arm Lift Surgery?
                    </p>
                    <ul>
                        <li>
                            Asymmetry in the appearance of arms
                        </li>
                        <li>
                            Excessive or unusual scarring
                        </li>
                        <li>
                            Persistent bleeding
                        </li>
                        <li>
                            Damage to the blood vessel, nerves, or muscles
                        </li>
                        <li>
                            Infection in the surgical site
                        </li>
                        <li>
                            Arm stiffness
                        </li>
                        <li>
                            Seroma or accumulation of fluids in the arm, which can be drained with the help of a needle
                        </li>
                        <li>
                            Breakdown of the wound, which will require 2-3 additional weeks to heal
                        </li>
                    </ul>
                    <p class="cosmetic-faq-list">
                        4. When can you go for Arm Lift Surgery?
                    </p>
                    <p>
                        If you are experiencing age-related changes in your arms or loose skin due to excessive weight loss, Arm Lift surgery in <?= ucwords($city) ?> could be a suitable choice to deal with your arm laxity condition. Winter is the best time to undergo this surgery. All you need is to be an adult to opt for the Arm Lift procedure in <?= ucwords($city) ?>.
                    </p>
                    <p class="cosmetic-faq-list">
                        5. What are the things to do before the Arm Lift surgery?
                    </p>
                    <ul>
                        <li>
                            Consult your surgeon about the concerns related to Arm Lift
                        </li>
                        <li>
                            Stop eating and drinking at least 8 hours before the procedure
                        </li>
                        <li>
                            Arrange for loose and comfortable clothing at home in advance
                        </li>
                        <li>
                            Go for a medical exam to ensure your health is perfect before the surgery
                        </li>
                        <li>
                            Stop smoking several weeks earlier to avoid slow wound healing due to smoking-related health hassles
                        </li>
                        <li>
                            Adjust your existing medications after consultation with the doctor
                        </li>
                        <li>
                            Avoid the consumption of aspirin, anti-inflammatory drugs, or health supplements as they can result in excessive bleeding
                        </li>
                    </ul>
                    <p class="cosmetic-faq-list">
                        6. What to expect on the day of Arm Lift surgery?
                    </p>
                    <ul>
                        <li>
                            Cooperate with the staff at the clinic in executing the necessary formalities
                        </li>
                        <li>
                            The anesthesia expert may ask you about your behaviour toward anesthesia and administer the dose accordingly
                        </li>
                        <li>
                            The surgeon in <?= ucwords($city) ?> may take around 3-4 hours to complete Brachioplasty. Due to the effect of anesthesia, you may not realize the lapse in time.
                        </li>
                        <li>
                            You will get incisions on the back or inside your arm depending on the choice of surgeon. Next, the excision of excess fat will take place via Liposuction
                        </li>
                        <li>
                            You may get back to work after the surgery in <?= ucwords($city) ?> within just a week if you have a sedentary job, but if it demands too much physical exertion, the surgeon would recommend resting for around two weeks after the surgery
                        </li>
                        <li>
                            You should have realistic goals in your mind regarding the surgery.
                        </li>
                    </ul> -->

            </div>
        <?php } elseif ($surgery_str == "thigh lift") { ?>
            <div class="col padd-null">
                <div class="top-content">
                    <p>
                        If dieting and exercising are not helping anymore in reducing your thigh size, a Thigh Lift can be a suitable alternative. The surgery reshapes the thigh by removing the extra tissues that would otherwise make you look flabby. It will also contour your body in proportion to the rest of your body figure.
                    </p>
                    <p>
                        Some prefer to go for a combination of Liposuction and Thigh Lift to complement the body structure. For any more doubts about this surgery, you can visit any of our recommended cosmetic surgeons in <?= ucwords($city) ?>.
                    </p>
                </div>
                <p class="identity">
                    Why Choose Our Surgeons for Thigh Lift in <?= ucwords($city) ?>?
                </p>
                <ul>
                    <li>
                        Best cosmetic surgeons in <?= ucwords($city) ?> with credible experience in Thigh Lift as well as other body contouring procedures
                    </li>
                    <li>
                        Overwhelming testimonials from satisfied patients about the positive surgery results
                    </li>
                    <li>
                        Operate patients in fully-equipped clinics for plastic, cosmetic, and reconstructive surgeries.
                    </li>
                    <li>
                        Top cosmetic surgeons in <?= ucwords($city) ?> certified by the national associations for plastic and cosmetic surgeries
                    </li>
                </ul>
                <p class="identity">
                    COST OF THIGH LIFT IN <?= ucwords($city) ?>
                </p>
                <p>
                    It would be wise to consult with any of our cosmetic surgeons in <?= ucwords($city) ?> about the cost of this treatment. This will also give you a better insight into the results you can expect as well as about the recovery period.
                </p>
                <p class="identity">OUR SERVICES</p>
                <p>
                    Do not let those flabby thighs get the best of you! Go for a Thigh Lift, recover your lost shape, and look fab! Opt for one of our most-respected cosmetic surgeons in <?= ucwords($city) ?> to perform the Thigh Lift surgery.
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
                            People in <?= ucwords($city) ?> wishing to be a Thigh Lift candidate need to satisfy the following conditions:
                        </p>
                        <ul>
                            <li>
                                Have a relatively stable weight
                            </li>
                            <li>
                                Extra soft tissue along the inner thigh or the outer thigh
                            </li>
                            <li>
                                Good health overall
                            </li>
                            <li>
                                No medical condition that could impair healing or increase risks
                            </li>
                            <li>
                                Healthy diet
                            </li>
                            <li>
                                Routine of regular exercise
                            </li>
                            <li>
                                Non-smoker and non-alcoholic
                            </li>
                            <li>
                                Wish to improve the appearance of thighs
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
                            The cost of a Thigh Lift surgery in <?= ucwords($city) ?> may vary between 70,000 INR-1,50,000 INR. Several factors can have an impact on the cost of Thigh Lift surgery. These may include the price of the surgical facilities, the complexity faced during the surgery, the experience of the surgeon, the cost of anesthesia and medicines, and so on.
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
                        <ul>
                            <li>
                                Allergic reaction to anesthesia
                            </li>
                            <li>
                                Infection and bleeding in the incision site
                            </li>
                            <li>
                                Chances of scarring
                            </li>
                            <li>
                                Pain in rare instances after the effect of anesthesia subsides
                            </li>
                            <li>
                                Formation of blood clots in the legs, leading to Deep Vein Thrombosis or DVT
                            </li>
                            <li>
                                Formation of seroma or blood accumulation in a dead space after the surgery
                            </li>
                            <li>
                                Dead fatty tissue beneath the skin or fat necrosis
                            </li>
                            <li>
                                Bruising and swelling in the incision site
                            </li>
                            <li>
                                Need for a correction surgery
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
                            If you want to get smoother skin and well-proportioned contours on your thighs, a Thigh Lift is the best option. Anyone who is more than 18 years old and has a disease-free body can go for Thigh Lift in <?= ucwords($city) ?>.
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
                        <ul>
                            <li>
                                Get your medical evaluation and complete body check-up before the surgery
                            </li>
                            <li>
                                Avoid consuming anti-inflammatory drugs, health supplements, or Aspirin to avoid an increase in bleeding
                            </li>
                            <li>
                                Show the medication lists to the surgeon you are currently taking to avert confusion
                            </li>
                            <li>
                                Take off contact lenses, nail polish, makeup, and deodorant
                            </li>
                            <li>
                                Avoid
                            </li>
                            <li>
                                Keep yourself hydrated with water at least 2 weeks before the surgery in <?= ucwords($city) ?>
                            </li>
                            <li>
                                Avoid eating or drinking around 8 hours before the surgery.
                            </li>
                            <li>
                                Quit smoking or alcohol consumption to avoid any complications during or after the surgery
                            </li>
                            <li>
                                Arrange for someone to help you in the hospital, drive you home and assist in your daily chores after the surgery.
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
                                Visit the clinic or hospital with a cool and composed mind
                            </li>
                            <li>
                                Discuss your concerns with the <?= ucwords($city) ?> surgeon in a candid direct consultation
                            </li>
                            <li>
                                The anesthesiologist would ask about your reaction to anesthesia and will administer the dose accordingly
                            </li>
                            <li>
                                You could expect the surgeon to make an incision and remove the fat and excess skin from the incision site
                            </li>
                            <li>
                                As a result of the successful surgery, you could expect tight skin, enhanced leg contour, and better skin elasticity
                            </li>
                            <li>
                                The entire procedure will complete in around 2-3 hours
                            </li>
                            <li>
                                Depending on your response to the Thigh Lift, you may have to stay in the hospital for a few days, or as recommended by your surgeon in <?= ucwords($city) ?>
                            </li>
                            <li>
                                You can expect around 4-6 weeks from the day of the Thigh Lift surgery to heal completely
                            </li>
                            <li>
                                The surgeon could advise you to restrict your daily activities for around 2 weeks and avoid strenuous activities for at least 2 weeks
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- ACCODION -->
                <!-- <p class="cosmetic-faq-list">
                        1. Are you a good candidate for Thigh Lift?
                    </p>
                    <p>
                        People in <?= ucwords($city) ?> wishing to be a Thigh Lift candidate need to satisfy the following conditions:
                    </p>
                    <ul>
                        <li>
                            Have a relatively stable weight
                        </li>
                        <li>
                            Extra soft tissue along the inner thigh or the outer thigh
                        </li>
                        <li>
                            Good health overall
                        </li>
                        <li>
                            No medical condition that could impair healing or increase risks
                        </li>
                        <li>
                            Healthy diet
                        </li>
                        <li>
                            Routine of regular exercise
                        </li>
                        <li>
                            Non-smoker and non-alcoholic
                        </li>
                        <li>
                            Wish to improve the appearance of thighs
                        </li>
                    </ul>
                    <p class="cosmetic-faq-list">
                        2. What is the cost of a Thigh Lift?
                    </p>
                    <p>
                        The cost of a Thigh Lift surgery in <?= ucwords($city) ?> may vary between 70,000 INR-1,50,000 INR. Several factors can have an impact on the cost of Thigh Lift surgery. These may include the price of the surgical facilities, the complexity faced during the surgery, the experience of the surgeon, the cost of anesthesia and medicines, and so on.
                    </p>
                    <p class="cosmetic-faq-list">
                        3. What are the risks related to Thigh Lifts?
                    </p>
                    <ul>
                        <li>
                            Allergic reaction to anesthesia
                        </li>
                        <li>
                            Infection and bleeding in the incision site
                        </li>
                        <li>
                            Chances of scarring
                        </li>
                        <li>
                            Pain in rare instances after the effect of anesthesia subsides
                        </li>
                        <li>
                            Formation of blood clots in the legs, leading to Deep Vein Thrombosis or DVT
                        </li>
                        <li>
                            Formation of seroma or blood accumulation in a dead space after the surgery
                        </li>
                        <li>
                            Dead fatty tissue beneath the skin or fat necrosis
                        </li>
                        <li>
                            Bruising and swelling in the incision site
                        </li>
                        <li>
                            Need for a correction surgery
                        </li>
                    </ul>
                    <p class="cosmetic-faq-list">
                        4. When can you go for a Thigh Lift?
                    </p>
                    <p>
                        If you want to get smoother skin and well-proportioned contours on your thighs, a Thigh Lift is the best option. Anyone who is more than 18 years old and has a disease-free body can go for Thigh Lift in <?= ucwords($city) ?>.
                    </p>
                    <p class="cosmetic-faq-list">
                        5. What are the things to do before the Thigh Lift Surgery?
                    </p>
                    <ul>
                        <li>
                            Get your medical evaluation and complete body check-up before the surgery
                        </li>
                        <li>
                            Avoid consuming anti-inflammatory drugs, health supplements, or Aspirin to avoid an increase in bleeding
                        </li>
                        <li>
                            Show the medication lists to the surgeon you are currently taking to avert confusion
                        </li>
                        <li>
                            Take off contact lenses, nail polish, makeup, and deodorant
                        </li>
                        <li>
                            Avoid
                        </li>
                        <li>
                            Keep yourself hydrated with water at least 2 weeks before the surgery in <?= ucwords($city) ?>
                        </li>
                        <li>
                            Avoid eating or drinking around 8 hours before the surgery.
                        </li>
                        <li>
                            Quit smoking or alcohol consumption to avoid any complications during or after the surgery
                        </li>
                        <li>
                            Arrange for someone to help you in the hospital, drive you home and assist in your daily chores after the surgery.
                        </li>
                    </ul>
                    <p class="cosmetic-faq-list">
                        6. What to expect on the day of Thigh Lift surgery?
                    </p>
                    <ul>
                        <li>
                            Visit the clinic or hospital with a cool and composed mind
                        </li>
                        <li>
                            Discuss your concerns with the <?= ucwords($city) ?> surgeon in a candid direct consultation
                        </li>
                        <li>
                            The anesthesiologist would ask about your reaction to anesthesia and will administer the dose accordingly
                        </li>
                        <li>
                            You could expect the surgeon to make an incision and remove the fat and excess skin from the incision site
                        </li>
                        <li>
                            As a result of the successful surgery, you could expect tight skin, enhanced leg contour, and better skin elasticity
                        </li>
                        <li>
                            The entire procedure will complete in around 2-3 hours
                        </li>
                        <li>
                            Depending on your response to the Thigh Lift, you may have to stay in the hospital for a few days, or as recommended by your surgeon in <?= ucwords($city) ?>
                        </li>
                        <li>
                            You can expect around 4-6 weeks from the day of the Thigh Lift surgery to heal completely
                        </li>
                        <li>
                            The surgeon could advise you to restrict your daily activities for around 2 weeks and avoid strenuous activities for at least 2 weeks
                        </li>
                    </ul> -->
            </div>
        <?php } elseif ($surgery_str == "body contouring") { ?>
            <div class="col padd-null">
                <div class="top-content">
                    <p>
                        Sometimes, you may still have excess skin after extensive weight loss. This happens when your skin loses its elasticity. Body contouring procedure helps to remove these excess skin and fat. You will have a well-toned and lean looking figure after undergoing the whole body contouring surgery.
                    </p>
                    <p>
                        Since body contouring in an extensive procedure, it is vital to get it done by an experienced cosmetic surgeon in <?= ucwords($city) ?>.
                    </p>
                </div>
                <p class="identity">
                    Why Choose Our Surgeons for <?= $surgery_str ?> in <?= ucwords($city) ?>?
                </p>
                <ul>
                    <li>
                        The most skilled cosmetic surgeon in <?= ucwords($city) ?> for body contouring.
                    </li>
                    <li>
                        Highly experienced in individual procedures that make up the body contouring like tummy tuck, breast lift, arm lift, buttock lift, thigh lift and lower body lift.
                    </li>
                    <li>
                        Performs highly specific and customized body-contouring surgery targeted at removing the excess skin that results in well-contoured appearance.
                    </li>
                    <li>
                        <?= ucwords($city) ?>’s experienced cosmetic surgeon, certified by several national and international boards of cosmetic surgeries.
                    </li>
                </ul>
                <p class="identity">
                    COST OF BODY CONTOURING SURGERY IN <?= ucwords($city) ?>
                </p>
                <p>
                    The body contouring procedure should be highly customized to treat the specific areas of the body that are disrupting the figure. The total cost of the procedure varies from 1,00,000 INR to 3,00,000 INR depending on the different areas of treatment. Visiting an expert cosmetic surgeon would be wise to get the recommendations for the customized body contouring treatment.
                </p>
                <p>
                    Our cosmetic surgeon is one of the best in this field in <?= ucwords($city) ?>. You can schedule a consultation session to get a good ballpark on the cost of this surgery along with other necessary details.
                </p>
                <p class="identity">OUR SERVICES</p>
                <p>
                    Transform your appearance in a single body contouring surgery. Get rid of that excess flab of skin from all over your body to get a well-toned and youthful skin with <?= ucwords($city) ?>’s best surgeon by your side.
                </p>
            </div>
        <?php } elseif ($surgery_str == "mommy makeover") { ?>
            <div class="col padd-null">
                <div class="top-content">
                    <p>
                        Mommy makeover surgery aims specifically at helping women get back their slim body after childbirth. A woman’s body goes through significant changes during and after pregnancy. For many, it can be difficult and almost impossible to get back to the previous shape they were in. This is where mommy makeover surgery is beneficial. Our cosmetic surgeon from <?= ucwords($city) ?> will inspect the entire body and make changes to breasts, buttocks, thighs, tummy and other locations where the size has increased.
                    </p>
                </div>
                <p class="identity">
                    WHY CHOOSE MOMMY MAKEOVER SURGERY IN <?= ucwords($city) ?>?
                </p>
                <ul>
                    <li>
                        One of the best cosmetic surgeons in <?= ucwords($city) ?> who offers astonishing results with a wholesome mommy makeover surgery.
                    </li>
                    <li>
                        Customized surgery plans aimed at reducing the fat at specific areas of the mother’s body.
                    </li>
                    <li>
                        Skilled at transforming the patients’ back to their old, thinner self.
                    </li>
                    <li>
                        A reliable cosmetic surgeon with a clinic in <?= ucwords($city) ?> offering personalized treatment and medicines by considering the recent childbirth.
                    </li>
                    <li>
                        An esteemed cosmetic surgeon and a member of several national and international boards for cosmetic surgery.
                    </li>
                </ul>
                <p class="identity">
                    COST OF MOMMY MAKEOVER SURGERY IN <?= ucwords($city) ?>
                </p>
                <p>
                    In the mommy makeover surgery, the cosmetic surgeon performs several surgeries like liposuction, breast lift, breast reduction, buttock augmentation/reduction, tummy tuck, etc. Therefore, the cost of mommy makeover surgery will vary according to the recommended surgeries. If you are considering mommy makeover surgery, you can consult our cosmetic surgeon in <?= ucwords($city) ?> to get an estimate of the complete treatment plan.
                </p>
                <p class="identity">OUR SERVICES</p>
                <p>
                    Revamp your entire body and get rid of the fat to look slim and fabulous! Choose the customized mommy makeover treatments in <?= ucwords($city) ?> with breast lift, liposuction, tummy tuck, labiaplasty, facial rejuvenation, and other body contouring surgeries.
                </p>
            </div>
        <?php } elseif ($surgery_str == "hair transplant") { ?>
            <div class="col padd-null">
                <div class="top-content">
                    <p>
                        <strong>
                            Are you losing confidence because of thinning or balding hair?
                        </strong>
                    </p>
                    <p>
                        Not anymore! Get the best cosmetic surgeon in <?= ucwords($city) ?> known for the skilled hair transplant treatment to help you regain your confidence. Through hair transplantation surgery, the surgeon will extract hair grafts or follicles from your scalp, treat them and place it in the thinning areas. It is best for patients suffering from acute hair fall, balding hall, thinned-out hair, alopecia, or any other similar condition.
                    </p>
                </div>
                <p class="identity">
                    Why Choose Our Cosmetic Surgeons for Hair Transplant in <?= ucwords($city) ?>?
                </p>
                <ul>
                    <li>
                        Top cosmetic surgeons for hair transplantation in <?= ucwords($city) ?> with a high success rate
                    </li>
                    <li>
                        Adept at performing the widely acclaimed hair transplant treatments - Follicular Unit Extraction (FUE) and Follicular Unit Transplantation (FUT) with dexterity
                    </li>
                    <li>
                        Ability to tailor the areas of transplantation based on the patient’s expectations to achieve a fuller-looking scalp.
                    </li>
                    <li>
                        Board-recognized cosmetic surgeon and member of several hair transplant associations.
                    </li>
                </ul>
                <p class="identity">
                    COST OF HAIR TRANSPLANT TREATMENT IN <?= ucwords($city) ?>
                </p>
                <p>
                    You can opt from among two types of common hair transplant surgeries, FUT and FUE, The cost of both treatments varies depending on the number of grafts needed. To know the exact rates, you can visit any of our expert cosmetic surgeons in <?= ucwords($city) ?>.
                </p>
                <p class="identity">OUR SERVICES</p>
                <p>
                    We all love to have a full head of hair. This is now possible with customized hair transplant surgery by an expert cosmetic surgeon in <?= ucwords($city) ?>. Enjoy thicker and fuller hair that makes you look younger!
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
                            If you abide by the following criteria, you will be an ideal candidate for hair transplant surgery in <?= ucwords($city) ?>:
                        </p>
                        <ul>
                            <li>
                                You have been losing your hair out of male pattern baldness for around 5 years or more
                            </li>
                            <li>
                                You have advanced to Class 3 or beyond on the Norwood Scale.
                            </li>
                            <li>
                                Your hair at the back and sides of your scalp have a healthy growth, good enough to serve as the donor zone
                            </li>
                            <li>
                                You have Scarring alopecia – a hair loss type resulting due to the damage of hair follicles
                            </li>
                            <li>
                                You have suffered hair loss due to scalp injuries, scarring, or some cosmetic surgery procedures
                            </li>
                            <li>
                                You have good health overall and a healthy scalp
                            </li>
                            <li>
                                You have reasonable expectations with the surgery
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
                            The average cost of Hair Transplant Surgery in <?= ucwords($city) ?> depends largely on the number of grafts. For example, the cost of the procedure per 2000 grafts lies in the range of 55,000 INR to 80,000 INR. For a Hair Transplant involving 5000 grafts, the average cost is 1,00,000 INR – 1,40,000 INR and beyond.
                        </p>
                        <p>
                            Usually, the cost per graft is 40 INR to 100 INR. The cost also depends on various other factors like baldness level, number of sessions, the technique used (FUT or FUE), availability of graft donor area, the surgeon, and the clinical set up among others.
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
                            Usually, Hair Transplant surgery in <?= ucwords($city) ?> is a safe procedure to help your hair restoration goals. It may however accompany several risks at times, such as:
                        </p>
                        <ul>
                            <li>
                                Pain after the surgery
                            </li>
                            <li>
                                Unexpected outcomes
                            </li>
                            <li>
                                Possibility of bleeding, infection, itching, or scarring
                            </li>
                            <li>
                                Chances of wound dehiscence or skin necrosis
                            </li>
                            <li>
                                Scalp swelling
                            </li>
                            <li>
                                Lack of sensation in the treated scalp areas
                            </li>
                            <li>
                                Need for a revision surgery
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
                            There is no fixed age to undergo hair transplant surgery, but surgeons mostly recommend the patients be at least 21 years old to opt for it. Moreover, if you have just started noticing hair fall and you have not gone completely bald yet, this is the right time to go for the Hair transplant from a clinic in <?= ucwords($city) ?> or elsewhere. At this specific stage, the surgeon can use your existing hair for transplantation in the early restoration phases.
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
                        <p>
                            Before going for hair transplant surgery in <?= ucwords($city) ?>, you need to clear all the doubts in your mind regarding the procedure. Consultation with your surgeon will be ideal to help you in this regard. Here are some other things to do before undergoing the surgery
                        </p>
                        <ul>
                            <li>
                                Be ready with the reports of the routine blood tests like CBC, HCV, ECG, etc. instructed by the surgeon.
                            </li>
                            <li>
                                If you are a smoker or an alcoholic, stop consuming them at least 2 weeks before the treatment
                            </li>
                            <li>
                                Inform the doctor about any medication that you are taking currently, to stop or adjust it accordingly
                            </li>
                            <li>
                                Avoid taking spicy food the night prior to the surgery.
                            </li>
                            <li>
                                Wash your hair for at least two days with shampoo before going for hair transplantation
                            </li>
                            <li>
                                Let your doctor know if you have allergic behaviour to any particular medicine or anesthesia.
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
                        <ul>
                            <li>
                                On the day of the hair transplantation surgery in <?= ucwords($city) ?>, come with a prepared and stress-free mind.
                            </li>
                            <li>
                                Cooperate with the clinic staff in completing all the pre-operative formalities
                            </li>
                            <li>
                                The surgeon can choose to keep you awake during the entire procedure and administer anesthesia to numb your scalp
                            </li>
                            <li>
                                Be patient enough to bear the lengthy process of hair transplantation, as it can take around four to eight hours for a single session to complete
                            </li>
                            <li>
                                In case of a large volume of hair transplantation, you may have to revisit the clinic and devote a few more hours the next day to undergo the remaining treatment.
                            </li>
                            <li>
                                Overall, you should have realistic expectations with the hair transplant surgery in <?= ucwords($city) ?>.
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- ACCODION -->
                <!-- <p class="cosmetic-faq-list">
                        1. Are you a good candidate for Hair Transplant surgery?
                    </p>
                    <p>
                        If you abide by the following criteria, you will be an ideal candidate for hair transplant surgery in <?= ucwords($city) ?>:
                    </p>
                    <ul>
                        <li>
                            You have been losing your hair out of male pattern baldness for around 5 years or more
                        </li>
                        <li>
                            You have advanced to Class 3 or beyond on the Norwood Scale.
                        </li>
                        <li>
                            Your hair at the back and sides of your scalp have a healthy growth, good enough to serve as the donor zone
                        </li>
                        <li>
                            You have Scarring alopecia – a hair loss type resulting due to the damage of hair follicles
                        </li>
                        <li>
                            You have suffered hair loss due to scalp injuries, scarring, or some cosmetic surgery procedures
                        </li>
                        <li>
                            You have good health overall and a healthy scalp
                        </li>
                        <li>
                            You have reasonable expectations with the surgery
                        </li>
                    </ul>
                    <p class="cosmetic-faq-list">
                        2. What is the cost of a Hair Transplant?
                    </p>
                    <p>
                        The average cost of Hair Transplant Surgery in <?= ucwords($city) ?> depends largely on the number of grafts. For example, the cost of the procedure per 2000 grafts lies in the range of 55,000 INR to 80,000 INR. For a Hair Transplant involving 5000 grafts, the average cost is 1,00,000 INR – 1,40,000 INR and beyond.
                    </p>
                    <p>
                        Usually, the cost per graft is 40 INR to 100 INR. The cost also depends on various other factors like baldness level, number of sessions, the technique used (FUT or FUE), availability of graft donor area, the surgeon, and the clinical set up among others.
                    </p>
                    <p class="cosmetic-faq-list">
                        3. What are the risks related to Hair Transplant?
                    </p>
                    <p>
                        Usually, Hair Transplant surgery in <?= ucwords($city) ?> is a safe procedure to help your hair restoration goals. It may however accompany several risks at times, such as:
                    </p>
                    <ul>
                        <li>
                            Pain after the surgery
                        </li>
                        <li>
                            Unexpected outcomes
                        </li>
                        <li>
                            Possibility of bleeding, infection, itching, or scarring
                        </li>
                        <li>
                            Chances of wound dehiscence or skin necrosis
                        </li>
                        <li>
                            Scalp swelling
                        </li>
                        <li>
                            Lack of sensation in the treated scalp areas
                        </li>
                        <li>
                            Need for a revision surgery
                        </li>
                    </ul>
                    <p class="cosmetic-faq-list">
                        4. When can you go for Hair Transplant?
                    </p>
                    <p>
                        There is no fixed age to undergo hair transplant surgery, but surgeons mostly recommend the patients be at least 21 years old to opt for it. Moreover, if you have just started noticing hair fall and you have not gone completely bald yet, this is the right time to go for the Hair transplant from a clinic in <?= ucwords($city) ?> or elsewhere. At this specific stage, the surgeon can use your existing hair for transplantation in the early restoration phases.
                    </p>
                    <p class="cosmetic-faq-list">
                        5. What are the things to do before Hair Transplant Surgery?
                    </p>
                    <p>
                        Before going for hair transplant surgery in <?= ucwords($city) ?>, you need to clear all the doubts in your mind regarding the procedure. Consultation with your surgeon will be ideal to help you in this regard. Here are some other things to do before undergoing the surgery
                    </p>
                    <ul>
                        <li>
                            Be ready with the reports of the routine blood tests like CBC, HCV, ECG, etc. instructed by the surgeon.
                        </li>
                        <li>
                            If you are a smoker or an alcoholic, stop consuming them at least 2 weeks before the treatment
                        </li>
                        <li>
                            Inform the doctor about any medication that you are taking currently, to stop or adjust it accordingly
                        </li>
                        <li>
                            Avoid taking spicy food the night prior to the surgery.
                        </li>
                        <li>
                            Wash your hair for at least two days with shampoo before going for hair transplantation
                        </li>
                        <li>
                            Let your doctor know if you have allergic behaviour to any particular medicine or anesthesia.
                        </li>
                    </ul>
                    <p class="cosmetic-faq-list">
                        6. What to expect on the day of Hair Transplant surgery?
                    </p>
                    <ul>
                        <li>
                            On the day of the hair transplantation surgery in <?= ucwords($city) ?>, come with a prepared and stress-free mind.
                        </li>
                        <li>
                            Cooperate with the clinic staff in completing all the pre-operative formalities
                        </li>
                        <li>
                            The surgeon can choose to keep you awake during the entire procedure and administer anesthesia to numb your scalp
                        </li>
                        <li>
                            Be patient enough to bear the lengthy process of hair transplantation, as it can take around four to eight hours for a single session to complete
                        </li>
                        <li>
                            In case of a large volume of hair transplantation, you may have to revisit the clinic and devote a few more hours the next day to undergo the remaining treatment.
                        </li>
                        <li>
                            Overall, you should have realistic expectations with the hair transplant surgery in <?= ucwords($city) ?>.
                        </li>
                    </ul> -->
            </div>
        <?php } elseif ($surgery_str == "men and plastic surgery") { ?>
            <div class="col padd-null">
                <div class="top-content">
                    <p>
                        Women are not the only ones who wish to look their best. Nowadays, men too want to beautify themselves, look slim, have flawless skin, and there is nothing wrong with that! Several cosmetic surgeries for men exist to treat different concerns like flabby stomach, sagging or blemished skin, facial wrinkles, or any other issues. Our cosmetic surgeons from <?= ucwords($city) ?> are one of the best to perform men’s cosmetic surgeries.
                    </p>
                </div>
                <p class="identity">
                    Why Choose Our Surgeons for Men’s Plastic Surgery in <?= ucwords($city) ?>?
                </p>
                <ul>
                    <li>
                        Top choices in <?= ucwords($city) ?> for performing cosmetic surgeries for men
                    </li>
                    <li>
                        Run a fully equipped clinic with the infrastructure needed to perform extensive surgeries for men
                    </li>
                    <li>
                        Experienced at performing gynecomastia, Men’s Plastic Surgery, ear surgery, facelift, chin augmentation, tummy tuck, and many more procedures
                    </li>
                    <li>
                        Best cosmetic surgeons in <?= ucwords($city) ?> certified by several national and international boards of cosmetic surgeons
                    </li>
                </ul>
                <p class="identity">
                    COST OF MEN’S PLASTIC SURGERY IN <?= ucwords($city) ?>
                </p>
                <p>
                    When it comes to the choices for plastic surgery in men, the options are multiple. From facial non-invasive and minimally invasive treatments to extensive full-body procedures, you can go for any of them. Therefore, the cost of plastic surgery for men also varies depending on the treatment. If you have any specific concerns, feel free to visit any of our acclaimed cosmetic surgeons in <?= ucwords($city) ?> for proper guidance.
                </p>
                <p class="identity">OUR SERVICES</p>
                <p>
                    Regain your confidence with your choice of cosmetic surgery. Consult with <?= ucwords($city) ?>’s most esteemed cosmetic surgeon and be your youthful self.
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
                            If you are a male and looking to undergo plastic surgery in <?= ucwords($city) ?> to enhance your physical appearance, fulfilling the following points will make you a suitable candidate:
                        </p>
                        <ul>
                            <li>
                                You are an adult with good overall health
                            </li>
                            <li>
                                You are free from severe health conditions like high blood pressure, heart problems, diabetes, etc.
                            </li>
                            <li>
                                You are a non-smoker and non-alcoholic
                            </li>
                            <li>
                                You have developed too much sagging skin
                            </li>
                            <li>
                                Your current body weight is close to your ideal weight
                            </li>
                            <li>
                                You want to get away with excess fat accumulated in your tummy, thighs, eyelid, arms, etc.
                            </li>
                            <li>
                                You have set realistic expectations for the surgery
                            </li>
                            <li>
                                You want to opt for surgery to correct the asymmetric body features
                            </li>
                            <li>
                                You want to restore your body features after an accident
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
                            The rates start from as low as a couple of thousands for dermal fillers, acne treatment, and laser skin treatment to more than 3,00,000 INR for extensive body contouring and reshaping surgeries. Consult one of our surgeons to know the amount for the specific Men’s Plastic Surgery you wish to undergo in <?= ucwords($city) ?>.
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
                                Allergic reaction to anesthesia
                            </li>
                            <li>
                                Loose or sagging skin
                            </li>
                            <li>
                                Change or decrease in the sensation in the treated area
                            </li>
                            <li>
                                Intense pain after the starting few days of the surgery
                            </li>
                            <li>
                                Bleeding and swelling that persists for a week
                            </li>
                            <li>
                                Infection due to surgery such as bruising, redness, itching, fever, warmth, etc.
                            </li>
                            <li>
                                Seroma or pooling of fluid in the body
                            </li>
                            <li>
                                Hematoma or pooling of blood, which tends the skin to feel rubbery, spongy, and lumpy
                            </li>
                            <li>
                                Possibility of revisional surgery
                            </li>
                            <li>
                                Poor healing due to careless stitching
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
                            When you feel like enhancing your appearance, distorted due to an injury or age, opting for Men’s Plastic Surgery in <?= ucwords($city) ?> would be advisable. There is no fixed age to undergo plastic surgery, as even teenagers could undergo it after the consent of their parents. Still, to be on the side, you should be at least 18 years of age.
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
                                Prepare yourself well for the surgery by following the pre-surgery instructions given by the surgeon
                            </li>
                            <li>
                                Maintain a healthy, balanced, and nutritious diet before going for the surgery
                            </li>
                            <li>
                                Drink around 6-8 glasses of water per day to hydrate and cleanse your body
                            </li>
                            <li>
                                Stop smoking at least 2 weeks before the surgery
                            </li>
                            <li>
                                Stop consuming alcohol at least 2 weeks prior to the procedure
                            </li>
                            <li>
                                Have someone accompany you to the clinic, take you back after the surgery, and assist you in daily activities for around 1 week after the surgery
                            </li>
                            <li>
                                Arrange for loose clothes to wear after the surgery for quicker healing
                            </li>
                            <li>
                                Clear all the doubts regarding plastic surgery in <?= ucwords($city) ?> with your surgeon
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
                                You should arrive at the hospital or clinic in <?= ucwords($city) ?> for Men’s Plastic Surgery with a calm and composed mind
                            </li>
                            <li>
                                Feel relaxed and at ease
                            </li>
                            <li>
                                Discuss your reaction to anesthesia with the anesthesiologist so that he could adjust the dose accordingly
                            </li>
                            <li>
                                The surgeon will use the latest and advanced equipment to create incisions in the concerned site on your body
                            </li>
                            <li>
                                After making the incision and doing the surgery, the surgeon will stitch the incision with sutures
                            </li>
                            <li>
                                The entire procedure may take a few hours to complete depending on the surgery you opt for
                            </li>
                            <li>
                                The surgeon will provide aftercare instructions that you would need to abide strictly from prompt healing
                            </li>
                            <li>
                                You can return to your work in around 2-3 weeks.
                            </li>
                            <li>
                                You should have realistic expectations with the surgery so that you do not face problems with unfavourable results.
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
    <div class="container-fluid">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="item-middle">
                        <div class="ico">
                            <i class="fa fa-paper-plane-o" aria-hidden="true"></i>
                            <h6>For any query related to treatment email us</h6>
                            <h6>
                                <a href="mailto:<?= Setting('email') ?>">
                                    <?= Setting('email') ?>
                                </a>
                            </h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

@push ("after-scripts")

@endpush