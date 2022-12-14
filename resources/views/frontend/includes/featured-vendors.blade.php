@php
$featured_vendors = get_featured_vendors();
@endphp

@if(count($featured_vendors) > 0)
<section id="featured-vendors">
    <div class="container-fluid">
        <div class="row">
            <div class="col-xs-12 col-sm-12 common-heading light-heading text-center with-lines" data-aos="slide-right">
                <p class="shadow-text">Vendors</p>
                <p class="head">Featured Vendors</p>
            </div>
            <div class="col-xs-12 col-sm-12 card-listing-col">
                <div id="vendorsSlider" class="owl-carousel owl-theme common-slider">
                    @foreach($featured_vendors as $vendor)
                    @php
                    $vendorCity = getData('cities', 'id', $vendor->city_id);
                    $vendorType = getData('types', 'id', $vendor->type_id);
                    $reviews = getDataArray('vendor_reviews', 'vendor_id', $vendor->id);

                    $average = averageReview($reviews);

                    @endphp

                    <div data-aos="zoom-in-down">
                        <div class="common-card vendor-card vendor-card-col">
                            <?php if ($vendor->is_featured == 1) { ?>
                                <div class="ribbon featured-ribbon-top-left">
                                    <span>Featured</span>
                                </div>
                            <?php } ?>
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
                                    <img src="{{$vendor_profile_img}}" alt="image alt" class="img-fluid">
                                </div>
                                <div class="text-col">
                                    <!-- ffff -->
                                    <ul class="list-inline space-list">
                                        <li>
                                            <p class="title">{{$vendor->business_name}}</p>
                                            <p class="grey-text">
                                                <i class="fa fa-map-marker-alt" aria-hidden="true"></i>
                                                {{$vendorCity->name}}
                                            </p>
                                        </li>
                                        @if($average > 0)
                                        <li class="text-right">
                                            <span class="vendor-rating">
                                                <i class="fa fa-star"></i>
                                                {{number_format($average, 1)}}
                                            </span>
                                            <p>
                                                <a href="javascript:void(0)" class="grey-text">
                                                    {{count($reviews)}} Reviews
                                                </a>
                                            </p>
                                        </li>
                                        @endif
                                    </ul>
                                    @if($vendor->price)
                                    <ul class="list-inline vendor-card space-list v-center">
                                        <li>
                                            <p class="price"><span>Rs. {{$vendor->price}}</span></p>
                                        </li>
                                        <li class="text-right">
                                            <p class="grey-text" style="margin: 0px;">{{$vendor->label}}</p>
                                        </li>
                                    </ul>
                                    @endif
                                    <!-- ffff -->
                                    <!-- <p class="title">{{$vendor->business_name}}</p>
                                    @if($vendor->business_address)
                                    <p class="text">{{ \Illuminate\Support\Str::limit($vendor->business_address, 45, '...') }}</p>
                                    @endif
                                    <p class="price"><span>Rs.{{$vendor->price}}</span>&nbsp; {{ \Illuminate\Support\Str::limit($vendor->label, 30, '...') }}</p> -->
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
    $(document).ready(function() {
        $('#vendorsSlider').owlCarousel({
            loop: "<?= (count($featured_vendors) > 3) ? false : false ?>",
            margin: 20,
            nav: false,
            items: 3,
            dots: false,
            autoplay: false,
            responsive: {
                0: {
                    items: 1,
                    loop: "<?= (count($featured_vendors) > 1) ? false : false ?>",
                },
                767: {
                    items: 2,
                    loop: "<?= (count($featured_vendors) > 2) ? false : false ?>",
                },
                991: {
                    items: 3,
                    loop: "<?= (count($featured_vendors) > 3) ? false : false ?>",
                }
            }
        });
    })
</script>
@endpush