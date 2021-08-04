    <div class="col-12">
        <div class="form-group">
            @if($service->input_type == 'text')
                {{ Form::label('name', Str::title($service->name) ) }}
                {{ Form::text("service_type[$service->id]", isset($pricesData[$service->id]['service_type'])? $pricesData[$service->id]['service_type']:null, array('class' => 'form-control')) }}
            @endif
            @if($service->input_type == 'number')
                {{ Form::label('name',  Str::title($service->name) ) }}
                {{ Form::number("service_type[$service->id]", isset($pricesData[$service->id]['service_type'])? $pricesData[$service->id]['service_type']:null, array('class' => 'form-control')) }}
            @endif
            @if($service->input_type == 'price')
                {{ Form::label('name',  Str::title($service->name) ) }}
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1">₹</span>
                        </div>
                        @php $placeholder = 'Price per Day'; @endphp
                        @if($service->service_on_basis != 'day')
                            @php $placeholder = 'Price  for '. $service->name  ; @endphp
                        @endif
                        {{ Form::number("service_type[$service->id]", isset($pricesData[$service->id]['service_type'])? $pricesData[$service->id]['service_type']:null, array('class' => 'form-control','placeholder'=>$placeholder)) }}
                    </div>

            @endif
        </div>
    </div>
    <div class="col-12">
        <div class="form-group">

            {{ Form::label('description', Str::title($service->name) .' Description (optional)' ) }}
            {{ Form::text("description[$service->id]", isset($pricesData[$service->id]['description'])? $pricesData[$service->id]['description']:null, array('class' => 'form-control')) }}
        </div>
    </div>

