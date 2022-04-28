@extends('frontend.layouts.app')

@section('title') {{ __("Quotation") }} @endsection

@section('content')
    @php
        $cities = getDataArray('cities');
       
$min_price = 0;
$max_price = 100000; 

      
    @endphp
    <section id="quotation-section">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <!-- <p class="quotation-header" style="border: none; padding: 0px; margin: 0px 0 5px 0;">Get Quotation</p> -->
                </div>
                
                <div class="alert alert-danger alert-quotation" style="display: none;"></div>
                <form id="quotationForm" class="row" action="">
                    <div class="col-xs-12 col-sm-8">
                        @if($top_services)
                            <div>
                                <p class="quotation-header">Fill your requirements</p>
                            </div>
                            @foreach($top_services as $top_service)
                                <ul class="list-inline justified-list">
                                    <li class="list-inline-item">
                                        <div class="q-service-col">
                                            <div class="q-service-title">
                                                <p class="title">{{$top_service->name}}</p>
                                            </div>
                                          
                                        </div>
                                    </li>
                                    <li class="list-inline-item">
                                        <div class="q-add-btn-col">
                                            <label class="q-custom-label">
                                                <input type="hidden" name="service[{{$top_service->id}}][service_val]" value="0">
                                                <input class="service-selection" type="checkbox" name="service[{{$top_service->id}}]" data-type="{{ $top_service->service_type == 'complete' ? 'simple' : 'config' }}" />
                                                <span class="q-box">
                                                    Add <i class="fa fa-plus"></i>
                                                </span>
                                            </label>
                                        </div>
                                        <div class="q-quantity-box" style="display: none;">
                                            <span class="q-minus q-icon" data-type="minus"><i class="fa fa-minus"></i></span>
                                            <span class="q-plus q-icon" data-type="plus"><i class="fa fa-plus"></i></span>
                                            <input type="text" class="form-control quantity-box" name="service[{{$top_service->id}}][quantity]" value="1" />
                                            <input type="hidden" name="service[{{$top_service->id}}][service_id]" value="{{$top_service->id}}" />
                                            @if($top_service->service_type != 'complete')
                                                <div class="text-center text-capitalize for_service">
                                                    <p>{{$top_service->service_type}}</p>
                                                </div>
                                            @endif
                                        </div>
                                    </li>
                                </ul>
                            @endforeach

                            <div class="bugdet-field-col">
                                <p>Total budget?</p>
                                <input class="range-example-input" type="text" min="{{$min_price}}" max="{{$max_price}}" value="{{$min_price}}" name="budget" step="500">
                            </div>
                        @endif
                    </div>
                    <div class="col-xs-12 col-sm-4">
                        <div>
                            <p class="quotation-header">Your basic info</p>
                        </div>
                        <div class="form-group">
                            <label>Name</label>
                            <input type="text" name="name" class="form-control" value="{{auth()->user()->name}}">
                        </div>
                        <div class="form-group">
                            <label>Email</label>
                            <input type="text" name="email" class="form-control" value="{{auth()->user()->email}}">
                        </div>
                        <div class="form-group">
                            <label>Phone</label>
                            <input type="text" name="phone" class="form-control" value="{{auth()->user()->mobile}}">
                        </div>
                        <div class="form-group">
                            <label>City</label>
                            <select name="city" class="form-control">
                                <option value="">Select</option>
                                @if(count($cities) > 0)
                                    @foreach($cities as $citi)
                                        <option value="{{$citi->id}}">{{$citi->name}}</option>
                                    @endforeach
                                @endif
                            </select>
                        </div>
                     <!--    <div class="form-group">
                            <label for="">When it is required?</label>
                            <input type="text" autocomplete="off" class="form-control date" name="dates"/>
                        </div> -->

                        <div class="form-group">
                            <div id="reportrange" name="dates"  class="pull-left" style="background: #fff; cursor: pointer; padding: 5px 10px; border: 1px solid #ccc;">
                                <i class="glyphicon glyphicon-calendar fa fa-calendar"></i>&nbsp;
                                <span></span> <b class="caret"></b>
                            </div>
                        </div>
                        <div class="form-group">
                            <input type="hidden" name="type_id" value="{{$type->id}}">
                            <input id="submitQuotation" type="submit" class="btn btn-primary btn btn-block" value="Submit" disabled>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
