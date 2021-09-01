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
use App\Models\Quotation;

class QuotationController extends Controller
{

    public function __construct(){

    }

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    //    public function index()
    //    {
    //        $vendor_id = auth()->user()->id;
    //        $module_title = 'Quotations';
    //        $module_name = 'quotations';
    //        $module_action = 'List';
    //        $page_heading = ucfirst('Quotations');
    //        $title = $page_heading.' '.ucfirst($module_action);
    //        $quotations = Quotation::where('vendor_id', $vendor_id)->paginate();
    //        return view("backend.quotations.index_datatable", compact('module_title', 'module_name', "quotations", 'module_action', 'page_heading', 'title'));
    //    }

    public function index(Request $request)
    {
        $vendor = getData('vendors', 'user_id', auth()->user()->id);
        if ($request->ajax()) {
            $quotations = Quotation::where('vendor_id', $vendor->id)->select(['id', 'name', 'email', 'phone', 'budget']);
            return Datatables::of($quotations)
                ->addIndexColumn()
                ->addColumn('action', function ($quotation) {
                    $btn = '<a href="' . route("vendor.quotation.details", $quotation->id) . '" class="btn btn-sm btn-primary mt-1" data-toggle="tooltip" title="Edit Service"><i class="fas fa-wrench"> </i></a> ';
                    return $btn;
                })
                ->rawColumns(['action'])
                ->make(true);
        }
        return view('backend.quotations.index');
    }

    public function details($id){
        $module_title = 'Quotations';
        $module_name = 'quotations';
        $module_action = 'Details';
        $page_heading = ucfirst('Quotations');
        $title = $page_heading.' '.ucfirst($module_action);
        $details = Quotation::find($id);
        return view("backend.quotations.details",
            compact('module_title', 'module_name', "details", 'module_action', 'page_heading', 'title')
        );
    }

    public function delete($id)
    {
        Quotation::find($id)->delete();
        Flash::success("<i class='fas fa-check'></i> Quotation request deleted successfully.")->important();
        return Redirect::back()->withErrors(['success', 'Quotation request deleted successfully.']);
    }
}
