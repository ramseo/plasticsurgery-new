@extends('frontend.layouts.app')

@section('title') {{ __("Vendors") }} @endsection

@section('content')

    <section id="page-banner">
        <div class="container-fluid">
            <div class="row">
                <div class="banner-container">
                    <img src="{{asset('images/vendor-banner.jpg')}}" alt="" class="img-fluid">
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
                    The biggest day of your life deserves to be captured by the most talented ones. Find the list of wedding photographers in all indian cities. Both premium and budget photographers are listed in all categories including traditional, candid drone &..
                    <a href="#">Read more</a>
                </p>
            </div>
            <div class="row vendor-list-row">
                <div class="col-xs-12 col-sm-4">
                    <div class="common-card vendor-card-col">
                        <div class="img-col">
                            <img src="{{asset('images/real-story.jpg')}}" alt="" class="img-fluid">
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
                            <img src="{{asset('images/real-story.jpg')}}" alt="" class="img-fluid">
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
                            <img src="{{asset('images/real-story.jpg')}}" alt="" class="img-fluid">
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
                            <img src="{{asset('images/real-story.jpg')}}" alt="" class="img-fluid">
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
                            <img src="{{asset('images/real-story.jpg')}}" alt="" class="img-fluid">
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
                            <img src="{{asset('images/real-story.jpg')}}" alt="" class="img-fluid">
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
                            <img src="{{asset('images/real-story.jpg')}}" alt="" class="img-fluid">
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
                            <img src="{{asset('images/real-story.jpg')}}" alt="" class="img-fluid">
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
                            <img src="{{asset('images/real-story.jpg')}}" alt="" class="img-fluid">
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

    @include('frontend.includes.featured-vendors')

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
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make
                                a type specimen book. It has survived not only five centuries,</p>
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
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make
                                a type specimen book. It has survived not only five centuries,</p>
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
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make
                                a type specimen book. It has survived not only five centuries,</p>
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
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make
                                a type specimen book. It has survived not only five centuries,</p>
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
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has
                            survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.
                        </p>
                        <br/>
                        <p class="head small-head">Types of wedding photography</p>
                        <p class="text">
                            <strong>Candid Photography</strong> - Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley
                            of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.
                        </p>
                        <p class="text">
                            <strong>Traditional Photography</strong> - Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took
                            a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.
                        </p>
                        <p class="text">
                            <strong>Cinematic Photography</strong> - Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took
                            a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.
                        </p>
                        <p class="text">
                            <strong>Traditional Photography</strong> - Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took
                            a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.
                        </p>
                        <p class="text">
                            <strong>Pre-wedding photoshoot & video shoot Photography</strong> - Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when
                            an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.
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
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has
                            survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.
                        </p>
                        <p class="head small-head">Things to discuss with the wedding photographer before booking</p>
                        <p class="text">
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has
                            survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. <br/><br/> It is a long established fact that a reader will be distracted by the
                            readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable
                            English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search
                        </p>
                        <p class="head small-head">Hire the right wedding photographer</p>
                        <p class="text">
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has
                            survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.
                        </p>
                        <p class="head small-head">Wedding Photography & Pre-Wedding Photography Pricing</p>
                        <p class="text">
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has
                            survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. <br/><br/> It is a long established fact that a reader will be distracted by the
                            readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable
                            English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search
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

@endsection