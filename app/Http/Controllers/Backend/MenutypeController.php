<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Menutype;
use Flash;
use Illuminate\Support\Str;
use \stdClass;

class MenutypeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // dd('dffd');
        $module_title = 'Menu Type';
        $module_name = 'menutype';
        $module_action = 'List';
        $page_heading = ucfirst('Menu Type');
        $title = $page_heading . ' ' . ucfirst($module_action);
        $menus = Menutype::paginate();

        return view(
            "backend.menutype.index_datatable",
            compact('module_title', 'module_name', "menus", 'module_action', 'page_heading', 'title')
        );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $module_title = 'Menu Type';
        $module_name = 'menutype';
        $module_action = 'Create';

        $data = new stdClass();
        $data->title = '';
        $data->url = '';

        return view(
            "backend.$module_name.create",
            compact('module_title', 'module_name', 'module_action', 'data')
        );
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $module_title = 'Menu Type';
        $module_name = 'menutype';
        $module_action = 'Store';

        if ($request->input('url')) {
            $url = $request->input('url');
        } else {
            $url = \Str::slug($request->title);
        }

        $data = array(
            '_token' => $request->_token,
            'title' => $request->title,
            'url' => $url,
        );

        $menu = MenuType::create($data);
        // $menu = Menu::create($request->all());
        Flash::success("<i class='fas fa-check'></i> New '" . Str::singular($module_title) . "' Added")->important();
        return redirect("admin/$module_name");
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
        $module_title = 'Menu Type';
        $module_name = 'menutype';
        $module_action = 'Edit';
        $module_name_singular = Str::singular($module_name);
        $data = Menutype::where('menu_id', $id)->firstOrFail();

        return view(
            "backend.$module_name.edit",
            compact('module_title', 'module_name', 'module_name_singular', 'module_action', 'data')
        );
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
        $module_title = 'Menu Type';
        $module_name = 'menutype';
        $module_action = 'Update';
        $menutype = Menutype::find($id);
        $menutype->title = $request->input('title');
        $menutype->url = $request->input('url');
        $menutype->update();

        Flash::success("<i class='fas fa-check'></i> '" . Str::singular($module_title) . "' Updated Successfully")->important();

        return redirect("admin/$module_name");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $module_title = 'Menu type';
        $module_name = 'menutype';
        $module_name_singular = Menutype::findOrFail($id);
        $module_name_singular->delete();

        Flash::success('<i class="fas fa-check"></i> ' . label_case($module_title) . ' Deleted Successfully!')->important();
        return redirect("admin/$module_name");
    }
}
