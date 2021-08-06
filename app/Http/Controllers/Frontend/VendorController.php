<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\City;
use App\Models\Type;
use DB;

class VendorController extends Controller
{

    public function index($type_slug, $city_slug){
        $body_class = '';
        $city = City::where('slug', $city_slug)->first();
        $type = Type::where('slug', $type_slug)->first();
        $vendors = DB::table('vendors');
        $vendors->where('type_id', $type->id)->where('city_id', $city->id);
        if(1 == 1){

        }
        $data = $vendors->get();
        // dd($data);

        return view('frontend.vendors.index', compact('body_class', 'data', 'city', 'type'));
    }

    public function cities($type_slug){
        $body_class = '';
        $cities = getDataArray('cities');
        $type = Type::where('slug', $type_slug)->first();

        return view('frontend.vendors.cities', compact('body_class', 'cities', 'type'));
    }

    public function details($type_slug, $city_slug, $vendor_slug){
        $body_class = '';
        $city = City::where('slug', $city_slug)->first();
        $type = Type::where('slug', $type_slug)->first();
        $vendor_details = DB::table('vendors')->where('type_id', $type->id)->where('city_id', $city->id)->where('slug', $vendor_slug)->first();
        return view('frontend.vendors.details', compact('body_class', 'vendor_details', 'city', 'type'));
    }

    public function postReview(Request $request){
        VendorReview::create($request->all());
        Flash::success("<i class='fas fa-check'></i> Review posted successfully.")->important();
        return redirect("/");
    }
}
