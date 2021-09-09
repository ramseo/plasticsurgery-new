@php
    $categories = getDataArray('types');
    $cities = getDataArray('cities');
@endphp
@if($categories)
    <section id="category-section">
        <div class="container-fluid">
            <div class="col-xs-12 common-heading text-center">
                <p class="shadow-text">Categories</p>
                <p class="head">Wedding Categories</p>
            </div>
            <div class="row category-main-row">
                @php $cat_count = 0; @endphp
                @foreach($categories as $type)
                    @php $cat_count++; @endphp
                    <div class="single-category-col col-6">
                        <a href="{{url('/'.$type->slug)}}" class="">
                        <!-- <a href="#" class="city-modal-link" data-link-type="{{$type->slug}}" data-toggle="modal" data-target="#cityModal"> -->
                            <div class="inner inner_{{$cat_count}}" style="background-color: {{$type->colour}};">
                                <style>
                                    .inner_<?= $cat_count ?> .img-col::after {
                                        background-color: <?= $type->colour ?> !important
                                    }
                                </style>
                                <div class="img-col">
                                    
                                        <img src="{{asset('storage/type/image/'.$type->image)}}" alt="" class="img-fluid">
                                        <div class="text-col">
                                            <p class="head">{{$type->name}}</p>
                                        </div>
                                    
                                </div>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    @if(isset($cities) && $cities)
        <div id="cityModal" class="modal fade" data-backdrop="static" data-keyboard="false">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Select City</h4>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                    </div>
                    <div class="modal-body">
                        <div id="modal-search">
                            <div class="search-input-col">
                                <input type="text" id="myInput" class="form-control" onkeyup="myFunction()" placeholder="Search...">
                                <i class="fa fa-search"></i>
                            </div>
                            <ul id="myUL" class="list-unstyled city-list">
                                @foreach($cities as $city)
                                    <li><a class="city-link" href="{{$city->slug}}">{{$city->name}} <i class="fas fa-long-arrow-alt-right"></i></a></li>
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
