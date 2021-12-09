@if(isset($cities))
    <section id="city-section">
        <div class="container-fluid">
            <div class="col-xs-12 common-heading text-center">
                <p class="shadow-text">{{$type->name}}</p>
                <p class="head">Find Best {{$type->name}} in</p>

            </div>
            <div class="row city-row">
                @foreach($cities as $city_item)
                    <div class="col-xs-12 col-sm-3 single-city-col">
                        <a href="{{url('/') . '/' . $type->slug . '/' . $city_item->slug}}">
                            <div class="img-col">
                                <i class="fas fa-city"></i>
                            </div>
                            <div class="text-col">
                                <p>{{$city_item->name}}</p>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endif
