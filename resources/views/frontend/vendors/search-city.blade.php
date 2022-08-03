@extends('frontend.layouts.app')

@section('title') {{app_name()}} @endsection

@section('content')

<section id="breadcrumb-section">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xs-12 col-sm-12">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Vendor Search</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </section>
    <section id="vendor-detail-section">
        <div class="container-fluid">
            <div class="row vendor-detail-main-col">
                <ul>
                @foreach($cities as $city)
                    <li>{{$city['name']}}
                        @php $vendos = isset($city_vendors[$city['id']])?  $city_vendors[$city['id']] : array() ;  @endphp
                        <ul>
                        @foreach($vendos as $vendor)
                            <li>{{$vendor->business_name}}</li>
                        @endforeach
                        </ul>
                    </li>
                @endforeach
                </ul>
		
			</div>
		</div>
	</section>
@endsection
