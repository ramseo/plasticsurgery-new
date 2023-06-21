@extends('frontend.layouts.app')

@section('title') <?= $$module_name_singular->meta_title ?> @endsection

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

<div id="city-page" class="container-fluid">
    <div class="container city-page">
        <p class="identity width-100">
            top Plastic Surgeons in <?= $city ?>
        </p>
        <div class="col-lg-12 doc-flex-cls padd-null">
            <?php
            $getAssignedDoctors = getAssignedDoctors($city);
            if ($getAssignedDoctors) {
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
                    We help you search for the most popular cosmetic surgeons in <?= $city ?>.
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

<div id="city-page-content" class="container-fluid">
    <div class="container city-page">
        <div class="col padd-null">
            <p class="identity">COSMETIC SURGERY COST IN <?= $city ?></p>
            <p>
                Cosmetic surgery is a broad field that includes various non-invasive and minimally
                invasive treatments to highly complex operations. Therefore, the cost of cosmetic
                surgery in <?= $city ?> varies accordingly. For accurate figures, feel free to
                interact with any of our plastic surgeons.
            </p>
            <p class="identity">Our Services</p>
            <p>
                You can now improve your appearance by undergoing various cosmetic surgeries
                from our experienced cosmetic surgeons. Depending on your requirement,
                you can choose to undergo Facelift, Breast Reduction, Buccal Fat Removal,
                Chin Augmentation, Cheek Augmentation, Ear Surgery, Hair Transplant,
                and Lip Augmentation among other cosmetic surgeries. Our surgeons will
                recommend you the closest cosmetic treatment that would deliver
                the expected results.
            </p>
            <p class="identity">
                Cosmetic Surgery in <?= $city ?>
            </p>
            <ul>
                <li>
                    Experienced cosmetic surgeons working from accredited hospitals with the best team of
                    plastic surgeons, cosmetic surgeons, and dermatologists.
                </li>
                <li>
                    Best clinics in the country in terms of affordable treatments
                    as well as expert solutions.
                </li>
                <li>
                    The downpour of many foreign nationals coming to our cosmetic surgeons to get
                    consultation and treatment.
                </li>
                <li>
                    Perform treatment with the laser equipment of the latest model at par with
                    the high industry standards.
                </li>
            </ul>
            <p class="identity">
                FAQs on Cosmetic Surgery in <?= $city ?>
            </p>

            <div class="accordion-container">
                <a onclick="accordion_elm(this)" href="#" class="accordion-toggle">
                    <span>
                        1. Are you a good candidate for Cosmetic Surgery?
                    </span>
                    <span class="accordion-icon">
                        <i class="fa fa-chevron-down pull-right" aria-hidden="true"></i>
                    </span>
                </a>
                <div class="accordion-content">
                    <p>
                        To be a good candidate for cosmetic surgery in <?= $city ?>,
                        you should fulfil certain important conditions:
                    </p>
                    <ul>
                        <li>
                            Have good overall health
                        </li>
                        <li>
                            Current body weight close to ideal weight
                        </li>
                        <li>
                            Free from severe medical ailments
                        </li>
                        <li>
                            Have developed unwanted fat in one or more parts of the body
                        </li>
                        <li>
                            Wish to overcome wrinkles, sagging breasts, and other ageing effects
                        </li>
                        <li>
                            Have gained excess weight that is creating facing problems in daily cores with
                        </li>
                        <li>
                            Wish to reduce or augment breasts to make them look rounder and in proportion with each other
                        </li>
                        <li>
                            Want to restore the appealing body appearance after pregnancy and breastfeeding
                        </li>
                        <li>
                            Have realistic goals regarding the surgery
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
                        2. What is the cost of cosmetic surgery?
                    </span>
                    <span>
                        <i class="fa fa-chevron-down pull-right" aria-hidden="true"></i>
                    </span>
                </a>
                <div class="accordion-content">
                    <p>
                        The cost of Cosmetic Surgery in <?= $city ?> may vary significantly depending
                        on various reasons. To give you an idea, the cost of lip reduction surgery
                        can start from 50,000 INR, while the cost of breast enhancement surgeries
                        starts from 1,00,000 INR and can increase to 2,00,000 INR depending on
                        the individual surgeon. On average, the cost of cosmetic surgery in
                        <?= $city ?> may range between 25,000 INR and 3,00,000 INR depending
                        on the surgery type you opt for.
                    </p>
                </div>
            </div>
            <div class="accordion-container">
                <a onclick="accordion_elm(this)" href="#" class="accordion-toggle">
                    <span>
                        3. What are the risks related to Cosmetic Surgery?
                    </span>
                    <span>
                        <i class="fa fa-chevron-down pull-right" aria-hidden="true"></i>
                    </span>
                </a>
                <div class="accordion-content">
                    <ul>
                        <li>
                            Allergic behaviour to anesthesia.
                        </li>
                        <li>
                            Fluid build-up in the treated area, leading to seroma.
                        </li>
                        <li>
                            Accumulation of blood in the surgical incision site.
                        </li>
                        <li>
                            Excessive scarring.
                        </li>
                        <li>
                            Infection, bleeding, swelling, bruising, etc.
                        </li>
                        <li>
                            Blood clots.
                        </li>
                        <li>
                            Poor healing of the wound.
                        </li>
                        <li>
                            Nerve damage, that may cause neuropathy.
                        </li>
                        <li>
                            Unfavourable results, necessitating revisional surgery.
                        </li>
                    </ul>
                </div>
            </div>
            <div class="accordion-container">
                <a onclick="accordion_elm(this)" href="#" class="accordion-toggle">
                    <span>
                        4. When can you go for Cosmetic Surgery?
                    </span>
                    <span>
                        <i class="fa fa-chevron-down pull-right" aria-hidden="true"></i>
                    </span>
                </a>
                <div class="accordion-content">
                    <p>
                        Any age after 18 is suitable for cosmetic surgery in <?= $city ?>
                        if you are healthy and have good immunity to withstand the aftereffects
                        of the surgery. In rare cases, such as accidental injuries or
                        any anomaly by birth, the surgeons may perform cosmetic surgery
                        on infants or grown-up kids as well, but only after getting
                        consent from the parents. Boys and girls between 14-16 years
                        can also opt for cosmetic surgery. It is however advisable for
                        them to undergo any cosmetic surgery only out of compulsion and
                        not just to change appearance, as the surgery may lead to
                        complications later on in their life.
                    </p>
                </div>
            </div>
            <div class="accordion-container">
                <a onclick="accordion_elm(this)" href="#" class="accordion-toggle">
                    <span>
                        5. What are the things to do before Cosmetic Surgery?
                    </span>
                    <span>
                        <i class="fa fa-chevron-down pull-right" aria-hidden="true"></i>
                    </span>
                </a>
                <div class="accordion-content">
                    <ul>
                        <li>
                            Be well prepared for the surgery.
                        </li>
                        <li>
                            Discussion your concerns and doubts with the surgeon in <?= $city ?>.
                        </li>
                        <li>
                            Avoid the use of any lotion, moisturizer, or deodorant.
                        </li>
                        <li>
                            Try not to eat anything for at least 8 hours before the surgery.
                        </li>
                        <li>
                            Keep yourself hydrated with water and other fluids.
                        </li>
                        <li>
                            Discuss any medication with your surgeon that you undergoing currently
                            so that he could adjust their consumption accordingly.
                        </li>
                        <li>
                            Do not smoke or drink for at least 2 weeks before the surgery as they
                            could hamper the quick recovery.
                        </li>
                        <li>
                            Stop the use of any anti-inflammatory medicine, health supplement, etc.
                            as they could cause bleeding during the surgery.
                        </li>
                    </ul>
                </div>
            </div>
            <div class="accordion-container">
                <a onclick="accordion_elm(this)" href="#" class="accordion-toggle">
                    <span>
                        6. What to expect on the day of Cosmetic Surgery?
                    </span>
                    <span>
                        <i class="fa fa-chevron-down pull-right" aria-hidden="true"></i>
                    </span>
                </a>
                <div class="accordion-content">
                    <ul>
                        <li>
                            Arrive at the clinic in <?= $city ?> with a calm and composed mind.
                        </li>
                        <li>
                            Let all the negative vibes fly out of your mind
                        </li>
                        <li>
                            Cooperate with the medical staff in their routine check-ups.
                        </li>
                        <li>
                            The anesthesiologist may ask about your reaction to anesthesia
                            to adjust the dose accordingly.
                        </li>
                        <li>
                            You could expect the procedure to last for around 1-3 hours or
                            more depending on the type of surgery you are undergoing.
                        </li>
                        <li>
                            Again, subject to the surgery type, the recovery time may vary from a
                            few weeks to several months.
                        </li>
                        <li>
                            You could experience the initial results in the starting 2-3 weeks
                            after the surgery.
                        </li>
                        <li>
                            Make sure to abide by the instructions of the surgeon in <?= $city ?>
                            for quick healing.
                        </li>
                    </ul>
                </div>
            </div>
        </div>
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