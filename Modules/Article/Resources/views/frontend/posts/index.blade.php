@extends('frontend.layouts.app')

@section('title') {{ __("Blog") }} @endsection

@section('content')

<div class="header-space"></div>
<div class="cit">
    <div class="container">
        <p class="cities_cls">
            Blog
        </p>
    </div>
</div>

@if(count($post_data))
<section class="listing-section blog-index-cls">
    <div class="container">
        <div class="row">
            <?php
            foreach ($post_data as $item) {
                $url = route("frontend.posts.show", [$item->slug]);
                $author_url = str_replace(' ', '-', strtolower($item->author));

                $author_img = asset("img/default-avatar.jpg");
                if ($item->author != "Super Admin") {
                    $get_author_img = get_author_img($item->created_by);
                    if (file_exists(public_path() . '/storage/user/profile/' . $get_author_img->avatar)) {
                        $author_img = asset('storage/user/profile/' . $get_author_img->avatar);
                    }
                }
            ?>
                <div class="col-xs-12 col-sm-4 blg-ctg-box">
                    <div class="blg-ctg-img">
                        <a href="<?= $url ?>" title="<?= $item->name ?>">
                            <img width="652" height="324" src="<?= $item->featured_image ?>" class="img-responsive wp-post-image" alt="<?= $item->alt ?>" loading="lazy" />
                        </a>
                    </div>
                    <div class="blg-ctg-cntnt">
                        <h2>
                            <a href="<?= $url ?>" title="<?= $item->name ?>">
                                <?= substr($item->name, 0, 70) ?>
                            </a>
                        </h2>
                        <div class="blg-cat-btm">
                            <a href="<?= url('/') . '/' . 'blog/author/' . $author_url ?>" class="author-avtr">
                                <img alt='<?= $item->author ?>' src='<?= $author_img ?>' class='avatar avatar-40 photo' height='40' width='40' loading='lazy' />
                            </a>
                            <div>
                                <span>
                                    <a class="color-black" href="<?= url('/') . '/' . 'blog/author/' . $author_url ?>">
                                        <?= ($author_url == "super-admin") ? $item->author : "Dr." . " " . substr($item->author, 0, 10) ?>
                                    </a>
                                </span>
                                <span>
                                    <?= date('F', strtotime($item->published_at)) . " " . date('d', strtotime($item->published_at)) . "," . date('Y', strtotime($item->published_at)) ?>
                                </span>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                        <div class="blog-read-more">
                            <a href="<?= $url ?>">
                                <button class="btn find-a-procedure">
                                    read more
                                </button>
                            </a>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
        <div class="inner text-center">
            <div class="d-flex justify-content-center w-100 mt-3">
                {{$post_data->links()}}
            </div>
        </div>
</section>
@endif

@endsection

@push('before-scripts')
<script src="https://owlcarousel2.github.io/OwlCarousel2/assets/vendors/jquery.min.js"></script>
<script>
    $(document).ready(function() {
        var owl = $('.posts-categories');

        owl.owlCarousel({
            items: 6,
            dots: false,
            nav: true,
            navText: ["<i class='fas fa-arrow-left'></i>", "<i class='fas fa-arrow-right'></i>"],
            loop: $('.posts-categories .owl-item').length > 6 ? true : false,
            margin: 5,
            autoplay: $('.posts-categories .owl-item').length > 6 ? true : false,
            autoplayTimeout: 3000,
            autoplayHoverPause: true,
            responsive: {
                0: {
                    items: 2,
                    loop: $('.posts-categories .owl-item').length > 2 ? true : false,
                },
                600: {
                    items: 4,
                    loop: $('.posts-categories .owl-item').length > 4 ? true : false,
                },
                1000: {
                    items: 6,
                    loop: $('.posts-categories .owl-item').length > 6 ? true : false,
                }
            }
        });


    });
</script>

@endpush