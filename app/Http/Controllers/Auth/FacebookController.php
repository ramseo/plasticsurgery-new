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
        $user = Socialite::driver('facebook')->user();
        // dd($user);

        $data = User::where('email', $user->email)->first();
        if (is_null($data)) {
            $users['name'] = $user->name;
            $users['email'] = $user->email;
            $users['username'] = "facebook";
            $data = User::create($users);
        }
        // dd($data->toArray());

        Auth::login($data);
        return redirect('home');
    }
}
