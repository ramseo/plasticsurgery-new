<?php

namespace App\Http\Controllers\Backend;

use App\Authorizable;
use App\Http\Controllers\Controller;
use Flash;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
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
}
