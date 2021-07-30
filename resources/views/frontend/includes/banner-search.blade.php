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
                                        @if(isset($types) && $types)
                                            @foreach($types as $type)
                                                <option value="{{$type->id}}">{{$type->name}}</option>
                                            @endforeach
                                        @endif
                                    </select>
                                </li>
                                <li class="list-inline-item">
                                    <select class="form-control" name="" id="">
                                        <option value="">Select City</option>
                                        @if(isset($cities) && $cities)
                                            @foreach($cities as $city)
                                                <option value="{{$city->slug}}">{{$city->name}}</option>
                                            @endforeach
                                        @endif
                                    </select>
                                </li>
                                <li class="list-inline-item">
                                    <input type="button" class="btn btn-primary" value="GET STARTED">
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- <div class="search-links text-center">
                        <ul class="list-inline">
                            <li class="list-inline-item">Popular Searches: </li>
                            <li class="list-inline-item"><a href="">Wedding Photographers in India</a></li>
                            <li class="list-inline-item"><a href="">Bridal Makeup in India</a></li>
                            <li class="list-inline-item"><a href="">Wedding Cards in India</a></li>
                            <li class="list-inline-item"><a href="">Wedding Venues in India</a></li>
                        </ul>
                    </div> -->
                </div>
            </div>
        </div>
    </div>
</section>