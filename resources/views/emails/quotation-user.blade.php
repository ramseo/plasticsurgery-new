<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    </head>
    <body>
        <style>
            @media only screen and (max-width: 600px) {
                .inner-body {
                    width: 100% !important;
                }

                .footer {
                    width: 100% !important;
                }
            }
            @media only screen and (max-width: 500px) {
                .button {
                    width: 100% !important;
                }
            }
        </style>

        <table class="wrapper" width="100%" cellpadding="0" cellspacing="0" role="presentation">
            <tr>
                <td align="center">
                    <table class="content" width="100%" cellpadding="0" cellspacing="0" role="presentation">
                        <tr>
                            <td class="header">
                                <a href="{{url('/')}}" style="display: inline-block;">
                                    <img src="{{asset('images/logo.png')}}" class="logo" alt="Logo">
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td class="body" width="100%" cellpadding="0" cellspacing="0">
                                <table class="inner-body" align="center" width="570" cellpadding="0" cellspacing="0" role="presentation">
                                    <!-- Body content -->
                                    <tr>
                                        <td class="content-cell">
                                            <p>Quotation Request</p>
                                        </td>
                                    </tr>
                                </table>
                                <table class="inner-body" align="center" width="570" cellpadding="0" cellspacing="0" role="presentation">
                                    <tr>
                                        <th width="200">Name</th>
                                        <td>{{$details->name}}</td>
                                    </tr>
                                    <tr>
                                        <th>Email</th>
                                        <td>{{$details->email}}</td>
                                    </tr>
                                    <tr>
                                        <th>Phone</th>
                                        <td>{{$details->phone}}</td>
                                    </tr>
                                    <tr>
                                        <th>Budget</th>
                                        <td>{{$details->budget}}</td>
                                    </tr>
                                    <tr>
                                        <th>Dates</th>
                                        <td>{{$details->dates}}</td>
                                    </tr>
                                    <tr>
                                        <th>Services</th>
                                        <td>
                                            @php
                                                $services = json_decode($details->service_json, true);
                                            @endphp
                                            <div>
                                                <p class="h4">Selected Services</p>
                                            </div>
                                            @foreach($services as $service)
                                                @php
                                                    $selected_services = get_vendor_selected_services($details->vendor_id, 'top', $service['service_id']);
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
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <table class="footer" align="center" width="570" cellpadding="0" cellspacing="0" role="presentation">
                                    <tr>
                                        <td class="content-cell" align="center">

                                        </td>
                                    </tr>
                                </table>
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
        </table>
    </body>
</html>
