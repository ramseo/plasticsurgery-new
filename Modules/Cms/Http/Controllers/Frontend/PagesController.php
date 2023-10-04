<?php

namespace Modules\Cms\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
// use GuzzleHttp\Psr7\Request;
use Illuminate\Support\Str;
use Modules\Cms\Events\PageViewed;
use DB;
use App\Models\leadform;

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

    public function lead_form(Request $request)
    {
        parse_str($request->form_data, $post);

        $data = [];
        $data['name'] = $post['name'];
        $data['phone'] = $post['phone'];
        $data['email'] = $post['email'];
        $data['location'] = $post['location'];
        $data['age'] = $post['age'];
        $data['gender'] = $post['gender'];
        $data['appointment_for'] = $post['appointment_for'];
        $data['message'] = $post['message'];
        $data['url'] = $post['url'];
        $data['time'] = $post['time'];

        $status = leadform::create($data);

        $response = [];
        if ($status) {
            $response['status'] = true;
        } else {
            $response['status'] = false;
        }

        echo json_encode($response);
    }

    function surgeon_filter(Request $request)
    {
        if ($request->value == "asc") {
            $filter_data = DB::table('users')
                ->select('*')
                ->Where('is_active', 1)
                ->Where('city', '!=', NULL)
                ->orderBy('first_name', $request->value)
                ->get();
        } else if ($request->value == "desc") {
            $filter_data = DB::table('users')
                ->select('*')
                ->Where('is_active', 1)
                ->Where('city', '!=', NULL)
                ->orderBy('first_name', $request->value)
                ->get();
        } else if (!$request->value) {
            $filter_data = DB::table('users')
                ->select('*')
                ->Where('is_active', 1)
                ->Where('city', '!=', NULL)
                ->orderBy('first_name', 'asc')
                ->get();
        } else {
            $filter_data = DB::table('users')
                ->select('*')
                ->Where("first_name", 'LIKE', $request->value . '%')
                ->Where('is_active', 1)
                ->Where('city', '!=', NULL)
                ->get();
        }

        $html = "";
        $response = [];

        if ($filter_data->count() > 0) {
            foreach ($filter_data as $doc_item) {
                $city = getCitiesById($doc_item->city, "pipe");

                if ($request->attr == "cost") {
                    // Surgery Cost HTML
                    $html .= '<div class="col-sm-2">';
                    $html .= '<a target="_blank" href="' . url("surgeon/dr-$doc_item->username") . '">';
                    $html .= '<div class="list-doctor">';
                    if (file_exists(public_path() . '/storage/user/profile/' . $doc_item->avatar)) {
                        $html .= '<img class="card-img-top" src="' . asset('/storage/user/profile/' . $doc_item->avatar) . '" alt="' . $doc_item->first_name . ' ' . $doc_item->last_name . '" style="width:100%" />';
                    } else {
                        $html .= '<img class="card-img-top" src="' . asset($doc_item->avatar) . '" alt="' . $doc_item->first_name . ' ' . $doc_item->last_name . '" style="width:100%" />';
                    }
                    $html .= '<p>';
                    $html .= "Dr." . " " . $doc_item->first_name . " " . $doc_item->last_name;
                    $html .= '</p>';
                    $html .= '</div>';
                    $html .= '</a>';
                    $html .= '</div>';
                    // Surgery Cost HTML
                } else {
                    $html .= '<div class="col-lg-3 col-md-6">';
                    $html .= '<div class="card">';
                    $html .=  '<a target="_blank" href="' . url("surgeon/dr-$doc_item->username") . '">';
                    if (file_exists(public_path() . '/storage/user/profile/' . $doc_item->avatar)) {
                        $html .= '<img src="' . asset('/storage/user/profile/' . $doc_item->avatar) . '" class="card-img-top" alt="doctor alt" style="width:100%" />';
                    } else {
                        $html .= '<img src="' . asset($doc_item->avatar) . '" class="card-img-top" alt="doctor alt" style="width:100%" />';
                    }
                    $html .=  '</a>';
                    $html .= '<div class="card-body doctors-list-cls">';
                    $html .= '<a target="_blank" href="' . url("surgeon/dr-$doc_item->username") . '">';
                    $html .= '<h4 class="card-title">';
                    $html .= "Dr." . " " . $doc_item->first_name . " " . $doc_item->last_name;
                    $html .= '</h4>';
                    $html .= '</a>';
                    $html .= '<ul class="padd-null text-center">';
                    $html .= '<li>Cosmetic / Plastic Surgeon</li>';
                    $html .= '<li>';
                    $profile_data = get_userprofiles($doc_item->id);
                    $html .= $profile_data->degree;
                    $html .= '</li>';
                    $html .= '<li>';
                    $html .= '<a href="javascript:void(0)">';
                    $html .= '<i class="fa fa-map-marker blink"></i>';
                    $html .= '<b class="cities-font-size">' . $city . '</b>';
                    $html .= '</a>';
                    $html .= '</li>';
                    $html .= '</ul>';
                    $html .= '<a target="_blank" href="' . url("surgeon/dr-$doc_item->username") . '" class="surgeons-flex">';
                    $html .= '<button class="btn btn-primary">Consult Now</button>';
                    $html .= '<button class="btn btn-primary">Know More</button>';
                    $html .= '</a>';
                    $html .= '</div>';
                    $html .= '</div>';
                    $html .= '</div>';
                }
            }
            $response['html'] = $html;
            $response['status'] = true;
        } else {
            $response['html'] = "<p class='no-surgeons'>No Surgeons Found!</p>";
            $response['status'] = false;
        }

        echo json_encode($response);
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
        $citiesSurgeriesArr = citiesSurgeriesArr('popular-surgeries');
        $checkForCityView = contains_str($slug, $citiesSurgeriesArr);
        $popular_surgeries_arr = popular_surgeries_arr("popular-surgeries");

        if ($checkForCityView == true) {

            if (in_array($slug, $popular_surgeries_arr)) {

                $$module_name_singular = $module_model::where('slug', '=', $slug)->firstOrFail();
                event(new PageViewed($$module_name_singular));

                $template_view = "popular-surgeries";
                $city = "";
                $surgery_str = "";
            } else {

                $explodeArr = explode('-', $slug);
                $duplicateArr = array_intersect($explodeArr, $citiesArr);

                if ($duplicateArr) {
                    $city = reset($duplicateArr);
                } else {
                    $city = "";
                }

                if ($city) {

                    $template_view = "rhinoplasty-city";
                    $surgery_explodeArr = explode('-', $slug);
                    $key = array_search($city, $surgery_explodeArr, true);
                    if ($key !== false) {
                        unset($surgery_explodeArr[$key]);
                    }

                    $surgery_str = implode(" ", $surgery_explodeArr);
                    $uc_surgery_str = ucwords($surgery_str);
                    $uc_city = ucwords($city);

                    if ($surgery_str == "rhinoplasty") {
                        $meta_title = "Rhinoplasty Surgeon in $uc_city | Nose Surgery Cost | Nose Job";
                        $meta_description = "Top Plastic surgery clinic for Rhinoplasty in $uc_city. Board certified surgeons for altering and reconstructing the nose at an affordable cost.";
                    } else if ($surgery_str == "blepharoplasty") {
                        $meta_title = "Blepharoplasty Surgeon in $uc_city | Eyelid Surgery Cost";
                        $meta_description = "Top Plastic surgery clinic for Blepharoplasty in $uc_city. Board certified surgeons for removing skin fat from the eyelids at an affordable cost.";
                    } elseif ($surgery_str == "facelift") {
                        $meta_title = "Facelift Surgeon in $uc_city | Facelift Surgery Cost";
                        $meta_description = "Top Plastic surgery clinic for Facelift in $uc_city. Board certified surgeons for giving you youthful facial appearance at an affordable cost.";
                    } elseif ($surgery_str == "brow lift") {
                        $meta_title = "Brow Lift Surgeon in $uc_city | Forehead/Eyebrow Lift Cost";
                        $meta_description = "Top Plastic surgery clinic for Brow Lift in $uc_city. Board certified surgeons for giving you youthful facial appearance at an affordable cost.";
                    } elseif ($surgery_str == "neck lift") {
                        $meta_title = "Neck Lift Surgeon in $uc_city | Neck Lift Surgery Cost";
                        $meta_description = "Top Plastic surgery clinic for Necklift in $uc_city. Board certified surgeons to enhance the appearance of your neck at an affordable cost.";
                    } elseif ($surgery_str == "chin surgery") {
                        $meta_title = "Chin Augmentation Surgeon in $uc_city | Chin Surgery Cost";
                        $meta_description = "Top Plastic surgery clinic for Chin Surgery/Chin Augmentation in $uc_city. Board certified surgeons to reshape the chin at an affordable cost.";
                    } elseif ($surgery_str == "cheek augmentation") {
                        $meta_title = "Cheek Augmentation Surgeon in $uc_city | Cheek Surgery Cost";
                        $meta_description = "Top Plastic surgery clinic for Cheek Augmentation in $uc_city. Board certified surgeons to reshape the cheek at an affordable cost.";
                    } elseif ($surgery_str == "lip augmentation") {
                        $meta_title = "Lip Augmentation Surgeon in $uc_city | Lip Surgery Cost";
                        $meta_description = "Top Plastic surgery clinic for Lip Augmentation in $uc_city. Board certified surgeons to reshape and enhance your lip at an affordable cost.";
                    } elseif ($surgery_str == "buccal fat removal") {
                        $meta_title = "Buccal Fat Removal Surgeon in $uc_city | Buccal Fat Removal Cost";
                        $meta_description = "Top Plastic surgery clinic for Buccal Fat Pad Removal in $uc_city. Board certified surgeons to remove the excess fat from your chubby cheeks at an affordable cost.";
                    } elseif ($surgery_str == "ear surgery") {
                        $meta_title = "Ear Correction Surgeon in $uc_city | Otoplasty Ear Surgery Cost";
                        $meta_description = "Top Plastic surgery clinic for Ear Surgery in $uc_city. Board certified surgeons to reshape your ear at an affordable cost.";
                    } elseif ($surgery_str == "breast augmentation") {
                        $meta_title = "Breast Augmentation Surgeon in $uc_city | Breast Surgery Cost";
                        $meta_description = "Top Plastic surgery clinic for Breat Augmentation in $uc_city. Board certified surgeons to increase your breast size at an affordable cost.";
                    } elseif ($surgery_str == "breast lift") {
                        $meta_title = "Breast Lift Surgeon in $uc_city | Breast Lift Surgery Cost";
                        $meta_description = "Top Plastic surgery clinic for Breast Lift in $uc_city. Board certified surgeons to change the shape of your breasts at an affordable cost.";
                    } elseif ($surgery_str == "breast reduction") {
                        $meta_title = "Breast Reduction Surgeon in $uc_city | Breast Reduction Cost";
                        $meta_description = "Top Plastic surgery clinic for Breat Reduction in $uc_city. Board certified surgeons to reduce the size of large breasts at an affordable cost.";
                    } elseif ($surgery_str == "breast implant removal") {
                        $meta_title = "Breast Implant Removal in $uc_city | Breast Surgery Cost";
                        $meta_description = "Top Plastic surgery clinic for Breast Implant Removal in $uc_city. Board certified surgeons to reshape and lift the breasts at an affordable cost.";
                    } elseif ($surgery_str == "breast implant revision") {
                        $meta_title = "Breast Implant Revision in $uc_city | Breast Surgery Cost";
                        $meta_description = "Top Plastic surgery clinic for Breast Implant Revision in $uc_city. Board certified surgeons to replace old breast implants with new implants.";
                    } elseif ($surgery_str == "gynecomastia") {
                        $meta_title = "Gynecomastia Surgeon in $uc_city | Male Breast Reduction Cost";
                        $meta_description = "Top Plastic surgery clinic for Gynecomastia in $uc_city. Board certified surgeons for Male Breast reduction at a reasonable cost.";
                    } elseif ($surgery_str == "liposuction") {
                        $meta_title = "Liposuction Surgeon in $uc_city | Fat Reduction Surgery Cost";
                        $meta_description = "Top Plastic surgery clinic for Liposuction in $uc_city. Board certified surgeons for extra fat removal process at a reasonable cost.";
                    } elseif ($surgery_str == "tummy tuck") {
                        $meta_title = "Tummy Tuck Surgeon in $uc_city | Abdominoplasty Surgery Cost";
                        $meta_description = "Top Plastic surgery clinic for Abdominoplasty in $uc_city. Board certified surgeons for affordable tummy tuck surgery treatment";
                    } elseif ($surgery_str == "buttock enhancement") {
                        $meta_title = "Buttock Augmentation Surgeon in $uc_city | Buttock Surgery Cost";
                        $meta_description = "Top Plastic surgery clinic for Buttock Augmentation in $uc_city. Board certified surgeons for affordable Butt implant";
                    } elseif ($surgery_str == "body lift") {
                        $meta_title = "Body Lift Surgeon in $uc_city | Body Contouring Surgery Cost";
                        $meta_description = "Top Plastic surgery clinic for Body Lift in $uc_city. Board certified surgeons for cost-effective saggy skin removal";
                    } elseif ($surgery_str == "arm lift") {
                        $meta_title = "Arm Lift Surgeon in $uc_city | Brachioplasty Surgery Cost";
                        $meta_description = "Top Plastic surgery clinic for Arm Lift in $uc_city. Board certified surgeons for arm lift and saggy arm skin removal";
                    } elseif ($surgery_str == "thigh lift") {
                        $meta_title = "Thigh Lift Surgeon in $uc_city | Thigh Reduction Surgery Cost";
                        $meta_description = "Top Plastic surgery clinic for Thigh Lift in $uc_city. Board certified surgeons for affordable saggy thigh skin removal";
                    } elseif ($surgery_str == "body contouring") {
                        $meta_title = "Body Contouring Surgeon in $uc_city | Body Contouring Cost";
                        $meta_description = "Top Plastic surgery clinic for Body Contouring in $uc_city. Board certified surgeons for cost-effective Body Contouring treatment";
                    } elseif ($surgery_str == "mommy makeover") {
                        $meta_title = "Mommy Makeover Surgeon in $uc_city | Post Pregnancy Surgery Cost";
                        $meta_description = "Top Plastic surgery clinic for Mommy Makeover in $uc_city. Board certified surgeons for affordable Mommy Makeover surgery treatments";
                    } elseif ($surgery_str == "hair transplant") {
                        $meta_title = "Hair Transplant Doctor $uc_city | Hair Transplant Surgery Cost";
                        $meta_description = "Top Plastic surgery clinic for Hair Transplant in $uc_city. Board certified surgeons for Hair Restoration Treatment";
                    } elseif ($surgery_str == "men and plastic surgery") {
                        $meta_title = "Men Plastic Surgery in $uc_city | Cosmetic Surgery Cost";
                        $meta_description = "Top Plastic surgery clinic for Men Plastic Surgery in $uc_city. Board certified surgeons for afforfable Male plastic surgery treatments";
                    } else {
                        $meta_title = "";
                        $meta_description = "";
                    }

                    $$module_name_singular = (object) array(
                        'meta_title' => $meta_title,
                        'meta_description' => $meta_description,
                        'meta_keywords' => "",
                        'name' => ucwords("The Most Skilled Plastic Surgeon for $uc_surgery_str in $uc_city"),
                    );
                } else {
                    $$module_name_singular = $module_model::where('slug', '=', $slug)->firstOrFail();
                    event(new PageViewed($$module_name_singular));

                    $template_view = "surgery_cost";
                    $city = "";
                    $surgery_str = "";
                }
            }
        } elseif (in_array($slug, $citiesArr)) {
            $city = ucwords($slug);
            $uc_city = ucwords($slug);
            $template_view = "city-temp";
            $surgery_str = "";
            $$module_name_singular = (object) array(
                'meta_title' => "Best Cosmetic Surgeon Clinic in" . " " . ucwords(str_replace("-", " ", $uc_city)) . " " . "| Plastic Surgery Cost",
                'meta_description' => "Top Plastic / Cosmetic Surgery Clinic in $uc_city. Book your consultation with the world-renowned board-certified plastic surgeons in $uc_city.",
                'meta_keywords' => "",
                'name' => "Find the best Plastic Surgeon in $uc_city",
            );
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
