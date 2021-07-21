<?php

namespace App\Http\Controllers\Backend;

use App\Authorizable;
use App\Http\Controllers\Controller;
use Flash;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Str;
use App\Models\Menu;

class MenuController extends Controller
{

    use Authorizable;

    public function __construct(){

    }

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $module_title = 'Menu';
        $module_name = 'menu';
        $module_action = 'List';
        $page_heading = ucfirst('Menu');
        $title = $page_heading.' '.ucfirst($module_action);
        $menus = Menu::paginate();

        return view("backend.menu.index_datatable",
            compact('module_title', 'module_name', "menus", 'module_action', 'page_heading', 'title')
        );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        $module_title = 'Menu';
        $module_name = 'menu';
        $module_action = 'Create';

        return view(
            "backend.$module_name.create",
            compact('module_title', 'module_name', 'module_action')
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
        $module_title = 'Menu';
        $module_name = 'menus';
        $module_action = 'Store';
        $menu = Menu::create($request->all());
        Flash::success("<i class='fas fa-check'></i> New '".Str::singular($module_title)."' Added")->important();
        return redirect("admin/$module_name");
    }

    public function edit($id)
    {
        $module_title = 'Menu';
        $module_name = 'menu';
        $module_action = 'Edit';
        $module_name_singular = Str::singular($module_name);

        $$module_name_singular = Menu::findOrFail($id);

        return view(
            "backend.$module_name.edit",
            compact('module_title', 'module_name', 'module_name_singular', 'module_action', "$module_name_singular")
        );
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param int     $id
     *
     * @return Response
     */
    public function update(Request $request, $id)
    {
        $module_title = 'Menu';
        $module_name = 'menus';
        $module_action = 'Update';
        $module_name_singular = Str::singular($module_name);

        $$module_name_singular = Menu::findOrFail($id);
        $$module_name_singular->update($request->all());

        Flash::success("<i class='fas fa-check'></i> '".Str::singular($module_title)."' Updated Successfully")->important();

        return redirect("admin/$module_name");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $module_title = 'Menu';
        $module_name = 'menus';
        $module_action = 'destroy';
        $module_name_singular = Str::singular($module_name);

        $$module_name_singular = Menu::findOrFail($id);
        $$module_name_singular->delete();

        Flash::success('<i class="fas fa-check"></i> '.label_case($module_name_singular).' Deleted Successfully!')->important();
        return redirect("admin/$module_name");
    }
}
