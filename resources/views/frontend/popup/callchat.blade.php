<div class="callPopup ">
  <div class="cpp-overlay"></div>
  <div class="cppBody">
    <div class="cppSlide active" id="call-slide">
      <div class="cppClose r-50px phone-hide closecall-drawer back-g">
        <i class="fa fa-times"></i>
      </div>
      <div class="cpp-slide-body cppS-initial">
        <div class="padlr-12 pad-12 back-g brdr r-8 marb-16 marr-16 mmlr-0 upCnotice" style="border-color: rgb(250, 74, 111); display: none;" id="vndr-prfl-ld-cll-ntc">
          <p class="normal-12 light">This photographer has now been added to your ‘My Vendors’ &amp; we have also sent photographer's contact details to your email &amp; phone.</p>
        </div>
        <h3 class="bold-24">Call/Chat</h3>
        <p class="normal-12 padt-8 light" id="vndr-cll-popup-bsns-name">{{$vendor_details->business_name}}</p>
        <div class="mart-12 marb-8 brdr r-8 padlr-12" style="padding:10px 12px; border-color:#be8a1c;background: #fff9ee;">
          {!! setting('call_chat_title') !!}
        </div>
        <div id="vndr-call-popup-phone-no">
          <a href="tel:{{$vendorUser->mobile}}" class="cpp-call">
            <i class="fa fa-phone green marr-10" aria-hidden="true">  </i> 
            <span class="normal-16 bold green"> {{ $vendoruser->mobile}}</span>
          </a>
        </div>
        <br>
        <div>
          {!! setting('call_chat_after_call') !!}
        </div>
        <span class="call-input-fields cpp-after-call"  review="1" id="call-good" data-value="Good" data-field="#call_status" data-step="step1">
          <span class="normal-16">Good</span>
          <i class="fa fa-chevron-right padl-12"></i>
        </span>
        <br>
        <span class="call-input-fields cpp-after-call" review="2" id="call-bad" data-value="Bad" data-field="#call_status" data-step="step1">
          <span class="normal-16">Bad</span>
          <i class="fa fa-chevron-right padl-12"></i>
        </span>
        <br>
        <span class="call-input-fields cpp-after-call" review="3" id="call-not-connect" data-value="Couldn't Connect" data-field="#call_status" data-step="step1">
          <span class="normal-16">Couldn't Connect</span>
          <i class="fa fa-chevron-right padl-12"></i>
        </span>
        <br>
        <span class="call-input-fields cpp-after-call" review="4" data-value="Asked to connect later" data-field="#call_status" data-step="step1">
          <span class="normal-16">Asked to connect later</span>
          <i class="fa fa-chevron-right padl-12"></i>
        </span>
      </div>
    </div>

    <div class="cppSlide" id="call-not-connect-slide">
      <div class="cpp-slide-body">
        <p class="bold-24">Why you weren't able to connect?</p>
        <p class="normal-12 padt-8 light">Yedevi Studios</p>
        <span class="call-input-fields cpp-after-call" data-value="Didn't pick up" data-field="#call_status" data-step="step2">
          <span class="normal-16">Didn't pick up</span>
          <i class="fa fa-chevron-right padl-12"></i>
        </span>
        <br>
        <span class="call-input-fields cpp-after-call" data-value="Not reachable" data-field="#call_status" data-step="step2">
          <span class="normal-16">Not reachable</span>
          <i class="fa fa-chevron-right padl-12"></i>
        </span>
        <br>
        <span class="call-input-fields cpp-after-call" data-value="Invalid Phone no." data-field="#call_status" data-step="step2">
          <span class="normal-16">Invalid Phone no.</span>
          <i class="fa fa-chevron-right padl-12"></i>
        </span>
        <br>
        <span class="cpp-after-call call-other" data-other="call-not-connect-slide">
          <span class="normal-16">Other</span>
          <i class="fa fa-chevron-right padl-12"></i>
        </span>
      </div>
      <div class="cpp-stick">
        <div class="cppBack r-50px" id="call-not-connect-back">
          <i class="fa fa-chevron-left"></i>
        </div>
      </div>
    </div>

    <div class="cppSlide" id="call-good-slide">
      <div class="cpp-slide-body">
        <p class="bold-24">Great!<br>
          What's Next?</p>
        <p class="normal-12 padt-8 light">Yedevi Studios</p>
        <span class="call-input-fields cpp-after-call" data-value="Planning to meet the vendor" data-field="#call_status" data-step="step2">
          <span class="normal-16">Planning to meet the vendor</span>
          <i class="fa fa-chevron-right padl-12"></i>
        </span>
        <br>
        <span class="call-input-fields cpp-after-call" data-value="Will connect again after sometime" data-field="#call_status" data-step="step2">
          <span class="normal-16">Will connect again after sometime</span>
          <i class="fa fa-chevron-right padl-12"></i>
        </span>
        <br>
        <span class="call-input-fields cpp-after-call" data-value="Awaiting more info. from vendor" data-field="#call_status" data-step="step2">
          <span class="normal-16">Awaiting more info. from vendor</span>
          <i class="fa fa-chevron-right padl-12"></i>
        </span>
        <br>
        <span class="call-input-fields cpp-after-call" data-value="Will book this vendor" data-field="#call_status" data-step="step2">
          <span class="normal-16">Will book this vendor</span>
          <i class="ic ic-chevron-right padl-12"></i>
        </span>
        <br>
        <span class="cpp-after-call call-other" data-other="call-good-slide">
          <span class="normal-16">Other</span>
          <i class="ic ic-chevron-right padl-12"></i>
        </span>
      </div>
      <div class="cpp-stick">
        <div class="cppBack r-50px" id="call-good-back">
          <i class="ic ic-chevron-left"></i>
        </div>
      </div>
    </div>

    <!-- checkbox -->
    <div class="cppSlide" id="call-bad-slide">
      <div class="cpp-slide-body">
        <p class="bold-24 padb-8">We're sorry to hear that :(<br>
          Why was it bad?</p>
        <label class="cpp-checkbox">Difference in price
          <input type="checkbox" name="cpp-issue" class="call-option-fields" data-value="Difference in price" data-field="#call_status" data-step="step2" hidden="">
          <span class="cpp-checkmark"></span>
        </label>
        <br>
        <label class="cpp-checkbox">Unavailable on my dates
          <input type="checkbox" name="cpp-issue" class="call-option-fields" data-value="Unavailable on my dates" data-field="#call_status" data-step="step2" hidden="">
          <span class="cpp-checkmark"></span>
        </label>
        <br>
        <label class="cpp-checkbox">Unprofessional behaviour
          <input type="checkbox" name="cpp-issue" class="call-option-fields" data-value="Unprofessional behaviour" data-field="#call_status" data-step="step2" hidden="">
          <span class="cpp-checkmark"></span>
        </label>
        <br>
        <label class="cpp-checkbox">Bad quality
          <input type="checkbox" name="cpp-issue" class="call-option-fields" data-value="Bad quality" data-field="#call_status" data-step="step2" hidden="">
          <span class="cpp-checkmark"></span>
        </label>
        <br>
        <span class="cpp-after-call call-other" id="call-bad-option-other" data-other="call-bad-slide">
          <span class="normal-16">Other</span>
          <i class="ic ic-chevron-right padl-12"></i>
        </span>
      </div>
      <div class="d-flex cpp-stick">
        <div class="cppBack r-50px marr-8" id="call-bad-back">
          <i class="ic ic-chevron-left"></i>
        </div>
        <button class=" w-100 pink-button pink-style-1" id="call-option-submit-button" style="display: none;">
          <span>Submit</span>
        </button>
      </div>
    </div>

    <!-- input field -->
    <div class="cppSlide" id="call-feedback-slide">
      <div class="cpp-slide-body cppS-feedbackin">
        <p class="bold-24 padb-8">Your Feedback</p>
        <form class="call-feedback-form" novalidate="novalidate">
          <div class="d-flex align-items-end">
            <div class="field w-100">
              <input type="text" name="feedback" id="call-feedback-input" placeholder="Feedback" autofocus="">
              <label for="call-feedback-input">Feedback</label>
            </div>
            <button class="marl-32 pink-style-1 pink-button feedback-sbm" id="call-feedback-button" data-field="#call_status" data-step="step2">
                <i class="ic ic-check"></i>
            </button>
          </div>
          <div class="form-error"></div>
        </form>
      </div>
      <div class="d-flex cpp-stick">
        <div class="cppBack r-50px marr-8" id="call-feed-back">
          <i class="ic ic-chevron-left"></i>
        </div>
      </div>
    </div>

    <!-- Feedbacks -->
    <div class="cppSlide" id="call-thank-you-slide">
      <div class="cppClose r-50px phone-hide closecall-drawer back-g">
        <i class="fa fa-times"></i>
      </div>
      <div class="cpp-slide-body cppS-feedback mcenter">
        <div class="cppFeedback">
          <i class="ic ic-ic-help-support"></i>
        </div>
        <h4 class="bold-24 padt-24">Thanks for your feedback</h4>
        <!-- <p class="normal-12 padt-8 light">We have notified the photographer that you were trying to connect with them.</p> -->
      </div>
      <div class="cpp-stick">
       <!--  <a class="pink-style-1 pink-button padlr-40 closecall-drawer" id="call-thank-you-button" href="#">
          <span>OK</span>
        </a> -->
      </div>
    </div>
  </div>
