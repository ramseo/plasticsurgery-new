<div class="container-fluid" style="background-color:#f4d8cd">
    <div class="container banner">
        <div class="row">
            <div class="col-lg-6 col-md-12">
                <div class="trans">
                    <h2>Your Ultimate Advisor for Cosmetic Surgery</h2>
                    <p>
                        From understanding the cosmetic procedures to finding the
                        best cosmetic surgeons, we help you at every step.
                    </p>
                    <div class="row pt-3 mob-home-btn-cls">
                        <div class="col-md-5">
                            <button type="button" class="btn" style="background-color:#f3413a; color:#fff"><a href="procedures">Explore Procedures</a></button>
                        </div>
                        <div class="col-md-5 pb-5">
                            <button type="button" class="btn bto"><a href="surgeons">Find Doctors</a></button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-12 pt-5 pb-3">
                <img src="<?= asset('img/cosmeticsurgery-main.png') ?>" style="width: 100%;">
            </div>
        </div>
    </div>
</div>

@push ("after-scripts")
<script>
    $(document).ready(function() {
        $('#searchForm').submit(function(e) {
            e.preventDefault();
            var type = $('#typeField').val();
            var city = $('#cityField').val();
            var typeUrl = type + '/' + city;
            window.location.href = typeUrl;
            console.log(typeUrl);
        });
    });
</script>
@endpush