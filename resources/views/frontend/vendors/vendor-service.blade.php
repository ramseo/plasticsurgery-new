<div class="single-price">
    <ul class="list-inline space-list">
        <li>
            <p class="grey-text text-uppercase"><strong>{{$service_item->name}}</strong></p>
            <p class="info">
                @if($service_item->input_type == 'price')
                    <i class="fas fa-rupee-sign"></i> {{$service_item->input_type_value}} {{$service_item->service_on_basis_value == 1 ? 'per' : 'for'}} {{$service_item->service_on_basis}}
                @else
                    {{$service_item->input_type_value}}
                @endif
            </p>
        </li>
        @if($service_item->description != '')
            <li>
                <i class="fas fa-chevron-down service-description-toggler"></i>
            </li>
        @endif
    </ul>
    <div class="service-price-description" style="display: none;">
        {!!$service_item->description!!}
    </div>
</div>

@push('after-scripts')
    <script>
        $(document).ready(function(){
            $(document).on('click', '.service-description-toggler', function(event){
                event.stopPropagation();
                event.stopImmediatePropagation();
                $(this).parents('.space-list').next('.service-price-description').slideToggle();
            });
        });
    </script>
@endpush