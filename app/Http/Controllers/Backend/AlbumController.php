<?php

namespace App\Http\Controllers\Backend;

//use App\Authorizable;
use App\Http\Controllers\Controller;
use App\Models\Album;
use App\Models\Vendor;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Yajra\DataTables\DataTables;

class AlbumController extends Controller
{
//    use Authorizable;

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $vendor = getData('vendors', 'user_id', auth()->user()->id);
        if ($request->ajax()) {
            $albums = Album::where('vendor_id', $vendor->id)->select(['id', 'name', 'description']);
            return Datatables::of($albums)
                ->addIndexColumn()
                ->addColumn('action', function ($album) {
                    $btn = '<a href="' . url("vendor/service/edit/$album->id") . '" class="btn btn-sm btn-primary mt-1" data-toggle="tooltip" title="Edit Service"><i class="fas fa-wrench"></i></a>';
                    return $btn;
                })
                ->rawColumns(['action'])
                ->make(true);
        }

        return view('backend.album.index');
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        Log::info(label_case('Album Create | User:' . auth()->user()->name . '(ID:' . auth()->user()->id . ')'));
        return view("backend.album.create");
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
        $album = Album::create($request->all());
        Flash::success("<i class='fas fa-check'></i> New Service Added")->important();
        Log::info(label_case('Album Store | ' . $album->name . '(ID:' . $album->id . ')  by User:' . auth()->user()->name . '(ID:' . auth()->user()->id . ')'));
        return redirect("vendor/album");
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
        $album = Album::findOrFail($id);
        Log::info(label_case('Service Edit | ' . $album->name . '(ID:' . $album->id . ')  by User:' . auth()->user()->name . '(ID:' . auth()->user()->id . ')'));
        return view('backend.album.edit', compact('album '));
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
        $album = Album::findOrFail($id);
        $album->update($request->all());
        Flash::success("<i class='fas fa-check'></i> Service Updated Successfully")->important();
        Log::info(label_case('Service Update | ' . $album->name . '(ID:' . $album->id . ')  by User:' . auth()->user()->name . '(ID:' . auth()->user()->id . ')'));
        return redirect("vendor/album");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
