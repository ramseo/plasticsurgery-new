<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\City;
use App\Models\Content;
use App\Models\Type;
use App\Models\Vendor;
use App\Models\VendorReview;
use App\Models\Quotation;
use DB;
use Illuminate\Http\Request;
use Validator;
use Illuminate\Http\Response;
use App\Mail\QuotationUser;
use App\Mail\QuotationAdmin;
use Illuminate\Support\Facades\Mail;
use Auth;

class VendorController extends Controller
{



    public function typeAjax(Request $request)
    {
        $type = Type::where('slug', $request->type)->first();
        $vendors = DB::table('vendors')
            ->join('users', 'users.id', '=', 'vendors.user_id')
            ->where('type_id', $type->id)
//            ->where('email_verified_at', '!=', null)
            ->paginate(6);
        $view = view('frontend.vendors.types.inner.vendors',compact('vendors'))->render();
        return response()->json(['html'=>$view]);
    }

    public function types(Request $request)
    {

        $type_slug = $request->segment(1);
        $type = Type::where('slug', $type_slug)->first();
        $body_class = '';
        $cities = getDataArray('cities');
        $vendors_total = DB::table('vendors')->where('type_id', $type->id)->get()->count();
        $vendors_total = Vendor::join('users', 'users.id', '=', 'vendors.user_id')->where('type_id', $type->id)->get()->count();
//        $vendors_total= count($vendors_total);
        $content = Content::where(array('type_id' => $type->id, 'city_id' => null))->first();
        return view('frontend.vendors.types.listing', compact('content','body_class', 'cities', 'type', 'vendors_total'));
    }

    public function cityAjax(Request $request)
    {
        $city = City::where('slug', $request->city)->first();
        $type = Type::where('slug', $request->type)->first();

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

        $vendorsDB = DB::table('vendors');
        $vendorsDB->join('users', 'users.id', '=', 'vendors.user_id')
//            ->where('email_verified_at', '!=', null)
            ->where(array('type_id' => $type->id, 'city_id' => $city->id));

        if(count($service_ids) > 0){
            $vendorsDB->join('services', 'vendors.type_id', '=', 'services.type_id');
            $vendorsDB->join('prices', 'prices.service_id', '=', 'services.id');
            $vendorsDB->whereIn('services.id', $service_ids);
        }

        if($budget){
            if($budget->filter == 'less_then'){
                $vendorsDB->where('vendors.price', '<' , $budget->min);
            }elseif($budget->filter == 'between'){
                $vendorsDB->where('vendors.price', '>' , $budget->min);
                $vendorsDB->where('vendors.price', '<' , $budget->max);
            }elseif($budget->filter == 'above'){
                $vendorsDB->where('vendors.price', '>' , $budget->min);
            }
        }

        if(isset($_GET['sort'])){
            if($_GET['sort'] == 'low_to_high'){
                $vendorsDB->orderBy('vendors.price', 'ASC');
            }elseif($_GET['sort'] == 'high_to_low'){
                $vendorsDB->orderBy('vendors.price', 'DESC');
            }
        }

//        if(isset($_GET['type'])){
//            $vendorsDB->where('vendors.type_id', $_GET['type']);
//        }else{
//            $vendorsDB->where('vendors.type_id', $type->id);
//        }
//
//        if(isset($_GET['city'])){
//            $vendorsDB->where('vendors.city_id', $_GET['city']);
//        }else{
//            $vendorsDB->where('vendors.city_id', $city->id);
//        }

        $vendors = $vendorsDB->groupBy('vendors.user_id')->paginate(15);

        $view = view('frontend.vendors.types.inner.vendors',compact('vendors'))->render();
        return response()->json(['html'=>$view]);
    }

