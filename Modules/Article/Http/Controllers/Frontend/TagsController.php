<?php

namespace Modules\Article\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Response;
use Illuminate\Support\Str;

class TagsController extends Controller
{
    public function __construct()
    {
        // Page Title
        $this->module_title = 'Tags';

        // module name
        $this->module_name = 'tags';

        // directory path of the module
        $this->module_path = 'tags';

        // module icon
        $this->module_icon = 'fas fa-tags';

        // module model name, path
        $this->module_model = "Modules\Article\Entities\Tag";
    }

    /**
     * Display a listing of the resource.
     *
     * @return Response
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

        $$module_name = $module_model::with('posts')->paginate();

        return view(
            "article::frontend.$module_path.index",
            compact('module_title', 'module_name', "$module_name", 'module_icon', 'module_action', 'module_name_singular')
        );
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     *
     * @return Response
     */

    public function show($slug)
    {
        $module_title = $this->module_title;
        $module_name = $this->module_name;
        $module_path = $this->module_path;
        $module_icon = $this->module_icon;
        $module_model = $this->module_model;
        $module_name_singular = Str::singular($module_name);

        $module_action = 'Show';

        $$module_name_singular = $module_model::where('slug', '=', $slug)->firstOrFail();

        if ($$module_name_singular) {
            $posts = getPostsByTag($$module_name_singular->id);
        } else {
            $posts = "";
        }
        // $posts = $$module_name_singular->posts()->with('category', 'tags', 'comments')->paginate();
        return view(
            "article::frontend.$module_name.show",
            compact('module_title', 'module_name', 'module_icon', 'module_action', 'module_name_singular', "$module_name_singular", 'posts')
        );
    }
}
