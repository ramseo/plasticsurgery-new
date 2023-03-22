<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Album;
use App\Models\Image;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Yajra\DataTables\DataTables;
use Log;
use Flash;
use Storage;
use Illuminate\Support\Str;

class AlbumController extends Controller
{
    public function index(Request $request)
    {
        $vendor = getData('vendors', 'user_id', auth()->user()->id);
        if ($request->ajax()) {
            $albums = Album::where('vendor_id', $vendor->id)->select(['id', 'name', 'description'])->orderBy('id', 'desc');
            return Datatables::of($albums)
                ->addIndexColumn()
                ->editColumn('description', function ($album) {
                    return '<strong>' . Str::words($album->description, '25') . '</strong>';
                })
                ->addColumn('action', function ($album) {
                    $btn = "";
                    $btn .= '<a href="' . route("vendor.album.edit", $album->id) . '" class="btn btn-sm btn-primary mt-1" data-toggle="tooltip" title="Edit Service"><i class="fas fa-wrench"> </i></a> ';
                    $btn .= '<a href="' . route("vendor.image.index", $album->id) . '" class="btn btn-sm btn-success mt-1" data-toggle="tooltip" title="Album Gallery"><i class="fas fa-file-image"> </i></a> ';
                    $btn .= '<a href="' . route("vendor.album.delete", $album->id) . '" class="btn btn-sm btn-danger mt-1 del-link" data-toggle="tooltip" title="Album Delete"><i class="fas fa-trash"> </i></a>';
                    return $btn;
                })
                ->rawColumns(['action', 'description'])
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
        $vendor = getData('vendors', 'user_id', auth()->user()->id);
        Log::info(label_case('Album Create | User:' . auth()->user()->name . '(ID:' . auth()->user()->id . ')'));
        return view("backend.album.create")->with('vendor', $vendor);
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
        $request->validate([
            'name' => 'required|string',
        ]);

        $album = Album::create($request->all());
        Flash::success("<i class='fas fa-check'></i> New Album Added")->important();
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
        return view('backend.album.edit')->with('album', $album);
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
        // code
        $request->validate([
            'name' => 'required|string',
        ]);
        // code
        $album = Album::findOrFail($id);
        $album->update($request->all());
        Flash::success("<i class='fas fa-check'></i> Album Updated Successfully")->important();
        Log::info(label_case('Service Update | ' . $album->name . '(ID:' . $album->id . ')  by User:' . auth()->user()->name . '(ID:' . auth()->user()->id . ')'));
        return redirect("vendor/album");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        //        Storage::deleteDirectory('album/'.$id);
        rrmdir(storage_path('app/public/album/' . $id));
        Album::where(['id' => $id])->delete();
        Image::where(['album_id' => $id])->delete();
        Flash::success("<i class='fas fa-check'></i> Album Deleted")->important();
        return redirect("vendor/album");
    }
}