</div>

<style type="text/css">
  .call-input-fields span , .call-input-fields i {
    font-size: 18px;
    color: #EC413F;
  }
.marr-10{
  margin-right: 10px;
}
.marl-10{
  margin-left: 10px;
}
.padl-12{
  padding-left: 12px;
}
.green {
  color: green;
 }
.callPopup, .chatPopup {
    position: fixed;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    z-index: 999;
    display: none;
}
.callPopup.active, .chatPopup.active {
    display: block;
}
.cpp-overlay {
    background: rgba(0, 0, 0, 0.5);
    position: absolute;
    top: 0;
    bottom: 0;
    left: 0;
    right: 0;
}
.cppBody {
    position: absolute;
    right: 0;
    top: 0;
    bottom: 0;
    background: white;
    width: 540px;
    box-shadow: 0 1px 6px 0 rgba(0, 0, 0, 0.2);
}
.cppSlide {
    display: none;
}
.cppSlide.active {
    transition: 0.4s all;
    display: block;
    opacity: 1;
}
.cppSlide.cppS-anim {
    transition: 0s all;
    opacity: 0.6;
}
.cpp-slide-body {
    overflow-y: auto;
    height: calc(100vh - 64px);
    padding: 60px 60px 80px;
}
a.cpp-call, .cpp-call {
    margin-top: 16px;
    display: flex;
    align-items: center;
    outline: none;
    position: relative;
    color: unset;
}
.cpp-call i, .cpp-after-call i {
    font-size: 20px;
}
.cpp-call:hover {
    text-decoration: none;
    color: var(--charcoal);
}
a.cpp-after-call, .cpp-after-call, .cpp-checkbox {
    height: 40px;
    display: inline-flex;
    align-items: center;
    padding-right: 16px;
    border-radius: 50px;
    box-shadow: 0 2px 6px 0 rgba(0, 0, 0, 0.12);
    background-color: #ffffff;
    text-decoration: none;
    margin-top: 16px;
}
a.cpp-after-call, .cpp-after-call {
    padding-left: 16px;
    color: var(--brand);
}
.cpp-after-call {
    cursor: pointer;
}
.cpp-checkbox {
    padding-left: 52px;
    position: relative;
    cursor: pointer;
}
.cpp-checkbox.active {
    color: var(--brand);
}
.cpp-checkmark::before {
    position: absolute;
    left: 16px;
    top: 50%;
    transform: translateY(-50%);
    content: '\e90b';
    font-family: 'shaadisaga_2019_icons'}
