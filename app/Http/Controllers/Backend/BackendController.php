<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\City;
use App\Models\Type;
use App\Models\Vendor;
use Auth;

class BackendController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $vendor = Vendor::where('user_id',  Auth::id())->first();
        $vendor_user = Auth::user();
        $city = City::where('id', $vendor->city_id)->first();
        $type = Type::where('id', $vendor->type_id)->first();

        $vendor_url = url('/').'/'.$type->slug.'/'.$city->slug.'/'.$vendor->slug;
        $vendor_data =  array( 'vendor_business_name' => $vendor->business_name,            'vendor_url' => $vendor_url );
        return view('backend.index', compact('vendor_data'));
    }
}
