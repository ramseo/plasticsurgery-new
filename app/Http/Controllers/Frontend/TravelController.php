<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Travel;

class TravelController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $travels = array();

        return view('frontend.travel.listing', compact('travels'));
    }

    public function detail($slug)
    {
        $travel = Travel::where('slug', '=', $slug)->firstOrFail();
        return view('frontend.travel.detail', compact('travel'));
    }

}
