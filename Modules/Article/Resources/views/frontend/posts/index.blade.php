@extends('frontend.layouts.app')

@section('title') {{ __("Blog") }} @endsection

@section('content')


<!-- <section id="page-banner">
    <div class="container-fluid">
        <div class="row">
            <div class="banner-container">
                <div class="vendor-img">
                    <img src="<? //= asset('img/blog.jpg') 
                                ?>" alt="image alt" class="img-fluid filter-cls margin-img-0">
                </div>
            </div>
        </div>
    </div>
</section> -->

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
            @foreach ($post_data as $item)
            @php
            $details_url = route("frontend.$module_name.show",[$item->slug]);
            @endphp
            <div class="col-md-4">
                <div class="post-item-wrap">
                    <div class="common-card">
                        <div class="card" data-label="<?= date('d', strtotime($item->published_at)) . " " . substr(date('F', strtotime($item->published_at)), 0, 3) . " " . date('Y', strtotime($item->published_at)) ?>">
                            <div class="img-col">
                                <a href="{{$details_url}}">
                                    <img src="{{$item->featured_image}}" class="img-fluid" alt="<?= $item->alt ?>">
                                </a>
                            </div>
                            <div class="text-col">
                                <a href="{{$details_url}}">
                                    <p class="title">
                                        <?= Str::words($item->name, 4) ?>
                                    </p>
                                </a>
                                <p class="text margin-null">
                                    {{Str::words($item->intro, '15')}}
                                </p>
                                <div class="author">
                                    <span>
                                        Author:
                                    </span>
                                    <?= $item->author ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
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