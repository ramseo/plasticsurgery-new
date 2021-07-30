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

//    public function __construct()
//    {
//
//        // Page Title
//        $this->module_title = 'Service';
//
//        // module name
//        $this->module_name = 'service';
//
//        // directory path of the module
//        $this->module_path = 'service';
//
//        // module icon
//        $this->module_icon = 'c-icon cil-people';
//
//        // module model name, path
//        $this->module_model = "App\Models\Service";
//    }

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */


    public function index($typeId,Request $request) {
        if ($request->ajax()) {
            $services = Service::where('type_id',$typeId)
                ->select(['services.id','services.name','services.description'])
            ;
            return Datatables::of($services)
                ->addIndexColumn()
                ->addColumn('action', function($service){
                    $btn =  '<a href="'.url("admin/service/edit/$service->id").'" class="btn btn-sm btn-primary mt-1" data-toggle="tooltip" title="Edit Service"><i class="fas fa-wrench"></i></a>';
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


        $module_title = 'Service';
        $module_name = 'service';
        $module_path = 'service';
        $module_icon = 'c-icon cil-people';
        $module_model ="App\Models\Service";
        $module_name_singular = Str::singular($module_name);

        $module_action = 'Create';

        Log::info(label_case($module_title.' '.$module_action).' | User:'.auth()->user()->name.'(ID:'.auth()->user()->id.')');

        return view(
            "backend.$module_name.create",
            compact('module_title', 'module_name', 'module_icon', 'module_name_singular', 'module_action', 'typeId')
        );
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function store($typeId,Request $request)
    {
        $module_title = 'Service';
        $module_name = 'service';
        $module_path = 'service';
        $module_icon = 'c-icon cil-people';
        $module_model ="App\Models\Service";
        $module_name_singular = Str::singular($module_name);

        $module_action = 'Store';

        $$module_name_singular = $module_model::create($request->all());

        Flash::success("<i class='fas fa-check'></i> New '".Str::singular($module_title)."' Added")->important();

        Log::info(label_case($module_title.' '.$module_action)." | '".$$module_name_singular->name.'(ID:'.$$module_name_singular->id.") ' by User:".auth()->user()->name.'(ID:'.auth()->user()->id.')');

        return redirect("admin/$module_name/$typeId");
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
        $module_title = 'Service';
        $module_name = 'service';
        $module_path = 'service';
        $module_icon = 'c-icon cil-people';
        $module_model ="App\Models\Service";
        $module_name_singular = Str::singular($module_name);

        $module_action = 'Edit';
        $service = Service::findOrFail($id);
//        $service = $module_model::findOrFail($id);
        Log::info(label_case($module_title.' '.$module_action)." | '".$service->name.'(ID:'.$service->id.") ' by User:".auth()->user()->name.'(ID:'.auth()->user()->id.')');

        return view(
            "backend.$module_name.edit",
            compact('module_title', 'module_name', 'module_icon', 'service', 'module_action', "$module_name_singular")
        );
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param int     $id
     *
     * @return Response
     */
    public function update($id,Request $request)
    {
        $module_title = 'Service';
        $module_name = 'service';
        $module_path = 'service';
        $module_icon = 'c-icon cil-people';
        $module_model ="App\Models\Service";
        $module_name_singular = Str::singular($module_name);

        $module_action = 'Update';
        $service = Service::findOrFail($id);

        $service->update($request->all());

        Flash::success("<i class='fas fa-check'></i> '".Str::singular($module_title)."' Updated Successfully")->important();

        Log::info(label_case($module_title.' '.$module_action)." | '".$service->name.'(ID:'.$service->id.") ' by User:".auth()->user()->name.'(ID:'.auth()->user()->id.')');

        return redirect("admin/$module_name/".$service->type_id );
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
        $module_title = $this->module_title;
        $module_name = $this->module_name;
        $module_path = $this->module_path;
        $module_icon = $this->module_icon;
        $module_model = $this->module_model;
        $module_name_singular = Str::singular($module_name);

        $module_action = 'destroy';

        $$module_name_singular = $module_model::findOrFail($id);

        $$module_name_singular->delete();

        Flash::success('<i class="fas fa-check"></i> '.label_case($module_name_singular).' Deleted Successfully!')->important();

        Log::info(label_case($module_title.' '.$module_action)." | '".$$module_name_singular->name.', ID:'.$$module_name_singular->id." ' by User:".auth()->user()->name.'(ID:'.auth()->user()->id.')');

        return redirect("admin/$module_name");
    }

    /**
     * List of trashed ertries
     * works if the softdelete is enabled.
     *
     * @return Response
     */
    public function trashed()
    {
        $module_title = $this->module_title;
        $module_name = $this->module_name;
        $module_path = $this->module_path;
        $module_icon = $this->module_icon;
        $module_model = $this->module_model;
        $module_name_singular = Str::singular($module_name);

        $module_action = 'Trash List';

        $$module_name = $module_model::onlyTrashed()->orderBy('deleted_at', 'desc')->paginate();

        Log::info(label_case($module_title.' '.$module_action).' | User:'.auth()->user()->name);

        return view(
            "backend.$module_name.trash",
            compact('module_title', 'module_name', "$module_name", 'module_icon', 'module_name_singular', 'module_action')
        );
    }

    /**
     * Restore a soft deleted entry.
     *
     * @param Request $request
     * @param int     $id
     *
     * @return Response
     */
    public function restore($id)
    {
        $module_title = $this->module_title;
        $module_name = $this->module_name;
        $module_path = $this->module_path;
        $module_icon = $this->module_icon;
        $module_model = $this->module_model;
        $module_name_singular = Str::singular($module_name);

        $module_action = 'Restore';

        $$module_name_singular = $module_model::withTrashed()->find($id);
        $$module_name_singular->restore();

        Flash::success('<i class="fas fa-check"></i> '.label_case($module_name_singular).' Data Restoreded Successfully!')->important();

        Log::info(label_case($module_action)." '$module_name': '".$$module_name_singular->name.', ID:'.$$module_name_singular->id." ' by User:".auth()->user()->name.'(ID:'.auth()->user()->id.')');

        return redirect("admin/$module_name");
    }
}
