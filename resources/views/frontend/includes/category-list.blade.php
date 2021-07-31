@php
    $types = getDataArray('types');
    $cities = getDataArray('cities');
@endphp
@if(isset($types) && $types)
    <section id="category-section">
        <div class="container-fluid">
            <div class="col-xs-12 common-heading text-center">
                <p class="shadow-text">Categories</p>
                <p class="head">Wedding Categories</p>
            </div>
            <div class="row category-main-row">
                @php $cat_count = 0; @endphp
                @foreach($types as $type)
                    @php $cat_count++; @endphp
                    <div class="single-category-col col-6">
                        <div class="inner inner_{{$cat_count}}" style="background-color: {{$type->colour}};">
                            <style>
                                .inner_<?= $cat_count ?>::after {
                                    background-color: <?= $type->colour ?>
                                }
                            </style>
                            <div class="img-col">
                                <a href="#" class="city-modal-link" data-link-type="{{$type->slug}}" data-toggle="modal" data-target="#cityModal">
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

    @if(isset($cities) && $cities)
        <div id="cityModal" class="modal fade">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>
                    <div class="modal-body">
                        <div id="modal-search">
                            <input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for names..">
                            <ul id="myUL">
                                @foreach($cities as $city)
                                    <li><a class="city-link" href="{{$city->slug}}">{{$city->name}}</a></li>
                                @endforeach
                            </ul> 
                        </div>
                    </div>
                </div>
            </div>
        </div>
            
        @push ("after-scripts")
            <script>
                function myFunction() {
                    var input, filter, ul, li, a, i, txtValue;
                    input = document.getElementById('myInput');
                    filter = input.value.toUpperCase();
                    ul = document.getElementById("myUL");
                    li = ul.getElementsByTagName('li');
                    for (i = 0; i < li.length; i++) {
                        a = li[i].getElementsByTagName("a")[0];
                        txtValue = a.textContent || a.innerText;
                        if (txtValue.toUpperCase().indexOf(filter) > -1) {
                            li[i].style.display = "";
                        } else {
                            li[i].style.display = "none";
                        }
                    }
                }
                $(document).ready(function(){
                    $('.city-modal-link').click(function(){
                        var vType = $(this).attr('data-link-type');
                        var cityLinks = $('.city-link');
                        
                        $(cityLinks).each(function(index, value) {
                            var cityLink = $(value).attr('href');
                            var newLink = vType + '/' + cityLink;
                            $(value).attr('href', newLink);
                        });
                    });
                });
            </script>
        @endpush
        
    @endif
@endif
