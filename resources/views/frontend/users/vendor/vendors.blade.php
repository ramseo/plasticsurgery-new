<div class="vndr-snippet-container d-container">
  @if($vendors)
    @foreach($vendors as $vendor)
      <div class="vndr-snippet d-row pointer" onclick="if($(event.target).parent().is('a') || $(event.target).is('a')){}else{$(this).find('button.vndr-see').click();}">
      <div class="vndr-pic">
         @php
            $vendor_profile_img = asset('img/default-vendor.jpg');
            if($vendor->image){
                if(file_exists( public_path().'/storage/vendor/profile/'. $vendor->image )){
                    $vendor_profile_img = asset('storage/vendor/profile/'.$vendor->image);
                }
            }
        @endphp
        <img  src="{{$vendor_profile_img}}" alt="" class="img-fluid">
      </div>
      <div class="vndr-content">
        <h3 class="medium-18 vndr-name">{{$vendor->business_name}}</h3>
        <p class="normal-14 light pad-8 phone-hide">
         Photographer in Bangalore</p>
        <!-- <p class="normal-14 light vndr-status"></p> -->
      </div>
      <i class="vndr-goto ic ic-chevron-right desktop-hide"></i>
      <div class="clearfix"></div>
    </div>
    @endforeach
  @endif
</div>

<style type="text/css">

  .vndr-snippet {
  padding: 16px;
  margin-bottom: 16px;
  border: 1px solid white;
  border-radius: 4px;
  position: relative;
  transition: 0.2s all ease-in-out;
}


  .vndr-snippet:hover {
  border: 1px solid #ebebeb;
}
.vndr-pic {
  height: 100px;
  margin-right: 12px;
  position: relative;
  float: left;
}
.vndr-pic > img {
  border-radius: 2px;
  height: 100px;
  width: 164px;
  object-fit: cover;
}

.vndr-content {
  margin-right: 120px;
}
.normal-18, .medium-18, .bold-18 {
  font-size: 18px;
  line-height: 1.5em;
}

.normal-14, .medium-14, .bold-14 {
  font-size: 14px;
  line-height: 1.4;
}

img {
  vertical-align: middle;
  border-style: none;
}
</style>