@php
    $similar_vendors = get_similar_vendors($vendor_details->type_id);
@endphp

@if($similar_vendors)
    <section id="photographers-section">
        <div class="container-fluid">
            <div class="col-xs-12 common-left-heading">
                <p class="head">Similar {{$type->name}}</p>
                <p class="grey-text">These are {{$type->name}} similar to '{{$vendor_details->business_name}}'</p>
            </div>
            <div class="row vendor-list-row">
                @foreach($similar_vendors as $similar_vendor)
                    @php 
                        $vendorCity = getData('cities', 'id', $similar_vendor->city_id);
                        $vendorType = getData('types', 'id', $similar_vendor->type_id); 

                        $reviews = getDataArray('vendor_reviews', 'vendor_id', $similar_vendor->id);
                        $avg = array_column($reviews->toArray(), 'rating');
                        $a = array_filter($avg);
                        $average = round(array_sum($a)/count($a));
                    @endphp
                    <div class="col-xs-12 col-sm-4">
                        <div class="common-card vendor-card-col">
                            <a href="{{url('/') . '/' . $vendorType->slug . '/' . $vendorCity->slug . '/' . $similar_vendor->slug }}">
                                <div class="img-col">
                                    <img src="images/real-story.jpg" alt="" class="img-fluid">
                                </div>
                                <div class="text-col">
                                    <ul class="list-inline space-list">
                                        <li>
                                            <p class="title">{{$similar_vendor->business_name}}</p>
                                            <p class="grey-text">{{$vendorCity->name}}</p>
                                        </li>
                                        @if($average > 0)
                                            <li class="text-right">
                                                <span class="vendor-rating"><i class="fa fa-star"></i> {{number_format($average, 1)}}</span>
                                                <p><a href="#" class="grey-text">{{count($reviews)}} Reviews</a></p>
                                            </li>
                                        @endif
                                    </ul>
                                    <ul class="list-inline vendor-card space-list v-center">
                                        <li>
                                            <p class="price"><span>Rs. 50,000</span></p>
                                        </li>
                                        <li class="text-right">
                                            <p class="grey-text" style="margin: 0px;">For 1 Day of Photo + Video</p>
                                        </li>
                                    </ul>
                                </div>
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>
            <!-- <div class="col-xs-12 col-sm-12 load-more-col text-center">
                <a href="#" class="btn btn-primary text-uppercase">Show more Photographers</a>
            </div> -->
        </div>
    </section>
@endif
