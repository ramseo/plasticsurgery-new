
    @if($vendors->count() > 0)
        @foreach($vendors as $vendor)
            @php
                $vendorCity = getData('cities', 'id', $vendor->city_id);
                $vendorType = getData('types', 'id', $vendor->type_id);
                $reviews = getDataArray('vendor_reviews', 'vendor_id', $vendor->id);
                $average =  averageReview($reviews);
            @endphp
            <div class="col-xs-12 col-sm-4">
                <div class="common-card vendor-card-col">
                    <a href="{{url('/') . '/' . $vendorType->slug . '/' . $vendorCity->slug . '/' . $vendor->slug }}">
                        @php
                            $vendor_profile_img = asset('img/default-vendor.jpg');
                            if($vendor->image){
                                if(file_exists( public_path().'/storage/vendor/profile/'. $vendor->image )){
                                    $vendor_profile_img = asset('storage/vendor/profile/'.$vendor->image);
                                }
                            }
                        @endphp
                        <div class="img-col min-height-img">
                            <img src="{{$vendor_profile_img}}" alt="" class="img-fluid">
                        </div>
                        <div class="text-col">
                            <ul class="list-inline space-list">
                                <li>
                                    <p class="title">{{$vendor->business_name}}</p>
                                    <p class="grey-text"><i class="fa fa-map-marker-alt" aria-hidden="true"></i> {{$vendorCity->name}}</p>
                                </li>
                                @if($average > 0)
                                    <li class="text-right">
                                        <span class="vendor-rating"><i class="fa fa-star"></i> {{number_format($average, 1)}}</span>
                                        <p><a href="javascript:void(0)" class="grey-text">{{count($reviews)}} Reviews</a></p>
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
                        </div>
                    </a>
                </div>
            </div>
        @endforeach
    @endif
