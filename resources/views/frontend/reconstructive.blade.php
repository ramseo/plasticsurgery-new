@extends('frontend.layouts.app')

@section('title') {{$$module_name_singular->meta_title}} @endsection

@section('site-meta-tags')
<meta name="description" content="{{ $$module_name_singular->meta_description ? $$module_name_singular->meta_description : setting('meta_keyword') }}">
@endsection


@section('content')

<div class="header-space"></div>
<div class="cit">
    <div class="container">
        <p>
            <?= $$module_name_singular->name ?>
        </p>
    </div>
</div>

<section id="boxes" class="home-section paddingtop-120">
    <div class="container">
        <div class="row">
            <div class="section-heading padding_t_b">

                <div class="col-md-12">
                    <h2> List of Procedures </h2>
                    <div class="row right_dfs">
                        <div class="col-md-6 col-xs-12">
                            <ul class="list-unstyled">
                                <li> <a href="https://plasticsurgery.in/breast-reconstruction"> <strong> Breast Reconstruction </strong> <small>Know Your Post-Mastectomy Options</small> </a> </li>
                            </ul>
                            <ul class="list-unstyled">
                                <li> <a href="https://plasticsurgery.in/breast-reduction"> <strong> Breast Reduction </strong> <small>Reduction Mammaplasty</small> </a> </li>
                            </ul>
                            <ul class="list-unstyled">
                                <li> <a href="https://plasticsurgery.in/cleft-lip-and-palate-repair"> <strong> Cleft Lip and Palate Repair </strong> <small>Correcting Abnormal Development</small> </a> </li>
                            </ul>
                            <ul class="list-unstyled">
                                <li> <a href="https://plasticsurgery.in/congenital-anomalies "> <strong> Congenital Anomalies </strong> <small>Surgical Correction of Birth Anomalies</small> </a> </li>
                            </ul>
                            <ul class="list-unstyled">
                                <li> <a href="https://plasticsurgery.in/craniosynostosis-surgery"> <strong> Craniosynostosis Surgery </strong> <small>Head Reshaping</small> </a> </li>
                            </ul>
                            <ul class="list-unstyled">
                                <li> <a href="https://plasticsurgery.in/gender-confirmation-surgeries"> <strong> Gender Confirmation Surgeries </strong> <small>Transfeminine / Transmasculine</small> </a> </li>
                            </ul>
                            <ul class="list-unstyled">
                                <li> <a href="https://plasticsurgery.in/giant-nevi-removal"> <strong> Giant Nevi Removal </strong> <small>Congenital Nevi Surgery</small> </a> </li>
                            </ul>
                            <ul class="list-unstyled">
                                <li> <a href="https://plasticsurgery.in/hand-surgery"> <strong> Hand Surgery </strong> <small>Improve Strength, Function and Flexibility</small> </a> </li>
                            </ul>
                            <ul class="list-unstyled">
                                <li> <a href="https://plasticsurgery.in/lymphedema-treatment"> <strong> Lymphedema Treatment </strong> <small>Surgical Options</small> </a> </li>
                            </ul>
                        </div>
                        <div class="col-md-6 col-xs-12">
                            <ul class="list-unstyled">
                                <li> <a href="https://plasticsurgery.in/microsurgery"> <strong> Microsurgery </strong> <small>Microscope-Assisted Operations</small> </a> </li>
                            </ul>
                            <ul class="list-unstyled">
                                <li> <a href="https://plasticsurgery.in/migraine-surgery"> <strong> Migraine Surgery </strong> <small>Chronic Headache Relief</small> </a> </li>
                            </ul>
                            <ul class="list-unstyled">
                                <li> <a href="https://plasticsurgery.in/orthognathic-surgery"> <strong> Orthognathic Surgery </strong> <small>Jaw Straightening</small> </a> </li>
                            </ul>
                            <ul class="list-unstyled">
                                <li> <a href="https://plasticsurgery.in/panniculectomy"> <strong> Panniculectomy </strong> <small>Body Contouring</small> </a> </li>
                            </ul>
                            <ul class="list-unstyled">
                                <li> <a href="https://plasticsurgery.in/regenerative-medicine"> <strong> Regenerative Medicine </strong> <small>The Future of Plastic Surgery</small> </a> </li>
                            </ul>
                            <ul class="list-unstyled">
                                <li> <a href="https://plasticsurgery.in/scar-revision"> <strong> Scar Revision </strong> <small>Minimize a Scar</small> </a> </li>
                            </ul>
                            <ul class="list-unstyled">
                                <li> <a href="https://plasticsurgery.in/septoplasty"> <strong> Septoplasty </strong> <small>Deviated Septum Correction</small> </a> </li>
                            </ul>
                            <ul class="list-unstyled">
                                <li> <a href="https://plasticsurgery.in/skin-cancer-removal"> <strong> Skin Cancer Removal </strong> <small>Reconstruction After Skin Cancer</small> </a> </li>
                            </ul>
                            <ul class="list-unstyled">
                                <li> <a href="https://plasticsurgery.in/tissue-expansion"> <strong> Tissue Expansion </strong> <small>Growing Extra Skin for Reconstruction</small> </a> </li>
                            </ul>
                        </div>
                        <p></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
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