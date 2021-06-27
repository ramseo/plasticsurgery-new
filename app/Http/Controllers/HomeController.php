<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{


    public function index()
    {
        return view('home');
    }

    public function vendor()
    {
        return view('vendor');
    }

    public function price()
    {
        return view('price');
    }

    public function clearCache()
    {
        \Artisan::call('cache:clear');
        return view('clear-cache');
    }
}
