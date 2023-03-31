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
                    <div class="top-content">
                        <p>
                            <strong>
                                Is your appearance affected by the droopy eyelids?
                            </strong>
                        </p>
                        <p>
                            While healthy eyes have the tendency to enhance your entire appearance, sagging upper eyelids or dark circles can make you look dull. Blepharoplasty is an ideal cosmetic surgery for aesthetically correcting droopy or sagging upper eyelids and removing the unwanted skin on the lower eyelids. When performed by our expert cosmetic surgeon in Pune, your eyes will look fresh, bright and youthful.
                        </p>
                    </div>
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
                        WHY CHOOSE DR FOR <?= $surgery_str ?> IN <?= $city ?>?
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
            <?php } elseif ($surgery_str == "ear surgery") { ?>
                <div class="col">
                    <div class="top-content">
                        <p>
                            <?= $surgery_str ?> or Otoplasty is a cosmetic procedure to reshape the ear. This surgery addresses the structural defects like an abnormally large ear, disoriented ears due to accidents, ears that are unsymmetrical with each other or with the facial features, or protruding ears. You need a highly skilled cosmetic surgeon from <?= $city ?> to treat the defects and reshape the ear to look as natural as possible.
                        </p>
                    </div>
                    <p class="identity">WHY CHOOSE DR FOR <?= $surgery_str ?> IN <?= $city ?>? </p>
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
            <?php } elseif ($surgery_str == "breast augmentation") { ?>
                <div class="col">
                    <div class="top-content">
                        <p>
                            If you feel the size of your breasts to be smaller than usual, you can go for <?= $surgery_str ?> surgery. The qualified cosmetic surgeon from <?= $city ?> will help you to realize your required size of breasts. You can achieve fuller, bigger and rounder breasts through <?= $surgery_str ?> procedure.
                        </p>
                    </div>
                    <p class="identity">
                        WHY CHOOSE DR FOR <?= $surgery_str ?> IN <?= $city ?>? </p>
                    <ul>
                        <li>The trusted cosmetic surgeon in <?= $city ?> is most qualified to perform <?= $surgery_str ?> surgery.</li>
                        <li>Holds many years of experience in performing <?= $surgery_str ?> procedures using the methods of fat transfer or breast implants.</li>
                        <li>Has worked with both saline-filled breast implants and silicone gel-filled implants.</li>
                        <li>Highly skilled at choosing the right size of the implant and positioning it at the perfect location that gives the impression of naturally fuller breasts.</li>
                        <li>Has the ability to perform touch-ups to maintain the size and look of the breasts.</li>
                        <li>A certified cosmetic surgeon in <?= $city ?> by many prestigious national and international associations for cosmetic surgeons.</li>
                    </ul>
                    <p class="identity">
                        COST OF <?= $surgery_str ?> SURGERY IN <?= $city ?>
                    </p>
                    <p>
                        When it comes to <?= $surgery_str ?>, the type of material you prefer to use – fat or implant – will influence the cost of the surgery. Usually, the cost of the procedure is around 1,00,000 INR and the cost of the implants is between 50,000 INR to 1,00,000 INR. Apart from these costs, the medication, consultations, mammograms and check-ups will also factor into the total cost. Visit the cosmetic surgeon in <?= $city ?> for a good estimate.
                    </p>
                    <p class="identity">OUR SERVICES</p>
                    <p>
                        Choose from the different options for augmentation like fat transfers, silicone implants or saline implants. Let the best cosmetic surgeon in <?= $city ?> increase your breast size and still make it look natural.
                    </p>
                </div>
            <?php } elseif ($surgery_str == "breast lift") { ?>
                <div class="col">
                    <div class="top-content">
                        <p>
                            If you are feeling insecure about how your breasts droop, then a simple <?= $surgery_str ?> will improve your complete physical look. Mastopexy, also known as <?= $surgery_str ?>, is a cosmetic surgery where the surgeon raises the location of nipples and removes sagging tissues to create an impression of tightened and fuller breasts. Our cosmetic surgeon is one of the best in <?= $city ?> to create amazing results with <?= $surgery_str ?> surgery.
                        </p>
                    </div>
                    <p class="identity">
                        WHY CHOOSE DR FOR <?= $surgery_str ?> IN <?= $city ?>?
                    </p>
                    <ul>
                        <li>Proven expertise to help patients fix the issue of sagging breasts.</li>
                        <li>The top cosmetic surgeon in <?= $city ?> with full practical knowledge of breast-related surgeries.</li>
                        <li>Ability to customize the <?= $surgery_str ?> surgery based on just what the patient wants.</li>
                        <li>A reputed cosmetic surgeon from <?= $city ?> with memberships from several national and international boards of cosmetic surgeries.</li>
                    </ul>
                    <p class="identity">
                        COST OF <?= $surgery_str ?> SURGERY IN <?= $city ?></p>
                    <p>
                        While the main reason for the Mastopexy is to ‘lift’ the breasts, many also opt to get reshaped or rounder breasts. So, if you are looking for such accompanying results, then the total cost of the <?= $surgery_str ?> surgery will differ. It is important to find the right cosmetic surgeon from <?= $city ?> who can advise you on a safer course of treatment.
                    </p>
                    <p class="identity">OUR SERVICES</p>
                    <p>
                        Due to aging, pregnancy or weight gain, breasts tend to sag which spoils the overall appearance even when you wear the best clothes. A <?= $surgery_str ?> surgery will help you by lifting and reshaping your breasts. Visit our cosmetic surgeon in <?= $city ?> to know more about <?= $surgery_str ?> surgery.
                    </p>
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