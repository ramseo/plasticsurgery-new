<?php

namespace App\Http\Controllers;

use App\Authorizable;
use App\Http\Controllers\Controller;
use Carbon\Carbon;
use Flash;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Log;
use Yajra\DataTables\DataTables;
use App\Models\Newsletter;

class NewsletterController extends Controller
{

    use Authorizable;

    public function __construct(){

    }

    public function store(Request $request)
    {
        Newsletter::create($request->all());
        Flash::success("<i class='fas fa-check'></i> Newsletter subscribed successfully.")->important();
        return redirect("/");
    }
}
