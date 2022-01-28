@extends('frontend.layouts.app')

@section('title') {{app_name()}} @endsection

@section('content')
 

    <section id="breadcrumb-section">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xs-12 col-sm-12">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Wedding Photographers</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </section>

    <section id="vendor-detail-section">
        <div class="container-fluid">
            <div class="row vendor-detail-main-col">
                <div class="col-xs-12 col-sm-7 vendor-detail-img-col">
                    <div class="img-col">
                        <img src="images/real-story.jpg" class="img-fluid" alt="">
                    </div>
                    <div class="photo-album-col">
                        <div class="album-header">
                            <p><strong>Photo Albums (3)</strong></p>
                        </div>
                        <ul class="nav nav-tabs">
                            <li class="nav-item">
                                <a class="nav-link active grey-text" data-toggle="tab" href="#home">
                                    <div class="tab-img-menu">
                                        <img src="images/blog.jpg" alt="" class="img-fluid">
                                        <span class="active-arrow"><i class="fas fa-caret-down"></i></span>
                                    </div>
                                    Top Photos
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link grey-text" data-toggle="tab" href="#menu1">
                                    <div class="tab-img-menu">
                                        <img src="images/blog3.jpg" alt="" class="img-fluid">
                                        <span class="active-arrow"><i class="fas fa-caret-down"></i></span>
                                    </div>
                                    Wedding
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link grey-text" data-toggle="tab" href="#menu2">
                                    <div class="tab-img-menu">
                                        <img src="images/blog2.jpg" alt="" class="img-fluid">
                                        <span class="active-arrow"><i class="fas fa-caret-down"></i></span>
                                    </div>
                                    Pre-Wedding
                                </a>
                            </li>
                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane container active" id="home">
                                <div class="containerCollage">
                                    <div class="item">
                                        <img src="images/blog.jpg" width="320" height="200" alt="" class="img-fluid">
                                    </div>
                                    <div class="item">
                                        <img src="images/blog2.jpg" width="320" height="200" alt="" class="img-fluid">
                                    </div>
                                    <div class="item">
                                        <img src="images/blog3.jpg" width="320" height="200" alt="" class="img-fluid">
                                    </div>
                                    <div class="item">
                                        <img src="images/about.jpg" width="320" height="200" alt="" class="img-fluid">
                                    </div>
                                    <div class="item">
                                        <img src="images/vendor-img.jpg" width="320" height="200" alt="" class="img-fluid">
                                    </div>
                                    <div class="item">
                                        <img src="https://www.brides.com/thmb/DzSqOhQc032X4Fs5h7ITswrdlww=/1366x1363/filters:fill(auto,1)/234-d3d2dbc2c1bd4083a811448b4e966681.png" width="320" height="200" alt="" class="img-fluid">
                                    </div>
                                    <div class="item">
                                        <img src="https://www.specialevents.com/sites/specialevents.com/files/Indian_Wedding_Hands_2019_0.jpg" width="320" height="200" alt="" class="img-fluid">
                                    </div>
                                    <div class="item">
                                        <img src="https://the-maharani-diaries-zxpo8io6akeffozy.netdna-ssl.com/media/2020/01/19205256/Beautiful-Fusion-Indian-Wedding-in-an-Irish-Castle_Lindsay-and-Miten_Epic-Love-Photography_17-scaled.jpg" width="320" height="200" alt="" class="img-fluid">
                                    </div>
                                    <div class="item">
                                        <img src="https://media-api.xogrp.com/images/46c049f8-89c2-11e7-8a2a-0e141a3020b2~rs_729.h" width="320" height="200" alt="" class="img-fluid">
                                    </div>
                                    <div class="item">
                                        <img src="https://556537-1789708-raikfcquaxqncofqfm.stackpathdns.com/pub/media/magefan_blog/2020/04/img_5e872802e26f8.jpg" width="320" height="200" alt="" class="img-fluid">
                                    </div>
                                    <div class="item">
                                        <img src="images/vendor-img.jpg" width="320" height="200" alt="" class="img-fluid">
                                    </div>
                                    <div class="item">
                                        <img src="https://www.brides.com/thmb/DzSqOhQc032X4Fs5h7ITswrdlww=/1366x1363/filters:fill(auto,1)/234-d3d2dbc2c1bd4083a811448b4e966681.png" width="320" height="200" alt="" class="img-fluid">
                                    </div>
                                    <div class="item">
                                        <img src="https://www.specialevents.com/sites/specialevents.com/files/Indian_Wedding_Hands_2019_0.jpg" width="320" height="200" alt="" class="img-fluid">
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane container fade" id="menu1">
                                <div class="containerCollage">
                                    <div class="item">
                                        <img src="images/blog.jpg" width="320" height="200" alt="" class="img-fluid">
                                    </div>
                                    <div class="item">
                                        <img src="images/blog2.jpg" width="320" height="200" alt="" class="img-fluid">
                                    </div>
                                    <div class="item">
                                        <img src="images/blog3.jpg" width="320" height="200" alt="" class="img-fluid">
                                    </div>
                                    <div class="item">
                                        <img src="images/about.jpg" width="320" height="200" alt="" class="img-fluid">
                                    </div>
                                    <div class="item">
                                        <img src="images/vendor-img.jpg" width="320" height="200" alt="" class="img-fluid">
                                    </div>
                                    <div class="item">
                                        <img src="https://www.brides.com/thmb/DzSqOhQc032X4Fs5h7ITswrdlww=/1366x1363/filters:fill(auto,1)/234-d3d2dbc2c1bd4083a811448b4e966681.png" width="320" height="200" alt="" class="img-fluid">
                                    </div>
                                    <div class="item">
                                        <img src="https://www.specialevents.com/sites/specialevents.com/files/Indian_Wedding_Hands_2019_0.jpg" width="320" height="200" alt="" class="img-fluid">
                                    </div>
                                    <div class="item">
                                        <img src="https://the-maharani-diaries-zxpo8io6akeffozy.netdna-ssl.com/media/2020/01/19205256/Beautiful-Fusion-Indian-Wedding-in-an-Irish-Castle_Lindsay-and-Miten_Epic-Love-Photography_17-scaled.jpg" width="320" height="200" alt="" class="img-fluid">
                                    </div>
                                    <div class="item">
                                        <img src="https://media-api.xogrp.com/images/46c049f8-89c2-11e7-8a2a-0e141a3020b2~rs_729.h" width="320" height="200" alt="" class="img-fluid">
                                    </div>
                                    <div class="item">
                                        <img src="https://556537-1789708-raikfcquaxqncofqfm.stackpathdns.com/pub/media/magefan_blog/2020/04/img_5e872802e26f8.jpg" width="320" height="200" alt="" class="img-fluid">
                                    </div>
                                    <div class="item">
                                        <img src="images/vendor-img.jpg" width="320" height="200" alt="" class="img-fluid">
                                    </div>
                                    <div class="item">
                                        <img src="https://www.brides.com/thmb/DzSqOhQc032X4Fs5h7ITswrdlww=/1366x1363/filters:fill(auto,1)/234-d3d2dbc2c1bd4083a811448b4e966681.png" width="320" height="200" alt="" class="img-fluid">
                                    </div>
                                    <div class="item">
                                        <img src="https://www.specialevents.com/sites/specialevents.com/files/Indian_Wedding_Hands_2019_0.jpg" width="320" height="200" alt="" class="img-fluid">
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane container fade" id="menu2">
                                <div class="containerCollage">
                                    <div class="item">
                                        <img src="images/blog.jpg" width="320" height="200" alt="" class="img-fluid">
                                    </div>
                                    <div class="item">
                                        <img src="images/blog2.jpg" width="320" height="200" alt="" class="img-fluid">
                                    </div>
                                    <div class="item">
                                        <img src="images/blog3.jpg" width="320" height="200" alt="" class="img-fluid">
                                    </div>
                                    <div class="item">
                                        <img src="images/about.jpg" width="320" height="200" alt="" class="img-fluid">
                                    </div>
                                    <div class="item">
                                        <img src="images/vendor-img.jpg" width="320" height="200" alt="" class="img-fluid">
                                    </div>
                                    <div class="item">
                                        <img src="https://www.brides.com/thmb/DzSqOhQc032X4Fs5h7ITswrdlww=/1366x1363/filters:fill(auto,1)/234-d3d2dbc2c1bd4083a811448b4e966681.png" width="320" height="200" alt="" class="img-fluid">
                                    </div>
                                    <div class="item">
                                        <img src="https://www.specialevents.com/sites/specialevents.com/files/Indian_Wedding_Hands_2019_0.jpg" width="320" height="200" alt="" class="img-fluid">
                                    </div>
                                    <div class="item">
                                        <img src="https://the-maharani-diaries-zxpo8io6akeffozy.netdna-ssl.com/media/2020/01/19205256/Beautiful-Fusion-Indian-Wedding-in-an-Irish-Castle_Lindsay-and-Miten_Epic-Love-Photography_17-scaled.jpg" width="320" height="200" alt="" class="img-fluid">
                                    </div>
                                    <div class="item">
                                        <img src="https://media-api.xogrp.com/images/46c049f8-89c2-11e7-8a2a-0e141a3020b2~rs_729.h" width="320" height="200" alt="" class="img-fluid">
                                    </div>
                                    <div class="item">
                                        <img src="https://556537-1789708-raikfcquaxqncofqfm.stackpathdns.com/pub/media/magefan_blog/2020/04/img_5e872802e26f8.jpg" width="320" height="200" alt="" class="img-fluid">
                                    </div>
                                    <div class="item">
                                        <img src="images/vendor-img.jpg" width="320" height="200" alt="" class="img-fluid">
                                    </div>
                                    <div class="item">
                                        <img src="https://www.brides.com/thmb/DzSqOhQc032X4Fs5h7ITswrdlww=/1366x1363/filters:fill(auto,1)/234-d3d2dbc2c1bd4083a811448b4e966681.png" width="320" height="200" alt="" class="img-fluid">
                                    </div>
                                    <div class="item">
                                        <img src="https://www.specialevents.com/sites/specialevents.com/files/Indian_Wedding_Hands_2019_0.jpg" width="320" height="200" alt="" class="img-fluid">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="vendor-detail-cols">
                        <p class="head">Pricing</p>
                        <div class="single-price">
                            <ul class="list-inline space-list">
                                <li>
                                    <p class="grey-text text-uppercase">Candid Photography</p>
                                    <p class="info"><i class="fas fa-rupee-sign"></i> 70,000 per day</p>
                                </li>
                                <li>
                                    <i class="fas fa-chevron-down"></i>
                                </li>
                            </ul>
                        </div>
                        <div class="single-price">
                            <ul class="list-inline space-list">
                                <li>
                                    <p class="grey-text text-uppercase">Traditional Photography</p>
                                    <p class="info"><i class="fas fa-rupee-sign"></i> 70,000 per day</p>
                                </li>
                                <li>
                                    <i class="fas fa-chevron-down"></i>
                                </li>
                            </ul>
                        </div>
                        <div class="single-price">
                            <ul class="list-inline space-list">
                                <li>
                                    <p class="grey-text text-uppercase">Cinematic Photography</p>
                                    <p class="info"><i class="fas fa-rupee-sign"></i> 70,000 per day</p>
                                </li>
                                <li>
                                    <i class="fas fa-chevron-down"></i>
                                </li>
                            </ul>
                        </div>
                        <div class="single-price">
                            <ul class="list-inline space-list">
                                <li>
                                    <p class="grey-text text-uppercase">Traditional Videography</p>
                                    <p class="info"><i class="fas fa-rupee-sign"></i> 70,000 per day</p>
                                </li>
                                <li>
                                    <i class="fas fa-chevron-down"></i>
                                </li>
                            </ul>
                        </div>
                        <div class="single-price">
                            <ul class="list-inline space-list">
                                <li>
                                    <p class="grey-text text-uppercase">Photo Album</p>
                                    <p class="info"><i class="fas fa-rupee-sign"></i> 70,000 per day</p>
                                </li>
                                <li>
                                    <i class="fas fa-chevron-down"></i>
                                </li>
                            </ul>
                        </div>
                        <div class="single-price">
                            <ul class="list-inline space-list">
                                <li>
                                    <p class="grey-text text-uppercase">Pre-Wedding shoot</p>
                                    <p class="info"><i class="fas fa-rupee-sign"></i> 70,000 per day</p>
                                </li>
                                <li>
                                    <i class="fas fa-chevron-down"></i>
                                </li>
                            </ul>
                        </div>
                        <div class="single-price">
                            <ul class="list-inline space-list">
                                <li>
                                    <p class="grey-text text-uppercase">Payment Policy</p>
                                    <p class="info">15% - At the Time of booking</p>
                                    <p class="info">80% - On Event date</p>
                                    <p class="info">100% - After deliverables are delivered</p>
                                </li>
                            </ul>
                        </div>
                        <div class="single-price">
                            <ul class="list-inline space-list">
                                <li>
                                    <p class="grey-text text-uppercase">Cancellation Policy</p>
                                    <p class="info">30% of the booking charges are refundable.</p>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <hr>
                    <div class="vendor-detail-cols">
                        <p class="head">About</p>
                        <p class="text-uppercase small-head"><strong>Introduction</strong></p>
                        <p class="grey-text">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                        <p class="text-uppercase small-head"><strong>Working since</strong></p>
                        <p class="grey-text">2000</p>
                        <p class="text-uppercase small-head"><strong>Travel Policy</strong></p>
                        <p class="grey-text">Travel & Stay paid by client</p>
                    </div>
                    <hr>
                    <div class="vendor-detail-cols">
                        <p class="head">Latest Reviews (10)</p>
                        <div class="detail-review-header">
                            <p class="review">5.0</p>
                            <ul class="list-inline">
                                <li class="list-inline-item text-success">
                                    <i class="fa fa-star"></i>
                                </li>
                                <li class="list-inline-item text-success">
                                    <i class="fa fa-star"></i>
                                </li>
                                <li class="list-inline-item text-success">
                                    <i class="fa fa-star"></i>
                                </li>
                                <li class="list-inline-item text-success">
                                    <i class="fa fa-star"></i>
                                </li>
                                <li class="list-inline-item text-success">
                                    <i class="fa fa-star"></i>
                                </li>
                            </ul>
                            <div class="rate-plugin">
                                <p><strong>Rate 'Focus Wedding Photographers'</strong></p>
                                <ul class="list-inline">
                                    <li class="list-inline-item">
                                        <i class="far fa-star"></i>
                                    </li>
                                    <li class="list-inline-item">
                                        <i class="far fa-star"></i>
                                    </li>
                                    <li class="list-inline-item">
                                        <i class="far fa-star"></i>
                                    </li>
                                    <li class="list-inline-item">
                                        <i class="far fa-star"></i>
                                    </li>
                                    <li class="list-inline-item">
                                        <i class="far fa-star"></i>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <hr>
                        <div class="detail-review-body">
                            <div class="col-xs-12 single-review">
                                <div class="review-header">
                                    <ul class="list-inline space-list">
                                        <li>
                                            <div class="d-flex">
                                                <div class="img-col">
                                                    <img src="https://cdn.landesa.org/wp-content/uploads/default-user-image.png" class="img-fluid" alt="">
                                                </div>
                                                <div class="text-col">
                                                    <p class="name">Gaurav Kumar</p>
                                                    <ul class="list-inline rating-list">
                                                        <li class="list-inline-item">
                                                            <ul class="list-inline">
                                                                <li class="list-inline-item text-success">
                                                                    <i class="fa fa-star"></i>
                                                                </li>
                                                                <li class="list-inline-item text-success">
                                                                    <i class="fa fa-star"></i>
                                                                </li>
                                                                <li class="list-inline-item text-success">
                                                                    <i class="fa fa-star"></i>
                                                                </li>
                                                                <li class="list-inline-item text-success">
                                                                    <i class="fa fa-star"></i>
                                                                </li>
                                                                <li class="list-inline-item text-success">
                                                                    <i class="fa fa-star"></i>
                                                                </li>
                                                            </ul>
                                                        </li>
                                                        <li class="list-inline-item">
                                                            <p class="grey-text">about 22 hours ago</p>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <div class="review-body">
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries,</p>
                                    <div class="col-xs-12 single-review">
                                        <div class="review-header">
                                            <ul class="list-inline space-list">
                                                <li>
                                                    <div class="d-flex">
                                                        <div class="img-col">
                                                            <img src="https://cdn.landesa.org/wp-content/uploads/default-user-image.png" class="img-fluid" alt="">
                                                        </div>
                                                        <div class="text-col">
                                                            <p class="name">Focus Wedding Photographers</p>
                                                            <ul class="list-inline rating-list">
                                                                <li class="list-inline-item">
                                                                    <ul class="list-inline">
                                                                        <li class="list-inline-item text-success">
                                                                            <i class="fa fa-star"></i>
                                                                        </li>
                                                                        <li class="list-inline-item text-success">
                                                                            <i class="fa fa-star"></i>
                                                                        </li>
                                                                        <li class="list-inline-item text-success">
                                                                            <i class="fa fa-star"></i>
                                                                        </li>
                                                                        <li class="list-inline-item text-success">
                                                                            <i class="fa fa-star"></i>
                                                                        </li>
                                                                        <li class="list-inline-item text-success">
                                                                            <i class="fa fa-star"></i>
                                                                        </li>
                                                                    </ul>
                                                                </li>
                                                                <li class="list-inline-item">
                                                                    <p class="grey-text">about 22 hours ago</p>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="review-body">
                                            <p>Thanks</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 single-review">
                                <div class="review-header">
                                    <ul class="list-inline space-list">
                                        <li>
                                            <div class="d-flex">
                                                <div class="img-col">
                                                    <img src="https://cdn.landesa.org/wp-content/uploads/default-user-image.png" class="img-fluid" alt="">
                                                </div>
                                                <div class="text-col">
                                                    <p class="name">Gaurav Kumar</p>
                                                    <ul class="list-inline rating-list">
                                                        <li class="list-inline-item">
                                                            <ul class="list-inline">
                                                                <li class="list-inline-item text-success">
                                                                    <i class="fa fa-star"></i>
                                                                </li>
                                                                <li class="list-inline-item text-success">
                                                                    <i class="fa fa-star"></i>
                                                                </li>
                                                                <li class="list-inline-item text-success">
                                                                    <i class="fa fa-star"></i>
                                                                </li>
                                                                <li class="list-inline-item text-success">
                                                                    <i class="fa fa-star"></i>
                                                                </li>
                                                                <li class="list-inline-item text-success">
                                                                    <i class="fa fa-star"></i>
                                                                </li>
                                                            </ul>
                                                        </li>
                                                        <li class="list-inline-item">
                                                            <p class="grey-text">about 22 hours ago</p>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <div class="review-body">
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries,</p>
                                    <div class="col-xs-12 single-review">
                                        <div class="review-header">
                                            <ul class="list-inline space-list">
                                                <li>
                                                    <div class="d-flex">
                                                        <div class="img-col">
                                                            <img src="https://cdn.landesa.org/wp-content/uploads/default-user-image.png" class="img-fluid" alt="">
                                                        </div>
                                                        <div class="text-col">
                                                            <p class="name">Focus Wedding Photographers</p>
                                                            <ul class="list-inline rating-list">
                                                                <li class="list-inline-item">
                                                                    <ul class="list-inline">
                                                                        <li class="list-inline-item text-success">
                                                                            <i class="fa fa-star"></i>
                                                                        </li>
                                                                        <li class="list-inline-item text-success">
                                                                            <i class="fa fa-star"></i>
                                                                        </li>
                                                                        <li class="list-inline-item text-success">
                                                                            <i class="fa fa-star"></i>
                                                                        </li>
                                                                        <li class="list-inline-item text-success">
                                                                            <i class="fa fa-star"></i>
                                                                        </li>
                                                                        <li class="list-inline-item text-success">
                                                                            <i class="fa fa-star"></i>
                                                                        </li>
                                                                    </ul>
                                                                </li>
                                                                <li class="list-inline-item">
                                                                    <p class="grey-text">about 22 hours ago</p>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="review-body">
                                            <p>Thanks</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 single-review">
                                <div class="review-header">
                                    <ul class="list-inline space-list">
                                        <li>
                                            <div class="d-flex">
                                                <div class="img-col">
                                                    <img src="https://cdn.landesa.org/wp-content/uploads/default-user-image.png" class="img-fluid" alt="">
                                                </div>
                                                <div class="text-col">
                                                    <p class="name">Gaurav Kumar</p>
                                                    <ul class="list-inline rating-list">
                                                        <li class="list-inline-item">
                                                            <ul class="list-inline">
                                                                <li class="list-inline-item text-success">
                                                                    <i class="fa fa-star"></i>
                                                                </li>
                                                                <li class="list-inline-item text-success">
                                                                    <i class="fa fa-star"></i>
                                                                </li>
                                                                <li class="list-inline-item text-success">
                                                                    <i class="fa fa-star"></i>
                                                                </li>
                                                                <li class="list-inline-item text-success">
                                                                    <i class="fa fa-star"></i>
                                                                </li>
                                                                <li class="list-inline-item text-success">
                                                                    <i class="fa fa-star"></i>
                                                                </li>
                                                            </ul>
                                                        </li>
                                                        <li class="list-inline-item">
                                                            <p class="grey-text">about 22 hours ago</p>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <div class="review-body">
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries,</p>
                                    <div class="col-xs-12 single-review">
                                        <div class="review-header">
                                            <ul class="list-inline space-list">
                                                <li>
                                                    <div class="d-flex">
                                                        <div class="img-col">
                                                            <img src="https://cdn.landesa.org/wp-content/uploads/default-user-image.png" class="img-fluid" alt="">
                                                        </div>
                                                        <div class="text-col">
                                                            <p class="name">Focus Wedding Photographers</p>
                                                            <ul class="list-inline rating-list">
                                                                <li class="list-inline-item">
                                                                    <ul class="list-inline">
                                                                        <li class="list-inline-item text-success">
                                                                            <i class="fa fa-star"></i>
                                                                        </li>
                                                                        <li class="list-inline-item text-success">
                                                                            <i class="fa fa-star"></i>
                                                                        </li>
                                                                        <li class="list-inline-item text-success">
                                                                            <i class="fa fa-star"></i>
                                                                        </li>
                                                                        <li class="list-inline-item text-success">
                                                                            <i class="fa fa-star"></i>
                                                                        </li>
                                                                        <li class="list-inline-item text-success">
                                                                            <i class="fa fa-star"></i>
                                                                        </li>
                                                                    </ul>
                                                                </li>
                                                                <li class="list-inline-item">
                                                                    <p class="grey-text">about 22 hours ago</p>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="review-body">
                                            <p>Thanks</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-5 vendor-detail-text-col">
                    <div class="inner bg-white-custom">
                        <div class="inner-col">
                            <span class="vendor-rating"><i class="fa fa-star"></i> 5.0</span>
                            <p class="title">Focus Wedding Photographers</p>
                            <p class="grey-text">Wedding photographer in Ludhiana + 6 cities</p>
                        </div>
                        <hr>
                        <div class="inner-col">
                            <p class="price">Rs. 1,50,000</p>
                            <p class="grey-text">For 1 Day of Photo + Video <a class="grey-text" href="#">(See Full Pricelist)</a></p>
                        </div>
                        <hr>
                        <div class="inner-col">
                            <ul class="list-inline share-ul">
                                <li class="list-inline-item">
                                    <a href="#" class="grey-text"><i class="far fa-share-square text-primary"></i> Share</a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="#" class="grey-text"><i class="far fa-star text-primary"></i> Write Review</a>
                                </li>
                            </ul>
                        </div>
                        <hr>
                        <div class="inner-col">
                            <ul class="list-inline actions-ul">
                                <li class="list-inline-item">
                                    <a href="#" class="btn btn-primary"><i class="fas fa-rupee-sign"></i> Get Quotation</a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="#" class="btn btn-success"><i class="fas fa-phone-alt"></i> CALL/CHAT</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="photographers-section">
        <div class="container-fluid">
            <div class="col-xs-12 common-left-heading">
                <p class="head">Similar Wedding Photographers</p>
                <p class="grey-text">These are Photographers similar to 'Focus Wedding Photographers'</p>
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

    <section id="text-only-section" class="mt-section">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xs-12 col-sm-12">
                    <div class="text-header">
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


@endsection

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
        var options = {minMargin: 10, maxMargin: 35, itemSelector: ".item"};
        $(".containerCollage").justifiedGallery();
    });
</script>
@endpush


