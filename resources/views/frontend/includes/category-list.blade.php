@php
    $types = getDataArray('types');
@endphp
@if(isset($types) && $types)
    <section id="category-section">
        <div class="container-fluid">
            <div class="col-xs-12 common-heading text-center">
                <p class="shadow-text">Categories</p>
                <p class="head">Wedding Categories</p>
            </div>
            <div class="row category-main-row">
                @foreach($types as $type)
                    <div class="single-category-col col-6">
                        <div class="inner" style="background-color: {{$type->colour}};">
                            <div class="img-col">
                                <a href="#">
                                    <img src="{{asset('storage/vendor/type/image/'.$type->image)}}" alt="" class="img-fluid">
                                    <div class="text-col">
                                        <p class="head">{{$type->name}}</p>
                                        <p class="text">Popular Searches: {{$type->name}}</p>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endif