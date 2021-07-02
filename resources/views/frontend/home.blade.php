<!DOCTYPE html>
<html lang="en">

<head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/fontawesome.min.css">
        <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{ asset('css/owl.theme.default.min.css') }}">
        <link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css') }}">
        <link rel="stylesheet" href="{{ asset('css/style.css') }}">
        <link rel="stylesheet" href="{{ asset('css/responsive.css') }}">
    <script src="{{ asset('js/fontawesome.js') }}"></script>
{{--        <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>--}}
    </head>

    <body>
    <header id="header">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xs-12 col-sm-3 header-logo-col">
                    <a href="{{url('/')}}"><img src="images/logo.png" alt="" class="img-fluid"></a>
                </div>
                <div class="col-xs-12 col-sm-9 d-flex header-menu-col">
                    <ul class="list-inline d-flex site-menu site-main-menu">
                        <li><a href="{{url('vendor')}}">Vendors</a></li>
                        <li><a href="#">Bride</a></li>
                        <li><a href="#">Groom</a></li>
                        <li><a href="#">Blog</a></li>
                    </ul>
                    <ul class="list-inline d-flex site-menu user-menu">
                        <li><a href="#"><img src="images/search.png" alt=""> Search</a></li>
                        <li><a href="{{url('login')}}"><img src="images/login.png" alt=""> Log in</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </header>

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

    <footer id="footer">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xs-12 col-sm-12 footer-col">
                    <p class="footer-head">Follow us for more ideas & fun</p>
                    <ul class="list-inline">
                        <li class="list-inline-item"><a href=""><img src="images/i-btn.png" alt=""
                                                                     class="img-fluid"></a></li>
                        <li class="list-inline-item"><a href=""><img src="images/f-btn.png" alt=""
                                                                     class="img-fluid"></a></li>
                        <li class="list-inline-item"><a href=""><img src="images/p-btn.png" alt=""
                                                                     class="img-fluid"></a></li>
                    </ul>
                </div>
                <div class="col-xs-12 col-sm-12 footer-col">
                    <img src="images/color-logo.png" alt="" class="img-fluid">
                    <div class="footer-text-col mt-4">
                        <p class="footer-bold">Helps plan your wedding like a loved one</p>
                        <p class="footer-text">Wed.in is India’s most loved Wedding Planning website! Check prices,
                            verified reviews and book best wedding photographers, bridal makeup artists, wedding venues,
                            decorators, and all other wedding vendors at guaranteed best prices. Get loads of latest
                            wedding ideas & inspiration - bridal fashion, makeup and skincare tips, wedding planning
                            tips, bachelorette & honeymoon ideas from India's largest wedding community & real weddings.
                            ShaadiSaga is proud to have been the official wedding planner of celebrities like Yuvraj
                            Singh & Bhuvneshwar Kumar. We love what we do, and that's how we help plan your wedding like
                            a loved one!</p>
                        <a href="#" class="btn btn-primary mt-3">HIRE A VENDOR</a>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 footer-col">
                    <p class="footer-head">More About Us</p>
                    <ul class="list-inline footer-color-list">
                        <li class="list-inline-item">
                            <a href="#">About Us</a>
                        </li>
                        <li class="list-inline-item">
                            <a href="#">Careers</a>
                        </li>
                        <li class="list-inline-item">
                            <a href="#">Contact Us</a>
                        </li>
                        <li class="list-inline-item">
                            <a href="#">Privacy Policy</a>
                        </li>
                        <li class="list-inline-item">
                            <a href="#">Sitemap</a>
                        </li>
                        <li class="list-inline-item">
                            <a href="#">Terms & Conditions</a>
                        </li>
                        <li class="list-inline-item">
                            <a href="#">Wedding Guest Post</a>
                        </li>
                    </ul>
                    <p class="footer-small-text">© Copyright 2021 support@wed.in (Boatman Tech Pvt. Ltd.) - All Rights
                        Reserved</p>
                </div>
                <div class="col-xs-12 col-sm-12 footer-col">
                    <p class="footer-head">Contact Us</p>
                    <div class="row">
                        <div class="col-xs-12 col-sm-5">
                            <p class="list-header"><img src="images/heart-icon.png" alt=""> If you are getting married &
                                need help</p>
                            <ul class="list-unstyled footer-contact-list">
                                <li>
                                    <a class="active" href="#"><i class="far fa-envelope"></i> support@wed.in</a>
                                </li>
                                <li>
                                    <a href="#"><i class="fas fa-phone-alt"></i> +91 1234567890</a>
                                </li>
                            </ul>
                        </div>
                        <div class="col-xs-12 col-sm-5">
                            <p class="list-header"><img src="images/heart-icon.png" alt=""> If you are a wedding vendor
                                & need help</p>
                            <ul class="list-unstyled footer-contact-list">
                                <li>
                                    <a href="#"><i class="far fa-envelope"></i> support@wed.in</a>
                                </li>
                                <li>
                                    <a href="#"><i class="fas fa-phone-alt"></i> +91 1234567890</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 footer-col">
                    <p class="footer-head">Get Amazing Wedding Ideas</p>
                    <p class="list-header"><img src="images/heart-icon.png" alt=""> Get Latest wedding blog updates</p>
                    <div class="row">
                        <div class="col-xs-12 col-sm-4">
                            <div class="input-group newsletter-group">
                                <input type="text" class="form-control" placeholder="Email">
                                <div class="input-group-append">
                                    <button class="btn btn-outline-secondary" type="button"><i
                                            class="fas fa-check"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 footer-col">
                    <p class="footer-head">Wedding Vendors in over 100 cities</p>
                    <div class="footer-list-col">
                        <p class="list-header strong"><img src="images/heart-icon.png" alt=""> Wedding Photographers</p>
                        <ul class="list-inline footer-color-list">
                            <li class="list-inline-item">
                                <a href="#">Wedding Photographers</a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#">Wedding Photographers in Delhi NCR</a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#">Wedding Photographers in Mumbai</a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#">Wedding Photographers in Chennai</a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#">Wedding Photographers in Banglore</a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#">Wedding Photographers in Hyderabad</a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#">Wedding Photographers in Chandigarh</a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#">Wedding Photographers in Kolkata</a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#">Wedding Photographers in Kerala</a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#">Engagement Shoot in Delhi NCR</a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#">Engagement Shoot in Mumbai</a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#">Engagement Shoot in Chennai</a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#">Engagement Shoot in Banglore</a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#">Engagement Shoot in Hyderabad</a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#">Engagement Shoot in Chandigarh</a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#">Engagement Shoot in Kolkata</a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#">Engagement Shoot in Kerala</a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#">Pre-Wedding Shoot in Delhi NCR</a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#">Pre-Wedding Shoot in Mumbai</a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#">Pre-Wedding Shoot in Chennai</a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#">Pre-Wedding Shoot in Banglore</a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#">Pre-Wedding Shoot in Hyderabad</a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#">Pre-Wedding Shoot in Chandigarh</a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#">Pre-Wedding Shoot in Kolkata</a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#">Pre-Wedding Shoot in Kerala</a>
                            </li>
                        </ul>
                    </div>
                    <div class="footer-list-col">
                        <p class="list-header strong"><img src="images/heart-icon.png" alt=""> Wedding Planners</p>
                        <ul class="list-inline footer-color-list">
                            <li class="list-inline-item">
                                <a href="#">Wedding Photographers</a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#">Wedding Photographers in Delhi NCR</a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#">Wedding Photographers in Mumbai</a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#">Wedding Photographers in Chennai</a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#">Wedding Photographers in Banglore</a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#">Wedding Photographers in Hyderabad</a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#">Wedding Photographers in Chandigarh</a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#">Wedding Photographers in Kolkata</a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#">Wedding Photographers in Kerala</a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#">Engagement Shoot in Delhi NCR</a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#">Engagement Shoot in Mumbai</a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#">Engagement Shoot in Chennai</a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#">Engagement Shoot in Banglore</a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#">Engagement Shoot in Hyderabad</a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#">Engagement Shoot in Chandigarh</a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#">Engagement Shoot in Kolkata</a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#">Engagement Shoot in Kerala</a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#">Pre-Wedding Shoot in Delhi NCR</a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#">Pre-Wedding Shoot in Mumbai</a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#">Pre-Wedding Shoot in Chennai</a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#">Pre-Wedding Shoot in Banglore</a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#">Pre-Wedding Shoot in Hyderabad</a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#">Pre-Wedding Shoot in Chandigarh</a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#">Pre-Wedding Shoot in Kolkata</a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#">Pre-Wedding Shoot in Kerala</a>
                            </li>
                        </ul>
                    </div>
                    <div class="footer-list-col">
                        <p class="list-header strong"><img src="images/heart-icon.png" alt=""> Bridal Makeup Artists</p>
                        <ul class="list-inline footer-color-list">
                            <li class="list-inline-item">
                                <a href="#">Wedding Photographers</a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#">Wedding Photographers in Delhi NCR</a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#">Wedding Photographers in Mumbai</a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#">Wedding Photographers in Chennai</a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#">Wedding Photographers in Banglore</a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#">Wedding Photographers in Hyderabad</a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#">Wedding Photographers in Chandigarh</a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#">Wedding Photographers in Kolkata</a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#">Wedding Photographers in Kerala</a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#">Engagement Shoot in Delhi NCR</a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#">Engagement Shoot in Mumbai</a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#">Engagement Shoot in Chennai</a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#">Engagement Shoot in Banglore</a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#">Engagement Shoot in Hyderabad</a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#">Engagement Shoot in Chandigarh</a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#">Engagement Shoot in Kolkata</a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#">Engagement Shoot in Kerala</a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#">Pre-Wedding Shoot in Delhi NCR</a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#">Pre-Wedding Shoot in Mumbai</a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#">Pre-Wedding Shoot in Chennai</a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#">Pre-Wedding Shoot in Banglore</a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#">Pre-Wedding Shoot in Hyderabad</a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#">Pre-Wedding Shoot in Chandigarh</a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#">Pre-Wedding Shoot in Kolkata</a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#">Pre-Wedding Shoot in Kerala</a>
                            </li>
                        </ul>
                    </div>
                    <div class="footer-list-col">
                        <p class="list-header strong"><img src="images/heart-icon.png" alt=""> Wedding Venues</p>
                        <ul class="list-inline footer-color-list">
                            <li class="list-inline-item">
                                <a href="#">Wedding Photographers</a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#">Wedding Photographers in Delhi NCR</a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#">Wedding Photographers in Mumbai</a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#">Wedding Photographers in Chennai</a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#">Wedding Photographers in Banglore</a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#">Wedding Photographers in Hyderabad</a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#">Wedding Photographers in Chandigarh</a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#">Wedding Photographers in Kolkata</a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#">Wedding Photographers in Kerala</a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#">Engagement Shoot in Delhi NCR</a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#">Engagement Shoot in Mumbai</a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#">Engagement Shoot in Chennai</a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#">Engagement Shoot in Banglore</a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#">Engagement Shoot in Hyderabad</a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#">Engagement Shoot in Chandigarh</a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#">Engagement Shoot in Kolkata</a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#">Engagement Shoot in Kerala</a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#">Pre-Wedding Shoot in Delhi NCR</a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#">Pre-Wedding Shoot in Mumbai</a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#">Pre-Wedding Shoot in Chennai</a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#">Pre-Wedding Shoot in Banglore</a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#">Pre-Wedding Shoot in Hyderabad</a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#">Pre-Wedding Shoot in Chandigarh</a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#">Pre-Wedding Shoot in Kolkata</a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#">Pre-Wedding Shoot in Kerala</a>
                            </li>
                        </ul>
                    </div>
                    <div class="footer-list-col">
                        <p class="list-header strong"><img src="{{asset('images/heart-icon.png')}}" alt=""> Wedding Decorators</p>
                        <ul class="list-inline footer-color-list">
                            <li class="list-inline-item">
                                <a href="#">Wedding Photographers</a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#">Wedding Photographers in Delhi NCR</a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#">Wedding Photographers in Mumbai</a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#">Wedding Photographers in Chennai</a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#">Wedding Photographers in Banglore</a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#">Wedding Photographers in Hyderabad</a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#">Wedding Photographers in Chandigarh</a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#">Wedding Photographers in Kolkata</a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#">Wedding Photographers in Kerala</a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#">Engagement Shoot in Delhi NCR</a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#">Engagement Shoot in Mumbai</a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#">Engagement Shoot in Chennai</a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#">Engagement Shoot in Banglore</a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#">Engagement Shoot in Hyderabad</a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#">Engagement Shoot in Chandigarh</a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#">Engagement Shoot in Kolkata</a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#">Engagement Shoot in Kerala</a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#">Pre-Wedding Shoot in Delhi NCR</a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#">Pre-Wedding Shoot in Mumbai</a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#">Pre-Wedding Shoot in Chennai</a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#">Pre-Wedding Shoot in Banglore</a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#">Pre-Wedding Shoot in Hyderabad</a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#">Pre-Wedding Shoot in Chandigarh</a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#">Pre-Wedding Shoot in Kolkata</a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#">Pre-Wedding Shoot in Kerala</a>
                            </li>
                        </ul>
                    </div>
                    <div class="footer-list-col">
                        <p class="list-header strong"><img src="{{asset('images/heart-icon.png')}}" alt=""> Wedding Video graphers
                        </p>
                        <ul class="list-inline footer-color-list">
                            <li class="list-inline-item">
                                <a href="#">Wedding Photographers</a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#">Wedding Photographers in Delhi NCR</a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#">Wedding Photographers in Mumbai</a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#">Wedding Photographers in Chennai</a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#">Wedding Photographers in Banglore</a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#">Wedding Photographers in Hyderabad</a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#">Wedding Photographers in Chandigarh</a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#">Wedding Photographers in Kolkata</a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#">Wedding Photographers in Kerala</a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#">Engagement Shoot in Delhi NCR</a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#">Engagement Shoot in Mumbai</a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#">Engagement Shoot in Chennai</a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#">Engagement Shoot in Banglore</a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#">Engagement Shoot in Hyderabad</a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#">Engagement Shoot in Chandigarh</a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#">Engagement Shoot in Kolkata</a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#">Engagement Shoot in Kerala</a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#">Pre-Wedding Shoot in Delhi NCR</a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#">Pre-Wedding Shoot in Mumbai</a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#">Pre-Wedding Shoot in Chennai</a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#">Pre-Wedding Shoot in Banglore</a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#">Pre-Wedding Shoot in Hyderabad</a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#">Pre-Wedding Shoot in Chandigarh</a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#">Pre-Wedding Shoot in Kolkata</a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#">Pre-Wedding Shoot in Kerala</a>
                            </li>
                        </ul>
                    </div>
                    <div class="footer-list-col">
                        <p class="list-header strong"><img src="images/heart-icon.png" alt=""> Mehndi Artists</p>
                        <ul class="list-inline footer-color-list">
                            <li class="list-inline-item">
                                <a href="#">Wedding Photographers</a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#">Wedding Photographers in Delhi NCR</a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#">Wedding Photographers in Mumbai</a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#">Wedding Photographers in Chennai</a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#">Wedding Photographers in Banglore</a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#">Wedding Photographers in Hyderabad</a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#">Wedding Photographers in Chandigarh</a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#">Wedding Photographers in Kolkata</a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#">Wedding Photographers in Kerala</a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#">Engagement Shoot in Delhi NCR</a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#">Engagement Shoot in Mumbai</a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#">Engagement Shoot in Chennai</a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#">Engagement Shoot in Banglore</a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#">Engagement Shoot in Hyderabad</a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#">Engagement Shoot in Chandigarh</a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#">Engagement Shoot in Kolkata</a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#">Engagement Shoot in Kerala</a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#">Pre-Wedding Shoot in Delhi NCR</a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#">Pre-Wedding Shoot in Mumbai</a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#">Pre-Wedding Shoot in Chennai</a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#">Pre-Wedding Shoot in Banglore</a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#">Pre-Wedding Shoot in Hyderabad</a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#">Pre-Wedding Shoot in Chandigarh</a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#">Pre-Wedding Shoot in Kolkata</a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#">Pre-Wedding Shoot in Kerala</a>
                            </li>
                        </ul>
                    </div>
                    <div class="footer-list-col">
                        <p class="list-header strong"><img src="images/heart-icon.png" alt=""> Pre Wedding Shoot</p>
                        <ul class="list-inline footer-color-list">
                            <li class="list-inline-item">
                                <a href="#">Wedding Photographers</a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#">Wedding Photographers in Delhi NCR</a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#">Wedding Photographers in Mumbai</a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#">Wedding Photographers in Chennai</a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#">Wedding Photographers in Banglore</a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#">Wedding Photographers in Hyderabad</a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#">Wedding Photographers in Chandigarh</a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#">Wedding Photographers in Kolkata</a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#">Wedding Photographers in Kerala</a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#">Engagement Shoot in Delhi NCR</a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#">Engagement Shoot in Mumbai</a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#">Engagement Shoot in Chennai</a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#">Engagement Shoot in Banglore</a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#">Engagement Shoot in Hyderabad</a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#">Engagement Shoot in Chandigarh</a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#">Engagement Shoot in Kolkata</a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#">Engagement Shoot in Kerala</a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#">Pre-Wedding Shoot in Delhi NCR</a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#">Pre-Wedding Shoot in Mumbai</a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#">Pre-Wedding Shoot in Chennai</a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#">Pre-Wedding Shoot in Banglore</a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#">Pre-Wedding Shoot in Hyderabad</a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#">Pre-Wedding Shoot in Chandigarh</a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#">Pre-Wedding Shoot in Kolkata</a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#">Pre-Wedding Shoot in Kerala</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>


    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/popper.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/owl.carousel.min.js') }}"></script>
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
    </body>
</html>