.cpp-checkbox input:checked ~ .cpp-checkmark::before {
    content: '\e904';
    color: var(--brand);
}
.cppBack, .cppClose {
    height: 40px;
    width: 40px;
    display: inline-flex;
    justify-content: center;
    align-items: center;
    cursor: pointer;
    background: var(--img-back);
}
.cppBack i, .cppClose {
    font-size: 24px;
}
.cppBack i, .cppClose i {
    color: var(--grey-text);
    font-size: 20px;
}
.cppClose {
    position: absolute;
    top: 16px;
    right: 24px;
    transition: 0.1s all;
}
.cppClose.close-anim {
    transform: scale(1.2);
}
.cppBack {
    min-width: 48px;
    width: 48px;
    height: 48px;
}
.cppFeedback {
    border: 1px solid var(--brand);
    border-radius: 50px;
    height: 80px;
    width: 80px;
    display: inline-flex;
    justify-content: center;
    align-items: center;
}
.cppFeedback i {
    font-size: 60px;
    color: var(--brand);
}
.pink-button.feedback-sbm {
    max-width: 48px;
    min-width: 48px;
    font-size: 20px;
    color: white;
    padding: 0;
    justify-content: center;
    display: flex;
    align-items: center;
}
.cpp-stick {
    padding: 8px 60px;
    position: absolute;
    left: 0;
    right: 0;
    bottom: 0;
    background: white;
    z-index: 1;
    border-top: 1px solid #eee;
}
.cppS-initial {
    height: 100vh;
}
.upCnotice {
    margin-top: -40px;
}
@media only screen and (max-width: 600px) {
    .cppBody {
    top: unset;
    border-radius: 16px 16px 0 0;
    bottom: 0;
    width: 100%}
.cpp-slide-body {
    padding: 16px 16px 32px;
    height: calc(75vh - 56px);
    margin-bottom: 56px;
}
.cpp-call i, .cpp-after-call i {
    font-size: 18px;
}
.cpp-call::after {
    content: '\e965';
    font-family: 'shaadisaga_2019_icons';
    position: absolute;
    top: 50%;
    right: 0px;
    transform: translateY(-50%);
    font-size: 18px;
    color: var(--grey-text);
}
.cppBack {
    width: 40px;
    height: 40px;
    min-width: 40px;
}
.cppS-initial {
    height: 70vh;
    margin-bottom: 0;
}
.cpp-stick {
    padding: 8px 16px;
}
.pink-button.feedback-sbm {
    max-width: 40px;
    min-width: 40px;
}
.upCnotice {
    margin-top: unset;
}
}.shake-me {
    animation: shake 0.82s cubic-bezier(0.36,  0.07,  0.19,  0.97) both;
    transform: translate3d(0,  0,  0);
    backface-visibility: hidden;
    perspective: 1000px;
}
@keyframes shake {
    10%,  90% {
    transform: translate3d(-1px,  0,  0);
}
20%,  80% {
    transform: translate3d(2px,  0,  0);
}
30%,  50%,  70% {
    transform: translate3d(-4px,  0,  0);
}
40%,  60% {
    transform: translate3d(4px,  0,  0);
}
}
</style>