<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">

<head>
    <meta charset="utf-8" />
    <!-- BROWSER ICONS -->
    <link rel="apple-touch-icon" sizes="76x76" href="{{asset('img/cosmetic-lg.png')}}">
    <link rel="icon" type="image/png" href="{{asset('img/cosmetic-lg.png')}}">
    <link rel="icon" type="image/ico" href="{{asset('img/cosmetic-lg.png')}}" />
    <link rel="shortcut icon" href="{{asset('img/cosmetic-lg.png')}}">
    <!-- BROWSER ICONS -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>@yield('title') | {{ config('app.name') }}</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    @include('frontend.includes.meta')

    @yield('site-meta-tags')

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta http-equiv="refresh" content="{{ config('session.lifetime') * 600 }}">
    <!-- Rating code -->
    <?php
    if (isset($vendor_details)) {
        $vendor_profile_img = asset('img/default-vendor.jpg');
        if ($vendor_details->image) {
            if (file_exists(public_path() . '/storage/vendor/profile/' . $vendor_details->image)) {
                $vendor_profile_img = asset('storage/vendor/profile/' . $vendor_details->image);
            }
        }

        $getContent = getContent($vendor_details);
        $getReviews = getReviewArray('vendor_reviews', 'vendor_id', $vendor_details->id);
        if ($getReviews) {
            $ratingValue = averageReview($getReviews);
        } else {
            $ratingValue = 0;
        }

        $rating_count = count($getReviews);

        $review_attr = [];
        if ($getReviews) {
            foreach ($getReviews as $item) {
                $review_attr[] = ["@type" => "Review", "reviewRating" => ["@type" => "Rating", "ratingValue" => $item->rating], "author" => ["@type" => "Person", "name" => "super admin"]];
            }
        }
        if ($review_attr) {
            $review_json_encode = json_encode($review_attr);
        } else {
            $attr = ["@type" => "Review", "reviewRating" => ["@type" => "Rating", "ratingValue" => 0], "author" => ["@type" => "Person", "name" => "super admin"]];
            $review_json_encode = json_encode($attr);
        }

    ?>
        <script type="application/ld+json">
            {
                "@context": "https://schema.org/",
                "@type": "Product",
                "brand": {
                    "@type": "Wed.in",
                    "name": "{{$vendor_details->business_name}}"
                },
                "description": "{{strip_tags($getContent)}}",
                "sku": "{{$vendor_details->slug}}",
                "image": "{{$vendor_profile_img}}",
                "name": "{{$vendor_details->business_name}}",
                "review": <?= $review_json_encode ?>,

                "aggregateRating": {
                    "@type": "AggregateRating",
                    "ratingValue": "{{$ratingValue}}",
                    "bestRating": "5",
                    "ratingCount": "{{$rating_count}}"
                }

            }
        </script>

    <?php } ?>

    <!-- Rating code -->
    @stack('x')

    <link rel="stylesheet" href="{{ mix('css/wed.css') }}">
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Signika:wght@300&display=swap" rel="stylesheet">

    @stack('after-styles')

    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.1.4/toastr.min.css">

    <!-- scrollcode -->
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <!-- scrollcode -->
    <x-google-analytics />

    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
</head>

<body>

    @include('frontend.includes.header')

    <x-preloader />

    @yield('page-banner')

    <main>
        @yield('content')
    </main>

    @include('frontend.includes.footer')
</body>

<!-- Scripts -->
@stack('before-scripts')

<script src="{{ mix('js/wed.js') }}"></script>
<script>
    $(document).ready(function() {
        $('#menuOpener').click(function() {
            $('.site-main-menu').addClass('active');
        });
        $('#menuCloser').click(function() {
            $('.site-main-menu').removeClass('active');
        });
    });
</script>

@stack('after-scripts')
<!-- scrollcode -->
<script src="https://unpkg.com/aos@next/dist/aos.js"></script>
<script>
    $(document).ready(function() {
        AOS.init({
            offset: 200,
            duration: 1000,
            easing: 'ease', // default easing for AOS animations
        });
        AOS.refresh();
    });
</script>
<!-- scrollcode -->

<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.1.4/toastr.min.js"></script>

</html>