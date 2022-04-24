@extends('frontend.layouts.app')

@section('title') Quotations @endsection

@section('content')

<section id="breadcrumb-section">
    <div class="container-fluid">
        <div class="row">
            <div class="col-xs-12 col-sm-12">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="/">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Quotations</li>
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
                @include('frontend.users.menu')
            </div>
            <div class="col-xs-12 col-sm-9">
                <div>
                    <p class="h4">My Quotations</p>
                    @if($quotations)
                        <table class="table table-bordered table-striped">
                            <tr>
                                <th>Sr. No.</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Budget</th>
                                <th></th>
                            </tr>
                            @php
                                $count = 1;
                            @endphp
                            @foreach($quotations as $quotation)
                                <tr>
                                    <td>{{$count}}</td>
                                    <td>{{$quotation->name}}</td>
                                    <td>{{$quotation->email}}</td>
                                    <td>{{$quotation->budget}}</td>
                                    <td><a class="text-primary" href="{{ route('frontend.users.quotation', [auth()->user()->id, $quotation->id]) }}">View Details</a></td>
                                </tr>
                                @php
                                    $count++;
                                @endphp
                            @endforeach
                        </table>
                    @else
                        <div>
                            <p class="text-danger h5">No Quotations Found.</p>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
