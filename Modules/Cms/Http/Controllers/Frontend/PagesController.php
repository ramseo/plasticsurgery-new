<?php

namespace Modules\Cms\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Support\Str;
use Modules\Cms\Events\PageViewed;

class PagesController extends Controller
{
    public function __construct()
    {
        // Page Title
        $this->module_title = 'pages';

        // module name
        $this->module_name = 'pages';

        // directory path of the module
        $this->module_path = 'pages';

        // module icon
        $this->module_icon = 'fas fa-file-alt';

        // module model name, path
        $this->module_model = "Modules\Cms\Entities\Page";
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

        $$module_name = $module_model::latest()->paginate();

        return view(
            "cms::frontend.$module_path.index",
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

        // template functions
        $citiesArr = citiesArr();
        $citiesSurgeriesArr = citiesSurgeriesArr();
        $checkForCityView = contains_str($slug, $citiesSurgeriesArr);
        $popular_surgeries_arr = popular_surgeries_arr("popular-surgeries");

        if ($checkForCityView == true) {

            $template_view = "rhinoplasty-city";
            $explodeArr = explode('-', $slug);

            $duplicateArr = array_intersect($explodeArr, $citiesArr);

            if ($duplicateArr) {
                $city = reset($duplicateArr);
            } else {
                $city = "";
            }

            $surgery_explodeArr = explode('-', $slug);
            $key = array_search($city, $surgery_explodeArr, true);
            if ($key !== false) {
                unset($surgery_explodeArr[$key]);
            }

            $surgery_str = implode(" ", $surgery_explodeArr);
            $surgery_str = ucwords($surgery_str);

            $$module_name_singular = (object) array(
                'meta_title' => str_replace("-", " ", $surgery_str . " " . "Clinic in" . " " . ucwords($city)),
                'meta_description' => "The best Board certified surgeon for $surgery_str. Get rid of unwanted eyelid skin from eyelid surgery clinic in $city at a reasonable cost",
                'meta_keywords' => str_replace("-", " ", $slug),
                'name' => ucwords("Best $surgery_str Surgeon in $city"),
            );
        } elseif (in_array($slug, $citiesArr)) {
            $city = ucwords($slug);
            $$module_name_singular = (object) array(
                'meta_title' => ucwords(str_replace("-", " ", $slug)),
                'meta_description' => "Top Cosmetic Surgery Clinic in $city. Book your appointment with Board Certified Plastic Surgeon to get the right opinion for your treatment.",
                'meta_keywords' => str_replace("-", " ", $slug),
                'name' => str_replace("-", " ", $slug),
            );

            $template_view = "city-temp";
            $city = $slug;
            $surgery_str = "";
        } else {
            $$module_name_singular = $module_model::where('slug', '=', $slug)->firstOrFail();
            event(new PageViewed($$module_name_singular));

            $template_view = "show";
            $city = "";
            $surgery_str = "";
        }
        // template functions 

        return view(
            "cms::frontend.$module_name.$template_view",
            compact('module_title', 'module_name', 'module_icon', 'module_action', 'module_name_singular', "$module_name_singular", "city", "surgery_str")
        );
    }
}
