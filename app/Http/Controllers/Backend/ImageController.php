<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Album;
use App\Models\Image;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Yajra\DataTables\DataTables;
use Flash;
use Log;
use Storage;
class ImageController extends Controller
{
    public function index($albumId, Request $request)
    {
        $album = Album::findOrFail($albumId);
        $images = Image::where('album_id', $albumId)->get();
        return view('backend.album.images.index', compact('images', 'album'));
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     *
     * @return Response
     */
    //    public function store(Request $request, $id)
    //    {
    ////        $album_id = $request->album_id;
    //        $album_id = $id;
    //        request()->validate([ 'file' => 'required',  'file.*' => 'mimes:jpeg,jpg,png' ]);
    //        if ($request->hasfile('file')) {
    //            foreach ($request->file('file') as $file) {
    //                $fileName = multiFileUpload($file, "album/$album_id/");
    //                $input['album_id'] = $album_id;
    //                $input['name'] = $fileName;
    //                $image = Image::create($input);
    //                Log::info(label_case('Image Store | ' . $image->name . '(ID:' . $image->id . ')  by User:' . auth()->user()->name . '(ID:' . auth()->user()->id . ')'));
    //            }
    //        }
    //
    //        Flash::success("<i class='fas fa-check'></i> New Image Added")->important();
    //
    //        return redirect("vendor/image/$album_id");
    //    }

    public function store(Request $request, $id)
    {
        $album_id = $id;
        $fileName = fileUpload($request, 'file', "album/$album_id/", true);
        $input['album_id'] = $album_id;
        $input['name'] = $fileName;
        $image = Image::create($input);
        Log::info(label_case('Image Store | ' . $image->name . '(ID:' . $image->id . ')  by User:' . auth()->user()->name . '(ID:' . auth()->user()->id . ')'));
        return response()->json(['success' => $image->id]);
    }


    public function remove(Request $request)
    {
        $name = $request->get('name');
        $image = Image::where(['name' => $name])->first();
        Storage::delete('album/$album_id/'.$image->name);
        Image::where(['id' => $image->id])->delete();
        return $name;
    }

    public function delete($id)
    {
        $image = Image::findorfail($id);
        Storage::delete('album/$album_id/'.$image->name);
        Image::where(['id' => $image->id])->delete();

        Flash::success("<i class='fas fa-check'></i> Image Deleted")->important();

        return redirect("vendor/image/$image->album_id");
    }



}
