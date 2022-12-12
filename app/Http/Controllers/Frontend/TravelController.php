<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Travel;
use DB;
use Illuminate\Http\Request;

// new

class TravelController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $body_class = '';
        $travel_total = DB::table('travel')->get()->count();
        return view('frontend.travel.listing', compact('body_class', 'travel_total'));
    }


    public function indexAjax(Request $request)
    {
        
        $travels = DB::table('travel')->paginate(6);
        $view = view('frontend.travel.ajax',compact('travels'))->render();
        return response()->json(['html'=>$view]);
    }

    


    public function detail($slug)
    {
        $travel = Travel::where('slug', '=', $slug)->firstOrFail();
        $related_travels = Travel::inRandomOrder()->limit(3)->get();
        return view('frontend.travel.detail', compact('travel','related_travels'));
    }

}
