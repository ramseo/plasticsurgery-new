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
            <?php if ($surgery_str == "rhinoplasty") { ?>
                <div class="col">
                    <div class="top-content">
                        <p>
                            <strong>Wish to accentuate your appearance with a reshaped nose?</strong>
                        </p>
                        <p>
                            Well, Rhinoplasty, commonly known as a ‘nose job’, will give you the desired results. Rhinoplasty is performed as an outpatient procedure and has a minimal recovery time. Performed through the able hands of the most experienced cosmetic surgeon in the city, the surgery will help you get back on your feet in no time with your sculpted nose..
                        </p>
                    </div>
                    <p class="identity">WHY CHOOSE DR FOR <?= $surgery_str ?> IN <?= $city ?>? </p>
                    <ul>
                        <li>One of the most experienced, popular and talented cosmetic surgeons for <?= $surgery_str ?> in India.</li>
                        <li>High success rates for <?= $surgery_str ?> surgeries and impressive patient experience.</li>
                        <li>Certified by the reputed national and international boards for cosmetic surgeons.</li>
                        <li>Expertise in performing different types of <?= $surgery_str ?> treatments like revision <?= $surgery_str ?>, reduction <?= $surgery_str ?>, augmentation <?= $surgery_str ?>, filler <?= $surgery_str ?>, reconstruction <?= $surgery_str ?> and post-traumatic <?= $surgery_str ?> based on the patient’s conditions and expectations.</li>
                    </ul>
                    <p class="identity">COST OF <?= $surgery_str ?> SURGERY IN <?= $city ?>
                    </p>
                    <p>
                        The cost of <?= $surgery_str ?> surgery depends on a lot of factors like the complexity of the operation and any additional requirements like nasal implants. In general, the cost of <?= $surgery_str ?> in <?= $city ?> starts from Rs. 50,000. This cost does not include the medicine fee, consultation fee and any other post-surgery needs. You can get a right estimate of the cost when you visit the surgeon at the clinic in <?= $city ?>.
                    </p>
                    <p class="identity">OUR SERVICES</p>
                    <p>
                        Enhance your overall facial appearance with <?= $surgery_str ?> from the best cosmetic surgery clinic in the city now! Experience the most attentive patient care in our state-of-the-art facilities supported by our accomplished cosmetic surgeon and experienced medical staff.
                    </p>
                </div>
            <?php } elseif ($surgery_str == "blepharoplasty") { ?>
                <div class="col">
                    <p class="identity">WHY CHOOSE DR FOR <?= $surgery_str ?> IN <?= $city ?>? </p>
                    <ul>
                        <li>The trusted and most experienced cosmetic surgeon in <?= $city ?> to perform <?= $surgery_str ?>.</li>
                        <li>Performs <?= $city ?> best cosmetic surgery by including laser treatments to get rid of the wrinkles around the eyes.</li>
                        <li>An expert cosmetic surgeon having certification from the reputed national and international boards for cosmetic surgeons.></li>
                        <li>Ability to make the eyes naturally youthful by considering the facial muscle structure, bone structure and the symmetry of the eyebrows.</li>
                    </ul>

                    <p class="identity">
                        COST OF <?= $surgery_str ?> SURGERY IN <?= $city ?>
                    </p>
                    <p>
                        The cost of <?= $surgery_str ?> surgery depends on the complexity of the surgery. If your eyelids are obstructing the vision, you may get the medical insurance cover. It is better to consult our cosmetic surgeon in <?= $city ?> if you want to know the treatment cost. Depending on your expectations and any other additional treatments needed, you can get an estimate.
                    </p>
                    <p class="identity">OUR SERVICES
                    </p>
                    <p>
                        The liveliness of your eyes has a great impact on your appearance. Due to age factors, you can end up with sagging eyelids and dark circles. <?= $surgery_str ?> is the right cosmetic treatment to turn you to a better-looking self. Schedule a consultation session with <?= $city ?> renowned cosmetic surgeon now.
                    </p>
                </div>
            <?php } elseif ($surgery_str == "facelift") {  ?>
                <div class="col">
                    <div class="top-content">
                        <p>
                            Has your face started showing wrinkles and fine lines too early? If yes, then <?= $surgery_str ?> surgery can restore your youthful skin back appreciably! <?= $surgery_str ?> surgery also called Rhytidectomy enhances the complete appearance of your face thereby reducing the wrinkles, fine lines and sagging.
                        </p>
                        <p>
                            Turn back the time and get your youthful looks back with <?= $surgery_str ?> surgery from <?= $city ?> top cosmetic surgeon!
                        </p>
                    </div>
                    <p class="identity">WHY CHOOSE DR FOR <?= $surgery_str ?> SURGERY IN <?= $city ?>? </p>
                    <ul>
                        <li>The most-skilled surgeon in <?= $city ?> for <?= $surgery_str ?> surgery.</li>
                        <li>Highly proficient at performing different <?= $surgery_str ?> procedures like standard <?= $surgery_str ?>, mini <?= $surgery_str ?>, mid <?= $surgery_str ?> and low <?= $surgery_str ?>.</li>
                        <li>Carries out customized <?= $surgery_str ?> procedure in combination with other non-invasive procedures for transformative results.</li>
                        <li>Provides complete support throughout the recovery phase.</li>
                        <li>A board-certified surgeon, having accreditations from many national organizations for cosmetic surgeries</li>
                    </ul>
                    <p class="identity">
                        COST OF <?= $surgery_str ?> SURGERY IN <?= $city ?>
                    </p>
                    <p>
                        The <?= $surgery_str ?> surgery cost varies depending on the extent of the <?= $surgery_str ?>. Some prefer to have a mini <?= $surgery_str ?> on their forehead or cheeks while others go for a total <?= $surgery_str ?>. Hence, the price of the treatment continues to differ. Usually, approaching a certified and experienced cosmetic surgeon in <?= $city ?> can cost you anywhere around 1,00,000 INR for <?= $surgery_str ?> surgery
                    </p>
                    <p class="identity">OUR SERVICES</p>
                    <p>
                        When nothing else works to restore your youthful look, <?= $surgery_str ?> is the best treatment. In just one procedure by our surgeon in <?= $city ?>, you can notice a visible difference in your facial appearance.
                    </p>
                </div>
            <?php } elseif ($surgery_str == "brow lift") { ?>
                <div class="col">
                    <div class="top-content">
                        <p>
                            Your forehead and the eyelids are among the first places to show the signs of ageing. A <?= $surgery_str ?> surgery targets this very area of your face, i.e. sagging skin between the eyebrows and the upper eyelids. You can minimize the appearance of the wrinkles on the eyelids. which will automatically result in a rejuvenated appearance. Since it’s an intricate surgery, it is vital to consult the best cosmetic surgeon in <?= $city ?>.
                        </p>
                    </div>
                    <p class="identity">
                        WHY CHOOSE DR FOR <?= $surgery_str ?> SURGERY IN <?= $city ?>?
                    </p>
                    <ul>
                        <li>One of the best cosmetic surgeons in <?= $city ?> having specialization in facial cosmetic procedures.</li>
                        <li>Ability to deliver amazing results by minimizing the signs of ageing near the brows.</li>
                        <li>Expert at combining the <?= $surgery_str ?> surgery with other facial treatments like facelift, fillers or botox.</li>
                        <li>One of the most experienced cosmetic surgeons in <?= $city ?>, certified by the top national associations of cosmetic surgeons.</li>
                    </ul>
                    <p class="identity">
                        COST OF <?= $surgery_str ?> SURGERY IN <?= $city ?>
                    </p>
                    <p>
                        When compared to other cosmetic procedures, <?= $surgery_str ?> surgery is a simple yet intricate treatment. The cost of the <?= $surgery_str ?> surgery starts from around 30,000 INR and can go up to 60,000 INR. Apart from this main surgery cost, you should also consider the price for medicines and other necessities for a smooth recovery.
                    </p>
                    <p>
                        To get an estimate for <?= $surgery_str ?> surgery, you can always consult our cosmetic surgeon in <?= $city ?>.
                    </p>
                    <p class="identity">OUR SERVICES</p>
                    <p>Tired looking eyes with wrinkles can make you look older. Minimize the sagging skin, wrinkles on your eyelids, and let your eyes look bright, big and beautiful. The customized <?= $surgery_str ?> surgery performed by <?= $city ?> best surgeon would be suitable in this context.</p>
                </div>
            <?php } elseif ($surgery_str == "neck lift") { ?>
                <div class="col">
                    <div class="top-content">
                        <p>
                            While we often give importance to our face, we sometimes forget to notice how our neck can also affect our overall appearance. Due to excessive weight gain or loss, hormonal imbalance, aging or any other genetic factors, you may have a sagging or drooping neck that could totally mess up how you look.
                        </p>
                        <p>
                            A <?= $surgery_str ?> aims at tightening the skin of the neck by removing the excess fat under the chin and creating well-contoured necklines. We recommend our top cosmetic surgeon in <?= $city ?> for <?= $surgery_str ?> procedures.
                        </p>
                    </div>
                    <p class="identity">WHY CHOOSE DR FOR <?= $surgery_str ?> IN <?= $city ?>? </p>
                    <ul>
                        <li>One of the best cosmetic surgeons in <?= $city ?> to perform <?= $surgery_str ?>.</li>
                        <li>Testimonials by numerous patients who are more than satisfied with the results.</li>
                        <li>Ability to help in restoring youthful appearance even as the ageing skin sets in.</li>
                        <li>A renowned cosmetic surgeon for facial aesthetics in <?= $city ?>, certified by several national and international boards for cosmetic surgeries.</li>
                    </ul>

                    <p class="identity">COST OF <?= $surgery_str ?> IN <?= $city ?>
                    </p>
                    <p>Many cosmetic surgeons in <?= $city ?> have varying prices for <?= $surgery_str ?> surgeries. This difference in cost depends on several factors including the treatment facilities, the surgeon’s skills and other additional recovery treatment prices. If you are considering a <?= $surgery_str ?> surgery, it is best to consult our cosmetic surgeon to get the realistic results.

                    </p>
                    <p class="identity">OUR SERVICE</p>
                    <p>
                        Is sagging skin on your neck disturbing your appearance? If yes, then you can go for a <?= $surgery_str ?> procedure by our certified surgeon in <?= $city ?> to get the transforming results!
                    </p>
                </div>
            <?php } elseif ($surgery_str == "chin surgery") { ?>
                <div class="col">
                    <div class="top-content">
                        <p>
                            Also called Genioplasty or Mentoplasty, <?= $surgery_str ?> is the process to augment or reduce the chin based on your facial features. The cosmetic surgeon can move the chin backward or forward and change its size by moving it up and above. Our expert cosmetic surgeon in <?= $city ?> helps to achieve a beautiful chin structure that remains symmetrical with your face.
                        </p>
                    </div>
                    <p class="identity">
                        WHY CHOOSE DR FOR <?= $surgery_str ?> IN <?= $city ?>? </p>
                    <ul>
                        <li>The top cosmetic surgeon in <?= $city ?> has performed numerous chin augmentation and reduction surgeries.</li>
                        <li>Expert at Sliding Genioplasty that refers to correcting longer and protruding chins.</li>
                        <li>Specialized in working with chin implants to achieve the desired looks.</li>
                        <li>A skilled cosmetic surgeon from <?= $city ?> who leaves barely visible scars that fade quickly over time.</li>
                        <li>A member of several national and international cosmetic surgery boards.</li>
                    </ul>
                    <p class="identity">
                        COST OF <?= $surgery_str ?> IN <?= $city ?>
                    </p>
                    <p>
                        For chin surgeries, the type of recommended treatment will be the main deciding factor for the cost. If you want to increase the size of the chin, then the cosmetic surgeon will usually recommend using chin implants. If you want to reduce the chin size, then Genioplasty is the best choice. So, the overall cost of <?= $surgery_str ?> depends on the customized surgery, the cosmetic surgeon in <?= $city ?> and the additional medicines.
                    </p>
                    <p class="identity">OUR SERVICES</p>
                    <p>Are you worried that your chin does not compliment the rest of your face? If yes, get the help of our cosmetic surgeon in <?= $city ?> to fix the issue and change the appearance of your face.</p>
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
                            <?= $surgery_str ?> surgery helps those with flat or hollow cheeks. It enables you to get bigger and plump looking cheeks. This surgery is also suitable for people wishing to restore their appearance after any accident or untoward incident.
                        </p>
                        <p>
                            Choose the most respected cosmetic surgeon in <?= $city ?> to enhance your cheeks naturally and improve your overall appearance.
                        </p>
                    </div>
                    <p class="identity">
                        WHY CHOOSE DR FOR <?= $surgery_str ?> IN <?= $city ?>? </p>
                    <ul>
                        <li>One of the most experienced facial cosmetic surgeons in <?= $city ?>.</li>
                        <li>Expertise in various forms of <?= $surgery_str ?> procedures like fat transfer and cheek implants.</li>
                        <li>Skilled at helping the patients decide the best size and type of cheek implants that compliments their facial features.</li>
                        <li>One of the top board-certified cosmetic surgeons in <?= $city ?> and the member of numerous cosmetic surgery associations in India.</li>
                    </ul>
                    <p class="identity">COST OF <?= $surgery_str ?> IN <?= $city ?>
                    </p>
                    <p>When it comes to the cost of <?= $surgery_str ?>, several variables determine the final amount. For instance, the type of <?= $surgery_str ?> procedure, the recovery medications and the cost of the cosmetic surgeon play a major role.
                    </p>
                    <p>Our cosmetic surgeon is one of the best in <?= $city ?> for <?= $surgery_str ?>. Schedule a consultation session and get the advice on the next action plan to increase the size and shape of your cheeks.</p>

                    <p class="identity">OUR SERVICES</p>
                    <p>Attaining those dreamy, bouncy cheeks is possible now! Go for <?= $surgery_str ?> surgery by our expert cosmetic surgeon in <?= $city ?> and observe the difference it makes to your life!</p>
                </div>
            <?php } elseif ($surgery_str == "lip augmentation") {  ?>
                <div class="col">
                    <div class="top-content">
                        <p>
                            <strong>
                                Do you want to have pouty lips like Angeline Jolie? You can now fulfill your wish with <?= $surgery_str ?>.
                            </strong>
                        </p>
                        <p>
                            The procedure of <?= $surgery_str ?> involves increasing the size of your lips, reshaping the contours and making the lips naturally fuller. If you are unhappy with the appearance of your lips or they have deformed due to any accidents, <?= $surgery_str ?> surgery is the best choice. Our cosmetic surgeon in <?= $city ?> has helped many people to get dreamy lips that look in perfect symmetry with the face.
                        </p>
                    </div>
                    <p class="identity">
                        WHY CHOOSE DR. PRITI SHUKLA FOR <?= $surgery_str ?> IN <?= $city ?>?
                    </p>
                    <ul>
                        <li>The most-skilled surgeon in <?= $city ?> for <?= $surgery_str ?> treatment.</li>
                        <li>Expertise in different types of <?= $surgery_str ?> including dermal fillers and lip implants.</li>
                        <li>Highly talented at customizing the symmetry of upper and lower lips</li>
                        <li>Dexterous at improving the overall shape and size in accordance with the facial features.</li>
                        <li>A renowned cosmetic surgeon certified by several national boards of plastic and cosmetic surgeries.</li>
                    </ul>
                    <p class="identity">
                        COST OF <?= $surgery_str ?> IN <?= $city ?>
                    </p>
                    <p>
                        The <?= $surgery_str ?> treatment cost varies depending on whether you opt for dermal fillers or lip implants. Usually, lip implants are permanent and cost more than dermal fillers. On an average, any <?= $surgery_str ?> procedure is around 50,000 INR, but it can vary depending on the cosmetic surgeon and the treatment. You can visit our cosmetic surgeon in <?= $city ?> to get all the cost details and treatment plans.
                    </p>
                    <p class="identity">OUR SERVICES</p>
                    <p>
                        Let your lips capture everyone’s attention! Make them look naturally fuller, beautiful and well contoured with <?= $surgery_str ?> treatment! Visit our surgeon’s clinic in <?= $city ?> to get your desired results now. Choose the best treatment from among dermal fillers, fat fillers and lip implants.
                    </p>
                </div>
            <?php } elseif ($surgery_str == "buccal fat removal") { ?>
                <div class="col">
                    <div class="top-content">
                        <p>
                            If you are bothered about your chubby cheeks, then <?= $surgery_str ?> is the way to go. This surgery can reduce the size of your cheeks, thereby transforming them to thinner and better-contoured features. <?= $surgery_str ?> is an extensive surgery that requires attention to detail and specialized techniques. It is only possible by an expert cosmetic surgeon in <?= $city ?> who knows the best treatment plan to deliver your expected results.
                        </p>
                    </div>
                    <p class="identity">
                        WHY CHOOSE DR FOR <?= $surgery_str ?> IN <?= $city ?>?
                    </p>
                    <ul>
                        <li>The most talented cosmetic surgeon in <?= $city ?> to perform <?= $surgery_str ?> with positive results.</li>
                        <li>Great attention to detail to ensure symmetry in both the cheeks while reducing its size.</li>
                        <li>Expert in performing <?= $surgery_str ?> procedure with the ability to achieve no visible scarring from the incisions.</li>
                        <li>A member of several national and international cosmetic surgery boards and most acclaimed cosmetic surgeon for facial procedures.</li>
                    </ul>
                    <p class="identity">
                        COST OF <?= $surgery_str ?> IN <?= $city ?>
                    </p>
                    <p>The starting cost for <?= $surgery_str ?> is 65,000 INR, which can increase depending on the location, cosmetic surgeon and the additional recovery costs. You can get a better estimate of the cost if you visit the cosmetic surgeon at the clinic in <?= $city ?>. After examining your condition, the surgeon will decide the course of treatment as well as the surgery costs.
                    </p>
                    <p class="identity">OUR SERVICES</p>
                    <p>
                        You do not need to bother any more if you have fat cheeks! Now, you can reduce your cheeks and have a thin facial contour with <?= $surgery_str ?> performed by <?= $city ?> best cosmetic surgeon.
                    </p>
                </div>
            <?php } elseif ($surgery_str == "ear-surgery") { ?>
                <div class="col">
                    <div class="top-content">
                        <p>
                            <?= $surgery_str ?> or Otoplasty is a cosmetic procedure to reshape the ear. This surgery addresses the structural defects like an abnormally large ear, disoriented ears due to accidents, ears that are unsymmetrical with each other or with the facial features, or protruding ears. You need a highly skilled cosmetic surgeon from <?= $city ?> to treat the defects and reshape the ear to look as natural as possible.
                        </p>
                    </div>
                    <p class="identity">WHY CHOOSE DR. PRITI SHUKLA FOR <?= $surgery_str ?> IN <?= $city ?>? </p>
                    <ul>
                        <li>One of the most accomplished cosmetic surgeons in <?= $city ?> for Otoplasty.</li>
                        <li>Ability to analyze and surgically correct the defect with as minimal possible incisions.</li>
                        <li>One of the leading experts in reconstructive cosmetic surgery in <?= $city ?>.</li>
                        <li>A member of numerous prestigious national and international boards of cosmetic surgeons and reconstructive surgeries.</li>
                    </ul>

                    <p class="identity">
                        COST OF <?= $surgery_str ?> IN <?= $city ?>
                    </p>
                    <p>Otoplasty is a detailed surgical procedure where customization is of great importance. You need a highly experienced cosmetic surgeon who is capable of tailoring the surgery to make the ears look natural. The expert should also be able to achieve symmetry with both the ears and ensure compatibility with the face. Therefore, the cost of the <?= $surgery_str ?> varies widely based on the cosmetic surgeon and the intensiveness of the surgery. You can schedule a consultation with the cosmetic surgeon in <?= $city ?> to know about the course of treatment and a fair estimate for the same.

                    </p>
                    <p class="identity">OUR SERVICES</p>
                    <p>Are you troubled with unnatural looking ears? Do not worry! Go for Otoplasty from our cosmetic surgeon in <?= $city ?> to reconstruct the ear shape and position. The professional will end up making your ears look as natural as possible.</p>
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
            <p class="small-heading m-auto">
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
            </p>
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