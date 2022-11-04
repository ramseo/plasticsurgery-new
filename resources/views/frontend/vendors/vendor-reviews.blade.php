<div class="vendor-detail-cols">
    @if(isset($reviews) && count($reviews) > 0)
        <p class="head">Latest Reviews ({{count($reviews)}})</p>
    @endif
    <div class="detail-review-header">
        <ul class="list-inline space-list">
            <li class="list-inline-item">
                @php
                    $average =  averageReview($reviews);
                @endphp
                @if($average > 0)
                    <p class="review">{{number_format($average, 1)}}</p>
                    <ul class="list-inline">
                        @for($i = 1; $i <= $average; $i++)
                            <li class="list-inline-item text-success">
                                <i class="fa fa-star"></i>
                            </li>
                        @endfor
                    </ul>
                @endif
            </li>
            @auth
                <li class="list-inline-item">
                    <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#reviewModal">Write a Review</a>
                </li>
            @endauth
        </ul>
    </div>
    <hr>
    <div class="detail-review-body">
        @foreach($reviews as $review)
            @php
                $review_user = getData('users', 'id', $review->user_id);
            @endphp
            <div class="col-xs-12 single-review">
                <div class="review-header">
                    <ul class="list-inline space-list">
                        <li>
                            <div class="d-flex">
                                <div class="img-col">
                                    <img src="https://cdn.landesa.org/wp-content/uploads/default-user-image.png" class="img-fluid" alt="">
                                </div>
                                <div class="text-col">
                                    <p class="name">{{$review_user->first_name . ' '. $review_user->last_name}}</p>
                                    <ul class="list-inline rating-list">
                                        <li class="list-inline-item">
                                            <ul class="list-inline">
                                                @for($i = 1; $i <= $review->rating; $i++)
                                                    <li class="list-inline-item text-success">
                                                        <i class="fa fa-star"></i>
                                                    </li>
                                                @endfor
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="review-body">
                    <p>{{$review->description}}</p>
                </div>
            </div>
        @endforeach
    </div>
</div>

<div class="modal fade" id="reviewModal"> 
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Write Review</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
                <div class="review-form-main-col">
                    <div class="alert alert-danger reviewAlert" style="display: none;"></div>
                    
                    <form id="reviewForm" action="">
                        <div class="form-group">
                            <div class="review-rating" data-rateit-mode="font" data-rateit-resetable="false"></div>
                            <input type="hidden" id="review-rating-hidden" value="0">
                        </div>
                        <!-- <div class="form-group">
                            <label for="">Title</label>
                            <input id="reviewTitle" type="text" class="form-control">
                        </div> -->
                        <div class="form-group">
                            <label for="">Your Review</label>
                            <textarea id="reviewDescription" name="" class="form-control"></textarea>
                        </div>
                        <div class="form-group">
                            @auth
                                <input id="reviewUserId" type="hidden" value="{{Auth::user()->id}}">
                            @endauth
                                <input id="reviewVendorTypeId" type="hidden" value="{{$vendor_details->type_id}}">
                                <input id="reviewVendorCityId" type="hidden" value="{{$vendor_details->city_id}}">
                                <input id="reviewVendorId" type="hidden" value="{{$vendor_details->id}}">
                                <input type="submit" class="btn btn-primary" value="Submit">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@push('after-scripts')
    <script>
        $("#reviewModal").on('shown.bs.modal', function(){
            $('.review-rating').rateit({ max: 5, step: 1, backingfld: '#review-rating-hidden' });
        });
    </script>
@endpush

