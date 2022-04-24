@extends('frontend.layouts.app')

@section('title') Quotations @endsection

@section('content')

<section id="breadcrumb-section">
    <div class="container-fluid">
        <div class="row">
            <div class="col-xs-12 col-sm-12">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="/">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">My Vendors</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</section>
<section class="profile-form-section">
    <div class="container-fluid">
        <div class="row">
            <div class="col-xs-12 col-sm-3">
                @include('frontend.users.menu')
            </div>
            <div class="col-xs-12 col-sm-9">
                <section class="fill-requirement rm">
                  <div class="d-container">
                    <h2 class="bold-24 charcoal">Fill your requirements to get best options in your budget</h2>
                    <a class="pink-button pink-style-1 rplc-stcky-btn-phn padlr-60 mart-32 marb-16 myven-fill-req" name="button" href="{{ route('frontend.quotation.type', Request::segment(2))}}">
                      <span>Fill Requirements</span>
                    </a>
                    <div class="steps">
                    <div class="stepping">
                      <span class="step-image"><i class="ic ic-ic-rm"></i></span>
                      <div class="step-text">
                        <span>Your WeddingBazaar Wedding Manager will be assigned</span>
                        <span class="step-mini-text">To assist you in choosing the best mehndi artist  and in negotiating with them.</span>
                      </div>
                    </div>
                    <div class="step-hr"></div>
                  <div class="stepping">
                      <span class="step-image"><i class="ic ic-ic-trusted-vendors"></i></span>
                    <div class="step-text">
                      <span>You will receive Mehndi Artist options</span>
                      <span class="step-mini-text">As per your requirements &amp; budget</span>
                    </div>
                  </div>
                  <div class="step-hr"></div>
                  <div class="stepping">
                      <span class="step-image"><i class="ic ic-ic-contact"></i></span>

                    <div class="step-text">
                      <span>Contact the Mehndi Artists &amp; receive quotations</span></div>
                  </div>
                  <div class="step-hr"></div>
                  <div class="stepping">

                      <span class="step-image"><i class="ic ic-ic-bestdeal"></i></span>

                    <div class="step-text">
                      <span>Finalize…and Relax!</span></div>
                  </div>
                </div>

                  </div>
                </section>
            </div>
        </div>
    </div>
</section>

@endsection

<style type="text/css">
    .fill-requirement {
  padding-top: 40px;
  padding-bottom: 24px;
  border-top: 1px solid #ebebeb;
}

.d-container {
  width: 90%;
  margin: auto;
}

.stepping {
  margin: 16px 0;
}
.step-hr {
  border-bottom: 1px solid #ebebeb;
}
.step-text {
  font-size: 1em;
  font-weight: normal;
  font-style: normal;
  font-stretch: normal;
  line-height: 1.5;
  letter-spacing: normal;
  display: block;
  padding: 6px 0 6px 48px;
}

.step-mini-text {
  padding-top: 8px;
  font-size: 12px;
  font-weight: normal;
  font-style: normal;
  font-stretch: normal;
  line-height: 1.5;
  letter-spacing: normal;
  display: block;
  color: var(--grey-text);
}
</style>


