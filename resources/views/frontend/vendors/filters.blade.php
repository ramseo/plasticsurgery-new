@php
    $cities = getDataArray('cities');
    $categories = getDataArray('types');
    $services = getDataArray('services', 'positions', 'top');
    $budgets = getDataArray('budgets');
@endphp
<div class="filter-overlay" style="display: none;"></div>
<div id="filter-main-col" class="">
    <form id="filterForm" action="{{url('/') . '/' . $selected_type->slug . '/' . $selected_city->slug}}">
        <div class="filter-inner-col">
            <div class="filter-top-bar">
                <ul class="list-inline">
                    <li class="list-inline-item">
                        <p>Filter</p>
                    </li>
                    <li class="list-inline-item">
                        <select class="form-control" name="type" id="typeFilter">
                            <option value="">Select Category</option>
                            @if(isset($categories) && $categories)
                                @foreach($categories as $category)
                                    <option data-type-slug="{{$selected_type->slug}}" value="{{$category->id}}" {{$selected_type->slug == $category->slug ? 'selected' : ''}}>{{$category->name}}</option>
                                @endforeach
                            @endif
                        </select>
                    </li>
                    <li class="list-inline-item">
                        <p>IN</p>
                    </li>
                    <li class="list-inline-item">
                        <select class="form-control" name="city" id="cityFilter">
                            <option value="">Select City</option>
                            @if(isset($cities) && $cities)
                                @foreach($cities as $filter_city)
                                    <option data-city-slug="{{$filter_city->slug}}" value="{{$filter_city->id}}" {{$selected_city->slug == $filter_city->slug ? 'selected' : ''}}>{{$filter_city->name}}</option>
                                @endforeach
                            @endif
                        </select>
                    </li>
                </ul>
            </div>
            <div class="filter-body-col">
                <div class="container">
                    <div class="filter-form-col">
                        @if(isset($services))
                            <div class="single-filter-col col-xs-12 col-sm-4">
                                <div class="filter-col-header">
                                    <p>Services</p>
                                </div>
                                <div class="filter-col-body">
                                    <ul class="list-unstyled filter-list">
                                        @php
                                            $selected_services = isset($_GET['service']) ? $_GET['service'] : []; 
                                        @endphp
                                        @foreach($services as $service)
                                            <li>
                                                <label class="custom-box-label">
                                                    <input type="checkbox" class="" name="service[]" value="{{$service->name}}" {{in_array($service->name, $selected_services) ? 'checked' : ''}}>
                                                    <span class="custom-box"><i class="fa fa-check"></i></span>
                                                    <span class="text">{{$service->name}}</span>
                                                </label>
                                            </li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                        @endif
                        @if(isset($budgets))
                            <div class="single-filter-col col-xs-12 col-sm-4">
                                <div class="filter-col-header">
                                    <p>Budget</p>
                                </div>
                                <div class="filter-col-body">
                                    <ul class="list-unstyled filter-list">
                                        @foreach($budgets as $budget)
                                            <li>
                                                @php
                                                    $budget_label = '';
                                                    $budget_value = '';
                                                    if($budget->filter == 'less_then'){
                                                        $budget_label = 'Less than '.$budget->min;
                                                    }elseif($budget->filter == 'between'){
                                                        $budget_label = $budget->min . ' - ' . $budget->max;
                                                    }elseif($budget->filter == 'above'){
                                                        $budget_label = 'Above '. $budget->min;
                                                    }
                                                @endphp
                                                <label class="custom-box-label custom-radio-box">
                                                    <input type="radio" class="" name="budget" value="{{$budget->id}}" {{isset($_GET['budget']) && $_GET['budget'] == $budget->id ? 'checked' : ''}}>
                                                    <span class="custom-box"><i class="fa fa-check"></i></span>
                                                    <span class="text">{{$budget_label}}</span>
                                                </label>
                                            </li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                        @endif
                        <div class="single-filter-col col-xs-12 col-sm-4">
                            <div class="filter-col-header">
                                <p>Sorting</p>
                            </div>
                            <div class="filter-col-body">
                                <ul class="list-unstyled filter-list">
                                    <li>
                                        <label class="custom-box-label custom-radio-box">
                                            <input type="radio" class="" name="sort" value="relevance" {{isset($_GET['sort']) && $_GET['sort'] == 'relevance' ? 'checked' : ''}}>
                                            <span class="custom-box"><i class="fa fa-check"></i></span>
                                            <span class="text">Relevance</span>
                                        </label>
                                    </li>
                                    <li>
                                        <label class="custom-box-label custom-radio-box">
                                            <input type="radio" class="" name="sort" value="low_to_high" {{isset($_GET['sort']) && $_GET['sort'] == 'low_to_high' ? 'checked' : ''}}>
                                            <span class="custom-box"><i class="fa fa-check"></i></span>
                                            <span class="text">Price (Low to High)</span>
                                        </label>
                                    </li>
                                    <li>
                                        <label class="custom-box-label custom-radio-box">
                                            <input type="radio" class="" name="sort" value="high_to_low" {{isset($_GET['sort']) && $_GET['sort'] == 'high_to_low' ? 'checked' : ''}}>
                                            <span class="custom-box"><i class="fa fa-check"></i></span>
                                            <span class="text">Price (High to Low)</span>
                                        </label>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="filter-footer-col">
                <ul class="list-inline">
                    <li class="list-inline-item">
                        <button class="btn btn-warning cancel-filter" type="button">Cancel</button>
                    </li>
                    <li class="list-inline-item">
                        <button class="btn btn-primary" type="submit">Search</button>
                    </li>
                </ul>
            </div>
        </div>
    </form>
</div>

@push('after-scripts')
    <script>
        $(document).ready(() => {
            var site_base_url = "{{URL('/')}}";
            $('#filterForm').submit((e) => {
                e.preventDefault();
                var formArr = $('#filterForm').serializeArray();
                var selectedType = $('#typeFilter option:selected').attr('data-type-slug');
                var selectedCity = $('#cityFilter option:selected').attr('data-city-slug');
                var redirect_url = site_base_url + '/' + selectedType + '/' + selectedCity;
                var urlParameters = '';
                // formArr.splice(0,2);
                formArr.forEach((item, index) => {
                    if(index == 0){
                        urlParameters += '?' + item['name'] + '=' + item['value'];
                    }else{
                        urlParameters += '&' + item['name'] + '=' + item['value'];
                    }
                })
                redirect_url = redirect_url + urlParameters;
                window.location = redirect_url;
            });
        });
    </script>
@endpush