@endsection

@push('after-styles')
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.8.0/css/bootstrap-datepicker.css" rel="stylesheet"/>
    <style>
        .blockUI.blockMsg.blockElement {
            position: fixed !important;
            top: 50% !important;
            left: 50% !important;
            transform: translate(-50%, -50%);
            background: transparent !important;
            border: none !important;
            color: white !important;
            font-size: 20px;
        }
    </style>
@endpush

@push('after-scripts')
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.3.0/js/bootstrap-datepicker.js"></script> -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.blockUI/2.70/jquery.blockUI.min.js"></script>


    <!-- Include Date Range Picker -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js"></script>
    <script type="text/javascript" src="//cdn.jsdelivr.net/bootstrap.daterangepicker/2/daterangepicker.js"></script>
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/bootstrap.daterangepicker/2/daterangepicker.css" />

    <script>

$(function() {

            var start = moment().subtract(29, 'days');
            var end = moment();

        var storeStartDate;
        var storeEndDate;
            function cb(start, end) {
                $('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'));
                    storeStartDate = start;
                    storeEndDate = end;   
            }

            $('#reportrange').daterangepicker({
                startDate: start,
                endDate: end,
                ranges: {
                   'Next 7 Days': [moment(), moment().add(6, 'days')],
                   'Next 30 Days': [moment(), moment().add(29, 'days')],
                   'This Month': [moment().startOf('month'), moment().endOf('month')],
                   'Next Month': [moment().add(1, 'month').startOf('month'), moment().add(1, 'month').endOf('month')]
                }
            }, cb);

            cb(start, end);

            // $('.date').datepicker({
            //     multidate: true,
            //     minDate: new Date()
            // });
            $('.range-example-input').asRange({});
            $(document).on('change', '.service-selection', function(){
                var type = $(this).attr('data-type');
                if($(this).is(':checked')){
                    $(this).prev().val('1');
                    $(this).next('.q-box').addClass('active').html('Added <i class="fa fa-check"></i>');
                    if(type == 'config'){
                        $(this).parents('.q-add-btn-col').hide();
                        $(this).parents('.q-add-btn-col').next('.q-quantity-box').show();
                    }
                }else{
                    $(this).prev().val('0');
                    $(this).next('.q-box').removeClass('active').html('Add <i class="fa fa-plus"></i>');
                }
            });
            $('.q-icon').click(function(){
                var type = $(this).attr('data-type');
                var input_value = parseInt($(this).parents('.q-quantity-box').find('.quantity-box').val());
                if(type == 'plus'){
                    $(this).parents('.q-quantity-box').find('.quantity-box').val(input_value + 1);
                }else if(type == 'minus'){
                    if(input_value > 1){
                        $(this).parents('.q-quantity-box').find('.quantity-box').val(input_value - 1);
                    }
                }
            });
            $('.show_details').click(function(){
                $(this).parent().next().toggle();
                if($(this).text() == 'Show details'){
                    $(this).text('Hide details');
                }else{
                    $(this).text('Show details');
                }
            });
            $('.service-selection').change(function(){
                var checked_boxes = $('.service-selection:checked').length;
                if(checked_boxes > 0){
                    $('#submitQuotation').prop('disabled', false);
                }else{
                    $('#submitQuotation').prop('disabled', true);
                }
            });
            $(document).on('submit','#quotationForm', function(e){
                e.preventDefault();
                $('body').block({ message: "Processing..." });
                var form_data = $('#quotationForm').serialize() + '&start_date='  + storeStartDate.format('D MMMM YYYY') + '&end_date='+  storeEndDate.format('D MMMM YYYY');
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });
                $.ajax({
                    type: "POST",
                    url: "{{route('frontend.quotation-type-save')}}",
                    data: form_data,
                    success: function(res) {
                        if(res.success){
                            $('.alert-quotation').html('').hide();
                            $('#quotationForm').trigger('reset');
                            toastr.success(res.message, 'Quotation requested Successfully!');
                            setTimeout(function(){
                                document.location.href = "/vendors/{{Request::segment(3)}}";
                            }, 1000);
                        }else{
                            $('.alert-quotation').html(res.message).show();
                        }
                        $('body').unblock();
                    }
                });
            });
        });
    </script>




 <script>

</script>
@endpush

