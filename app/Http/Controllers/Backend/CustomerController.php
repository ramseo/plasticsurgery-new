<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Log;
use Flash;
use Yajra\DataTables\DataTables;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $vendors = User::select(['id', 'name', 'username', 'email', 'email_verified_at', 'updated_at', 'status'])->whereHas(
                'roles', function($q){
                $q->where('name', 'user');
            }
            )->get();
            return Datatables::of($vendors)
                ->addIndexColumn()
                ->addColumn('action', function ($vendor) {
                    $btn = '<a href="' . route("backend.customer.edit", $vendor->id) . '" class="btn btn-sm btn-primary mt-1" data-toggle="tooltip" title="Edit Service"><i class="fas fa-wrench"></i></a>';
                    return $btn;
                })
                ->rawColumns(['action'])
                ->make(true);
        }
        return view('backend.customer.index');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     *
     * @return Response
     */
//    public function store(Request $request)
//    {
//        $vendor = User::create($request->all());
//        Flash::success("<i class='fas fa-check'></i> Profile Added")->important();
//        Log::info(label_case('Vendor Store | ' . $vendor->business_name . '(ID:' . $vendor->id . ')  by User:' . auth()->user()->name . '(ID:' . auth()->user()->id . ')'));
//        return redirect("admin/vendor");
//    }

    public function edit($id)
    {
        $user = User::findOrFail($id);
        Log::info(label_case('User Edit | ' . $user->name . '(ID:' . $user->id . ')  by User:' . auth()->user()->name . '(ID:' . auth()->user()->id . ')'));
        return view("backend.customer.edit")->with('user', $user);
    }



    public function update(Request $request, $id)
    {
        $data = $request->all();
        $vendor = User::findOrFail($id);
        if ($request->file('image')) {
            $file_image = fileUpload($request, 'image', 'customer/profile/');
            $data = array_merge($data, ['image' => $file_image]);
        }

        $vendor->update($data);

        Flash::success("<i class='fas fa-check'></i> Vendor Updated Successfully")->important();
        Log::info(label_case('Vendor Update | ' . $vendor->business_name . '(ID:' . $vendor->id . ')  by User:' . auth()->user()->name . '(ID:' . auth()->user()->id . ')'));
        return redirect("admin/customer/edit/" . $vendor->id);
    }

}
