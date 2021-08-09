<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Service;
use App\Models\Vendor;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Log;
use Flash;
class VendorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        Log::info(label_case('Vendor Create | User:' . auth()->user()->name . '(ID:' . auth()->user()->id . ')'));
        return view("backend.vendor.create");
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


    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param int $id
     *
     * @return Response
     */
    public function update(Request $request)
    {
        $user_id = auth()->user()->id;
        $vendor = Vendor::where('user_id', '=', $user_id)->first();
        $data = $request->all();
        $data = array_merge($data, ['user_id' => $user_id]);

        if($request->file('image')){
            $file_image = fileUpload($request, 'image','vendor/profile/');
            $data = array_merge($data,['image'=> $file_image]);
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

}
