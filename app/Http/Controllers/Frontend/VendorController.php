<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\City;
use App\Models\Content;
use App\Models\Type;
use App\Models\VendorReview; 
use App\Models\Quotation; 
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

        $service_ids = [];
        if(isset($_GET['service'])){
            foreach($_GET['service'] as $service){
                $service_id = getData('services', 'name', $service);
                array_push($service_ids, $service_id->id);
            } 
        }

        $budget = null;
        if(isset($_GET['budget'])){
            $budget = getData('budgets', 'id', $_GET['budget']);
        }

        $vendors = DB::table('vendors');

        if(count($service_ids) > 0){
            $vendors->join('services', 'vendors.type_id', '=', 'services.type_id');
            $vendors->join('prices', 'prices.service_id', '=', 'services.id');
            $vendors->whereIn('services.id', $service_ids);
        }

        if($budget){
            if($budget->filter == 'less_then'){
                $vendors->where('vendors.price', '<' , $budget->min);
            }elseif($budget->filter == 'between'){
                $vendors->where('vendors.price', '>' , $budget->min);
                $vendors->where('vendors.price', '<' , $budget->max);
            }elseif($budget->filter == 'above'){
                $vendors->where('vendors.price', '>' , $budget->min);
            }
        }

        if(isset($_GET['sort'])){
            if($_GET['sort'] == 'low_to_high'){
                $vendors->orderBy('vendors.price', 'ASC');
            }elseif($_GET['sort'] == 'high_to_low'){
                $vendors->orderBy('vendors.price', 'DESC');
            }
        }

        if(isset($_GET['type'])){
            $vendors->where('vendors.type_id', $_GET['type']);
        }else{
            $vendors->where('vendors.type_id', $type->id);
        }

        if(isset($_GET['city'])){
            $vendors->where('vendors.city_id', $_GET['city']);
        }else{
            $vendors->where('vendors.city_id', $city->id);
        }

        $data = $vendors->groupBy('vendors.user_id')->paginate(15);

        $content = Content::where(array('type_id' => $type->id, 'city_id' => $city->id))->first();

        return view('frontend.vendors.index', compact('content','body_class', 'data', 'city', 'type'));
    }

    public function cities(Request $request)
    {

        $type_slug = $request->segment(1);

        $body_class = '';
        $cities = getDataArray('cities');
        $vendors = DB::table('vendors')->paginate(15);
        $vendors_total = DB::table('vendors')->get();
        $vendors_total= count($vendors_total);
        $type = Type::where('slug', $type_slug)->first();
        $content = Content::where(array('type_id' => $type->id, 'city_id' => null))->first();
        return view('frontend.vendors.cities', compact('content','body_class', 'cities', 'type', 'vendors', 'vendors_total'));
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

    public function saveQuotation($vendor_id){
        $vendor_id = base64_decode($vendor_id);
        $body_class = '';
        $vendor_details = DB::table('vendors')->where('id', $vendor_id)->first();
        return view('frontend.vendors.quotation', compact('body_class', 'vendor_details'));
    }

    public function storeQuotation(Request $request){
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'city' => 'required',
        ]);
        if ($validator->passes()) {
            $data = $request->all();
            $services = [];
            if(isset($data['service'])){
                foreach($data['service'] as $service){
                    if(!isset($service['service_val'])){
                        $tmp = [];
                        $tmp['service_id'] = $service['service_id'];
                        $tmp['quantity'] = $service['quantity'];
                        array_push($services, $tmp);
                    }
                }
            }

            $vendor = new Quotation();
            $vendor->vendor_id = $data['vendor_id'];
            $vendor->city_id = $data['city'];
            $vendor->name = $data['name'];
            $vendor->email = $data['email'];
            $vendor->phone = $data['phone'];
            $vendor->budget = $data['budget'];
            // $vendor->dates = $data['dates'];
            $vendor->service_json = json_encode($services);
            $vendor->save();
            return response()->json(['success' => true, 'message' => 'Quotation requested successfully!']);
        }
        return response()->json(['success' => false, 'message' => $validator->errors()->all()]);
    }
}
