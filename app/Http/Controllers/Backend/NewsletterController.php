<?php

namespace App\Http\Controllers\Backend;

use App\Authorizable;
use App\Http\Controllers\Controller;
use Carbon\Carbon;
use Flash;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Log;
use DB;
use Yajra\DataTables\DataTables;
use App\Models\Newsletter;

class NewsletterController extends Controller
{

    use Authorizable;

    public function __construct()
    {
    }

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $module_title = 'Newsletter';
        $module_name = 'newsletter';
        $module_action = 'List';
        $page_heading = ucfirst('Newsletter');
        $title = $page_heading . ' ' . ucfirst($module_action);
        $newsletter = Newsletter::paginate();

        return view(
            "backend.newsletter.index_datatable",
            compact('module_title', 'module_name', "newsletter", 'module_action', 'page_heading', 'title')
        );
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
        Newsletter::create($request->all());
        Flash::success("<i class='fas fa-check'></i> Newsletter subscribed successfully.")->important();
        return redirect("/");
    }


    public function destroy($id)
    {
        $module_title = 'Newsletter';
        $module_action = 'destroy';

        $module_name_singular = Newsletter::findOrFail($id);

        DB::table("newsletter")->where('id', $id)->delete();
        Flash::success('<i class="fas fa-check"></i> ' . label_case($module_name_singular->email) . ' Deleted Successfully!')->important();

        Log::info(label_case($module_title . ' ' . $module_action) . " | '" . $module_name_singular->email . ', ID:' . $module_name_singular->id . " ' by User:" . auth()->user()->name . '(ID:' . auth()->user()->id . ')');

        return redirect("admin/newsletter");
    }
}
