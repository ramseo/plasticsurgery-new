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

<!-- Doctors Listing -->
<?php
$getAssignedDoctors = getAssignedDoctors($city);
if ($getAssignedDoctors->isNotEmpty()) {
?>
    <div class="container-fluid">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <p class="identity">
                        top cosmetic surgeons in <?= $city ?>
                    </p>
                    <div class="row">
                        <?php
                        foreach ($getAssignedDoctors as $item) {
                            $reviews = getDataArray('vendor_reviews', 'user_id', $item->id);
                            $average = averageReview($reviews);
                        ?>
                            <div class="col-lg-3 doc-flex-cls">
                                <div class="col-lg-5 padd-null">
                                    <div class="doc-img-div">
                                        <a target="_blank" href="<?= url("surgeon/$item->username") ?>">
                                            <?php if (file_exists(public_path() . '/storage/user/profile/' . $item->avatar)) { ?>
                                                <img src="<?= asset('/storage/user/profile/' . $item->avatar) ?>" style="width:100%" />
                                            <?php } else { ?>
                                                <img src="<?= asset("img/default-avatar.jpg") ?>" alt="doctor img" style="width:100%" />
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
                                </div>
                                <div class="col-lg-7 doc-details-sec">
                                    <div class="doc-name">
                                        <a target="_blank" href="<?= url("surgeon/$item->username") ?>">
                                            Dr. <?= Str::words($item->first_name . " " . $item->last_name, '2')  ?>
                                        </a>
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
                                        <a target="_blank" href="<?= url("surgeon/$item->username") ?>">
                                            view more
                                        </a>
                                    </div>
                                </div>
                            </div>
                        <?php } ?>
                    </div>
                    <div class="row">
                        <div class="col">
                            <p>
                                Our Board-Certified Plastic Surgeons in <?= $city ?> hold dexterity in performing complex cosmetic surgeries with ease.
                                Our experts have a commendable record of operating countless surgeries with success.
                                Among their expertise, include Liposuction, Rhinoplasty, Blepharoplasty, Gynecomastia, Breast Augmentation, Tummy Tuck, and more.
                                Our surgeons are immensely qualified and possess adept expertise in performing surgery with great precision.
                                They make sure to give personal attention to each individual, listen carefully to the problems of the patients, and try to grasp their expectations from the surgery.
                                This helps them appreciably in suggesting and performing the most suitable procedure in a safe and hygienic environment, well-equipped with advanced surgery tools.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php } ?>
<!-- Doctors Listing -->

<div class="container-fluid">
    <div class="container">
        <div class="row">
            <?php if ($surgery_str == "rhinoplasty") { ?>
                <div class="col">
                    <div class="top-content">
                        <p>
                            <strong>
                                Are you planning to reshape your nose to accentuate your features?
                            </strong>
                        </p>
                        <p>
                            Well, <?= $surgery_str ?>, or ‘nose job’, will give you the desired results.
                            Performed as an outpatient procedure, it has a minimal recovery time.
                            With the efforts of our experienced cosmetic surgeons in <?= $city ?>,
                            you can get regain your sculpted nose with a striking resemblance
                            to your natural appearance.
                        </p>
                    </div>
                    <p class="identity">
                        Why Choose Our <?= $surgery_str ?> Surgeons in <?= $city ?>?
                    </p>
                    <ul>
                        <li>
                            We enable you to find the most experienced,
                            and skilled cosmetic surgeons for <?= $surgery_str ?> in <?= $city ?>.
                        </li>
                        <li>
                            Exponential success rates for <?= $surgery_str ?> surgeries with a satisfying
                            patient experience.
                        </li>
                        <li>
                            Renowned cosmetic surgeons certified by the reputed national
                            and international boards for plastic surgeons.
                        </li>
                        <li>
                            Expertise in performing varied types of <?= $surgery_str ?> treatments in <?= $city ?>,
                            including revision <?= $surgery_str ?>, reduction <?= $surgery_str ?>, augmentation <?= $surgery_str ?>,
                            filler <?= $surgery_str ?>, reconstruction <?= $surgery_str ?>, and post-traumatic <?= $surgery_str ?>
                            depending on the specific condition and expectation of the patient.
                        </li>
                    </ul>
                    <p class="identity">
                        COST OF <?= $surgery_str ?> SURGERY IN <?= $city ?>
                    </p>
                    <p>
                        The cost of <?= $surgery_str ?> surgery depends on various factors including the complexity
                        of the operation, any additional requirements like nasal implants, etc.
                        It would be good to visit our cosmetic surgeon to discuss all the requisite details.
                    </p>
                    <p class="identity">OUR SERVICES</p>
                    <p>
                        Enhance your overall facial appearance with <?= $surgery_str ?>
                        from one of our best cosmetic surgery surgeons in <?= $city ?>!
                        Experience the most attentive patient care in state-of-the-art
                        facilities and experienced medical staff
                        supervised by our accomplished cosmetic surgeons.
                    </p>

                    <p class="identity">
                        FAQs on <?= $surgery_str ?> Surgery in <?= $city ?>
                    </p>
                    <p class="cosmetic-faq-list">
                        1. Are you a good candidate for <?= $surgery_str ?>?
                    </p>
                    <p>
                        If you satisfy below points, you are a good candidate for <?= $surgery_str ?>
                        surgery in <?= $city ?>
                    </p>
                    <ul>
                        <li>Your facial growth has attained its completion</li>
                        <li>You are a healthy person</li>
                        <li>
                            You have informed your surgeon about the allergies and medical conditions
                            that you are undergoing
                        </li>
                        <li>You are not allergic to anesthesia or other medicines related to nose surgery</li>
                        <li>
                            You are a non-smoker and a non-alcoholic (If not, be the one at least
                            for the duration recommended by your surgeon)
                        </li>
                        <li>You have realistic goals with respect to the nose surgery</li>
                    </ul>

                    <p class="cosmetic-faq-list">
                        2. What is the cost of <?= $surgery_str ?>?
                    </p>
                    <p>
                        On average, the cost of <?= $surgery_str ?> in <?= $city ?> may vary between
                        50,000 INR to 2,50,000 depending on various factors.
                        The cost may fluctuate further subject to the treatment necessities.
                    </p>

                    <p class="cosmetic-faq-list">
                        3. What are the risks related to <?= $surgery_str ?>?
                    </p>
                    <p>
                        Whether you opt for <?= $surgery_str ?> in <?= $city ?> or elsewhere,
                        there may arise certain risks after the surgery, such as:
                    </p>
                    <ul>
                        <li>Bleeding, infection, adverse reaction to anesthesia</li>
                        <li>Visible scars</li>
                        <li>The chance of an un-even nose appearance as the outcome</li>
                        <li>Problem with breathing through the nose</li>
                        <li>Persistent swelling, skin discoloration, or pain</li>
                        <li>Urgent need for a revision nose surgery</li>
                        <li>Possibility of a hole in the septum</li>
                    </ul>

                    <p class="cosmetic-faq-list">
                        4. When can you go for <?= $surgery_str ?>?
                    </p>
                    <p>
                        The best to go for <?= $surgery_str ?> in <?= $city ?> is when your facial structure
                        is fully developed. Hence, the surgery is not advisable for children,
                        as they are still in their growing phase. Usually,
                        females between the age of 15-16 and beyond can go for <?= $surgery_str ?>, Likewise,
                        males of 17-18 years of age and beyond can opt for it.
                    </p>

                    <p class="cosmetic-faq-list">
                        5. What are the things to do before <?= $surgery_str ?> surgery
                    </p>
                    <ul>
                        <li>Give your body complete rest to enable prompt healing after the surgery</li>
                        <li>Clean your face at least twice a day to get rid of dead skin</li>
                        <li>Keep yourself hydrated</li>
                        <li>Have some to take you back home after the surgery</li>
                        <li>
                            Prepare your things in advance so that you don’t face
                            hassles after returning from the surgery
                        </li>
                        <li>Avoid drinking and smoking</li>
                        <li>
                            Avoid using over-the-counter medicated creams that include salicylic acid, Retin-A,
                            benzoyl peroxide, etc.
                        </li>
                        <li>Minimize exposure to the sun</li>
                        <li>
                            Consult your surgeon to know about the medications to avoid and abide by all
                            the instructions
                        </li>
                    </ul>

                    <p class="cosmetic-faq-list">
                        6. What to expect on the day of <?= $surgery_str ?> surgery?
                    </p>
                    <ul>
                        <li>
                            If you are opting for nose surgery, it clearly indicates your uneasiness with your
                            existing nose shape. Hence, you would expect to have a better
                            appearance of your nose with the <?= $surgery_str ?> surgery.
                        </li>
                        <li>
                            However, make sure that you have realistic expectations with the surgery, and be prepared
                            to face the outcome. Anticipating miracles would only hurt your sentiments.
                        </li>
                        <li>
                            On the day of the surgery, you could expect the surgeon to take around 2-3 hours
                            to complete the procedure.
                        </li>
                        <li>
                            After the surgery, you may expect mild discomfort, which will vanish with time.
                        </li>
                        <li>
                            The surgeon would recommend you several post-operation instructions and medication
                            for quick healing. So, make sure to follow them strictly.
                        </li>
                    </ul>
                </div>
            <?php } elseif ($surgery_str == "blepharoplasty") { ?>
                <div class="col">
                    <div class="top-content">
                        <p>
                            <strong>
                                Are droopy eyelids affecting your appearance?
                            </strong>
                        </p>
                        <p>
                            While healthy eyes can transform your entire look, sagging upper eyelids or dark circles
                            can make you appear dull. Blepharoplasty is a suitable cosmetic surgery for correcting
                            droopy or sagging upper eyelids and removing unwanted skin on the lower eyelids.
                            When performed aesthetically by our expert cosmetic surgeons in <?= $city ?>, your eyes
                            will look as fresh, bright, and young as ever.
                        </p>
                    </div>
                    <p class="identity">
                        Why Choose Our Surgeons for Blepharoplasty in <?= $city ?>?
                    </p>
                    <ul>
                        <li>
                            Trusted and most experienced cosmetic surgeons in <?= $city ?> to perform eyelid surgery
                        </li>
                        <li>
                            Leverage laser treatments and other latest techniques to get rid of the wrinkles
                            around the eyes
                        </li>
                        <li>
                            Expert cosmetic surgeons with certification from reputed national and international
                            boards for cosmetic surgeons
                        </li>
                        <li>
                            Adept expertise in making your eyes naturally youthful by considering the facial muscle structure, bone structure,
                            and the symmetry of the eyebrows
                        </li>
                    </ul>

                    <p class="identity">
                        COST OF <?= $surgery_str ?> SURGERY IN <?= $city ?>
                    </p>
                    <p>
                        The cost of Blepharoplasty surgery depends on the complexity of the surgery.
                        If your eyelids are obstructing the vision, you may get medical insurance cover
                        for the same. Else, it will come under aesthetic purposes and hence will not qualify
                        for the insurance claim. It is better to consult our cosmetic surgeon in <?= $city ?>
                        if you want to know the treatment cost. Depending on your expectations and any other
                        additional treatments needed, you can get a better estimate.
                    </p>
                    <p class="identity">
                        OUR SERVICES
                    </p>
                    <p>
                        The liveliness of your eyes has a great impact on your appearance. Due to the age factor,
                        you can end up with sagging eyelids and dark circles. Blepharoplasty is the right
                        cosmetic treatment to turn you into a better-looking self. Schedule a consultation
                        session with <?= $city ?>’s renowned cosmetic surgeons now.
                    </p>

                    <p class="identity">
                        FAQs on Blepharoplasty Surgery in <?= $city ?>
                    </p>

                    <p class="cosmetic-faq-list">
                        1. Are you a good candidate for Blepharoplasty?
                    </p>
                    <p>
                        An ideal candidate for eyelid surgery in <?= $city ?> should adhere
                        to several essential criteria, as mentioned here:
                    </p>
                    <ul>
                        <li>
                            Suffering from droopy eyelids, exposing an increased portion of eye white
                        </li>
                        <li>
                            Sagging upper eyelids resulting due to fatty tissue building up beneath
                            the skin
                        </li>
                        <li>
                            Suffering from peripheral vision problems that need immediate intervention
                        </li>
                        <li>
                            Want to get rid of dark circles and under-eye bags
                        </li>
                        <li>
                            Have a good physical health
                        </li>
                        <li>
                            Does not have any pre-existing medical condition
                        </li>
                    </ul>

                    <p class="cosmetic-faq-list">
                        2. What is the cost of Blepharoplasty?
                    </p>
                    <p>
                        On average, the cost of Eyelid Surgery or Blepharoplasty in <?= $city ?> varies
                        between 80,000 INR and 2,00,000 INR. The cost may fluctuate both ways depending
                        on the doctor your approach, the clinic you choose for the surgery,
                        and several other factors.
                    </p>

                    <p class="cosmetic-faq-list">
                        3. What are the risks related to Blepharoplasty?
                    </p>
                    <ul>
                        <li>
                            Allergic reaction to anesthesia
                        </li>
                        <li>
                            Surgical risks, which may include bleeding and infection
                        </li>
                        <li>
                            Numbness in the treated area
                        </li>
                        <li>
                            Blurred or impaired sight temporarily
                        </li>
                        <li>
                            Possibility of ectropion, which refers to slack and outward-rolling of the lower eyelid
                        </li>
                        <li>
                            Watery eyes or dry eyes
                        </li>
                        <li>
                            Lump in the lower eyelid, which could irritate the surface of the eye
                        </li>
                        <li>
                            Loss of vision in rare cases
                        </li>
                        <li>
                            Revision surgery due to faulty surgery
                        </li>
                    </ul>

                    <p class="cosmetic-faq-list">
                        4. When can you go for Blepharoplasty?
                    </p>
                    <p>
                        When you start noticing droopy or baggy upper eyelids, Blepharoplasty surgery in <?= $city ?>
                        could help to remedy the situation. In addition, when you observe problems in peripheral
                        vision due to the generation of excess skin in the upper eyelids or lower eyelids,
                        you can always opt for Blepharoplasty. The ideal age to get eyelid surgery is 30 plus,
                        as most people get droopy eyelids in their 30s itself.
                    </p>

                    <p class="cosmetic-faq-list">
                        5. What are the things to do before the Blepharoplasty Surgery?
                    </p>
                    <ul>
                        <li>
                            It is good to visit a lab to test and find the existing medical condition
                            of your eyes.
                        </li>
                        <li>
                            Consult with your surgeon about your ongoing medications, so that the expert could suggest necessary adjustments
                        </li>
                        <li>
                            Stop drinking and smoking at least 4-6 months before the surgery
                        </li>
                        <li>
                            Avoid the consumption of anti-inflammatory drugs or herbal supplements as it could lead to bruising or bleeding
                        </li>
                        <li>
                            Make sure you are aware of all the risks and side effects of the surgery
                        </li>
                        <li>
                            Be prepared for the surgery so that you could go under the knife with a calm
                            mind
                        </li>
                    </ul>

                    <p class="cosmetic-faq-list">
                        6. What to expect on the day of Blepharoplasty surgery?
                    </p>
                    <ul>
                        <li>
                            On the day of Blepharoplasty surgery, arrive at the clinic with a positive
                            frame of mind
                        </li>
                        <li>
                            One of the staff members will administer anesthesia to help you ensure a
                            painless surgery
                        </li>
                        <li>
                            You could expect the staff to take several tests before the surgery to check your
                            current health, such as your sugar level, oxygen level, BP, and more
                        </li>
                        <li>
                            You could expect the surgery to continue for 1-2 hours.
                            Much will depend if the surgeon is repositioning the fat on the upper eyelids,
                            lower eyelids, or both. It may take additional time for a cheek lift.
                        </li>
                        <li>
                            After the surgery, the doctor will stitch the treated area, which will remain
                            for around a week.
                        </li>
                        <li>
                            For upper eyelid surgery, the expected recovery time is 7-10 days. Likewise,
                            for lower eyelid surgery, it may take 10-14 days for complete recovery.
                        </li>
                    </ul>

                </div>
            <?php } elseif ($surgery_str == "facelift") {  ?>
                <div class="col">
                    <div class="top-content">
                        <p>
                            Has your face started showing wrinkles and fine lines too early? If yes,
                            then facelift surgery can restore your youthful skin appreciably! Facelift surgery
                            or Rhytidectomy enhances the complete appearance of your face thereby reducing
                            wrinkles, fine lines, and sagging.
                        </p>
                        <p>
                            Turn back the time and get your youthful looks back with facelift surgery
                            from one of our top cosmetic surgeons in <?= $city ?>!
                        </p>
                    </div>
                    <p class="identity">
                        Why Choose Our Cosmetic Surgeons for Facelift Surgery in <?= $city ?>?
                    </p>
                    <ul>
                        <li>
                            Most skilled surgeons in <?= $city ?> for facelift surgery
                        </li>
                        <li>
                            Highly proficient at performing different facelift procedures like standard facelift,
                            mini facelift, mid facelift, and low facelift
                        </li>
                        <li>
                            Dexterous in performing customized facelifts in combination with other non-invasive
                            procedures for transformative results.
                        </li>
                        <li>
                            Extend complete support throughout the recovery phase
                        </li>
                        <li>
                            Board-certified surgeons with accreditations from multiple national organizations
                            for cosmetic surgeries
                        </li>
                    </ul>
                    <p class="identity">
                        COST OF <?= $surgery_str ?> SURGERY IN <?= $city ?>
                    </p>
                    <p>
                        The cost of a facelift varies depending on the extent of the surgery.
                        Some prefer to have a mini facelift on their forehead or cheeks while
                        others go for a total facelift. Hence, the price of the treatment
                        continues to differ.
                    </p>
                    <p class="identity">OUR SERVICES</p>
                    <p>
                        When nothing else works to restore your youthful look, a facelift is the best
                        treatment. In just one procedure by one of our experienced surgeons
                        in <?= $city ?>, you can notice a visible difference in your
                        facial appearance.
                    </p>

                    <p class="identity">
                        FAQs on Facelift Surgery Surgery in <?= $city ?>
                    </p>
                    <p class="cosmetic-faq-list">
                        1. Are you a good candidate for Facelift Surgery?
                    </p>
                    <ul>
                        <li>
                            Satisfying the below-mentioned conditions will make
                            you a suitable candidate for Facelift Surgery.
                        </li>
                        <li>
                            You should have a good overall skin condition with sufficient
                            elasticity and flexibility with the ability to bounce
                            back on pinching
                        </li>
                        <li>
                            Your lifestyle does not include smoking or extreme exposure to the sun
                        </li>
                        <li>
                            Your face has a strong underlying bone structure
                        </li>
                        <li>
                            You have a clear understanding of the healing process
                        </li>
                        <li>
                            You have fair expectations with the surgery
                        </li>
                    </ul>

                    <p class="cosmetic-faq-list">
                        2. What is the cost of Facelift Surgery?
                    </p>
                    <p>
                        Approaching a certified and experienced cosmetic surgeon in <?= $city ?>
                        can cost you anywhere around 1,00,000 INR – 2,00,000 INR for
                        facelift surgery.
                        You can also choose to customize your surgery by including Chin Surgery,
                        Lip Augmentation, etc. at additional costs.
                    </p>

                    <p class="cosmetic-faq-list">
                        3. What are the risks related to Facelift Surgery?
                    </p>
                    <p>
                        Facelift surgery can lead to several complications
                    </p>
                    <ul>
                        <li>
                            Hematoma, the collection of blood under the skin can happen within
                            24 hours of the surgery, thus leading to pressure and swelling
                        </li>
                        <li>
                            Permanent Facelift scars that can be hidden by hairline or natural
                            contours of ear and face
                        </li>
                        <li>
                            Possibility of infection
                        </li>
                        <li>
                            Damaged blood vessels resulting in bleeding
                        </li>
                        <li>
                            Slow healing of wounds
                        </li>
                        <li>
                            Injury to nerves in rare instances, leading to uneven facial
                            expression or appearance
                        </li>
                        <li>
                            Hampered blood supply to blood tissues,
                            resulting in hair and skin loss
                        </li>
                        <li>
                            Weight changes may change the condition of the skin and face
                        </li>
                        <li>
                            Possibility of revision surgeries in case the procedure did not go well
                            in rare instances
                        </li>
                    </ul>

                    <p class="cosmetic-faq-list">
                        4. When can you go for Facelift Surgery?
                    </p>
                    <p>
                        People mostly opt for Facelifts to improve their facial structure that has been
                        worn out with age. Hence, individuals from 40 to 60 years
                        of age are more likely to undergo this surgery in <?= $city ?>
                        to get rid of fine lines, wrinkles, deep lines,
                        and sagging skin in the face and neck area.
                    </p>
                    <p class="cosmetic-faq-list">
                        5. What are the things to do before the Facelift surgery?
                    </p>
                    <ul>
                        <li>
                            Get medical evaluation and tests from a lab in <?= $city ?> to make
                            sure that your body is fit enough to undergo the surgery
                        </li>
                        <li>
                            Have the required budget to pay for the treatment
                        </li>
                        <li>
                            Inform your surgeon about your existing medications for proper adjustments
                            to ensure a safe facelift procedure
                        </li>
                        <li>
                            Stop smoking as the contained nicotine can restrict blood flow,
                            thus causing complications during the surgery and even later on
                        </li>
                        <li>
                            Start drinking plenty of water many days before the surgery,
                            as it will facilitate quick recovery
                        </li>
                        <li>
                            Be prepared with loose clothes or those with buttons, zip, etc.
                            to avoid taking off and wearing your shirts
                            repeatedly over your head
                        </li>
                        <li>
                            You will need someone to drive you home, take care of yourself
                            and do the cleaning after the surgery
                        </li>
                    </ul>

                    <p class="cosmetic-faq-list">
                        6. What to expect on the day of Facelift surgery?
                    </p>
                    <ul>
                        <li>
                            On the day of the surgery in <?= $city ?>, you should be at the clinic
                            with a positive attitude
                        </li>
                        <li>
                            Your surgeon will clear all your apprehensions and doubts
                            if you have any, in a candid interaction
                        </li>
                        <li>
                            In the surgery room, the anesthesia expert will inquire if you have
                            allergic behavior to anesthesia and will
                            adjust the dose accordingly.
                        </li>
                        <li>
                            Usually, a facelift surgery in <?= $city ?> might take around 3-6 hours
                            depending on the severity of your case. However,
                            opting for additional cosmetic procedures will
                            take more time.
                        </li>
                        <li>
                            During the surgery, you could expect the surgeon to do skin elevation
                            followed by tightening of muscles and tissues of the face
                            with the help of advanced tools and techniques.
                        </li>
                        <li>
                            You should have realistic expectations with the surgery so that the results
                            could not leave you upset.
                        </li>
                        <li>
                            After the surgery, you may feel pain in the treated areas, which will subside
                            in a day or two
                        </li>
                        <li>
                            You may also experience bruising and swelling on the face,
                            which will vanish in 1-2 weeks
                        </li>
                    </ul>

                </div>
            <?php } elseif ($surgery_str == "brow lift") { ?>
                <div class="col">
                    <div class="top-content">
                        <p>
                            Your forehead and eyelids are among the first places to show the signs
                            of ageing. A Brow Lift surgery targets this very area of your face,
                            i.e., sagging skin between the eyebrows and the upper eyelids.
                            You can minimise the appearance of wrinkles on the eyelids,
                            which will automatically result in a rejuvenated appearance.
                            Since it is an intricate surgery, it is vital to consult one of our best
                            cosmetic surgeons in <?= $city ?>.
                        </p>
                    </div>
                    <p class="identity">
                        Why Choose Our Surgeons for Brow Lift Surgery in <?= $city ?>?
                    </p>
                    <ul>
                        <li>
                            The best cosmetic surgeons in <?= $city ?> with specialisation in facial
                            cosmetic procedures
                        </li>
                        <li>
                            Ability to deliver amazing results by minimising the signs of ageing near
                            the brows
                        </li>
                        <li>
                            Expert at combining Brow Lift surgery with other facial treatments
                            like facelifts,fillers, or Botox.
                        </li>
                        <li>
                            Experienced cosmetic surgeons in <?= $city ?>, certified by the top national
                            associations of cosmetic surgeons.
                        </li>
                    </ul>
                    <p class="identity">
                        COST OF <?= $surgery_str ?> SURGERY IN <?= $city ?>
                    </p>
                    <p>
                        When compared to other cosmetic procedures, Brow Lift surgery is a
                        simple yet intricate treatment. Apart from the main surgery cost,
                        you should also consider the price of medicines and other
                        necessities for a smooth recovery. To get an estimate
                        for Brow Lift surgery, you can always consult
                        our cosmetic surgeon in <?= $city ?>.
                    </p>
                    <p>
                        To get an estimate for <?= $surgery_str ?> surgery, you can always consult our cosmetic surgeon in <?= $city ?>.
                    </p>
                    <p class="identity">OUR SERVICES</p>
                    <p>
                        Tired eyes with wrinkles can make you look older.
                        Our surgeons will help to reduce the sagging
                        skin and wrinkles on your eyelids,
                        hence letting your eyes look bright,
                        big, and beautiful.
                        The customised Brow Lift surgery performed by one of our
                        best plastic surgeons in <?= $city ?> would
                        be suitable in this regard.
                    </p>

                    <p class="identity">
                        FAQs on Brow Lift Surgery in <?= $city ?>
                    </p>
                    <p class="cosmetic-faq-list">
                        1. Are you a good candidate for Brow Lift surgery?
                    </p>
                    <p>
                        The points below will help to find out if you are a
                        suitable candidate for Brow Lift
                        surgery in <?= $city ?>:
                    </p>
                    <ul>
                        <li>
                            Your eyebrows have started sagging because of excessive skin
                        </li>
                        <li>
                            Heavily sagging brows leading to the vision problem
                        </li>
                        <li>
                            Formation of vertical frown lines between the brows
                        </li>
                        <li>
                            Fine lines and horizontal wrinkles on the forehead
                        </li>
                        <li>
                            You have good health overall, free from any severe
                            chronic disease
                        </li>
                        <li>
                            You do not consume tobacco or alcohol
                        </li>
                        <li>
                            You have set measurable goals with the Brow Lift surgery
                        </li>
                    </ul>
                    <p class="cosmetic-faq-list">
                        2. What is the cost of Brow Lift surgery?
                    </p>
                    <p>
                        The average cost of Brow Lift surgery in <?= $city ?> ranges between
                        60,000 INR to 1,30,000 INR. There is however a big variation,
                        which results due to the selection of hospital,
                        the expertise of the surgeon, fees of the anesthesiologist,
                        the use of advanced techniques, the extent of Brow Lift,
                        the addition of other surgeries, and so on.
                    </p>
                    <p class="cosmetic-faq-list">
                        3. What are the risks related to Brow Lift surgery?
                    </p>
                    <p>
                        Like almost any other surgery, Brow Lift also accompanies
                        several risks and complications:
                    </p>
                    <ul>
                        <li>
                            Severe pain, bruising, and swelling
                        </li>
                        <li>
                            Accumulation of flood or seroma, which necessitates
                            the drainage of fluid
                        </li>
                        <li>
                            Allergic behaviour to sutures, antiseptic medicines,
                            dressings, etc.
                        </li>
                        <li>
                            Allergic reaction to anaesthesia
                        </li>
                        <li>
                            Possibility of infection
                        </li>
                        <li>
                            Skin scarring with visible marks formed due to sutures
                        </li>
                        <li>
                            Loss of sensation in the facial skin and the scalp area
                        </li>
                        <li>
                            Itching in the face or scalp
                        </li>
                        <li>
                            Skin contour irregularities leading to depressions and
                            skin wrinkling
                        </li>
                        <li>
                            Harm to deeper structures like the eyes, nerves, skull bone,
                            muscles, and blood vessels
                        </li>
                        <li>
                            Asymmetrical face
                        </li>
                    </ul>

                    <p class="cosmetic-faq-list">
                        4. When can you go for Brow Lift surgery?
                    </p>
                    <p>
                        People between the ages of 40-65 mostly opt for Brow Lift surgery.
                        During this age bracket, the brow line starts to droop,
                        fine lines appear across the forehead and wrinkle
                        formation becomes a norm. However,
                        young patients in their 20s or 30s having a genetic problem
                        of “worry lines” may also opt for this surgery
                    </p>

                    <p class="cosmetic-faq-list">
                        5. What are the things to do before the Brow Lift Surgery?
                    </p>
                    <ul>
                        <li>
                            Quit smoking at least 2 weeks before the surgery in <?= $city ?>
                        </li>
                        <li>
                            Quit drinking alcohol at least 2 weeks before the Brow Lift
                        </li>
                        <li>
                            Visit the doctor to review your medical history
                            and suggest the adjustment of
                            existing medications (if any) accordingly
                        </li>
                        <li>
                            Clear your confusion regarding the surgery with your
                            cosmetic surgeon
                        </li>
                        <li>
                            Have a clear reason for undergoing the surgery and be aware
                            of the related pros and cons
                        </li>
                        <li>
                            Get medical tests such as Complete Blood Count (CBC), Clotting Time (CT),
                            and Bleeding Time (BT) a few days before the surgery
                            to ensure your good health for the surgery
                        </li>
                        <li>
                            Avoid consumption of anti-inflammatory drugs or other drugs that
                            could increase bleeding and bruising
                        </li>
                        <li>
                            Arrange for someone to be with you during the surgery
                            and help you take home after the surgery
                        </li>
                    </ul>

                    <p class="cosmetic-faq-list">
                        6. What to expect on the day of Brow Lift surgery?
                    </p>
                    <ul>
                        <li>
                            On the day of Brow Lift surgery, be in the hospital on time
                        </li>
                        <li>
                            The anesthesiologist will inquire about your reaction to
                            anesthesia and will administer the dose accordingly
                        </li>
                        <li>
                            In the surgery room, the surgeon will make the incisions
                            necessary to remove the excess fat, tighten the
                            sagging skin and make the
                            forehead wrinkle-free
                        </li>
                        <li>
                            You could expect the Brow Lift procedure to complete in around 1-2 hours
                            depending on the complications arising due to the surgery.
                        </li>
                        <li>
                            The surgeon will suggest you several prescriptions and recovery
                            instructions to follow
                        </li>
                        <li>
                            Your forehead will heal completely within 6 months
                        </li>
                        <li>
                            The surgeon will recommend you visit the clinic at regular intervals
                            for follow-ups after the surgery
                        </li>
                        <li>
                            Make sure to have realistic expectations with the surgery as the final
                            outcome may vary significantly than you might have thought
                        </li>
                    </ul>

                </div>
            <?php } elseif ($surgery_str == "neck lift") { ?>
                <div class="col">
                    <div class="top-content">
                        <p>
                            While you often give importance to your face, you forget to notice
                            the role of the neck in your overall appearance.
                            Due to excessive weight gain or loss, hormonal imbalance,
                            ageing, or any other genetic factors, you may have a sagging
                            or drooping neck that could mess up how you look.
                        </p>
                        <p>
                            A neck lift aims at tightening the skin of the neck by removing the excess fat
                            under the chin and creating well-contoured necklines.
                            We recommend visiting any of our top cosmetic
                            surgeons in <?= $city ?>
                            for neck lift procedures.
                        </p>
                    </div>
                    <p class="identity">
                        Why Choose Our Surgeons for Neck Lift IN <?= $city ?>?
                    </p>
                    <ul>
                        <li>
                            The best cosmetic surgeons in <?= $city ?> to perform neck lift
                        </li>
                        <li>
                            Testimonials by numerous patients who are more than satisfied with the results
                        </li>
                        <li>
                            Ability to help in restoring youthful appearance even as the ageing skin sets in.
                        </li>
                        <li>
                            Renowned cosmetic surgeons for facial aesthetics in <?= $city ?>,
                            certified by several national and international
                            boards for cosmetic surgeries
                        </li>
                    </ul>

                    <p class="identity">
                        COST OF <?= $surgery_str ?> IN <?= $city ?>
                    </p>
                    <p>
                        Many cosmetic surgeons in <?= $city ?> have varying prices for neck lift
                        surgeries. This difference in cost depends on the
                        treatment facilities, the surgeon’s skills, and other
                        additional recovery treatment prices.
                        If you are considering neck lift surgery,
                        it is best to consult our cosmetic surgeon to
                        get realistic results.
                    </p>
                    <p class="identity">
                        OUR SERVICE
                    </p>
                    <p>
                        Is sagging skin on your neck disturbing your appearance? If yes,
                        you can go for a neck lift procedure by our certified surgeons
                        in <?= $city ?> to make way for transformed results!
                    </p>

                    <p class="identity">
                        FAQs on Neck Lift Surgery in <?= $city ?>
                    </p>
                    <p class="cosmetic-faq-list">
                        1. Are you a good candidate for Neck Lift?
                    </p>
                    <p>
                        To be a good candidate for Neck Lift in <?= $city ?>,
                        you should fulfil the below-mentioned
                        conditions:
                    </p>
                    <ul>
                        <li>
                            You should have a healthy body without any severe medical
                            ailment that could affect recovery
                        </li>
                        <li>
                            You should not consume nicotine or alcohol
                        </li>
                        <li>
                            You have a short neck or weak chin resulting in a double
                            chin that you want to get away with
                        </li>
                        <li>
                            Your jawline starts sagging and your chin loses volume,
                            leading to the condition of jowls.
                        </li>
                        <li>
                            Your neck is sagging a lot with the weakening of the
                            underlying neck muscles,
                            giving way to the Turkey neck
                        </li>
                        <li>
                            You have developed platysmal bands, which give your neck a
                            thick and rubber-band kind of appearance hanging
                            from the chin to Adam’s apple area.
                        </li>
                        <li>
                            Your neck has developed creases and wrinkles
                        </li>
                    </ul>
                    <p class="cosmetic-faq-list">
                        2. What is the cost of a Neck Lift?
                    </p>
                    <p>
                        The average cost of Neck Lift surgery in <?= $city ?>
                        lies between 70,000 INR to 1,00,000 INR.
                        Factors like skin and fat excision,
                        muscle plication, the need for liposuction,
                        and the surgeon’s expertise are the prominent
                        ones to decide the cost.
                    </p>
                    <p class="cosmetic-faq-list">
                        3. What are the risks related to Neck Lift surgery?
                    </p>
                    <ul>
                        <li>
                            Excessive Bleeding leading to the condition Hematoma
                        </li>
                        <li>
                            Nerve injury, skin loss, breakdown of wounds
                        </li>
                        <li>
                            Formation of seroma or abnormal accumulation of fluid
                            at the surgical incision site
                        </li>
                        <li>
                            Adverse reaction to anesthesia
                        </li>
                        <li>
                            Rare chances of scarring and bruising
                        </li>
                        <li>
                            Loss or reduction of sensation in the treated area
                        </li>
                        <li>
                            Asymmetric results
                        </li>
                        <li>
                            Need for revisional surgery
                        </li>
                        <li>
                            Stiffness of the neck
                        </li>
                    </ul>

                    <p class="cosmetic-faq-list">
                        4. When can you go for Neck Lift surgery?
                    </p>
                    <p>
                        If you have lost considerable weight, lost neck skin, have excess fat,
                        or have developed horizontal skin bands called neck bands,
                        this is the right time to opt for Neck Lift in <?= $city ?>.
                        Patients mostly between the age of 35 and 65 prefer
                        opting for a neck lift.
                        You should however be physically and mentally fit at the time
                        of surgery.
                    </p>

                    <p class="cosmetic-faq-list">
                        5. What are the things to do before the Neck Lift Surgery?
                    </p>
                    <p>
                        Before you opt for a Neck lift surgery, it would be good
                        to include the following essential
                        things in your checklist:
                    </p>
                    <ul>
                        <li>
                            Have good mental and physical health
                        </li>
                        <li>
                            Get your blood tests to ensure your good health
                        </li>
                        <li>
                            If you are pregnant, it is better to avoid the surgery
                            for the time being
                        </li>
                        <li>
                            Have someone drive you to the clinic and back home
                        </li>
                        <li>
                            Have someone to help you execute your daily cores
                            after the surgery
                        </li>
                        <li>
                            Arrange for loose clothes to make you comfortable during
                            and after the surgery
                        </li>
                        <li>
                            Make your surgeon aware of the medications you are taking
                            at present
                        </li>
                        <li>
                            Avoid taking Aspirin, health supplements, and anti-inflammatory drugs
                            to avoid extreme bleeding during surgery
                        </li>
                        <li>
                            Keep yourself hydrated
                        </li>
                        <li>
                            Avoid eating anything at least up to eight hours before the surgery
                        </li>
                    </ul>

                    <p class="cosmetic-faq-list">
                        6. What to expect on the day of Neck Lift surgery?
                    </p>
                    <ul>
                        <li>
                            On the day of the Neck Lift surgery in <?= $city ?>, you will be given general
                            anesthesia to avoid pain during the procedure
                        </li>
                        <li>
                            Your surgeon will make incisions to operate on the deep structural tissues
                            of the lower face and neck.
                        </li>
                        <li>
                            You could also expect the surgeon to remove the excess skin
                        </li>
                        <li>
                            The entire surgery will continue for 1-3 hours and will work
                            best for patients having loose skin on the neck
                        </li>
                        <li>
                            You should have realistic expectations with the surgery results
                        </li>
                        <li>
                            Usually, it will take around 2 weeks for pain, swelling, and bruising to resolve
                            and to make neck contours visible after the surgery in <?= $city ?>
                        </li>
                        <li>
                            Around 4-6 weeks will be sufficient for complete recovery after
                            which you could go back to work.
                            In rare cases, this duration
                            may extend further
                        </li>
                        <li>
                            In around 3 months, you can expect the swelling on the neck
                            to vanish completely
                        </li>
                    </ul>

                </div>
            <?php } elseif ($surgery_str == "chin surgery") { ?>
                <div class="col">
                    <div class="top-content">
                        <p>
                            Also called Genioplasty or Mentoplasty, Chin surgery is the process
                            to augment or reduce the chin based on your facial features.
                            The cosmetic surgeon can move the chin backward
                            or forward and change its size by moving
                            it up and above. Our expert cosmetic
                            surgeons in <?= $city ?> help to achieve a beautiful chin structure
                            that remains symmetrical with your face.
                        </p>
                    </div>
                    <p class="identity">
                        Why Choose Our Surgeons for Chin Surgery in <?= $city ?>?
                    </p>
                    <ul>
                        <li>
                            Our renowned cosmetic surgeons in <?= $city ?> hold adept expertise in performing
                            numerous chin augmentation and reduction surgeries with success
                        </li>
                        <li>
                            Expert at Sliding Genioplasty - correcting longer and protruding chins.
                        </li>
                        <li>
                            Specialized in working with chin implants to achieve the desired looks.
                        </li>
                        <li>
                            Skilled cosmetic surgeons from <?= $city ?> who leave barely visible scars
                            that fade quickly over time.
                        </li>
                        <li>
                            Members of several national and international cosmetic surgery boards
                        </li>
                    </ul>
                    <p class="identity">
                        COST OF <?= $surgery_str ?> IN <?= $city ?>
                    </p>
                    <p>
                        For the cost of chin surgeries, the type of recommended treatment will be
                        the deciding factor. If you want to increase the size of the chin, the
                        cosmetic surgeon will usually recommend using chin implants.
                        If you want to reduce the chin size, Genioplasty is the best choice.
                        So, the overall cost of chin surgery depends on the customized
                        surgery, the cosmetic surgeon in <?= $city ?>,
                        and the additional medicines.
                    </p>
                    <p class="identity">OUR SERVICES</p>
                    <p>
                        Are you worried that your chin does not complement the rest of your face?
                        If yes, get the help of any of our cosmetic surgeons in <?= $city ?>
                        to fix the issue and change the appearance of your face.
                    </p>
                    <p class="identity">
                        FAQs on Chin Surgery in <?= $city ?>
                    </p>
                    <p class="cosmetic-faq-list">
                        1. Are you a good candidate for Chin Surgery?
                    </p>
                    <p>
                        An ideal candidate for Chin Surgery should fulfil
                        the below-mentioned requirements:
                    </p>
                    <ul>
                        <li>
                            Unappealing looks on the chin
                        </li>
                        <li>
                            Too short chin or with a low projection
                        </li>
                        <li>
                            Insecurity about weak jawline
                        </li>
                        <li>
                            Physically healthy and maintains a stable weight
                        </li>
                        <li>
                            Realistic expectations with the chin surgery in <?= $city ?>
                        </li>
                        <li>
                            Non-smoker and non-alcoholic
                        </li>
                    </ul>
                    <p class="cosmetic-faq-list">
                        2. What is the cost of Chin Surgery?
                    </p>
                    <p>
                        The cost of a chin surgery in <?= $city ?> depends upon several factors
                        like the procedure performed, the fees of the surgeon,
                        the hospital, and more.
                        The average cost ranges between 70,000 INR - 150,000 INR.
                    </p>
                    <p class="cosmetic-faq-list">
                        3. What are the risks related to Chin Surgery?
                    </p>
                    <ul>
                        <li>
                            Allergic behaviour to anesthesia
                        </li>
                        <li>
                            Swelling in the chin region
                        </li>
                        <li>
                            Asymmetrical appearance of the chin
                        </li>
                        <li>
                            Bruising on the sides of the chin that can appear from minimal
                            to “black and blue”
                        </li>
                        <li>
                            Numbness in the lower lip and chin
                        </li>
                        <li>
                            Unappealing facial proportions after the surgery
                        </li>
                        <li>
                            Displacement of chin implant
                        </li>
                        <li>
                            Need to change the silicon chin implant of a different size
                        </li>
                        <li>
                            Scar tissues surrounding the chin implant
                        </li>
                        <li>
                            Skin discoloration
                        </li>
                    </ul>
                    <p class="cosmetic-faq-list">
                        4. When can you go for Chin Surgery?
                    </p>
                    <p>
                        Chin surgery is an optional procedure that you undergo if you think your chin is too long,
                        broad, or projects too far from your nose.
                        The surgery in <?= $city ?> can enhance the balance of your chin with other facial features.
                        Chin surgery is popular among men and women of almost all age groups worldwide.
                        There is however no specific age limitation for the procedure.
                        Even 15 or 16-year-old young boys and girls could opt for it
                        if they have a fully developed chin.
                    </p>
                    <p class="cosmetic-faq-list">
                        5. What are the things to do before the Chin Surgery?
                    </p>
                    <ul>
                        <li>
                            Visit your cosmetic surgeon to discuss all your apprehensions and doubts
                            about the chin surgery
                        </li>
                        <li>
                            Get all the lab tests and medical evaluations to enable the surgeon to find out
                            of your existing condition is good enough for the surgery
                        </li>
                        <li>
                            Abide by the do’s and don’ts instructed by the surgeon
                        </li>
                        <li>
                            Quit smoking and alcohol to combat the entry of toxins and carcinogens
                            into the bloodstream
                        </li>
                        <li>
                            Inform your surgeon about any of your existing medications, as he will suggest
                            making proper adjustments accordingly
                        </li>
                        <li>
                            Get some easy to wear garments in advance
                        </li>
                        <li>
                            Ask someone to accompany you to the clinic and get you back home after
                            the surgery
                        </li>
                    </ul>
                    <p class="cosmetic-faq-list">
                        6. What to expect on the day of Chin surgery?
                    </p>
                    <ul>
                        <li>
                            Be ready for the surgery day with the positive attitude
                        </li>
                        <li>
                            Usually, the surgeons in <?= $city ?> perform chin surgery as an
                            outpatient treatment
                        </li>
                        <li>
                            One of the staff members will administer general or IV anesthesia
                            to make the chin area numb
                        </li>
                        <li>
                            The surgeon will make incisions with the latest technique inside your mouth
                            or under your chin
                        </li>
                        <li>
                            The incisions will be closed with the help of tapes, sutures, or skin
                            adhesives
                        </li>
                        <li>
                            The surgeon will apply facial drains to build fluid in your neck and
                            to minimize blood.
                        </li>
                        <li>
                            The doctor will remove these facial drains after a couple of days
                        </li>
                        <li>
                            It will take around an hour for the procedure to complete
                        </li>
                        <li>
                            You can go home just after around two hours from the surgery completion
                        </li>
                        <li>
                            You could expect swelling and slight discomfort
                        </li>
                        <li>
                            The chin and neck skin may appear tight because of bruising and
                            swelling
                        </li>
                        <li>
                            The surgery can help to inflict some positive changes on your face
                        </li>
                        <li>
                            Still, you should have realistic expectations with the procedure
                        </li>
                    </ul>

                </div>
            <?php } elseif ($surgery_str == "cheek augmentation") { ?>
                <div class="col">
                    <div class="top-content">
                        <p>
                            <strong>
                                Who would not want contoured, smooth cheeks?
                            </strong>
                        </p>
                        <p>
                            Cheek augmentation surgery helps those with flat or hollow cheeks.
                            It enables you to get bigger and plump looking cheeks.
                            This surgery is also suitable for people wishing
                            to restore their appearance after
                            any accident or untoward incident.
                        </p>
                        <p>
                            Choose the most respected cosmetic surgeon in <?= $city ?> to enhance your cheeks naturally
                            and improve your overall appearance.
                        </p>
                    </div>
                    <p class="identity">
                        WHY CHOOSE <?= $surgery_str ?> IN <?= $city ?>? </p>
                    <ul>
                        <li>
                            One of the most experienced facial cosmetic surgeons in <?= $city ?>.
                        </li>
                        <li>
                            Expertise in various forms of cheek augmentation procedures like
                            fat transfer and cheek implants.
                        </li>
                        <li>
                            Skilled at helping the patients decide the best size and type of cheek
                            implants that compliments their facial features.
                        </li>
                        <li>
                            One of the top board-certified cosmetic surgeons in <?= $city ?> and the member
                            of numerous cosmetic surgery associations in India.
                        </li>
                    </ul>
                    <p class="identity">
                        COST OF <?= $surgery_str ?> IN <?= $city ?>
                    </p>
                    <p>
                        When it comes to the cost of cheek augmentation, several variables determine
                        the final amount. For instance, the type of cheek augmentation procedure,
                        the recovery medications and the cost of the cosmetic surgeon
                        play a major role.
                    </p>
                    <p>
                        Our cosmetic surgeon is one of the best in <?= $city ?> for cheek augmentation.
                        Schedule a consultation session and get the advice on the next
                        action plan to increase the size and shape of your cheeks.
                    </p>

                    <p class="identity">OUR SERVICES</p>
                    <p>
                        Attaining those dreamy, bouncy cheeks is possible now! Go for cheek augmentation
                        surgery by our expert cosmetic surgeon in <?= $city ?> and observe
                        the difference it makes to your life!
                    </p>
                </div>
            <?php } elseif ($surgery_str == "lip augmentation") {  ?>
                <div class="col">
                    <div class="top-content">
                        <p>
                            <strong>
                                Do you want to have pouty lips like Angeline Jolie? You can now fulfill your
                                wish with Lip augmentation.
                            </strong>
                        </p>
                        <p>
                            The procedure of lip augmentation involves increasing the size of your lips,
                            reshaping the contours, and making the lips naturally fuller.
                            If you are unhappy with the appearance of your lips or
                            they have become deformed due to an accident,
                            lip augmentation surgery is the best choice.
                            Our cosmetic surgeons in <?= $city ?> have helped many to get dreamy
                            lips that look in perfect symmetry with the face.
                            You could also visit any of our experienced cosmetic surgeons,
                            and choose to enhance your lips.
                        </p>
                    </div>
                    <p class="identity">
                        Why Choose Our Cosmetic Surgeons for Lip Augmentation in <?= $city ?>?
                    </p>
                    <ul>
                        <li>
                            Extremely skilled surgeons in <?= $city ?> for lip augmentation treatment
                        </li>
                        <li>
                            Expertise in different types of lip augmentation procedures including
                            dermal fillers and lip implants
                        </li>
                        <li>
                            Highly talented at customizing the symmetry of upper and lower lips
                        </li>
                        <li>
                            Dexterous at improving the overall shape and size as per the
                            facial features
                        </li>
                        <li>
                            Renowned cosmetic surgeons certified by several national boards of
                            plastic and cosmetic surgeries.
                        </li>
                    </ul>
                    <p class="identity">
                        COST OF <?= $surgery_str ?> IN <?= $city ?>
                    </p>
                    <p>
                        The lip augmentation treatment cost varies depending on whether you opt for
                        dermal fillers or lip implants. Usually,
                        lip implants are permanent and cost more than dermal
                        fillers. You can visit our cosmetic surgeon
                        in <?= $city ?> to get the cost details
                        and treatment plans.
                    </p>
                    <p class="identity">OUR SERVICES</p>
                    <p>
                        Let your lips capture everyone’s attention! Make them look naturally fuller,
                        beautiful, and well contoured with Lip Augmentation! Visit our reputed
                        cosmetic surgeons in <?= $city ?> to get your desired results now.
                        Choose the best treatment from dermal fillers, fat fillers,
                        and lip implants.
                    </p>

                    <p class="identity">
                        FAQs on Lip Augmentation Surgery in <?= $city ?>
                    </p>
                    <p class="cosmetic-faq-list">
                        1. Are you a good candidate for Lip Augmentation Surgery?
                    </p>
                    <p>
                        Anyone satisfying several important criteria as given below can
                        be a good candidate for Lip Augmentation in <?= $city ?>:
                    </p>
                    <ul>
                        <li>
                            Thin lips
                        </li>
                        <li>
                            Lips without proper volume, shape, or volume
                        </li>
                        <li>
                            Asymmetrical or uneven lips
                        </li>
                        <li>
                            Sufficient lip tissue to hide the implant
                        </li>
                        <li>
                            Good overall health
                        </li>
                        <li>
                            Free from medical illness or any severe health condition
                        </li>
                        <li>
                            Ample fat in the donor site
                        </li>
                        <li>
                            Realistic expectations with the surgery
                        </li>
                    </ul>
                    <p class="cosmetic-faq-list">
                        2. What is the cost of Lip Augmentation Surgery?
                    </p>
                    <p>
                        On average, any lip augmentation procedure in <?= $city ?> will cost
                        around 40,000 INR - 1,00,000 INR, but it can vary depending
                        on the cosmetic surgeon and the treatment
                        along with other factors.
                    </p>
                    <p class="cosmetic-faq-list">
                        3. What are the risks related to Lip Augmentation Surgery?
                    </p>
                    <p>
                        Here is a quick look at the possible risks and complications of undergoing
                        a Lip Augmentation surgery in a clinic in <?= $city ?>.
                    </p>
                    <ul>
                        <li>
                            Allergic behaviour to anesthesia or other medicines given during
                            the surgery Redness, itching, or tenderness at
                            the incision site
                        </li>
                        <li>
                            Infection or bleeding in the treated area
                        </li>
                        <li>
                            Prolonged bruising or swelling
                        </li>
                        <li>
                            Fever blisters or cold sores around the lips
                        </li>
                        <li>
                            Lip asymmetry
                        </li>
                        <li>
                            Irregularities and lumps in the treated site
                        </li>
                        <li>
                            Possibility of scarring, ulceration, or lip stiffening
                        </li>
                        <li>
                            Loss of tissue due to injection into the blood vessel
                        </li>
                    </ul>
                    <p class="cosmetic-faq-list">
                        4. When can you go for Lip Augmentation Surgery?
                    </p>
                    <p>
                        When you notice thin lips or a decrease in the volume of your lips
                        due to growing age, this is the right time to opt for
                        Lip Augmentation surgery. Ideally, any adult of
                        18 years or more with a healthy body
                        can undergo this surgery.
                    </p>
                    <p class="cosmetic-faq-list">
                        5. What are the things to do before the Lip Augmentation Surgery?
                    </p>
                    <ul>
                        <li>
                            Visit a lab to undergo the tests recommended by your surgeon
                        </li>
                        <li>
                            Avoid consuming blood-thinning medicines, as they can cause
                            significant bruising after the injection.
                        </li>
                        <li>
                            Avoid tobacco, alcohol, and caffeine around 24 hours before
                            and after the surgery in <?= $city ?>
                        </li>
                        <li>
                            Keep your face completely clean and free of makeup
                        </li>
                        <li>
                            Make sure to hydrate your body with water before going for the lip injection
                            to ensure a safe recovery
                        </li>
                        <li>
                            Have someone accompany you to the clinic and take you back home
                        </li>
                        <li>
                            Arrange for your clothing at home after the surgery in advance
                            to avoid later hassles
                        </li>
                    </ul>
                    <p class="cosmetic-faq-list">
                        6. What to expect on the day of Lip Augmentation surgery?
                    </p>
                    <ul>
                        <li>
                            You could expect the surgeon to use various surgical and non-surgical methods
                            for lip augmentation.
                        </li>
                        <li>
                            Injecting fillers with hyaluronic acid into your lips is a common method.
                        </li>
                        <li>
                            Several doctors also perform a lip lift or a lip implant to augment
                            your lips permanently. So you could expect any of these
                            treatments depending on the condition of your lips
                        </li>
                        <li>
                            Lip augmentation surgery from a <?= $city ?> clinic will last for around 30 minutes.
                            During this surgery, the surgeon will administer anesthesia
                            to numb your lips.
                        </li>
                        <li>
                            For lip implants, you could expect him to create a small incision in both
                            corners of your mouth before inserting a clamp via one
                            side and threading it to the other incised corner.
                            After pulling the implants through the tunnels,
                            he will stitch the incisions
                            to close them permanently
                        </li>
                        <li>
                            It is good to have realistic expectations with the surgery.
                        </li>
                        <li>
                            You could expect pain in the injection site and corners of your lips
                        </li>
                        <li>
                            The possible swelling could vanish in around 24 to 48 hours.
                            On rare occasions, it may take around a week.
                        </li>
                        <li>
                            Complete healing may take around two weeks. So if you want augmented
                            lips to flaunt at a wedding or any other special occasion,
                            schedule the surgery two weeks in advance.
                        </li>
                    </ul>
                </div>
            <?php } elseif ($surgery_str == "buccal fat removal") { ?>
                <div class="col">
                    <div class="top-content">
                        <p>
                            If you want to change the appearance of your chubby cheeks, Buccal Fat Removal
                            is the way to go. This surgery can reduce the size of your cheeks,
                            transforming them into thinner and better-contoured features.
                            Buccal Fat Removal is an extensive surgery that requires
                            attention to detail and specialized techniques.
                            It is only possible by an expert cosmetic surgeon in <?= $city ?> who knows
                            the best treatment plan to deliver your expected results.
                            You can hence trust our surgeons to perform
                            this procedure with excellence.
                        </p>
                    </div>
                    <p class="identity">
                        Why Choose Our Surgeons for Buccal Fat Removal in <?= $city ?>?
                    </p>
                    <ul>
                        <li>
                            Extremely talented cosmetic surgeons in <?= $city ?> to perform
                            Buccal Fat Removal with positive results
                        </li>
                        <li>
                            Great attention to detail to ensure symmetry in both cheeks while
                            reducing their size
                        </li>
                        <li>
                            Expert in performing Buccal Fat Removal with the ability to
                            achieve no visible scarring from the incisions
                        </li>
                        <li>
                            Members of several national and international cosmetic
                            surgery boards
                        </li>
                        <li>
                            Most acclaimed cosmetic surgeon for facial procedures.
                        </li>
                    </ul>
                    <p class="identity">
                        COST OF <?= $surgery_str ?> IN <?= $city ?>
                    </p>
                    <p>
                        You can get a better estimate of the cost if you visit the cosmetic surgeon
                        at the clinic in <?= $city ?>. After examining your condition,
                        the surgeon will decide the course of treatment
                        as well as the surgery costs.
                    </p>
                    <p class="identity">
                        OUR SERVICES
                    </p>
                    <p>
                        You do not need to bother anymore if you have fat cheeks! Now, you can reduce
                        your cheeks and have a thin facial contour with Buccal Fat Removal
                        performed by any of our best cosmetic surgeons in <?= $city ?>.
                    </p>

                    <p class="identity">
                        FAQs on Buccal Fat Removal Surgery in <?= $city ?>
                    </p>
                    <p class="cosmetic-faq-list">
                        1. Are you a good candidate for Buccal Fat Removal?
                    </p>
                    <p>
                        An ideal candidate for Buccal Fat Removal surgery
                        in <?= $city ?> should satisfy
                        the following conditions:
                    </p>
                    <ul>
                        <li>
                            Your cheek area has excess fat
                        </li>
                        <li>
                            Your Buccal Fat pads are larger than usual
                        </li>
                        <li>
                            You have a round-shaped and fuller face
                        </li>
                        <li>
                            You want to have a slimmer and more defined facial appearance
                        </li>
                        <li>
                            You are healthy and have a stable weight
                        </li>
                        <li>
                            You are more than 50 years of age
                        </li>
                        <li>
                            You are a non-alcoholic and a non-smoker
                        </li>
                        <li>
                            The doctor has diagnosed you with the rare Parry-Romberg syndrome,
                            or the condition of progressive hemifacial atrophy.
                            It tends one portion of the facial
                            skin to shrink
                        </li>
                    </ul>
                    <p class="cosmetic-faq-list">
                        2. What is the cost of Buccal Fat Removal?
                    </p>
                    <p>
                        The starting cost for Buccal Fat Removal in <?= $city ?> is around 65,000 INR,
                        which can increase depending on the location, cosmetic surgeon,
                        and the additional recovery costs. Among the other factors
                        responsible for deciding the cost may include the
                        anesthesia used, the experience of the cosmetic
                        surgeon, and prescription medication
                        for aftercare.
                    </p>
                    <p class="cosmetic-faq-list">
                        3. What are the risks related to Buccal Fat Removal?
                    </p>
                    <p>
                        Wishing to undergo Buccal Fat Removal in <?= $city ?>? Here are some
                        of the associated risks:
                    </p>
                    <ul>
                        <li>
                            Possibility of infection at the site of incision
                        </li>
                        <li>
                            Injury to the salivary duct or facial ducts
                        </li>
                        <li>
                            Reduced sensation in the treated area
                        </li>
                        <li>
                            Asymmetry in the cheeks on both the sides
                        </li>
                        <li>
                            Adverse reaction of anesthesia
                        </li>
                        <li>
                            Hematoma or clotted blood formed in the treated site
                        </li>
                        <li>
                            Bleeding in the selected area
                        </li>
                        <li>
                            Pulmonary and cardiac complications
                        </li>
                        <li>
                            Continuous pain
                        </li>
                        <li>
                            Chances of revision surgery
                        </li>
                    </ul>
                    <p class="cosmetic-faq-list">
                        4. When can you go for Buccal Fat Removal?
                    </p>
                    <p>
                        The growth of fat pads continues till one enters the twenties. Hence, surgeons
                        recommend patients of 20 years age or above to undergo Buccal Fat Removal
                        surgery in <?= $city ?>. Most people choose this surgery because they feel
                        their fat pads are making them appear childlike.
                    </p>
                    <p class="cosmetic-faq-list">
                        5. What are the things to do before the Buccal Fat Removal Surgery?
                    </p>
                    <p>
                        Visit your surgeon for a candid consultation about the surgery
                    </p>
                    <ul>
                        <li>
                            Have realistic expectations with the surgery
                        </li>
                        <li>
                            Discuss your goals with the surgeon
                        </li>
                        <li>
                            Share your medical history and the existing medications with the
                            doctor so that he could adjust them accordingly
                        </li>
                        <li>
                            Undergo your medical evaluation and the lab tests suggested by the
                            surgeon
                        </li>
                        <li>
                            Avoid taking anti-inflammatory drugs, supplements, aspirin, naturopathic
                            medicines, etc., before the surgery to keep a check on bleeding at the
                            time of surgery
                        </li>
                        <li>
                            Stop drinking and consuming alcohol at least two weeks prior
                            to the surgery
                        </li>
                    </ul>
                    <p class="cosmetic-faq-list">
                        6. What to expect on the day of Buccal Fat Removal surgery?
                    </p>
                    <ul>
                        <li>
                            On the surgery day, be prepared with a positive frame of mind
                        </li>
                        <li>
                            The surgeon or a staff member would administer anesthesia
                            to make the concerned location numb
                        </li>
                        <li>
                            You could expect the surgeon to create minor incisions inside both cheeks
                            and leave them open to drain. These incisions will close by themselves
                            within 2-3 days
                        </li>
                        <li>
                            Compared to other surgical procedures in <?= $city ?>, Buccal Fat Removal will
                            take less time. You could expect it to complete within 30 minutes.
                        </li>
                        <li>
                            The final outcome may get hampered by swelling on your face after the procedure
                        </li>
                        <li>
                            In the end, you will observe a less chubby appearance of your cheeks
                        </li>
                        <li>
                            If the intended results remain unachieved with the first surgery in <?= $city ?>,
                            the surgeon might recommend another procedure
                        </li>
                    </ul>

                </div>
            <?php } elseif ($surgery_str == "ear surgery") { ?>
                <div class="col">
                    <div class="top-content">
                        <p>
                            Ear surgery or Otoplasty is a cosmetic procedure to reshape the ear.
                            This surgery addresses structural defects like an abnormally large ear,
                            disoriented ears due to accidents, ears that are unsymmetrical with
                            each other or with facial features, or protruding ears.
                            You need a highly skilled cosmetic surgeon from <?= $city ?> to
                            treat the defects and reshape the ear to look as natural as possible.
                            This is where you can trust our surgeons.
                        </p>
                    </div>
                    <p class="identity">
                        Why Choose Our Cosmetic Surgeons for Ear Surgery in <?= $city ?>?
                    </p>
                    <ul>
                        <li>
                            Most accomplished cosmetic surgeons in <?= $city ?> for Otoplasty.
                        </li>
                        <li>
                            Ability to analyze and surgically correct the defect with as
                            minimal possible incisions.
                        </li>
                        <li>
                            Experts in reconstructive cosmetic surgery in <?= $city ?>
                        </li>
                        <li>
                            Members of numerous prestigious national and international boards
                            of cosmetic surgeons and reconstructive surgeries
                        </li>
                    </ul>

                    <p class="identity">
                        COST OF <?= $surgery_str ?> IN <?= $city ?>
                    </p>
                    <p>
                        Therefore, the cost of ear surgery varies widely based on the cosmetic surgeon
                        and the intensiveness of the surgery. You can schedule a consultation with
                        the cosmetic surgeon in <?= $city ?> to know about the course of treatment
                        and a fair estimate for the same.
                    </p>
                    <p class="identity">OUR SERVICES</p>
                    <p>
                        Otoplasty is a detailed surgical procedure where customization holds high importance.
                        You need an experienced cosmetic surgeon who is capable of tailoring
                        the surgery to make the ears look natural.
                        The expert should also be able to achieve symmetry with both ears and ensure
                        compatibility with the face. Hence, if you are having trouble with
                        the unnatural appearance of your ears, our experienced cosmetic
                        surgeons in <?= $city ?> can help you out.
                        They can reconstruct your ear shape and position,
                        thus making your ears look
                        as natural as possible.
                    </p>
                    <p class="identity">
                        FAQs on Ear Surgery in <?= $city ?>
                    </p>
                    <p class="cosmetic-faq-list">
                        1. Are you a good candidate for Ear Surgery?
                    </p>
                    <p>
                        To be a good candidate for Otoplasty in <?= $city ?>, you should satisfy
                        the below points:
                    </p>
                    <ul>
                        <li>
                            You are facing hearing loss problems
                        </li>
                        <li>
                            You are suffering from any of the various congenital defects like cagot ear,
                            scroll ear, Stahl’s ear deformity, Wildermuth’s ear,
                            cleft earlobe, etc.
                        </li>
                        <li>
                            You need to correct a failed Otoplasty done earlier
                        </li>
                        <li>
                            Your ears stick out too much
                        </li>
                        <li>
                            Your ears are asymmetrical
                        </li>
                        <li>
                            You have a healthy body, free from any chronic or
                            life-threatening medical condition
                            that can obstruct healing
                        </li>
                        <li>
                            You are not expecting or breastfeeding
                        </li>
                        <li>
                            You are a non-smoker and a non-alcoholic
                        </li>
                        <li>
                            You want to have an improved appearance that has been distorted by
                            your uneven ears
                        </li>
                    </ul>
                    <p class="cosmetic-faq-list">
                        2. What is the cost of Ear Surgery?
                    </p>
                    <p>
                        The average cost of ear surgery in <?= $city ?> may range from 40,000 INR to 60,000 INR.
                        Much will depend on the hospital, the choice of Surgeon,
                        the type of anesthesia used, and so on. Consulting
                        our cosmetic surgeon will help you to know
                        the exact cost of the surgery.
                    </p>
                    <p class="cosmetic-faq-list">
                        3. What are the risks related to Ear Surgery?
                    </p>
                    <p>
                        Some common risks of undergoing Otoplasty include:
                    </p>
                    <ul>
                        <li>
                            Pain, bleeding, or infection
                        </li>
                        <li>
                            Adverse reaction to anesthesia
                        </li>
                        <li>
                            Asymmetry in the positioning of the ear
                        </li>
                        <li>
                            Permanent scarring
                        </li>
                        <li>
                            Allergic reaction to surgical materials
                        </li>
                        <li>
                            Reduction in skin sensation
                        </li>
                        <li>
                            Unnatural contours that will make the ear appear pinned back
                        </li>
                        <li>
                            Blocked or stuffy ear
                        </li>
                        <li>
                            Draining of bloody fluid from the incision or the ear canal
                        </li>
                    </ul>
                    <p class="cosmetic-faq-list">
                        4. When can you go for Ear Surgery?
                    </p>
                    <p>
                        Once your ears attain their full size, you can undergo ear surgery.
                        Usually, the ears grow completely after the age of 5. However,
                        doctors recommend waiting till the age of 7 years to go for
                        the surgery in <?= $city ?>. From 7 to adulthood, any age
                        is fine to undergo the procedure.
                    </p>
                    <p class="cosmetic-faq-list">
                        5. What are the things to do before the Ear Surgery?
                    </p>
                    <p>
                        Before you proceed with Otoplasty in a clinic in <?= $city ?>,
                        here are some important steps to consider:
                    </p>
                    <ul>
                        <li>
                            go for lab tests or medical examination as instructed by your
                            surgeon
                        </li>
                        <li>
                            Inform your surgeon about your current medications
                        </li>
                        <li>
                            Stop tobacco and alcohol consumption around 2 weeks in advance
                        </li>
                        <li>
                            Have someone bring you back home after the surgery
                        </li>
                        <li>
                            Have a positive outlook toward the ear surgery
                        </li>
                        <li>
                            Avoid the intake of any herbal supplement, anti-inflammatory medicine,
                            or any other drugs that could increase bleeding
                        </li>
                        <li>
                            Be sure to discuss any concerns you have about the surgery with
                            your ear surgeon
                        </li>
                    </ul>
                    <p class="cosmetic-faq-list">
                        6. What to expect on the day of Ear surgery?
                    </p>
                    <ul>
                        <li>
                            On the day of Otoplasty surgery in <?= $city ?>,
                            come to the hospital with a calm
                            and prepared mind
                        </li>
                        <li>
                            One of the staff members will administer anesthesia to the selected area
                        </li>
                        <li>
                            The entire procedure may take around 2-3 hours to complete
                        </li>
                        <li>
                            The treatment will involve removing, replacing, or repairing any of the three
                            little middle ear bones (termed Ossiculoplasty)
                        </li>
                        <li>
                            After the treatment, you may have a dizzy feeling for a few days.
                        </li>
                        <li>
                            You may also expect ear pain for around a week after the surgery
                        </li>
                        <li>
                            Have realistic expectations with the surgery as it will help in
                            quick healing
                        </li>
                    </ul>
                </div>
            <?php } elseif ($surgery_str == "breast augmentation") { ?>
                <div class="col">
                    <div class="top-content">
                        <p>
                            Do you feel your breasts are smaller than usual? If yes, you can go for
                            breast augmentation surgery. Our qualified cosmetic surgeons
                            from <?= $city ?> will help you to realize your required breast size.
                            You can achieve fuller, bigger, and rounder breasts through
                            breast augmentation.
                        </p>
                    </div>
                    <p class="identity">
                        Why Choose Our Surgeons for Breast Augmentation in <?= $city ?>?
                    </p>
                    <ul>
                        <li>
                            Most qualified and trusted cosmetic surgeons in <?= $city ?> to perform
                            breast augmentation surgery.
                        </li>
                        <li>
                            Highly experienced in performing breast augmentation procedures
                            through fat transfer or breast implant technique.
                        </li>
                        <li>
                            Can work with both saline-filled breast implants and silicone
                            gel-filled implants.
                        </li>
                        <li>
                            Skilled at choosing the right size of the implant and positioning
                            it at the perfect location that gives the impression
                            of naturally fuller breasts.
                        </li>
                        <li>
                            Possess the ability to perform touch-ups to maintain the size and
                            look of the breasts.
                        </li>
                        <li>
                            Certified by several prestigious national and international associations
                            for cosmetic surgeons.
                        </li>
                    </ul>
                    <p class="identity">
                        COST OF <?= $surgery_str ?> SURGERY IN <?= $city ?>
                    </p>
                    <p>
                        When it comes to breast augmentation, the type of material you prefer to
                        use - fat or implant - will influence the cost of the surgery.
                        It would be wise to visit the cosmetic surgeon in <?= $city ?>
                        for a good estimate.
                    </p>
                    <p class="identity">OUR SERVICES</p>
                    <p>
                        You can choose from among different options for augmentation like fat transfers,
                        silicone implants or saline implants. Let one of our best cosmetic surgeons
                        in <?= $city ?> increase your breast size and still make it look natural.
                    </p>
                    <p class="identity">
                        FAQs on Breast Augmentation Surgery in <?= $city ?>
                    </p>
                    <p class="cosmetic-faq-list">
                        1. Are you a good candidate for Breast Augmentation?
                    </p>
                    <p>
                        To be a good candidate for Breast Augmentation,
                        you should satisfy the
                        below-mentioned pointers:
                    </p>
                    <ul>
                        <li>
                            You are not an expecting mother or breastfeeding your child
                        </li>
                        <li>
                            You want to get rid of your sagging, asymmetrical, or flattened breasts
                        </li>
                        <li>
                            Your breasts lag in maintaining an adequate cleavage
                        </li>
                        <li>
                            You do not drink or smoke
                        </li>
                        <li>
                            You have realistic goals related to the surgery in <?= $city ?>
                        </li>
                        <li>
                            You must be free from any severe health disorder
                        </li>
                        <li>
                            Should disclose all the medications to the surgeon
                        </li>
                        <li>
                            You are well aware of the probable risks of undergoing
                            breast augmentation in <?= $city ?> or elsewhere
                        </li>
                    </ul>
                    <p class="cosmetic-faq-list">
                        2. What is the cost of Breast Augmentation?
                    </p>
                    <p>
                        Usually, the cost of a Breast Augmentation procedure in <?= $city ?> is around
                        1,00,000 INR and the cost of the implants may go up to 1,50,000 INR,
                        or even more. Apart from these costs, the medication,
                        consultations, mammograms, and check-ups will also factor into the total
                        cost. Make sure to consult your surgeon for the exact
                        cost of the surgery.
                    </p>
                    <p class="cosmetic-faq-list">
                        3. What are the risks related to Breast Augmentation?
                    </p>
                    <ul>
                        <li>
                            Administering anesthesia could harm the body
                        </li>
                        <li>
                            Changed sensations in the breast or nipple
                        </li>
                        <li>
                            Change in the position of implants
                        </li>
                        <li>
                            Chances of rupture or leakage in the implants
                        </li>
                        <li>
                            Accumulation of fluid
                        </li>
                        <li>
                            Tight scar tissues may form close to the implant
                        </li>
                        <li>
                            Bad scars, infection, continuous breast pain
                        </li>
                    </ul>
                    <p class="cosmetic-faq-list">
                        4. When can you go for Breast Augmentation?
                    </p>
                    <p>
                        Surgeons usually advise women to wait at least till they become 18 years old,
                        as by that time, their breasts are more likely to develop completely.
                        Ideally, the age for breast augmentation surgery in <?= $city ?> or
                        for that reason, anywhere else, should be between 20s and 30s.
                        Women in this age group are likely to be most healthy, well
                        aware of their bodies, and grown enough to prepare
                        themselves mentally for the implants
                    </p>
                    <p class="cosmetic-faq-list">
                        5. What are the things to do before Breast Augmentation Surgery?
                    </p>
                    <ul>
                        <li>
                            You should bear a cool and calm mind, duly prepared for the surgery in <?= $city ?>.
                        </li>
                        <li>
                            Keep your body properly hydrated with water
                        </li>
                        <li>
                            Eat a healthy diet
                        </li>
                        <li>
                            Avoid eating or drinking anything after midnight to tolerate the
                            effect of anesthesia
                        </li>
                        <li>
                            Use an antimicrobial soap to wash your body before the surgery
                        </li>
                        <li>
                            Do not wear any jewellery or piercing when going for the surgery
                        </li>
                        <li>
                            Remove polish from your nails to enable the staff to measure
                            oxygen saturation in your blood without hassles
                        </li>
                        <li>
                            Remove dentures, contact lenses, etc. to reduce risks
                        </li>
                        <li>
                            Make sure to have someone to take you back home after your Breast Augmentation
                            Surgery in <?= $city ?>
                        </li>
                    </ul>
                    <p class="cosmetic-faq-list">
                        6. What to expect on the day of Breast Augmentation surgery?
                    </p>
                    <ul>
                        <li>
                            You should bear a cool and calm mind, duly prepared for the
                            surgery in <?= $city ?>.
                        </li>
                        <li>
                            Reach the hospital on time
                        </li>
                        <li>
                            The anesthetist will ask you questions about your behavior to
                            anesthesia so that he could provide
                            the right treatment accordingly
                        </li>
                        <li>
                            In the operation theater, depending on your response to the anesthetist,
                            the latter will give an IV to deliver the medicine anesthetic
                        </li>
                        <li>
                            Depending on the procedure and the specific condition of the patient,
                            the Breast augmentation surgery may take around one to two hours
                            or maybe more to complete.
                        </li>
                        <li>
                            You may feel like stretching or pulling in the breast area after the surgery
                        </li>
                        <li>
                            You will feel tired easily and be less energetic in the starting days
                        </li>
                        <li>
                            Pain may persist for around a week or two after the surgery in <?= $city ?>
                        </li>
                        <li>
                            As the days pass, you will experience a positive feeling about your breasts
                        </li>
                    </ul>
                </div>
            <?php } elseif ($surgery_str == "breast lift") { ?>
                <div class="col">
                    <div class="top-content">
                        <p>
                            If you are feeling insecure about your continuously sagging breasts,
                            a simple breast lift will be good enough to improve your complete
                            physical look. Mastopexy, also known as breast lift,
                            is a cosmetic surgery where the surgeon raises
                            the location of nipples and removes sagging
                            tissues to create an impression of tightened and fuller breasts.
                            Our cosmetic surgeons in <?= $city ?> can deliver amazing
                            results with breast lift surgery.
                        </p>
                    </div>
                    <p class="identity">
                        Why Choose Our Cosmetic Surgeons for Breast Lift in <?= $city ?>?
                    </p>
                    <ul>
                        <li>
                            Proven expertise to help patients fix the issue of sagging breasts
                        </li>
                        <li>
                            Top cosmetic surgeon in <?= $city ?> with in-depth practical
                            knowledge of breast-related surgeries
                        </li>
                        <li>
                            Ability to customize the breast lift surgery based on just what the
                            patient wants.
                        </li>
                        <li>
                            Reputed cosmetic surgeons in <?= $city ?> with memberships from several
                            national and international boards of cosmetic surgeries
                        </li>
                    </ul>
                    <p class="identity">
                        COST OF <?= $surgery_str ?> SURGERY IN <?= $city ?></p>
                    <p>
                        While the main reason for the Mastopexy is to ‘lift’ the breasts,
                        many also opt for reshaped or rounder breasts. So, if you are
                        looking for such accompanying results, the total cost of
                        the breast lift surgery will differ accordingly.
                        Our experienced cosmetic surgeons can advise
                        you better on a safer course of treatment.
                    </p>
                    <p class="identity">OUR SERVICES</p>
                    <p>
                        Due to aging, pregnancy, or weight gain, breasts tend to sag which spoils
                        the overall appearance even when you wear the best clothes.
                        A Breast Lift surgery will help you by lifting and
                        reshaping your breasts. Our cosmetic surgeons
                        in <?= $city ?> can help you know more about
                        Breast Lift surgery.
                    </p>
                    <p class="identity">
                        FAQs on Breast Lift Surgery in <?= $city ?>
                    </p>
                    <p class="cosmetic-faq-list">
                        1. Are you a good candidate for Breast Lift surgery?
                    </p>
                    <p>
                        You can be a potential candidate for Breast Lift surgery in <?= $city ?> if:
                    </p>
                    <ul>
                        <li>
                            Your breasts are sagging significantly due to pregnancy, breastfeeding,
                            aging, or a change in weight
                        </li>
                        <li>
                            You have good overall health and maintain a stable weight
                        </li>
                        <li>
                            Your areolas and nipples are pointing downwards
                        </li>
                        <li>
                            Your breasts have become flat, pendulous, and elongated in shape
                        </li>
                        <li>
                            You have enlarged areolas and stretched skin
                        </li>
                        <li>
                            You don’t smoke or drink since both these habits can affect
                            the healing results adversely
                        </li>
                        <li>
                            You want to restore lost breast volume
                        </li>
                        <li>
                            You have realistic expectations about the surgery results
                        </li>
                    </ul>
                    <p class="cosmetic-faq-list">
                        2. What is the cost of a Breast Lift surgery?
                    </p>
                    <p>
                        The average cost of Breast Lift surgery in <?= $city ?> will range between
                        1,50,000 INR to 2,0,000 INR. Opting for additional procedures such
                        as Breast Implants will increase the expenditure accordingly.
                        Consultation with any of our expert cosmetic surgeons in
                        <?= $city ?> will help you know the exact cost.
                    </p>
                    <p class="cosmetic-faq-list">
                        3. What are the risks related to Breast Lifts?
                    </p>
                    <p>
                        Breast lift risks include:
                    </p>
                    <ul>
                        <li>
                            Allergic reaction to anesthesia
                        </li>
                        <li>
                            Hematoma - a pool of clotted blood formed in the treated area
                        </li>
                        <li>
                            Bleeding and infection
                        </li>
                        <li>
                            Irregularities in the breast symmetry, shape, and contour
                        </li>
                        <li>
                            Reduced sensation in the breast or nipple on a temporary basis
                        </li>
                        <li>
                            Deep vein thrombosis complications
                        </li>
                        <li>
                            Deep vein thrombosis, cardiac and pulmonary complications
                        </li>
                        <li>
                            Cardiac and pulmonary risks
                        </li>
                        <li>
                            Fat necrosis or dead fatty tissue, found deep inside the skin
                        </li>
                        <li>
                            Badly treated incisions leading to delayed healing
                        </li>
                        <li>
                            Revision breast lift surgery
                        </li>
                    </ul>
                    <p class="cosmetic-faq-list">
                        4. When can you go for Breast Lift?
                    </p>
                    <p>
                        There is no ideal age to go for a Breast Lift.
                        The only condition is that the breasts of a woman should be completely developed,
                        immaterial of whether she is in her teenage, 20s, or older.
                        In general, women consider this treatment mostly between the age of 18 - 25 years
                        due to several reasons, like genetics, weight changes,
                        issues related to pregnancy, and more.
                    </p>
                    <p class="cosmetic-faq-list">
                        5. What are the things to do before Breast Lift Surgery?
                    </p>
                    <p>
                        When going for a Breast Lift from an experienced surgeon in <?= $city ?> keep
                        in mind to do the below things:
                    </p>
                    <ul>
                        <li>
                            Go for medical evaluation or lab testing as instructed by your surgeon
                        </li>
                        <li>
                            Consult the surgeon about your medications so that he could make
                            proper adjustments
                        </li>
                        <li>
                            A baseline mammogram would be advisable before the surgery and after the surgery.
                            It will help to find out if your breast tissue has undergone any changes
                        </li>
                        <li>
                            Stop the intake of supplements, anti-inflammatory drugs, aspirin, and any other
                            medicine that can lead to increased bleeding
                        </li>
                        <li>
                            Stop consuming alcohol and tobacco products at least 2-3 weeks before the surgery
                        </li>
                        <li>
                            Consult your surgeon about your doubts, expected results, and recovery period
                        </li>
                        <li>
                            Have realistic expectations with the surgery
                        </li>
                    </ul>
                    <p class="cosmetic-faq-list">
                        6. What to expect on the day of Breast Lift surgery?
                    </p>
                    <ul>
                        <li>
                            The procedure can last for around 1-2 hours depending on the severity
                            of the procedure.
                        </li>
                        <li>
                            The surgeon will leave you with a thin tube close to your incisions
                            to avoid swelling and drain fluid. It will be removed
                            a few days after the surgery
                        </li>
                        <li>
                            You can expect to go home the same after undergoing Mastopexy.
                        </li>
                        <li>
                            You may experience a slight discomfort around the incisions during
                            or after the surgery
                        </li>
                        <li>
                            You could also expect tight skin, bruising, or swelling temporarily
                        </li>
                        <li>
                            After the completion of Breast Lift surgery in <?= $city ?> completes,
                            you could expect reshaped and repositioned breast tissues
                        </li>
                    </ul>
                </div>
            <?php } elseif ($surgery_str == "breast reduction") {  ?>
                <div class="col">
                    <div class="top-content">
                        <p>
                            Having large breasts can be a disadvantage not just to your appearance but also to other health issues. If you are suffering from extreme back pain or any physical troubles due to large breasts, our expert cosmetic surgeon in <?= $city ?> can help you to resolve it. Reduce the size of your breasts and feel at ease.
                        </p>
                    </div>
                    <p class="identity">
                        WHY CHOOSE DR FOR <?= $surgery_str ?> IN <?= $city ?>? </p>
                    <ul>
                        <li>Highly adept at performing <?= $surgery_str ?> procedures to help patients relieve from physical constraints.</li>
                        <li>The best cosmetic surgeon in <?= $city ?>, perfectly skilled at performing <?= $surgery_str ?> surgeries that leave minimal scarring.</li>
                        <li>An expert cosmetic surgeon, certified by many national and international boards for cosmetic surgeons.</li>
                        <li>Specialization in different types of <?= $surgery_str ?> surgeries like liposuction, vertical <?= $surgery_str ?> and inverted-T <?= $surgery_str ?>.</li>
                        <li>Expert in reshaping the breasts and repositioning the nipples to achieve natural-looking breasts.</li>
                    </ul>
                    <p class="identity">
                        COST OF <?= $surgery_str ?> SURGERY IN <?= $city ?>
                    </p>
                    <p>
                        <?= $surgery_str ?> surgery involves a dedicated procedure and extensive care during the recovery phase. So, apart from the main cost of surgery, you will also have to take care of your breasts after the completion of the procedure. The typical cost of a <?= $surgery_str ?> procedure is between 1,00,000 INR to 2,00,000 INR depending on the scale of the surgery. Our cosmetic surgeon in <?= $city ?> will be able to guide you better in this regard.
                    </p>
                    <p class="identity">OUR SERVICES</p>
                    <p>
                        Do not let those big breasts be a hindrance to your movements, leading to physical pain. Consult with our best cosmetic surgeon in <?= $city ?> and customize your <?= $surgery_str ?> procedure for a happy and comfortable tomorrow.
                    </p>
                </div>
            <?php } elseif ($surgery_str == "breast implant removal") { ?>
                <div class="col">
                    <div class="top-content">
                        <p>
                            Surgeries for <?= $surgery_str ?> in <?= $city ?> are suitable for patients who want to remove the implants due to several reasons. It can be because the patient is not happy with the results or wishes to go back to her previous appearance. The change in the position of the implant due to weight fluctuations could also be one of the reasons in this regard. In some rare cases, the implant may rupture or leak, leaving no option but to remove it. One should approach only an expert and experienced cosmetic surgeon to undergo this surgery.
                        </p>
                    </div>
                    <p class="identity">
                        WHY CHOOSE DR FOR <?= $surgery_str ?> SURGERY IN <?= $city ?>? </p>
                    <ul>
                        <li>The best cosmetic surgeon in <?= $city ?> for all breast-related procedures.</li>
                        <li>Experienced in the placement and removal of breast implants.</li>
                        <li>A commendable history of offering the best results for patients in breast surgeries in <?= $city ?>.</li>
                        <li>Skilled at removing the scar tissue that forms around the implants and helps in achieving fuller, rounder breasts even after the removal of the implants.</li>
                        <li>A board-certified cosmetic surgeon and a member of several national and international organizations related to cosmetic surgeries.</li>
                    </ul>
                    <p class="identity">COST OF <?= $surgery_str ?> SURGERY IN <?= $city ?></p>
                    <p>In a <?= $surgery_str ?> surgery, the cost of the surgery differs based on the cosmetic surgeon you choose and the complexity of the treatment. Generally, a <?= $surgery_str ?> surgery is from 50,000 INR to 1,00,000 INR.</p>
                    <p>If you are feeling discomfort in your breasts after placing the implants, it is vital to visit a reliable cosmetic surgeon in <?= $city ?> without any delay for complete checkup. The surgeon will analyze and recommend the solution.</p>
                    <p class="identity">OUR SERVICES</p>
                    <p>
                        Are you having second thoughts about your breast implants? There is a way out! Choose our skilled cosmetic surgeon in <?= $city ?> to remove or fix your breast implants in the way you want!
                    </p>
                </div>
            <?php } elseif ($surgery_str == "breast implant revision") { ?>
                <div class="col">
                    <div class="top-content">
                        <p>
                            Breast implants enhance the appearance and size of the breasts and complement the entire figure. Unfortunately, breast implants are not permanent. You need to go for <?= $surgery_str ?> surgery after a span of 10 or more years when your breasts start to sag again.
                        </p>
                        <p>
                            In <?= $surgery_str ?> surgery, the cosmetic surgeon will focus on changing the implants and reshaping the breasts to retain a youthful appearance. The highly skilled cosmetic surgeons in <?= $city ?> can help you better in achieving natural-looking, rounder and fuller breasts.
                        </p>
                    </div>
                    <p class="identity">
                        WHY CHOOSE DR FOR <?= $surgery_str ?> SURGERY IN <?= $city ?>
                    </p>
                    <ul>
                        <li>One of the top cosmetic surgeons in <?= $city ?> and duly experienced in breast implant surgery.</li>
                        <li>Experienced in performing numerous breast augmentation with implants, breast implant removal and <?= $surgery_str ?> surgeries.</li>
                        <li>Skilled at thoroughly examining the condition and offering detailed guidance in choosing the new breast implants.</li>
                        <li>Certified by the best national and international boards of plastic and cosmetic surgeries.</li>
                    </ul>
                    <p class="identity">COST OF <?= $surgery_str ?> SURGERY IN <?= $city ?></p>
                    <p>
                        A <?= $surgery_str ?> surgery involves swapping the old implants for the new implants. There can be minor complications like scar tissue removal as well as cleaning up any damages or leaks. As it’s an extensive procedure, the cost of the <?= $surgery_str ?> surgery starts from 1,00,000 INR. This cost can vary depending on the type and size of the breast implants you choose, the condition of the current implants and the cosmetic surgeon. The total price is not inclusive of the medicines and other items like bandages needed for recovery.
                    </p>
                    <p>
                        To get a good estimate for your <?= $surgery_str ?> surgery, feel free to visit our expert cosmetic surgeon at the <?= $city ?> clinic.
                    </p>
                    <p class="identity">OUR SERVICES</p>
                    <p>
                        Is it time to replace your old breast implants? Well, get brand-new, high-quality implants that make your breasts look fuller and youthful through our expert surgeon in <?= $city ?>.
                    </p>
                </div>
            <?php } elseif ($surgery_str == "gynecomastia") { ?>
                <div class="col">
                    <div class="top-content">
                        <p>
                            Due to the changes in the hormonal secretion in males, the breasts of males may become bigger. <?= $surgery_str ?> is the male breast reduction treatment in which the surgeon removes the fatty tissues from the breast area to give a contoured chest. If you are suffering from similar issues, schedule a consultation session with our cosmetic surgeon’s clinic in <?= $city ?> for proper diagnosis and appropriate treatment.
                        </p>
                    </div>
                    <p class="identity">
                        WHY CHOOSE DR FOR <?= $surgery_str ?> IN <?= $city ?>? </p>
                    <ul>
                        <li>One of the leading cosmetic surgeons in <?= $city ?> having many years of experience with <?= $surgery_str ?> treatments.</li>
                        <li>Owns expertise in performing the two main types of <?= $surgery_str ?> surgeries: Liposuction and tissue excision.</li>
                        <li>Offers customized treatment plans to treat <?= $surgery_str ?> based on the age, weight and medical conditions of the patient.</li>
                        <li>One of <?= $city ?> highly accomplished surgeons with proven results in reducing the breast size and contouring the chest of men and boys.</li>
                    </ul>
                    <p class="identity">
                        COST OF <?= $surgery_str ?> SURGERY IN <?= $city ?>
                    </p>
                    <p>
                        With several treatment options available for <?= $surgery_str ?>, some need medicines, while the others require surgery. Our cosmetic surgeon will take you through the whole process and help you achieve a flat chest, as you desire. Depending on these treatment options, the cost of the <?= $surgery_str ?> will vary. It is best to have an open talk with our surgeon from <?= $city ?> about your expectations and get an idea of the involved cost.
                    </p>
                    <p class="identity">OUR SERVICES</p>
                    <p>
                        Big breasts can affect self-esteem for men. If you too have a similar problem, it is wise to undergo <?= $surgery_str ?> from our expert cosmetic surgeon in <?= $city ?>! It is a safe and the best way to have a flat chest and regain your confidence.
                    </p>
                </div>
            <?php } elseif ($surgery_str == "liposuction") { ?>
                <div class="col">
                    <div class="top-content">
                        <p>
                            <strong>
                                Do you wish to have a slim physical appearance? Of course you do!
                            </strong>
                        </p>
                        <p>
                            When diets and exercises fail us to achieve that perfect body we want, <?= $surgery_str ?> is the best cosmetic procedure to go for, a renowned cosmetic surgeon from <?= $city ?> is one of the best choices for <?= $surgery_str ?> treatments. Having worked with numerous patients, she holds the experience required to transform the <?= $surgery_str ?> candidates back to their lean and beautiful self.
                        </p>
                    </div>
                    <p class="identity">WHY CHOOSE DR FOR <?= $surgery_str ?> IN <?= $city ?>?</p>
                    <ul>
                        <li>One of the trusted and experienced cosmetic surgeons in <?= $city ?>, well versed with various types of <?= $surgery_str ?> surgeries.</li>
                        <li>Experienced to customize the <?= $surgery_str ?> treatment and remove fat from particular places in the patient’s body to achieve a better-looking figure.</li>
                        <li>Expertise in numerous <?= $surgery_str ?> procedures like tumescent <?= $surgery_str ?>, ultrasound-assisted <?= $surgery_str ?>, suction-assisted <?= $surgery_str ?> and power-assisted <?= $surgery_str ?>.</li>
                        <li>Reputed cosmetic surgeon in the whole of <?= $city ?> and a member of several prestigious national and international associations for plastic and cosmetic surgeons.</li>
                    </ul>
                    <p class="identity">COST OF <?= $surgery_str ?> SURGERY IN <?= $city ?></p>
                    <p>The cost of <?= $surgery_str ?> mainly depends on:</p>
                    <ul>
                        <li>The surgeon you choose</li>
                        <li>The amount of fat removal</li>
                        <li>The location of fat removal</li>
                        <li>Additional costs like medicines, anesthesia, etc.</li>
                    </ul>
                    <p>By considering all these factors, the cost of <?= $surgery_str ?> surgery can be anywhere between 50,000 INR to 1,25,000 INR.</p>
                    <p>Do you have a particular location where you need to perform the surgery? If yes, then it would be wise to visit the cosmetic surgeon in <?= $city ?> and get a fair estimate.</p>
                    <p class="identity">OUR SERVICES</p>
                    <p>Get your <?= $surgery_str ?> procedure customized by the most reliable cosmetic surgeon in <?= $city ?> and achieve that dream figure.</p>
                </div>
            <?php } elseif ($surgery_str == "tummy tuck") {  ?>
                <div class="col">
                    <div class="top-content">
                        <p>
                            <?= $surgery_str ?> or Abdominoplasty is the best solution to get rid of the extra flab that totally messes up our appearance. Even when the diets fail, do not lose heart. <?= $surgery_str ?> procedure by our trusted cosmetic surgeon is all you need to flaunt a flat looking tummy. Our cosmetic surgeon is one of the best <?= $surgery_str ?> experts in <?= $city ?> to reduce your tummy size.
                        </p>
                    </div>
                    <p class="identity">WHY CHOOSE DR FOR <?= $surgery_str ?> IN <?= $city ?>? </p>
                    <ul>
                        <li>The best cosmetic surgeon in <?= $city ?></li>
                        <li>Owns more than a decade of experience in performing <?= $surgery_str ?> surgeries.</li>
                        <li>Experienced in customized <?= $surgery_str ?> procedures as per the patient’s expectations.</li>
                        <li>Accomplished in producing believable results through different types of <?= $surgery_str ?> surgeries like mini <?= $surgery_str ?>, full <?= $surgery_str ?> and extended <?= $surgery_str ?>.</li>
                        <li>Ability to minimize the scars of the surgery and hide it deftly near the abdomen.</li>
                        <li>Renowned cosmetic surgeon from <?= $city ?>, certified by many national and international cosmetic surgery associations.</li>
                    </ul>
                    <p class="identity">COST OF <?= $surgery_str ?> SURGERY IN <?= $city ?>
                    </p>
                    <p>
                        The cost differs according to the different types of <?= $surgery_str ?> methods and the location of surgery. To give you an idea, the average cost of a <?= $surgery_str ?> procedure starts from 1,00,000 INR and can go up to 2,00,000 INR or even more. Apart from the main surgery cost, you should also consider the cost of medicines that you take during the recovery period. In addition, scans and other methods of monitoring the operated location would further add up to your bill. Visit our cosmetic surgeon in <?= $city ?> to get a better estimate.
                    </p>
                    <p class="identity">OUR SERVICES</p>
                    <p>Get rid of extra fat in your stomach that spoils your appearance. Choose your preferred <?= $surgery_str ?> surgery type and rock in any costume you desire with the help of the best cosmetic surgeon in <?= $city ?>.</p>
                </div>
            <?php } elseif ($surgery_str == "buttock enhancement") { ?>
                <div class="col">
                    <div class="top-content">
                        <p>
                            <strong>
                                Are you not happy with your buttock size?
                            </strong>
                        </p>
                        <p>
                            <?= $surgery_str ?> is the best option to increase the size of your buttocks and complement your physical appearance. When performed by a trusted and experienced cosmetic surgeon from <?= $city ?>, you can make your buttocks look well rounded, projected and lifted. You can even eliminate the issue of sagging breasts and make them look naturally bigger.
                        </p>
                    </div>
                    <p class="identity">WHY CHOOSE DR FOR <?= $surgery_str ?> IN <?= $city ?>? </p>
                    <ul>
                        <li>Highly skilled cosmetic surgeon in <?= $city ?> to perform <?= $surgery_str ?> surgeries with minimal and almost invisible scarring.</li>
                        <li>Expertise in performing Brazilian butt lift and enhancement using buttock implants.</li>
                        <li>Experienced in helping the patients choose the right type and size of <?= $surgery_str ?> surgery.</li>
                        <li>Adept at accomplishing symmetrical enhancements of the buttock sizes without making it look artificial.</li>
                        <li>Certified by several national and international boards of cosmetic surgeons.</li>
                    </ul>
                    <p class="identity">
                        COST OF <?= $surgery_str ?> SURGERY IN <?= $city ?>
                    </p>
                    <p>
                        Several types of <?= $surgery_str ?> surgery include Brazilian butt lift, fat grafting and buttock implants. So depending on your preferred treatment, the cost of surgery will also differ. Apart from the cost of the surgery, you should also consider the cost of medicines, compressions, dressings, etc. To know the whole cost of <?= $surgery_str ?>, you can visit this cosmetic surgeon, the best in <?= $city ?>.
                    </p>
                    <p class="identity">OUR SERVICES</p>
                    <p>
                        Big buttocks have a glamorous appeal and you can achieve them through the <?= $surgery_str ?> surgery. With a skilled cosmetic surgeon from <?= $city ?> helping you every step of the day, you can safely enhance your buttocks.
                    </p>
                </div>
            <?php } elseif ($surgery_str == "body lift") { ?>
                <div class="col">
                    <div class="top-content">
                        <p>
                            <strong>
                                Do you have stubborn body fat that does not budge even with heavy exercising?
                            </strong>
                        </p>
                        <p>
                            Well, a body lift procedure can help to get rid of excess fat and sagging skin. There are times when some fat deposits do not disintegrate even when you diet and exercise hard. A body lift surgery removes or minimizes these fat deposits and tightens your skin for a well-toned looking body. The need is to go for the best cosmetic surgeon in <?= $city ?> to get the best treatment.
                        </p>
                    </div>
                    <p class="identity">WHY CHOOSE DR FOR BODY LIFT IN <?= $city ?>? </p>
                    <ul>
                        <li>One of the best cosmetic surgeons in <?= $city ?> with specialization in body lift.</li>
                        <li>Expertise in understanding the patient’s requirements and helps them to achieve their body goals.</li>
                        <li>Works on a customized treatment plan to remove the excess fat and skin.</li>
                        <li>Skilled at whole body lift, lower body lift and mid-body lift.</li>
                        <li>Certified by several national and international boards of plastic and cosmetic surgeons.</li>
                    </ul>
                    <p class="identity">
                        COST OF BODY LIFT IN <?= $city ?>
                    </p>
                    <p>
                        The body lift procedures start from a few thousand and can go up to 1,00,000 INR or more. Since the procedure depends totally on your expectations, the areas of body lift procedures will have a significant influence over the total price. If you are opting for body lift only in the lower body, then it will cost you less than total body lift.
                    </p>
                    <p>
                        You can visit our experienced cosmetic surgeon in <?= $city ?> to seek recommendations on the best body lift procedure for you.
                    </p>
                    <p class="identity">OUR SERVICES</p>
                    <p>
                        When exercising and dieting stops working, body lift could help you get a toned and better-looking body! You can get rid of the flab to tighten the skin and get a toned body at our best surgeon’s clinic in <?= $city ?>. No wonder, you can start wearing those body-fitting clothes and flaunt your gorgeous figure once you get the right treatment.
                    </p>
                </div>
            <?php } elseif ($surgery_str == "arm lift") { ?>
                <div class="col">
                    <div class="top-content">
                        <p>
                            <strong>
                                Love to have better-looking, toned arms?
                            </strong>
                        </p>
                        <p>
                            Arm lift surgery or Brachioplasty is the procedure to treat drooping upper arms resulting due to ageing or massive weight loss. It requires the surgeon to remove the excess sagging skin of the upper arm resulting in well-toned and tightened arms.
                        </p>
                        <p>
                            A reputed cosmetic surgeon in <?= $city ?> can advise the right treatment plan and the best-suited procedure for you.
                        </p>
                    </div>
                    <p class="identity">WHY CHOOSE DR FOR ARM LIFT SURGERY IN <?= $city ?>? </p>
                    <ul>
                        <li>The best cosmetic surgeon in <?= $city ?> holds the experience of treating several patients with extremely sagging upper arms.</li>
                        <li>Highly skilled at various arm lift surgeries like liposuction, limited arm lift, standard arm lift and extended arm lift.</li>
                        <li>Highly talented at customizing the treatment and toning the upper arms that are symmetrical with the body.</li>
                        <li>Minimal scarring that becomes almost invisible over time.</li>
                        <li>A renowned cosmetic surgeon from <?= $city ?>, duly certified by several national boards of cosmetic surgeries.</li>
                    </ul>
                    <p class="identity">
                        COST OF ARM LIFT SURGERY IN <?= $city ?>
                    </p>
                    <p>Arm lift surgeries cost about 1,00,000 INR. This cost is not inclusive of the consultation, medicine costs and other external support needed for recovery. The price, however, depends on the cosmetic surgeon you choose and the specific area where you want to tone it. The cost of extended arm lift surgery is higher than the other surgeries since the surgeon not just removes the excess skin on the upper arms but also on the sides of the body.</p>
                    <p>It is best to visit our reliable cosmetic surgeon in <?= $city ?> and get the advice on the best course of action.</p>
                    <p class="identity">OUR SERVICES</p>
                    <p>
                        Are you feeling uncomfortable due to the excess skin on your upper arms? Are you finding it hard to tone down your excess skin through exercise? If yes then, you can always opt for arm lift surgery by our experienced surgeon in <?= $city ?>.
                    </p>
                </div>
            <?php } elseif ($surgery_str == "thigh lift") { ?>
                <div class="col">
                    <div class="top-content">
                        <p>
                            If dieting and exercising is not working out anymore to reduce your thigh size, then thigh lift is the next option for you to go. Thigh lift surgery reshapes the thigh by removing the extra tissues that would otherwise make you look flabby. This surgery will also contour your body in proportion to the rest of your body figure.
                        </p>
                        <p>
                            Some prefer to go for a combination of liposuction and thigh lift to complement the body structure. For any more doubts about this surgery, please connect with our recommended cosmetic surgeon in <?= $city ?>.
                        </p>
                    </div>
                    <p class="identity">
                        WHY CHOOSE DR FOR THIGH LIFT IN <?= $city ?>? </p>
                    <ul>
                        <li>The best cosmetic surgeon in <?= $city ?> with credible experience in thigh lift as well as other body contouring procedures.</li>
                        <li>Overwhelming testimonials from the satisfied patients about the positive results of the surgeries.</li>
                        <li>Founder and main cosmetic surgeon at a fully equipped clinic for plastic, cosmetic and reconstructive surgeries.</li>
                        <li><?= $city ?> top cosmetic surgeon certified by the national associations for plastic and cosmetic surgeries.</li>
                    </ul>
                    <p class="identity">
                        COST OF THIGH LIFT IN <?= $city ?>
                    </p>
                    <p>Several factors can influence the cost of thigh lift surgery. These may include the price of the surgical facilities, the cost of the surgeon, anesthesia and the medicines. It is best to consult with our cosmetic surgeon in <?= $city ?> about the cost considerations. This consultation will also give you a better insight into the results you can expect as well as about the recovery period.</p>
                    <p class="identity">OUR SERVICES</p>
                    <p>Do not let those flabby thighs get the best of you! Go for a thigh lift, recover your lost shape and look fab! Opt for our most-respected cosmetic surgeon in <?= $city ?> to perform the thigh lift surgery.</p>
                </div>
            <?php } elseif ($surgery_str == "body contouring") { ?>
                <div class="col">
                    <div class="top-content">
                        <p>
                            Sometimes, you may still have excess skin after extensive weight loss. This happens when your skin loses its elasticity. Body contouring procedure helps to remove these excess skin and fat. You will have a well-toned and lean looking figure after undergoing the whole body contouring surgery.
                        </p>
                        <p>
                            Since body contouring in an extensive procedure, it is vital to get it done by an experienced cosmetic surgeon in <?= $city ?>.
                        </p>
                    </div>
                    <p class="identity">
                        WHY CHOOSE DR FOR BODY CONTOURING IN <?= $city ?>? </p>
                    <ul>
                        <li>The most skilled cosmetic surgeon in <?= $city ?> for body contouring.</li>
                        <li>Highly experienced in individual procedures that make up the body contouring like tummy tuck, breast lift, arm lift, buttock lift, thigh lift and lower body lift.</li>
                        <li>Performs highly specific and customized body-contouring surgery targeted at removing the excess skin that results in well-contoured appearance.</li>
                        <li><?= $city ?> experienced cosmetic surgeon, certified by several national and international boards of cosmetic surgeries.</li>
                    </ul>
                    <p class="identity">
                        COST OF BODY CONTOURING SURGERY IN <?= $city ?>
                    </p>
                    <p>
                        The body contouring procedure should be highly customized to treat the specific areas of the body that are disrupting the figure. The total cost of the procedure varies from 1,00,000 INR to 3,00,000 INR depending on the different areas of treatment. Visiting an expert cosmetic surgeon would be wise to get the recommendations for the customized body contouring treatment.
                    </p>
                    <p>
                        Our cosmetic surgeon is one of the best in this field in <?= $city ?>. You can schedule a consultation session to get a good ballpark on the cost of this surgery along with other necessary details.
                    </p>
                    <p class="identity">OUR SERVICES</p>
                    <p>
                        Transform your appearance in a single body contouring surgery. Get rid of that excess flab of skin from all over your body to get a well-toned and youthful skin with <?= $city ?> best surgeon by your side.
                    </p>
                </div>
            <?php } elseif ($surgery_str == "mommy makeover") { ?>
                <div class="col">
                    <div class="top-content">
                        <p>
                            <strong>
                                THE EXPERT COSMETIC SURGEON FOR MOMMY MAKEOVER SURGERY IN <?= $city ?>
                            </strong>
                        </p>
                        <p>
                            Mommy makeover surgery aims specifically at helping women get back their slim body after childbirth. A woman’s body goes through significant changes during and after pregnancy. For many, it can be difficult and almost impossible to get back to the previous shape they were in. This is where mommy makeover surgery is beneficial. Our cosmetic surgeon from <?= $city ?> will inspect the entire body and make changes to breasts, buttocks, thighs, tummy and other locations where the size has increased.
                        </p>
                    </div>
                    <p class="identity">
                        WHY CHOOSE DR FOR MOMMY MAKEOVER SURGERY IN <?= $city ?>?
                    </p>
                    <ul>
                        <li>One of the best cosmetic surgeons in <?= $city ?> who offers astonishing results with a wholesome mommy makeover surgery.</li>
                        <li>Customized surgery plans aimed at reducing the fat at specific areas of the mother’s body.</li>
                        <li>Skilled at transforming the patients’ back to their old, thinner self.</li>
                        <li>A reliable cosmetic surgeon with a clinic in <?= $city ?> offering personalized treatment and medicines by considering the recent childbirth.</li>
                        <li>An esteemed cosmetic surgeon and a member of several national and international boards for cosmetic surgery.</li>
                    </ul>
                    <p class="identity">
                        COST OF MOMMY MAKEOVER SURGERY IN <?= $city ?>
                    </p>
                    <p>
                        In the mommy makeover surgery, the cosmetic surgeon performs several surgeries like liposuction, breast lift, breast reduction, buttock augmentation/reduction, tummy tuck, etc. Therefore, the cost of mommy makeover surgery will vary according to the recommended surgeries. If you are considering mommy makeover surgery, you can consult our cosmetic surgeon in <?= $city ?> to get an estimate of the complete treatment plan.
                    </p>
                    <p class="identity">OUR SERVICES</p>
                    <p>
                        Revamp your entire body and get rid of the fat to look slim and fabulous! Choose the customized mommy makeover treatments in <?= $city ?> with breast lift, liposuction, tummy tuck, labiaplasty, facial rejuvenation, and other body contouring surgeries.
                    </p>
                </div>
            <?php } elseif ($surgery_str == "hair transplant") { ?>
                <div class="col">
                    <div class="top-content">
                        <p>
                            <strong>
                                Are you losing confidence because of thinning or balding hair?
                            </strong>
                        </p>
                        <p>
                            Not anymore! Get the best cosmetic surgeon in <?= $city ?> known for the skilled hair transplant treatment to help you regain your confidence. Through hair transplantation surgery, the surgeon will extract hair grafts or follicles from your scalp, treat them and place it in the thinning areas. It is best for patients suffering from acute hair fall, balding hall, thinned out hair, alopecia or any other similar condition.
                        </p>
                    </div>
                    <p class="identity">
                        WHY CHOOSE DR FOR HAIR TRANSPLANT IN <?= $city ?>?
                    </p>
                    <ul>
                        <li>One of the top cosmetic surgeons for hair transplantation in <?= $city ?> with a high success rate.</li>
                        <li>Adept at the most-acclaimed hair transplant treatment – Follicular Unit Extraction (FUE)</li>
                        <li>Ability to tailor the areas of transplantation based on the patient’s expectations to achieve fuller-looking scalp.</li>
                        <li>Board-recognized cosmetic surgeon and member of several hair transplant associations.</li>
                    </ul>
                    <p class="identity">
                        COST OF HAIR TRANSPLANT TREATMENT IN <?= $city ?>
                    </p>
                    <p>
                        From among two types of common hair transplant surgeries, FUT and FUE, many cosmetic surgeons recommend FUE. The cost of FUE treatment starts from 70,000 INR and can go up to several lakhs. The main cost-deciding factor in hair transplantation is the number of the grafts needed as well as the cost of the cosmetic surgeon. Usually, the cost per graft is 40 INR to 100 INR. To know the exact rates, kindly visit our cosmetic surgeon at the clinic in <?= $city ?>.
                    </p>
                    <p class="identity">OUR SERVICES</p>
                    <p>
                        We all love to have a full head of hair. This is now possible with the customized hair transplant surgery by an expert cosmetic surgeon in <?= $city ?>. Enjoy thicker and fuller hair that makes you look younger!
                    </p>
                </div>
            <?php } elseif ($surgery_str == "men and plastic surgery") { ?>
                <div class="col">
                    <div class="top-content">
                        <p>
                            Women are not the only ones who wish to look their best. Nowadays, men too want to beautify themselves, look slim and have flawless skin, and there is nothing wrong in that! Several cosmetic surgeries for men exist to treat different concerns like flabby stomach, sagging or blemished skin, facial wrinkles or any other issues.
                        </p>
                        <p>
                            Our cosmetic surgeon from <?= $city ?> is one of the best to perform men’s cosmetic surgeries.
                        </p>
                    </div>
                    <p class="identity">
                        WHY CHOOSE DR FOR MEN’S PLASTIC SURGERY IN <?= $city ?>?
                    </p>
                    <ul>
                        <li>One of the top choices in <?= $city ?> for performing cosmetic surgeries for men.</li>
                        <li>Runs a fully equipped clinic with the infrastructure needed to perform extensive surgeries for men.</li>
                        <li>Experienced at performing gynecomastia, liposuction, ear surgery, facelift, chin augmentation, tummy tuck and many more.</li>
                        <li><?= $city ?> best cosmetic surgeon certified by several national and international boards of cosmetic surgeons.</li>
                    </ul>
                    <p class="identity">
                        COST OF MEN’S PLASTIC SURGERY IN <?= $city ?></p>
                    <p>
                        When it comes to the choices for plastic surgery in men, the options are multifarious. From facial non-invasive and minimally invasive treatments to extensive full-body procedures, you can go for any of them. So, the cost for the plastic surgery for men also varies depending on the treatment. The rates start from as low as a couple of thousands for dermal fillers, acne treatment and laser skin treatment to more than 3,00,000 INR for extensive body contouring and reshaping surgeries.
                    </p>
                    <p>
                        If you have any specific concern, feel free to visit our acclaimed cosmetic surgeon in <?= $city ?> for proper guidance.
                    </p>
                    <p class="identity">OUR SERVICES</p>
                    <p>Regain your confidence with your choice of cosmetic surgery. Consult with <?= $city ?> most esteemed cosmetic surgeon and be your youthful self.</p>
                </div>
            <?php } ?>
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
                        <img src="<?= asset('img/face.jpg') ?>" style="width:100%">
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
                        <img src="<?= asset('img/breast.jpg') ?>" style="width:100%">
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
                        <img src="<?= asset('img/body.jpg') ?>" style="width:100%">
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
                        <img src="<?= asset('img/male.jpg') ?>" style="width:100%">
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
                        <img src="<?= asset('img/body-hair-to-head.jpg') ?>" style="width:100%">
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
                        <img src="<?= asset('img/failed-hair-transplant-repair.jpg') ?>" style="width:100%">
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
                    <img src="<?= asset('img/face.jpg') ?>" style="width:100%">
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
                    <img src="<?= asset('img/breast.jpg') ?>" style="width:100%">
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
                    <img src="<?= asset('img/body.jpg') ?>" style="width:100%">
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
                    <img src="<?= asset('img/male.jpg') ?>" style="width:100%">
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