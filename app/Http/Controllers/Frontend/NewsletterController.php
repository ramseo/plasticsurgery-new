<?php

namespace App\Http\Controllers\Frontend;

use App\Authorizable;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Str;
use App\Models\Newsletter;
use Validator;

class NewsletterController extends Controller
{
    public function __construct(){

    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|email',
        ]);

        if ($validator->passes()) {
            $newsletter = new Newsletter;
            $newsletter->email = $request->email;
            $newsletter->save();
            return response()->json(['success' => true, 'message' => 'Blog updates subscribed successfully!']);
        }
        
        return response()->json(['success' => false, 'message' => $validator->errors()->all()[0]]);
    }
}
