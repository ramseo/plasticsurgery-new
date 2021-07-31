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
                        <form id="searchForm" action="">
                            <div class="form-list">
                                <ul class="list-inline">
                                    <li class="list-inline-item">
                                        <select class="form-control" name="" id="typeField" required>
                                            <option value="">Select Vendor Type</option>
                                            @if(isset($types) && $types)
                                                @foreach($types as $type)
                                                    <option value="{{$type->slug}}">{{$type->name}}</option>
                                                @endforeach
                                            @endif
                                        </select>
                                    </li>
                                    <li class="list-inline-item">
                                        <select class="form-control" name="" id="cityField" required>
                                            <option value="">Select City</option>
                                            @if(isset($cities) && $cities)
                                                @foreach($cities as $city)
                                                    <option value="{{$city->slug}}">{{$city->name}}</option>
                                                @endforeach
                                            @endif
                                        </select>
                                    </li>
                                    <li class="list-inline-item">
                                        <input type="submit" class="btn btn-primary" value="GET STARTED">
                                    </li>
                                </ul>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@push ("after-scripts")
    <script>
        $(document).ready(function(){
            $('#searchForm').submit(function(e){
                e.preventDefault();
                var type = $('#typeField').val();
                var city = $('#cityField').val();
                var typeUrl = type + '/' + city;
                window.location.href = typeUrl;
                console.log(typeUrl);
            });
        });
    </script>
@endpush