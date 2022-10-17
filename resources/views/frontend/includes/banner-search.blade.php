<section id="page-banner">
    <div class="container-fluid">
        <div class="row">
            <div class="banner-container">
                <div class="vendor-img">
                    <img src="images/slider.jpg" alt="home banner" class="img-fluid">
                    <div class="banner-search-col">
                        <div class="search-header">
                            @if(setting('homepage_title'))
                            <p class="head">{{ setting('homepage_title') }}</p>
                            @endif
                            @if(setting('homepage_sub_title'))
                            <p class="text">{{ setting('homepage_sub_title') }}</p>
                            @endif
                        </div>
                        <div class="search-form-col text-center">
                            <form id="searchForm" action="">
                                <div class="form-list">
                                    <ul class="list-inline">
                                        <li style="border-right: none; padding-right: 10px; background-color: white;" class="list-inline-item">
                                            <select style="border-right: none;" class="form-control" name="" id="typeField" required>
                                                <option value="">Select Vendor Type</option>
                                                @if(isset($types) && $types)
                                                @foreach($types as $type)
                                                <option value="{{$type->slug}}">{{$type->name}}</option>
                                                @endforeach
                                                @endif
                                            </select>
                                        </li>
                                        <li style="padding-right: 10px; background-color: white;" class="list-inline-item">
                                            <select style="border-right: none;" class="form-control" name="" id="cityField" required>
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
    </div>
</section>

@push ("after-scripts")
<script>
    $(document).ready(function() {
        $('#searchForm').submit(function(e) {
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