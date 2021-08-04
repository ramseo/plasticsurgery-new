<?php

namespace App\Http\Controllers\Backend;

use App\Authorizable;
use App\Http\Controllers\Controller;

use App\Models\Service;
use App\User;
use Carbon\Carbon;
use Flash;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Log;
use Yajra\DataTables\DataTables;


class ServiceController extends Controller
{

    use Authorizable;

    public function index($typeId, Request $request)
    {
        if ($request->ajax()) {
            $services = Service::where('type_id', $typeId)->select(['services.id', 'services.name', 'services.placeholder']);
            return Datatables::of($services)
                ->addIndexColumn()
                ->addColumn('action', function ($service) {
                    $btn = '<a href="' . route("backend.service.edit", $service->id) . '" class="btn btn-sm btn-primary mt-1" data-toggle="tooltip" title="Edit Service"><i class="fas fa-wrench"></i></a>';
                    return $btn;
                })
                ->rawColumns(['action'])
                ->make(true);
        }

        return view('backend.service.index')->with('typeId', $typeId);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create($typeId)
    {
        Log::info(label_case('Service Create | User:' . auth()->user()->name . '(ID:' . auth()->user()->id . ')'));
        return view("backend.service.create", compact('typeId'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function store($typeId, Request $request)
    {
        $service = Service::create($request->all());
        Flash::success("<i class='fas fa-check'></i> New Service Added")->important();
        Log::info(label_case('Service Store | ' . $service->name . '(ID:' . $service->id . ')  by User:' . auth()->user()->name . '(ID:' . auth()->user()->id . ')'));
        return redirect("admin/service/$typeId");
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $service = Service::findOrFail($id);
        Log::info(label_case('Service Edit | ' . $service->name . '(ID:' . $service->id . ')  by User:' . auth()->user()->name . '(ID:' . auth()->user()->id . ')'));
        return view('backend.service.edit', compact('service'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param int $id
     *
     * @return Response
     */
    public function update($id, Request $request)
    {
        $service = Service::findOrFail($id);
        $service->update($request->all());
        Flash::success("<i class='fas fa-check'></i> Service Updated Successfully")->important();
        Log::info(label_case('Service Update | ' . $service->name . '(ID:' . $service->id . ')  by User:' . auth()->user()->name . '(ID:' . auth()->user()->id . ')'));
        return redirect("admin/service/" . $service->type_id);
    }


}
