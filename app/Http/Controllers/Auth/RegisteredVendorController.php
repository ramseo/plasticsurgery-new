<?php

namespace App\Http\Controllers\Auth;

use App\Events\Frontend\UserRegistered;
use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Vendor;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Flash;
class RegisteredVendorController extends Controller
{
    /**
     * Display the registration view.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('auth.vendor.register');
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
            'business_name' => 'required|string|max:191',
            'first_name' => 'required|string|max:191',
            'last_name'  => 'required|string|max:191',
            'email'      => 'required|string|email|max:191|unique:users',
            'password'   => 'required|string|confirmed|min:8',
            'city_id' => 'required',
            'type_id'  => 'required',
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
        $user->assignRole('vendor');

        $vendor_create =  [
            'business_name'=> $request->business_name,
            'slug' => '',
            'user_id' => $user->id,
            'type_id' => $request->type_id,
            'city_id' => $request->city_id
        ];
        Vendor::create($vendor_create);

//        Auth::login($user);

        event(new Registered($user));
//        event(new UserRegistered($user));
        Flash::success("<i class='fas fa-check'></i> Registered: Please verify you email id")->important();
        return redirect(route('login'));
    }

}
