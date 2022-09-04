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
                        <li class="breadcrumb-item active" aria-current="page">Travel</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</section>


<section id="vendor-detail-section">
    <div class="container-fluid">
        <div class="row vendor-detail-main-col  hny">
            <div class="col-xs-12 col-sm-7 vendor-detail-img-col">
                <div class="hny-content grey-text">
                    {!!$travel->content!!}
                </div>
                <h3>Related Articles</h3>
                <div class="row">


                    <div class="col-lg-4 col-md-4">
                        <a href="#">

                            <div class="honeymoon-thumbnail-img">
                                <img src="https://www.weddingsutra.com/images/travel/beach_wedding_thumb.jpg" class="img-fluid">
                                <p>7 Honeymoon</p>
                                <span>Destination for Game of</span>


                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4 col-md-4">
                        <a href="#">
                            <div class="honeymoon-thumbnail-img">
                                <img src="https://www.weddingsutra.com/images/travel/got_thumb.jpg" class="img-fluid">
                                <p>7 Honeymoon</p>
                                <span>Destination for Game of</span>


                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4 col-md-4">
                        <a href="#">
                            <div class="honeymoon-thumbnail-img">
                                <img src="https://www.weddingsutra.com/images/travel/divyanka_second_honeymoon_thumb.jpg" class="img-fluid">
                                <p>7 Honeymoon</p>
                                <span>Destination for Game of</span>


                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4 col-md-4">
                        <a href="#">
                            <div class="honeymoon-thumbnail-img">
                                <img src="https://www.weddingsutra.com/images/bestglamping-thumb-nw-350x350.jpg" class="img-fluid">
                                <p>7 Honeymoon</p>
                                <span>Destination for Game of</span>


                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4 col-md-4">
                        <a href="#">
                            <div class="honeymoon-thumbnail-img">
                                <img src="https://www.weddingsutra.com/images/honeymoon-destinations-in-Kerala-pic4-350x350.jpg" class="img-fluid">
                                <p>7 Honeymoon</p>
                                <span>Destination for Game of</span>


                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4 col-md-4">
                        <a href="#">
                            <div class="honeymoon-thumbnail-img">
                                <img src="https://www.weddingsutra.com/images/honeymoon-destinations-in-Kerala-pic4-350x350.jpg" class="img-fluid">
                                <p>7 Honeymoon</p>
                                <span>Destination for Game of</span>


                            </div>
                        </a>
                    </div>
                </div>

            </div>
            @include('frontend.travel.side')
        </div>
    </div>
</section>

@endsection