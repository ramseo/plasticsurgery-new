@if($travels->count() > 0)
    @foreach($travels as $travel)
       <div class="col-lg-4 col-md-4">
          <div class="honeymoon-thumbnail-img">
             <a href="{{url('/') . '/honeymoon-ideas/' . $travel->slug }}">
                    @php
                        $travel_img = asset('img/default-vendor.jpg');
                        if($travel->featured_image){
                            if(file_exists( public_path().'/'. $travel->featured_image )){
                                $travel_img = asset($travel->featured_image);
                            }
                        }
                    @endphp
             <img src="{{$travel_img}}" class="img-fluid">
            </a>
             <p>{{$travel->name}}7</p>
             <span>{{$travel->intro}}</span>
          </div>
       </div>
   @endforeach
@endif
