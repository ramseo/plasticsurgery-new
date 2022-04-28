@php 
    $featured_vendors = $more_vendors;
@endphp

@if(count($featured_vendors) > 0)

    <section id="more-vendors">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xs-12 col-sm-12 common-heading light-heading  with-lines">
                    <!-- <p class="shadow-text">Vendors</p> -->
                    <h3>More Vendors</h3>
                </div>
                <div class="col-xs-12 col-sm-12 card-listing-col">
                    <div id="vendorsSlider" class="owl-carousel owl-theme common-slider">
                        @foreach($featured_vendors as $fvendor)
                            @php 
                                $vendorCity = getData('cities', 'id', $fvendor->city_id);
                                $vendorType = getData('types', 'id', $fvendor->type_id); 
                            @endphp
                            <div>
                                <div class="common-card vendor-card">
                                    <a href="{{url('/') . '/' . $vendorType->slug . '/' . $vendorCity->slug . '/' . $fvendor->slug }}">
                                        @php
                                            $vendor_profile_img = asset('img/default-vendor.jpg');
                                            if($fvendor->image){
                                                if(file_exists( public_path().'/storage/vendor/profile/'. $fvendor->image )){
                                                    $vendor_profile_img = asset('storage/vendor/profile/'.$fvendor->image);
                                                }
                                            }
                                        @endphp
                                        <div class="img-coll">
                                            <img src="{{$vendor_profile_img}}" alt="" style="height: 200px;" class="img-fluid">
                                        </div>
                                        <div class="text-col">
                                            <p class="title">{{$fvendor->business_name}}</p>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
@endif

@push('after-scripts')
    <script>
        $(document).ready(function () {
            $('#vendorsSlider').owlCarousel({
                loop: false,
                margin: 20,
                nav: true,
                items: 4,
                dots: false,
                autoplay: 4000,
                responsive: {
                    0: {
                        items: 1
                    },
                    767: {
                        items: 2
                    },
                    991: {
                        items: 3
                    }
                }
            });
        })
    </script>
@endpush