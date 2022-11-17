<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Log;
use Carbon\Carbon;
use Flash;
use DB;
use Yajra\DataTables\DataTables;

class ReviewController extends Controller
{

    public function __construct()
    {
        // Page Title
        $this->module_title = 'Reviews';

        // module name
        $this->module_name = 'review';

        // directory path of the module
        $this->module_path = 'review';

        // module icon
        $this->module_icon = 'c-icon cil-people';

        // module model name, path
        $this->module_model = "App\Models\Review";

        // Table Name
        $this->table_name = 'vendor_reviews';
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $module_title = $this->module_title;
        $module_name = $this->module_name;
        $module_path = $this->module_path;
        $module_icon = $this->module_icon;
        $module_model = $this->module_model;
        $module_name_singular = Str::singular($module_name);

        $module_action = 'List';

        $page_heading = ucfirst($module_title);
        $title = $page_heading . ' ' . ucfirst($module_action);

        // $module_name = $module_model::paginate();

        Log::info("'$title' viewed by User:" . auth()->user()->name . '(ID:' . auth()->user()->id . ')');

        return view(
            "backend.$module_path.index_datatable",
            compact('module_title', 'module_name', 'module_path', 'module_icon', 'module_action', 'module_name_singular', 'page_heading', 'title')
        );
    } 


    public function index_data()
    {
        $module_title = $this->module_title;
        $module_name = $this->module_name;
        $module_path = $this->module_path;
        $module_icon = $this->module_icon;
        $module_model = $this->module_model;
        $module_name_singular = Str::singular($module_name);

        $module_action = 'List';

        $module_name = $module_model::select('id', 'rating', 'description', 'vendor_id', 'is_active');

        $data = $module_name;

        return Datatables::of($module_name)
            ->addColumn('action', function ($data) {
                if ($data->is_active == 1) {
                    $checked = "checked";
                } else {
                    $checked = "";
                }
                $module_name = $this->module_name;
                $btn = "";
                $btn .= "<div class='switch-flex-cls'>";
                $btn .= '<a href="' . url("admin/review/destroy/$data->id") . '" class="btn btn-danger del-review-popup" data-method="DELETE" data-token="' . csrf_token() . '" data-toggle="tooltip" title="Delete Review" data-confirm="Are you sure?"><i class="fas fa-trash-alt"></i></a>';
                $btn .= '<label class="switch">
               <input onclick="checkBox(this)" review_id="' . $data->id . '" name="is_active" type="checkbox" ' . $checked . '>
               <span class="slider"></span>
               </label>';
                $btn .= "</div>";
                return $btn;
                // return view('backend.includes.action_column', compact('module_name', 'data'));
            })
            ->editColumn('description', '{{$description}}')
            ->editColumn('rating', '{{$rating}}')
            ->editColumn('vendor_id', '{{getVendorById($vendor_id)}}')
            // ->editColumn('updated_at', function ($data) {
            //     $module_name = $this->module_name;
            //     $diff = Carbon::now()->diffInHours($data->updated_at);
            //     if ($diff < 25 && $diff) {
            //         return $data->updated_at->diffForHumans();
            //     } else {
            //         return $data->updated_at->isoFormat('LLLL');
            //     }
            // })
            ->rawColumns(['name', 'action'])
            ->orderColumns(['id'], '-:column $1')
            ->make(true);
    }

    /**
     * Select Options for Select 2 Request/ Response.
     *
     * @return Response
     */

    public function index_list(Request $request)
    {
        $module_title = $this->module_title;
        $module_name = $this->module_name;
        $module_path = $this->module_path;
        $module_icon = $this->module_icon;
        $module_model = $this->module_model;
        $module_name_singular = Str::singular($module_name);

        $module_action = 'List';

        $term = trim($request->q);

        if (empty($term)) {
            return response()->json([]);
        }

        $query_data = $module_model::where('description', 'LIKE', "%$term%")->orWhere('rating', 'LIKE', "%$term%")->limit(7)->get();

        $module_name = [];

        foreach ($query_data as $row) {
            $module_name[] = [
                'id'   => $row->id,
                'text' => $row->rating . ' (Slug: ' . $row->description . ')',
            ];
        }

        return response()->json($module_name);
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
        $module_title = $this->module_title;
        $module_name = $this->module_name;
        $module_path = $this->module_path;
        $module_icon = $this->module_icon;
        $module_model = $this->module_model;
        $table_name = $this->table_name;
        $module_name_singular = Str::singular($module_name);

        $module_action = 'destroy';

        $module_name_singular_data = $module_model::findOrFail($id);

        DB::table($table_name)->where('id', $id)->delete();

        Flash::success('<i class="fas fa-check"></i> ' . label_case($module_name_singular) . ' Deleted Successfully!')->important();

        Log::info(label_case($module_title . ' ' . $module_action) . " | '" . $module_name_singular_data->rating . ', ID:' . $module_name_singular_data->id . " ' by User:" . auth()->user()->name . '(ID:' . auth()->user()->id . ')');

        return redirect("admin/$module_name");
    }


    function is_active() 
    {
        $is_active = $_GET['is_active'];
        $review_id = $_GET['review_id'];

        $status = DB::table('vendor_reviews')
            ->where('id', $review_id)
            ->update(array('is_active' => $is_active));

        $response = [];
        if ($status) {
            $response['status'] = true;
        } else {
            $response['status'] = false;
        }

        echo json_encode($response);
    }
}