    public function cities(Request $request, $city_slug)
    {
        $type_slug = $request->segment(1);
        $body_class = '';
        $city = City::where('slug', $city_slug)->first();
        $type = Type::where('slug', $type_slug)->first();

//        $service_ids = [];
//        if(isset($_GET['service'])){
//            foreach($_GET['service'] as $service){
//                $service_id = getData('services', 'name', $service);
//                array_push($service_ids, $service_id->id);
//            }
//        }
//
//        $budget = null;
//        if(isset($_GET['budget'])){
//            $budget = getData('budgets', 'id', $_GET['budget']);
//        }
//
//        $vendorsDB = DB::table('vendors');
//
//        if(count($service_ids) > 0){
//            $vendorsDB->join('services', 'vendors.type_id', '=', 'services.type_id');
//            $vendorsDB->join('prices', 'prices.service_id', '=', 'services.id');
//            $vendorsDB->whereIn('services.id', $service_ids);
//        }
//
//        if($budget){
//            if($budget->filter == 'less_then'){
//                $vendorsDB->where('vendors.price', '<' , $budget->min);
//            }elseif($budget->filter == 'between'){
//                $vendorsDB->where('vendors.price', '>' , $budget->min);
//                $vendorsDB->where('vendors.price', '<' , $budget->max);
//            }elseif($budget->filter == 'above'){
//                $vendorsDB->where('vendors.price', '>' , $budget->min);
//            }
//        }
//
//        if(isset($_GET['sort'])){
//            if($_GET['sort'] == 'low_to_high'){
//                $vendorsDB->orderBy('vendors.price', 'ASC');
//            }elseif($_GET['sort'] == 'high_to_low'){
//                $vendorsDB->orderBy('vendors.price', 'DESC');
//            }
//        }
//
//        if(isset($_GET['type'])){
//            $vendorsDB->where('vendors.type_id', $_GET['type']);
//        }else{
//            $vendorsDB->where('vendors.type_id', $type->id);
//        }
//
//        if(isset($_GET['city'])){
//            $vendorsDB->where('vendors.city_id', $_GET['city']);
//        }else{
//            $vendorsDB->where('vendors.city_id', $city->id);
//        }
//
//        $vendors = $vendorsDB->groupBy('vendors.user_id')->paginate(15);

        $content = Content::where(array('type_id' => $type->id, 'city_id' => $city->id))->first();
        $vendors_total = DB::table('vendors')
            ->join('users', 'users.id', '=', 'vendors.user_id')
//            ->where('email_verified_at', '!=', null)
            ->where(array('type_id' => $type->id, 'city_id' => $city->id))->get()->count();
        return view('frontend.vendors.types.cities.listing', compact('content','body_class', 'city', 'type', 'vendors_total'));
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
            'rating' => 'required',
            'description' => 'required',
        ]);
        if ($validator->passes()) {
            $data = $request->all();
            // dd($data);
            $vendor = new VendorReview();
            $vendor->user_id = $data['user_id'];
            $vendor->vendor_id = $data['vendor_id'];
            $vendor->type_id = $data['type_id'];
            $vendor->city_id = $data['city_id'];
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

        $top_services  = DB::table('services')
            ->join('prices', 'services.id', '=', 'prices.service_id')
            ->select('services.*', 'prices.input_type_value', 'prices.description')
            ->where('prices.vendor_id', $vendor_id)
            ->where('services.positions', 'top')
            ->where('services.input_type', 'price')
            ->get();
        return view('frontend.vendors.quotation', compact('body_class', 'vendor_details', 'top_services'));
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
            $vendor->user_id = Auth::user()->id;
            $vendor->city_id = $data['city'];
            $vendor->name = $data['name'];
            $vendor->email = $data['email'];
            $vendor->phone = $data['phone'];
            $vendor->budget = $data['budget'];
            $vendor->dates = $data['dates'];
            $vendor->service_json = json_encode($services);
            $vendor->save();

            Mail::to($vendor->email)->send(new QuotationUser($vendor));
            Mail::to(env('MAIL_FROM_ADDRESS'))->send(new QuotationAdmin($vendor));

            return response()->json(['success' => true, 'message' => 'Quotation requested successfully!']);
        }
        return response()->json(['success' => false, 'message' => $validator->errors()->all()]);
    }
}
