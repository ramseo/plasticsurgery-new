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
            $travels = Travel::select(['id', 'name']);
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
        Log::info(label_case('Travel Create | User:' . auth()->user()->name . '(ID:' . auth()->user()->id . ')'));
        return view("backend.travel.create");
    }

    public function store(Request $request)
    {
        $Travel = Travel::create($request->all());
        Flash::success("<i class='fas fa-check'></i> New Travel Added")->important();
        Log::info(label_case('Travel Store | ' . $Travel->name . '(ID:' . $Travel->id . ')  by User:' . auth()->user()->name . '(ID:' . auth()->user()->id . ')'));
        return redirect(route('backend.travel.index'));
    }

    public function edit($id)
    {
        $travel = Travel::findOrFail($id);
        Log::info(label_case('Travel Edit | ' . $travel->name . '(ID:' . $travel->id . ')  by User:' . auth()->user()->name . '(ID:' . auth()->user()->id . ')'));
        return view("backend.travel.edit", compact('travel'));
    }

    public function update($id, Request $request)
    {
        $travel = Travel::findOrFail($id);
        $travel->update($request->all());
        Flash::success("<i class='fas fa-check'></i> Travel Updated Successfully")->important();
        Log::info(label_case('Travel Update | ' . $travel->name . '(ID:' . $travel->id . ')  by User:' . auth()->user()->name . '(ID:' . auth()->user()->id . ')'));
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
        $travel = Travel::findOrFail($id);
        // $content = Content::findOrFail($id);
        $travel->delete();
        Flash::success('<i class="fas fa-check"></i> Travel Deleted Successfully!')->important();
        Log::info(label_case('Travel Delete | ' . $travel->name . '(ID:' . $travel->id . ')  by User:' . auth()->user()->name . '(ID:' . auth()->user()->id . ')'));
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
        $travel = Travel::onlyTrashed()->orderBy('deleted_at', 'desc')->paginate();
        // $contents = Content::onlyTrashed()->orderBy('deleted_at', 'desc')->paginate();
        Log::info(label_case('Travel Trash List ').' | User:'.Auth::user()->name);
        return view("backend.travel.trash", compact('contents'));
    }


    public function restore($id)
    {
        $travel = Travel::withTrashed()->find($id);
        // $content = Content::withTrashed()->find($id);
        $travel->restore();
        Flash::success('<i class="fas fa-check"></i> Travel Data Restoreded Successfully!')->important();
        Log::info(label_case('Travel Delete | ' . $travel->name . '(ID:' . $travel->id . ')  by User:' . auth()->user()->name . '(ID:' . auth()->user()->id . ')'));
        return redirect(route('backend.travel.index'));
    }
}
