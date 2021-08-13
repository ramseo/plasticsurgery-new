<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\City;
use App\Models\Content;
use App\Models\Type;
use App\Models\VendorReview;
use DB;
use Illuminate\Http\Request;
use Validator;
use Illuminate\Http\Response;

class VendorController extends Controller
{

    public function index(Request $request, $city_slug)
    {
        $type_slug = $request->segment(1);
        $body_class = '';
        $city = City::where('slug', $city_slug)->first();
        $type = Type::where('slug', $type_slug)->first();
        $vendors = DB::table('vendors');
        $vendors->where('type_id', $type->id)->where('city_id', $city->id);
        $content = Content::where(array('type_id' => $type->id, 'city_id' => $city->id))->first();
        if (1 == 1) {

        }
        $data = $vendors->get();

        return view('frontend.vendors.index', compact('content','body_class', 'data', 'city', 'type'));
    }

    public function cities(Request $request)
    {

        $type_slug = $request->segment(1);

        $body_class = '';
        $cities = getDataArray('cities');
        $type = Type::where('slug', $type_slug)->first();
        $content = Content::where(array('type_id' => $type->id, 'city_id' => null))->first();
        return view('frontend.vendors.cities', compact('content','body_class', 'cities', 'type'));
    }

    public function details(Request $request, $city_slug, $vendor_slug)
    {
        $type_slug = $request->segment(1);
        $body_class = '';
        $city = City::where('slug', $city_slug)->first();
        $type = Type::where('slug', $type_slug)->first();
        $vendor_details = DB::table('vendors')->where('type_id', $type->id)->where('city_id', $city->id)->where('slug', $vendor_slug)->first();
        return view('frontend.vendors.details', compact('body_class', 'vendor_details', 'city', 'type'));
    }

    public function postReview(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'title' => 'required',
            'rating' => 'required',
            'description' => 'required',
        ]);
        if ($validator->passes()) {
            $data = $request->all();
            $vendor = new VendorReview();
            $vendor->user_id = $data['user_id'];
            $vendor->vendor_id = $data['vendor_id'];
            $vendor->type_id = $data['type_id'];
            $vendor->title = $data['title'];
            $vendor->rating = $data['rating'];
            $vendor->description = $data['description'];
            $vendor->save();
            return response()->json(['success' => true, 'message' => 'Review posted successfully!']);
        }

        return response()->json(['success' => false, 'message' => $validator->errors()->all()]);
    }
}
