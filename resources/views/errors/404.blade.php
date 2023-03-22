@extends('frontend.layouts.app')

@section ('title', '404 Error' . " - " . config('app.name'))

@section('content')
<div class="card text-white margin-404">
    <div class="card-body">
        <div class="row">
            <div class="col">
                <div class="text-center">
                    <h2>Page Not Found</h2>
                    <p>
                        <button onclick="window.history.back()" class="btn btn-warning ml-1" data-toggle="tooltip" title="Return Back">
                            <i class="fas fa-reply"></i>
                            Return Back
                        </button>
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection