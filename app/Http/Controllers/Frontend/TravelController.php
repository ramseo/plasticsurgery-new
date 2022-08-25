<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;

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

  
}
