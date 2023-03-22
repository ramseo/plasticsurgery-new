<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;

use App\Models\Video;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Yajra\DataTables\DataTables;
use Log;
use Flash;

class VideoController extends Controller
{
    public function index(Request $request)
    {
        $vendor = getData('vendors', 'user_id', auth()->user()->id);
        if ($request->ajax()) {
            $videos = Video::where('vendor_id', $vendor->id)->select(['id', 'url']);
            return Datatables::of($videos)
                ->addIndexColumn()
                ->addColumn('action', function ($video) {
                    $btn = '<a href="' . route("vendor.video.edit", $video->id) . '" class="btn btn-sm btn-primary mt-1" data-toggle="tooltip" title="Edit Service"><i class="fas fa-wrench"> </i></a> ';
                    $btn .= '<a href="' . route("vendor.video.delete", $video->id) . '" class="btn btn-sm btn-danger mt-1 del-link" data-toggle="tooltip" title="Album Delete" ><i class="fas fa-trash"></i></a>';
                    return $btn;
                })
                ->rawColumns(['action'])
                ->make(true);
        }
        return view('backend.video.index'); 
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        $vendor = getData('vendors', 'user_id', auth()->user()->id);
        Log::info(label_case('Video Create | User:' . auth()->user()->url . '(ID:' . auth()->user()->id . ')'));
        return view("backend.video.create")->with('vendor', $vendor);
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
        // code
        $request->validate([
            'url' => 'required|string',
        ]);
        // code

        $data = $request->all();
        if ($request->file('image')) {
            $file_image = fileUpload($request, 'image', 'video/image/');
            $data = array_merge($data, ['image' => $file_image]);
        }
        $video = Video::create($data);
        Flash::success("<i class='fas fa-check'></i> New Video Added")->important();
        Log::info(label_case('Video Store | ' . $video->url . '(ID:' . $video->id . ')  by User:' . auth()->user()->name . '(ID:' . auth()->user()->id . ')'));
        return redirect("vendor/video");
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
        $video = Video::findOrFail($id);
        Log::info(label_case('Video Edit | ' . $video->url . '(ID:' . $video->id . ')  by User:' . auth()->user()->name . '(ID:' . auth()->user()->id . ')'));
        return view('backend.video.edit')->with('video', $video);
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
            'url' => 'required|string',
        ]);
        // code

        $video = Video::findOrFail($id);
        $data = $request->all();
        if ($request->file('image')) {
            $file_image = fileUpload($request, 'image', 'video/image/');
            $data = array_merge($data, ['image' => $file_image]);
        }
        $video->update($data);
        Flash::success("<i class='fas fa-check'></i> Video Updated Successfully")->important();
        Log::info(label_case('Video Update | ' . $video->url . '(ID:' . $video->id . ')  by User:' . auth()->user()->name . '(ID:' . auth()->user()->id . ')'));
        return redirect("vendor/video");
    }

    public function delete($id)
    {
        $image = Video::findorfail($id);
        $image->delete();
        Flash::success("<i class='fas fa-check'></i> Video Deleted")->important();
        return redirect("vendor/video");
    }
}
