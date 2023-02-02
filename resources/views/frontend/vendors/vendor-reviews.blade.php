<div class="vendor-detail-cols">
    @if(isset($reviews) && count($reviews) > 0)
    <p class="head">Latest Reviews ({{count($reviews)}})</p>
    @endif
    <div class="detail-review-header">
        <ul class="list-inline space-list">
            <li class="list-inline-item">
                @php
                $average = averageReview($reviews);
                @endphp
                @if($average > 0)
                <p class="review">{{number_format($average, 1)}}</p>
                <ul class="list-inline">
                    @for($i = 1; $i <= $average; $i++) <li class="list-inline-item text-success">
                        <i class="fa fa-star"></i>
            </li>
            @endfor
        </ul>
        @endif
        </li>
        <!-- @auth
        @endauth -->
        <li class="list-inline-item">
            <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#reviewModal">Write a Review</a>
        </li>
        </ul>
    </div>
    <hr>

    <div class="detail-review-body">
        <?php
        foreach ($reviews as $key => $review) {
            if ($key > 2) {
                $style = "style='display:none'";
                $cls = "rev-mor-cls";
            } else {
                $style = "";
                $cls = "";
            }

            $review_user = getData('users', 'id', $review->user_id);
            $currentUser = $review->title;
        ?>
            <div <?= $style ?> class="col-xs-12 single-review  <?= $cls ?>">
                <div class="review-header">
                    <ul class="list-inline space-list">
                        <li>
                            <div class="rev-flex-cls">
                                <div class="img-col">
                                    <img src="https://cdn.landesa.org/wp-content/uploads/default-user-image.png" class="img-fluid" alt="">
                                </div>
                                <div class="text-col">
                                    <p class="name review-title">
                                        {{$currentUser}}
                                    </p>
                                    <ul class="list-inline rating-list">
                                        <li class="list-inline-item">
                                            <ul class="list-inline">
                                                @for($i = 1; $i <= $review->rating; $i++)
                                                    <li class="list-inline-item text-success">
                                                        <i class="fa fa-star"></i>
                                                    </li>
                                                    @endfor
                                                    <li class="list-inline-item review-listing">
                                                        <?= date('d', strtotime($review->created_at)) . " , " . date("F", strtotime($review->created_at)) . " , " . date('Y', strtotime($review->created_at)) ?>
                                                    </li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="review-body">
                    <p class="comment more-content-cls">
                        {{$review->description}}
                    </p>
                </div>
                <?php
                if (auth()->user()) {
                    $loggedInUser = auth()->user()->getRoleNames()->first();
                } else {
                    $loggedInUser = "";
                }

                if ($loggedInUser == "super admin") {
                ?>
                    <div class="reply-review">
                        <a href="javascript:void(0)" class="show_reply_popup" review_id="<?= $review->id ?>">
                            Reply
                        </a>
                    </div>
                <?php } ?>
                <!-- admin reply -->
                <?php
                $getReviewReply = getReviewReply($review->id);
                foreach ($getReviewReply as $reply) {
                ?>
                    <div class="admin-reply">
                        <div class="col-xs-12 reply-review-cls">
                            <div class="review-header">
                                <ul class="list-inline space-list">
                                    <li>
                                        <div class="rev-flex-cls">
                                            <div class="img-col">
                                                <img src="https://cdn.landesa.org/wp-content/uploads/default-user-image.png" class="img-fluid" alt="">
                                            </div>
                                            <div class="text-col">
                                                <p class="name review-title">
                                                    <?= $reply->name ?>
                                                </p>
                                                <ul class="list-inline rating-list">
                                                    <li class="list-inline-item">
                                                        <ul class="list-inline">
                                                            <li class="list-inline-item review-listing">
                                                                <?= date('d', strtotime($reply->created_at)) . " , " . date("F", strtotime($review->created_at)) . " , " . date('Y', strtotime($review->created_at)) ?>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="review-body">
                                <p class="comment more-content-cls">
                                    <?= $reply->description ?>
                                </p>
                            </div>
                        </div>
                    </div>
                <?php } ?>
                <!-- admin reply -->
            </div>
        <?php } ?>
        <div class="btn btn-default show-more-reviews">
            <!-- Generate text -->
        </div>
    </div>
</div>

<div class="modal fade" id="reviewModal">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Write Review</h4>
                <button id="eliminate-val-error" type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
                <div class="review-form-main-col">
                    <div class="alert alert-danger reviewAlert" style="display: none;"></div>

                    <form id="reviewForm" action="">
                        <div class="form-group">
                            <div class="review-rating" data-rateit-mode="font" data-rateit-resetable="false"></div>
                            <input type="hidden" id="review-rating-hidden" value="0">
                        </div>

                        <div class="form-group">
                            <label for="name">Name</label>
                            <?php
                            if (auth()->user() != Null) {
                                $currentUser = auth()->user()->getRoleNames()->first();
                            ?>
                                <input id="reviewTitle" value="<?= $currentUser ?>" name="name" type="text" class="form-control" readonly>
                            <?php
                            } else {
                            ?>
                                <input id="reviewTitle" name="name" type="text" class="form-control">
                            <?php } ?>
                        </div>
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


<!-- reply model -->
<?php
if ($loggedInUser == "super admin") {
?>
    <div class="modal fade" id="replyModal">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title">Write Reply</h4>
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body">
                    <div class="review-form-main-col">
                        <div class="alert alert-danger replyAlert" style="display: none;"></div>
                        <form id="replyForm">
                            <div class="form-group">
                                <label for="name">Name</label>
                                <input id="replyTitle" value="super admin" name="name" type="text" class="form-control" readonly>
                            </div>
                            <div class="form-group">
                                <label>Your Reply</label>
                                <textarea id="replyDescription" class="form-control"></textarea>
                            </div>
                            <div class="form-group">
                                <input name="update_review_id" id="update_review_id" type="hidden">
                                <input type="submit" class="btn btn-primary" value="Submit">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php } ?>
<!-- reply model -->

@push('after-scripts')
<script>
    $("#reviewModal").on('shown.bs.modal', function() {
        $('.review-rating').rateit({
            max: 5,
            step: 1,
            backingfld: '#review-rating-hidden'
        });
    });
</script>
@endpush