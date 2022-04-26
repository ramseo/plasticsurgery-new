@php
  $services = json_decode($user_quotation['service_json'], true);
@endphp


<section class="my-requirements">
  <div class="d-container">
    <h2 class="bold-24 charcoal padb-8">My Requirements <a class="mr-edit myven-edit-req" href="{{ route('frontend.quotation.type', $type->slug)}}">Edit</a></h2>
    <p class="normal-12 light padb-16">Your requirements are visible to your Vendors, so that they can send you quotations.</p>

@foreach($services as $service)
  @php  $selected_services = getData('services', 'id',  $service['service_id']);  @endphp
  @if($selected_services)
    <div class="requirement">
      <p class="medium-16 req-name">{{$selected_services->name}}</p>
      <p class="normal-16 light req-days">{{$service['quantity']}} {{ $selected_services->service_type == 'day' ? $selected_services->service_type : 'Yes'}} </p>
    </div>
  @endif
@endforeach
       

       @php  $city = getData('cities', 'id',  $user_quotation->city_id);  @endphp
       @if($city)
      <div class="requirement">
        <p class="medium-16 req-name">Wedding city</p>
        <p class="normal-16 light req-days">{{$city->name}}</p>
      </div>
      @endif
    <div class="requirement">
      <p class="medium-16 req-name">Event Dates</p>
      <p class="normal-16 light req-days">
        <!-- {{$user_quotation->dates}}   -->
        26/04/2022
        <!-- -->
      </p>
    </div>
  </div>
</section>

<style type="text/css">
 .my-requirements {
  padding-top: 40px;
  padding-bottom: 24px;
  border-top: 1px solid #ebebeb;
}

.normal-24, .medium-24, .bold-24 {
  font-size: 24px;
  line-height: 1.5em;
}

.mr-edit:hover, .mr-edit {
  color: var(--brand) !important;
  font-size: 20px;
}

.normal-12, .medium-12, .bold-12 {
  font-size: 12px;
  line-height: 1.33;
}

.requirement {
  display: flex;
  padding-top: 16px;
  padding-bottom: 16px;
  max-width: 500px;
}

.normal-16, .medium-16, .bold-16 {
  font-size: 16px;
  line-height: 1.5em;
}


.req-days {
  text-align: right;
}

.req-name, .req-days {
  flex-grow: 1;
}
</style>