@extends('frontend.layouts.app')

@section('title') {{ __("Blog") }} @endsection

@section('content')


<section id="page-banner">
    <div class="container-fluid">
        <div class="row">
            <div class="banner-container">
                <div class="vendor-img">
                    <img class="filter-cls" src="{{asset('images/vendor-banner-min.jpg')}}" alt="page banner" class="img-fluid">
                    <div class="banner-search-col">
                        <div class="search-header">
                            <p class="text">Blog</p>
                        </div>
                    </div>
                </div>
                <div class="container-fluid">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="/">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Blog</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</section>

<?php
$catIds = [];
foreach ($$module_name as $module_name_singular) {
    $catIds[] = $module_name_singular->category_id;
}
if ($catIds) {
    $catIds = array_unique($catIds);
}

$getPostCat = getPostCat($catIds);

if ($getPostCat) {
?>
    <section class="posts-cat-sec">
        <div class="container-fluid">
            <div class="row">
                <div id="posts-categories" class="owl-carousel owl-theme owl-loaded">
                    <div class="owl-stage-outer">
                        <div class="owl-stage">
                            <?php
                            foreach ($getPostCat as $item) {
                                $vendor_profile_img = asset('img/default-vendor.jpg');
                                if ($item['image']) {
                                    if (file_exists(public_path() . '/storage/categories/image/' . $item['image'])) {
                                        $vendor_profile_img = asset('storage/categories/image/' . $item['image']);
                                    }
                                }
                            ?>
                                <div class="owl-item">
                                    <div class="item">
                                        <img src="<?= $vendor_profile_img ?>" alt="category alt">
                                        <div class="carousel-content-posts">
                                            <a href="<?= url("categories/" . $item['slug']) ?>">
                                                <h5><?= $item['name'] ?></h5>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php } ?>

@if(count($$module_name))
<section class="listing-section blog-index-cls">
    <div class="container-fluid">
        <div class="row">
            @foreach ($$module_name as $$module_name_singular)
            @php
            $details_url = route("frontend.$module_name.show",[$$module_name_singular->slug]);
            @endphp
            <div class="col-12 col-md-4 mb-4">
                <div class="common-card">
                    <div class="img-col">
                        <a href="{{$details_url}}"><img src="{{$$module_name_singular->featured_image}}" class="img-fluid" alt=""></a>
                    </div>
                    <div class="text-col">
                        <a href="{{$details_url}}">
                            <p class="title">{{$$module_name_singular->name}}</p>
                        </a>
                        <p class="text">
                            <!-- {!!isset($$module_name_singular->created_by_alias)? $$module_name_singular->created_by_alias : '<a href="'.route('frontend.users.profile', $$module_name_singular->created_by).'"><h6 class="text-muted small ml-2 mb-0">'.$$module_name_singular->created_by_name.'</h6></a>'!!} -->
                            {{Str::words($$module_name_singular->intro, '15')}}
                        </p>
                        <!-- <p class="date">09 June 2021</p> -->
                    </div>
                </div>
            </div>
            @endforeach
        </div>

        <div class="d-flex justify-content-center w-100 mt-3">
            {{$$module_name->links()}}
        </div>
    </div>
</section>
@endif

@endsection

@push('before-scripts')
<script src="https://owlcarousel2.github.io/OwlCarousel2/assets/vendors/jquery.min.js"></script>
<script>
    $(document).ready(function() {
        var owl = $('#posts-categories');

        owl.owlCarousel({
            items: 1,
            dots: false,
            nav: true,
            navText: ["<i class='fas fa-arrow-left'></i>", "<i class='fas fa-arrow-right'></i>"],
            loop: $('#posts-categories .owl-item').length > 1 ? true : false,
            margin: 5,
            autoplay: $('#posts-categories .owl-item').length > 1 ? true : false,
            autoplayTimeout: 3000,
            autoplayHoverPause: true,
            responsive: {
                0: {
                    items: 2,
                    loop: $('#posts-categories .owl-item').length > 2 ? true : false,
                },
                600: {
                    items: 5,
                    loop: $('#posts-categories .owl-item').length > 5 ? true : false,
                },
                1000: {
                    items: 1,
                    loop: $('#posts-categories .owl-item').length > 1 ? true : false,
                }
            }
        });


    });
</script>

@endpush