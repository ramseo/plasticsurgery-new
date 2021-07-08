@extends('frontend.layouts.app')

@section('title') {{app_name()}} @endsection

@section('content')

    <!-- Banner search -->
    @include('frontend.includes.banner-search')

    <!-- Category list -->
    @include('frontend.includes.category-list')

    <!-- About block -->
    @include('frontend.includes.about-block')

    <!-- Wedding stories -->
    @include('frontend.includes.wedding-stories')

    <!-- Featured vendors -->
    @include('frontend.includes.featured-vendors')

    <!-- Latest blogs -->
    @include('frontend.includes.latest-blogs')

@endsection

<!-- Scripts -->
@push('after-scripts')
<script>
    $(document).ready(function () {
        $('#vendorsSlider').owlCarousel({
            loop: false,
            margin: 20,
            nav: true,
            items: 3,
            dots: false,
            autoplay: 4000,
            responsive: {
                0: {
                    items: 1
                },
                767: {
                    items: 2
                },
                991: {
                    items: 3
                }
            }
        });
    })
</script>
@endpush


