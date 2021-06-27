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
                        <li><a href="{{url('price')}}">Price</a></li>
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
                    <img src="images/vendor-banner.jpg" alt="" class="img-fluid">
                    <div class="banner-search-col">
                        <div class="search-header">
                            <p class="text">Best Wedding Photographers in</p>
                        </div>
                        <div class="vendor-location-links">
                            <ul class="list-inline">
                                <li class="list-inline-item">
                                    <a href="#" class="btn btn-secondary">Delhi NCR</a>
                                    <p>Delhi NCR</p>
                                </li>
                                <li class="list-inline-item">
                                    <a href="#" class="btn btn-secondary">Bangalore</a>
                                    <p>Bangalore</p>
                                </li>
                                <li class="list-inline-item">
                                    <a href="#" class="btn btn-secondary">Mumbai</a>
                                    <p>Mumbai</p>
                                </li>
                                <li class="list-inline-item">
                                    <a href="#" class="btn btn-secondary">Chennai</a>
                                    <p>Chennai</p>
                                </li>
                                <li class="list-inline-item">
                                    <div class="dropdown">
                                        <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
                                            Other Cities
                                        </button>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item" href="#">Link 1</a>
                                            <a class="dropdown-item" href="#">Link 2</a>
                                            <a class="dropdown-item" href="#">Link 3</a>
                                        </div>
                                    </div>
                                    <p>Other Cities</p>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="container-fluid">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Wedding Photographers</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="photographers-section">
        <div class="container-fluid">
            <div class="col-xs-12 common-heading text-center">
                <p class="shadow-text">Photographers</p>
                <p class="head">Wedding Photographers in all cities (13297)</p>
                <p class="text">
                    The biggest day of your life deserves to be captured by the most talented ones. Find the list of wedding photographers in
                    all indian cities. Both premium and budget photographers are listed in all categories including traditional, candid drone &.. <a href="#">Read more</a>
                </p>
            </div>
            <div class="row vendor-list-row">
                <div class="col-xs-12 col-sm-4">
                    <div class="common-card vendor-card-col">
                        <div class="img-col">
                            <img src="images/real-story.jpg" alt="" class="img-fluid">
                        </div>
                        <div class="text-col">
                            <ul class="list-inline space-list">
                                <li>
                                    <p class="title">Focus Wedding Photographers</p>
                                    <p class="grey-text">Ludhiana</p>
                                </li>
                                <li class="text-right">
                                    <span class="vendor-rating"><i class="fa fa-star"></i> 5.0</span>
                                    <p><a href="#" class="grey-text">10 Reviews</a></p>
                                </li>
                            </ul>
                            <ul class="list-inline vendor-card space-list v-center">
                                <li>
                                    <p class="price"><span>Rs. 50,000</span></p>
                                </li>
                                <li class="text-right">
                                    <p class="grey-text" style="margin: 0px;">For 1 Day of Photo + Video</p>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-4">
                    <div class="common-card vendor-card-col">
                        <div class="img-col">
                            <img src="images/real-story.jpg" alt="" class="img-fluid">
                        </div>
                        <div class="text-col">
                            <ul class="list-inline space-list">
                                <li>
                                    <p class="title">Focus Wedding Photographers</p>
                                    <p class="grey-text">Ludhiana</p>
                                </li>
                                <li class="text-right">
                                    <span class="vendor-rating"><i class="fa fa-star"></i> 5.0</span>
                                    <p><a href="#" class="grey-text">10 Reviews</a></p>
                                </li>
                            </ul>
                            <ul class="list-inline vendor-card space-list v-center">
                                <li>
                                    <p class="price"><span>Rs. 50,000</span></p>
                                </li>
                                <li class="text-right">
                                    <p class="grey-text" style="margin: 0px;">For 1 Day of Photo + Video</p>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-4">
                    <div class="common-card vendor-card-col">
                        <div class="img-col">
                            <img src="images/real-story.jpg" alt="" class="img-fluid">
                        </div>
                        <div class="text-col">
                            <ul class="list-inline space-list">
                                <li>
                                    <p class="title">Focus Wedding Photographers</p>
                                    <p class="grey-text">Ludhiana</p>
                                </li>
                                <li class="text-right">
                                    <span class="vendor-rating"><i class="fa fa-star"></i> 5.0</span>
                                    <p><a href="#" class="grey-text">10 Reviews</a></p>
                                </li>
                            </ul>
                            <ul class="list-inline vendor-card space-list v-center">
                                <li>
                                    <p class="price"><span>Rs. 50,000</span></p>
                                </li>
                                <li class="text-right">
                                    <p class="grey-text" style="margin: 0px;">For 1 Day of Photo + Video</p>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-4">
                    <div class="common-card vendor-card-col">
                        <div class="img-col">
                            <img src="images/real-story.jpg" alt="" class="img-fluid">
                        </div>
                        <div class="text-col">
                            <ul class="list-inline space-list">
                                <li>
                                    <p class="title">Focus Wedding Photographers</p>
                                    <p class="grey-text">Ludhiana</p>
                                </li>
                                <li class="text-right">
                                    <span class="vendor-rating"><i class="fa fa-star"></i> 5.0</span>
                                    <p><a href="#" class="grey-text">10 Reviews</a></p>
                                </li>
                            </ul>
                            <ul class="list-inline vendor-card space-list v-center">
                                <li>
                                    <p class="price"><span>Rs. 50,000</span></p>
                                </li>
                                <li class="text-right">
                                    <p class="grey-text" style="margin: 0px;">For 1 Day of Photo + Video</p>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-4">
                    <div class="common-card vendor-card-col">
                        <div class="img-col">
                            <img src="images/real-story.jpg" alt="" class="img-fluid">
                        </div>
                        <div class="text-col">
                            <ul class="list-inline space-list">
                                <li>
                                    <p class="title">Focus Wedding Photographers</p>
                                    <p class="grey-text">Ludhiana</p>
                                </li>
                                <li class="text-right">
                                    <span class="vendor-rating"><i class="fa fa-star"></i> 5.0</span>
                                    <p><a href="#" class="grey-text">10 Reviews</a></p>
                                </li>
                            </ul>
                            <ul class="list-inline vendor-card space-list v-center">
                                <li>
                                    <p class="price"><span>Rs. 50,000</span></p>
                                </li>
                                <li class="text-right">
                                    <p class="grey-text" style="margin: 0px;">For 1 Day of Photo + Video</p>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-4">
                    <div class="common-card vendor-card-col">
                        <div class="img-col">
                            <img src="images/real-story.jpg" alt="" class="img-fluid">
                        </div>
                        <div class="text-col">
                            <ul class="list-inline space-list">
                                <li>
                                    <p class="title">Focus Wedding Photographers</p>
                                    <p class="grey-text">Ludhiana</p>
                                </li>
                                <li class="text-right">
                                    <span class="vendor-rating"><i class="fa fa-star"></i> 5.0</span>
                                    <p><a href="#" class="grey-text">10 Reviews</a></p>
                                </li>
                            </ul>
                            <ul class="list-inline vendor-card space-list v-center">
                                <li>
                                    <p class="price"><span>Rs. 50,000</span></p>
                                </li>
                                <li class="text-right">
                                    <p class="grey-text" style="margin: 0px;">For 1 Day of Photo + Video</p>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-4">
                    <div class="common-card vendor-card-col">
                        <div class="img-col">
                            <img src="images/real-story.jpg" alt="" class="img-fluid">
                        </div>
                        <div class="text-col">
                            <ul class="list-inline space-list">
                                <li>
                                    <p class="title">Focus Wedding Photographers</p>
                                    <p class="grey-text">Ludhiana</p>
                                </li>
                                <li class="text-right">
                                    <span class="vendor-rating"><i class="fa fa-star"></i> 5.0</span>
                                    <p><a href="#" class="grey-text">10 Reviews</a></p>
                                </li>
                            </ul>
                            <ul class="list-inline vendor-card space-list v-center">
                                <li>
                                    <p class="price"><span>Rs. 50,000</span></p>
                                </li>
                                <li class="text-right">
                                    <p class="grey-text" style="margin: 0px;">For 1 Day of Photo + Video</p>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-4">
                    <div class="common-card vendor-card-col">
                        <div class="img-col">
                            <img src="images/real-story.jpg" alt="" class="img-fluid">
                        </div>
                        <div class="text-col">
                            <ul class="list-inline space-list">
                                <li>
                                    <p class="title">Focus Wedding Photographers</p>
                                    <p class="grey-text">Ludhiana</p>
                                </li>
                                <li class="text-right">
                                    <span class="vendor-rating"><i class="fa fa-star"></i> 5.0</span>
                                    <p><a href="#" class="grey-text">10 Reviews</a></p>
                                </li>
                            </ul>
                            <ul class="list-inline vendor-card space-list v-center">
                                <li>
                                    <p class="price"><span>Rs. 50,000</span></p>
                                </li>
                                <li class="text-right">
                                    <p class="grey-text" style="margin: 0px;">For 1 Day of Photo + Video</p>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-4">
                    <div class="common-card vendor-card-col">
                        <div class="img-col">
                            <img src="images/real-story.jpg" alt="" class="img-fluid">
                        </div>
                        <div class="text-col">
                            <ul class="list-inline space-list">
                                <li>
                                    <p class="title">Focus Wedding Photographers</p>
                                    <p class="grey-text">Ludhiana</p>
                                </li>
                                <li class="text-right">
                                    <span class="vendor-rating"><i class="fa fa-star"></i> 5.0</span>
                                    <p><a href="#" class="grey-text">10 Reviews</a></p>
                                </li>
                            </ul>
                            <ul class="list-inline vendor-card space-list v-center">
                                <li>
                                    <p class="price"><span>Rs. 50,000</span></p>
                                </li>
                                <li class="text-right">
                                    <p class="grey-text" style="margin: 0px;">For 1 Day of Photo + Video</p>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 load-more-col text-center">
                <a href="#" class="btn btn-primary text-uppercase">Show more Photographers</a>
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

    <section id="latest-reviews">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xs-12 col-sm-12 common-heading text-center with-lines">
                    <p class="shadow-text">Reviews</p>
                    <p class="head">Latest Reviews of Photographers on Wed.in</p>
                </div>
                <div class="col-xs-12 col-sm-12 row reviews-list-col">
                    <div class="col-xs-12 col-sm-6 single-review">
                        <div class="review-header">
                            <ul class="list-inline space-list">
                                <li>
                                    <div class="d-flex">
                                        <div class="img-col">
                                            <img src="https://cdn.landesa.org/wp-content/uploads/default-user-image.png" class="img-fluid" alt="">
                                        </div>
                                        <div class="text-col">
                                            <p class="name">Gaurav Kumar</p>
                                            <p class="grey-text">about 22 hours ago</p>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <span class="vendor-rating"><i class="fa fa-star"></i> 5.0</span>
                                </li>
                            </ul>
                        </div>
                        <div class="review-body">
                            <p>Review for - <a href="#">FrameFitoor Photography</a></p>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries,</p>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 single-review">
                        <div class="review-header">
                            <ul class="list-inline space-list">
                                <li>
                                    <div class="d-flex">
                                        <div class="img-col">
                                            <img src="https://cdn.landesa.org/wp-content/uploads/default-user-image.png" class="img-fluid" alt="">
                                        </div>
                                        <div class="text-col">
                                            <p class="name">Gaurav Kumar</p>
                                            <p class="grey-text">about 22 hours ago</p>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <span class="vendor-rating"><i class="fa fa-star"></i> 5.0</span>
                                </li>
                            </ul>
                        </div>
                        <div class="review-body">
                            <p>Review for - <a href="#">FrameFitoor Photography</a></p>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries,</p>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 single-review">
                        <div class="review-header">
                            <ul class="list-inline space-list">
                                <li>
                                    <div class="d-flex">
                                        <div class="img-col">
                                            <img src="https://cdn.landesa.org/wp-content/uploads/default-user-image.png" class="img-fluid" alt="">
                                        </div>
                                        <div class="text-col">
                                            <p class="name">Gaurav Kumar</p>
                                            <p class="grey-text">about 22 hours ago</p>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <span class="vendor-rating"><i class="fa fa-star"></i> 5.0</span>
                                </li>
                            </ul>
                        </div>
                        <div class="review-body">
                            <p>Review for - <a href="#">FrameFitoor Photography</a></p>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries,</p>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-6 single-review">
                        <div class="review-header">
                            <ul class="list-inline space-list">
                                <li>
                                    <div class="d-flex">
                                        <div class="img-col">
                                            <img src="https://cdn.landesa.org/wp-content/uploads/default-user-image.png" class="img-fluid" alt="">
                                        </div>
                                        <div class="text-col">
                                            <p class="name">Gaurav Kumar</p>
                                            <p class="grey-text">about 22 hours ago</p>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <span class="vendor-rating"><i class="fa fa-star"></i> 5.0</span>
                                </li>
                            </ul>
                        </div>
                        <div class="review-body">
                            <p>Review for - <a href="#">FrameFitoor Photography</a></p>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries,</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="text-only-section" class="grey-section">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xs-12 col-sm-12">
                    <div class="text-header">
                        <p class="head">Book Best Wedding Photographers @ Wed.in</p>
                        <p class="text">
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.
                        </p>
                        <br/>
                        <p class="head small-head">Types of wedding photography</p>
                        <p class="text">
                            <strong>Candid Photography</strong> - Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.
                        </p>
                        <p class="text">
                            <strong>Traditional Photography</strong> - Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.
                        </p>
                        <p class="text">
                            <strong>Cinematic Photography</strong> - Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.
                        </p>
                        <p class="text">
                            <strong>Traditional Photography</strong> - Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.
                        </p>
                        <p class="text">
                            <strong>Pre-wedding photoshoot & video shoot Photography</strong> - Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="text-only-section" class="mt-section">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xs-12 col-sm-12">
                    <div class="text-header">
                        <p class="head">How to Hire Best Wedding Photographers?</p>
                        <p class="text">
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard.
                        </p>
                        <br/>
                        <p class="head small-head">Things to keep in mind while booking wedding photographers</p>
                        <p class="text">
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.
                        </p>
                        <p class="head small-head">Things to discuss with the wedding photographer before booking</p>
                        <p class="text">
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. <br/><br/>
                            It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search
                        </p>
                        <p class="head small-head">Hire the right wedding photographer</p>
                        <p class="text">
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.
                        </p>
                        <p class="head small-head">Wedding Photography & Pre-Wedding Photography Pricing</p>
                        <p class="text">
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. <br/><br/>
                            It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search
                        </p>
                        <p class="head small-head">Other Wedding Services We Provide</p>
                        <ul class="list-unstyled">
                            <li>
                                <span class="text-primary">Bridal Designers: </span> Design your trousseau as per the latest fashion trends
                            </li>
                            <li>
                                <span class="text-primary">Choreographers: </span> Learn some new moved for your wedding
                            </li>
                            <li>
                                <span class="text-primary">Wedding Videographers: </span> Design your trousseau as per the latest fashion trends
                            </li>
                            <li>
                                <span class="text-primary">Mehndi Artists: </span> Design your trousseau as per the latest fashion trends
                            </li>
                            <li>
                                <span class="text-primary">Bridal Makeup Artists: </span> Design your trousseau as per the latest fashion trends
                            </li>
                            <li>
                                <span class="text-primary">Wedding Decorators: </span> Design your trousseau as per the latest fashion trends
                            </li>
                            <li>
                                <span class="text-primary">Wedding Invitations: </span> Design your trousseau as per the latest fashion trends
                            </li>
                            <li>
                                <span class="text-primary">Wedding Planners: </span> Design your trousseau as per the latest fashion trends
                            </li>
                            <li>
                                <span class="text-primary">Wedding Venues: </span> Design your trousseau as per the latest fashion trends
                            </li>
                        </ul>
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
                        <p class="list-header strong"><img src="images/heart-icon.png" alt=""> Wedding Decorators</p>
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
                        <p class="list-header strong"><img src="images/heart-icon.png" alt=""> Wedding Video graphers
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

