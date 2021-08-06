
{{--            {{dd($pricesData)}}--}}

            @if($service->input_type == 'price')

                <div class="col-6">
                    <div class="form-group">
                    {{ Form::label('name',  Str::title($service->name) ) }}
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1">₹</span>
                        </div>
                        {{ Form::number("input_type_value[$service->id]", isset($pricesData[$service->id]['input_type_value'])? $pricesData[$service->id]['input_type_value']:null, array('class' => 'form-control','placeholder'=>'Service Price')) }}
                    </div>
                    </div>
                </div>
                @if($service->service_on_basis != 'complete')
                    <div class="col-6">
                        <div class="form-group">
                            {{ Form::label('name',  Str::title($service->name.' service on the basis of '. $service->service_on_basis) ) }}
                            {{ Form::number("service_on_basis_value[$service->id]", isset($pricesData[$service->id]['service_on_basis_value'])? $pricesData[$service->id]['service_on_basis_value']:null, array('class' => 'form-control','placeholder'=>$service->service_on_basis)) }}
                        </div>
                    </div>
                @endif
            @else
                <div class="col-12">
                    <div class="form-group">
                        @if($service->input_type == 'text')
                            {{ Form::label('name', Str::title($service->name) ) }}
                            {{ Form::text("input_type_value[$service->id]", isset($pricesData[$service->id]['service_type'])? $pricesData[$service->id]['service_type']:null, array('class' => 'form-control')) }}
                        @endif
                        @if($service->input_type == 'number')
                            {{ Form::label('name',  Str::title($service->name) ) }}
                            {{ Form::number("input_type_value[$service->id]", isset($pricesData[$service->id]['service_type'])? $pricesData[$service->id]['service_type']:null, array('class' => 'form-control')) }}
                        @endif
                    </div>
                </div>
            @endif

    <div class="col-12">
        <div class="form-group">
            {{ Form::label('description', Str::title($service->name.' service description (optional)') ) }}
            {{ Form::text("description[$service->id]", isset($pricesData[$service->id]['description'])? $pricesData[$service->id]['description']:null, array('class' => 'form-control')) }}
        </div>
    </div>

