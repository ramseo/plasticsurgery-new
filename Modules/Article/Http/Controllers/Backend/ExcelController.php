<?php

namespace Modules\Article\Http\Controllers\Backend;


use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Log;

use App\Imports\VendorImport;
use App\Exports\VendorExport;
use Maatwebsite\Excel\Facades\Excel;

class ExcelController extends Controller
{

    public function __construct()
    {
        // Page Title
        $this->module_title = 'Export';

        // module name
        $this->module_name = 'export';

        // directory path of the module
        $this->module_path = 'export';

        // module icon
        $this->module_icon = 'c-icon cil-people';

        // Table Name
        $this->table_name = 'vendors';
    }


    public function importExportView()
    {
        $module_title = $this->module_title;
        $module_name = $this->module_name;
        $module_path = $this->module_path;
        $module_icon = $this->module_icon;

        $module_action = 'List';

        $page_heading = ucfirst($module_title);
        $title = $page_heading . ' ' . ucfirst($module_action);

        Log::info("'$title' viewed by User:" . auth()->user()->name . '(ID:' . auth()->user()->id . ')');

        return view(
            "backend.import.import",
            compact('module_title', 'module_name', 'module_path', 'module_icon', 'module_action', 'page_heading', 'title')
        );
    }

    // Export data
    public function export(Request $request)
    {
        if ($request->input('exportexcel') != null) {
            return Excel::download(new VendorExport, 'vendors.xlsx');
        }

        if ($request->input('exportcsv') != null) {
            return Excel::download(new VendorExport, 'vendors.csv');
        }

        return redirect()->action('ExcelController@importExportView');
    }

    public function import()
    {
        Excel::import(new VendorImport, request()->file('file'));
        return back();
    }
}
