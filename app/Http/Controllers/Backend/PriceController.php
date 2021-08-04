<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Price;
use App\Models\Service;
use Illuminate\Http\Request;
use Log;
use Flash;

class PriceController extends Controller
{
    public function index(Request $request)
    {
        $vendor = getData('vendors', 'user_id', auth()->user()->id);
        $services = Service::where('type_id', $vendor->type_id)->get();
        $prices = Price::where('vendor_id', $vendor->id)->get();
        return view('backend.prices.index', compact('vendor', 'services', 'prices'));
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
        $album_id = $request->album_id;
        request()->validate(['file' => 'required', 'file.*' => 'mimes:jpeg,jpg,png']);
        if ($request->hasfile('file')) {
            foreach ($request->file('file') as $file) {
                $fileName = multiFileUpload($file, "album/$album_id/");
                $input['album_id'] = $album_id;
                $input['name'] = $fileName;
                $image = Image::create($input);
                Log::info(label_case('Image Store | ' . $image->name . '(ID:' . $image->id . ')  by User:' . auth()->user()->name . '(ID:' . auth()->user()->id . ')'));
            }
        }

        Flash::success("<i class='fas fa-check'></i> New Image Added")->important();

        return redirect("vendor/image/$album_id");
    }

}
