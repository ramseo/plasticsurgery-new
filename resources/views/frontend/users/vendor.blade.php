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
                        <li class="breadcrumb-item active" aria-current="page">My Vendors</li>
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
                @if($user_quotation)   
                    @if($vendors)
                        @include('frontend.users.vendor.vendors', ['vendors'=> $vendors])
                    @endif
                 
                 
                
                    @if($more_vendors)
                        @include('frontend.users.vendor.more', ['more_vendors'=> $more_vendors])
                    @endif
                @else
                    @include('frontend.users.vendor.fill', ['type'=> $type])
                @endif


            </div>
        </div>
    </div>
</section>

@endsection
