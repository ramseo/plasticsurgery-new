@php
$latestReviews = array();
$latestReviews = getDataArray('vendor_reviews', array('type_id'=> $type->id, 'city_id' => $city->id, 'is_active' => 1));
@endphp

@if(count($latestReviews) > 0)
<section id="latest-reviews">
    <div class="container-fluid">
        <div class="row">
            <div class="col-xs-12 col-sm-12 common-heading text-center with-lines">
                <p class="shadow-text">Reviews</p>
                <p class="head">Latest Reviews of {{$type->name}} on <?= $_SERVER['SERVER_NAME'] ?></p>
            </div>
            <div class="col-xs-12 col-sm-12 row reviews-list-col">
                @foreach($latestReviews as $review)
                @php
                $review_vendor = getData('vendors', 'id', $review->vendor_id);
                $vendorCity = getData('cities', 'id', $review_vendor->city_id);
                $vendorType = getData('types', 'id', $review_vendor->type_id);
                @endphp
                <div class="col-xs-12 col-sm-6 single-review">
                    <div class="review-of-vendor">
                        <div class="review-header">
                            <ul class="list-inline space-list">
                                <li>
                                    <!-- d-flex -->
                                    <div class="rev-flex-cls">
                                        <div class="img-col">
                                            <img src="https://cdn.landesa.org/wp-content/uploads/default-user-image.png" class="img-fluid" alt="">
                                        </div>
                                        <div class="text-col review-title-date">
                                            <span class="name review-title">
                                                {{$review->title}}
                                            </span>
                                            <span class="review-date">
                                                <?= date('d', strtotime($review->created_at)) . " , " . date("F", strtotime($review->created_at)) . " , " . date('Y', strtotime($review->created_at)) ?>
                                            </span>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <a target="_blank" href="<?= url('/') . '/' . $vendorType->slug . '/' . $vendorCity->slug . '/' . $review_vendor->slug ?>">
                                        <span class="vendor-rating">
                                            <i class="fa fa-star"></i>
                                            {{number_format($review->rating, 1)}}
                                        </span>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="review-body">
                            <p>Review for - <a target="_blank" href="{{url('/') . '/' . $vendorType->slug . '/' . $vendorCity->slug . '/' . $review_vendor->slug }}">{{$review_vendor->business_name}}</a></p>
                            <p><?= Str::words($review->description, 10, '...') ?></p>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</section>
@endif