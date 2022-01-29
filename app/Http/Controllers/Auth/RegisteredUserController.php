<?php

namespace App\Http\Controllers\Auth;

use App\Events\Frontend\UserRegistered;
use App\Http\Controllers\Controller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\Userprofile;
use Flash;
class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('auth.register');
    }

    /**
     * Handle an incoming registration request.
     *
     * @param \App\Http\Requests\LoginRequest $request
     *
     * @throws \Illuminate\Validation\ValidationException
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        $request->validate([
            'first_name' => 'required|string|max:191',
            'last_name'  => 'required|string|max:191',
            'email'      => 'required|string|email|max:191|unique:users',
            'password'   => 'required|string|confirmed|min:8',
            'g-recaptcha-response' => 'required|recaptchav3:register,0.5',
        ]);

        $user = User::create([
            'first_name' => $request->first_name,
            'last_name'  => $request->last_name,
            'name'       => $request->first_name.' '.$request->last_name,
            'email'      => $request->email,
            'password'   => Hash::make($request->password),
        ]);

        // username
        $username = config('app.initial_username') + $user->id;
        $user->username = $username;
        $user->save();
        $user->assignRole('user');

        $profile_create =  [
            'first_name' => $request->first_name,
            'last_name'  => $request->last_name,
            'name'       => $request->first_name.' '.$request->last_name,
            'email'      => $request->email,
        ];
        Userprofile::create($profile_create);
        Auth::login($user);

        event(new Registered($user));
        // event(new UserRegistered($user));
//        Flash::success("<i class='fas fa-check'></i> Registered: Please verify you email id")->important();
        return redirect(RouteServiceProvider::HOME);
//        return redirect(route('login'));
    }

//    public function vendorSignup(){
//        return view('auth.vendor-signup');
//    }
}
