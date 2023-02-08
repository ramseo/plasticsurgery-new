<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Inquiry;
use DB;
use Flash;
use Log;

class InquiryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $module_title = 'Inquiry';
        $module_name = 'inquiry';
        $module_action = 'List';
        $page_heading = ucfirst('Inquiry');
        $title = $page_heading . ' ' . ucfirst($module_action);
        $inquiry = Inquiry::orderBy('id', 'desc')->paginate();

        return view(
            "backend.inquiry.index_datatable",
            compact('module_title', 'module_name', "inquiry", 'module_action', 'page_heading', 'title')
        );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $module_title = 'Inquiry';
        $module_action = 'destroy';

        $module_name_singular = Inquiry::findOrFail($id);

        DB::table("enquiry_phone")->where('id', $id)->delete();
        Flash::success('<i class="fas fa-check"></i> ' . label_case($module_name_singular->email) . ' Deleted Successfully!')->important();

        Log::info(label_case($module_title . ' ' . $module_action) . " | '" . $module_name_singular->email . ', ID:' . $module_name_singular->id . " ' by User:" . auth()->user()->name . '(ID:' . auth()->user()->id . ')');

        return redirect("admin/inquiry");
    }
}
