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
                            @php $city_count = 1; @endphp
                            @foreach($cities as $city)
                                @if($city_count > 4)
                                    <li><a class="city-link" href="{{$city->slug}}">{{$city->name}} <i class="fas fa-long-arrow-alt-right"></i></a></li>
                                @endif
                                @php $city_count++; @endphp
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
