@php 
    $featured_vendors = get_featured_vendors();
@endphp

@if(count($featured_vendors) > 0)
    <section id="featured-vendors">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xs-12 col-sm-12 common-heading light-heading text-center with-lines">
                    <p class="shadow-text">Vendors</p>
                    <p class="head">Featured Vendors</p>
                </div>
                <div class="col-xs-12 col-sm-12 card-listing-col">
                    <div id="vendorsSlider" class="owl-carousel owl-theme common-slider">
                        @foreach($featured_vendors as $vendor)
                            @php 
                                $vendorCity = getData('cities', 'id', $vendor->city_id);
                                $vendorType = getData('types', 'id', $vendor->type_id); 
                            @endphp
                            <div>
                                <div class="common-card vendor-card">
                                    <a href="{{url('/') . '/' . $vendorType->slug . '/' . $vendorCity->slug . '/' . $vendor->slug }}">
                                        @php
                                            $vendor_profile_img = asset('img/default-vendor.jpg');
                                            if($vendor->image){
                                                if(file_exists( public_path().'/storage/vendor/profile/'. $vendor->image )){
                                                    $vendor_profile_img = asset('storage/vendor/profile/'.$vendor->image);
                                                }
                                            }
                                        @endphp
                                        <div class="img-col">
                                            <img src="{{$vendor_profile_img}}" alt="" class="img-fluid">
                                        </div>
                                        <div class="text-col">
                                            <p class="title">{{$vendor->business_name}}</p>
                                            @if($vendor->business_address)
                                            <p class="text">{{ \Illuminate\Support\Str::limit($vendor->business_address, 45, '...') }}</p>
                                            @endif
                                            <p class="price"><span>Rs.{{$vendor->price}}</span>&nbsp; {{ \Illuminate\Support\Str::limit($vendor->label, 30, '...') }}</p>
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
                items: 3,
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