{{--            {{dd($pricesData)}}--}}
@if($service->input_type == 'price')
    <div class="col-12 padding-null">
        <div class="form-group">
            {{ Form::label('name',  Str::title($service->name) ) }}
            <div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="basic-addon1">₹</span>
                </div>
                {{ Form::number("input_type_value[$service->id]", isset($pricesData[$service->id]['input_type_value'])? $pricesData[$service->id]['input_type_value']:null, array('class' => 'form-control','placeholder'=> $service->placeholder )) }}
                @if($service->label)
                    <div class="input-group-append">
                        <span class="input-group-text" id="basic-addon1">{{$service->label}}</span>
                    </div>
                @endif
            </div>
        </div>
    </div>
    <div class="col-12 padding-null">
        <div class="form-group">
            {{ Form::label('description', Str::title($service->name.' service description (optional)') ) }}
            {{ Form::text("description[$service->id]", isset($pricesData[$service->id]['description'])? $pricesData[$service->id]['description']:null, array('class' => 'form-control')) }}
        </div>
    </div>
@endif
@if($service->input_type == 'text')
    <div class="col-12 padding-null">
        <div class="form-group">
            {{ Form::label('name', Str::title($service->name) ) }}
            {{ Form::text("input_type_value[$service->id]", isset($pricesData[$service->id]['input_type_value'])? $pricesData[$service->id]['input_type_value']:null, array('class' => 'form-control',  'placeholder'=> $service->placeholder)) }}
        </div>
    </div>
@endif
@if($service->input_type == 'number')
    <div class="col-12 padding-null">
        <div class="form-group">
            {{ Form::label('name',  Str::title($service->name) ) }}
            {{ Form::number("input_type_value[$service->id]", isset($pricesData[$service->id]['input_type_value'])? $pricesData[$service->id]['input_type_value']:null, array('class' => 'form-control', 'placeholder'=> $service->placeholder)) }}
        </div>
    </div>
@endif
@if($service->input_type == 'textarea')
    <div class="col-12 padding-null">
        <div class="form-group">
            {{ Form::label('name', Str::title($service->name) ) }}
            {{ Form::textarea("input_type_value[$service->id]", isset($pricesData[$service->id]['input_type_value'])? $pricesData[$service->id]['input_type_value']:null, array('class' => 'form-control',  'placeholder'=> $service->placeholder)) }}
        </div>
    </div>
@endif


