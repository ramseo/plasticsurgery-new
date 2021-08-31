<?php

namespace App\Http\Controllers\Backend;

use App\Authorizable;
use App\Http\Controllers\Controller;
use Carbon\Carbon;
use Flash;
use Auth;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Log;
use Yajra\DataTables\DataTables;
use App\Models\Quotations;

class QuotationController extends Controller
{

    use Authorizable;

    public function __construct(){

    }

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index($vendor_id)
    {
        dd(1);
        $module_title = 'Quotations';
        $module_name = 'quotations';
        $module_action = 'List';
        $page_heading = ucfirst('Quotations');
        $title = $page_heading.' '.ucfirst($module_action);
        $quotations = Quotations::where('vendor_id', $vendor_id)->paginate();

        return view("backend.quotations.index_datatable",
            compact('module_title', 'module_name', "quotations", 'module_action', 'page_heading', 'title')
        );
    }

    public function details($id){
        $module_title = 'Quotations';
        $module_name = 'quotations';
        $module_action = 'Details';
        $page_heading = ucfirst('Quotations');
        $title = $page_heading.' '.ucfirst($module_action);
        $details = Quotations::find($id);
        return view("backend.quotations.details",
            compact('module_title', 'module_name', "details", 'module_action', 'page_heading', 'title')
        );
    }

    public function delete($id)
    {
        Quotations::find($id)->delete();
        Flash::success("<i class='fas fa-check'></i> Quotation request deleted successfully.")->important();
        return Redirect::back()->withErrors(['success', 'Quotation request deleted successfully.']);
    }
}
