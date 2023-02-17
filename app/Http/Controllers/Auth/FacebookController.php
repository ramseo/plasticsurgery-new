<?php

namespace App\Http\Controllers\Auth;

use App\Events\Frontend\UserRegistered;
use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\UserProvider;
use App\Providers\RouteServiceProvider;
use Auth;
use Log;
use Laravel\Socialite\Facades\Socialite;
use Session;

class FacebookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function provider()
    {
        return Socialite::driver('facebook')->redirect();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function handleCallback()
    {
        return Socialite::driver('facebook')->user();
        // $user = Socialite::driver('facebook')->user();
        // Auth::login($user);
        // return redirect('/');
    }
}
