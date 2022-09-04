@php
$cities = getDataArray('cities');
$types = getDataArray('types');
@endphp

<div class="col-xs-12 col-sm-5 vendor-detail-text-col">
   <div class="inner bg-white-custom">
      <div class="inner-col">
         @if(setting('homepage_title'))
         <h4>{{ setting('homepage_title') }}</h4>
         @endif
         @if(setting('homepage_sub_title'))
         <p class="grey-text">{{ setting('homepage_sub_title') }}</p>
         @endif
      </div>

      <form class="form-inline-block honeyform"  id="searchForm">
         <select class="custom-select my-1 mr-sm-2" id="typeField">
            <option value="">Select Vendor Type</option>
            @if(isset($types) && $types)
            @foreach($types as $type)
            <option value="{{$type->slug}}">{{$type->name}}</option>
            @endforeach
            @endif
         </select>

         <select class="custom-select my-1 mr-sm-2" id="cityField">
            <option value="">Select City</option>
            @if(isset($cities) && $cities)
            @foreach($cities as $city)
            <option value="{{$city->slug}}">{{$city->name}}</option>
            @endforeach
            @endif
         </select>

         <button type="submit" class="btn btn-primary my-1">Search</button>
      </form>
   </div>



</div>
</div>


@push ("after-scripts")
<script>
   $(document).ready(function() {
      $('#searchForm').submit(function(e) {
         e.preventDefault();
         var type = $('#typeField').val();
         var city = $('#cityField').val();
         var typeUrl = type + '/' + city;
         window.location.href = typeUrl;
         console.log(typeUrl);
      });
   });
</script>
@endpush