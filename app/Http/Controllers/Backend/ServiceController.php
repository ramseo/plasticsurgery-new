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
use App\Http\Requests\ServiceRequest;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\Rule;


class ServiceController extends Controller
{

    use Authorizable;

    public function index($typeId, Request $request)
    {
        $typeName = DB::table('types')->where('id', $typeId)->select('name')->first();
        if ($request->ajax()) {
            $services = Service::where('type_id', $typeId)->select(['id', 'name', 'input_type']);
            return Datatables::of($services)
                ->addIndexColumn()
                ->addColumn('action', function ($service) {
                    $btn = '<a href="' . route("backend.service.edit", $service->id) . '" class="btn btn-sm btn-primary mt-1" data-toggle="tooltip" title="Edit Service"><i class="fas fa-wrench"></i></a>';
                    return $btn;
                })
                ->rawColumns(['action'])
                ->make(true);
        }

        return view('backend.service.index', compact('typeName'))->with('typeId', $typeId);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create($typeId)
    {
        $typeName = DB::table('types')->where('id', $typeId)->select('name')->first();
        Log::info(label_case('Service Create | User:' . auth()->user()->name . '(ID:' . auth()->user()->id . ')'));
        return view("backend.service.create", compact('typeId', 'typeName'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     *
     * @return Response
     */

    // ServiceRequest
    public function store($typeId, Request $request)
    {
        $request->validate([
            'name' => [
                'required',
                Rule::unique('services')->where(function ($query) use ($request) {
                    return $query->where('name', $request->name)
                        ->where('type_id', $request->type_id);
                }),
            ],
        ]);

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
        $typeName = DB::table('types')->where('id', $service->type_id)->select('name')->first();
        $getDataArray = getData('services', 'id', $id);
        $typeId = $getDataArray->type_id;

        Log::info(label_case('Service Edit | ' . $service->name . '(ID:' . $service->id . ')  by User:' . auth()->user()->name . '(ID:' . auth()->user()->id . ')'));
        return view('backend.service.edit', compact('service', 'typeId', 'typeName'));
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
        $request->validate([
            'name' => "required|string",
            'positions' => 'required|string',
            'input_type' => 'required|string',
        ]);

        $service = Service::findOrFail($id);
        $service->update($request->all());
        Flash::success("<i class='fas fa-check'></i> Service Updated Successfully")->important();
        Log::info(label_case('Service Update | ' . $service->name . '(ID:' . $service->id . ')  by User:' . auth()->user()->name . '(ID:' . auth()->user()->id . ')'));
        return redirect("admin/service/" . $service->type_id);
    }



    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $service = Service::findOrFail($id);
        DB::table('services')->where('id', $id)->delete();
        // $service->delete();
        Flash::success('<i class="fas fa-check"></i> Service Deleted Successfully!')->important();
        Log::info(label_case('Service Delete | ' . $service->name . '(ID:' . $service->id . ')  by User:' . auth()->user()->name . '(ID:' . auth()->user()->id . ')'));
        return redirect("admin/service/" . $service->type_id);
        // return redirect(route('backend.service.index', $service->type_id));
    }

    /**
     * List of trashed ertries
     * works if the softdelete is enabled.
     *
     * @return Response
     */
    public function trashed()
    {
        $services = Service::onlyTrashed()->orderBy('deleted_at', 'desc')->paginate();
        Log::info(label_case('Service Trash List ') . ' | User:' . Auth::user()->name);
        return view("backend.service.trash", compact('services'));
    }


    public function restore($id)
    {
        $service = Service::withTrashed()->find($id);
        $service->restore();
        Flash::success('<i class="fas fa-check"></i> Service Data Restoreded Successfully!')->important();
        Log::info(label_case('Service Delete | ' . $service->name . '(ID:' . $service->id . ')  by User:' . auth()->user()->name . '(ID:' . auth()->user()->id . ')'));
        return redirect(route('backend.service.index'));
    }
}
