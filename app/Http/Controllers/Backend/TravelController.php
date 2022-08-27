<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Travel;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Str;
use Yajra\DataTables\DataTables;
use Log;
use Flash;

class TravelController extends Controller
{
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $travels = Travel::select(['id', 'title']);
            return Datatables::of($travels)
                ->addIndexColumn()
                ->addColumn('action', function ($travel) {
                    $btn = '<a href="' . route("backend.travel.edit", $travel->id) . '" class="btn btn-sm btn-primary mt-1" data-toggle="tooltip" title="Edit Service"><i class="fas fa-wrench"></i></a>';
                    return $btn;
                })
                ->rawColumns(['action'])
                ->make(true);
        }
        return view('backend.travel.index');
    }

    public function create()
    {
        $types = array();
        $cities = array();
        $types = custom_array_coloum($types, 'id', 'name', 'Select');
        $cities = custom_array_coloum($cities, 'id', 'name', 'Select');
        Log::info(label_case('Travel Create | User:' . auth()->user()->name . '(ID:' . auth()->user()->id . ')'));
        return view("backend.travel.create")->with('types', $types)->with('cities', $cities);
    }

    public function store(Request $request)
    {
        $this->validate($request, ['type_id' => 'required'],['type_id.required' => "The Vendor Category field is required" ]);
       
        $content = Content::create($request->all());
        Flash::success("<i class='fas fa-check'></i> New Travel Added")->important();
        Log::info(label_case('Travel Store | ' . $content->name . '(ID:' . $content->id . ')  by User:' . auth()->user()->name . '(ID:' . auth()->user()->id . ')'));
        return redirect(route('backend.travel.index'));
    }

    public function edit($id)
    {
        $content = Content::findOrFail($id);
        $types = Type::all();
        $cities = City::all();
        $types = custom_array_coloum($types, 'id', 'name', 'Select');
        $cities = custom_array_coloum($cities, 'id', 'name', 'Select');
        Log::info(label_case('Travel Edit | ' . $content->name . '(ID:' . $content->id . ')  by User:' . auth()->user()->name . '(ID:' . auth()->user()->id . ')'));
        return view("backend.travel.edit")->with('content', $content)->with('types', $types)->with('cities', $cities);
    }

    public function update($id, Request $request)
    {
        $content = Content::findOrFail($id);
        $content->update($request->all());
        Flash::success("<i class='fas fa-check'></i> Travel Updated Successfully")->important();
        Log::info(label_case('Travel Update | ' . $content->name . '(ID:' . $content->id . ')  by User:' . auth()->user()->name . '(ID:' . auth()->user()->id . ')'));
        return redirect(route('backend.travel.index'));
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
        $content->delete();
        Flash::success('<i class="fas fa-check"></i> Travel Deleted Successfully!')->important();
        Log::info(label_case('Travel Delete | ' . $content->name . '(ID:' . $content->id . ')  by User:' . auth()->user()->name . '(ID:' . auth()->user()->id . ')'));
        return redirect(route('backend.travel.index'));
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
        Log::info(label_case('Travel Trash List ').' | User:'.Auth::user()->name);
        return view("backend.travel.trash", compact('contents'));
    }


    public function restore($id)
    {
        $content = Content::withTrashed()->find($id);
        $content->restore();
        Flash::success('<i class="fas fa-check"></i> Travel Data Restoreded Successfully!')->important();
        Log::info(label_case('Travel Delete | ' . $content->name . '(ID:' . $content->id . ')  by User:' . auth()->user()->name . '(ID:' . auth()->user()->id . ')'));
        return redirect(route('backend.travel.index'));
    }
}
