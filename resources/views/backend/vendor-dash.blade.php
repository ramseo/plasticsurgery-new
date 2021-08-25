@php $vendor = getData('vendors', 'user_id', auth()->user()->id) @endphp
{{--{{dd($vendor)}}--}}
<div class="card">
    <div class="card-header">
        <h2>Hey {{$vendor->business_name }}!</h2>
        <h5 class="card-title m-0">You are now following steps away from submitting your profile for approval:</h5>
    </div>
    <div class="card-body">
        <ol class="m-0 list-unstyled p-0" style="font-size: 16px;">
            <li><i class="fas fa-check-circle text-success"></i> 1. Create Account</li>
            <li><i class="fas fa-check-circle text-soft"></i> 2. <a href="{{route('vendor.profile')}}">Complete Profile</a></li>
            <li><i class="fas fa-check-circle text-soft"></i> 3. <a href="{{route('vendor.price.index')}}">My Services & Pricing</a></li>
            <li><i class="fas fa-check-circle text-soft"></i> 4. <a href="{{route('vendor.album.index')}}">My Past Work - Photos & videos</a></li>
        </ol>
    </div>
</div>
