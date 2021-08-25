@php

    function albumImages($albums){
     $status = false;
      if(count($albums) >= 2){
          $status = true;
            foreach ($albums as $album){
              $images = getDataArray('images', 'album_id', $album->id);
              $status = (count($images) >= 1);
            }
        }
        return $status;
    }

    $profile = $services = $photos = 0;
    $vendor = getData('vendors', 'user_id', auth()->user()->id);
    $prices = getDataArray('prices', 'vendor_id', $vendor->id);
    $albums = getDataArray('albums', 'vendor_id', $vendor->id);
    $profile = ($vendor->business_name != '' && $vendor->image != '' && $vendor->price != '' && $vendor->label != '' && $vendor->business_address != '' );
    $services = (count($prices) >= 3);
    $photos = albumImages($albums);


@endphp

@if($vendor->status == 1)
    <div class="card">
        <div class="card-header">
            <h2>Hey {{$vendor->business_name }}!</h2>
            <h5 class="card-title m-0">You are now following steps away from submitting your profile for approval:</h5>
        </div>
        <div class="card-body">
            <ol class="m-0 list-unstyled p-0" style="font-size: 16px;">
                <li><i class="fas fa-check-circle text-success"></i> 1. Create Account</li>
                @if($profile)
                    <li><i class="fas fa-check-circle text-success"></i> 2. Complete Profile</li>
                @else
                    <li><i class="fas fa-check-circle text-soft"></i> 2. <a href="{{route('vendor.profile')}}">Complete
                            Profile</a></li>
                @endif
                @if($services)
                    <li><i class="fas fa-check-circle text-success"></i> 3.My Services & Pricing</li>
                @else
                    <li><i class="fas fa-check-circle text-soft"></i> 3. <a href="{{route('vendor.price.index')}}">My
                            Services & Pricing</a></li>
                @endif
                @if($photos)
                    <li><i class="fas fa-check-circle text-success"></i> 4. My Past Work - Photos & videos</li>
                @else
                    <li><i class="fas fa-check-circle text-soft"></i> 4. <a href="{{route('vendor.album.index')}}">My
                            Past Work - Photos & videos</a></li>
                @endif
            </ol>
        </div>
    </div>
@endif
