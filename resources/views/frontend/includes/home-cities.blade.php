<div class="container-fluid location" style="background-color: #f8f8f8">
    <div class="container">
        <p class="title text-center">Find a Surgeon by City</p>
        <div class="row">
            <div class="col-lg-3 col-md-4">
                <div class="cities">
                    <a href="<?= url('hyderabad') ?>">
                        <h3>
                            <i class="fa fa-map-marker blink" aria-hidden="true"></i>&nbsp;
                            Hyderabad
                        </h3>
                    </a>
                </div>
            </div>
            <div class="col-lg-3 col-md-4">
                <div class="cities">
                    <a href="<?= url('pune') ?>">
                        <h3>
                            <i class="fa fa-map-marker blink" aria-hidden="true"></i>&nbsp;
                            Pune
                        </h3>
                    </a>
                </div>
            </div>
            <div class="col-lg-3 col-md-4">
                <div class="cities">
                    <a href="<?= url('bangalore') ?>">
                        <h3>
                            <i class="fa fa-map-marker blink" aria-hidden="true"></i>&nbsp;
                            Bangalore
                        </h3>
                    </a>
                </div>
            </div>
            <div class="col-lg-3 col-md-4">
                <div class="cities">
                    <a href="<?= url('mumbai') ?>">
                        <h3>
                            <i class="fa fa-map-marker blink" aria-hidden="true"></i>&nbsp;
                            Mumbai
                        </h3>
                    </a>
                </div>
            </div>
            <div class="col-lg-3 col-md-4">
                <div class="cities">
                    <a href="<?= url('chandigarh') ?>">
                        <h3>
                            <i class="fa fa-map-marker blink" aria-hidden="true"></i>&nbsp;
                            Chandigarh
                        </h3>
                    </a>
                </div>
            </div>
            <div class="col-lg-3 col-md-4">
                <div class="cities">
                    <a href="<?= url('delhi') ?>">
                        <h3>
                            <i class="fa fa-map-marker blink" aria-hidden="true"></i>&nbsp;
                            Delhi
                        </h3>
                    </a>
                </div>
            </div>
            <div class="col-lg-3 col-md-4">
                <div class="cities">
                    <a href="<?= url('lucknow') ?>">
                        <h3>
                            <i class="fa fa-map-marker blink" aria-hidden="true"></i>&nbsp;
                            Lucknow
                        </h3>
                    </a>
                </div>
            </div>
            <div class="col-lg-3 col-md-4">
                <div class="cities">
                    <a href="<?= url('thiruvananthapuram') ?>">
                        <h3>
                            <i class="fa fa-map-marker blink" aria-hidden="true"></i>&nbsp;
                            Trivandrum
                        </h3>
                    </a>
                </div>
            </div>
            <div class="col-lg-3 col-md-4">
                <div class="cities">
                    <a href="<?= url('surat') ?>">
                        <h3>
                            <i class="fa fa-map-marker blink" aria-hidden="true"></i>&nbsp;
                            Surat
                        </h3>
                    </a>
                </div>
            </div>
            <div class="col-lg-3 col-md-4">
                <div class="cities">
                    <a href="<?= url('bhubaneswar') ?>">
                        <h3>
                            <i class="fa fa-map-marker blink" aria-hidden="true"></i>&nbsp;
                            Bhubaneswar
                        </h3>
                    </a>
                </div>
            </div>
            <div class="col-lg-3 col-md-4">
                <div class="cities">
                    <a href="<?= url('ludhiana') ?>">
                        <h3>
                            <i class="fa fa-map-marker blink" aria-hidden="true"></i>&nbsp;
                            Ludhiana
                        </h3>
                    </a>
                </div>
            </div>
            <div class="col-lg-3 col-md-4">
                <div class="cities">
                    <a href="<?= url('join-as-plastic-surgeon') ?>">
                        <h3>
                            <i class="fa fa-map-marker blink" aria-hidden="true"></i>&nbsp;
                            List Your City
                        </h3>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container-fluid new-doctor">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-6">
                <div class="sr-heading">
                    <p>Find the Top Surgeons in India by Procedure</p>
                    <select class="form-control cutome_sele_bg" onchange="(this.options[this.selectedIndex].value? window.open(this.options[this.selectedIndex].value,'_blank'):'')">
                        <option selected="selected" value="">Select a Procedure</option>
                        <option value="<?= url('hair-transplant-surgeons') ?>">Hair Transplant</option>
                        <option value="<?= url('gynecomastia-surgeons') ?>">Gynecomastia</option>
                        <option value="<?= url('liposuction-surgeons') ?>">Liposuction</option>
                        <option value="<?= url('rhinoplasty-surgeons') ?>">Rhinoplasty</option>
                        <option value="<?= url('blepharoplasty-surgeons') ?>">Blepharoplasty</option>
                        <option value="<?= url('tummy-tuck-surgeons') ?>">Tummy Tuck</option>
                        <option value="<?= url('breast-surgery-surgeons') ?>">Breast Surgery</option>
                        <option value="<?= url('buccal-fat-removal-surgeons') ?>">Buccal Fat Removal</option>
                        <option value="<?= url('lip-augmentation-surgeons') ?>">Lip Augmentation</option>
                        <option value="<?= url('ear-surgery-surgeons') ?>">Ear Surgery</option>
                        <option value="<?= url('body-lift-surgeons') ?>">Body Lift</option>
                        <option value="<?= url('mommy-makeover-surgeons') ?>">Mommy Makeover</option>
                        <option value="<?= url('hymenoplasty-surgeons') ?>">Hymenoplasty</option>
                    </select>
                </div>
            </div>
            <div class="col-lg-6 col-md-6">
                <div class="sr-heading">
                    <p>Find the Cost of a Procedure</p>
                    <select class="form-control fm-cont cutome_sele_bg" onchange="(this.options[this.selectedIndex].value? window.open(this.options[this.selectedIndex].value,'_blank'):'')">
                        <option selected="selected" value="">Select a Procedure</option>
                        <option value="<?= url('hair-transplant-cost') ?>">Hair Transplant</option>
                        <option value="<?= url('gynecomastia-cost') ?>">Gynecomastia</option>
                        <option value="<?= url('liposuction-cost') ?>">Liposuction</option>
                        <option value="<?= url('rhinoplasty-cost') ?>">Rhinoplasty</option>
                        <option value="<?= url('blepharoplasty-cost') ?>">Blepharoplasty</option>
                        <option value="<?= url('tummy-tuck-cost') ?>">Tummy Tuck</option>
                        <option value="<?= url('breast-surgery-cost') ?>">Breast Surgery</option>
                        <option value="<?= url('buccal-fat-removal-cost') ?>">Buccal Fat Removal</option>
                        <option value="<?= url('lip-augmentation-cost') ?>">Lip Augmentation</option>
                        <option value="<?= url('ear-surgery-cost') ?>">Ear Surgery</option>
                        <option value="<?= url('body-lift-cost') ?>">Body Lift</option>
                        <option value="<?= url('mommy-makeover-cost') ?>">Mommy Makeover</option>
                        <option value="<?= url('hymenoplasty-cost') ?>">Hymenoplasty</option>
                    </select>
                </div>
            </div>
        </div>
    </div>
</div>