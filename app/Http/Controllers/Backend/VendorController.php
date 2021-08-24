<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Vendor;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Log;
use Flash;
use Yajra\DataTables\DataTables;

class VendorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $vendors = Vendor::select(['id', 'business_name']);
            return Datatables::of($vendors)
                ->addIndexColumn()
                ->addColumn('action', function ($vendor) {
                    $btn = '<a href="' . route("backend.vendor.edit", $vendor->id) . '" class="btn btn-sm btn-primary mt-1" data-toggle="tooltip" title="Edit Service"><i class="fas fa-wrench"></i></a>';
                    return $btn;
                })
                ->rawColumns(['action'])
                ->make(true);
        }
        return view('backend.vendor.index');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function store(Request $request)
    {
        $vendor = Vendor::create($request->all());
        Flash::success("<i class='fas fa-check'></i> Profile Added")->important();
        Log::info(label_case('Vendor Store | ' . $vendor->business_name . '(ID:' . $vendor->id . ')  by User:' . auth()->user()->name . '(ID:' . auth()->user()->id . ')'));
        return redirect("admin/vendor");
    }

    public function edit($id)
    {
        $vendor = Vendor::findOrFail($id);
        Log::info(label_case('Vendor Edit | ' . $vendor->name . '(ID:' . $vendor->id . ')  by User:' . auth()->user()->name . '(ID:' . auth()->user()->id . ')'));
        return view("backend.vendor.edit")->with('vendor', $vendor);
    }


    public function update(Request $request)
    {
        $user_id = auth()->user()->id;
        $vendor = Vendor::where('user_id', '=', $user_id)->first();
        $data = $request->all();
        $data = array_merge($data, ['user_id' => $user_id]);

        if ($request->file('image')) {
            $file_image = fileUpload($request, 'image', 'vendor/profile/');
            $data = array_merge($data, ['image' => $file_image]);
        }


        if ($vendor) {
            $vendor->update($data);
        } else {
            $data = array_merge($data, ['type_id' => 1]);
            $data = array_merge($data, ['city_id' => 1]);
            $vendor = Vendor::create($data);
        }
        Flash::success("<i class='fas fa-check'></i> Profile Updated Successfully")->important();
//        Log::info(label_case('Vendor Update | ' . $vendor->business_name . '(ID:' . $vendor->id . ')  by User:' . auth()->user()->name . '(ID:' . auth()->user()->id . ')'));
        return redirect("vendor/profile");
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     *
     * @return Response
     */
    public function profile()
    {
        $user_id = auth()->user()->id;

        $vendor = Vendor::where('user_id', '=', $user_id)->first();
//        Log::info(label_case('Vendor Profile | User:' . auth()->user()->name . '(ID:' . auth()->user()->id . ')'));
        return view('backend.vendor.profile', compact('vendor'));
    }

    public function updateProfile(Request $request)
    {

        $data = $request->all();

        if(auth()->user()->getRoleNames()->first() == 'vendor'){
            $user_id = auth()->user()->id;
            $vendor = Vendor::where('user_id', '=', $user_id)->first();
            $data = array_merge($data, ['user_id' => $user_id]);
        }else{
            $vendor = Vendor::where('user_id', '=', $user_id)->first();
        }

        if ($request->file('image')) {
            $file_image = fileUpload($request, 'image', 'vendor/profile/');
            $data = array_merge($data, ['image' => $file_image]);
        }


        if ($vendor) {
            $vendor->update($data);
        } else {
            $data = array_merge($data, ['type_id' => 1]);
            $data = array_merge($data, ['city_id' => 1]);
            $vendor = Vendor::create($data);
        }

        if(auth()->user()->getRoleNames()->first() == 'vendor'){

            Flash::success("<i class='fas fa-check'></i> Profile Updated Successfully")->important();
//        Log::info(label_case('Vendor Update | ' . $vendor->business_name . '(ID:' . $vendor->id . ')  by User:' . auth()->user()->name . '(ID:' . auth()->user()->id . ')'));
            return redirect("vendor/profile");
        }else{

            Flash::success("<i class='fas fa-check'></i> Profile Updated Successfully")->important();
//        Log::info(label_case('Vendor Update | ' . $vendor->business_name . '(ID:' . $vendor->id . ')  by User:' . auth()->user()->name . '(ID:' . auth()->user()->id . ')'));
            return redirect("admin/vendor/edit/".$vendor->id);
        }
    }


}
