@extends('frontend.layouts.app')

@section('title') Quotation Details @endsection

@section('content')

<section id="breadcrumb-section">
    <div class="container-fluid">
        <div class="row">
            <div class="col-xs-12 col-sm-12">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="/">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Quotation Details</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</section>
<section class="profile-form-section">
    <div class="container-fluid">
        <div class="row">
            <div class="col-xs-12 col-sm-3">
                <div class="menu-menu-col">
                    <ul class="list-unstyled">
                        <li><a href="{{ route('frontend.users.profileEdit', auth()->user()->id) }}"><i class="fa fa-user"></i> My Profile</a></li>
                        <li><a class="active" href="{{ route('frontend.users.quotations', auth()->user()->id) }}"><i class="far fa-file-alt"></i> Quotations</a></li>
                        <li><a href="{{ route('frontend.users.changePassword', auth()->user()->id) }}"><i class="fa fa-key"></i> Change Password</a></li>
                        <li><a href="{{ route('logout') }}"><i class="fas fa-lock"></i> Logout</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-xs-12 col-sm-9">
                <div>
                    <p class="h4">Quotation Details</p>
                    @if($quotations)
                        <table class="table table-bordered table-striped">
                            <tr>
                                <th width="200">Name</th>
                                <td>{{$quotations->name}}</td>
                            </tr>
                            <tr>
                                <th>Email</th>
                                <td>{{$quotations->email}}</td>
                            </tr>
                            <tr>
                                <th>Phone</th>
                                <td>{{$quotations->phone}}</td>
                            </tr>
                            <tr>
                                <th>Budget</th>
                                <td>{{$quotations->budget}}</td>
                            </tr>
                            <tr>
                                <th>Dates</th>
                                <td>{{$quotations->dates}}</td>
                            </tr>
                            <tr>
                                <th>Services</th>
                                <td>
                                    @php
                                        $services = json_decode($quotations->service_json, true);
                                    @endphp
                                    <div>
                                        <p class="h4">Selected Services</p>
                                    </div>
                                    @foreach($services as $service)
                                        @php
                                            $selected_services = get_vendor_selected_services($quotations->vendor_id, 'top', $service['service_id']);
                                        @endphp
                                        <div class="service-col">
                                            <ul class="list-unstyled">
                                                <li>
                                                    <strong class="text-primary">Service: </strong> {{$selected_services->name}}
                                                </li>
                                                <li>
                                                    <strong>Current Service Price: </strong> {{$selected_services->input_type_value}}
                                                </li>
                                                <li>
                                                    <strong>Time: </strong> {{$selected_services->service_type == 'complete' ? 'Complete Service' : 'For '. $service['quantity'] . ' ' . $selected_services->service_type}}
                                                </li>
                                            </ul>
                                        </div>
                                        <hr style="border-top: 1px dashed rgba(0, 0, 21, 0.2);">
                                    @endforeach
                                </td>
                            </tr>
                        </table>
                    @endif
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
