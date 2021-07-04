@extends('frontend.layouts.app')

@section('title') {{app_name()}} @endsection

@section('content')

    <section id="page-banner">
        <div class="container-fluid">
            <div class="row">
                <div class="banner-container">
                    <img src="images/slider.jpg" alt="" class="img-fluid">
                    <div class="banner-search-col">
                        <div class="search-header">
                            <p class="head">Your Wedding, Your Way</p>
                            <p class="text">Find the best wedding vendors with thousands of trusted reviews</p>
                        </div>
                        <div class="search-form-col text-center">
                            <div class="form-list">
                                <ul class="list-inline">
                                    <li class="list-inline-item">
                                        <select class="form-control" name="" id="">
                                            <option value="">Select Vendor Type</option>
                                        </select>
                                    </li>
                                    <li class="list-inline-item">
                                        <select class="form-control" name="" id="">
                                            <option value="">Select City</option>
                                        </select>
                                    </li>
                                    <li class="list-inline-item">
                                        <input type="button" class="btn btn-primary" value="GET STARTED">
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="search-links text-center">
                            <ul class="list-inline">
                                <li class="list-inline-item">Popular Searches: </li>
                                <li class="list-inline-item"><a href="">Wedding Photographers in India</a></li>
                                <li class="list-inline-item"><a href="">Bridal Makeup in India</a></li>
                                <li class="list-inline-item"><a href="">Wedding Cards in India</a></li>
                                <li class="list-inline-item"><a href="">Wedding Venues in India</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="category-section">
        <div class="container-fluid">
            <div class="col-xs-12 common-heading text-center">
                <p class="shadow-text">Categories</p>
                <p class="head">Wedding Categories</p>
            </div>
            <div class="row category-main-row">
                <div class="col-xs-12 col-sm-6">
                    <div class="single-category-col">
                        <div class="inner">
                            <div class="img-col">
                                <a href="#">
                                    <img src="images/c1.png" alt="" class="img-fluid">
                                    <div class="text-col">
                                        <p class="head">Wedding Photographers</p>
                                        <p class="text">Popular Searches: Wedding Photographers</p>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="single-category-col">
                        <div class="inner">
                            <div class="img-col">
                                <a href="#">
                                    <img src="images/c3.png" alt="" class="img-fluid">
                                    <div class="text-col">
                                        <p class="head">Wedding Planners</p>
                                        <p class="text">Popular Searches: Wedding Photographers</p>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="single-category-col">
                        <div class="inner">
                            <div class="img-col">
                                <a href="#">
                                    <img src="images/c5.png" alt="" class="img-fluid">
                                    <div class="text-col">
                                        <p class="head">Bridal Makeup Artists</p>
                                        <p class="text">Popular Searches: Wedding Photographers</p>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="single-category-col">
                        <div class="inner">
                            <div class="img-col">
                                <a href="#">
                                    <img src="images/c7.png" alt="" class="img-fluid">
                                    <div class="text-col">
                                        <p class="head">Wedding Venues</p>
                                        <p class="text">Popular Searches: Wedding Photographers</p>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 pt-4">
                    <div class="single-category-col">
                        <div class="inner">
                            <div class="img-col">
                                <a href="#">
                                    <img src="images/c2.png" alt="" class="img-fluid">
                                    <div class="text-col">
                                        <p class="head">Wedding Decorators</p>
                                        <p class="text">Popular Searches: Wedding Photographers</p>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="single-category-col">
                        <div class="inner">
                            <div class="img-col">
                                <a href="#">
                                    <img src="images/c4.png" alt="" class="img-fluid">
                                    <div class="text-col">
                                        <p class="head">Wedding Videographers</p>
                                        <p class="text">Popular Searches: Wedding Photographers</p>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="single-category-col">
                        <div class="inner">
                            <div class="img-col">
                                <a href="#">
                                    <img src="images/c6.png" alt="" class="img-fluid">
                                    <div class="text-col">
                                        <p class="head">Mehndi Artists</p>
                                        <p class="text">Popular Searches: Wedding Photographers</p>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="single-category-col">
                        <div class="inner">
                            <div class="img-col">
                                <a href="#">
                                    <img src="images/c8.png" alt="" class="img-fluid">
                                    <div class="text-col">
                                        <p class="head">Pre Wedding Shoot</p>
                                        <p class="text">Popular Searches: Wedding Photographers</p>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="about-us">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xs-12 col-sm-6 img-col">
                    <img src="images/about.jpg" alt="" class="img-fluid">
                </div>
                <div class="col-xs-12 col-sm-6 text-col">
                    <div class="col-xs-12 common-heading">
                        <p class="shadow-text">About Us</p>
                        <p class="head">About Us</p>
                    </div>
                    <div class="mt-2">
                        <p>
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has
                            been the industry's standard dummy text ever since the 1500s, when an unknown printer took a
                            galley of type and scrambled it to make a type specimen book.
                        </p>
                        <p>
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has
                            been the industry's standard dummy text ever since the 1500s, when an unknown printer took a
                            galley of type and scrambled it to make a type specimen book.
                        </p>
                    </div>
                    <div class="mt-4">
                        <a href="#" class="btn btn-primary">READ MORE</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="wedding-stries">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xs-12 col-sm-12 common-heading text-center with-lines">
                    <p class="shadow-text">Stories</p>
                    <p class="head">Real Wedding Stories</p>
                </div>
                <div class="col-xs-12 col-sm-12 card-listing-col">
                    <div id="storySlider" class="owl-carousel owl-theme common-slider">
                        <div>
                            <div class="common-card">
                                <div class="img-col">
                                    <img src="images/real-story.jpg" alt="" class="img-fluid">
                                </div>
                                <div class="text-col">
                                    <p class="title">Asawari and James</p>
                                    <p class="text">
                                        Indian-American Vineyard Wedding With
                                        Customised Outfits & Jewellery For Everyone!
                                    </p>
                                    <p class="date">09 June 2021</p>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="common-card">
                                <div class="img-col">
                                    <img src="images/real-story2.jpg" alt="" class="img-fluid">
                                </div>
                                <div class="text-col">
                                    <p class="title">Asawari and James</p>
                                    <p class="text">
                                        Indian-American Vineyard Wedding With
                                        Customised Outfits & Jewellery For Everyone!
                                    </p>
                                    <p class="date">09 June 2021</p>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="common-card">
                                <div class="img-col">
                                    <img src="images/real-story3.jpg" alt="" class="img-fluid">
                                </div>
                                <div class="text-col">
                                    <p class="title">Asawari and James</p>
                                    <p class="text">
                                        Indian-American Vineyard Wedding With
                                        Customised Outfits & Jewellery For Everyone!
                                    </p>
                                    <p class="date">09 June 2021</p>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="common-card">
                                <div class="img-col">
                                    <img src="images/real-story3.jpg" alt="" class="img-fluid">
                                </div>
                                <div class="text-col">
                                    <p class="title">Asawari and James</p>
                                    <p class="text">
                                        Indian-American Vineyard Wedding With
                                        Customised Outfits & Jewellery For Everyone!
                                    </p>
                                    <p class="date">09 June 2021</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="featured-vendors">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xs-12 col-sm-12 common-heading light-heading text-center with-lines">
                    <p class="shadow-text">Vendors</p>
                    <p class="head">Featured Vendors</p>
                </div>
                <div class="col-xs-12 col-sm-12 card-listing-col">
                    <div id="vendorsSlider" class="owl-carousel owl-theme common-slider">
                        <div>
                            <div class="common-card vendor-card">
                                <div class="img-col">
                                    <img src="images/vendor-img.jpg" alt="" class="img-fluid">
                                </div>
                                <div class="text-col">
                                    <p class="title">Gulaabi Soirees by Geetika Mudgal</p>
                                    <p class="text">
                                        Bridal Makeup, Gomti Nagar
                                    </p>
                                    <p class="price"><span>Rs.18,000</span> for Bridal Makeup</p>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="common-card vendor-card">
                                <div class="img-col">
                                    <img src="images/vendor-img.jpg" alt="" class="img-fluid">
                                </div>
                                <div class="text-col">
                                    <p class="title">Gulaabi Soirees by Geetika Mudgal</p>
                                    <p class="text">
                                        Bridal Makeup, Gomti Nagar
                                    </p>
                                    <p class="price"><span>Rs.18,000</span> for Bridal Makeup</p>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="common-card vendor-card">
                                <div class="img-col">
                                    <img src="images/vendor-img.jpg" alt="" class="img-fluid">
                                </div>
                                <div class="text-col">
                                    <p class="title">Gulaabi Soirees by Geetika Mudgal</p>
                                    <p class="text">
                                        Bridal Makeup, Gomti Nagar
                                    </p>
                                    <p class="price"><span>Rs.18,000</span> for Bridal Makeup</p>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="common-card vendor-card">
                                <div class="img-col">
                                    <img src="images/vendor-img.jpg" alt="" class="img-fluid">
                                </div>
                                <div class="text-col">
                                    <p class="title">Gulaabi Soirees by Geetika Mudgal</p>
                                    <p class="text">
                                        Bridal Makeup, Gomti Nagar
                                    </p>
                                    <p class="price"><span>Rs.18,000</span> for Bridal Makeup</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="latest-blogs">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xs-12 col-sm-12 common-heading text-center with-lines">
                    <p class="shadow-text">Latest Blogs</p>
                    <p class="head">Latest Blogs</p>
                </div>
                <div class="col-xs-12 col-sm-12 card-listing-col">
                    <div id="blogsSlider" class="owl-carousel owl-theme common-slider">
                        <div>
                            <div class="common-card">
                                <div class="img-col">
                                    <img src="images/blog.jpg" alt="" class="img-fluid">
                                </div>
                                <div class="text-col">
                                    <p class="title">A Glam 25 People Wedding in Aamby...</p>
                                    <p class="text">
                                        Indian-American Vineyard Wedding With
                                        Customised Outfits & Jewellery For Everyone!
                                    </p>
                                    <p class="date">09 June 2021</p>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="common-card">
                                <div class="img-col">
                                    <img src="images/blog2.jpg" alt="" class="img-fluid">
                                </div>
                                <div class="text-col">
                                    <p class="title">A Glam 25 People Wedding in Aamby...</p>
                                    <p class="text">
                                        Indian-American Vineyard Wedding With
                                        Customised Outfits & Jewellery For Everyone!
                                    </p>
                                    <p class="date">09 June 2021</p>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="common-card">
                                <div class="img-col">
                                    <img src="images/blog3.jpg" alt="" class="img-fluid">
                                </div>
                                <div class="text-col">
                                    <p class="title">A Glam 25 People Wedding in Aamby...</p>
                                    <p class="text">
                                        Indian-American Vineyard Wedding With
                                        Customised Outfits & Jewellery For Everyone!
                                    </p>
                                    <p class="date">09 June 2021</p>
                                </div>
                            </div>
                        </div>
                        <div>
                            <div class="common-card">
                                <div class="img-col">
                                    <img src="images/real-story3.jpg" alt="" class="img-fluid">
                                </div>
                                <div class="text-col">
                                    <p class="title">A Glam 25 People Wedding in Aamby...</p>
                                    <p class="text">
                                        Indian-American Vineyard Wedding With
                                        Customised Outfits & Jewellery For Everyone!
                                    </p>
                                    <p class="date">09 June 2021</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>




@endsection

<!-- Scripts -->
@push('after-scripts')
<script>
    $(document).ready(function () {
        $('#storySlider').owlCarousel({
            loop: true,
            margin: 20,
            nav: true,
            items: 3,
            dots: false,
            autoplay: 3000
        });
        $('#blogsSlider').owlCarousel({
            loop: true,
            margin: 20,
            nav: true,
            items: 3,
            dots: false,
            autoplay: 2000
        });
        $('#vendorsSlider').owlCarousel({
            loop: true,
            margin: 20,
            nav: true,
            items: 3,
            dots: false,
            autoplay: 4000
        });
    })
</script>
@endpush


