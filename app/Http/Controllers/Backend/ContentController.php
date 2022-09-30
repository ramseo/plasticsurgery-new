<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\City;
use App\Models\Content;
use App\Models\Type;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Str;
use Yajra\DataTables\DataTables;
use Log;
use Flash;
use Illuminate\Support\Facades\DB;

class ContentController extends Controller
{
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $contents = Content::select(['id', 'title']);
            return Datatables::of($contents)
                ->addIndexColumn()
                ->addColumn('action', function ($content) {
                    $btn = '<a href="' . route("backend.content.edit", $content->id) . '" class="btn btn-sm btn-primary mt-1" data-toggle="tooltip" title="Edit Service"><i class="fas fa-wrench"></i></a>';
                    return $btn;
                })
                ->rawColumns(['action'])
                ->make(true);
        }
        return view('backend.content.index');
    }

    public function create()
    {
        $types = Type::all();
        $cities = City::all();
        $types = custom_array_coloum($types, 'id', 'name', 'Select');
        $cities = custom_array_coloum($cities, 'id', 'name', 'Select');
        Log::info(label_case('Content Create | User:' . auth()->user()->name . '(ID:' . auth()->user()->id . ')'));
        return view("backend.content.create")->with('types', $types)->with('cities', $cities);
    }

    public function store(Request $request)
    {
        $this->validate(
            $request,
            [
                'type_id' => 'required',
                'city_id' => 'required',
                'title' => 'required',
            ],
            [
                'type_id.required' => "The vendor type field is required",
                'city_id.required' => "The vendor city field is required",
            ]
        );
        $content_type = Content::where(array('type_id' => $request->type_id, 'city_id' => ''))->first();
        if ($content_type != null) {
            Flash::error("<i class='fas fa-check'></i> Content already exist for vendor type.")->important();
            return redirect(route('backend.content.create'));
        }
        $content_exist = Content::where(array('type_id' => $request->type_id, 'city_id' => $request->city_id))->first();
        if ($content_exist) {
            Flash::error("<i class='fas fa-check'></i> Content already exist for vendor type and City.")->important();
            return redirect(route('backend.content.create'));
        }
        $content = Content::create($request->all());
        Flash::success("<i class='fas fa-check'></i> New Content Added")->important();
        Log::info(label_case('Content Store | ' . $content->name . '(ID:' . $content->id . ')  by User:' . auth()->user()->name . '(ID:' . auth()->user()->id . ')'));
        return redirect(route('backend.content.index'));
    }

    public function edit($id)
    {
        $content = Content::findOrFail($id);
        $types = Type::all();
        $cities = City::all();
        $types = custom_array_coloum($types, 'id', 'name', 'Select');
        $cities = custom_array_coloum($cities, 'id', 'name', 'Select');
        Log::info(label_case('Content Edit | ' . $content->name . '(ID:' . $content->id . ')  by User:' . auth()->user()->name . '(ID:' . auth()->user()->id . ')'));
        return view("backend.content.edit")->with('content', $content)->with('types', $types)->with('cities', $cities);
    }

    public function update($id, Request $request)
    {
        $request->validate([
            'title' => 'required|string',
        ]);

        $content = Content::findOrFail($id);
        $content->update($request->all());
        Flash::success("<i class='fas fa-check'></i> Content Updated Successfully")->important();
        Log::info(label_case('Content Update | ' . $content->name . '(ID:' . $content->id . ')  by User:' . auth()->user()->name . '(ID:' . auth()->user()->id . ')'));
        return redirect(route('backend.content.index'));
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
        $content = Content::findOrFail($id);
        DB::table('contents')->where('id', $id)->delete();
        // $content->delete();
        Flash::success('<i class="fas fa-check"></i> Content Deleted Successfully!')->important();
        Log::info(label_case('Content Delete | ' . $content->name . '(ID:' . $content->id . ')  by User:' . auth()->user()->name . '(ID:' . auth()->user()->id . ')'));
        return redirect(route('backend.content.index'));
    }

    /**
     * List of trashed ertries
     * works if the softdelete is enabled.
     *
     * @return Response
     */
    public function trashed()
    {
        $contents = Content::onlyTrashed()->orderBy('deleted_at', 'desc')->paginate();
        Log::info(label_case('Content Trash List ') . ' | User:' . Auth::user()->name);
        return view("backend.content.trash", compact('contents'));
    }


    public function restore($id)
    {
        $content = Content::withTrashed()->find($id);
        $content->restore();
        Flash::success('<i class="fas fa-check"></i> Content Data Restoreded Successfully!')->important();
        Log::info(label_case('Content Delete | ' . $content->name . '(ID:' . $content->id . ')  by User:' . auth()->user()->name . '(ID:' . auth()->user()->id . ')'));
        return redirect(route('backend.content.index'));
    }
}
